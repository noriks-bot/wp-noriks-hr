<?php
/**
 * product-bottom: NORIKS SnugBoot — zimske barefoot cizme s krznenom podstavom, unisex (orto-snugboot).
 * POZOR: ni povezano z NORIKS Snug (jastuk za cijelo tijelo, why-snug.php) — lastna predpona razredov nskb-.
 * Original: peak-footwear.com/products/snug-boot-bogo (»Snug Boot - Non-slip & waterproof winter barefoot shoe (Unisex)«)
 * — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu (predloga why-leatherboots.php / why-hands.php),
 * privzeta topla rjava paleta (#a9683f):
 *   1) 4 stolpci z ikonami (Thin Soles / Natural Comfort / Wide Toe Box / Flexible)      -> 4 kartice z ikonami
 *   2) »Customers love our shoes!« (6 fotografij kupcev)                                  -> Kupci vole naše čizme!
 *   3) »Say goodbye to uncomfortable winter shoes…« (slika primerjave, logotip -> NORIKS) -> slika ob besedilu
 *   4) »Why your feet deserve better this winter« (obicne cipele / nase, logotip -> NORIKS) -> slika ob besedilu
 *   5) »Orthopedist's Recommendation« (znacka Recommended by orthopedists in logotip odstranjena,
 *      trditev omiljena: »Osmišljeno prema ortopedskim načelima«)                         -> slika ob besedilu
 *   6) »Optimal Comfort – All Day Long« (5 kljukic, slika z oznakami, logotip -> NORIKS)  -> slika ob besedilu
 *   7) Loox recenzije (4.9, 1222 -> NORIKS 1081) + 4 mnenja                               -> Recenzije
 * Izpusceno: glava, pasice Autumn Sale / Spring Sale / Free insured shipping, »Linda T. and 255,000+ others«, 1+1 OFFER
 * in »Only 5 pairs left« (namesto tega vgrajena NORIKS »Ograničena zaliha«), Recently viewed, Guarantee (Free Delivery,
 * Designed in the USA), vprasanje kupca brez vsebine. Fit Note iz tablice velicin -> size-chart-snugboot.php, meta.php, FAQ.
 * Slike: img/snugboot/ (nskb-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nskb      = get_template_directory_uri() . '/img/snugboot/';
$nskb_path = get_template_directory() . '/img/snugboot/';
$nskb_img  = function( $file, $alt ) use ( $nskb, $nskb_path ) {
  if ( ! $file || ! file_exists( $nskb_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nskb . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager">';
};
$nskb_stars = function( $n ) {
  return '<span class="nskb-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">' . str_repeat( '★', (int) $n ) . '<span class="nskb-stars__off">' . str_repeat( '★', 5 - (int) $n ) . '</span></span>';
};

/* 1) stiri prednosti z ikonami */
$nskb_feat = array(
  array( 'nskb-i-tanki-potplati.svg',    'Tanki potplati',         'Osjetite pravi barefoot doživljaj i prirodnu povezanost s tlom zahvaljujući ultratankim potplatima.' ),
  array( 'nskb-i-prirodna-udobnost.svg', 'Prirodna udobnost',      'Prirodna udobnost daje potporu i temelj za uspravno držanje te pomaže rasteretiti koljena, kukove i leđa.' ),
  array( 'nskb-i-sirok-prostor.svg',     'Širok prostor za prste', 'Širok prednji dio daje prstima prostor koji im treba i omogućuje im da se opuste u svom prirodnom položaju.' ),
  array( 'nskb-i-fleksibilne.svg',       'Fleksibilne',            'Mekani, fleksibilni i tanki potplati daju stopalima neograničenu slobodu pokreta i prirodan, zdrav hod.' ),
);

/* 2) fotografije kupcev */
$nskb_kupci = array( 'nskb-k01.webp', 'nskb-k02.webp', 'nskb-k03.webp', 'nskb-k04.webp', 'nskb-k05.webp', 'nskb-k06.webp' );

/* 7) mnenja z originala (Loox, prevedena; ime druge znamke in pritozba o paketu izpusceni) */
$nskb_reviews = array(
  array( 'ime' => 'Lucija C.',   'zv' => 5, 'naslov' => 'Kao da hodam bosa',              'tekst' => 'Danas sam dobila čizme. Obula sam ih i… ne mogu vjerovati, gotovo ne osjećam da ih imam na nogama — tako su udobne i lagane, osjećam se kao da hodam bosa. Hoću li opet naručiti? Apsolutno.' ),
  array( 'ime' => 'Marija M.',   'zv' => 5, 'naslov' => 'Nosim ih svaki dan',             'tekst' => 'Nosim ih svaki dan. Volim osjećaj stabilnosti i ravnoteže na skliskim površinama. Toliko mi se sviđaju da jedan par nosim na poslu, a drugi obujem čim dođem kući. Kakva razlika u ravnoteži i držanju! Preporučila sam ih prijateljima i obitelji ❤️' ),
  array( 'ime' => 'Mirjana B.',  'zv' => 4, 'naslov' => 'Odličan stil i kvaliteta',       'tekst' => 'Jako mi se sviđaju stil i kvaliteta, ali naručila sam broj manji. Srećom, veličinu mogu zamijeniti.' ),
  array( 'ime' => 'Ljiljana W.', 'zv' => 4, 'naslov' => 'Naručite broj veći',             'tekst' => 'Malo su manje, naručite broj veći. Vrlo dobro izrađene.' ),
);

