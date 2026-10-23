<?php
/**
 * product-bottom: NORIKS ShowerTowel — antibakterijski ručnik za piling tijela (orto-showertowel).
 * Original: blissal.com/products/towel — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu
 * (predloga why-bottlesling.php / why-dishsheets.php / why-hands.php), modri poudarek po barvi originala (#2f6fa8):
 *   1)  "See the difference yourself"                 -> Uvjerite se sami u razliku (3 x prije/poslije ob mnenju)
 *   2)  "Full body. One towel." (Back / Feet / Arms)  -> Cijelo tijelo. Jedan ručnik. (3 videi ob besedilu, utišani)
 *   3)  "Be honest — Everything you've tried, versus Blissal" (zavihki Loofah / Back brush / Washcloth, 6 meril)
 *         + pojavno okno "Using a chemical exfoliant? See what the FDA says"
 *                                                    -> Budimo iskreni: usporedna tablica (staticna) + napomena FDA/AAD
 *   4)  "How Blissal Works" (6 učinkov + video)       -> Kako NORIKS djeluje (video s hrvaškimi karticami napisov,
 *         uvodna/zaključna kartica z znamko izrezana, logotip spodaj odstranjen)
 *   5)  "What makes Blissal different?" (5 harmonik)  -> Po čemu je NORIKS drugačiji (5 kartic)
 *   6)  "Why physical exfoliation works" (3 točke)    -> Zašto fizički piling djeluje (maskota izpuščena)
 *   7)  "Antibacterial silver thread — Stops odor before it starts" -> Antibakterijska srebrna nit (slika ob besedilu)
 *   8)  "48-inch design — Effortlessly reach every inch" (1 in 4 / 48 inches) -> Dizajn od 122 cm (slika ob besedilu)
 *   9)  "The step most routines skip." (Step 1/2/3)   -> Korak koji većina rutina preskače (3 slike brez napisov)
 *   10) "What our customers are saying" (7 videov)    -> Što kažu naši kupci (7 videov, utišani)
 *   11) "See Why Our Customers Love Blissal" (5 mnenj) -> Zašto nas kupci vole (1081 recenzija + 5 mnenj)
 * Izpusceno: glava, pasice, maskota »Blissy«, gumbi »Make the switch« / »Claim today's offer«, ikone »30-Day Returns /
 * Free Shipping« (zamenjajo jih standardni NORIKS bloki), noga. Stevila konkurenta (17.300+ recenzij) zamenjana z NORIKS (1081).
 * FAQ (6) je v reviews.php ($showertowel_faq), mnenja v auto_reviews/HR_showertowel.php, opis in nega v meta.php.
 * Slike/videi: img/showertowel/ (nst-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nst      = get_template_directory_uri() . '/img/showertowel/';
$nst_path = get_template_directory() . '/img/showertowel/';
$nst_img  = function( $file, $alt ) use ( $nst, $nst_path ) {
  if ( ! $file || ! file_exists( $nst_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nst . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nst_video = function( $file, $label, $cls = '' ) use ( $nst, $nst_path ) {
  if ( ! file_exists( $nst_path . $file ) ) { return ''; }
  $poster = preg_replace( '/\.mp4$/', '-poster.webp', $file );
  return '<div class="nst-vid ' . esc_attr( $cls ) . '"><video src="' . esc_url( $nst . $file ) . '" poster="' . esc_url( $nst . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$nst_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nst-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nst-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};
$nst_kses = array( 'strong' => array(), 'em' => array(), 'br' => array() );

/* 1) prije i poslije */
$nst_ba = array(
  array( 'prije' => 'nst-s1-leda-prije.webp', 'poslije' => 'nst-s1-leda-poslije.webp', 'dan' => '29. dan', 'dio' => 'Leđa',
    'txt' => 'Nakon mjesec dana korištenja leđa su mi se potpuno promijenila. Koža mi je glatka, čista i bez akni. Jako sam zahvalna.',
    'ime' => 'Jelena N., 39' ),
  array( 'prije' => 'nst-s1-ruke-prije.webp', 'poslije' => 'nst-s1-ruke-poslije.webp', 'dan' => '25. dan', 'dio' => 'Ruke',
    'txt' => 'Godinama sam se borila sa suhim mrljama i upornim aknama na leđima, ništa nije pomagalo. Otkako koristim NORIKS ručnik, koža mi je nevjerojatno glatka i zdrava, a leđa su mi napokon čista. Prava promjena!',
    'ime' => 'Dona M., 48' ),
  array( 'prije' => 'nst-s1-noge-prije.webp', 'poslije' => 'nst-s1-noge-poslije.webp', 'dan' => '15. dan', 'dio' => 'Noge',
    'txt' => 'Koža mi je izgledala tupo i beživotno unatoč raznim proizvodima. Prijateljica mi je preporučila NORIKS ručnik i nakon dva tjedna koža mi blista i izgleda živo. Ručnik djeluje kao nježan piling – uklanja mrtvu kožu i osvježava ten.',
    'ime' => 'Sara M., 48' ),
);

