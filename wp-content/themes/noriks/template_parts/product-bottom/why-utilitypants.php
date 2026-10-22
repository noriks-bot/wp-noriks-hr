<?php
/**
 * product-bottom: NORIKS UtilityPants — rastezljive vodootporne radne hlače s 10 džepova (orto-utilitypants).
 * Original: thetruetailorcompany.com/products/ultraflex-waterproof-gortex-utility-trousers-1 — vsebina in vrstni red 1:1
 * z originalom, oblika po NORIKS stilu (predloga why-hands.php / why-smartjacket.php), privzeta topla rjava paleta (#a9683f):
 *   1) ikone "Active-temperature control / Tough stuff / Ultimate comfort" -> 3 prednosti
 *   2) "Water repellent" (video) -> Vodoodbojne (video ob besedilu, hrvaški napis)
 *   3) "Ultra comfort" (video) -> Ultra udobnost (besedilo ob videu)
 *   4) "Guaranteed to last" (video) -> Stvorene da traju (video ob besedilu)
 *   5) "Over 12,000+ Sold Worldwide" + "Customer Reviews" (Loox) -> Iskustva naših kupaca: ena sekcija,
 *      4 izbrana mnenja s fotografijo (mreža 2x2) ob besedilu, 1081 recenzija
 * Izpusceno: glava, pasica "Halloween Sale", "UPDATE: ... limited stock", tekoci trak "PROMOTION ENDS TODAY", noga.
 * Opis, tablica velicin in pogoji (dostava/povrat) so v standardnih harmonikah (meta.php), FAQ v reviews.php
 * ($utilitypants_faq), mnenja tudi v auto_reviews/HR_utilitypants.php. Znamka konkurenta odstranjena iz besedil in slik.
 * Slike/videi: img/utilitypants/ (z originala; videi brez zvoka s hrvaškimi napisi).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nup      = get_template_directory_uri() . '/img/utilitypants/';
$nup_path = get_template_directory() . '/img/utilitypants/';
$nup_img  = function( $file, $alt ) use ( $nup, $nup_path ) {
  if ( ! $file || ! file_exists( $nup_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nup . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nup_video = function( $name, $label ) use ( $nup, $nup_path ) {
  $file = $name . '-hr.mp4'; $poster = $name . '-poster.webp';
  if ( ! file_exists( $nup_path . $file ) ) { return ''; }
  return '<div class="nup-vid"><video src="' . esc_url( $nup . $file ) . '" poster="' . esc_url( $nup . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$nup_stars = function( $n ) {
  return '<span class="nup-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">' . str_repeat( '★', (int) $n ) . '<span class="nup-stars__off">' . str_repeat( '★', 5 - (int) $n ) . '</span></span>';
};

/* 1) ikone z originala */
$nup_icons = array(
  array( 'img' => 'up-ik-temperatura.webp', 'h' => 'Aktivna kontrola temperature', 'p' => 'Naš izrazito prozračan sloj koji odvodi vlagu sprječava zadržavanje znoja.' ),
  array( 'img' => 'up-ik-cvrstoca.webp', 'h' => 'Čvrste i izdržljive', 'p' => 'Naša power-shell pro tehnologija odolijeva svakom habanju i trošenju.' ),
  array( 'img' => 'up-ik-udobnost.webp', 'h' => 'Vrhunska udobnost', 'p' => 'Tkanina nove generacije elastičnija je i lakša — za udobnost 24 sata dnevno.' ),
);

/* 2)–4) video ob besedilu (izmenicno), 1:1 z originala */
$nup_rows = array(
  array( 'vid' => 'up-v-voda', 'alt' => 'Voda se odbija od NORIKS UtilityPants radnih hlača', 'k' => 'Vodoodbojne',
    'h' => 'Kiša ili sunce — <em>uvijek ste pokriveni.</em>',
    'p' => array( 'Naš ojačani <strong>softshell</strong> ne upija vodu kao tradicionalne radne hlače od platna ili traperice.', 'Pogledajte — voda se jednostavno odbija, a vi ostajete suhi i udobni cijeli dan.' ),
    'big' => 'Suhi i udobni cijeli dan.' ),
  array( 'vid' => 'up-v-udobnost', 'alt' => 'NORIKS UtilityPants se rastežu u 4 smjera', 'k' => 'Ultra udobnost',
    'h' => 'Savršena ravnoteža <em>udobnosti i izdržljivosti.</em>',
    'p' => array( 'Nakon godina testiranja usavršili smo ravnotežu između udobnosti i učinkovitosti.', 'Napredna tehnologija <strong>rastezanja u 4 smjera</strong> kreće se s vama, a prozračni sloj koji odvodi vlagu drži vas udobnima i kroz radne dane od 12 sati.' ),
    'big' => 'Rezultat? Radne hlače koje se osjećaju jednako dobro koliko i rade.' ),
  array( 'vid' => 'up-v-ripstop', 'alt' => 'Rip-stop tkanina NORIKS UtilityPants ne para se', 'k' => 'Stvorene da traju',
    'h' => 'Power-shell vanjski sloj — <em>fleksibilan i čvrst.</em>',
    'p' => array( 'Koristi našu <strong>softshell tehnologiju</strong> koja sprječava vidljive tragove habanja i trošenja.' ),
    'big' => 'Dizajnirane da vam traju godinama.' ),
);

