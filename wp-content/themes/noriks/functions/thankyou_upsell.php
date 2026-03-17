<?php
/**
 * Thank You — Post-Purchase Upsell AJAX
 * Adds a product (with 50% discount) to an existing order.
 * 
 * Price is calculated SERVER-SIDE (50% of regular price) — never trusts client-sent price.
 * Metadata '_noriks_upsell' = 'thank you upsell' marks items from this flow.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

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

    // Time limit: 10 min from order creation
    $created = $order->get_date_created();
    if ( $created && ( time() - $created->getTimestamp() ) > 600 ) {
        wp_send_json_error( 'Vrijeme za dodavanje je isteklo' );
    }

    // Get the actual product (variation or simple)
    $product = $variation_id ? wc_get_product( $variation_id ) : wc_get_product( $product_id );
    if ( ! $product ) wp_send_json_error( 'Proizvod nije pronađen' );

    // For variations, also need the parent product ID for duplicate check
    $check_product_id = $variation_id ? $product_id : $product->get_id();

    // Check if this product was already added as upsell
    foreach ( $order->get_items() as $item ) {
        $item_product_id = $item->get_product_id();
        $item_variation_id = $item->get_variation_id();
        if ( $item_product_id == $check_product_id || $item_variation_id == $variation_id ) {
            $meta = $item->get_meta( '_noriks_upsell' );
            if ( $meta ) {
                wp_send_json_error( 'Već ste dodali ovaj proizvod' );
            }
        }
    }

    // ─── Calculate 50% discount SERVER-SIDE ───
    // Use the LOWEST of sale price / active price
    $sale_price = (float) $product->get_sale_price();
    $current_price = (float) $product->get_price();
    
    // Pick whichever is lower (and non-zero)
    if ( $sale_price && $current_price ) {
        $active_price = min( $sale_price, $current_price );
    } else {
        $active_price = $current_price ?: $sale_price;
    }
    
    // Fallback to regular price if nothing else
    if ( ! $active_price ) {
        $active_price = (float) $product->get_regular_price();
    }
    if ( ! $active_price ) {
        wp_send_json_error( 'Cijena proizvoda nije dostupna' );
    }

    // Apply 50% discount on the sale/active price
    $upsell_price = round( $active_price * 0.5, 2 );

    // Add product to order with the discounted price
    $item_id = $order->add_product( $product, 1, array(
        'subtotal' => $upsell_price,
        'total'    => $upsell_price,
    ));

    if ( ! $item_id ) wp_send_json_error( 'Greška pri dodavanju' );

    // Mark as upsell
    $item = $order->get_item( $item_id );
    $item->add_meta_data( '_noriks_upsell', 'thank you upsell', true );
    $item->save();

    // Recalculate order totals
    $order->calculate_totals();
    $order->save();

    // Add order note for admin visibility
    $order->add_order_note(
        sprintf(
            'Thank you upsell: %s dodano s 50%% popustom — akcijska cijena: %s, upsell cijena: %s',
            $product->get_name(),
            wc_price( $active_price ),
            wc_price( $upsell_price )
        )
    );

    wp_send_json_success( array(
        'message'        => 'Dodano',
        'product_name'   => $product->get_name(),
        'original_price' => $regular_price,
        'upsell_price'   => $upsell_price,
        'total'          => $order->get_formatted_order_total(),
    ));
}
