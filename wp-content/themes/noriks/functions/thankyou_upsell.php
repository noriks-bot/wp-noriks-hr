<?php
/**
 * Thank You Page — Post-Purchase Upsell AJAX Handler
 *
 * Adds products to an existing order when customer clicks upsell cards.
 * Uses wc_get_order() + $order->add_product() to append items.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * AJAX handler — add upsell product to existing order
 * Handles both logged-in and guest (nopriv) customers
 */
add_action( 'wp_ajax_noriks_add_upsell', 'noriks_handle_add_upsell' );
add_action( 'wp_ajax_nopriv_noriks_add_upsell', 'noriks_handle_add_upsell' );

function noriks_handle_add_upsell() {
    $order_id = isset( $_POST['order_id'] ) ? absint( $_POST['order_id'] ) : 0;
    $slug     = isset( $_POST['upsell_slug'] ) ? sanitize_text_field( $_POST['upsell_slug'] ) : '';
    $nonce    = isset( $_POST['nonce'] ) ? $_POST['nonce'] : '';

    // Verify nonce
    if ( ! wp_verify_nonce( $nonce, 'noriks_upsell_' . $order_id ) ) {
        wp_send_json_error( 'Nevažeći zahtjev' );
    }

    // Get order
    $order = wc_get_order( $order_id );
    if ( ! $order ) {
        wp_send_json_error( 'Narudžba nije pronađena' );
    }

    // Check order is recent (within 10 minutes — 5 min timer + buffer)
    $created = $order->get_date_created();
    if ( $created ) {
        $age_minutes = ( time() - $created->getTimestamp() ) / 60;
        if ( $age_minutes > 10 ) {
            wp_send_json_error( 'Vrijeme za dodavanje je isteklo' );
        }
    }

    // Map upsell slugs to products
    // TODO: Configure these product IDs for devhr.noriks.com
    $upsell_map = apply_filters( 'noriks_upsell_product_map', array(
        '1-bokserica'  => array( 'product_id' => 0, 'qty' => 1 ),
        '3-bokserice'  => array( 'product_id' => 0, 'qty' => 3 ),
        '6-bokseric'   => array( 'product_id' => 0, 'qty' => 6 ),
        '1-majica'     => array( 'product_id' => 0, 'qty' => 1 ),
        '3-majice'     => array( 'product_id' => 0, 'qty' => 3 ),
        '6-majic'      => array( 'product_id' => 0, 'qty' => 6 ),
    ));

    if ( ! isset( $upsell_map[ $slug ] ) ) {
        wp_send_json_error( 'Nepoznati proizvod' );
    }

    $upsell = $upsell_map[ $slug ];

    if ( empty( $upsell['product_id'] ) ) {
        wp_send_json_error( 'Proizvod još nije konfiguriran' );
    }

    $product = wc_get_product( $upsell['product_id'] );
    if ( ! $product ) {
        wp_send_json_error( 'Proizvod nije pronađen' );
    }

    // Add product to order
    $item_id = $order->add_product( $product, $upsell['qty'] );
    if ( ! $item_id ) {
        wp_send_json_error( 'Greška pri dodavanju' );
    }

    // Recalculate totals
    $order->calculate_totals();
    $order->save();

    // Add order note
    $order->add_order_note(
        sprintf( 'Post-purchase upsell: dodano %d× %s', $upsell['qty'], $product->get_name() )
    );

    wp_send_json_success( array(
        'message' => 'Dodano',
        'total'   => $order->get_formatted_order_total(),
        'item_id' => $item_id,
    ));
}
