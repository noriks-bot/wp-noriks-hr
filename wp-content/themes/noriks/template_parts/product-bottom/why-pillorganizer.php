<?php
/**
 * product-bottom: NORIKS PillOrganizer — organizator za tablete s 14 vrećica sa zatvaračem (orto-pillorganizer).
 * Original: emmafy.com/products/pilly-the-pill-organizer-bag — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu
 * (predloga why-seatcushion.php / why-bottlesling.php / why-hands.php), poudarek mint/zajbelj zelena po barvi izdelka (#3d7a5c).
 *   1) nakupna škatla: zavihki "What's included / 90 Days Risk-Free Guarantee / Weight & Dimensions"
 *      -> Što dobivate (slika odprte torbice ob besedilu; vračilo po NORIKS pogojih, mere v cm)
 *   2) "One Pouch. Zero Bottles."                    -> slika ob besedilu
 *   3) "Flip. Write. Zip."                           -> slika ob besedilu (napisi dni na vrećicah prevedeni: Ponedjeljak … Petak)
 *   4) "Pack Only the Pouches You Need"              -> slika ob besedilu
 *   5) "Features:"                                   -> slika z merami ob besedilu (inči -> cm, »Morning/Vitamins« -> »Jutro/Vitamini«)
 *   6) "Customer satisfaction first"                 -> 4 fotografije kupcev ob besedilu (iz kolaža originala samo ploščice brez
 *      logotipa EMMAFY; ploščica »500,000+ Happy Women« izpuščena)
 *   7) "Customer Reviews" (122, 74/10/3/4/9 %)        -> 4,4 / 1081 z razdelitvijo, skalirano na 692 + 5 mnenj originala
 * Izpusceno: ponudbe-dodatki »+7 / +14 extra zip pouches«, značka »Summer Sale«, »Subscribe & Save«, »19 Verified Reviews«,
 * zavihek »Shipping Info« (dostava po standardnih NORIKS harmonikah), e-pošta podpore konkurenta, noga trgovine.
 * FAQ (13) je v reviews.php ($pillorganizer_faq), mnenja v auto_reviews/HR_pillorganizer.php, opis + nega v meta.php.
 * Slike: img/pillorganizer/ (npo-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$npo      = get_template_directory_uri() . '/img/pillorganizer/';
$npo_path = get_template_directory() . '/img/pillorganizer/';
$npo_img  = function( $file, $alt, $cls = '' ) use ( $npo, $npo_path ) {
  if ( ! $file || ! file_exists( $npo_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $npo . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$npo_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="npo-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="npo-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) zavihki nakupne škatle */
$npo_paket = array(
  array( '14 vrećica sa zatvaračem', 'koje se skidaju s prstenova' ),
  array( 'Pravo na povrat u roku od 30 dana', 'kupujte bez brige' ),
  array( 'Korisnička podrška', 'tu smo za sva vaša pitanja' ),
);
$npo_specs = array(
  array( 'Veličina', '16 × 12 × 6 cm' ),
  array( 'Vrećica', '11,4 × 8,9 cm' ),
  array( 'Težina', '160 g sa svih 14 vrećica' ),
  array( 'Materijali', 'vanjski sloj od PU materijala, vrećice od EVA materijala sa zatvaračem' ),
  array( 'Natpisi', 'pišite samo trajnim markerom (na uljnoj bazi)' ),
);

/* 5) značajke */
$npo_feat = array(
  'Otvara se kao registrator – odmah otvorite vrećicu koja vam treba',
  '14 vrećica sa zatvaračem koje se skidaju, s naljepnicama za pisanje (ime, AM / PM, dan)',
  '2 mrežasta bočna džepa – flasteri, maramice, sitnice',
  'Dvostruki zatvarač – svaka vrećica se zatvara, a zatim i cijela torbica',
  'Otporna na prskanje – obrišete je u nekoliko sekundi',
);

/* 6) fotografije kupcev (kolaž originala brez ploščic z logotipom) */

