<?php
/**
 * Checkout Modifications — Vigoshop CDN CSS + WC field config
 * Works WITHIN WooCommerce checkout system (no template bypass)
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Dequeue ALL WP/WC/theme styles on checkout, load vigoshop CDN CSS
 */
add_action( 'wp_enqueue_scripts', function() {
    if ( ! is_checkout() ) return;

    // Remove ALL registered styles except admin-bar
    global $wp_styles;
    if ( ! empty( $wp_styles->registered ) ) {
        foreach ( array_keys( $wp_styles->registered ) as $handle ) {
            if ( $handle !== 'admin-bar' && $handle !== 'dashicons' ) {
                wp_deregister_style( $handle );
            }
        }
    }

    // Remove ALL registered scripts except essential WC ones
    global $wp_scripts;
    $keep_scripts = array(
        'jquery', 'jquery-core', 'jquery-migrate',
        'wc-checkout', 'woocommerce', 'wc-country-select', 'wc-address-i18n',
        'selectWoo', 'wc-jquery-blockui', 'wc-js-cookie',
        'wp-hooks', 'wp-i18n',
    );
    if ( ! empty( $wp_scripts->registered ) ) {
        foreach ( array_keys( $wp_scripts->registered ) as $handle ) {
            if ( ! in_array( $handle, $keep_scripts, true ) ) {
                wp_deregister_script( $handle );
            }
        }
    }

    // Vigoshop CDN CSS — exact same files + order as /test-checkout/
    $css = array(
        'vigo-select2'           => 'https://vigoshop.hr/app/plugins/woocommerce/assets/css/select2.css',
        'vigo-brands'            => 'https://vigoshop.hr/app/plugins/woocommerce/assets/css/brands.css',
        'vigo-child'             => 'https://vigoshop.hr/app/themes/hsplus-child/style.css',
        'vigo-app'               => 'https://vigoshop.hr/app/themes/hsplus/dist/app-bb7116ca22.css',
        'vigo-swiper'            => 'https://vigoshop.hr/app/themes/hsplus/assets/plugins/swiper/swiper.min.css',
        'vigo-brand'             => 'https://vigoshop.hr/app/themes/hsplus/dist/vigoshop-2809b8fc43.css',
        'vigo-agent-kc'          => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/agent-kc/css/agent-kc-d24968c5d8.css',
        'vigo-cart-warranty'     => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/cart-warranty/css/cart-warranty-294993db14.css',
        'vigo-checkout-triggers' => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-extra-triggers/css/checkout-extra-triggers-8a82c39c7f.css',
        'vigo-checkout-general'  => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-validation/css/custom-checkout-general-3ba2df51f0.css',
        'vigo-checkout-hr'       => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-validation/css/custom-checkout-hr-708bf051cd.css',
        'vigo-payment-notice'    => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/custom-payment-notice/css/custom-payment-notice-0baf6bff40.css',
        'vigo-header'            => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/header/css/header-f98b75e0d2.css',
        'vigo-shop-elements'     => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/homepage-shop-elements/css/general-shop-elements-a82fb8d5a2.css',
        'vigo-payment-fixes'     => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/payment-methods-fixes/css/payment-methods-fixes-75bc076f0b.css',
        'vigo-checkout-review'   => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-order-review/css/checkout-order-review-17423b66f5.css',
        'vigo-checkout-upsell'   => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-upsell/css/checkout-upsell-49a595b20c.css',
        'vigo-shipping'          => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/shipping-method/css/shipping-method-14ad2b0a1f.css',
        'vigo-parcel'            => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/parcel-pickup/css/parcel-pickup-hr-8754cf5c08.css',
        'vigo-parcel-buttons'    => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/parcel-pickup/css/extra-shipping-method-buttons-093d5c786e.css',
        'vigo-pdf'               => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/pdf-products/css/pdf-products-2009e19a3b.css',
        'vigo-pdf-special'       => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/pdf-products/css/pdf-special-offer-545e3ee266.css',
        'vigo-terms'             => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/terms-and-conditions-link/css/terms-and-conditions-link-4d809e8b6d.css',
        'vigo-email-checkbox'    => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/email-checkbox-subscription/css/email-checkbox-subscription-1def327263.css',
        'vigo-free-shipping'     => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/free-shipping-above-quantity/css/free-shipping-above-quantity-02588a20ff.css',
        'vigo-loader'            => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/loader/css/loader-c25fc35077.css',
        'vigo-check-client'      => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/check-client/css/check-client-8571deb0ef.css',
    );

    $prev = array();
    foreach ( $css as $handle => $url ) {
        wp_enqueue_style( $handle, $url, $prev, null );
        $prev = array( $handle );
    }

    // Our checkout override CSS — LAST
    $dir = get_template_directory();
    $uri = get_template_directory_uri();
    $file = $dir . '/css/checkout.css';
    wp_enqueue_style( 'noriks-checkout', $uri . '/css/checkout.css', $prev, file_exists($file) ? md5_file($file) : '1' );

}, 9999 );

