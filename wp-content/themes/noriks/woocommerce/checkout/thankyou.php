<?php
/**
 * Thankyou page — Post-purchase upsell with two-step flow
 *
 * Step 1: Single product offer (bokserice)
 * Step 2: 6-product grid (after "Ne želim" or after adding 1 item)
 *
 * Style: Red background, no border-radius, red buttons
 *
 * @package WooCommerce\Templates
 * @version 8.1.0
 * @var WC_Order $order
 */
defined( 'ABSPATH' ) || exit;

// ─── Upsell product config ───
$upsell_product_id = 2781; // Crne Bokserice (primary offer)
$upsell_product    = wc_get_product( $upsell_product_id );
$upsell_name       = $upsell_product ? $upsell_product->get_name() : 'Crne Bokserice';
$upsell_image      = 'https://devhr.noriks.com/wp-content/uploads/2025/11/crne-boksarice-produktna.jpg';
$upsell_price      = $upsell_product ? (float) $upsell_product->get_price() : 15.99;
$upsell_sale_price = round( $upsell_price * 0.5, 2 );

// Variations for primary product
$upsell_variations = array();
if ( $upsell_product && $upsell_product->is_type('variable') ) {
    foreach ( $upsell_product->get_available_variations() as $v ) {
        $size = '';
        foreach ( $v['attributes'] as $k => $val ) { $size = $val; }
        $upsell_variations[] = array( 'id' => $v['variation_id'], 'size' => $size );
    }
}

// Detect customer size from order
$customer_size = '';
if ( $order ) {
    foreach ( $order->get_items() as $item ) {
        if ( is_a( $item, 'WC_Order_Item_Product' ) && $item->get_variation_id() ) {
            $var = wc_get_product( $item->get_variation_id() );
            if ( $var ) {
                foreach ( $var->get_attributes() as $k => $v ) {
                    if ( stripos( $k, 'velicina' ) !== false || stripos( $k, 'size' ) !== false ) {
                        $customer_size = $v; break 2;
                    }
                }
            }
        }
    }
}

// ─── Grid products (6 products for step 2) ───
$grid_product_ids = array();
$ordered_ids = array();
if ( $order ) {
    foreach ( $order->get_items() as $item ) {
        $ordered_ids[] = $item->get_product_id();
    }
}

// Get products for grid — exclude already-ordered
$grid_args = array(
    'status'  => 'publish',
    'limit'   => 6,
    'exclude' => array_merge( $ordered_ids, array( $upsell_product_id ) ),
    'orderby' => 'popularity',
    'type'    => array( 'simple', 'variable' ),
);

// Try bokserice/majice categories first
$grid_products = array();
foreach ( array( 'bokserice', 'boxerice', 'majice', 'majica' ) as $cat_slug ) {
    $cat = get_term_by( 'slug', $cat_slug, 'product_cat' );
    if ( $cat ) {
        $grid_args['category'] = array( $cat_slug );
        $grid_products = wc_get_products( $grid_args );
        if ( count( $grid_products ) >= 6 ) break;
    }
}
// Fallback: any products
if ( count( $grid_products ) < 6 ) {
    unset( $grid_args['category'] );
    $grid_products = wc_get_products( $grid_args );
}
$grid_products = array_slice( $grid_products, 0, 6 );
?>

<style>
/* ═══ RESET: hide WP chrome ═══ */
.top-header, .marquee, header.navbar.header, #languageModal,
.xoo-wsc-markup, .xoo-wsc-overlay, .footer-wrap, footer.footer,
footer.footer-mobile, .hs_loader, .entry-header,
.storefront-breadcrumb, .storefront-sorting,
#secondary, .site-footer, .xoo-wsc-container,
.checkout--my-header,
.woocommerce-order-details,
.woocommerce-customer-details { display: none !important; }

body.woocommerce-order-received {
    background: #F5F5F5 !important;
    font-family: 'Roboto', sans-serif !important;
    color: #333 !important;
    -webkit-font-smoothing: antialiased;
}
body.woocommerce-order-received .site-main,
body.woocommerce-order-received .hentry {
    margin: 0 !important; padding: 0 !important;
}
body.woocommerce-order-received .woocommerce {
    background: transparent !important; padding: 0 !important;
}

/* ═══ GLOBAL: kill ALL border-radius ═══ */
.ty-container *, .ty-container *::before, .ty-container *::after,
.ty-grid-section *, .ty-grid-section *::before, .ty-grid-section *::after {
    border-radius: 0 !important;
}

/* ═══ Container ═══ */
.ty-container { max-width: 520px; margin: 30px auto; padding: 0 4px; }