/* 3) usporedba (6 meril; ✓ = 1, ✗ = 0) */
$nst_cmp_rows = array(
  array( 'Doseg',            'Svaki centimetar, bez pomoći',      array( 'Ne doseže', 0 ),            array( 'Nezgodni kutovi', 0 ), array( 'Ne doseže', 0 ) ),
  array( 'Piling',           'Uklanja mrtvu kožu',                array( 'Uglavnom pjena', 0 ),       array( 'Grebe', 0 ),           array( 'Jedva piling', 0 ) ),
  array( 'Nježan prema koži', 'Dovoljno nježan za svaki dan',     array( 'Dovoljno mekana', 1 ),      array( 'Pregruba', 0 ),        array( 'Nježna', 1 ) ),
  array( 'Sušenje',          'Suh do sljedećeg tuširanja',        array( 'Ostaje vlažna', 0 ),        array( 'Mokre čekinje', 0 ),   array( 'Ostaje vlažna', 0 ) ),
  array( 'Svježina',         'Lako se ispire, ostaje svjež',      array( 'Skuplja prljavštinu', 0 ),  array( 'Teško se ispire', 0 ), array( 'Treba je prati', 0 ) ),
  array( 'Putovanja',        'Složi se ravno, lako se spakira',   array( 'Stane u torbu', 1 ),        array( 'Glomazna', 0 ),        array( 'Stane u torbu', 1 ) ),
);
$nst_ok = '<span class="nst-yes" aria-label="da">✓</span>';
$nst_no = '<span class="nst-no" aria-label="ne">✕</span>';

/* 4) kako djeluje */
$nst_how = array( 'Uklanja bakterije', 'Potiče stvaranje kolagena', 'Uklanja suhe mrlje', 'Otvara pore', 'Poboljšava cirkulaciju', 'Nježno uklanja mrtvu kožu' );

/* 5) po čemu je drugačiji */
$nst_diff = array(
  array( 'Tehnologija uravnoteženog pilinga', 'Naše jedinstveno šesterokutno tkanje spaja <strong>dvije razine pilinga u jednom ručniku</strong>: mekšu stranu za svakodnevnu upotrebu i teksturiranu stranu za dublji piling. Nježno uklanja odumrle stanice, <strong>potiče cirkulaciju</strong> i <strong>stvaranje kolagena</strong> te pomaže zagladiti sitne bore bez oštećenja zaštitne barijere kože.' ),
  array( 'Dizajn za brzo sušenje', 'Naša tkanina <strong>suši se za otprilike 15 minuta</strong>, sprječava razvoj bakterija i ručnik ostaje uvijek svjež i higijenski čist.' ),
  array( 'Antibakterijska mješavina tkanine', 'Obogaćen s 99,9 % čistim ionima srebra, NORIKS ShowerTowel sprječava neugodne mirise prije nego što nastanu i ne dopušta da se <strong>bakterije nasele u tkaninu koja ostaje vlažna</strong> – zato je to najčišći ručnik za piling.' ),
  array( 'Tkanine nježne prema koži', 'Izrađen s <strong>vlaknima bambusovog ugljena</strong> – prirodno uravnotežuje lučenje sebuma, čisti začepljene pore i poboljšava upijanje njege, bez agresivnih kemikalija.' ),
  array( 'Duljina koju su odobrili korisnici', 'Testirali smo i razgovarali s brojnim korisnicima kako bismo odredili idealnu duljinu od 122 cm (48 inča) – lako dohvaća svaki centimetar tijela, <strong>bez ičije pomoći</strong>.' ),
);

/* 6) zašto fizički piling */
$nst_why = array(
  array( 'Koža se obnavlja svakih 28 dana', 'Odumrle stanice ostaju na površini dok ih nešto ne ukloni. Upravo zbog tog sloja koža je gruba na dodir i izgleda tupo.' ),
  array( 'Fizički piling je bolji od kemijskog za većinu ljudi', 'Bez kiselina, bez mirisa, bez čekanja hoće li koža reagirati. Samo tekstura i voda – tako je piling funkcionirao davno prije nego što je završio u bočici.' ),
  array( 'Sve što nanesete nakon njega djeluje bolje', 'Krema na čistoj koži ima kamo otići. Preskočite li prvi korak, većina ostaje na sloju odumrlih stanica.' ),
);

/* 9) koraki */
$nst_steps = array(
  array( 'nst-s9-korak-1.webp', '1. korak:', 'OVO SMO MI!', 'Piling ručnikom NORIKS ShowerTowel pod tušem' ),
  array( 'nst-s9-korak-2.webp', '2. korak', 'vaše rutine', 'Ispiranje nakon pilinga' ),
  array( 'nst-s9-korak-3.webp', '3. korak', 'vaše rutine', 'Nanošenje kreme za tijelo nakon tuširanja' ),
);

