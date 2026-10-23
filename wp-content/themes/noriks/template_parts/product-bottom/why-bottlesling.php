<?php
/**
 * product-bottom: NORIKS BottleSling — izolirana torbica za termo čašu s naramenicom (orto-bottlesling).
 * Original: emmafy.com/products/sippy-the-hands-free-bottle-sling — vsebina in vrstni red 1:1 z originalom,
 * oblika po NORIKS stilu (predloga why-fleeceshawl.php / why-hands.php), olivno zelen poudarek (#5e6b48, karirana zelena):
 *   1) "Your Tumbler, Hands-Free" -> Vaša termo čaša, bez nošenja u ruci (slika ob besedilu)
 *   2) "An Extra Layer of Cold." -> Dodatni sloj hladnoće (slika ob besedilu)
 *   3) "Four Pockets, Zero Chaos" -> Četiri džepa, nula kaosa (slika ob besedilu)
 *   4) "Features:" -> Značajke (slika z merami, napisi prevedeni: 9.84/3.15/2.95 in -> 25/8/7,5 cm)
 *   5) "Customer satisfaction first" -> Zadovoljstvo kupaca na prvom mjestu (kolaž 500K brez znamke Emmafy:
 *        ploščice z napisom EMMAFY izpuščene, napis "500,000+ Happy Women" -> "500.000+ zadovoljnih žena")
 *   6) "Customer Reviews" (123) -> Recenzije kupaca: 1081 recenzija, razdelitev zvezdic (79/11/4/2/3 %) skalirana na 692, 5 mnenj
 * FAQ (13, po NORIKS pogojih) je v reviews.php ($bottlesling_faq), mnenja v auto_reviews/HR_bottlesling.php,
 * opis in nega v standardnih harmonikah (meta.php).
 * Izpusceno: glava, pasice, nadgradnje v nakupni skatli (Tumbly, obeski za torbo), »90-Day Guarantee«, noga.
 * Slike: img/bottlesling/ (nbs-…).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nbs      = get_template_directory_uri() . '/img/bottlesling/';
$nbs_path = get_template_directory() . '/img/bottlesling/';
$nbs_img  = function( $file, $alt ) use ( $nbs, $nbs_path ) {
  if ( ! $file || ! file_exists( $nbs_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nbs . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
$nbs_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nbs-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nbs-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 6) "Customer Reviews" (prevedeno; stevilke po NORIKS: 1081, zvezdice skalirane na 692 iz 97/14/5/3/4 od 123) */
$nbs_dist = array(
  array( 5, 79, 546 ),
  array( 4, 11, 79 ),
  array( 3, 4, 28 ),
  array( 2, 2, 17 ),
  array( 1, 3, 22 ),
);
$nbs_rv = array(
  array( 'ime' => 'Karla R.',   'z' => 5, 'naslov' => '',                    'tekst' => 'Praktično.' ),
  array( 'ime' => 'Dora A.',    'z' => 4, 'naslov' => 'Tako praktično',       'tekst' => 'Bila je savršena – upravo sam je koristila na izletu u zabavni park i u nju je stala čaša koju dobijete uz ulaznicu. Zahvaljujući džepovima sa strane nisam morala nositi torbicu. Dan mi je bio puno ljepši jer čašu nisam morala nositi u ruci.' ),
  array( 'ime' => 'Barbara T.', 'z' => 5, 'naslov' => 'Savršena za čašu!',    'tekst' => 'Svoju sam čašu kupila u čokoladnom karo uzorku. Jedino što bi me još više razveselilo jest da ova praktična torbica dolazi i u tom uzorku, no boja se savršeno slaže s mojim čokoladnim karo stvarima. Nosim je posvuda i obožavam je.' ),
  array( 'ime' => 'Anita B.',   'z' => 5, 'naslov' => '',                    'tekst' => 'Lijepa.' ),
  array( 'ime' => 'Sanja S.',   'z' => 5, 'naslov' => 'Od velike pomoći',     'tekst' => 'Jako mi se sviđaju ove torbice. Ujutro uvijek žurim kroz vrata, a torbica mi oslobodi jednu ruku.' ),
);

