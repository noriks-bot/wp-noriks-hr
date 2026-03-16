<?php
/**
 * Checkout Modifications — Vigoshop pixel-perfect
 * Field ordering, labels, style dequeuing, payment gateway ordering, custom sections
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

    // Load vigoshop CSS files directly from CDN
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
        'vigo-cta'                  => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/custom-cta-settings/css/custom-cta-settings-0fd450b106.css',
        'vigo-checkout-upsell'      => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/checkout-upsell/css/checkout-upsell-49a595b20c.css',
        'vigo-terms'                => 'https://vigoshop.hr/app/plugins/core/resources/dist/css/terms-and-conditions-link/css/terms-and-conditions-link-4d809e8b6d.css',
    );

    foreach ( $vigoshop_css as $handle => $url ) {
        wp_enqueue_style( $handle, $url, array(), null );
    }

    // Our overrides (loaded LAST)
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
        $classes[] = 'custom-cta-skin';
    }
    return $classes;
});

/**
 * Change billing section heading
 */
add_filter( 'woocommerce_checkout_fields', function( $fields ) {
    // Field ordering — match vigoshop DOM order exactly
    // Vigoshop renders: phone(10), email(20), first(30), last(40), address1(50), address2(60), postcode(70), city(80)
    // BUT visually phone+email appear AFTER address via CSS/HTML order
    // We match the actual DOM priority values from vigoshop
    $fields['billing']['billing_phone']['priority']      = 10;
    $fields['billing']['billing_email']['priority']       = 20;
    $fields['billing']['billing_first_name']['priority']  = 30;
    $fields['billing']['billing_last_name']['priority']   = 40;
    $fields['billing']['billing_address_1']['priority']   = 50;
    $fields['billing']['billing_address_2']['priority']   = 60;
    $fields['billing']['billing_postcode']['priority']    = 70;
    $fields['billing']['billing_city']['priority']        = 80;
    $fields['billing']['billing_state']['priority']       = 85;
    $fields['billing']['billing_country']['priority']     = 90;

    // Labels & placeholders — exact vigoshop values
    $fields['billing']['billing_phone']['label']            = 'Telefon';
    $fields['billing']['billing_phone']['placeholder']      = 'Broj mobilnog telefona';
    $fields['billing']['billing_email']['label']            = 'E-mail adresa';
    $fields['billing']['billing_email']['placeholder']      = 'E-mail adresa';
    $fields['billing']['billing_email']['required']         = false;
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

    // Force Croatia, remove company
    $fields['billing']['billing_country']['default'] = 'HR';
    unset( $fields['billing']['billing_company'] );

    // CSS classes matching vigoshop
    $fields['billing']['billing_first_name']['class'] = array( 'form-row-first', 'form-group', 'col-xs-12', 'validate-required' );
    $fields['billing']['billing_last_name']['class']  = array( 'form-row-last', 'form-group', 'col-xs-12', 'validate-required' );
    $fields['billing']['billing_address_1']['class']  = array( 'form-row-wide', 'address-field', 'form-group', 'col-xs-12', 'validate-required' );
    $fields['billing']['billing_address_2']['class']  = array( 'form-row-wide', 'address-field', 'form-group', 'col-xs-12', 'validate-required' );
    $fields['billing']['billing_postcode']['class']   = array( 'form-row-wide', 'address-field', 'form-group', 'col-xs-12', 'validate-required', 'validate-postcode' );
    $fields['billing']['billing_city']['class']        = array( 'form-row-wide', 'dropdown', 'form-group', 'col-xs-12', 'validate-required' );
    $fields['billing']['billing_phone']['class']       = array( 'form-row-wide', 'form-group', 'col-xs-12', 'validate-required', 'validate-phone' );
    $fields['billing']['billing_email']['class']       = array( 'form-row-wide', 'form-group', 'col-xs-12', 'validate-email' );

    // Input classes
    foreach ( array( 'billing_first_name', 'billing_last_name', 'billing_address_1', 'billing_address_2', 'billing_postcode', 'billing_city', 'billing_phone', 'billing_email' ) as $key ) {
        if ( isset( $fields['billing'][ $key ] ) ) {
            $fields['billing'][ $key ]['input_class'] = array( 'form-input' );
        }
    }

    return $fields;
}, 20 );

/**
 * Override billing section heading to "Plaćanje i Dostava"
 */
add_filter( 'gettext', function( $translated, $text, $domain ) {
    if ( $domain === 'woocommerce' && $text === 'Billing details' ) {
        return 'Plaćanje i Dostava';
    }
    if ( $domain === 'woocommerce' && $text === 'Billing &amp; Shipping' ) {
        return 'Plaćanje i Dostava';
    }
    return $translated;
}, 10, 3 );

