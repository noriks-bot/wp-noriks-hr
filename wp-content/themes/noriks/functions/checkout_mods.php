<?php
/**
 * Checkout Modifications — Load vigoshop CDN CSS + field config
 * Goal: /checkout/ looks 1:1 like /test-checkout/ (standalone vigoshop template)
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Dequeue ALL WP/WC styles on checkout, load vigoshop CDN CSS instead
 */
add_action( 'wp_enqueue_scripts', function() {
    if ( ! is_checkout() ) return;

    // Nuke all existing styles except admin bar
    global $wp_styles;
    if ( ! empty( $wp_styles->registered ) ) {
        $keep = array( 'admin-bar', 'dashicons' );
        foreach ( $wp_styles->registered as $handle => $style ) {
            if ( ! in_array( $handle, $keep, true ) ) {
                wp_deregister_style( $handle );
            }
        }
    }

    // Vigoshop CDN CSS — exact same order as vigoshop.hr checkout
    $cdn_css = array(
        'vigo-select2'              => 'https://vigoshop.hr/app/plugins/woocommerce/assets/css/select2.css',
        'vigo-brands'               => 'https://vigoshop.hr/app/plugins/woocommerce/assets/css/brands.css',
        'vigo-child-style'          => 'https://vigoshop.hr/app/themes/hsplus-child/style.css',
        'vigo-app'                  => 'https://vigoshop.hr/app/themes/hsplus/dist/app-bb7116ca22.css',
        'vigo-swiper'               => 'https://vigoshop.hr/app/themes/hsplus/assets/plugins/swiper/swiper.min.css',
        'vigo-brand'                => 'https://vigoshop.hr/app/themes/hsplus/dist/vigoshop-2809b8fc43.css',
        'vigo-agent-kc'             => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/agent-kc/css/agent-kc-d24968c5d8.css',
        'vigo-cart-warranty'        => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/cart-warranty/css/cart-warranty-294993db14.css',
        'vigo-checkout-triggers'    => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-extra-triggers/css/checkout-extra-triggers-8a82c39c7f.css',
        'vigo-checkout-validation'  => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-validation/css/custom-checkout-general-3ba2df51f0.css',
        'vigo-checkout-hr'          => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-validation/css/custom-checkout-hr-708bf051cd.css',
        'vigo-payment-notice'       => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/custom-payment-notice/css/custom-payment-notice-0baf6bff40.css',
        'vigo-header'               => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/header/css/header-f98b75e0d2.css',
        'vigo-shop-elements'        => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/homepage-shop-elements/css/general-shop-elements-a82fb8d5a2.css',
        'vigo-payment-fixes'        => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/payment-methods-fixes/css/payment-methods-fixes-75bc076f0b.css',
        'vigo-checkout-review'      => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-order-review/css/checkout-order-review-17423b66f5.css',
        'vigo-checkout-upsell'      => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-upsell/css/checkout-upsell-49a595b20c.css',
        'vigo-shipping-method'      => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/shipping-method/css/shipping-method-14ad2b0a1f.css',
        'vigo-parcel-pickup'        => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/parcel-pickup/css/parcel-pickup-hr-8754cf5c08.css',
        'vigo-parcel-buttons'       => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/parcel-pickup/css/extra-shipping-method-buttons-093d5c786e.css',
        'vigo-pdf'                  => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/pdf-products/css/pdf-products-2009e19a3b.css',
        'vigo-pdf-special'          => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/pdf-products/css/pdf-special-offer-545e3ee266.css',
        'vigo-terms'                => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/terms-and-conditions-link/css/terms-and-conditions-link-4d809e8b6d.css',
        'vigo-email-checkbox'       => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/email-checkbox-subscription/css/email-checkbox-subscription-1def327263.css',
        'vigo-free-shipping'        => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/free-shipping-above-quantity/css/free-shipping-above-quantity-02588a20ff.css',
        'vigo-loader'               => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/loader/css/loader-c25fc35077.css',
        'vigo-check-client'         => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/check-client/css/check-client-8571deb0ef.css',
    );

    $prev = array();
    foreach ( $cdn_css as $handle => $url ) {
        wp_enqueue_style( $handle, $url, $prev, null );
        $prev = array( $handle );
    }

    // Our minimal overrides — LAST
    $theme_dir = get_stylesheet_directory();
    $theme_uri = get_stylesheet_directory_uri();
    $css_file  = $theme_dir . '/css/checkout.css';
    $version   = file_exists( $css_file ) ? md5_file( $css_file ) : '1';
    wp_enqueue_style( 'noriks-checkout', $theme_uri . '/css/checkout.css', $prev, $version );

}, 9999 );

/**
 * Add inline styles that vigoshop has in <head>
 */
add_action( 'wp_head', function() {
    if ( ! is_checkout() ) return;
    ?>
    <style>tr.cart-discount.coupon-get1free .amount{ display:none;}</style>
    <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
    <style>.woocommerce form .form-row .required { visibility: visible; }</style>
    <?php
}, 5 );

/**
 * Vigoshop body classes
 */
