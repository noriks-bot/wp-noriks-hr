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

// NORIKS SNORE (orto-snore) — udlaga protiv hrkanja
if ( noriks_is_type( 'snore' ) ) {
    include $noriks_pb_dir . 'why-snore.php';
}

// NORIKS CLOUD (orto-cloud) — ortopedski jastuk za koljena
if ( noriks_is_type( 'cloud' ) ) {
    include $noriks_pb_dir . 'why-cloud.php';
}

// POLAR NORIKS CLOTH (orto-cloath) — krpa za ciscenje
if ( noriks_is_type( 'cloath' ) ) {
    include $noriks_pb_dir . 'why-cloath.php';
}

// NORIKS BRA (orto-bra) — grudnjak s potporom drzanja
if ( noriks_is_type( 'bra' ) ) {
    include $noriks_pb_dir . 'why-bra.php';
}

// NORIKS HYD (orto-hyd) — boca za vodikovu vodu
if ( noriks_is_type( 'hyd' ) ) {
    include $noriks_pb_dir . 'why-hyd.php';
}

// KNEEFIX (orto-kneefix) — ortopedska steznica za koljeno
if ( noriks_is_type( 'kneefix' ) ) {
    include $noriks_pb_dir . 'why-kneefix.php';
}

// CONTROLPRO (orto-controlpro) — trener dna zdjelice
if ( noriks_is_type( 'controlpro' ) ) {
    include $noriks_pb_dir . 'why-controlpro.php';
}

// NORIKS CARDS (noriks-cards) — zvucni uredaj s karticama
if ( noriks_is_type( 'noriks-cards' ) ) {
    include $noriks_pb_dir . 'why-noriks-cards.php';
}

// NORIKSHERS BRUSH (orto-norikshersbrush) — stiler za kosu
if ( noriks_is_type( 'norikshersbrush' ) ) {
    include $noriks_pb_dir . 'why-norikshersbrush.php';
}

// NORIKS DENTAL (noriks-dental) — ultrazvučni čistač zubnih pomagala
if ( noriks_is_type( 'dental' ) ) {
    include $noriks_pb_dir . 'why-dental.php';
}

// HAIRMAGIC (orto-norikshershairmagic) — puder za liniju kose
if ( noriks_is_type( 'hairmagic' ) ) {
    include $noriks_pb_dir . 'why-hairmagic.php';
}

// NORIKS LIFT (orto-lift) — kolagenski zavoj za oblikovanje lica
if ( noriks_is_type( 'lift' ) ) {
    include $noriks_pb_dir . 'why-lift.php';
}

// NORIKS KNEEHEAT (orto-kneeheat) — grijac, kompresija i masaza koljena
if ( noriks_is_type( 'kneeheat' ) ) {
    include $noriks_pb_dir . 'why-kneeheat.php';
}

// NORIKS PRE (orto-pre) — jastuk za trudnice
if ( noriks_is_type( 'pre' ) ) {
    include $noriks_pb_dir . 'why-pre.php';
}

// NORIKS HUGGER (orto-hug) — nosivi termofor
if ( noriks_is_type( 'hug' ) ) {
    include $noriks_pb_dir . 'why-hug.php';
}

// SHARED reviews / social proof (all products)
include $noriks_pb_dir . 'reviews.php';