/* ═══ Success ═══ */
.ty-success {
    background: #e8f5e9;
    padding: 28px 24px; margin-bottom: 15px; text-align: center;
    border-radius: 4px !important;
}
.ty-success-icon {
    width: 56px; height: 56px; background: #4CAF50;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 14px; font-size: 28px; color: #fff;
}
.ty-success h1 {
    font-size: 22px !important; font-weight: 700 !important;
    color: #232f3e !important; margin: 0 0 6px !important;
}
.ty-success p { font-size: 14px; color: #5f6061; margin: 0; }
.ty-success .ty-order-num {
    display: inline-block; margin-top: 10px;
    background: #fff; padding: 6px 16px;
    font-size: 13px; color: #333; font-weight: 600;
}

/* ═══════════════════════════════════════════════
   STEP 1: SINGLE UPSELL OFFER
   ═══════════════════════════════════════════════ */
.ty-upsell-wrap {
    background: #FFFFFF;
    margin: 0 0 15px; overflow: hidden;
    border-radius: 8px !important;
    border: 2px solid #971b1b;
}

/* Banner — #2D2D2D bg, #971b1b BORDER AROUND ALL, white text */
.ty-upsell-banner {
    background: #FFFFFF; color: #333;
    padding: 22px 24px 18px; text-align: center;
    border: none;
    border-radius: 0 !important;
    margin: 0;
}
.ty-upsell-banner-top {
    font-size: 16px; font-weight: 400; margin-bottom: 8px;
    color: #666;
    display: flex; align-items: center; justify-content: center; gap: 10px;
}
.ty-timer-pill {
    display: inline-block;
    background: #971b1b; color: #FFFFFF;
    padding: 2px 8px;
    border-radius: 4px !important;
    font-size: 13px; font-weight: 700;
    font-variant-numeric: tabular-nums;
}
.ty-timer-pill.expired { background: #999; }
.ty-upsell-banner h2 {
    font-size: 22px !important; font-weight: 700 !important;
    color: #333 !important; margin: 0 !important;
    line-height: 1.35 !important;
}

/* Benefits — #FFF bg, icons #971b1b, text grey/red, centered */
.ty-upsell-benefits {
    background: #FFFFFF;
    padding: 20px 24px 16px;
    display: flex; flex-direction: column; align-items: center; gap: 4px;
}
.ty-benefit {
    font-size: 15px; font-weight: 500;
    display: flex; align-items: center; gap: 6px;
}
.ty-benefit .ty-b-icon { font-size: 16px; font-weight: 700; }
.ty-benefit-green { color: #888888; }
.ty-benefit-green .ty-b-icon { color: #971b1b; }
.ty-benefit-orange { color: #971b1b; }
.ty-benefit-orange .ty-b-icon { color: #971b1b; }

/* Product card wrapper */
.ty-upsell-card {
    background: #FFFFFF;
    margin: 0;
    overflow: hidden;
    padding-bottom: 4px;
}

/* Product card — exact reference colors */
.ty-upsell-product {
    display: flex; gap: 18px;
    padding: 20px 24px 16px;
    align-items: flex-start;
}
.ty-upsell-img {
    width: 120px; min-width: 120px; height: 120px;
    object-fit: contain;
    background: #FADEC9;
    border-radius: 8px !important;
    padding: 10px;
    box-sizing: border-box;
}
.ty-upsell-info { flex: 1; }
.ty-upsell-qty {
    font-family: 'Roboto', sans-serif;
    font-size: 22px; font-weight: 700; color: #333333;
    line-height: 1; margin-bottom: 4px;
}
.ty-upsell-name {
    font-family: 'Roboto', sans-serif;
    font-size: 13px; font-weight: 400; color: #666666;
    margin-bottom: 8px; line-height: 1.4;
}
.ty-upsell-old-price {
    font-family: 'Roboto', sans-serif;
    font-size: 16px; color: #AAAAAA;
    text-decoration: line-through;
    margin-bottom: 4px;
}
.ty-upsell-new-price {
    font-family: 'Roboto', sans-serif;
    font-size: 22px; font-weight: 700; color: #971b1b;
    line-height: 1.1;
}

/* Variation dropdown — #CCC border, 4px radius, ~55% width centered */
.ty-upsell-select-wrap { padding: 0 24px 20px; display: flex; justify-content: center; }
.ty-upsell-select {
    width: 55%; height: 46px;
    border: 1px solid #CCCCCC;
    border-radius: 4px !important;
    padding: 0 16px;
    font-family: 'Roboto', sans-serif;
    font-size: 15px; font-weight: 500;
    color: #333; background: #FFFFFF;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23999'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: 20px;
    cursor: pointer; outline: none;
}
.ty-upsell-select:focus { border-color: #971b1b; }

/* Buttons */
.ty-upsell-buttons {
    display: flex; gap: 14px;
    padding: 10px 24px 28px;
    align-items: stretch;
    justify-content: center;
}
/* "Ne želim" — OUTLINE pill, same height as DODAJ */
.ty-btn-skip {
    flex: 0; 
    background: #FFFFFF; color: #971b1b;
    border: 1.5px solid #971b1b;
    border-radius: 25px !important;
    font-family: 'Roboto', sans-serif;
    font-size: 15px; font-weight: 500;
    padding: 14px 32px;
    cursor: pointer; transition: background 0.15s;
    text-align: center;
    white-space: nowrap;
    line-height: 1;
}
.ty-btn-skip:hover { background: #fef5f5; }
/* "DODAJ U NARUDŽBU" — FILLED #971b1b pill, same height */
.ty-btn-add {
    flex: 1;
    background: #971b1b; color: #FFFFFF;
    border: 1.5px solid #971b1b;
    border-radius: 25px !important;
    font-family: 'Roboto', sans-serif;
    font-size: 15px; font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    padding: 14px 32px;
    cursor: pointer; transition: background 0.15s;
    text-align: center;
    white-space: nowrap;
    line-height: 1;
}
.ty-btn-add:hover { background: #7a1616; border-color: #7a1616; }
.ty-btn-add:disabled { background: #999; border-color: #999; cursor: not-allowed; }
.ty-btn-add.added { background: #2E7D32; border-color: #2E7D32; }
.ty-upsell-status {
    text-align: center; padding: 0 24px 16px;
    font-size: 13px; color: #888; min-height: 20px;
}

/* Bottom countdown bar — hidden (timer is in banner pill) */
.ty-upsell-bottom-bar {
    display: none;
}
.ty-upsell-bottom-bar .ty-countdown-big {
    display: inline-block;
    background: rgba(0,0,0,0.2); color: #fff;
    padding: 6px 16px;
    border-radius: 4px !important;
    font-size: 18px; font-weight: 700;
    font-family: monospace;
    letter-spacing: 2px;
}

/* ═══════════════════════════════════════════════
   STEP 2: 6-PRODUCT GRID (inline, not overlay)
   ═══════════════════════════════════════════════ */
.ty-grid-section {
    margin-bottom: 15px; overflow: hidden;
    max-height: 0;
    transition: max-height 0.4s ease;
}
.ty-grid-section.show { max-height: 2000px; }

.ty-grid-popup {
    background: #971b1b;
    width: 100%;
    overflow: hidden;
    border-radius: 4px !important;
}

.ty-grid-header {
    padding: 18px 20px 14px;
    display: flex; align-items: center; justify-content: space-between;
    user-select: none;
    background: #971b1b;
}
.ty-grid-header h3 {
    color: #fff !important; font-size: 15px;
    font-weight: 400; margin: 0 0 6px 0; padding: 0;
}
.ty-grid-header h2 {
    color: #fff !important; font-size: 20px;
    font-weight: 700; margin: 0; padding: 0; line-height: 1.3;
}
.ty-grid-trust {
    text-align: center; padding: 6px 20px 12px;
    font-size: 13px; color: #fff;
}

.ty-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    padding: 0 15px 15px;
}
.ty-grid-item {
    background: #fff; text-align: center;
    padding: 12px; border: 1px solid #eee;
    border-radius: 4px !important;
    color: #333;
    transition: border-color 0.2s;
}
.ty-grid-item:hover { border-color: #971b1b; }
.ty-grid-item img {
    width: 100%; max-width: 120px; height: auto;
    object-fit: contain; margin-bottom: 8px;
}
.ty-grid-item .g-name {
    font-family: 'Roboto', sans-serif;
    font-size: 12px; color: #222; margin-bottom: 5px;
    line-height: 1.3; min-height: 32px; font-weight: 500;
}
.ty-grid-item .g-price-old {
    text-decoration: line-through; color: #999; font-size: 12px;
}
.ty-grid-item .g-price-new {
    font-family: 'Roboto', sans-serif;
    color: #971b1b; font-size: 16px; font-weight: 700;
}
.ty-grid-item select {
    width: 100%; padding: 6px; font-size: 12px;
    border: 1px solid #ccc; border-radius: 1px !important;
    margin-top: 6px;
    background: #fff; color: #333; outline: none;
    font-weight: 600; transition: all 0.3s ease;
}
.ty-grid-item select:focus,
.ty-grid-item select:hover { border-color: #000; }
.ty-grid-item .g-add-btn {
    display: block; width: 100%; margin-top: 8px;
    padding: 10px; background: #971b1b; color: #fff;
    border: none; border-radius: 20px !important;
    font-family: 'Roboto', sans-serif;
    font-size: 13px; font-weight: 600;
    cursor: pointer; transition: background 0.2s;
}
.ty-grid-item .g-add-btn:hover { background: #7a1616; }
.ty-grid-item .g-add-btn.added {
    background: #2E7D32; pointer-events: none;
}
.ty-grid-item .g-add-btn:disabled { opacity: 0.5; cursor: not-allowed; }

.ty-grid-close {
    display: block;
    width: calc(100% - 30px); margin: 0 15px 15px;
    padding: 14px;
    background: rgba(255,255,255,0.15); color: #fff;
    border: 2px solid #fff; border-radius: 30px !important;
    font-family: 'Roboto', sans-serif;
    font-size: 16px; font-weight: 600;
    cursor: pointer; text-align: center;
    transition: background 0.2s;
}
.ty-grid-close:hover { background: rgba(255,255,255,0.25); }

/* ═══ Collapsible sections ═══ */
.ty-section {
    background: #fff;
    margin-bottom: 15px; overflow: hidden;
    border-radius: 4px !important;
}
/* Section headers — matches product page collapsibles (Detalji o proizvodu, etc.) */
.ty-section-header {
    display: flex; align-items: center; justify-content: space-between;
    padding: 18px 20px; cursor: pointer; user-select: none;
    font-family: 'Roboto', sans-serif;
    font-size: 15px; font-weight: 700; color: #222;
    font-style: italic;
    border-bottom: 1px solid #eee;
    transition: border-color 0.2s;
}
.ty-section-header.open { border-bottom-color: #eee; }
.ty-section-header .ty-chevron {
    font-size: 18px; color: #222; font-weight: 300; font-style: normal;
    transition: transform 0.25s; display: inline-block;
}
.ty-section-header.open .ty-chevron { transform: rotate(45deg); }
.ty-section-body {
    max-height: 0; overflow: hidden; transition: max-height 0.3s ease;
}
.ty-section-body.open { max-height: 2000px; }
.ty-section-body-inner { padding: 14px 20px; }
.ty-row {
    display: flex; justify-content: space-between; align-items: baseline;
    padding: 8px 0; font-family: 'Roboto', sans-serif;
    font-size: 14px; border-bottom: 1px solid #f0f0f0;
}
.ty-row:last-child { border-bottom: none; }
.ty-row-label { color: #888; font-weight: 400; }
.ty-row-value { font-weight: 600; color: #222; text-align: right; max-width: 60%; }
.ty-item {
    display: flex; justify-content: space-between; align-items: center;
    padding: 10px 0; border-bottom: 1px solid #f0f0f0;
}
.ty-item:last-child { border-bottom: none; }
.ty-item-name { font-family: 'Roboto', sans-serif; font-size: 14px; color: #222; flex: 1; }
.ty-item-meta { font-size: 12px; color: #999; margin-top: 2px; }
.ty-item-price { font-family: 'Roboto', sans-serif; font-weight: 600; font-size: 14px; color: #222; margin-left: 12px; white-space: nowrap; }
.ty-totals { margin-top: 8px; border-top: 2px solid #eee; padding-top: 8px; }
.ty-totals .ty-row { padding: 5px 0; }
.ty-totals .ty-total-final { font-size: 16px; font-weight: 700; }

/* ═══ Mobile ═══ */
@media (max-width: 560px) {
    .ty-container { margin: 0 auto; padding: 0 10px; }
    .ty-success { margin-left: -10px; margin-right: -10px; }
    .ty-success { padding: 22px 16px; }
    .ty-success h1 { font-size: 19px !important; }
    .ty-upsell-product { padding: 16px; gap: 14px; }
    .ty-upsell-img { width: 120px; min-width: 120px; height: 120px; }
    .ty-upsell-qty { font-size: 26px; }
    .ty-upsell-new-price { font-size: 24px; }
    .ty-upsell-banner h2 { font-size: 17px !important; }
    .ty-upsell-buttons { padding: 0 16px 20px; }
    .ty-upsell-select-wrap { padding: 0 16px 12px; }
    .ty-section-header { padding: 14px 16px; font-size: 14px; }
    .ty-section-body-inner { padding: 12px 16px; }
    .ty-grid { grid-template-columns: repeat(2, 1fr); }
    .ty-grid-header h2 { font-size: 17px !important; }
}
</style>

<?php if ( $order ) : ?>

<div class="ty-container">

    <?php do_action( 'woocommerce_before_thankyou', $order->get_id() ); ?>

    <?php if ( $order->has_status( 'failed' ) ) : ?>
        <div class="ty-success" style="background:#fde8e8;">
            <div class="ty-success-icon" style="background:#dc3545;">✕</div>
            <h1>Narudžba nije uspjela</h1>
            <p>Banka je odbila transakciju. Pokušajte ponovno.</p>
            <p style="margin-top:16px;">
                <a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" style="display:inline-block;background:#971b1b;color:#fff;padding:12px 32px;text-decoration:none;font-weight:700;">Pokušaj ponovno</a>
            </p>
        </div>
    <?php else : ?>

        <!-- ✅ Success -->
        <div class="ty-success">
            <div class="ty-success-icon">✓</div>
            <h1>Vaša narudžba je zaprimljena!</h1>
            <p>Potvrdu ste primili na <?php echo esc_html( $order->get_billing_email() ); ?></p>
            <span class="ty-order-num">Narudžba #<?php echo $order->get_order_number(); ?></span>
        </div>

        <!-- ═══ STEP 1: SINGLE UPSELL (COD only) ═══ -->
        <?php if ( $order->get_payment_method() === 'cod' ) : ?>
        <div class="ty-upsell-wrap" id="ty-upsell"
             data-order-id="<?php echo $order->get_id(); ?>"
             data-nonce="<?php echo wp_create_nonce('noriks_upsell_' . $order->get_id()); ?>">

            <!-- Red banner -->
            <div class="ty-upsell-banner">
                <div class="ty-upsell-banner-top">
                    Posebna ponuda ističe
                    <span class="ty-timer-pill" id="ty-timer">05:00</span>
                </div>
                <h2>Dodajte još jedan proizvod s 50% dodatnog popusta</h2>
            </div>

            <!-- Benefits -->
            <div class="ty-upsell-benefits">
                <div class="ty-benefit ty-benefit-green">
                    <span class="ty-b-icon">✓</span>
                    Poslat ćemo ga u istom paketu
                </div>
                <div class="ty-benefit ty-benefit-orange">
                    <span class="ty-b-icon">★</span>
                    Razmislite kome biste mogli pokloniti proizvod
                </div>
            </div>

            <!-- Product + select + buttons wrapped in one card -->
            <div class="ty-upsell-card">
                <div class="ty-upsell-product">
                    <img class="ty-upsell-img" src="<?php echo esc_url( $upsell_image ); ?>" alt="<?php echo esc_attr( $upsell_name ); ?>">
                    <div class="ty-upsell-info">
                        <div class="ty-upsell-qty">1 x</div>
                        <div class="ty-upsell-name"><?php echo esc_html( $upsell_name ); ?> | NORIKS</div>
                        <div class="ty-upsell-old-price"><?php echo number_format( $upsell_price, 2, ',', '.' ); ?>€</div>
                        <div class="ty-upsell-new-price"><?php echo number_format( $upsell_sale_price, 2, ',', '.' ); ?>€</div>
                    </div>
                </div>

                <?php if ( $upsell_variations ) : ?>
                <div class="ty-upsell-select-wrap">
                    <select class="ty-upsell-select" id="ty-variation-select">
                        <?php foreach ( $upsell_variations as $v ) : ?>
                        <option value="<?php echo $v['id']; ?>" <?php selected( strtolower($v['size']), strtolower($customer_size) ); ?>>
                            Crna, <?php echo esc_html( $v['size'] ); ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <?php endif; ?>

                <div class="ty-upsell-status" id="ty-upsell-status"></div>

                <div class="ty-upsell-buttons">
                    <button class="ty-btn-skip" id="ty-btn-skip">Ne želim</button>
                    <button class="ty-btn-add" id="ty-btn-add">DODAJ U NARUDŽBU</button>
                </div>
            </div>

            <!-- Red countdown bar -->
            <div class="ty-upsell-bottom-bar">
                <span class="ty-countdown-big" id="ty-countdown-bar">05:00</span>
            </div>
        </div>

        <!-- ═══ STEP 2: 6-PRODUCT GRID OVERLAY ═══ -->
        <?php if ( ! empty( $grid_products ) ) : ?>
        <div class="ty-grid-section" id="ty-grid-section">
            <div class="ty-grid-popup">
                <div class="ty-grid-header" onclick="tyToggle(this)" style="cursor:pointer;">
                    <div>
                        <div style="margin:0;font-size:15px;font-weight:400;color:#555;">Još više proizvoda s popustom</div>
                        <div style="font-size:20px;font-weight:700;color:#222;line-height:1.3;">Dodajte bilo koji proizvod s 50% popusta</div>
                    </div>
                    <span class="ty-chevron">+</span>
                </div>
                <div class="ty-section-body open" id="ty-grid-body">
                <div class="ty-section-body-inner" style="padding:0;">
                <div class="ty-grid-trust">
                    ✔ Sve šaljemo u istom paketu
                </div>
                <div class="ty-grid">
                    <?php foreach ( $grid_products as $gp ) :
                        // Use active/sale price (get_price returns sale price if on sale)
                        $gp_price = (float) $gp->get_price();
                        if ( ! $gp_price && $gp->is_type('variable') ) {
                            $gp_price = (float) $gp->get_variation_price('min', true);
                        }
                        if ( ! $gp_price ) {
                            $gp_price = (float) $gp->get_regular_price();
                        }
                        $gp_sale = round( $gp_price * 0.5, 2 );
                        $gp_img_id    = $gp->get_image_id();
                        $gp_img_url   = $gp_img_id ? wp_get_attachment_url( $gp_img_id ) : wc_placeholder_img_src();
                        $gp_is_var    = $gp->is_type('variable');
                        $gp_vars      = array();
                        if ( $gp_is_var ) {
                            foreach ( $gp->get_available_variations() as $gv ) {
                                $gv_label = '';
                                foreach ( $gv['attributes'] as $gk => $gval ) { $gv_label = $gval; }
                                $gp_vars[] = array( 'id' => $gv['variation_id'], 'label' => $gv_label );
                            }
                        }
                    ?>
                    <div class="ty-grid-item">
                        <img src="<?php echo esc_url( $gp_img_url ); ?>" alt="<?php echo esc_attr( $gp->get_name() ); ?>">
                        <div class="g-name"><?php echo esc_html( $gp->get_name() ); ?></div>
                        <div class="g-price-old"><?php echo number_format( $gp_price, 2, ',', '.' ); ?>€</div>
                        <div class="g-price-new"><?php echo number_format( $gp_sale, 2, ',', '.' ); ?>€</div>
                        <?php if ( $gp_vars ) : ?>
                        <select class="g-variation" data-product-id="<?php echo $gp->get_id(); ?>">
                            <?php foreach ( $gp_vars as $gv ) : ?>
                            <option value="<?php echo $gv['id']; ?>"><?php echo esc_html( $gv['label'] ); ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php endif; ?>
                        <button class="g-add-btn"
                                data-product-id="<?php echo $gp->get_id(); ?>"
                                data-sale-price="<?php echo $gp_sale; ?>">
                            DODAJ
                        </button>
                    </div>
                    <?php endforeach; ?>
                </div>
                <button class="ty-grid-close" id="ty-grid-close">Ne želim dodatnu ponudu</button>
                </div><!-- /ty-section-body-inner -->
                </div><!-- /ty-section-body -->
            </div>
        </div>
        <?php endif; ?>
        <?php endif; /* COD only */ ?>

        <!-- 📋 Order items -->
        <div class="ty-section" id="ty-order-items-section">
            <div class="ty-section-header open" onclick="tyToggle(this)">
                <span id="ty-order-items-header">Stavke narudžbe (<?php echo $order->get_item_count(); ?>)</span>
                <span class="ty-chevron">+</span>
            </div>
            <div class="ty-section-body open">
                <div class="ty-section-body-inner" id="ty-order-items-body">
                    <?php foreach ( $order->get_items() as $item ) :
                        $qty = $item->get_quantity();
                        $meta_parts = array();
                        foreach ( $item->get_formatted_meta_data('_', true) as $m ) {
                            $meta_parts[] = wp_strip_all_tags( $m->display_key . ': ' . $m->display_value );
                        }
                    ?>
                    <?php $is_upsell_item = $item->get_meta( '_noriks_upsell' ) === 'thank you upsell'; ?>
                    <div class="ty-item">
                        <div>
                            <div class="ty-item-name"><?php echo $qty; ?>× <?php echo esc_html( $item->get_name() ); ?></div>
                            <?php if ( $meta_parts ) : ?>
                            <div class="ty-item-meta"><?php echo esc_html( implode( ', ', $meta_parts ) ); ?></div>
                            <?php endif; ?>
                        </div>
                        <div style="display:flex;align-items:center;gap:8px;">
                            <div class="ty-item-price"><?php echo $order->get_formatted_line_subtotal( $item ); ?></div>
                            <?php if ( $is_upsell_item && $order->get_status() === 'primary-hold' ) : ?>
                            <button class="ty-upsell-remove" data-item-id="<?php echo $item->get_id(); ?>" data-order-id="<?php echo $order->get_id(); ?>" onclick="removeUpsellItem(this)" style="width:22px;height:22px;border-radius:50%;background:#971b1b;color:#fff;border:none;font-size:13px;font-weight:700;cursor:pointer;display:flex;align-items:center;justify-content:center;padding:0;line-height:1;flex-shrink:0;">✕</button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="ty-totals">
                        <?php foreach ( $order->get_order_item_totals() as $key => $total ) : ?>
                        <div class="ty-row <?php echo $key === 'order_total' ? 'ty-total-final' : ''; ?>">
                            <span class="ty-row-label"><?php echo $total['label']; ?></span>
                            <span class="ty-row-value"><?php echo $total['value']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- 📍 Address -->
        <div class="ty-section">
            <div class="ty-section-header open" onclick="tyToggle(this)">
                <span>Adresa dostave</span>
                <span class="ty-chevron">+</span>
            </div>
            <div class="ty-section-body open">
                <div class="ty-section-body-inner">
                    <div class="ty-row"><span class="ty-row-label">Ime</span><span class="ty-row-value"><?php echo esc_html( $order->get_billing_first_name() . ' ' . $order->get_billing_last_name() ); ?></span></div>
                    <div class="ty-row"><span class="ty-row-label">Adresa</span><span class="ty-row-value"><?php echo esc_html( $order->get_billing_address_1() . ' ' . $order->get_billing_address_2() ); ?></span></div>
                    <div class="ty-row"><span class="ty-row-label">Grad</span><span class="ty-row-value"><?php echo esc_html( $order->get_billing_postcode() . ' ' . $order->get_billing_city() ); ?></span></div>
                    <?php if ( $order->get_billing_phone() ) : ?>
                    <div class="ty-row"><span class="ty-row-label">Telefon</span><span class="ty-row-value"><?php echo esc_html( $order->get_billing_phone() ); ?></span></div>
                    <?php endif; ?>
                    <div class="ty-row"><span class="ty-row-label">Način plaćanja</span><span class="ty-row-value"><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></span></div>
                </div>
            </div>
        </div>

    <?php endif; ?>

    <?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
    <?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

</div>

<?php else : ?>
    <div class="ty-container">
        <div class="ty-success"><h1>Narudžba</h1>
        <?php wc_get_template( 'checkout/order-received.php', array( 'order' => false ) ); ?>
        </div>
    </div>
<?php endif; ?>

<script>
(function(){
    var wrap     = document.getElementById('ty-upsell');
    var overlay  = document.getElementById('ty-grid-section');
    if (!wrap) return;

    var orderId  = wrap.dataset.orderId;
    var nonce    = wrap.dataset.nonce;
    var ajaxUrl  = '<?php echo admin_url("admin-ajax.php"); ?>';

    // ─── Countdown ───
    var timerEl   = document.getElementById('ty-timer');
    var barEl     = document.getElementById('ty-countdown-bar');
    var key       = 'ty_' + orderId;
    var rem       = 300;
    var saved     = localStorage.getItem(key);
    if (saved) { rem = Math.max(0, 300 - Math.floor((Date.now() - parseInt(saved)) / 1000)); }
    else { localStorage.setItem(key, Date.now().toString()); }

    function tick() {
        if (rem <= 0) {
            // Hide everything except the red banner with expired message
            var card = wrap.querySelector('.ty-upsell-card');
            var benefits = wrap.querySelector('.ty-upsell-benefits');
            var bottomBar = wrap.querySelector('.ty-upsell-bottom-bar');
            if (card) card.style.display = 'none';
            if (benefits) benefits.style.display = 'none';
            if (bottomBar) bottomBar.style.display = 'none';
            // Replace banner content with expired message
            var banner = wrap.querySelector('.ty-upsell-banner');
            if (banner) {
                banner.style.padding = '14px 24px';
                banner.style.textAlign = 'center';
                banner.innerHTML = '<h2 style="margin:0;padding:0;font-size:18px;font-weight:700;color:#971b1b;">PONUDA JE ISTEKLA</h2>';
            }
            // Also hide the grid section if visible
            if (overlay) overlay.style.display = 'none';
            // Auto-open "Stavke narudžbe" and "Adresa dostave" sections
            document.querySelectorAll('.ty-section .ty-section-header').forEach(function(h) {
                if (!h.classList.contains('open')) {
                    h.classList.add('open');
                    h.nextElementSibling.classList.add('open');
                }
            });
            // Release primary-hold → processing via AJAX
            var releaseFd = new FormData();
            releaseFd.append('action', 'noriks_release_primary_hold');
            releaseFd.append('order_id', orderId);
            fetch(ajaxUrl, { method: 'POST', body: releaseFd }).catch(function(){});
            return;
        }
        var m = Math.floor(rem/60), s = rem%60;
        var display = (m<10?'0':'')+m+':'+(s<10?'0':'')+s;
        if (timerEl) timerEl.textContent = display;
        if (barEl) barEl.textContent = display;
        rem--; setTimeout(tick, 1000);
    }
    tick();

    // ─── Step transitions ───
    function showGrid() {
        wrap.style.display = 'none';
        if (overlay) overlay.classList.add('show');
        // Scroll to grid
        if (overlay) overlay.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
    function closeAll() {
        if (overlay) overlay.classList.remove('show');
    }

    // ─── Refresh order items after upsell add ───
    function refreshOrderItems() {
        var rfd = new FormData();
        rfd.append('action', 'noriks_refresh_order_items');
        rfd.append('order_id', orderId);
        fetch(ajaxUrl, { method: 'POST', body: rfd })
            .then(function(r) { return r.json(); })
            .then(function(d) {
                if (d.success) {
                    // Update items section content by ID
                    var itemsBody = document.getElementById('ty-order-items-body');
                    if (itemsBody) itemsBody.innerHTML = d.data.items_html;
                    // Update item count in header by ID
                    var headerSpan = document.getElementById('ty-order-items-header');
                    if (headerSpan) {
                        headerSpan.textContent = 'Stavke narudžbe (' + d.data.item_count + ')';
                    }
                    // Make sure section stays open
                    var section = document.getElementById('ty-order-items-section');
                    if (section) {
                        var h = section.querySelector('.ty-section-header');
                        var b = section.querySelector('.ty-section-body');
                        if (h && !h.classList.contains('open')) h.classList.add('open');
                        if (b && !b.classList.contains('open')) b.classList.add('open');
                    }
                }
            })
            .catch(function(){});
    }

    // ─── Step 1: "Ne želim" → show grid ───
    var skipBtn = document.getElementById('ty-btn-skip');
    if (skipBtn) {
        skipBtn.addEventListener('click', function() {
            if (overlay) { showGrid(); } else { wrap.style.display = 'none'; }
        });
    }

    // ─── Step 1: "DODAJ" → add to order, then show grid ───
    var addBtn = document.getElementById('ty-btn-add');
    if (addBtn) {
        addBtn.addEventListener('click', function() {
            if (addBtn.disabled) return;
            addBtn.disabled = true;
            addBtn.textContent = 'Dodajem...';

            var select = document.getElementById('ty-variation-select');
            var fd = new FormData();
            fd.append('action', 'noriks_add_upsell');
            fd.append('order_id', orderId);
            fd.append('product_id', <?php echo $upsell_product_id; ?>);
            fd.append('variation_id', select ? select.value : '');
            fd.append('sale_price', '<?php echo $upsell_sale_price; ?>');
            fd.append('nonce', nonce);

            fetch(ajaxUrl, { method: 'POST', body: fd })
                .then(function(r) { return r.json(); })
                .then(function(d) {
                    addBtn.textContent = '✓ DODANO';
                    addBtn.classList.add('added');
                    refreshOrderItems();
                    // Show grid after short delay
                    setTimeout(function() {
                        if (overlay) { showGrid(); } else { wrap.style.display = 'none'; }
                    }, 800);
                })
                .catch(function() {
                    addBtn.disabled = false;
                    addBtn.textContent = 'DODAJ U NARUDŽBU';
                });
        });
    }

    // ─── Step 2: Grid individual add buttons ───
    if (overlay) {
        overlay.querySelectorAll('.g-add-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var el = this;
                if (el.disabled) return;
                el.disabled = true;
                el.textContent = '...';

                var productId = el.getAttribute('data-product-id');
                var salePrice = el.getAttribute('data-sale-price');
                var varSelect = el.parentElement.querySelector('.g-variation');

                var fd = new FormData();
                fd.append('action', 'noriks_add_upsell');
                fd.append('order_id', orderId);
                fd.append('product_id', productId);
                fd.append('variation_id', varSelect ? varSelect.value : '');
                fd.append('sale_price', salePrice);
                fd.append('nonce', nonce);

                fetch(ajaxUrl, { method: 'POST', body: fd })
                    .then(function(r) { return r.json(); })
                    .then(function(d) {
                        if (d.success) {
                            el.textContent = '✔ DODANO';
                            el.classList.add('added');
                            refreshOrderItems();
                        } else {
                            el.textContent = d.data || 'Napaka';
                            setTimeout(function() { el.disabled = false; el.textContent = 'DODAJ'; }, 2000);
                        }
                    })
                    .catch(function() {
                        el.disabled = false;
                        el.textContent = 'DODAJ';
                    });
            });
        });

        // Close grid
        document.getElementById('ty-grid-close').addEventListener('click', closeAll);
    }
    // Backup: if user leaves page while timer still running, use sendBeacon to release
    window.addEventListener('pagehide', function() {
        if (rem <= 0) {
            var data = new URLSearchParams();
            data.append('action', 'noriks_release_primary_hold');
            data.append('order_id', orderId);
            navigator.sendBeacon(ajaxUrl, data);
        }
    });
})();

function removeUpsellItem(btn) {
    if (btn.disabled) return;
    btn.disabled = true;
    btn.textContent = '…';
    var itemId = btn.getAttribute('data-item-id');
    var orderId = btn.getAttribute('data-order-id');
    var fd = new FormData();
    fd.append('action', 'noriks_remove_upsell');
    fd.append('order_id', orderId);
    fd.append('item_id', itemId);
    fetch('<?php echo admin_url("admin-ajax.php"); ?>', { method: 'POST', body: fd })
        .then(function(r) { return r.json(); })
        .then(function(d) {
            if (d.success) {
                // Reset the main upsell "DODAJ" button back to active
                var mainAddBtn = document.getElementById('ty-btn-add');
                if (mainAddBtn) {
                    mainAddBtn.disabled = false;
                    mainAddBtn.classList.remove('added');
                    mainAddBtn.textContent = 'DODAJ U NARUDŽBU';
                }
                // Also reset grid add buttons for this product
                document.querySelectorAll('.g-add-btn.added').forEach(function(gb) {
                    gb.disabled = false;
                    gb.classList.remove('added');
                    gb.textContent = 'DODAJ';
                });
                // Refresh order items
                var rfd = new FormData();
                rfd.append('action', 'noriks_refresh_order_items');
                rfd.append('order_id', orderId);
                fetch('<?php echo admin_url("admin-ajax.php"); ?>', { method: 'POST', body: rfd })
                    .then(function(r2) { return r2.json(); })
                    .then(function(d2) {
                        if (d2.success) {
                            var itemsBody = document.getElementById('ty-order-items-body');
                            if (itemsBody) itemsBody.innerHTML = d2.data.items_html;
                            var headerSpan = document.getElementById('ty-order-items-header');
                            if (headerSpan) {
                                headerSpan.textContent = 'Stavke narudžbe (' + d2.data.item_count + ')';
                            }
                        }
                    });
            } else {
                btn.disabled = false;
                btn.textContent = '✕';
                alert(d.data || 'Greška');
            }
        })
        .catch(function() {
            btn.disabled = false;
            btn.textContent = '✕';
        });
}

function tyToggle(h) {
    h.classList.toggle('open');
    h.nextElementSibling.classList.toggle('open');
}
</script>
