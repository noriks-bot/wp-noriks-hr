<?php
/**
 * Checkout Modifications — Field ordering, labels, load vigoshop CSS directly
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * NUCLEAR STYLE DEQUEUE + LOAD VIGOSHOP CSS FROM CDN
 */
add_action( 'wp_enqueue_scripts', function() {
    if ( ! is_checkout() ) return;

    // Dequeue ALL existing styles
    global $wp_styles;
    if ( ! empty( $wp_styles->registered ) ) {
        $keep = array( 'admin-bar', 'dashicons' );
        foreach ( $wp_styles->registered as $handle => $style ) {
            if ( ! in_array( $handle, $keep, true ) ) {
                wp_deregister_style( $handle );
            }
        }
    }

    // Load vigoshop CSS files directly from CDN (exact same files vigoshop uses)
    $vigoshop_css = array(
        'vigo-select2'              => 'https://vigoshop.hr/app/plugins/woocommerce/assets/css/select2.css',
        'vigo-app'                  => 'https://vigoshop.hr/app/themes/hsplus/dist/app-bb7116ca22.css',
        'vigo-brand'                => 'https://vigoshop.hr/app/themes/hsplus/dist/vigoshop-2809b8fc43.css',
        'vigo-checkout-general'     => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-validation/css/custom-checkout-general-3ba2df51f0.css',
        'vigo-checkout-hr'          => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-validation/css/custom-checkout-hr-708bf051cd.css',
        'vigo-payment-notice'       => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/custom-payment-notice/css/custom-payment-notice-0baf6bff40.css',
        'vigo-payment-fixes'        => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/payment-methods-fixes/css/payment-methods-fixes-75bc076f0b.css',
        'vigo-shipping'             => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/shipping-method/css/shipping-method-14ad2b0a1f.css',
        'vigo-order-review'         => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-order-review/css/checkout-order-review-17423b66f5.css',
        'vigo-braintree-form'       => 'https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/css/frontend/sv-wc-payment-gateway-payment-form.min.css',
        'vigo-braintree'            => 'https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/assets/css/frontend/wc-braintree.min.css',
        'vigo-terms'                => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/terms-and-conditions-link/css/terms-and-conditions-link-4d809e8b6d.css',
        'vigo-checkout-upsell'      => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-upsell/css/checkout-upsell-49a595b20c.css',
        'vigo-free-shipping'        => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/free-shipping-above-quantity/css/free-shipping-above-quantity-02588a20ff.css',
        'vigo-checkout-timer'       => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-timer/css/checkout-timer-73c98a5995.css',
    );

    foreach ( $vigoshop_css as $handle => $url ) {
        wp_enqueue_style( $handle, $url, array(), null );
    }

    // Our overrides (loaded LAST — only for hiding Storefront/WP elements + body class fixes)
    wp_enqueue_style( 'noriks-checkout', get_stylesheet_directory_uri() . '/css/checkout.css', array(), filemtime( get_stylesheet_directory() . '/css/checkout.css' ) );

}, 9999 );

/**
 * Add vigoshop body classes
 */
add_filter( 'body_class', function( $classes ) {
    if ( is_checkout() ) {
        $classes[] = 'brand-vigoshop';
        $classes[] = 'theme-vigoshop';
        $classes[] = 'theme-hsplus';
    }
    return $classes;
});

/**
 * Field ordering & labels — match vigoshop.hr HR layout
 */
add_filter( 'woocommerce_checkout_fields', function( $fields ) {
    $fields['billing']['billing_first_name']['priority'] = 30;
    $fields['billing']['billing_last_name']['priority']  = 40;
    $fields['billing']['billing_address_1']['priority']  = 50;
    $fields['billing']['billing_address_2']['priority']  = 60;
    $fields['billing']['billing_postcode']['priority']   = 70;
    $fields['billing']['billing_city']['priority']       = 80;
    $fields['billing']['billing_phone']['priority']      = 85;
    $fields['billing']['billing_email']['priority']      = 86;

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

    $fields['billing']['billing_country']['default'] = 'HR';
    unset( $fields['billing']['billing_company'] );

    return $fields;
}, 20 );

/**
 * Add address delivery hint before address_1
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
