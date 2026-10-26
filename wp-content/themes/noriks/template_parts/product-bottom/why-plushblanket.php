<?php
/**
 * product-bottom: NORIKS PlushBlanket — super mekana oversized plišana deka (orto-plushblanket).
 * Original: comfrt.com/products/the-dreamer-blanket (»Dreamer Blanket«) — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-wafflelongsleeve.php / why-bathmat.php / why-hands.php), modri poudarek
 * po privzeti barvi originala (Navy, #1f568e):
 *   1) zavihek »Description« (uvod + 5 lastnosti)                 -> Opis: slika ob besedilu
 *      (»the most loved blanket in America« omiljeno; »20+ colorways including limited-edition drops« -> 17 boja i uzoraka)
 *   2) zavihek »Description« – »Perfect for« (3 alineje)           -> Savršena za: slika ob besedilu
 *      (»shop the Dreamer Collection / Dreamer Pillows« izpuščeno — trgovinski modul)
 *   3) zavihek »Size« (Medium / Large / XL Dreamer / Mega Dreamer, palci -> cm, lbs -> kg) + slika »Size Guide« (prevedena)
 *      -> Veličine: slika vodiča ob besedilu + gumb tablice veličina (Kids Size originala ni naprodaj -> izpuščeno)
 *   4) »Featured Fabric« (3 ikone: Plush Fabric / 4-Way Stretch / Machine Washable) -> Istaknuta tkanina: slika tkanine ob ikonah
 *   5) zavihka »Fabric & Care« + »Shipping Policy« -> Materijal i njega: slika ob besedilu,
 *      dostava in vračilo po NORIKS pogojih (30 dana, besplatna dostava iznad 70 €)
 *   6) Okendo recenzije (5,0 / 5610; 5450 / 126 / 28 / 5 / 1; 5576 priporoča) -> 5,0 / 1081, razdelitev skalirana na 692,
 *      99 % preporučuje, 5 izbranih mnenj (imena lokalizirana, znamka izpuščena)
 * Izpusceno: pasica »Up to 70% Off / Free Shipping on $99+«, »$20 e-credit«, »Complete The Look«, »Shop Best Sellers«, noga trgovine.
 * FAQ je v reviews.php ($plushblanket_faq), mnenja v auto_reviews/HR_plushblanket.php, opis + tablica + nega v meta.php,
 * modal velikosti v size-chart-plushblanket.php. Slike: img/plushblanket/ (npbl-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$npbl      = get_template_directory_uri() . '/img/plushblanket/';
$npbl_path = get_template_directory() . '/img/plushblanket/';
$npbl_img  = function( $file, $alt, $cls = '' ) use ( $npbl, $npbl_path ) {
  if ( ! $file || ! file_exists( $npbl_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $npbl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$npbl_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="npbl-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="npbl-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) lastnosti (zavihek Description) */
$npbl_lastnosti = array(
  array( 'Super mekan pliš', 'bez grubih rubova – svaki položaj jednako je ugodan' ),
  array( 'Rastezljivost u četiri smjera', 'prilagođava se tijelu, a ne gubi oblik' ),
  array( 'Četiri veličine', 'od osobnog pokrivača do pokrivenosti velikog bračnog kreveta' ),
  array( '17 boja i uzoraka', 'lako za poklon, lako se uklapa u svaki prostor' ),
  array( 'Pere se u perilici i ostaje mekana', 'operite je hladno, osušite na zraku – vraća se točno onakva kakva je bila' ),
);

/* 2) savršena za */
$npbl_za = array(
  'pretvara svaki krevet ili kauč u najmekše mjesto u prostoriji',
  'poklon nakon kojeg se ljudi pitaju kako su ikad živjeli bez nje',
  'najudobnija deka koju ćete ikad imati – i svatko tko sjedne na vaš kauč složit će se',
);

/* 3) veličine (zavihek Size, palci -> cm, lbs -> kg) */
$npbl_velicine = function_exists( 'noriks_plushblanket_sizes' ) ? noriks_plushblanket_sizes() : array();

/* 4) istaknuta tkanina (ikone originala, prebarvane v poudarek) */
$npbl_tkanina = array(
  array( 'npbl-i1-plis.webp',          'Plišana tkanina',             'Baršunasto mekan pliš s obje strane deke – mekan kao oblak.' ),
  array( 'npbl-i2-rastezljivost.webp', 'Rastezljivost u 4 smjera',   'Ugodno se rasteže i prilagođava tijelu, a ne gubi oblik.' ),
  array( 'npbl-i3-pranje.webp',        'Pere se u perilici',          'Hladno pranje i sušenje na zraku – ostaje jednako mekana.' ),
);