/**
 * Change billing heading class
 */
add_action( 'woocommerce_before_checkout_billing_form', function() {
    // Remove the default h3 and add our own with vigoshop class
    echo '<style>.woocommerce-billing-fields > h3:first-child { display: none !important; }</style>';
    echo '<h3 class="checkout-billing-title">Plaćanje i Dostava</h3>';
});

/**
 * Add phone hint and email optional note after respective fields
 */
add_filter( 'woocommerce_form_field', function( $field, $key, $args, $value ) {
    // Address delivery time hint before address_1
    if ( $key === 'billing_address_1' ) {
        $hint = '<div class="form-row form-row-wide col-xs-12">Unesite adresu na kojoj ćete biti <b>između 8:00 i 16:00 sati</b>.</div>';
        return $hint . $field;
    }
    // Phone hint after phone field
    if ( $key === 'billing_phone' ) {
        $field .= '<div class="checkout-field-hints" style="display:flex;justify-content:space-between;margin-top:-5px;margin-bottom:10px;">
            <span class="example-number">Primjer: 0912345678</span>
            <span class="phone_number_delivery_assist_tooltip">Za pomoć s dostavom</span>
        </div>';
    }
    // Email optional note
    if ( $key === 'billing_email' ) {
        $field .= '<div class="checkout-field-hints" style="margin-top:-5px;margin-bottom:10px;">
            <span class="example-number">* E-mail adresa nije obavezna</span>
        </div>';
    }
    return $field;
}, 10, 4 );

/**
 * Force billing country to HR
 */
add_filter( 'default_checkout_billing_country', function() {
    return 'HR';
});

/**
 * COD prompt + VAT notice — inject into payment area
 */
add_action( 'woocommerce_review_order_after_submit', function() {
    ?>
    <div id="hs-cod-checkout-prompt" style="display:none;">
        <div class="cod-prompt-text">Dovršite narudžbu sada, <strong>platite pouzećem 🙂</strong></div>
        <img decoding="async" class="cod-prompt-image" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg">
    </div>
    <div id="hs-vat-tax-checkout-prompt">
        <span class="tax-and-vat-checkout-claims">Nema dodatnih troškova za carinu</span>
        <span class="tax-and-vat-checkout-claims">PDV je uključen u cijenu</span>
    </div>
    <?php
});

/**
 * Override place order button text and styling
 */
add_filter( 'woocommerce_order_button_text', function() {
    return '🔒 Naruči';
});

add_filter( 'woocommerce_order_button_html', function( $html ) {
    // Replace the button classes with vigoshop classes
    $html = str_replace(
        'class="button alt',
        'class="button alt button--l button--block button--green button--rounded button--green-gradient',
        $html
    );
    return $html;
});

/**
 * Payment gateway icon overrides for COD
 */
add_filter( 'woocommerce_gateway_icon', function( $icon, $gateway_id ) {
    if ( $gateway_id === 'cod' ) {
        return '<div class="hs-checkout__payment-method-cod-icon-container">
            <img decoding="async" class="hs-checkout__payment-method-cod-icon" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg" />
        </div>';
    }
    return $icon;
}, 10, 2 );

/**
 * COD gateway — add fee label
 */
add_filter( 'woocommerce_gateway_title', function( $title, $gateway_id ) {
    if ( $gateway_id === 'cod' && is_checkout() && ! is_admin() ) {
        return 'Plaćanje prilikom preuzimanja <span class="payment-fee-not-free"><span class="woocommerce-Price-amount amount">1,99<span class="woocommerce-Price-currencySymbol">&euro;</span></span></span>';
    }
    return $title;
}, 10, 2 );

/**
 * Dequeue unwanted scripts on checkout
 */
add_action( 'wp_enqueue_scripts', function() {
    if ( ! is_checkout() ) return;
    // Remove select2 default if loaded
    wp_dequeue_script( 'selectWoo' );
}, 100 );

/**
 * Hide "Additional information" / order comments section (vigoshop hides it via CSS)
 */
add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );

/**
 * Order review — add "Sažetak narudžbe" heading
 */
add_action( 'woocommerce_checkout_before_order_review_heading', function() {
    echo '<h3 class="place-order-title" style="display:block;">Sažetak narudžbe</h3>';
});

/**
 * Set COD as default payment method
 */
add_filter( 'woocommerce_default_gateway', function() {
    return 'cod';
});
