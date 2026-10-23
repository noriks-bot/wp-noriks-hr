<?php
/**
 * product-bottom: NORIKS CloudClogs — 3D klompe mekane kao oblak, unisex (orto-cloudclogs).
 * POZOR: ni povezano z NORIKS Cloud (jastuk za koljena, why-cloud.php) ni NORIKS StepCloud (ulosci, why-stepcloud.php)
 * — lasten tip 'cloudclogs', lastna predpona razredov nccl- in mapa slik img/cloudclogs/.
 * Original: varaletti.com/products/3d-performance-cloud-clogs (»3D Performance Cloud Clogs«)
 * — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu (predloga why-snugboot.php / why-hands.php),
 * modra paleta (#1f568e):
 *   1) »Durable Yet Comfortable« (video, govor -> hrvaski napisi)            -> video ob besedilu
 *   2) »Perfect For This Summer« (video brez govora, samo glasba)             -> video ob besedilu
 *   3) »Viral On Social Media« (drsnik s 5 videi; 2 z govorom -> HR napisi)   -> besedilo + 5 utisanih videov
 *   4) »Try It Risk Free Today« (30 Day Money-back -> NORIKS 30 dana)         -> pecat ob besedilu
 *   5) »Customers Love It« (3 mnenja s fotografijami; Crocs -> obicne klompe) -> 3 kartice s fotografijami
 * Izpusceno: glava, noga, pojavno okno, glasbeni predvajalnik, »Cloud Comfort Sale« blok ponud z darili (vlozki, carape)
 * in znackami (Most Popular / Best Value), ikone »Love It Or Return It / Fast Shipping« (standardni NORIKS bloki).
 * Slike in videi: img/cloudclogs/ (nccl-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nccl      = get_template_directory_uri() . '/img/cloudclogs/';
$nccl_path = get_template_directory() . '/img/cloudclogs/';
$nccl_img  = function( $file, $alt ) use ( $nccl, $nccl_path ) {
  if ( ! $file || ! file_exists( $nccl_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nccl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nccl_video = function( $file, $label ) use ( $nccl, $nccl_path ) {
  if ( ! $file || ! file_exists( $nccl_path . $file ) ) { return ''; }
  $poster = preg_replace( '/\.mp4$/', '.webp', $file );
  return '<video src="' . esc_url( $nccl . $file ) . '"' . ( file_exists( $nccl_path . $poster ) ? ' poster="' . esc_url( $nccl . $poster ) . '"' : '' )
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>';
};
$nccl_stars = function( $n ) {
  return '<span class="nccl-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">' . str_repeat( '★', (int) $n ) . '<span class="nccl-stars__off">' . str_repeat( '★', 5 - (int) $n ) . '</span></span>';
};

/* 3) videi z druzbenih omrezij (vrstni red kot v drsniku originala) */
$nccl_vids = array(
  array( 'nccl-d1-auto-hr.mp4',   'Na izlasku iz auta' ),
  array( 'nccl-d2-detalji.mp4',   'Detalji izbliza' ),
  array( 'nccl-d3-stil.mp4',      'Stil za svaki dan' ),
  array( 'nccl-d4-svaki-dan.mp4', 'Za opuštene dane' ),
  array( 'nccl-d5-vozac-hr.mp4',  'Pogled izbliza' ),
);

/* 5) mnenja z originala (prevedena; imena lokalizirana, znamka Crocs -> obicne klompe) */
$nccl_reviews = array(
  array( 'img' => 'nccl-k1-josip.webp',  'ime' => 'Josip G.',  'naslov' => 'Kao hodanje po oblacima', 'tekst' => 'Kupio sam ih očekujući pristojnu udobnost. A stvarno se osjećaju kao hodanje po oblacima — uhvatio sam se da ih nosim po kući iako imam i druge cipele. Debeli potplati čine pravu razliku. Vrijede puno više nego što sam platio.' ),
  array( 'img' => 'nccl-k2-lidija.webp', 'ime' => 'Lidija S.', 'naslov' => 'Cijela obitelj ih voli',  'tekst' => 'Kupila sam par za tatu, koji se stalno žali na stopala. Nosi ih svaki dan otkad su stigle — na bazen, u obaveze, po kući. Kaže da su to najudobnije cipele koje je ikada imao. Već sam naručila drugi par za supruga.' ),
  array( 'img' => 'nccl-k3-jelena.webp', 'ime' => 'Jelena K.', 'naslov' => 'Puno bolje od običnih klompi', 'tekst' => 'Godinama sam na poslu nosila obične klompe. Ove su puno udobnije, puno izdržljivije, a protuklizni potplat stvarno bolje drži. Uz to se stopala u njima ne znoje. Više se ne vraćam starima.' ),
);