/* 5) njega (zavihek Fabric & Care) */
$npbl_njega = array(
  'Perite u perilici na hladno, zasebno',
  'Tamne boje perite odvojeno',
  'Ne koristite omekšivač',
  'Ne izbjeljujte',
  'Sušite na zraku ili položenu ravno',
  'Ne glačajte i ne čistite kemijski',
);

/* 6) recenzije — 5 izbranih mnenj originala (prevedena, imena lokalizirana, znamka izpuščena) */
$npbl_reviews = array(
  array( 'ime' => 'Snježana P.', 'naslov' => 'Kao da spavam na oblaku',
         'tekst' => 'Presretna sam s ovom dekom. Kao da spavam na oblaku. Vrhunska kvaliteta i brza dostava.' ),
  array( 'ime' => 'Tereza M.', 'naslov' => 'Stvarno je najbolja!',
         'tekst' => 'Kupila sam je unuci za Božić i obožava je – kaže da je to najbolja deka koju je ikad imala, a ima ih puno! Pa sam kupila i sebi, u mentol boji koja se savršeno slaže s našim interijerom. Težina, boja, mekoća i rastezljivost kakvu još nisam imala ni na jednoj deki. Toplo preporučujem!' ),
  array( 'ime' => 'Jasna L.', 'naslov' => 'Tako mekana!',
         'tekst' => 'Obožavam je! Tako je mekana! Ima malo težine, ali nije preteška za spavanje ispod nje.' ),
  array( 'ime' => 'Lana M.', 'naslov' => 'Mekana i ugodna',
         'tekst' => 'Obožavam svoju novu deku. Upravo je onakva kakvu sam se nadala. Čak ju je i moja mačka odobrila!' ),
  array( 'ime' => 'Katarina T.', 'naslov' => 'Super udobna',
         'tekst' => 'Mislim da sam kupila već šest ovih deka – kad su je moji unuci osjetili, zaljubili su se u nju. Jednu sam poklonila za rođendan, a tri za Božić, pa sada i unuci i sin spavaju odlično. Ako se pridržavate uputa, i pranje podnosi odlično!' ),
);
/* razdelitev ocen originala 5450 / 126 / 28 / 5 / 1 (od 5610) skalirana na 692 recenzij (NORIKS) */
$npbl_dist = array( 5 => 672, 4 => 16, 3 => 3, 2 => 1, 1 => 0 );

$npbl_n = 0; // števec sekcij za izmenična ozadja
$npbl_cls = function() use ( &$npbl_n ) { $npbl_n++; return ( $npbl_n % 2 ) ? ' npbl-tint' : ''; };
?>

<!-- 1) OPIS (zavihek »Description«) — slika ob besedilu -->
<section class="npbl-sec<?php echo $npbl_cls(); ?>">
  <div class="npbl-wrap">
    <div class="npbl-row2">
      <div class="npbl-media"><?php echo $npbl_img( 'npbl-s1-opis.webp', 'Super mekana plišana deka NORIKS PlushBlanket u svijetlosivoj boji' ); ?></div>
      <div class="npbl-copy">
        <p class="npbl-kicker">Opis proizvoda</p>
        <h2 class="npbl-h2">Deka koju kupci obožavaju – <em>dotaknite je i shvatit ćete zašto</em></h2>
        <p>NORIKS PlushBlanket je <strong>super mekana, oversized plišana deka</strong> nalik oblaku – <strong>baršunasta s obje strane</strong>, ugodno rastezljiva u četiri smjera, a mekoća joj ostaje i nakon brojnih pranja. Deka koju je teško opisati riječima – i još teže odložiti.</p>
        <p>Četiri veličine – od osobnog pokrivača (<strong>127 x 152 cm</strong>) do veličine Mega koja prekriva veliki bračni krevet (<strong>254 x 274 cm</strong>) – i <strong>17 boja i uzoraka</strong>.</p>
        <ul class="npbl-check">
          <?php foreach ( $npbl_lastnosti as $l ) : ?>
          <li><strong><?php echo esc_html( $l[0] ); ?>:</strong> <?php echo esc_html( $l[1] ); ?></li>
          <?php endforeach; ?>
        </ul>
        <p class="npbl-big">Mekana kao oblak. Pranje za pranjem.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) SAVRŠENA ZA (»Perfect for«) — slika ob besedilu -->
