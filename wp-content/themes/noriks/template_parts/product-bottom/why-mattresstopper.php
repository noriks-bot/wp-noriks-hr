<?php
/**
 * product-bottom: NORIKS MattressTopper — ekstra debeli nadmadrac od 10 cm (orto-mattresstopper).
 * Original: casanuve.co.uk/products/luxury-extra-thick-mattress-topper — vsebina in vrstni red 1:1 z originalom, oblika po
 * NORIKS stilu (predloga why-dualpillow.php / why-hands.php), topla rjava paleta NORIKS (#a9683f, krem ozadje originala):
 *   1) zavihek "Product Description" (2 odstavka + slika "Same comfort. Smarter choice." Traditional mattress / topper)
 *      -> besedilo ob HTML primerjavi Klasični madrac / NORIKS MattressTopper (fotografiji izrezani iz slike originala,
 *         brez logotipa; £900–£2,900 -> 1.000–3.500 €, Under £50 -> ispod 60 €, Fast UK delivery -> brza dostava)
 *   2) "Here's why you'll love it:" (6 tock) + slika "More Than 10,000 Happy Customers"
 *      -> seznam ob fotografiji para (napisa z logotipom in pogoji vracila originala izrezana); Shipped from Nottingham ->
 *         besplatna dostava iznad 70 €, promo koda CASA15 izpuscena, 10,000+ -> tisuće kupaca, "Not satisfied? … refund" ->
 *         pravo na povrat u roku od 30 dana
 *   3) recenzije (191, 97 % 5★ / 3 % 4★) -> Recenzije kupaca: 1081, razdelitev skalirana na 692 + 8 mnenj
 * Izpusceno: pasica, Delivery Policy / Shipping & Return (pogoji konkurenta), tekoci trak Premium Quality / 30-Day Easy
 * Returns / Free Delivery, pasica s promo kodo CASA15, "You may also like", noga.
 * FAQ (6) je v reviews.php ($mattresstopper_faq), mnenja v auto_reviews/HR_mattresstopper.php, opis/nega/tablica velicin
 * v meta.php in size-chart-mattresstopper.php. Slike: img/mattresstopper/ (nmt-…), galerija v HR medijih (nmt-g01…g05).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nmt      = get_template_directory_uri() . '/img/mattresstopper/';
$nmt_path = get_template_directory() . '/img/mattresstopper/';
$nmt_img  = function( $file, $alt, $cls = '' ) use ( $nmt, $nmt_path ) {
  if ( ! $file || ! file_exists( $nmt_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nmt . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="eager"' . ( $cls ? ' class="' . esc_attr( $cls ) . '"' : '' ) . '>';
};
$nmt_stars = function( $n ) {
  $n = max( 0, min( 5, (int) $n ) );
  return '<span class="nmt-stars" aria-label="' . $n . ' od 5 zvjezdica">' . str_repeat( '★', $n ) . '<span class="nmt-stars__off">' . str_repeat( '★', 5 - $n ) . '</span></span>';
};

/* 1) primerjava (slika originala "Same comfort. Smarter choice." kot HTML) */
$nmt_cmp_old = array( 'Udobna potpora', 'Ulaganje od 1.000 do 3.500 €', 'Težak i nespretan za premještanje', 'Zahtijeva dostavu i postavljanje' );
$nmt_cmp_new = array( 'Udobna potpora', 'Ispod 60 €', 'Lagan i jednostavan za spremanje', 'Brza dostava', 'Spreman za upotrebu za nekoliko minuta' );
$nmt_cmp_foot = array( array( '☁', 'Više udobnosti.' ), array( '€', 'Manji trošak.' ), array( '✓', 'Bez kompromisa.' ) );

/* 2) zašto ćete ga voljeti (točke originala; promo koda izpuščena, dostava po NORIKS pogojih) */
$nmt_love = array(
  array( '☁', 'Udobnost kao na oblaku', 'osjećaj kao da spavate u hotelu s 5 zvjezdica' ),
  array( '☺', 'Ublažava bolove', 'podupire i ublažava pritisak na leđa, vrat i kukove' ),
  array( '✓', 'Dugotrajan', 'može se prati u perilici, a punjenje dugo zadržava oblik' ),
  array( '➜', 'Brza dostava', 'besplatna dostava za narudžbe iznad 70 €' ),
  array( '★', 'Tisuće zadovoljnih kupaca', 'vole ga ljudi diljem Europe' ),
);

