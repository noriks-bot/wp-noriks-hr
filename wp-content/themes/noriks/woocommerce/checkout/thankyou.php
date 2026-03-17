<?php
/**
 * Thankyou page — Vigoshop styled
 *
 * @package WooCommerce\Templates
 * @version 8.1.0
 * @var WC_Order $order
 */
defined( 'ABSPATH' ) || exit;

// Upsell products with real WC data
$upsell_products = array(
    array(
        'product_id'   => 2781,
        'label'        => 'Crne Bokserice',
        'sublabel'     => '1 komad',
        'image'        => 'https://devhr.noriks.com/wp-content/uploads/2025/11/crne-boksarice-produktna.jpg',
        'price'        => '15,99 €',
    ),
    array(
        'product_id'   => 2890,
        'label'        => 'Crne bokserice',
        'sublabel'     => '3-paket',
        'image'        => 'https://devhr.noriks.com/wp-content/uploads/2025/11/boksarice_3x_crne.png',
        'price'        => '31,99 €',
    ),
    array(
        'product_id'   => 4983,
        'label'        => 'Crne bokserice',
        'sublabel'     => '5-paket',
        'image'        => 'https://devhr.noriks.com/wp-content/uploads/2026/01/boksarice_5x_crne.png',
        'price'        => '48,99 €',
    ),
    array(
        'product_id'   => 250,
        'label'        => 'Crna majica',
        'sublabel'     => '1 komad',
        'image'        => 'https://devhr.noriks.com/wp-content/uploads/2025/09/black-1.jpg',
        'price'        => '24,99 €',
    ),
    array(
        'product_id'   => 605,
        'label'        => 'Crne majice',
        'sublabel'     => '3-paket',
        'image'        => 'https://devhr.noriks.com/wp-content/uploads/2025/09/black-3x.jpg',
        'price'        => '49,99 €',
    ),
    array(
        'product_id'   => 4410,
        'label'        => 'Crne majice',
        'sublabel'     => '6-paket',
        'image'        => 'https://devhr.noriks.com/wp-content/uploads/2026/01/6xcrnamajica.png',
        'price'        => '96,99 €',
    ),
);
$upsell_products = apply_filters( 'noriks_thankyou_upsell_products', $upsell_products );

// Try to detect customer's size from order items
$customer_size = '';
if ( $order ) {
    foreach ( $order->get_items() as $item ) {
        $meta = $item->get_meta( 'pa_velicina' ) ?: $item->get_meta( 'Veličina' ) ?: $item->get_meta( 'velicina' );
        if ( $meta ) { $customer_size = $meta; break; }
        // Check variation attributes
        if ( is_a( $item, 'WC_Order_Item_Product' ) ) {
            $variation_id = $item->get_variation_id();
            if ( $variation_id ) {
                $variation = wc_get_product( $variation_id );
                if ( $variation ) {
                    $attrs = $variation->get_attributes();
                    foreach ( $attrs as $k => $v ) {
                        if ( stripos( $k, 'velicina' ) !== false || stripos( $k, 'size' ) !== false ) {
                            $customer_size = $v;
                            break 2;
                        }
                    }
                }
            }
        }
    }
}
?>

<style>
/* ===== THANK YOU PAGE — VIGOSHOP STYLE ===== */

/* Hide WP chrome */
.top-header, .marquee, header.navbar.header, #languageModal,
.xoo-wsc-markup, .xoo-wsc-overlay, .footer-wrap, footer.footer,
footer.footer-mobile, .hs_loader, .entry-header,
.storefront-breadcrumb, .storefront-sorting,
#secondary, .site-footer, .xoo-wsc-container,
.checkout--my-header { display: none !important; }

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

/* === Main container === */
.ty-container {
    max-width: 560px;
    margin: 30px auto;
    padding: 0 15px;
}

/* === Success banner === */
.ty-success {
    background: #e8f5e9;
    border-radius: 10px;
    padding: 28px 32px;
    margin-bottom: 16px;
    text-align: center;
}
.ty-success-icon {
    width: 56px; height: 56px;
    background: #4CAF50;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 14px;
    font-size: 28px; color: #fff;
}
.ty-success h1 {
    font-size: 22px !important; font-weight: 700 !important;
    color: #232f3e !important; margin: 0 0 6px !important;
    line-height: 1.3 !important;
}
.ty-success p {
    font-size: 14px; color: #5f6061; margin: 0;
}
.ty-success .ty-order-num {
    display: inline-block; margin-top: 10px;
    background: #fff; padding: 6px 16px; border-radius: 6px;
    font-size: 13px; color: #333; font-weight: 600;
}

