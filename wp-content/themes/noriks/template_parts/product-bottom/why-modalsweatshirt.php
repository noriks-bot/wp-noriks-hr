<?php
/**
 * product-bottom: NORIKS ModalSweatshirt — dukserica od modala s okruglim izrezom (orto-modalsweatshirt).
 * Original: fioboc.com/products/modal-blend-crew-neck-sweatshirt — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-techtee.php / why-hands.php), modri poudarek (#1f568e) po barvi izdelka:
 *   1) "Worth Mentioning Details" (Invisible Design / Figure Flattering / Comfortable Fit / 4-way Stretch For Mobility)
 *        -> Detalji vrijedni spomena (4 vrstice slika/video ob besedilu, izmenicno; animacija GIF -> utisan mp4)
 *   2) "What People Are Saying" (Okendo, 4,9 / 5) -> Što kažu kupci: video iz galerije originala (utisan, angleski napisi
 *        SKIN-FRIENDLY / SWEAT WICKING zakriti in zamenjani s HR, kader z znamko FIOBOC na etiketi izrezan) + 8 mnenj (1081)
 * FAQ originala (3 vprasanja) je v reviews.php ($modalsweatshirt_faq), mnenja v auto_reviews/HR_modalsweatshirt.php,
 * opis/nega/tablica velicin v standardnih harmonikah (meta.php) in modalu (size-chart-modalsweatshirt.php).
 * Izpusceno: glava, pasice (»ANY 3+: 5 % off«), »Shop The Look«, noga. Slike/video: img/modalsweatshirt/ (nms-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nms      = get_template_directory_uri() . '/img/modalsweatshirt/';
$nms_path = get_template_directory() . '/img/modalsweatshirt/';
$nms_img  = function( $file, $alt ) use ( $nms, $nms_path ) {
  if ( ! $file || ! file_exists( $nms_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nms . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nms_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nms-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nms-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) Detalji vrijedni spomena ("Worth Mentioning Details") — 4 kartice originala */
$nms_detalji = array(
  array(
    'img'    => 'nms-d1-nevidljivi-dizajn.webp',
    'alt'    => 'Okrugli izrez bez etiketa koje žuljaju',
    'kicker' => 'Nevidljiv dizajn',
    'h'      => 'Bez etiketa koje <em>svrbe ili bodu</em>',
    'p'      => array( 'Ne skuplja se i nema etiketa koje <strong>svrbe ili bodu</strong>.', 'Tkanina s LENZING™ modalom mekana je i glatka na koži, a prirodna celulozna vlakna pomažu regulirati tjelesnu temperaturu.' ),
    'big'    => 'Ugodna na koži, cijeli dan.',
  ),
  array(
    'img'    => 'nms-d2-isticanje-figure.webp',
    'alt'    => 'Kroj koji naglašava prsa i ruke',
    'kicker' => 'Ističe figuru',
    'h'      => 'Naglašava <em>prsa i ruke</em>',
    'p'      => array( 'Krojena da laska vašoj silueti i <strong>naglašava prsa i ruke</strong>.', 'Glatka, strukturirana silueta spaja svakodnevnu udobnost s dotjeranim izgledom.' ),
    'big'    => 'Uredan, profinjen izgled.',
  ),
  array(
    'img'    => 'nms-d3-udoban-kroj.webp',
    'alt'    => 'Bočni prorezi na donjem rubu dukserice',
    'kicker' => 'Udoban kroj',
    'h'      => 'Bočni prorezi za <em>laskavu siluetu</em>',
    'p'      => array( '<strong>Bočni prorezi na rubu</strong> stvaraju laskavu siluetu koja ističe oblik, bez osjećaja sputanosti.', 'Udoban regularni kroj s prirodnim prostorom u prsima, ramenima i rukama.' ),
    'big'    => 'Udobno, a nikad sputavajuće.',
  ),
  array(
    'video'  => 'nms-d4-rastezljivost.mp4',
    'poster' => 'nms-d4-rastezljivost-poster.webp',
    'alt'    => 'Tkanina se rasteže u četiri smjera',
    'kicker' => 'Rastezljiva u 4 smjera',
    'h'      => 'Rastezljivost u 4 smjera <em>za slobodu pokreta</em>',
    'p'      => array( 'Tkanina se izvrsno <strong>rasteže u četiri smjera</strong> — udobno pristaje i kreće se s vama.', 'Otporna je na pilanje, pa zadržava glatki izgled i nakon mnogo nošenja.' ),
    'big'    => 'Kreće se s vama, kamo god krenuli.',
  ),
);

