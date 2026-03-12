<?php
/**
 * Checkout Form — Vigoshop Static Layout (Phase 1)
 * Literal HTML copy from vigoshop.hr checkout
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );
?>

<div class="container container--xs bg--white wc-checkout-wrap">

<form name="checkout" method="post" class="checkout woocommerce-checkout"
      action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data" aria-label="Plaćanje">

  <!-- ========== BILLING: WooCommerce hooks ========== -->
  <div class="col2-set" id="customer_details">
    <div class="col-1 clearfix">
      <?php do_action( 'woocommerce_checkout_billing' ); ?>
    </div>
  </div>

  <!-- ========== DOSTAVA (shipping) — literal vigoshop HTML ========== -->
  <div id="custom_shipping">
    <h3>Dostava</h3>
    <ul class="shipping_method_custom">
      <li class="standard-shipping shipping-tab">
        <input name="shipping_method[0]" data-index="0" id="shipping_method_0_standard_custom"
               value="standard" class="shipping_method shipping_method_field" type="radio" checked>
        <label for="shipping_method_0_standard_custom" class="checkedlabel">
          <svg viewBox="0 0 19 14" fill="#3DBD00"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.5725 3.40179L8.14482 13.5874C7.5815 14.1375 6.66839 14.1375 6.1056 13.5874L0.422493 8.03956C-0.140831 7.48994-0.140831 6.59748 0.422493 6.04707L1.44121 5.05126C2.00471 4.50094 2.91854 4.50094 3.48132 5.05126L7.12254 8.60835L15.5145 0.412609C16.078-0.137536 16.9909-0.137536 17.5537 0.412609L18.5733 1.40842C19.1424 1.95795 19.1424 2.8505 18.5725 3.40179Z" /></svg>
          <div class="outer-wrapper">
            <div class="inner-wrapper-dates">
              <strong class="hs-custom-date">ponedaljak, 16.3. - utorak, 17.3.</strong>
            </div>
            <div class="inner-wrapper-img">
              <span class="shipping_method_delivery_price">
                <span class="woocommerce-Price-amount amount"><bdi>0,00<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>
              </span>
              <span class="delivery_img"><img decoding="async" class="hrvatska_posta standard" src="https://images.vigo-shop.com/general/curriers/home_small_paket24@2x.png"/></span>
            </div>
          </div>
        </label>
      </li>
    </ul>

    <div class="delivery-from-eu-warehouse">
      <img decoding="async" class="delivery-from-eu-warehouse__icon"
           src="https://images.vigo-shop.com/general/flags/eu-warehouse.svg">
      <span class="delivery-from-eu-warehouse__text">Skladište u EU</span>
    </div>
  </div>

  <!-- ========== PAYMENT METHODS — literal vigoshop HTML ========== -->
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

      <!-- Credit Card (Stripe) -->
      <li class="wc_payment_method payment_method_stripe">
        <input id="payment_method_stripe" type="radio" class="input-radio" name="payment_method" value="stripe" data-order_button_text="Naruči" />
        <label for="payment_method_stripe">
          Kreditna kartica <span class="payment-fee-free">Besplatno</span>
          <div class="sv-wc-payment-gateway-card-icons">
            <img decoding="async" src="https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-visa.svg" alt="visa" class="sv-wc-payment-gateway-icon" width="40" height="25" style="width: 40px; height: 25px;" />
            <img decoding="async" src="https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-mastercard.svg" alt="mastercard" class="sv-wc-payment-gateway-icon" width="40" height="25" style="width: 40px; height: 25px;" />
            <img decoding="async" src="https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-maestro.svg" alt="maestro" class="sv-wc-payment-gateway-icon" width="40" height="25" style="width: 40px; height: 25px;" />
          </div>
        </label>
      </li>

      <!-- PayPal -->
      <li class="wc_payment_method payment_method_ppcp-gateway">
        <input id="payment_method_ppcp-gateway" type="radio" class="input-radio" name="payment_method" value="ppcp-gateway" data-order_button_text="Naruči" />
        <label for="payment_method_ppcp-gateway">
          PayPal <span class="payment-fee-free">Besplatno</span>
          <img decoding="async" src="https://images.vigo-shop.com/general/checkout/paypal/PayPal.svg" alt="PayPal">
        </label>
      </li>

    </ul>

    <!-- Place order section -->
    <div class="form-row place-order">
      <noscript>
        Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order.
        <br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Ažurirajte ukupno">Ažurirajte ukupno</button>
      </noscript>

      <div class="woocommerce-terms-and-conditions-wrapper"></div>

      <!-- COD prompt (shown via JS only when COD selected) -->
      <div id="hs-cod-checkout-prompt" style="display:none;">
        <div class="cod-prompt-text">Dovršite narudžbu sada, <strong>platite pouzećem 🙂</strong></div>
        <img decoding="async" class="cod-prompt-image" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg">
      </div>

      <!-- VAT notice -->
      <div id="hs-vat-tax-checkout-prompt">
        <span class="tax-and-vat-checkout-claims">Nema dodatnih troškova za carinu</span>
        <span class="tax-and-vat-checkout-claims">PDV je uključen u cijenu</span>
      </div>

      <!-- ========== SAŽETAK (Order Summary) — literal vigoshop HTML ========== -->
      <h3 class="place-order-title" style="display: block;">Sažetak narudžbe</h3>
      <div class="vigo-checkout-total order-total shop_table woocommerce-checkout-review-order-table">
        <div class="grid m-top--s review-all-products-container">
          <div class="col-xs-12 f--m flex flex--vertical vigo-checkout-total__content">

            <!-- Product row -->
            <div class="c--darkgray review-section-container">
              <div class="review-product-info">
                <div>1x Primjer proizvoda</div>
                <div class="review-product-info__attributes"></div>
              </div>
              <div class="info-price">
                <span class="review-sale-price"><span class="woocommerce-Price-amount amount"><bdi>18,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>
              </div>
              <div class="review-product-remove"></div>
            </div>

            <!-- COD fee row -->
            <div class="c--darkgray review-section-container review-addons payment">
              <div class="review-addons-title"><div>Plaćanje prilikom preuzimanja</div></div>
              <div class="review-addons-price review-sale-price">
                <span class="woocommerce-Price-amount amount"><bdi>1,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>
              </div>
              <div class="review-product-remove"></div>
            </div>

            <!-- Shipping row -->
            <div class="c--darkgray review-section-container review-addons shipping_order_review">
              <div class="review-addons-title">
                <div>Paket24 Hrvatske pošte</div>
              </div>
              <div class="review-addons-price review-sale-price">
                <span class="woocommerce-Price-amount amount"><bdi>2,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>
              </div>
              <div class="review-product-remove"></div>
            </div>

          </div>
        </div>

        <!-- Total -->
        <div class="vigo-checkout-total__sum flex flex--middle border_price">
          <div class="flex__item f--l">
            Ukupni iznos: <span class="f--bold price_total_wrapper"><span class="woocommerce-Price-amount amount"><bdi>23,97<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span></span>
          </div>
        </div>
      </div>

    </div><!-- /.place-order -->
  </div><!-- /#payment -->

  <!-- ========== PLACE ORDER BUTTON ========== -->
  <div id="order_review" class="woocommerce-checkout-review-order container container--xs bg--white">
    <button type="submit" class="button alt button--l button--block button--green button--rounded button--green-gradient" name="woocommerce_checkout_place_order" id="place_order" data-value="Naruči">Naruči</button>
  </div>

  <!-- ========== MONEYBACK BADGE ========== -->
  <div class="checkout-warranty flex flex--center flex--middle">
    <div class="flex__item--autosize checkout-warranty__icon">
      <img decoding="async" src="https://images.vigo-shop.com/general/guarantee_money_back/satisfaction_icon_hr.png">
    </div>
    <div class="flex__item--autosize f--m checkout-warranty__text">
      <strong>Kupujte bez brige</strong><br>
      Povrat novca moguć u roku od 90 dana
    </div>
  </div>

  <!-- ========== TERMS ========== -->
  <div class="agreed_terms_txt">
    <span class="policy-agreement-obligation">Klikom na gumb <strong>Naruči</strong> pristajem na narudžbu uz obvezu plaćanja.</span><br>
    <div class="terms-checkbox-and-links">
      <label class="checkbox">
        <input type="checkbox" class="input-checkbox" name="agree_to_checkout_terms" id="agree_to_terms_checkbox" value="1">
      </label>
      Pročitao sam i prihvaćam <a href="#" id="terms_conditions_link">Opće uvjete prodaje</a> i <a href="#" id="withdrawal_policy_link">pravo na odustajanje</a>.
    </div>
  </div>

  <!-- WC order review completely removed to prevent duplicate rendering -->

  <?php wp_nonce_field( 'woocommerce-process_checkout', 'woocommerce-process-checkout-nonce' ); ?>

</form>

</div><!-- /.wc-checkout-wrap -->

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

<script>
jQuery(function($){
  // Dynamic shipping dates (2-5 business days)
  var now = new Date();
  function addBizDays(d, days) {
    var r = new Date(d);
    while (days > 0) { r.setDate(r.getDate() + 1); if (r.getDay() !== 0 && r.getDay() !== 6) days--; }
    return r;
  }
  var dayNames = ['nedjelja','ponedjeljak','utorak','srijeda','četvrtak','petak','subota'];
  var from = addBizDays(now, 2);
  var to = addBizDays(now, 5);
  var fromStr = dayNames[from.getDay()] + ', ' + from.getDate() + '.' + (from.getMonth()+1) + '.';
  var toStr = dayNames[to.getDay()] + ', ' + to.getDate() + '.' + (to.getMonth()+1) + '.';
  $('.hs-custom-date').text(fromStr + ' - ' + toStr);

  // COD prompt toggle
  function toggleCodPrompt() {
    var selected = $('input[name="payment_method"]:checked').val();
    if (selected === 'cod') {
      $('#hs-cod-checkout-prompt').show();
    } else {
      $('#hs-cod-checkout-prompt').hide();
    }
  }
  toggleCodPrompt();
  $(document).on('change', 'input[name="payment_method"]', toggleCodPrompt);
});
</script>
