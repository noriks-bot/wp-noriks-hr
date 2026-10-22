<?php
/**
 * product-bottom: NORIKS Hoodie — nosiva deka s kapuljačom i mekanim krznom (orto-hoodie).
 * Original: freethesheep.com/products/eden-hoodie — vsebina in vrstni red 1:1 z originalom (zavihki v nakupni škatli
 * originala gredo med why sekcije), oblika po NORIKS stilu (predloga why-hands.php / why-utilitypants.php),
 * privzeta topla rjava paleta (#a9683f):
 *   1) zavihek "Description" (3 odstavki + 5 lastnosti)  -> Opis (video ob besedilu)
 *   2) zavihek "Materials"                               -> Materijali (besedilo ob videu krzna)
 *   3) zavihek "Wash & Care"                             -> Njega i pranje (slika ob besedilu)
 *   4) zavihek "Shipping Information"                    -> Dostava i povrat po NORIKS pogojih (slika ob besedilu)
 *   5) "Customer Reviews" (Judge.me, 5 mnenj)            -> Recenzije kupaca (1081 recenzija, zvezdice na 692)
 * Izpusceno: glava, pasica "Free Shipping on US Orders Over $199", "Pairs Well With", "Related products", noga.
 * Pogoji konkurenta (dostava, prednarocila) zamenjani z NORIKS pogoji. Opis, tablica velicin in pranje so tudi v
 * standardnih harmonikah (meta.php), FAQ v reviews.php ($hoodie_faq), mnenja tudi v auto_reviews/HR_hoodie.php.
 * Slike/videi: img/hoodie/ (z originala; videi brez zvoka, kadri z usnjeno etiketo znamke izrezani).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nho      = get_template_directory_uri() . '/img/hoodie/';
$nho_path = get_template_directory() . '/img/hoodie/';
$nho_img  = function( $file, $alt ) use ( $nho, $nho_path ) {
  if ( ! $file || ! file_exists( $nho_path . $file ) ) { return ''; }
  return '<div class="nho-pic"><img src="' . esc_url( $nho . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy"></div>';
};
$nho_video = function( $name, $label ) use ( $nho, $nho_path ) {
  $file = $name . '.mp4'; $poster = $name . '-poster.webp';
  if ( ! file_exists( $nho_path . $file ) ) { return ''; }
  return '<div class="nho-pic nho-vid"><video src="' . esc_url( $nho . $file ) . '" poster="' . esc_url( $nho . $poster ) . '"'
    . ' muted autoplay loop playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video></div>';
};
$nho_stars = function( $n ) {
  return '<span class="nho-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">' . str_repeat( '★', (int) $n ) . '<span class="nho-stars__off">' . str_repeat( '★', 5 - (int) $n ) . '</span></span>';
};

/* 1)–4) slika/video ob besedilu (izmenicno), 1:1 z zavihkov originala */
$nho_rows = array(
  array( 'media' => $nho_video( 'nho-v-crna', 'NORIKS Hoodie nosiva deka s kapuljačom u crnoj boji' ), 'k' => 'Opis',
    'h' => 'Vrhunska nosiva deka <em>s kapuljačom.</em>',
    'p' => array(
      '<strong>NORIKS Hoodie</strong> je vrhunska nosiva deka s kapuljačom, stvorena za potpunu udobnost i opuštanje. <strong>Lagano je otežan (oko 1,8 kg)</strong> i stvara nježan, umirujući pritisak koji pomaže opuštanju, smanjuje stres i ublažava tjeskobu.',
      'Ima <strong>prozračne otvore</strong> i <strong>senzorno ugodnu podstavu od umjetnog krzna</strong> koja stvara umirujući, topao osjećaj — idealno za opuštanje nakon dugog dana ili za udobnost na putovanju.',
      'Napravljen je za svakoga: otvoren kroj udobno pristaje veličinama <strong>od XS do 6XL</strong>. Bilo kod kuće ili u pokretu, NORIKS Hoodie pruža udobnost, toplinu i osjećaj sigurnosti gdje god se nalazili.',
    ),
    'list' => array( 'Lagano otežan — oko 1,8 kg', 'Senzorno ugodno umjetno krzno', 'Unisex, napravljen za svakoga', 'Pažljivo izrađen', 'Pomaže smanjiti stres i tjeskobu' ),
    'big' => '' ),
  array( 'media' => $nho_video( 'nho-v-krzno', 'Mekana podstava od umjetnog krzna u NORIKS Hoodie' ), 'k' => 'Materijali',
    'h' => 'Mekan pamuk izvana, <em>toplo krzno iznutra.</em>',
    'p' => array(
      '<strong>Vanjski materijal:</strong> 100 % pamuk.',
      '<strong>Podstava od krzna:</strong> 100 % poliester — senzorno ugodna, netoksična i bez štetnih kemikalija.',
      '<strong>Boja krzna:</strong> kod nekih boja prljavo bijela, kod ostalih u boji vanjskog materijala.',
    ),
    'list' => array(),
    'big' => 'Mekano, toplo i nježno prema koži.' ),
  array( 'media' => $nho_img( 'nho-s-pepeljasto-siva.webp', 'NORIKS Hoodie s podignutom kapuljačom' ), 'k' => 'Njega i pranje',
    'h' => 'Jednostavna njega — <em>krzno ostaje mekano.</em>',
    'p' => array(
      'Perite i sušite <strong>samo na programu za osjetljivo rublje</strong>: pranje u hladnoj vodi i sušenje na niskoj temperaturi.',
      'Perite ga zasebno, bez druge odjeće. Ako je nakon sušenja još vlažan, ostavite ga da se osuši na zraku.',
    ),
    'list' => array(),
    'big' => 'Tako sprječavate skupljanje, paranje i sljepljivanje krzna.' ),
  array( 'media' => $nho_img( 'nho-s-tamnosiva.webp', 'NORIKS Hoodie u tamnosivoj boji s krznom' ), 'k' => 'Dostava i povrat',
    'h' => 'Naručite bez brige — <em>30 dana za povrat.</em>',
    'p' => array(
      '<strong>Besplatna dostava za narudžbe iznad 70 €.</strong> Plaćanje je moguće i pouzećem.',
      '<strong>Pravo na povrat u roku od 30 dana.</strong> Ako veličina ne odgovara, javite nam se i pomoći ćemo vam oko zamjene.',
    ),
    'list' => array(),
    'big' => 'Isprobajte ga kod kuće — bez rizika.' ),
);

