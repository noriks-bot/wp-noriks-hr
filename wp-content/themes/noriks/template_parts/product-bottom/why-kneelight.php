<?php
/**
 * product-bottom: NORIKS KneeLight — bežični uređaj za koljeno s toplinom, vibracijom i crvenim svjetlom (orto-kneelight).
 * Original: levidecupp.com/products/levide™-red-light-therapy-panel (Knee Companion 2.0, US) — vsebina in vrstni red 1:1 z originalom,
 * prevod iz angleščine, oblika po NORIKS stilu (predloga why-upholsterycleaner.php / why-hands.php), poudarek temno rdeča po originalu (#bd1e2e).
 * Zdravstvene trditve omiljene (»mnogi korisnici navode …«, »ugodna toplina«, »za opuštanje«), brez obljub zdravljenja, brez študij in
 * »preporučili liječnici«; opomba, da naprava ni medicinski pripomoček in ne nadomešča zdravnika.
 *   1) nakupna škatla, harmonike "How does it work?" / "Will it fit my knee?" / "Can I use it after surgery…" -> Kako radi (prevedena slika)
 *   2) "The nightly ritual – Ten minutes a night. Easier mornings." + 3 številke   -> Večernji ritual (100,000+ -> tisuće, 6,328 -> 1081)
 *   3) "Three therapies. One device." (5 kartic + 3 številke)                     -> Tri terapije ob sliki obeh kolen
 *   4) "850 nanometers – What's new in Knee 2.0" (600 -> 850 nm + 4 izboljšave)    -> slika LED obroča ob besedilu
 *   5) "The 3-step routine – Before bed. Every night."                           -> rutina (gel in opornica nista v paketu -> »po želji«)
 *   6) "Customer survey – What users reported." (94 / 89 / 90 %)                  -> Što korisnici navode (odstotki izpuščeni, omiljeno)
 *   7) "How it compares – Clinic-style therapy. No appointments." (tabela)        -> usporedba ob sliki naprave (90 dni + garancija -> 30 dana)
 *   8) "Real customers" + Facebook komentarji (7)                                 -> 4,8 / 1081 + 7 omiljenih mnenj (bolezni in operacije izpuščene)
 *   9) "Ready when you are – Give your knees ten minutes."                        -> zaključni poziv z gumbom do ponudb + opomba
 * Izpuščeno: pasica Flash Sale, »100 Thousand Devices Sold«, darila (gel, opornica, e-knjiga), kompleti z gelom in opornico, »Beware of fakes«,
 * »Upgrade to LEVIDE Ultra«, slike s študijami (65 % / 72 % / 36 % / 80 %) in »physio and doctor said yes«, garancija 90 dni / 2 leti,
 * e-pošta konkurenta, filtri komentarjev (meniskus, artritis).
 * FAQ je v reviews.php ($kneelight_faq), mnenja v auto_reviews/HR_kneelight.php, opis + nega v meta.php.
 * Slike: img/kneelight/ (nkl-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nkl      = get_template_directory_uri() . '/img/kneelight/';
$nkl_path = get_template_directory() . '/img/kneelight/';
$nkl_img  = function( $file, $alt, $cls = '' ) use ( $nkl, $nkl_path ) {
  if ( ! $file || ! file_exists( $nkl_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nkl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nkl_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nkl-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nkl-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* cena za zaključni poziv (iz izdelka, da se ujema s ponudbami) */
$nkl_eur = function( $v ) { return number_format( (float) $v, 2, ',', '.' ) . ' €'; };
$nkl_prod = function_exists( 'wc_get_product' ) ? wc_get_product( get_the_ID() ) : null;
$nkl_sale = $nkl_prod ? $nkl_prod->get_sale_price() : '';
$nkl_reg  = $nkl_prod ? $nkl_prod->get_regular_price() : '';
if ( '' === $nkl_sale && $nkl_prod ) { $nkl_sale = $nkl_prod->get_price(); }

/* 1) harmonika "How does it work?" */
$nkl_specs = array(
  array( 'Toplina', '3 razine – 41 °C, 49 °C i 60 °C' ),
  array( 'Vibracija', 'niska, visoka ili automatska' ),
  array( 'Trajanje', 'tretman do 10 minuta, zatim se uređaj sam isključi' ),
  array( 'Punjenje', 'bežično, USB-C – do 8 – 10 tretmana po punjenju' ),
  array( 'Težina', '0,86 kg' ),
);

