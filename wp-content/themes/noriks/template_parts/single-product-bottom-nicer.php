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

// KOMPRESIJSKE NOGAVICE (compression socks) — not the back belt / bunion corrector
// (those may still carry the socks category from being duplicated)
if ( noriks_is_type( 'kompresijske-nogavice' ) && ! noriks_is_type( 'ortopas' ) && ! noriks_is_type( 'bunion' ) && ! noriks_is_type( 'fisiorest' ) ) {
    include $noriks_pb_dir . 'why-kompresijske.php';
}

// ORTOPEDSKI POJAS ZA LEĐA (orthopedic back belt)
if ( noriks_is_type( 'ortopas' ) ) {
    include $noriks_pb_dir . 'why-ortopas.php';
}

// KOREKTOR ČUKLJEVA (bunion corrector)
if ( noriks_is_type( 'bunion' ) ) {
    include $noriks_pb_dir . 'why-bunion.php';
}

// FISIOREST (novi proizvod)
if ( noriks_is_type( 'fisiorest' ) ) {
    include $noriks_pb_dir . 'why-fisiorest.php';
}

// NORIKSHERS (novi proizvod — sekcije + videi u pripremi)
if ( noriks_is_type( 'norikshers' ) ) {
    include $noriks_pb_dir . 'why-norikshers.php';
}

// ERGOSIT ORTOPEDSKI JASTUK (orto-ortopedski-jastuk) — novi proizvod, why-sekcije po uputama
if ( noriks_is_type( 'ortopedski-jastuk' ) ) {
    include $noriks_pb_dir . 'why-ortopedski-jastuk.php';
}

// NOSILJKA (orto-nosilka) — Bambelle sling carrier, why-sekcije (kopija en-bambelle stranice)
if ( noriks_is_type( 'nosilka' ) ) {
    include $noriks_pb_dir . 'why-nosilka.php';
}

// KIDSNEST (orto-kidsnest) — djecji jastuk za pravilno disanje, why-sekcije (Needo referenca)
if ( noriks_is_type( 'kidsnest' ) ) {
    include $noriks_pb_dir . 'why-kidsnest.php';
}

// LEAK BOXERS (orto-leak-boxers) — muško rublje za inkontinenciju
if ( noriks_is_type( 'leakboxers' ) ) {
    include $noriks_pb_dir . 'why-leakboxers.php';
}

// KOMPRESIJSKE MAJICE (orto-kompresijske-majice) — muška kompresijska/oblikujuća majica
if ( noriks_is_type( 'kompresijske-majice' ) ) {
    include $noriks_pb_dir . 'why-kompresijske-majice.php';
}

// MAJICA DARILA / SHGIFTS (orto-majica-darila) — uses the same why-section as majice
if ( noriks_is_type( 'majica-darila' ) && ! noriks_is_type( 'majice' ) ) {
    include $noriks_pb_dir . 'why-majice.php';
}

// KNEEFIX (orto-kneefix) — ortopedska steznica za koljeno
if ( noriks_is_type( 'kneefix' ) ) {
    include $noriks_pb_dir . 'why-kneefix.php';
}

// CONTROLPRO (orto-controlpro) — trener dna zdjelice
if ( noriks_is_type( 'controlpro' ) ) {
    include $noriks_pb_dir . 'why-controlpro.php';
}

// SHARED reviews / social proof (all products)
include $noriks_pb_dir . 'reviews.php';
