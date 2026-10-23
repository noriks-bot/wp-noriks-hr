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
        'flomasteri' => array( 'orto-flomasteri' ),
    'ortopas'                 => array( 'orto-ortopas', 'ortopas' ),
        // Bunion corrector (korektor čukljeva / halux valgus).
        'bunion'                  => array( 'orto-bunion', 'bunion' ),
        // FisioRest (novi proizvod).
        'fisiorest'               => array( 'orto-fisiorest', 'fisiorest' ),
        'giovasa'                 => array( 'orto-giovasa' ),
        // FieldOps Pro taktične slušalke
        'fieldops'                => array( 'orto-fieldops' ),
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
        'ondersteun'              => array( 'orto-ondersteun' ),
        'destapacan'              => array( 'orto-destapacan' ),
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
        'buildshirt'              => array( 'orto-buildshirt', 'buildshirt' ),
        'kneebrace'               => array( 'orto-kneebrace', 'kneebrace' ),
        // NORIKS Hands — stabilizator palca / CMC zgloba (boja + velicina).
        'hands'                   => array( 'orto-hands', 'hands' ),
        // NORIKS StepCloud — masazni ulosci s potporom svoda (boja + velicina).
        'stepcloud'               => array( 'orto-stepcloud', 'stepcloud' ),
        // NORIKS SlabProof — radne carape s jastucenjem za beton (boja + velicina).
        'slabproof'               => array( 'orto-slabproof', 'slabproof' ),
        // NORIKS Insoles — ortopedski ulosci s potporom svoda (velicina XS-XL).
        'insoles'                 => array( 'orto-insoles', 'insoles' ),
        // NORIKS Brassiere — grudnjak bez zica s prirodnim podizanjem (boja + velicina).
        'brassiere'               => array( 'orto-brassiere', 'brassiere' ),
        // NORIKS Blanket — kompresijska vreca za smirenje i bolji san (boja + velicina).
        'blanket'                 => array( 'orto-blanket', 'blanket' ),
        // NORIKS BraTank — majica s ugradenim grudnjakom bez trake (boja + velicina).
        'bratank'                 => array( 'orto-bratank', 'bratank' ),
        // NORIKS Polo — udobna muska polo majica od rastezljivog pletiva (boja + velicina).
        'polo'                    => array( 'orto-polo', 'polo' ),
        // NORIKS Raincoat — kratka oversized kisna jakna s kapuljacom (boja, jedna velicina).
        'raincoat'                => array( 'orto-raincoat', 'raincoat' ),
        // NORIKS TitaniumPan — titanijska kovana tava bez premaza (velicina 26 / 28 / 30 cm).
        'titaniumpan'             => array( 'orto-titaniumpan', 'titaniumpan' ),
        // NORIKS Harness — oprsnica za pse protiv povlacenja s prednjom i straznjom kopcom (boja + velicina XS-XL).
        'harness'                 => array( 'orto-harness', 'harness' ),
        // NORIKS SeatCover — vodootporna presvlaka za autosjedalo od frotira (8 boja, bez velicina).
        'seatcover'               => array( 'orto-seatcover', 'seatcover' ),
        // NORIKS CorkSandals — ljetne sandale od pluta s uloskom od antilopa (boja + velicina EU 36-46).
        'corksandals'             => array( 'orto-corksandals', 'corksandals' ),
        // NORIKS AnkleSleeve — kompresijska potpora za glezanj (velicina S/M/L po broju cipele, ena barva).
        'anklesleeve'             => array( 'orto-anklesleeve', 'anklesleeve' ),
        // NORIKS Slippers — tople papuce s debelim potplatom za kucu i van (boja + velicina EU 34-35 do 48-49).
        'slippers'                => array( 'orto-slippers', 'slippers' ),
        // NORIKS FloatSuit — djecji kupaci kostim s ugradenim plovcima (stil + velicina).
        'floatsuit'               => array( 'orto-floatsuit', 'floatsuit' ),
        // NORIKS PhoneStrap — drzac za mobitel protiv ispadanja (bez atributa, bez velicin).
        'phonestrap'              => array( 'orto-phonestrap', 'phonestrap' ),
        // NORIKS WineCooler — štapić za hlađenje vina s izljevom (bez atributa, bez velicin).
        'winecooler'              => array( 'orto-winecooler', 'winecooler' ),
        // NORIKS Bracelet — narukvica od hematita (bez atributa, jedna veličina 19–21,5 cm).
        'bracelet'                => array( 'orto-bracelet', 'bracelet' ),
        // NORIKS Doggo — sigurnosni autokrevet za pse s ISOFIX kopcama (boja + velicina M / XL).
        'doggo'                   => array( 'orto-doggo', 'doggo' ),
        // NORIKS SupportSocks — potporne čarape 12–15 mmHg (boja + veličina).
        'supportsocks'            => array( 'orto-supportsocks', 'supportsocks' ),
        // NORIKS Tuck — oblikujuce kratke hlacice visokog struka (boja + velicina).
        'tuck'                    => array( 'orto-tuck', 'tuck' ),
        // NORIKS FleeceTights — tople hulahopke s flisom koje izgledaju kao koza (boja + velicina XXS/XS–4XL/5XL).
        'fleecetights'            => array( 'orto-fleecetights', 'fleecetights' ),
        // NORIKS SculptBrief — oblikujuce gacice visokog struka s 360° krizim pojasom (boja + velicina XS–5XL).
        'sculptbrief'             => array( 'orto-sculptbrief', 'sculptbrief' ),
        // NORIKS SmartJacket — reflektirajuca vodootporna zenska jakna 3 u 1 (boja + velicina XS–4XL).
        'smartjacket'             => array( 'orto-smartjacket', 'smartjacket' ),
        // NORIKS UtilityPants — rastezljive vodootporne radne hlace s 10 dzepova (boja + velicina S–3XL).
        'utilitypants'            => array( 'orto-utilitypants', 'utilitypants' ),
        // NORIKS Hoodie — nosiva deka s kapuljacom i krznom (boja + velicina po visini).
        'hoodie'                  => array( 'orto-hoodie', 'hoodie' ),
        // NORIKS CatFountain — fontana za macke od nehrdajuceg celika 2,2 L (bez atributov).
        'catfountain'             => array( 'orto-catfountain', 'catfountain' ),
        // NORIKS DishSheets — listici za pranje posuda (bez atributov, paketi 1x/3x/6x).
        'dishsheets'              => array( 'orto-dishsheets', 'dishsheets' ),
        // NORIKS LitterBox — automatska samocisteca posuda za macji pijesak (samo boja).
        'litterbox'               => array( 'orto-litterbox', 'litterbox' ),
        // NORIKS SleepEarplugs — cepici za usi za spavanje na boku (samo boja).
        'sleepearplugs'           => array( 'orto-sleepearplugs', 'sleepearplugs' ),
        // NORIKS TravelPillow — putni jastuk za vrat od memorijske pjene (samo boja).
        'travelpillow'            => array( 'orto-travelpillow', 'travelpillow' ),
        // NORIKS OrthoMules — ortopedske pletene natikace s remenom (boja + velicina EU 35–43).
        'orthomules'              => array( 'orto-orthomules', 'orthomules' ),
        // NORIKS WideToeShoes — tenisice sa sirokim prednjim dijelom (boja + velicina EU 37–47).
        'widetoeshoes'            => array( 'orto-widetoeshoes', 'widetoeshoes' ),
        // NORIKS HikingShoes — barefoot pohodne cipele od brusene koze (boja + velicina EU 36–46).
        'hikingshoes'             => array( 'orto-hikingshoes', 'hikingshoes' ),
        // NORIKS HoodieDress — oversized haljina s kapuljacom (boja 13 + velicina S–3XL).
        'hoodiedress'             => array( 'orto-hoodiedress', 'hoodiedress' ),
        // NORIKS MinimizerBra — rashladujuci minimizer grudnjak s punim pokricem (boja 4 + velicina 70C–115G, 74 velicine).
        'minimizerbra'            => array( 'orto-minimizerbra', 'minimizerbra' ),
        // NORIKS TechTee — ikonicna muska majica s okruglim izrezom (boja + velicina S–4XL).
        'techtee'                 => array( 'orto-techtee', 'techtee' ),
        // NORIKS FleeceShawl — mekani sal-ogrtac od flisa (samo boja, 11 boja; jedna velicina 158 x 110 cm, brez tablice).
        'fleeceshawl'             => array( 'orto-fleeceshawl', 'fleeceshawl' ),
        // NORIKS BottleSling — izolirana torbica za termo casu s naramenicom (samo boja, 15 boja; jedna velicina 25 x 8 x 7,5 cm, brez tablice).
        'bottlesling'             => array( 'orto-bottlesling', 'bottlesling' ),
        // NORIKS ShowerTowel — antibakterijski rucnik za piling tijela (samo boja: crna, roza, plava, bijela; jedna velicina 122 cm, brez tablice).
        'showertowel'             => array( 'orto-showertowel', 'showertowel' ),
        // NORIKS PetDental — sprej za njegu zubi pasa i macaka (brez atributov; ponudbe 1x/2x/3x kom, brez tablice).
        'petdental'               => array( 'orto-petdental', 'petdental' ),
        // NORIKS CalmingCollar — umirujuca ovratnica s feromonima za macke (brez atributov; ponudbe 1x/3x/5x kom kot Kaching originala, brez tablice).
        'calmingcollar'           => array( 'orto-calmingcollar', 'calmingcollar' ),
        // NORIKS TheraPillow — terapijski jastuk za vrat 3 u 1 (brez atributov; ponudbi 1x/2x kom kot paketa originala, brez tablice).
        'therapillow'             => array( 'orto-therapillow', 'therapillow' ),
        // NORIKS VacuumSealer — bezicni rucni vakuumski aparat za hranu (en izbirnik Velicina pakiranja 10/20/30 vrecic s cenami originala, brez tablice).
        'vacuumsealer'            => array( 'orto-vacuumsealer', 'vacuumsealer' ),
        // NORIKS SilkBoxers — svilene bokserice za cjelodnevnu udobnost (samo velicina M–3XL, tamnoplava).
        'silkboxers'              => array( 'orto-silkboxers', 'silkboxers' ),
        // NORIKS ModalSweatshirt — dukserica od modala s okruglim izrezom (boja + velicina S–3XL).
        'modalsweatshirt'         => array( 'orto-modalsweatshirt', 'modalsweatshirt' ),
        // NORIKS MaternityLeggings — tajice za trudnice (boja + velicina S–XXL).
        'maternityleggings'       => array( 'orto-maternityleggings', 'maternityleggings' ),
        // NORIKS DogRaincoat — prozracna kabanica za pse (boja + velicina S–4XL).
        'dograincoat'             => array( 'orto-dograincoat', 'dograincoat' ),
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
        // NORIKS Viinia — viinijaahdytin / stap za hladenje vina.
        'viinia'                  => array( 'orto-viinia', 'viinia' ),
        'birdie'                  => array( 'orto-birdie', 'birdie' ),
        'majice-bokserice-paketi' => array( 'majice-i-bokserice-paketi' ),
        'black-friday'            => array( 'black-friday' ),
        'orto'                    => array( 'orto' ),
        'calendar'                => array( 'orto-calendar', 'calendar' ),
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