$nbs_n = 0; // števec sekcij za izmenična ozadja
$nbs_cls = function() use ( &$nbs_n ) { $nbs_n++; return ( $nbs_n % 2 ) ? ' nbs-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) VAŠA TERMO ČAŠA, BEZ NOŠENJA U RUCI ("Your Tumbler, Hands-Free") — slika ob besedilu -->
<section class="nbs-sec<?php echo $nbs_cls(); ?>">
  <div class="nbs-wrap">
    <div class="nbs-row2">
      <div class="nbs-media"><?php echo $nbs_img( 'nbs-s1-ruke-slobodne.webp', 'Žena u šetnji sa psom nosi termo čašu u torbici NORIKS BottleSling preko tijela' ); ?></div>
      <div class="nbs-copy">
        <p class="nbs-kicker">Ruke slobodne</p>
        <h2 class="nbs-h3">Vaša termo čaša, <em>bez nošenja u ruci</em></h2>
        <p><strong>Prestanite žonglirati</strong> termo čašom od 1,2 l, mobitelom i ključevima.</p>
        <p>NORIKS BottleSling u sebe prima vašu omiljenu termo čašu od <strong>0,9–1,2 l (30–40 oz)</strong>. Dva prednja džepa s patentnim zatvaračem čuvaju mobitel i kartice. Odvojiva naramenica i kratka ručka na vrhu = zgrabite i krenite ili je nosite preko tijela.</p>
        <p class="nbs-big">Ruke potpuno slobodne. Sve na dohvat ruke.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) DODATNI SLOJ HLADNOĆE ("An Extra Layer of Cold.") — slika ob besedilu -->
<section class="nbs-sec<?php echo $nbs_cls(); ?>">
  <div class="nbs-wrap">
    <div class="nbs-row2 nbs-row2--rev">
      <div class="nbs-media"><?php echo $nbs_img( 'nbs-s2-sloj-hladnoce.webp', 'Izolacijska podstava od aluminijske folije u torbici NORIKS BottleSling' ); ?></div>
      <div class="nbs-copy">
        <p class="nbs-kicker">Dvoslojna izolacija</p>
        <h2 class="nbs-h3">Dodatni sloj <em>hladnoće</em></h2>
        <p>Dva promišljena sloja rade svoj posao: vanjski sloj od <strong>vodoodbojnog keper poliestera</strong> i <strong>izolacijska podstava od aluminijske folije</strong>.</p>
        <p>Oko vaše termo čaše dodaju još jedan izolacijski sloj – pa piće <strong>dulje ostaje hladno</strong>. A kondenzacija ostaje zarobljena u torbici, a ne na vašoj odjeći.</p>
        <p class="nbs-big">Hladnoća ostaje unutra. Kapljice ne cure van. Odjeća ostaje suha.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) ČETIRI DŽEPA, NULA KAOSA ("Four Pockets, Zero Chaos") — slika ob besedilu -->
<section class="nbs-sec<?php echo $nbs_cls(); ?>">
  <div class="nbs-wrap">
    <div class="nbs-row2">
      <div class="nbs-media"><?php echo $nbs_img( 'nbs-s3-cetiri-dzepa.webp', 'Torbica NORIKS BottleSling s prednjim i bočnim džepovima' ); ?></div>
      <div class="nbs-copy">
        <p class="nbs-kicker">Sve na svom mjestu</p>
        <h2 class="nbs-h3">Četiri džepa, <em>nula kaosa</em></h2>
        <p>Dva prednja pretinca s patentnim zatvaračem + <strong>dva elastična bočna džepa</strong> + unutarnja <strong>kukica za ključeve</strong>.</p>
        <p>Mobitel ide u prednji džep. Kartice i gotovina u drugi pretinac sa zatvaračem. Grickalice i sredstvo za dezinfekciju u bočne džepove. Ključevi zakačeni unutra da ih ne izgubite.</p>
        <p class="nbs-big">Sve ima svoje mjesto. Ništa ne zvecka na dnu torbe.</p>
      </div>
    </div>
  </div>