/* 3) "Three therapies. One device." */
$nkl_terapije = array(
  array( 'Crveno svjetlo 850 nm', 'Svjetlo koje dopire dublje', 'Infracrveno svjetlo dopire u tkivo oko koljena i stvara ugodan osjećaj topline. Mnogi korisnici navode osjećaj bolje prokrvljenosti i opuštenosti.' ),
  array( 'Umirujuća toplina', 'Tri razine', 'Opušta ukočene mišiće i zglobove. 41 °C · 49 °C · 60 °C.' ),
  array( 'Nježna vibracija', 'Način masaže', 'Niska, visoka ili automatska – za opuštajuću masažu.' ),
  array( 'Oba koljena odjednom', 'Dva uređaja jedan uz drugi', 'Koristite dva uređaja istovremeno – po jedan za svako koljeno.' ),
  array( 'Bežično · USB-C', 'Do 8 – 10 tretmana po punjenju', 'Potpuno se napuni za 2 – 5 sati. Koristite ga na kauču, u krevetu ili na putu.' ),
);
$nkl_brojke = array(
  array( '10 min', 'automatsko isključivanje' ),
  array( '0,86 kg', 'lagan i prenosiv' ),
  array( '1 veličina', 'podesivi remen' ),
);

/* 4) "What's new in Knee 2.0" */
$nkl_novo = array(
  array( 'Nadograđeno crveno svjetlo', 'S osnovnih 600 nm na 850 nm za dublji doseg.' ),
  array( 'Potpuno podesivi remeni', 'Jedna veličina za sve. Ne klizi i ne steže.' ),
  array( 'Poboljšano podstavljanje', 'Mekše prianjanje za duže, opuštajuće tretmane.' ),
  array( 'Vrhunska izrada', 'Bolji materijali, bolja tehnologija.' ),
);

/* 5) "The 3-step routine" (gel in opornica nista del paketa -> po želji) */
$nkl_koraci = array(
  array( 'Korak 01', 'Tretman od 7 – 10 minuta', 'Pričvrstite uređaj i odaberite toplinu i vibraciju. Sam se isključuje.' ),
  array( 'Korak 02', 'Nanesite gel', 'Odmah nakon tretmana po želji nanesite tanak sloj gela ili kreme za masažu.' ),
  array( 'Korak 03', 'Potpora preko noći', 'Po želji navucite elastičnu potporu za koljeno za udobnost tijekom sna.' ),
);

/* 6) "Customer survey" — odstotki izpuščeni, omiljeno */
$nkl_navode = array(
  'Mnogi korisnici navode da se nakon tjedan dana redovite upotrebe koljena osjećaju opuštenije i ugodnije.',
  'Mnogi korisnici navode manji osjećaj ukočenosti i lakše kretanje već nakon prvog tjedna.',
  'Mnogi korisnici nakon nekoliko tjedana navode osjećaj bolje prokrvljenosti i lakšeg kretanja.',
);

/* 7) "How it compares" (vrstica 90 dni + 2 leti garancije -> NORIKS 30 dana) */
$nkl_usporedba = array(
  array( 'Crveno svjetlo', array( 'da', '850 nm' ), array( 'da', 'ovisi o ordinaciji' ), array( 'ne', '' ) ),
  array( 'Toplina', array( 'da', '3 razine' ), array( 'da', '' ), array( 'da', '' ) ),
  array( 'Vibracijska masaža', array( 'da', '3 načina' ), array( 'txt', 'ovisi' ), array( 'ne', '' ) ),
  array( 'Kod kuće, bilo kada', array( 'da', '' ), array( 'ne', 'potrebni termini' ), array( 'da', '' ) ),
  array( 'Bežični uređaj', array( 'da', '' ), array( 'ne', '' ), array( 'ne', 'obično s kabelom' ) ),
  array( 'Jednokratna kupnja', array( 'da', '' ), array( 'ne', 'plaća se po posjetu' ), array( 'da', '' ) ),
  array( 'Pravo na povrat u roku od 30 dana', array( 'da', '' ), array( 'ne', '' ), array( 'txt', 'ovisi' ) ),
);
$nkl_cell = function( $c ) {
  $o = '';
  if ( 'da' === $c[0] ) { $o .= '<span class="nkl-yes" aria-label="Da">✓</span>'; }
  elseif ( 'ne' === $c[0] ) { $o .= '<span class="nkl-no" aria-label="Ne">—</span>'; }
  else { $o .= '<span class="nkl-txt">' . esc_html( $c[1] ) . '</span>'; return $o; }
  if ( '' !== $c[1] ) { $o .= '<small>' . esc_html( $c[1] ) . '</small>'; }
  return $o;
};

