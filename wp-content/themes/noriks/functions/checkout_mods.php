<?php
/**
 * Checkout Modifications — SIMPLIFIED
 * 
 * RULES:
 * 1. NO deregistering WP/WC scripts — let WC handle its own JS
 * 2. NO custom #noriks-payment — use WC default #payment
 * 3. NO brute-force visibility hacks
 * 4. Keep vigoshop visual CSS (additive only)
 * 5. Payment methods ALWAYS visible
 */
if ( ! defined( 'ABSPATH' ) ) exit;


// ─── 1. Enqueue vigoshop CSS (additive, no deregistering) ───────────────

add_action( 'wp_enqueue_scripts', function() {
    if ( ! is_checkout() || is_wc_endpoint_url('order-received') ) return;

    // Vigoshop CDN CSS for visual styling
    $css = array(
        'vigo-app'               => 'https://vigoshop.hr/app/themes/hsplus/dist/app-bb7116ca22.css',
        'vigo-brand'             => 'https://vigoshop.hr/app/themes/hsplus/dist/vigoshop-2809b8fc43.css',
        'vigo-checkout-general'  => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-validation/css/custom-checkout-general-3ba2df51f0.css',
        'vigo-checkout-hr'       => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-validation/css/custom-checkout-hr-708bf051cd.css',
        'vigo-shipping'          => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/shipping-method/css/shipping-method-14ad2b0a1f.css',
        'vigo-terms'             => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/terms-and-conditions-link/css/terms-and-conditions-link-4d809e8b6d.css',
    );

    foreach ( $css as $handle => $url ) {
        wp_enqueue_style( $handle, $url, array(), null );
    }

    // Our checkout override CSS
    $dir = get_template_directory();
    $uri = get_template_directory_uri();
    $file = $dir . '/css/checkout.css';
    if ( file_exists( $file ) ) {
        wp_enqueue_style( 'noriks-checkout', $uri . '/css/checkout.css', array(), md5_file( $file ) );
    }
}, 20 );


// ─── 2. Inline CSS overrides (additive, high specificity) ───────────────

add_action( 'wp_head', function() {
    if ( ! is_checkout() || is_wc_endpoint_url('order-received') ) return;
    ?>
    <style id="noriks-checkout-fix">
    /* FORCE WC #payment to always be visible */
    body.woocommerce-checkout #payment {
        display: block !important;
        visibility: visible !important;
        opacity: 1 !important;
    }
    body.woocommerce-checkout #payment .wc_payment_methods {
        display: block !important;
        list-style: none !important;
        padding: 0 !important;
    }
    body.woocommerce-checkout #payment .wc_payment_method {
        display: list-item !important;
        list-style: none !important;
        border: 1px solid #d1dbe5 !important;
        background: #fff !important;
    }
    body.woocommerce-checkout #payment .wc_payment_method + .wc_payment_method {
        border-top: none !important;
    }
    body.woocommerce-checkout #payment .wc_payment_method:first-child {
        border-radius: 5px 5px 0 0 !important;
    }
    body.woocommerce-checkout #payment .wc_payment_method:last-child {
        border-radius: 0 0 5px 5px !important;
    }
    body.woocommerce-checkout #payment .wc_payment_method:has(input:checked),
    body.woocommerce-checkout #payment .wc_payment_method.checked {
        background: #e8f3ff !important;
    }
    body.woocommerce-checkout #payment .wc_payment_method > label {
        display: flex !important;
        align-items: center !important;
        padding: 20px 16px !important;
        margin: 0 !important;
        font-size: 16px !important;
        font-weight: 500 !important;
        cursor: pointer !important;
    }
    body.woocommerce-checkout #payment .wc_payment_method:has(input:checked) > label {
        font-weight: 700 !important;
    }
    body.woocommerce-checkout #payment .wc_payment_method .input-radio {
        display: none !important;
    }
    body.woocommerce-checkout #payment .wc_payment_method > label::before {
        content: '' !important;
        width: 15px !important;
        height: 15px !important;
        background-color: #fff !important;
        border-radius: 50% !important;
        box-shadow: 0 0 0 1px #ccc !important;
        border: 3px solid #fff !important;
        margin-right: 15px !important;
        flex-shrink: 0 !important;
    }
    body.woocommerce-checkout #payment .wc_payment_method:has(input:checked) > label::before,
    body.woocommerce-checkout #payment .wc_payment_method > input:checked + label::before {
        background-color: #47b426 !important;
        box-shadow: 0 0 0 2px #47b426 !important;
    }
    /* Payment icons */
    body.woocommerce-checkout #payment .sv-wc-payment-gateway-card-icons,
    body.woocommerce-checkout #payment .hs-checkout__payment-method-cod-icon-container,
    body.woocommerce-checkout #payment .payment-icon-wrapper {
        margin-left: auto !important;
    }
    /* Payment box (details under selected method) */
    body.woocommerce-checkout #payment .payment_box {
        padding: 15px !important;
    }
    /* Place order button */
    body.woocommerce-checkout #payment #place_order {
        width: 100% !important;
        font-size: 18px !important;
        font-weight: 700 !important;
        padding: 16px !important;
    }
    /* Order review full width */
    body.woocommerce-checkout #order_review {
        width: 100% !important;
        max-width: none !important;
    }
    /* Hide any duplicate payment section */
    body.woocommerce-checkout #noriks-payment {
        display: none !important;
    }
    </style>
    <?php
}, 99 );


