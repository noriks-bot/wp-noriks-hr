<?php
/**
 * Checkout Form — Vigoshop Pixel-Perfect Copy (Phase 1)
 * Based on vigoshop.hr/dovrsite-kupnju/ HTML structure
 */
if ( ! defined( 'ABSPATH' ) ) exit;

do_action( 'woocommerce_before_checkout_form', $checkout );
?>

<div class="container container--xs bg--white wc-checkout-wrap">

<form name="checkout" method="post" class="checkout woocommerce-checkout"
      action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data" aria-label="Plaćanje">

  <!-- ========== BILLING FIELDS (WooCommerce rendered) ========== -->
  <div class="col2-set" id="customer_details">
    <div class="col-1 clearfix">
      <?php do_action( 'woocommerce_checkout_billing' ); ?>
    </div>
    <div class="col-2">
      <div class="woocommerce-shipping-fields"></div>
      <div class="woocommerce-additional-fields">

  <!-- ========== DOSTAVA (shipping) — vigoshop HTML ========== -->
  <div id="custom_shipping">
    <h3>Dostava</h3>
    <ul class="shipping_method_custom">
      <li class="standard-shipping shipping-tab">
        <input name="shipping_method[0]" data-index="0" id="shipping_method_0_standard_custom"
               value="standard" class="shipping_method shipping_method_field" type="radio" checked>
        <label for="shipping_method_0_standard_custom" class="checkedlabel">
          <svg viewBox="0 0 19 14" fill="#3DBD00"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.5725 3.40179L8.14482 13.5874C7.5815 14.1375 6.66839 14.1375 6.1056 13.5874L0.422493 8.03956C-0.140831 7.48994-0.140831 6.59748 0.422493 6.04707L1.44121 5.05126C2.00471 4.50094 2.91854 4.50094 3.48132 5.05126L7.12254 8.60835L15.5145 0.412609C16.078-0.137536 16.9909-0.137536 17.5537 0.412609L18.5733 1.40842C19.1424 1.95795 19.1424 2.8505 18.5725 3.40179Z"/></svg>
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

  <!-- ========== NAČIN PLAĆANJA (payment) — vigoshop HTML ========== -->
  <h3 class="payment-title">Način plaćanja</h3>
  <div id="payment" class="woocommerce-checkout-payment">
    <ul class="wc_payment_methods payment_methods methods">

      <!-- COD -->
      <li class="wc_payment_method payment_method_cod">
        <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked='checked' data-order_button_text="" />
        <label for="payment_method_cod">
          Plaćanje prilikom preuzimanja <span class="payment-fee-not-free"><span class="woocommerce-Price-amount amount">1,99<span class="woocommerce-Price-currencySymbol">&euro;</span></span></span>
          <div class="hs-checkout__payment-method-cod-icon-container">
            <img decoding="async" class="hs-checkout__payment-method-cod-icon" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg" />
          </div>
        </label>
      </li>

      <!-- Credit Card -->
      <li class="wc_payment_method payment_method_braintree_credit_card">
        <input id="payment_method_braintree_credit_card" type="radio" class="input-radio" name="payment_method" value="braintree_credit_card" data-order_button_text="Naruči" />
        <label for="payment_method_braintree_credit_card">
          Kreditna kartica <span class="payment-fee-free">Besplatno</span>
          <div class="sv-wc-payment-gateway-card-icons">
            <img decoding="async" src="https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-visa.svg" alt="visa" class="sv-wc-payment-gateway-icon wc-braintree-credit-card-payment-gateway-icon" width="40" height="25" style="width: 40px; height: 25px;" />
            <img decoding="async" src="https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-mastercard.svg" alt="mastercard" class="sv-wc-payment-gateway-icon wc-braintree-credit-card-payment-gateway-icon" width="40" height="25" style="width: 40px; height: 25px;" />
            <img decoding="async" src="https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-maestro.svg" alt="maestro" class="sv-wc-payment-gateway-icon wc-braintree-credit-card-payment-gateway-icon" width="40" height="25" style="width: 40px; height: 25px;" />
          </div>
        </label>
      </li>

      <!-- PayPal -->
      <li class="wc_payment_method payment_method_braintree_paypal">
        <input id="payment_method_braintree_paypal" type="radio" class="input-radio" name="payment_method" value="braintree_paypal" data-order_button_text="Naruči" />
        <label for="payment_method_braintree_paypal">
          PayPal <span class="payment-fee-free">Besplatno</span>
          <img decoding="async" src="https://images.vigo-shop.com/general/checkout/paypal/PayPal.svg" alt="PayPal">
        </label>
      </li>

    </ul>

    <div class="form-row place-order">
      <noscript>
        <button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Ažurirajte ukupno">Ažurirajte ukupno</button>
      </noscript>

      <div class="woocommerce-terms-and-conditions-wrapper"></div>

      <!-- COD prompt (hidden by default, shown via JS when COD selected) -->
      <div id="hs-cod-checkout-prompt" style="display:none;">
        <div class="cod-prompt-text">Dovršite narudžbu sada, <strong>platite pouzećem 🙂</strong></div>
        <img decoding="async" class="cod-prompt-image" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg">
      </div>

      <!-- VAT notice -->
      <div id="hs-vat-tax-checkout-prompt">
        <span class="tax-and-vat-checkout-claims">Nema dodatnih troškova za carinu</span>
        <span class="tax-and-vat-checkout-claims">PDV je uključen u cijenu</span>
      </div>

      <!-- ========== SAŽETAK (order summary) — static vigoshop HTML ========== -->
      <h3 class="place-order-title" style="display: block;">Sažetak narudžbe</h3>
      <div class="vigo-checkout-total order-total shop_table woocommerce-checkout-review-order-table">
        <div class="grid m-top--s review-all-products-container">
          <div class="col-xs-12 f--m flex flex--vertical vigo-checkout-total__content">

            <div class="c--darkgray review-section-container">
              <div class="review-product-info">
                <div>1x NORIKS | Starter paket</div>
                <div class="review-product-info__attributes"></div>
              </div>
              <div class="info-price">
                <span class="review-sale-price"><span class="woocommerce-Price-amount amount"><bdi>24,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>
              </div>
              <div class="review-product-remove"></div>
            </div>

            <div class="c--darkgray review-section-container review-addons payment">
              <div class="review-addons-title"><div>Plaćanje prilikom preuzimanja</div></div>
              <div class="review-addons-price review-sale-price">
                <span class="woocommerce-Price-amount amount"><bdi>1,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>
              </div>
              <div class="review-product-remove"></div>
            </div>

            <div class="c--darkgray review-section-container review-addons shipping_order_review">
              <div class="review-addons-title"><div>Paket24 Hrvatske pošte</div></div>
              <div class="review-addons-price review-sale-price">
                <span class="woocommerce-Price-amount amount"><bdi>0,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>
              </div>
              <div class="review-product-remove"></div>
            </div>

          </div>
        </div>

        <div class="vigo-checkout-total__sum flex flex--middle border_price">
          <div class="flex__item f--l">
            Ukupni iznos: <span class="f--bold price_total_wrapper"><span class="woocommerce-Price-amount amount"><bdi>26,98<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>
          </div>
        </div>
      </div>

      <?php wp_nonce_field( 'woocommerce-process_checkout', 'woocommerce-process-checkout-nonce' ); ?>
    </div>
  </div>
      </div><!-- .woocommerce-additional-fields -->
    </div><!-- .col-2 -->
  </div><!-- .col2-set -->

  <!-- ========== ORDER REVIEW (Naruči button) ========== -->
  <div id="order_review" class="woocommerce-checkout-review-order container container--xs bg--white">
    <button type="submit" class="button alt button--l button--block button--green button--rounded button--green-gradient" name="woocommerce_checkout_place_order" id="place_order" data-value="Naruči">Naruči</button>
  </div>

