<?php
/**
 * Checkout Form — Vigoshop 1:1 replica within WooCommerce
 * HTML structure matches /test-checkout/ standalone template exactly
 */
if ( ! defined( 'ABSPATH' ) ) exit;

do_action( 'woocommerce_before_checkout_form', $checkout );

// Don't show checkout if cart is empty
if ( WC()->cart->is_empty() ) return;
?>

<div class="container container--xs bg--white wc-checkout-wrap">
<div class="before_form container container--xs">

<form name="checkout" method="post" class="checkout woocommerce-checkout"
      action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data" aria-label="Plaćanje">

  <div class="col2-set" id="customer_details">
    <div class="col-1 clearfix">
      <div class="woocommerce-billing-fields">
        <div class="woocommerce-billing-fields__field-wrapper">
          <?php do_action( 'woocommerce_checkout_billing' ); ?>
        </div>
      </div>
    </div>

    <div class="col-2">
      <div class="woocommerce-shipping-fields"></div>
      <div class="woocommerce-additional-fields">

        <!-- SHIPPING -->
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
                    <strong class="hs-custom-date" id="js-delivery-dates"></strong>
                  </div>
                  <div class="inner-wrapper-img">
                    <span class="shipping_method_delivery_price tag tag--red">
                      <span class="woocommerce-Price-amount amount"><bdi>2,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>
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

        <!-- PAYMENT — native WC -->
        <h3 class="payment-title">Način plaćanja</h3>
        <?php woocommerce_checkout_payment(); ?>

        <div class="form-row place-order">
          <div class="woocommerce-terms-and-conditions-wrapper"></div>

          <!-- COD prompt -->
          <div id="hs-cod-checkout-prompt">
            <div class="cod-prompt-text">Dovršite narudžbu sada, <strong>platite pouzećem 🙂</strong></div>
            <img decoding="async" class="cod-prompt-image" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg">
          </div>

          <!-- VAT -->
          <div id="hs-vat-tax-checkout-prompt">
            <span class="tax-and-vat-checkout-claims">Nema dodatnih troškova za carinu</span>
            <span class="tax-and-vat-checkout-claims">PDV je uključen u cijenu</span>
          </div>

          <!-- ORDER SUMMARY -->
          <h3 class="place-order-title" style="display:block;">Sažetak narudžbe</h3>
          <div class="vigo-checkout-total order-total shop_table noriks-order-summary">
            <div class="grid m-top--s review-all-products-container">
              <div class="col-xs-12 f--m flex flex--vertical vigo-checkout-total__content">
                <?php foreach ( WC()->cart->get_cart() as $item ) :
                  $p = $item['data']; $q = $item['quantity'];
                  $attrs = '';
                  if ( !empty($item['variation']) ) {
                    $parts = array();
                    foreach ($item['variation'] as $k=>$v) $parts[] = wc_attribute_label(str_replace('attribute_','',$k)).': '.$v;
                    $attrs = implode(', ',$parts);
                  }
                ?>
                <div class="c--darkgray review-section-container">
                  <div class="review-product-info">
                    <div><?php echo esc_html($q.'x '.$p->get_name()); ?></div>
                    <?php if ($attrs): ?><div class="review-product-info__attributes"><?php echo esc_html($attrs); ?></div><?php endif; ?>
                  </div>
                  <div class="info-price">
                    <span class="review-sale-price"><?php echo WC()->cart->get_product_subtotal($p,$q); ?></span>
                  </div>
                </div>
                <?php endforeach; ?>

                <!-- Shipping — dynamic from WC -->
                <div class="c--darkgray review-section-container review-addons shipping_order_review">
                  <div class="review-addons-title"><div>Paket24 Hrvatske pošte</div></div>
                  <div class="review-addons-price review-sale-price" id="noriks-shipping-price"></div>
                </div>

                <!-- COD fee — shown/hidden dynamically -->
                <div class="c--darkgray review-section-container review-addons" id="noriks-cod-fee-row">
                  <div class="review-addons-title"><div>Plaćanje prilikom preuzimanja</div></div>
                  <div class="review-addons-price review-sale-price">
                    <span class="woocommerce-Price-amount amount"><bdi>1,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="vigo-checkout-total__sum flex flex--middle border_price">
              <div class="flex__item f--l">
                Ukupni iznos: <span class="f--bold price_total_wrapper"><?php echo WC()->cart->get_total(); ?></span>
              </div>
            </div>
          </div>

          <?php wp_nonce_field( 'woocommerce-process_checkout', 'woocommerce-process-checkout-nonce' ); ?>
        </div><!-- .place-order -->

      </div><!-- .woocommerce-additional-fields -->
    </div><!-- .col-2 -->
  </div><!-- #customer_details -->

