<?php
/**
 * Template Post Type: landigs
 */

$landing_url    = get_permalink();
$cart_url       = function_exists('wc_get_cart_url') ? wc_get_cart_url() : home_url('/cart/');
$home_url       = home_url('/');
$asset_base_url = trailingslashit(get_template_directory_uri()) . 'assets/js/landigs';
$source_path    = get_template_directory() . '/template_parts/landigs/step-landing-source.php';

if (!function_exists('noriks_parse_landigs_visual_options')) {
    function noriks_parse_landigs_visual_options($raw_options, $type = 'primary') {
        $lines = preg_split('/\r\n|\r|\n/', (string) $raw_options);
        $options = array();
        $index = 1;

        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '') {
                continue;
            }

            $parts = array_map('trim', explode('|', $line));
            $label = $parts[0] ?? '';

            if ($label === '') {
                continue;
            }

            $option = array(
                'id'       => sprintf('landigs-%s-%d', $type, $index),
                'name'     => $label,
                'selected' => $index === 1,
            );

            if ($type === 'primary') {
                $option['value'] = $parts[1] ?? '#111111';
            }

            $options[] = $option;
            $index++;
        }

        return $options;
    }
}

if (!function_exists('noriks_parse_landigs_offer_options')) {
    function noriks_parse_landigs_offer_options($raw_offers) {
        $lines = preg_split('/\r\n|\r|\n/', (string) $raw_offers);
        $offers = array();
        $index = 1;

        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '') {
                continue;
            }

            $parts = array_map('trim', explode('|', $line));
            $quantity = isset($parts[0]) ? (int) $parts[0] : 0;

            if ($quantity < 1) {
                continue;
            }

            $offers[] = array(
                'quantity' => $quantity,
                'title'    => $parts[1] ?? sprintf('%d x', $quantity),
                'subtitle' => $parts[2] ?? '',
                'badge'    => $parts[3] ?? '',
                'selected' => $index === 2,
            );

            $index++;
        }

        return $offers;
    }
}

if (!function_exists('noriks_ensure_default_landing_offers')) {
    function noriks_ensure_default_landing_offers($offers) {
        $has_five = false;

        foreach ($offers as $offer) {
            if (!empty($offer['quantity']) && (int) $offer['quantity'] === 5) {
                $has_five = true;
                break;
            }
        }

        if (!$has_five) {
            $offers[] = array(
                'quantity' => 5,
                'title'    => '5 majic',
                'subtitle' => 'Najveći paket za maksimalnu uštedu',
                'badge'    => '',
                'selected' => false,
            );
        }

        return $offers;
    }
}

if (!function_exists('noriks_get_sidecart_assets_markup')) {
    function noriks_get_sidecart_assets_markup() {
        if (!function_exists('xoo_wsc') || !function_exists('xoo_wsc_frontend') || !function_exists('xoo_wsc_helper')) {
            return array(
                'head' => '',
                'body' => '',
            );
        }

        $loader = xoo_wsc();
        $previous_is_sidecart_page = isset($loader->isSideCartPage) ? $loader->isSideCartPage : null;
        $loader->isSideCartPage = true;

        xoo_wsc_frontend()->enqueue_styles();
        xoo_wsc_frontend()->enqueue_scripts();

        ob_start();
        wp_print_styles(array('xoo-wsc-fonts', 'xoo-wsc-style'));
        wp_print_scripts(array('xoo-wsc-main-js'));
        $head_assets = ob_get_clean();

        ob_start();
        xoo_wsc_helper()->get_template('/global/markup-notice.php');
        xoo_wsc_helper()->get_template('xoo-wsc-markup.php');
        $body_markup = ob_get_clean();

        $loader->isSideCartPage = $previous_is_sidecart_page;

        return array(
            'head' => $head_assets,
            'body' => $body_markup,
        );
    }
}

