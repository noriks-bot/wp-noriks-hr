<?php


// 1) Tell Woo’s default chooser to prefer COD when available.
add_filter('default_checkout_payment_method', function($method, $available_gateways) {
    return isset($available_gateways['cod']) ? 'cod' : $method;
}, 10, 2);

// 2) On first render (no prior choice in session), set COD as chosen.
add_action('woocommerce_before_checkout_form', function () {
    if (is_admin() && !defined('DOING_AJAX')) {
        return;
    }
    if (!function_exists('WC') || !WC()->session) {
        return;
    }

    $chosen = WC()->session->get('chosen_payment_method');
    if (empty($chosen)) {
        $available = WC()->payment_gateways()->get_available_payment_gateways();
        if (isset($available['cod'])) {
            WC()->session->set('chosen_payment_method', 'cod');
        }
    }
}, 5);

/**
 * Optional (front-end safety net):
 * If your theme/JS wipes the selection on first paint, precheck COD once.
 * Remove this block if you don’t need it.
 */
add_action('wp_footer', function () {
    if (!is_checkout() || is_wc_endpoint_url('order-received')) {
        return;
    } ?>
    <script>
    jQuery(function($){
        var $checked = $('input[name="payment_method"]:checked');
        if (!$checked.length && $('#payment_method_cod').length) {
            $('#payment_method_cod').prop('checked', true).trigger('change');
        }
    });
    </script>
<?php });


//  we need to move order now button bellow shop table on mobile only


/**
 * Move WooCommerce "Place order" button after the order review table on mobile only.
 * We hide the default button (only the button, not payments) and print our own copy later.
 */
// Disabled: no longer hiding/moving place order button
// Place order stays in its default WC position (inside #payment)

/**
 * Filter callback to hide the default button.
 */
function mytheme_hide_default_place_order_button( $html ) {
    return '';
}

/**
 * Our custom button after the order review table (inside the checkout form).
 */
function mytheme_mobile_place_order_button_after_review() {

    // Use WooCommerce’s default translatable text (filters will still run on the TEXT, which is safe).
    $order_button_text = apply_filters(
        'woocommerce_order_button_text',
        __( 'Place order', 'woocommerce' )
    );

    // IMPORTANT: do NOT pass this HTML back through 'woocommerce_order_button_html' (it would be blanked).
    echo sprintf(
        '<button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="%1$s" data-value="%1$s">%2$s</button>',
        esc_attr( $order_button_text ),
        esc_html( $order_button_text )
    );
}






//  we need to move order now button bellow shop table on mobile only












add_action( 'wp', function() {
    // Remove coupon form from its default location
    remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

    // Add coupon form after order review
   // add_action( 'woocommerce_review_order_after_order_total', 'woocommerce_checkout_coupon_form' );
});





add_filter('woocommerce_billing_fields', 'no_billing_phone_validation' );
function no_billing_phone_validation( $fields ) {
    $fields['billing_phone']['required'] = true;
    return $fields;
}

// we hide ship to different address
add_filter( 'woocommerce_cart_needs_shipping_address', '__return_false' );


// we hide order extra notes
add_filter( 'woocommerce_checkout_fields', 'remove_order_notes_field' );
function remove_order_notes_field( $fields ) {
    if ( isset( $fields['order']['order_comments'] ) ) {
        unset( $fields['order']['order_comments'] );
    }
    return $fields;
}



// Move email field to top of billing fields
/*
add_filter( 'woocommerce_checkout_fields', 'custom_move_email_field_first', 20, 1 );
function custom_move_email_field_first( $fields ) {
    if ( isset( $fields['billing']['billing_email'] ) ) {
        $fields['billing']['billing_email']['priority'] = 1; // Ensure it's first
    }
    return $fields;
}
*/


