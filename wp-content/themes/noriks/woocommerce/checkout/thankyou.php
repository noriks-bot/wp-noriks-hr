<?php
/**
 * Thankyou page — Vigoshop styled with post-purchase upsell
 *
 * @package WooCommerce\Templates
 * @version 8.1.0
 * @var WC_Order $order
 */
defined( 'ABSPATH' ) || exit;

// Upsell product config
$upsell_product_id = 2781; // Crne Bokserice
$upsell_product    = wc_get_product( $upsell_product_id );
$upsell_name       = $upsell_product ? $upsell_product->get_name() : 'Crne Bokserice';
$upsell_image      = 'https://devhr.noriks.com/wp-content/uploads/2025/11/crne-boksarice-produktna.jpg';
$upsell_price      = $upsell_product ? (float) $upsell_product->get_price() : 15.99;
$upsell_sale_price = round( $upsell_price * 0.5, 2 ); // 50% off

// Get variations for dropdown
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
?>

<style>
/* Hide WP chrome + WC default sections */
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

/* === Container === */
.ty-container { max-width: 560px; margin: 30px auto; padding: 0; }

/* === Success === */
.ty-success {
    background: #e8f5e9; border-radius: 10px;
    padding: 28px 24px; margin-bottom: 16px; text-align: center;
}
.ty-success-icon {
    width: 56px; height: 56px; background: #4CAF50; border-radius: 50%;
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
    background: #fff; padding: 6px 16px; border-radius: 6px;
    font-size: 13px; color: #333; font-weight: 600;
}

/* === UPSELL — vigoshop style === */
.ty-upsell-wrap {
    background: #fff; border-radius: 10px;
    margin-bottom: 16px; overflow: hidden;
}

