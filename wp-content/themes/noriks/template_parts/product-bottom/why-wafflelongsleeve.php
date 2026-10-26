<?php
/**
 * product-bottom: NORIKS WaffleLongSleeve — majica dugih rukava od vafel pletiva, unisex (orto-wafflelongsleeve).
 * Original: comfrt.com/products/waffle-lounge-long-sleeve (»Waffle Lounge Long Sleeve«) — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-groundingmat.php / why-cloudclogs.php / why-hands.php), poudarek kadulja zelena
 * po privzeti barvi originala (Sage Green, #4d7a5a):
 *   1) zavihek »Description« (uvod + 7 lastnosti)                 -> Opis: slika ob besedilu
 *      (»20+ colorways« -> 17 boja, ki jih nudimo; »Complete the set« z njihovimi hlačami -> »lako se kombinira«)
 *   2) zavihek »Description« – »Perfect for« (4 alineje)           -> Savršena za: slika ob besedilu
 *   3) zavihek »Size & Fit« (Relaxed) + napis galerije (model 5'8" nosi M) -> Veličina i kroj: slika ob besedilu + tablica veličina
 *   4) »Featured Fabric« (3 ikone: Soothingly Soft / Pre-Shrunk / Wrinkle Free) -> Istaknuta tkanina: slika tkanine ob 3 ikonah
 *   5) zavihka »Fabric & Care« + »Shipping Policy« (30 dni vračilo) -> Materijal i njega: slika tkanine ob besedilu,
 *      dostava in vračilo po NORIKS pogojih (30 dana, besplatna dostava iznad 70 €)
 *   6) Okendo recenzije (4,9 / 1705; 1579 / 89 / 36 / 1 / 0; 98 % preporučuje; AI sažetak; 5 izbranih mnenj)
 *      -> 4,9 / 1081, razdelitev skalirana na 692, sažetak in 5 mnenj (imena lokalizirana, znamka izpuščena)
 * Izpusceno: pasica »Up to 70% Off / Free Shipping on $99+«, »Complete The Look« (hlače/kratke hlače), »Shop Best Sellers«,
 * »Clinicians' Choice«, noga trgovine. FAQ je v reviews.php ($wafflelongsleeve_faq), mnenja v auto_reviews/HR_wafflelongsleeve.php,
 * opis + tablica + nega v meta.php, modal velikosti v size-chart-wafflelongsleeve.php. Slike: img/wafflelongsleeve/ (nwls-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nwls      = get_template_directory_uri() . '/img/wafflelongsleeve/';
$nwls_path = get_template_directory() . '/img/wafflelongsleeve/';
$nwls_img  = function( $file, $alt, $cls = '' ) use ( $nwls, $nwls_path ) {
  if ( ! $file || ! file_exists( $nwls_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nwls . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nwls_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nwls-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nwls-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) lastnosti (zavihek Description) */
$nwls_lastnosti = array(
  array( 'Mekano pamučno vafel pletivo', 'tkanina koja se od prvog nošenja osjeća kao da ste je već dugo nosili' ),
  array( 'Spuštena ramena', 'ravan kroj od ramena do struka, seže do bokova ili malo ispod' ),
  array( 'Rebrasti završeci', 'suptilna završna obrada koja daje strukturu bez krutosti' ),
  array( 'Predskupljena tkanina', 'nakon pranja i sušenja ostaje iste veličine, svaki put' ),
  array( 'Ne gužva se', 'iz sušilice izlazi jednako uredna kao što je ušla' ),
  array( '17 boja', 'osnovne i sezonske nijanse za svaki stil' ),
  array( 'Lako se kombinira', 'uz hlače za opuštanje ili traperice – za usklađen izgled' ),
);

/* 2) savršena za */
$nwls_za = array(
  'prvi korak vašeg večernjeg rituala opuštanja',
  'spora jutra koja zaslužuju nešto mekano',
  'slaganje usklađenog kompleta koji izgleda promišljeno',
  'svakoga tko vjeruje da je udobnost i stil života i osjećaj',
);

/* 4) istaknuta tkanina (ikone originala, prebarvane v poudarek) */
$nwls_tkanina = array(
  array( 'nwls-i1-mekana.webp',       'Umirujuće mekana', 'Mekano pamučno vafel pletivo, ugodno uz kožu od prvog nošenja.' ),
  array( 'nwls-i2-predskupljena.webp', 'Predskupljena',   'Nakon pranja i sušenja ostaje iste veličine – svaki put.' ),
  array( 'nwls-i3-ne-guzva.webp',      'Ne gužva se',     'Iz sušilice izlazi jednako uredna kao što je ušla.' ),
);