add_filter( 'body_class', function( $classes ) {
    if ( is_checkout() ) {
        $classes[] = 'brand-vigoshop';
        $classes[] = 'theme-vigoshop';
        $classes[] = 'theme-hsplus';
        $classes[] = 'wp-child-theme-hsplus-child';
    }
    return $classes;
});

/**
 * Field ordering, labels, classes — match vigoshop.hr HR layout exactly
 */
add_filter( 'woocommerce_checkout_fields', function( $fields ) {
    // Priority order: phone → email → first/last name → address → postcode/city
    $fields['billing']['billing_phone']['priority']      = 10;
    $fields['billing']['billing_email']['priority']       = 20;
    $fields['billing']['billing_first_name']['priority']  = 30;
    $fields['billing']['billing_last_name']['priority']   = 40;
    $fields['billing']['billing_address_1']['priority']   = 50;
    $fields['billing']['billing_address_2']['priority']   = 60;
    $fields['billing']['billing_postcode']['priority']    = 70;
    $fields['billing']['billing_city']['priority']        = 80;

    // Labels & placeholders — Croatian
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
    $fields['billing']['billing_city']['placeholder']       = 'Odaberite grad';
    $fields['billing']['billing_phone']['label']            = 'Telefon';
    $fields['billing']['billing_phone']['placeholder']      = 'Broj mobilnog telefona';
    $fields['billing']['billing_email']['label']            = 'E-mail adresa';
    $fields['billing']['billing_email']['placeholder']      = 'E-mail adresa';
    $fields['billing']['billing_email']['required']         = false;

    $fields['billing']['billing_country']['default'] = 'HR';
    unset( $fields['billing']['billing_company'] );

    // Class pairs — vigoshop uses form-row-first/last + form-group + col-xs-12
    $fields['billing']['billing_first_name']['class'] = array( 'form-row', 'form-row-first', 'form-group', 'col-xs-12', 'validate-required' );
    $fields['billing']['billing_last_name']['class']  = array( 'form-row', 'form-row-last', 'form-group', 'col-xs-12', 'validate-required' );
    $fields['billing']['billing_address_1']['class']  = array( 'form-row', 'form-row-wide', 'address-field', 'form-group', 'col-xs-12', 'validate-required' );
    $fields['billing']['billing_address_2']['class']  = array( 'form-row', 'form-row-wide', 'address-field', 'form-group', 'col-xs-12', 'validate-required' );
    $fields['billing']['billing_postcode']['class']   = array( 'form-row', 'form-row-wide', 'address-field', 'form-group', 'col-xs-12', 'validate-required', 'validate-postcode' );
    $fields['billing']['billing_city']['class']        = array( 'form-row', 'form-row-wide', 'dropdown', 'form-group', 'col-xs-12', 'validate-required' );
    $fields['billing']['billing_phone']['class']      = array( 'form-row', 'form-row-wide', 'form-group', 'col-xs-12', 'validate-required', 'validate-phone' );
    $fields['billing']['billing_email']['class']      = array( 'form-row', 'form-row-wide', 'form-group', 'col-xs-12', 'validate-email' );

    // Input class — vigoshop uses 'form-input'
    foreach ( $fields['billing'] as $key => &$field ) {
        $field['input_class'] = array( 'form-input' );
    }

    // Hide state and country
    if ( isset( $fields['billing']['billing_state'] ) ) {
        $fields['billing']['billing_state']['class'] = array( 'form-row', 'hidden' );
    }
    if ( isset( $fields['billing']['billing_country'] ) ) {
        $fields['billing']['billing_country']['class'] = array( 'form-row', 'hidden' );
    }

    return $fields;
}, 20 );

/**
 * Add address hint after billing_last_name field
 */
add_filter( 'woocommerce_form_field_text', function( $field, $key, $args, $value ) {
    if ( $key === 'billing_last_name' ) {
        $field .= '<div class="form-row form-row-wide col-xs-12">Unesite adresu na kojoj ćete biti <b>između 8:00 i 16:00 sati</b>.</div>';
    }
    return $field;
}, 10, 4 );

/**
 * Billing title
 */
add_action( 'woocommerce_before_checkout_billing_form', function() {
    echo '<h3 class="checkout-billing-title">Plaćanje i Dostava</h3>';
});

/**
 * Force billing country to HR
 */
add_filter( 'default_checkout_billing_country', function() {
    return 'HR';
});

/**
 * Change place order button text
 */
add_filter( 'woocommerce_order_button_text', function() {
    return 'Naruči';
});

/**
 * Force payment method order: COD → Stripe → PayPal
 */
add_filter( 'woocommerce_available_payment_gateways', function( $gateways ) {
    $order = array( 'cod', 'stripe', 'ppcp-gateway' );
    $sorted = array();
    foreach ( $order as $id ) {
        if ( isset( $gateways[ $id ] ) ) {
            $sorted[ $id ] = $gateways[ $id ];
        }
    }
    foreach ( $gateways as $id => $gw ) {
        if ( ! isset( $sorted[ $id ] ) ) {
            $sorted[ $id ] = $gw;
        }
    }
    return $sorted;
}, 100 );

/**
 * Disable WC shipping — we show static shipping UI
 */
add_filter( 'woocommerce_cart_needs_shipping', '__return_false' );

/**
 * Hide "Additional information" / order notes on checkout
 */
add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );
