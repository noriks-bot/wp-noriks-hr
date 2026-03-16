<?php
/**
 * Checkout Form — Vigoshop Pixel-Perfect Copy
 */
if ( ! defined( 'ABSPATH' ) ) exit;

do_action( 'woocommerce_before_checkout_form', $checkout );
?>

<div class="container container--xs bg--white wc-checkout-wrap">

<form name="checkout" method="post" class="checkout woocommerce-checkout"
      action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data" aria-label="Plaćanje">

  <!-- ========== BILLING FIELDS (WooCommerce rendered) ========== -->
  <div id="customer_details">
    <?php do_action( 'woocommerce_checkout_billing' ); ?>
  </div>

  <!-- ========== DOSTAVA (shipping) ========== -->
  <div id="custom_shipping">
    <h3>Dostava</h3>
    <ul class="shipping_method_custom">
      <li class="standard-shipping shipping-tab">
        <input name="shipping_method[0]" data-index="0" id="shipping_method_0_standard_custom"
               value="standard" class="shipping_method shipping_method_field" type="radio" checked>
        <label for="shipping_method_0_standard_custom" class="checkedlabel">
          <svg width="19" height="14" viewBox="0 0 19 14" fill="#3DBD00"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.5725 3.40179L8.14482 13.5874C7.5815 14.1375 6.66839 14.1375 6.1056 13.5874L0.422493 8.03956C-0.140831 7.48994-0.140831 6.59748 0.422493 6.04707L1.44121 5.05126C2.00471 4.50094 2.91854 4.50094 3.48132 5.05126L7.12254 8.60835L15.5145 0.412609C16.078-0.137536 16.9909-0.137536 17.5537 0.412609L18.5733 1.40842C19.1424 1.95795 19.1424 2.8505 18.5725 3.40179Z"/></svg>
          <div class="outer-wrapper">
            <div class="inner-wrapper-dates">
              <strong class="hs-custom-date">utorak, 18.3. - petak, 21.3.</strong>
            </div>
            <div class="inner-wrapper-img">
              <span class="shipping_method_delivery_price tag tag--green">
                <span class="woocommerce-Price-amount amount"><bdi>0,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>
              </span>
              <span class="delivery_img"><img decoding="async" class="hrvatska_posta standard" src="https://images.vigo-shop.com/general/curriers/home_small_paket24@2x.png"/></span>
            </div>
          </div>
        </label>
      </li>
    </ul>
    <div class="delivery-from-eu-warehouse">
      <img decoding="async" class="delivery-from-eu-warehouse__icon" src="https://images.vigo-shop.com/general/flags/eu-warehouse.svg">
      <span class="delivery-from-eu-warehouse__text">Skladište u EU</span>
    </div>
  </div>

  <!-- ========== NAČIN PLAĆANJA ========== -->
  <h3 class="payment-title">Način plaćanja</h3>

  <!-- Hidden WC payment for AJAX — we render our own UI -->
  <div id="payment" class="woocommerce-checkout-payment" style="position:absolute;left:-9999px;opacity:0;height:0;overflow:hidden;">
    <?php do_action( 'woocommerce_checkout_order_review' ); ?>
  </div>

  <!-- Our visible payment methods -->
  <div id="noriks-payment" class="noriks-payment-methods">
    <ul class="wc_payment_methods payment_methods methods">
      <li class="wc_payment_method payment_method_cod checked">
        <input id="noriks_pm_cod" type="radio" class="input-radio" name="noriks_payment" value="cod" checked>
        <label for="noriks_pm_cod">
          <span class="payment-method-name">Plaćanje prilikom preuzimanja</span>
          <span class="payment-fee-not-free"><bdi>1,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>
          <span class="payment-icon-right"><img decoding="async" class="hs-checkout__payment-method-cod-icon" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg" /></span>
        </label>
      </li>
      <li class="wc_payment_method payment_method_stripe">
        <input id="noriks_pm_stripe" type="radio" class="input-radio" name="noriks_payment" value="stripe">
        <label for="noriks_pm_stripe">
          <span class="payment-method-name">Kreditna kartica</span>
          <span class="payment-fee-free">Besplatno</span>
          <span class="payment-icon-right">
            <img src="https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-visa.svg" alt="visa" width="40" height="25" />
            <img src="https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-mastercard.svg" alt="mastercard" width="40" height="25" />
            <img src="https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-maestro.svg" alt="maestro" width="40" height="25" />
          </span>
        </label>
      </li>
      <li class="wc_payment_method payment_method_ppcp">
        <input id="noriks_pm_ppcp" type="radio" class="input-radio" name="noriks_payment" value="ppcp-gateway">
        <label for="noriks_pm_ppcp">
          <span class="payment-method-name">PayPal</span>
          <span class="payment-fee-free">Besplatno</span>
          <span class="payment-icon-right"><img src="https://images.vigo-shop.com/general/checkout/paypal/PayPal.svg" alt="PayPal" /></span>
        </label>
      </li>
    </ul>
  </div>

  <!-- COD prompt -->
  <div id="hs-cod-checkout-prompt">
    <div class="cod-prompt-text">Dovršite narudžbu sada, <strong>platite pouzećem :)</strong></div>
    <img decoding="async" class="cod-prompt-image" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg">
  </div>

  <!-- VAT notice -->
  <div id="hs-vat-tax-checkout-prompt">
    <span class="tax-and-vat-checkout-claims">Nema dodatnih troškova za carinu</span>
    <span class="tax-and-vat-checkout-claims">PDV je uključen u cijenu</span>
  </div>

  <!-- ORDER SUMMARY — BEFORE button -->
  <div id="noriks-order-summary" class="noriks-order-summary">
    <h3 class="place-order-title">Sažetak narudžbe</h3>
    <div class="noriks-order-items">
      <?php
      foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        $product = $cart_item['data'];
        $qty = $cart_item['quantity'];
        $name = $product->get_name();
        $price = WC()->cart->get_product_subtotal( $product, $qty );
        $attrs = '';
        if ( ! empty( $cart_item['variation'] ) ) {
          $parts = array();
          foreach ( $cart_item['variation'] as $attr_key => $attr_val ) {
            $label = wc_attribute_label( str_replace( 'attribute_', '', $attr_key ) );
            $parts[] = $label . ': ' . $attr_val;
          }
          $attrs = implode( ', ', $parts );
        }
        echo '<div class="review-section-container">';
        echo '<div class="review-product-info"><div>' . esc_html( $qty ) . 'x ' . esc_html( $name ) . '</div>';
        if ( $attrs ) echo '<div class="review-product-info__attributes">' . esc_html( $attrs ) . '</div>';
        echo '</div>';
        echo '<div class="info-price"><span class="review-sale-price">' . $price . '</span></div>';
        echo '</div>';
      }
      ?>
    </div>
    <div class="noriks-order-total">
      <span>Ukupni iznos:</span>
      <span class="noriks-total-price"><?php echo WC()->cart->get_total(); ?></span>
    </div>
  </div>

  <!-- PLACE ORDER BUTTON -->
  <button type="submit" class="button alt noriks-place-order" name="woocommerce_checkout_place_order" id="noriks_place_order" value="1">🔒 Naruči</button>

  <?php wp_nonce_field( 'woocommerce-process_checkout', 'woocommerce-process-checkout-nonce' ); ?>