/* 8) komentarji kupcev (7, prevedeni in omiljeni: brez bolezni, operacij in obljub zdravljenja; imena lokalizirana) */
$nkl_reviews = array(
  array( 'ime' => 'Ema P.', 'naslov' => 'Kao mala masaža kod fizioterapeuta', 'tekst' => 'Kupila sam ga svekru za Dan očeva. Nakon dugih dana koljena su mu ukočena, a kaže da mu je ovaj masažer kao mala masaža kod fizioterapeuta – topao i opuštajući.' ),
  array( 'ime' => 'Josip D.', 'naslov' => 'Dio mamine rutine', 'tekst' => 'Mama mi je poslala poveznicu pa sam joj ga naručio. Koristi ga svaki dan i kaže da osjeća duboku toplinu i ugodu kakvu nema ni s termoforom. Postao je dio njezine jutarnje i večernje rutine.' ),
  array( 'ime' => 'Ante E.', 'naslov' => 'Napokon nešto za mene', 'tekst' => 'Imam 57 godina i koljena me znaju podsjetiti na sebe. Isprobao sam ovaj uređaj i imam osjećaj da je netko napokon napravio nešto za ljude poput mene.' ),
  array( 'ime' => 'Marko H.', 'naslov' => 'Lijep poklon', 'tekst' => 'Supruga me iznenadila njime za Dan očeva. Nakon tretmana koljeno osjećam opuštenije i manje ukočeno. Crveno svjetlo i toplina su stvarno ugodni.' ),
  array( 'ime' => 'Robert L.', 'naslov' => 'Prije i poslije šetnje', 'tekst' => 'Kad sam aktivan s djecom, koljena se brzo umore. Vibracija lijepo opusti to područje – koristim ga prije i poslije šetnje i na kraju dana se osjećam puno lakše.' ),
  array( 'ime' => 'Dario J.', 'naslov' => 'Veselim se svakoj večeri', 'tekst' => 'Cijeli dan sam na nogama u skladištu i do popodneva su mi koljena ukočena. Toplina i masaža djeluju baš na zglob, ugodnije nego led ili istezanje. Veselim se tretmanu svake večeri.' ),
  array( 'ime' => 'Ivan J.', 'naslov' => 'Jedna veličina stvarno pristaje', 'tekst' => 'Koljena su mi svako jutro bila ukočena. Vibracija ih lijepo razgiba i rado ga koristim. Jedna veličina pristaje savršeno – bojao sam se da neće.' ),
);

$nkl_n = 0; // števec sekcij za izmenična ozadja
$nkl_cls = function() use ( &$nkl_n ) { $nkl_n++; return ( $nkl_n % 2 ) ? ' nkl-tint' : ''; };
?>

<!-- 1) KAKO RADI (harmonike nakupne škatle "How does it work?" / "Will it fit my knee?" / "Can I use it after surgery…") — prevedena slika ob besedilu -->
<section class="nkl-sec<?php echo $nkl_cls(); ?>">
  <div class="nkl-wrap">
    <div class="nkl-row2 nkl-row2--top">
      <div class="nkl-media nkl-media--sq"><?php echo $nkl_img( 'nkl-g02-kako-radi-hr.webp', 'Kako radi NORIKS KneeLight – ugodna toplina, vibracijska masaža i crveno svjetlo 630 + 850 nm' ); ?></div>
      <div class="nkl-copy">
        <p class="nkl-kicker">Kako radi</p>
        <h2 class="nkl-h2">Toplina, vibracija i crveno svjetlo <em>u jednom bežičnom uređaju</em></h2>
        <p>Pričvrstite ga na koljeno, odaberite postavke i <strong>pritisnite start</strong>.</p>
        <dl class="nkl-specs">
          <?php foreach ( $nkl_specs as $sp ) : ?>
          <div><dt><?php echo esc_html( $sp[0] ); ?>:</dt><dd><?php echo esc_html( $sp[1] ); ?></dd></div>
          <?php endforeach; ?>
        </dl>
        <p><strong>Hoće li pristajati mom koljenu?</strong> Jedna veličina s potpuno podesivim remenima za udobno i čvrsto prianjanje.</p>
        <p><strong>Nakon operacije ili s implantatima?</strong> Ako ste imali operaciju koljena ili ugradnju proteze, imate metalne implantate ili elektrostimulator srca, prije upotrebe se posavjetujte s liječnikom. Ne koristite ga kod djece.</p>
        <p class="nkl-big">Ugodna toplina i masaža – kod kuće, kad vama odgovara.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) VEČERNJI RITUAL ("The nightly ritual – Ten minutes a night. Easier mornings."; 100,000+ -> tisuće, 6,328 -> 1081) — slika ob besedilu -->