/* 2) mnenja z originala (Okendo, prevedena) */
$nms_rv = array(
  array( 'ime' => 'Jordan',    'z' => 5, 'img' => 'nms-rv-1.webp', 'naslov' => 'Odlična za slojevito odijevanje', 'tekst' => 'Dovoljno topla za zimu, a dovoljno lagana za jesen. Nosim je ispod jakne za hladnih jutara — nevjerojatno svestrana.' ),
  array( 'ime' => 'Jason',     'z' => 5, 'naslov' => 'Mekana kao maslac',             'tekst' => 'Nevjerojatno mekana čim je izvadite iz pakiranja! Tkanina je poput svile na koži, a sa svakim pranjem postaje još mekša.' ),
  array( 'ime' => 'Daniel',    'z' => 5, 'naslov' => 'Mekana kao oblak',              'tekst' => 'Tkanina s modalom je kao druga koža! Nevjerojatno mekana na rukama i sa svakim pranjem sve mekša. Moja nova omiljena dukserica.' ),
  array( 'ime' => 'Lucas',     'z' => 5, 'naslov' => 'Savršen okrugli izrez',         'tekst' => 'Klasični okrugli izrez laska svakoj građi. Sjedi točno kako treba — ni pretijesno ni preširoko, savršena ravnoteža.' ),
  array( 'ime' => 'Anthony',   'z' => 5, 'naslov' => 'Savršen poklon',                'tekst' => 'Kupio sam jednu partneru i sad ne želi nositi ništa drugo. Savršen udoban poklon za svakoga!' ),
  array( 'ime' => 'Wes S.',    'z' => 5, 'naslov' => 'Izgleda vrhunski!',             'tekst' => 'Izgled je savršen! Opušten, a opet elegantan… i definitivno privlači poglede.' ),
  array( 'ime' => 'Martin G.', 'z' => 5, 'naslov' => 'Izvrsna kvaliteta!',            'tekst' => 'Izvrsna kvaliteta! Kupit ću još jednu — to će mi biti već treća.' ),
  array( 'ime' => 'James D.',  'z' => 4, 'naslov' => 'Dukserica s okruglim izrezom',  'tekst' => 'Sviđa mi se sve osim izreza — volio bih da je malo uži i 2–3 cm viši.' ),
);

$nms_n = 0; // števec sekcij za izmenična ozadja
$nms_cls = function() use ( &$nms_n ) { $nms_n++; return ( $nms_n % 2 ) ? ' nms-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) DETALJI VRIJEDNI SPOMENA ("Worth Mentioning Details") — 4 detalja, slika/video ob besedilu, izmenicno -->
<section class="nms-sec<?php echo $nms_cls(); ?>">
  <div class="nms-wrap">
    <p class="nms-kicker nms-c">Detalji vrijedni spomena</p>
    <h2 class="nms-h2 nms-c">Detalji koji <em>čine razliku</em></h2>
    <div class="nms-rows">
      <?php foreach ( $nms_detalji as $i => $d ) : ?>
      <div class="nms-row2<?php echo ( $i % 2 ) ? ' nms-row2--rev' : ''; ?>">
        <div class="nms-media">
          <?php if ( ! empty( $d['video'] ) && file_exists( $nms_path . $d['video'] ) ) : ?>
          <video class="nms-video nms-video--sq" src="<?php echo esc_url( $nms . $d['video'] ); ?>" poster="<?php echo esc_url( $nms . $d['poster'] ); ?>" muted autoplay loop playsinline preload="metadata" aria-label="<?php echo esc_attr( $d['alt'] ); ?>"></video>
          <?php else : ?>
          <?php echo $nms_img( $d['img'], $d['alt'] ); ?>
          <?php endif; ?>
        </div>
        <div class="nms-copy">
          <p class="nms-kicker"><?php echo esc_html( $d['kicker'] ); ?></p>
          <h3 class="nms-h3"><?php echo wp_kses( $d['h'], array( 'em' => array() ) ); ?></h3>
          <?php foreach ( $d['p'] as $p ) : ?>
          <p><?php echo wp_kses( $p, array( 'strong' => array() ) ); ?></p>
          <?php endforeach; ?>
          <p class="nms-big"><?php echo esc_html( $d['big'] ); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 2) ŠTO KAŽU KUPCI ("What People Are Saying") — video iz galerije + ocjena 4,9 / 5 + mnenja (1081) -->
