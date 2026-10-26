<?php
/**
 * product-bottom: NORIKS HoodieDress — oversized haljina s kapuljačom (orto-hoodiedress).
 * Original: the-warmy.com/products/ovrs — vsebina in vrstni red 1:1 z originalom, oblika po NORIKS stilu
 * (predloga why-modalsweatshirt.php / why-hands.php), privzeta topla rjava paleta NORIKS (#a9683f):
 *   1) zavihek "Description" (nakupna škatla)                      -> Više od hudice: slika ob besedilu
 *   2) zavihek "Fit & Fabric" + Kiwi "Take your normal hoodie size" -> Kroj i materijal: slika ob besedilu
 *      (»90-Day Fit Guarantee« -> pravo na povrat u roku od 30 dana)
 *   3) "Comfort in Every Detail" (4 ikone)                          -> Udobnost u svakom detalju (4 kartice z ikonami originala)
 *   4) "Review Highlights" (5,343 Reviews | Avg Rating: 4.7, 3 mnenja) -> Istaknute recenzije (1081, 3 mnenja)
 *   5) Junip mnenja (4,68 / 5784; 4801/503/259/73/148)             -> Recenzije kupaca: 1081, zvezdice skalirane na 692 + 8 mnenj
 *      (5 s fotografijami kupcev)
 * Izpusceno: glava, pasica »Buy More, Save More! Mix & Match« nad ponudbami, zavihek »Shipping & Returns« (velja NORIKS:
 * besplatna dostava iznad 70 €, 30 dana za povrat), noga z ikonami trgovine (»90-Day Perfect Fit Guarantee«, »45k+ Happy
 * Customers«), ime tkanine »WarmyWeave« (blagovna znamka konkurenta).
 * FAQ je v reviews.php ($hoodiedress_faq), mnenja v auto_reviews/HR_hoodiedress.php, opis/nega/tablica velicin v standardnih
 * harmonikah (meta.php) in modalu (size-chart-hoodiedress.php). Slike: img/hoodiedress/ (nhd-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nhd      = get_template_directory_uri() . '/img/hoodiedress/';
$nhd_path = get_template_directory() . '/img/hoodiedress/';
$nhd_img  = function( $file, $alt, $cls = '' ) use ( $nhd, $nhd_path ) {
  if ( ! $file || ! file_exists( $nhd_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nhd . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nhd_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nhd-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nhd-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 3) Udobnost u svakom detalju ("Comfort in Every Detail") — 4 ikone originala */
$nhd_detalji = array(
  array( 'nhd-ik-1.webp', 'Iznutra mekana poput deke', 'Plišana unutrašnjost grije i mazi kao vaša omiljena deka.' ),
  array( 'nhd-ik-2.webp', 'Vanjski sloj od 100 % pamuka', 'Prirodan pamuk ugodan je na koži i lijepo pada.' ),
  array( 'nhd-ik-3.webp', 'Produžena duljina za bolju pokrivenost', 'Pokriva bokove i stražnjicu — savršena uz tajice.' ),
  array( 'nhd-ik-4.webp', 'Kroj koji laska figuri', 'Prozračan oversized kroj koji laska svakoj figuri.' ),
);

/* 4) Istaknute recenzije ("Review Highlights") — 3 mnenja originala */
$nhd_highlights = array(
  array( 'ime' => 'Kristina M.', 'naslov' => 'Odličan poklon', 'tekst' => 'Kupila sam dva paketa po četiri komada i obožavam ih! Dvije sam već poklonila kolegicama s posla, a po jednu ću dati i svakoj od svoje tri kćeri. Tako su mekane i tople 🙃' ),
  array( 'ime' => 'Josipa K.',   'naslov' => 'Kao da nosite deku', 'tekst' => 'Ovo su najmekše i najudobnije hudice ikad. Kao da nosite deku od mekanog pliša. Tako tople i ugodne.' ),
  array( 'ime' => 'Helena A.',   'naslov' => 'Pokriva trbuh', 'tekst' => 'Kupila sam tri i planiram još boja. Super su mekane, udobne i savršeno padaju preko trbuha i stražnjice 😉' ),
);