/* 5) Iskustva kupaca — 4 izbrana mnenja s fotografijo z originala ("Over 12,000+ Sold Worldwide" + Loox recenzije) */
$nup_reviews = array(
  array( 'f' => 'up-t2-kupac.webp', 'ime' => 'Krešimir J., 33', 'h' => 'Udobne cijeli dan', 'tekst' => 'Sumnjao sam hoće li stvarno izdržati i biti udobne na gradilištu, ali odlične su! Bilo da lijeva kao iz kabla ili klečim u blatu, cijeli dan ostajem suh.' ),
  array( 'f' => 'up-r06.webp', 'ime' => 'Marin L.', 'h' => '', 'tekst' => 'Najbolja radna odjeća koju sam probao. Odličan, krojen izgled i nisu široke oko listova kao većina radnih hlača. Džepovi su lijepo duboki, a to mi je inače najveća muka.' ),
  array( 'f' => 'up-t3-kupac.webp', 'ime' => 'Bruno K., 29', 'h' => 'Radne hlače za cijelu godinu', 'tekst' => 'Prije sam na posao stalno nosio kratke hlače, ali htio sam nešto urednije i ove su savršene. Super udobne i dobro me štite. 10/10' ),
  array( 'f' => 'up-r09.webp', 'ime' => 'Karlo H.', 'h' => '', 'tekst' => 'Hlače izgledaju odlično. Stvarno su vodootporne, kao što se vidi na slici. Vrijede svoje cijene.' ),
);
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) TRI PREDNOSTI — ikone z originala -->
<section class="nup-sec nup-tint">
  <div class="nup-wrap">
    <div class="nup-icons">
      <?php foreach ( $nup_icons as $ic ) : ?>
      <div class="nup-icon">
        <div class="nup-icon__img"><?php echo $nup_img( $ic['img'], $ic['h'] ); ?></div>
        <h3 class="nup-icon__h"><?php echo esc_html( $ic['h'] ); ?></h3>
        <p class="nup-icon__p"><?php echo esc_html( $ic['p'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php foreach ( $nup_rows as $i => $w ) : ?>
<!-- <?php echo (int) ( $i + 2 ); ?>) video ob besedilu -->
<section class="nup-sec<?php echo ( $i % 2 ) ? ' nup-tint' : ''; ?>">
  <div class="nup-wrap">
    <div class="nup-row2<?php echo ( $i % 2 ) ? ' nup-row2--rev' : ''; ?>">
      <div class="nup-media"><?php echo $nup_video( $w['vid'], $w['alt'] ); ?></div>
      <div class="nup-copy">
        <p class="nup-kicker"><?php echo esc_html( $w['k'] ); ?></p>
        <h2 class="nup-h3"><?php echo wp_kses( $w['h'], array( 'em' => array() ) ); ?></h2>
        <?php foreach ( $w['p'] as $p ) : ?><p><?php echo wp_kses( $p, array( 'strong' => array() ) ); ?></p><?php endforeach; ?>
        <p class="nup-big"><?php echo esc_html( $w['big'] ); ?></p>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- 5) ISKUSTVA NAŠIH KUPACA — 4 mnenja s fotografijo ob besedilu -->
