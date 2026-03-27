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

if (!function_exists('noriks_landigs_use_apparel_sizes')) {
    function noriks_landigs_use_apparel_sizes($raw_options) {
        $lines = preg_split('/\r\n|\r|\n/', (string) $raw_options);
        $lines = array_values(array_filter(array_map('trim', $lines)));

        if (empty($lines)) {
            return true;
        }

        $numeric_like = 0;

        foreach ($lines as $line) {
            if (preg_match('/^\d+(?:\s*\/\s*\d+)?(?:\s*-\s*\d+)?$/', $line)) {
                $numeric_like++;
            }
        }

        return $numeric_like === count($lines);
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

if (!function_exists('noriks_get_landing_override_styles')) {
    function noriks_get_landing_override_styles() {
        return '<style id="noriks-landigs-overrides">
html.noriks-landings-pending .sct-hero__dyn-properties,
html.noriks-landings-pending .choose-qty,
html.noriks-landings-pending #dynamic-cart-variations-container {
  opacity: 0 !important;
  visibility: hidden !important;
}
[data-tpl="stps"] .button-variation,
[data-tpl="stps"] .button-variation:hover,
[data-tpl="stps"] .button-variation:focus,
[data-tpl="stps"] .button-variation:active,
[data-tpl="stps"] .button-variation:disabled {
  opacity: 1 !important;
  pointer-events: auto !important;
  cursor: pointer !important;
  filter: none !important;
  text-decoration: none !important;
  color: #000 !important;
  background: #fff !important;
  border: 2px solid #000 !important;
  box-shadow: none !important;
}
[data-tpl="stps"] .button-variation.selected,
[data-tpl="stps"] .button-variation[selected-option="true"] {
  color: #fff !important;
  background: #ff5b00 !important;
  border-color: #000 !important;
}
[data-tpl="stps"] .button-variation.greyOut,
[data-tpl="stps"] .button-variation.hiddenvariation {
  opacity: 1 !important;
}
[data-tpl="stps"] .button-variation.greyOut::before,
[data-tpl="stps"] .button-variation.hiddenvariation::before,
[data-tpl="stps"] .button-variation.greyOut::after,
[data-tpl="stps"] .button-variation.hiddenvariation::after {
  content: none !important;
  display: none !important;
}
.xoo-wsc-footer {
  padding: 5px 20px 25px 20px !important;
}
span.xoo-wsc-footer-txt {
  font-size: 70% !important;
}
.xoo-wsc-ft-btn-checkout {
  background: #c00 !important;
  background-color: #c00 !important;
  color: #fff !important;
  border-radius: 0 !important;
  font-weight: 700 !important;
  font-size: 17px !important;
  font-family: "Roboto", sans-serif !important;
  letter-spacing: 0.2px !important;
  text-transform: none !important;
  border: none !important;
  height: auto !important;
  padding: 18px 20px !important;
  width: 100% !important;
  box-sizing: border-box !important;
  margin: 0 0 10px !important;
  box-shadow: none !important;
  transform: none !important;
  filter: none !important;
  transition: none !important;
}
.xoo-wsc-ft-btn-checkout:hover,
.xoo-wsc-ft-btn-checkout:focus,
.xoo-wsc-ft-btn-checkout:active,
.xoo-wsc-ft-btn-checkout:visited {
  background: #c00 !important;
  background-color: #c00 !important;
  color: #fff !important;
}
.xoo-wsc-ft-btn-checkout span {
  color: #fff !important;
}
.xoo-wsc-ft-buttons-cont {
  grid-template-columns: 1fr !important;
}
.xoo-wsc-ft-buttons-cont a.xoo-wsc-ft-btn {
  width: 100% !important;
  box-sizing: border-box !important;
}
.xoo-wsc-sm-sales {
  display: none !important;
}
</style>';
    }
}

if (!function_exists('noriks_customize_step_landing_markup')) {
    function noriks_customize_step_landing_markup($markup, $landing_url, $cart_url, $home_url, $boxers_image_url) {
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
                'https://ortowp.noriks.com/splosni-pogoji-poslovanja/',
                'https://ortowp.noriks.com/varnostna-politika/',
                'https://ortowp.noriks.com/politika-uporabe-piskotkov/',
                'https://ortowp.noriks.com/pravica-do-odstopa-od-nakupa/',
                'https://ortowp.noriks.com/reklamacije-in-pritozbe/',
                'https://ortowp.noriks.com/menjava-v-garanciji/',
                'https://ortowp.noriks.com/o-podjetju/',
                'https://ortowp.noriks.com/',
            ),
            array(
                esc_url($landing_url),
                esc_url($cart_url),
                esc_url($cart_url),
                esc_url(home_url('/splosni-pogoji-poslovanja/')),
                esc_url(home_url('/varnostna-politika/')),
                esc_url(home_url('/politika-uporabe-piskotkov/')),
                esc_url(home_url('/pravica-do-odstopa-od-nakupa/')),
                esc_url(home_url('/reklamacije-in-pritozbe/')),
                esc_url(home_url('/menjava-v-garanciji/')),
                esc_url(home_url('/o-podjetju/')),
                esc_url($home_url),
            ),
            $markup
        );

        $markup = str_replace(
            '<img class="header__logo-img" src="https://images.hs-plus.com/assets/STEPPER%20test-0/62260f0233272_logo-stepease-orange-bg.svg" alt="logo">',
            '<span class="header__logo-img noriks-landing-logo">NORIKS</span><style>.noriks-landing-logo{display:inline-block;color:#fff;font-family:\'Roboto\',sans-serif;font-size:33px;font-weight:700;letter-spacing:1.75px;line-height:1;}</style>',
            $markup
        );

        $markup = preg_replace(
            '#<a class="footer__contacts-link h-dp" href="viber://chat\?number=%2B38651762806">.*?</a>#s',
            '',
            $markup,
            1
        );

        $markup = str_replace(
            array(
                '/cdn-cgi/l/email-protection#c8a1a6aea788bba1e6bbbcadb8ada9bbade6adbd',
                '<span>Po&#x161;ljite e-po&#x161;to na naslov: <strong><span class="__cf_email__" data-cfemail="6f060109002f1c06411c1b0a1f0a0e1c0a410a1a">[email&#160;protected]</span></strong></span>',
                'Copyright &#xA9; 2017 - 2026 Spletna trgovina Stepease',
            ),
            array(
                'mailto:info@noriks.com',
                '<span>Po&#x161;ljite e-po&#x161;to na naslov: <strong>info@noriks.com</strong></span>',
                'Copyright &#xA9; 2017 - 2026 Spletna trgovina NORIKS',
            ),
            $markup
        );

        $related_size_markup = '
                    <div class="related-product-size-options" id="related-product-sizes-rp-0">
                      <span class="related-product-size-label">Veličina:</span>
                      <div class="related-product-size-list">
                        <button type="button" class="related-product-size-button is-selected" data-size="S">S</button>
                        <button type="button" class="related-product-size-button" data-size="M">M</button>
                        <button type="button" class="related-product-size-button" data-size="L">L</button>
                        <button type="button" class="related-product-size-button" data-size="XL">XL</button>
                        <button type="button" class="related-product-size-button" data-size="2XL">2XL</button>
                        <button type="button" class="related-product-size-button" data-size="3XL">3XL</button>
                        <button type="button" class="related-product-size-button" data-size="4XL">4XL</button>
                      </div>
                      <input type="hidden" id="related-product-size-value-rp-0" value="S">
                    </div>
                    <style>
                      [data-tpl="stps"] .related-product-size-options { margin-top: .75rem; }
                      [data-tpl="stps"] .related-product-size-label { display:block; font-weight:700; margin-bottom:.4rem; }
                      [data-tpl="stps"] .related-product-size-list { display:flex; flex-wrap:wrap; gap:.35rem; }
                      [data-tpl="stps"] .related-product-size-button {
                        border: 2px solid #d1d5db;
                        background: #fff;
                        color: #111827;
                        border-radius: .55rem;
                        min-width: 3rem;
                        height: 2.4rem;
                        padding: 0 .65rem;
                        font-weight: 700;
                        font-size: .95rem;
                        line-height: 1;
                        cursor: pointer;
                      }
                      [data-tpl="stps"] .related-product-size-button.is-selected {
                        border-color: #ff5b01;
                        background: #fff3ec;
                        color: #ff5b01;
                      }
                    </style>';

        $markup = str_replace(
            array(
                '<img class="related-product-image" src="https://images.hs-plus.com/product/product-image/67fb0394c5d0a_STEPHEEL-3831127625931-N-1.jpg">',
                '2x blazinica za peto za zmanjšanje bolečin v peti',
                'Zapolni prevelik čevelj, ne da bi drgnila ali povzročala žulje.',
                '3.99&#x20AC;',
                '11.95&#x20AC;',
                'var relatedProductsData = [{"id":"rp-0","name":"2x blazinica za peto za zmanjšanje bolečin v peti","description":"Zapolni prevelik čevelj, ne da bi drgnila ali povzročala žulje.\n","price":3.99,"originalPrice":11.95,"discountPercentage":67,"wcId":981495,"imageUrl":"https://images.hs-plus.com/product/product-image/67fb0394c5d0a_STEPHEEL-3831127625931-N-1.jpg"}];',
            ),
            array(
                '<img class="related-product-image" src="' . esc_url($boxers_image_url) . '" alt="NORIKS bokserice">',
                'NORIKS crne bokserice',
                'Mekane, elastične i udobne bokserice za nošenje kroz cijeli dan.',
                '7.99&#x20AC;',
                '15.99&#x20AC;',
                'var relatedProductsData = [{"id":"rp-0","name":"NORIKS crne bokserice","description":"Mekane, elastične i udobne bokserice za nošenje kroz cijeli dan.","price":7.99,"originalPrice":15.99,"discountPercentage":50,"wcId":981495,"imageUrl":"' . esc_js($boxers_image_url) . '"}];',
            ),
            $markup
        );

        $markup = str_replace(
            '<div class="related-product-checkbox-wrapper" id="related-product-checkbox-wrapper-rp-0">',
            $related_size_markup . "\n" . '<div class="related-product-checkbox-wrapper" id="related-product-checkbox-wrapper-rp-0">',
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
$boxers_image_url   = trailingslashit(get_template_directory_uri()) . 'lander2/images/noriks_boxers_gif_1.gif';

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
    $secondary_label = 'Veličina';
}

if ($secondary_options === '') {
    $secondary_options = implode("\n", array(
        'S',
        'M',
        'L',
        'XL',
        'XXL',
        '3XL',
        '4XL',
    ));
}

if (noriks_landigs_use_apparel_sizes($secondary_options)) {
    $secondary_options = implode("\n", array(
        'S',
        'M',
        'L',
        'XL',
        'XXL',
        '3XL',
        '4XL',
    ));
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
            'hidden'  => $hide_secondary === '1' ? true : false,
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

$markup = noriks_customize_step_landing_markup($markup, $landing_url, $cart_url, $home_url, $boxers_image_url);

$markup = preg_replace('/<html\b([^>]*)>/', '<html$1 class="noriks-landings-pending">', $markup, 1);

$landing_override_styles = noriks_get_landing_override_styles();

if (strpos($markup, '</head>') !== false) {
    $markup = str_replace('</head>', $landing_override_styles . "\n" . $sidecart_assets['head'] . "\n</head>", $markup);
} else {
    $markup = $landing_override_styles . $sidecart_assets['head'] . $markup;
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