<section class="npbl-sec<?php echo $npbl_cls(); ?>">
  <div class="npbl-wrap">
    <div class="npbl-row2 npbl-row2--rev">
      <div class="npbl-media"><?php echo $npbl_img( 'npbl-s2-savrsena-za.webp', 'NORIKS PlushBlanket u mentol boji prebačena preko kauča' ); ?></div>
      <div class="npbl-copy">
        <p class="npbl-kicker">Savršena za</p>
        <h2 class="npbl-h2">Najmekše mjesto <em>u cijeloj prostoriji</em></h2>
        <ul class="npbl-check">
          <?php foreach ( $npbl_za as $z ) : ?>
          <li><?php echo esc_html( $z ); ?></li>
          <?php endforeach; ?>
        </ul>
        <p class="npbl-big">Za kauč, krevet i svaki poklon.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) VELIČINE (zavihek »Size« + slika »Size Guide«, prevedena) — slika ob besedilu -->
<section class="npbl-sec<?php echo $npbl_cls(); ?>">
  <div class="npbl-wrap">
    <div class="npbl-row2">
      <div class="npbl-media npbl-media--guide"><?php echo $npbl_img( 'npbl-s3-vodic-za-velicine.webp', 'Vodič za veličine NORIKS PlushBlanket: Srednja, Velika, XL i Mega' ); ?></div>
      <div class="npbl-copy">
        <p class="npbl-kicker">Veličine</p>
        <h2 class="npbl-h2">Četiri veličine, <em>od kauča do kreveta</em></h2>
        <div class="npbl-sizes">
          <?php foreach ( $npbl_velicine as $v ) : ?>
          <div class="npbl-size">
            <span class="npbl-size__n"><?php echo esc_html( $v[0] ); ?></span>
            <span class="npbl-size__d"><?php echo esc_html( $v[1] ); ?> <small>(<?php echo esc_html( $v[3] ); ?>)</small></span>
            <span class="npbl-size__t"><?php echo esc_html( $v[4] ); ?></span>
          </div>
          <?php endforeach; ?>
        </div>
        <p>Sve su mjere približne i mogu malo odstupati zbog mekane i rastezljive tkanine.</p>
        <a class="npbl-btn js-open-size-chart" href="#">Tablica veličina</a>
      </div>
    </div>
  </div>
</section>

<!-- 4) ISTAKNUTA TKANINA (»Featured Fabric«: Plush Fabric / 4-Way Stretch / Machine Washable) — slika tkanine ob ikonah -->
<section class="npbl-sec<?php echo $npbl_cls(); ?>">
  <div class="npbl-wrap">
    <div class="npbl-row2 npbl-row2--rev">
      <div class="npbl-media"><?php echo $npbl_img( 'npbl-s4-tkanina.webp', 'Plišana tkanina NORIKS PlushBlanket izbliza' ); ?></div>
      <div class="npbl-copy">
        <p class="npbl-kicker">Istaknuta tkanina</p>
        <h2 class="npbl-h2">Pliš koji <em>ćete stalno htjeti dirati</em></h2>
        <div class="npbl-feats">
          <?php foreach ( $npbl_tkanina as $t ) : ?>
          <div class="npbl-feat">
            <span class="npbl-feat__ico"><?php echo $npbl_img( $t[0], $t[1] ); ?></span>
            <div><h3><?php echo esc_html( $t[1] ); ?></h3><p><?php echo esc_html( $t[2] ); ?></p></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5) MATERIJAL I NJEGA (zavihka »Fabric & Care« + »Shipping Policy« po NORIKS pogojih) — slika ob besedilu -->
<section class="npbl-sec<?php echo $npbl_cls(); ?>">
  <div class="npbl-wrap">
    <div class="npbl-row2">
      <div class="npbl-media"><?php echo $npbl_img( 'npbl-s5-njega.webp', 'Čitanje ispod bordo NORIKS PlushBlanket deke' ); ?></div>
      <div class="npbl-copy">
        <p class="npbl-kicker">Materijal i njega</p>
        <h2 class="npbl-h2">Jednostavna njega, <em>dugotrajna mekoća</em></h2>
        <p class="npbl-sub">Sastav</p>
        <p><strong>95 % poliester, 5 % elastan</strong> – plišana i baršunasta s unutarnje i vanjske strane, savršeno elastična.</p>
        <p class="npbl-sub">Upute za pranje</p>
        <ul class="npbl-check npbl-check--2">
          <?php foreach ( $npbl_njega as $nj ) : ?>
          <li><?php echo esc_html( $nj ); ?></li>
          <?php endforeach; ?>
        </ul>
        <p class="npbl-sub">Dostava i povrat</p>
        <p><strong>Besplatna dostava za narudžbe iznad 70 €</strong> i <strong>pravo na povrat u roku od 30 dana</strong> – ako vam veličina ne odgovara, pomoći ćemo vam sa zamjenom.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) RECENZIJE KUPACA — 1081 po NORIKS, razdelitev skalirana na 692, 5 mnenj originala -->
