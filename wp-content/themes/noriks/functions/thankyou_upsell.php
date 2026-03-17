<?php
/**
 * Thank You — Post-Purchase Upsell System
 * 
 * SAFE: All hooks are guarded to NEVER interfere with checkout.
 * register_post_status + wc_order_statuses run only after WC is loaded.
 * Failsafe sweep only runs in admin/AJAX.
 * All AJAX endpoints are isolated.
 */
if ( ! defined( 'ABSPATH' ) ) exit;


// ─── 1. Register custom order status "primary-hold" ─────────────────────
// Uses woocommerce_register_shop_order_post_statuses (safe, WC-specific)

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

// Add to WC status dropdown — ONLY in admin, not on frontend
add_filter( 'wc_order_statuses', 'noriks_add_primary_hold_to_statuses' );
function noriks_add_primary_hold_to_statuses( $statuses ) {
    // Safety: only add if not during checkout AJAX
    if ( defined( 'WOOCOMMERCE_CHECKOUT' ) ) return $statuses;
    $statuses['wc-primary-hold'] = 'Primary Hold';
    return $statuses;
}


// ─── 2. COD orders → primary-hold ONLY on thank you page ────────────────

add_action( 'woocommerce_thankyou', 'noriks_set_cod_primary_hold', 1 );
function noriks_set_cod_primary_hold( $order_id ) {
    if ( ! $order_id ) return;
    
    $order = wc_get_order( $order_id );
    if ( ! $order ) return;

    // Only COD orders
    if ( $order->get_payment_method() !== 'cod' ) return;

    // Only fresh orders
    $status = $order->get_status();
    if ( ! in_array( $status, array( 'on-hold', 'processing', 'pending' ) ) ) return;
    if ( $status === 'primary-hold' ) return;

    $order->update_status( 'primary-hold', 'Upsell window: 5 min hold for post-purchase offers.' );

    // Schedule auto-transition to processing after 5 minutes
    if ( ! wp_next_scheduled( 'noriks_primary_hold_to_processing', array( $order_id ) ) ) {
        wp_schedule_single_event( time() + 300, 'noriks_primary_hold_to_processing', array( $order_id ) );
    }
}

// Auto-transition cron callback
add_action( 'noriks_primary_hold_to_processing', 'noriks_transition_to_processing' );
function noriks_transition_to_processing( $order_id ) {
    $order = wc_get_order( $order_id );
    if ( ! $order ) return;
    if ( $order->get_status() !== 'primary-hold' ) return;
    $order->update_status( 'processing', 'Upsell window expired — auto-transitioned to processing.' );
}


// ─── FAILSAFE: sweep stuck orders — ADMIN ONLY ──────────────────────────

add_action( 'admin_init', 'noriks_failsafe_primary_hold_sweep' );
function noriks_failsafe_primary_hold_sweep() {
    if ( get_transient( 'noriks_ph_sweep_lock' ) ) return;
    set_transient( 'noriks_ph_sweep_lock', 1, 60 );

    if ( ! function_exists( 'wc_get_orders' ) ) return;

    $orders = wc_get_orders( array(
        'status'       => 'primary-hold',
        'limit'        => 20,
        'date_created' => '<' . ( time() - 300 ),
    ));

    foreach ( $orders as $order ) {
        $order->update_status( 'processing', 'Failsafe: primary-hold exceeded 5 min.' );
    }
}


// ─── 3. AJAX: Release primary-hold ──────────────────────────────────────

add_action( 'wp_ajax_noriks_release_primary_hold', 'noriks_release_primary_hold' );
add_action( 'wp_ajax_nopriv_noriks_release_primary_hold', 'noriks_release_primary_hold' );

function noriks_release_primary_hold() {
    $order_id = absint( $_POST['order_id'] ?? 0 );
    if ( ! $order_id ) wp_send_json_error( 'Missing order_id' );

    $order = wc_get_order( $order_id );
    if ( ! $order ) wp_send_json_error( 'Order not found' );
    if ( $order->get_status() !== 'primary-hold' ) wp_send_json_success( 'Already released' );

    $order->update_status( 'processing', 'Released from primary-hold (timer expired on client).' );
    wp_send_json_success( 'Released to processing' );
}


// ─── 4. AJAX: Refresh order items HTML ──────────────────────────────────

add_action( 'wp_ajax_noriks_refresh_order_items', 'noriks_refresh_order_items' );
add_action( 'wp_ajax_nopriv_noriks_refresh_order_items', 'noriks_refresh_order_items' );

