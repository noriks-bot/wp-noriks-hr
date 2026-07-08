<?php
/**
 * Single product — bottom content dispatcher.
 *
 * Per-type "why" content lives in template_parts/product-bottom/why-*.php,
 * the reviews / social-proof block is shared by every product.
 *
 * Product-type detection is centralised in functions/product-type.php
 * (noriks_is_type / noriks_product_type). Change categories there, not here.
 *
 * NOTE: the three "why" blocks are independent (a product can match more
 * than one) to preserve the original behaviour.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$noriks_pb_dir = get_template_directory() . '/template_parts/product-bottom/';

// STARTER (starter-paketi / orto-starter / orto-majica-bokserica)
if ( noriks_is_type( 'starter' ) ) {
    include $noriks_pb_dir . 'why-starter.php';
}

// MAJICE (majice / orto-majice) — also shown on black-friday
if ( noriks_is_type( 'majice' ) || noriks_is_black_friday() ) {
    include $noriks_pb_dir . 'why-majice.php';
}

// BOKSERICE (bokserice / orto-bokserice / bokserice-sastavi-paket) — not on black-friday
if ( noriks_is_type( 'bokserice' ) && ! noriks_is_black_friday() ) {
    include $noriks_pb_dir . 'why-bokserice.php';
}

// KOMPRESIJSKE NOGAVICE (compression socks)
if ( noriks_is_type( 'kompresijske-nogavice' ) ) {
    include $noriks_pb_dir . 'why-kompresijske.php';
}

// SHARED reviews / social proof (all products)
include $noriks_pb_dir . 'reviews.php';