$nccl_n = 0; // števec sekcij za izmenična ozadja
$nccl_cls = function() use ( &$nccl_n ) { $nccl_n++; return ( $nccl_n % 2 ) ? ' nccl-tint' : ''; };
$nccl_side = 0; // izmenične strani video/besedilo
$nccl_rev = function() use ( &$nccl_side ) { $nccl_side++; return ( $nccl_side % 2 ) ? '' : ' nccl-row2--rev'; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">

<!-- 1) IZDRŽLJIVE, A UDOBNE (Durable Yet Comfortable) — utišan video s hrvatskim napisima ob besedilu -->
<section class="nccl-sec<?php echo $nccl_cls(); ?>">
  <div class="nccl-wrap">
    <div class="nccl-row2<?php echo $nccl_rev(); ?>">
      <div class="nccl-media nccl-media--sq"><?php echo $nccl_video( 'nccl-v1-izdrzljive-hr.mp4', 'NORIKS CloudClogs klompe izbliza — potplat i remen' ); ?></div>
      <div class="nccl-copy">
        <p class="nccl-kicker">Cijeli dan na nogama</p>
        <h2 class="nccl-h3">Izdržljive, a <em>udobne</em></h2>
        <p>Napravljene za ljude koji su <strong>cijeli dan na nogama</strong>.</p>
        <p>Izdržljive, <strong>protuklizne</strong> i <strong>prozračne</strong> — a na nogama se osjećaju mekano, kao da hodate po oblacima.</p>
        <p class="nccl-big">Izdržljive. Protuklizne. Prozračne.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) SAVRŠENE ZA OVO LJETO (Perfect For This Summer) — utišan video ob besedilu -->
<section class="nccl-sec<?php echo $nccl_cls(); ?>">
  <div class="nccl-wrap">
    <div class="nccl-row2<?php echo $nccl_rev(); ?>">
      <div class="nccl-media nccl-media--sq"><?php echo $nccl_video( 'nccl-v2-ljeto.mp4', 'NORIKS CloudClogs klompe u crnoj i bijeloj boji' ); ?></div>
      <div class="nccl-copy">
        <p class="nccl-kicker">Za svaki dan</p>
        <h2 class="nccl-h3">Savršene za <em>ovo ljeto</em></h2>
        <p>Od jutarnjih obaveza do druženja u dvorištu — nosite ih <strong>kao papuče ili kao natikače</strong>.</p>
        <p><strong>Vodootporne</strong>, <strong>prozračne</strong> i stvorene za ljeto.</p>
        <p class="nccl-big">Kao papuče ili kao natikače — kako vam odgovara.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) VIRALNE NA DRUŠTVENIM MREŽAMA (Viral On Social Media) — besedilo + 5 utišanih videov -->
<section class="nccl-sec<?php echo $nccl_cls(); ?>">
  <div class="nccl-wrap">
    <div class="nccl-row2 nccl-row2--vids">
      <div class="nccl-copy">
        <p class="nccl-kicker">S društvenih mreža</p>
        <h2 class="nccl-h3">Viralne na <em>društvenim mrežama</em></h2>
        <p>Pogledajte NORIKS CloudClogs izbliza — u autu, kod kuće i na putu.</p>
        <ul class="nccl-vlist">
          <?php foreach ( $nccl_vids as $v ) : ?><li><?php echo esc_html( $v[1] ); ?></li><?php endforeach; ?>
        </ul>
      </div>
      <div class="nccl-vids">
        <?php foreach ( $nccl_vids as $v ) : $html = $nccl_video( $v[0], $v[1] ); if ( ! $html ) { continue; } ?>
        <figure class="nccl-vids__item"><?php echo $html; ?><figcaption><?php echo esc_html( $v[1] ); ?></figcaption></figure>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- 4) ISPROBAJTE BEZ RIZIKA (Try It Risk Free Today — 30 Day Money-back -> NORIKS pogoji) — pečat ob besedilu -->
