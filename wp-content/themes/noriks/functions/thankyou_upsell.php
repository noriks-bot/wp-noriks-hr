<?php
/**
 * Thank You — Post-Purchase Upsell AJAX
 * Adds a product (with 50% discount) to an existing order.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'wp_ajax_noriks_add_upsell', 'noriks_handle_add_upsell' );
add_action( 'wp_ajax_nopriv_noriks_add_upsell', 'noriks_handle_add_upsell' );

function noriks_handle_add_upsell() {
    $order_id     = absint( $_POST['order_id'] ?? 0 );
    $product_id   = absint( $_POST['product_id'] ?? 0 );
    $variation_id = absint( $_POST['variation_id'] ?? 0 );
    $sale_price   = floatval( $_POST['sale_price'] ?? 0 );
    $nonce        = $_POST['nonce'] ?? '';

    if ( ! wp_verify_nonce( $nonce, 'noriks_upsell_' . $order_id ) ) {
        wp_send_json_error( 'Nevažeći zahtjev' );
    }

    $order = wc_get_order( $order_id );
    if ( ! $order ) wp_send_json_error( 'Narudžba nije pronađena' );

    // Time limit: 10 min
    $created = $order->get_date_created();
    if ( $created && ( time() - $created->getTimestamp() ) > 600 ) {
        wp_send_json_error( 'Vrijeme za dodavanje je isteklo' );
    }

    // Check if upsell was already added
    foreach ( $order->get_items() as $item ) {
        $item_product_id = $item->get_product_id();
        if ( $item_product_id == $product_id ) {
            $meta = $item->get_meta( '_noriks_upsell' );
            if ( $meta ) {
                wp_send_json_error( 'Već ste dodali ovaj proizvod' );
            }
        }
    }

    // Get product
    $product = $variation_id ? wc_get_product( $variation_id ) : wc_get_product( $product_id );
    if ( ! $product ) wp_send_json_error( 'Proizvod nije pronađen' );

    // Add to order with discounted price
    $item_id = $order->add_product( $product, 1, array(
        'subtotal' => $sale_price,
        'total'    => $sale_price,
    ));

    if ( ! $item_id ) wp_send_json_error( 'Greška pri dodavanju' );

    // Mark as upsell
    $item = $order->get_item( $item_id );
    $item->add_meta_data( '_noriks_upsell', '1', true );
    $item->add_meta_data( '_noriks_upsell_discount', '50%', true );
    $item->save();

    $order->calculate_totals();
    $order->save();

    $order->add_order_note(
        sprintf( 'Post-purchase upsell (50%% popust): %s — %.2f€', $product->get_name(), $sale_price )
    );

    wp_send_json_success( array(
        'message' => 'Dodano',
        'total'   => $order->get_formatted_order_total(),
    ));
}
