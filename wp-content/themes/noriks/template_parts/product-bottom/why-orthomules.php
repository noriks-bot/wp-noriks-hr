<?php
/**
 * product-bottom: NORIKS OrthoMules — ortopedske pletene natikače s remenom (orto-orthomules).
 * Original: bomre.com/products/tressa-orthopedic-mule-flats — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-sleepearplugs.php / why-hands.php), privzeta topla rjava paleta (#a9683f):
 *   1) opis + 3 lastnosti iz nakupne škatle        -> Lijepe i bez boli (slika ob besedilu)
 *   2) zavihek "Shipping Information"              -> Brza i sigurna dostava (ikona ob besedilu, NORIKS pogoji)
 *   3) zavihek "Returns & Refunds"                 -> Pravo na povrat u roku od 30 dana (ikona ob besedilu)
 *   4) "Trusted by Over 51,000+ Customers"         -> Kupci nam vjeruju (3 mnenja, število konkurenta izpuščeno -> 1081)
 *   5) "30-Day Money Back Guarantee"               -> 30 dana za povrat (slika z logotipom znamke nadomeščena s sliko izdelka)
 * Izpusceno: glava, pasica (60 % popusta, dostava nad 99 $), "You may also like", noga, seznam prevoznikov konkurenta.
 * Original nima FAQ in nima mnenj o izdelku — FAQ (reviews.php, $orthomules_faq) je sestavljen iz podatkov originala
 * (tablica velikosti, barve, lastnosti) in NORIKS pogojev; mnenja v auto_reviews/HR_orthomules.php.
 * Znamka konkurenta odstranjena (napis na vložku retuširan na 5 slikah, slika z logotipom izpuščena).
 * Slike: img/orthomules/ (nom-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nom      = get_template_directory_uri() . '/img/orthomules/';
$nom_path = get_template_directory() . '/img/orthomules/';
$nom_img  = function( $file, $alt ) use ( $nom, $nom_path ) {
  if ( ! $file || ! file_exists( $nom_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nom . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nom_stars = function( $n ) {
  return '<span class="nom-stars" aria-label="' . (int) $n . ' od 5 zvjezdica">' . str_repeat( '★', (int) $n ) . '<span class="nom-stars__off">' . str_repeat( '★', 5 - (int) $n ) . '</span></span>';
};

/* 4) mnenja z originala (prevedena; 3. mnenje se na originalu nanaša na drug izdelek — prilagojeno na natikače) */
$nom_quotes = array(
  array( 'ime' => 'Mia R.',    'tekst' => 'Korisnička podrška bila je izuzetno susretljiva! Danas je rijetkost naići na toliko brige.' ),
  array( 'ime' => 'Taylor M.', 'tekst' => 'Odlična kvaliteta i brza dostava! Sve je stiglo savršeno zapakirano.' ),
  array( 'ime' => 'Lena S.',   'tekst' => 'Natikače su bile pun pogodak — savršeno pristaju i imaju jedinstven dizajn!' ),
);

$nom_n = 0; // števec sekcij za izmenična ozadja
$nom_cls = function() use ( &$nom_n ) { $nom_n++; return ( $nom_n % 2 ) ? ' nom-tint' : ''; };
$nom_side = 0; // izmenične strani slika/besedilo
$nom_rev = function() use ( &$nom_side ) { $nom_side++; return ( $nom_side % 2 ) ? '' : ' nom-row2--rev'; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) OPIS — ortopedski uložak, pleteni gornji dio, remen -->
<section class="nom-sec<?php echo $nom_cls(); ?>">
  <div class="nom-wrap">
    <div class="nom-row2<?php echo $nom_rev(); ?>">
      <div class="nom-media nom-media--sq"><?php echo $nom_img( 'nom-g06-srebrna-na-nozi.webp', 'NORIKS OrthoMules srebrne pletene natikače s remenom na nozi' ); ?></div>
      <div class="nom-copy">
        <p class="nom-kicker">NORIKS OrthoMules</p>
        <h2 class="nom-h3">Lijep izgled <em>više ne znači bol</em></h2>
        <p><strong>Ortopedski uložak</strong> ispod stopala, <strong>prozračan pleteni gornji dio</strong> i remen u stilu Mary Jane koji <strong>zaista drži cipelu na nozi</strong> — lijep izgled više ne mora boljeti.</p>
        <ul class="nom-chips">
          <li><span aria-hidden="true">✓</span> Ortopedska potpora</li>
          <li><span aria-hidden="true">✓</span> Prozračni pleteni gornji dio</li>
          <li><span aria-hidden="true">✓</span> Remen koji drži cijeli dan</li>
        </ul>
        <p class="nom-big">Udobnost i stil u svakom koraku.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) DOSTAVA — NORIKS pogoji (namesto pogojev in prevoznikov konkurenta) -->
