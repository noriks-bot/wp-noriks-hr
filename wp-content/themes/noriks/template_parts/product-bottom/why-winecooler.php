<?php
/**
 * product-bottom: NORIKS WineCooler — štapić za hlađenje vina s izljevom (orto-winecooler).
 * Original: lindnerco.nl/products/wijnkoeler-geen-lauwe-wijn-meer — vsebina 1:1 z originalom
 * (isti vrstni red, ista besedila, prevedena v hrvascino), oblika po NORIKS stilu (kot why-hands.php):
 *   1) Videi kupaca (3 videa, preprosta mreza)
 *   2) Recite zbogom toplom vinu + 4 prednosti (harmonike originala kot kartice z besedilom)
 *   3) Za ljubitelje vina — slika levo, besedilo desno
 *   4) Odlično 4.7 / 5 — 6 mnenj v preprosti mrezi (brez tekocega traku)
 *   5) Higijena i vrhunska kvaliteta — besedilo levo, slika desno
 * Brez promo pasice, tekocega traku, valovitih razdelilnikov, animacij in dodatkov v nakupni skatli.
 * FAQ originala je v reviews.php ($winecooler_faq), mnenja v auto_reviews/HR_winecooler.php
 * (tja so prestavljeni tudi 3 citati iz okvirja "Poslušajte naše kupce" iz nakupne skatle originala).
 * Slike: img/winecooler/ (logotip konkurenta na skatli zamenjan z NORIKS, napisi prevedeni v hrvascino).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nwc      = get_template_directory_uri() . '/img/winecooler/';
$nwc_path = get_template_directory() . '/img/winecooler/';
$nwc_img  = function( $file, $alt ) use ( $nwc, $nwc_path ) {
  if ( ! file_exists( $nwc_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nwc . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nwc_video = function( $n, $label ) use ( $nwc, $nwc_path ) {
  $file = 'wc-video-' . $n . '.mp4'; $poster = 'wc-video-' . $n . '-poster.webp';
  if ( ! file_exists( $nwc_path . $file ) ) { return ''; }
  return '<div class="nwc-vid"><video src="' . esc_url( $nwc . $file ) . '"'
    . ( file_exists( $nwc_path . $poster ) ? ' poster="' . esc_url( $nwc . $poster ) . '"' : '' )
    . ' controls playsinline preload="none" aria-label="' . esc_attr( $label ) . '"></video></div>';
};

/* 2) prednosti — 1:1 z originala (harmonike) */
$nwc_feat = array(
  array( 'Visoka kvaliteta', 'Izrađen od visokokvalitetnog nehrđajućeg čelika prikladnog za hranu, ovaj proizvod pruža trajnu kvalitetu i pouzdanost za svakodnevnu upotrebu.' ),
  array( 'Trenutni užitak', 'Jednostavan za korištenje, brzo se postavlja i nevjerojatno je praktičan — ovo je lako rješenje za uživanje u vinu bez imalo truda.' ),
  array( 'Savršeno točenje', 'Recite zbogom prolijevanju. Ovaj izljev svaki put osigurava ravnomjerno točenje bez kapanja te čuva i vaše vino i vaš stol besprijekorno čistima.' ),
  array( 'Otključajte puni okus', 'Ugrađeno prozračivanje omogućuje da se arome vina potpuno razviju, čime se poboljšava okus i stvara bogatiji doživljaj vina.' ),
);

/* 4) mnenja — 1:1 z originala (isti vrstni red, ista imena) */
$nwc_testimonials = array(
  array( 'Odlična stvar', 'Odlična stvar, ravnomjerno hladi i toči bez prolijevanja.', 'Emma Molenaar' ),
  array( 'Praktično', 'Praktično je što čep i zatvara; nema kapljica na stolnjaku.', 'Lars van Dam' ),
  array( 'Koristim ga', 'Koristim ga uglavnom za rosé — ostaje svjež do zadnje čaše.', 'Julian Rietveld' ),
  array( 'Hladi bolje', 'Hladi bolje od zasebnih rashladnih uložaka koje sam imala. ✨', 'Nina Mulder' ),
  array( 'Radi brzo', 'Radi brzo; za deset minuta primjetno hladnije.', 'Sara Smits' ),
  array( 'Praktičan', 'Praktičan i čvrst, upravo ono što sam tražio.', 'Jesse de Bruin' ),
);
?>