function noriks_refresh_order_items() {
    $order_id = absint( $_POST['order_id'] ?? 0 );
    if ( ! $order_id ) wp_send_json_error( 'Missing order_id' );

    $order = wc_get_order( $order_id );
    if ( ! $order ) wp_send_json_error( 'Order not found' );

    $items_html = '';
    foreach ( $order->get_items() as $item ) {
        $qty = $item->get_quantity();
        $meta_parts = array();
        foreach ( $item->get_formatted_meta_data( '_', true ) as $m ) {
            $meta_parts[] = wp_strip_all_tags( $m->display_key . ': ' . $m->display_value );
        }
        $is_upsell = $item->get_meta( '_noriks_upsell' ) === 'thank you upsell';
        $items_html .= '<div class="ty-item">';
        $items_html .= '<div>';
        $items_html .= '<div class="ty-item-name">' . $qty . '× ' . esc_html( $item->get_name() ) . '</div>';
        if ( $meta_parts ) {
            $items_html .= '<div class="ty-item-meta">' . esc_html( implode( ', ', $meta_parts ) ) . '</div>';
        }
        $items_html .= '</div>';
        $items_html .= '<div style="display:flex;align-items:center;gap:8px;">';
        $items_html .= '<div class="ty-item-price">' . $order->get_formatted_line_subtotal( $item ) . '</div>';
        if ( $is_upsell && $order->get_status() === 'primary-hold' ) {
            $items_html .= '<button class="ty-upsell-remove" data-item-id="' . $item->get_id() . '" data-order-id="' . $order_id . '" onclick="removeUpsellItem(this)" style="width:22px;height:22px;border-radius:50%;background:#971b1b;color:#fff;border:none;font-size:13px;font-weight:700;cursor:pointer;display:flex;align-items:center;justify-content:center;padding:0;line-height:1;flex-shrink:0;">✕</button>';
        }
        $items_html .= '</div>';
        $items_html .= '</div>';
    }

    $totals_html = '<div class="ty-totals">';
    foreach ( $order->get_order_item_totals() as $key => $total ) {
        $class = $key === 'order_total' ? 'ty-row ty-total-final' : 'ty-row';
        $totals_html .= '<div class="' . $class . '">';
        $totals_html .= '<span class="ty-row-label">' . $total['label'] . '</span>';
        $totals_html .= '<span class="ty-row-value">' . $total['value'] . '</span>';
        $totals_html .= '</div>';
    }
    $totals_html .= '</div>';

    wp_send_json_success( array(
        'items_html'  => $items_html . $totals_html,
        'item_count'  => $order->get_item_count(),
        'total'       => $order->get_formatted_order_total(),
    ));
}


// ─── 5. AJAX: Remove upsell item ────────────────────────────────────────

add_action( 'wp_ajax_noriks_remove_upsell', 'noriks_remove_upsell' );
add_action( 'wp_ajax_nopriv_noriks_remove_upsell', 'noriks_remove_upsell' );

function noriks_remove_upsell() {
    $order_id = absint( $_POST['order_id'] ?? 0 );
    $item_id  = absint( $_POST['item_id'] ?? 0 );
    if ( ! $order_id || ! $item_id ) wp_send_json_error( 'Missing data' );

    $order = wc_get_order( $order_id );
    if ( ! $order ) wp_send_json_error( 'Order not found' );

    $item = $order->get_item( $item_id );
    if ( ! $item ) wp_send_json_error( 'Item not found' );

    if ( $item->get_meta( '_noriks_upsell' ) !== 'thank you upsell' ) {
        wp_send_json_error( 'Samo upsell proizvode je moguće ukloniti' );
    }

    if ( $order->get_status() !== 'primary-hold' ) {
        wp_send_json_error( 'Vrijeme za izmjene je isteklo' );
    }

    $product_name = $item->get_name();
    $order->remove_item( $item_id );
    $order->calculate_totals();
    $order->save();

    $order->add_order_note( sprintf( 'Upsell uklonjen: %s', $product_name ) );

    wp_send_json_success( array( 'message' => 'Uklonjeno' ) );
}


// ─── 6. AJAX: Add upsell product ────────────────────────────────────────

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

    if ( $order->get_payment_method() !== 'cod' ) {
        wp_send_json_error( 'Upsell dostupan samo za plaćanje pouzećem' );
    }
    if ( $order->get_status() !== 'primary-hold' ) {
        wp_send_json_error( 'Vrijeme za dodavanje je isteklo' );
    }

    $created = $order->get_date_created();
    if ( $created && ( time() - $created->getTimestamp() ) > 330 ) {
        wp_send_json_error( 'Vrijeme za dodavanje je isteklo' );
    }

    $product = $variation_id ? wc_get_product( $variation_id ) : wc_get_product( $product_id );
    if ( ! $product ) wp_send_json_error( 'Proizvod nije pronađen' );

    // Duplicate check
    $check_product_id = $variation_id ? $product_id : $product->get_id();
    foreach ( $order->get_items() as $item ) {
        if ( $item->get_product_id() == $check_product_id || ( $variation_id && $item->get_variation_id() == $variation_id ) ) {
            if ( $item->get_meta( '_noriks_upsell' ) ) {
                wp_send_json_error( 'Već ste dodali ovaj proizvod' );
            }
        }
    }

    // 50% off sale price, rounded to .99/.49
    $sale_price = (float) $product->get_sale_price();
    $current_price = (float) $product->get_price();
    $active_price = ( $sale_price && $current_price ) ? min( $sale_price, $current_price ) : ( $current_price ?: $sale_price );
    if ( ! $active_price ) $active_price = (float) $product->get_regular_price();
    if ( ! $active_price ) wp_send_json_error( 'Cijena proizvoda nije dostupna' );

    $raw = $active_price * 0.5;
    $floor = floor( $raw );
    $upsell_price = ( $raw - $floor >= 0.50 ) ? $floor + 0.99 : $floor + 0.49;
    if ( $upsell_price <= 0 ) $upsell_price = 0.99;

    $item_id = $order->add_product( $product, 1, array(
        'subtotal' => $upsell_price,
        'total'    => $upsell_price,
    ));

    if ( ! $item_id ) wp_send_json_error( 'Greška pri dodavanju' );

    $item = $order->get_item( $item_id );
    $item->add_meta_data( '_noriks_upsell', 'thank you upsell', true );
    $item->save();

    $order->calculate_totals();
    $order->save();

    $order->add_order_note(
        sprintf( 'Thank you upsell: %s — cijena: %s', $product->get_name(), wc_price( $upsell_price ) )
    );

    wp_send_json_success( array(
        'message'      => 'Dodano',
        'product_name' => $product->get_name(),
        'upsell_price' => $upsell_price,
        'total'        => $order->get_formatted_order_total(),
    ));
}