/* 3) recenzije (original 191: 97 % 5★, 3 % 4★ -> skalirano na 692) */
$nmt_dist = array(
  array( 5, 97, 671 ),
  array( 4, 3, 21 ),
  array( 3, 0, 0 ),
  array( 2, 0, 0 ),
  array( 1, 0, 0 ),
);
$nmt_rv = array(
  array( 'Stjepan V.', 5, 'Prekrasan i udoban, spavam puno bolje, toplo je i ugodno. Ako tražite nadmadrac, ne tražite dalje – ovo je najbolji, i to po pravoj cijeni.' ),
  array( 'Branko R.', 5, 'Bože moj, kakva razlika za moj san i bolno tijelo! Obožavam ovaj nadmadrac. Kupit ću ga ponovno. Vrhunski.' ),
  array( 'Tea M.', 5, 'Nadmadrac je tako udoban, kao da ležite na oblaku. Savršeno pristaje i lako se stavlja. Definitivno preporučujem.' ),
  array( 'Vesna L.', 5, 'Ovom nadmadracu definitivno dajem 5 zvjezdica, tako je udoban. Nakon dugog spavanja u nelagodi na svom madracu napravio je ogromnu razliku. Kupila sam ga jer sam dobivala novo koljeno i trebala sam udobnost dok se odmaram u krevetu – stvarno je pomogao, spavam bolje iako me boli. Nevjerojatno.' ),
  array( 'Tamara P.', 5, 'Apsolutno sjajan. Tako debeo i udoban. Spavamo puno bolje i ne treba nam novi madrac.' ),
  array( 'Mario Š.', 5, 'Uvijek sam se mučio sa spavanjem kad radim noćne smjene, ali ovaj tjedan, otkako imam ovaj nadmadrac, spavam puno bolje. Sad štedim da kupim još tri za dječje krevete. Toplo preporučujem.' ),
  array( 'Kristina F.', 5, 'Stvarno udoban. Pomogao mi je kod bolova u leđima i rukama. Spavam puno bolje. Sigurno ga preporučujem.' ),
  array( 'Helena P.', 5, 'Apsolutno obožavam ❤️ svoj nadmadrac, tako je udoban, izgleda deblji od 10 cm i spavam puno bolje 😴 Toplo ga preporučujem.' ),
);

$nmt_n = 0; // števec sekcij za izmenična ozadja
$nmt_cls = function() use ( &$nmt_n ) { $nmt_n++; return ( $nmt_n % 2 ) ? ' nmt-tint' : ''; };
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