<section class="nkl-sec<?php echo $nkl_cls(); ?>">
  <div class="nkl-wrap">
    <div class="nkl-row2 nkl-row2--rev">
      <div class="nkl-media"><?php echo $nkl_img( 'nkl-s2-ritual.webp', 'Muškarac na podu pričvršćuje NORIKS KneeLight na koljeno' ); ?></div>
      <div class="nkl-copy">
        <p class="nkl-kicker">Večernji ritual</p>
        <h2 class="nkl-h2">Deset minuta navečer. <em>Ugodnija jutra.</em></h2>
        <p>Kratak večernji tretman toplinom, vibracijom i crvenim svjetlom koji se lako uklopi u svaki dan – dok sjedite na kauču ili ležite u krevetu.</p>
        <div class="nkl-stats">
          <div><b>Tisuće</b><span>zadovoljnih kupaca</span></div>
          <div><b>4,8</b><span>ocjena kupaca</span></div>
          <div><b>1081</b><span>recenzija</span></div>
        </div>
        <p class="nkl-big">Deset minuta za sebe – svake večeri.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) TRI TERAPIJE. JEDAN UREĐAJ. ("Three therapies. One device.", 5 kartic + 3 številke; omiljeno) — slika obeh kolen ob besedilu -->
<section class="nkl-sec<?php echo $nkl_cls(); ?>">
  <div class="nkl-wrap">
    <div class="nkl-row2">
      <div class="nkl-media nkl-media--sq"><?php echo $nkl_img( 'nkl-g06-oba-koljena.webp', 'Dva NORIKS KneeLight uređaja na oba koljena istovremeno' ); ?></div>
      <div class="nkl-copy">
        <p class="nkl-kicker">Tri terapije. Jedan uređaj.</p>
        <h2 class="nkl-h2">Sve što vašem koljenu treba, <em>u jednom uređaju</em></h2>
        <p>Crveno svjetlo, toplina i vibracija djeluju zajedno dok se vi opuštate. <strong>Bez kabela, bez termina.</strong></p>
        <ul class="nkl-feat">
          <?php foreach ( $nkl_terapije as $t ) : ?>
          <li><strong><?php echo esc_html( $t[0] ); ?></strong> <span class="nkl-feat__sub"><?php echo esc_html( $t[1] ); ?></span><br><?php echo esc_html( $t[2] ); ?></li>
          <?php endforeach; ?>
        </ul>
        <div class="nkl-stats nkl-stats--sm">
          <?php foreach ( $nkl_brojke as $b ) : ?>
          <div><b><?php echo esc_html( $b[0] ); ?></b><span><?php echo esc_html( $b[1] ); ?></span></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4) 850 NANOMETARA ("What's new in Knee 2.0 – Rebuilt from the light up.") — slika LED obroča ob besedilu -->
<section class="nkl-sec<?php echo $nkl_cls(); ?>">
  <div class="nkl-wrap">
    <div class="nkl-row2 nkl-row2--rev">
      <div class="nkl-media"><?php echo $nkl_img( 'nkl-s4-850nm.webp', 'Crvene LED diode u unutrašnjosti NORIKS KneeLight uređaja' ); ?></div>
      <div class="nkl-copy">
        <p class="nkl-kicker">850 nanometara</p>
        <h2 class="nkl-h2">Što je novo: <em>iznova osmišljen, počevši od svjetla</em></h2>
        <p>Zadržali smo sve što je dobro funkcioniralo u prvoj verziji i to poboljšali.</p>
        <div class="nkl-nm" aria-label="Crveno svjetlo: s 600 nm na 850 nm">
          <span class="nkl-nm__old">600 nm</span><span class="nkl-nm__arrow">→</span><span class="nkl-nm__new">850 nm</span>
        </div>
        <ul class="nkl-list">
          <?php foreach ( $nkl_novo as $n ) : ?>
          <li><strong><?php echo esc_html( $n[0] ); ?></strong> – <?php echo esc_html( $n[1] ); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 5) RUTINA U 3 KORAKA ("The 3-step routine – Before bed. Every night."; gel in opornica nista v paketu -> po želji) — slika ob besedilu -->
