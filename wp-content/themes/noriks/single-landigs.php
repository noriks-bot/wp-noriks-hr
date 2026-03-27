<?php
/**
 * Template Post Type: landigs
 */

$landing_url    = get_permalink();
$cart_url       = function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/cart/');
$home_url       = home_url('/');
$asset_base_url = trailingslashit(get_template_directory_uri()) . 'assets/js/landigs';
$source_path    = get_template_directory() . '/template_parts/landigs/step-landing-source.php';

if (!file_exists($source_path)) {
    status_header(500);
    wp_die(esc_html__('Step landing source template is missing.', 'textdomain'));
}

$source_markup = file_get_contents($source_path);
$sku_matches   = array();
preg_match_all('/"sku":"([^"]+)"/', $source_markup, $sku_matches);
$skus          = array_values(array_unique($sku_matches[1] ?? array()));

$sku_map           = array();
$current_product   = 0;

if (function_exists('wc_get_product_id_by_sku')) {
    foreach ($skus as $sku) {
        $product_id = wc_get_product_id_by_sku($sku);
        if (!$product_id) {
            continue;
        }

        $product = wc_get_product($product_id);
        if (!$product || !$product->is_type('variation')) {
            continue;
        }

        if (!$current_product) {
            $current_product = (int) $product->get_parent_id();
        }

        $sku_map[$sku] = array(
            'id' => (int) $product->get_id(),
            'b'  => (string) $product->get_attribute('pa_barva'),
            'v'  => (string) $product->get_attribute('pa_velikost'),
        );
    }
}

$runtime_config = array(
    'landingUrl' => $landing_url,
    'cartUrl'    => $cart_url,
    'homeUrl'    => $home_url,
    'productId'  => $current_product,
    'skuMap'     => $sku_map,
);

$runtime_script = sprintf(
    '<script>window.noriksStepLandingConfig = %s;</script>' . "\n" .
    '<script src="%s?v=1.0"></script>',
    wp_json_encode($runtime_config),
    esc_url($asset_base_url . '/step-landing.js')
);

$legacy_wc_fix_tag       = sprintf('<script src="%s/wc-atc-fix.js?v=1.0"></script>', get_template_directory_uri());
$legacy_homepage_fix_tag = '<script src="/wp-content/themes/ortostep/homepage-atc-fix.js?v=1.0"></script>';

ob_start();
include $source_path;
$markup = ob_get_clean();

$markup = str_replace(
    array(
        'https://ortowp.noriks.com/product/stepease/',
        'https://ortowp.noriks.com/cart/',
        'https://ortowp.noriks.com/',
        $legacy_wc_fix_tag . "\n" . $legacy_homepage_fix_tag,
        $legacy_wc_fix_tag,
        $legacy_homepage_fix_tag,
    ),
    array(
        esc_url($landing_url),
        esc_url($cart_url),
        esc_url($home_url),
        $runtime_script,
        $runtime_script,
        '',
    ),
    $markup
);

echo $markup; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