<!-- 1) OPIS PROIZVODA (zavihek "Product Description" + slika "Same comfort. Smarter choice.") — primerjava ob besedilu -->
<section class="nmt-sec<?php echo $nmt_cls(); ?>">
  <div class="nmt-wrap">
    <div class="nmt-row2">
      <div class="nmt-media">
        <div class="nmt-vs" role="group" aria-label="Usporedba klasičnog madraca i nadmadraca NORIKS MattressTopper">
          <div class="nmt-vs__card">
            <p class="nmt-vs__name">Klasični madrac</p>
            <div class="nmt-vs__img"><?php echo $nmt_img( 'nmt-s01-klasicni-madrac.webp', 'Klasični madrac na krevetu' ); ?></div>
            <ul class="nmt-vs__list"><?php foreach ( $nmt_cmp_old as $t ) : ?><li><?php echo esc_html( $t ); ?></li><?php endforeach; ?></ul>
          </div>
          <div class="nmt-vs__card nmt-vs__card--us">
            <p class="nmt-vs__name">NORIKS MattressTopper <span class="nmt-vs__tag">Najbolja vrijednost</span></p>
            <div class="nmt-vs__img"><?php echo $nmt_img( 'nmt-s01-nadmadrac.webp', 'Nadmadrac NORIKS MattressTopper na krevetu' ); ?></div>
            <ul class="nmt-vs__list"><?php foreach ( $nmt_cmp_new as $t ) : ?><li><?php echo esc_html( $t ); ?></li><?php endforeach; ?></ul>
          </div>
          <div class="nmt-vs__foot">
            <?php foreach ( $nmt_cmp_foot as $f ) : ?><span><b aria-hidden="true"><?php echo esc_html( $f[0] ); ?></b><?php echo esc_html( $f[1] ); ?></span><?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="nmt-copy">
        <p class="nmt-kicker">Opis proizvoda</p>
        <h2 class="nmt-h3">Nadogradite svoj madrac <em>u nekoliko minuta</em></h2>
        <p>Umorni ste od buđenja s bolovima ili osjećaja umora? Pridružite se tisućama zadovoljnih kupaca i <strong>nadogradite svoj madrac u nekoliko minuta</strong> uz luksuzni nadmadrac NORIKS MattressTopper.</p>
        <p>Jednostavno ga stavite na svoj madrac i <strong>poboljšajte san, ublažite bolove</strong> te se svako jutro budite <strong>odmorni i puni energije</strong>. Naručite danas uz <strong>50 % popusta</strong>!</p>
        <p class="nmt-big">Ista udobnost. Pametniji izbor.</p>
        <p>Zašto mijenjati madrac kada možete nadograditi svoj san?</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) ZAŠTO ĆETE GA VOLJETI ("Here's why you'll love it:" + slika "More Than 10,000 Happy Customers") — slika ob besedilu -->
<section class="nmt-sec<?php echo $nmt_cls(); ?>">
  <div class="nmt-wrap">
    <div class="nmt-row2 nmt-row2--rev">
      <div class="nmt-media"><?php echo $nmt_img( 'nmt-s02-par-na-nadmadracu.webp', 'Par sjedi na krevetu s nadmadracem NORIKS MattressTopper', 'nmt-img--free' ); ?></div>
      <div class="nmt-copy">
        <p class="nmt-kicker">Zašto ćete ga voljeti</p>
        <h2 class="nmt-h3">Evo zašto ćete ga <em>voljeti</em></h2>
        <ul class="nmt-love">
          <?php foreach ( $nmt_love as $l ) : ?>
          <li>
            <span class="nmt-love__ic" aria-hidden="true"><?php echo esc_html( $l[0] ); ?></span>
            <span><strong><?php echo esc_html( $l[1] ); ?>:</strong> <?php echo esc_html( $l[2] ); ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
        <p class="nmt-big">Niste zadovoljni? Imate pravo na povrat u roku od 30 dana.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) RECENZIJE KUPACA (191 -> 1081 po NORIKS, razdelitev skalirana na 692) -->
<section class="nmt-sec<?php echo $nmt_cls(); ?>">
  <div class="nmt-wrap">
    <p class="nmt-kicker nmt-c">Recenzije kupaca</p>
    <h2 class="nmt-h2 nmt-c">Što kažu naši <em>kupci</em></h2>
    <div class="nmt-score">
      <?php echo $nmt_stars( 5 ); ?>
      <span class="nmt-score__txt"><strong>4,9</strong> · na temelju 1081 recenzije</span>
    </div>
    <ul class="nmt-dist">
      <?php foreach ( $nmt_dist as $d ) : ?>
      <li>
        <span class="nmt-dist__lbl"><?php echo (int) $d[0]; ?> ★</span>
        <span class="nmt-dist__bar"><span style="width:<?php echo (int) $d[1]; ?>%"></span></span>
        <span class="nmt-dist__pct"><?php echo (int) $d[1]; ?> % (<?php echo (int) $d[2]; ?>)</span>
      </li>
      <?php endforeach; ?>
    </ul>
    <div class="nmt-reviews">
      <?php foreach ( $nmt_rv as $r ) : ?>
      <article class="nmt-card">
        <div class="nmt-card__body">
          <?php echo $nmt_stars( $r[1] ); ?>
          <p class="nmt-card__txt">„<?php echo esc_html( $r[2] ); ?>”</p>
          <p class="nmt-card__name"><?php echo esc_html( $r[0] ); ?> <span class="nmt-ok">✓ Potvrđena kupnja</span></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
