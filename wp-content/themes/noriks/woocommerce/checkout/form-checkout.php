<?php
/**
 * Checkout Form — Noriks (Vigoshop-inspired single-column layout)
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

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
				<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
			</div>
			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

	<?php endif; ?>

	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

	<!-- Coupon (mobile+desktop unified) -->
	<section id="cci-inline-coupon-1" class="coupon-code-section coupon-code-section-mobile">
	  <div class="checkout-coupon-inline">
	    <p class="form-row cci-form-row-first">
	      <label for="cci-coupon-input" class="screen-reader-text">
	        <?php esc_html_e( 'Coupon:', 'woocommerce' ); ?>
	      </label>
	      <input type="text" id="cci-coupon-input" class="input-text"
	             placeholder="<?php esc_attr_e( 'Kod za popust ili poklon kartica', 'woocommerce' ); ?>" />
	    </p>
	    <p class="form-row cci-form-row-last">
	      <button type="button" id="cci-apply-btn" class="cci-apply-btn button">
	        <?php esc_html_e( 'Apply', 'woocommerce' ); ?>
	      </button>
	    </p>
	    <div class="clear"></div>
	    <div class="cci-notices inline-coupon-notices" aria-live="polite"></div>
	  </div>
	</section>

	<!-- Order Review -->
	<div id="order_review" class="woocommerce-checkout-review-order">
		<h3 class="checkout-section-title">Pregled narudžbe</h3>

		<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>

		<!-- Desktop coupon (duplicate for backwards compat) -->
		<section class="coupon-code-section">
		  <div class="checkout-coupon-inline">
		    <p class="form-row form-row-first">
		      <label for="coupon_code_inline" class="screen-reader-text">
		        <?php esc_html_e( 'Coupon:', 'woocommerce' ); ?>
		      </label>
		      <input type="text" id="coupon_code_inline" class="input-text"
		             placeholder="<?php esc_attr_e( 'Kod za popust ili poklon kartica', 'woocommerce' ); ?>" />
		    </p>
		    <p class="form-row form-row-last">
		      <button type="button" id="apply_coupon_inline" class="apply-discount-button button">
		        <?php esc_html_e( 'Apply', 'woocommerce' ); ?>
		      </button>
		    </p>
		    <div class="clear"></div>
		  </div>
		</section>
		<div class="inline-coupon-notices dekstopni"></div>

		<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

		<!-- Trust Section -->
		<section class="trust-section">
		    <div class="features">
		      <div class="feature">
		        <img src="<?php echo get_field("footer_top_icon_1","options"); ?>" alt="shirt icon" class="feature-icon">
		        <div class="feature-content">
		          <div class="feature-title"><?php echo get_field("footer_top_heading_1","options"); ?></div>
		          <div class="feature-text"><?php echo get_field("footer_top_text_1","options"); ?></div>
		        </div>
		      </div>
		      <div class="feature">
		        <img src="<?php echo get_field("footer_top_icon_2","options"); ?>" alt="support icon" class="feature-icon">
		        <div class="feature-content">
		          <div class="feature-title"><?php echo get_field("footer_top_heading_2","options"); ?></div>
		          <div class="feature-text"><?php echo get_field("footer_top_text_2","options"); ?></div>
		        </div>
		      </div>
		      <div class="feature">
		        <img src="<?php echo get_field("footer_top_icon_3","options"); ?>" alt="shipping icon" class="feature-icon">
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

	</div>

</div><!-- .checkout-card -->

</form>

</div><!-- .my-checkout-container -->

<!-- Coupon JS (unified) -->
<script>
(function($){
  // === Mobile/top coupon ===
  var $root = $('#cci-inline-coupon-1');
  var pendingNoticeHtml = '';
  var lastTriedCode = '';

  function ensureNoticeTarget(){
    var $t = $root.find('.cci-notices.inline-coupon-notices');
    if (!$t.length) {
      var $anchor = $root.find('.clear').last();
      $t = $('<div class="cci-notices inline-coupon-notices" aria-live="polite"></div>');
      if ($anchor.length) { $t.insertAfter($anchor); } else { $root.append($t); }
    }
    return $t;
  }
  function setNotice(html){ pendingNoticeHtml = html || ''; ensureNoticeTarget().html(pendingNoticeHtml); }
  function successHtml(){ return '<div class="woocommerce-message" role="alert">Kupon primijenjen.</div>'; }
  function errorHtml(){ return '<ul class="woocommerce-error" role="alert"><li>Unesite važeći kod za popust ili poklon karticu.</li></ul>'; }
  function couponClassFromCode(code){
    return String(code||'').toLowerCase().replace(/[^a-z0-9]/g,'-').replace(/-+/g,'-').replace(/^-|-$/g,'');
  }

  $(document.body).on('updated_checkout', function(){
    if (!lastTriedCode) return;
    var slug = couponClassFromCode(lastTriedCode);
    var applied = $('.cart-discount.coupon-'+slug).length > 0 ||
      $('.cart-discount').filter(function(){ return $(this).text().toLowerCase().indexOf(lastTriedCode.toLowerCase()) !== -1; }).length > 0;
    setNotice(applied ? successHtml() : errorHtml());
    // Also update desktop notice
    var $dk = $('.dekstopni');
    if ($dk.length) $dk.html(applied ? successHtml() : errorHtml());
  });

  function applyCoupon(code, $btn){
    lastTriedCode = code;
    setNotice('');
    $btn.prop('disabled', true);
    var ajaxUrl = (typeof wc_checkout_params !== 'undefined' && wc_checkout_params.wc_ajax_url)
      ? wc_checkout_params.wc_ajax_url
      : (typeof wc_cart_params !== 'undefined' && wc_cart_params.wc_ajax_url ? wc_cart_params.wc_ajax_url : window.location.href);
    ajaxUrl = ajaxUrl.replace('%%endpoint%%', 'apply_coupon');
    var nonce = (typeof wc_checkout_params !== 'undefined' && wc_checkout_params.apply_coupon_nonce) ? wc_checkout_params.apply_coupon_nonce :
      (typeof wc_cart_params !== 'undefined' && wc_cart_params.apply_coupon_nonce) ? wc_cart_params.apply_coupon_nonce : '';
    $.post(ajaxUrl, { coupon_code: code, security: nonce }).always(function(){
      $(document.body).trigger('applied_coupon', [code]);
      $(document.body).trigger('update_checkout');
      $btn.prop('disabled', false);
    });
  }

  $root.on('click', '#cci-apply-btn', function(e){
    e.preventDefault();
    var code = $.trim($root.find('#cci-coupon-input').val());
    if (code) applyCoupon(code, $(this));
  });

  $(document).on('click', '#apply_coupon_inline', function(e){
    e.preventDefault();
    var code = $.trim($('#coupon_code_inline').val());
    if (code) applyCoupon(code, $(this));
  });

  $(ensureNoticeTarget);
})(jQuery);
</script>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
