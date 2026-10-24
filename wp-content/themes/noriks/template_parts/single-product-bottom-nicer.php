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


if ( noriks_is_type( 'giovasa' ) ) {
    include $noriks_pb_dir . 'why-giovasa.php';
}
// FIELDOPS (taktične slušalke)
if ( noriks_is_type( 'fieldops' ) ) {
    include $noriks_pb_dir . 'why-fieldops.php';
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
if ( noriks_is_type( 'ondersteun' ) ) {
if ( noriks_is_type( 'destapacan' ) ) {
    include $noriks_pb_dir . 'why-destapacan.php';
}
    include $noriks_pb_dir . 'why-ondersteun.php';
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

// NORIKS SEAL (orto-seal) — rucni vakuumski aparat za hranu
if ( noriks_is_type( 'seal' ) ) {
    include $noriks_pb_dir . 'why-seal.php';
}

// NORIKS FlexShirt (orto-sr) — rastezljiva kosulja bez guzvanja
if ( noriks_is_type( 'sr' ) ) {
    include $noriks_pb_dir . 'why-sr.php';
}

// NORIKS Snug (orto-snug) — jastuk za cijelo tijelo
if ( noriks_is_type( 'snug' ) ) {
    include $noriks_pb_dir . 'why-snug.php';
}

// NORIKS FIT Woman (orto-kompwom) — oblikujuca majica
if ( noriks_is_type( 'kompwom' ) ) {
    include $noriks_pb_dir . 'why-kompwom.php';
}

// NORIKS Pal (orto-pal) — stap za hodanje
if ( noriks_is_type( 'pal' ) ) {
    include $noriks_pb_dir . 'why-pal.php';
}

// NORIKS Slim (orto-slim) — oblikujuce gacice visokog struka
if ( noriks_is_type( 'slim' ) ) {
    include $noriks_pb_dir . 'why-slim.php';
}

// NORIKS Bowl (orto-bowl) — povisena zdjelica za pse
if ( noriks_is_type( 'bowl' ) ) {
    include $noriks_pb_dir . 'why-bowl.php';
}

// NORIKS Relief (orto-relief) — bambusove kompresijske carape bez prstiju
if ( noriks_is_type( 'relief' ) ) {
    include $noriks_pb_dir . 'why-relief.php';
}

// NORIKS GelSeat (orto-gelseat) — gel jastuk za sjedenje
if ( noriks_is_type( 'gelseat' ) ) {
    include $noriks_pb_dir . 'why-gelseat.php';
}

// NORIKS KneeTape (orto-kneetape) — vec izrezana kinezioloska traka za koljeno
if ( noriks_is_type( 'kneetape' ) ) {
    include $noriks_pb_dir . 'why-kneetape.php';
}

// NORIKS KneeBrace (orto-kneebrace) — patelarni steznik
if ( noriks_is_type( 'kneebrace' ) ) {
    include $noriks_pb_dir . 'why-kneebrace.php';
}

// NORIKS Hands (orto-hands) — stabilizator palca
if ( noriks_is_type( 'hands' ) ) {
    include $noriks_pb_dir . 'why-hands.php';
}

// NORIKS BuildShirt (orto-buildshirt) — majica s ugradenim grudnjakom
if ( noriks_is_type( 'buildshirt' ) ) {
    include $noriks_pb_dir . 'why-buildshirt.php';
}

// NORIKS CelLeg (orto-celleg) — 3D kompresijske tajice protiv celulita
if ( noriks_is_type( 'celleg' ) ) {
    include $noriks_pb_dir . 'why-celleg.php';
}

// NORIKS StepCloud (orto-stepcloud) — masazni ulosci s potporom svoda
if ( noriks_is_type( 'stepcloud' ) ) {
    include $noriks_pb_dir . 'why-stepcloud.php';
}

// NORIKS SlabProof (orto-slabproof) — radne carape s jastucenjem za beton
if ( noriks_is_type( 'slabproof' ) ) {
    include $noriks_pb_dir . 'why-slabproof.php';
}

// NORIKS Insoles (orto-insoles) — ortopedski ulosci s potporom svoda
if ( noriks_is_type( 'insoles' ) ) {
    include $noriks_pb_dir . 'why-insoles.php';
}

// NORIKS Brassiere (orto-brassiere) — grudnjak bez zica s prirodnim podizanjem
if ( noriks_is_type( 'brassiere' ) ) {
    include $noriks_pb_dir . 'why-brassiere.php';
}

// NORIKS Blanket (orto-blanket) — kompresijska vreca za smirenje i bolji san
if ( noriks_is_type( 'blanket' ) ) {
    include $noriks_pb_dir . 'why-blanket.php';
}

// NORIKS BraTank (orto-bratank) — majica s ugradenim grudnjakom bez trake
if ( noriks_is_type( 'bratank' ) ) {
    include $noriks_pb_dir . 'why-bratank.php';
}

// NORIKS Polo (orto-polo) — udobna muska polo majica od rastezljivog pletiva
if ( noriks_is_type( 'polo' ) ) {
    include $noriks_pb_dir . 'why-polo.php';
}

// NORIKS TitaniumPan (orto-titaniumpan) — titanijska kovana tava bez premaza
if ( noriks_is_type( 'titaniumpan' ) ) {
    include $noriks_pb_dir . 'why-titaniumpan.php';
}

// NORIKS Harness (orto-harness) — oprsnica za pse protiv povlacenja
if ( noriks_is_type( 'harness' ) ) {
    include $noriks_pb_dir . 'why-harness.php';
}

// NORIKS SeatCover (orto-seatcover) — vodootporna presvlaka za autosjedalo od frotira
if ( noriks_is_type( 'seatcover' ) ) {
    include $noriks_pb_dir . 'why-seatcover.php';
}

// NORIKS Slippers (orto-slippers) — tople papuce s debelim potplatom za kucu i van
if ( noriks_is_type( 'slippers' ) ) {
    include $noriks_pb_dir . 'why-slippers.php';
}

// NORIKS AnkleSleeve (orto-anklesleeve) — kompresijska potpora za glezanj
if ( noriks_is_type( 'anklesleeve' ) ) {
    include $noriks_pb_dir . 'why-anklesleeve.php';
}

// NORIKS CorkSandals (orto-corksandals) — ljetne sandale od pluta s uloskom od antilopa
if ( noriks_is_type( 'corksandals' ) ) {
    include $noriks_pb_dir . 'why-corksandals.php';
}

// NORIKS Raincoat (orto-raincoat) — kratka oversized kisna jakna s kapuljacom
if ( noriks_is_type( 'raincoat' ) ) {
    include $noriks_pb_dir . 'why-raincoat.php';
}

// NORIKS FloatSuit (orto-floatsuit) — djecji kupaci kostim s ugradenim plovcima
if ( noriks_is_type( 'floatsuit' ) ) {
    include $noriks_pb_dir . 'why-floatsuit.php';
}

// NORIKS PhoneStrap (orto-phonestrap) — drzac za mobitel protiv ispadanja
if ( noriks_is_type( 'phonestrap' ) ) {
    include $noriks_pb_dir . 'why-phonestrap.php';
}

// NORIKS Doggo (orto-doggo) — sigurnosni autokrevet za pse s ISOFIX kopcama
if ( noriks_is_type( 'doggo' ) ) {
    include $noriks_pb_dir . 'why-doggo.php';
}

// NORIKS Bracelet (orto-bracelet) — narukvica od hematita
if ( noriks_is_type( 'bracelet' ) ) {
    include $noriks_pb_dir . 'why-bracelet.php';
}

// NORIKS WineCooler (orto-winecooler) — štapić za hlađenje vina s izljevom
if ( noriks_is_type( 'winecooler' ) ) {
    include $noriks_pb_dir . 'why-winecooler.php';
}

// NORIKS SupportSocks (orto-supportsocks) — potporne čarape 12–15 mmHg
if ( noriks_is_type( 'supportsocks' ) ) {
    include $noriks_pb_dir . 'why-supportsocks.php';
}

// NORIKS Tuck (orto-tuck) — oblikujuce kratke hlacice visokog struka
if ( noriks_is_type( 'tuck' ) ) {
    include $noriks_pb_dir . 'why-tuck.php';
}

// NORIKS FleeceTights (orto-fleecetights) — tople hulahopke s flisom koje izgledaju kao koza
if ( noriks_is_type( 'fleecetights' ) ) {
    include $noriks_pb_dir . 'why-fleecetights.php';
}

// NORIKS DogRaincoat (orto-dograincoat) — prozracna kabanica za pse
if ( noriks_is_type( 'dograincoat' ) ) {
    include $noriks_pb_dir . 'why-dograincoat.php';
}

// NORIKS MaternityLeggings (orto-maternityleggings) — tajice za trudnice
if ( noriks_is_type( 'maternityleggings' ) ) {
    include $noriks_pb_dir . 'why-maternityleggings.php';
}

// NORIKS VacuumSealer (orto-vacuumsealer) — bezicni rucni vakuumski aparat za hranu
if ( noriks_is_type( 'vacuumsealer' ) ) {
    include $noriks_pb_dir . 'why-vacuumsealer.php';
}

// NORIKS AirTravel (orto-airtravel, SKU NORIKS-AIRTRAVEL) — putni ruksak s vakuumskom kompresijom
if ( noriks_is_type( 'airtravel' ) ) {
    include $noriks_pb_dir . 'why-airtravel.php';
}

// NORIKS SeatCushion (orto-seatcushion) — ortopedski jastuk za sjedenje (GelSeat je drug izdelek: why-gelseat.php)
if ( noriks_is_type( 'seatcushion' ) ) {
    include $noriks_pb_dir . 'why-seatcushion.php';
}

// NORIKS KneeLight (orto-kneelight) — uredaj za koljeno s toplinom, vibracijom i crvenim svjetlom
if ( noriks_is_type( 'kneelight' ) ) {
    include $noriks_pb_dir . 'why-kneelight.php';
}

// NORIKS UpholsteryCleaner (orto-upholsterycleaner) — usisavac za mokro ciscenje presvlaka
if ( noriks_is_type( 'upholsterycleaner' ) ) {
    include $noriks_pb_dir . 'why-upholsterycleaner.php';
}

// NORIKS NeckMassager (orto-neckmassager) — masazer za vrat i ramena
if ( noriks_is_type( 'neckmassager' ) ) {
    include $noriks_pb_dir . 'why-neckmassager.php';
}

// NORIKS GroundingMat (orto-groundingmat) — podloga za uzemljenje
if ( noriks_is_type( 'groundingmat' ) ) {
    include $noriks_pb_dir . 'why-groundingmat.php';
}

// NORIKS GrillBasket (orto-grillbasket) — valjkasta kosara za rostilj
if ( noriks_is_type( 'grillbasket' ) ) {
    include $noriks_pb_dir . 'why-grillbasket.php';
}

// NORIKS PetHairGlove (orto-pethairglove) — rukavica za uklanjanje dlaka kucnih ljubimaca
if ( noriks_is_type( 'pethairglove' ) ) {
    include $noriks_pb_dir . 'why-pethairglove.php';
}

// NORIKS TheraPillow (orto-therapillow) — terapijski jastuk za vrat 3 u 1
if ( noriks_is_type( 'therapillow' ) ) {
    include $noriks_pb_dir . 'why-therapillow.php';
}

// NORIKS MattressTopper (orto-mattresstopper) — ekstra debeli nadmadrac od 10 cm
if ( noriks_is_type( 'mattresstopper' ) ) {
    include $noriks_pb_dir . 'why-mattresstopper.php';
}

// NORIKS DualPillow (orto-dualpillow) — jastuk 2 u 1
if ( noriks_is_type( 'dualpillow' ) ) {
    include $noriks_pb_dir . 'why-dualpillow.php';
}

// NORIKS CalmingCollar (orto-calmingcollar) — umirujuca ovratnica s feromonima za macke
if ( noriks_is_type( 'calmingcollar' ) ) {
    include $noriks_pb_dir . 'why-calmingcollar.php';
}

// NORIKS PetDental (orto-petdental) — sprej za njegu zubi pasa i macaka
if ( noriks_is_type( 'petdental' ) ) {
    include $noriks_pb_dir . 'why-petdental.php';
}

// NORIKS ShowerTowel (orto-showertowel) — antibakterijski rucnik za piling tijela
if ( noriks_is_type( 'showertowel' ) ) {
    include $noriks_pb_dir . 'why-showertowel.php';
}

// NORIKS AntiTheftBag (orto-antitheftbag) — luksuzna hobo torba sa zastitom od krade
if ( noriks_is_type( 'antitheftbag' ) ) {
    include $noriks_pb_dir . 'why-antitheftbag.php';
}

// NORIKS UltrasonicCleaner (orto-ultrasoniccleaner) — ultrazvucni i UV-C cistac za dentalna pomagala
if ( noriks_is_type( 'ultrasoniccleaner' ) ) {
    include $noriks_pb_dir . 'why-ultrasoniccleaner.php';
}

// NORIKS PillOrganizer (orto-pillorganizer) — organizator za tablete s 14 vrecica sa zatvaracem
if ( noriks_is_type( 'pillorganizer' ) ) {
    include $noriks_pb_dir . 'why-pillorganizer.php';
}

// NORIKS BottleSling (orto-bottlesling) — izolirana torbica za termo casu s naramenicom
if ( noriks_is_type( 'bottlesling' ) ) {
    include $noriks_pb_dir . 'why-bottlesling.php';
}

// NORIKS FleeceShawl (orto-fleeceshawl) — mekani sal-ogrtac od flisa
if ( noriks_is_type( 'fleeceshawl' ) ) {
    include $noriks_pb_dir . 'why-fleeceshawl.php';
}

// NORIKS SilkBoxers (orto-silkboxers) — svilene bokserice za cjelodnevnu udobnost
if ( noriks_is_type( 'silkboxers' ) ) {
    include $noriks_pb_dir . 'why-silkboxers.php';
}

// NORIKS ModalSweatshirt (orto-modalsweatshirt) — dukserica od modala s okruglim izrezom
if ( noriks_is_type( 'modalsweatshirt' ) ) {
    include $noriks_pb_dir . 'why-modalsweatshirt.php';
}

// NORIKS TechTee (orto-techtee) — ikonicna muska majica s okruglim izrezom
if ( noriks_is_type( 'techtee' ) ) {
    include $noriks_pb_dir . 'why-techtee.php';
}

// NORIKS WideToeShoes (orto-widetoeshoes) — tenisice sa sirokim prednjim dijelom
if ( noriks_is_type( 'widetoeshoes' ) ) {
    include $noriks_pb_dir . 'why-widetoeshoes.php';
}

// NORIKS ThermoBoots (orto-thermoboots) — vodootporne zimske cizme s podstavom od flisa
if ( noriks_is_type( 'thermoboots' ) ) {
    include $noriks_pb_dir . 'why-thermoboots.php';
}

// NORIKS LeatherBoots (orto-leatherboots) — muske udobne kozne cizme
if ( noriks_is_type( 'leatherboots' ) ) {
    include $noriks_pb_dir . 'why-leatherboots.php';
}

// NORIKS SnugBoot (orto-snugboot) — zimske barefoot cizme s krznenom podstavom (ne Snug jastuk!)
if ( noriks_is_type( 'snugboot' ) ) {
    include $noriks_pb_dir . 'why-snugboot.php';
}

// NORIKS CloudClogs (orto-cloudclogs) — 3D klompe (ne Cloud jastuk ne StepCloud ulosci!)
if ( noriks_is_type( 'cloudclogs' ) ) {
    include $noriks_pb_dir . 'why-cloudclogs.php';
}

// NORIKS CompressionSocks (orto-compressionsocks) — siroke bambusove kompresijske carape (ne SupportSocks ne Relief!)
if ( noriks_is_type( 'compressionsocks' ) ) {
    include $noriks_pb_dir . 'why-compressionsocks.php';
}

// NORIKS WaffleLongSleeve (orto-wafflelongsleeve) — majica dugih rukava od vafel pletiva
if ( noriks_is_type( 'wafflelongsleeve' ) ) {
    include $noriks_pb_dir . 'why-wafflelongsleeve.php';
}

// NORIKS PlushBlanket (orto-plushblanket) — super mekana oversized plisana deka
if ( noriks_is_type( 'plushblanket' ) ) {
    include $noriks_pb_dir . 'why-plushblanket.php';
}

// NORIKS DogBed (orto-dogbed) — premium ortopedski krevet za pse
if ( noriks_is_type( 'dogbed' ) ) {
    include $noriks_pb_dir . 'why-dogbed.php';
}

// NORIKS SlingBag (orto-slingbag) — putna torbica preko ramena 2.0
if ( noriks_is_type( 'slingbag' ) ) {
    include $noriks_pb_dir . 'why-slingbag.php';
}

// NORIKS BathMat (orto-bathmat) — upijajuci protuklizni tepih za kupaonicu
if ( noriks_is_type( 'bathmat' ) ) {
    include $noriks_pb_dir . 'why-bathmat.php';
}

// NORIKS TravelBag (orto-travelbag) — putna torba za rucnu prtljagu s odvojivim kotacicima
if ( noriks_is_type( 'travelbag' ) ) {
    include $noriks_pb_dir . 'why-travelbag.php';
}

// NORIKS ComfortJeans (orto-comfortjeans) — opustene traperice sirokih nogavica
if ( noriks_is_type( 'comfortjeans' ) ) {
    include $noriks_pb_dir . 'why-comfortjeans.php';
}

// NORIKS HoodieDress (orto-hoodiedress) — oversized haljina s kapuljacom
if ( noriks_is_type( 'hoodiedress' ) ) {
    include $noriks_pb_dir . 'why-hoodiedress.php';
}

// NORIKS MinimizerBra (orto-minimizerbra) — rashladujuci minimizer grudnjak s punim pokricem
if ( noriks_is_type( 'minimizerbra' ) ) {
    include $noriks_pb_dir . 'why-minimizerbra.php';
}

// NORIKS CashmereSweater (orto-cashmeresweater) — pulover od kasmira i svile opustenog kroja
if ( noriks_is_type( 'cashmeresweater' ) ) {
    include $noriks_pb_dir . 'why-cashmeresweater.php';
}

// NORIKS NursingBra (orto-nursingbra) — grudnjak za dojenje bez savova, mekan kao druga koza
if ( noriks_is_type( 'nursingbra' ) ) {
    include $noriks_pb_dir . 'why-nursingbra.php';
}

// NORIKS HikingShoes (orto-hikingshoes) — barefoot pohodne cipele
if ( noriks_is_type( 'hikingshoes' ) ) {
    include $noriks_pb_dir . 'why-hikingshoes.php';
}

// NORIKS OrthoMules (orto-orthomules) — ortopedske pletene natikace s remenom
if ( noriks_is_type( 'orthomules' ) ) {
    include $noriks_pb_dir . 'why-orthomules.php';
}

// NORIKS TravelPillow (orto-travelpillow) — putni jastuk za vrat od memorijske pjene
if ( noriks_is_type( 'travelpillow' ) ) {
    include $noriks_pb_dir . 'why-travelpillow.php';
}

// NORIKS SleepEarplugs (orto-sleepearplugs) — cepici za usi za spavanje na boku
if ( noriks_is_type( 'sleepearplugs' ) ) {
    include $noriks_pb_dir . 'why-sleepearplugs.php';
}

// NORIKS LitterBox (orto-litterbox) — automatska samocisteca posuda za macji pijesak
if ( noriks_is_type( 'litterbox' ) ) {
    include $noriks_pb_dir . 'why-litterbox.php';
}

// NORIKS DishSheets (orto-dishsheets) — listici za pranje posuda
if ( noriks_is_type( 'dishsheets' ) ) {
    include $noriks_pb_dir . 'why-dishsheets.php';
}

// NORIKS CatFountain (orto-catfountain) — fontana za macke od nehrdajuceg celika 2,2 L
if ( noriks_is_type( 'catfountain' ) ) {
    include $noriks_pb_dir . 'why-catfountain.php';
}

// NORIKS Hoodie (orto-hoodie) — nosiva deka s kapuljacom i krznom
if ( noriks_is_type( 'hoodie' ) ) {
    include $noriks_pb_dir . 'why-hoodie.php';
}

// NORIKS UtilityPants (orto-utilitypants) — rastezljive vodootporne radne hlace s 10 dzepova
if ( noriks_is_type( 'utilitypants' ) ) {
    include $noriks_pb_dir . 'why-utilitypants.php';
}

// NORIKS SmartJacket (orto-smartjacket) — reflektirajuca vodootporna zenska jakna 3 u 1
if ( noriks_is_type( 'smartjacket' ) ) {
    include $noriks_pb_dir . 'why-smartjacket.php';
}

// NORIKS SculptBrief (orto-sculptbrief) — oblikujuce gacice visokog struka s 360° krizim pojasom
if ( noriks_is_type( 'sculptbrief' ) ) {
    include $noriks_pb_dir . 'why-sculptbrief.php';
}

// NORIKS RED (orto-red) — terapija crvenim svjetlom za zapesce
if ( noriks_is_type( 'red' ) ) {
    include $noriks_pb_dir . 'why-red.php';
}

// NORIKS HOME (orto-home) — vakuumske kuke
if ( noriks_is_type( 'home' ) ) {
    include $noriks_pb_dir . 'why-home.php';
}

// NORIKS Calendar (orto-calendar) — digitalni obiteljski kalendar bez pretplate
if ( noriks_is_type( 'calendar' ) ) {
    include $noriks_pb_dir . 'why-calendar.php';
}

// NORIKS Viinia (orto-viinia) — viinijäähdytin / stap za hladenje vina
if ( noriks_is_type( 'viinia' ) ) {
    include $noriks_pb_dir . 'why-viinia.php';
}
// NORIKS Birdie (orto-birdie) - osobni sigurnosni alarm s 130 dB sirenom i stroboskopom
if ( noriks_is_type( 'birdie' ) ) {
    include $noriks_pb_dir . 'why-birdie.php';
}

// SHARED reviews / social proof (all products)
if ( noriks_is_type( 'flomasteri' ) ) {
    include $noriks_pb_dir . 'why-flomasteri.php';
}

include $noriks_pb_dir . 'reviews.php';
