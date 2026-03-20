<?php
/**
 * Checkout coupon form — HR translation, clean inline style
 */
defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) return;
?>

<div class="noriks-coupon-wrap" style="margin:0 0 16px;padding:12px 16px;background:#f9f9f9;border:1px solid #e0e0e0;border-radius:6px;">
    <div class="noriks-coupon-toggle" style="display:flex;align-items:center;gap:6px;cursor:pointer;" onclick="var f=this.nextElementSibling;f.style.display=f.style.display==='none'?'flex':'none';this.querySelector('.nc-arrow').textContent=f.style.display==='none'?'▸':'▾';">
        <span style="font-size:14px;">🏷️</span>
        <span style="font-size:14px;color:#333;font-weight:500;">Imaš kupon kod?</span>
        <span class="nc-arrow" style="font-size:12px;color:#999;">▸</span>
    </div>
    <div class="noriks-coupon-form" style="display:none;margin-top:10px;gap:8px;align-items:center;">
        <input type="text" name="coupon_code" id="coupon_code" class="input-text" placeholder="Unesi kupon kod" style="flex:1;padding:10px 12px;border:1px solid #ccc;border-radius:4px;font-size:14px;" />
        <button type="button" class="button noriks-apply-coupon" style="padding:10px 20px;background:#000;color:#fff;border:none;border-radius:4px;font-size:14px;font-weight:600;cursor:pointer;white-space:nowrap;" onclick="noriksApplyCoupon()">Primijeni</button>
    </div>
    <div id="noriks-coupon-msg" style="display:none;margin-top:8px;padding:8px 12px;border-radius:4px;font-size:13px;"></div>
</div>

<script>
function noriksApplyCoupon() {
    var code = document.getElementById('coupon_code').value.trim();
    if (!code) return;
    var msg = document.getElementById('noriks-coupon-msg');
    var btn = document.querySelector('.noriks-apply-coupon');
    btn.textContent = '...';
    btn.disabled = true;

    var formData = new FormData();
    formData.append('coupon_code', code);

    fetch('<?php echo esc_url( wc_get_checkout_url() ); ?>?wc-ajax=apply_coupon', {
        method: 'POST',
        body: new URLSearchParams({ coupon_code: code, security: '<?php echo wp_create_nonce("apply-coupon"); ?>' }),
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    })
    .then(function(r) { return r.text(); })
    .then(function(html) {
        msg.style.display = 'block';
        if (html.indexOf('woocommerce-error') !== -1 || html.indexOf('error') !== -1) {
            msg.style.background = '#fde8e8';
            msg.style.color = '#c00';
            msg.innerHTML = html.replace(/<[^>]*>/g, '') || 'Kupon kod nije valjan.';
        } else {
            msg.style.background = '#e8fde8';
            msg.style.color = '#080';
            msg.innerHTML = '✅ Kupon primijenjen!';
            document.getElementById('coupon_code').value = '';
            // Trigger WC checkout update to recalculate totals
            if (window.jQuery) jQuery('body').trigger('update_checkout');
        }
        btn.textContent = 'Primijeni';
        btn.disabled = false;
    })
    .catch(function() {
        msg.style.display = 'block';
        msg.style.background = '#fde8e8';
        msg.style.color = '#c00';
        msg.textContent = 'Greška. Pokušajte ponovo.';
        btn.textContent = 'Primijeni';
        btn.disabled = false;
    });
}
</script>
