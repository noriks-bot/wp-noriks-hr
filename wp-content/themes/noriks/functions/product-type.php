<?php
/**
 * ============================================================
 * NORIKS — Central product-type resolver
 * ------------------------------------------------------------
 * ONE place that decides which product categories map to which
 * "type" (majice / bokserice / starter / carape / ...).
 *
 * Everywhere in the theme, instead of scattered:
 *     has_term( array( 'bokserice','orto-bokserice',... ), 'product_cat', $id )
 * use:
 *     noriks_is_type( 'bokserice', $id )   // -> bool
 *     noriks_product_type( $id )           // -> string (first matching primary type)
 *
 * To add a new product, or change which categories count as a
 * given type, edit noriks_product_type_map() below. Nothing else.
 * ============================================================
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'noriks_product_type_map' ) ) :

/**
 * type key => list of product_cat slugs that identify it.
 *
 * NOTE: slugs are kept clean here (historical trailing-space typos
 * like 'zimske-carape ' / 'majice-i-bokserice-paketi ' are normalised).
 */
function noriks_product_type_map() : array {
    return array(
        // --- primary product types (order = resolution priority) ---
        'starter'   => array( 'starter-paketi', 'orto-starter', 'orto-majica-bokserica' ),
        'majice'    => array( 'majice', 'orto-majice' ),
        'bokserice' => array( 'bokserice', 'orto-bokserice', 'bokserice-sastavi-paket' ),
        'carape'    => array( 'carape', 'zimske-carape', 'kompresijske-carape', 'orto-kompresijske-carape' ),

        // --- sub-variants / special buckets ---
        'kompresijske-nogavice'   => array( 'kompresijske-carape', 'orto-kompresijske-carape' ),
        // Orthopedic back belt (ortopedski pojas za leđa).
        'ortopas'                 => array( 'orto-ortopas', 'ortopas' ),
        // Bunion corrector (korektor čukljeva / halux valgus).
        'bunion'                  => array( 'orto-bunion', 'bunion' ),
        // FisioRest (novi proizvod).
        'fisiorest'               => array( 'orto-fisiorest', 'fisiorest' ),
        'norikshers'              => array( 'orto-norikshers', 'orto-noriks-hers', 'norikshers' ),
        // Bambelle nosiljka za bebe/malisane (sling carrier).
        'nosilka'                 => array( 'orto-nosilka', 'nosilka', 'nosiljka' ),
        // KidsNest djecji jastuk za pravilno disanje/drzanje (Needo-style).
        'kidsnest'                => array( 'orto-kidsnest', 'kidsnest' ),
        // ErgoSit orthopedic pillow (ortopedski jastuk) — no colour/size, quantity-only bundle.
        'ortopedski-jastuk'       => array( 'orto-ortopedski-jastuk', 'ortopedski-jastuk' ),
        // Polar NORIKS Cloth — krpa za ciscenje (mikrovlakna), bez atributa.
        'cloath'                  => array( 'orto-cloath' ),
        'cloud'                   => array( 'orto-cloud' ),
        'snore'                   => array( 'orto-snore' ),
        // NORIKS BRA — grudnjak s prednjim zakopcavanjem i potporom drzanja.
        'bra'                     => array( 'orto-bra' ),
        // NORIKS HYD — boca za vodikovu vodu (PEM/SPE elektroliza), bez atributa.
        'hyd'                     => array( 'orto-hyd' ),
        // KneeFix ortopedska steznica za koljeno.
        'kneefix'                 => array( 'orto-kneefix' ),
        // NORIKS Seal — rucni vakuumski aparat za hranu (bez atributa).
        'seal'                    => array( 'orto-seal', 'seal' ),
        // NORIKS FlexShirt — rastezljiva kosulja (boja + velicina + rukav).
        'sr'                      => array( 'orto-sr', 'sr' ),
        // NORIKS Home — vakuumske kuke (samo boja).
        'home'                    => array( 'orto-home', 'home' ),
        // NORIKS RED — omotac za zapesce s terapijom crvenim svjetlom (bez atributa).
        'red'                     => array( 'orto-red', 'red' ),
        // NORIKS Snug — jastuk za cijelo tijelo u S-obliku (samo boja).
        'snug'                    => array( 'orto-snug', 'snug' ),
        // NORIKS FIT Woman — oblikujuca majica (boja + velicina).
        'kompwom'                 => array( 'orto-kompwom', 'kompwom' ),
        // NORIKS Pal — stap za hodanje (bez atributa).
        'pal'                     => array( 'orto-pal', 'pal' ),
        // NORIKS Slim — oblikujuce gacice visokog struka (boja + velicina).
        'slim'                    => array( 'orto-slim', 'slim' ),
        // NORIKS Bowl — povisena zdjelica za pse s nagibom 15° (bez atributa).
        'bowl'                    => array( 'orto-bowl', 'bowl' ),
        // NORIKS Relief — bambusove kompresijske carape bez prstiju (samo velicina).
        'relief'                  => array( 'orto-relief', 'relief' ),
        // NORIKS GelSeat — gel jastuk za sjedenje (bez atributa).
        'gelseat'                 => array( 'orto-gelseat', 'gelseat' ),
        // NORIKS KneeTape — vec izrezana kinezioloska traka za koljeno (samo boja).
        'kneetape'                => array( 'orto-kneetape', 'kneetape' ),
        // NORIKS CelLeg — 3D kompresijske tajice protiv celulita (boja + velicina).
        'celleg'                  => array( 'orto-celleg', 'celleg' ),
        // NORIKS StepCloud — masazni ulosci s potporom svoda (boja + velicina).
        'stepcloud'               => array( 'orto-stepcloud', 'stepcloud' ),
        // NORIKS Hugger — nosivi termofor (samo boja).
        'hug'                     => array( 'orto-hug', 'hug' ),
        // NORIKS Pre — jastuk za trudnice (bez atributa).
        'pre'                     => array( 'orto-pre', 'pre' ),
        // NORIKS KneeHeat — grijac, kompresija i masaza koljena (bez atributa).
        'kneeheat'                => array( 'orto-kneeheat', 'kneeheat' ),
        // NORIKS LIFT — kolagenski zavoj za oblikovanje lica (bez atributa).
        'lift'                    => array( 'orto-lift', 'lift' ),
        // ControlPro trener dna zdjelice (Kegel trainer s otporom) — bez atributa.
        'controlpro'              => array( 'orto-controlpro', 'controlpro' ),
        // NORIKS Cards — zvucni uredaj s karticama za ucenje engleskog.
        'noriks-cards'            => array( 'orto-cards', 'noriks-cards', 'orto-noriks-cards' ),
        // NORIKSHERS Cool Curl Pencil — stiler za ravnanje i kovrcanje.
        'norikshersbrush'         => array( 'orto-norikshersbrush', 'norikshersbrush' ),
        // NORIKS HERS HairMagic+ — puder za liniju kose.
        'hairmagic'               => array( 'orto-norikshershairmagic', 'hairmagic' ),
        // NORIKS Pro — ultrazvučni čistač zubnih pomagala.
        'dental'                  => array( 'noriks-dental', 'orto-dental' ),
        'leakboxers'              => array( 'orto-leak-boxers', 'leak-boxers' ),
        'kompresijske-majice'     => array( 'orto-kompresijske-majice', 'kompresijske-majice' ),
        'majica-darila'           => array( 'orto-majica-darila', 'majica-darila' ),
        'bokserice-ispod-kupacih' => array( 'bokserice-savrsene-za-ispod-kupacih' ),
        'singles-boxers'          => array( 'singles-boxers' ),
        'bokserice-1-komad'       => array( '1-komad-bokserice' ),
        'majice-1-komad'          => array( '1-komad-majice' ),
        'majice-bokserice-paketi' => array( 'majice-i-bokserice-paketi' ),
        'black-friday'            => array( 'black-friday' ),
        'orto'                    => array( 'orto' ),
    );
}

