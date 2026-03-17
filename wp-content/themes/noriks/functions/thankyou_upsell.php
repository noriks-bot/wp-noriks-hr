<?php
/**
 * Thank You — Post-Purchase Upsell System
 * 
 * - COD orders only: upsell popup shown
 * - COD orders go to "primary-hold" for 5 min (upsell window), then auto → processing
 * - Non-COD orders: no upsell, normal flow (processing/completed)
 * - 50% off SALE price, server-side calculated
 * - Metadata: _noriks_upsell = "thank you upsell"
 */
if ( ! defined( 'ABSPATH' ) ) exit;


// ─── 1. Register custom order status "primary-hold" ─────────────────────

add_action( 'init', 'noriks_register_primary_hold_status' );
function noriks_register_primary_hold_status() {
    register_post_status( 'wc-primary-hold', array(
        'label'                     => 'Primary Hold',
        'public'                    => true,
        'exclude_from_search'       => false,
        'show_in_admin_all_list'    => true,
        'show_in_admin_status_list' => true,
        'label_count'               => _n_noop( 'Primary Hold <span class="count">(%s)</span>', 'Primary Hold <span class="count">(%s)</span>' ),
    ));
}

// Add to WC status list
add_filter( 'wc_order_statuses', 'noriks_add_primary_hold_to_statuses' );
function noriks_add_primary_hold_to_statuses( $statuses ) {
    $statuses['wc-primary-hold'] = 'Primary Hold';
    return $statuses;
}


// ─── 2. COD orders → primary-hold (instead of processing) ───────────────

add_action( 'woocommerce_thankyou', 'noriks_set_cod_primary_hold', 1 );
function noriks_set_cod_primary_hold( $order_id ) {
    if ( ! $order_id ) return;
    $order = wc_get_order( $order_id );
    if ( ! $order ) return;

    // Only COD orders
    if ( $order->get_payment_method() !== 'cod' ) return;

    // Only if currently on-hold or processing (fresh order)
    $status = $order->get_status();
    if ( ! in_array( $status, array( 'on-hold', 'processing', 'pending' ) ) ) return;

    // Don't re-apply if already in primary-hold
    if ( $status === 'primary-hold' ) return;

    $order->update_status( 'primary-hold', 'Upsell window: 5 min hold for post-purchase offers.' );

    // Schedule auto-transition to processing after 5 minutes
    if ( ! wp_next_scheduled( 'noriks_primary_hold_to_processing', array( $order_id ) ) ) {
        wp_schedule_single_event( time() + 300, 'noriks_primary_hold_to_processing', array( $order_id ) );
    }
}

// Auto-transition: primary-hold → processing after 5 min
add_action( 'noriks_primary_hold_to_processing', 'noriks_transition_to_processing' );
function noriks_transition_to_processing( $order_id ) {
    $order = wc_get_order( $order_id );
    if ( ! $order ) return;

    // Only transition if still in primary-hold
    if ( $order->get_status() !== 'primary-hold' ) return;

    $order->update_status( 'processing', 'Upsell window expired — auto-transitioned to processing.' );
}


// ─── FAILSAFE: sweep stuck primary-hold orders on every page load ────────
// wp_cron depends on page visits — this catches any orders that slipped through

add_action( 'init', 'noriks_failsafe_primary_hold_sweep' );
function noriks_failsafe_primary_hold_sweep() {
    // Only run once per minute (transient lock)
    if ( get_transient( 'noriks_ph_sweep_lock' ) ) return;
    set_transient( 'noriks_ph_sweep_lock', 1, 60 );

    $orders = wc_get_orders( array(
        'status'     => 'primary-hold',
        'limit'      => 20,
        'date_created' => '<' . ( time() - 300 ), // older than 5 min
    ));

    foreach ( $orders as $order ) {
        $order->update_status( 'processing', 'Failsafe: primary-hold exceeded 5 min — auto-moved to processing.' );
    }
}


// ─── FAILSAFE 2: WooCommerce order list hook (catches admin visits) ──────

add_action( 'woocommerce_order_list_table_prepare_items_query_args', 'noriks_failsafe_on_admin_orders' );
add_action( 'woocommerce_before_order_object_save', 'noriks_failsafe_on_order_save' );

function noriks_failsafe_on_admin_orders( $args ) {
    noriks_failsafe_primary_hold_sweep();
    return $args;
}