</form>

<!-- Warranty badge -->
<div class="checkout-warranty">
  <div class="checkout-warranty__icon">
    <img decoding="async" src="https://images.vigo-shop.com/general/guarantee_money_back/satisfaction_icon_hr.png">
  </div>
  <div class="checkout-warranty__text">
    <strong>Kupujte bez brige</strong><br>
    Povrat novca moguć u roku od 90 dana
  </div>
</div>

<!-- Terms -->
<div class="agreed_terms_txt">
  <span class="policy-agreement-obligation">Klikom na gumb <strong>Naruči</strong> pristajem na narudžbu uz obvezu plaćanja.</span><br>
  <div class="terms-checkbox-and-links">
    <label class="checkbox">
      <input type="checkbox" class="input-checkbox" name="agree_to_checkout_terms" id="agree_to_terms_checkbox" value="1">
    </label>
    Pročitao sam i prihvaćam <a href="/uvjeti-prodaje/" target="_blank">Opće uvjete prodaje</a> &nbsp;i&nbsp; <a href="/pravo-na-odustajanje/" target="_blank">pravo na odustajanje</a>.
  </div>
</div>

</div><!-- .wc-checkout-wrap -->

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

<script>
/* Dynamic shipping dates (2-5 business days from today) */
(function(){
  var now = new Date();
  var days = ['nedjelja','ponedjeljak','utorak','srijeda','četvrtak','petak','subota'];
  function addBizDays(d, n) {
    var r = new Date(d);
    while(n > 0) { r.setDate(r.getDate()+1); if(r.getDay()!==0 && r.getDay()!==6) n--; }
    return r;
  }
  var from = addBizDays(now, 2), to = addBizDays(now, 5);
  var txt = days[from.getDay()]+', '+from.getDate()+'.'+(from.getMonth()+1)+'. - '+days[to.getDay()]+', '+to.getDate()+'.'+(to.getMonth()+1)+'.';
  var el = document.querySelector('.hs-custom-date');
  if(el) el.textContent = txt;
})();