/* 5) recenzije (Junip 4,68 / 5784; 4801/503/259/73/148 -> po NORIKS 1081, zvezdice skalirane na 692) */
$nhd_dist = array(
  array( 5, 83, 574 ),
  array( 4, 9, 60 ),
  array( 3, 4, 31 ),
  array( 2, 1, 9 ),
  array( 1, 3, 18 ),
);
$nhd_reviews = array(
  array( 'ime' => 'Alenka E.',    'img' => 'nhd-rv-1.webp', 'naslov' => 'Obožavam ih!', 'tekst' => 'Oversized, rastezljive, udobne i s prekrasnom mekanom baršunastom podstavom — obožavam ih! Sviđaju mi se i bočni prorezi, lako se sjedne.' ),
  array( 'ime' => 'Katarina M.',  'img' => 'nhd-rv-2.webp', 'naslov' => 'Obavezna za hladnije dane', 'tekst' => 'Topla i slatka.' ),
  array( 'ime' => 'Dunja S.',     'img' => 'nhd-rv-3.webp', 'naslov' => 'Kupila sam i prijateljicama', 'tekst' => 'Jednu sam za Božić dobila od sina, a ostale sam kupila prijateljicama jer im se moja jako svidjela.' ),
  array( 'ime' => 'Tamara V.',    'img' => 'nhd-rv-4.webp', 'naslov' => 'Udobna i TOPLA 🥰', 'tekst' => 'Prvi hladni jesenski dan, a skoro sam je morala skinuti koliko grije. Jednostavno je SAVRŠENA ❣️' ),
  array( 'ime' => 'Jasna M.',     'img' => 'nhd-rv-5.webp', 'naslov' => 'Ne možete kupiti samo jednu', 'tekst' => 'Obožavam novu boju i kroj. Ne možete kupiti samo jednu — imam skoro sve boje. Toplo preporučujem, odlična kvaliteta za tu cijenu.' ),
  array( 'ime' => 'Dijana V.',    'img' => '', 'naslov' => 'Mekana i kvalitetno sašivena', 'tekst' => 'Stvarno je super topla i ugodna, a boja je prekrasna. Drago mi je što su rukavi pravilno ušiveni, za razliku od mnogih drugih modela za punije dame.' ),
  array( 'ime' => 'Kristijana M.', 'img' => '', 'naslov' => 'Kao veliki zagrljaj', 'tekst' => 'Lijepa je i ugodna, a produžena duljina je odlična jer mi je uvijek malo hladno u donjem dijelu leđa.' ),
  array( 'ime' => 'Laura C.',     'img' => '', 'naslov' => 'Savršena uz tajice', 'tekst' => 'Savršene je duljine, mekana i ugodna. Ovo mi je već peta. Obožavam sve boje.' ),
);

$nhd_n = 0; // števec sekcij za izmenična ozadja
$nhd_cls = function() use ( &$nhd_n ) { $nhd_n++; return ( $nhd_n % 2 ) ? ' nhd-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) VIŠE OD HUDICE (zavihek "Description") — slika ob besedilu -->
<section class="nhd-sec<?php echo $nhd_cls(); ?>">
  <div class="nhd-wrap">
    <div class="nhd-row2">
      <div class="nhd-media"><?php echo $nhd_img( 'nhd-s1-opis.webp', 'NORIKS HoodieDress – oversized haljina s kapuljačom, tamnoplava' ); ?></div>
      <div class="nhd-copy">
        <p class="nhd-kicker">Više od hudice</p>
        <h2 class="nhd-h2">Vaš novi omiljeni komad za <em>udobnost bez truda</em></h2>
        <p>Ovo je više od hudice — to je vaš novi omiljeni komad za <strong>udoban i opušten stil</strong> bez puno truda.</p>
        <p>Dizajnirana je s <strong>prozračnim oversized krojem</strong> koji laska svakoj figuri, a izrađena od pamučne tkanine: <strong>vanjski sloj od 100 % pamuka</strong> i plišana unutrašnjost mekana poput deke.</p>
        <p>Savršena za lagana jutra, užurbane dane ili dotjerani izgled bez odricanja od udobnosti.</p>
        <p class="nhd-big">Udobnost koju nosite cijeli dan.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) KROJ I MATERIJAL (zavihek "Fit & Fabric") — slika ob besedilu, strani zamenjani -->
