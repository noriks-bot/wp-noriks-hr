<?php
/**
 * product-bottom: NORIKS SR — rastezljiva kosulja bez guzvanja (orto-sr).
 *
 * Sekcije prate original (itsimperium.com — Sovereign Stretch Dress Shirt):
 *   1) Snazne osobine — 4 svojstva (elasticnost u 4 smjera, prozracna i mekana,
 *      bez neugodnih mirisa, bez guzvanja), slika naizmjenicno lijevo/desno
 *   2) Osam boja, kratki i dugi rukav
 *   3) Kako stoji — modeli razlicitih visina i tezina (podaci s fotografija)
 *   4) Jamstvo povrata novca + tri oznake povjerenja
 * Recenzije i FAQ renderira zajednicki reviews.php.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$sr      = get_template_directory_uri() . '/img/sr/';
$sr_path = get_template_directory() . '/img/sr/';

$sr_img = function( $file, $alt ) use ( $sr, $sr_path ) {
  if ( file_exists( $sr_path . $file ) ) {
    return '<img src="' . esc_url( $sr . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
  }
  return '<div class="nsr-ph" role="img" aria-label="' . esc_attr( $alt ) . '"><span>' . esc_html( $alt ) . '</span></div>';
};
?>

<!-- 1) Snazne osobine -->
<section class="nsr-sec nsr-light">
  <div class="nsr-wrap">
    <div class="nsr-lead">
      <h2 class="nsr-h2">Snažne osobine</h2>
      <p>Četiri stvari zbog kojih se ova košulja nosi češće od ostalih u ormaru.</p>
    </div>

    <div class="nsr-row">
      <div class="nsr-media"><?php echo $sr_img( 'sr-01-4way.jpg', 'Elastičnost tkanine u četiri smjera' ); ?></div>
      <div class="nsr-copy">
        <p class="nsr-eyebrow">Tehnologija tkanine</p>
        <h3 class="nsr-h3">Elastičnost u 4 smjera</h3>
        <p>Tkanina se rasteže gore-dolje i lijevo-desno, pa prati rame i lakat u svakom pokretu. Sagnete se, posegnete za nečim ili sjednete za volan — <strong>košulja se rasteže s vama i odmah se vraća u svoj oblik</strong>.</p>
        <p class="nsr-note">Mješavina poliestera i elastana s 12 % elastana.</p>
      </div>
    </div>

    <div class="nsr-row">
      <div class="nsr-copy">
        <p class="nsr-eyebrow">Struktura cijeli dan</p>
        <h3 class="nsr-h3">Bez gužvanja</h3>
        <p>Ovratnik i prednjica drže oblik od jutarnjeg sastanka do večernjeg izlaska. Košulja izgleda uredno i nakon što ste je izvadili iz torbe — <strong>glačalo joj nikad ne treba</strong>.</p>
      </div>
      <div class="nsr-media"><?php echo $sr_img( 'sr-02-bez-guzvanja.jpg', 'Ovratnik košulje bez gužvanja' ); ?></div>
    </div>

    <div class="nsr-row">
      <div class="nsr-media"><?php echo $sr_img( 'sr-03-prozracna.jpg', 'Prozračna tkanina košulje' ); ?></div>
      <div class="nsr-copy">
        <p class="nsr-eyebrow">Osjećaj na koži</p>
        <h3 class="nsr-h3">Prozračna i mekana</h3>
        <p>Lagana tkanina odvodi toplinu i znoj s kože, pa ostajete suhi i kad se dan zagrije. Na dodir je mekana i <strong>ne ljepi se za leđa</strong>.</p>
      </div>
    </div>

    <div class="nsr-row">
      <div class="nsr-copy">
        <p class="nsr-eyebrow">Cijeli dan i navečer</p>
        <h3 class="nsr-h3">Bez neugodnih mirisa</h3>
        <p>Tkanina je obrađena tako da <strong>zadržava svježinu i nakon dugog dana</strong> — od ureda, preko puta doma, do večere bez presvlačenja.</p>
      </div>
      <div class="nsr-media"><?php echo $sr_img( 'sr-11-siva-rooftop.jpg', 'Muškarac u grafitnoj NORIKS SR košulji' ); ?></div>
    </div>
  </div>
</section>

<!-- 2) Boje i rukavi -->
<section class="nsr-sec nsr-dark">
  <div class="nsr-wrap nsr-row">
    <div class="nsr-media"><?php echo $sr_img( 'sr-05-sve-boje.jpg', 'Osam boja NORIKS SR košulje' ); ?></div>
    <div class="nsr-copy">
      <h2 class="nsr-h2">Osam boja, kratki i dugi rukav</h2>
      <p>Isti kroj i ista tkanina u svakoj boji. Rukav birate pri narudžbi — kratki za ljeto i vruće urede, dugi za sastanke i večeri.</p>
      <ul class="nsr-colors">
        <li><span class="nsr-dot" style="background:#f2f2f4;border:1px solid #cfcfd6;"></span>Bijela</li>
        <li><span class="nsr-dot" style="background:#c5d2ec;"></span>Svijetloplava</li>
        <li><span class="nsr-dot" style="background:#000;"></span>Crna</li>
        <li><span class="nsr-dot" style="background:#1c2233;"></span>Teget</li>
        <li><span class="nsr-dot" style="background:#3d3a40;"></span>Grafitna</li>
        <li><span class="nsr-dot" style="background:#61282f;"></span>Bordo</li>
        <li><span class="nsr-dot" style="background:#0a4467;"></span>Petrol</li>
        <li><span class="nsr-dot" style="background:#0a3b52;"></span>Tamno petrol</li>
      </ul>
      <p class="nsr-note">Veličine S, M, L, XL, 2XL i 3XL.</p>
    </div>
  </div>
</section>

<!-- 3) Kako stoji na razlicitim tipovima tijela -->
<section class="nsr-sec nsr-light">
  <div class="nsr-wrap">
    <div class="nsr-lead">
      <h2 class="nsr-h2">Kako stoji</h2>
      <p>Modeli s fotografija, njihove mjere i veličina koju nose — najlakši način da procijenite svoju.</p>
    </div>
    <div class="nsr-grid">
      <figure>
        <?php echo $sr_img( 'sr-07-svijetloplava.jpg', 'Model 178 cm, 75 kg nosi veličinu M' ); ?>
        <figcaption><strong>178 cm · 75 kg</strong><span>veličina M</span></figcaption>
      </figure>
      <figure>
        <?php echo $sr_img( 'sr-09-petrol-kratki-rukav.jpg', 'Model 183 cm, 73 kg nosi veličinu M' ); ?>
        <figcaption><strong>183 cm · 73 kg</strong><span>veličina M</span></figcaption>
      </figure>
      <figure>
        <?php echo $sr_img( 'sr-10-tamno-petrol.jpg', 'Model 180 cm, 82 kg nosi veličinu L' ); ?>
        <figcaption><strong>180 cm · 82 kg</strong><span>veličina L</span></figcaption>
      </figure>
      <figure>
        <?php echo $sr_img( 'sr-04-bijela-kosulja.jpg', 'Model 188 cm, 104 kg nosi veličinu XL' ); ?>
        <figcaption><strong>188 cm · 104 kg</strong><span>veličina XL</span></figcaption>
      </figure>
      <figure>
        <?php echo $sr_img( 'sr-08-bordo.jpg', 'Model 185 cm, 129 kg nosi veličinu 3XL' ); ?>
        <figcaption><strong>185 cm · 129 kg</strong><span>veličina 3XL</span></figcaption>
      </figure>
      <figure>
        <?php echo $sr_img( 'sr-13-svijetloplava-3xl.jpg', 'Model 183 cm, 125 kg nosi veličinu 3XL' ); ?>
        <figcaption><strong>183 cm · 125 kg</strong><span>veličina 3XL</span></figcaption>
      </figure>
    </div>
    <p class="nsr-note nsr-center">Košulja je vjerna veličinama. Ako ste između dvije, uzmite veću za opušteniji kroj.</p>
  </div>
</section>

<!-- 4) Jamstvo + oznake povjerenja -->
<section class="nsr-sec nsr-dark">
  <div class="nsr-wrap nsr-row">
    <div class="nsr-copy">
      <h2 class="nsr-h2">Jamstvo povrata novca</h2>
      <p>Niste zadovoljni kupnjom? Povrat ili zamjenu možete zatražiti u roku od <strong>30 dana</strong> od dostave. Naša podrška je tu da pomogne.</p>
      <div class="nsr-badges">
        <div><strong>Vjerna veličinama</strong><span>Veličina koju naručite je veličina koju dobijete.</span></div>
        <div><strong>Brza dostava</strong><span>Šaljemo odmah, dostava 2–5 radnih dana.</span></div>
        <div><strong>30 dana za povrat</strong><span>Povrat novca ili zamjena unutar 30 dana od dostave.</span></div>
      </div>
    </div>
    <div class="nsr-media"><?php echo $sr_img( 'sr-12-teget-kratki-rukav.jpg', 'Teget NORIKS SR košulja kratkih rukava' ); ?></div>
  </div>
</section>

<style>
.nsr-sec { padding: 46px 0; }
.nsr-light { background: #f5f6f8; color: #1b2330; }
.nsr-dark  { background: #1b2a41; color: #eef2f7; }
.nsr-dark h2, .nsr-dark h3, .nsr-dark p, .nsr-dark li, .nsr-dark span, .nsr-dark strong { color: #eef2f7; }
.nsr-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; }
.nsr-lead { max-width: 820px; margin: 0 auto 26px; text-align: center; }
.nsr-h2 { font-size: 27px; line-height: 1.22; margin: 0 0 12px; font-weight: 700; }
.nsr-h3 { font-size: 21px; line-height: 1.25; margin: 0 0 10px; font-weight: 700; }
.nsr-sec p { font-size: 15.5px; line-height: 1.62; margin: 0 0 12px; }
.nsr-eyebrow { text-transform: uppercase; letter-spacing: .14em; font-size: 12px; font-weight: 700; color: #c8992f; margin: 0 0 6px; }
.nsr-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; margin-bottom: 34px; }
.nsr-row:last-child { margin-bottom: 0; }
.nsr-media img { width: 100%; height: auto; max-height: 430px; object-fit: contain; display: block; border-radius: 14px; }
.nsr-ph { display: flex; align-items: center; justify-content: center; min-height: 200px; background: #e2e5ea; border-radius: 12px; color: #7d8694; font-size: 14px; text-align: center; padding: 12px; }
.nsr-note { font-size: 14px; opacity: .82; margin: 8px 0 0; }
.nsr-center { text-align: center; margin-top: 18px; }
.nsr-colors { list-style: none; padding: 0; margin: 14px 0 0; display: grid; grid-template-columns: 1fr 1fr; gap: 9px 18px; }
.nsr-colors li { display: flex; align-items: center; gap: 10px; font-size: 15px; }
.nsr-dot { width: 20px; height: 20px; border-radius: 50%; display: inline-block; flex: 0 0 auto; }
.nsr-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.nsr-grid figure { margin: 0; }
.nsr-grid img { width: 100%; height: auto; display: block; border-radius: 14px; }
.nsr-grid figcaption { text-align: center; padding-top: 10px; }
.nsr-grid figcaption strong { display: block; font-size: 16px; }
.nsr-grid figcaption span { display: block; font-size: 14px; opacity: .78; }
.nsr-badges { display: grid; grid-template-columns: 1fr; gap: 12px; margin-top: 16px; }
.nsr-badges div { border: 1px solid rgba(255,255,255,.18); border-radius: 12px; padding: 14px 16px; background: rgba(255,255,255,.05); }
.nsr-badges strong { display: block; font-size: 16px; margin-bottom: 3px; }
.nsr-badges span { display: block; font-size: 14px; opacity: .84; }
@media (max-width: 820px) {
  .nsr-sec { padding: 22px 0; }
  .nsr-wrap { padding-left: 14px; padding-right: 14px; }
  .nsr-h2 { font-size: 22px; }
  .nsr-row { grid-template-columns: 1fr; gap: 18px; margin-bottom: 26px; }
  .nsr-row .nsr-media { order: -1; }
  .nsr-grid { grid-template-columns: 1fr 1fr; gap: 14px; }
  .nsr-colors { grid-template-columns: 1fr; }
}

/* kratki opis proizvoda: kvacice umjesto tockica */
.woocommerce-product-details__short-description ul,
.woocommerce div.product .woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 8px 0 14px !important; padding-left: 0 !important; }
.woocommerce-product-details__short-description ul li,
.woocommerce div.product .woocommerce-product-details__short-description ul li {
  list-style: none !important; list-style-type: none !important; padding-left: 24px !important;
  text-indent: -24px !important; margin-left: 0 !important; line-height: 1.55 !important; margin-bottom: 8px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nsr-tick {
  display: inline-block !important; width: 24px !important; text-indent: 0 !important;
  color: #c8992f !important; font-weight: 800 !important; }
</style>