/**
 * Also dequeue styles that get enqueued late (after priority 9999)
 */
add_action( 'wp_print_styles', function() {
    if ( ! is_checkout() ) return;
    // Remove any storefront/theme CSS that snuck through
    $remove = array( 'storefront-style', 'storefront-woocommerce-style', 'storefront-gutenberg-blocks', 'wp-block-library' );
    foreach ( $remove as $h ) wp_dequeue_style( $h );
}, 9999 );

/**
 * Inline styles from vigoshop <head>
 */
add_action( 'wp_head', function() {
    if ( ! is_checkout() ) return;
    echo '<style>tr.cart-discount.coupon-get1free .amount{display:none;}</style>';
    echo '<style>img:is([sizes="auto" i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}</style>';
    echo '<style>.woocommerce form .form-row .required{visibility:visible;}</style>';
}, 5 );

/**
 * CSS-only overrides — injected AFTER all CDN CSS to guarantee winning specificity
 * SAFE: no script/style dequeuing, purely additive CSS
 */
add_action( 'wp_footer', function() {
    if ( ! is_checkout() ) return;
    ?>
    <style id="noriks-checkout-overrides">
    /* ===== PAYMENT: duplicate #payment vigoshop styles for #noriks-payment ===== */
    /* Payment title — vigoshop CDN hides it, force show */
    body.woocommerce-checkout h3.payment-title {
      display: block !important;
      font-size: 19.6px !important;
      font-weight: 700 !important;
      margin: 29.4px 0 14.7px !important;
      color: #333 !important;
    }
    /* Payment methods list */
    #noriks-payment .wc_payment_methods {
      list-style: none !important;
      padding: 0 !important;
      margin: 0 0 21px !important;
    }
    /* Payment method items */
    #noriks-payment .wc_payment_method {
      list-style: none !important;
      padding: 0 !important;
      margin: 0 !important;
      border: 1px solid #d1dbe5 !important;
      border-radius: 5px 5px 0 0 !important;
    }
    #noriks-payment .wc_payment_method + .wc_payment_method {
      border-radius: 0 !important;
      border-top: none !important;
    }
    #noriks-payment .wc_payment_method:last-child {
      border-radius: 0 0 5px 5px !important;
      border-bottom: 1px solid #d1dbe5 !important;
    }
    /* Selected payment = blue bg */
    #noriks-payment .wc_payment_method:has(input:checked) {
      background: #e8f3ff !important;
    }
    /* Radio inputs hidden (vigoshop uses label as the clickable area) */
    #noriks-payment .wc_payment_method .input-radio {
      display: none !important;
    }
    /* Payment labels — exact vigoshop computed styles */
    #noriks-payment .wc_payment_method label {
      display: flex !important;
      align-items: center !important;
      padding: 22.65px 16px !important;
      margin: 0 !important;
      font-size: 16px !important;
      font-weight: 500 !important;
      color: #333 !important;
      line-height: 24px !important;
      cursor: pointer !important;
    }
    #noriks-payment .wc_payment_method:has(input:checked) label {
      font-weight: 700 !important;
    }
    /* Fee badges */
    #noriks-payment .payment-fee-free {
      display: block !important;
      padding: 3px 10px !important;
      margin: 2px 0 2px 8px !important;
      border-radius: 5px !important;
      background: #9ce79c !important;
      color: #228b22 !important;
      font-size: 14px !important;
      font-weight: 500 !important;
      text-align: center !important;
      line-height: 21px !important;
    }
    #noriks-payment .payment-fee-not-free {
      display: block !important;
      padding: 3px 10px !important;
      margin: 2px 0 2px 8px !important;
      border-radius: 5px !important;
      background: #e3e6e8 !important;
      color: #5f6061 !important;
      font-size: 14px !important;
      font-weight: 500 !important;
      text-align: center !important;
      line-height: 21px !important;
    }
    /* Card icons */
    #noriks-payment .sv-wc-payment-gateway-card-icons {
      display: flex !important;
      align-items: center !important;
      margin-left: auto !important;
      gap: 4px !important;
    }
    #noriks-payment .sv-wc-payment-gateway-icon {
      width: 40px !important;
      height: 25px !important;
    }
    /* COD icon */
    #noriks-payment .hs-checkout__payment-method-cod-icon-container {
      display: flex !important;
      align-items: center !important;
      margin-left: auto !important;
    }
    #noriks-payment .hs-checkout__payment-method-cod-icon {
      height: 30px !important;
    }
    /* PayPal icon */
    #noriks-payment .payment_method_braintree_paypal label img {
      margin-left: auto !important;
      height: 22px !important;
    }

    /* ===== ORDER SUMMARY ===== */
    .vigo-checkout-total .review-section-container {
      display: flex !important;
      align-items: center !important;
      padding: 0 0 10px !important;
      margin: 0 0 10px !important;
      border-bottom: 1px solid #e3e6e8 !important;
      color: #5f6061 !important;
      font-size: 14px !important;
      line-height: 21px !important;
      position: relative !important;
    }
    .vigo-checkout-total .review-product-info {
      display: flex !important;
      flex: 1 !important;
      min-width: 0 !important;
    }
    .vigo-checkout-total .review-product-info > div:first-child {
      white-space: nowrap !important;
      overflow: hidden !important;
      text-overflow: ellipsis !important;
    }
    .vigo-checkout-total .info-price {
      text-align: right !important;
      min-width: 60px !important;
      white-space: nowrap !important;
      flex-shrink: 0 !important;
    }
    .vigo-checkout-total .review-product-remove {
      width: 0 !important;
      display: none !important;
    }
    .vigo-checkout-total__sum {
      padding: 25px 0 0 !important;
      color: #232f3e !important;
    }
    .vigo-checkout-total__sum .f--bold,
    .vigo-checkout-total__sum .price_total_wrapper {
      font-weight: 700 !important;
      color: #232f3e !important;
    }

    /* ===== FIELD DESCRIPTIONS (helper text under inputs) ===== */
    body.woocommerce-checkout .form-row .description {
      display: block !important;
      font-size: 12px !important;
      color: #8c8c8c !important;
      margin-top: 4px !important;
      line-height: 1.4 !important;
    }

    /* ===== SHIPPING METHOD — force show (vigoshop CSS hides, JS shows) ===== */
    #custom_shipping .shipping_method_custom {
      display: block !important;
    }
    #custom_shipping .shipping_method_custom li {
      display: list-item !important;
      list-style: none !important;
      margin: 0 0 3px !important;
    }
    #custom_shipping .shipping_method_custom label,
    #custom_shipping .checkedlabel {
      display: flex !important;
      align-items: center !important;
      background: #f2feee !important;
      border: 1px solid #47b426 !important;
      border-radius: 5px !important;
      padding: 15px !important;
      cursor: pointer !important;
    }
    #custom_shipping .outer-wrapper {
      display: flex !important;
      align-items: center !important;
      justify-content: space-between !important;
      flex: 1 !important;
    }
    #custom_shipping .inner-wrapper-dates {
      display: block !important;
    }
    #custom_shipping .hs-custom-date {
      display: inline !important;
      font-weight: 700 !important;
      font-size: 14px !important;
    }
    #custom_shipping .inner-wrapper-img {
      display: flex !important;
      align-items: center !important;
      gap: 8px !important;
    }
    #custom_shipping .shipping_method_delivery_price {
      display: block !important;
      background: #9ce79c !important;
      color: #228b22 !important;
      border-radius: 5px !important;
      padding: 0 10.5px !important;
      margin: 5px 0 !important;
      font-size: 14px !important;
      font-weight: 500 !important;
      line-height: 21px !important;
    }
    #custom_shipping .delivery_img img {
      height: 30px !important;
    }
    #custom_shipping .shipping_method_field {
      display: none !important;
    }
    #custom_shipping label svg {
      width: 19px !important;
      height: 14px !important;
      margin-right: 10px !important;
      flex-shrink: 0 !important;
    }

    /* ===== BUTTON/WARRANTY/TERMS — match form padding ===== */
    body.woocommerce-checkout #order_review,
    body.woocommerce-checkout .checkout-warranty,
    body.woocommerce-checkout .agreed_terms_txt {
      padding-left: 40px !important;
      padding-right: 40px !important;
      box-sizing: border-box !important;
    }
    @media (max-width: 560px) {
      body.woocommerce-checkout #order_review,
      body.woocommerce-checkout .checkout-warranty,
      body.woocommerce-checkout .agreed_terms_txt {
        padding-left: 15px !important;
        padding-right: 15px !important;
      }
    }
    /* Warranty margin matches ref */
    body.woocommerce-checkout .checkout-warranty {
      margin-top: 36px !important;
      margin-bottom: 22px !important;
    }
    /* Terms margin matches ref */
    body.woocommerce-checkout .agreed_terms_txt {
      margin-bottom: 24px !important;
    }
    /* Button top margin matches ref */
    body.woocommerce-checkout #order_review {
      margin-top: 16px !important;
    }
    </style>
    <?php
}, 50 );