add_filter( 'woocommerce_checkout_fields', 'custom_checkout_reorder_fields' );
function custom_checkout_reorder_fields( $fields ) {
    // Vigoshop exact order: Ime/Prezime → Ulica → Kućni → Poštanski → Grad → Telefon → Email
    // All address fields FULL WIDTH (form-row-wide) — matches vigoshop exactly

    // First name + Last name side by side (like vigoshop)
    if ( isset( $fields['billing']['billing_first_name'] ) ) {
        $fields['billing']['billing_first_name']['priority'] = 10;
        $fields['billing']['billing_first_name']['class'] = array( 'form-row-first' );
    }
    if ( isset( $fields['billing']['billing_last_name'] ) ) {
        $fields['billing']['billing_last_name']['priority'] = 11;
        $fields['billing']['billing_last_name']['class'] = array( 'form-row-last' );
    }

    // Ulica 67% + Kućni 31% side by side (from custom-checkout-hr)
    if ( isset( $fields['billing']['billing_address_1'] ) ) {
        $fields['billing']['billing_address_1']['priority'] = 20;
        $fields['billing']['billing_address_1']['required'] = true;
        $fields['billing']['billing_address_1']['label'] = 'Ulica';
        $fields['billing']['billing_address_1']['placeholder'] = 'Ulica';
        $fields['billing']['billing_address_1']['class'] = array( 'form-row-wide', 'address-field' );
    }

    // Kućni broj (floated via CSS)
    if ( isset( $fields['billing']['billing_address_2'] ) ) {
        $fields['billing']['billing_address_2']['priority'] = 21;
        $fields['billing']['billing_address_2']['required'] = true;
        $fields['billing']['billing_address_2']['label'] = 'Kućni broj';
        $fields['billing']['billing_address_2']['placeholder'] = 'Kućni broj';
        $fields['billing']['billing_address_2']['class'] = array( 'form-row-wide', 'address-field' );
    }

    // Poštanski 35% + Grad 63% side by side (from custom-checkout-hr)
    if ( isset( $fields['billing']['billing_postcode'] ) ) {
        $fields['billing']['billing_postcode']['priority'] = 30;
        $fields['billing']['billing_postcode']['class'] = array( 'form-row-wide', 'address-field' );
    }

    // Grad (dropdown, floated via CSS)
    if ( isset( $fields['billing']['billing_city'] ) ) {
        $fields['billing']['billing_city']['priority'] = 31;
        $fields['billing']['billing_city']['class'] = array( 'form-row-wide', 'address-field' );
    }

    // Telefon — after address fields
    if ( isset( $fields['billing']['billing_phone'] ) ) {
        $fields['billing']['billing_phone']['priority'] = 40;
        $fields['billing']['billing_phone']['label'] = 'Broj mobilnog telefona';
        $fields['billing']['billing_phone']['placeholder'] = 'Broj mobilnog telefona';
    }
    
    // Email — after phone
    if ( isset( $fields['billing']['billing_email'] ) ) {
        $fields['billing']['billing_email']['priority'] = 41;
        $fields['billing']['billing_email']['placeholder'] = 'E-mail adresa';
    }

    // Country — hidden (fixed HR)
    if ( isset( $fields['billing']['billing_country'] ) ) {
        $fields['billing']['billing_country']['priority'] = 90;
    }
    
    // State — hidden via CSS (p#billing_state_field display:none)
    if ( isset( $fields['billing']['billing_state'] ) ) {
        $fields['billing']['billing_state']['priority'] = 91;
    }

    return $fields;
}



add_filter( 'woocommerce_checkout_required_field_notice', function( $error, $field_label ) {
    // Remove "Naplata " prefix from the error message
    // Example input: "Naplata Mobitel (primjer: 0912345678)"
    $clean_label = preg_replace( '/^Naplata\s*/i', '', $field_label );

    // Rebuild WooCommerce's required field message
    $error = sprintf( __( '%s je obavezno polje.', 'woocommerce' ), $clean_label );

    return $error;
}, 10, 2 );

// Output a heading above the email field
add_action( 'woocommerce_before_checkout_billing_form', 'add_contact_heading_before_email' );
function add_contact_heading_before_email() {
    echo '<h3 class="checkout-billing-title">Plaćanje i Dostava</h3>';
}

// Helper texts: address hint after last_name, phone example after phone, email note before email
add_filter( 'woocommerce_form_field', 'noriks_checkout_helper_texts', 10, 4 );
function noriks_checkout_helper_texts( $field, $key, $args, $value ) {
    if ( ! is_checkout() ) return $field;
    
    // After last_name: address hint text (vigoshop puts this between name and address)
    if ( $key === 'billing_last_name' ) {
        $field .= '<div class="address-hint-text" style="clear:both; width:100%; float:none;">Unesite adresu na kojoj ćete biti <b>između 8:00 i 16:00 sati</b>.</div>';
    }
    
    // After phone: helper row with both texts
    if ( $key === 'billing_phone' ) {
        $field .= '<div class="phone-helper-row"><span class="example-number">Primjer: 0912345678</span><span class="phone_number_delivery_assist_tooltip">Za pomoć s dostavom</span></div>';
    }
    
    // Before email: "* E-mail adresa nije obavezna"
    if ( $key === 'billing_email' ) {
        $field = '<div class="email-not-required-row"><span class="hr_email_not_required">* E-mail adresa nije obavezna</span></div>' . $field;
    }
    
    return $field;
}

// Change button text to "Naruči"
add_filter( 'woocommerce_order_button_text', function() {
    return 'Naruči';
});

