<?php
/**
 * product-bottom: NORIKS SleepSet — zenska pamucna pidzama: majica dugih rukava + kratke hlacice (orto-sleepset).
 * Original: doreandrose.com/products/long-sleeve-short-sleep-set (»Jersey Sleep Set«, Nº 69 Cœur Caché) — vsebina in vrstni red
 * 1:1 z originalom, oblika po NORIKS stilu (predloga why-wafflelongsleeve.php / why-hands.php), poudarek rdeca srca
 * po uzorku originala (#a8323e):
 *   1) opis izdelka (»An effortless cotton PJ set you'll want to live in.« + 1. odstavek)   -> Opis: slika ob besedilu
 *      (»Valentine's Special« izpusceno – sezonska akcija)
 *   2) podnaslov originala (»Better than pajamas. Comfy enough for bed, cute enough to lounge in.«) + 2. odstavek opisa
 *      + video iz galerije originala (brez govora in napisov -> utisan)                     -> video ob besedilu
 *   3) zavihek »Details« (model 173 cm nosi S, Fabric 92 % pamuk / 8 % elastan) + »Unsure of your size? Go one size up.«
 *      -> Detalji i velicina: slika ob besedilu + gumb tablice velicin
 *   4) zavihka »Care guide« + »Shipping & Returns« (dostava 7,95 EUR / od 70 EUR, 30-day trial, povrat kot dobropis)
 *      -> Njega i dostava: slika ob besedilu, dostava in vracilo po NORIKS pogojih (30 dana, besplatna dostava iznad 70 €)
 * Izpusceno: »Lucy and 500,000+ others purchased«, »Almost sold out«, »Mix & Match« pasica (popust 2 kosa -10 % / 3+ -20 %
 * je prenesen v ponudbe 2x / 3x kom), »Add any Cotton Silhouette item & save«, »You'll also love«, Trustpilot pripomocka,
 * »More in this collection«, »Other collections«, »PJs you want to be seen in«, »Bestsellers«, noga trgovine.
 * FAQ (»From curious to confident«, 4 vprasanja) je v reviews.php ($sleepset_faq), mnenja v auto_reviews/HR_sleepset.php,
 * opis + tablica + nega v meta.php, modal velikosti v size-chart-sleepset.php. Slike: img/sleepset/ (nsst-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nsst      = get_template_directory_uri() . '/img/sleepset/';
$nsst_path = get_template_directory() . '/img/sleepset/';
$nsst_img  = function( $file, $alt, $cls = '' ) use ( $nsst, $nsst_path ) {
  if ( ! $file || ! file_exists( $nsst_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nsst . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};

/* 3) detalji (zavihek Details) */
$nsst_detalji = array(
  array( 'Materijal', '92 % pamuk, 8 % elastan – mekana, prirodno prozračna mješavina s blagom rastezljivošću' ),
  array( 'Osjećaj na koži', 'glatka na dodir, lagana poput druge kože' ),
  array( 'Kroj', 'opušten – majica dugih rukava i kratke hlačice koji prirodno padaju niz tijelo' ),
  array( 'Završetak', 'nježni rubovi s volančićima na rukavima, rubu majice i hlačicama' ),
  array( 'Veličine', 'XS – XL, u 8 boja i uzoraka' ),
);

/* 4) njega (zavihek Care guide) */
$nsst_njega = array(
  'Perite na nježnom programu na najviše 30 °C',
  'Perite naopako i sa sličnim bojama',
  'Ne sušite u sušilici, ne izbjeljujte i ne čistite kemijski',
  'Sušite vješanjem, a po potrebi glačajte na srednjoj temperaturi',
);

$nsst_n = 0; // števec sekcij za izmenična ozadja
$nsst_cls = function() use ( &$nsst_n ) { $nsst_n++; return ( $nsst_n % 2 ) ? ' nsst-tint' : ''; };
?>

