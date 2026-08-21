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
            'file'  => 'noriks-majice.pdf',
            'sku'   => 'NORIKS-ALL-BLACK-6-PACK',
            'title' => 'NORIKS majice',
            'sub'   => 'Pamučne majice',
            'desc'  => 'Tablica veličina, pranje, peglanje i čuvanje.',
        ),
        array(
            'file'  => 'noriks-bokserice.pdf',
            'sku'   => 'NORIKS-BOX-BLACK-5-PACK',
            'title' => 'NORIKS bokserice',
            'sub'   => 'Donje rublje',
            'desc'  => 'Mjere a–d po veličinama, nošenje i pranje.',
        ),
        array(
            'file'  => 'noriks-kompresijske-carape.pdf',
            'sku'   => array( 'NORIKS-KOMZIPS', 'NORIKS-BOXERS-ORTO-4' ),
            'title' => 'NORIKS kompresijske čarape',
            'sub'   => 'Sa zatvaračem, 15–20 mmHg',
            'desc'  => 'Veličina po opsegu lista, oblačenje i njega.',
        ),
        array(
            'file'  => 'noriks-kneefix.pdf',
            'sku'   => 'NORIKS-KNEEFIX',
            'title' => 'NORIKS KneeFix',
            'sub'   => 'Ortopedska steznica za koljeno',
            'desc'  => 'Veličine, stavljanje, podešavanje kompresije.',
        ),
        array(
            'file'  => 'noriks-bunion-fix.pdf',
            'sku'   => 'NORIKS-BUNION',
            'title' => 'NORIKS Bunion Fix',
            'sub'   => 'Ortopedski korektor čukljeva',
            'desc'  => 'Stavljanje i raspored nošenja po tjednima.',
        ),
        array(
            'file'  => 'noriks-ortopas.pdf',
            'sku'   => 'NORIKS-ORTOPAS',
            'title' => 'NORIKS ortopedski pojas',
            'sub'   => 'Potpora za leđa',
            'desc'  => 'Stavljanje, trajanje nošenja i pranje.',
        ),
        array(
            'file'  => 'noriks-fisiorest.pdf',
            'sku'   => 'NORIKS-FISIOREST',
            'title' => 'NORIKS FisioRest',
            'sub'   => 'Uređaj za vrat',
            'desc'  => 'Punjenje, ciklusi i sigurnosne napomene.',
        ),
        array(
            'file'  => 'noriks-fit-kompresijska-majica.pdf',
            'sku'   => 'NORIKS-KOMPSFIT',
            'title' => 'NORIKS FIT',
            'sub'   => 'Kompresijska majica',
            'desc'  => 'Veličine prema težini, oblačenje i pranje.',
        ),
        array(
            'file'  => 'noriks-leakbox.pdf',
            'sku'   => 'NORIKS-LEAKBOX',
            'title' => 'NORIKS upijajuće bokserice',
            'sub'   => 'Zaštita od curenja',
            'desc'  => 'Veličine, izmjena tijekom dana i pranje.',
        ),
        array(
            'file'  => 'noriks-ergosit.pdf',
            'sku'   => 'NORIKS-ERGOSIT',
            'title' => 'NORIKS ErgoSit',
            'sub'   => 'Ortopedski jastuk za sjedenje',
            'desc'  => 'Postavljanje, položaj tijela i održavanje.',
        ),
        array(
            'file'  => 'noriks-kidsnest.pdf',
            'sku'   => 'NORIKS-KIDSNEST',
            'title' => 'NORIKS KidsNest',
            'sub'   => 'Dječji jastuk',
            'desc'  => 'Visina po dobi, postavljanje i pranje.',
        ),
        array(
            'file'  => 'noriks-snore.pdf',
            'sku'   => 'NORIKS-SNORE',
            'title' => 'NORIKS udlaga protiv hrkanja',
            'sub'   => 'Švicarska izrada',
            'desc'  => 'Prilagodba ugrizu, trake #1–#5 i čišćenje.',
        ),
    );
}

/** Slika i poveznica proizvoda po SKU-u — uvijek aktualne, bez rucnog upisa URL-a. */
function noriks_manual_product( $sku ) {
    $out = array( 'img' => '', 'url' => '' );
    if ( ! function_exists( 'wc_get_product_id_by_sku' ) ) { return $out; }

    $pid = 0;
    foreach ( (array) $sku as $candidate ) {
        $pid = wc_get_product_id_by_sku( $candidate );
        if ( $pid ) { break; }
    }
    if ( ! $pid ) { return $out; }

    $out['url'] = get_permalink( $pid );
    $out['img'] = get_the_post_thumbnail_url( $pid, 'woocommerce_thumbnail' );

    // Ako proizvod nema istaknutu sliku, uzmi prvu iz galerije.
    if ( ! $out['img'] && function_exists( 'wc_get_product' ) ) {
        $product = wc_get_product( $pid );
        if ( $product ) {
            $gallery = $product->get_gallery_image_ids();
            if ( ! empty( $gallery[0] ) ) {
                $out['img'] = wp_get_attachment_image_url( $gallery[0], 'woocommerce_thumbnail' );
            }
        }
    }
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
