<?php
/**
 * product-bottom: NORIKS FleeceShawl — mekani šal-ogrtač od flisa (orto-fleeceshawl).
 * Original: thefleececompany.com/products/the-fleece-drape-shawl — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-silkboxers.php / why-hands.php), topel rjav poudarek (#a9683f, karamel/bež flis):
 *   1) "Chic Comfort with The Fleece Drape Shawl" -> Šik udobnost uz NORIKS FleeceShawl (slika ob besedilu)
 *   2) "Here's Why Our Shawls Are the Best" -> Evo zašto su naši šalovi najbolji (slika ob besedilu)
 *   3) "The Fleece Guarantee" -> NORIKS jamstvo (slika z znacko prevedena: 30 dana za povrat; pogoji po NORIKS:
 *        100-day guarantee -> 30 dana za povrat, Fast tracked U.S. shipping -> besplatna dostava iznad 70 €)
 *   4) "Our Customers Speaking | Avg Rating: 4.8" -> Naši kupci govore: 6 prevedenih mnenj, prosječna ocjena 4,8
 *   5) "Customer Reviews" (444) -> Recenzije kupaca: 1081 recenzija, razdelitev zvezdic (81 % / 19 %) skalirana na 692, 8 mnenj
 * FAQ (originala nima; iz harmonik originala Care & Details / Size / Shipping & Returns in opisa) je v reviews.php
 * ($fleeceshawl_faq), mnenja v auto_reviews/HR_fleeceshawl.php, opis in nega v standardnih harmonikah (meta.php).
 * Izpusceno: glava, pasice (EARLY HALLOWEEN SALE, odstevalnik, "going viral"), ikone USPS dostave, noga. Slike: img/fleeceshawl/ (nfs-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nfs      = get_template_directory_uri() . '/img/fleeceshawl/';
$nfs_path = get_template_directory() . '/img/fleeceshawl/';
$nfs_img  = function( $file, $alt ) use ( $nfs, $nfs_path ) {
  if ( ! $file || ! file_exists( $nfs_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nfs . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nfs_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nfs-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nfs-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 4) "Our Customers Speaking" (prevedeno, imena po spolu izvirnika) */
$nfs_govore = array(
  array( 'ime' => 'Ema R.',    'tekst' => 'Obožavam koliko je ovaj šal lagan, a ipak topao. Savršen je za slojevito odijevanje u uredu, a dovoljno elegantan i za večeru.' ),
  array( 'ime' => 'Jelena D.', 'tekst' => 'Tkanina je nevjerojatno mekana i prekrasno pada. Svaki put kad ga nosim, dobijem nekoliko komplimenata.' ),
  array( 'ime' => 'Hana M.',   'tekst' => 'Grije, a nije glomazan, pa je idealan za putovanja. Lako ga spakiram u torbu i uvijek izgleda šik kad ga prebacim preko sebe.' ),
  array( 'ime' => 'Ivana K.',  'tekst' => 'Bojala sam se da će biti težak, ali tako je prozračan i udoban. Kroj jako laska figuri i ide uz sve.' ),
  array( 'ime' => 'Elena',     'tekst' => 'Iskreno, postao mi je omiljeni komad. Bilo da sam kod kuće, obavljam obveze ili izlazim, uvijek djeluje dotjerano i ušuškano.' ),
  array( 'ime' => 'Marija',    'tekst' => 'Kvaliteta je nadmašila moja očekivanja. Šavovi i završna obrada daju dojam puno skupljeg komada. Doista bezvremenski.' ),
);