<section class="nccl-sec<?php echo $nccl_cls(); ?>">
  <div class="nccl-wrap">
    <div class="nccl-row2<?php echo $nccl_rev(); ?>">
      <div class="nccl-media nccl-media--seal">
        <div class="nccl-seal" role="img" aria-label="Pravo na povrat u roku od 30 dana">
          <span class="nccl-seal__top">Pravo na povrat</span>
          <span class="nccl-seal__num">30</span>
          <span class="nccl-seal__days">dana</span>
          <span class="nccl-seal__bot">bez brige</span>
        </div>
      </div>
      <div class="nccl-copy">
        <p class="nccl-kicker">Bez rizika</p>
        <h2 class="nccl-h3">Isprobajte ih <em>bez rizika</em> već danas</h2>
        <p>Uz svaki par NORIKS CloudClogs imate <strong>pravo na povrat u roku od 30 dana</strong>.</p>
        <p>Ako vam se ne svide, nudimo <strong>povrat novca ili zamjenu proizvoda</strong> — bezbrižna kupovina.</p>
        <p class="nccl-big">Besplatna dostava za narudžbe iznad 70 €.</p>
        <a class="nccl-btn" href="#bundle-selector">Uzmite svoje klompe</a>
      </div>
    </div>
  </div>
</section>

