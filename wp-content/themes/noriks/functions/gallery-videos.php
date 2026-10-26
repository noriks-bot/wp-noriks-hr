<?php
/**
 * Videi v galeriji izdelka (kot na originalu): meta _noriks_galerija_videi = JSON
 * [ { "za": 1, "src": "<url mp4>", "poster": "<url jpg>" }, ... ]
 * "za" = za katero sliko galerije (1 = glavna slika) se vstavi video drsnik.
 * Video dobi svojo slicico (poster) v traku slicic, flexslider ga obravnava kot navaden drsnik.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_filter( 'woocommerce_single_product_image_thumbnail_html', function ( $html, $attachment_id ) {
	global $product;
	if ( ! $product || ! is_a( $product, 'WC_Product' ) ) {
		return $html;
	}
	$raw = get_post_meta( $product->get_id(), '_noriks_galerija_videi', true );
	if ( ! $raw ) {
		return $html;
	}
	$videi = json_decode( $raw, true );
	if ( ! is_array( $videi ) ) {
		return $html;
	}
	$ids = array_merge( array( (int) $product->get_image_id() ), array_map( 'intval', $product->get_gallery_image_ids() ) );
	$pos = array_search( (int) $attachment_id, $ids, true );
	if ( false === $pos ) {
		return $html;
	}
	foreach ( $videi as $v ) {
		if ( empty( $v['src'] ) || (int) ( $v['za'] ?? 0 ) !== $pos + 1 ) {
			continue;
		}
		$poster = isset( $v['poster'] ) ? esc_url( $v['poster'] ) : '';
		$html  .= '<div data-thumb="' . $poster . '" data-thumb-alt="" class="woocommerce-product-gallery__image noriks-gal-video">'
			. '<video src="' . esc_url( $v['src'] ) . '" poster="' . $poster . '" autoplay muted loop playsinline preload="metadata" style="width:100%;height:auto;display:block"></video></div>';
	}
	return $html;
}, 20, 2 );