/* 7) recenzije — 5 mnenj originala (imena lokalizirana) */
$npo_reviews = array(
  array( 'ime' => 'Davor S.', 'z' => 5, 'naslov' => 'Vrlo praktičan za putovanja',
         'tekst' => 'Odlična izvedba nosača za tablete. U plastične vrećice mogu dodati i vrećice protiv vlage da tablete ostanu svježe i čvrste.' ),
  array( 'ime' => 'Suzana L.', 'z' => 5, 'naslov' => 'Lako vađenje za svaki dan',
         'tekst' => 'Sviđa mi se što mogu izvaditi samo dnevnu dozu i ponijeti je sa sobom umjesto cijele kutije za tablete.' ),
  array( 'ime' => 'Jadranka P.', 'z' => 4, 'naslov' => 'Kao što je opisano',
         'tekst' => 'Još ga nisam koristila, ali je upravo ono što sam očekivala.' ),
  array( 'ime' => 'Renata S.', 'z' => 5, 'naslov' => 'Nosač za tablete',
         'tekst' => 'Obožavam svoj. Ostale sam poklonila – svima su se svidjeli.' ),
  array( 'ime' => 'Marica L.', 'z' => 5, 'naslov' => 'Bilježnica za tablete',
         'tekst' => 'Mislim da ćemo uživati koristeći ga za nošenje tableta dva ili tri tjedna. I u različitim načinima slaganja.' ),
);
/* razdelitev ocen originala 90 / 12 / 4 / 5 / 11 (od 122) skalirana na 692 recenzij (NORIKS) */
$npo_dist = array( 5 => 511, 4 => 68, 3 => 23, 2 => 28, 1 => 62 );

$npo_n = 0; // števec sekcij za izmenična ozadja
$npo_cls = function() use ( &$npo_n ) { $npo_n++; return ( $npo_n % 2 ) ? ' npo-tint' : ''; };
?>

<!-- 1) ŠTO DOBIVATE (zavihki nakupne škatle: What's included, 90-day guarantee -> NORIKS 30 dana, Weight & Dimensions) — slika ob besedilu -->
<section class="npo-sec<?php echo $npo_cls(); ?>">
  <div class="npo-wrap">
    <div class="npo-row2 npo-row2--top">
      <div class="npo-media"><?php echo $npo_img( 'npo-s1-otvorena.webp', 'Otvoreni NORIKS PillOrganizer s 14 vrećica sa zatvaračem i mrežastim džepovima' ); ?></div>
      <div class="npo-copy">
        <p class="npo-kicker">Što je u paketu</p>
        <h2 class="npo-h2">Uz svaki NORIKS PillOrganizer <em>dobivate:</em></h2>
        <ul class="npo-check">
          <?php foreach ( $npo_paket as $pk ) : ?>
          <li><strong><?php echo esc_html( $pk[0] ); ?></strong> – <?php echo esc_html( $pk[1] ); ?></li>
          <?php endforeach; ?>
        </ul>
        <dl class="npo-specs">
          <?php foreach ( $npo_specs as $sp ) : ?>
          <div><dt><?php echo esc_html( $sp[0] ); ?>:</dt><dd><?php echo esc_html( $sp[1] ); ?></dd></div>
          <?php endforeach; ?>
        </dl>
        <p>Ako imate bilo kakav problem s narudžbom, naša korisnička podrška rado će vam pomoći i odmah pronaći rješenje.</p>
        <p class="npo-big">Pravo na povrat u roku od 30 dana i besplatna dostava za narudžbe iznad 70 €.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) JEDNA TORBICA. NULA BOČICA. ("One Pouch. Zero Bottles.") — slika ob besedilu -->
<section class="npo-sec<?php echo $npo_cls(); ?>">
  <div class="npo-wrap">
    <div class="npo-row2 npo-row2--rev">
      <div class="npo-media"><?php echo $npo_img( 'npo-s2-bez-bocica.webp', 'Hrpa bočica s tabletama i kompaktni NORIKS PillOrganizer' ); ?></div>
      <div class="npo-copy">
        <p class="npo-kicker">Umjesto bočica</p>
        <h2 class="npo-h2">Jedna torbica. <em>Nula bočica.</em></h2>
        <p>Dno vaše torbe ne bi trebalo zvučati kao zvečka. Lijekovi na recept, vitamini, tablete protiv bolova za svaki slučaj – <strong>NORIKS PillOrganizer zamjenjuje hrpu bočica jednom kompaktnom torbicom</strong> koja se otvara poput malog registratora.</p>
        <p class="npo-big">Sve vaše tablete – bez zveckanja bočica.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) OTVORITE. NAPIŠITE. ZATVORITE. ("Flip. Write. Zip.") — slika ob besedilu -->
<section class="npo-sec<?php echo $npo_cls(); ?>">
  <div class="npo-wrap">
    <div class="npo-row2">
      <div class="npo-media"><?php echo $npo_img( 'npo-s3-dani-hr.webp', 'Vrećice NORIKS PillOrganizer s natpisima dana u tjednu' ); ?></div>
      <div class="npo-copy">
        <p class="npo-kicker">Kako radi</p>
        <h2 class="npo-h2">Otvorite. Napišite. <em>Zatvorite.</em></h2>
        <p>Unutra je <strong>registrator s prstenovima koji drži 14 prozirnih vrećica sa zatvaračem</strong>. Svaka ima naljepnicu za pisanje – ime, AM / PM (jutro / večer), dan.</p>
        <p>Napunite cijeli tjedan za nekoliko minuta, skinite jednu vrećicu za taj dan i stavite je u džep.</p>
        <p class="npo-big">Napišite, zatvorite i krenite.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) PONESITE SAMO VREĆICE KOJE TREBATE ("Pack Only the Pouches You Need") — slika ob besedilu -->