endif;

if ( ! function_exists( 'noriks_primary_types' ) ) :

/**
 * Primary types, in resolution priority order (used by noriks_product_type()).
 */
function noriks_primary_types() : array {
    return array( 'starter', 'majice', 'bokserice', 'carape' );
}

endif;

if ( ! function_exists( 'noriks_resolve_product_id' ) ) :

/**
 * Resolve the product id to test. Defaults to the current product / post.
 */
function noriks_resolve_product_id( $product_id = null ) : int {
    if ( $product_id ) {
        return (int) $product_id;
    }
    if ( function_exists( 'is_product' ) && is_product() ) {
        return (int) get_queried_object_id();
    }
    return (int) get_the_ID();
}

endif;

if ( ! function_exists( 'noriks_is_type' ) ) :

/**
 * Does the product belong to the given type? (category based)
 *
 * @param string   $type       one of the keys in noriks_product_type_map()
 * @param int|null $product_id  defaults to current product
 */
function noriks_is_type( string $type, $product_id = null ) : bool {
    $map = noriks_product_type_map();
    if ( empty( $map[ $type ] ) ) {
        return false;
    }
    $product_id = noriks_resolve_product_id( $product_id );
    if ( ! $product_id ) {
        return false;
    }
    return has_term( $map[ $type ], 'product_cat', $product_id );
}

endif;