// COD prompt + VAT note + Sažetak placeholder before submit button (vigoshop order)
add_action( 'woocommerce_review_order_before_submit', function() {
    ?>
    <div class="cod-checkout-prompt">
        <div class="cod-prompt-text">Dovršite narudžbu sada, <strong>platite pouzećem 🙂</strong></div>
        <img class="cod-prompt-image" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg">
    </div>
    <div class="vat-checkout-note">
        <span class="tax-and-vat-checkout-claims">Nema dodatnih troškova za carinu</span>
        <span class="tax-and-vat-checkout-claims">PDV je uključen u cijenu</span>
    </div>
    <h3 class="checkout-section-title sazatak-title">Sažetak narudžbe</h3>
    <div class="noriks-order-summary"></div>
    <?php
});

// Moneyback badge after submit button (like vigoshop)
add_action( 'woocommerce_review_order_after_submit', function() {
    ?>
    <div class="moneyback-section">
        <img src="https://images.vigo-shop.com/general/guarantee_money_back/satisfaction_icon_hr.png" alt="100% Povrat" class="moneyback-img">
        <div class="moneyback-text">
            <strong>Kupujte bez brige</strong><br>
            Povrat novca moguć u roku od 90 dana.
        </div>
    </div>
    <div class="agreed_terms_txt">
        <span class="policy-agreement-obligation">Klikom na gumb <strong>Naruči</strong> pristajem na narudžbu uz obvezu plaćanja.</span>
    </div>
    <?php
});


// Vigoshop-style: keep labels (for floating effect) AND set placeholders
add_filter( 'woocommerce_checkout_fields', 'set_placeholders_keep_labels' );
function set_placeholders_keep_labels( $fields ) {
    foreach ( $fields as $section_key => $section ) {
        foreach ( $section as $field_key => $field ) {
            if ( isset( $fields[$section_key][$field_key]['label'] ) && !empty($fields[$section_key][$field_key]['label']) ) {
                // Set placeholder same as label
                $clean_label = strip_tags($fields[$section_key][$field_key]['label']);
                $fields[$section_key][$field_key]['placeholder'] = $clean_label;
                // Keep label for floating label effect
            }
        }
    }
    return $fields;
}


// Dostava title + shipping display before payment
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
add_action( 'woocommerce_checkout_after_customer_details', function() {
    echo '<h3 class="checkout-section-title dostava-title">Dostava</h3>';
    echo '<div class="noriks-shipping-section"></div>';
    echo '<div class="delivery-from-eu-warehouse"><img class="delivery-from-eu-warehouse__icon" src="https://images.vigo-shop.com/general/flags/eu-warehouse.svg"><span class="delivery-from-eu-warehouse__text">Skladište u EU</span></div>';
}, 3 );
add_action( 'woocommerce_checkout_after_customer_details', function() {
    echo '<h3 class="checkout-section-title payment-title">Način plaćanja</h3>';
}, 4 );
// Payment WITHOUT the place-order button (we render button separately after sažetak)
add_action( 'woocommerce_checkout_after_customer_details', 'woocommerce_checkout_payment', 5 );

// Move shipping + order review table via JS
add_action( 'wp_footer', function() {
    if ( ! is_checkout() || is_wc_endpoint_url('order-received') ) return;
    ?>
    <script>
    jQuery(function($){
        function rearrangeCheckout() {
            // 1. Move shipping from hidden #order_review table into .noriks-shipping-section
            var $table = $('#order_review .woocommerce-checkout-review-order-table');
            var $shippingRow = $table.find('.woocommerce-shipping-totals');
            var $shippingSection = $('.noriks-shipping-section');
            if ($shippingRow.length && $shippingSection.length) {
                var $shippingTd = $shippingRow.find('td');
                if ($shippingTd.length) {
                    // Calculate delivery dates (2-5 business days from now)
                    var now = new Date();
                    var addBizDays = function(d, days) {
                        var r = new Date(d);
                        while (days > 0) { r.setDate(r.getDate() + 1); if (r.getDay() !== 0 && r.getDay() !== 6) days--; }
                        return r;
                    };
                    var dayNames = ['nedjelja','ponedjeljak','utorak','srijeda','četvrtak','petak','subota'];
                    var from = addBizDays(now, 2);
                    var to = addBizDays(now, 5);
                    var fromStr = dayNames[from.getDay()] + ', ' + from.getDate() + '.' + (from.getMonth()+1) + '.';
                    var toStr = dayNames[to.getDay()] + ', ' + to.getDate() + '.' + (to.getMonth()+1) + '.';
                    var priceHtml = $shippingTd.html();
                    $shippingSection.html(
                        '<div class="shipping-card-content">' +
                        '<span class="shipping-check">✓</span>' +
                        '<span class="shipping-dates">' + fromStr + ' - ' + toStr + '</span>' +
                        '<span class="shipping-price-pill">' + priceHtml + '</span>' +
                        '</div>'
                    );
                    $shippingRow.hide();
                }
            }

            // 2. Clone order review table into .noriks-order-summary (before button)
            var $summary = $('.noriks-order-summary');
            if ($table.length && $summary.length) {
                $summary.html($table.clone().show().prop('outerHTML'));
            }
        }
        rearrangeCheckout();
        $(document.body).on('updated_checkout', rearrangeCheckout);
    });
    </script>
    <?php
}, 99 );