</form>
</div><!-- .before_form -->

<!-- Submit button — outside form, triggers hidden WC button -->
<div id="order_review" class="woocommerce-checkout-review-order container container--xs">
  <button type="button" class="button alt button--l button--block button--green button--rounded button--green-gradient"
          id="noriks_place_order" data-value="Naruči">Naruči</button>
</div>

<!-- Warranty -->
<div class="checkout-warranty flex flex--center flex--middle">
  <div class="flex__item--autosize checkout-warranty__icon">
    <img decoding="async" src="https://images.vigo-shop.com/general/guarantee_money_back/satisfaction_icon_hr.png">
  </div>
  <div class="flex__item--autosize f--m checkout-warranty__text">
    <strong>Kupujte bez brige </strong><br>Povrat novca moguć u roku od 90 dana
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
jQuery(function($){
  /* Delivery dates — same logic as product page (meta.php) */
  var days=['nedjelja','ponedjeljak','utorak','srijeda','četvrtak','petak','subota'];
  function addBiz(d,n){var r=new Date(d);while(n>0){r.setDate(r.getDate()+1);if(r.getDay()!==0&&r.getDay()!==6)n--;}return r;}
  var now=new Date(),from=addBiz(now,2),to=addBiz(now,3);
  $('#js-delivery-dates').text(days[from.getDay()]+', '+from.getDate()+'.'+(from.getMonth()+1)+'. - '+days[to.getDay()]+', '+to.getDate()+'.'+(to.getMonth()+1)+'.');

  /* Shipping price — read from WC after checkout update */
  function updateShippingDisplay() {
    var shippingEl = $('#noriks-shipping-price');
    // WC puts shipping total in the hidden review order table
    var wcShipping = $('.woocommerce-shipping-totals td').text().trim();
    if (!wcShipping) {
      // Fallback: calculate from cart total - subtotal - fees
      wcShipping = '';
    }
    if (wcShipping && wcShipping.indexOf('0,00') === -1 && wcShipping.indexOf('Besplatno') === -1 && wcShipping.indexOf('Free') === -1) {
      shippingEl.html(wcShipping);
    } else {
      shippingEl.html('<span style="display:inline-block;padding:3px 10px;border-radius:5px;background:#9ce79c;color:#228b22;font-size:14px;font-weight:500;">Besplatno</span>');
    }
  }
  function updateTotalDisplay() {
    var wcTotal = $('.order-total td .woocommerce-Price-amount').first().text().trim();
    if (wcTotal) {
      $('.price_total_wrapper').html('<span class="woocommerce-Price-amount amount"><bdi>' + wcTotal + '</bdi></span>');
    }
  }
  $(document.body).on('updated_checkout', function() {
    updateShippingDisplay();
    updateTotalDisplay();
  });
  setTimeout(function() { updateShippingDisplay(); updateTotalDisplay(); }, 1000);

  /* COD display — simple toggle */
  function updateCodDisplay(){
    var isCod = $('input[name="payment_method"]:checked').val() === 'cod';
    $('#hs-cod-checkout-prompt').toggle(isCod);
    $('#noriks-cod-fee-row').toggle(isCod);
  }
  $(document.body).on('payment_method_selected updated_checkout', updateCodDisplay);
  $('form.checkout').on('change', 'input[name="payment_method"]', updateCodDisplay);
  updateCodDisplay();
});
</script>