<section class="nhd-sec<?php echo $nhd_cls(); ?>">
  <div class="nhd-wrap">
    <div class="nhd-row2 nhd-row2--rev">
      <div class="nhd-media"><?php echo $nhd_img( 'nhd-s2-kroj.webp', 'NORIKS HoodieDress – bočni prorez i produžena duljina' ); ?></div>
      <div class="nhd-copy">
        <p class="nhd-kicker">Kroj i materijal</p>
        <h2 class="nhd-h2">Pristaje <em>točno prema veličini</em></h2>
        <p>Odgovara uobičajenoj veličini — <strong>uzmite veličinu hudice koju inače nosite</strong>. Veličine od S do 3XL.</p>
        <p><strong>Vanjski sloj od 100 % pamuka, a iznutra mekani flis poput deke.</strong></p>
        <p>Ako vam veličina ipak ne odgovara, imate <strong>pravo na povrat u roku od 30 dana</strong>.</p>
        <p class="nhd-big">Mekana iznutra, uredna izvana.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) UDOBNOST U SVAKOM DETALJU ("Comfort in Every Detail") — 4 ikone originala -->
<section class="nhd-sec<?php echo $nhd_cls(); ?>">
  <div class="nhd-wrap">
    <p class="nhd-kicker nhd-c">Detalji koji čine razliku</p>
    <h2 class="nhd-h2 nhd-c">Udobnost u <em>svakom detalju</em></h2>
    <div class="nhd-icons">
      <?php foreach ( $nhd_detalji as $d ) : ?>
      <div class="nhd-icon">
        <?php echo $nhd_img( $d[0], $d[1], 'nhd-icon__img' ); ?>
        <h3 class="nhd-icon__h"><?php echo esc_html( $d[1] ); ?></h3>
        <p class="nhd-icon__p"><?php echo esc_html( $d[2] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 4) ISTAKNUTE RECENZIJE ("Review Highlights") — 3 mnenja originala -->
<section class="nhd-sec<?php echo $nhd_cls(); ?>">
  <div class="nhd-wrap">
    <p class="nhd-kicker nhd-c">Istaknute recenzije</p>
    <h2 class="nhd-h2 nhd-c">Što kažu <em>naši kupci</em></h2>
    <div class="nhd-score">
      <?php echo $nhd_stars( 5 ); ?>
      <span class="nhd-score__txt"><strong>1081 recenzija</strong> | Prosječna ocjena: <strong>4,7</strong></span>
    </div>
    <div class="nhd-hl">
      <?php foreach ( $nhd_highlights as $r ) : ?>
      <article class="nhd-card nhd-card--hl">
        <div class="nhd-card__body">
          <?php echo $nhd_stars( 5 ); ?>
          <h3 class="nhd-card__title">„<?php echo esc_html( $r['naslov'] ); ?>”</h3>
          <p class="nhd-card__txt"><?php echo esc_html( $r['tekst'] ); ?></p>
          <p class="nhd-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nhd-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5) RECENZIJE KUPACA (Junip) — 1081 po NORIKS, razdelitev zvezdic skalirana na 692 + mnenja s fotografijami -->
<section class="nhd-sec<?php echo $nhd_cls(); ?>">
  <div class="nhd-wrap">
    <p class="nhd-kicker nhd-c">Recenzije kupaca</p>
    <h2 class="nhd-h2 nhd-c">Nosite je <em>jednom, voljet ćete je zauvijek</em></h2>
    <div class="nhd-score">
      <span class="nhd-score__num">4,7 / 5</span>
      <?php echo $nhd_stars( 5 ); ?>
      <span class="nhd-score__txt">Na temelju 1081 recenzije · <span class="nhd-ok">✓ Potvrđene kupnje</span></span>
    </div>
    <ul class="nhd-dist">
      <?php foreach ( $nhd_dist as $d ) : ?>
      <li>
        <span class="nhd-dist__lbl"><?php echo (int) $d[0]; ?> ★</span>
        <span class="nhd-dist__bar"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span>
        <span class="nhd-dist__pct"><?php echo (int) $d[1]; ?> % (<?php echo (int) $d[2]; ?>)</span>
      </li>
      <?php endforeach; ?>
    </ul>
    <div class="nhd-reviews">
      <?php foreach ( $nhd_reviews as $r ) : ?>
      <article class="nhd-card<?php echo $r['img'] ? ' nhd-card--img' : ' nhd-card--txt'; ?>">
        <?php if ( $r['img'] ) : ?><div class="nhd-card__img"><?php echo $nhd_img( $r['img'], 'Fotografija kupca: ' . $r['ime'] ); ?></div><?php endif; ?>
        <div class="nhd-card__body">
          <?php echo $nhd_stars( 5 ); ?>
          <h3 class="nhd-card__title"><?php echo esc_html( $r['naslov'] ); ?></h3>
          <p class="nhd-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nhd-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nhd-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-modalsweatshirt.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f). */
