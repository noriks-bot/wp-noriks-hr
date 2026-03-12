<?php
/**
 * Checkout Form — Noriks (Vigoshop-style single-column layout)
 *
 * Vigoshop order: Billing → Dostava → Način plaćanja → COD prompt → VAT → Sažetak → Naruči
 * All inside one white card. Payment + order review + button inside #payment.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

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

		<?php // Hooks render: Dostava → Način plaćanja → #payment (with order review + button inside) ?>
		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>

	<?php // Hidden order_review for WC compatibility (actual display is inside #payment via hook) ?>
	<div id="order_review" class="woocommerce-checkout-review-order" style="display:none;">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

</div><!-- .checkout-card -->

</form>

</div><!-- .my-checkout-container -->

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