/* Sync our visible payment radios with WC hidden payment */
(function(){
  var noriksPMs = document.querySelectorAll('#noriks-payment input[name="noriks_payment"]');
  var wcPMs = document.querySelectorAll('#payment input[name="payment_method"]');
  var prompt = document.getElementById('hs-cod-checkout-prompt');

  function syncPayment(){
    var selected = document.querySelector('#noriks-payment input[name="noriks_payment"]:checked');
    if(!selected) return;
    var val = selected.value;

    // Set WC hidden radio
    wcPMs.forEach(function(r){
      if(r.value === val || r.value.indexOf(val) !== -1) {
        r.checked = true;
        r.dispatchEvent(new Event('change', {bubbles:true}));
      }
    });

    // Toggle checked class on visible LIs
    document.querySelectorAll('#noriks-payment .wc_payment_method').forEach(function(li){
      var radio = li.querySelector('input[type="radio"]');
      li.classList.toggle('checked', radio && radio.checked);
    });

    // COD prompt
    if(prompt) prompt.style.display = (val === 'cod') ? 'flex' : 'none';
  }

  noriksPMs.forEach(function(r){ r.addEventListener('change', syncPayment); });
  syncPayment();
})();

/* Floating labels for billing fields */
(function(){
  document.querySelectorAll('.woocommerce-billing-fields__field-wrapper .form-row').forEach(function(row){
    var input = row.querySelector('input, textarea, select');
    if(!input) return;
    function check(){ if(input.value) row.classList.add('field--not-empty'); else row.classList.remove('field--not-empty'); }
    input.addEventListener('input', check);
    input.addEventListener('change', check);
    input.addEventListener('focus', function(){ row.classList.add('field--not-empty'); });
    input.addEventListener('blur', check);
    check();
  });
})();

/* Add field hints INSIDE their respective form-row divs */
(function(){
  var phoneField = document.getElementById('billing_phone_field');
  if(phoneField && !phoneField.querySelector('.checkout-field-hints')){
    var hint = document.createElement('div');
    hint.className = 'checkout-field-hints';
    hint.innerHTML = '<span class="hint-left">Primjer: 0912345678</span><span class="hint-right">Za pomoć s dostavom</span>';
    phoneField.appendChild(hint);
  }
  var emailField = document.getElementById('billing_email_field');
  if(emailField && !emailField.querySelector('.checkout-field-hints')){
    var hint = document.createElement('div');
    hint.className = 'checkout-field-hints';
    hint.style.justifyContent = 'flex-end';
    hint.innerHTML = '<span class="hint-right">* E-mail adresa nije obavezna</span>';
    emailField.appendChild(hint);
  }
})();

/* Trigger WC update_order_review on load */
jQuery(function($){
  $(document.body).trigger('update_checkout');
});
</script>