if ( ! function_exists( 'noriks_buildshirt_sizes' ) ) {
    /** NORIKS BuildShirt: velicina, opseg grudi, opseg struka, duzina. */
    function noriks_buildshirt_sizes() {
        return array(
            array( 'XS',  'do 86 cm',    'do 69 cm',    '53 cm' ),
            array( 'S',   '86 – 91 cm',  '69 – 74 cm',  '54 cm' ),
            array( 'M',   '91 – 97 cm',  '74 – 79 cm',  '55 cm' ),
            array( 'L',   '97 – 103 cm', '79 – 84 cm',  '56 cm' ),
            array( 'XL',  '103 – 108 cm','84 – 89 cm',  '57 cm' ),
            array( '2XL', '108 – 113 cm','89 – 94 cm',  '58 cm' ),
            array( '3XL', '113 – 118 cm','94 – 99 cm',  '59 cm' ),
            array( '4XL', '118 – 126 cm','99 – 105 cm', '60 cm' ),
            array( '5XL', '126 – 133 cm','105 – 113 cm','60 cm' ),
            array( '6XL', '133 – 142 cm','113 – 121 cm','60 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_hands_sizes' ) ) {
    /** NORIKS Hands: velicina, opseg dlana. */
    function noriks_hands_sizes() {
        return array(
            array( 'S', '17,8 – 19,1 cm' ),
            array( 'M', '19,1 – 21,6 cm' ),
            array( 'L', '21,6 – 22,9 cm' ),
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

if ( ! function_exists( 'noriks_slabproof_sizes' ) ) {
    /** NORIKS SlabProof: velicina, EU broj obuce, US muski broj (original). */
    function noriks_slabproof_sizes() {
        return array(
            array( 'M',  '39 – 42', '6 – 9' ),
            array( 'L',  '43 – 45', '9,5 – 12' ),
            array( 'XL', '46 – 49', '12,5 – 15' ),
        );
    }
}

if ( ! function_exists( 'noriks_brassiere_sizes' ) ) {
    /** NORIKS Brassiere: velicina, sirina trake, opseg grudi, klasicni ekvivalent (original, XS–5XL). */
    function noriks_brassiere_sizes() {
        return array(
            array( 'XS',  '26 cm', '77 – 83 cm',   '80 (A/B)' ),
            array( 'S',   '28 cm', '82 – 88 cm',   '85 (B/C)' ),
            array( 'M',   '30 cm', '87 – 93 cm',   '90 (B/C)' ),
            array( 'L',   '32 cm', '92 – 98 cm',   '95 (C/D)' ),
            array( 'XL',  '34 cm', '97 – 103 cm',  '100 (C/D)' ),
            array( '2XL', '36 cm', '102 – 108 cm', '105 (D/E)' ),
            array( '3XL', '38 cm', '107 – 113 cm', '110 (E/F)' ),
            array( '4XL', '40 cm', '112 – 118 cm', '115 (F/G)' ),
            array( '5XL', '42 cm', '117 – 123 cm', '120 (G/H)' ),
        );
    }
}

if ( ! function_exists( 'noriks_blanket_sizes' ) ) {
    /**
     * NORIKS Blanket: velicina, duljina, sirina, visina dijela za stopala, sirina kapuljace,
     * velicina odjece, visina tijela (original nestishop.com, nepotrosena vreca polozena ravno).
     */
    function noriks_blanket_sizes() {
        return array(
            array( 'Djeca S',   '130 cm', '30 cm', '22 cm', '22 cm', 'djeca 4–7 god.',                    'do 130 cm' ),
            array( 'Djeca L',   '150 cm', '39 cm', '26 cm', '23 cm', 'djeca 8–12 god.',                   '130–150 cm' ),
            array( 'Odrasli S', '170 cm', '44 cm', '28 cm', '27 cm', 'žene EU 34–40, muškarci S–M',        '150–170 cm' ),
            array( 'Odrasli L', '185 cm', '49 cm', '31 cm', '27 cm', 'žene EU 42–46, muškarci L–XXL',      '170–185 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_bratank_sizes' ) ) {
    /** NORIKS BraTank: velicina, opseg grudi, kosarica (original lunara-comfort.com, S–4XL). */
    function noriks_bratank_sizes() {
        return array(
            array( 'S',   '76 – 80 cm',   'A – C' ),
            array( 'M',   '81 – 85 cm',   'A – C' ),
            array( 'L',   '86 – 91 cm',   'A – DD' ),
            array( 'XL',  '92 – 97 cm',   'B – DD' ),
            array( '2XL', '98 – 103 cm',  'B – DD' ),
            array( '3XL', '104 – 109 cm', 'B – G' ),
            array( '4XL', '110 – 115 cm', 'B – G' ),
        );
    }
}

if ( ! function_exists( 'noriks_floatsuit_sizes' ) ) {
    /** NORIKS FloatSuit: velicina, duljina, opseg prsa, opseg bokova, dob (original floatbuds.shop, 90–120). */
    function noriks_floatsuit_sizes() {
        return array(
            array( '12-18 mjeseci', '90',  '44 cm', '51 cm', '49 cm' ),
            array( '2-3 godine',    '100', '48 cm', '54 cm', '52 cm' ),
            array( '3-4 godine',    '110', '52 cm', '57 cm', '55 cm' ),
            array( '5-6 godina',    '120', '56 cm', '60 cm', '58 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_supportsocks_sizes' ) ) {
    /** NORIKS SupportSocks: velicina prema broju cipela (original diasocks.no: M 36–39, L 40–43, XL 44–46). */
    function noriks_supportsocks_sizes() {
        return array(
            array( 'M',  '36–39' ),
            array( 'L',  '40–43' ),
            array( 'XL', '44–46' ),
        );
    }
}

if ( ! function_exists( 'noriks_tuck_sizes' ) ) {
    /** NORIKS Tuck: velicina, EU velicina, UK/AU, struk (cm), bokovi (cm), duljina nogavice
     *  (original bellashapewear.com: US pants 4–18, mjere u incima pretvorene u cm). */
    function noriks_tuck_sizes() {
        return array(
            array( 'S',   '34–36', '8–10',  '69–71', '94–97',   '39 cm' ),
            array( 'M',   '38–40', '12–14', '72–77', '98–102',  '41 cm' ),
            array( 'L',   '40–42', '14–16', '79–81', '103–107', '43 cm' ),
            array( 'XL',  '44–46', '18–20', '83–88', '108–113', '45 cm' ),
            array( 'XXL', '46–48', '20–22', '89–94', '114–119', '47 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_polo_sizes' ) ) {
    /** NORIKS Polo: velicina, ITM (indeks tjelesne mase), tjelesna tezina pri visini 170 / 180 / 190 cm.
     *  Original wearbreeze.co nema tablice mjera, samo kalkulator "Find my size" (visina + tezina -> ITM):
     *  < 20 S, 20–23 M, 23–26 L, 26–29 XL, 29–32 2XL, 32–35 3XL, 35–38 4XL, 38+ 5XL;
     *  ispod 165 cm broj manje, iznad 190 cm broj vise; vitka gradja −1,5 ITM, krupnija +1,5 ITM.
     *  Tezine su izracunate iz tih granica (ITM × visina²), zaokruzeno na kg. */
    function noriks_polo_sizes() {
        return array(
            array( 'S',   'do 20',   'do 58 kg',     'do 65 kg',     'do 72 kg' ),
            array( 'M',   '20 – 23', '58 – 66 kg',   '65 – 75 kg',   '72 – 83 kg' ),
            array( 'L',   '23 – 26', '66 – 75 kg',   '75 – 84 kg',   '83 – 94 kg' ),
            array( 'XL',  '26 – 29', '75 – 84 kg',   '84 – 94 kg',   '94 – 105 kg' ),
            array( '2XL', '29 – 32', '84 – 92 kg',   '94 – 104 kg',  '105 – 116 kg' ),
            array( '3XL', '32 – 35', '92 – 101 kg',  '104 – 113 kg', '116 – 126 kg' ),
            array( '4XL', '35 – 38', '101 – 110 kg', '113 – 123 kg', '126 – 137 kg' ),
            array( '5XL', '38+',     '110+ kg',      '123+ kg',      '137+ kg' ),
        );
    }
}

if ( ! function_exists( 'noriks_raincoat_sizes' ) ) {
    /** NORIKS Raincoat: velicina, EU, UK, US, duljina, opseg grudi, duljina rukava (mjere jakne).
     *  1:1 s tablice originala puffit.com ("Garment measurement details", size F = jedna velicina). */
    function noriks_raincoat_sizes() {
        return array(
            array( 'Jedna veličina', '36–50', '8–22', '4–18', '60 cm', '155 cm', '75 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_titaniumpan_sizes' ) ) {
    /** NORIKS TitaniumPan: velicina, promjer, porcije, jaja, za koga.
     *  1:1 z vodica velikosti originala siraatskitchen.com (26 cm Solo / 28 cm Most Popular / 30 cm Family). */
    function noriks_titaniumpan_sizes() {
        return array(
            array( '26 cm', '26 cm (10")', '1–2 porcije', '2–3 jaja', 'Za jednu osobu' ),
            array( '28 cm', '28 cm (11")', '2–3 porcije', '4–5 jaja', 'Najpopularnija' ),
            array( '30 cm', '30 cm (12")', '3–4 porcije', '6–8 jaja', 'Za obitelj' ),
        );
    }
}

if ( ! function_exists( 'noriks_harness_sizes' ) ) {
    /** NORIKS Harness: velicina, opseg prsa (cm), pasmine.
     *  1:1 s tablice velicin originala paropet.co.uk ("Size Guide": XS-XL, opseg prsa iza prednjih nogu). */
    function noriks_harness_sizes() {
        return array(
            array( 'XS', '38–46 cm', 'čivava, jorkširski terijer, pomeranac, toy pudla, maltezer, papijon, talijanski hrt (manji), patuljasti jazavčar (manji), kineski kukmasti pas, afenpinč' ),
            array( 'S',  '44–55 cm', 'jack russell terijer, cavapoo, cockapoo (manji), shih tzu, mops, patuljasti šnaucer, west highland terijer, francuski buldog, bostonski terijer, lhasa apso, bišon, border terijer, norfolk terijer' ),
            array( 'M',  '55–67 cm', 'koker španijel, beagle, stafordski bul terijer, whippet, cockapoo (standardni), springer španijel (manji), velški springer španijel, bedlington terijer, basenji, mini labradoodle' ),
            array( 'L',  '67–84 cm', 'labrador retriver (vitki / ženka), border koli, engleski springer španijel, standardna pudla, bokser, vižla, vajmarski ptičar (manji), dalmatinac, australski ovčar, škotski ovčar (koli)' ),
            array( 'XL', '80–107 cm', 'labrador retriver (veći), zlatni retriver, njemački ovčar, rotvajler, doberman, sibirski haski, aljaški malamut, akita, rodezijski gonič, cane corso' ),
        );
    }
}

if ( ! function_exists( 'noriks_orthomules_sizes' ) ) {
    /** NORIKS OrthoMules: EU velicina, US zene, UK.
     *  1:1 s tablice velicin originala bomre.com (Kiwi "Women Main": US 4–12 -> EU 35–43; original nima duljine stopala v cm). */
    function noriks_orthomules_sizes() {
        return array(
            array( 'EU 35', '4–4,5', '2–2,5' ),
            array( 'EU 36', '5–5,5', '3–3,5' ),
            array( 'EU 37', '6–6,5', '4–4,5' ),
            array( 'EU 38', '7–7,5', '5–5,5' ),
            array( 'EU 39', '8–8,5', '6–6,5' ),
            array( 'EU 40', '9–9,5', '7–7,5' ),
            array( 'EU 41', '10–10,5', '8–8,5' ),
            array( 'EU 42', '11–11,5', '9–9,5' ),
            array( 'EU 43', '12', '10' ),
        );
    }
}

if ( ! function_exists( 'noriks_dograincoat_sizes' ) ) {
    /** NORIKS DogRaincoat: velicina, opseg prsa (cm), duljina leda (cm), tezina psa (kg).
     *  1:1 s tablice velicin originala (sparkpaws.com, »Dog Apparel Size Guide« za kabanicu, CM) in slike
     *  »Find your dog's size« (5–115 lbs -> kg). Savjet originala: ako je pas izmedu dvije velicine, odaberite vecu. */
    function noriks_dograincoat_sizes() {
        return array(
            array( 'S',   '38 cm', '26 cm', '2 – 5 kg' ),
            array( 'M',   '46 cm', '30 cm', '5 – 7 kg' ),
            array( 'L',   '54 cm', '36 cm', '7 – 11 kg' ),
            array( 'XL',  '61 cm', '41 cm', '11 – 18 kg' ),
            array( '2XL', '66 cm', '48 cm', '18 – 27 kg' ),
            array( '3XL', '76 cm', '53 cm', '27 – 36 kg' ),
            array( '4XL', '84 cm', '56 cm', '36 – 52 kg' ),
        );
    }
}

if ( ! function_exists( 'noriks_dograincoat_breeds' ) ) {
    /** NORIKS DogRaincoat: velicina po pasmini (1:1 s »Size by Breed« originala, kg). pasmina => array( array( velicina, kg ), … ). */
    function noriks_dograincoat_breeds() {
        return array(
            'Američki buldog'                 => array( array( '3XL', '27–36' ), array( '4XL', '36–52' ) ),
            'Američki stafordski terijer'     => array( array( '2XL', '18–25' ), array( '3XL', '25–32' ) ),
            'Australski govedarski pas'       => array( array( '2XL', '14–20' ), array( '3XL', '20–27' ) ),
            'Australski ovčar'                => array( array( '2XL', '14–20' ), array( '3XL', '20–27' ), array( '4XL', '27–36' ) ),
            'Basenji'                         => array( array( 'L', '7–11' ), array( 'XL', '11–18' ) ),
            'Baset'                           => array( array( '2XL', '14–20' ), array( '3XL', '20–27' ), array( '4XL', '27–36' ) ),
            'Beagle'                          => array( array( 'L', '7–11' ), array( 'XL', '11–16' ), array( '2XL', '16–20' ) ),
            'Belgijski ovčar malinois'        => array( array( '3XL', '20–27' ), array( '4XL', '27–36' ) ),
            'Bišon'                           => array( array( 'M', '5–7' ), array( 'L', '7–11' ) ),
            'Bladhaund'                       => array( array( '4XL', '27–36' ) ),
            'Border koli'                     => array( array( 'XL', '9–14' ), array( '2XL', '14–20' ), array( '3XL', '20–27' ) ),
            'Bostonski terijer'               => array( array( 'M', '5–7' ), array( 'L', '7–11' ), array( 'XL', '11–16' ) ),
            'Bokser'                          => array( array( '3XL', '27–36' ), array( '4XL', '36–52' ) ),
            'Bretonski španijel'              => array( array( 'XL', '9–14' ), array( '2XL', '14–20' ), array( '3XL', '20–27' ) ),
            'Bulterijer'                      => array( array( 'XL', '14–20' ), array( '2XL', '20–27' ), array( '3XL', '27–36' ) ),
            'Cane corso'                      => array( array( '3XL', '27–36' ), array( '4XL', '36–52' ) ),
            'Cavalier King Charles španijel'  => array( array( 'M', '5–7' ), array( 'L', '7–11' ) ),
            'Čivava'                          => array( array( 'S', '2–5' ), array( 'M', '5–7' ) ),
            'Koker španijel'                  => array( array( 'L', '7–11' ), array( 'XL', '11–16' ) ),
            'Korgi'                           => array( array( 'XL', '9–14' ), array( '2XL', '14–18' ) ),
            'Jazavčar'                        => array( array( 'M', '5–7' ), array( 'L', '7–11' ) ),
            'Dalmatinac'                      => array( array( '2XL', '14–20' ), array( '3XL', '20–27' ), array( '4XL', '27–36' ) ),
            'Doberman'                        => array( array( '3XL', '27–36' ), array( '4XL', '36–52' ) ),
            'Engleski buldog'                 => array( array( '2XL', '18–23' ), array( '3XL', '23–30' ) ),
            'Engleski springer španijel'      => array( array( '2XL', '14–20' ), array( '3XL', '20–27' ) ),
            'Francuski buldog'                => array( array( 'M', '5–7' ), array( 'L', '7–11' ), array( 'XL', '11–16' ) ),
            'Njemački ovčar'                  => array( array( '3XL', '20–27' ), array( '4XL', '27–36' ) ),
            'Njemački kratkodlaki ptičar'     => array( array( '2XL', '14–20' ), array( '3XL', '20–27' ), array( '4XL', '27–36' ) ),
            'Zlatni retriver'                 => array( array( '3XL', '20–27' ), array( '4XL', '27–36' ) ),
            'Goldendoodle'                    => array( array( '2XL', '16–20' ), array( '3XL', '20–30' ) ),
            'Njemačka doga'                   => array( array( '4XL', '36–52' ) ),
            'Havanski bišon'                  => array( array( 'S', '2–5' ), array( 'M', '5–7' ) ),
            'Jack Russell terijer'            => array( array( 'M', '5–7' ), array( 'L', '7–11' ) ),
            'Labrador retriver'               => array( array( '3XL', '27–36' ), array( '4XL', '36–52' ) ),
            'Labradoodle'                     => array( array( '2XL', '16–20' ), array( '3XL', '20–30' ) ),
            'Maltezer'                        => array( array( 'M', '5–7' ), array( 'L', '7–11' ) ),
            'Mala pudlica'                    => array( array( 'M', '5–7' ), array( 'L', '7–11' ) ),
            'Mali američki ovčar'             => array( array( 'XL', '7–11' ), array( '2XL', '11–18' ) ),
            'Patuljasti pinč'                 => array( array( 'S', '2–5' ), array( 'M', '5–7' ) ),
            'Patuljasti šnaucer'              => array( array( 'M', '5–7' ), array( 'L', '7–11' ) ),
            'Pitbul'                          => array( array( '3XL', '27–36' ), array( '4XL', '36–52' ) ),
            'Pomeranac'                       => array( array( 'M', '5–7' ), array( 'L', '7–11' ) ),
            'Mops'                            => array( array( 'M', '5–7' ), array( 'L', '7–11' ), array( 'XL', '11–16' ) ),
            'Rodezijski gonič'                => array( array( '3XL', '20–27' ), array( '4XL', '27–36' ) ),
            'Rotvajler'                       => array( array( '3XL', '27–36' ), array( '4XL', '36–52' ) ),
            'Shar pei'                        => array( array( '2XL', '20–27' ), array( '3XL', '27–36' ) ),
            'Shiba inu'                       => array( array( 'L', '7–11' ), array( 'XL', '11–16' ) ),
            'Shih tzu'                        => array( array( 'M', '5–7' ), array( 'L', '7–11' ) ),
            'Sibirski haski'                  => array( array( '2XL', '14–20' ), array( '3XL', '20–27' ), array( '4XL', '27–36' ) ),
            'Stafordski bulterijer'           => array( array( 'XL', '14–20' ), array( '2XL', '20–27' ), array( '3XL', '27–36' ) ),
            'Standardna pudlica'              => array( array( '2XL', '20–27' ), array( '3XL', '27–36' ) ),
            'Vižla'                           => array( array( '2XL', '14–20' ), array( '3XL', '20–27' ), array( '4XL', '27–36' ) ),
            'Vajmarski ptičar'                => array( array( '2XL', '18–25' ), array( '3XL', '25–36' ), array( '4XL', '36–45' ) ),
            'Westie (zapadnoškotski terijer)' => array( array( 'M', '5–7' ), array( 'L', '7–11' ) ),
            'Jorkširski terijer'              => array( array( 'S', '2–5' ), array( 'M', '5–7' ) ),
        );
    }
}

if ( ! function_exists( 'noriks_maternityleggings_sizes' ) ) {
    /** NORIKS MaternityLeggings: velicina, konfekcijski broj (DE/HR), opseg bokova (cm), duljina nogavice (cm).
     *  1:1 s tablice velicin originala (sivara.de, »Größentabelle Leggings«). Savjet: uobicajena velicina prije
     *  trudnoce; izmedu dvije -> manja. */
    function noriks_maternityleggings_sizes() {
        return array(
            array( 'S',   '36',      '73 – 98 cm',  '97 cm' ),
            array( 'M',   '38',      '78 – 103 cm', '99 cm' ),
            array( 'L',   '40 – 42', '83 – 108 cm', '102 cm' ),
            array( 'XL',  '44 – 46', '88 – 113 cm', '104 cm' ),
            array( 'XXL', '48 – 50', '94 – 119 cm', '105 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_silkboxers_sizes' ) ) {
    /** NORIKS SilkBoxers: velicina, opseg struka (cm), opseg struka (inci).
     *  1:1 s slike »Your size, your fit« originala (aresunderwear.com, inci) — pretvorjeno v cm. */
    function noriks_silkboxers_sizes() {
        return array(
            array( 'M',   '76–81 cm',   '30–32' ),
            array( 'L',   '84–89 cm',   '33–35' ),
            array( 'XL',  '91–97 cm',   '36–38' ),
            array( '2XL', '99–104 cm',  '39–41' ),
            array( '3XL', '107–112 cm', '42–44' ),
        );
    }
}

if ( ! function_exists( 'noriks_modalsweatshirt_sizes' ) ) {
    /** NORIKS ModalSweatshirt: velicina, duljina leda, opseg prsa, opseg struka, duljina rukava (cm) — mjere proizvoda.
     *  1:1 s tablice originala (fioboc.com, »Product Measurements«, CM); odstupanje do 2 % zbog elasticnosti tkanine. */
    function noriks_modalsweatshirt_sizes() {
        return array(
            array( 'S',   '66,5 cm', '101 cm', '97 cm',  '61 cm' ),
            array( 'M',   '68 cm',   '106 cm', '102 cm', '62 cm' ),
            array( 'L',   '69,5 cm', '111 cm', '107 cm', '63 cm' ),
            array( 'XL',  '71 cm',   '116 cm', '112 cm', '64 cm' ),
            array( '2XL', '73 cm',   '124 cm', '120 cm', '65,5 cm' ),
            array( '3XL', '75 cm',   '132 cm', '128 cm', '67 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_techtee_sizes' ) ) {
    /** NORIKS TechTee: velicina, opseg prsa (cm), visina (cm), tezina (kg).
     *  Original (fincutmen.com) nima staticne tablice (samo kalkulator SIZETECH+); razponi so standardni za
     *  pripijeno musko majico in usklajeni s podatki originala (video: S 178 cm/66 kg, XL 192 cm/91 kg,
     *  2XL 184 cm/105 kg; mnenje 191 cm/105 kg -> 2XL). Savjet originala: uzmite uobicajenu velicinu. */
    function noriks_techtee_sizes() {
        return array(
            array( 'S',   '88 – 94 cm',   '165 – 180 cm', '55 – 68 kg' ),
            array( 'M',   '94 – 100 cm',  '170 – 183 cm', '65 – 77 kg' ),
            array( 'L',   '100 – 106 cm', '175 – 188 cm', '74 – 86 kg' ),
            array( 'XL',  '106 – 112 cm', '180 – 193 cm', '84 – 96 kg' ),
            array( '2XL', '112 – 118 cm', '182 – 196 cm', '94 – 107 kg' ),
            array( '3XL', '118 – 124 cm', '183 – 198 cm', '105 – 118 kg' ),
            array( '4XL', '124 – 132 cm', '185 – 200 cm', '116 – 130 kg' ),
        );
    }
}

if ( ! function_exists( 'noriks_widetoeshoes_sizes' ) ) {
    /** NORIKS WideToeShoes: EU velicina, duljina uloska (cm), sirina cipele (cm), UK, US muskarci, US zene.
     *  1:1 s tablice velicin originala (hobibear.com, Hareball). Duljina uloska = duljina stopala + 1–1,5 cm. */
    function noriks_widetoeshoes_sizes() {
        return array(
            array( 'EU 37', '23,8 cm', '8,80 cm', '4', '4,5', '5,5' ),
            array( 'EU 38', '24,4 cm', '8,95 cm', '5', '5,5', '6,5' ),
            array( 'EU 39', '25,0 cm', '9,10 cm', '6', '6,5', '7,5' ),
            array( 'EU 40', '25,7 cm', '9,25 cm', '6,5', '7', '8' ),
            array( 'EU 41', '26,4 cm', '9,40 cm', '7', '7,5', '8,5' ),
            array( 'EU 42', '27,0 cm', '9,55 cm', '8', '8,5', '9,5' ),
            array( 'EU 43', '27,7 cm', '9,70 cm', '9', '9,5', '10,5' ),
            array( 'EU 44', '28,4 cm', '9,85 cm', '9,5', '10', '11' ),
            array( 'EU 45', '29,0 cm', '10,00 cm', '10', '10,5', '11,5' ),
            array( 'EU 46', '29,7 cm', '10,15 cm', '11', '11,5', '12,5' ),
            array( 'EU 47', '30,5 cm', '10,30 cm', '12', '12,5', '13,5' ),
        );
    }
}

if ( ! function_exists( 'noriks_minimizerbra_sizes' ) ) {
    /** NORIKS MinimizerBra: traka EU, traka US, opseg ispod grudi (cm), opseg grudi (cm) po kosaricama B, C, D, E (DD), F (DDD), G, H, I.
     *  1:1 s tablice originala (sculptdclothing.com, »Find Your Fit – SCULPTD Size Chart«, palci -> cm, zaokruzeno);
     *  prazno polje = velicina se ne izraduje (AVAILABLE originala). Ako ste izmedu dvije velicine, uzmite vecu. */
    function noriks_minimizerbra_sizes() {
        return array(
            array( '70', '32', '60–64', array( '', '72–79', '75–82', '77–84', '80–87', '83–89', '85–91', '87–94' ) ),
            array( '75', '34', '64–68', array( '74–81', '76–83', '79–86', '82–88', '84–90', '87–93', '89–96', '91–98' ) ),
            array( '80', '36', '68–72', array( '78–85', '81–87', '83–89', '86–92', '88–94', '90–97', '93–100', '96–102' ) ),
            array( '85', '38', '72–76', array( '82–88', '85–91', '87–93', '89–96', '92–99', '94–101', '97–103', '100–106' ) ),
            array( '90', '40', '80–84', array( '90–97', '92–99', '95–102', '98–104', '100–106', '103–109', '105–112', '107–114' ) ),
            array( '95', '42', '84–88', array( '94–101', '97–103', '99–105', '102–108', '104–110', '106–113', '109–116', '112–118' ) ),
            array( '100', '44', '88–92', array( '98–104', '101–107', '103–109', '105–112', '108–115', '110–117', '113–119', '116–122' ) ),
            array( '105', '46', '92–96', array( '102–108', '104–111', '107–114', '109–116', '112–119', '115–121', '117–123', '' ) ),
            array( '110', '48', '96–100', array( '106–113', '108–115', '111–118', '114–120', '116–122', '119–125', '', '' ) ),
            array( '115', '50', '100–104', array( '110–117', '113–119', '115–121', '118–124', '120–126', '122–129', '', '' ) ),
        );
    }
}

if ( ! function_exists( 'noriks_hoodiedress_sizes' ) ) {
    /** NORIKS HoodieDress: velicina, EU velicina, opseg struka (cm), opseg prsa (cm).
     *  1:1 s tablice originala (the-warmy.com, Kiwi »Hoodie Dress Size Chart«, »Take your normal hoodie size.«):
     *  US 4-6 ... 24-26 -> EU (+30), struk iz palcev (in -> cm), prsa iz tablice »Measurements (CM)« originala. */
    function noriks_hoodiedress_sizes() {
        return array(
            array( 'S',   'EU 34–36', '58 – 71 cm',   '105 cm' ),
            array( 'M',   'EU 38–40', '64 – 81 cm',   '110 cm' ),
            array( 'L',   'EU 42–44', '69 – 89 cm',   '115 cm' ),
            array( 'XL',  'EU 46–48', '71 – 104 cm',  '122 cm' ),
            array( '2XL', 'EU 50–52', '89 – 112 cm',  '131 cm' ),
            array( '3XL', 'EU 54–56', '114 – 122 cm', '138 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_hikingshoes_sizes' ) ) {
    /** NORIKS HikingShoes: EU velicina, duljina stopala peta–prst (cm), UK, US zene, US muskarci.
     *  1:1 s tablice velicin originala (lonowear.com, WILD). Ako ste izmedu dvije velicine, odaberite manju. */
    function noriks_hikingshoes_sizes() {
        return array(
            array( 'EU 36', '22,0 – 22,6 cm', '3',   '5,5', '–' ),
            array( 'EU 37', '22,7 – 23,4 cm', '3,5', '6',   '–' ),
            array( 'EU 38', '23,5 – 24,1 cm', '4,5', '7',   '–' ),
            array( 'EU 39', '24,2 – 24,8 cm', '5,5', '8',   '–' ),
            array( 'EU 40', '24,9 – 25,5 cm', '6',   '8,5', '7,5' ),
            array( 'EU 41', '25,6 – 26,1 cm', '7,5', '9,5', '8,5' ),
            array( 'EU 42', '26,2 – 26,7 cm', '8',   '10',  '9' ),
            array( 'EU 43', '26,8 – 27,3 cm', '9',   '11',  '10' ),
            array( 'EU 44', '27,4 – 28,0 cm', '10',  '–',   '11' ),
            array( 'EU 45', '28,1 – 28,7 cm', '11',  '–',   '12' ),
            array( 'EU 46', '28,8 – 29,4 cm', '12',  '–',   '13' ),
        );
    }
}

if ( ! function_exists( 'noriks_slippers_sizes' ) ) {
    /** NORIKS Slippers: EU velicina, duljina stopala (cm), UK, US zene, US muskarci.
     *  1:1 s tablice velicin originala ("US Size Chart" + "UK & International Size Chart", 8 velicin). */
    function noriks_slippers_sizes() {
        return array(
            array( 'EU 34–35', '20,3–21,5 cm', '2–2,5', '3–4', '2–3' ),
            array( 'EU 36–37', '21,6–22,7 cm', '3–4', '4,5–5,5', '3,5–4,5' ),
            array( 'EU 38–39', '22,8–24,0 cm', '4,5–5,5', '6–7', '5–6' ),
            array( 'EU 40–41', '24,1–25,3 cm', '6–7', '7,5–8,5', '6,5–7,5' ),
            array( 'EU 42–43', '25,4–26,5 cm', '7,5–8,5', '9–10', '8–9' ),
            array( 'EU 44–45', '26,6–27,8 cm', '9–10', '10,5–11,5', '9,5–10,5' ),
            array( 'EU 46–47', '27,9–29,0 cm', '10,5–11,5', '12–13', '11–12' ),
            array( 'EU 48–49', '29,1–30,2 cm', '12–13', '13,5–14,5', '12,5–13,5' ),
        );
    }
}

if ( ! function_exists( 'noriks_anklesleeve_sizes' ) ) {
    /** NORIKS AnkleSleeve: velicina, broj cipele (EU).
     *  1:1 z originala flytex.fr ("Guide des tailles": S = 35-40, M = 41-43, L = 44-47). */
    function noriks_anklesleeve_sizes() {
        return array(
            array( 'S', '35–40' ),
            array( 'M', '41–43' ),
            array( 'L', '44–47' ),
        );
    }
}

if ( ! function_exists( 'noriks_corksandals_sizes' ) ) {
    /** NORIKS CorkSandals: EU velicina, unutarnja duljina (cm), US zene, US muskarci.
     *  1:1 s tablice velicin originala qomfortco.com ("Size Guide", EU 36-46; US iz imena varijant). */
    function noriks_corksandals_sizes() {
        return array(
            array( 'EU 36', '22,2–22,9 cm', '5,5–6', '3' ),
            array( 'EU 37', '23,2 cm', '6,5', '4' ),
            array( 'EU 38', '23,5 cm', '7', '5' ),
            array( 'EU 39', '24,1–24,4 cm', '7,5–8', '6–6,5' ),
            array( 'EU 40', '24,8 cm', '8,5', '7' ),
            array( 'EU 41', '25,4–25,7 cm', '9–9,5', '8' ),
            array( 'EU 42', '26,0 cm', '10', '9' ),
            array( 'EU 43', '26,7–27,0 cm', '10,5–11', '9,5' ),
            array( 'EU 44', '27,3–27,9 cm', '11,5–12', '10–10,5' ),
            array( 'EU 45', '28,6 cm', '13', '11–12' ),
            array( 'EU 46', '29,5 cm', '14', '13' ),
        );
    }
}

if ( ! function_exists( 'noriks_doggo_sizes' ) ) {
    /** NORIKS Doggo: velicina, duljina, sirina, visina (cm), ISOFIX kopce, pasmine
     *  (original waggingrightsusa.com, "Sizes & dog sizes": Medium 53 x 47 x 44 cm, Extra Large 100 x 52 x 44 cm). */
    function noriks_doggo_sizes() {
        return array(
            array( 'M',  '53', '47', '44', '2', 'jazavčar, border terijer, cockapoo, koker španijel' ),
            array( 'XL', '100', '52', '44', '4', 'border koli, labrador, njemački ovčar ili dva manja psa' ),
        );
    }
}

if ( ! function_exists( 'noriks_fleecetights_sizes' ) ) {
    /** NORIKS FleeceTights: velicina, US broj, struk (cm), bokovi (cm), unutarnja duljina noge (cm).
     *  1:1 s tablice originala irazia.com ("Size Guide", mjere u cm s originala). */
    function noriks_fleecetights_sizes() {
        return array(
            array( 'XXS/XS',  '00–1',  '56–61',   '69–86',   '61–102' ),
            array( 'XS/S',    '2–6',   '64–74',   '86–99',   '61–102' ),
            array( 'M/L',     '7–11',  '76–89',   '97–117',  '61–102' ),
            array( 'L/XL',    '12–16', '91–102',  '112–122', '61–102' ),
            array( '2XL/3XL', '18–24', '104–114', '124–147', '61–102' ),
            array( '4XL/5XL', '26–32', '117–132', '150–173', '61–102' ),
        );
    }
}

if ( ! function_exists( 'noriks_sculptbrief_sizes' ) ) {
    /** NORIKS SculptBrief: velicina, US broj, opseg struka (cm), opseg struka (inci).
     *  1:1 s tablice originala saybeam.com ("Size Chart" / kalkulator velicine). */
    function noriks_sculptbrief_sizes() {
        return array(
            array( 'XS',  '0–2',   '64–69',   '25–27' ),
            array( 'S',   '4–6',   '71–74',   '28–29' ),
            array( 'M',   '8–10',  '76–81',   '30–32' ),
            array( 'L',   '12–14', '86–94',   '34–37' ),
            array( 'XL',  '16–18', '99–104',  '39–41' ),
            array( '2XL', '20–22', '107–112', '42–44' ),
            array( '3XL', '24–26', '114–118', '45–46' ),
            array( '4XL', '28–30', '119–122', '47–48' ),
            array( '5XL', '32–34', '124–127', '49–50' ),
        );
    }
}

if ( ! function_exists( 'noriks_smartjacket_sizes' ) ) {
    /** NORIKS SmartJacket: velicina, (A) opseg prsa, (B) opseg trbuha, (C) duljina proizvoda, (D) duljina rukava (cm),
     *  njemacki konfekcijski broj. 1:1 s tablice originala valkental.com (slika "Normale bis lockere Passform"). */
    function noriks_smartjacket_sizes() {
        return array(
            array( 'XS',  '< 94',    '< 88',   '67', '62',   '34–36' ),
            array( 'S',   '94–98',   'do 93',  '69', '63,5', '36–38' ),
            array( 'M',   '98–102',  'do 98',  '71', '65',   '38–40' ),
            array( 'L',   '102–106', 'do 103', '73', '66,5', '40–42' ),
            array( 'XL',  '106–111', 'do 109', '74', '67,5', '44–46' ),
            array( '2XL', '111–116', 'do 115', '75', '68,5', '46–48' ),
            array( '3XL', '116–121', 'do 121', '75', '68,5', '48–50' ),
            array( '4XL', '121–126', 'do 127', '75', '68,5', '50–52' ),
        );
    }
}

if ( ! function_exists( 'noriks_utilitypants_sizes' ) ) {
    /** NORIKS UtilityPants: velicina, opseg struka (inci, UK/US), struk, bokovi, visina, duljina, unutarnja duljina nogavice (cm).
     *  1:1 s tablice originala thetruetailorcompany.com (preporuka: ako ste izmedu dvije velicine, uzmite vecu). */
    function noriks_utilitypants_sizes() {
        return array(
            array( 'S',   '31',    '78–82',   '94–98',   '170–175', '102', '76,2' ),
            array( 'M',   '32',    '82–86',   '98–102',  '175–180', '104', '77' ),
            array( 'L',   '34',    '86–91',   '102–107', '180–185', '106', '77,8' ),
            array( 'XL',  '36',    '91–96',   '107–112', '185–190', '108', '78,6' ),
            array( '2XL', '38',    '96–102',  '112–118', '185–190', '110', '79,4' ),
            array( '3XL', '40–42', '103–109', '119–125', '190–195', '111', '80,2' ),
        );
    }
}

if ( ! function_exists( 'noriks_hoodie_sizes' ) ) {
    /** NORIKS Hoodie: velicina po visini, A duljina tijela, B 1/2 prsa, C duljina rukava, D visina rukava, E donji rub (cm).
     *  1:1 s tablice originala (freethesheep.com, Eden Hoodie: velicine 0-4 = visina do 5'2" ... od 6'6").
     *  Mjere proizvoda, ne mjere tijela. */
    function noriks_hoodie_sizes() {
        return array(
            array( 'do 157 cm',  '106,5', '147,5', '62,5', '101,5', '66' ),
            array( '160–168 cm', '122',   '147,5', '62,5', '114,5', '91,5' ),
            array( '170–185 cm', '132',   '157,5', '67,5', '124,5', '101,5' ),
            array( '188–196 cm', '142',   '167,5', '72,5', '134,5', '112' ),
            array( 'od 198 cm',  '152,5', '178',   '78',   '145',   '122' ),
        );
    }
}

if ( ! function_exists( 'noriks_fieldops_sizes' ) ) {
    /** NORIKS FieldOps Pro (taktične slušalke) — nema veličina, samo boja (Carbon Black, Army Green). */
    function noriks_fieldops_sizes() {
        return array();
    }
}

if ( ! function_exists( 'noriks_ondersteun_sizes' ) ) {
    /** NORIKS ONDERSTEUN: veličina, košarica / opseg. */
    function noriks_ondersteun_sizes() {
        return array(
            array( 'XS',  'košarica A – B' ),
            array( 'S',   'košarica B – C' ),
            array( 'M',   'košarica C – D' ),
            array( 'L',   'košarica D – E' ),
            array( 'XL',  'košarica E – F' ),
            array( '2XL', 'košarica F+' ),
        );
    }
}

if ( ! function_exists( 'noriks_insoles_sizes' ) ) {
    /** NORIKS Insoles — ortopedski ulošci za potporu stopala. */
    function noriks_insoles_sizes() {
        return array(
            array( 'XS', 'EU 35–38' ),
            array( 'S',  'EU 38,5–41,5' ),
            array( 'M',  'EU 42–44' ),
            array( 'L',  'EU 44,5–46,5' ),
            array( 'XL', 'EU 47–48' ),
        );
    }
}
