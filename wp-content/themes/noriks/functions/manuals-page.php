<?php
/**
 * Podstranica s PDF uputama za NORIKS proizvode.
 *
 * Stranica se kreira jednom iz teme (slug: upute) i koristi predlozak page-upute.php.
 * PDF-ovi stoje lokalno u temi, u mapi /manuals/.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function noriks_manuals_list() {
    return array(
        array(
            'file'  => 'noriks-majice.pdf',
            'sku'   => 'NORIKS-ALL-BLACK-6-PACK',
            'title' => 'NORIKS majice',
            'sub'   => 'Pamučne majice — odabir veličine, nošenje i njega.',
        ),
        array(
            'file'  => 'noriks-bokserice.pdf',
            'sku'   => 'NORIKS-BOX-BLACK-5-PACK',
            'title' => 'NORIKS bokserice',
            'sub'   => 'Modal bokserice — mjere, nošenje i njega.',
        ),
        array(
            'file'  => 'noriks-kompresijske-carape.pdf',
            'sku'   => array( 'NORIKS-KOMZIPS', 'NORIKS-BOXERS-ORTO-4' ),
            'title' => 'NORIKS kompresijske čarape sa zatvaračem',
            'sub'   => 'Graduirana kompresija 15–20 mmHg s bočnim patentnim zatvaračem.',
        ),
        array(
            'file'  => 'noriks-kneefix.pdf',
            'sku'   => 'NORIKS-KNEEFIX',
            'title' => 'NORIKS KneeFix — ortopedska steznica za koljeno',
            'sub'   => 'Podesiva kompresija, bočni stabilizatori i gel jastučić za čašicu.',
        ),
        array(
            'file'  => 'noriks-bunion-fix.pdf',
            'sku'   => 'NORIKS-BUNION',
            'title' => 'NORIKS Bunion Fix — korektor čukljeva',
            'sub'   => 'Postupno poravnanje palca uz 30 minuta do 3 sata dnevno.',
        ),
        array(
            'file'  => 'noriks-ortopas.pdf',
            'sku'   => 'NORIKS-ORTOPAS',
            'title' => 'NORIKS ortopedski pojas za leđa',
            'sub'   => 'Ciljana kompresija za donji dio leđa i stabilizaciju pri svakodnevnim pokretima.',
        ),
        array(
            'file'  => 'noriks-fisiorest.pdf',
            'sku'   => 'NORIKS-FISIOREST',
            'title' => 'NORIKS NeckRelax — uređaj za vrat',
            'sub'   => 'Trakcija, toplina i vibracijska masaža u sesiji od 15 do 30 minuta.',
        ),
        array(
            'file'  => 'noriks-fit-kompresijska-majica.pdf',
            'sku'   => 'NORIKS-KOMPSFIT',
            'title' => 'NORIKS FIT — kompresijska majica',
            'sub'   => 'Pripijena kompresija koja izglađuje siluetu i podupire uspravno držanje.',
        ),
        array(
            'file'  => 'noriks-leakbox.pdf',
            'sku'   => 'NORIKS-LEAKBOX',
            'title' => 'NORIKS PureDry — perive bokserice za inkontinenciju',
            'sub'   => 'Do 300 ml upijanja, sedmoslojna jezgra i vodoodbojna membrana.',
        ),
        array(
            'file'  => 'noriks-ergosit.pdf',
            'sku'   => 'NORIKS-ERGOSIT',
            'title' => 'NORIKS ErgoSit — ortopedski jastuk za sjedenje',
            'sub'   => 'Izrez za trticu i memorijska pjena visoke gustoće za dugo sjedenje.',
        ),
        array(
            'file'  => 'noriks-kidsnest.pdf',
            'sku'   => 'NORIKS-KIDSNEST',
            'title' => 'NORIKS KidsNest — dječji ortopedski jastuk',
            'sub'   => 'Tri veličine koje prate rast djeteta i podupiru pravilan položaj glave.',
        ),
        array(
            'file'  => 'noriks-snore.pdf',
            'sku'   => 'NORIKS-SNORE',
            'title' => 'NORIKS udlaga protiv hrkanja',
            'sub'   => 'Oblikuje se po vašem ugrizu; pet zamjenjivih traka za postupno podešavanje.',
        ),
        array(
            'file'  => 'noriks-slim.pdf',
            'sku'   => 'NORIKS-SLIM',
            'title' => 'NORIKS Slim — oblikujuće gaćice visokog struka',
            'sub'   => 'Ukriženi pojas 360°, visok struk i bešavno pletivo za svakodnevno nošenje.',
        ),
        array(
            'file'  => 'noriks-redrelief.pdf',
            'sku'   => 'NORIKS-RED',
            'title' => 'NORIKS RedRelief — terapija crvenim svjetlom za zapešće',
            'sub'   => 'Dvostruka valna duljina 660 nm i 850 nm, 48 dvostrukih LED dioda, seansa od 15 minuta.',
        ),
        array(
            'file'  => 'noriks-pal.pdf',
            'sku'   => 'NORIKS-PAL',
            'title' => 'NORIKS Pal — štap za hodanje s drugom ručkom',
            'sub'   => 'Druga ručka za ustajanje, četiri nožice, svjetiljka i alarm. Sklopiv i podesiv po visini.',
        ),
        array(
            'file'  => 'noriks-polar-cloth.pdf',
            'sku'   => 'NORIKS-CLOATH',
            'title' => 'Polar NORIKS Cloth XXL — krpa za čišćenje samo vodom',
            'sub'   => 'Format 60 × 40 cm, dvostrana izvedba, upija do 600 ml vode. Bez sprejeva i bez kemikalija.',
        ),
        array(
            'file'  => 'noriks-slabproof.pdf',
            'sku'   => 'NORIKS-SLABPROOF',
            'title' => 'NORIKS SlabProof — radne čarape s jastučićem',
            'sub'   => 'Niski kroj ispod gležnja, zonsko jastučenje ispod pete i prednjeg dijela stopala.',
        ),
        array(
            'file'  => 'noriks-controlpro.pdf',
            'sku'   => 'NORIKS-CONTROLPRO',
            'title' => 'NORIKS ControlPro — trenažer mišića zdjeličnog dna',
            'sub'   => 'Vježba s otporom između koljena: tri serije od deset stiskova dnevno, bez umetanja i bez aplikacije.',
        ),
        array(
            'file'  => 'noriks-tradesman.pdf',
            'sku'   => 'NORIKS-SLABPROOF-2',
            'title' => 'NORIKS Tradesman — radne čarape s jastučićem i potporom svoda',
            'sub'   => 'Bambus, zonsko jastučenje, traka ispod svoda i dvostruka manžeta za duge smjene u radnim čizmama.',
        ),
        array(
            'file'  => 'noriks-bowl.pdf',
            'sku'   => 'NORIKS-BOWL',
            'title' => 'NORIKS Bowl — ortopedska zdjelica za pse s nagibom 15°',
            'sub'   => 'Povišena na 11 cm i nagnuta 15° — pas jede u prirodnijem položaju, bez savijanja vrata do poda.',
        ),
        array(
            'file'  => 'noriks-cloud.pdf',
            'sku'   => 'NORIKS-CLOUD',
            'title' => 'NORIKS Cloud — ortopedski jastuk među koljena',
            'sub'   => 'Za spavanje na boku: drži koljena i bokove u liniji, s podesivom trakom koja ga drži na mjestu cijelu noć.',
        ),
        array(
            'file'  => 'noriks-kneeheat.pdf',
            'sku'   => 'NORIKS-KNEEHEAT',
            'title' => 'NORIKS KneeHeat — grijanje, kompresija i masaža koljena',
            'sub'   => 'Tri terapije u jednoj seansi: toplina do 42 °C, zračna kompresija i vibracija 60 Hz. Seansa traje 12 minuta.',
        ),
        array(
            'file'  => 'noriks-mamafit.pdf',
            'sku'   => 'NORIKS-SLIM-2',
            'title' => 'NORIKS MamaFit — poslijeporođajne kompresijske gaćice 360°',
            'sub'   => 'Visok struk i ukrižena kompresija 360° — potpora trbuha sprijeda, sa strane i straga.',
        ),
        array(
            'file'  => 'noriks-snug.pdf',
            'sku'   => 'NORIKS-SNUG',
            'title' => 'NORIKS Snug — jastuk za cijelo tijelo u obliku slova S',
            'sub'   => 'Podupire ramena, bokove i koljena odjednom. Dimenzije 105 × 30 cm, rashladna navlaka.',
        ),
        array(
            'file'  => 'noriks-hyd.pdf',
            'sku'   => 'NORIKS-HYD',
            'title' => 'NORIKS HYD — boca za vodikovu vodu s PEM elektrolizom',
            'sub'   => 'Pretvara običnu vodu u vodikovu. Ciklus od 3 ili 10 minuta, trajni filtar, staklo i nehrđajući čelik.',
        ),
        array(
            'file'  => 'noriks-winecooler.pdf',
            'sku'   => 'NORIKS-WINECOOLER',
            'title' => 'NORIKS WineCooler — hladnjak za vino s nalijevačem',
            'sub'   => 'Štapić od nehrđajućeg čelika koji hladi bocu iznutra i nalijeva bez kapanja.',
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

/** Jednokratno kreira pravu WP stranicu i dodijeli joj predlozak page-upute.php. */
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