<section class="nkl-sec<?php echo $nkl_cls(); ?>">
  <div class="nkl-wrap">
    <div class="nkl-row2">
      <div class="nkl-media nkl-media--sq"><?php echo $nkl_img( 'nkl-s5-vecer.webp', 'NORIKS KneeLight na koljenu s ugodnim crvenim svjetlom' ); ?></div>
      <div class="nkl-copy">
        <p class="nkl-kicker">Rutina u 3 koraka</p>
        <h2 class="nkl-h2">Prije spavanja. <em>Svake večeri.</em></h2>
        <p>Redovitost je ključna. Preporučena večernja rutina:</p>
        <ol class="nkl-steps">
          <?php foreach ( $nkl_koraci as $k ) : ?>
          <li><span class="nkl-steps__n"><?php echo esc_html( $k[0] ); ?></span><strong><?php echo esc_html( $k[1] ); ?></strong><br><?php echo esc_html( $k[2] ); ?></li>
          <?php endforeach; ?>
        </ol>
        <p class="nkl-small">Gel i potpora za koljeno nisu dio paketa.</p>
        <div class="nkl-chips"><span>Ujutro: razgibajte se</span><span>Nakon vježbanja</span><span>Prije spavanja (preporučeno)</span></div>
      </div>
    </div>
  </div>
</section>

<!-- 6) ŠTO KORISNICI NAVODE ("Customer survey – What users reported."; odstotki izpuščeni, omiljeno) — fotografija ob besedilu -->
<section class="nkl-sec<?php echo $nkl_cls(); ?>">
  <div class="nkl-wrap">
    <div class="nkl-row2 nkl-row2--rev">
      <div class="nkl-media nkl-media--wide"><?php echo $nkl_img( 'nkl-s6-korisnici.webp', 'Kći pomaže mami pričvrstiti NORIKS KneeLight na koljeno' ); ?></div>
      <div class="nkl-copy">
        <p class="nkl-kicker">Iskustva korisnika</p>
        <h2 class="nkl-h2">Što korisnici <em>navode</em></h2>
        <ul class="nkl-list">
          <?php foreach ( $nkl_navode as $li ) : ?>
          <li><?php echo esc_html( $li ); ?></li>
          <?php endforeach; ?>
        </ul>
        <p class="nkl-small">Izvor: iskustva korisnika. Individualni doživljaj se razlikuje.</p>
      </div>
    </div>
  </div>
</section>

<!-- 7) USPOREDBA ("How it compares – Clinic-style therapy. No appointments."; 90 dni + 2 leti garancije -> 30 dana) — tabela ob sliki naprave -->
<section class="nkl-sec<?php echo $nkl_cls(); ?>">
  <div class="nkl-wrap">
    <div class="nkl-row2">
      <div class="nkl-media nkl-media--sq"><?php echo $nkl_img( 'nkl-g01-uredaj.webp', 'NORIKS KneeLight uređaj za koljeno' ); ?></div>
      <div class="nkl-copy">
        <p class="nkl-kicker">Usporedba</p>
        <h2 class="nkl-h2">Svjetlo, toplina i masaža – <em>bez termina</em></h2>
        <div class="nkl-cmp" role="table" aria-label="Usporedba NORIKS KneeLight, tretmana u ordinaciji i grijaćeg jastučića">
          <div class="nkl-cmp__row nkl-cmp__head" role="row">
            <span role="columnheader"></span>
            <span role="columnheader" class="nkl-cmp__us">NORIKS KneeLight</span>
            <span role="columnheader">Tretmani u ordinaciji</span>
            <span role="columnheader">Grijaći jastučić</span>
          </div>
          <?php foreach ( $nkl_usporedba as $r ) : ?>
          <div class="nkl-cmp__row" role="row">
            <span role="rowheader"><?php echo esc_html( $r[0] ); ?></span>
            <span role="cell" class="nkl-cmp__us"><?php echo $nkl_cell( $r[1] ); ?></span>
            <span role="cell"><?php echo $nkl_cell( $r[2] ); ?></span>
            <span role="cell"><?php echo $nkl_cell( $r[3] ); ?></span>
          </div>
          <?php endforeach; ?>
        </div>
        <p><a class="nkl-btn" href="#bundle-selector">Odaberite ponudu</a></p>
      </div>
    </div>
  </div>