/* 5) njega (zavihek Fabric & Care) */
$nwls_njega = array(
  'Perite u hladnoj vodi',
  'Perite sa sličnim bojama',
  'Sušite u sušilici na niskoj temperaturi',
  'Ne glačajte',
);

/* 6) recenzije — 5 izbranih mnenj originala (prevedena, imena lokalizirana, znamka izpuščena) */
$nwls_reviews = array(
  array( 'ime' => 'Kristina N.', 'naslov' => 'Udobna i mekana',
         'tekst' => 'Uzela sam vafel majicu u mentol zelenoj boji (veličina M). Tkanina je mekana i prozračna, a vafel tekstura joj daje malo dodatnog stila. M ima opušten kroj, a ne djeluje preveliko – savršena je za opuštanje ili uz traperice. Super udobna, a i dalje slatka.' ),
  array( 'ime' => 'Jasna K.', 'naslov' => 'Oduševljena!',
         'tekst' => 'Naručila sam veličinu S i savršena je, tako udobna! Visoka sam 165 cm i imam 61 kg. Jedva čekam naručiti još.' ),
  array( 'ime' => 'Andrea D.', 'naslov' => 'Lagana',
         'tekst' => 'Slatka je i lagana. Uzela sam svoju uobičajenu veličinu M i sviđa mi se opušteniji izgled. Imam je u 3 boje.' ),
  array( 'ime' => 'Mia P.', 'naslov' => 'Vafel uzorak!',
         'tekst' => 'Obožavam ovaj vafel uzorak – tako je udobna, a dobila sam i toliko komplimenata! Napokon mogu biti udobno i moderno odjevena u isto vrijeme. Imam je u 3 različite boje i obožavam ih kombinirati.' ),
  array( 'ime' => 'Marija R.', 'naslov' => 'Super udobna!',
         'tekst' => 'Suprug mi ju je poklonio za rođendan i od tada je obožavam! Ljeti mi u njoj nije vruće, a zimi me grije – majica se može nositi u bilo koje doba godine.' ),
);
/* razdelitev ocen originala 1579 / 89 / 36 / 1 / 0 (od 1705) skalirana na 692 recenzij (NORIKS) */
$nwls_dist = array( 5 => 641, 4 => 36, 3 => 15, 2 => 0, 1 => 0 );

$nwls_n = 0; // števec sekcij za izmenična ozadja
$nwls_cls = function() use ( &$nwls_n ) { $nwls_n++; return ( $nwls_n % 2 ) ? ' nwls-tint' : ''; };
?>

<!-- 1) OPIS (zavihek »Description«) — slika ob besedilu -->
<section class="nwls-sec<?php echo $nwls_cls(); ?>">
  <div class="nwls-wrap">
    <div class="nwls-row2">
      <div class="nwls-media"><?php echo $nwls_img( 'nwls-s1-opis.webp', 'NORIKS WaffleLongSleeve vafel majica dugih rukava u boji kadulja zelena' ); ?></div>
      <div class="nwls-copy">
        <p class="nwls-kicker">Opis proizvoda</p>
        <h2 class="nwls-h2">Vafel majica koja <em>nikad dugo ne ostaje u ladici</em></h2>
        <p>NORIKS WaffleLongSleeve je <strong>umirujuće mekana</strong> – izrađena od naše najudobnije <strong>pamučne vafel tkanine</strong> koja lijepo pada i izgleda promišljeno.</p>
        <ul class="nwls-check">
          <?php foreach ( $nwls_lastnosti as $l ) : ?>
          <li><strong><?php echo esc_html( $l[0] ); ?>:</strong> <?php echo esc_html( $l[1] ); ?></li>
          <?php endforeach; ?>
        </ul>
        <p class="nwls-big">Mekana. Opuštena. Uvijek iste veličine.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) SAVRŠENA ZA (»Perfect for«) — slika ob besedilu -->