/* 11) mnenja (footer »See Why Our Customers Love Blissal«; prevedeno, imena lokalizirana) */
$nst_rv = array(
  array( 'ime' => 'Renata J.', 'naslov' => 'Užitak pod tušem', 'tekst' => 'Ručnik sam dobila prije nekoliko dana i oduševljena sam. Gel za tuširanje se prekrasno zapjeni, a zahvaljujući pametnom dizajnu lako dohvatim leđa i druga nezgodna mjesta. Svakako preporučujem.' ),
  array( 'ime' => 'Ruža K.',   'naslov' => '', 'tekst' => 'Ne bih više bez njega. Nakon tuširanja osjećam se tako čisto i osvježeno. Imam invaliditet, a ovaj ručnik mi je jako olakšao kupanje. Mislim da ću naručiti još jedan da uvijek imam rezervni.' ),
  array( 'ime' => 'Dijana C.', 'naslov' => '', 'tekst' => 'Ovaj proizvod je divan. Imam problema s pokretljivošću, ali otkako koristim NORIKS ručnik, tuširanje mi je puno lakše. Koža mi je sigurno glađa. Hvala vam!' ),
  array( 'ime' => 'Jelena S.', 'naslov' => '', 'tekst' => 'Fantastičan ručnik za piling – koža mi je glađa nego od bilo kojeg drugog proizvoda. Ponekad je malo nespretan jer je dug, ali upravo zato tako dobro dohvaća teško dostupna mjesta poput sredine leđa. Proizvod za 5 zvjezdica.' ),
  array( 'ime' => 'Rina H.',   'naslov' => '', 'tekst' => 'Odličan ručnik za piling. Koža mi je super glatka. Stvarno ga volim – ne razmišljajte, uzmite ga.' ),
);

$nst_n = 0; // števec sekcij za izmenična ozadja
$nst_cls = function() use ( &$nst_n ) { $nst_n++; return ( $nst_n % 2 ) ? ' nst-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) UVJERITE SE SAMI U RAZLIKU ("See the difference yourself") — prije/poslije ob mnenju -->
<section class="nst-sec<?php echo $nst_cls(); ?>">
  <div class="nst-wrap">
    <p class="nst-kicker nst-c">Prije i poslije</p>
    <h2 class="nst-h2 nst-c">Uvjerite se sami <em>u razliku.</em></h2>
    <?php foreach ( $nst_ba as $i => $b ) : ?>
    <div class="nst-row2<?php echo ( $i % 2 ) ? ' nst-row2--rev' : ''; ?> nst-row2--ba">
      <div class="nst-media">
        <div class="nst-ba">
          <figure><?php echo $nst_img( $b['prije'], $b['dio'] . ' – 1. dan, prije korištenja ručnika NORIKS ShowerTowel' ); ?><figcaption>1. dan</figcaption></figure>
          <figure><?php echo $nst_img( $b['poslije'], $b['dio'] . ' – ' . $b['dan'] . ' korištenja ručnika NORIKS ShowerTowel' ); ?><figcaption class="nst-ba__after"><?php echo esc_html( $b['dan'] ); ?></figcaption></figure>
        </div>
      </div>
      <div class="nst-copy">
        <?php echo $nst_stars( 5 ); ?>
        <p class="nst-quote">„<?php echo esc_html( $b['txt'] ); ?>”</p>
        <p class="nst-quote__name">– <?php echo esc_html( $b['ime'] ); ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- 2) CIJELO TIJELO. JEDAN RUČNIK. ("Full body. One towel." — Back / Feet / Arms) — 3 videi ob besedilu -->
<section class="nst-sec<?php echo $nst_cls(); ?>">
  <div class="nst-wrap">
    <div class="nst-row2">
      <div class="nst-media">
        <div class="nst-trio">
          <figure><?php echo $nst_video( 'nst-v-ledja.mp4', 'Piling leđa ručnikom NORIKS ShowerTowel', 'nst-vid--sq' ); ?><figcaption>Leđa</figcaption></figure>
          <figure><?php echo $nst_video( 'nst-v-stopala.mp4', 'Piling stopala ručnikom NORIKS ShowerTowel', 'nst-vid--sq' ); ?><figcaption>Stopala</figcaption></figure>
          <figure><?php echo $nst_video( 'nst-v-ruke.mp4', 'Piling ruku i ramena ručnikom NORIKS ShowerTowel', 'nst-vid--sq' ); ?><figcaption>Ruke</figcaption></figure>
        </div>
      </div>
      <div class="nst-copy">
        <p class="nst-kicker">Leđa · Stopala · Ruke</p>
        <h2 class="nst-h3">Cijelo tijelo. <em>Jedan ručnik.</em></h2>
        <p>Od sredine leđa do stopala – <strong>122 cm dugačak ručnik</strong> dohvati svaki centimetar tijela, bez ičije pomoći.</p>
        <p class="nst-big">Jedan ručnik, pet minuta – koža koja se stvarno osjeća drugačije.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) BUDIMO ISKRENI ("Be honest — Everything you've tried, versus Blissal") — usporedba + napomena FDA/AAD -->