/* Banner */
.ty-upsell-banner {
    background: #232f3e; color: #fff;
    padding: 18px 24px; text-align: center;
}
.ty-upsell-banner-top {
    font-size: 15px; font-weight: 500; margin-bottom: 6px;
    display: flex; align-items: center; justify-content: center; gap: 8px;
}
.ty-timer-pill {
    display: inline-block;
    background: #e74c3c; color: #fff;
    padding: 3px 10px; border-radius: 4px;
    font-size: 13px; font-weight: 700;
    font-variant-numeric: tabular-nums;
}
.ty-timer-pill.expired { background: #999; }
.ty-upsell-banner h2 {
    font-size: 20px !important; font-weight: 700 !important;
    color: #fff !important; margin: 0 !important;
    line-height: 1.3 !important;
}

/* Benefits */
.ty-upsell-benefits {
    padding: 16px 24px 0;
    display: flex; flex-direction: column; align-items: center; gap: 6px;
}
.ty-benefit {
    font-size: 14px; font-weight: 500;
    display: flex; align-items: center; gap: 8px;
}
.ty-benefit-green { color: #2e7d32; }
.ty-benefit-orange { color: #e65100; }
.ty-benefit .ty-b-icon { font-size: 18px; }

/* Product card */
.ty-upsell-product {
    display: flex; gap: 20px;
    padding: 20px 24px;
    align-items: flex-start;
}
.ty-upsell-img {
    width: 160px; min-width: 160px; height: 160px;
    object-fit: cover; border-radius: 8px;
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
    font-size: 28px; font-weight: 700; color: #e74c3c;
    line-height: 1.1;
}

/* Variation dropdown */
.ty-upsell-select-wrap {
    padding: 0 24px 16px;
}
.ty-upsell-select {
    width: 100%; height: 48px;
    border: 1px solid #ccc; border-radius: 6px;
    padding: 0 16px; font-size: 15px; font-weight: 500;
    color: #333; background: #fff;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23666'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: 24px;
    cursor: pointer;
}

/* Buttons */
.ty-upsell-buttons {
    display: flex; gap: 12px;
    padding: 0 24px 24px;
}
.ty-btn-skip {
    flex: 1; height: 50px;
    background: #fff; color: #333;
    border: 2px solid #ddd; border-radius: 6px;
    font-size: 14px; font-weight: 600;
    cursor: pointer; transition: border-color 0.2s;
}
.ty-btn-skip:hover { border-color: #999; }
.ty-btn-add {
    flex: 1.5; height: 50px;
    background: #232f3e; color: #fff;
    border: none; border-radius: 6px;
    font-size: 14px; font-weight: 700;
    cursor: pointer; text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: background 0.2s;
}
.ty-btn-add:hover { background: #1a2332; }
.ty-btn-add:disabled { background: #999; cursor: not-allowed; }
.ty-btn-add.added { background: #4CAF50; }
.ty-upsell-status {
    text-align: center; padding: 0 24px 16px;
    font-size: 13px; color: #888; min-height: 20px;
}

/* Dismissed state */
.ty-upsell-wrap.dismissed { display: none; }

/* === Collapsible sections === */
.ty-section {
    background: #fff; border-radius: 10px;
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

/* === Mobile === */
@media (max-width: 560px) {
    .ty-container { margin: 0 auto; padding: 0; }
    .ty-success, .ty-section { border-radius: 6px; }
    .ty-upsell-wrap { border-radius: 6px; }
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
                <a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" style="display:inline-block;background:#232f3e;color:#fff;padding:12px 32px;border-radius:6px;text-decoration:none;font-weight:700;">Pokušaj ponovno</a>
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

        <!-- 🛒 UPSELL — vigoshop style -->
        <div class="ty-upsell-wrap" id="ty-upsell" data-order-id="<?php echo $order->get_id(); ?>" data-nonce="<?php echo wp_create_nonce('noriks_upsell_' . $order->get_id()); ?>">

            <!-- Banner -->
            <div class="ty-upsell-banner">
                <div class="ty-upsell-banner-top">
                    Posebna ponudba poteče
                    <span class="ty-timer-pill" id="ty-timer">05:00</span>
                </div>
                <h2>Dodajte še en izdelek s 50% dodatnega popusta</h2>
            </div>

            <!-- Benefits -->
            <div class="ty-upsell-benefits">
                <div class="ty-benefit ty-benefit-green">
                    <span class="ty-b-icon">✔</span>
                    Poslali ga bomo v istem paketu
                </div>
                <div class="ty-benefit ty-benefit-orange">
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

            <!-- Variation dropdown -->
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

            <!-- Buttons -->
            <div class="ty-upsell-buttons">
                <button class="ty-btn-skip" onclick="document.getElementById('ty-upsell').classList.add('dismissed')">Ne želim</button>
                <button class="ty-btn-add" id="ty-btn-add" onclick="tyAddUpsell()">DODAJ K NAROČILU</button>
            </div>

        </div>

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
function tyToggle(h) {
    h.classList.toggle('open');
    h.nextElementSibling.classList.toggle('open');
}

/* Countdown */
(function(){
    var el = document.getElementById('ty-timer');
    var wrap = document.getElementById('ty-upsell');
    if (!el || !wrap) return;
    var key = 'ty_' + wrap.dataset.orderId;
    var rem = 300;
    var saved = localStorage.getItem(key);
    if (saved) { rem = Math.max(0, 300 - Math.floor((Date.now() - parseInt(saved)) / 1000)); }
    else { localStorage.setItem(key, Date.now().toString()); }
    (function tick() {
        if (rem <= 0) {
            el.textContent = 'Isteklo'; el.classList.add('expired');
            var btn = document.getElementById('ty-btn-add');
            if (btn) { btn.disabled = true; btn.textContent = 'PONUDA ISTEKLA'; }
            return;
        }
        var m = Math.floor(rem/60), s = rem%60;
        el.textContent = (m<10?'0':'')+m+':'+(s<10?'0':'')+s;
        rem--; setTimeout(tick, 1000);
    })();
})();

/* Add upsell */
function tyAddUpsell() {
    var wrap = document.getElementById('ty-upsell');
    var btn = document.getElementById('ty-btn-add');
    var status = document.getElementById('ty-upsell-status');
    var select = document.getElementById('ty-variation-select');
    if (!btn || btn.disabled) return;

    btn.disabled = true;
    btn.textContent = 'DODAJEM...';
    status.textContent = '';

    var fd = new FormData();
    fd.append('action', 'noriks_add_upsell');
    fd.append('order_id', wrap.dataset.orderId);
    fd.append('product_id', <?php echo $upsell_product_id; ?>);
    fd.append('variation_id', select ? select.value : '');
    fd.append('sale_price', '<?php echo $upsell_sale_price; ?>');
    fd.append('nonce', wrap.dataset.nonce);

    fetch('<?php echo admin_url("admin-ajax.php"); ?>', { method: 'POST', body: fd })
        .then(function(r){ return r.json(); })
        .then(function(d){
            if (d.success) {
                btn.textContent = '✓ DODANO';
                btn.classList.add('added');
                status.textContent = 'Uspješno dodano! Novi ukupni iznos: ' + (d.data.total || '');
                status.style.color = '#2e7d32';
            } else {
                btn.disabled = false;
                btn.textContent = 'DODAJ K NAROČILU';
                status.textContent = d.data || 'Greška';
                status.style.color = '#e74c3c';
            }
        })
        .catch(function(){
            btn.disabled = false;
            btn.textContent = 'DODAJ K NAROČILU';
            status.textContent = 'Greška — pokušajte ponovno';
            status.style.color = '#e74c3c';
        });
}
</script>