$nskb_n = 0; // števec sekcij za izmenična ozadja
$nskb_cls = function() use ( &$nskb_n ) { $nskb_n++; return ( $nskb_n % 2 ) ? ' nskb-tint' : ''; };
$nskb_side = 0; // izmenične strani slika/besedilo
$nskb_rev = function() use ( &$nskb_side ) { $nskb_side++; return ( $nskb_side % 2 ) ? '' : ' nskb-row2--rev'; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">

<!-- 1) ČETIRI PREDNOSTI — ikone (Thin Soles / Natural Comfort / Wide Toe Box / Flexible) -->
<section class="nskb-sec<?php echo $nskb_cls(); ?>">
  <div class="nskb-wrap">
    <p class="nskb-kicker nskb-c">Barefoot udobnost</p>
    <h2 class="nskb-h2 nskb-c">Zimske čizme u kojima stopala <em>slobodno dišu</em></h2>
    <ul class="nskb-feat4">
      <?php foreach ( $nskb_feat as $f ) : ?>
      <li><div class="nskb-feat4__ico"><?php echo $nskb_img( $f[0], $f[1] ); ?></div><h3><?php echo esc_html( $f[1] ); ?></h3><p><?php echo esc_html( $f[2] ); ?></p></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<!-- 2) KUPCI VOLE NAŠE ČIZME — fotografije kupaca (Customers love our shoes!) -->
<section class="nskb-sec<?php echo $nskb_cls(); ?>">
  <div class="nskb-wrap">
    <p class="nskb-kicker nskb-c">Iskustva kupaca</p>
    <h2 class="nskb-h2 nskb-c">Kupci <em>vole</em> naše čizme!</h2>
    <ul class="nskb-photos">
      <?php foreach ( $nskb_kupci as $i => $k ) : ?>
      <li><?php echo $nskb_img( $k, 'Kupac s NORIKS SnugBoot čizmama ' . ( $i + 1 ) ); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<!-- 3) RECITE ZBOGOM NEUDOBNIM ZIMSKIM CIPELAMA (Say goodbye to uncomfortable winter shoes…) -->
<section class="nskb-sec<?php echo $nskb_cls(); ?>">
  <div class="nskb-wrap">
    <div class="nskb-row2<?php echo $nskb_rev(); ?>">
      <div class="nskb-media nskb-media--sq"><?php echo $nskb_img( 'nskb-s1-usporedba.webp', 'Obične tenisice u usporedbi s NORIKS SnugBoot čizmama' ); ?></div>
      <div class="nskb-copy">
        <p class="nskb-kicker">Zbogom, bolna stopala</p>
        <h2 class="nskb-h3">Recite zbogom neudobnim zimskim cipelama i dobrodošlicu <em>stopalima bez boli</em></h2>
        <p>Obične zimske cipele stežu stopala i već nakon nekoliko sati izazivaju jaku bol.</p>
        <p><strong>NORIKS SnugBoot su drugačije.</strong></p>
        <p>Naš <strong>širok prostor za prste</strong> omogućuje prstima da se prirodno kreću, a <strong>mekan, fleksibilan potplat</strong> prilagođava se obliku vašeg stopala. <strong>Udobna krznena podstava</strong> grije, a <strong>dizajn prema ortopedskim načelima</strong> osigurava pravilan hod.</p>
        <p class="nskb-big">Prestanite se zadovoljavati krutim, bolnim zimskim cipelama. Osjetite udobnost koju vaša stopala zaslužuju.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) ZAŠTO VAŠA STOPALA OVE ZIME ZASLUŽUJU VIŠE (Why your feet deserve better this winter) -->