</section>

<!-- 8) RECENZIJE ("Real customers" + komentarji kupcev; 6,328 -> 1081, 100,000+ -> tisuće; omiljeno) -->
<section class="nkl-sec<?php echo $nkl_cls(); ?>">
  <div class="nkl-wrap">
    <p class="nkl-kicker nkl-c">Stvarni kupci</p>
    <h2 class="nkl-h2 nkl-c">Bez termina. <em>Samo opuštanje.</em></h2>
    <div class="nkl-score">
      <span class="nkl-score__num">4,8</span>
      <?php echo $nkl_stars( 5 ); ?>
      <span class="nkl-score__txt">Odlično · na temelju 1081 recenzije · tisuće prodanih uređaja</span>
    </div>
    <div class="nkl-reviews">
      <?php foreach ( $nkl_reviews as $r ) : ?>
      <article class="nkl-card">
        <div class="nkl-card__body">
          <div class="nkl-card__head"><span class="nkl-avatar"><?php echo esc_html( function_exists( 'mb_substr' ) ? mb_substr( $r['ime'], 0, 1 ) : substr( $r['ime'], 0, 1 ) ); ?></span><?php echo $nkl_stars( 5 ); ?></div>
          <h3><?php echo esc_html( $r['naslov'] ); ?></h3>
          <p class="nkl-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nkl-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nkl-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 9) SPREMNI KAD STE I VI ("Ready when you are – Give your knees ten minutes."; komplet z gelom izpuščen, NORIKS pogoji) + opomba — slika ob besedilu -->
<section class="nkl-sec<?php echo $nkl_cls(); ?>">
  <div class="nkl-wrap">
    <div class="nkl-row2 nkl-row2--rev">
      <div class="nkl-media nkl-media--sq"><?php echo $nkl_img( 'nkl-g05-dva-uredaja.webp', 'Dva NORIKS KneeLight uređaja u kutiji' ); ?></div>
      <div class="nkl-copy">
        <p class="nkl-kicker">Spremni kad ste i vi</p>
        <h2 class="nkl-h2">Poklonite koljenima <em>deset minuta</em></h2>
        <p>Toplina, vibracija i crveno svjetlo od 850 nm u jednom bežičnom uređaju.</p>
        <?php if ( $nkl_sale ) : ?>
        <p class="nkl-price">Već od <strong><?php echo esc_html( $nkl_eur( $nkl_sale ) ); ?></strong><?php if ( $nkl_reg && (float) $nkl_reg > (float) $nkl_sale ) : ?> <s><?php echo esc_html( $nkl_eur( $nkl_reg ) ); ?></s><?php endif; ?></p>
        <?php endif; ?>
        <p class="nkl-small">Besplatna dostava za narudžbe iznad 70 € · Pravo na povrat u roku od 30 dana</p>
        <p><a class="nkl-btn" href="#bundle-selector">Odaberite ponudu</a></p>
        <p class="nkl-note"><strong>Napomena:</strong> NORIKS KneeLight nije medicinski proizvod i ne zamjenjuje pregled ni savjet liječnika. Namijenjen je opuštanju i ugodnoj toplini. Ako imate zdravstvenih tegoba, ozljedu, implantate ili elektrostimulator srca ili ste trudni, prije upotrebe se posavjetujte s liječnikom.</p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-upholsterycleaner.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob besedilu,
   izmenjujoča ozadja in strani. Paleta po originalu (temno rdeča): poudarek #bd1e2e, temno #171414, svetlo #f7efee. */