<section class="nst-sec<?php echo $nst_cls(); ?>">
  <div class="nst-wrap">
    <div class="nst-row2 nst-row2--rev nst-row2--top">
      <div class="nst-media">
        <div class="nst-vs">
          <figure><?php echo $nst_img( 'nst-s3-lufa.webp', 'Klasična lufa za tuširanje' ); ?><figcaption>Lufa <b>2/6</b></figcaption></figure>
          <figure class="nst-vs__us"><?php echo $nst_img( 'nst-s3-noriks.webp', 'NORIKS ShowerTowel ručnik za piling' ); ?><figcaption>NORIKS ShowerTowel <b>6/6</b></figcaption></figure>
        </div>
      </div>
      <div class="nst-copy">
        <p class="nst-kicker">Budimo iskreni</p>
        <h2 class="nst-h3">Sve što ste dosad probali – <em>naspram NORIKS-a.</em></h2>
        <p>Pogledajte što vam je sada pod tušem. Razlika govori sama za sebe.</p>
        <p class="nst-trust"><?php echo $nst_stars( 5 ); ?> <span>1081 recenzija</span> · <span>30 dana za povrat</span> · <span>Besplatna dostava iznad 70 €</span></p>
        <p class="nst-small"><strong>Šest stvari koje bi vaš pribor za tuširanje trebao raditi.</strong></p>
        <div class="nst-cmp-wrap">
          <table class="nst-cmp">
            <thead><tr><th></th><th>Lufa</th><th>Četka za leđa</th><th>Krpica</th><th class="nst-cmp__us">NORIKS</th></tr></thead>
            <tbody>
              <?php foreach ( $nst_cmp_rows as $r ) : ?>
              <tr>
                <td class="nst-cmp__l"><?php echo esc_html( $r[0] ); ?></td>
                <?php foreach ( array( $r[2], $r[3], $r[4] ) as $c ) : ?>
                <td><?php echo $c[1] ? $nst_ok : $nst_no; ?><small><?php echo esc_html( $c[0] ); ?></small></td>
                <?php endforeach; ?>
                <td class="nst-cmp__us"><?php echo $nst_ok; ?><small><?php echo esc_html( $r[1] ); ?></small></td>
              </tr>
              <?php endforeach; ?>
              <tr class="nst-cmp__sum"><td class="nst-cmp__l">Ukupno</td><td>2/6</td><td>0/6</td><td>2/6</td><td class="nst-cmp__us">6/6</td></tr>
            </tbody>
          </table>
        </div>
        <div class="nst-note">
          <p class="nst-note__t">Koristite kemijski piling? Vrijedi znati</p>
          <p>Kemijski pilinzi poput glikolne i mliječne kiseline (AHA) djeluju, ali imaju kvaku koju je lako previdjeti na etiketi.</p>
          <p><strong>FDA</strong> (američka Agencija za hranu i lijekove): AHA mogu povećati osjetljivost kože na sunce dok ih koristite i još do tjedan dana nakon prestanka. Zato FDA preporučuje da proizvodi s AHA nose <strong>„upozorenje na opekline”</strong> s uputom da koristite zaštitu od sunca i ograničite izlaganje suncu.</p>
          <p><strong>AAD</strong> (Američka akademija za dermatologiju): pretjerani piling može ostaviti kožu „crvenom i nadraženom”. A piling uz retinol ili benzoil peroksid „može pogoršati suhu kožu ili čak izazvati akne”.</p>
          <p><strong>Razlika NORIKS-a:</strong> NORIKS radi fizički piling – bez kiselina, pa ni bez upozorenja o osjetljivosti na sunce. I ima <strong>dvije strane</strong>: <strong>mekanu stranu, dovoljno nježnu za svaki dan</strong>, i čvršću stranu kad želite dublji piling. Vi birate stranu i pritisak, pod svakim tušem.</p>
          <p class="nst-note__src">Izvori: FDA, „Alpha Hydroxy Acids” · AAD, „How to safely exfoliate at home”.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4) KAKO NORIKS DJELUJE ("How Blissal Works") — video (hrvaške kartice napisov) ob besedilu -->
<section class="nst-sec<?php echo $nst_cls(); ?>">
  <div class="nst-wrap">
    <div class="nst-row2">
      <div class="nst-media"><?php echo $nst_video( 'nst-v-pore-hr.mp4', 'Kako ručnik NORIKS ShowerTowel čisti pore – prikaz u koži', 'nst-vid--sq' ); ?></div>
      <div class="nst-copy">
        <p class="nst-kicker">Piling. Čiste pore. Sjaj.</p>
        <h2 class="nst-h3">Kako NORIKS <em>djeluje</em></h2>
        <ul class="nst-list">
          <?php foreach ( $nst_how as $h ) : ?><li><?php echo esc_html( $h ); ?></li><?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 5) PO ČEMU JE NORIKS DRUGAČIJI? ("What makes Blissal different?") — 5 kartic -->
