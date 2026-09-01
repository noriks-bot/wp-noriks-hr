<?php
/**
 * product-bottom: NORIKS SR — rastezljiva kosulja bez guzvanja (orto-sr).
 * Postavitev po originalu (itsimperium.com — Sovereign Stretch Dress Shirt):
 *   1) Snazne osobine — 4 ikone u nizu
 *   2) Tri kartice tkanine (slike vec sadrze naslov i opis)
 *   3) Osam boja, kratki i dugi rukav
 *   4) Kako stoji — modeli i njihove velicine
 *   5) Jamstvo povrata novca + tri oznake povjerenja
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

$sr_ico = function( $d ) {
  return '<span class="nsr-ico"><svg viewBox="0 0 24 24" fill="none" stroke="#1b2a41" stroke-width="1.6" '
       . 'stroke-linecap="round" stroke-linejoin="round">' . $d . '</svg></span>';
};
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap">

<!-- 1) Snazne osobine -->
<section class="nsr-sec nsr-white">
  <div class="nsr-wrap">
    <h2 class="nsr-h2 nsr-center">Snažne osobine</h2>
    <p class="nsr-tagline">Četiri stvari zbog kojih se ova košulja nosi češće od ostalih u ormaru.</p>
    <div class="nsr-four">
      <div>
        <?php echo $sr_ico( '<path d="M12 3v18M3 12h18"/><path d="M9 6l3-3 3 3M9 18l3 3 3-3M6 9l-3 3 3 3M18 9l3 3-3 3"/>' ); ?>
        <strong>Elastičnost u 4 smjera</strong>
        <p>Prati vas u svakom pokretu, cijeli dan.</p>
      </div>
      <div>
        <?php echo $sr_ico( '<path d="M4 14a8 8 0 0 1 16 0"/><path d="M7 18c2-2 3-4 5-4s3 2 5 4"/><path d="M12 3v3"/>' ); ?>
        <strong>Prozračna i mekana</strong>
        <p>Lagana tkanina koja ostaje svježa na koži.</p>
      </div>
      <div>
        <?php echo $sr_ico( '<circle cx="12" cy="12" r="8"/><path d="M8 12h8"/><path d="M5 5l14 14"/>' ); ?>
        <strong>Bez neugodnih mirisa</strong>
        <p>Ostaje svježa i kad se dan zagrije.</p>
      </div>
      <div>
        <?php echo $sr_ico( '<path d="M4 7h16"/><path d="M4 12h16"/><path d="M4 17h16"/><path d="M8 3l-2 18"/>' ); ?>
        <strong>Bez gužvanja</strong>
        <p>Izgleda uredno od jutra do večeri. Bez glačanja.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) Tri detaljne sekcije s vlastitim fotografijama -->
<section class="nsr-sec nsr-grey">
  <div class="nsr-wrap">
    <div class="nsr-row">
      <div class="nsr-media"><?php echo $sr_img( 'sr-detalj-1-rastezanje.jpg', 'Tkanina se rasteže u sva četiri smjera' ); ?></div>
      <div class="nsr-copy">
        <p class="nsr-eyebrow">Tehnologija tkanine</p>
        <h3 class="nsr-h3">Rasteže se s vama, ne protiv vas</h3>
        <p>Tkanina popušta u sva četiri smjera i odmah se vraća u svoj oblik. Ramena, laktovi i leđa dobiju prostor pri svakom pokretu — <strong>bez zatezanja i bez izvlačenja košulje iz hlača</strong>.</p>
        <p class="nsr-note">Mješavina poliestera i elastana s 12 % elastana.</p>
      </div>
    </div>

    <div class="nsr-row">
      <div class="nsr-copy">
        <p class="nsr-eyebrow">Ista košulja, cijeli dan</p>
        <h3 class="nsr-h3">Lijevo obična košulja. Desno NORIKS SR.</h3>
        <p>Obična košulja se izgužva već u autu. NORIKS SR zadržava strukturu od jutra do večeri i <strong>izgleda uredno i kad je izvadite iz torbe</strong> — glačalo joj nije potrebno.</p>
      </div>
      <div class="nsr-media"><?php echo $sr_img( 'sr-detalj-2-guzvanje.jpg', 'Obična košulja izgužvana, NORIKS SR glatka' ); ?></div>
    </div>

    <div class="nsr-row">
      <div class="nsr-media"><?php echo $sr_img( 'sr-detalj-3-tkanina.jpg', 'Prozračna tkanina odbija vlagu' ); ?></div>
      <div class="nsr-copy">
        <p class="nsr-eyebrow">Osjećaj na koži</p>
        <h3 class="nsr-h3">Prozračna, suha i bez mirisa</h3>
        <p>Između niti prolazi zrak, pa toplina i vlaga odlaze s kože umjesto da ostanu na njoj. Tkanina je obrađena tako da <strong>zadržava svježinu i nakon dugog dana</strong>.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3) Boje i rukavi -->
<section class="nsr-sec nsr-white">
  <div class="nsr-wrap nsr-row">
    <div class="nsr-media"><?php echo $sr_img( 'sr-05-sve-boje.jpg', 'Osam boja NORIKS SR košulje' ); ?></div>
    <div class="nsr-copy">
      <h2 class="nsr-h2">Osam boja, kratki i dugi rukav</h2>
      <p class="nsr-tagline nsr-tagline-left">Isti kroj i ista tkanina u svakoj boji.</p>
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

<!-- 4) Kako stoji -->
<section class="nsr-sec nsr-grey">
  <div class="nsr-wrap">
    <h2 class="nsr-h2 nsr-center">Kako stoji</h2>
    <p class="nsr-tagline">Modeli s fotografija, njihove mjere i veličina koju nose.</p>
        <div class="nsr-grid">
      <figure><?php echo $sr_img( 'sr-07-svijetloplava.jpg', 'Model 178 cm, 75 kg nosi veličinu M' ); ?>
        <figcaption><strong>178 cm · 75 kg</strong><span>veličina M</span></figcaption></figure>
      <figure><?php echo $sr_img( 'sr-09-petrol-kratki-rukav.jpg', 'Model 183 cm, 73 kg nosi veličinu M' ); ?>
        <figcaption><strong>183 cm · 73 kg</strong><span>veličina M</span></figcaption></figure>
      <figure><?php echo $sr_img( 'sr-10-tamno-petrol.jpg', 'Model 180 cm, 82 kg nosi veličinu L' ); ?>
        <figcaption><strong>180 cm · 82 kg</strong><span>veličina L</span></figcaption></figure>
      <figure><?php echo $sr_img( 'sr-04-bijela-kosulja.jpg', 'Model 188 cm, 104 kg nosi veličinu XL' ); ?>
        <figcaption><strong>188 cm · 104 kg</strong><span>veličina XL</span></figcaption></figure>
      <figure><?php echo $sr_img( 'sr-08-bordo.jpg', 'Model 185 cm, 129 kg nosi veličinu 3XL' ); ?>
        <figcaption><strong>185 cm · 129 kg</strong><span>veličina 3XL</span></figcaption></figure>
      <figure><?php echo $sr_img( 'sr-13-svijetloplava-3xl.jpg', 'Model 183 cm, 125 kg nosi veličinu 3XL' ); ?>
        <figcaption><strong>183 cm · 125 kg</strong><span>veličina 3XL</span></figcaption></figure>
    </div>
    <p class="nsr-note nsr-center">Košulja je vjerna veličinama. Ako ste između dvije, uzmite veću za opušteniji kroj.</p>
  </div>
</section>

<!-- 5) Jamstvo + oznake povjerenja -->
<section class="nsr-sec nsr-navy">
  <div class="nsr-wrap">
    <h2 class="nsr-h2 nsr-center">Jamstvo povrata novca</h2>
    <p class="nsr-tagline">Kupujete bez rizika — zamjena veličine ili povrat novca u 30 dana.</p>
    <p class="nsr-lead">Niste zadovoljni kupnjom? Povrat ili zamjenu možete zatražiti u roku od 30 dana od dostave. Naša podrška je tu da pomogne.</p>
    <div class="nsr-badges">
      <div><strong>Vjerna veličinama</strong><span>Veličina koju naručite je veličina koju dobijete.</span></div>
      <div><strong>Brza dostava</strong><span>Šaljemo odmah, dostava 2–5 radnih dana.</span></div>
      <div><strong>30 dana za povrat</strong><span>Povrat novca ili zamjena unutar 30 dana od dostave.</span></div>
    </div>
  </div>
</section>

<style>
.nsr-sec, .nsr-sec p, .nsr-sec li, .nsr-sec td {
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif !important; }
.nsr-sec h2, .nsr-sec h3, .nsr-sec strong, .nsr-sec th {
  font-family: 'Plus Jakarta Sans', 'Inter', -apple-system, BlinkMacSystemFont, Helvetica, Arial, sans-serif !important; }
.nsr-sec h2, .nsr-sec h3 { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; }
.nsr-sec { padding: 54px 0; }
.nsr-white { background: #fff;    color: #151515; }
.nsr-grey  { background: #f5f6f8; color: #151515; }
.nsr-navy  { background: #1b2a41; color: #eef2f7; }
.nsr-navy h2, .nsr-navy p, .nsr-navy strong, .nsr-navy span { color: #eef2f7; }
.nsr-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; }
.nsr-center { text-align: center; }
.nsr-h2 { font-size: 36px; line-height: 1.1; margin: 0 0 20px; font-weight: 800 !important;
  letter-spacing: -.032em; color: #151515; }
.nsr-sec p { font-size: 16px; line-height: 1.6; margin: 0 0 12px; }
.nsr-lead { max-width: 760px; margin: 0 auto 30px; text-align: center; }
.nsr-note { font-size: 13.5px; color: #6b6b6b; margin: 16px 0 0; }
.nsr-tagline { max-width: 720px; margin: -8px auto 26px; text-align: center; font-size: 16px; line-height: 1.55; color: #5f5f5f; }
.nsr-tagline-left { margin: -8px 0 16px; text-align: left; }
.nsr-navy .nsr-note { color: #b8c3d2; }

.nsr-four { display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; text-align: center; }
.nsr-four strong { display: block; font-size: 18px; font-weight: 800; margin: 14px 0 6px; }
.nsr-four p { font-size: 15px; color: #5f5f5f; margin: 0; }
.nsr-ico { width: 54px; height: 54px; border-radius: 50%; background: #eef1f5; display: inline-flex;
  align-items: center; justify-content: center; }
.nsr-ico svg { width: 26px; height: 26px; }

.nsr-row { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; margin-bottom: 42px; }
.nsr-row:last-child { margin-bottom: 0; }
.nsr-h3 { font-size: 24px; line-height: 1.2; margin: 0 0 12px; font-weight: 800; }
.nsr-eyebrow { text-transform: uppercase; letter-spacing: .14em; font-size: 12px; font-weight: 800; color: #b08a2e; margin: 0 0 8px; }
.nsr-media img { width: 100%; height: auto; display: block; border-radius: 14px; }
.nsr-colors { list-style: none; padding: 0; margin: 16px 0 0; display: grid; grid-template-columns: 1fr 1fr; gap: 10px 20px; }
.nsr-colors li { display: flex; align-items: center; gap: 10px; font-size: 15.5px; }
.nsr-dot { width: 20px; height: 20px; border-radius: 50%; display: inline-block; flex: 0 0 auto; }

.nsr-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
.nsr-grid figure { margin: 0; }
.nsr-grid img { width: 100%; aspect-ratio: 4 / 5; object-fit: cover; display: block; border-radius: 14px; }
.nsr-grid figcaption { text-align: center; padding-top: 10px; }
.nsr-grid figcaption strong { display: block; font-size: 16px; }
.nsr-grid figcaption span { display: block; font-size: 14px; color: #6b6b6b; }

.nsr-badges { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; margin-top: 10px; }
.nsr-badges div { border: 1px solid rgba(255,255,255,.18); border-radius: 14px; padding: 18px 20px;
  background: rgba(255,255,255,.05); text-align: center; }
.nsr-badges strong { display: block; font-size: 17px; margin-bottom: 5px; }
.nsr-badges span { display: block; font-size: 14.5px; opacity: .86; }
.nsr-ph { display: flex; align-items: center; justify-content: center; min-height: 200px; background: #e2e5ea;
  border-radius: 12px; color: #7d8694; font-size: 14px; text-align: center; padding: 12px; }

@media (max-width: 900px) {
  .nsr-sec { padding: 32px 0; }
  .nsr-sec:first-of-type { padding-top: 30px; }
  .nsr-wrap { padding-left: 14px; padding-right: 14px; }
  .nsr-h2 { font-size: 24px; }
  .nsr-four { grid-template-columns: 1fr 1fr; gap: 24px 16px; }
  .nsr-h3 { font-size: 20px; }
  .nsr-row { grid-template-columns: 1fr; gap: 18px; }
  .nsr-row .nsr-media { order: -1; }
  .nsr-colors { grid-template-columns: 1fr 1fr; }
  .nsr-grid { grid-template-columns: 1fr 1fr; gap: 14px; }
  .nsr-badges { grid-template-columns: 1fr; }
}

/* kratki opis proizvoda: zelene kvacice umjesto tockica */
.woocommerce-product-details__short-description ul,
.woocommerce div.product .woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 4px 0 10px !important; padding-left: 0 !important; }
.woocommerce-product-details__short-description ul li,
.woocommerce div.product .woocommerce-product-details__short-description ul li {
  list-style: none !important; list-style-type: none !important; padding-left: 0 !important;
  text-indent: 0 !important; margin-left: 0 !important; line-height: 1.38 !important; margin-bottom: 0 !important;
  display: flex !important; align-items: flex-start; gap: 8px; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nsr-tick {
  flex: 0 0 auto !important; display: inline-block !important; width: auto !important; text-indent: 0 !important;
  color: #22c55e !important; font-weight: 800 !important; font-size: 17px !important; }
</style>