/* === Collapsible sections === */
.ty-section {
    background: #fff;
    border-radius: 10px;
    margin-bottom: 12px;
    overflow: hidden;
}
.ty-section-header {
    display: flex; align-items: center; justify-content: space-between;
    padding: 16px 20px;
    cursor: pointer; user-select: none;
    font-size: 15px; font-weight: 700; color: #232f3e;
    border-bottom: 1px solid transparent;
    transition: border-color 0.2s;
}
.ty-section-header.open { border-bottom-color: #f0f0f0; }
.ty-section-header .ty-chevron {
    font-size: 11px; color: #999;
    transition: transform 0.25s;
    display: inline-block;
}
.ty-section-header.open .ty-chevron { transform: rotate(180deg); }
.ty-section-body {
    max-height: 0; overflow: hidden;
    transition: max-height 0.3s ease;
}
.ty-section-body.open { max-height: 2000px; }
.ty-section-body-inner { padding: 14px 20px; }

/* Section content */
.ty-row {
    display: flex; justify-content: space-between; align-items: baseline;
    padding: 7px 0; font-size: 14px;
    border-bottom: 1px solid #f5f5f5;
}
.ty-row:last-child { border-bottom: none; }
.ty-row-label { color: #888; }
.ty-row-value { font-weight: 600; color: #232f3e; text-align: right; max-width: 60%; }

/* Items */
.ty-item {
    display: flex; justify-content: space-between; align-items: center;
    padding: 10px 0; border-bottom: 1px solid #f5f5f5;
}
.ty-item:last-child { border-bottom: none; }
.ty-item-name { font-size: 14px; color: #232f3e; flex: 1; }
.ty-item-qty { color: #888; font-size: 13px; }
.ty-item-meta { font-size: 12px; color: #999; margin-top: 2px; }
.ty-item-price { font-weight: 600; font-size: 14px; color: #232f3e; margin-left: 12px; white-space: nowrap; }
.ty-totals { margin-top: 8px; border-top: 2px solid #eee; padding-top: 8px; }
.ty-totals .ty-row { padding: 5px 0; }
.ty-totals .ty-total-final { font-size: 16px; font-weight: 700; }

/* === Upsell === */
.ty-upsell {
    background: #fff;
    border-radius: 10px;
    padding: 24px 20px;
    margin-bottom: 16px;
}
.ty-upsell-head {
    text-align: center;
    margin-bottom: 18px;
}
.ty-upsell-head h2 {
    font-size: 18px !important; font-weight: 700 !important;
    color: #232f3e !important; margin: 0 0 10px !important;
}
.ty-timer-badge {
    display: inline-flex; align-items: center; gap: 6px;
    background: #FFF3CD; color: #856404;
    padding: 5px 14px; border-radius: 20px;
    font-size: 13px; font-weight: 600;
}
.ty-timer-badge.expired { background: #f8d7da; color: #721c24; }

/* Upsell grid */
.ty-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}
.ty-card {
    background: #fff;
    border: 2px solid #e8e8e8;
    border-radius: 10px;
    padding: 12px;
    text-align: center;
    cursor: pointer;
    transition: border-color 0.2s, transform 0.15s, box-shadow 0.2s;
    position: relative;
    display: flex; flex-direction: column; align-items: center;
}
.ty-card:hover {
    border-color: #4CAF50;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}
.ty-card:active { transform: translateY(0); }
.ty-card.adding { opacity: 0.5; pointer-events: none; }
.ty-card.added {
    border-color: #4CAF50; background: #f2feee;
    pointer-events: none;
}
.ty-card.added .ty-card-btn { background: #4CAF50; }
.ty-card.added .ty-card-btn::after { content: ' ✓'; }
.ty-card.disabled { opacity: 0.35; pointer-events: none; }

.ty-card-img {
    width: 100%; aspect-ratio: 1;
    object-fit: cover; border-radius: 6px;
    margin-bottom: 8px; background: #f8f8f8;
}
.ty-card-label {
    font-size: 13px; font-weight: 700; color: #232f3e;
    line-height: 1.2; margin-bottom: 2px;
}
.ty-card-sub {
    font-size: 11px; color: #888; margin-bottom: 6px;
}
.ty-card-price {
    font-size: 15px; font-weight: 700; color: #232f3e;
    margin-bottom: 8px;
}
.ty-card-btn {
    display: inline-block;
    background: linear-gradient(to bottom, #3ec000, #00ac00);
    color: #fff; font-size: 12px; font-weight: 700;
    padding: 7px 14px; border-radius: 4px;
    border: none; width: 100%;
    transition: opacity 0.2s;
}
.ty-card-status {
    font-size: 11px; color: #888; margin-top: 4px;
    min-height: 16px;
}

/* === Mobile === */
@media (max-width: 560px) {
    .ty-container { margin: 15px auto; padding: 0 8px; }
    .ty-success, .ty-section, .ty-upsell { border-radius: 6px; }
    .ty-success { padding: 22px 16px; }
    .ty-success h1 { font-size: 19px !important; }
    .ty-section-header { padding: 14px 16px; font-size: 14px; }
    .ty-section-body-inner { padding: 12px 16px; }
    .ty-upsell { padding: 18px 14px; }
    .ty-grid { grid-template-columns: repeat(2, 1fr); }
    .ty-card { padding: 10px; }
    .ty-card-label { font-size: 12px; }
    .ty-card-price { font-size: 14px; }
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
                <a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" style="display:inline-block;background:linear-gradient(to bottom,#3ec000,#00ac00);color:#fff;padding:12px 32px;border-radius:4px;text-decoration:none;font-weight:700;">Pokušaj ponovno</a>
            </p>
        </div>
    <?php else : ?>

        <!-- ✅ Success banner -->
        <div class="ty-success">
            <div class="ty-success-icon">✓</div>
            <h1>Vaša narudžba je zaprimljena!</h1>
            <p>Potvrdu ste primili na <?php echo esc_html( $order->get_billing_email() ); ?></p>
            <span class="ty-order-num">Narudžba #<?php echo $order->get_order_number(); ?></span>
        </div>

        <!-- 🛒 POST-PURCHASE UPSELL -->
        <div class="ty-upsell" id="ty-upsell" data-order-id="<?php echo $order->get_id(); ?>" data-nonce="<?php echo wp_create_nonce('noriks_upsell_' . $order->get_id()); ?>" data-size="<?php echo esc_attr( $customer_size ); ?>">
            <div class="ty-upsell-head">
                <h2>Dodajte uz narudžbu</h2>
                <div class="ty-timer-badge" id="ty-timer">
                    <span>⏱</span>
                    <span id="ty-timer-text">5:00</span>
                </div>
            </div>
            <div class="ty-grid">
                <?php foreach ( $upsell_products as $i => $up ) : ?>
                <div class="ty-card" data-product-id="<?php echo $up['product_id']; ?>" onclick="tyAddUpsell(this)">
                    <img class="ty-card-img" src="<?php echo esc_url( $up['image'] ); ?>" alt="<?php echo esc_attr( $up['label'] ); ?>" loading="lazy">
                    <div class="ty-card-label"><?php echo esc_html( $up['label'] ); ?></div>
                    <div class="ty-card-sub"><?php echo esc_html( $up['sublabel'] ); ?></div>
                    <div class="ty-card-price"><?php echo esc_html( $up['price'] ); ?></div>
                    <div class="ty-card-btn">Dodaj</div>
                    <div class="ty-card-status"></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- 📋 Order items -->
        <div class="ty-section">
            <div class="ty-section-header open" onclick="tyToggle(this)">
                <span>Stavke narudžbe (<?php echo $order->get_item_count(); ?>)</span>
                <span class="ty-chevron">▼</span>
            </div>
            <div class="ty-section-body open">
                <div class="ty-section-body-inner">
                    <?php foreach ( $order->get_items() as $item ) :
                        $qty = $item->get_quantity();
                        $meta_parts = array();
                        $meta = $item->get_formatted_meta_data('_', true);
                        foreach ( $meta as $m ) {
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

        <!-- 📍 Delivery address -->
        <div class="ty-section">
            <div class="ty-section-header" onclick="tyToggle(this)">
                <span>Adresa dostave</span>
                <span class="ty-chevron">▼</span>
            </div>
            <div class="ty-section-body">
                <div class="ty-section-body-inner">
                    <div class="ty-row">
                        <span class="ty-row-label">Ime</span>
                        <span class="ty-row-value"><?php echo esc_html( $order->get_billing_first_name() . ' ' . $order->get_billing_last_name() ); ?></span>
                    </div>
                    <div class="ty-row">
                        <span class="ty-row-label">Adresa</span>
                        <span class="ty-row-value"><?php echo esc_html( $order->get_billing_address_1() ); ?> <?php echo esc_html( $order->get_billing_address_2() ); ?></span>
                    </div>
                    <div class="ty-row">
                        <span class="ty-row-label">Grad</span>
                        <span class="ty-row-value"><?php echo esc_html( $order->get_billing_postcode() . ' ' . $order->get_billing_city() ); ?></span>
                    </div>
                    <?php if ( $order->get_billing_phone() ) : ?>
                    <div class="ty-row">
                        <span class="ty-row-label">Telefon</span>
                        <span class="ty-row-value"><?php echo esc_html( $order->get_billing_phone() ); ?></span>
                    </div>
                    <?php endif; ?>
                    <div class="ty-row">
                        <span class="ty-row-label">Način plaćanja</span>
                        <span class="ty-row-value"><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></span>
                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>

    <?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
    <?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

</div><!-- .ty-container -->

<?php else : ?>
    <div class="ty-container">
        <div class="ty-success">
            <h1>Narudžba</h1>
            <?php wc_get_template( 'checkout/order-received.php', array( 'order' => false ) ); ?>
        </div>
    </div>
<?php endif; ?>

<script>
/* Toggle sections */
function tyToggle(h) {
    var b = h.nextElementSibling;
    h.classList.toggle('open');
    b.classList.toggle('open');
}

/* 5-min countdown */
(function(){
    var el = document.getElementById('ty-timer-text');
    var wrap = document.getElementById('ty-timer');
    var upsell = document.getElementById('ty-upsell');
    if (!el || !upsell) return;

    var key = 'ty_' + upsell.dataset.orderId;
    var remaining = 300;
    var saved = localStorage.getItem(key);
    if (saved) {
        remaining = Math.max(0, 300 - Math.floor((Date.now() - parseInt(saved)) / 1000));
    } else {
        localStorage.setItem(key, Date.now().toString());
    }

    (function tick() {
        if (remaining <= 0) {
            el.textContent = 'Isteklo';
            wrap.classList.add('expired');
            document.querySelectorAll('.ty-card:not(.added)').forEach(function(c){ c.classList.add('disabled'); });
            return;
        }
        var m = Math.floor(remaining / 60), s = remaining % 60;
        el.textContent = m + ':' + (s < 10 ? '0' : '') + s;
        remaining--;
        setTimeout(tick, 1000);
    })();
})();

/* Add upsell to order */
function tyAddUpsell(card) {
    if (card.classList.contains('adding') || card.classList.contains('added') || card.classList.contains('disabled')) return;

    var upsell = document.getElementById('ty-upsell');
    var status = card.querySelector('.ty-card-status');
    card.classList.add('adding');
    status.textContent = 'Dodajem...';

    var fd = new FormData();
    fd.append('action', 'noriks_add_upsell');
    fd.append('order_id', upsell.dataset.orderId);
    fd.append('product_id', card.dataset.productId);
    fd.append('size', upsell.dataset.size || '');
    fd.append('nonce', upsell.dataset.nonce);

    fetch('<?php echo admin_url("admin-ajax.php"); ?>', { method: 'POST', body: fd })
        .then(function(r){ return r.json(); })
        .then(function(d){
            card.classList.remove('adding');
            if (d.success) {
                card.classList.add('added');
                status.textContent = 'Dodano!';
                card.querySelector('.ty-card-btn').textContent = 'Dodano';
            } else {
                status.textContent = d.data || 'Greška';
            }
        })
        .catch(function(){
            card.classList.remove('adding');
            status.textContent = 'Greška — pokušajte ponovno';
        });
}
</script>
