<?php
/**
 * Thankyou page — Vigoshop styled
 *
 * @package WooCommerce\Templates
 * @version 8.1.0
 * @var WC_Order $order
 */
defined( 'ABSPATH' ) || exit;

// Upsell product IDs — configure here
// Format: [ 'label' => '...', 'product_id' => X, 'variation_id' => 0, 'qty' => 1, 'image' => 'url' ]
$upsell_items = apply_filters( 'noriks_thankyou_upsell_items', array(
    array( 'label' => '1 Bokserica',    'slug' => '1-bokserica',   'qty' => 1, 'type' => 'bokserice' ),
    array( 'label' => '3 Bokserice',   'slug' => '3-bokserice',   'qty' => 3, 'type' => 'bokserice' ),
    array( 'label' => '6 Bokseric',    'slug' => '6-bokseric',    'qty' => 6, 'type' => 'bokserice' ),
    array( 'label' => '1 Majica',      'slug' => '1-majica',      'qty' => 1, 'type' => 'majice' ),
    array( 'label' => '3 Majice',      'slug' => '3-majice',      'qty' => 3, 'type' => 'majice' ),
    array( 'label' => '6 Majic',       'slug' => '6-majic',       'qty' => 6, 'type' => 'majice' ),
));
?>

<style>
/* ===== THANK YOU PAGE — VIGOSHOP STYLE ===== */

/* Hide WP chrome (same as checkout) */
.top-header, .marquee, header.navbar.header, #languageModal,
.xoo-wsc-markup, .xoo-wsc-overlay, .footer-wrap, footer.footer,
footer.footer-mobile, .hs_loader, .entry-header,
.storefront-breadcrumb, .storefront-sorting,
#secondary, .site-footer, .xoo-wsc-container { display: none !important; }

body.woocommerce-order-received {
    background: #f0f2f5 !important;
    font-family: 'Roboto', sans-serif !important;
    color: #333 !important;
}

body.woocommerce-order-received .site-main,
body.woocommerce-order-received .hentry {
    margin: 0 !important;
    padding: 0 !important;
}

/* === Logo header === */
.ty-header {
    background: #fff;
    text-align: center;
    padding: 14px 0 18px;
    border-bottom: 1px solid #e0e0e0;
}
.ty-header a { text-decoration: none; }
.ty-header .ty-brand {
    font-family: 'Roboto', sans-serif;
    font-size: 33px; font-weight: 700;
    letter-spacing: 1.75px; color: #000;
}
.ty-header .ty-tagline {
    display: block; font-size: 10px;
    font-family: 'Roboto', sans-serif;
    margin-top: -12px; letter-spacing: 0.38px;
    color: #000; margin-left: 1px;
}

/* === Main container === */
.ty-container {
    max-width: 560px;
    margin: 30px auto;
    padding: 0;
}

