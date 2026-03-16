<?php
/**
 * Checkout Hijack — Serve vigoshop standalone HTML with WC dynamic parts
 * Bypasses WP template entirely for pixel-perfect /test-checkout/ match
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Intercept checkout page — output standalone vigoshop HTML with WC functionality
 */
add_action( 'template_redirect', function() {
    if ( ! is_checkout() || is_wc_endpoint_url() ) return;
    
    // Make sure cart is not empty
    if ( WC()->cart->is_empty() ) return;
    
    // Start output
    noriks_render_checkout();
    exit;
});

function noriks_render_checkout() {
    $checkout = WC()->checkout();
    
    // Read the standalone template
    $template_path = get_stylesheet_directory() . '/template-vigocheckout.php';
    $html = file_get_contents( $template_path );
    
    // Strip the PHP header (first few lines before <!DOCTYPE)
    $html = preg_replace( '/^<\?php[\s\S]*?\?>\s*/m', '', $html );
    
    // 1. Fix form action — point to WC checkout URL
    $html = str_replace( 'action="#"', 'action="' . esc_url( wc_get_checkout_url() ) . '"', $html );
    
    // 2. Replace static billing fields with WC dynamic fields
    // The static fields are between <div class="woocommerce-billing-fields__field-wrapper"> and its closing </div>
    // followed by closing divs for billing-fields, col-1, then col-2 with shipping-fields + additional-fields
    
    // Capture WC billing fields HTML
    ob_start();
    echo '<h3 class="checkout-billing-title">Plaćanje i Dostava</h3>';
    echo '<div class="woocommerce-billing-fields__field-wrapper">';
    $fields = $checkout->get_checkout_fields( 'billing' );
    // Reorder: first_name, last_name, address hint, address_1, address_2, postcode, city, phone, email
    $field_order = array(
        'billing_first_name', 'billing_last_name',
        '__address_hint__',
        'billing_address_1', 'billing_address_2',
        'billing_postcode', 'billing_city',
        'billing_phone', 'billing_email',
        'billing_country',
    );
    
    foreach ( $field_order as $key ) {
        if ( $key === '__address_hint__' ) {
            echo '<div class="form-row form-row-wide col-xs-12">Unesite adresu na kojoj ćete biti <b>između 8:00 i 16:00 sati</b>.</div>';
            continue;
        }
        if ( ! isset( $fields[ $key ] ) ) continue;
        $field = $fields[ $key ];
        
        // Set vigoshop classes
        $field['input_class'] = array( 'input-text', 'form-input' );
        
        switch ( $key ) {
            case 'billing_first_name':
                $field['class'] = array( 'form-row', 'form-row-first', 'form-group', 'col-xs-12', 'validate-required' );
                $field['placeholder'] = 'Ime';
                $field['label'] = 'Ime';
                $field['maxlength'] = 80;
                break;
            case 'billing_last_name':
                $field['class'] = array( 'form-row', 'form-row-last', 'form-group', 'col-xs-12', 'validate-required' );
                $field['placeholder'] = 'Prezime';
                $field['label'] = 'Prezime';
                $field['maxlength'] = 80;
                break;
            case 'billing_address_1':
                $field['class'] = array( 'form-row', 'form-row-wide', 'address-field', 'form-group', 'form-group', 'col-xs-12', 'validate-required' );
                $field['placeholder'] = 'Ulica';
                $field['label'] = 'Ulica';
                $field['maxlength'] = 80;
                break;
            case 'billing_address_2':
                $field['class'] = array( 'form-row', 'form-row-wide', 'address-field', 'form-group', 'form-group', 'col-xs-12', 'validate-required' );
                $field['placeholder'] = 'Kućni broj';
                $field['label'] = 'Kućni broj';
                $field['label_class'] = array( 'screen-reader-text' );
                $field['required'] = true;
                $field['maxlength'] = 80;
                break;
            case 'billing_postcode':
                $field['class'] = array( 'form-row', 'form-row-wide', 'address-field', 'form-group', 'form-group', 'col-xs-12', 'validate-required', 'validate-postcode' );
                $field['placeholder'] = 'Poštanski broj';
                $field['label'] = 'Poštanski broj';
                $field['type'] = 'tel';
                $field['maxlength'] = 30;
                break;
            case 'billing_city':
                $field['class'] = array( 'form-row', 'form-row-wide', 'dropdown', 'form-group', 'form-group', 'col-xs-12', 'validate-required' );
                $field['placeholder'] = 'Odaberite grad';
                $field['label'] = 'Grad';
                break;
            case 'billing_phone':
                $field['class'] = array( 'form-row', 'form-row-wide', 'form-group', 'col-xs-12', 'validate-required', 'validate-phone' );
                $field['placeholder'] = 'Broj mobilnog telefona';
                $field['label'] = 'Telefon';
                $field['maxlength'] = 17;
                $field['priority'] = 10;
                break;
            case 'billing_email':
                $field['class'] = array( 'form-row', 'form-row-wide', 'form-group', 'col-xs-12', 'validate-email' );
                $field['placeholder'] = 'E-mail adresa';
                $field['label'] = 'E-mail adresa';
                $field['required'] = false;
                $field['maxlength'] = 80;
                break;
            case 'billing_country':
                $field['class'] = array( 'form-row', 'form-row-wide', 'address-field', 'update_totals_on_change', 'form-group', 'col-xs-12', 'validate-required' );
                $field['default'] = 'HR';
                break;
        }
        
        woocommerce_form_field( $key, $field, $checkout->get_value( $key ) );
    }
    echo '</div>'; // close field-wrapper
    $billing_html = ob_get_clean();
    
    // Replace the static billing section
    // Pattern: from <h3 class="checkout-billing-title"> through </div> closing of woocommerce-billing-fields__field-wrapper
    $html = preg_replace(
        '/<h3 class="checkout-billing-title">.*?<div class="woocommerce-billing-fields__field-wrapper">\s*.*?<\/div>\s*\n\s*<\/div>/s',
        $billing_html . "\n</div>",
        $html,
        1
    );
    
    // 3. Replace static order summary with dynamic cart
    ob_start();
    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $product = $cart_item['data'];
        $qty     = $cart_item['quantity'];
        $name    = $product->get_name();
        $price   = WC()->cart->get_product_subtotal( $product, $qty );
        $attrs   = '';
        if ( ! empty( $cart_item['variation'] ) ) {
            $parts = array();
            foreach ( $cart_item['variation'] as $attr_key => $attr_val ) {
                $parts[] = wc_attribute_label( str_replace( 'attribute_', '', $attr_key ) ) . ': ' . $attr_val;
            }
            $attrs = implode( ', ', $parts );
        }
        ?>
        <div class="c--darkgray review-section-container">
            <div class="review-product-info">
                <div><?php echo esc_html( $qty . 'x ' . $name ); ?></div>
                <?php if ( $attrs ) : ?>
                <div class="review-product-info__attributes"><?php echo esc_html( $attrs ); ?></div>
                <?php endif; ?>
            </div>
            <div class="info-price">
                <span class="review-sale-price"><?php echo $price; ?></span>
            </div>
            <div class="review-product-remove"></div>
        </div>
        <?php
    }
    $cart_items_html = ob_get_clean();
    
    // Replace the static product item(s) between review-all-products-container and shipping_order_review
    $html = preg_replace(
        '/<div class="col-xs-12 f--m flex flex--vertical vigo-checkout-total__content">\s*<div class="c--darkgray review-section-container">.*?(?=<!--\s*Shipping section)/s',
        '<div class="col-xs-12 f--m flex flex--vertical vigo-checkout-total__content">' . "\n" . $cart_items_html . "\n",
        $html,
        1
    );
    
    // Replace total amount
    $total = WC()->cart->get_total();
    $html = preg_replace(
        '/Ukupni iznos:.*?<\/div>/s',
        'Ukupni iznos: <span class="f--bold price_total_wrapper">' . $total . '</span></div>',
        $html,
        1
    );
    
    // 4. Add hidden WC payment div + nonce before the closing </form>
    $hidden_payment = '<div id="payment" class="woocommerce-checkout-payment" style="position:absolute;left:-9999px;opacity:0;height:0;overflow:hidden;pointer-events:none;">';
    
    // Get available payment gateways
    $gateways = WC()->payment_gateways->get_available_payment_gateways();
    if ( ! empty( $gateways ) ) {
        $hidden_payment .= '<ul class="wc_payment_methods payment_methods methods">';
        $first = true;
        foreach ( $gateways as $gateway ) {
            $hidden_payment .= '<li class="wc_payment_method payment_method_' . esc_attr( $gateway->id ) . '">';
            $hidden_payment .= '<input id="payment_method_' . esc_attr( $gateway->id ) . '" type="radio" class="input-radio" name="payment_method" value="' . esc_attr( $gateway->id ) . '"' . ( $first ? ' checked="checked"' : '' ) . ' />';
            $hidden_payment .= '</li>';
            $first = false;
        }
        $hidden_payment .= '</ul>';
    }
    $hidden_payment .= '<div class="form-row place-order">';
    $hidden_payment .= '<button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Naruči" data-value="Naruči">Naruči</button>';
    $hidden_payment .= wp_nonce_field( 'woocommerce-process_checkout', 'woocommerce-process-checkout-nonce', true, false );
    $hidden_payment .= '<input type="hidden" name="_wp_http_referer" value="' . esc_url( wc_get_checkout_url() ) . '" />';
    $hidden_payment .= '</div></div>';
    
    $html = str_replace( '</form>', $hidden_payment . '</form>', $html );
    
    // 5. Add WC checkout JS before </body>
    $wc_scripts = '';
    
    // jQuery (already in standalone template from vigoshop CDN)
    // We need WC checkout JS + its params
    $wc_ajax_url = WC()->ajax_url();
    $checkout_url = wc_get_checkout_url();
    
    $wc_scripts .= '<script>
    var wc_checkout_params = ' . json_encode( array(
        'ajax_url'                   => admin_url( 'admin-ajax.php' ),
        'wc_ajax_url'                => WC_AJAX::get_endpoint( '%%endpoint%%' ),
        'update_order_review_nonce'  => wp_create_nonce( 'update-order-review' ),
        'apply_coupon_nonce'         => wp_create_nonce( 'apply-coupon' ),
        'remove_coupon_nonce'        => wp_create_nonce( 'remove-coupon' ),
        'option_guest_checkout'      => get_option( 'woocommerce_enable_guest_checkout' ),
        'checkout_url'               => WC_AJAX::get_endpoint( 'checkout' ),
        'is_checkout'                => '1',
        'debug_mode'                 => '',
        'i18n_checkout_error'        => 'Došlo je do greške prilikom obrade narudžbe.',
    ) ) . ';
    var wc_country_select_params = ' . json_encode( array(
        'countries'              => json_encode( WC()->countries->get_allowed_country_states() ),
        'i18n_select_state_text' => 'Odaberite opciju…',
        'i18n_no_matches'        => 'Nema rezultata pretrage.',
        'i18n_ajax_error'        => 'Učitavanje neuspjelo',
        'i18n_input_too_short_1' => 'Molimo unesite 1 ili više znakova',
        'i18n_input_too_short_n' => 'Molimo unesite %qty% ili više znakova',
        'i18n_input_too_long_1'  => 'Molimo obrišite 1 znak',
        'i18n_input_too_long_n'  => 'Molimo izbrišite %qty% znakova',
        'i18n_selection_too_long_1' => 'Možete označiti samo 1 stavku',
        'i18n_selection_too_long_n' => 'Možete označiti %qty% stavki',
        'i18n_load_more'         => 'Učitavanje više rezultata…',
        'i18n_searching'         => 'Pretraživanje…',
    ) ) . ';
    var wc_address_i18n_params = ' . json_encode( array(
        'locale'             => json_encode( WC()->countries->get_country_locale() ),
        'locale_fields'      => json_encode( array(
            'address_1' => '#billing_address_1_field, #shipping_address_1_field',
            'address_2' => '#billing_address_2_field, #shipping_address_2_field',
            'state'     => '#billing_state_field, #shipping_state_field',
            'postcode'  => '#billing_postcode_field, #shipping_postcode_field',
            'city'      => '#billing_city_field, #shipping_city_field',
        )),
        'i18n_required_text' => 'Obavezno',
        'i18n_optional_text' => 'neobavezno',
    ) ) . ';
    var woocommerce_params = ' . json_encode( array(
        'ajax_url'   => admin_url( 'admin-ajax.php' ),
        'wc_ajax_url' => WC_AJAX::get_endpoint( '%%endpoint%%' ),
    ) ) . ';
    </script>';
    
    // WC scripts from WP install
    $wc_plugin_url = WC()->plugin_url();
    $wp_includes_url = includes_url();
    
    $wc_scripts .= '<script src="' . $wp_includes_url . 'js/dist/hooks.min.js"></script>';
    $wc_scripts .= '<script src="' . $wp_includes_url . 'js/dist/i18n.min.js"></script>';
    $wc_scripts .= '<script>wp.i18n.setLocaleData( { "text direction\\u0004ltr": [ "ltr" ] } );</script>';
    $wc_scripts .= '<script src="' . $wc_plugin_url . '/assets/js/frontend/country-select.min.js" defer></script>';
    $wc_scripts .= '<script src="' . $wc_plugin_url . '/assets/js/frontend/address-i18n.min.js" defer></script>';
    $wc_scripts .= '<script src="' . $wc_plugin_url . '/assets/js/frontend/woocommerce.min.js" defer></script>';
    $wc_scripts .= '<script src="' . $wc_plugin_url . '/assets/js/frontend/checkout.min.js" defer></script>';
    
    // 6. Payment sync + delivery dates JS
    $wc_scripts .= '<script>
    jQuery(function($) {
        // Sync visible payment radios to hidden WC radios
        $("#noriks-payment, #payment").on("change", "input[name=noriks_payment]", function() {
            var val = $(this).val();
            $("#payment input[name=payment_method]").each(function() {
                if ($(this).val() === val) {
                    $(this).prop("checked", true).trigger("change");
                }
            });
            // COD prompt
            $("#hs-cod-checkout-prompt").toggle(val === "cod");
        });
        
        // Visible button triggers hidden WC button
        $("#noriks_place_order, #place_order_visible").on("click", function(e) {
            e.preventDefault();
            $("#place_order").trigger("click");
        });
        
        // Delivery dates (2-5 business days)
        var days = ["nedjelja","ponedjeljak","utorak","srijeda","četvrtak","petak","subota"];
        function addBiz(d,n){var r=new Date(d);while(n>0){r.setDate(r.getDate()+1);if(r.getDay()!==0&&r.getDay()!==6)n--;}return r;}
        var now=new Date(), from=addBiz(now,2), to=addBiz(now,5);
        $(".hs-custom-date").text(days[from.getDay()]+", "+from.getDate()+"."+(from.getMonth()+1)+". - "+days[to.getDay()]+", "+to.getDate()+"."+(to.getMonth()+1)+".");
        
        // Trigger initial checkout update
        $(document.body).trigger("update_checkout");
    });
    </script>';
    
    $html = str_replace( '</body>', $wc_scripts . '</body>', $html );
    
    // 7. Add visible payment sync div — replace static payment radios with ones that sync
    // Make the visible button trigger the hidden WC one
    $html = str_replace(
        'id="place_order" data-value="Naruči" />Naruči</button>',
        'id="place_order_visible" data-value="Naruči" onclick="jQuery(\'#place_order\').click();return false;">Naruči</button>',
        $html
    );
    
    // 8. Add id to visible payment section for JS targeting
    // The payment section in standalone uses <div id="payment">, rename the visible one
    // Actually the standalone has the real #payment div. We need to:
    // - Rename visible payment to #noriks-payment
    // - Our hidden one is already #payment
    // Find the visible payment div and add noriks- prefix
    $html = preg_replace(
        '/<div id="payment" class="woocommerce-checkout-payment">\s*<ul class="wc_payment_methods/s',
        '<div id="noriks-payment" class="woocommerce-checkout-payment"><ul class="wc_payment_methods',
        $html,
        1
    );
    
    // Add noriks_payment name to visible radios (they currently use payment_method)
    // This avoids conflict with hidden WC radios
    $html = preg_replace(
        '/(<div id="noriks-payment"[\s\S]*?<\/div>\s*<\/div>)\s*<div class="form-row place-order">/s',
        '$0',
        $html
    );
    // Actually: rename the visible radio names from payment_method to noriks_payment
    // Find radios inside noriks-payment div
    // Simpler: just add name="noriks_payment" via string replacement on the specific radio IDs
    $html = str_replace( 'id="payment_method_cod" type="radio" class="input-radio" name="payment_method"', 
                          'id="payment_method_cod_vis" type="radio" class="input-radio" name="noriks_payment"', $html );
    $html = str_replace( 'id="payment_method_braintree_credit_card" type="radio" class="input-radio" name="payment_method"',
                          'id="payment_method_card_vis" type="radio" class="input-radio" name="noriks_payment"', $html );
    $html = str_replace( 'id="payment_method_braintree_paypal" type="radio" class="input-radio" name="payment_method"',
                          'id="payment_method_paypal_vis" type="radio" class="input-radio" name="noriks_payment"', $html );
    
    // Fix label for= references
    $html = str_replace( 'for="payment_method_cod"', 'for="payment_method_cod_vis"', $html );
    $html = str_replace( 'for="payment_method_braintree_credit_card"', 'for="payment_method_card_vis"', $html );
    $html = str_replace( 'for="payment_method_braintree_paypal"', 'for="payment_method_paypal_vis"', $html );
    
    // 9. Hide state, country, newsletter fields via inline style
    $hide_css = '<style>
    #billing_state_field, #billing_country_field, #kl_newsletter_checkbox_field, #hsplus_accepts_marketing_field,
    .woocommerce-additional-fields, .woocommerce-additional-fields__field-wrapper { display: none !important; }
    </style>';
    $html = str_replace( '</head>', $hide_css . '</head>', $html );
    
    // Output
    echo $html;
}