// ─── 3. Body classes for vigoshop CSS ───────────────────────────────────

add_filter( 'body_class', function( $classes ) {
    if ( is_checkout() ) {
        $classes[] = 'brand-vigoshop';
        $classes[] = 'theme-vigoshop';
        $classes[] = 'theme-hsplus';
    }
    return $classes;
});


// ─── 4. Checkout field config ───────────────────────────────────────────

add_filter( 'woocommerce_checkout_fields', function( $fields ) {
    // Field order
    $fields['billing']['billing_phone']['priority']       = 10;
    $fields['billing']['billing_email']['priority']       = 20;
    $fields['billing']['billing_first_name']['priority']  = 30;
    $fields['billing']['billing_last_name']['priority']   = 40;
    $fields['billing']['billing_address_1']['priority']   = 50;
    $fields['billing']['billing_address_2']['priority']   = 60;
    $fields['billing']['billing_postcode']['priority']    = 70;
    $fields['billing']['billing_city']['priority']        = 80;

    // Labels & placeholders
    $fields['billing']['billing_first_name']['label'] = 'Ime';
    $fields['billing']['billing_first_name']['placeholder'] = 'Ime';
    $fields['billing']['billing_last_name']['label'] = 'Prezime';
    $fields['billing']['billing_last_name']['placeholder'] = 'Prezime';
    $fields['billing']['billing_address_1']['label'] = 'Ulica';
    $fields['billing']['billing_address_1']['placeholder'] = 'Ulica';
    $fields['billing']['billing_address_2']['label'] = 'Kućni broj';
    $fields['billing']['billing_address_2']['placeholder'] = 'Kućni broj';
    $fields['billing']['billing_address_2']['required'] = true;
    $fields['billing']['billing_postcode']['label'] = 'Poštanski broj';
    $fields['billing']['billing_postcode']['placeholder'] = 'Poštanski broj';
    $fields['billing']['billing_city']['label'] = 'Grad';
    $fields['billing']['billing_city']['placeholder'] = 'Odaberite grad';
    $fields['billing']['billing_phone']['label'] = 'Telefon';
    $fields['billing']['billing_phone']['placeholder'] = 'Broj mobilnog telefona';
    $fields['billing']['billing_email']['label'] = 'E-mail adresa';
    $fields['billing']['billing_email']['placeholder'] = 'E-mail adresa';
    $fields['billing']['billing_email']['required'] = false;
    $fields['billing']['billing_country']['default'] = 'HR';
    unset( $fields['billing']['billing_company'] );

    return $fields;
}, 20 );


// ─── 5. Simple checkout config ──────────────────────────────────────────

add_action( 'woocommerce_before_checkout_billing_form', function() {
    echo '<h3 class="checkout-billing-title" style="font-size:24px;font-weight:700;margin-bottom:12px;color:#232f3e;">Plaćanje i Dostava</h3>';
});

add_filter( 'default_checkout_billing_country', function() { return 'HR'; });
add_filter( 'woocommerce_order_button_text', function() { return 'Naruči'; });
add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );

// Payment gateway order
add_filter( 'woocommerce_available_payment_gateways', function( $gw ) {
    $order = array( 'cod', 'stripe_cc', 'ppcp-gateway' );
    $sorted = array();
    foreach ( $order as $id ) { if ( isset( $gw[$id] ) ) $sorted[$id] = $gw[$id]; }
    foreach ( $gw as $id => $g ) { if ( ! isset( $sorted[$id] ) ) $sorted[$id] = $g; }
    return $sorted;
}, 100 );

// Disable coupons on checkout
add_filter( 'woocommerce_coupons_enabled', function( $enabled ) {
    if ( is_checkout() ) return false;
    return $enabled;
});
