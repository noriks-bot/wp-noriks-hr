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
    background: #f0f2f5 !important;
    font-family: 'Roboto', sans-serif !important;
    color: #333 !important;
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
.ty-container { max-width: 560px; margin: 30px auto; padding: 0; }

/* ═══ Success ═══ */
.ty-success {
    background: #e8f5e9;
    padding: 28px 24px; margin-bottom: 16px; text-align: center;
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
    background: #fff;
    margin-bottom: 16px; overflow: hidden;
}

/* Banner — RED background */
.ty-upsell-banner {
    background: #C62828; color: #fff;
    padding: 18px 24px; text-align: center;
}
.ty-upsell-banner-top {
    font-size: 15px; font-weight: 500; margin-bottom: 6px;
    display: flex; align-items: center; justify-content: center; gap: 8px;
}
.ty-timer-pill {
    display: inline-block;
    background: rgba(255,255,255,0.2); color: #fff;
    padding: 3px 10px;
    font-size: 13px; font-weight: 700;
    font-variant-numeric: tabular-nums;
}
.ty-timer-pill.expired { background: #666; }
.ty-upsell-banner h2 {
    font-size: 20px !important; font-weight: 700 !important;
    color: #fff !important; margin: 0 !important;
    line-height: 1.3 !important;
}

/* Benefits */
.ty-upsell-benefits {
    background: #C62828;
    padding: 10px 24px 16px;
    display: flex; flex-direction: column; align-items: center; gap: 6px;
}
.ty-benefit {
    font-size: 14px; font-weight: 500; color: #fff;
    display: flex; align-items: center; gap: 8px;
}
.ty-benefit .ty-b-icon { font-size: 18px; }

/* Product card */
.ty-upsell-product {
    display: flex; gap: 20px;
    padding: 20px 24px;
    align-items: flex-start;
}
.ty-upsell-img {
    width: 160px; min-width: 160px; height: 160px;
    object-fit: cover;
    background: #f8f8f8;
}
.ty-upsell-info { flex: 1; }
.ty-upsell-qty {
    font-size: 32px; font-weight: 700; color: #232f3e;
    line-height: 1; margin-bottom: 4px;
}
.ty-upsell-name {
    font-size: 15px; font-weight: 500; color: #333;
    margin-bottom: 10px; line-height: 1.3;
}
.ty-upsell-old-price {
    font-size: 14px; color: #999;
    text-decoration: line-through;
    margin-bottom: 2px;
}
.ty-upsell-new-price {
    font-size: 28px; font-weight: 700; color: #C62828;
    line-height: 1.1;
}

/* Variation dropdown */
.ty-upsell-select-wrap { padding: 0 24px 16px; }
.ty-upsell-select {
    width: 100%; height: 48px;
    border: 1px solid #ccc;
    padding: 0 16px; font-size: 15px; font-weight: 500;
    color: #333; background: #fff;
    appearance: auto; cursor: pointer;
}

/* Buttons — ALL RED */
.ty-upsell-buttons {
    display: flex; gap: 12px;
    padding: 0 24px 24px;
}
.ty-btn-skip {
    flex: 1; height: 50px;
    background: #C62828; color: #fff;
    border: 2px solid #fff;
    font-size: 14px; font-weight: 600;
    cursor: pointer; transition: opacity 0.2s;
}
.ty-btn-skip:hover { opacity: 0.85; }
.ty-btn-add {
    flex: 1.5; height: 50px;
    background: #C62828; color: #fff;
    border: none;
    font-size: 14px; font-weight: 700;
    cursor: pointer; text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: opacity 0.2s;
}
.ty-btn-add:hover { opacity: 0.85; }
.ty-btn-add:disabled { background: #999; cursor: not-allowed; }
.ty-btn-add.added { background: #2E7D32; }
.ty-upsell-status {
    text-align: center; padding: 0 24px 16px;
    font-size: 13px; color: #888; min-height: 20px;
}

/* Red bottom bar on step 1 */
.ty-upsell-bottom-bar {
    background: #C62828;
    padding: 12px 24px;
    text-align: center;
}
.ty-upsell-bottom-bar .ty-countdown-big {
    background: rgba(255,255,255,0.2);
    color: #fff;
    padding: 6px 14px;
    font-size: 18px; font-weight: 700;
    font-family: monospace;
    letter-spacing: 2px;
}

/* ═══════════════════════════════════════════════
   STEP 2: 6-PRODUCT GRID (inline, not overlay)
   ═══════════════════════════════════════════════ */
.ty-grid-section {
    display: none;
    margin-bottom: 16px; overflow: hidden;
}
.ty-grid-section.show { display: block; }

.ty-grid-popup {
    background: #C62828;
    width: 100%;
    overflow: hidden;
}

.ty-grid-header {
    padding: 18px 20px 14px; text-align: center;
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
    color: #333;
}
.ty-grid-item img {
    width: 100%; max-width: 120px; height: auto;
    object-fit: contain; margin-bottom: 8px;
}
.ty-grid-item .g-name {
    font-size: 12px; color: #333; margin-bottom: 5px;
    line-height: 1.3; min-height: 32px;
}
.ty-grid-item .g-price-old {
    text-decoration: line-through; color: #999; font-size: 12px;
}
.ty-grid-item .g-price-new {
    color: #C62828; font-size: 16px; font-weight: 700;
}
.ty-grid-item select {
    width: 100%; padding: 6px; font-size: 12px;
    border: 1px solid #ddd; margin-top: 6px;
    background: #fff; color: #333;
}
.ty-grid-item .g-add-btn {
    display: block; width: 100%; margin-top: 8px;
    padding: 10px; background: #C62828; color: #fff;
    border: none; font-size: 12px; font-weight: 700;
    text-transform: uppercase; cursor: pointer;
    transition: opacity 0.2s;
}
.ty-grid-item .g-add-btn:hover { opacity: 0.85; }
.ty-grid-item .g-add-btn.added {
    background: #2E7D32; pointer-events: none;
}
.ty-grid-item .g-add-btn:disabled { opacity: 0.5; cursor: not-allowed; }

.ty-grid-close {
    display: block;
    width: calc(100% - 30px); margin: 0 15px 15px;
    padding: 14px;
    background: transparent; color: #fff;
    border: 2px solid #fff;
    font-size: 14px; font-weight: 700;
    text-transform: uppercase;
    cursor: pointer; text-align: center;
}
.ty-grid-close:hover { background: rgba(255,255,255,0.1); }

/* ═══ Collapsible sections ═══ */
.ty-section {
    background: #fff;
    margin-bottom: 12px; overflow: hidden;
}
.ty-section-header {
    display: flex; align-items: center; justify-content: space-between;
    padding: 16px 20px; cursor: pointer; user-select: none;
    font-size: 15px; font-weight: 700; color: #232f3e;
    border-bottom: 1px solid transparent; transition: border-color 0.2s;
}
.ty-section-header.open { border-bottom-color: #f0f0f0; }
.ty-section-header .ty-chevron {
    font-size: 11px; color: #999; transition: transform 0.25s; display: inline-block;
}
.ty-section-header.open .ty-chevron { transform: rotate(180deg); }
.ty-section-body {
    max-height: 0; overflow: hidden; transition: max-height 0.3s ease;
}
.ty-section-body.open { max-height: 2000px; }
.ty-section-body-inner { padding: 14px 20px; }
.ty-row {
    display: flex; justify-content: space-between; align-items: baseline;
    padding: 7px 0; font-size: 14px; border-bottom: 1px solid #f5f5f5;
}
.ty-row:last-child { border-bottom: none; }
.ty-row-label { color: #888; }
.ty-row-value { font-weight: 600; color: #232f3e; text-align: right; max-width: 60%; }
.ty-item {
    display: flex; justify-content: space-between; align-items: center;
    padding: 10px 0; border-bottom: 1px solid #f5f5f5;
}
.ty-item:last-child { border-bottom: none; }
.ty-item-name { font-size: 14px; color: #232f3e; flex: 1; }
.ty-item-meta { font-size: 12px; color: #999; margin-top: 2px; }
.ty-item-price { font-weight: 600; font-size: 14px; color: #232f3e; margin-left: 12px; white-space: nowrap; }
.ty-totals { margin-top: 8px; border-top: 2px solid #eee; padding-top: 8px; }
.ty-totals .ty-row { padding: 5px 0; }
.ty-totals .ty-total-final { font-size: 16px; font-weight: 700; }

/* ═══ Mobile ═══ */
@media (max-width: 560px) {
    .ty-container { margin: 0 auto; padding: 0; }
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
                <a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" style="display:inline-block;background:#C62828;color:#fff;padding:12px 32px;text-decoration:none;font-weight:700;">Pokušaj ponovno</a>
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

        <!-- ═══ STEP 1: SINGLE UPSELL ═══ -->
        <div class="ty-upsell-wrap" id="ty-upsell"
             data-order-id="<?php echo $order->get_id(); ?>"
             data-nonce="<?php echo wp_create_nonce('noriks_upsell_' . $order->get_id()); ?>">

            <!-- Red banner -->
            <div class="ty-upsell-banner">
                <div class="ty-upsell-banner-top">
                    Posebna ponudba poteče
                    <span class="ty-timer-pill" id="ty-timer">05:00</span>
                </div>
                <h2>Dodajte še en izdelek s 50% dodatnega popusta</h2>
            </div>

            <!-- Benefits (red bg continues) -->
            <div class="ty-upsell-benefits">
                <div class="ty-benefit">
                    <span class="ty-b-icon">✔</span>
                    Poslali ga bomo v istem paketu
                </div>
                <div class="ty-benefit">
                    <span class="ty-b-icon">⭐</span>
                    Pomislite, komu bi lahko izdelek podarili
                </div>
            </div>

            <!-- Product -->
            <div class="ty-upsell-product">
                <img class="ty-upsell-img" src="<?php echo esc_url( $upsell_image ); ?>" alt="<?php echo esc_attr( $upsell_name ); ?>">
                <div class="ty-upsell-info">
                    <div class="ty-upsell-qty">1 x</div>
                    <div class="ty-upsell-name"><?php echo esc_html( $upsell_name ); ?> | NORIKS</div>
                    <div class="ty-upsell-old-price"><?php echo number_format( $upsell_price, 2, ',', '.' ); ?>€</div>
                    <div class="ty-upsell-new-price"><?php echo number_format( $upsell_sale_price, 2, ',', '.' ); ?>€</div>
                </div>
            </div>

            <!-- Variation -->
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

            <!-- Status -->
            <div class="ty-upsell-status" id="ty-upsell-status"></div>

            <!-- Red buttons -->
            <div class="ty-upsell-buttons">
                <button class="ty-btn-skip" id="ty-btn-skip">Ne želim</button>
                <button class="ty-btn-add" id="ty-btn-add">DODAJ K NAROČILU</button>
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
                <div class="ty-grid-header">
                    <h3>Še več izdelkov s popustom</h3>
                    <h2>Dodajte katerikoli izdelek s 50% popustom</h2>
                </div>
                <div class="ty-grid-trust">
                    ✔ Vse pošljemo v istem paketu
                </div>
                <div class="ty-grid">
                    <?php foreach ( $grid_products as $gp ) :
                        // For variable products, get_regular_price() can be empty
                        $gp_price = (float) $gp->get_regular_price();
                        if ( ! $gp_price && $gp->is_type('variable') ) {
                            $gp_price = (float) $gp->get_variation_regular_price('min');
                        }
                        if ( ! $gp_price ) {
                            $gp_price = (float) $gp->get_price();
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
                <button class="ty-grid-close" id="ty-grid-close">ZAKLJUČI PONUDBO</button>
            </div>
        </div>
        <?php endif; ?>

        <!-- 📋 Order items -->
        <div class="ty-section">
            <div class="ty-section-header" onclick="tyToggle(this)">
                <span>Stavke narudžbe (<?php echo $order->get_item_count(); ?>)</span>
                <span class="ty-chevron">▼</span>
            </div>
            <div class="ty-section-body">
                <div class="ty-section-body-inner">
                    <?php foreach ( $order->get_items() as $item ) :
                        $qty = $item->get_quantity();
                        $meta_parts = array();
                        foreach ( $item->get_formatted_meta_data('_', true) as $m ) {
                            $meta_parts[] = wp_strip_all_tags( $m->display_key . ': ' . $m->display_value );
                        }
                    ?>
                    <div class="ty-item">
                        <div>
                            <div class="ty-item-name"><?php echo $qty; ?>× <?php echo esc_html( $item->get_name() ); ?></div>
                            <?php if ( $meta_parts ) : ?>
                            <div class="ty-item-meta"><?php echo esc_html( implode( ', ', $meta_parts ) ); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="ty-item-price"><?php echo $order->get_formatted_line_subtotal( $item ); ?></div>
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
            <div class="ty-section-header" onclick="tyToggle(this)">
                <span>Adresa dostave</span>
                <span class="ty-chevron">▼</span>
            </div>
            <div class="ty-section-body">
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
            if (timerEl) { timerEl.textContent = 'Isteklo'; timerEl.classList.add('expired'); }
            if (barEl) barEl.textContent = 'PONUDA ISTEKLA';
            var addBtn = document.getElementById('ty-btn-add');
            if (addBtn) { addBtn.disabled = true; addBtn.textContent = 'PONUDA ISTEKLA'; }
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
                    // Show grid after short delay
                    setTimeout(function() {
                        if (overlay) { showGrid(); } else { wrap.style.display = 'none'; }
                    }, 800);
                })
                .catch(function() {
                    addBtn.disabled = false;
                    addBtn.textContent = 'DODAJ K NAROČILU';
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
})();

function tyToggle(h) {
    h.classList.toggle('open');
    h.nextElementSibling.classList.toggle('open');
}
</script>