</section>

<!-- 4) ZNAČAJKE ("Features:") — slika z merami (prevedeno v cm) ob besedilu -->
<section class="nbs-sec<?php echo $nbs_cls(); ?>">
  <div class="nbs-wrap">
    <div class="nbs-row2 nbs-row2--rev">
      <div class="nbs-media"><?php echo $nbs_img( 'nbs-s4-znacajke-hr.webp', 'Dimenzije torbice NORIKS BottleSling: 25 x 8 x 7,5 cm' ); ?></div>
      <div class="nbs-copy">
        <p class="nbs-kicker">Ukratko</p>
        <h2 class="nbs-h3"><em>Značajke</em></h2>
        <ul class="nbs-list">
          <li>Pristaje izoliranim termo čašama od 0,9–1,2 l (30–40 oz) s ručkom</li>
          <li>Dvoslojna izolacija (keper poliester + podstava od aluminijske folije)</li>
          <li>4 džepa za organizaciju</li>
          <li>Unutarnja kukica za ključeve</li>
          <li>Odvojiva naramenica (do 95 cm) + kratka ručka na vrhu</li>
          <li>Zatvaranje na čičak na vrhu</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 5) ZADOVOLJSTVO KUPACA NA PRVOM MJESTU ("Customer satisfaction first") — kolaž brez tuje znamke ob besedilu -->
<section class="nbs-sec<?php echo $nbs_cls(); ?>">
  <div class="nbs-wrap">
    <div class="nbs-row2">
      <div class="nbs-media"><?php echo $nbs_img( 'nbs-s5-zadovoljstvo-hr.webp', '500.000+ zadovoljnih žena' ); ?></div>
      <div class="nbs-copy">
        <p class="nbs-kicker">Bez brige</p>
        <h2 class="nbs-h3">Zadovoljstvo kupaca <em>na prvom mjestu</em></h2>
        <p>U NORIKS-u se brinemo da <strong>svaki naš kupac bude zadovoljan</strong>.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6) RECENZIJE KUPACA ("Customer Reviews", 123 -> 1081 po NORIKS) — razdelitev zvezdic + mnenja -->
<section class="nbs-sec<?php echo $nbs_cls(); ?>">
  <div class="nbs-wrap">
    <p class="nbs-kicker nbs-c">Recenzije kupaca</p>
    <h2 class="nbs-h2 nbs-c">Kupci <em>obožavaju</em> svoj NORIKS BottleSling</h2>
    <div class="nbs-score">
      <span class="nbs-score__num">4,6 / 5</span>
      <?php echo $nbs_stars( 5 ); ?>
      <span class="nbs-score__txt">Na temelju 1081 recenzije</span>
    </div>
    <ul class="nbs-dist">
      <?php foreach ( $nbs_dist as $d ) : ?>
      <li>
        <span class="nbs-dist__lbl"><?php echo (int) $d[0]; ?> ★</span>
        <span class="nbs-dist__bar"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span>
        <span class="nbs-dist__pct"><?php echo (int) $d[1]; ?> % (<?php echo (int) $d[2]; ?>)</span>
      </li>
      <?php endforeach; ?>
    </ul>
    <div class="nbs-reviews">
      <?php foreach ( $nbs_rv as $r ) : ?>
      <article class="nbs-card">
        <div class="nbs-card__body">
          <?php echo $nbs_stars( $r['z'] ); ?>
          <?php if ( $r['naslov'] ) : ?><p class="nbs-card__title"><?php echo esc_html( $r['naslov'] ); ?></p><?php endif; ?>
          <p class="nbs-card__txt">„<?php echo esc_html( $r['tekst'] ); ?>”</p>
          <p class="nbs-card__name"><?php echo esc_html( $r['ime'] ); ?> <span class="nbs-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-fleeceshawl.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Olivno zelen poudarek po barvi izdelka (#5e6b48, karirana zelena). */