/**
 * Body classes — vigoshop expects these
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
 * WC checkout field config — match vigoshop HR layout
 */
add_filter( 'woocommerce_checkout_fields', function( $fields ) {
    // Order — match vigoshop: name → address → phone → email
    $fields['billing']['billing_phone']['priority']       = 10;
    $fields['billing']['billing_email']['priority']       = 20;
    $fields['billing']['billing_first_name']['priority']  = 30;
    $fields['billing']['billing_last_name']['priority']   = 40;
    $fields['billing']['billing_address_1']['priority']   = 50;
    $fields['billing']['billing_address_2']['priority']   = 60;
    $fields['billing']['billing_postcode']['priority']    = 70;
    $fields['billing']['billing_city']['priority']        = 80;
    // phone/email priorities already set above (10/20)

    // Labels, placeholders, required
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
    $fields['billing']['billing_phone']['description'] = 'Primjer: 0912345678 · Za pomoć s dostavom';
    $fields['billing']['billing_email']['label'] = 'E-mail adresa';
    $fields['billing']['billing_email']['placeholder'] = 'E-mail adresa';
    $fields['billing']['billing_email']['description'] = 'Za potvrdu narudžbe i praćenje pošiljke';
    $fields['billing']['billing_email']['required'] = false;
    $fields['billing']['billing_country']['default'] = 'HR';
    unset( $fields['billing']['billing_company'] );

    // Vigoshop CSS classes
    $fields['billing']['billing_first_name']['class'] = array('form-row','form-row-first','form-group','col-xs-12','validate-required');
    $fields['billing']['billing_last_name']['class']  = array('form-row','form-row-last','form-group','col-xs-12','validate-required');
    $fields['billing']['billing_address_1']['class']  = array('form-row','form-row-wide','address-field','form-group','col-xs-12','validate-required');
    $fields['billing']['billing_address_2']['class']  = array('form-row','form-row-wide','address-field','form-group','col-xs-12','validate-required');
    $fields['billing']['billing_postcode']['class']   = array('form-row','form-row-wide','address-field','form-group','col-xs-12','validate-required','validate-postcode');
    $fields['billing']['billing_city']['class']       = array('form-row','form-row-wide','dropdown','form-group','col-xs-12','validate-required');
    $fields['billing']['billing_phone']['class']      = array('form-row','form-row-wide','form-group','col-xs-12','validate-required','validate-phone');
    $fields['billing']['billing_email']['class']      = array('form-row','form-row-wide','form-group','col-xs-12','validate-email');

    // Input class — vigoshop uses 'form-input' alongside WC's 'input-text'
    foreach ( $fields['billing'] as &$f ) {
        $f['input_class'] = array( 'input-text', 'form-input' );
    }

    return $fields;
}, 20 );

