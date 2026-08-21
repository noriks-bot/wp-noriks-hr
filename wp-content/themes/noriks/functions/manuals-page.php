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
            'title' => 'NORIKS KneeFix',
            'sub'   => 'Ortopedska steznica za koljeno',
            'desc'  => 'Odabir veličine, stavljanje, podešavanje kompresije i održavanje.',
            'url'   => '/hr/product/noriks-kneefix-ortopedska-steznica-za-koljeno/',
        ),
        array(
            'file'  => 'noriks-bunion-fix.pdf',
            'title' => 'NORIKS Bunion Fix',
            'sub'   => 'Ortopedski korektor čukljeva',
            'desc'  => 'Stavljanje na stopalo, raspored nošenja po tjednima i njega.',
            'url'   => '/hr/product/noriks-ortopedski-korektor-cuklja/',
        ),
        array(
            'file'  => 'noriks-fisiorest.pdf',
            'title' => 'NORIKS FisioRest',
            'sub'   => 'Uređaj za vrat',
            'desc'  => 'Punjenje, pokretanje ciklusa, preporučeno trajanje i sigurnosne napomene.',
            'url'   => '/hr/product/noriks-ortopedski-uredaj-za-vrat-fisiorest/',
        ),
        array(
            'file'  => 'noriks-fit-kompresijska-majica.pdf',
            'title' => 'NORIKS FIT',
            'sub'   => 'Kompresijska majica',
            'desc'  => 'Tablica veličina prema težini, oblačenje i pranje.',
            'url'   => '/hr/product/noriks-fit-kompresijska-majica/',
        ),
    );
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