<section class="npo-sec<?php echo $npo_cls(); ?>">
  <div class="npo-wrap">
    <div class="npo-row2 npo-row2--rev">
      <div class="npo-media"><?php echo $npo_img( 'npo-s4-u-torbi.webp', 'NORIKS PillOrganizer stane u torbu za putovanje' ); ?></div>
      <div class="npo-copy">
        <p class="npo-kicker">Za svaki dan i za putovanja</p>
        <h2 class="npo-h2">Ponesite samo <em>vrećice koje trebate</em></h2>
        <p>Vrećice se jednostavno skidaju s prstenova. Vikend izlet? Uzmite dvije. Krstarenje od dva tjedna? Ponesite cijeli registrator.</p>
        <p>Jedna vrećica stane u džep za taj dan – a <strong>sve se zatvara dvaput</strong>, pa ništa ne završi rasuto na dnu torbe.</p>
        <p class="npo-big">Dvaput zatvoreno – ništa ne ispada.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) ZNAČAJKE ("Features:") — slika z merami ob besedilu -->
<section class="npo-sec<?php echo $npo_cls(); ?>">
  <div class="npo-wrap">
    <div class="npo-row2">
      <div class="npo-media"><?php echo $npo_img( 'npo-s5-dimenzije-hr.webp', 'Dimenzije NORIKS PillOrganizer: 16 × 11,9 × 6,1 cm, vrećica 11,4 × 8,9 cm', 'npo-img--free' ); ?></div>
      <div class="npo-copy">
        <p class="npo-kicker">Značajke</p>
        <h2 class="npo-h2">Sve na jednom mjestu, <em>16 × 12 × 6 cm</em></h2>
        <ul class="npo-check">
          <?php foreach ( $npo_feat as $f ) : ?>
          <li><?php echo esc_html( $f ); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 6) ZADOVOLJSTVO KUPACA NA PRVOM MJESTU ("Customer satisfaction first") — fotografije kupcev ob besedilu -->
<section class="npo-sec<?php echo $npo_cls(); ?>">
  <div class="npo-wrap">
    <div class="npo-row2 npo-row2--rev">
      <div class="npo-media"><?php echo $npo_img( 'npo-s6-kupci.webp', 'Zadovoljne kupice NORIKS-a' ); ?></div>
      <div class="npo-copy">
        <p class="npo-kicker"><?php echo $npo_stars( 5 ); ?> Naši kupci</p>
        <h2 class="npo-h2">Zadovoljstvo kupaca <em>na prvom mjestu</em></h2>
        <p>U NORIKS-u se trudimo da <strong>svaki naš kupac bude zadovoljan</strong>.</p>
        <p class="npo-big">Pravo na povrat u roku od 30 dana – kupujte bez brige.</p>
      </div>
    </div>
  </div>
</section>

<!-- 7) RECENZIJE KUPACA ("Customer Reviews") — 1081 po NORIKS + 5 mnenj originala -->
<section class="npo-sec<?php echo $npo_cls(); ?>">
  <div class="npo-wrap">
    <p class="npo-kicker npo-c">Recenzije kupaca</p>
    <h2 class="npo-h2 npo-c">Što kažu <em>naši kupci</em></h2>
    <div class="npo-score">
      <div class="npo-score__left">
        <span class="npo-score__num">4,4</span>
        <?php echo $npo_stars( 4 ); ?>
        <span class="npo-score__txt">Na temelju 1081 recenzije</span>
      </div>
      <div class="npo-dist">
        <?php foreach ( $npo_dist as $z => $c ) : ?>
        <div class="npo-dist__row"><span><?php echo (int) $z; ?> ★</span><span class="npo-dist__bar"><i style="width:<?php echo round( $c / 692 * 100, 1 ); ?>%"></i></span><span><?php echo (int) $c; ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="npo-reviews">
      <?php foreach ( $npo_reviews as $r ) : ?>
      <article class="npo-card">
        <?php echo $npo_stars( $r['z'] ); ?>
        <h3><?php echo esc_html( $r['naslov'] ); ?></h3>
        <p class="npo-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
        <p class="npo-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="npo-ok">✓ Potvrđena kupnja</span></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-seatcushion.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob besedilu,
   izmenjujoča ozadja in strani. Paleta po barvi izdelka (mint zelena): poudarek #3d7a5c, temno #1f2e27, svetlo #eef6f1. */
