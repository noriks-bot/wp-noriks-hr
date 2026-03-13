<?php
/**
 * Checkout Modifications - Noriks HR
 * Pixel-perfect vigoshop.hr copy
 */

// Force Croatia as billing country
add_filter('default_checkout_billing_country', function() { return 'HR'; });

// Remove billing_country field from checkout
add_filter('woocommerce_checkout_fields', function($fields) {
    // Remove country and state fields
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    
    // Remove company field
    unset($fields['billing']['billing_company']);
    
    // Remove order comments (we don't use additional fields section)
    unset($fields['order']['order_comments']);

    // Field ordering and Croatian labels
    $fields['billing']['billing_first_name']['priority'] = 30;
    $fields['billing']['billing_first_name']['label'] = 'Ime';
    $fields['billing']['billing_first_name']['placeholder'] = 'Ime';
    $fields['billing']['billing_first_name']['class'] = ['form-row-first', 'form-group', 'col-xs-12'];
    $fields['billing']['billing_first_name']['custom_attributes']['maxlength'] = 80;
    $fields['billing']['billing_first_name']['custom_attributes']['autocomplete'] = 'given-name';

    $fields['billing']['billing_last_name']['priority'] = 40;
    $fields['billing']['billing_last_name']['label'] = 'Prezime';
    $fields['billing']['billing_last_name']['placeholder'] = 'Prezime';
    $fields['billing']['billing_last_name']['class'] = ['form-row-last', 'form-group', 'col-xs-12'];
    $fields['billing']['billing_last_name']['custom_attributes']['maxlength'] = 80;
    $fields['billing']['billing_last_name']['custom_attributes']['autocomplete'] = 'family-name';

    $fields['billing']['billing_address_1']['priority'] = 50;
    $fields['billing']['billing_address_1']['label'] = 'Ulica';
    $fields['billing']['billing_address_1']['placeholder'] = 'Ulica';
    $fields['billing']['billing_address_1']['class'] = ['form-row-wide', 'address-field', 'form-group', 'col-xs-12'];
    $fields['billing']['billing_address_1']['custom_attributes']['maxlength'] = 80;

    $fields['billing']['billing_address_2']['priority'] = 60;
    $fields['billing']['billing_address_2']['label'] = 'Kućni broj';
    $fields['billing']['billing_address_2']['placeholder'] = 'Kućni broj';
    $fields['billing']['billing_address_2']['required'] = true;
    $fields['billing']['billing_address_2']['class'] = ['form-row-wide', 'address-field', 'form-group', 'col-xs-12'];
    $fields['billing']['billing_address_2']['label_class'] = ['screen-reader-text'];
    $fields['billing']['billing_address_2']['custom_attributes']['maxlength'] = 80;

    $fields['billing']['billing_postcode']['priority'] = 70;
    $fields['billing']['billing_postcode']['label'] = 'Poštanski broj';
    $fields['billing']['billing_postcode']['placeholder'] = 'Poštanski broj';
    $fields['billing']['billing_postcode']['type'] = 'tel';
    $fields['billing']['billing_postcode']['class'] = ['form-row-wide', 'address-field', 'form-group', 'col-xs-12'];
    $fields['billing']['billing_postcode']['custom_attributes']['maxlength'] = 30;

    $fields['billing']['billing_city']['priority'] = 80;
    $fields['billing']['billing_city']['label'] = 'Grad';
    $fields['billing']['billing_city']['placeholder'] = 'Grad';
    $fields['billing']['billing_city']['class'] = ['form-row-wide', 'address-field', 'form-group', 'col-xs-12'];
    $fields['billing']['billing_city']['custom_attributes']['maxlength'] = 80;

    $fields['billing']['billing_phone']['priority'] = 85;
    $fields['billing']['billing_phone']['label'] = 'Telefon';
    $fields['billing']['billing_phone']['placeholder'] = 'Broj mobilnog telefona';
    $fields['billing']['billing_phone']['class'] = ['form-row-wide', 'form-group', 'col-xs-12'];
    $fields['billing']['billing_phone']['custom_attributes']['maxlength'] = 17;

    $fields['billing']['billing_email']['priority'] = 86;
    $fields['billing']['billing_email']['label'] = 'E-mail adresa';
    $fields['billing']['billing_email']['placeholder'] = 'E-mail adresa';
    $fields['billing']['billing_email']['required'] = false;
    $fields['billing']['billing_email']['class'] = ['form-row-wide', 'form-group', 'col-xs-12'];
    $fields['billing']['billing_email']['custom_attributes']['maxlength'] = 80;

    return $fields;
});

// Force billing country to HR on checkout process
add_action('woocommerce_checkout_process', function() {
    $_POST['billing_country'] = 'HR';
});
add_filter('woocommerce_checkout_posted_data', function($data) {
    $data['billing_country'] = 'HR';
    return $data;
});

// Address hint after last name field
add_action('woocommerce_after_checkout_billing_form', function($checkout) {
    // The address hint is rendered in form-checkout.php directly
});

// NUCLEAR style dequeue on checkout page
add_action('wp_enqueue_scripts', function() {
    if (!is_checkout()) return;

    // Enqueue our checkout CSS
    wp_enqueue_style('noriks-checkout', get_stylesheet_directory_uri() . '/css/checkout.css', [], filemtime(get_stylesheet_directory() . '/css/checkout.css'));
    
    // Google Fonts - Roboto
    wp_enqueue_style('google-fonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap', [], null);

}, 5);

// Dequeue ALL other styles on checkout
add_action('wp_enqueue_scripts', function() {
    if (!is_checkout()) return;

    global $wp_styles;
    if (!empty($wp_styles->registered)) {
        foreach ($wp_styles->registered as $handle => $style) {
            if ($handle === 'noriks-checkout' || $handle === 'google-fonts-roboto') continue;
            wp_dequeue_style($handle);
        }
    }
}, 999);

// Also dequeue in print styles
add_action('wp_print_styles', function() {
    if (!is_checkout()) return;

    global $wp_styles;
    if (!empty($wp_styles->registered)) {
        foreach ($wp_styles->registered as $handle => $style) {
            if ($handle === 'noriks-checkout' || $handle === 'google-fonts-roboto') continue;
            wp_dequeue_style($handle);
        }
    }
}, 999);

// Hide elements via body class
add_filter('body_class', function($classes) {
    if (is_checkout()) {
        $classes[] = 'noriks-checkout-page';
        $classes[] = 'brand-vigoshop';
        $classes[] = 'theme-vigoshop';
    }
    return $classes;
});

// Add address hint after last name via woocommerce_form_field_args
add_filter('woocommerce_form_field_args', function($args, $key, $value) {
    // Add form-input class to all inputs
    if (isset($args['input_class'])) {
        $args['input_class'][] = 'form-input';
    } else {
        $args['input_class'] = ['form-input'];
    }
    return $args;
}, 10, 3);