/* === Success card === */
.ty-success-card {
    background: #fff;
    border-radius: 10px;
    padding: 30px 40px;
    margin-bottom: 16px;
    text-align: center;
}
.ty-success-icon {
    width: 64px; height: 64px;
    background: #e8f5e9;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 16px;
    font-size: 32px; color: #4CAF50;
}
.ty-success-card h1 {
    font-size: 24px !important; font-weight: 700 !important;
    color: #232f3e !important; margin: 0 0 8px !important;
    line-height: 1.3 !important;
}
.ty-success-card p {
    font-size: 14px; color: #5f6061; margin: 0;
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
    padding: 18px 24px;
    cursor: pointer; user-select: none;
    font-size: 16px; font-weight: 700; color: #232f3e;
    border-bottom: 1px solid transparent;
    transition: border-color 0.2s;
}
.ty-section-header.open { border-bottom-color: #eee; }
.ty-section-header .ty-chevron {
    font-size: 12px; color: #999;
    transition: transform 0.2s;
}
.ty-section-header.open .ty-chevron { transform: rotate(180deg); }
.ty-section-body {
    padding: 0 24px;
    max-height: 0; overflow: hidden;
    transition: max-height 0.3s ease, padding 0.3s ease;
}
.ty-section-body.open {
    padding: 16px 24px;
    max-height: 2000px;
}

/* Section content */
.ty-detail-row {
    display: flex; justify-content: space-between;
    padding: 8px 0; font-size: 14px;
    border-bottom: 1px solid #f0f0f0;
}
.ty-detail-row:last-child { border-bottom: none; }
.ty-detail-label { color: #5f6061; }
.ty-detail-value { font-weight: 600; color: #232f3e; text-align: right; }

/* Order items table */
.ty-items-table { width: 100%; border-collapse: collapse; }
.ty-items-table th {
    text-align: left; font-size: 12px; color: #999;
    font-weight: 500; padding: 0 0 8px; text-transform: uppercase;
}
.ty-items-table td {
    padding: 10px 0; font-size: 14px;
    border-bottom: 1px solid #f0f0f0;
}
.ty-items-table td:last-child { text-align: right; font-weight: 600; }
.ty-items-table .ty-item-name { color: #232f3e; }
.ty-items-table .ty-item-meta { font-size: 12px; color: #999; }
.ty-items-total td {
    border-bottom: none; border-top: 2px solid #eee;
    padding-top: 12px; font-weight: 700; font-size: 16px;
}

/* === Upsell section === */
.ty-upsell {
    background: #fff;
    border-radius: 10px;
    padding: 24px;
    margin-bottom: 16px;
}
.ty-upsell-header {
    text-align: center;
    margin-bottom: 20px;
}
.ty-upsell-header h2 {
    font-size: 19.6px !important; font-weight: 700 !important;
    color: #232f3e !important; margin: 0 0 8px !important;
}
.ty-upsell-timer {
    display: inline-flex; align-items: center; gap: 6px;
    background: #FFF3CD; color: #856404;
    padding: 6px 14px; border-radius: 20px;
    font-size: 14px; font-weight: 600;
}
.ty-upsell-timer .ty-timer-icon { font-size: 16px; }
.ty-upsell-expired { background: #f8d7da; color: #721c24; }

/* Grid */
.ty-upsell-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
}
.ty-upsell-card {
    background: #f8f9fa;
    border: 2px solid #e0e0e0;
    border-radius: 8px;
    padding: 16px 12px;
    text-align: center;
    cursor: pointer;
    transition: border-color 0.2s, box-shadow 0.2s;
    position: relative;
}
.ty-upsell-card:hover {
    border-color: #4CAF50;
    box-shadow: 0 2px 8px rgba(76,175,80,0.2);
}
.ty-upsell-card.adding {
    opacity: 0.6; pointer-events: none;
}
.ty-upsell-card.added {
    border-color: #4CAF50; background: #e8f5e9;
    pointer-events: none;
}
.ty-upsell-card.added::after {
    content: '✓'; position: absolute;
    top: 8px; right: 8px;
    background: #4CAF50; color: #fff;
    width: 20px; height: 20px; border-radius: 50%;
    font-size: 12px; display: flex; align-items: center; justify-content: center;
}
.ty-upsell-card .ty-upsell-icon {
    font-size: 32px; margin-bottom: 8px;
}
.ty-upsell-card .ty-upsell-label {
    font-size: 14px; font-weight: 600; color: #232f3e;
    margin-bottom: 4px;
}
.ty-upsell-card .ty-upsell-price {
    font-size: 13px; color: #5f6061;
}
.ty-upsell-card.disabled {
    opacity: 0.4; pointer-events: none;
}

/* === Mobile === */
@media (max-width: 560px) {
    .ty-container { margin: 15px 0 0; }
    .ty-success-card, .ty-section, .ty-upsell {
        border-radius: 5px;
    }
    .ty-success-card { padding: 24px 15px; }
    .ty-success-card h1 { font-size: 20px !important; }
    .ty-section-header { padding: 14px 15px; }
    .ty-section-body.open { padding: 12px 15px; }
    .ty-upsell { padding: 16px 15px; }
    .ty-upsell-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

<!-- Logo header -->
<div class="ty-header">
    <a href="<?php echo esc_url( home_url('/') ); ?>">
        <span class="ty-brand">NORIKS</span>
        <span class="ty-tagline">Simple Shirts, Done Better</span>
    </a>
</div>

<?php if ( $order ) : ?>

<div class="ty-container">

    <?php do_action( 'woocommerce_before_thankyou', $order->get_id() ); ?>

    <?php if ( $order->has_status( 'failed' ) ) : ?>
        <div class="ty-success-card" style="border-left: 4px solid #dc3545;">
            <div class="ty-success-icon" style="background:#fde8e8;">
                <span style="color:#dc3545;">✕</span>
            </div>
            <h1>Narudžba nije uspjela</h1>
            <p><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>
            <p style="margin-top:16px;">
                <a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button" style="background:linear-gradient(to bottom,#3ec000,#00ac00);color:#fff;padding:12px 32px;border-radius:4px;text-decoration:none;font-weight:700;">Pokušaj ponovno</a>
            </p>
        </div>
    <?php else : ?>

        <!-- Success message -->
        <div class="ty-success-card">
            <div class="ty-success-icon">✓</div>
            <h1>Vaše naručilo je bilo sprejeto</h1>
            <p>Hvala vam za narudžbu! Potvrdu ste primili na e-mail.</p>
        </div>

        <!-- Order overview -->
        <div class="ty-section">
            <div class="ty-section-header open" onclick="toggleTySection(this)">
                <span>Pregled narudžbe #<?php echo $order->get_order_number(); ?></span>
                <span class="ty-chevron">▼</span>
            </div>
            <div class="ty-section-body open">
                <div class="ty-detail-row">
                    <span class="ty-detail-label">Datum</span>
                    <span class="ty-detail-value"><?php echo wc_format_datetime( $order->get_date_created() ); ?></span>
                </div>
                <?php if ( $order->get_billing_email() ) : ?>
                <div class="ty-detail-row">
                    <span class="ty-detail-label">E-mail</span>
                    <span class="ty-detail-value"><?php echo esc_html( $order->get_billing_email() ); ?></span>
                </div>
                <?php endif; ?>
                <div class="ty-detail-row">
                    <span class="ty-detail-label">Način plaćanja</span>
                    <span class="ty-detail-value"><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></span>
                </div>
                <div class="ty-detail-row">
                    <span class="ty-detail-label">Ukupno</span>
                    <span class="ty-detail-value"><?php echo $order->get_formatted_order_total(); ?></span>
                </div>
            </div>
        </div>

        <!-- Order items -->
        <div class="ty-section">
            <div class="ty-section-header" onclick="toggleTySection(this)">
                <span>Stavke narudžbe (<?php echo $order->get_item_count(); ?>)</span>
                <span class="ty-chevron">▼</span>
            </div>
            <div class="ty-section-body">
                <table class="ty-items-table">
                    <thead>
                        <tr><th>Proizvod</th><th style="text-align:right">Cijena</th></tr>
                    </thead>
                    <tbody>
                    <?php foreach ( $order->get_items() as $item_id => $item ) :
                        $product = $item->get_product();
                        $qty = $item->get_quantity();
                    ?>
                        <tr>
                            <td>
                                <div class="ty-item-name"><?php echo $qty; ?>× <?php echo esc_html( $item->get_name() ); ?></div>
                                <?php
                                $meta = $item->get_formatted_meta_data('_', true);
                                if ( $meta ) :
                                    $parts = array();
                                    foreach ( $meta as $m ) {
                                        $parts[] = wp_strip_all_tags( $m->display_key . ': ' . $m->display_value );
                                    }
                                ?>
                                    <div class="ty-item-meta"><?php echo esc_html( implode( ', ', $parts ) ); ?></div>
                                <?php endif; ?>
                            </td>
                            <td><?php echo $order->get_formatted_line_subtotal( $item ); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <?php foreach ( $order->get_order_item_totals() as $key => $total ) : ?>
                        <tr class="<?php echo ( $key === 'order_total' ) ? 'ty-items-total' : ''; ?>">
                            <td><?php echo $total['label']; ?></td>
                            <td><?php echo $total['value']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- Delivery address -->
        <div class="ty-section">
            <div class="ty-section-header" onclick="toggleTySection(this)">
                <span>Adresa dostave</span>
                <span class="ty-chevron">▼</span>
            </div>
            <div class="ty-section-body">
                <div class="ty-detail-row">
                    <span class="ty-detail-label">Ime</span>
                    <span class="ty-detail-value"><?php echo esc_html( $order->get_billing_first_name() . ' ' . $order->get_billing_last_name() ); ?></span>
                </div>
                <div class="ty-detail-row">
                    <span class="ty-detail-label">Adresa</span>
                    <span class="ty-detail-value"><?php echo esc_html( $order->get_billing_address_1() ); ?> <?php echo esc_html( $order->get_billing_address_2() ); ?></span>
                </div>
                <div class="ty-detail-row">
                    <span class="ty-detail-label">Grad</span>
                    <span class="ty-detail-value"><?php echo esc_html( $order->get_billing_postcode() . ' ' . $order->get_billing_city() ); ?></span>
                </div>
                <?php if ( $order->get_billing_phone() ) : ?>
                <div class="ty-detail-row">
                    <span class="ty-detail-label">Telefon</span>
                    <span class="ty-detail-value"><?php echo esc_html( $order->get_billing_phone() ); ?></span>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- POST-PURCHASE UPSELL -->
        <div class="ty-upsell" id="ty-upsell-section" data-order-id="<?php echo $order->get_id(); ?>" data-nonce="<?php echo wp_create_nonce('noriks_upsell_' . $order->get_id()); ?>">
            <div class="ty-upsell-header">
                <h2>Dodajte uz narudžbu</h2>
                <div class="ty-upsell-timer" id="ty-upsell-timer">
                    <span class="ty-timer-icon">⏱</span>
                    <span id="ty-timer-text">5:00</span>
                </div>
            </div>
            <div class="ty-upsell-grid" id="ty-upsell-grid">
                <?php foreach ( $upsell_items as $i => $item ) :
                    $icon = ( $item['type'] === 'bokserice' ) ? '🩲' : '👕';
                ?>
                <div class="ty-upsell-card" data-index="<?php echo $i; ?>" data-slug="<?php echo esc_attr( $item['slug'] ); ?>" onclick="addUpsell(this)">
                    <div class="ty-upsell-icon"><?php echo $icon; ?></div>
                    <div class="ty-upsell-label"><?php echo esc_html( $item['label'] ); ?></div>
                    <div class="ty-upsell-price"></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    <?php endif; // not failed ?>

    <?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
    <?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

</div><!-- .ty-container -->

<?php else : ?>
    <div class="ty-container">
        <div class="ty-success-card">
            <h1>Narudžba</h1>
            <?php wc_get_template( 'checkout/order-received.php', array( 'order' => false ) ); ?>
        </div>
    </div>
<?php endif; ?>

<script>
/* Collapsible sections */
function toggleTySection(header) {
    var body = header.nextElementSibling;
    var isOpen = header.classList.contains('open');
    if (isOpen) {
        header.classList.remove('open');
        body.classList.remove('open');
    } else {
        header.classList.add('open');
        body.classList.add('open');
    }
}

/* Countdown timer — 5 minutes */
(function(){
    var section = document.getElementById('ty-upsell-section');
    var timerEl = document.getElementById('ty-timer-text');
    var timerWrap = document.getElementById('ty-upsell-timer');
    if (!section || !timerEl) return;

    var remaining = 5 * 60; // 5 minutes in seconds
    var storageKey = 'ty_upsell_' + section.dataset.orderId;

    // Check if timer was already started
    var saved = localStorage.getItem(storageKey);
    if (saved) {
        var elapsed = Math.floor((Date.now() - parseInt(saved)) / 1000);
        remaining = Math.max(0, remaining - elapsed);
    } else {
        localStorage.setItem(storageKey, Date.now().toString());
    }

    function updateTimer() {
        if (remaining <= 0) {
            timerEl.textContent = 'Isteklo';
            timerWrap.classList.add('ty-upsell-expired');
            document.querySelectorAll('.ty-upsell-card:not(.added)').forEach(function(c) {
                c.classList.add('disabled');
            });
            return;
        }
        var m = Math.floor(remaining / 60);
        var s = remaining % 60;
        timerEl.textContent = m + ':' + (s < 10 ? '0' : '') + s;
        remaining--;
        setTimeout(updateTimer, 1000);
    }
    updateTimer();
})();

/* Add upsell to order via AJAX */
function addUpsell(card) {
    if (card.classList.contains('adding') || card.classList.contains('added') || card.classList.contains('disabled')) return;

    var section = document.getElementById('ty-upsell-section');
    var orderId = section.dataset.orderId;
    var nonce = section.dataset.nonce;
    var slug = card.dataset.slug;

    card.classList.add('adding');
    card.querySelector('.ty-upsell-price').textContent = 'Dodajem...';

    var formData = new FormData();
    formData.append('action', 'noriks_add_upsell');
    formData.append('order_id', orderId);
    formData.append('upsell_slug', slug);
    formData.append('nonce', nonce);

    fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
        method: 'POST',
        body: formData
    })
    .then(function(r) { return r.json(); })
    .then(function(data) {
        card.classList.remove('adding');
        if (data.success) {
            card.classList.add('added');
            card.querySelector('.ty-upsell-price').textContent = 'Dodano! ' + (data.data.total || '');
        } else {
            card.querySelector('.ty-upsell-price').textContent = data.data || 'Greška';
        }
    })
    .catch(function() {
        card.classList.remove('adding');
        card.querySelector('.ty-upsell-price').textContent = 'Greška';
    });
}
</script>