<!-- 1) OPIS (»An effortless cotton PJ set you'll want to live in.«) — slika ob besedilu -->
<section class="nsst-sec<?php echo $nsst_cls(); ?>">
  <div class="nsst-wrap">
    <div class="nsst-row2">
      <div class="nsst-media"><?php echo $nsst_img( 'nsst-s1-opis.webp', 'NORIKS SleepSet pamučna pidžama dugih rukava s kratkim hlačicama i uzorkom srca' ); ?></div>
      <div class="nsst-copy">
        <p class="nsst-kicker">Opis proizvoda</p>
        <h2 class="nsst-h2">Pamučna pidžama u kojoj ćete <em>poželjeti živjeti</em></h2>
        <p>Osmišljena u <strong>opuštenom kroju s dugim rukavima i kratkim hlačicama</strong>, NORIKS SleepSet izrađen je od <strong>laganog pamuka</strong> koji se na koži osjeća kao druga koža.</p>
        <p>Mekan, prozračan i jednostavan za nošenje – prirodno pada niz tijelo za <strong>udobnost danju i noću</strong>. Nježni rubovi s <strong>volančićima</strong> daju mu suptilan, ženstven završetak, a ne oduzimaju ništa od njegove jednostavnosti.</p>
        <p class="nsst-big">Mekan. Prozračan. Nježno ženstven.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) BOLJA OD PIDŽAME (podnaslov originala + 2. odstavek opisa) — video ob besedilu -->
<section class="nsst-sec<?php echo $nsst_cls(); ?>">
  <div class="nsst-wrap">
    <div class="nsst-row2 nsst-row2--rev">
      <div class="nsst-media">
        <video class="nsst-video" src="<?php echo esc_url( $nsst . 'nsst-video-komplet.mp4' ); ?>" poster="<?php echo esc_url( $nsst . 'nsst-video-poster.webp' ); ?>" muted autoplay loop playsinline preload="metadata"></video>
      </div>
      <div class="nsst-copy">
        <p class="nsst-kicker">Bolja od pidžame</p>
        <h2 class="nsst-h2">Dovoljno udobna za krevet, <em>dovoljno slatka za opuštanje</em></h2>
        <p>Stvorena za <strong>spora jutra, rane večeri i sve između</strong>.</p>
        <p>Bezvremenski pogled na udobnost – <strong>nenametljiva, laskava i prekrasno jednostavna</strong>.</p>
        <p class="nsst-big">Udobnost danju i noću.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) DETALJI I VELIČINA (zavihek »Details« + »Unsure of your size? Go one size up.«) — slika ob besedilu -->
<section class="nsst-sec<?php echo $nsst_cls(); ?>">
  <div class="nsst-wrap">
    <div class="nsst-row2">
      <div class="nsst-media"><?php echo $nsst_img( 'nsst-s3-kroj.webp', 'Opušten kroj NORIKS SleepSet – modelica visoka 173 cm nosi veličinu S' ); ?></div>
      <div class="nsst-copy">
        <p class="nsst-kicker">Detalji i veličina</p>
        <h2 class="nsst-h2">Mekana mješavina pamuka <em>s blagom rastezljivošću</em></h2>
        <ul class="nsst-check">
          <?php foreach ( $nsst_detalji as $d ) : ?>
          <li><strong><?php echo esc_html( $d[0] ); ?>:</strong> <?php echo esc_html( $d[1] ); ?></li>
          <?php endforeach; ?>
        </ul>
        <p>Modelica je visoka <strong>173 cm</strong> i nosi veličinu <strong>S</strong>.</p>
        <p class="nsst-big">Niste sigurni u veličinu? Uzmite jednu veličinu veću.</p>
        <a class="nsst-btn js-open-size-chart" href="#">Tablica veličina</a>
      </div>
    </div>
  </div>
</section>