.npo-sec { padding: 60px 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1f2e27; background: #fff; }
.npo-sec * { box-sizing: border-box; }
.npo-tint { background: #eef6f1; }
.npo-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.npo-c { text-align: center; }
.npo-sec h2, .npo-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.npo-kicker, .npo-copy p.npo-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #3d7a5c; margin: 0 0 10px; }
.npo-kicker .npo-stars { letter-spacing: 1px; margin-right: 6px; }
.npo-h2 { font-weight: 800; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #1f2e27; }
.npo-h2 em { font-style: italic; color: #3d7a5c; }
.npo-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.npo-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.npo-row2--top { align-items: start; }
.npo-row2--rev > :first-child { order: 2; }
.npo-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(20,50,35,.05), 0 14px 40px rgba(20,50,35,.10); max-width: 560px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.npo-media > img.npo-img--free { aspect-ratio: auto; object-fit: contain; }
.npo-copy p { font-size: 16px; line-height: 1.7; color: #4b5a52; margin: 0 0 14px; }
.npo-copy p strong { color: #1f2e27; font-weight: 700; }
.npo-sec p.npo-big { font-size: 19px; font-weight: 800; color: #1f2e27; line-height: 1.45; margin-top: 6px; }

/* seznami s kljukicami + specifikacije */
.npo-check { list-style: none; padding: 0; margin: 4px 0 18px; display: flex; flex-direction: column; gap: 11px; }
.npo-check li { position: relative; padding-left: 30px; font-size: 15.5px; line-height: 1.55; color: #4b5a52; margin: 0; }
.npo-check li strong { color: #1f2e27; }
.npo-check li::before { content: "\2713"; position: absolute; left: 0; top: 1px; width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.npo-specs { margin: 0 0 18px; padding: 14px 18px; background: #fff; border: 1px solid #cfe3d7; border-radius: 10px; }
.npo-specs > div { display: grid; grid-template-columns: 120px 1fr; gap: 10px; padding: 7px 0; border-top: 1px solid #e2efe7; font-size: 15px; line-height: 1.55; }
.npo-specs > div:first-child { border-top: 0; }
.npo-specs dt { font-weight: 700; color: #1f2e27; margin: 0; }
.npo-specs dd { margin: 0; color: #4b5a52; }

/* 7) recenzije */
.npo-score { display: grid; grid-template-columns: 220px minmax(0, 420px); gap: 28px; justify-content: center; align-items: center; margin: 6px auto 30px; }
.npo-score__left { display: flex; flex-direction: column; align-items: center; gap: 4px; }
.npo-score__num { font-size: 52px; font-weight: 800; line-height: 1; color: #1f2e27; }
.npo-score__left .npo-stars { font-size: 20px; }
.npo-score__txt { font-size: 14px; color: #66766d; }
.npo-dist__row { display: grid; grid-template-columns: 38px 1fr 40px; gap: 10px; align-items: center; font-size: 14px; color: #4b5a52; margin: 5px 0; }
.npo-dist__bar { height: 9px; border-radius: 999px; background: #dcebe2; overflow: hidden; }
.npo-dist__bar i { display: block; height: 100%; background: #3d7a5c; border-radius: 999px; }
.npo-reviews { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; align-items: start; }
.npo-card { background: #fff; border: 1px solid #cfe3d7; border-radius: 10px; padding: 18px 16px; box-shadow: 0 2px 10px rgba(20,50,35,.05); }
.npo-card h3 { font-size: 16px; font-weight: 800; line-height: 1.35; color: #1f2e27; margin: 8px 0 6px; }
.npo-card__txt { font-size: 14.5px; line-height: 1.6; color: #3c4a43; margin: 0 0 10px; font-style: italic; }
.npo-card__name { font-size: 13.5px; font-weight: 700; color: #1f2e27; margin: 0; }

/* ocjene */
.npo-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.npo-stars__off { color: #d9e3dd; }
.npo-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .npo-row2 { gap: 32px; }
  .npo-reviews { grid-template-columns: repeat(3, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .npo-sec { padding: 42px 0; }
  .npo-wrap { padding: 0 16px; }
  .npo-row2 { grid-template-columns: 1fr; gap: 24px; }
  .npo-row2--rev > :first-child { order: 0; }
  .npo-specs > div { grid-template-columns: 1fr; gap: 2px; }
  .npo-score { grid-template-columns: 1fr; gap: 14px; }
  .npo-reviews { grid-template-columns: 1fr 1fr; gap: 12px; }
}
@media (max-width: 480px) {
  .npo-reviews { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-pillorganizer .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .npo-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
