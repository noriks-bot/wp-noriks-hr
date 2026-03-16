<?php
/**
 * Checkout Form — Vigoshop Pixel-Perfect Copy
 * Matches vigoshop.hr/dovrsite-kupnju/ HTML structure exactly
 * Uses WooCommerce hooks for actual functionality
 */
if ( ! defined( 'ABSPATH' ) ) exit;

do_action( 'woocommerce_before_checkout_form', $checkout );
?>

<div class="container container--xs bg--white wc-checkout-wrap">

<form name="checkout" method="post" class="checkout woocommerce-checkout"
      action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data" aria-label="Plaćanje">

  <div class="col2-set" id="customer_details">
    <div class="col-1 clearfix">
      <?php do_action( 'woocommerce_checkout_billing' ); ?>
    </div>
    <div class="col-2">
      <div class="woocommerce-shipping-fields"></div>
      <div class="woocommerce-additional-fields">

  <!-- ========== DOSTAVA (shipping) ========== -->
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
              <strong class="hs-custom-date">srijeda, 18.3. - četvrtak, 19.3.</strong>
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

  <!-- ========== UPSELL — Surprise product ========== -->
  <div class="sup_outher_wrapper">
    <div class="surprise_upsells_wrapper">
      <div class="vigo-surprise surprise_item vigo-gift border border--yellow border--all-2 border-radius--m m-top--m" data-product_id="0">
        <div class="vigo-gift__tooltip">
          <div class="flex flex--autosize flex--middle">
            <div class="flex__item down_arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.061,12.354a1.5,1.5,0,0,0-2.122,0L13.5,14.793V6a1.5,1.5,0,0,0-3,0v8.793L8.061,12.354a1.5,1.5,0,0,0-2.122,2.121l3.586,3.586a3.5,3.5,0,0,0,4.95,0l3.586-3.586A1.5,1.5,0,0,0,18.061,12.354Z"/></svg></div>
            <div class="flex__item f--bold">  Dodajte u narudžbu</div>
          </div>
        </div>
        <div class="flex sup_inner_wrapper">
          <div>
            <div class="surprise_product_click flex flex--wrap flex--autosize flex--gaps flex--middle">
              <div>
                <label for="surprise_item_upsell_0"></label>
                <input id="surprise_item_upsell_0" type="checkbox" class="checkbox-simple checkbox-simple--green val--bottom" disabled/>
              </div>
              <div class="f--l f--bold surprise_title">Proizvod iznenađenja</div>
              <div class="tag_wrapper">
                <div class="tag tag--red">
                  <span class="woocommerce-Price-amount amount"><bdi>3,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>
                </div>
              </div>
            </div>
            <div class="f--m c--darkgray s-top--s">U vrijednosti između 5 € i 15 €.</div>
          </div>
          <div class="vigo-checkout-gift__img">
            <img decoding="async" class="img" src="https://images.vigo-shop.com/general/present_responsive.svg" alt="Gift icon">
          </div>
        </div>
        <div class="c--darkgray remove_wrapper">
          <div class="remove_surprise vigo-checkout-total__trash hide"><svg viewBox="0 0 16 19" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.4286 1.15398H15.4286C15.7429 1.15398 16 1.41215 16 1.7309V2.88474C16 3.20334 15.7442 3.46166 15.4286 3.46166H0.571429C0.255857 3.46166 0 3.20334 0 2.88474V1.7309C0 1.41222 0.255857 1.15398 0.571429 1.15398H4.57143L4.98536 0.318892C5.08214 0.123461 5.27996 0 5.49643 0H10.5039C10.7204 0 10.9183 0.123461 11.015 0.318892L11.4286 1.15398ZM1.14286 16.7308C1.14286 17.6863 1.91071 18.4615 2.85714 18.4615H13.1429C14.0893 18.4615 14.8571 17.6863 14.8571 16.7308V4.61549H1.14286V16.7308ZM10.8571 7.50009C10.8571 7.17917 11.1107 6.92317 11.4286 6.92317C11.7464 6.92317 12 7.18008 12 7.50009V15.5769C12 15.897 11.7455 16.1539 11.4286 16.1539C11.1116 16.1539 10.8571 15.897 10.8571 15.5769V7.50009ZM8 6.92317C7.68214 6.92317 7.42857 7.17917 7.42857 7.50009V15.5769C7.42857 15.897 7.68304 16.1539 8 16.1539C8.31696 16.1539 8.57143 15.897 8.57143 15.5769V7.50009C8.57143 7.18008 8.31786 6.92317 8 6.92317ZM4 7.50009C4 7.17917 4.25357 6.92317 4.57143 6.92317C4.88929 6.92317 5.14286 7.18008 5.14286 7.50009V15.5769C5.14286 15.8979 4.88929 16.1539 4.57143 16.1539C4.25357 16.1539 4 15.897 4 15.5769V7.50009Z"/></svg>
            <span>Ukloni</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ========== PAYMENT — WooCommerce dynamic ========== -->
  <h3 class="payment-title">Način plaćanja</h3>
  <?php do_action( 'woocommerce_checkout_payment' ); ?>

      </div><!-- .woocommerce-additional-fields -->
    </div><!-- .col-2 -->
  </div><!-- .col2-set -->

  <!-- ========== ORDER REVIEW + CTA ========== -->
  <div id="order_review" class="woocommerce-checkout-review-order container container--xs bg--white">
    <?php
    /**
     * woocommerce_checkout_order_review hook renders order table + place_order button.
     * We override the template for order-review to get vigoshop HTML structure.
     */
    ?>
    <div id="order_review_inner">
      <?php do_action( 'woocommerce_checkout_order_review' ); ?>
    </div>
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
    Pročitao sam i prihvaćam <a href="/opci-uvjeti-prodaje/" id="terms_conditions_link">Opće uvjete prodaje</a> i <a href="/pravo-na-odustajanje/" id="withdrawal_policy_link">pravo na odustajanje</a>.
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
  function init() {
    var radios = document.querySelectorAll('input[name="payment_method"]');
    var prompt = document.getElementById('hs-cod-checkout-prompt');
    if(!prompt || !radios.length) return;
    function toggle(){
      var checked = document.querySelector('input[name="payment_method"]:checked');
      prompt.style.display = (checked && checked.value === 'cod') ? 'flex' : 'none';
    }
    radios.forEach(function(r){ r.addEventListener('change', toggle); });
    toggle();
  }
  document.addEventListener('DOMContentLoaded', init);
  jQuery(document.body).on('updated_checkout', init);
})();

/* Payment method checked class */
(function(){
  function init() {
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
  }
  document.addEventListener('DOMContentLoaded', init);
  jQuery(document.body).on('updated_checkout', init);
})();

/* Floating labels for billing fields */
(function(){
  function initFloating() {
    document.querySelectorAll('.woocommerce-billing-fields__field-wrapper .form-row').forEach(function(row){
      if(row.dataset.floatingInit) return;
      row.dataset.floatingInit = '1';
      var input = row.querySelector('input, textarea, select');
      if(!input) return;
      function check(){ if(input.value) row.classList.add('field--not-empty'); else row.classList.remove('field--not-empty'); }
      input.addEventListener('input', check);
      input.addEventListener('change', check);
      input.addEventListener('focus', function(){ row.classList.add('field--not-empty'); });
      input.addEventListener('blur', check);
      check();
    });
  }
  document.addEventListener('DOMContentLoaded', initFloating);
  jQuery(document.body).on('updated_checkout', initFloating);
})();
</script>