.nkl-sec { padding: 60px 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #171414; background: #fff; }
.nkl-sec * { box-sizing: border-box; }
.nkl-tint { background: #f7efee; }
.nkl-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nkl-c { text-align: center; }
.nkl-sec h2, .nkl-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nkl-kicker, .nkl-copy p.nkl-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #bd1e2e; margin: 0 0 10px; }
.nkl-h2 { font-weight: 800; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #171414; }
.nkl-h2 em { font-style: italic; color: #bd1e2e; }
.nkl-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nkl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nkl-row2--top { align-items: start; }
.nkl-row2--rev > :first-child { order: 2; }
.nkl-media > img { display: block; width: 100%; border-radius: 10px; box-shadow: 0 2px 4px rgba(23,20,20,.05), 0 14px 40px rgba(23,20,20,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 4 / 5; object-fit: cover; background: #fff; }
.nkl-media--wide > img { aspect-ratio: auto; object-fit: contain; }
.nkl-media--sq > img { aspect-ratio: 1 / 1; }
.nkl-copy p { font-size: 16px; line-height: 1.7; color: #4f4644; margin: 0 0 14px; }
.nkl-copy p strong { color: #171414; font-weight: 700; }
.nkl-sec p.nkl-big { font-size: 19px; font-weight: 800; color: #171414; line-height: 1.45; margin-top: 6px; }
.nkl-sec p.nkl-small { font-size: 13.5px; line-height: 1.55; color: #7a6f6d; }

/* 1) tehnični podatki */
.nkl-specs { margin: 0 0 18px; padding: 12px 18px; background: #fff; border: 1px solid #e8bcc1; border-radius: 10px; }
.nkl-specs > div { display: grid; grid-template-columns: 120px 1fr; gap: 10px; padding: 7px 0; border-top: 1px solid #f3dfe1; font-size: 15px; line-height: 1.5; }
.nkl-specs > div:first-child { border-top: 0; }
.nkl-specs dt { font-weight: 700; color: #171414; margin: 0; }
.nkl-specs dd { margin: 0; color: #4f4644; }

/* številke */
.nkl-stats { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 12px; margin: 6px 0 18px; }
.nkl-stats > div { background: #fff; border: 1px solid #e8bcc1; border-radius: 10px; padding: 14px 10px; text-align: center; box-shadow: 0 2px 10px rgba(23,20,20,.04); }
.nkl-stats b { display: block; font-size: 24px; font-weight: 800; color: #bd1e2e; line-height: 1.2; }
.nkl-stats span { display: block; font-size: 13px; color: #6b605e; line-height: 1.4; margin-top: 2px; }
.nkl-stats--sm b { font-size: 19px; }

/* seznami */
.nkl-list, .nkl-feat { list-style: none; margin: 0 0 16px; padding: 0; }
.nkl-list li, .nkl-feat li { position: relative; padding-left: 30px; margin: 0 0 10px; font-size: 15.5px; line-height: 1.6; color: #4f4644; }
.nkl-list li strong, .nkl-feat li strong { color: #171414; }
.nkl-list li::before, .nkl-feat li::before { content: "✓"; position: absolute; left: 0; top: 2px; width: 20px; height: 20px; border-radius: 50%; background: #bd1e2e; color: #fff; font-size: 11px; font-weight: 800; line-height: 20px; text-align: center; }
.nkl-feat__sub { font-size: 13px; font-weight: 700; color: #bd1e2e; }

/* 4) 600 -> 850 nm */
.nkl-nm { display: flex; align-items: center; gap: 12px; margin: 4px 0 18px; }
.nkl-nm span { font-weight: 800; font-size: 18px; border-radius: 999px; padding: 6px 16px; }
.nkl-nm__old { background: #fff; color: #9a8f8d; border: 1px solid #e3d6d4; text-decoration: line-through; }
.nkl-nm__arrow { color: #bd1e2e; padding: 0 !important; }
.nkl-nm__new { background: #bd1e2e; color: #fff; }

/* 5) koraki */
.nkl-steps { list-style: none; margin: 0 0 10px; padding: 0; counter-reset: none; }
.nkl-steps li { background: #fff; border: 1px solid #e8bcc1; border-radius: 10px; padding: 12px 16px; margin: 0 0 10px; font-size: 15px; line-height: 1.6; color: #4f4644; box-shadow: 0 2px 10px rgba(23,20,20,.04); }
.nkl-steps li strong { color: #171414; font-size: 16px; }
.nkl-steps__n { display: block; font-size: 11.5px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; color: #bd1e2e; }
.nkl-chips { display: flex; flex-wrap: wrap; gap: 8px; }
.nkl-chips span { font-size: 13px; font-weight: 700; color: #bd1e2e; background: #f6d9dc; border-radius: 999px; padding: 5px 12px; }

/* 7) usporedba */
.nkl-cmp { background: #fff; border: 1px solid #e8bcc1; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 10px rgba(23,20,20,.05); margin-bottom: 18px; }
.nkl-cmp__row { display: grid; grid-template-columns: 1.3fr 1fr 1fr 1fr; border-top: 1px solid #f3dfe1; }
.nkl-cmp__row:first-child { border-top: 0; }
.nkl-cmp__row > span { padding: 10px 10px; font-size: 14.5px; line-height: 1.4; color: #4f4644; text-align: center; }
.nkl-cmp__row > span[role="rowheader"] { font-weight: 700; color: #171414; text-align: left; }
.nkl-cmp__row > span.nkl-cmp__us { background: #f6d9dc; color: #171414; font-weight: 700; }
.nkl-cmp__head > span { font-weight: 800; color: #171414; font-size: 14px; }
.nkl-cmp__head > span.nkl-cmp__us { background: #bd1e2e; color: #fff; }
.nkl-cmp small { display: block; font-size: 12px; font-weight: 500; color: #6b605e; margin-top: 2px; }
.nkl-yes { color: #bd1e2e; font-weight: 800; font-size: 17px; }
.nkl-no { color: #b5aaa8; font-weight: 700; }
.nkl-txt { font-size: 13.5px; }
.nkl-sec a.nkl-btn { display: inline-block; background: #bd1e2e; color: #fff; font-weight: 800; font-size: 16px; padding: 13px 28px; border-radius: 10px; text-decoration: none; box-shadow: 0 4px 14px rgba(189,30,46,.25); }
.nkl-sec a.nkl-btn:hover { background: #9e1826; color: #fff; }

/* 8) recenzije */
.nkl-score { display: flex; flex-direction: column; align-items: center; gap: 4px; margin: 6px auto 30px; text-align: center; }
.nkl-score__num { font-size: 52px; font-weight: 800; line-height: 1; color: #171414; }
.nkl-score .nkl-stars { font-size: 20px; }
.nkl-score__txt { font-size: 14px; color: #6b605e; }
.nkl-reviews { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 16px; align-items: start; }
.nkl-card { background: #fff; border: 1px solid #e8bcc1; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(23,20,20,.05); }
.nkl-card__body { padding: 16px; }
.nkl-card__head { display: flex; align-items: center; gap: 10px; }
.nkl-avatar { width: 34px; height: 34px; border-radius: 50%; background: #f6d9dc; color: #bd1e2e; font-weight: 800; display: inline-flex; align-items: center; justify-content: center; font-size: 15px; }
.nkl-card h3 { font-size: 16px; font-weight: 800; line-height: 1.35; color: #171414; margin: 10px 0 6px; }
.nkl-card__txt { font-size: 14.5px; line-height: 1.6; color: #3d3533; margin: 0 0 10px; font-style: italic; }
.nkl-card__name { font-size: 13.5px; font-weight: 700; color: #171414; margin: 0; }

/* 9) zaključek */
.nkl-sec p.nkl-price { font-size: 18px; color: #171414; }
.nkl-price strong { font-size: 26px; color: #bd1e2e; }
.nkl-price s { color: #9a8f8d; margin-left: 6px; }
.nkl-sec p.nkl-note { margin-top: 18px; padding: 12px 16px; background: #fff; border-left: 3px solid #bd1e2e; border-radius: 0 10px 10px 0; font-size: 13.5px; line-height: 1.6; color: #4f4644; }

/* ocjene */
.nkl-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nkl-stars__off { color: #e2d8d6; }
.nkl-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nkl-row2 { gap: 32px; }
  .nkl-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nkl-sec { padding: 42px 0; }
  .nkl-wrap { padding: 0 16px; }
  .nkl-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nkl-row2--rev > :first-child { order: 0; }
  .nkl-specs > div { grid-template-columns: 1fr; gap: 2px; }
  .nkl-cmp__row { grid-template-columns: 1.2fr 1fr 1fr 1fr; }
  .nkl-cmp__row > span { padding: 9px 6px; font-size: 13px; }
  .nkl-cmp__head > span { font-size: 12.5px; }
  .nkl-reviews { gap: 12px; }
  .nkl-card__body { padding: 12px; }
}
@media (max-width: 480px) {
  .nkl-reviews { grid-template-columns: 1fr; }
  .nkl-stats b { font-size: 19px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-kneelight .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

/* kratek opis izdelka: zelene kljukice namesto pik (REST pobriše inline slog) */
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
.woocommerce-product-details__short-description .nkl-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
