<?php
/**
 * product-bottom: NORIKS FIT Woman — oblikujuca majica s 3D linijama (orto-kompwom).
 * Sekcije prate original (leonieandco.com) u istom redoslijedu:
 *   1) Zaglađen trbuh — što majica radi
 *   2) Mi vs drugi (usporedba)
 *   3) Osjećajte se sigurno (tri točke na tijelu)
 *   4) Tkanina i kroj (četiri detalja)
 *   5) Kako je nositi
 *   6) Tri boje
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$kw      = get_template_directory_uri() . '/img/kompwom/';
$kw_path = get_template_directory() . '/img/kompwom/';
$kw_img  = function( $file, $alt, $cls = '' ) use ( $kw, $kw_path ) {
  if ( ! file_exists( $kw_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $kw . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) ZAGLAĐEN TRBUH -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-trbuh.jpg', 'Zaglađen trbuh s NORIKS FIT Woman majicom' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Odmah, od prve minute</p>
      <h2 class="nkw-h2">Zaglađen trbuh <em>bez stiskanja</em></h2>
      <p>Naše 3D linije oblikuju tijelo tako da nježno stišću područje trbuha i bokova i potiču cirkulaciju — bez pojasa koji ureza i bez osjećaja da ste stegnuti.</p>
      <p>Bez majice trbuh je mlohav i nabori se vide ispod odjeće. S njom je trbuh odmah zaglađen, a držanje uspravnije.</p>
      <ul class="nkw-check">
        <li>Odmah zaglađen trbuh</li>
        <li>Uspravno držanje bez razmišljanja</li>
        <li>Nevidljiva ispod odjeće</li>
      </ul>
      <a class="nkw-cta" href="#bundle-selector">Odaberi boju i veličinu</a>
    </div>
  </div>
</section>

<!-- 2) MI VS DRUGI -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Razlika</p>
      <h2 class="nkw-h2">Zašto obična kompresija ne radi</h2>
      <p>Klasične stezne majice pritišću u jednoj liniji. Rezultat je izbočina iznad ruba, nabori na ramenima i rub koji se vidi ispod odjeće.</p>
      <p>Kod nas je reljef <strong>upleten u tkaninu</strong> i raspoređen po širini, pa se pritisak razlije umjesto da se skupi.</p>
      <ul class="nkw-vs">
        <li class="is-yes">3D tehnologija upletena u pletivo</li>
        <li class="is-yes">Nježna 360° kompresija bez izbočina</li>
        <li class="is-yes">Podupire donji dio leđa</li>
        <li class="is-no">Obična kompresija koja stvara izbočine</li>
        <li class="is-no">Materijal se rola tijekom dana</li>
        <li class="is-no">Rub koji se vidi ispod odjeće</li>
      </ul>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-usporedba.jpg', 'NORIKS FIT Woman u usporedbi s običnom steznom majicom' ); ?></div>
  </div>
</section>

<!-- 3) OSJEĆAJTE SE SIGURNO -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-drzanje.jpg', 'Suženiji struk i uspravno držanje' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Tri stvari odjednom</p>
      <h2 class="nkw-h2">Osjećajte se <em>sigurno u svojoj koži</em></h2>
      <div class="nkw-points">
        <div class="nkw-point">
          <h3>Suženiji struk</h3>
          <p>3D linije oblikuju struk i zaglađuju izbočine iznad hlača ili suknje.</p>
        </div>
        <div class="nkw-point">
          <h3>Odmah ravan trbuh</h3>
          <p>Nježna kompresija drži trbuh ispod svake odjeće, bez pritiska u jednu točku.</p>
        </div>
        <div class="nkw-point">
          <h3>Uspravno držanje</h3>
          <p>Potpora na leđima pomaže da stojite uspravno i rasterećuje donji dio leđa.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4) TKANINA I KROJ -->
<section class="nkw-sec">
  <div class="nkw-wrap">
    <p class="nkw-kicker nkw-center">Tkanina i kroj</p>
    <h2 class="nkw-h2 nkw-center">Reljef je upleten, ne tiskan</h2>
    <p class="nkw-sub">Široki pojas prelazi preko trbuha i bokova, drugi ide preko leđa. Zato ništa ne puca i ništa se ne ljušti.</p>
    <div class="nkw-grid4">
      <div class="nkw-tile"><h3>3D linije</h3><p>Strukturirane, upletene u pletivo — ne otpadaju s vremenom.</p></div>
      <div class="nkw-tile"><h3>Pojas na leđima</h3><p>Drugi pojas prelazi leđa i podupire uspravno držanje.</p></div>
      <div class="nkw-tile"><h3>Rukavi</h3><p>Pripijeni kroj koji se ne rola i ne skuplja prema gore.</p></div>
      <div class="nkw-tile"><h3>Materijal</h3><p>Tanak, mat i prozračan — nestane ispod košulje ili sakoa.</p></div>
    </div>
    <div class="nkw-detail"><?php echo $kw_img( 'kwm-detalji.jpg', 'Detalji: 3D linije, pojas, rukavi, materijal' ); ?></div>
  </div>
</section>

<!-- 5) KAKO JE NOSITI -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap">
    <p class="nkw-kicker nkw-center">Kako je nositi</p>
    <h2 class="nkw-h2 nkw-center">Obucite ujutro i zaboravite je do večeri</h2>
    <p class="nkw-sub">Trebate normalno disati i jesti bez razmišljanja o majici. Ako je trag na koži vidljiv dvadeset minuta nakon skidanja, veličina je premala.</p>
    <div class="nkw-three">
      <div class="nkw-card"><h3>Cijeli dan</h3><p>Kompresija je raspoređena umjesto da pritišće u jednom mjestu, pa ništa ne ureza.</p></div>
      <div class="nkw-card"><h3>Ispod svega</h3><p>Bez linije i bez ruba ispod košulje, sakoa ili pripijene haljine.</p></div>
      <div class="nkw-card"><h3>Jednostavna njega</h3><p>Strojno pranje na 30 °C. Bez izbjeljivača, bez glačanja i bez sušilice.</p></div>
    </div>
    <p class="nkw-note">Veličinu birajte prema opsegu grudi. Ako ste između dvije, uzmite veću.</p>
  </div>
</section>

<!-- 6) NAŠE KUPKE -->
<section class="nkw-sec">
  <div class="nkw-wrap">
    <p class="nkw-kicker nkw-center">Naše kupke</p>
    <h2 class="nkw-h2 nkw-center">Preko <em>200.000 žena</em> nosi je svaki dan</h2>
    <p class="nkw-sub">Ispod košulje, ispod haljine, na poslu i kod kuće — bez razmišljanja o njoj.</p>
    <div class="nkw-ugc">
      <figure><?php echo $kw_img( 'kwm-ugc-1.jpg', 'Kupka u NORIKS FIT Woman majici' ); ?></figure>
      <figure><?php echo $kw_img( 'kwm-ugc-2.jpg', 'Kupka u NORIKS FIT Woman majici' ); ?></figure>
      <figure><?php echo $kw_img( 'kwm-ugc-3.jpg', 'Kupka u NORIKS FIT Woman majici' ); ?></figure>
      <figure><?php echo $kw_img( 'kwm-ugc-4.jpg', 'Kupka u NORIKS FIT Woman majici' ); ?></figure>
      <figure><?php echo $kw_img( 'kwm-ugc-5.jpg', 'Kupka u NORIKS FIT Woman majici' ); ?></figure>
      <figure><?php echo $kw_img( 'kwm-ugc-6.jpg', 'Kupka u NORIKS FIT Woman majici' ); ?></figure>
      <figure><?php echo $kw_img( 'kwm-ugc-7.jpg', 'Kupka u NORIKS FIT Woman majici' ); ?></figure>
      <figure><?php echo $kw_img( 'kwm-ugc-8.jpg', 'Kupka u NORIKS FIT Woman majici' ); ?></figure>
    </div>
    <div class="nkw-200k"><?php echo $kw_img( 'kwm-200k.jpg', 'Preko 200.000 zadovoljnih kupaca' ); ?></div>
  </div>
</section>

<!-- 7) BOJE -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap">
    <h2 class="nkw-h2 nkw-center">Tri boje za svaki dan</h2>
    <p class="nkw-sub">Crna ispod svega, tamnosiva za dnevno nošenje, roza kad želite nešto toplije.</p>
    <div class="nkw-colors">
      <figure><?php echo $kw_img( 'kwm-siva.jpg', 'NORIKS FIT Woman tamnosiva' ); ?><figcaption>Tamnosiva</figcaption></figure>
      <figure><?php echo $kw_img( 'kwm-roza.jpg', 'NORIKS FIT Woman roza' ); ?><figcaption>Roza</figcaption></figure>
    </div>
    <a class="nkw-cta nkw-cta--center" href="#bundle-selector">Naruči bez rizika — 30 dana</a>
  </div>
</section>

<style>
.nkw-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #241c22; }
.nkw-sec * { box-sizing: border-box; }
.nkw-tint { background: #fbf3f4; }
.nkw-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nkw-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #a8536b; margin: 0 0 10px; }
.nkw-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #241c22; }
.nkw-h2 em { font-style: italic; font-weight: 800; color: #a8536b; }
.nkw-center { text-align: center; }
.nkw-sub { text-align: center; font-size: 16px; color: #6b5f66; max-width: 62ch; margin: 0 auto 38px; line-height: 1.6; }
.nkw-copy p { font-size: 16px; line-height: 1.7; color: #56494f; margin: 0 0 14px; }
.nkw-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.nkw-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(36,28,34,.05), 0 14px 40px rgba(36,28,34,.10); }
.nkw-media--wide { margin-top: 34px; }
.nkw-detail { max-width: 720px; margin: 32px auto 0; border-radius: 14px; overflow: hidden;
  box-shadow: 0 2px 4px rgba(36,28,34,.05), 0 14px 40px rgba(36,28,34,.10); }
.nkw-detail img { width: 100%; display: block; }
.nkw-ugc { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }
.nkw-ugc figure { margin: 0; border-radius: 12px; overflow: hidden; background: #f3eaed; }
.nkw-ugc img { width: 100%; aspect-ratio: 3/4; object-fit: cover; display: block; }
.nkw-200k { max-width: 620px; margin: 34px auto 0; border-radius: 14px; overflow: hidden; }
.nkw-200k img { width: 100%; display: block; }
.nkw-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nkw-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.nkw-check li::before { content: "✓"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #a8536b; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkw-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.nkw-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; }
.nkw-vs li::before { position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkw-vs .is-yes::before { content: "✓"; background: #a8536b; color: #fff; }
.nkw-vs .is-no { color: #8b7b83; }
.nkw-vs .is-no::before { content: "✕"; background: #ece0e4; color: #a8949c; }
.nkw-points { display: flex; flex-direction: column; gap: 20px; }
.nkw-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #a8536b; }
.nkw-point p { font-size: 15.5px; color: #56494f; line-height: 1.6; margin: 0; }
.nkw-grid4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
.nkw-tile { background: #fff; border: 1px solid #efe2e6; border-radius: 14px; padding: 24px 20px; }
.nkw-tile h3 { font-size: 17px; font-weight: 800; margin: 0 0 8px; }
.nkw-tile p { font-size: 14.5px; color: #6b5f66; line-height: 1.6; margin: 0; }
.nkw-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
.nkw-card { background: #fbf3f4; border-radius: 14px; padding: 26px 22px; }
.nkw-card h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 8px; }
.nkw-card p { font-size: 15px; color: #6b5f66; line-height: 1.6; margin: 0; }
.nkw-note { text-align: center; font-size: 13.5px; color: #8b7b83; font-style: italic; margin: 26px 0 0; }
.nkw-colors { display: grid; grid-template-columns: 1fr 1fr; gap: 26px; }
.nkw-colors figure { margin: 0; }
.nkw-colors img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(36,28,34,.05), 0 14px 40px rgba(36,28,34,.10); }
.nkw-colors figcaption { text-align: center; font-size: 14.5px; font-weight: 700; margin-top: 12px; }
.nkw-cta { display: inline-block; background: #241c22; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nkw-cta:hover { background: #a8536b; color: #fff !important; }
.nkw-cta--center { display: block; width: fit-content; margin: 38px auto 0; }
@media (max-width: 980px) {
  .nkw-ugc { grid-template-columns: repeat(3, 1fr); gap: 12px; }
  .nkw-row2 { grid-template-columns: 1fr; gap: 30px; }
  .nkw-row2--rev .nkw-media { order: -1; }
  .nkw-grid4 { grid-template-columns: 1fr 1fr; }
  .nkw-three { grid-template-columns: 1fr; gap: 16px; }
}
@media (max-width: 560px) {
  .nkw-sec { padding: 44px 0; }
  .nkw-ugc { grid-template-columns: 1fr 1fr; gap: 10px; }
  .nkw-wrap { padding: 0 16px; }
  .nkw-grid4 { grid-template-columns: 1fr; gap: 14px; }
  .nkw-colors { grid-template-columns: 1fr; gap: 18px; }
  .nkw-cta { width: 100%; text-align: center; }
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