<!-- 1) VIDEI KUPACA -->
<section class="nwc-sec">
  <div class="nwc-wrap">
    <p class="nwc-kicker nwc-kicker--c">Videi kupaca</p>
    <div class="nwc-vids">
      <?php echo $nwc_video( 1, 'Video kupca 1 — NORIKS WineCooler' ); ?>
      <?php echo $nwc_video( 2, 'Video kupca 2 — NORIKS WineCooler' ); ?>
      <?php echo $nwc_video( 3, 'Video kupca 3 — NORIKS WineCooler' ); ?>
    </div>
  </div>
</section>

<!-- 2) RECITE ZBOGOM TOPLOM VINU + prednosti -->
<section class="nwc-sec nwc-tint">
  <div class="nwc-wrap">
    <h2 class="nwc-h2 nwc-h2--c">Recite zbogom <em>toplom vinu</em></h2>
    <p class="nwc-sub">Sada možete svaki put uživati u savršeno ohlađenom vinu, bez brige o vrućini!</p>
    <div class="nwc-feat">
      <?php foreach ( $nwc_feat as $f ) : ?>
      <article class="nwc-feat__card">
        <h3><?php echo esc_html( $f[0] ); ?></h3>
        <p><?php echo esc_html( $f[1] ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3) ZA LJUBITELJE VINA — slika lijevo -->
<section class="nwc-sec">
  <div class="nwc-wrap nwc-row2">
    <div class="nwc-media"><?php echo $nwc_img( 'wc-ljubitelji-vina.webp', 'Točenje ohlađenog vina s NORIKS WineCooler izljevom na plaži' ); ?></div>
    <div class="nwc-copy">
      <p class="nwc-kicker">Hlađenje</p>
      <h2 class="nwc-h2">Za <em>ljubitelje vina</em></h2>
      <p>Otkrijte najbolji način uživanja u vinu uz štapić za hlađenje vina.</p>
      <p>Za samo <strong>10–15 minuta</strong> dovodi vaše vino na idealnu temperaturu posluživanja i održava ga hladnim <strong>do 3 sata</strong>.</p>
      <p class="nwc-big">Uz ovaj štapić za hlađenje vaše vino ostaje savršeno ohlađeno od prvog točenja do zadnjeg gutljaja.</p>
    </div>
  </div>
</section>

<!-- 4) ODLIČNO 4.7 / 5 -->
<section class="nwc-sec nwc-tint">
  <div class="nwc-wrap">
    <h2 class="nwc-h2 nwc-h2--c">Odlično <em>4.7 / 5</em></h2>
    <p class="nwc-rate"><span class="nwc-rate__stars">★★★★★</span> Na temelju <strong>168</strong> recenzija</p>
    <div class="nwc-rev">
      <?php foreach ( $nwc_testimonials as $t ) : ?>
      <article class="nwc-rev__card">
        <span class="nwc-rate__stars" aria-label="5 od 5 zvjezdica">★★★★★</span>
        <h3><?php echo esc_html( $t[0] ); ?></h3>
        <p><?php echo esc_html( $t[1] ); ?></p>
        <cite><?php echo esc_html( $t[2] ); ?></cite>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5) HIGIJENA I VRHUNSKA KVALITETA — slika desno -->