.nhd-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nhd-sec * { box-sizing: border-box; }
.nhd-tint { background: #f7f2ec; }
.nhd-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nhd-c { text-align: center; }
.nhd-sec h2, .nhd-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nhd-kicker, .nhd-copy p.nhd-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nhd-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #231d19; }
.nhd-h2 em { font-style: italic; color: #a9683f; }
.nhd-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nhd-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nhd-row2--rev .nhd-media { order: 2; }
.nhd-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); max-width: 520px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; }
.nhd-copy p { font-size: 16px; line-height: 1.7; color: #4a403a; margin: 0 0 14px; }
.nhd-copy p strong { color: #231d19; font-weight: 600; }
.nhd-copy p.nhd-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }

/* ikone */
.nhd-icons { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-top: 34px; }
.nhd-icon { background: #fff; border: 1px solid #ead9c9; border-radius: 10px; padding: 26px 18px 22px; text-align: center; box-shadow: 0 1px 2px rgba(40,25,15,.05); }
.nhd-sec:not(.nhd-tint) .nhd-icon { background: #f7f2ec; }
.nhd-sec img.nhd-icon__img { width: 76px; height: 76px; margin: 0 auto 14px; object-fit: contain; }
.nhd-icon__h { font-size: 16.5px; font-weight: 700; line-height: 1.35; margin: 0 0 8px; color: #231d19; }
.nhd-icon__p { font-size: 14.5px; line-height: 1.6; color: #5b4f47; margin: 0; }

/* ocjene */
.nhd-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nhd-stars__off { color: #e6ddd4; }
.nhd-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 24px; flex-wrap: wrap; }
.nhd-score__num { font-size: 28px; font-weight: 700; color: #231d19; }
.nhd-score .nhd-stars { font-size: 20px; }
.nhd-score__txt { font-size: 14.5px; color: #6b5f56; }
.nhd-score__txt strong { color: #231d19; }
.nhd-dist { list-style: none; margin: 0 auto 32px; padding: 0; max-width: 460px; }
.nhd-dist li { display: grid; grid-template-columns: 38px 1fr 92px; gap: 10px; align-items: center; margin: 0 0 8px; font-size: 14px; color: #231d19; }
.nhd-dist__lbl { font-weight: 600; white-space: nowrap; }
.nhd-dist__bar { display: block; height: 10px; border-radius: 6px; background: #eeddcd; overflow: hidden; }
.nhd-dist__bar span { display: block; height: 100%; background: #a9683f; border-radius: 6px; }
.nhd-dist__pct { color: #6b5f56; white-space: nowrap; }

/* mnenja */
.nhd-hl { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
.nhd-reviews { columns: 4; column-gap: 18px; }
.nhd-reviews > .nhd-card { break-inside: avoid; margin-bottom: 18px; }
.nhd-card { background: #fff; border: 1px solid #ead9c9; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.nhd-sec:not(.nhd-tint) .nhd-card { background: #f7f2ec; }
.nhd-card__img img { aspect-ratio: 3 / 4; object-fit: cover; }
.nhd-card__body { padding: 16px; }
.nhd-card--hl .nhd-card__body { padding: 22px 20px; }
.nhd-card__title { font-size: 15px; font-weight: 700; color: #231d19; margin: 8px 0 6px; line-height: 1.35; }
.nhd-card__txt { font-size: 14.5px; line-height: 1.6; color: #3b322c; margin: 0 0 10px; font-style: italic; }
.nhd-card__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; }
.nhd-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nhd-row2 { gap: 32px; }
  .nhd-icons { grid-template-columns: repeat(2, 1fr); }
  .nhd-reviews { columns: 2; }
}
@media (max-width: 749px) {
  .nhd-sec { padding: 42px 0; }
  .nhd-wrap { padding: 0 16px; }
  .nhd-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nhd-row2--rev .nhd-media { order: 0; }
  .nhd-icons { gap: 12px; margin-top: 24px; }
  .nhd-icon { padding: 18px 12px 16px; }
  .nhd-sec img.nhd-icon__img { width: 60px; height: 60px; }
  .nhd-hl { grid-template-columns: 1fr; gap: 12px; }
  .nhd-reviews { column-gap: 12px; }
  .nhd-reviews > .nhd-card { margin-bottom: 12px; }
  .nhd-card__body { padding: 12px; }
}
@media (max-width: 420px) {
  .nhd-reviews { columns: 1; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-hoodiedress .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nhd-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