<section class="nom-sec<?php echo $nom_cls(); ?>">
  <div class="nom-wrap">
    <div class="nom-row2<?php echo $nom_rev(); ?>">
      <div class="nom-media"><div class="nom-icon"><?php echo $nom_img( 'nom-i-dostava.webp', 'Brza dostava' ); ?></div></div>
      <div class="nom-copy">
        <p class="nom-kicker">Informacije o dostavi</p>
        <h2 class="nom-h3">Brza i <em>sigurna dostava</em></h2>
        <p>Surađujemo s pouzdanim dostavnim službama kako bi svaka narudžba stigla <strong>brzo i sigurno</strong>. Uz pošiljku dobivate <strong>broj za praćenje</strong>, pa uvijek znate gdje je vaša narudžba.</p>
        <ul class="nom-points">
          <li><span class="nom-dot" aria-hidden="true">✓</span><span><strong>Besplatna dostava za narudžbe iznad 70 €</strong></span></li>
          <li><span class="nom-dot" aria-hidden="true">✓</span><span><strong>Pravo na povrat u roku od 30 dana</strong> od primitka narudžbe</span></li>
          <li><span class="nom-dot" aria-hidden="true">✓</span><span>Korisnička podrška rado će vam pomoći sa svim pitanjima</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 3) POVRAT — 30 dana -->
<section class="nom-sec<?php echo $nom_cls(); ?>">
  <div class="nom-wrap">
    <div class="nom-row2<?php echo $nom_rev(); ?>">
      <div class="nom-media"><div class="nom-icon"><?php echo $nom_img( 'nom-i-povrat.webp', 'Povrat i zamjena' ); ?></div></div>
      <div class="nom-copy">
        <p class="nom-kicker">Povrat i zamjena</p>
        <h2 class="nom-h3">Pravo na povrat <em>u roku od 30 dana</em></h2>
        <p>Imate <strong>30 dana od primitka narudžbe</strong> da zatražite povrat. Kako bi povrat bio prihvaćen, proizvod mora biti u stanju u kojem ste ga primili — <strong>nenošen i nekorišten</strong>, s etiketama i u originalnoj ambalaži.</p>
        <p class="nom-big">Kupujte bez brige.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) KUPCI NAM VJERUJU — mnenja z originala, število po NORIKS (1081) -->
<section class="nom-sec<?php echo $nom_cls(); ?>">
  <div class="nom-wrap">
    <p class="nom-kicker nom-c">Povjerenje kupaca</p>
    <h2 class="nom-h2 nom-c">Kupci nam <em>vjeruju</em></h2>
    <div class="nom-score">
      <span class="nom-score__num">4,8</span>
      <?php echo $nom_stars( 5 ); ?>
      <span class="nom-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <div class="nom-quotes">
      <?php foreach ( $nom_quotes as $q ) : ?>
      <article class="nom-card">
        <?php echo $nom_stars( 5 ); ?>
        <p class="nom-card__txt">„<?php echo esc_html( $q['tekst'] ); ?>”</p>
        <p class="nom-card__name">— <?php echo esc_html( $q['ime'] ); ?> <span class="nom-ok">✓ Potvrđena kupnja</span></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5) 30 DANA ZA POVRAT NOVCA — slika izdelka ob besedilu (namesto slike z logotipom znamke) -->