/* 5) Recenzije kupaca — 5 mnenj z originala (Judge.me), stevila po NORIKS (1081 / zvezdice na 692) */
$nho_dist = array( 5 => 650, 4 => 37, 3 => 3, 2 => 1, 1 => 1 );
$nho_reviews = array(
  array( 'ime' => 'Katarina K.', 'z' => 5, 'h' => 'Moj omiljeni!', 'tekst' => 'Obožavam težinu i osjećaj! Super mekano — moja definicija vrhunske udobnosti!' ),
  array( 'ime' => 'Lidija V.', 'z' => 5, 'h' => '', 'tekst' => 'Kupila sam ga suprugu i apsolutno ga obožava. Jako je mekan i ima lijepu težinu. Razmišljam da i sebi kupim jedan.' ),
  array( 'ime' => 'Kristina D.', 'z' => 5, 'h' => 'Obožavam ga!', 'tekst' => 'Dugo sam ih gledala i napokon se odlučila. Tako mi je drago! Zimi doma držim nižu temperaturu jer bolje spavam kad je svježije, a u NORIKS Hoodieju mi je toplo dok navečer gledam TV. Lako se krećem u njemu, a ruke mogu pokriti ili otkriti koliko želim. Trebala sam ga kupiti puno ranije. Ako razmišljate o kupnji — UČINITE TO. Nećete požaliti!' ),
  array( 'ime' => 'Tihana C.', 'z' => 5, 'h' => 'Fantastično — definitivno vrijedi!', 'tekst' => 'Bila sam skeptična oko kvalitete, veličine i proizvoda općenito, pogotovo nakon što sam ga vidjela u oglasima na društvenim mrežama, ali znatiželja je pobijedila. Tako mi je drago. Ne mogu mu naći manu, sviđa mi se sve. Da, cijena se možda čini visokom, ali definitivno vrijedi. Iskoristite ponude za više komada i naručite odjednom.' ),
  array( 'ime' => 'Maja P.', 'z' => 5, 'h' => 'Udobno', 'tekst' => 'Ugodni su i topli!!!' ),
);
$nho_dist_max = max( $nho_dist );
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<?php foreach ( $nho_rows as $i => $w ) : ?>
<!-- <?php echo (int) ( $i + 1 ); ?>) <?php echo esc_html( $w['k'] ); ?> -->
<section class="nho-sec<?php echo ( $i % 2 ) ? ' nho-tint' : ''; ?>">
  <div class="nho-wrap">
    <div class="nho-row2<?php echo ( $i % 2 ) ? ' nho-row2--rev' : ''; ?>">
      <div class="nho-media"><?php echo $w['media']; ?></div>
      <div class="nho-copy">
        <p class="nho-kicker"><?php echo esc_html( $w['k'] ); ?></p>
        <h2 class="nho-h3"><?php echo wp_kses( $w['h'], array( 'em' => array() ) ); ?></h2>
        <?php foreach ( $w['p'] as $p ) : ?><p><?php echo wp_kses( $p, array( 'strong' => array() ) ); ?></p><?php endforeach; ?>
        <?php if ( ! empty( $w['list'] ) ) : ?>
        <ul class="nho-list">
          <?php foreach ( $w['list'] as $li ) : ?><li><span class="nho-check">✓</span> <?php echo esc_html( $li ); ?></li><?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <?php if ( $w['big'] ) : ?><p class="nho-big"><?php echo esc_html( $w['big'] ); ?></p><?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<!-- 5) RECENZIJE KUPACA -->