<section class="nup-sec nup-tint">
  <div class="nup-wrap">
    <div class="nup-row2 nup-row2--rev nup-row2--top">
      <div class="nup-media">
        <div class="nup-grid2">
          <?php foreach ( $nup_reviews as $r ) : ?>
          <article class="nup-card">
            <div class="nup-card__photo"><?php echo $nup_img( $r['f'], 'Fotografija kupca — NORIKS UtilityPants, ' . $r['ime'] ); ?></div>
            <div class="nup-card__body">
              <?php echo $nup_stars( 5 ); ?>
              <?php if ( $r['h'] ) : ?><p class="nup-card__h"><?php echo esc_html( $r['h'] ); ?></p><?php endif; ?>
              <p class="nup-card__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
              <p class="nup-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nup-ok">✓ Potvrđena kupnja</span></p>
            </div>
          </article>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="nup-copy">
        <p class="nup-kicker">Iskustva kupaca</p>
        <h2 class="nup-h3">Tisuće zadovoljnih majstora — <em>stvarni dojmovi</em></h2>
        <p class="nup-rate"><span class="nup-stars">★★★★★</span> 1081 recenzija</p>
        <p>Vodoinstalateri, majstori na gradilištu i svi koji rade vani — NORIKS UtilityPants nose od ranog jutra do kraja smjene, po kiši, u blatu i na koljenima.</p>
        <ul class="nup-points">
          <li><span class="nup-dot" aria-hidden="true">✓</span><span><strong>Suhi cijeli dan</strong> — voda se odbija od tkanine</span></li>
          <li><span class="nup-dot" aria-hidden="true">✓</span><span><strong>Rastežu se u 4 smjera</strong> i ne stežu pri klečanju</span></li>
          <li><span class="nup-dot" aria-hidden="true">✓</span><span><strong>Duboki džepovi</strong> točno tamo gdje trebaju</span></li>
        </ul>
        <p class="nup-big">Radne hlače koje se osjećaju jednako dobro koliko i rade.</p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hands.php / why-smartjacket.php): oznaka + naslov z ležečim poudarkom, video ob
   besedilu, izmenjujoča ozadja. Privzeta topla rjava paleta NORIKS (#a9683f). */
.nup-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nup-sec * { box-sizing: border-box; }
.nup-tint { background: #f7f2ec; }
.nup-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nup-c { text-align: center; }
.nup-sec h2, .nup-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nup-kicker, .nup-copy p.nup-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nup-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 28px; color: #231d19; }
.nup-h2 em, .nup-h3 em { font-style: italic; color: #a9683f; }
.nup-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.nup-sec img { display: block; width: 100%; height: auto; }
.nup-rate { font-size: 14px; font-weight: 600; color: #6b625a; margin: 0 0 8px; }
.nup-rate .nup-stars { margin-right: 6px; }

/* 1) ikone */
.nup-icons { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 28px; }
.nup-icon { text-align: center; padding: 6px 10px; }
.nup-icon__img { width: 84px; height: 84px; margin: 0 auto 16px; }
.nup-icon__img img { width: 84px; height: 84px; object-fit: contain; }
.nup-icon__h { font-size: 15px !important; font-weight: 700; letter-spacing: .08em !important; text-transform: uppercase !important; color: #231d19; margin: 0 0 8px; line-height: 1.35; }
.nup-icon__p { font-size: 15px; line-height: 1.6; color: #4f443d; margin: 0 auto; max-width: 320px; }

/* video ob besedilu */
.nup-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nup-row2--top { align-items: start; }
.nup-row2--rev .nup-media { order: 2; }
.nup-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.nup-copy p strong { color: #231d19; font-weight: 600; }
.nup-copy p.nup-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.nup-vid { position: relative; overflow: hidden; background: #ece3da; border-radius: 10px; aspect-ratio: 4 / 3;
  box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.nup-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }

/* mnenja s fotografijo */
.nup-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nup-stars__off { color: #e6dbd2; }
.nup-grid2 { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; align-items: start; }
.nup-points { list-style: none; margin: 0 0 16px; padding: 0; }
.nup-points li { font-size: 16px; line-height: 1.6; color: #4f443d; margin: 0 0 10px; display: flex; gap: 12px; align-items: flex-start; }
.nup-points li strong { color: #231d19; font-weight: 600; }
.nup-dot { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; margin-top: 2px; }
.nup-card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; overflow: hidden; }
.nup-card__photo img { aspect-ratio: 4 / 5; object-fit: cover; }
.nup-card__body { padding: 12px 14px 14px; }
.nup-card__h { font-size: 13.5px !important; font-weight: 700; text-transform: uppercase; letter-spacing: .04em; line-height: 1.35; margin: 6px 0 8px; color: #231d19; }
.nup-card__name { font-size: 13px; font-weight: 600; color: #231d19; margin: 0; }
.nup-ok { display: block; color: #2f9e5f; font-weight: 600; font-size: 12px; }
.nup-card__txt { font-size: 13.5px; line-height: 1.55; color: #3a302a; margin: 4px 0 8px; }
.nup-copy p.nup-rate { font-size: 14px; margin: -6px 0 14px; }

@media (max-width: 989px) {
  .nup-row2 { gap: 32px; }
}
@media (max-width: 749px) {
  .nup-sec { padding: 42px 0; }
  .nup-wrap { padding: 0 16px; }
  .nup-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nup-row2--rev .nup-media { order: 0; }
  .nup-icons { grid-template-columns: 1fr; gap: 22px; }
  .nup-grid2 { gap: 8px; }
  .nup-card__body { padding: 10px 10px 12px; }
  .nup-card__txt { font-size: 12.5px; }
  .nup-card__h { font-size: 12.5px !important; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-utilitypants .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nup-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