/**
 * Address hint after last name
 */
add_filter( 'woocommerce_form_field_text', function( $field, $key ) {
    if ( $key === 'billing_last_name' ) {
        $field .= '<div class="form-row form-row-wide col-xs-12">Unesite adresu na kojoj ćete biti <b>između 8:00 i 16:00 sati</b>.</div>';
    }
    return $field;
}, 10, 2 );

/**
 * Billing title
 */
add_action( 'woocommerce_before_checkout_billing_form', function() {
    echo '<h3 class="checkout-billing-title">Plaćanje i Dostava</h3>';
});

add_filter( 'default_checkout_billing_country', function() { return 'HR'; });
add_filter( 'woocommerce_order_button_text', function() { return 'Naruči'; });

/**
 * Payment gateway order: COD → Stripe → PayPal
 */
add_filter( 'woocommerce_available_payment_gateways', function( $gw ) {
    $order = array('cod','stripe_cc','ppcp-gateway');
    $sorted = array();
    foreach ( $order as $id ) { if ( isset($gw[$id]) ) $sorted[$id] = $gw[$id]; }
    foreach ( $gw as $id => $g ) { if ( !isset($sorted[$id]) ) $sorted[$id] = $g; }
    return $sorted;
}, 100 );

add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );

/**
 * Disable coupons on checkout entirely
 */
add_filter( 'woocommerce_coupons_enabled', function( $enabled ) {
    if ( is_checkout() ) return false;
    return $enabled;
});

/**
 * Remove info-banner from checkout page content
 */
add_filter( 'the_content', function( $content ) {
    if ( is_checkout() ) {
        $content = preg_replace( '/<section class="info-banner">.*?<\/section>/s', '', $content );
    }
    return $content;
}, 999 );