<section class="nho-sec">
  <div class="nho-wrap">
    <h2 class="nho-h2 nho-c">Recenzije <em>kupaca</em></h2>
    <div class="nho-summary">
      <div class="nho-score">
        <div class="nho-score__num">4,9</div>
        <?php echo $nho_stars( 5 ); ?>
        <p class="nho-score__txt">Na temelju 1081 recenzije</p>
      </div>
      <div class="nho-bars">
        <?php foreach ( $nho_dist as $st => $cnt ) : ?>
        <div class="nho-bar">
          <span class="nho-bar__lbl"><?php echo (int) $st; ?> ★</span>
          <span class="nho-bar__track"><span class="nho-bar__fill" style="width:<?php echo esc_attr( round( 100 * $cnt / $nho_dist_max ) ); ?>%"></span></span>
          <span class="nho-bar__cnt"><?php echo (int) $cnt; ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="nho-grid3">
      <?php foreach ( $nho_reviews as $r ) : ?>
      <article class="nho-card">
        <?php echo $nho_stars( $r['z'] ); ?>
        <p class="nho-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nho-ok">✓ Potvrđena kupnja</span></p>
        <?php if ( $r['h'] ) : ?><p class="nho-card__h"><?php echo esc_html( $r['h'] ); ?></p><?php endif; ?>
        <p class="nho-card__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-hands.php / why-utilitypants.php): oznaka + naslov z ležečim poudarkom, slika/video ob
   besedilu, izmenjujoča ozadja. Privzeta topla rjava paleta NORIKS (#a9683f). */
.nho-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nho-sec * { box-sizing: border-box; }
.nho-tint { background: #f7f2ec; }
.nho-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nho-c { text-align: center; }
.nho-sec h2, .nho-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nho-kicker, .nho-copy p.nho-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nho-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 28px; color: #231d19; }
.nho-h2 em, .nho-h3 em { font-style: italic; color: #a9683f; }
.nho-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }

/* slika/video ob besedilu: medij zapolni svoj stolpec (4/5), zaobljen, s senco */
.nho-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nho-row2--rev .nho-media { order: 2; }
.nho-pic { position: relative; overflow: hidden; background: #ece3da; border-radius: 10px; aspect-ratio: 4 / 5;
  box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.nho-pic img, .nho-pic video { display: block; width: 100%; height: 100%; object-fit: cover; }
.nho-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.nho-copy p strong { color: #231d19; font-weight: 600; }
.nho-copy p.nho-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.nho-list { list-style: none; margin: 4px 0 0; padding: 0; }
.nho-list li { position: relative; padding-left: 32px; margin: 0 0 9px; font-size: 16px; line-height: 1.5; color: #231d19; font-weight: 600; list-style: none; }
.nho-check { position: absolute; left: 0; top: 1px; width: 21px; height: 21px; border-radius: 50%; background: #a9683f; color: #fff;
  font-size: 12px; font-weight: 800; line-height: 21px; text-align: center; }

/* recenzije */
.nho-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nho-stars__off { color: #e6dbd2; }
.nho-summary { display: grid; grid-template-columns: 220px minmax(0, 420px); gap: 36px; justify-content: center; align-items: center; margin: 0 auto 32px; }
.nho-score { text-align: center; }
.nho-score__num { font-size: 52px; font-weight: 700; line-height: 1; color: #231d19; margin-bottom: 6px; }
.nho-score .nho-stars { font-size: 20px; }
.nho-score__txt { font-size: 14px; color: #6b625a; margin: 8px 0 0; }
.nho-bar { display: grid; grid-template-columns: 38px 1fr 40px; gap: 10px; align-items: center; margin: 0 0 7px; font-size: 14px; color: #4f443d; }
.nho-bar__track { height: 10px; background: #e9ded4; border-radius: 6px; overflow: hidden; }
.nho-bar__fill { display: block; height: 100%; background: #a9683f; border-radius: 6px; }
.nho-bar__cnt { text-align: right; }
.nho-grid3 { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; align-items: start; }
.nho-card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 16px 18px 18px; }
.nho-card__name { font-size: 14px; font-weight: 600; color: #231d19; margin: 4px 0 8px; }
.nho-ok { display: block; color: #2f9e5f; font-weight: 600; font-size: 12px; }
.nho-card__h { font-size: 15px !important; font-weight: 700; line-height: 1.35; margin: 0 0 6px; color: #231d19; }
.nho-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 0; }

@media (max-width: 989px) {
  .nho-row2 { gap: 32px; }
  .nho-grid3 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nho-sec { padding: 42px 0; }
  .nho-wrap { padding: 0 16px; }
  .nho-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nho-row2--rev .nho-media { order: 0; }
  .nho-summary { grid-template-columns: 1fr; gap: 18px; }
  .nho-grid3 { grid-template-columns: 1fr; gap: 14px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-hoodie .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nho-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