<!-- 4) NJEGA I DOSTAVA (zavihka »Care guide« + »Shipping & Returns« po NORIKS pogojih) — slika ob besedilu -->
<section class="nsst-sec<?php echo $nsst_cls(); ?>">
  <div class="nsst-wrap">
    <div class="nsst-row2 nsst-row2--rev">
      <div class="nsst-media"><?php echo $nsst_img( 'nsst-s4-njega.webp', 'Volančić na rukavu NORIKS SleepSet pidžame s uzorkom srca izbliza' ); ?></div>
      <div class="nsst-copy">
        <p class="nsst-kicker">Njega i dostava</p>
        <h2 class="nsst-h2">Jednostavna njega, <em>dugotrajna mekoća</em></h2>
        <p class="nsst-sub">Upute za pranje</p>
        <ul class="nsst-check">
          <?php foreach ( $nsst_njega as $nj ) : ?>
          <li><?php echo esc_html( $nj ); ?></li>
          <?php endforeach; ?>
        </ul>
        <p class="nsst-sub">Dostava i povrat</p>
        <p><strong>Besplatna dostava za narudžbe iznad 70 €</strong> i <strong>pravo na povrat u roku od 30 dana</strong> – ako vam veličina ne odgovara, pomoći ćemo vam sa zamjenom.</p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-wafflelongsleeve.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika/video ob besedilu,
   izmenjujoča ozadja in strani. Paleta po rdečih srcih uzorka originala: poudarek #a8323e, temno #2a1a1d, svetlo #fbf0f1. */
.nsst-sec { padding: 60px 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #2a1a1d; background: #fff; }
.nsst-sec * { box-sizing: border-box; }
.nsst-tint { background: #fbf0f1; }
.nsst-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nsst-sec h2, .nsst-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nsst-kicker, .nsst-copy p.nsst-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #a8323e; margin: 0 0 10px; }
.nsst-h2 { font-weight: 800; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #2a1a1d; }
.nsst-h2 em { font-style: italic; color: #a8323e; }
.nsst-sec img { display: block; width: 100%; height: auto; }

/* slika/video ob besedilu */
.nsst-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nsst-row2--rev > :first-child { order: 2; }
.nsst-media > img, .nsst-media > video { display: block; width: 100%; border-radius: 10px; box-shadow: 0 2px 4px rgba(60,20,28,.05), 0 14px 40px rgba(60,20,28,.10); max-width: 520px; margin: 0 auto; aspect-ratio: 3 / 4; object-fit: cover; background: #f3f1f1; }
.nsst-media > video { max-width: 440px; aspect-ratio: 2 / 3; }
.nsst-copy p { font-size: 16px; line-height: 1.7; color: #55444a; margin: 0 0 14px; }
.nsst-copy p strong { color: #2a1a1d; font-weight: 700; }
.nsst-sec p.nsst-big { font-size: 19px; font-weight: 800; color: #2a1a1d; line-height: 1.45; margin-top: 6px; }
.nsst-copy p.nsst-sub { font-size: 15px; font-weight: 800; color: #2a1a1d; margin: 8px 0 6px; text-transform: uppercase; letter-spacing: .06em; }
.nsst-btn { display: inline-block; margin-top: 4px; padding: 13px 28px; border-radius: 8px; background: #a8323e; color: #fff !important; font-weight: 700; font-size: 15.5px; text-decoration: none !important; box-shadow: 0 6px 18px rgba(168,50,62,.25); }
.nsst-btn:hover { background: #8e2833; }

/* seznam s kljukicami */
.nsst-check { list-style: none; padding: 0; margin: 4px 0 18px; display: flex; flex-direction: column; gap: 10px; }
.nsst-check li { position: relative; padding-left: 30px; font-size: 15.5px; line-height: 1.55; color: #55444a; margin: 0; }
.nsst-check li strong { color: #2a1a1d; }
.nsst-check li::before { content: "\2713"; position: absolute; left: 0; top: 1px; width: 21px; height: 21px; border-radius: 50%;
  background: #a8323e; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }

@media (max-width: 989px) {
  .nsst-row2 { gap: 32px; }
}
@media (max-width: 749px) {
  .nsst-sec { padding: 42px 0; }
  .nsst-wrap { padding: 0 16px; }
  .nsst-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nsst-row2--rev > :first-child { order: 0; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-sleepset .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nsst-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