/* 5) "Customer Reviews" (prevedeno; stevilke po NORIKS: 1081, zvezdice skalirane na 692) */
$nfs_dist = array(
  array( 5, 81, 560 ),
  array( 4, 19, 131 ),
  array( 3, 0, 1 ),
  array( 2, 0, 0 ),
  array( 1, 0, 0 ),
);
$nfs_rv = array(
  array( 'ime' => 'Jakov B.',    'z' => 5, 'tekst' => 'Najprije me oduševila mekoća. Mekan, ugodno topao, jednostavan.' ),
  array( 'ime' => 'Iva C.',      'z' => 5, 'tekst' => 'Sve u svemu, jako sam zadovoljna. Dovoljno grije za večer uz film, a nije pretežak.' ),
  array( 'ime' => 'Eleonora H.', 'z' => 5, 'tekst' => 'Baš mi je drago što sam ga kupila – super ugodno grije.' ),
  array( 'ime' => 'Edi F.',      'z' => 4, 'tekst' => 'Tekstura je stvarno lijepa. Ovo je komad koji vam tiho postane dio svakodnevice. Najprije sam ga isprobao na kauču, a onda sam ga počeo stalno držati pri ruci. Nije krut, laska figuri i nema onaj nezgrapan, težak osjećaj kao neki šalovi.' ),
  array( 'ime' => 'Antun P.',    'z' => 5, 'tekst' => 'Stvarno jako lijep. Baršunasto mekani komadi ponekad na kraju izgledaju bezoblično, ali ovaj pada ljepše nego što sam očekivao. Nije krut, odličan je za dane s propuhom i općenito izgleda vrlo nosivo.' ),
  array( 'ime' => 'Eva V.',      'z' => 5, 'tekst' => 'Na kraju se pokazao kao odlična kupnja. Dovoljno grije za večernje šetnje, a nije pretežak.' ),
  array( 'ime' => 'Ana P.',      'z' => 5, 'tekst' => 'Stvarno jako lijep. Vrlo udoban na ramenima i djeluje pomalo otmjeno.' ),
  array( 'ime' => 'Robert F.',   'z' => 5, 'tekst' => 'Ugodno me iznenadio. Dobar spoj udobnosti i izgleda, što nije uvijek lako pronaći.' ),
);

$nfs_n = 0; // števec sekcij za izmenična ozadja
$nfs_cls = function() use ( &$nfs_n ) { $nfs_n++; return ( $nfs_n % 2 ) ? ' nfs-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) ŠIK UDOBNOST ("Chic Comfort with The Fleece Drape Shawl") — slika ob besedilu -->
<section class="nfs-sec<?php echo $nfs_cls(); ?>">
  <div class="nfs-wrap">
    <div class="nfs-row2">
      <div class="nfs-media"><?php echo $nfs_img( 'nfs-s1-sik-udobnost.webp', 'Bež šal-ogrtač od flisa na vješalici' ); ?></div>
      <div class="nfs-copy">
        <p class="nfs-kicker">Elegancija i udobnost</p>
        <h2 class="nfs-h3">Šik udobnost uz <em>NORIKS FleeceShawl</em></h2>
        <p>NORIKS FleeceShawl obavija vas <strong>laganom toplinom i elegancijom</strong> već od prvog nošenja.</p>
        <p>Izrađen od mekanih, vrhunskih materijala, prirodno pada preko ramena i pruža <strong>prozračnu udobnost</strong> uz dotjeran izgled.</p>
        <p class="nfs-big">Svestran dizajn čini ga savršenim pratiteljem za svaku priliku.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) ZAŠTO SU NAŠI ŠALOVI NAJBOLJI ("Here's Why Our Shawls Are the Best") — slika ob besedilu -->
<section class="nfs-sec<?php echo $nfs_cls(); ?>">
  <div class="nfs-wrap">
    <div class="nfs-row2 nfs-row2--rev">
      <div class="nfs-media"><?php echo $nfs_img( 'nfs-s2-najbolji-sal.webp', 'Detalj čvora na svijetlosivom šalu od flisa' ); ?></div>
      <div class="nfs-copy">
        <p class="nfs-kicker">Zašto baš naš šal</p>
        <h2 class="nfs-h3">Evo zašto su naši šalovi <em>najbolji</em></h2>
        <p>Izrađen od <strong>raskošno mekane tkanine</strong> koja je na dodir jednako lagana kao što i izgleda.</p>
        <p>Prozračna tkanina <strong>grije vas bez pregrijavanja</strong>, a bezvremenski pad čini ga savršenim za svaku priliku.</p>
        <p class="nfs-big">Doživite svakodnevnu eleganciju uz šal stvoren da budete šik i udobni gdje god krenete.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) NORIKS JAMSTVO ("The Fleece Guarantee") — slika (značka prevedena) ob besedilu, pogoji po NORIKS -->
