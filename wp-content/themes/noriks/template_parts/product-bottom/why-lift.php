<?php
/**
 * product-bottom: NORIKS FaceLift — kolagenska traka za oblikovanje lica (orto-lift).
 *
 * Redoslijed prati referentnu stranicu (tryskult.com / Sculpting Face Wrap):
 *   1. Opustena koza je prvi znak starenja      lift-10-sjaj
 *   2. Kako djeluje — 3 koraka                  lift-13 / lift-06
 *   3. Tijek oblikovanja linije celjusti        lift-17-tijek
 *   4. Prije i poslije                          lift-03/04/05
 *   5. Preporuka dermatologa                    lift-02
 *   6. Zasto botoks i fileri ne uspijevaju      lift-18-vs
 *   7. Konacno tretman koji djeluje             lift-15-prednosti
 *   8. Recenzija + traka korisnica              lift-16 + UGC
 *   9. Jamstvo 30 dana                          lift-09
 * Recenzije i FAQ renderira zajednicki reviews.php.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$lf      = get_template_directory_uri() . '/img/lift/';
$lf_path = get_template_directory() . '/img/lift/';

$lf_img = function( $file, $alt ) use ( $lf, $lf_path ) {
  if ( file_exists( $lf_path . $file ) ) {
    return '<img src="' . esc_url( $lf . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
  }
  return '<div class="nlf-ph" role="img" aria-label="' . esc_attr( $alt ) . '"><span>' . esc_html( $alt ) . '</span></div>';
};
?>

<!-- ============ 1) Problem ============ -->
<section class="nlf-sec nlf-cream">
  <div class="nlf-wrap nlf-row2">
    <div class="nlf-media"><?php echo $lf_img( 'lift-10-sjaj.jpg', 'NORIKS FaceLift traka na licu' ); ?></div>
    <div class="nlf-copy">
      <p class="nlf-eyebrow">Oštra linija čeljusti. Bez operacije.</p>
      <h2 class="nlf-h2">Opuštena koža je prvi znak starenja</h2>
      <p>Nakon 40. godine koža gubi kolagen brže nego što ga stvara. Linija čeljusti omekša, u donjem dijelu lica se zadržava tekućina, a lice djeluje teže nego što se osjećate.</p>
      <p class="nlf-strong">NORIKS FaceLift spaja dvoje: ciljanu kompresiju koja podiže i tkaninu s kolagenom od 300 daltona koja hrani kožu dok je nosite.</p>
      <p>Kolagen od 300 daltona ima dovoljno malu molekulu da prođe površinski sloj — za razliku od običnih krema koje ostaju na vrhu kože.</p>
      <ul class="nlf-ticks">
        <li>20 – 30 minuta dnevno, dok gledate TV ili završavate njegu lica</li>
        <li>Bez igala, bez zahvata, bez oporavka</li>
        <li>Periv i višekratan — do 15 uporaba po traci</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 2) Kako se koristi ============ -->
<section class="nlf-sec nlf-dark">
  <div class="nlf-wrap">
    <h2 class="nlf-h2 nlf-center">Tri koraka, svaku večer</h2>
    <p class="nlf-lead nlf-center">Cijela rutina traje koliko i jedna epizoda serije.</p>
    <div class="nlf-steps">
      <div class="nlf-step">
        <span class="nlf-num">1</span>
        <h3>Očistite i osušite lice</h3>
        <p>Koža bez teških ulja upija kolagen dublje. Serum ili kremu možete nanijeti prije — traka pomaže da se upiju.</p>
      </div>
      <div class="nlf-step">
        <span class="nlf-num">2</span>
        <h3>Namjestite traku</h3>
        <p>Čičak-trake na tjemenu i zatiljku zategnite do ugodne napetosti. Otvori za uši drže traku na mjestu i dok se krećete.</p>
      </div>
      <div class="nlf-step">
        <span class="nlf-num">3</span>
        <h3>Opustite se 20 – 30 minuta</h3>
        <p>Kompresija podiže liniju čeljusti prema gore, a kolagen radi na strukturi kože. Skinite traku i lice djeluje čvršće i lakše.</p>
      </div>
    </div>
    <div class="nlf-two">
      <figure><?php echo $lf_img( 'lift-13-ogrtac.jpg', 'Traka tijekom večernje rutine' ); ?></figure>
      <figure><?php echo $lf_img( 'lift-06-plava.jpg', 'Traka se nosi udobno kod kuće' ); ?></figure>
    </div>
    <p class="nlf-note">Dosljednost je ono što razdvaja „ništa ne djeluje" od „suprug je primijetio prije mene". Nosite ga svaki dan.</p>
  </div>
</section>

<!-- ============ 3) Tijek ============ -->
<section class="nlf-sec nlf-cream">
  <div class="nlf-wrap">
    <h2 class="nlf-h2 nlf-center">Što se događa tjedan po tjedan</h2>
    <p class="nlf-lead nlf-center">Prvo nestaje oteklina, zatim se koža zateže, a definirana čeljust dolazi na kraju.</p>
    <figure class="nlf-full"><?php echo $lf_img( 'lift-17-tijek.jpg', 'Tijek oblikovanja linije čeljusti kroz tjedne' ); ?></figure>
  </div>
</section>

<!-- ============ 4) Prije i poslije ============ -->
<section class="nlf-sec nlf-white">
  <div class="nlf-wrap">
    <h2 class="nlf-h2 nlf-center">Stvarne korisnice, stvarni tjedni</h2>
    <div class="nlf-three">
      <figure><?php echo $lf_img( 'lift-03-pp7.jpg', 'Prije i nakon 7 tjedana' ); ?><figcaption>Nakon 7 tjedana</figcaption></figure>
      <figure><?php echo $lf_img( 'lift-04-pp10.jpg', 'Prije i nakon 10 tjedana' ); ?><figcaption>Nakon 10 tjedana</figcaption></figure>
      <figure><?php echo $lf_img( 'lift-05-pp11.jpg', 'Prije i nakon 11 tjedana' ); ?><figcaption>Nakon 11 tjedana</figcaption></figure>
    </div>
    <div class="nlf-stats">
      <div><strong>96 %</strong><span>odmah je primijetilo manju oteklinu u donjem dijelu lica</span></div>
      <div><strong>92 %</strong><span>prijavilo je vidljivo podizanje nakon 4 tjedna</span></div>
      <div><strong>91 %</strong><span>osjeća se sigurnije na fotografijama</span></div>
    </div>
  </div>
</section>

<!-- ============ 5) Dermatolog ============ -->
<section class="nlf-sec nlf-cream">
  <div class="nlf-wrap">
    <figure class="nlf-full"><?php echo $lf_img( 'lift-02-dermatolog.jpg', 'Preporuka dermatologa' ); ?></figure>
  </div>
</section>

<!-- ============ 6) Botoks vs kompresija ============ -->
<section class="nlf-sec nlf-white">
  <div class="nlf-wrap">
    <h2 class="nlf-h2 nlf-center">Zašto injekcije ne rješavaju opuštenu kožu</h2>
    <p class="nlf-lead nlf-center">Fileri popunjavaju volumen, ali ne vraćaju strukturu. Kompresija s kolagenom radi na sloju u kojem struktura zapravo nastaje.</p>
    <figure class="nlf-full"><?php echo $lf_img( 'lift-18-vs.jpg', 'Usporedba: botoks i fileri naspram kompresije s kolagenom' ); ?></figure>
  </div>
</section>

<!-- ============ 7) Prednosti ============ -->
<section class="nlf-sec nlf-cream">
  <div class="nlf-wrap">
    <figure class="nlf-full"><?php echo $lf_img( 'lift-15-prednosti.jpg', 'Prednosti trake za oblikovanje lica' ); ?></figure>
  </div>
</section>

<!-- ============ 8) Recenzija + korisnice ============ -->
<section class="nlf-sec nlf-white">
  <div class="nlf-wrap">
    <figure class="nlf-full nlf-narrow"><?php echo $lf_img( 'lift-16-sanja.jpg', 'Recenzija korisnice' ); ?></figure>
    <div class="nlf-strip">
      <?php
      foreach ( array(
        'lift-07-kuhinja.jpg'   => 'Korisnica s NORIKS FaceLift trakom',
        'lift-08-crvenokosa.jpg'=> 'Korisnica s NORIKS FaceLift trakom',
        'lift-12-kovrcava.jpg'  => 'Korisnica s NORIKS FaceLift trakom',
        'lift-14-kardigan.jpg'  => 'Korisnica s NORIKS FaceLift trakom',
        'lift-01-selfie.jpg'    => 'Zadovoljne korisnice',
      ) as $f => $alt ) {
        echo '<figure>' . $lf_img( $f, $alt ) . '</figure>';
      }
      ?>
    </div>
  </div>
</section>

<!-- ============ 9) Jamstvo ============ -->
<section class="nlf-sec nlf-cream">
  <div class="nlf-wrap">
    <figure class="nlf-full"><?php echo $lf_img( 'lift-09-jamstvo.jpg', 'Jamstvo povrata novca 30 dana' ); ?></figure>
  </div>
</section>

<style>
.nlf-sec { padding: 46px 0; }
.nlf-cream { background: #f7efe4; color: #3a2c20; }
.nlf-white { background: #fff; color: #2a2118; }
.nlf-dark  { background: #3a2c20; color: #f7efe4; }
.nlf-wrap { max-width: 1080px; margin: 0 auto; padding: 0 18px; }
.nlf-eyebrow { text-transform: uppercase; letter-spacing: .14em; font-size: 12px; font-weight: 700;
               color: #a5825a; margin: 0 0 8px; }
.nlf-h2 { font-size: 30px; line-height: 1.2; margin: 0 0 12px; font-weight: 700; }
.nlf-lead { font-size: 16px; opacity: .85; margin: 0 0 20px; }
.nlf-center { text-align: center; }
.nlf-sec p { font-size: 16px; line-height: 1.65; margin: 0 0 12px; }
.nlf-strong { font-weight: 600; }
.nlf-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 34px; align-items: center; }
.nlf-media img, .nlf-sec figure img { width: 100%; height: auto; display: block; border-radius: 12px; }
.nlf-ticks { list-style: none; padding: 0; margin: 16px 0 0; }
.nlf-ticks li { position: relative; padding-left: 26px; margin-bottom: 8px; font-size: 15.5px; }
.nlf-ticks li:before { content: ""; position: absolute; left: 0; top: 6px; width: 13px; height: 13px;
                       border-radius: 50%; background: #a5825a; }
.nlf-steps { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin: 22px 0 26px; }
.nlf-step { background: rgba(255,255,255,.08); border-radius: 12px; padding: 22px 20px; }
.nlf-dark .nlf-step h3 { font-size: 17px; margin: 12px 0 8px; }
.nlf-dark .nlf-step p { font-size: 15px; opacity: .9; margin: 0; }
.nlf-num { display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px;
           border-radius: 50%; background: #e6cfae; color: #3a2c20; font-weight: 800; }
.nlf-two { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin: 0 0 18px; }
.nlf-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; margin: 8px 0 26px; }
.nlf-three figcaption { text-align: center; font-size: 14px; margin-top: 8px; opacity: .75; }
.nlf-full { margin: 0; }
.nlf-narrow { max-width: 660px; margin: 0 auto 22px; }
.nlf-note { text-align: center; font-size: 15px; opacity: .9; margin: 0; }
.nlf-stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
.nlf-stats div { background: #f7efe4; border-radius: 12px; padding: 20px; text-align: center; }
.nlf-stats strong { display: block; font-size: 30px; color: #8a6a45; line-height: 1.1; }
.nlf-stats span { display: block; font-size: 14.5px; margin-top: 6px; color: #4a3a2c; }
.nlf-strip { display: flex; gap: 14px; overflow-x: auto; padding-bottom: 6px; -webkit-overflow-scrolling: touch; }
.nlf-strip figure { flex: 0 0 240px; margin: 0; }
.nlf-ph { display: flex; align-items: center; justify-content: center; min-height: 220px; background: #ece0cf;
          border-radius: 12px; color: #8a6a45; font-size: 14px; text-align: center; padding: 12px; }
@media (max-width: 860px) {
  .nlf-sec { padding: 34px 0; }
  .nlf-h2 { font-size: 24px; }
  .nlf-row2, .nlf-steps, .nlf-three, .nlf-two, .nlf-stats { grid-template-columns: 1fr; gap: 18px; }
  .nlf-strip figure { flex: 0 0 200px; }
}
</style>