<section class="nst-sec<?php echo $nst_cls(); ?>">
  <div class="nst-wrap">
    <p class="nst-kicker nst-c">Zašto baš NORIKS</p>
    <h2 class="nst-h2 nst-c">Po čemu je NORIKS <em>drugačiji?</em></h2>
    <div class="nst-cards">
      <?php foreach ( $nst_diff as $k => $c ) : ?>
      <div class="nst-cardx">
        <span class="nst-cardx__n"><?php echo (int) $k + 1; ?></span>
        <h3><?php echo esc_html( $c[0] ); ?></h3>
        <p><?php echo wp_kses( $c[1], $nst_kses ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 6) ZAŠTO FIZIČKI PILING DJELUJE ("Why physical exfoliation works") — 3 točke -->
<section class="nst-sec<?php echo $nst_cls(); ?>">
  <div class="nst-wrap">
    <p class="nst-kicker nst-c">Znanost o koži</p>
    <h2 class="nst-h2 nst-c">Zašto <em>fizički piling</em> djeluje</h2>
    <div class="nst-cards nst-cards--3">
      <?php foreach ( $nst_why as $c ) : ?>
      <div class="nst-cardx">
        <h3><?php echo esc_html( $c[0] ); ?></h3>
        <p><?php echo esc_html( $c[1] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <p class="nst-big nst-c nst-closer">Bez kiselina. Bez aktivnih tvari. Bez sitnih slova.</p>
  </div>
</section>

<!-- 7) ANTIBAKTERIJSKA SREBRNA NIT ("Stops odor before it starts") — slika ob besedilu -->
<section class="nst-sec<?php echo $nst_cls(); ?>">
  <div class="nst-wrap">
    <div class="nst-row2">
      <div class="nst-media"><?php echo $nst_img( 'nst-s7-srebrna-nit.webp', 'Ručnik NORIKS ShowerTowel sa srebrnom niti preko leđa pod tušem' ); ?></div>
      <div class="nst-copy">
        <p class="nst-kicker">Antibakterijska srebrna nit</p>
        <h2 class="nst-h3">Sprječava neugodne mirise <em>prije nego što nastanu</em></h2>
        <p>Neugodan miris ne znači da je ručnik prljav. Zapravo su to <strong>bakterije koje se nasele u tkaninu</strong> koja između dva tuširanja ostaje vlažna.</p>
        <p>NORIKS ShowerTowel istkan je sa srebrnom niti i <strong>suši se za otprilike 15 minuta</strong>, pa se to nikad ne stigne dogoditi.</p>
        <p class="nst-big">Nema mirisa vlažnog ručnika u kupaonici – i ništa se ne vraća na kožu koju ste upravo oprali.</p>
      </div>
    </div>
  </div>
</section>

<!-- 8) DIZAJN OD 122 CM ("48-inch design — Effortlessly reach every inch") — slika ob besedilu -->
<section class="nst-sec<?php echo $nst_cls(); ?>">
  <div class="nst-wrap">
    <div class="nst-row2 nst-row2--rev">
      <div class="nst-media"><?php echo $nst_img( 'nst-s8-122-cm.webp', 'Muškarac pod tušem drži 122 cm dugačak ručnik NORIKS ShowerTowel' ); ?></div>
      <div class="nst-copy">
        <p class="nst-kicker">Dizajn od 122 cm</p>
        <h2 class="nst-h3">Bez napora dohvatite <em>svaki centimetar</em></h2>
        <p>Dug, savitljiv dizajn pretvara pranje leđa u igru – <strong>lako dohvaća leđa</strong> i druga teško dostupna mjesta, idealno i za osobe sa smanjenom pokretljivošću. Ergonomski oblikovan za lak hvat.</p>
        <div class="nst-stats">
          <div><strong>1 od 4</strong><span>prelazi na NORIKS zbog lakšeg kretanja i manjeg napora za ramena i leđa</span></div>
          <div><strong>122 cm</strong><span>dovoljno dugačak da dohvati svaki centimetar leđa, bez ičije pomoći</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 9) KORAK KOJI VEĆINA RUTINA PRESKAČE ("The step most routines skip.") — 3 slike ob besedilu -->
