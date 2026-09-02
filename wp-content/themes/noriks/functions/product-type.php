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