<!-- 5) KUPCI IH OBOŽAVAJU (Customers Love It) — 3 mnenja s fotografijami -->
<section class="nccl-sec<?php echo $nccl_cls(); ?>">
  <div class="nccl-wrap">
    <p class="nccl-kicker nccl-c">Iskustva kupaca</p>
    <h2 class="nccl-h2 nccl-c">Kupci ih <em>obožavaju</em></h2>
    <div class="nccl-reviews">
      <?php foreach ( $nccl_reviews as $r ) : ?>
      <article class="nccl-card">
        <div class="nccl-card__img"><?php echo $nccl_img( $r['img'], 'Kupac s NORIKS CloudClogs klompama — ' . $r['ime'] ); ?></div>
        <div class="nccl-card__body">
          <?php echo $nccl_stars( 5 ); ?>
          <p class="nccl-card__title"><?php echo esc_html( $r['naslov'] ); ?></p>
          <p class="nccl-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nccl-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nccl-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-snugboot.php / why-hands.php): oznaka + naslov z ležečim poudarkom, video ob
   besedilu, izmenjujoča ozadja in strani. Modra paleta NORIKS CloudClogs (#1f568e). */
.nccl-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #1b2733; background: #fff; }
.nccl-sec * { box-sizing: border-box; }
.nccl-tint { background: #f2f6fb; }
.nccl-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nccl-c { text-align: center; }
.nccl-sec h2, .nccl-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nccl-kicker, .nccl-copy p.nccl-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #1f568e; margin: 0 0 10px; }
.nccl-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #1b2733; }
.nccl-h2 em, .nccl-h3 em { font-style: italic; color: #1f568e; }
.nccl-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #1b2733; }
.nccl-sec img { display: block; width: 100%; height: auto; }

/* video ob besedilu */
.nccl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nccl-row2--rev .nccl-media { order: 2; }
.nccl-media video { display: block; width: 100%; max-width: 520px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 10px; background: #1b2733;
  box-shadow: 0 2px 4px rgba(20,40,70,.05), 0 14px 40px rgba(20,40,70,.12); }
.nccl-copy p { font-size: 16px; line-height: 1.7; color: #44515e; margin: 0 0 14px; }
.nccl-copy p strong { color: #1b2733; font-weight: 600; }
.nccl-copy p.nccl-big { font-size: 19px; font-weight: 700; color: #1b2733; line-height: 1.45; margin-top: 6px; }

/* 3) besedilo + 5 videov */
.nccl-row2--vids { grid-template-columns: 1fr 1.7fr; gap: 44px; }
.nccl-vlist { list-style: none; margin: 4px 0 0; padding: 0; }
.nccl-vlist li { font-size: 15.5px; line-height: 1.5; color: #44515e; margin: 0 0 9px; padding-left: 30px; position: relative; }
.nccl-vlist li::before { content: "▶"; position: absolute; left: 0; top: 1px; width: 21px; height: 21px; border-radius: 50%; background: #1f568e; color: #fff; font-size: 9px; line-height: 21px; text-align: center; }
.nccl-vids { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 10px; }
.nccl-vids__item { margin: 0; border-radius: 10px; overflow: hidden; background: #1b2733; position: relative; box-shadow: 0 2px 10px rgba(20,40,70,.14); }
.nccl-vids__item video { display: block; width: 100%; aspect-ratio: 9 / 16; object-fit: cover; }
.nccl-vids__item figcaption { position: absolute; left: 0; right: 0; bottom: 0; padding: 22px 10px 9px; font-size: 12.5px; font-weight: 600; line-height: 1.3; color: #fff; background: linear-gradient(transparent, rgba(0,0,0,.65)); }

/* 4) pečat 30 dana */
.nccl-media--seal { display: flex; justify-content: center; }
.nccl-seal { width: 300px; height: 300px; border-radius: 50%; background: #fff; border: 10px solid #dce8f5; outline: 2px dashed #1f568e; outline-offset: -26px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; box-shadow: 0 14px 40px rgba(20,40,70,.12); color: #1b2733; }
.nccl-seal__top, .nccl-seal__bot { font-size: 14px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; }
.nccl-seal__num { font-size: 96px; font-weight: 800; line-height: .95; color: #1f568e; margin-top: 6px; }
.nccl-seal__days { font-size: 28px; font-weight: 800; text-transform: uppercase; color: #1f568e; letter-spacing: .06em; margin-bottom: 8px; }
.nccl-btn { display: inline-block; margin-top: 6px; padding: 14px 30px; border-radius: 8px; background: #1f568e; color: #fff !important; font-weight: 700; font-size: 16px; text-decoration: none !important; box-shadow: 0 6px 18px rgba(31,86,142,.25); }
.nccl-btn:hover { background: #18466f; }

/* 5) mnenja s fotografijami */
.nccl-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nccl-stars__off { color: #dbe3ec; }
.nccl-reviews { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; align-items: start; margin-top: 26px; }
.nccl-card { background: #fff; border: 1px solid #d6e2ef; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column;
  box-shadow: 0 2px 4px rgba(20,40,70,.04), 0 10px 26px rgba(20,40,70,.07); }
.nccl-card__img img { aspect-ratio: 1 / 1; object-fit: cover; }
.nccl-card__body { padding: 16px; }
.nccl-card__title { font-size: 15.5px; font-weight: 700; color: #1b2733; margin: 8px 0 0; line-height: 1.35; }
.nccl-card__txt { font-size: 14.5px; line-height: 1.6; color: #2f3b47; margin: 8px 0 10px; font-style: italic; }
.nccl-card__name { font-size: 13.5px; font-weight: 600; color: #1b2733; margin: 0; }
.nccl-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nccl-row2 { gap: 32px; }
  .nccl-row2--vids { grid-template-columns: 1fr; }
}
@media (max-width: 749px) {
  .nccl-sec { padding: 42px 0; }
  .nccl-wrap { padding: 0 16px; }
  .nccl-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nccl-row2--rev .nccl-media { order: 0; }
  .nccl-vids { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nccl-seal { width: 240px; height: 240px; }
  .nccl-seal__num { font-size: 76px; }
  .nccl-reviews { grid-template-columns: 1fr; gap: 14px; }
  .nccl-card__body { padding: 12px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-cloudclogs .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nccl-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