// Vigoshop format: "Nx" before product name instead of "× N" after
add_filter( 'woocommerce_cart_item_name', function( $name, $cart_item, $cart_item_key ) {
    if ( is_checkout() ) {
        $qty = $cart_item['quantity'];
        return $qty . 'x ' . $name;
    }
    return $name;
}, 10, 3 );

// Hide default quantity display since we prepend it to name
add_filter( 'woocommerce_checkout_cart_item_quantity', function() {
    return '';
}, 10 );


add_action( 'woocommerce_checkout_create_order', 'copy_billing_to_shipping_after_order', 10, 2 );
function copy_billing_to_shipping_after_order( $order, $data ) {
    // Copy each billing field to the shipping field
    $fields = [
        'first_name',
        'last_name',
        'company',
        'address_1',
        'address_2',
        'city',
        'state',
        'postcode',
        'country',
        'phone',
    ];

    foreach ( $fields as $field ) {
        $billing_value = $order->{"get_billing_$field"}();
        $order->{"set_shipping_$field"}( $billing_value );
    }
}




add_filter( 'woocommerce_gateway_description', 'remove_payment_method_description', 20, 2 );
function remove_payment_method_description( $description, $payment_id ) {
    return ''; // Return empty description
}

// Add fee badges to payment method labels (Besplatno / price)
add_filter( 'woocommerce_gateway_title', 'noriks_payment_fee_badges', 10, 2 );
function noriks_payment_fee_badges( $title, $payment_id ) {
    if ( ! is_checkout() ) return $title;
    
    // All payment methods get a fee badge
    if ( $payment_id === 'cod' ) {
        // COD might have a surcharge — check cart fees
        $cod_fee = '';
        if ( WC()->cart ) {
            foreach ( WC()->cart->get_fees() as $fee ) {
                if ( stripos( $fee->name, 'pouze' ) !== false || stripos( $fee->name, 'cod' ) !== false || stripos( $fee->name, 'pouze' ) !== false ) {
                    $cod_fee = wc_price( $fee->total + $fee->tax );
                }
            }
        }
        if ( $cod_fee ) {
            $title .= ' <span class="payment-fee-not-free">' . $cod_fee . '</span>';
        } else {
            $title .= ' <span class="payment-fee-free">Besplatno</span>';
        }
        $title .= ' <div class="hs-checkout__payment-method-cod-icon-container"><img class="hs-checkout__payment-method-cod-icon" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg" /></div>';
    } else {
        $title .= ' <span class="payment-fee-free">Besplatno</span>';
    }
    
    return $title;
}



add_filter( 'woocommerce_cart_shipping_method_full_label', 'custom_shipping_label_price_only', 10, 2 );
function custom_shipping_label_price_only( $label, $method ) {
    if ( is_checkout() ) {
        // Get only the cost formatted
        $price = wc_price( $method->cost + array_sum( $method->get_taxes() ) );

        return $price; // Output just the price, like "2,99 €"
    }

    return $label; // Keep default elsewhere (e.g., cart)
}





add_filter( 'woocommerce_package_rates', 'auto_select_and_hide_paid_shipping_when_free', 100, 2 );
function auto_select_and_hide_paid_shipping_when_free( $rates, $package ) {
    $free = [];

    foreach ( $rates as $rate_id => $rate ) {
        if ( 'free_shipping' === $rate->method_id ) {
            $free[ $rate_id ] = $rate;
            break; // only need one free method
        }
    }

    return ! empty( $free ) ? $free : $rates;
}

// Change "Ukupno" to "Ukupni iznos:" in checkout order review
add_filter( 'gettext', function( $translated, $text, $domain ) {
    if ( is_checkout() && $text === 'Total' && $domain === 'woocommerce' ) {
        return 'Ukupni iznos:';
    }
    return $translated;
}, 10, 3 );

// Payment method order: COD first, then CC, then PayPal (like vigoshop)
add_filter( 'woocommerce_available_payment_gateways', function( $gateways ) {
    if ( ! is_checkout() ) return $gateways;
    $order = array( 'cod', 'stripe_cc', 'ppcp-gateway' );
    $sorted = array();
    foreach ( $order as $id ) {
        if ( isset( $gateways[ $id ] ) ) {
            $sorted[ $id ] = $gateways[ $id ];
        }
    }
    // Add any remaining gateways
    foreach ( $gateways as $id => $gw ) {
        if ( ! isset( $sorted[ $id ] ) ) {
            $sorted[ $id ] = $gw;
        }
    }
    return $sorted;
}, 100 );