if (!function_exists('noriks_customize_step_landing_markup')) {
    function noriks_customize_step_landing_markup($markup, $landing_url, $cart_url, $home_url) {
        $markup = preg_replace(
            '#<div class="loockat-slider__wrapper video">.*?</div>\s*</div>\s*<!-- SLIDER TWO -->#s',
            '<!-- SLIDER TWO -->',
            $markup,
            1
        );

        $markup = str_replace(
            array(
                'https://ortowp.noriks.com/product/stepease/',
                'https://ortowp.noriks.com/cart/',
                'https://ortowp.noriks.com/kosarica/?add-more=',
                'https://ortowp.noriks.com/',
            ),
            array(
                esc_url($landing_url),
                esc_url($cart_url),
                esc_url($cart_url),
                esc_url($home_url),
            ),
            $markup
        );

        $text_replacements = array(
            'STEPEASE - OrthoStep' => 'NORIKS - NORIKS',
            'Ortopedski vlo&#x17E;ki z masa&#x17E;nimi to&#x10D;kami | STEPEASE' => 'NORIKS MAJICA | NORIKS',
            'Ortopedski vložki z masažnimi točkami | STEPEASE' => 'NORIKS MAJICA | NORIKS',
            'STEPEASE&#xA0;|&#xA0;Masa&#x17E;ni vlo&#x17E;ki' => 'NORIKS&#xA0;|&#xA0;Majica',
            'STEPEASE | Masažni vložki' => 'NORIKS | Majica',
            '93% strank je ocenilo Stepease z odličnostjo' => '93% strank je ocenilo NORIKS z odličnostjo',
            'Ali se STEPEASE prilegajo mojim &#x10D;evljem?' => 'Ali se NORIKS majica prilega meni?',
            'Kako dolgo zdr&#x17E;ijo vlo&#x17E;ki STEPEASE?' => 'Kako dolgo traju NORIKS majice?',
            'Kako dolgo zdržijo vložki STEPEASE?' => 'Kako dolgo traju NORIKS majice?',
            'Spoznaj vlo&#x17E;ke STEPEASE &#x2013; popolno udobje za tvoja stopala.' => 'Spoznaj NORIKS majicu za vsakodnevnu udobnost.',
            'Razlika, ki jo prina&#x161;a <span class="accent">STEPEASE</span>' => 'Razlika, ki jo prinaša <span class="accent">NORIKS</span>',
            'Poglejte, kako drugi <span class="accent">obu&#x17E;ujejo svoje vlo&#x17E;ke STEPEASE</span>' => 'Poglejte, kako drugi <span class="accent">nose svoju NORIKS majicu</span>',
            'Kaj dela STEPEASE tako <span class="accent">posebne</span>?' => 'Kaj dela NORIKS tako <span class="accent">posebnim</span>?',
            'Odkrijte, zakaj <span class="accent">strokovnjaki priporo&#x10D;ajo</span> STEPEASE' => 'Odkrijte, zakaj <span class="accent">kupci priporočajo</span> NORIKS',
            'Spletna trgovina Stepease' => 'Spletna trgovina NORIKS',
            'var brand = \'Stepease\';' => 'var brand = \'NORIKS\';',
            'var brandSettings = {"name":"Stepease"};' => 'var brandSettings = {"name":"NORIKS"};',
            'OrthoStep &raquo; STEPEASE Vir komentarjev' => 'NORIKS &raquo; NORIKS Vir komentarjev',
            'name":"STEPEASE"' => 'name":"NORIKS"',
            'name":"STEPEASE - OrthoStep"' => 'name":"NORIKS - NORIKS"',
            'Ortopedski vlo&#x17E;ki' => 'Majica',
            'Ortopedski vložki' => 'Majica',
            'vlo&#x17E;ki' => 'majice',
            'Vlo&#x17E;ki' => 'Majice',
            'vložki' => 'majice',
            'Vložki' => 'Majice',
        );

        $markup = str_replace(array_keys($text_replacements), array_values($text_replacements), $markup);

        return $markup;
    }
}

$target_product_url = get_post_meta(get_the_ID(), '_landigs_target_product_url', true);
$target_product_id  = (int) get_post_meta(get_the_ID(), '_landigs_target_product_id', true);

if (!$target_product_url) {
    $target_product_url = home_url('/hr/product/noriks-majica/');
}

if (!$target_product_id) {
    $target_product_id = 3421;
}

$primary_label     = get_post_meta(get_the_ID(), '_landigs_primary_label', true);
$primary_options   = get_post_meta(get_the_ID(), '_landigs_primary_options', true);
$secondary_label   = get_post_meta(get_the_ID(), '_landigs_secondary_label', true);
$secondary_options = get_post_meta(get_the_ID(), '_landigs_secondary_options', true);
$hide_secondary    = get_post_meta(get_the_ID(), '_landigs_hide_secondary', true);
$offer_options     = get_post_meta(get_the_ID(), '_landigs_offer_options', true);

if ($primary_label === '') {
    $primary_label = 'Boja';
}

if ($secondary_label === '') {
    $secondary_label = 'Varijanta';
}

if ($primary_options === '') {
    $primary_options = implode("\n", array(
        'Crna|#000000',
        'Bijela|#f3f4f6',
        'Siva|#9ca3af',
        'Tamnoplava|#203240',
        'Smeđa|#6b4f3a',
        'Zelena|#556b2f',
    ));
}