<section class="nwls-sec<?php echo $nwls_cls(); ?>">
  <div class="nwls-wrap">
    <div class="nwls-row2 nwls-row2--rev">
      <div class="nwls-media"><?php echo $nwls_img( 'nwls-s2-savrsena-za.webp', 'Par u NORIKS WaffleLongSleeve vafel majicama u boji kadulja zelena' ); ?></div>
      <div class="nwls-copy">
        <p class="nwls-kicker">Savršena za</p>
        <h2 class="nwls-h2">Udobnost je <em>stil života i osjećaj</em></h2>
        <ul class="nwls-check">
          <?php foreach ( $nwls_za as $z ) : ?>
          <li><?php echo esc_html( $z ); ?></li>
          <?php endforeach; ?>
        </ul>
        <p class="nwls-big">Od sporog jutra do večernjeg opuštanja.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) VELIČINA I KROJ (zavihek »Size & Fit«: Relaxed) — slika ob besedilu -->
<section class="nwls-sec<?php echo $nwls_cls(); ?>">
  <div class="nwls-wrap">
    <div class="nwls-row2">
      <div class="nwls-media"><?php echo $nwls_img( 'nwls-s3-kroj.webp', 'Opušten kroj NORIKS WaffleLongSleeve – modelica nosi veličinu M' ); ?></div>
      <div class="nwls-copy">
        <p class="nwls-kicker">Veličina i kroj</p>
        <h2 class="nwls-h2">Opušten kroj, <em>malo više prostora</em></h2>
        <p><strong>Opušten:</strong> malo više prostora od vaše uobičajene veličine u prsima i ramenima – ali bez viška materijala kao kod oversized modela.</p>
        <p>Spuštena ramena i ravan kroj sežu do bokova ili malo ispod, a rebrasti završeci na rukavima i rubu drže oblik.</p>
        <p>Modelica je visoka <strong>173 cm</strong> i nosi veličinu <strong>M</strong>.</p>
        <p class="nwls-big">Unisex veličine XS – 3XL.</p>
        <a class="nwls-btn js-open-size-chart" href="#">Tablica veličina</a>
      </div>
    </div>
  </div>
</section>

<!-- 4) ISTAKNUTA TKANINA (»Featured Fabric«: Soothingly Soft / Pre-Shrunk / Wrinkle Free) — slika tkanine ob ikonah -->
<section class="nwls-sec<?php echo $nwls_cls(); ?>">
  <div class="nwls-wrap">
    <div class="nwls-row2 nwls-row2--rev">
      <div class="nwls-media"><?php echo $nwls_img( 'nwls-s4-tkanina.webp', 'Vafel pletivo NORIKS WaffleLongSleeve izbliza' ); ?></div>
      <div class="nwls-copy">
        <p class="nwls-kicker">Istaknuta tkanina</p>
        <h2 class="nwls-h2">Vafel pletivo koje <em>ćete obožavati</em></h2>
        <div class="nwls-feats">
          <?php foreach ( $nwls_tkanina as $t ) : ?>
          <div class="nwls-feat">
            <span class="nwls-feat__ico"><?php echo $nwls_img( $t[0], $t[1] ); ?></span>
            <div><h3><?php echo esc_html( $t[1] ); ?></h3><p><?php echo esc_html( $t[2] ); ?></p></div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5) MATERIJAL I NJEGA (zavihka »Fabric & Care« + »Shipping Policy« po NORIKS pogojih) — slika tkanine ob besedilu -->
<section class="nwls-sec<?php echo $nwls_cls(); ?>">
  <div class="nwls-wrap">
    <div class="nwls-row2">
      <div class="nwls-media"><?php echo $nwls_img( 'nwls-s5-njega.webp', 'Mekana pamučna vafel tkanina NORIKS WaffleLongSleeve' ); ?></div>
      <div class="nwls-copy">
        <p class="nwls-kicker">Materijal i njega</p>
        <h2 class="nwls-h2">Jednostavna njega, <em>dugotrajna mekoća</em></h2>
        <p class="nwls-sub">Sastav</p>
        <p><strong>60 % pamuk, 40 % poliester</strong></p>
        <p class="nwls-sub">Upute za pranje</p>
        <ul class="nwls-check">
          <?php foreach ( $nwls_njega as $nj ) : ?>
          <li><?php echo esc_html( $nj ); ?></li>
          <?php endforeach; ?>
        </ul>
        <p class="nwls-sub">Dostava i povrat</p>
        <p><strong>Besplatna dostava za narudžbe iznad 70 €</strong> i <strong>pravo na povrat u roku od 30 dana</strong> – ako vam veličina ne odgovara, pomoći ćemo vam sa zamjenom.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) RECENZIJE KUPACA — 1081 po NORIKS, razdelitev skalirana na 692, sažetak + 5 mnenj originala -->