<section class="nst-sec<?php echo $nst_cls(); ?>">
  <div class="nst-wrap">
    <div class="nst-row2">
      <div class="nst-media">
        <div class="nst-trio nst-trio--steps">
          <?php foreach ( $nst_steps as $s ) : ?>
          <figure><div class="nst-vid nst-vid--sq"><?php echo $nst_img( $s[0], $s[3] ); ?></div><figcaption><b><?php echo esc_html( $s[1] ); ?></b> <?php echo esc_html( $s[2] ); ?></figcaption></figure>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="nst-copy">
        <p class="nst-kicker">Gdje NORIKS ulazi u vašu rutinu higijene</p>
        <h2 class="nst-h3">Korak koji većina rutina <em>preskače.</em></h2>
        <p>Krema nanesena na odumrlu kožu uglavnom samo ostaje na njoj. <strong>Piling kao prvi korak</strong> omogućuje da sve što već koristite pravilno djeluje.</p>
        <ol class="nst-olist">
          <li><strong>1. korak: piling</strong> – ovo smo mi!</li>
          <li><strong>2. korak: ispiranje</strong></li>
          <li><strong>3. korak: hidratacija</strong></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- 10) ŠTO KAŽU NAŠI KUPCI ("What our customers are saying") — 7 videov -->
<section class="nst-sec<?php echo $nst_cls(); ?>">
  <div class="nst-wrap">
    <div class="nst-row2 nst-row2--rev">
      <div class="nst-media">
        <div class="nst-ugc">
          <?php for ( $i = 1; $i <= 7; $i++ ) { echo $nst_video( 'nst-v-kupci-' . $i . '.mp4', 'Kupac pokazuje ručnik NORIKS ShowerTowel – video ' . $i, 'nst-vid--sq' ); } ?>
          <div class="nst-ugc__score">
            <strong>4,8</strong>
            <?php echo $nst_stars( 5 ); ?>
            <span>1081 recenzija</span>
          </div>
        </div>
      </div>
      <div class="nst-copy">
        <p class="nst-kicker">Iskustva kupaca</p>
        <h2 class="nst-h3">Što kažu <em>naši kupci</em></h2>
        <?php echo $nst_stars( 5 ); ?>
        <p class="nst-quote">„Odličan ručnik za piling. Koža mi je super glatka. Stvarno ga volim – ne razmišljajte, uzmite ga.”</p>
        <p class="nst-quote__name">– Rina H.</p>
      </div>
    </div>
  </div>
</section>

<!-- 11) ZAŠTO NAS KUPCI VOLE ("See Why Our Customers Love Blissal") — 1081 recenzija + 5 mnenj -->
<section class="nst-sec<?php echo $nst_cls(); ?>">
  <div class="nst-wrap">
    <p class="nst-kicker nst-c">Recenzije kupaca</p>
    <h2 class="nst-h2 nst-c">Pogledajte zašto kupci <em>vole NORIKS</em></h2>
    <div class="nst-score">
      <span class="nst-score__num">4,8 / 5</span>
      <?php echo $nst_stars( 5 ); ?>
      <span class="nst-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="nst-reviews">
      <?php foreach ( $nst_rv as $r ) : ?>
      <article class="nst-card">
        <div class="nst-card__body">
          <?php echo $nst_stars( 5 ); ?>
          <?php if ( $r['naslov'] ) : ?><p class="nst-card__title"><?php echo esc_html( $r['naslov'] ); ?></p><?php endif; ?>
          <p class="nst-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nst-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nst-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-bottlesling.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Modri poudarek po barvi originala (#2f6fa8). */
