<?php
/**
 * Checkout Mods — Phase 1 (Static vigoshop layout)
 * Only keep field reordering, label changes, and backend processing.
 * All visual rendering is in form-checkout.php as static HTML.
 */

// ===== DEQUEUE ALL CONFLICTING STYLES ON CHECKOUT =====
add_action( 'wp_enqueue_scripts', function() {
    if ( ! is_checkout() ) return;
    
    // Dequeue ALL styles except our checkout CSS
    global $wp_styles;
    if ( $wp_styles ) {
        $keep = array( 'noriks-checkout', 'admin-bar', 'dashicons', 'wp-block-library' );
        foreach ( $wp_styles->queue as $handle ) {
            if ( ! in_array( $handle, $keep ) ) {
                wp_dequeue_style( $handle );
                wp_deregister_style( $handle );
            }
        }
    }
    
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

// Remove coupon form and country selector
add_action( 'wp', function() {
    remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
    // Remove all hooks on woocommerce_before_checkout_form except login form
    global $wp_filter;
    if ( isset( $wp_filter['woocommerce_before_checkout_form'] ) ) {
        foreach ( $wp_filter['woocommerce_before_checkout_form']->callbacks as $priority => $hooks ) {
            foreach ( $hooks as $tag => $hook ) {
                // Keep only WC login/checkout_form_billing and our own hooks
                if ( strpos( $tag, 'woocommerce_checkout_login_form' ) === false && 
                     strpos( $tag, 'checkout_billing_title' ) === false ) {
                    // Remove country selectors and other plugin hooks
                    if ( is_array( $hook['function'] ) ) {
                        $class = is_object( $hook['function'][0] ) ? get_class( $hook['function'][0] ) : $hook['function'][0];
                        if ( stripos( $class, 'country' ) !== false || stripos( $class, 'flag' ) !== false ) {
                            remove_action( 'woocommerce_before_checkout_form', $hook['function'], $priority );
                        }
                    }
                }
            }
        }
    }
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

// ===== PAYMENT METHOD ORDER: COD → CC → PayPal =====
add_filter( 'woocommerce_available_payment_gateways', function( $gateways ) {
    if ( ! is_checkout() ) return $gateways;
    $order = array( 'cod', 'stripe_cc', 'ppcp-gateway' );
    $sorted = array();
    foreach ( $order as $id ) {
        if ( isset( $gateways[ $id ] ) ) $sorted[ $id ] = $gateways[ $id ];
    }
    foreach ( $gateways as $id => $gw ) {
        if ( ! isset( $sorted[ $id ] ) ) $sorted[ $id ] = $gw;
    }
    return $sorted;
}, 100 );

// ===== RENAME PAYMENT METHODS =====
add_filter( 'woocommerce_gateway_title', function( $title, $id ) {
    if ( ! is_checkout() ) return $title;
    if ( $id === 'cod' ) return 'Plaćanje prilikom preuzimanja';
    if ( $id === 'stripe_cc' ) return 'Kreditna kartica';
    return $title;
}, 5, 2 );

// ===== DEFAULT COD =====
add_filter( 'default_checkout_payment_method', function( $method, $gateways ) {
    return isset( $gateways['cod'] ) ? 'cod' : $method;
}, 10, 2 );

add_action( 'woocommerce_before_checkout_form', function() {
    if ( ! function_exists('WC') || ! WC()->session ) return;
    $chosen = WC()->session->get('chosen_payment_method');
    if ( empty($chosen) ) {
        $available = WC()->payment_gateways()->get_available_payment_gateways();
        if ( isset($available['cod']) ) WC()->session->set('chosen_payment_method', 'cod');
    }
}, 5 );

// ===== HIDE COUNTRY FIELD COMPLETELY =====
add_filter( 'woocommerce_checkout_fields', function( $fields ) {
    // Set country to HR and hide it
    if ( isset( $fields['billing']['billing_country'] ) ) {
        $fields['billing']['billing_country']['type'] = 'hidden';
        $fields['billing']['billing_country']['default'] = 'HR';
        $fields['billing']['billing_country']['class'] = array( 'hidden-field' );
    }
    return $fields;
}, 30 );

// Force country to HR
add_filter( 'default_checkout_billing_country', function() { return 'HR'; } );

// ===== REMOVE PAYMENT DESCRIPTION =====
add_filter( 'woocommerce_gateway_description', function() { return ''; }, 20, 2 );

// ===== HIDE WC ORDER BUTTON (we have our own in static HTML) =====
add_filter( 'woocommerce_order_button_html', function() { return ''; } );