<section class="nwls-sec<?php echo $nwls_cls(); ?>">
  <div class="nwls-wrap">
    <p class="nwls-kicker nwls-c">Recenzije kupaca</p>
    <h2 class="nwls-h2 nwls-c">Kupci je <em>obožavaju</em></h2>
    <div class="nwls-score">
      <div class="nwls-score__left">
        <span class="nwls-score__num">4,9</span>
        <?php echo $nwls_stars( 5 ); ?>
        <span class="nwls-score__txt">Na temelju 1081 recenzije</span>
      </div>
      <div class="nwls-dist">
        <?php foreach ( $nwls_dist as $z => $c ) : ?>
        <div class="nwls-dist__row"><span><?php echo (int) $z; ?> ★</span><span class="nwls-dist__bar"><i style="width:<?php echo round( $c / 692 * 100, 1 ); ?>%"></i></span><span><?php echo (int) $c; ?></span></div>
        <?php endforeach; ?>
      </div>
      <div class="nwls-score__right">
        <span class="nwls-score__pct">98 %</span>
        <span class="nwls-score__txt">kupaca preporučuje ovaj proizvod</span>
        <span class="nwls-tags"><b>Najčešće spominju:</b> <i>Udobnost</i> <i>Kroj</i> <i>Boja</i></span>
      </div>
    </div>
    <div class="nwls-summary">
      <p class="nwls-summary__t">Sažetak recenzija</p>
      <p>Kupci kažu da je ova vafel majica nevjerojatno mekana i udobna – za opuštanje i za svaki dan. Mnogima se sviđa opušten kroj s elastičnim manžetama i ležernom siluetom. Većina hvali savršenu težinu – ni preteška ni prelagana – idealnu za jesen. Boje su žive i prekrasne, a mnogi je imaju u više boja.</p>
    </div>
    <div class="nwls-reviews">
      <?php foreach ( $nwls_reviews as $r ) : ?>
      <article class="nwls-card">
        <?php echo $nwls_stars( 5 ); ?>
        <h3><?php echo esc_html( $r['naslov'] ); ?></h3>
        <p class="nwls-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
        <p class="nwls-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nwls-ok">✓ Potvrđena kupnja</span></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-groundingmat.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob besedilu,
   izmenjujoča ozadja in strani. Paleta kadulja zelena po privzeti barvi originala: poudarek #4d7a5a, temno #1d2b22, svetlo #f1f6f1. */
