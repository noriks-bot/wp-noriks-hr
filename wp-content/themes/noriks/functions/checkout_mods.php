<?php
/**
 * Checkout Modifications — Field ordering, labels, style dequeue
 * Matches vigoshop.hr/dovrsite-kupnju/ field structure
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * NUCLEAR STYLE DEQUEUE — Remove ALL styles on checkout except ours
 */
add_action( 'wp_enqueue_scripts', function() {
    if ( ! is_checkout() ) return;

    // Our checkout CSS
    wp_enqueue_style( 'noriks-checkout', get_stylesheet_directory_uri() . '/css/checkout.css', array(), filemtime( get_stylesheet_directory() . '/css/checkout.css' ) );

    // Dequeue everything else
    global $wp_styles;
    if ( ! empty( $wp_styles->registered ) ) {
        $keep = array( 'noriks-checkout', 'admin-bar', 'dashicons', 'wp-block-library', 'select2' );
        foreach ( $wp_styles->registered as $handle => $style ) {
            if ( ! in_array( $handle, $keep, true ) ) {
                wp_deregister_style( $handle );
            }
        }
    }
}, 9999 );

/**
 * Field ordering & labels — match vigoshop.hr HR layout
 */
add_filter( 'woocommerce_checkout_fields', function( $fields ) {
    // Field order
    $fields['billing']['billing_first_name']['priority'] = 30;
    $fields['billing']['billing_last_name']['priority']  = 40;
    $fields['billing']['billing_address_1']['priority']  = 50;
    $fields['billing']['billing_address_2']['priority']  = 60;
    $fields['billing']['billing_postcode']['priority']   = 70;
    $fields['billing']['billing_city']['priority']       = 80;
    $fields['billing']['billing_phone']['priority']      = 85;
    $fields['billing']['billing_email']['priority']      = 86;

    // Labels — Croatian
    $fields['billing']['billing_first_name']['label']       = 'Ime';
    $fields['billing']['billing_first_name']['placeholder'] = 'Ime';
    $fields['billing']['billing_last_name']['label']        = 'Prezime';
    $fields['billing']['billing_last_name']['placeholder']  = 'Prezime';
    $fields['billing']['billing_address_1']['label']        = 'Ulica';
    $fields['billing']['billing_address_1']['placeholder']  = 'Ulica';
    $fields['billing']['billing_address_2']['label']        = 'Kućni broj';
    $fields['billing']['billing_address_2']['placeholder']  = 'Kućni broj';
    $fields['billing']['billing_address_2']['required']     = true;
    $fields['billing']['billing_postcode']['label']         = 'Poštanski broj';
    $fields['billing']['billing_postcode']['placeholder']   = 'Poštanski broj';
    $fields['billing']['billing_city']['label']             = 'Grad';
    $fields['billing']['billing_city']['placeholder']       = 'Grad';
    $fields['billing']['billing_phone']['label']            = 'Telefon';
    $fields['billing']['billing_phone']['placeholder']      = 'Broj mobilnog telefona';
    $fields['billing']['billing_email']['label']            = 'E-mail adresa';
    $fields['billing']['billing_email']['placeholder']      = 'E-mail adresa';
    $fields['billing']['billing_email']['required']         = false;

    // Force HR country
    $fields['billing']['billing_country']['default'] = 'HR';

    // Remove company field
    unset( $fields['billing']['billing_company'] );

    return $fields;
}, 20 );

/**
 * Billing title — match vigoshop
 */
add_filter( 'woocommerce_checkout_billing_title', function() {
    return 'Plaćanje i Dostava';
});

/**
 * Add address hint after name fields
 */
add_action( 'woocommerce_after_checkout_billing_form', function() {
    // The hint is inserted via JS or in the field wrapper
});

/**
 * Add address delivery hint between last_name and address_1
 */
add_filter( 'woocommerce_form_field', function( $field, $key, $args, $value ) {
    if ( $key === 'billing_address_1' ) {
        $hint = '<div class="form-row form-row-wide col-xs-12">Unesite adresu na kojoj ćete biti <b>između 8:00 i 16:00 sati</b>.</div>';
        return $hint . $field;
    }
    return $field;
}, 10, 4 );

/**
 * Force billing country to HR
 */
add_filter( 'default_checkout_billing_country', function() {
    return 'HR';
});