if ($offer_options === '') {
    $offer_options = implode("\n", array(
        '1|1 majica|Odličan ulazni paket|',
        '2|2 majice|Najbolji omjer cijene i količine|NAJPOPULARNIJE',
        '3|3 majice|Najveća ušteda po komadu|',
        '5|5 majic|Najveći paket za maksimalnu uštedu|',
    ));
}

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
    'landingUrl'       => $landing_url,
    'cartUrl'          => $cart_url,
    'homeUrl'          => $home_url,
    'productId'        => $target_product_id ?: $current_product,
    'targetProductUrl' => $target_product_url,
    'simpleProduct'    => true,
    'skuMap'           => $sku_map,
    'optionGroups'     => array(
        'primary' => array(
            'label'   => $primary_label,
            'options' => noriks_parse_landigs_visual_options($primary_options, 'primary'),
        ),
        'secondary' => array(
            'label'   => $secondary_label,
            'options' => noriks_parse_landigs_visual_options($secondary_options, 'secondary'),
            'hidden'  => $hide_secondary === '1' || trim((string) $secondary_options) === '',
        ),
    ),
    'offers'           => noriks_ensure_default_landing_offers(noriks_parse_landigs_offer_options($offer_options)),
);

$sidecart_assets = noriks_get_sidecart_assets_markup();

$runtime_script = sprintf(
    '<script>window.dataLayer = window.dataLayer || []; window.noriksStepLandingConfig = %s; document.documentElement.classList.add("noriks-landings-pending");</script>' . "\n" .
    '<script src="%s?v=1.0"></script>',
    wp_json_encode($runtime_config),
    esc_url($asset_base_url . '/step-landing.js')
);

$legacy_wc_fix_tag       = sprintf('<script src="%s/wc-atc-fix.js?v=1.0"></script>', get_template_directory_uri());
$legacy_homepage_fix_tag = '<script src="/wp-content/themes/ortostep/homepage-atc-fix.js?v=1.0"></script>';
$legacy_orto_wc_fix_tag  = '<script type="text/javascript" src="https://ortowp.noriks.com/wp-content/themes/ortostep/wc-atc-fix.js?ver=1.0" id="wc-atc-fix-js"></script>';

ob_start();
include $source_path;
$markup = ob_get_clean();

$markup = preg_replace('#<script>\s*\(function\(w,d,s,l,i\)\{w\[l\]=w\[l\]\|\|\[\];w\[l\]\.push\(\{\'gtm\.start\':.*?</script>#s', '', $markup);
$markup = preg_replace('#<script>\s*!function\(t,e\)\{var o,n,p,r;.*?posthog\.init\(.*?</script>#s', '', $markup);
$markup = preg_replace('#<noscript><iframe src="https://www\.googletagmanager\.com/ns\.html\?id=GTM-KXS52LF".*?</iframe></noscript>#s', '', $markup);
$markup = preg_replace('#<script type="text/javascript" src="https://ortowp\.noriks\.com/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster\.min\.js\?ver=[^"]*" id="sourcebuster-js-js"></script>#', '', $markup);
$markup = preg_replace('#<script type="text/javascript" id="wc-order-attribution-js-extra">.*?</script>#s', '', $markup);
$markup = preg_replace('#<script type="text/javascript" src="https://ortowp\.noriks\.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution\.min\.js\?ver=[^"]*" id="wc-order-attribution-js"></script>#', '', $markup);

$markup = noriks_customize_step_landing_markup($markup, $landing_url, $cart_url, $home_url);

$markup = preg_replace('/<html\b([^>]*)>/', '<html$1 class="noriks-landings-pending">', $markup, 1);

$hide_until_ready_css = '<style id="noriks-landigs-pending-style">html.noriks-landings-pending .sct-hero__dyn-properties, html.noriks-landings-pending .choose-qty, html.noriks-landings-pending #dynamic-cart-variations-container { opacity: 0 !important; visibility: hidden !important; }</style>';

if (strpos($markup, '</head>') !== false) {
    $markup = str_replace('</head>', $hide_until_ready_css . "\n" . $sidecart_assets['head'] . "\n</head>", $markup);
} else {
    $markup = $hide_until_ready_css . $sidecart_assets['head'] . $markup;
}

$markup = str_replace(
    array(
        $legacy_wc_fix_tag . "\n" . $legacy_homepage_fix_tag,
        $legacy_wc_fix_tag,
        $legacy_homepage_fix_tag,
        $legacy_orto_wc_fix_tag,
    ),
    array(
        '',
        '',
        '',
        '',
    ),
    $markup
);

if (strpos($markup, '</body>') !== false) {
    $markup = str_replace('</body>', $sidecart_assets['body'] . "\n" . $runtime_script . "\n</body>", $markup);
} else {
    $markup .= $sidecart_assets['body'] . $runtime_script;
}

echo $markup; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