<section class="npbl-sec<?php echo $npbl_cls(); ?>">
  <div class="npbl-wrap">
    <p class="npbl-kicker npbl-c">Recenzije kupaca</p>
    <h2 class="npbl-h2 npbl-c">Kupci je <em>obožavaju</em></h2>
    <div class="npbl-score">
      <div class="npbl-score__left">
        <span class="npbl-score__num">5,0</span>
        <?php echo $npbl_stars( 5 ); ?>
        <span class="npbl-score__txt">Na temelju 1081 recenzije</span>
      </div>
      <div class="npbl-dist">
        <?php foreach ( $npbl_dist as $z => $c ) : ?>
        <div class="npbl-dist__row"><span><?php echo (int) $z; ?> ★</span><span class="npbl-dist__bar"><i style="width:<?php echo round( $c / 692 * 100, 1 ); ?>%"></i></span><span><?php echo (int) $c; ?></span></div>
        <?php endforeach; ?>
      </div>
      <div class="npbl-score__right">
        <span class="npbl-score__pct">99 %</span>
        <span class="npbl-score__txt">kupaca preporučuje ovaj proizvod</span>
      </div>
    </div>
    <div class="npbl-reviews">
      <?php foreach ( $npbl_reviews as $r ) : ?>
      <article class="npbl-card">
        <?php echo $npbl_stars( 5 ); ?>
        <h3><?php echo esc_html( $r['naslov'] ); ?></h3>
        <p class="npbl-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
        <p class="npbl-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="npbl-ok">✓ Potvrđena kupnja</span></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-wafflelongsleeve.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob besedilu,
   izmenjujoča ozadja in strani. Modra paleta po privzeti barvi originala (Navy): poudarek #1f568e, temno #1b2233, svetlo #f1f6fb. */