function noriks_failsafe_on_order_save( $order ) {
    // When any order is saved, also check for stuck primary-holds
    if ( $order->get_status() === 'primary-hold' ) {
        $created = $order->get_date_created();
        if ( $created && ( time() - $created->getTimestamp() ) > 300 ) {
            $order->set_status( 'processing' );
            $order->add_order_note( 'Failsafe: primary-hold auto-resolved on save.' );
        }
    }
}


// ─── 3. AJAX: Add upsell product to order ───────────────────────────────

add_action( 'wp_ajax_noriks_add_upsell', 'noriks_handle_add_upsell' );
add_action( 'wp_ajax_nopriv_noriks_add_upsell', 'noriks_handle_add_upsell' );

function noriks_handle_add_upsell() {
    $order_id     = absint( $_POST['order_id'] ?? 0 );
    $product_id   = absint( $_POST['product_id'] ?? 0 );
    $variation_id = absint( $_POST['variation_id'] ?? 0 );
    $nonce        = $_POST['nonce'] ?? '';

    if ( ! wp_verify_nonce( $nonce, 'noriks_upsell_' . $order_id ) ) {
        wp_send_json_error( 'Nevažeći zahtjev' );
    }

    $order = wc_get_order( $order_id );
    if ( ! $order ) wp_send_json_error( 'Narudžba nije pronađena' );

    // Only allow upsell on COD orders in primary-hold
    if ( $order->get_payment_method() !== 'cod' ) {
        wp_send_json_error( 'Upsell dostupan samo za plaćanje pouzećem' );
    }
    if ( $order->get_status() !== 'primary-hold' ) {
        wp_send_json_error( 'Vrijeme za dodavanje je isteklo' );
    }

    // Time limit: 5 min from order creation (safety check)
    $created = $order->get_date_created();
    if ( $created && ( time() - $created->getTimestamp() ) > 330 ) { // 5.5 min grace
        wp_send_json_error( 'Vrijeme za dodavanje je isteklo' );
    }

    // Get the actual product (variation or simple)
    $product = $variation_id ? wc_get_product( $variation_id ) : wc_get_product( $product_id );
    if ( ! $product ) wp_send_json_error( 'Proizvod nije pronađen' );

    // Duplicate check
    $check_product_id = $variation_id ? $product_id : $product->get_id();
    foreach ( $order->get_items() as $item ) {
        $item_product_id = $item->get_product_id();
        $item_variation_id = $item->get_variation_id();
        if ( $item_product_id == $check_product_id || ( $variation_id && $item_variation_id == $variation_id ) ) {
            if ( $item->get_meta( '_noriks_upsell' ) ) {
                wp_send_json_error( 'Već ste dodali ovaj proizvod' );
            }
        }
    }

    // ─── Calculate 50% off SALE price ───
    $sale_price = (float) $product->get_sale_price();
    $current_price = (float) $product->get_price();

    if ( $sale_price && $current_price ) {
        $active_price = min( $sale_price, $current_price );
    } else {
        $active_price = $current_price ?: $sale_price;
    }

    if ( ! $active_price ) {
        $active_price = (float) $product->get_regular_price();
    }
    if ( ! $active_price ) {
        wp_send_json_error( 'Cijena proizvoda nije dostupna' );
    }

    $upsell_price = round( $active_price * 0.5, 2 );

    // Add to order
    $item_id = $order->add_product( $product, 1, array(
        'subtotal' => $upsell_price,
        'total'    => $upsell_price,
    ));

    if ( ! $item_id ) wp_send_json_error( 'Greška pri dodavanju' );

    // Mark as upsell
    $item = $order->get_item( $item_id );
    $item->add_meta_data( '_noriks_upsell', 'thank you upsell', true );
    $item->save();

    $order->calculate_totals();
    $order->save();

    $order->add_order_note(
        sprintf(
            'Thank you upsell: %s dodano s 50%% popustom — akcijska cijena: %s, upsell cijena: %s',
            $product->get_name(),
            wc_price( $active_price ),
            wc_price( $upsell_price )
        )
    );

    wp_send_json_success( array(
        'message'      => 'Dodano',
        'product_name' => $product->get_name(),
        'upsell_price' => $upsell_price,
        'total'        => $order->get_formatted_order_total(),
    ));
}