<section class="nms-sec<?php echo $nms_cls(); ?>">
  <div class="nms-wrap">
    <div class="nms-row2">
      <div class="nms-media">
        <?php if ( file_exists( $nms_path . 'nms-video-hr.mp4' ) ) : ?>
        <video class="nms-video" src="<?php echo esc_url( $nms . 'nms-video-hr.mp4' ); ?>" poster="<?php echo esc_url( $nms . 'nms-video-poster.webp' ); ?>" muted autoplay loop playsinline preload="metadata" aria-label="NORIKS ModalSweatshirt u pokretu: ugodna za kožu, odvodi znoj"></video>
        <?php endif; ?>
      </div>
      <div class="nms-copy">
        <p class="nms-kicker">Recenzije kupaca</p>
        <h2 class="nms-h3">Što <em>kažu kupci</em></h2>
        <div class="nms-score nms-score--left">
          <span class="nms-score__num">4,9 / 5</span>
          <?php echo $nms_stars( 5 ); ?>
          <span class="nms-score__txt">Na temelju 1081 recenzije</span>
        </div>
        <p>Mekana tkanina s modalom, uredan okrugli izrez i rastezljivost u 4 smjera — <strong>ugodna je za kožu i odvodi znoj</strong>, od posla do vikenda.</p>
        <p>Pogledajte što kažu muškarci koji je već nose svaki dan.</p>
        <p class="nms-big">Udobnost koju ćete htjeti nositi svaki dan.</p>
      </div>
    </div>
    <div class="nms-reviews">
      <?php foreach ( $nms_rv as $r ) : ?>
      <article class="nms-card<?php echo empty( $r['img'] ) ? ' nms-card--txt' : ''; ?>">
        <?php if ( ! empty( $r['img'] ) ) : ?>
        <div class="nms-card__img"><?php echo $nms_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div>
        <?php endif; ?>
        <div class="nms-card__body">
          <?php echo $nms_stars( $r['z'] ); ?>
          <h3 class="nms-card__title"><?php echo esc_html( $r['naslov'] ); ?></h3>
          <p class="nms-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nms-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nms-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-techtee.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Modri poudarek po barvi izdelka (#1f568e). */
.nms-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #1c2430; background: #fff; }
.nms-sec * { box-sizing: border-box; }
.nms-tint { background: #f1f5fa; }
.nms-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nms-c { text-align: center; }
.nms-sec h2, .nms-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nms-kicker, .nms-copy p.nms-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #1f568e; margin: 0 0 10px; }
.nms-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #1c2430; }
.nms-h2 em, .nms-h3 em { font-style: italic; color: #1f568e; }
.nms-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #1c2430; }
.nms-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nms-rows { display: grid; gap: 56px; margin-top: 36px; }
.nms-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nms-row2--rev .nms-media { order: 2; }
.nms-media > img, .nms-video { border-radius: 10px; box-shadow: 0 2px 4px rgba(15,30,50,.05), 0 14px 40px rgba(15,30,50,.10); max-width: 520px; margin: 0 auto; }
.nms-media > img { aspect-ratio: 1 / 1; object-fit: cover; }
.nms-video { display: block; width: 100%; aspect-ratio: 3 / 4; object-fit: cover; background: #e3e9f0; }
.nms-video--sq { aspect-ratio: 1 / 1; }
.nms-copy p { font-size: 16px; line-height: 1.7; color: #434d5a; margin: 0 0 14px; }
.nms-copy p strong { color: #1c2430; font-weight: 600; }
.nms-copy p.nms-big { font-size: 19px; font-weight: 700; color: #1c2430; line-height: 1.45; margin-top: 6px; }

/* ocjene */
.nms-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nms-stars__off { color: #dfe5ec; }
.nms-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.nms-score--left { justify-content: flex-start; margin: 4px 0 16px; }
.nms-score__num { font-size: 26px; font-weight: 700; color: #1c2430; }
.nms-score .nms-stars { font-size: 20px; }
.nms-score__txt { font-size: 14.5px; color: #5f6a78; }

/* mnenja */
.nms-reviews { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; align-items: start; margin-top: 44px; }
.nms-card { background: #fff; border: 1px solid #d9e3ee; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.nms-sec:not(.nms-tint) .nms-card { background: #f1f5fa; }
.nms-card__img img { aspect-ratio: 3 / 4; object-fit: cover; }
.nms-card__body { padding: 16px; }
.nms-card__title { font-size: 15px; font-weight: 700; color: #1c2430; margin: 8px 0 6px; line-height: 1.35; }
.nms-card__txt { font-size: 14.5px; line-height: 1.6; color: #2f3845; margin: 0 0 10px; font-style: italic; }
.nms-card__name { font-size: 13.5px; font-weight: 600; color: #1c2430; margin: 0; }
.nms-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nms-row2 { gap: 32px; }
  .nms-reviews { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nms-sec { padding: 42px 0; }
  .nms-wrap { padding: 0 16px; }
  .nms-rows { gap: 40px; margin-top: 24px; }
  .nms-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nms-row2--rev .nms-media { order: 0; }
  .nms-reviews { gap: 12px; margin-top: 28px; }
  .nms-card__body { padding: 12px; }
}
@media (max-width: 420px) {
  .nms-reviews { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-modalsweatshirt .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nms-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
