<?php
/**
 * Checkout Form — Noriks (Vigoshop-style single-column layout)
 *
 * Order: Billing fields → Shipping → Payment → Order Review → Place Order → Trust
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="checkout--my-header">
    <a href="<?php echo get_home_url(); ?>">
        <span class="noriks-logo-text">NORIKS</span>
    </a>
</div>

<?php
do_action( 'woocommerce_before_checkout_form', $checkout );

if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}
?>

<div class="my-checkout-container">

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data" aria-label="<?php echo esc_attr__( 'Checkout', 'woocommerce' ); ?>">

<div class="checkout-card">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div id="customer_details">
			<?php do_action( 'woocommerce_checkout_billing' ); ?>
			<?php do_action( 'woocommerce_checkout_shipping' ); ?>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

	<!-- Order Review (Sažetak narudžbe) -->
	<div id="order_review" class="woocommerce-checkout-review-order">
		<h3 class="checkout-section-title">Sažetak narudžbe</h3>

		<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
		<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
	</div>

	<!-- Coupon -->
	<section class="coupon-code-section">
	  <div class="checkout-coupon-inline">
	    <p class="form-row coupon-form-row-first">
	      <label for="coupon_code_inline" class="screen-reader-text">
	        <?php esc_html_e( 'Coupon:', 'woocommerce' ); ?>
	      </label>
	      <input type="text" id="coupon_code_inline" class="input-text"
	             placeholder="<?php esc_attr_e( 'Kod za popust ili poklon kartica', 'woocommerce' ); ?>" />
	    </p>
	    <p class="form-row coupon-form-row-last">
	      <button type="button" id="apply_coupon_inline" class="apply-discount-button button">
	        <?php esc_html_e( 'Primijeni', 'woocommerce' ); ?>
	      </button>
	    </p>
	    <div class="clear"></div>
	  </div>
	  <div class="inline-coupon-notices" aria-live="polite"></div>
	</section>

	<!-- Trust Section -->
	<section class="trust-section">
	    <div class="features">
	      <div class="feature">
	        <img src="<?php echo get_field("footer_top_icon_1","options"); ?>" alt="" class="feature-icon">
	        <div class="feature-content">
	          <div class="feature-title"><?php echo get_field("footer_top_heading_1","options"); ?></div>
	          <div class="feature-text"><?php echo get_field("footer_top_text_1","options"); ?></div>
	        </div>
	      </div>
	      <div class="feature">
	        <img src="<?php echo get_field("footer_top_icon_2","options"); ?>" alt="" class="feature-icon">
	        <div class="feature-content">
	          <div class="feature-title"><?php echo get_field("footer_top_heading_2","options"); ?></div>
	          <div class="feature-text"><?php echo get_field("footer_top_text_2","options"); ?></div>
	        </div>
	      </div>
	      <div class="feature">
	        <img src="<?php echo get_field("footer_top_icon_3","options"); ?>" alt="" class="feature-icon">
	        <div class="feature-content">
	          <div class="feature-title"><?php echo get_field("footer_top_heading_3","options"); ?></div>
	          <div class="feature-text"><?php echo get_field("footer_top_text_3","options"); ?></div>
	        </div>
	      </div>
	    </div>

	    <div class="trust-header">
	      <span><?php echo get_field("checkout_option_review_t1","options"); ?></span>
	      <img src="<?php echo get_field("checkout_option_review_img1","options"); ?>" alt="Trustpilot" style="height: 18px;">
	    </div>

	    <div class="reviews">
	      <div class="review-card">
	        <div class="review-stars">
	          <img src="<?php echo get_field("checkout_option_review_img1","options"); ?>" alt="5 stars" height="14">
	        </div>
	        <div class="review-title"><?php echo get_field("checkout_option_review_r1_1","options"); ?></div>
	        <div class="review-text"><?php echo get_field("checkout_option_review_r1_2","options"); ?></div>
	        <div class="review-author"><?php echo get_field("checkout_option_review_r1_3","options"); ?></div>
	      </div>
	      <div class="review-card">
	        <div class="review-stars">
	          <img src="<?php echo get_field("checkout_option_review_img1","options"); ?>" alt="5 stars" height="14">
	        </div>
	        <div class="review-title"><?php echo get_field("checkout_option_review_r2_1","options"); ?></div>
	        <div class="review-text"><?php echo get_field("checkout_option_review_r2_2","options"); ?></div>
	        <div class="review-author"><?php echo get_field("checkout_option_review_r3_2","options"); ?></div>
	      </div>
	    </div>
	</section>

</div><!-- .checkout-card -->

</form>

</div><!-- .my-checkout-container -->

<!-- Coupon JS -->
<script>
(function($){
  function applyCoupon(code, $btn){
    $btn.prop('disabled', true);
    var ajaxUrl = (typeof wc_checkout_params !== 'undefined' && wc_checkout_params.wc_ajax_url)
      ? wc_checkout_params.wc_ajax_url : window.location.href;
    ajaxUrl = ajaxUrl.replace('%%endpoint%%', 'apply_coupon');
    var nonce = (typeof wc_checkout_params !== 'undefined' && wc_checkout_params.apply_coupon_nonce) ? wc_checkout_params.apply_coupon_nonce : '';
    $.post(ajaxUrl, { coupon_code: code, security: nonce }).always(function(){
      $(document.body).trigger('applied_coupon', [code]);
      $(document.body).trigger('update_checkout');
      $btn.prop('disabled', false);
    });
  }

  $(document).on('click', '#apply_coupon_inline', function(e){
    e.preventDefault();
    var code = $.trim($('#coupon_code_inline').val());
    if (code) applyCoupon(code, $(this));
  });

  $(document.body).on('updated_checkout', function(){
    var code = $.trim($('#coupon_code_inline').val());
    if (!code) return;
    var slug = code.toLowerCase().replace(/[^a-z0-9]/g,'-');
    var applied = $('.cart-discount.coupon-'+slug).length > 0;
    var $notices = $('.inline-coupon-notices');
    if (applied) {
      $notices.html('<div class="woocommerce-message" role="alert">Kupon primijenjen.</div>');
    } else if (code) {
      $notices.html('<ul class="woocommerce-error" role="alert"><li>Unesite važeći kod za popust.</li></ul>');
    }
  });
})(jQuery);
</script>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