.nst-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #1c2a38; background: #fff; }
.nst-sec * { box-sizing: border-box; }
.nst-tint { background: #eef4fb; }
.nst-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nst-c { text-align: center; }
.nst-sec h2, .nst-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nst-kicker, .nst-copy p.nst-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #2f6fa8; margin: 0 0 10px; }
.nst-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 28px; color: #1c2a38; }
.nst-h2 em, .nst-h3 em { font-style: italic; color: #2f6fa8; }
.nst-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #1c2a38; }
.nst-sec img { display: block; width: 100%; height: auto; }
.nst-sec figure { margin: 0; }

/* slika ob besedilu */
.nst-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nst-row2--top { align-items: start; }
.nst-row2--rev .nst-media { order: 2; }
.nst-row2--ba + .nst-row2--ba { margin-top: 36px; }
.nst-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(20,40,70,.05), 0 14px 40px rgba(20,40,70,.10); max-width: 520px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.nst-copy p { font-size: 16px; line-height: 1.7; color: #3f4d5c; margin: 0 0 14px; }
.nst-copy p strong { color: #1c2a38; font-weight: 600; }
.nst-sec p.nst-big { font-size: 19px; font-weight: 700; color: #1c2a38; line-height: 1.45; margin-top: 6px; }
.nst-closer { margin: 26px 0 0 !important; }
.nst-list { list-style: none; margin: 0 0 16px; padding: 0; }
.nst-list li { position: relative; padding-left: 32px; margin: 0 0 11px; font-size: 16px; line-height: 1.55; color: #2c3a48; font-weight: 500; }
.nst-list li::before { content: "✓"; position: absolute; left: 0; top: 1px; width: 21px; height: 21px; border-radius: 50%; background: #2f6fa8; color: #fff; font-size: 12px; font-weight: 800; line-height: 21px; text-align: center; }
.nst-olist { margin: 0; padding-left: 20px; }
.nst-olist li { font-size: 15.5px; line-height: 1.6; color: #3f4d5c; margin: 0 0 6px; }
.nst-small { font-size: 15px !important; margin: 18px 0 8px !important; }

/* prije / poslije */
.nst-ba { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; max-width: 520px; margin: 0 auto; }
.nst-ba figure { position: relative; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 4px rgba(20,40,70,.05), 0 10px 28px rgba(20,40,70,.10); }
.nst-ba img { aspect-ratio: 400 / 600; object-fit: cover; }
.nst-ba figcaption { position: absolute; left: 10px; top: 10px; background: rgba(28,42,56,.82); color: #fff; font-size: 12.5px; font-weight: 700; border-radius: 999px; padding: 4px 12px; }
.nst-ba figcaption.nst-ba__after { background: #2f6fa8; }
.nst-quote { font-size: 18px !important; line-height: 1.6 !important; color: #1c2a38 !important; font-style: italic; margin: 10px 0 10px !important; }
.nst-quote__name { font-weight: 700; color: #2f6fa8 !important; }

/* videi */
.nst-vid { position: relative; overflow: hidden; background: #dbe7f4; border-radius: 10px; margin: 0 auto; box-shadow: 0 2px 4px rgba(20,40,70,.05), 0 14px 40px rgba(20,40,70,.10); }
.nst-vid video, .nst-vid img { display: block; width: 100%; height: 100%; object-fit: cover; border-radius: 0; box-shadow: none; }
.nst-vid--sq { aspect-ratio: 1 / 1; max-width: 540px; }
.nst-trio { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; }
.nst-trio figcaption { text-align: center; font-size: 14px; font-weight: 700; color: #1c2a38; margin-top: 8px; }
.nst-trio--steps figcaption { font-weight: 500; font-size: 13px; line-height: 1.35; }
.nst-trio--steps figcaption b { color: #2f6fa8; display: block; }

/* usporedba */
.nst-vs { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; max-width: 520px; margin: 0 auto; }
.nst-vs figure { background: #fff; border: 2px solid #d5e2f0; border-radius: 10px; overflow: hidden; }
.nst-vs figure.nst-vs__us { border-color: #2f6fa8; }
.nst-vs img { aspect-ratio: 1 / 1; object-fit: cover; }
.nst-vs figcaption { text-align: center; padding: 10px 6px; font-size: 14px; font-weight: 600; color: #1c2a38; }
.nst-vs figcaption b { display: block; font-size: 22px; color: #9aa7b4; }
.nst-vs__us figcaption b { color: #2f6fa8; }
.nst-trust { font-size: 14px !important; color: #3f4d5c !important; }
.nst-trust .nst-stars { font-size: 14px; }
.nst-cmp-wrap { overflow-x: auto; }
.nst-cmp { width: 100%; border-collapse: separate; border-spacing: 0; margin: 4px 0 14px; font-size: 13px; background: #fff; border: 1px solid #d5e2f0; border-radius: 10px; overflow: hidden; }
.nst-sec .nst-cmp th { font-size: 12px; font-weight: 700; color: #1c2a38; padding: 10px 4px; text-align: center; background: #f4f8fc; line-height: 1.25; text-transform: none; letter-spacing: 0; border: 0; border-bottom: 1px solid #d5e2f0; }
.nst-sec .nst-cmp th.nst-cmp__us { background: #2f6fa8; color: #fff; }
.nst-cmp td { padding: 8px 4px; text-align: center; border: 0; border-bottom: 1px solid #e6eef7; vertical-align: top; color: #3f4d5c; line-height: 1.3; }
.nst-cmp tr:last-child td { border-bottom: 0; }
.nst-cmp td small { display: block; font-size: 11px; color: #6b7886; margin-top: 3px; }
.nst-cmp td.nst-cmp__l { text-align: left; padding-left: 10px; font-weight: 600; color: #1c2a38; font-size: 12.5px; }
.nst-cmp td.nst-cmp__us { background: #ebf2f9; }
.nst-cmp td.nst-cmp__us small { color: #1c2a38; font-weight: 600; }
.nst-cmp__sum td { font-weight: 700; font-size: 14px; color: #1c2a38; }
.nst-yes, .nst-no { display: inline-block; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; line-height: 20px; text-align: center; }
.nst-yes { background: #2f6fa8; color: #fff; }
.nst-no { background: #e8ecf0; color: #7b8794; }
.nst-note { background: #fff; border: 1px solid #d5e2f0; border-left: 4px solid #2f6fa8; border-radius: 10px; padding: 16px 18px; }
.nst-tint .nst-note { background: #fff; }
.nst-note p { font-size: 14px !important; line-height: 1.6 !important; margin: 0 0 9px !important; }
.nst-note p.nst-note__t { font-weight: 700; color: #1c2a38; font-size: 15.5px !important; }
.nst-note p.nst-note__src { font-size: 12px !important; color: #7b8794 !important; margin: 0 !important; }

/* kartice */
.nst-cards { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; }
.nst-cards--3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
.nst-cardx { background: #fff; border: 1px solid #d5e2f0; border-radius: 10px; padding: 22px 20px; box-shadow: 0 2px 10px rgba(20,40,70,.05); }
.nst-sec:not(.nst-tint) .nst-cardx { background: #f4f8fc; }
.nst-cardx__n { display: inline-block; width: 30px; height: 30px; border-radius: 50%; background: #2f6fa8; color: #fff; font-weight: 700; font-size: 14px; line-height: 30px; text-align: center; margin-bottom: 10px; }
.nst-cardx h3 { font-size: 17px; font-weight: 700; line-height: 1.35; color: #1c2a38; margin: 0 0 8px; }
.nst-cardx p { font-size: 15px; line-height: 1.65; color: #3f4d5c; margin: 0; }
.nst-cardx p strong { color: #1c2a38; font-weight: 600; }

/* statistika */
.nst-stats { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 6px; }
.nst-stats div { background: #fff; border: 1px solid #d5e2f0; border-radius: 10px; padding: 14px; }
.nst-tint .nst-stats div { background: #fff; }
.nst-stats strong { display: block; font-size: 26px; font-weight: 700; color: #2f6fa8; line-height: 1.2; }
.nst-stats span { display: block; font-size: 13.5px; line-height: 1.5; color: #3f4d5c; margin-top: 4px; }

/* videi kupcev */
.nst-ugc { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 8px; max-width: 560px; margin: 0 auto; }
.nst-ugc .nst-vid { max-width: none; width: 100%; box-shadow: 0 2px 8px rgba(20,40,70,.10); }
.nst-ugc__score { display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 4px; aspect-ratio: 1 / 1; border-radius: 10px; background: #2f6fa8; color: #fff; }
.nst-ugc__score strong { font-size: 28px; font-weight: 700; line-height: 1; }
.nst-ugc__score .nst-stars { color: #ffcf49; font-size: 13px; }
.nst-ugc__score .nst-stars__off { color: rgba(255,255,255,.35); }
.nst-ugc__score span { font-size: 11.5px; font-weight: 600; }

/* ocjene */
.nst-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nst-stars__off { color: #d9e2ec; }
.nst-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: -10px 0 28px; flex-wrap: wrap; }
.nst-score__num { font-size: 26px; font-weight: 700; color: #1c2a38; }
.nst-score .nst-stars { font-size: 20px; }
.nst-score__txt { font-size: 14.5px; color: #5d6b79; }

/* mnenja */
.nst-reviews { columns: 3; column-gap: 18px; margin-top: 12px; }
.nst-reviews > .nst-card { break-inside: avoid; margin-bottom: 18px; }
.nst-card { background: #fff; border: 1px solid #d5e2f0; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.nst-sec:not(.nst-tint) .nst-card { background: #f4f8fc; }
.nst-card__body { padding: 16px; }
.nst-card__title { font-size: 15px; font-weight: 700; color: #1c2a38; margin: 8px 0 0; }
.nst-card__txt { font-size: 14.5px; line-height: 1.6; color: #2c3a48; margin: 8px 0 10px; font-style: italic; }
.nst-card__name { font-size: 13.5px; font-weight: 600; color: #1c2a38; margin: 0; }
.nst-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nst-row2 { gap: 32px; }
  .nst-reviews { columns: 2; }
  .nst-cards { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 749px) {
  .nst-sec { padding: 42px 0; }
  .nst-wrap { padding: 0 16px; }
  .nst-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nst-row2--rev .nst-media { order: 0; }
  .nst-cards, .nst-cards--3 { grid-template-columns: 1fr; }
  .nst-stats { grid-template-columns: 1fr; }
  .nst-trio { gap: 6px; }
  .nst-reviews { column-gap: 12px; }
  .nst-reviews > .nst-card { margin-bottom: 12px; }
  .nst-card__body { padding: 12px; }
  .nst-cmp td small { font-size: 10px; }
}
@media (max-width: 420px) {
  .nst-reviews { columns: 1; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-showertowel .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

/* kratek opis izdelka: zelene kljukice namesto pik (REST pobrise inline slog) */
.woocommerce div.product .woocommerce-product-details__short-description ul,
.woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 10px 0 14px !important; padding-left: 0 !important; }
.woocommerce div.product .woocommerce-product-details__short-description ul li,
.woocommerce-product-details__short-description ul li {
  list-style: none !important; text-indent: 0 !important; margin: 0 0 7px !important;
  line-height: 1.45 !important; font-size: 15.5px !important;
  display: block !important; position: relative !important; padding-left: 31px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nst-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