if ( ! function_exists( 'noriks_product_type' ) ) :

/**
 * First matching PRIMARY type for the product, or '' when none match.
 */
function noriks_product_type( $product_id = null ) : string {
    $product_id = noriks_resolve_product_id( $product_id );
    foreach ( noriks_primary_types() as $type ) {
        if ( noriks_is_type( $type, $product_id ) ) {
            return $type;
        }
    }
    return '';
}

endif;

/* ------------------------------------------------------------------
 * Convenience semantic helpers for composites used across the theme.
 * ------------------------------------------------------------------ */

if ( ! function_exists( 'noriks_is_black_friday' ) ) :

function noriks_is_black_friday( $product_id = null ) : bool {
    return noriks_is_type( 'black-friday', $product_id );
}

endif;

if ( ! function_exists( 'noriks_is_bokserice_page' ) ) :

/**
 * "Real" bokserice product page: bokserice, but not a black-friday
 * or majice+bokserice mixed paket. Mirrors woocommerce/single-product/meta.php.
 */
function noriks_is_bokserice_page( $product_id = null ) : bool {
    return noriks_is_type( 'bokserice', $product_id )
        && ! noriks_is_black_friday( $product_id )
        && ! noriks_is_type( 'majice-bokserice-paketi', $product_id );
}

endif;

if ( ! function_exists( 'noriks_is_mixed_bundle' ) ) :

/**
 * Mixed / bundle products: starter, majica+bokserica paket, black friday.
 */
function noriks_is_mixed_bundle( $product_id = null ) : bool {
    return noriks_is_type( 'black-friday', $product_id )
        || noriks_is_type( 'majice-bokserice-paketi', $product_id )
        || noriks_is_type( 'starter', $product_id );
}

endif;

if ( ! function_exists( 'noriks_slim_sizes' ) ) {
    /** NORIKS Slim: velicina, EU velicina, opseg struka — ena tabela za akordeon in modal. */
    function noriks_slim_sizes() {
        return array(
            array( 'XS',  '32 – 34', '64 – 69 cm' ),
            array( 'S',   '36',      '71 – 74 cm' ),
            array( 'M',   '38 – 40', '76 – 81 cm' ),
            array( 'L',   '42 – 44', '86 – 94 cm' ),
            array( 'XL',  '46 – 48', '99 – 104 cm' ),
            array( '2XL', '50 – 52', '107 – 112 cm' ),
            array( '3XL', '54 – 56', '114 – 118 cm' ),
            array( '4XL', '58 – 60', '119 – 122 cm' ),
            array( '5XL', '62 – 64', '124 – 127 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_relief_sizes' ) ) {
    /** NORIKS Relief: velicina, EU broj obuce — jedna tablica za akordeon i modal. */
    function noriks_relief_sizes() {
        return array(
            array( 'S',   '32 – 40 cm' ),
            array( 'M',   '40 – 48 cm' ),
            array( 'L',   '48 – 54 cm' ),
            array( 'XL',  '54 – 59 cm' ),
            array( '2XL', '59 – 64 cm' ),
            array( '3XL', '64 – 72 cm' ),
            array( '4XL', '72 – 80 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_celleg_sizes' ) ) {
    /** NORIKS CelLeg: velicina, opseg struka, opseg bokova. */
    function noriks_celleg_sizes() {
        return array(
            array( 'XS',  '56 – 62 cm',   '80 – 86 cm' ),
            array( 'S',   '62 – 68 cm',   '86 – 92 cm' ),
            array( 'M',   '68 – 74 cm',   '92 – 98 cm' ),
            array( 'L',   '74 – 82 cm',   '98 – 106 cm' ),
            array( 'XL',  '82 – 90 cm',   '106 – 114 cm' ),
            array( '2XL', '90 – 98 cm',   '114 – 122 cm' ),
            array( '3XL', '98 – 106 cm',  '122 – 130 cm' ),
            array( '4XL', '106 – 116 cm', '130 – 138 cm' ),
            array( '5XL', '116 – 126 cm', '138 – 146 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_stepcloud_sizes' ) ) {
    /** NORIKS StepCloud: EU broj obuce i duljina uloska (ulozak se po potrebi skrati). */
    function noriks_stepcloud_sizes() {
        return array(
            array( '35 – 36', '23,0 cm' ),
            array( '37 – 38', '24,5 cm' ),
            array( '39 – 40', '25,5 cm' ),
            array( '41 – 42', '27,0 cm' ),
            array( '43 – 44', '28,0 cm' ),
            array( '45 – 46', '29,5 cm' ),
            array( '47 – 48', '30,5 cm' ),
            array( '49 – 50', '32,0 cm' ),
        );
    }
}
