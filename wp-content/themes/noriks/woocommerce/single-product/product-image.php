<?php
/**
 * Single Product Image
 *
 * WooCommerce native gallery (FlexSlider + PhotoSwipe + zoom).
 * Kept minimal: discount badge overlay + layout-shift prevention CSS.
 */

use Automattic\WooCommerce\Enums\ProductType;

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
	)
);

// Discount badge value.
if ( $product->is_type( 'variable' ) ) {
	$regular_price = (float) $product->get_variation_regular_price( 'min', true );
	$sale_price    = (float) $product->get_variation_sale_price( 'min', true );
} else {
	$regular_price = (float) $product->get_regular_price();
	$sale_price    = (float) $product->get_sale_price();
}
$discount = ( $sale_price && $regular_price && $regular_price > $sale_price )
	? round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 )
	: 0;
?>
<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>">

	<?php if ( $discount ) : ?>
		<span class="badge-on-img">-<?php echo esc_html( $discount ) . esc_html( get_field( 'singlepp_discount_text', 'options' ) ); ?></span>
	<?php endif; ?>

	<div class="woocommerce-product-gallery__wrapper">
		<?php
		if ( $post_thumbnail_id ) {
			$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
		} else {
			$wrapper_classname = $product->is_type( ProductType::VARIABLE ) && ! empty( $product->get_available_variations( 'image' ) ) ?
				'woocommerce-product-gallery__image woocommerce-product-gallery__image--placeholder' :
				'woocommerce-product-gallery__image--placeholder';
			$html              = sprintf( '<div class="%s">', esc_attr( $wrapper_classname ) );
			$html             .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
			$html             .= '</div>';
		}
		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

		do_action( 'woocommerce_product_thumbnails' );
		?>
	</div>
</div>
