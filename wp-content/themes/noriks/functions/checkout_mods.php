<?php
/**
 * Checkout Modifications — Load vigoshop CSS directly + field ordering
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Load vigoshop CSS files on checkout page ONLY
 * Order: vigoshop-app (base) → vigoshop-brand → vigoshop-checkout (inputs/forms) → our overrides (minimal)
 */
add_action( 'wp_enqueue_scripts', function() {
    if ( ! is_checkout() ) return;

    // Dequeue ALL existing styles except admin bar
    global $wp_styles;
    if ( ! empty( $wp_styles->registered ) ) {
        $keep = array( 'admin-bar', 'dashicons' );
        foreach ( $wp_styles->registered as $handle => $style ) {
            if ( ! in_array( $handle, $keep, true ) ) {
                wp_deregister_style( $handle );
            }
        }
    }

    $theme_uri = get_stylesheet_directory_uri();
    $theme_dir = get_stylesheet_directory();

    // 1. Vigoshop app CSS (base styles: fonts, layout, buttons, containers)
    wp_enqueue_style( 'vigoshop-app', $theme_uri . '/css/vigoshop-app.css', array(), '1.0' );

    // 2. Vigoshop brand CSS (brand-specific overrides)
    wp_enqueue_style( 'vigoshop-brand', $theme_uri . '/css/vigoshop-brand.css', array( 'vigoshop-app' ), '1.0' );

    // 3. Vigoshop checkout CSS (form inputs, shipping, payment, order review)
    wp_enqueue_style( 'vigoshop-checkout', $theme_uri . '/css/vigoshop-checkout.css', array( 'vigoshop-brand' ), '1.0' );

    // 4. WC Select2 (needed for city dropdown)
    wp_enqueue_style( 'select2', WC()->plugin_url() . '/assets/css/select2.css', array(), null );

    // 5. Our minimal overrides (LAST — only Noriks-specific stuff)
    $css_file = $theme_dir . '/css/checkout.css';
    $version = file_exists( $css_file ) ? md5_file( $css_file ) : '1';
    wp_enqueue_style( 'noriks-checkout', $theme_uri . '/css/checkout.css', array( 'vigoshop-checkout' ), $version );

}, 9999 );

/**
 * Add vigoshop body classes (needed for vigoshop CSS selectors)
 */
add_filter( 'body_class', function( $classes ) {
    if ( is_checkout() ) {
        $classes[] = 'brand-vigoshop';
        $classes[] = 'theme-vigoshop';
        $classes[] = 'theme-hsplus';
        $classes[] = 'woocommerce-checkout';
    }
    return $classes;
});

/**
 * Field ordering & labels — match vigoshop.hr HR layout
 */
add_filter( 'woocommerce_checkout_fields', function( $fields ) {
    $fields['billing']['billing_phone']['priority']      = 10;
    $fields['billing']['billing_email']['priority']       = 20;
    $fields['billing']['billing_first_name']['priority']  = 30;
    $fields['billing']['billing_last_name']['priority']   = 40;
    $fields['billing']['billing_address_1']['priority']   = 50;
    $fields['billing']['billing_address_2']['priority']   = 60;
    $fields['billing']['billing_postcode']['priority']    = 70;
    $fields['billing']['billing_city']['priority']        = 80;

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

    // Side by side pairs
    $fields['billing']['billing_first_name']['class'] = array( 'form-row', 'form-row-first' );
    $fields['billing']['billing_last_name']['class']  = array( 'form-row', 'form-row-last' );
    $fields['billing']['billing_address_1']['class']  = array( 'form-row', 'form-row-first', 'address-field' );
    $fields['billing']['billing_address_2']['class']  = array( 'form-row', 'form-row-last', 'address-field' );
    $fields['billing']['billing_postcode']['class']   = array( 'form-row', 'form-row-first', 'address-field' );
    $fields['billing']['billing_city']['class']       = array( 'form-row', 'form-row-last', 'address-field' );
    $fields['billing']['billing_phone']['class']      = array( 'form-row', 'form-row-wide' );
    $fields['billing']['billing_email']['class']      = array( 'form-row', 'form-row-wide' );

    return $fields;
}, 20 );

/**
 * Add address hint after billing_last_name field
 */
add_filter( 'woocommerce_form_field_text', function( $field, $key, $args, $value ) {
    if ( $key === 'billing_last_name' ) {
        $field .= '<p class="address-hint" style="flex:0 0 100%;width:100%;font-size:13px;color:#555;margin:2px 0 8px;">Unesite adresu na kojoj ćete biti <strong>između 8:00 i 16:00</strong> sati.</p>';
    }
    return $field;
}, 10, 4 );

/**
 * Add "Plaćanje i Dostava" heading before billing fields
 */
add_action( 'woocommerce_before_checkout_billing_form', function() {
    echo '<h2 class="checkout-billing-title">Plaćanje i Dostava</h2>';
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
    return '🔒 Naruči';
});