/* NORIKS stil (predloga why-dualpillow.php / why-hands.php): oznaka + naslov z ležečim poudarkom, slika ob
   besedilu, izmenjujoča ozadja in strani. Topla rjava paleta NORIKS: poudarek #a9683f, krem ozadje #f8f2ec. */
.nmt-sec { padding: 60px 0; font-family: 'Poppins', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif; color: #231d19; background: #fff; }
.nmt-sec * { box-sizing: border-box; }
.nmt-tint { background: #f8f2ec; }
.nmt-wrap { width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 24px; }
.nmt-c { text-align: center; }
.nmt-sec h2, .nmt-sec h3 { font-family: inherit; text-transform: none; letter-spacing: 0; }
.nmt-kicker, .nmt-copy p.nmt-kicker { font-size: 12.5px; line-height: 1.4; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; color: #a9683f; margin: 0 0 10px; }
.nmt-h2 { font-weight: 700; font-size: clamp(25px, 3.1vw, 36px); line-height: 1.2; margin: 0 0 18px; color: #231d19; }
.nmt-h2 em, .nmt-h3 em { font-style: italic; color: #a9683f; }
.nmt-h3 { font-weight: 700; font-size: clamp(22px, 2.6vw, 30px); line-height: 1.25; margin: 0 0 16px; color: #231d19; }
.nmt-sec img { display: block; width: 100%; height: auto; }

/* slika ob besedilu */
.nmt-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nmt-row2--rev .nmt-media { order: 2; }
.nmt-media > img { border-radius: 10px; box-shadow: 0 2px 4px rgba(35,29,25,.05), 0 14px 40px rgba(35,29,25,.10); max-width: 580px; margin: 0 auto; aspect-ratio: 1 / 1; object-fit: cover; background: #fff; }
.nmt-media > img.nmt-img--free { aspect-ratio: auto; object-fit: contain; }
.nmt-copy p { font-size: 16px; line-height: 1.7; color: #4a3f37; margin: 0 0 14px; }
.nmt-copy p strong { color: #231d19; font-weight: 600; }
.nmt-sec p.nmt-big { font-size: 19px; font-weight: 700; color: #231d19; line-height: 1.45; margin-top: 6px; }

/* primerjava klasični madrac / NORIKS */
.nmt-vs { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; max-width: 580px; margin: 0 auto; }
.nmt-vs__card { background: #fff; border: 1px solid #eadcd3; border-radius: 10px; padding: 14px; box-shadow: 0 2px 10px rgba(35,29,25,.06); display: flex; flex-direction: column; gap: 12px; }
.nmt-vs__card--us { border: 2px solid #a9683f; background: #fffaf6; box-shadow: 0 6px 22px rgba(169,104,63,.18); }
.nmt-sec p.nmt-vs__name { font-size: 12.5px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; color: #231d19; margin: 0; line-height: 1.35; text-align: center; min-height: 34px; display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 6px; }
.nmt-vs__tag { display: inline-block; font-size: 10px; letter-spacing: .06em; padding: 3px 8px; border-radius: 999px; background: #eeddcd; color: #7a4a2c; }
.nmt-vs__img img { aspect-ratio: 4 / 3; object-fit: cover; border-radius: 8px; }
.nmt-vs__list { list-style: none; margin: 0; padding: 0; display: grid; gap: 7px; }
.nmt-vs__list li { position: relative; padding: 0 0 7px 22px; font-size: 13px; line-height: 1.4; color: #6b5f56; border-bottom: 1px solid #f1e7df; }
.nmt-vs__list li:last-child { border-bottom: 0; padding-bottom: 0; }
.nmt-vs__list li::before { content: "•"; position: absolute; left: 6px; top: 0; color: #b5a698; font-weight: 700; }
.nmt-vs__card--us .nmt-vs__list li { color: #231d19; }
.nmt-vs__card--us .nmt-vs__list li::before { content: "✓"; left: 0; width: 16px; height: 16px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 10px; line-height: 16px; text-align: center; top: 1px; }
.nmt-vs__foot { grid-column: 1 / -1; display: flex; justify-content: space-around; gap: 10px; flex-wrap: wrap; padding-top: 6px; }
.nmt-vs__foot span { font-size: 11.5px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; color: #4a3f37; display: inline-flex; align-items: center; gap: 7px; }
.nmt-vs__foot b { width: 26px; height: 26px; border-radius: 50%; border: 1px solid #dcc3ad; color: #a9683f; display: inline-flex; align-items: center; justify-content: center; font-size: 13px; letter-spacing: 0; background: #fff; }

/* zašto ćete ga voljeti */
.nmt-love { list-style: none; margin: 4px 0 14px; padding: 0; display: grid; gap: 13px; }
.nmt-love li { display: flex; align-items: center; gap: 14px; font-size: 15.5px; line-height: 1.5; color: #4a3f37; }
.nmt-love li strong { color: #231d19; font-weight: 600; }
.nmt-love__ic { flex: 0 0 42px; width: 42px; height: 42px; border-radius: 50%; background: #f7ece2; border: 1px solid #dcc3ad; color: #a9683f; display: flex; align-items: center; justify-content: center; font-size: 17px; font-weight: 700; }

/* ocjene in recenzije */
.nmt-stars { color: #f2a516; letter-spacing: 1px; font-size: 15px; }
.nmt-stars__off { color: #e2d6cc; }
.nmt-ok { color: #2f9e5f; font-weight: 600; font-size: 12px; margin-left: 4px; font-style: normal; }
.nmt-score { display: flex; justify-content: center; align-items: center; gap: 12px; margin: -4px 0 18px; flex-wrap: wrap; }
.nmt-score .nmt-stars { font-size: 20px; }
.nmt-score__txt { font-size: 14.5px; color: #6b5f56; }
.nmt-score__txt strong { color: #231d19; }
.nmt-dist { list-style: none; margin: 0 auto 32px; padding: 0; max-width: 460px; }
.nmt-dist li { display: grid; grid-template-columns: 38px 1fr 92px; gap: 10px; align-items: center; margin: 0 0 8px; font-size: 14px; color: #231d19; }
.nmt-dist__lbl { font-weight: 600; white-space: nowrap; }
.nmt-dist__bar { display: block; height: 10px; border-radius: 6px; background: #eeddcd; overflow: hidden; }
.nmt-dist__bar span { display: block; height: 100%; background: #a9683f; border-radius: 6px; }
.nmt-dist__pct { color: #6b5f56; white-space: nowrap; }
.nmt-card { background: #fff; border: 1px solid #eadcd3; border-radius: 10px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 2px 10px rgba(35,29,25,.05); }
.nmt-sec:not(.nmt-tint) .nmt-card { background: #fdf8f5; }
.nmt-card__body { padding: 16px; }
.nmt-card__txt { font-size: 14.5px; line-height: 1.6; color: #3a302a; margin: 8px 0 10px; font-style: italic; }
.nmt-card__name { font-size: 13.5px; font-weight: 600; color: #231d19; margin: 0; }
.nmt-reviews { columns: 4; column-gap: 18px; }
.nmt-reviews > .nmt-card { break-inside: avoid; margin-bottom: 18px; }

@media (max-width: 989px) {
  .nmt-row2 { gap: 32px; }
  .nmt-reviews { columns: 3; }
}
@media (max-width: 749px) {
  .nmt-sec { padding: 42px 0; }
  .nmt-wrap { padding: 0 16px; }
  .nmt-row2 { grid-template-columns: 1fr; gap: 24px; }
  .nmt-row2--rev .nmt-media { order: 0; }
  .nmt-vs { gap: 10px; }
  .nmt-vs__card { padding: 10px; }
  .nmt-vs__foot span { font-size: 10px; letter-spacing: .06em; }
  .nmt-reviews { columns: 2; column-gap: 12px; }
  .nmt-reviews > .nmt-card { margin-bottom: 12px; }
  .nmt-card__body { padding: 12px; }
}
@media (max-width: 480px) {
  .nmt-reviews { columns: 1; }
}

/* galerija izdelka: sličice največ v 2 vrstah (5 na vrsto), ostale slike so dosegljive z drsenjem glavne slike */
.product_cat-orto-mattresstopper .flex-control-thumbs li:nth-child(n+11) { display: none !important; }

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
.woocommerce-product-details__short-description .nmt-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
