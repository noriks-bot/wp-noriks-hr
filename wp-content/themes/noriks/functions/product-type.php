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
        'leakbrief' => array( 'orto-leakbrief' ),
        'tusfilter' => array( 'orto-tusfilter' ),
        'mamabelt' => array( 'orto-mamabelt' ),
        'beltfit' => array( 'orto-beltfit' ),
        'neckgrip' => array( 'orto-neckgrip' ),
    'steampro' => array( 'orto-steampro' ),
    'shiftclog' => array( 'orto-shiftclog' ),
    'tradesman' => array( 'orto-tradesman' ),
    'freshseal' => array( 'orto-freshseal' ),
    'flomasteri' => array( 'orto-flomasteri' ),
    'ortopas'                 => array( 'orto-ortopas', 'ortopas' ),
        // Bunion corrector (korektor čukljeva / halux valgus).
        'bunion'                  => array( 'orto-bunion', 'bunion' ),
        // FisioRest (novi proizvod).
        'fisiorest'               => array( 'orto-fisiorest', 'fisiorest' ),
        'glasspro'                 => array( 'orto-glasspro' ),
        // NORIKS TacPro taktične slušalke
        'acryliques' => array( 'orto-acryliques' ),
        'midnight' => array( 'orto-midnight' ),
        'gordura' => array( 'orto-gordura' ),
        'womens' => array( 'orto-womens' ),
        'draps' => array( 'orto-draps' ),
        'faith' => array( 'orto-faith' ),
        'devotions' => array( 'orto-devotions' ),
        'classics' => array( 'orto-classics' ),
        'ritual' => array( 'orto-ritual' ),
        'salon' => array( 'orto-salon' ),
        'flops' => array( 'orto-flops' ),
        'daily' => array( 'orto-daily' ),
        'quiet' => array( 'orto-quiet' ),
        'muslin' => array( 'orto-muslin' ),
        'silkcase' => array( 'orto-silkcase' ),
        'sunover' => array( 'orto-sunover' ),
        'vinocool' => array( 'orto-vinocool' ),
        'odorpro' => array( 'orto-odorpro' ),
        'zipcomp' => array( 'orto-zipcomp' ),
        'webshot' => array( 'orto-webshot' ),
        'gelcushion' => array( 'orto-gelcushion' ),
        'noiron' => array( 'orto-noiron' ),
        'sunstep' => array( 'orto-sunstep' ),
        'aircircle' => array( 'orto-aircircle' ),
        'widebeam' => array( 'orto-widebeam' ),
        'wakeband' => array( 'orto-wakeband' ),
        'seatsleep' => array( 'orto-seatsleep' ),
        'sculptleg' => array( 'orto-sculptleg' ),
        'mamafit' => array( 'orto-mamafit' ),
        'shapeshorts' => array( 'orto-shapeshorts' ),
        'diskret' => array( 'orto-diskret' ),
        'leash' => array( 'orto-leash' ),
        'titancrep' => array( 'orto-titancrep' ),
        'alpakacrew' => array( 'orto-alpakacrew' ),
        'gelsit' => array( 'orto-gelsit' ),
        'struja' => array( 'orto-struja' ),
        'calm' => array( 'orto-calm' ),
        'shapetank' => array( 'orto-shapetank' ),
        'tacpro'                => array( 'orto-tacpro' ),
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
        // NORIKS Corrector — korektor drzanja s nevidljivom podporom (samo velicina S / M / L).
        'corrector'               => array( 'orto-corrector', 'corrector' ),
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
        // NORIKS ThermoBoots — vodootporne zimske cizme s podstavom od flisa (boja 3 + velicina EU 37–48).
        'thermoboots'             => array( 'orto-thermoboots', 'thermoboots' ),
        // NORIKS LeatherBoots — muske udobne kozne cizme (boja 5 + velicina EU 37–48).
        'leatherboots'            => array( 'orto-leatherboots', 'leatherboots' ),
        // NORIKS SnugBoot — zimske barefoot cizme s krznenom podstavom, unisex (boja 5 + velicina EU 36–46).
        'snugboot'                => array( 'orto-snugboot', 'snugboot' ),
        // NORIKS CloudClogs — 3D klompe mekane kao oblak (boja 5 + velicina EU 39–46). Ni povezano z NORIKS Cloud (orto-cloud, jastuk) ni StepCloud.
        'cloudclogs'              => array( 'orto-cloudclogs', 'cloudclogs' ),
        // NORIKS CompressionSocks — siroke bambusove kompresijske carape do koljena, 15–20 mmHg (boja 10 + velicina M–3XL po opsegu lista).
        // Ni povezano s SupportSocks (orto-supportsocks), Relief (orto-relief) ni kompresijskimi carapami (orto-kompresijske-carape / tip carape).
        'compressionsocks'        => array( 'orto-compressionsocks', 'compressionsocks' ),
        // NORIKS WaffleLongSleeve — majica dugih rukava od vafel pletiva, unisex (boja 17 + velicina XS–3XL).
        'wafflelongsleeve'        => array( 'orto-wafflelongsleeve', 'wafflelongsleeve' ),
        // NORIKS SleepSet — zenska pamucna pidzama: majica dugih rukava + kratke hlacice (boja 8 + velicina XS–XL).
        // Ni povezano s SleepEarplugs (orto-sleepearplugs).
        'sleepset'                => array( 'orto-sleepset', 'sleepset' ),
        // NORIKS PlushBlanket — super mekana oversized plisana deka (boja 17 + velicina Srednja / Velika / XL / Mega, cijena po velicini kot original).
        // Ni povezano z NORIKS Blanket (orto-blanket) ni FleeceShawl.
        'plushblanket'            => array( 'orto-plushblanket', 'plushblanket' ),
        // NORIKS HikingShoes — barefoot pohodne cipele od brusene koze (boja + velicina EU 36–46).
        'hikingshoes'             => array( 'orto-hikingshoes', 'hikingshoes' ),
        // NORIKS HoodieDress — oversized haljina s kapuljacom (boja 13 + velicina S–3XL).
        'hoodiedress'             => array( 'orto-hoodiedress', 'hoodiedress' ),
        // NORIKS ComfortJeans — opustene traperice sirokih nogavica od rastezljivog trapera (boja 7 + velicina XXS–XXL + duljina 26–36).
        'comfortjeans'            => array( 'orto-comfortjeans', 'comfortjeans' ),
        // NORIKS SlingBag — putna torbica preko ramena 2.0 sa zastitom od krade (boja 4 + velicina Mini / Regular / Max).
        'slingbag'                => array( 'orto-slingbag', 'slingbag' ),
        // NORIKS BathMat — upijajuci protuklizni tepih za kupaonicu (boja 5 + velicina 40 x 60 / 50 x 80 cm, cijena po velicini kot original).
        'bathmat'                 => array( 'orto-bathmat', 'bathmat' ),
        // NORIKS TravelBag — putna torba za rucnu prtljagu s odvojivim kotacicima (boja 3 + model Classic / Roller kao Velicina, cijena po modelu kot original).
        'travelbag'               => array( 'orto-travelbag', 'travelbag' ),
        // NORIKS DogBed — premium ortopedski krevet za pse (boja 8 + velicina M / L / XL / 2XL).
        'dogbed'                  => array( 'orto-dogbed', 'dogbed' ),
        // NORIKS MinimizerBra — rashladujuci minimizer grudnjak s punim pokricem (boja 4 + velicina 70C–115G, 74 velicine).
        'minimizerbra'            => array( 'orto-minimizerbra', 'minimizerbra' ),
        // NORIKS NursingBra — grudnjak za dojenje bez savova (boja 7 + velicina S–4XL po kosarici in traki).
        'nursingbra'              => array( 'orto-nursingbra', 'nursingbra' ),
        // NORIKS CashmereSweater — pulover od kasmira i svile opustenog kroja (boja 14; jedna velicina M = US 6–10, tablica mjera).
        'cashmeresweater'         => array( 'orto-cashmeresweater', 'cashmeresweater' ),
        // NORIKS TechTee — ikonicna muska majica s okruglim izrezom (boja + velicina S–4XL).
        'techtee'                 => array( 'orto-techtee', 'techtee' ),
        // NORIKS FleeceShawl — mekani sal-ogrtac od flisa (samo boja, 11 boja; jedna velicina 158 x 110 cm, brez tablice).
        'fleeceshawl'             => array( 'orto-fleeceshawl', 'fleeceshawl' ),
        // NORIKS BottleSling — izolirana torbica za termo casu s naramenicom (samo boja, 15 boja; jedna velicina 25 x 8 x 7,5 cm, brez tablice).
        'bottlesling'             => array( 'orto-bottlesling', 'bottlesling' ),
        // NORIKS UltrasonicCleaner — ultrazvucni i UV-C cistac za dentalna pomagala (samo boja: biserno bijela, oniks crna; bez velicina, brez tablice).
        'ultrasoniccleaner'       => array( 'orto-ultrasoniccleaner', 'ultrasoniccleaner' ),
        // NORIKS PillOrganizer — organizator za tablete s 14 vrecica sa zatvaracem (samo boja, 7 boja; jedna velicina 16 x 12 x 6 cm, brez tablice).
        'pillorganizer'           => array( 'orto-pillorganizer', 'pillorganizer' ),
        // NORIKS AntiTheftBag — luksuzna hobo torba sa zastitom od krade (samo boja, 6 boja; jedna velicina, brez tablice).
        'antitheftbag'            => array( 'orto-antitheftbag', 'antitheftbag' ),
        // NORIKS ShowerTowel — antibakterijski rucnik za piling tijela (samo boja: crna, roza, plava, bijela; jedna velicina 122 cm, brez tablice).
        'showertowel'             => array( 'orto-showertowel', 'showertowel' ),
        // NORIKS PetDental — sprej za njegu zubi pasa i macaka (brez atributov; ponudbe 1x/2x/3x kom, brez tablice).
        'petdental'               => array( 'orto-petdental', 'petdental' ),
        // NORIKS CalmingCollar — umirujuca ovratnica s feromonima za macke (brez atributov; ponudbe 1x/3x/5x kom kot Kaching originala, brez tablice).
        'calmingcollar'           => array( 'orto-calmingcollar', 'calmingcollar' ),
        // NORIKS TheraPillow — terapijski jastuk za vrat 3 u 1 (brez atributov; ponudbi 1x/2x kom kot paketa originala, brez tablice).
        'therapillow'             => array( 'orto-therapillow', 'therapillow' ),
        // NORIKS DualPillow — jastuk 2 u 1 (brez atributov; ponudbe 1x/2x/3x/4x kom kot paketi originala, brez tablice).
        'dualpillow'              => array( 'orto-dualpillow', 'dualpillow' ),
        // NORIKS GrillBasket — valjkasta kosara za rostilj (brez atributov; ponudbe 1x/2x/4x kom kot Kaching paketi originala, brez tablice).
        'grillbasket'             => array( 'orto-grillbasket', 'grillbasket' ),
        // NORIKS SeatCushion — ortopedski jastuk za sjedenje s potporom za donja leda (brez atributov; ponudbe 1x/2x/4x kom kot Kaching paketi originala, brez tablice).
        'seatcushion'             => array( 'orto-seatcushion', 'seatcushion' ),
        // NORIKS GroundingMat — podloga za uzemljenje (brez atributov: za HR samo EU adapter; ponudbe 1x/2x/3x/5x kom kot paketi originala, brez tablice).
        'groundingmat'            => array( 'orto-groundingmat', 'groundingmat' ),
        // NORIKS NeckMassager — masazer za vrat i ramena (brez atributov; original nima kolicinskih paketov -> 1x/2x/3x kom po lestvici, brez tablice).
        'neckmassager'            => array( 'orto-neckmassager', 'neckmassager' ),
        // NORIKS UpholsteryCleaner — prenosni usisavac za mokro ciscenje presvlaka, tepiha i autosjedala (brez atributov: za HR samo EU utikac;
        // original nima kolicinskih paketov -> 1x/2x/3x kom po lestvici, brez tablice).
        'upholsterycleaner'       => array( 'orto-upholsterycleaner', 'upholsterycleaner' ),
        // NORIKS KneeLight — bezicni uredaj za koljeno s toplinom, vibracijom i crvenim svjetlom (brez atributov: ena izvedba,
        // polnjenje USB-C; ponudbi 1x/2x kom kot paketa originala Device Only / 2 Devices Only, brez tablice).
        'kneelight'               => array( 'orto-kneelight', 'kneelight' ),
        // NORIKS PetHairGlove — rukavica za uklanjanje dlaka kucnih ljubimaca (brez atributov; ponudbe 1x/2x/3x/4x kom kot Kaching paketi originala, brez tablice).
        'pethairglove'            => array( 'orto-pethairglove', 'pethairglove' ),
        // NORIKS TravelKit — vakuumska putna vrecica za odjecu s elektricnom pumpom (brez atributov: ena izvedba; ponudbi 2x/4x kom
        // kot BOGO paketa originala Buy 1 Get 1 / Buy 2 Get 2, brez tablice). Lasten tip, locen od travelbag / airtravel / travelpillow.
        'travelkit'               => array( 'orto-travelkit', 'travelkit' ),
        // NORIKS BreadBag — vrecica za kruh od pamuka i pcelinjeg voska (brez atributov: ena izvedba 33 x 43 cm; ponudbe 2x/4x/6x kom
        // kot kompleti originala 2 / 4 / 6 Beutel, predizbrano 4x, brez tablice). Lasten tip breadbag (predpona nbb-).
        'breadbag'                => array( 'orto-breadbag', 'breadbag' ),
        // NORIKS MattressTopper — ekstra debeli nadmadrac od 10 cm (samo velicina 90x190 … 198x203 cm s cenami po velicini kot original, tablica velicin).
        'mattresstopper'          => array( 'orto-mattresstopper', 'mattresstopper' ),
        // NORIKS KidsPillow — ergonomski djecji jastuk za miran san (samo Velicina po dobi djeteta 1-3 / 3-8 / 8-18 godina kot
        // Child's Age originala, ena cena za vse; ponudbe 1x/2x/3x kom kot Moon paketi Single / Duo / Trio, tablica velicin).
        // Lasten tip, locen od kidsnest / dualpillow / therapillow / travelpillow / ortopedski-jastuk.
        'kidspillow'              => array( 'orto-kidspillow', 'kidspillow' ),
        // NORIKS VacuumSealer — bezicni rucni vakuumski aparat za hranu (en izbirnik Velicina pakiranja 10/20/30 vrecic s cenami originala, brez tablice).
        'vacuumsealer'            => array( 'orto-vacuumsealer', 'vacuumsealer' ),
        // NORIKS AirTravel — putni ruksak z vakuumsko kompresijo (SKU NORIKS-AIRTRAVEL; en izbirnik Boja s cenami po barvi kot original, brez tablice).
        'airtravel'          => array( 'orto-airtravel', 'airtravel' ),
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
        'birdie'                  => array( 'orto-birdie', 'orto-birdie-3', 'birdie' ),
        'majice-bokserice-paketi' => array( 'majice-i-bokserice-paketi' ),
        'black-friday'            => array( 'black-friday' ),
        'orto'                    => array( 'orto' ),
        'calendar'                => array( 'orto-calendar', 'calendar' ),
        'faith'                   => array( 'orto-faith', 'faith' ),
        'devotions'               => array( 'orto-devotions', 'devotions' ),
        // NORIKS Travel — posteljica za pse u automobilu.
        'travel'                  => array( 'orto-travel', 'travel' ),
        // RETROBOX — retro gaming konzola s 40+ emulatorima (64GB/128GB/256GB).
        'retrobox'               => array( 'orto-retrobox', 'retrobox' ),
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


