<?php
/**
 * Thank You Page — Post-Purchase Upsell AJAX Handler
 * Adds products to existing order when customer clicks upsell cards.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'wp_ajax_noriks_add_upsell', 'noriks_handle_add_upsell' );
add_action( 'wp_ajax_nopriv_noriks_add_upsell', 'noriks_handle_add_upsell' );

function noriks_handle_add_upsell() {
    $order_id   = isset( $_POST['order_id'] )   ? absint( $_POST['order_id'] )   : 0;
    $product_id = isset( $_POST['product_id'] ) ? absint( $_POST['product_id'] ) : 0;
    $size       = isset( $_POST['size'] )       ? sanitize_text_field( $_POST['size'] ) : '';
    $nonce      = isset( $_POST['nonce'] )      ? $_POST['nonce'] : '';

    if ( ! wp_verify_nonce( $nonce, 'noriks_upsell_' . $order_id ) ) {
        wp_send_json_error( 'Nevažeći zahtjev' );
    }

    $order = wc_get_order( $order_id );
    if ( ! $order ) {
        wp_send_json_error( 'Narudžba nije pronađena' );
    }

    // Time limit: 10 minutes (5 min timer + buffer)
    $created = $order->get_date_created();
    if ( $created ) {
        $age = ( time() - $created->getTimestamp() ) / 60;
        if ( $age > 10 ) {
            wp_send_json_error( 'Vrijeme za dodavanje je isteklo' );
        }
    }

    // Allowed product IDs for upsell (security)
    $allowed = array( 2781, 2890, 4983, 250, 605, 4410 );
    if ( ! in_array( $product_id, $allowed ) ) {
        wp_send_json_error( 'Proizvod nije dopušten' );
    }

    $product = wc_get_product( $product_id );
    if ( ! $product ) {
        wp_send_json_error( 'Proizvod nije pronađen' );
    }

    // For variable products, find variation matching customer's size
    $variation_id = 0;
    if ( $product->is_type( 'variable' ) ) {
        $variations = $product->get_available_variations();
        // Try to match customer's size, fallback to first available
        foreach ( $variations as $v ) {
            foreach ( $v['attributes'] as $attr_key => $attr_val ) {
                if ( strtolower( $attr_val ) === strtolower( $size ) ) {
                    $variation_id = $v['variation_id'];
                    break 2;
                }
            }
        }
        // Fallback: use M if no match, then first available
        if ( ! $variation_id ) {
            foreach ( $variations as $v ) {
                foreach ( $v['attributes'] as $attr_key => $attr_val ) {
                    if ( strtolower( $attr_val ) === 'm' ) {
                        $variation_id = $v['variation_id'];
                        break 2;
                    }
                }
            }
        }
        if ( ! $variation_id && ! empty( $variations ) ) {
            $variation_id = $variations[0]['variation_id'];
        }
        if ( ! $variation_id ) {
            wp_send_json_error( 'Nema dostupnih varijacija' );
        }
        $product = wc_get_product( $variation_id );
        if ( ! $product ) {
            wp_send_json_error( 'Varijacija nije pronađena' );
        }
    }

    // Add to order
    $item_id = $order->add_product( $product, 1 );
    if ( ! $item_id ) {
        wp_send_json_error( 'Greška pri dodavanju' );
    }

    $order->calculate_totals();
    $order->save();

    $order->add_order_note(
        sprintf( 'Post-purchase upsell: %s (ID %d)', $product->get_name(), $product->get_id() )
    );

    wp_send_json_success( array(
        'message' => 'Dodano',
        'total'   => $order->get_formatted_order_total(),
    ));
}
