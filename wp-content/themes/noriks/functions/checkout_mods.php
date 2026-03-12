<?php
/**
 * Checkout Mods — Phase 1 (Static vigoshop layout)
 * Only keep field reordering, label changes, and backend processing.
 * All visual rendering is in form-checkout.php as static HTML.
 */

// ===== DEQUEUE ALL CONFLICTING STYLES ON CHECKOUT =====
add_action( 'wp_enqueue_scripts', function() {
    if ( ! is_checkout() ) return;
    
    // Dequeue Storefront parent theme styles
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
    wp_dequeue_style( 'storefront-gutenberg-blocks' );
    
    // Dequeue WooCommerce default styles
    wp_dequeue_style( 'woocommerce-general' );
    wp_dequeue_style( 'woocommerce-layout' );
    wp_dequeue_style( 'woocommerce-smallscreen' );
    wp_dequeue_style( 'wc-blocks-style' );
    wp_dequeue_style( 'wc-blocks-vendors-style' );
    
    // Dequeue child theme style (if it loads storefront overrides)
    wp_dequeue_style( 'storefront-child-style' );
    wp_dequeue_style( 'noriks-style' );
    
    // Enqueue ONLY our checkout CSS
    wp_enqueue_style( 'noriks-checkout', get_stylesheet_directory_uri() . '/css/checkout.css', array(), filemtime( get_stylesheet_directory() . '/css/checkout.css' ) );
}, 999 );

// ===== FIELD ORDER & LABELS =====

add_filter( 'woocommerce_checkout_fields', 'noriks_checkout_field_order' );
function noriks_checkout_field_order( $fields ) {
    // Vigoshop EXACT order: Ime(30) → Prezime(40) → Ulica(50) → Kućni(60) → Poštanski(70) → Grad(80) → Telefon(85) → Email(86)
    
    if ( isset( $fields['billing']['billing_country'] ) )
        $fields['billing']['billing_country']['priority'] = 5;

    if ( isset( $fields['billing']['billing_first_name'] ) ) {
        $fields['billing']['billing_first_name']['priority'] = 30;
        $fields['billing']['billing_first_name']['class'] = array( 'form-row-first' );
    }
    if ( isset( $fields['billing']['billing_last_name'] ) ) {
        $fields['billing']['billing_last_name']['priority'] = 40;
        $fields['billing']['billing_last_name']['class'] = array( 'form-row-last' );
    }
    if ( isset( $fields['billing']['billing_address_1'] ) ) {
        $fields['billing']['billing_address_1']['priority'] = 50;
        $fields['billing']['billing_address_1']['required'] = true;
        $fields['billing']['billing_address_1']['label'] = 'Ulica';
        $fields['billing']['billing_address_1']['placeholder'] = 'Ulica';
        $fields['billing']['billing_address_1']['class'] = array( 'form-row-wide', 'address-field' );
    }
    if ( isset( $fields['billing']['billing_address_2'] ) ) {
        $fields['billing']['billing_address_2']['priority'] = 60;
        $fields['billing']['billing_address_2']['required'] = true;
        $fields['billing']['billing_address_2']['label'] = 'Kućni broj';
        $fields['billing']['billing_address_2']['placeholder'] = 'Kućni broj';
        $fields['billing']['billing_address_2']['class'] = array( 'form-row-wide', 'address-field' );
    }
    if ( isset( $fields['billing']['billing_postcode'] ) ) {
        $fields['billing']['billing_postcode']['priority'] = 70;
        $fields['billing']['billing_postcode']['class'] = array( 'form-row-wide', 'address-field' );
    }
    if ( isset( $fields['billing']['billing_city'] ) ) {
        $fields['billing']['billing_city']['priority'] = 80;
        $fields['billing']['billing_city']['class'] = array( 'form-row-wide', 'address-field' );
    }
    if ( isset( $fields['billing']['billing_phone'] ) ) {
        $fields['billing']['billing_phone']['priority'] = 85;
        $fields['billing']['billing_phone']['label'] = 'Telefon';
        $fields['billing']['billing_phone']['placeholder'] = 'Broj mobilnog telefona';
    }
    if ( isset( $fields['billing']['billing_email'] ) ) {
        $fields['billing']['billing_email']['priority'] = 86;
        $fields['billing']['billing_email']['placeholder'] = 'Adresa e-pošte';
    }
    if ( isset( $fields['billing']['billing_state'] ) )
        $fields['billing']['billing_state']['priority'] = 91;

    // Remove order notes
    if ( isset( $fields['order']['order_comments'] ) )
        unset( $fields['order']['order_comments'] );

    return $fields;
}