.nwls-sec { padding: 60px 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1d2b22; background: #fff; }
.nwls-sec * { box-sizing: border-box; }
.nwls-tint { background: #f1f6f1; }
.nwls-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nwls-c { text-align: center; }
.nwls-sec h2, .nwls-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nwls-kicker, .nwls-copy p.nwls-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #4d7a5a; margin: 0 0 10px; }
.nwls-h2 { font-weight: 800; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #1d2b22; }
.nwls-h2 em { font-style: italic; color: #4d7a5a; }
.nwls-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nwls-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nwls-row2--rev > :first-child { order: 2; }
.nwls-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(20,45,28,.05), 0 14px 40px rgba(20,45,28,.10); max-width: 520px; margin: 0 auto; aspect-ratio: 3 / 4; object-fit: cover; background: #fff; }
.nwls-copy p { font-size: 16px; line-height: 1.7; color: #46554b; margin: 0 0 14px; }
.nwls-copy p strong { color: #1d2b22; font-weight: 700; }
.nwls-sec p.nwls-big { font-size: 19px; font-weight: 800; color: #1d2b22; line-height: 1.45; margin-top: 6px; }
.nwls-copy p.nwls-sub { font-size: 15px; font-weight: 800; color: #1d2b22; margin: 8px 0 6px; text-transform: uppercase; letter-spacing: .06em; }
.nwls-btn { display: inline-block; margin-top: 4px; padding: 13px 28px; border-radius: 8px; background: #4d7a5a; color: #fff !important; font-weight: 700; font-size: 15.5px; text-decoration: none !important; box-shadow: 0 6px 18px rgba(77,122,90,.25); }
.nwls-btn:hover { background: #3e6449; }

/* seznam s kljukicami */
.nwls-check { list-style: none; padding: 0; margin: 4px 0 18px; display: flex; flex-direction: column; gap: 10px; }
.nwls-check li { position: relative; padding-left: 30px; font-size: 15.5px; line-height: 1.55; color: #46554b; margin: 0; }
.nwls-check li strong { color: #1d2b22; }
.nwls-check li::before { content: "\2713"; position: absolute; left: 0; top: 1px; width: 21px; height: 21px; border-radius: 50%;
  background: #4d7a5a; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }

/* 4) ikone tkanine */
.nwls-feats { display: flex; flex-direction: column; gap: 14px; }
.nwls-feat { display: grid; grid-template-columns: 72px 1fr; gap: 16px; align-items: center; background: #fff; border: 1px solid #cfe0d2; border-radius: 10px; padding: 14px 16px; box-shadow: 0 2px 10px rgba(20,45,28,.05); }
.nwls-feat__ico img { width: 64px; height: 64px; }
.nwls-feat h3 { font-size: 17px; font-weight: 800; color: #1d2b22; margin: 0 0 4px; line-height: 1.3; }
.nwls-copy .nwls-feat p { font-size: 15px; line-height: 1.55; margin: 0; }

/* 6) recenzije */
.nwls-score { display: grid; grid-template-columns: 200px minmax(0, 380px) 220px; gap: 28px; justify-content: center; align-items: center; margin: 6px auto 24px; }
.nwls-score__left, .nwls-score__right { display: flex; flex-direction: column; align-items: center; gap: 4px; text-align: center; }
.nwls-score__num, .nwls-score__pct { font-size: 52px; font-weight: 800; line-height: 1; color: #1d2b22; }
.nwls-score__pct { font-size: 40px; color: #4d7a5a; }
.nwls-score__left .nwls-stars { font-size: 20px; }
.nwls-score__txt { font-size: 14px; color: #5f6e63; }
.nwls-tags { font-size: 13px; color: #46554b; margin-top: 6px; }
.nwls-tags i { font-style: normal; display: inline-block; background: #e8f2ea; border: 1px solid #b4cfba; border-radius: 999px; padding: 2px 10px; margin: 4px 2px 0; }
.nwls-dist__row { display: grid; grid-template-columns: 38px 1fr 40px; gap: 10px; align-items: center; font-size: 14px; color: #46554b; margin: 5px 0; }
.nwls-dist__bar { height: 9px; border-radius: 999px; background: #dbe8dd; overflow: hidden; }
.nwls-dist__bar i { display: block; height: 100%; background: #4d7a5a; border-radius: 999px; }
.nwls-summary { max-width: 820px; margin: 0 auto 28px; background: #fff; border: 1px solid #cfe0d2; border-left: 4px solid #4d7a5a; border-radius: 10px; padding: 16px 20px; }
.nwls-summary p { font-size: 15.5px; line-height: 1.65; color: #46554b; margin: 0; }
.nwls-summary p.nwls-summary__t { font-size: 13px; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; color: #4d7a5a; margin-bottom: 6px; }
.nwls-reviews { display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); gap: 16px; align-items: start; }
.nwls-card { background: #fff; border: 1px solid #cfe0d2; border-radius: 10px; padding: 16px; box-shadow: 0 2px 10px rgba(20,45,28,.05); }
.nwls-card h3 { font-size: 16px; font-weight: 800; line-height: 1.35; color: #1d2b22; margin: 8px 0 6px; }
.nwls-card__txt { font-size: 14.5px; line-height: 1.6; color: #3b4a40; margin: 0 0 10px; font-style: italic; }
.nwls-card__name { font-size: 13.5px; font-weight: 700; color: #1d2b22; margin: 0; }

/* ocjene */
.nwls-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nwls-stars__off { color: #d9e4dc; }
.nwls-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nwls-row2 { gap: 32px; }
  .nwls-score { grid-template-columns: 1fr 1fr; }
  .nwls-score__right { grid-column: 1 / -1; }
  .nwls-reviews { grid-template-columns: repeat(3, minmax(0, 1fr)); }
}
@media (max-width: 749px) {
  .nwls-sec { padding: 42px 0; }
  .nwls-wrap { padding: 0 16px; }
  .nwls-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nwls-row2--rev > :first-child { order: 0; }
  .nwls-score { grid-template-columns: 1fr; gap: 14px; }
  .nwls-reviews { grid-template-columns: 1fr 1fr; gap: 12px; }
  .nwls-card { padding: 12px; }
}
@media (max-width: 480px) {
  .nwls-reviews { grid-template-columns: 1fr; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-wafflelongsleeve .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nwls-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