<section class="nfs-sec<?php echo $nfs_cls(); ?>">
  <div class="nfs-wrap">
    <div class="nfs-row2">
      <div class="nfs-media"><?php echo $nfs_img( 'nfs-s3-jamstvo-hr.webp', 'NORIKS jamstvo zadovoljstva – 30 dana za povrat' ); ?></div>
      <div class="nfs-copy">
        <p class="nfs-kicker">Bez brige</p>
        <h2 class="nfs-h3">NORIKS <em>jamstvo</em></h2>
        <p>Nećemo stati dok ne budete <strong>potpuno zadovoljni</strong> i nevjerojatno ušuškani u svom šalu.</p>
        <ul class="nfs-list">
          <li>Pravo na povrat u roku od 30 dana</li>
          <li>Besplatna dostava za narudžbe iznad 70 €</li>
          <li>Jednostavni povrati i zamjene</li>
        </ul>
        <p class="nfs-big">Tu smo za vas, uvijek.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) NAŠI KUPCI GOVORE ("Our Customers Speaking | Avg Rating: 4.8") -->
<section class="nfs-sec<?php echo $nfs_cls(); ?>">
  <div class="nfs-wrap">
    <p class="nfs-kicker nfs-c">Recenzije</p>
    <h2 class="nfs-h2 nfs-c">Naši kupci <em>govore</em></h2>
    <div class="nfs-score">
      <span class="nfs-score__txt">Prosječna ocjena:</span>
      <span class="nfs-score__num">4,8</span>
      <?php echo $nfs_stars( 5 ); ?>
    </div>
    <div class="nfs-reviews nfs-reviews--3">
      <?php foreach ( $nfs_govore as $r ) : ?>
      <article class="nfs-card">
        <div class="nfs-card__body">
          <?php echo $nfs_stars( 5 ); ?>
          <p class="nfs-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nfs-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nfs-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5) RECENZIJE KUPACA ("Customer Reviews", 444 -> 1081 po NORIKS) — razdelitev zvezdic + mnenja -->
<section class="nfs-sec<?php echo $nfs_cls(); ?>">
  <div class="nfs-wrap">
    <p class="nfs-kicker nfs-c">Recenzije kupaca</p>
    <h2 class="nfs-h2 nfs-c">Kupci <em>obožavaju</em> svoj NORIKS FleeceShawl</h2>
    <div class="nfs-score">
      <span class="nfs-score__num">4,8 / 5</span>
      <?php echo $nfs_stars( 5 ); ?>
      <span class="nfs-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <ul class="nfs-dist">
      <?php foreach ( $nfs_dist as $d ) : ?>
      <li>
        <span class="nfs-dist__lbl"><?php echo (int) $d[0]; ?> ★</span>
        <span class="nfs-dist__bar"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span>
        <span class="nfs-dist__pct"><?php echo (int) $d[1]; ?> % (<?php echo (int) $d[2]; ?>)</span>
      </li>
      <?php endforeach; ?>
    </ul>
    <div class="nfs-reviews">
      <?php foreach ( $nfs_rv as $r ) : ?>
      <article class="nfs-card">
        <div class="nfs-card__body">
          <?php echo $nfs_stars( $r['z'] ); ?>
          <p class="nfs-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nfs-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nfs-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-silkboxers.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Topel rjav poudarek po barvi izdelka (#a9683f, karamel flis). */