// Phone required
add_filter( 'woocommerce_billing_fields', function( $fields ) {
    $fields['billing_phone']['required'] = true;
    return $fields;
});

// Hide ship to different address
add_filter( 'woocommerce_cart_needs_shipping_address', '__return_false' );

// ===== BILLING TITLE =====
add_action( 'woocommerce_before_checkout_billing_form', function() {
    echo '<h3 class="checkout-billing-title">Plaćanje i Dostava</h3>';
});

// ===== HELPER TEXTS (address hint, phone example, email note) =====
add_filter( 'woocommerce_form_field', 'noriks_checkout_helper_texts', 10, 4 );
function noriks_checkout_helper_texts( $field, $key, $args, $value ) {
    if ( ! is_checkout() ) return $field;
    
    if ( $key === 'billing_address_1' ) {
        $field = '<div class="form-row form-row-wide" style="clear:both;"><div class="address-hint-text">Unesite adresu na kojoj ćete biti <b>između 8:00 i 16:00 sati</b>.</div></div>' . $field;
    }
    if ( $key === 'billing_phone' ) {
        $field .= '<div class="phone-helper-row"><span class="example-number">Primjer: 0912345678</span><span class="phone_number_delivery_assist_tooltip">Za pomoć s dostavom</span></div>';
    }
    if ( $key === 'billing_email' ) {
        $field = '<div class="email-not-required-row"><span class="hr_email_not_required">* E-mail adresa nije obavezna</span></div>' . $field;
    }
    
    return $field;
}

// Placeholders from labels
add_filter( 'woocommerce_checkout_fields', function( $fields ) {
    foreach ( $fields as $section_key => $section ) {
        foreach ( $section as $field_key => $field ) {
            if ( isset( $fields[$section_key][$field_key]['label'] ) && !empty($fields[$section_key][$field_key]['label']) ) {
                $fields[$section_key][$field_key]['placeholder'] = strip_tags($fields[$section_key][$field_key]['label']);
            }
        }
    }
    return $fields;
});

// ===== REMOVE ALL VISUAL HOOKS (Phase 1 = static HTML) =====

// Remove WC's default payment rendering from order review
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );

// Remove coupon form
add_action( 'wp', function() {
    remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
});

// ===== HIDE WC PRIVACY TEXT =====
add_filter( 'woocommerce_get_privacy_policy_text', function( $text ) {
    if ( is_checkout() ) return '';
    return $text;
}, 20 );

// ===== BUTTON TEXT =====
add_filter( 'woocommerce_order_button_text', function() {
    return 'Naruči';
});

// ===== ERROR MESSAGE FIX =====
add_filter( 'woocommerce_checkout_required_field_notice', function( $error, $field_label ) {
    $clean_label = preg_replace( '/^Naplata\s*/i', '', $field_label );
    return sprintf( __( '%s je obavezno polje.', 'woocommerce' ), $clean_label );
}, 10, 2 );

// ===== SHIPPING: Auto-select free, hide paid =====
add_filter( 'woocommerce_package_rates', function( $rates ) {
    $free = [];
    foreach ( $rates as $rate_id => $rate ) {
        if ( 'free_shipping' === $rate->method_id ) { $free[$rate_id] = $rate; break; }
    }
    return ! empty( $free ) ? $free : $rates;
}, 100, 2 );

// ===== COPY BILLING TO SHIPPING ON ORDER =====
add_action( 'woocommerce_checkout_create_order', function( $order, $data ) {
    $fields = ['first_name','last_name','company','address_1','address_2','city','state','postcode','country','phone'];
    foreach ( $fields as $f ) {
        $order->{"set_shipping_$f"}( $order->{"get_billing_$f"}() );
    }
}, 10, 2 );

// ===== TOTAL LABEL =====
add_filter( 'gettext', function( $translated, $text, $domain ) {
    if ( is_checkout() && $text === 'Total' && $domain === 'woocommerce' ) return 'Ukupni iznos:';
    return $translated;
}, 10, 3 );
