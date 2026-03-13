<?php
/**
 * Checkout Form - Noriks HR
 * Pixel-perfect vigoshop.hr copy
 * Phase 1: Visual only
 */

if (!defined('ABSPATH')) exit;

// Hide header, footer, breadcrumbs via CSS (handled in checkout.css)
// Force country
wc_setcookie('billing_country', 'HR');

do_action('woocommerce_before_checkout_form', $checkout);
?>

<div class="container container--xs bg--white wc-checkout-wrap">
<div class="before_form container container--xs">

<form name="checkout" method="post" class="checkout woocommerce-checkout"
      action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data" aria-label="Plaćanje">

    <div class="col2-set" id="customer_details">
        <div class="col-1 clearfix">
            <div class="woocommerce-billing-fields">
                <h3 class="checkout-billing-title">Plaćanje i Dostava</h3>
                <div class="woocommerce-billing-fields__field-wrapper">
                    <?php
                    $fields = $checkout->get_checkout_fields('billing');
                    
                    // Render first name and last name
                    if (isset($fields['billing_first_name'])) {
                        woocommerce_form_field('billing_first_name', $fields['billing_first_name'], $checkout->get_value('billing_first_name'));
                    }
                    if (isset($fields['billing_last_name'])) {
                        woocommerce_form_field('billing_last_name', $fields['billing_last_name'], $checkout->get_value('billing_last_name'));
                    }
                    ?>
                    <div class="form-row form-row-wide col-xs-12 address-hint">Unesite adresu na kojoj ćete biti <b>između 8:00 i 16:00 sati</b>.</div>
                    <?php
                    // Render remaining fields in order
                    $remaining = ['billing_address_1', 'billing_address_2', 'billing_postcode', 'billing_city', 'billing_phone', 'billing_email'];
                    foreach ($remaining as $key) {
                        if (isset($fields[$key])) {
                            woocommerce_form_field($key, $fields[$key], $checkout->get_value($key));
                        }
                    }
                    ?>
                    <input type="hidden" name="billing_country" value="HR" />
                </div>
            </div>
        </div>
    </div>

    <!-- Dostava (Shipping) Section -->
    <div id="custom_shipping">
        <h3>Dostava</h3>
        <ul class="shipping_method_custom">
            <li class="standard-shipping shipping-tab">
                <input name="shipping_method[0]" data-index="0" id="shipping_method_0_standard_custom"
                       value="standard" class="shipping_method shipping_method_field" type="radio" checked>
                <label for="shipping_method_0_standard_custom" class="checkedlabel">
                    <svg viewBox="0 0 19 14" fill="#3DBD00"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.5725 3.40179L8.14482 13.5874C7.5815 14.1375 6.66839 14.1375 6.1056 13.5874L0.422493 8.03956C-0.140831 7.48994 -0.140831 6.59748 0.422493 6.04707L1.44121 5.05126C2.00471 4.50094 2.91854 4.50094 3.48132 5.05126L7.12254 8.60835L15.5145 0.412609C16.078 -0.137536 16.9909 -0.137536 17.5537 0.412609L18.5733 1.40842C19.1424 1.95795 19.1424 2.8505 18.5725 3.40179Z" /></svg>
                    <div class="outer-wrapper">
                        <div class="inner-wrapper-dates">
                            <strong class="hs-custom-date">Standardna dostava</strong>
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
            <img decoding="async" class="delivery-from-eu-warehouse__icon"
                src="https://vigoshop.hr/app/themes/hsplus/images/eu-flag.svg"><span
                class="delivery-from-eu-warehouse__text">Skladište u EU</span>
        </div>
    </div>

    <!-- Način plaćanja (Payment Methods) -->
    <h3 class="payment-title">Način plaćanja</h3>
    <div id="payment" class="woocommerce-checkout-payment">
        <ul class="wc_payment_methods payment_methods methods">
            <!-- COD -->
            <li class="wc_payment_method payment_method_cod">
                <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" checked='checked' />
                <label for="payment_method_cod">
                    Plaćanje prilikom preuzimanja <span class="payment-fee-not-free"><span class="woocommerce-Price-amount amount">1,99<span class="woocommerce-Price-currencySymbol">&euro;</span></span></span>
                    <div class="hs-checkout__payment-method-cod-icon-container">
                        <img decoding="async" class="hs-checkout__payment-method-cod-icon" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg" />
                    </div>
                </label>
            </li>
            <!-- Credit Card -->
            <li class="wc_payment_method payment_method_braintree_credit_card">
                <input id="payment_method_braintree_credit_card" type="radio" class="input-radio" name="payment_method" value="braintree_credit_card" />
                <label for="payment_method_braintree_credit_card">
                    Kreditna kartica <span class="payment-fee-free">Besplatno</span>
                    <div class="sv-wc-payment-gateway-card-icons">
                        <img decoding="async" src="https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-visa.svg" alt="visa" class="sv-wc-payment-gateway-icon" width="40" height="25" style="width: 40px; height: 25px;" />
                        <img decoding="async" src="https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-mastercard.svg" alt="mastercard" class="sv-wc-payment-gateway-icon" width="40" height="25" style="width: 40px; height: 25px;" />
                        <img decoding="async" src="https://vigoshop.hr/app/plugins/woocommerce-gateway-paypal-powered-by-braintree/vendor/skyverge/wc-plugin-framework/woocommerce/payment-gateway/assets/images/card-maestro.svg" alt="maestro" class="sv-wc-payment-gateway-icon" width="40" height="25" style="width: 40px; height: 25px;" />
                    </div>
                </label>
            </li>
            <!-- PayPal -->
            <li class="wc_payment_method payment_method_braintree_paypal">
                <input id="payment_method_braintree_paypal" type="radio" class="input-radio" name="payment_method" value="braintree_paypal" />
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

            <div id="hs-cod-checkout-prompt" style="display:none;">
                <div class="cod-prompt-text">Dovršite narudžbu sada, <strong>platite pouzećem 🙂</strong></div>
                <img decoding="async" class="cod-prompt-image" src="https://images.vigo-shop.com/general/checkout/cod/uni_cash_on_delivery.svg">
            </div>

            <div id="hs-vat-tax-checkout-prompt">
                <span class="tax-and-vat-checkout-claims">Nema dodatnih troškova za carinu</span>
                <span class="tax-and-vat-checkout-claims">PDV je uključen u cijenu</span>
            </div>

            <!-- Order Summary (Sažetak) -->
            <h3 class="place-order-title" style="display: block;">Sažetak narudžbe</h3>
            <div class="vigo-checkout-total order-total shop_table woocommerce-checkout-review-order-table">
                <div class="grid m-top--s review-all-products-container">
                    <div class="col-xs-12 f--m flex flex--vertical vigo-checkout-total__content">
                        <?php
                        // Dynamic cart items
                        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                            $product = $cart_item['data'];
                            $product_name = $product->get_name();
                            $qty = $cart_item['quantity'];
                            $line_total = WC()->cart->get_product_subtotal($product, $qty);
                            ?>
                            <div class="c--darkgray review-section-container">
                                <div class="review-product-info">
                                    <div><?php echo $qty; ?>x <?php echo esc_html($product_name); ?></div>
                                    <div class="review-product-info__attributes"></div>
                                </div>
                                <div class="info-price">
                                    <span class="review-sale-price"><?php echo $line_total; ?></span>
                                </div>
                                <div class="review-product-remove"></div>
                            </div>
                            <?php
                        }
                        ?>

                        <!-- Payment addon (COD fee) -->
                        <div class="c--darkgray review-section-container review-addons payment">
                            <div class="review-addons-title"><div>Plaćanje prilikom preuzimanja</div></div>
                            <div class="review-addons-price review-sale-price">
                                <span class="woocommerce-Price-amount amount"><bdi>1,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>
                            </div>
                            <div class="review-product-remove"></div>
                        </div>

                        <!-- Shipping -->
                        <div class="c--darkgray review-section-container review-addons shipping_order_review">
                            <div class="review-addons-title">
                                <div>Standardna dostava</div>
                            </div>
                            <div class="review-addons-price review-sale-price">
                                <span class="woocommerce-Price-amount amount"><bdi>2,99<span class="woocommerce-Price-currencySymbol">&euro;</span></bdi></span>
                            </div>
                            <div class="review-product-remove"></div>
                        </div>
                    </div>
                </div>

                <div class="vigo-checkout-total__sum flex flex--middle border_price">
                    <div class="flex__item f--l">
                        Ukupni iznos: <span class="f--bold price_total_wrapper"><?php echo WC()->cart->get_total(); ?></span>
                    </div>
                </div>
            </div>

            <?php wp_nonce_field('woocommerce-process_checkout', 'woocommerce-process-checkout-nonce'); ?>
        </div>
    </div>