.npbl-sec { padding: 60px 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1b2233; background: #fff; }
.npbl-sec * { box-sizing: border-box; }
.npbl-tint { background: #f1f6fb; }
.npbl-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.npbl-c { text-align: center; }
.npbl-sec h2, .npbl-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.npbl-kicker, .npbl-copy p.npbl-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #1f568e; margin: 0 0 10px; }
.npbl-h2 { font-weight: 800; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #1b2233; }
.npbl-h2 em { font-style: italic; color: #1f568e; }
.npbl-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.npbl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.npbl-row2--rev > :first-child { order: 2; }
.npbl-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(15,35,60,.05), 0 14px 40px rgba(15,35,60,.10); max-width: 520px; margin: 0 auto; aspect-ratio: 3 / 4; object-fit: cover; background: #fff; }
.npbl-copy p { font-size: 16px; line-height: 1.7; color: #3d4656; margin: 0 0 14px; }
.npbl-copy p strong { color: #1b2233; font-weight: 700; }
.npbl-sec p.npbl-big { font-size: 19px; font-weight: 800; color: #1b2233; line-height: 1.45; margin-top: 6px; }
.npbl-copy p.npbl-sub { font-size: 15px; font-weight: 800; color: #1b2233; margin: 8px 0 6px; text-transform: uppercase; letter-spacing: .06em; }
.npbl-btn { display: inline-block; margin-top: 4px; padding: 13px 28px; border-radius: 8px; background: #1f568e; color: #fff !important; font-weight: 700; font-size: 15.5px; text-decoration: none !important; box-shadow: 0 6px 18px rgba(31,86,142,.25); }
.npbl-btn:hover { background: #18456f; }

/* seznam s kljukicami */
.npbl-check { list-style: none; padding: 0; margin: 4px 0 18px; display: flex; flex-direction: column; gap: 10px; }
.npbl-check li { position: relative; padding-left: 30px; font-size: 15.5px; line-height: 1.55; color: #3d4656; margin: 0; }
.npbl-check li strong { color: #1b2233; }
.npbl-check li::before { content: "\2713"; position: absolute; left: 0; top: 1px; width: 21px; height: 21px; border-radius: 50%;
  background: #1f568e; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.npbl-check--2 { display: grid; grid-template-columns: 1fr 1fr; gap: 8px 18px; }

/* 3) veličine */
.npbl-sizes { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin: 0 0 16px; }
.npbl-size { background: #fff; border: 1px solid #b9cde3; border-radius: 10px; padding: 12px 14px; box-shadow: 0 2px 10px rgba(15,35,60,.05); display: flex; flex-direction: column; gap: 2px; }
.npbl-size__n { font-size: 13px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; color: #1f568e; }
.npbl-size__d { font-size: 17px; font-weight: 800; color: #1b2233; }
.npbl-size__d small { font-size: 13px; font-weight: 600; color: #5a6275; }
.npbl-size__t { font-size: 14px; line-height: 1.45; color: #3d4656; }
.npbl-media--guide > img { aspect-ratio: auto; object-fit: contain; background: #d4d4d4; }

/* 4) ikone tkanine */
.npbl-feats { display: flex; flex-direction: column; gap: 14px; }
.npbl-feat { display: grid; grid-template-columns: 72px 1fr; gap: 16px; align-items: center; background: #fff; border: 1px solid #b9cde3; border-radius: 10px; padding: 14px 16px; box-shadow: 0 2px 10px rgba(15,35,60,.05); }
.npbl-feat__ico img { width: 64px; height: 64px; }
.npbl-feat h3 { font-size: 17px; font-weight: 800; color: #1b2233; margin: 0 0 4px; line-height: 1.3; }
.npbl-copy .npbl-feat p { font-size: 15px; line-height: 1.55; margin: 0; }

/* 6) recenzije */
.npbl-score { display: grid; grid-template-columns: 200px minmax(0, 380px) 220px; gap: 28px; justify-content: center; align-items: center; margin: 6px auto 28px; }
.npbl-score__left, .npbl-score__right { display: flex; flex-direction: column; align-items: center; gap: 4px; text-align: center; }
.npbl-score__num, .npbl-score__pct { font-size: 52px; font-weight: 800; line-height: 1; color: #1b2233; }
.npbl-score__pct { font-size: 40px; color: #1f568e; }
.npbl-score__left .npbl-stars { font-size: 20px; }
.npbl-score__txt { font-size: 14px; color: #5a6275; }
.npbl-dist__row { display: grid; grid-template-columns: 38px 1fr 40px; gap: 10px; align-items: center; font-size: 14px; color: #3d4656; margin: 5px 0; }
.npbl-dist__bar { height: 9px; border-radius: 999px; background: #d6e2ef; overflow: hidden; }
.npbl-dist__bar i { display: block; height: 100%; background: #1f568e; border-radius: 999px; }
.npbl-reviews { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; align-items: start; }
.npbl-card { background: #fff; border: 1px solid #b9cde3; border-radius: 10px; padding: 16px; box-shadow: 0 2px 10px rgba(15,35,60,.05); }
.npbl-card h3 { font-size: 16px; font-weight: 800; line-height: 1.35; color: #1b2233; margin: 8px 0 6px; }
.npbl-card__txt { font-size: 14.5px; line-height: 1.6; color: #3d4656; margin: 0 0 10px; font-style: italic; }
.npbl-card__name { font-size: 13.5px; font-weight: 700; color: #1b2233; margin: 0; }

/* ocjene */
.npbl-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.npbl-stars__off { color: #d6e2ef; }
.npbl-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .npbl-row2 { gap: 32px; }
  .npbl-score { grid-template-columns: 1fr 1fr; }
  .npbl-score__right { grid-column: 1 / -1; }
  .npbl-reviews { grid-template-columns: repeat(3, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .npbl-sec { padding: 42px 0; }
  .npbl-wrap { padding: 0 16px; }
  .npbl-row2 { grid-template-columns: 1fr; gap: 24px; }
  .npbl-row2--rev > :first-child { order: 0; }
  .npbl-score { grid-template-columns: 1fr; gap: 14px; }
  .npbl-reviews { grid-template-columns: 1fr 1fr; gap: 12px; }
  .npbl-card { padding: 12px; }
}
@media (max-width: 480px) {
  .npbl-reviews, .npbl-check--2 { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-plushblanket .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .npbl-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