<section class="nwc-sec">
  <div class="nwc-wrap nwc-row2 nwc-row2--rev">
    <div class="nwc-copy">
      <p class="nwc-kicker">Kvaliteta</p>
      <h2 class="nwc-h2">Higijena i <em>vrhunska kvaliteta</em></h2>
      <p>Oslanjamo se na vrhunski nehrđajući čelik prikladan za hranu za neusporedivu kvalitetu i trajnost, kako bi vaš štapić za hlađenje vina godinama pouzdano radio.</p>
      <p>Štapić za hlađenje vina ima odvojivi izljev, pa ga je lako temeljito očistiti toplom vodom.</p>
      <p class="nwc-big">Može se prati u perilici posuđa.</p>
    </div>
    <div class="nwc-media"><?php echo $nwc_img( 'wc-higijena.webp', 'NORIKS WineCooler štapić za hlađenje i boca vina' ); ?></div>
  </div>
</section>

<style>
.nwc-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #24191b; }
.nwc-sec * { box-sizing: border-box; }
.nwc-tint { background: #f8f1ef; }
.nwc-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nwc-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nwc-media img { display: block; width: 100%; height: auto; border-radius: 0;
  box-shadow: 0 2px 4px rgba(40,20,20,.05), 0 14px 40px rgba(40,20,20,.10); }
.nwc-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #8a2c3b; margin: 0 0 10px; }
.nwc-kicker--c { text-align: center; margin-bottom: 22px; }
.nwc-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #24191b; text-transform: none; }
.nwc-h2--c { text-align: center; }
.nwc-h2 em { font-style: italic; font-weight: 800; color: #8a2c3b; }
.nwc-copy p { font-size: 16px; line-height: 1.7; color: #574a4c; margin: 0 0 14px; }
.nwc-copy strong { color: #24191b; }
.nwc-big { font-size: 19px !important; font-weight: 800; color: #24191b !important; }
.nwc-sub { text-align: center; font-size: 16px; line-height: 1.6; color: #6b5a5d; max-width: 760px; margin: 0 auto 28px; }

/* 1) videi kupaca */
.nwc-vids { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; max-width: 960px; margin: 0 auto; }
.nwc-vid { position: relative; aspect-ratio: 9 / 16; overflow: hidden; background: #f1ecea; }
.nwc-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }

/* 2) prednosti */
.nwc-feat { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
.nwc-feat__card { background: #fff; border: 1px solid #eee2df; padding: 22px 20px; }
.nwc-feat__card h3 { font-size: 13px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; color: #8a2c3b; margin: 0 0 10px; }
.nwc-feat__card p { font-size: 14.8px; line-height: 1.62; color: #574a4c; margin: 0; }

/* 4) mnenja */
.nwc-rate { text-align: center; font-size: 15px; color: #6b5a5d; margin: 0 0 24px; }
.nwc-rate__stars { color: #e0a33c; letter-spacing: 1px; }
.nwc-rev { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
.nwc-rev__card { background: #fff; border: 1px solid #eee2df; padding: 22px 20px; display: flex; flex-direction: column;
  box-shadow: 0 1px 2px rgba(40,20,20,.04), 0 10px 26px rgba(40,20,20,.06); }
.nwc-rev__card h3 { font-size: 17px; font-weight: 800; line-height: 1.3; margin: 8px 0 8px; color: #24191b; text-transform: none; }
.nwc-rev__card p { font-size: 14.6px; line-height: 1.6; color: #574a4c; margin: 0 0 14px; flex: 1 1 auto; }
.nwc-rev__card cite { font-style: normal; font-size: 14px; font-weight: 800; color: #24191b; }

/* kratek opis izdelka: zelene kljukice namesto pik */
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
.woocommerce-product-details__short-description .nwc-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }

@media (max-width: 980px) {
  .nwc-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nwc-row2--rev .nwc-media { order: -1; }
  .nwc-feat { grid-template-columns: repeat(2, 1fr); }
  .nwc-rev { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 560px) {
  .nwc-sec { padding: 42px 0; }
  .nwc-wrap { padding: 0 16px; }
  .nwc-vids { gap: 8px; }
  .nwc-feat, .nwc-rev { grid-template-columns: 1fr; }
}
</style>