<section class="nskb-sec<?php echo $nskb_cls(); ?>">
  <div class="nskb-wrap">
    <div class="nskb-row2<?php echo $nskb_rev(); ?>">
      <div class="nskb-media nskb-media--sq"><?php echo $nskb_img( 'nskb-s2-prsti.webp', 'Prsti u običnim cipelama i u NORIKS SnugBoot čizmama' ); ?></div>
      <div class="nskb-copy">
        <p class="nskb-kicker">Sloboda za prste</p>
        <h2 class="nskb-h3">Zašto vaša stopala ove zime <em>zaslužuju više</em></h2>
        <p>Obične cipele stišću prste, što s vremenom uzrokuje bol i deformacije. Kruti, neudobni potplat tjera stopala u neprirodne položaje.</p>
        <p><strong>NORIKS vašim stopalima daje slobodu koja im treba.</strong></p>
        <p>Širok prednji dio omogućuje prstima da se prirodno rašire, a topli unutarnji uložak grije bez kompromisa u udobnosti.</p>
        <p class="nskb-big">Prestanite stiskati stopala. Odaberite obuću osmišljenu prema tome kako vaša stopala stvarno funkcioniraju.</p>
      </div>
    </div>
  </div>
</section>

<!-- 5) OSMIŠLJENE PREMA ORTOPEDSKIM NAČELIMA (Orthopedist's Recommendation — trditev omiljena) -->
<section class="nskb-sec<?php echo $nskb_cls(); ?>">
  <div class="nskb-wrap">
    <div class="nskb-row2<?php echo $nskb_rev(); ?>">
      <div class="nskb-media nskb-media--wide"><?php echo $nskb_img( 'nskb-s3-ortopedska-nacela.webp', 'Pregled stopala — NORIKS SnugBoot osmišljene prema ortopedskim načelima' ); ?></div>
      <div class="nskb-copy">
        <p class="nskb-kicker">Zdravlje stopala</p>
        <h2 class="nskb-h3">Osmišljene prema <em>ortopedskim načelima</em></h2>
        <p>NORIKS SnugBoot nisu osmišljene samo za boravak na otvorenom, nego i za <strong>optimalnu udobnost i potporu</strong> vašim stopalima.</p>
        <p>Njihov <strong>ergonomski dizajn</strong> pomaže smanjiti naprezanje stopala u šetnjama i svakodnevnom nošenju.</p>
        <p class="nskb-big">Koračajte sigurno — i u zimskim avanturama i za zdravlje svojih stopala.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) OPTIMALNA UDOBNOST – CIJELI DAN (Optimal Comfort – All Day Long) -->
<section class="nskb-sec<?php echo $nskb_cls(); ?>">
  <div class="nskb-wrap">
    <div class="nskb-row2<?php echo $nskb_rev(); ?>">
      <div class="nskb-media nskb-media--sq"><?php echo $nskb_img( 'nskb-s4-udobnost.webp', 'NORIKS SnugBoot — krznena podstava, širok prostor za prste i neklizajući potplat' ); ?></div>
      <div class="nskb-copy">
        <p class="nskb-kicker">Udobnost cijeli dan</p>
        <h2 class="nskb-h3">Optimalna udobnost – <em>cijeli dan</em></h2>
        <ul class="nskb-points">
          <li><span class="nskb-dot" aria-hidden="true">✓</span><span><strong>Topla i udobna krznena podstava</strong> – mekana krznena unutrašnjost grije stopala po svakom vremenu, a pritom im omogućuje da prirodno dišu.</span></li>
          <li><span class="nskb-dot" aria-hidden="true">✓</span><span><strong>Prirodan hod</strong> – barefoot dizajn potiče prirodan način hodanja i jača mišiće stopala i nogu.</span></li>
          <li><span class="nskb-dot" aria-hidden="true">✓</span><span><strong>Podržava cirkulaciju</strong> – fleksibilni potplat pomaže boljoj prokrvljenosti stopala i nogu, pa ste manje umorni tijekom dana.</span></li>
          <li><span class="nskb-dot" aria-hidden="true">✓</span><span><strong>Širok prostor za prste</strong> – dajte prstima slobodu koju zaslužuju. Prostran prednji dio omogućuje im da se prirodno rašire, bez grčenja.</span></li>
          <li><span class="nskb-dot" aria-hidden="true">✓</span><span><strong>Svestrane</strong> – mekan i lagan dizajn s udobnom krznenom podstavom čini NORIKS SnugBoot savršenima za svakodnevno zimsko nošenje, u zatvorenom i na otvorenom.</span></li>
        </ul>
        <p class="nskb-big">Pravo na povrat u roku od 30 dana — isprobajte ih bez brige.</p>
      </div>
    </div>
  </div>
</section>