.nfs-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #2b211c; background: #fff; }
.nfs-sec * { box-sizing: border-box; }
.nfs-tint { background: #f8f1ea; }
.nfs-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nfs-c { text-align: center; }
.nfs-sec h2, .nfs-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nfs-kicker, .nfs-copy p.nfs-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nfs-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #2b211c; }
.nfs-h2 em, .nfs-h3 em { font-style: italic; color: #a9683f; }
.nfs-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #2b211c; }
.nfs-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nfs-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nfs-row2--rev .nfs-media { order: 2; }
.nfs-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(60,35,15,.05), 0 14px 40px rgba(60,35,15,.10); max-width: 520px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; }
.nfs-copy p { font-size: 16px; line-height: 1.7; color: #514238; margin: 0 0 14px; }
.nfs-copy p strong { color: #2b211c; font-weight: 600; }
.nfs-copy p.nfs-big { font-size: 19px; font-weight: 700; color: #2b211c; line-height: 1.45; margin-top: 6px; }
.nfs-list { list-style: none; margin: 0 0 16px; padding: 0; }
.nfs-list li { position: relative; padding-left: 30px; margin: 0 0 9px; font-size: 15.5px; line-height: 1.55; color: #3d3029; }
.nfs-list li::before { content: "✓"; position: absolute; left: 0; top: 1px; width: 20px; height: 20px; border-radius: 50%; background: #a9683f; color: #fff; font-size: 11.5px; font-weight: 800; line-height: 20px; text-align: center; }

/* ocjene */
.nfs-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nfs-stars__off { color: #e8ddd3; }
.nfs-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.nfs-score__num { font-size: 26px; font-weight: 700; color: #2b211c; }
.nfs-score .nfs-stars { font-size: 20px; }
.nfs-score__txt { font-size: 14.5px; color: #6f6056; }

/* razdelitev zvezdic */
.nfs-dist { list-style: none; margin: 0 auto 32px; padding: 0; max-width: 460px; }
.nfs-dist li { display: grid; grid-template-columns: 38px 1fr 92px; gap: 10px; align-items: center; margin: 0 0 8px; font-size: 14px; color: #3d3029; }
.nfs-dist__lbl { font-weight: 600; white-space: nowrap; }
.nfs-dist__bar { display: block; height: 10px; border-radius: 6px; background: #eadcd0; overflow: hidden; }
.nfs-dist__bar span { display: block; height: 100%; background: #a9683f; border-radius: 6px; }
.nfs-dist__pct { color: #6f6056; white-space: nowrap; }

/* mnenja */
.nfs-reviews { columns: 4; column-gap: 18px; margin-top: 12px; } /* masonry: kartice razlicnih visin brez praznin */
.nfs-reviews--3 { columns: 3; }
.nfs-reviews > .nfs-card { break-inside: avoid; margin-bottom: 18px; }
.nfs-card { background: #fff; border: 1px solid #ead9ca; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.nfs-sec:not(.nfs-tint) .nfs-card { background: #f8f1ea; }
.nfs-card__body { padding: 16px; }
.nfs-card__txt { font-size: 14.5px; line-height: 1.6; color: #3d3029; margin: 8px 0 10px; font-style: italic; }
.nfs-card__name { font-size: 13.5px; font-weight: 600; color: #2b211c; margin: 0; }
.nfs-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nfs-row2 { gap: 32px; }
  .nfs-reviews, .nfs-reviews--3 { columns: 2; }
}
@media (max-width: 749px) {
  .nfs-sec { padding: 42px 0; }
  .nfs-wrap { padding: 0 16px; }
  .nfs-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nfs-row2--rev .nfs-media { order: 0; }
  .nfs-reviews { column-gap: 12px; }
  .nfs-reviews > .nfs-card { margin-bottom: 12px; }
  .nfs-card__body { padding: 12px; }
}
@media (max-width: 420px) {
  .nfs-reviews, .nfs-reviews--3 { columns: 1; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-fleeceshawl .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nfs-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
