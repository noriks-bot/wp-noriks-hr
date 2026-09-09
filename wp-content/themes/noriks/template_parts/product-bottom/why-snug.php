<?php
/**
 * product-bottom: NORIKS Snug — jastuk za cijelo tijelo u S-obliku (orto-snug).
 * Sekcije prate original (pilloway.com.au) u istom redoslijedu:
 *   1) Zašto se nikad ne probudite odmorni (3 točke)
 *   2) Kako vam pomaže da bolje spavate (3 koraka)
 *   3) Tri ključne potpore
 *   4) Preporučuju stručnjaci (2 kiropraktora)
 *   5) Punjenje koje zadržava oblik + rashladna navlaka
 *   6) Što možete očekivati (vremenska crta)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$sg      = get_template_directory_uri() . '/img/snug/';
$sg_path = get_template_directory() . '/img/snug/';
$sg_img  = function( $file, $alt, $cls = '' ) use ( $sg, $sg_path ) {
  if ( ! file_exists( $sg_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $sg . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) ZAŠTO SE NIKAD NE PROBUDITE ODMORNI -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap">
    <p class="nsg-kicker nsg-center">Zašto se budite umorni</p>
    <h2 class="nsg-h2 nsg-center">Tijelo vam noću ostaje bez potpore</h2>
    <p class="nsg-sub">Obični jastuci za tijelo su ravni. Vaše tijelo nije. Legnete na bok i počne lančana reakcija.</p>
    <div class="nsg-three">
      <div class="nsg-card">
        <span class="nsg-num">1</span>
        <h3>Rame nosi cijelu težinu</h3>
        <p>Bez ničega što bi popunilo prostor, gornji dio tijela pritišće jedno rame cijelu noć.</p>
      </div>
      <div class="nsg-card">
        <span class="nsg-num">2</span>
        <h3>Kuk propada, kralježnica slijedi</h3>
        <p>Gornja noga pada preko donje, zdjelica se uvija i donji dio leđa ostaje napet do jutra.</p>
      </div>
      <div class="nsg-card">
        <span class="nsg-num">3</span>
        <h3>Koljena se stišću jedno o drugo</h3>
        <p>Kost na kost, bez jastučenja. To je pritisak koji vas budi u tri ujutro.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2) KAKO POMAŽE -->
<section class="nsg-sec">
  <div class="nsg-wrap nsg-row2">
    <div class="nsg-media"><?php echo $sg_img( 'sng-usporedba.jpg', 'NORIKS Snug u usporedbi s običnim jastukom' ); ?></div>
    <div class="nsg-copy">
      <p class="nsg-kicker">Kako radi</p>
      <h2 class="nsg-h2">S-oblik drži tri točke istovremeno</h2>
      <p>Zakrivljenje prati liniju tijela: gornji dio podupire rame, sredina ispunjava prostor uz struk, a donji krak razdvaja koljena.</p>
      <p>Težina se raspoređuje po cijeloj duljini umjesto da se skupi na jednom mjestu. Tijelo prestaje slati signale koji vas bude.</p>
      <ul class="nsg-check">
        <li>Ramena rasterećena, bez pritiska na jednu stranu</li>
        <li>Kukovi i zdjelica u prirodnoj liniji</li>
        <li>Koljena razdvojena, bez dodira kosti o kost</li>
      </ul>
      <a class="nsg-cta" href="#bundle-selector">Odaberi svoju boju</a>
    </div>
  </div>
</section>

<!-- 3) TRI KLJUČNE POTPORE -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap nsg-row2 nsg-row2--rev">
    <div class="nsg-copy">
      <p class="nsg-kicker">Tri točke potpore</p>
      <h2 class="nsg-h2">Jedan jastuk umjesto tri</h2>
      <p>Većina ljudi slaže dva ili tri obična jastuka da bi dobila potporu koju Snug daje sam — i onda ih cijelu noć premješta.</p>
      <p>Snug drži sve tri točke odjednom, pa se ne morate buditi da biste ga namjestili.</p>
    </div>
    <div class="nsg-media"><?php echo $sg_img( 'sng-potpore.jpg', 'Tri ključne potpore: ruke, kukovi, koljena' ); ?></div>
  </div>
</section>

<!-- 4) PREPORUČUJU STRUČNJACI -->
<section class="nsg-sec">
  <div class="nsg-wrap">
    <p class="nsg-kicker nsg-center">Povjerenje struke</p>
    <h2 class="nsg-h2 nsg-center">Preporučuju kiropraktičari</h2>
    <div class="nsg-docs">
      <figure class="nsg-doc">
        <?php echo $sg_img( 'sng-doc-1.jpg', 'Kiropraktičarka s NORIKS Snug jastukom' ); ?>
        <figcaption>
          <p class="nsg-quote">„S-oblik drži kralježnicu u neutralnom položaju jer istovremeno podupire ramena, kukove i koljena. Većina jastuka za tijelo rješava samo jedno od toga."</p>
          <p class="nsg-doc-name">Kiropraktičarka, 12 godina prakse</p>
        </figcaption>
      </figure>
      <figure class="nsg-doc">
        <?php echo $sg_img( 'sng-doc-2.jpg', 'Kiropraktičar s NORIKS Snug jastukom' ); ?>
        <figcaption>
          <p class="nsg-quote">„Kod pacijenata koji spavaju na boku problem je uvijek isti: prazan prostor između ramena i koljena. Snug podupire cijelu duljinu trupa, ne samo jednu točku."</p>
          <p class="nsg-doc-name">Kiropraktičar, 18 godina prakse</p>
        </figcaption>
      </figure>
    </div>
    <p class="nsg-note">Mišljenja stručnjaka ne zamjenjuju liječnički pregled ni propisanu terapiju.</p>
  </div>
</section>

<!-- 5) PUNJENJE I NAVLAKA -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap nsg-row2">
    <div class="nsg-media"><?php echo $sg_img( 'sng-punjenje.jpg', 'Punjenje koje zadržava oblik' ); ?></div>
    <div class="nsg-copy">
      <p class="nsg-kicker">Izrada</p>
      <h2 class="nsg-h2">Punjenje koje se ne sliježe</h2>
      <p>Tisuće finih, elastičnih vlakana vraćaju se u oblik pod pritiskom. Mekano i za grljenje izvana, čvrsto i potporno iznutra.</p>
      <ul class="nsg-check">
        <li>Zadržava oblik i nakon mjeseci upotrebe</li>
        <li>Rashladna navlaka koja propušta zrak</li>
        <li>Navlaka se skida i pere u stroju na 40 °C</li>
      </ul>
    </div>
  </div>
</section>

<!-- 6) ŠTO MOŽETE OČEKIVATI -->
<section class="nsg-sec">
  <div class="nsg-wrap">
    <h2 class="nsg-h2 nsg-center">Što možete očekivati</h2>
    <p class="nsg-sub">Prve noći tijelo uči novi položaj. Evo kako to obično izgleda.</p>
    <div class="nsg-tl">
      <div class="nsg-tl__item">
        <div class="nsg-tl__when">Noći 1 – 3</div>
        <h3>Pronalazite svoj položaj</h3>
        <p>S-oblik je drukčiji od ravnog jastuka. Većina ljudi nađe svoj položaj do druge noći i počne se opuštati u potporu.</p>
      </div>
      <div class="nsg-tl__item">
        <div class="nsg-tl__when">Tjedan 1</div>
        <h3>San postaje mirniji</h3>
        <p>Brže tonete u san i rjeđe se budite. Jutra su drukčija — ustajete odmorni, a ne kao da ste preživjeli noć.</p>
      </div>
      <div class="nsg-tl__item">
        <div class="nsg-tl__when">Tjedan 2 +</div>
        <h3>Jutarnja ukočenost popušta</h3>
        <p>Kukovi i donji dio leđa manje se javljaju ujutro. Tijelo se navikne na poravnanje i zadrži ga cijelu noć.</p>
      </div>
    </div>
    <a class="nsg-cta nsg-cta--center" href="#bundle-selector">Naruči bez rizika — 30 dana</a>
  </div>
</section>

<style>
.nsg-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1f2a37; }
.nsg-sec * { box-sizing: border-box; }
.nsg-tint { background: #f2f5f9; }
.nsg-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nsg-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #5b7fa6; margin: 0 0 10px; }
.nsg-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #1f2a37; }
.nsg-center { text-align: center; }
.nsg-sub { text-align: center; font-size: 16px; color: #5c6b7a; max-width: 60ch; margin: 0 auto 40px; line-height: 1.6; }
.nsg-copy p { font-size: 16px; line-height: 1.7; color: #4a5765; margin: 0 0 14px; }
.nsg-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.nsg-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(31,42,55,.05), 0 14px 40px rgba(31,42,55,.09); }
.nsg-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
.nsg-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 26px 22px; }
.nsg-num { display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background: #5b7fa6; color: #fff; font-weight: 800; font-size: 16px; margin-bottom: 14px; }
.nsg-card h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 8px; line-height: 1.3; }
.nsg-card p { font-size: 15px; color: #5c6b7a; line-height: 1.6; margin: 0; }
.nsg-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nsg-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.nsg-check li::before { content: "✓"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #5b7fa6; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsg-cta { display: inline-block; background: #1f2a37; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nsg-cta:hover { background: #33445a; color: #fff !important; }
.nsg-cta--center { display: block; width: fit-content; margin: 40px auto 0; }
.nsg-docs { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; }
.nsg-doc { margin: 0; background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; }
.nsg-doc img { width: 100%; aspect-ratio: 4/3; object-fit: cover; display: block; }
.nsg-doc figcaption { padding: 22px 24px 24px; }
.nsg-quote { font-size: 15.5px; line-height: 1.65; color: #34414f; font-style: italic; margin: 0 0 12px; }
.nsg-doc-name { font-size: 13.5px; font-weight: 700; color: #5b7fa6; margin: 0; }
.nsg-note { text-align: center; font-size: 12px; color: #93a1b0; font-style: italic; margin: 22px 0 0; }
.nsg-tl { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
.nsg-tl__item { background: #f2f5f9; border-radius: 14px; padding: 26px 22px; }
.nsg-tl__when { font-size: 12.5px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; color: #5b7fa6; margin-bottom: 8px; }
.nsg-tl__item h3 { font-size: 18px; font-weight: 800; margin: 0 0 8px; line-height: 1.3; }
.nsg-tl__item p { font-size: 15px; color: #5c6b7a; line-height: 1.6; margin: 0; }
@media (max-width: 980px) {
  .nsg-row2 { grid-template-columns: 1fr; gap: 30px; }
  .nsg-row2--rev .nsg-media { order: -1; }
  .nsg-three, .nsg-tl, .nsg-docs { grid-template-columns: 1fr; gap: 16px; }
}
@media (max-width: 560px) {
  .nsg-sec { padding: 44px 0; }
  .nsg-wrap { padding: 0 16px; }
  .nsg-sub { margin-bottom: 28px; }
  .nsg-card, .nsg-tl__item { padding: 22px 18px; }
  .nsg-cta { width: 100%; text-align: center; }
}

/* ── kratek opis izdelka: kljukice namesto pik ─────────────────────── */
.woocommerce div.product .woocommerce-product-details__short-description ul,
.woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 10px 0 14px !important; padding-left: 0 !important; }
.woocommerce div.product .woocommerce-product-details__short-description ul li,
.woocommerce-product-details__short-description ul li {
  list-style: none !important; padding-left: 0 !important; text-indent: 0 !important; margin: 0 0 7px !important;
  line-height: 1.45 !important; display: flex !important; align-items: flex-start; gap: 10px; font-size: 15.5px; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nsg-tick {
  flex: 0 0 21px !important; width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; margin-top: 1px; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