<!-- 7) RECENZIJE — 4,9 / 5 (Loox), število po NORIKS (1081) + 4 mnenja -->
<section class="nskb-sec<?php echo $nskb_cls(); ?>">
  <div class="nskb-wrap">
    <p class="nskb-kicker nskb-c">Recenzije kupaca</p>
    <h2 class="nskb-h2 nskb-c">Što kažu <em>naši kupci</em></h2>
    <div class="nskb-score">
      <span class="nskb-score__num">4,9 / 5</span>
      <?php echo $nskb_stars( 5 ); ?>
      <span class="nskb-score__txt">Na temelju 1081 recenzije · Tisuće zadovoljnih kupaca</span>
    </div>
    <div class="nskb-reviews">
      <?php foreach ( $nskb_reviews as $r ) : ?>
      <article class="nskb-card">
        <div class="nskb-card__body">
          <?php echo $nskb_stars( $r['zv'] ); ?>
          <p class="nskb-card__title"><?php echo esc_html( $r['naslov'] ); ?></p>
          <p class="nskb-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nskb-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nskb-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-leatherboots.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f). */
.nskb-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nskb-sec * { box-sizing: border-box; }
.nskb-tint { background: #f7f2ec; }
.nskb-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nskb-c { text-align: center; }
.nskb-sec h2, .nskb-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nskb-kicker, .nskb-copy p.nskb-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nskb-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #231d19; }
.nskb-h2 em, .nskb-h3 em { font-style: italic; color: #a9683f; }
.nskb-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.nskb-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nskb-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nskb-row2--rev .nskb-media { order: 2; }
.nskb-media img { object-fit: cover; border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); max-width: 560px; margin: 0 auto; }
.nskb-media--sq img { aspect-ratio: 1 / 1; max-width: 540px; }
.nskb-media--wide img { aspect-ratio: 940 / 670; }
.nskb-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.nskb-copy p strong { color: #231d19; font-weight: 600; }
.nskb-copy p.nskb-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.nskb-points { list-style: none; margin: 0 0 16px; padding: 0; }
.nskb-points li { font-size: 16px; line-height: 1.6; color: #4f443d; margin: 0 0 12px; display: flex; gap: 12px; align-items: flex-start; }
.nskb-points li strong { color: #231d19; font-weight: 600; }
.nskb-dot { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; margin-top: 2px; display: inline-block; }

/* 1) stiri kartice z ikonami */
.nskb-feat4 { list-style: none; margin: 28px 0 0; padding: 0; display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 20px; }
.nskb-feat4 li { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; text-align: center; padding: 24px 18px 22px;
  box-shadow: 0 2px 4px rgba(40,25,15,.04), 0 10px 26px rgba(40,25,15,.07); }
.nskb-feat4__ico img { width: 92px; height: 92px; margin: 0 auto; }
.nskb-feat4 h3 { font-size: 14px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; color: #a9683f; margin: 14px 0 8px; line-height: 1.35; }
.nskb-feat4 p { font-size: 15px; line-height: 1.6; color: #4f443d; margin: 0; }

/* 2) fotografije kupcev (3 na vrsto) */
.nskb-photos { list-style: none; margin: 26px auto 0; padding: 0; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 14px; max-width: 980px; }
.nskb-photos li { border-radius: 10px; overflow: hidden; background: #fff; border: 1px solid #ecdfd3;
  box-shadow: 0 2px 4px rgba(40,25,15,.04), 0 10px 26px rgba(40,25,15,.07); }
.nskb-photos li img { aspect-ratio: 3 / 4; object-fit: cover; }

/* 7) recenzije */
.nskb-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nskb-stars__off { color: #e6dbd2; }
.nskb-score { display: flex; flex-direction: column; align-items: center; gap: 6px; text-align: center; margin: 4px auto 28px; }
.nskb-score__num { font-size: 34px; font-weight: 700; color: #231d19; line-height: 1.1; }
.nskb-score .nskb-stars { font-size: 22px; }
.nskb-score__txt { font-size: 14px; color: #6b625a; }
.nskb-reviews { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: start; }
.nskb-card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.nskb-sec:not(.nskb-tint) .nskb-card { background: #fdfaf7; }
.nskb-card__body { padding: 16px; }
.nskb-card__title { font-size: 15.5px; font-weight: 700; color: #231d19; margin: 8px 0 0; line-height: 1.35; }
.nskb-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 8px 0 10px; font-style: italic; }
.nskb-card__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; }
.nskb-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nskb-row2 { gap: 32px; }
  .nskb-feat4, .nskb-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nskb-sec { padding: 42px 0; }
  .nskb-wrap { padding: 0 16px; }
  .nskb-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nskb-row2--rev .nskb-media { order: 0; }
  .nskb-photos { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px; }
  .nskb-feat4 { gap: 12px; }
  .nskb-feat4 li { padding: 18px 12px; }
  .nskb-feat4__ico img { width: 72px; height: 72px; }
  .nskb-reviews { grid-template-columns: 1fr; gap: 12px; }
  .nskb-card__body { padding: 12px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-snugboot .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nskb-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
