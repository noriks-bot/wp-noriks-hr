<?php
/**
 * Podstranica "Upute za uporabu" — popis proizvoda s PDF uputama.
 *
 * Stranica se ne kreira u adminu: rendera se izravno iz teme na URL-u /hr/upute/
 * (i /hr/manuals/). PDF-ovi stoje lokalno u temi, u mapi /manuals/.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function noriks_manuals_list() {
    return array(
        array(
            'file'  => 'noriks-kneefix.pdf',
            'sku'   => 'NORIKS-KNEEFIX',
            'title' => 'NORIKS KneeFix',
            'sub'   => 'Ortopedska steznica za koljeno',
            'desc'  => 'Odabir veličine, stavljanje, podešavanje kompresije i održavanje.',
        ),
        array(
            'file'  => 'noriks-bunion-fix.pdf',
            'sku'   => 'NORIKS-BUNION',
            'title' => 'NORIKS Bunion Fix',
            'sub'   => 'Ortopedski korektor čukljeva',
            'desc'  => 'Stavljanje na stopalo, raspored nošenja po tjednima i njega.',
        ),
        array(
            'file'  => 'noriks-fisiorest.pdf',
            'sku'   => 'NORIKS-FISIOREST',
            'title' => 'NORIKS FisioRest',
            'sub'   => 'Uređaj za vrat',
            'desc'  => 'Punjenje, pokretanje ciklusa, preporučeno trajanje i sigurnosne napomene.',
        ),
        array(
            'file'  => 'noriks-fit-kompresijska-majica.pdf',
            'sku'   => 'NORIKS-KOMPSFIT',
            'title' => 'NORIKS FIT',
            'sub'   => 'Kompresijska majica',
            'desc'  => 'Tablica veličina prema težini, oblačenje i pranje.',
        ),
    );
}

/** Slika i poveznica proizvoda po SKU-u — uvijek aktualne, bez rucnog upisa URL-a. */
function noriks_manual_product( $sku ) {
    $out = array( 'img' => '', 'url' => '' );
    if ( ! function_exists( 'wc_get_product_id_by_sku' ) ) { return $out; }
    $pid = wc_get_product_id_by_sku( $sku );
    if ( ! $pid ) { return $out; }
    $out['url'] = get_permalink( $pid );
    $out['img'] = get_the_post_thumbnail_url( $pid, 'woocommerce_thumbnail' );
    return $out;
}

/**
 * Jednokratno kreira pravu WP stranicu "Upute za uporabu" i dodijeli joj predlozak
 * page-upute.php. Stranica se dalje ureduje normalno u adminu; ova funkcija je vise
 * ne dira (zapamti ID u opciji).
 */
function noriks_manuals_ensure_page() {
    $opt = 'noriks_manuals_page_id';
    $id  = (int) get_option( $opt );
    if ( $id && get_post_status( $id ) ) { return; }

    $existing = get_page_by_path( 'upute' );
    if ( $existing ) {
        update_post_meta( $existing->ID, '_wp_page_template', 'page-upute.php' );
        update_option( $opt, $existing->ID );
        return;
    }

    $id = wp_insert_post( array(
        'post_title'   => 'Upute za uporabu',
        'post_name'    => 'upute',
        'post_type'    => 'page',
        'post_status'  => 'publish',
        'post_content' => '',
        'meta_input'   => array( '_wp_page_template' => 'page-upute.php' ),
    ) );
    if ( $id && ! is_wp_error( $id ) ) { update_option( $opt, $id ); }
}
add_action( 'init', 'noriks_manuals_ensure_page' );