</form>
</div>
</div>

<!-- Order Button + Bottom section -->
<div id="order_review" class="woocommerce-checkout-review-order container container--xs bg--white">
    <button type="submit" class="button alt button--l button--block button--green button--rounded button--green-gradient" name="woocommerce_checkout_place_order" id="place_order" data-value="Naruči" form="checkout">
        <svg class="lock-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="white"><path d="M18 10V6A6 6 0 0 0 6 6v4H4a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-2zm-2 0H8V6a4 4 0 0 1 8 0v4z"/></svg>
        Naruči
        <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="white"><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/></svg>
    </button>
</div>

<div class="checkout-warranty flex flex--center flex--middle">
    <div class="flex__item--autosize checkout-warranty__icon">
        <img decoding="async" src="https://images.vigo-shop.com/general/guarantee_money_back/satisfaction_icon_hr.png">
    </div>
    <div class="flex__item--autosize f--m checkout-warranty__text">
        <strong>Kupujte bez brige </strong><br>
        Povrat novca moguć u roku od 90 dana
    </div>
</div>

<div class="agreed_terms_txt">
    <span class="policy-agreement-obligation">Klikom na gumb <strong>Naruči</strong> pristajem na narudžbu uz obvezu plaćanja.</span> <br>
    <div class="terms-checkbox-and-links">
        <label class="checkbox">
            <input type="checkbox" class="input-checkbox" name="agree_to_checkout_terms" id="agree_to_terms_checkbox" value="1">
        </label>
        Pročitao sam i prihvaćam <a href="/uvjeti-prodaje/" id="terms_conditions_link"> Opće uvjete prodaje </a> i <a href="/pravo-na-odustajanje/" id="withdrawal_policy_link"> pravo na odustajanje </a>.
    </div>
</div>