<section class="nom-sec<?php echo $nom_cls(); ?>">
  <div class="nom-wrap">
    <div class="nom-row2<?php echo $nom_rev(); ?>">
      <div class="nom-media nom-media--sq"><?php echo $nom_img( 'nom-g11-svijetlosmeda-na-nozi.webp', 'NORIKS OrthoMules svijetlosmeđe pletene natikače na nozi' ); ?></div>
      <div class="nom-copy">
        <p class="nom-kicker">Bez rizika</p>
        <h2 class="nom-h3">Jamstvo povrata novca <em>u roku od 30 dana</em></h2>
        <p>Predomislili ste se? Bez brige. Uživajte u <strong>jednostavnom povratu</strong> — samo nam vratite proizvod i vratit ćemo vam novac.</p>
        <p class="nom-trust"><span>Pravo na povrat u roku od 30 dana</span><span>Besplatna dostava za narudžbe iznad 70 €</span><span>Plaćanje pouzećem</span></p>
      </div>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-sleepearplugs.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Privzeta topla rjava paleta NORIKS (#a9683f). */
.nom-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nom-sec * { box-sizing: border-box; }
.nom-tint { background: #f7f2ec; }
.nom-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nom-c { text-align: center; }
.nom-sec h2, .nom-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nom-kicker, .nom-copy p.nom-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nom-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #231d19; }
.nom-h2 em, .nom-h3 em { font-style: italic; color: #a9683f; }
.nom-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.nom-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nom-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nom-row2--rev .nom-media { order: 2; }
.nom-media img { object-fit: cover; border-radius: 10px; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.nom-media--sq img { aspect-ratio: 1 / 1; max-width: 540px; margin: 0 auto; }
.nom-icon { max-width: 540px; aspect-ratio: 16 / 10; margin: 0 auto; background: #fff; border: 1px solid #ecdfd3; border-radius: 10px;
  display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 4px rgba(40,25,15,.05), 0 14px 40px rgba(40,25,15,.10); }
.nom-tint .nom-icon { background: #fff; }
.nom-sec:not(.nom-tint) .nom-icon { background: #f7f2ec; }
.nom-media .nom-icon img { width: 46%; max-width: 230px; box-shadow: none; border-radius: 0; object-fit: contain; }
.nom-copy p { font-size: 16px; line-height: 1.7; color: #4f443d; margin: 0 0 14px; }
.nom-copy p strong { color: #231d19; font-weight: 600; }
.nom-copy p.nom-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }
.nom-chips { list-style: none; margin: 0 0 16px; padding: 0; display: flex; flex-wrap: wrap; gap: 8px; }
.nom-chips li { display: inline-flex; align-items: center; gap: 7px; background: #fff; border: 1px solid #ecdfd3; border-radius: 999px; padding: 7px 14px 7px 8px; font-size: 14.5px; font-weight: 600; color: #231d19; }
.nom-chips li span { width: 21px; height: 21px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 12px; font-weight: 800; line-height: 21px; text-align: center; }
.nom-points { list-style: none; margin: 0 0 16px; padding: 0; }
.nom-points li { font-size: 16px; line-height: 1.6; color: #4f443d; margin: 0 0 10px; display: flex; gap: 12px; align-items: flex-start; }
.nom-points li strong { color: #231d19; font-weight: 600; }
.nom-dot { flex: 0 0 22px; width: 22px; height: 22px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 12px; font-weight: 800; line-height: 22px; text-align: center; margin-top: 2px; }

/* mnenja */
.nom-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nom-stars__off { color: #e6dbd2; }
.nom-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.nom-score__num { font-size: 30px; font-weight: 700; color: #231d19; }
.nom-score .nom-stars { font-size: 20px; }
.nom-score__txt { font-size: 14.5px; color: #6b625a; }
.nom-quotes { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 18px; align-items: stretch; max-width: 1040px; margin: 0 auto; }
.nom-card { background: #fff; border: 1px solid #ecdfd3; border-radius: 10px; padding: 20px 20px 18px; }
.nom-card__txt { font-size: 15.5px; line-height: 1.6; color: #3a302a; margin: 10px 0 12px; font-style: italic; }
.nom-card__name { font-size: 14px; font-weight: 600; color: #231d19; margin: 0; }
.nom-ok { color: #2f9e5f; font-weight: 600; font-size: 12.5px; margin-left: 4px; font-style: normal; }

/* NORIKS pogoji */
.nom-trust { display: flex; flex-wrap: wrap; gap: 10px 22px; margin: 18px 0 0 !important; font-size: 14px !important; font-weight: 600; color: #6b625a !important; }
.nom-trust span { position: relative; padding-left: 20px; }
.nom-trust span::before { content: "\2713"; position: absolute; left: 0; color: #a9683f; }

@media (max-width: 989px) {
  .nom-row2 { gap: 32px; }
}
@media (max-width: 749px) {
  .nom-sec { padding: 42px 0; }
  .nom-wrap { padding: 0 16px; }
  .nom-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nom-row2--rev .nom-media { order: 0; }
  .nom-quotes { grid-template-columns: 1fr; gap: 14px; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-orthomules .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nom-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