if ( ! function_exists( 'noriks_classics_sizes' ) ) {
    /** NORIKS Classics: velicina, EU velicina, visina, tezina, unutarnja duljina noge (US velicine izpuscene - samo EUR/cm, Dejan 26.10.2026).
     *  1:1 z originala (myfleecies.com, Size Guide), palci -> cm, lbs -> kg. */
    function noriks_classics_sizes() {
        return array(
            array( 'XS-S',   '32–36', '142–173 cm', '41–64 kg', '69 cm' ),
            array( 'M-L',    '38–42', '152–175 cm', '50–68 kg', '70 cm' ),
            array( 'XL-2XL', '44–48', '152–175 cm', '68–95 kg', '71 cm' ),
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

if ( ! function_exists( 'noriks_gordura_sizes' ) ) {
    /** NORIKS ShapeBody: sest velicin originala (P–2XG) z mednarodnimi oznakami S–3XL; original mer ne navaja. */
    function noriks_gordura_sizes() {
        return array(
            array( 'S' ),
            array( 'M' ),
            array( 'L' ),
            array( 'XL' ),
            array( '2XL' ),
            array( '3XL' ),
        );
    }
}

if ( ! function_exists( 'noriks_draps_sizes' ) ) {
    /** NORIKS DuoSleep: velicina, za koji krevet, perilica (original lunex-officiel.com, Guide des tailles). */
    function noriks_draps_sizes() {
        return array(
            array( '90 × 200 cm',  'pomoćni krevet i kauč na razvlačenje · 1 osoba', '–' ),
            array( '140 × 200 cm', 'krevet za jednu osobu (90–120 cm) · 1 osoba', 'najmanje 4 kg' ),
            array( '160 × 210 cm', 'krevet za jednu osobu XL (produženi) · 1 osoba', 'najmanje 5 kg' ),
            array( '200 × 200 cm', 'bračni krevet (140–160 cm) · 2 osobe', 'najmanje 6 kg' ),
            array( '230 × 230 cm', 'veliki bračni krevet (180–200 cm) · 2 osobe', 'najmanje 7 kg' ),
        );
    }
}

if ( ! function_exists( 'noriks_zipcomp_sizes' ) ) {
    /** NORIKS ZipComp: velicina, broj cipele, opseg lista, visina (original covexia.es, Guia de tallas S/M–XXL). */
    function noriks_zipcomp_sizes() {
        return array(
            array( 'S/M',  '36 – 40', '23 – 36 cm', '1,50 – 1,70 m' ),
            array( 'L/XL', '40 – 44', '36 – 45 cm', '1,70 – 1,95 m' ),
            array( 'XXL',  '44 – 48', '45 – 56 cm', '1,85 – 2,05 m' ),
        );
    }
}

if ( ! function_exists( 'noriks_sunstep_sizes' ) ) {
    /** NORIKS SunStep: velicina (crka + EU razpon), dob, duljina cipelice v cm - 1:1 z originala (tinyexplorings, Size Chart: 11,5 / 12,5 / 13,5 / 14,8 cm),
     *  EU stevilka preracunana iz duljine cipelice (samo EU, Dejan 26.10.2026). */
    function noriks_sunstep_sizes() {
        return array(
            array( 'XS - 18 do 19', '6–12 mjeseci', '11,5 cm' ),
            array( 'S - 20 do 21', '12–18 mjeseci', '12,5 cm' ),
            array( 'M - 22 do 23', '18–24 mjeseca', '13,5 cm' ),
            array( 'L - 24 do 25', '2–4 godine', '14,8 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_noiron_sizes' ) ) {
    /** NORIKS NoIron: velicina (ovratnik), sirina ramena, opseg prsa, duzina kosulje, duzina rukava v cm - 1:1 z originala (bellutia, tablica dugih rukava). */
    function noriks_noiron_sizes() {
        return array(
            array( 'XXS - 39', '44,8 cm', '100 cm', '72 cm', '61 cm' ),
            array( 'XS - 40', '46 cm',   '104 cm', '74 cm', '62,5 cm' ),
            array( 'S - 41', '47,2 cm', '108 cm', '74 cm', '63,5 cm' ),
            array( 'M - 42', '48,4 cm', '112 cm', '76 cm', '65 cm' ),
            array( 'L - 43', '49,6 cm', '116 cm', '76 cm', '65 cm' ),
            array( 'XL - 44', '50,8 cm', '120 cm', '78 cm', '66,5 cm' ),
            array( '2XL - 45', '52 cm',   '124 cm', '78 cm', '66,5 cm' ),
            array( '3XL - 46', '53,2 cm', '128 cm', '78 cm', '67 cm' ),
            array( '4XL - 47', '54,4 cm', '132 cm', '80 cm', '67 cm' ),
            array( '5XL - 48', '55,6 cm', '136 cm', '81 cm', '68,5 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_sculptleg_sizes' ) ) {
    /** NORIKS SculptLeg: velicina, EU, opseg struka, opseg bokova (original luveon.com, Guide des tailles XS–5XL). */
    function noriks_sculptleg_sizes() {
        return array(
            array( 'XS',  '32 – 34', '50 – 60 cm',   '76 – 85 cm' ),
            array( 'S',   '34 – 36', '61 – 69 cm',   '86 – 94 cm' ),
            array( 'M',   '38 – 40', '71 – 80 cm',   '97 – 106 cm' ),
            array( 'L',   '42 – 44', '84 – 89 cm',   '109 – 115 cm' ),
            array( 'XL',  '46 – 48', '93 – 99 cm',   '118 – 122 cm' ),
            array( '2XL', '50 – 52', '104 – 110 cm', '125 – 130 cm' ),
            array( '3XL', '54 – 56', '113 – 120 cm', '133 – 141 cm' ),
            array( '4XL', '58 – 60', '121 – 129 cm', '142 – 150 cm' ),
            array( '5XL', '62 – 64', '130 – 138 cm', '151 – 159 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_leakbrief_sizes' ) ) {
    /** NORIKS LeakBrief: velicine po originalu (UK 4-20 -> EU 32-48), opseg struka in bokova v cm 1:1 z originalom. */
    function noriks_leakbrief_sizes() {
        return array(
            array( 'XS',  '32 – 34', '64 – 69', '84 – 89' ),
            array( 'S',   '34 – 36', '69 – 74', '91 – 97' ),
            array( 'M',   '36 – 38', '74 – 79', '97 – 102' ),
            array( 'L',   '38 – 40', '79 – 86', '104 – 109' ),
            array( 'XL',  '40 – 42', '86 – 91', '109 – 114' ),
            array( '2XL', '42 – 44', '91 – 97', '114 – 119' ),
            array( '3XL', '44 – 46', '99 – 102', '122 – 127' ),
            array( '4XL', '46 – 48', '104 – 109', '127 – 132' ),
        );
    }
}

if ( ! function_exists( 'noriks_shiftclog_sizes' ) ) {
    /** NORIKS ShiftClog: velicina po broju cipele (original thesnuggisandals.com, US Women 6-14.5 / Men 4.5-13 -> EU). */
    function noriks_shiftclog_sizes() {
        return array(
            array( 'XS',  '36 do 37' ),
            array( 'S',   '38 do 39' ),
            array( 'M',   '40 do 41' ),
            array( 'L',   '42 do 43' ),
            array( 'XL',  '44 do 45' ),
            array( '2XL', '46 do 47' ),
        );
    }
}

if ( ! function_exists( 'noriks_tradesman_sizes' ) ) {
    /** NORIKS Tradesman: velicina po broju cipele (original masonclothing.com, US Men/Women -> EU). */
    function noriks_tradesman_sizes() {
        return array(
            array( 'M',  '39 do 42', '37,5 do 40,5' ),
            array( 'L',  '42,5 do 46', '41 do 44' ),
            array( 'XL', '46,5 do 49,5', '–' ),
        );
    }
}

if ( ! function_exists( 'noriks_diskret_sizes' ) ) {
    /** NORIKS Diskret: velicina po kosarici grudnjaka (original curviva.es, Guia de tallas). */
    function noriks_diskret_sizes() {
        return array(
            array( 'S', '8 cm', 'AA do B' ),
            array( 'M', '10 cm', 'B do F' ),
            array( 'L', '12 cm', 'F do G' ),
        );
    }
}

if ( ! function_exists( 'noriks_alpakacrew_sizes' ) ) {
    /** NORIKS AlpakaCrew: velicina po broju cipele (original hollowsocks.com, US Men/Women -> EU). */
    function noriks_alpakacrew_sizes() {
        return array(
            array( 'S',  '35 do 37,5' ),
            array( 'M',  '39 do 42,5' ),
            array( 'L',  '43 do 46' ),
            array( 'XL', '46,5 do 49,5' ),
        );
    }
}

if ( ! function_exists( 'noriks_shapeshorts_sizes' ) ) {
    /** NORIKS ShapeShorts: velicina po opsegu struka (original shapermen.in: 25-30 / 30.5-35.5 / 36-44 / 44-50 / 50.5-55 in -> cm). */
    function noriks_shapeshorts_sizes() {
        return array(
            array( 'XS-S',   '64 – 76 cm' ),
            array( 'M-L',    '77 – 90 cm' ),
            array( 'XL-2XL', '91 – 112 cm' ),
            array( '3XL',    '112 – 127 cm' ),
            array( '4XL',    '128 – 140 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_mamafit_sizes' ) ) {
    /** NORIKS MamaFit: velicina po opsegu struka + EU velicina (original belayan.com, Guide des tailles S–3XL). */
    function noriks_mamafit_sizes() {
        return array(
            array( 'S',   '62 – 68 cm',  '34 – 36' ),
            array( 'M',   '68 – 76 cm',  '38 – 40' ),
            array( 'L',   '76 – 82 cm',  '40 – 42' ),
            array( 'XL',  '82 – 90 cm',  '44 – 46' ),
            array( '2XL', '88 – 100 cm', '48 – 50' ),
            array( '3XL', '92 – 112 cm', '50 – 52+' ),
        );
    }
}

if ( ! function_exists( 'noriks_shapetank_sizes' ) ) {
    /** NORIKS ShapeTank: velicina po tjelesnoj tezini (original alphacore-de.com, Groessentabelle S–5XL). */
    function noriks_shapetank_sizes() {
        return array(
            array( 'S',   '50 – 70 kg' ),
            array( 'M',   '70 – 90 kg' ),
            array( 'L',   '90 – 110 kg' ),
            array( 'XL',  '110 – 130 kg' ),
            array( '2XL', '130 – 150 kg' ),
            array( '3XL', '150 – 170 kg' ),
            array( '4XL', '170 – 190 kg' ),
            array( '5XL', '190 – 210 kg' ),
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

if ( ! function_exists( 'noriks_mattresstopper_sizes' ) ) {
    /** NORIKS MattressTopper: velicina (opcija izdelka), naziv, dimenzije nadmadraca (s x d x visina).
     *  1:1 s slike »Available sizes« originala (casanuve.co.uk): Single 90 x 190, Small Double 120 x 190, Double 137 x 190,
     *  King 152 x 203, Super King 198 x 203 — vse 10 cm visine. */
    function noriks_mattresstopper_sizes() {
        return array(
            array( '90 x 190 cm',  'Jednostruki',          '90 × 190 × 10 cm' ),
            array( '120 x 190 cm', 'Mali bračni',          '120 × 190 × 10 cm' ),
            array( '137 x 190 cm', 'Bračni',               '137 × 190 × 10 cm' ),
            array( '152 x 203 cm', 'Veliki bračni',        '152 × 203 × 10 cm' ),
            array( '198 x 203 cm', 'Ekstra veliki bračni', '198 × 203 × 10 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_kidspillow_sizes' ) ) {
    /** NORIKS KidsPillow: velicina (opcija izdelka = dob djeteta), dob, dimenzije jastuka (d x s), visina.
     *  1:1 z originala (trylittlebear.com, FAQ »What are the sizes?« in slika Sizes): Ages 1-3 18.9 x 11.4 in (48 x 29 cm),
     *  visina 0.8-1.6 in; Ages 3-8 19.7 x 11.8 in (50 x 30 cm), 1.6-2.4 in; Ages 8-18 20.9 x 12.6 in (53 x 32 cm), 2.4-3.5 in. */
    function noriks_kidspillow_sizes() {
        return array(
            array( '1-3 godine',  '1–3 godine',  '48 × 29 cm', '2–4 cm' ),
            array( '3-8 godina',  '3–8 godina',  '50 × 30 cm', '4–6 cm' ),
            array( '8-18 godina', '8–18 godina', '53 × 32 cm', '6–9 cm' ),
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

if ( ! function_exists( 'noriks_thermoboots_sizes' ) ) {
    /** NORIKS ThermoBoots: EU velicina, UK velicina, duljina stopala (cm), unutarnja duljina cizme (cm).
     *  1:1 s tablice velicina originala (thermafits.com, »ThermaBoots Size Guide«). Odgovaraju uobicajenoj velicini. */
    function noriks_thermoboots_sizes() {
        return array(
            array( 'EU 37', '4–4,5', '22,8 cm', '23,8 cm' ),
            array( 'EU 38', '5',     '23,4 cm', '24,4 cm' ),
            array( 'EU 39', '6',     '24,0 cm', '25,0 cm' ),
            array( 'EU 40', '6,5',   '24,6 cm', '25,6 cm' ),
            array( 'EU 41', '7',     '25,2 cm', '26,2 cm' ),
            array( 'EU 42', '7,5',   '25,8 cm', '26,8 cm' ),
            array( 'EU 43', '8',     '26,4 cm', '27,4 cm' ),
            array( 'EU 44', '9',     '27,0 cm', '28,0 cm' ),
            array( 'EU 45', '10',    '27,6 cm', '28,6 cm' ),
            array( 'EU 46', '11',    '28,2 cm', '29,2 cm' ),
            array( 'EU 47', '12',    '28,8 cm', '29,8 cm' ),
            array( 'EU 48', '13',    '29,4 cm', '30,4 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_leatherboots_sizes' ) ) {
    /** NORIKS LeatherBoots: EU velicina, US velicina (muska), duljina stopala (cm).
     *  1:1 s tablice velicin originala (movaracare.com, »Men's Size Guide«, US 5–14, duljina stopala v cm z originala);
     *  US velicine (s polovicnimi) zdruzene v cijele EU velicine. Odgovaraju uobicajenoj velicini. */
    function noriks_leatherboots_sizes() {
        return array(
            array( 'EU 37', '5',         '22,2 cm' ),
            array( 'EU 38', '5,5',       '22,5 cm' ),
            array( 'EU 39', '6 – 6,5',   '23,8 – 24,1 cm' ),
            array( 'EU 40', '7',         '24,5 cm' ),
            array( 'EU 41', '7,5 – 8',   '25,1 – 25,4 cm' ),
            array( 'EU 42', '8,5',       '25,7 cm' ),
            array( 'EU 43', '9 – 9,5',   '26,4 – 26,7 cm' ),
            array( 'EU 44', '10',        '27,0 cm' ),
            array( 'EU 45', '10,5 – 11', '27,6 – 27,9 cm' ),
            array( 'EU 46', '11,5 – 12', '28,3 – 28,9 cm' ),
            array( 'EU 47', '12,5 – 13', '29,2 – 29,5 cm' ),
            array( 'EU 48', '13,5 – 14', '30,0 – 30,5 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_snugboot_sizes' ) ) {
    /** NORIKS SnugBoot: EU velicina, US (zenske), US (muske), duljina stopala (cm), sirina stopala (cm).
     *  1:1 s tablice originala (peak-footwear.com, »Snug Boot Size Table«; velicine na prodaju US Women 6–15 = EU 36–46).
     *  Unisex. Zbog debele krznene podstave: uobicajena velicina za cvrsce pristajanje, visok hrbat / deblje carape -> broj vise. */
    function noriks_snugboot_sizes() {
        return array(
            array( 'EU 36', '6',           '4',           '21,8 cm', '8,4 cm' ),
            array( 'EU 37', '7',           '5',           '22,4 cm', '8,5 cm' ),
            array( 'EU 38', '7,5',         '5,5',         '23,1 cm', '8,7 cm' ),
            array( 'EU 39', '8 – 8,5',     '6 – 6,5',     '23,7 cm', '8,8 cm' ),
            array( 'EU 40', '9 – 9,5',     '7 – 7,5',     '24,4 cm', '9,0 cm' ),
            array( 'EU 41', '10 – 10,5',   '8 – 8,5',     '25,1 cm', '9,2 cm' ),
            array( 'EU 42', '11 – 11,5',   '9 – 9,5',     '25,7 cm', '9,3 cm' ),
            array( 'EU 43', '12 – 12,5',   '10 – 10,5',   '26,4 cm', '9,5 cm' ),
            array( 'EU 44', '13 – 13,5',   '11 – 11,5',   '27,0 cm', '9,6 cm' ),
            array( 'EU 45', '14',          '12',          '27,7 cm', '9,8 cm' ),
            array( 'EU 46', '15',          '13',          '28,4 cm', '9,9 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_cloudclogs_sizes' ) ) {
    /** NORIKS CloudClogs: EU velicina, US (muske / zenske), UK, duljina stopala (cm).
     *  1:1 s tablice originala (varaletti.com, »Sizing Chart« 3D Performance Cloud Clogs, 13 velicin US 6M / 7.5W – 12M / 13.5W). Unisex. */
    function noriks_cloudclogs_sizes() {
        return array(
            array( 'EU 39',   '6 M / 7,5 Ž',    '5,5',  '24,0 cm' ),
            array( 'EU 39,5', '6,5 M / 8 Ž',    '6',    '24,5 cm' ),
            array( 'EU 40',   '7 M / 8,5 Ž',    '6,5',  '25,0 cm' ),
            array( 'EU 40,5', '7,5 M / 9 Ž',    '7',    '25,5 cm' ),
            array( 'EU 41',   '8 M / 9,5 Ž',    '7,5',  '26,0 cm' ),
            array( 'EU 42',   '8,5 M / 10 Ž',   '8',    '26,5 cm' ),
            array( 'EU 42,5', '9 M / 10,5 Ž',   '8,5',  '27,0 cm' ),
            array( 'EU 43',   '9,5 M / 11 Ž',   '9',    '27,5 cm' ),
            array( 'EU 44',   '10 M / 11,5 Ž',  '9,5',  '28,0 cm' ),
            array( 'EU 44,5', '10,5 M / 12 Ž',  '10',   '28,5 cm' ),
            array( 'EU 45',   '11 M / 12,5 Ž',  '10,5', '29,0 cm' ),
            array( 'EU 45,5', '11,5 M / 13 Ž',  '11',   '29,5 cm' ),
            array( 'EU 46',   '12 M / 13,5 Ž',  '11,5', '30,0 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_wafflelongsleeve_sizes' ) ) {
    /** NORIKS WaffleLongSleeve: velicina, mjere tijela (opseg prsa / struka / bokova) in mjere majice (opseg prsa / struka, duljina), cm.
     *  1:1 s tablice originala (comfrt.com, »Waffle Lounge Long Sleeve – Relaxed Fit«, Body / Product measurements v cm). Unisex. */
    function noriks_wafflelongsleeve_sizes() {
        return array(
            array( 'XS',  '81 – 89',   '61 – 66',   '86 – 91',   '112 cm', '95 cm',  '71 cm' ),
            array( 'S',   '86 – 94',   '66 – 71',   '91 – 97',   '117 cm', '100 cm', '72 cm' ),
            array( 'M',   '91 – 102',  '71 – 76',   '97 – 102',  '122 cm', '105 cm', '74 cm' ),
            array( 'L',   '97 – 104',  '76 – 84',   '102 – 107', '127 cm', '110 cm', '75 cm' ),
            array( 'XL',  '104 – 114', '84 – 91',   '107 – 112', '132 cm', '121 cm', '76 cm' ),
            array( '2XL', '114 – 127', '91 – 102',  '114 – 122', '142 cm', '131 cm', '79 cm' ),
            array( '3XL', '124 – 135', '102 – 112', '124 – 132', '152 cm', '141 cm', '81 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_sleepset_sizes' ) ) {
    /** NORIKS SleepSet: velicina, duljina majice, opseg prsa, opseg struka (hlacice), duljina rukava, duljina nogavice (cm).
     *  1:1 s tablice originala (doreandrose.com, Kiwi »Valentine Jersey«, mjere odjevnog predmeta v cm). */
    function noriks_sleepset_sizes() {
        return array(
            array( 'XS', '51,5 cm', '77 cm', '62 cm', '59,5 cm', '18,5 cm' ),
            array( 'S',  '52,5 cm', '81 cm', '67 cm', '60,5 cm', '19,5 cm' ),
            array( 'M',  '53,5 cm', '86 cm', '72 cm', '61,5 cm', '20,5 cm' ),
            array( 'L',  '54,5 cm', '91 cm', '77 cm', '62,5 cm', '21,5 cm' ),
            array( 'XL', '55,5 cm', '96 cm', '82 cm', '63,5 cm', '22,5 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_silkcase_sizes' ) ) {
    /** NORIKS SilkCase: velicina (= ime opcije Velicina), dimenzije (cm). 1:1 z originala (kinubrand.com, Tamaño). */
    function noriks_silkcase_sizes() {
        return array(
            array( 'Queen 50 × 75',      '50 × 75 cm',  'standardni pravokutni jastuk' ),
            array( 'King 50 × 90',       '50 × 90 cm',  'dulji pravokutni jastuk' ),
            array( 'Kvadratna 66 × 66',  '66 × 66 cm',  'kvadratni jastuk' ),
            array( 'Dvostruka 45 × 150', '45 × 150 cm', 'dugi jastuk za dvije osobe' ),
        );
    }
}

if ( ! function_exists( 'noriks_muslin_sizes' ) ) {
    /** NORIKS Muslin: velicina (= ime opcije Velicina), dimenzije (cm). 1:1 z originala (swiatmuslinu.pl, Rozmiar (cm)). */
    function noriks_muslin_sizes() {
        return array(
            array( 'Prekrivač 130 × 150',        '130 × 150 cm' ),
            array( 'Veliki prekrivač 150 × 200', '150 × 200 cm' ),
            array( 'Dvostruki 200 × 230',        '200 × 230 cm' ),
            array( 'Obiteljski 230 × 230',       '230 × 230 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_plushblanket_sizes' ) ) {
    /** NORIKS PlushBlanket: velicina (= ime opcije Velicina brez mer), dimenzije (cm), dimenzije originala (palci), priblizna tezina, idealna za.
     *  1:1 z originala (comfrt.com, zavihek »Size« + »Dreamer Blanket Size Guide«), palci -> cm, lbs -> kg. Kids Size originala ni naprodaj. */
    function noriks_plushblanket_sizes() {
        return array(
            array( 'Srednja', '127 x 152 cm', '50" x 60"',   'pribl. 2,3 kg', 'maženje na kauču ili osobni pokrivač' ),
            array( 'Velika',  '152 x 203 cm', '60" x 80"',   'pribl. 3,2 kg', 'ušuškavanje ili dodatni sloj na krevetu' ),
            array( 'XL',      '229 x 229 cm', '90" x 90"',   'pribl. 5,2 kg', 'bračni krevet (queen) s dodatnim prepustom' ),
            array( 'Mega',    '254 x 274 cm', '100" x 108"', 'pribl. 6,8 kg', 'veliki bračni krevet (king) i maksimalna udobnost' ),
        );
    }
}

if ( ! function_exists( 'noriks_compressionsocks_sizes' ) ) {
    /** NORIKS CompressionSocks: velicina, opseg lista (cm), tezina (kg).
     *  1:1 s tablice originala (everstridesocks.com, sizechart-28inches: Size / Calf Girth / Weight*); opseg lista ima prednost pred tezinom.
     *  3XL: palci 23–28 -> 58–71 cm (original v cm navaja 56–71, kar se prekriva z 2XL). */
    function noriks_compressionsocks_sizes() {
        return array(
            array( 'M',   '28 – 36 cm', 'do 65 kg' ),
            array( 'L',   '36 – 43 cm', '65 – 85 kg' ),
            array( 'XL',  '43 – 51 cm', '85 – 100 kg' ),
            array( '2XL', '51 – 58 cm', '100 – 120 kg' ),
            array( '3XL', '58 – 71 cm', '120 kg i više' ),
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

if ( ! function_exists( 'noriks_nursingbra_bands' ) ) {
    /** NORIKS NursingBra: stupci tablice = traka EU (opseg ispod grudi) in ustrezna UK traka z originala (28–48). */
    function noriks_nursingbra_bands() {
        return array( array( '60', '28' ), array( '65', '30' ), array( '70', '32' ), array( '75', '34' ), array( '80', '36' ), array( '85', '38' ),
                      array( '90', '40' ), array( '95', '42' ), array( '100', '44' ), array( '105', '46' ), array( '110', '48' ) );
    }
}

if ( ! function_exists( 'noriks_nursingbra_sizes' ) ) {
    /** NORIKS NursingBra: kosarica EU, kosarica UK, velicina (S–4XL) po traki EU 60–110 (UK 28–48).
     *  1:1 s tablice originala (maternique.com, BlissSizeChart: AU/UK B–H, US/CA B–K x Underbust 28–48);
     *  prazno polje = velicine ni. */
    function noriks_nursingbra_sizes() {
        return array(
            array( 'B', 'B',  array( '', '', 'S', 'M', 'M', 'L', 'L', 'XL', 'XL', '', '' ) ),
            array( 'C', 'C',  array( '', 'S', 'S', 'M', 'L', 'L', 'XL', 'XL', '2XL', '2XL', '3XL' ) ),
            array( 'D', 'D',  array( 'S', 'S', 'S', 'M', 'L', 'L', 'XL', '2XL', '2XL', '2XL', '3XL' ) ),
            array( 'E', 'DD', array( 'S', 'S', 'M', 'L', 'L', 'XL', 'XL', '2XL', '2XL', '3XL', '3XL' ) ),
            array( 'F', 'E',  array( 'S', 'S', 'M', 'L', 'L', 'XL', '2XL', '2XL', '2XL', '3XL', '3XL' ) ),
            array( 'G', 'F',  array( 'S', 'S', 'M', 'L', 'L', 'XL', '2XL', '2XL', '3XL', '3XL', '4XL' ) ),
            array( 'H', 'FF', array( 'S', 'M', 'M', 'L', 'XL', 'XL', '2XL', '2XL', '3XL', '3XL', '4XL' ) ),
            array( 'I', 'G',  array( 'S', 'M', 'M', 'L', 'XL', '2XL', '2XL', '3XL', '3XL', '4XL', '4XL' ) ),
            array( 'J', 'GG', array( 'M', 'M', 'L', 'XL', 'XL', '2XL', '2XL', '3XL', '3XL', '4XL', '4XL' ) ),
            array( 'K', 'H',  array( '', '', 'L', 'XL', '2XL', '2XL', '2XL', '3XL', '4XL', '4XL', '4XL' ) ),
        );
    }
}

if ( ! function_exists( 'noriks_cashmeresweater_sizes' ) ) {
    /** NORIKS CashmereSweater: velicina, US, opseg prsa tijela, duljina, duljina rukava, sirina ramena, opseg prsa proizvoda.
     *  1:1 s »SIZE GUIDE« originala (meilleur-moment.com; Body Measurement US 6-10 / M / bust 130-134 cm, Product Measurement
     *  length 54 / sleeve 45 / shoulder 73 / bust 144 cm). Jedna velicina, opusteni kroj. */
    function noriks_cashmeresweater_sizes() {
        return array(
            array( 'M', 'EU 36–40', '130 – 134 cm', '54 cm', '45 cm', '73 cm', '144 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_dogbed_sizes' ) ) {
    /** NORIKS DogBed: velicina, vanjske mjere D x S x V (cm), unutarnji prostor za lezanje (cm), duljina psa, idealna tezina, pasmine.
     *  1:1 s tablice originala (doulia-store.com, »Guide des tailles«; »ako ste u dvojbi, odaberite vecu velicinu«). */
    function noriks_dogbed_sizes() {
        return array(
            array( 'M',   '60 × 45 × 30 cm',  '35 ± 5 × 30 ± 5 cm', 'do 30 cm', 'do 8 kg',  'jorkširski terijer, patuljasti jazavčar, shih tzu, pomeranac, čivava, mops' ),
            array( 'L',   '80 × 57 × 33 cm',  '55 ± 5 × 37 ± 5 cm', 'do 45 cm', 'do 15 kg', 'francuski buldog, jazavčar, patuljasti šnaucer' ),
            array( 'XL',  '100 × 67 × 40 cm', '71 ± 5 × 42 ± 5 cm', 'do 55 cm', 'do 25 kg', 'pudla, buldog, beagle, koli, bostonski terijer, shiba inu' ),
            array( '2XL', '120 × 75 × 40 cm', '87 ± 5 × 47 ± 5 cm', 'do 65 cm', 'do 35 kg', 'labrador, zlatni retriver, australski ovčar' ),
        );
    }
}

if ( ! function_exists( 'noriks_slingbag_sizes' ) ) {
    /** NORIKS SlingBag: velicina, visina x sirina x dubina (cm), podesivi remen, sto stane.
     *  1:1 z originala (conceptglobal.co, zavihek »Sizing & Capacity« + okno »Compare sizes«; mere originala v cm). */
    function noriks_slingbag_sizes() {
        return array(
            array( 'Mini',    '19 × 14 × 4 cm',   'do 130 cm', 'mobitel, ključevi, putovnica, kabeli za punjenje i prijenosna baterija' ),
            array( 'Regular', '22 × 15 × 4 cm',   'do 130 cm', 'sve iz Mini + grickalice, sunčane naočale, punjač, deblji novčanik, mali tablet' ),
            array( 'Max',     '28 × 19,5 × 6 cm', 'do 130 cm', 'sve iz Regular + knjiga, slušalice preko ušiju, tablet do 11"' ),
        );
    }
}

if ( ! function_exists( 'noriks_bathmat_sizes' ) ) {
    /** NORIKS BathMat: velicina, dimenzije (cm), debljina, gdje.
     *  1:1 z originala (modrnizd.com, zavihek »Care & Sizing«: Small 40cm x 60cm / 16in x 24in, Regular 50cm x 80cm / 20in x 32in;
     *  FAQ »Will it fit under my door?« under 5mm, »What size should I get?«). */
    function noriks_bathmat_sizes() {
        return array(
            array( 'Mala',       '40 × 60 cm', 'manje od 5 mm', 'manje kupaonice, toaleti i uski prostori' ),
            array( 'Standardna', '50 × 80 cm', 'manje od 5 mm', 'kupaonice standardne veličine – ispred tuša, kade ili umivaonika' ),
        );
    }
}

if ( ! function_exists( 'noriks_travelbag_sizes' ) ) {
    /** NORIKS TravelBag: model, dimenzije (cm), nacin nosenja, za koga.
     *  1:1 z originala (luhxe.com, okno »Which one is for me?« + »other details«: 20" x 9" x 12.5" = 51 x 23 x 32 cm, 1,1 kg). */
    function noriks_travelbag_sizes() {
        return array(
            array( 'Classic', '51 × 23 × 32 cm', 'u ruci ili preko ramena', 'Za brza putovanja i putnike u pokretu – lagana, praktična i elegantna. Ravno dno, bez kotačića.' ),
            array( 'Roller',  '51 × 23 × 32 cm', 'na kotačićima, u ruci ili preko ramena', 'Odvojiva ručka i kotačići skidaju se u nekoliko sekundi – torba na kotačićima kad vam treba, putna torba kad ne treba.' ),
        );
    }
}

if ( ! function_exists( 'noriks_comfortjeans_sizes' ) ) {
    /** NORIKS ComfortJeans: velicina (struk u incima), EU velicina, opseg struka tijela, opseg bokova tijela (cm),
     *  struk hlaca B (nerastegnut), bokovi hlaca, sirina nogavice C (cm).
     *  1:1 s tablice velicina originala (ninepine, »Size suggestions« + »Measurements of the pants«). */
    function noriks_comfortjeans_sizes() {
        return array(
            array( 'XXS (22/23)', 'EU 32',    '56 – 63 cm', '82 – 92 cm',   '58 cm', '84 cm',  '49 cm' ),
            array( 'XS (24/25)',  'EU 34',    '62 – 70 cm', '88 – 98 cm',   '64 cm', '90 cm',  '50,5 cm' ),
            array( 'S (26/27)',   'EU 36–38', '68 – 76 cm', '94 – 105 cm',  '70 cm', '96 cm',  '52 cm' ),
            array( 'M (28/29)',   'EU 40–42', '74 – 83 cm', '100 – 111 cm', '76 cm', '102 cm', '53,5 cm' ),
            array( 'L (30/31)',   'EU 44',    '80 – 94 cm', '106 – 124 cm', '82 cm', '108 cm', '55 cm' ),
            array( 'XL (32/33)',  'EU 46–48', '88 – 104 cm', '114 – 133 cm', '90 cm', '116 cm', '57 cm' ),
            array( 'XXL (34/35)', 'EU 48–50', '96 – 113 cm', '122 – 143 cm', '98 cm', '124 cm', '59 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_comfortjeans_lengths' ) ) {
    /** NORIKS ComfortJeans: duljina nogavice (unutarnji sav, in / cm), preporucena visina, unutarnji sav bosonogo.
     *  1:1 s tablice originala »Which length (inseam) should I choose?« (racunano za ravne cipele). */
    function noriks_comfortjeans_lengths() {
        return array(
            array( 'L26 (66 cm)', 'do 156 cm',    'do 66 cm' ),
            array( 'L28 (71 cm)', '153 – 163 cm', '65 – 71 cm' ),
            array( 'L30 (76 cm)', '160 – 171 cm', '70 – 76 cm' ),
            array( 'L32 (81 cm)', '168 – 179 cm', '75 – 81 cm' ),
            array( 'L34 (86 cm)', '176 – 186 cm', '80 – 86 cm' ),
            array( 'L36 (91 cm)', 'od 183 cm',    'od 83 cm' ),
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
    /** NORIKS Slippers: EU velicina, duljina stopala (cm) - UK/US velicine izpuscene (samo EUR, Dejan 26.10.2026).
     *  1:1 s tablice velicin originala ("US Size Chart" + "UK & International Size Chart", 8 velicin). */
    function noriks_slippers_sizes() {
        return array(
            array( 'XS - 34 do 35', '20,3–21,5 cm' ),
            array( 'S - 36 do 37', '21,6–22,7 cm' ),
            array( 'M - 38 do 39', '22,8–24,0 cm' ),
            array( 'L - 40 do 41', '24,1–25,3 cm' ),
            array( 'XL - 42 do 43', '25,4–26,5 cm' ),
            array( '2XL - 44 do 45', '26,6–27,8 cm' ),
            array( '3XL - 46 do 47', '27,9–29,0 cm' ),
            array( '4XL - 48 do 49', '29,1–30,2 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_anklesleeve_sizes' ) ) {
    /** NORIKS AnkleSleeve: velicina, broj cipele (EU).
     *  1:1 z originala flytex.fr ("Guide des tailles": S = 35-40, M = 41-43, L = 44-47). */
    function noriks_anklesleeve_sizes() {
        return array(
            array( 'S - 35 do 40', '35 do 40' ),
            array( 'M - 41 do 43', '41 do 43' ),
            array( 'L - 44 do 47', '44 do 47' ),
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
    /** NORIKS UtilityPants: velicina, struk, bokovi, visina, duljina, unutarnja duljina nogavice (cm) - UK/US palci izpusceni (samo EUR/cm, Dejan 26.10.2026).
     *  1:1 s tablice originala thetruetailorcompany.com (preporuka: ako ste izmedu dvije velicine, uzmite vecu). */
    function noriks_utilitypants_sizes() {
        return array(
            array( 'S', '78–82',   '94–98',   '170–175', '102', '76,2' ),
            array( 'M', '82–86',   '98–102',  '175–180', '104', '77' ),
            array( 'L', '86–91',   '102–107', '180–185', '106', '77,8' ),
            array( 'XL', '91–96',   '107–112', '185–190', '108', '78,6' ),
            array( '2XL', '96–102',  '112–118', '185–190', '110', '79,4' ),
            array( '3XL', '102–107', '119–125', '190–195', '111', '80,2' ),
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

if ( ! function_exists( 'noriks_tacpro_sizes' ) ) {
    /** NORIKS TacPro (taktične slušalke) — nema veličina, samo boja (Carbon Black, Army Green). */
    function noriks_tacpro_sizes() {
        return array();
    }
}

if ( ! function_exists( 'noriks_destapacan_sizes' ) ) {
    /** NORIKS DrainPro (prah za čišćenje odvoda) — nema veličina, nema boja. */
    function noriks_destapacan_sizes() {
        return array();
    }
}

if ( ! function_exists( 'noriks_ondersteun_sizes' ) ) {
    /** NORIKS SoftBack: veličina, košarica / opseg. */
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
    /** NORIKS Insoles — ortopedski ulošci za potporu stopala: velicina, EU broj (samo EUR, Dejan 26.10.2026). */
    function noriks_insoles_sizes() {
        return array(
            array( 'XS', '35 do 38' ),
            array( 'S', '38,5 do 41,5' ),
            array( 'M', '42 do 44' ),
            array( 'L', '44,5 do 46,5' ),
            array( 'XL', '47 do 48' ),
        );
    }
}

if ( ! function_exists( 'noriks_calendar_sizes' ) ) {
    /** NORIKS Calendar — digitalni obiteljski kalendar (bez velicina). */
    function noriks_calendar_sizes() {
        return array();
    }
}

if ( ! function_exists( 'noriks_faith_sizes' ) ) {
    /** NORIKS Faith — igra razgovora za pravu vjeru (bez velicina). */
    function noriks_faith_sizes() {
        return array();
    }
}

if ( ! function_exists( 'noriks_devotions_sizes' ) ) {
    /** NORIKS Devotions — 365 dnevnih molitava (bez velicina). */
    function noriks_devotions_sizes() {
        return array();
    }
}

if ( ! function_exists( 'noriks_travel_sizes' ) ) {
    /** NORIKS Travel — posteljica za pse u automobilu (2 veličine). */
    function noriks_travel_sizes() {
        return array(
            array( 'Standard', '131 × 61 × 5 cm', 'osobni automobili, SUV i pick-up srednje veličine', 'najmanje 132 cm' ),
            array( 'XL',       '153 × 61 × 5 cm', 'veliki pick-up, veliki SUV, kombi', 'najmanje 155 cm' ),
        );
    }
}

if ( ! function_exists( 'noriks_corrector_sizes' ) ) {
    /** NORIKS Corrector — korektor drzanja: velicina, tezina (podaci s originala). */
    function noriks_corrector_sizes() {
        return array(
            array( 'S', '151 g' ),
            array( 'M', '157,5 g' ),
            array( 'L', '162,5 g' ),
        );
    }
}

if ( ! function_exists( 'noriks_flops_sizes' ) ) {
    /** NORIKS Flops: dvojni EU brojevi 1:1 z originala (original nema tablice mjera). */
    function noriks_flops_sizes() {
        return array(
            array( '34/35' ), array( '36/37' ), array( '38/39' ), array( '40/41' ),
            array( '42/43' ), array( '44/45' ), array( '46/47' ),
        );
    }
}

if ( ! function_exists( 'noriks_velikost_oznake' ) ) {
    /**
     * Oznake velicin v izbirniku: crka + EU razpon („S - 36 do 38"), ce velikost doloca mera pa mera
     * („S - 76 do 80 cm") - Dejan 26.10.2026, brez US/UK. Vrednost atributa ostane gola crka
     * (cene po velicini, kosarica, narocila), spremeni se samo prikazano besedilo.
     * Podatki 1:1 iz tablic velicin izdelkov; jedrni izdelki (majice, bokserice, kompleti) niso vkljuceni.
     */
    function noriks_velikost_oznake( $product_id = null ) {
        if ( ! function_exists( 'noriks_is_type' ) ) { return array(); }
        $o = array(
            'sculptleg'    => array( 'XS' => '32 do 34', 'S' => '34 do 36', 'M' => '38 do 40', 'L' => '42 do 44', 'XL' => '46 do 48', '2XL' => '50 do 52', '3XL' => '54 do 56', '4XL' => '58 do 60', '5XL' => '62 do 64' ),
            'mamafit'      => array( 'S' => '34 do 36', 'M' => '38 do 40', 'L' => '40 do 42', 'XL' => '44 do 46', '2XL' => '48 do 50', '3XL' => '50 do 52' ),
            // ShapeBody: original nima mer (P-2XG) - standardne EU zenske konfekcijske stevilke.
            'gordura'      => array( 'S' => '36 do 38', 'M' => '38 do 40', 'L' => '40 do 42', 'XL' => '42 do 44', '2XL' => '44 do 46', '3XL' => '46 do 48' ),
            'insoles'      => array( 'XS' => '35 do 38', 'S' => '38,5 do 41,5', 'M' => '42 do 44', 'L' => '44,5 do 46,5', 'XL' => '47 do 48' ),
            'smartjacket'  => array( 'XS' => '34 do 36', 'S' => '36 do 38', 'M' => '38 do 40', 'L' => '40 do 42', 'XL' => '44 do 46', '2XL' => '46 do 48', '3XL' => '48 do 50', '4XL' => '50 do 52' ),
            'slim'         => array( 'XS' => '32 do 34', 'S' => '36', 'M' => '38 do 40', 'L' => '42 do 44', 'XL' => '46 do 48', '2XL' => '50 do 52', '3XL' => '54 do 56', '4XL' => '58 do 60', '5XL' => '62 do 64' ),
            'kompwom'      => array( 'S' => '30 do 34', 'M' => '36 do 38', 'L' => '40 do 42', 'XL' => '44', '2XL' => '46 do 48', '3XL' => '50' ),
            // velikost doloca mera (opseg struka / grudi / dlana / noge, tezina)
            'leakbrief'    => array( 'XS' => '32 do 34', 'S' => '34 do 36', 'M' => '36 do 38', 'L' => '38 do 40', 'XL' => '40 do 42', '2XL' => '42 do 44', '3XL' => '44 do 46', '4XL' => '46 do 48' ),
            'shiftclog'    => array( 'XS' => '36 do 37', 'S' => '38 do 39', 'M' => '40 do 41', 'L' => '42 do 43', 'XL' => '44 do 45', '2XL' => '46 do 47' ),
            'tradesman'    => array( 'M' => '39 do 42', 'L' => '42,5 do 46', 'XL' => '46,5 do 49,5' ),
            'diskret'      => array( 'S' => 'košarice AA do B', 'M' => 'košarice B do F', 'L' => 'košarice F do G' ),
            'alpakacrew'   => array( 'S' => '35 do 37,5', 'M' => '39 do 42,5', 'L' => '43 do 46', 'XL' => '46,5 do 49,5' ),
            'shapeshorts'  => array( 'XS-S' => '64 do 76 cm', 'M-L' => '77 do 90 cm', 'XL-2XL' => '91 do 112 cm', '3XL' => '112 do 127 cm', '4XL' => '128 do 140 cm' ),
            'utilitypants' => array( 'S' => '78 do 82 cm', 'M' => '82 do 86 cm', 'L' => '86 do 91 cm', 'XL' => '91 do 96 cm', '2XL' => '96 do 102 cm', '3XL' => '102 do 107 cm' ),
            'bratank'      => array( 'S' => '76 do 80 cm', 'M' => '81 do 85 cm', 'L' => '86 do 91 cm', 'XL' => '92 do 97 cm', '2XL' => '98 do 103 cm', '3XL' => '104 do 109 cm', '4XL' => '110 do 115 cm' ),
            'brassiere'    => array( 'XS' => '77 do 83 cm', 'S' => '82 do 88 cm', 'M' => '87 do 93 cm', 'L' => '92 do 98 cm', 'XL' => '97 do 103 cm', '2XL' => '102 do 108 cm', '3XL' => '107 do 113 cm', '4XL' => '112 do 118 cm', '5XL' => '117 do 123 cm' ),
            'hands'        => array( 'S' => '17,8 do 19,1 cm', 'M' => '19,1 do 21,6 cm', 'L' => '21,6 do 22,9 cm' ),
            'buildshirt'   => array( 'XS' => 'do 86 cm', 'S' => '86 do 91 cm', 'M' => '91 do 97 cm', 'L' => '97 do 103 cm', 'XL' => '103 do 108 cm', '2XL' => '108 do 113 cm', '3XL' => '113 do 118 cm', '4XL' => '118 do 126 cm', '5XL' => '126 do 133 cm', '6XL' => '133 do 142 cm' ),
            'celleg'       => array( 'XS' => '56 do 62 cm', 'S' => '62 do 68 cm', 'M' => '68 do 74 cm', 'L' => '74 do 82 cm', 'XL' => '82 do 90 cm', '2XL' => '90 do 98 cm', '3XL' => '98 do 106 cm', '4XL' => '106 do 116 cm', '5XL' => '116 do 126 cm' ),
            'relief'       => array( 'S' => '32 do 40 cm', 'M' => '40 do 48 cm', 'L' => '48 do 54 cm', 'XL' => '54 do 59 cm', '2XL' => '59 do 64 cm', '3XL' => '64 do 72 cm', '4XL' => '72 do 80 cm' ),
            // BRA: EU traka (opseg ispod grudi) iz tablice kosarica x traka, US traka 30-48 -> EU 65-110.
            'bra'          => array( 'S' => '65 do 75', 'M' => '65 do 80', 'L' => '75 do 90', 'XL' => '80 do 95', '2XL' => '80 do 100', '3XL' => '90 do 110', '4XL' => '100 do 110' ),
            // FlexShirt: velikost po tezini iz tablice visina x tezina.
            // Classics: original ima samo visino/tezino - standardne EU zenske konfekcijske stevilke (XS 32/34 ... 2XL 46/48).
            'classics'     => array( 'XS-S' => '32 do 36', 'M-L' => '38 do 42', 'XL-2XL' => '44 do 48' ),
            'sr'           => array( 'S' => '59 do 68 kg', 'M' => '69 do 84 kg', 'L' => '84 do 95 kg', 'XL' => '96 do 113 kg', '2XL' => '114 do 129 kg', '3XL' => '130 do 150 kg' ),
        );
        foreach ( $o as $tip => $m ) {
            if ( noriks_is_type( $tip, $product_id ) ) { return $m; }
        }
        return array();
    }
    function noriks_velikost_oznaka( $val, $product_id = null ) {
        $m = noriks_velikost_oznake( $product_id );
        $k = trim( (string) $val );
        return isset( $m[ $k ] ) ? $k . ' - ' . $m[ $k ] : $val;
    }
}

if ( ! function_exists( 'noriks_bra_tabela_html' ) ) {
    /**
     * NORIKS BRA: tablica kosarica (A–H) x opseg ispod grudi kot HTML namesto slike bra-09-tablica-velicina.webp,
     * ki je imela US trake 30–48 - zdaj EU traka 65–110 (US 30 = EU 65 … US 48 = EU 110), polja 1:1 s slike.
     * Stili inline (LiteSpeed UCSS). $id: id tabele (modal ga uporablja za prilagoditev sirine).
     */
    function noriks_bra_tabela_html( $id = '' ) {
        $trake = array( 65, 70, 75, 80, 85, 90, 95, 100, 105, 110 );
        $mreza = array(
            'A' => array( '', 'S', 'S', 'M', 'L', '', '', '', '', '' ),
            'B' => array( 'S', 'S', 'S', 'M', 'L', 'L', 'XL', '', '', '' ),
            'C' => array( 'S', 'S', 'M', 'L', 'L', 'XL', 'XL', '2XL', '3XL', '3XL' ),
            'D' => array( 'S', 'M', 'M', 'L', 'XL', 'XL', '2XL', '3XL', '3XL', '4XL' ),
            'E' => array( 'M', 'M', 'L', 'L', 'XL', '2XL', '2XL', '3XL', '4XL', '4XL' ),
            'F' => array( 'M', 'M', 'L', 'XL', '2XL', '2XL', '3XL', '3XL', '4XL', '4XL' ),
            'G' => array( '', '', '', 'XL', '2XL', '2XL', '3XL', '3XL', '4XL', '' ),
            'H' => array( '', '', '', '2XL', '2XL', '3XL', '3XL', '4XL', '', '' ),
        );
        $td = 'padding:7px 2px;text-align:center;border-bottom:1px solid #eee;font-size:12px;white-space:nowrap;';
        $h  = '<table' . ( $id ? ' id="' . esc_attr( $id ) . '"' : '' ) . ' style="width:100%;border-collapse:collapse;margin:0 0 14px;">';
        $h .= '<thead><tr><th style="' . $td . 'background:#111;color:#fff;font-weight:700;text-align:left;">Košarica</th>';
        $h .= '<th colspan="10" style="' . $td . 'background:#111;color:#fff;font-weight:700;">Opseg ispod grudi (EU)</th></tr>';
        $h .= '<tr><th style="' . $td . 'background:#111;color:#fff;"></th>';
        foreach ( $trake as $t ) { $h .= '<th style="' . $td . 'background:#111;color:#fff;font-weight:700;">' . (int) $t . '</th>'; }
        $h .= '</tr></thead><tbody>';
        $i = 0;
        foreach ( $mreza as $k => $vrsta ) {
            $bg = ( $i++ % 2 ) ? '#f7f3fb' : '#fff';
            $h .= '<tr style="background:' . $bg . ';"><th scope="row" style="' . $td . 'font-weight:800;">' . esc_html( $k ) . '</th>';
            foreach ( $vrsta as $v ) { $h .= '<td style="' . $td . ( $v === '' ? 'color:#bbb;' : 'font-weight:700;' ) . '">' . ( $v === '' ? '–' : esc_html( $v ) ) . '</td>'; }
            $h .= '</tr>';
        }
        return $h . '</tbody></table>';
    }
}

if ( ! function_exists( 'noriks_size_tabela' ) ) {
    /**
     * Tablica velicina izdelka za harmoniko "Tablica veličina" (meta.php) in skupni modal
     * (template_parts/size-chart-tabela.php). Vrne null, ce tip nima lastne tablice -
     * takrat ostane dosedanje obnasanje. Podatki iz noriks_<tip>_sizes() (1:1 z originalov).
     */
    function noriks_size_tabela( $product_id = null ) {
        if ( ! function_exists( 'noriks_is_type' ) ) { return null; }
        if ( noriks_is_type( 'muslin', $product_id ) ) {
            $v = array(); foreach ( noriks_muslin_sizes() as $r ) { $v[] = array( $r[0], $r[1] ); }
            return array( 'uvod' => 'Četiri veličine – od <strong>prekrivača za kauč</strong> do pokrivača za <strong>veliki obiteljski krevet</strong>.',
                'glava' => array( 'Veličina', 'Dimenzije' ), 'vrstice' => $v,
                'opomba' => 'Muslin je prirodan i lagano elastičan materijal, pa su manja odstupanja u dimenzijama normalna.' );
        }
        if ( noriks_is_type( 'silkcase', $product_id ) ) {
            return array( 'uvod' => 'Odaberite veličinu prema <strong>dimenzijama svojeg jastuka</strong>.',
                'glava' => array( 'Veličina', 'Dimenzije', 'Za jastuk' ), 'vrstice' => noriks_silkcase_sizes(), 'opomba' => '' );
        }
        if ( noriks_is_type( 'corrector', $product_id ) ) {
            return array( 'uvod' => 'NORIKS Corrector dostupan je u veličinama <strong>S, M i L</strong>. Zategnutost se podešava prema vašem tijelu.',
                'glava' => array( 'Veličina', 'Težina korektora' ), 'vrstice' => noriks_corrector_sizes(),
                'opomba' => '250 × 275 × 110 mm.' );
        }
        if ( noriks_is_type( 'flops', $product_id ) ) {
            $v = array(); foreach ( noriks_flops_sizes() as $r ) { $b = explode( '/', $r[0] ); $v[] = array( $r[0], $b[0] . ' ili ' . $b[1] ); }
            return array( 'uvod' => 'Papuče su <strong>unisex</strong> i dolaze u <strong>dvojnim EU brojevima</strong> — odaberite raspon u kojem je vaš uobičajeni broj cipela.',
                'glava' => array( 'Veličina', 'Vaš broj cipela (EU)' ), 'vrstice' => $v, 'opomba' => '' );
        }
        if ( noriks_is_type( 'insoles', $product_id ) ) {
            return array( 'uvod' => 'Odaberite <strong>svoju veličinu</strong> prema donjoj tablici. Ulošci se mogu skratiti po oznaci na vrhu kako bi odgovarali vašoj cipeli.',
                'glava' => array( 'Veličina', 'EUR' ), 'vrstice' => noriks_insoles_sizes(),
                'opomba' => 'Ulošci se stavljaju umjesto tvorničkog uloška, nikada preko njega.' );
        }
        if ( noriks_is_type( 'travel', $product_id ) ) {
            return array( 'uvod' => 'Prije narudžbe izmjerite <strong>širinu stražnjeg sjedala</strong> i odaberite veličinu koja mu odgovara.',
                'glava' => array( 'Veličina', 'Mjere', 'Vozila', 'Širina sjedala' ), 'vrstice' => noriks_travel_sizes(), 'opomba' => '' );
        }
        if ( noriks_is_type( 'gordura', $product_id ) ) {
            return array( 'uvod' => 'Body dolazi u <strong>šest veličina</strong>, od S do 3XL.',
                'glava' => array( 'Veličina', 'EU' ), 'vrstice' => array_map( function ( $r ) use ( $product_id ) {
                    $m = noriks_velikost_oznake( $product_id ); return array( $r[0], isset( $m[ $r[0] ] ) ? str_replace( ' do ', ' – ', $m[ $r[0] ] ) : '' );
                }, noriks_gordura_sizes() ),
                'opomba' => 'Odaberite veličinu koju inače nosite.' );
        }
        if ( noriks_is_type( 'draps', $product_id ) ) {
            return array( 'uvod' => 'Odaberite veličinu prema <strong>širini kreveta</strong>.',
                'glava' => array( 'Veličina', 'Prikladno za', 'Perilica' ), 'vrstice' => noriks_draps_sizes(),
                'opomba' => 'Pokrivač se mora slobodno okretati u bubnju perilice.' );
        }
        if ( noriks_is_type( 'zipcomp', $product_id ) ) {
            return array( 'uvod' => 'Izmjerite <strong>opseg lista na najširem dijelu</strong> – to određuje veličinu, a ne broj cipele.',
                'glava' => array( 'Veličina', 'Broj cipele', 'Opseg lista', 'Visina' ), 'vrstice' => noriks_zipcomp_sizes(),
                'opomba' => 'Između dvije veličine? Uvijek uzmite veću.' );
        }
        if ( noriks_is_type( 'sunstep', $product_id ) ) {
            return array( 'uvod' => 'Izmjerite <strong>duljinu stopala</strong> i usporedite je s duljinom cipelice. Veličina L odgovara djeci od 2 do 5 godina.',
                'glava' => array( 'Veličina (EU)', 'Dob', 'Duljina cipelice' ), 'vrstice' => noriks_sunstep_sizes(),
                'opomba' => 'Ako je dijete između dvije veličine, uzmite veću – cipelica je elastična.' );
        }
        if ( noriks_is_type( 'noiron', $product_id ) ) {
            return array( 'uvod' => 'Broj veličine je <strong>opseg ovratnika u cm</strong> (39–48), u zagradi je slovna oznaka. Košulja je <strong>slim kroja</strong> – naručite veličinu koju inače nosite.',
                'glava' => array( 'Veličina', 'Širina ramena', 'Opseg prsa', 'Dužina košulje', 'Dužina rukava' ), 'vrstice' => noriks_noiron_sizes(),
                'opomba' => 'Mjere su mjere košulje u cm. Ako ste između dvije veličine, uzmite veću.' );
        }
        if ( noriks_is_type( 'sculptleg', $product_id ) ) {
            return array( 'uvod' => 'Tajice su krojene standardno – odaberite <strong>veličinu koju inače nosite za hlače</strong>. Provjerite opseg struka i bokova.',
                'glava' => array( 'Veličina', 'EU', 'Opseg struka', 'Opseg bokova' ), 'vrstice' => noriks_sculptleg_sizes(),
                'opomba' => 'Između dvije veličine? Uzmite manju.' );
        }
        if ( noriks_is_type( 'leakbrief', $product_id ) ) {
            return array( 'uvod' => 'Veličinu odaberite prema <strong>opsegu struka i bokova</strong>. Obično odgovara vaša uobičajena veličina.',
                'glava' => array( 'Veličina', 'EU', 'Opseg struka (cm)', 'Opseg bokova (cm)' ), 'vrstice' => noriks_leakbrief_sizes(),
                'opomba' => 'Između dvije veličine? Uzmite veću.' );
        }
        if ( noriks_is_type( 'shiftclog', $product_id ) ) {
            return array( 'uvod' => 'Veličinu odaberite prema svom <strong>broju cipele (EU)</strong>. Klompe su unisex.',
                'glava' => array( 'Veličina', 'Broj cipele (EU)' ), 'vrstice' => noriks_shiftclog_sizes(),
                'opomba' => 'Između dvije veličine? Uzmite veću.' );
        }
        if ( noriks_is_type( 'tradesman', $product_id ) ) {
            return array( 'uvod' => 'Veličinu odaberite prema svom <strong>broju cipele (EU)</strong>.',
                'glava' => array( 'Veličina', 'Broj cipele (EU) – muški', 'Broj cipele (EU) – ženski' ), 'vrstice' => noriks_tradesman_sizes(),
                'opomba' => 'Između dvije veličine? Uzmite veću.' );
        }
        if ( noriks_is_type( 'diskret', $product_id ) ) {
            return array( 'uvod' => 'Veličinu odaberite prema <strong>košarici grudnjaka</strong> koju inače nosite.',
                'glava' => array( 'Veličina', 'Promjer', 'Košarica grudnjaka' ), 'vrstice' => noriks_diskret_sizes(),
                'opomba' => 'Između dvije veličine? Uzmite veću – veći prekrivač rjeđe ocrtava rub ispod odjeće.' );
        }
        if ( noriks_is_type( 'alpakacrew', $product_id ) ) {
            return array( 'uvod' => 'Veličinu odaberite prema svom <strong>broju cipele (EU)</strong>.',
                'glava' => array( 'Veličina', 'Broj cipele (EU)' ), 'vrstice' => noriks_alpakacrew_sizes(),
                'opomba' => 'Između dvije veličine? Uzmite veću.' );
        }
        if ( noriks_is_type( 'shapeshorts', $product_id ) ) {
            return array( 'uvod' => 'Izmjerite <strong>opseg struka</strong> (u visini pupka) i odaberite veličinu prema tablici.',
                'glava' => array( 'Veličina', 'Opseg struka' ), 'vrstice' => noriks_shapeshorts_sizes(),
                'opomba' => 'Između dvije veličine? Uzmite veću.' );
        }
        if ( noriks_is_type( 'mamafit', $product_id ) ) {
            return array( 'uvod' => 'Izmjerite <strong>opseg struka</strong> i odaberite svoju uobičajenu veličinu – tkanina se prilagođava tijelu.',
                'glava' => array( 'Veličina', 'Opseg struka', 'EU veličina' ), 'vrstice' => noriks_mamafit_sizes(),
                'opomba' => 'Između dvije veličine? Za čvršću potporu uzmite manju, za više udobnosti cijeli dan veću.' );
        }
        if ( noriks_is_type( 'classics', $product_id ) ) {
            return array( 'uvod' => 'Materijal se rasteže u svim smjerovima, pa svaka veličina pokriva <strong>raspon visine i težine</strong>.',
                'glava' => array( 'Veličina', 'EU veličina', 'Visina', 'Težina', 'Unutarnja duljina noge' ), 'vrstice' => noriks_classics_sizes(),
                'opomba' => 'Između dvije veličine ili ste višeg rasta? Uzmite veću veličinu.' );
        }
        if ( noriks_is_type( 'ondersteun', $product_id ) ) {
            // 1:1 z originala (lindraco.nl, Maattabel): opseg ispod grudi -> EU, razlika do najpunijeg dijela grudi -> kosarica.
            // Prikazane samo velicine, ki jih nudimo (XS–2XL); kosarici F in G imata pri originalu samo 3XL–5XL.
            return array( 'uvod' => '<strong>1.</strong> Izmjerite opseg tijela tik ispod grudi (gdje inače sjedi traka grudnjaka). <strong>2.</strong> Izmjerite opseg preko najpunijeg dijela grudi i oduzmite prvu mjeru – razlika određuje košaricu.',
                'glava' => array( 'Ispod grudi (EU)', 'A (+10–12 cm)', 'B (+12–14 cm)', 'C (+14–16 cm)', 'D (+16–18 cm)', 'E (+18–20 cm)' ),
                'vrstice' => array(
                    array( '63–67 cm (65)',  'XS', 'XS',  'S',   '–',   '–' ),
                    array( '68–72 cm (70)',  'XS', 'S',   'S',   'S',   'M' ),
                    array( '73–77 cm (75)',  'S',  'S',   'M',   'M',   'L' ),
                    array( '78–82 cm (80)',  'M',  'M',   'L',   'L',   'XL' ),
                    array( '83–87 cm (85)',  '–',  'L',   'L',   'XL',  '2XL' ),
                    array( '88–92 cm (90)',  '–',  'XL',  'XL',  'XL',  '2XL' ),
                    array( '93–97 cm (95)',  '–',  '2XL', '2XL', '2XL', '–' ),
                ),
                'opomba' => 'Između dvije veličine? Preporučujemo veću veličinu za najbolju udobnost.' );
        }
        return null;
    }
}