.nbs-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #232a1c; background: #fff; }
.nbs-sec * { box-sizing: border-box; }
.nbs-tint { background: #f1f4ea; }
.nbs-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nbs-c { text-align: center; }
.nbs-sec h2, .nbs-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nbs-kicker, .nbs-copy p.nbs-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #5e6b48; margin: 0 0 10px; }
.nbs-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 14px; color: #232a1c; }
.nbs-h2 em, .nbs-h3 em { font-style: italic; color: #5e6b48; }
.nbs-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #232a1c; }
.nbs-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nbs-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nbs-row2--rev .nbs-media { order: 2; }
.nbs-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(30,40,20,.05), 0 14px 40px rgba(30,40,20,.10); max-width: 520px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.nbs-copy p { font-size: 16px; line-height: 1.7; color: #46503b; margin: 0 0 14px; }
.nbs-copy p strong { color: #232a1c; font-weight: 600; }
.nbs-copy p.nbs-big { font-size: 19px; font-weight: 700; color: #232a1c; line-height: 1.45; margin-top: 6px; }
.nbs-list { list-style: none; margin: 0 0 16px; padding: 0; }
.nbs-list li { position: relative; padding-left: 30px; margin: 0 0 9px; font-size: 15.5px; line-height: 1.55; color: #343c2b; }
.nbs-list li::before { content: "✓"; position: absolute; left: 0; top: 1px; width: 20px; height: 20px; border-radius: 50%; background: #5e6b48; color: #fff; font-size: 11.5px; font-weight: 800; line-height: 20px; text-align: center; }

/* ocjene */
.nbs-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nbs-stars__off { color: #dfe4d6; }
.nbs-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: 0 0 28px; flex-wrap: wrap; }
.nbs-score__num { font-size: 26px; font-weight: 700; color: #232a1c; }
.nbs-score .nbs-stars { font-size: 20px; }
.nbs-score__txt { font-size: 14.5px; color: #5f6856; }

/* razdelitev zvezdic */
.nbs-dist { list-style: none; margin: 0 auto 32px; padding: 0; max-width: 460px; }
.nbs-dist li { display: grid; grid-template-columns: 38px 1fr 92px; gap: 10px; align-items: center; margin: 0 0 8px; font-size: 14px; color: #343c2b; }
.nbs-dist__lbl { font-weight: 600; white-space: nowrap; }
.nbs-dist__bar { display: block; height: 10px; border-radius: 6px; background: #dfe5d3; overflow: hidden; }
.nbs-dist__bar span { display: block; height: 100%; background: #5e6b48; border-radius: 6px; }
.nbs-dist__pct { color: #5f6856; white-space: nowrap; }

/* mnenja */
.nbs-reviews { columns: 3; column-gap: 18px; margin-top: 12px; } /* masonry: kartice razlicnih visin brez praznin */
.nbs-reviews > .nbs-card { break-inside: avoid; margin-bottom: 18px; }
.nbs-card { background: #fff; border: 1px solid #d8dfcb; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; }
.nbs-sec:not(.nbs-tint) .nbs-card { background: #f1f4ea; }
.nbs-card__body { padding: 16px; }
.nbs-card__title { font-size: 15px; font-weight: 700; color: #232a1c; margin: 8px 0 0; }
.nbs-card__txt { font-size: 14.5px; line-height: 1.6; color: #343c2b; margin: 8px 0 10px; font-style: italic; }
.nbs-card__name { font-size: 13.5px; font-weight: 600; color: #232a1c; margin: 0; }
.nbs-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }

@media (max-width: 989px) {
  .nbs-row2 { gap: 32px; }
  .nbs-reviews { columns: 2; }
}
@media (max-width: 749px) {
  .nbs-sec { padding: 42px 0; }
  .nbs-wrap { padding: 0 16px; }
  .nbs-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nbs-row2--rev .nbs-media { order: 0; }
  .nbs-reviews { column-gap: 12px; }
  .nbs-reviews > .nbs-card { margin-bottom: 12px; }
  .nbs-card__body { padding: 12px; }
}
@media (max-width: 420px) {
  .nbs-reviews { columns: 1; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-bottlesling .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nbs-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