</form>

<!-- Warranty badge -->
<div class="checkout-warranty flex flex--center flex--middle">
  <div class="flex__item--autosize checkout-warranty__icon">
    <img decoding="async" src="https://images.vigo-shop.com/general/guarantee_money_back/satisfaction_icon_hr.png">
  </div>
  <div class="flex__item--autosize f--m checkout-warranty__text">
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
    Pročitao sam i prihvaćam <a href="#" id="terms_conditions_link">Opće uvjete prodaje</a> i <a href="#" id="withdrawal_policy_link">pravo na odustajanje</a>.
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

/* COD prompt toggle */
(function(){
  var radios = document.querySelectorAll('input[name="payment_method"]');
  var prompt = document.getElementById('hs-cod-checkout-prompt');
  if(!prompt) return;
  function toggle(){
    var checked = document.querySelector('input[name="payment_method"]:checked');
    prompt.style.display = (checked && checked.value === 'cod') ? 'flex' : 'none';
  }
  radios.forEach(function(r){ r.addEventListener('change', toggle); });
  toggle();
})();

/* Payment method checked class + label styling */
(function(){
  var methods = document.querySelectorAll('.wc_payment_method');
  function update(){
    methods.forEach(function(m){
      var radio = m.querySelector('input[type="radio"]');
      if(radio && radio.checked) { m.classList.add('checked'); }
      else { m.classList.remove('checked'); }
    });
  }
  document.querySelectorAll('input[name="payment_method"]').forEach(function(r){ r.addEventListener('change', update); });
  update();
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
</script>
