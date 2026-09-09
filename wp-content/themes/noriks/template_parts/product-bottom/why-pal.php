<?php
/**
 * product-bottom: NORIKS Pal — stap za hodanje s drugom ruckom (orto-pal).
 * Sekcije prate original (astuvita.com) u istom redoslijedu:
 *   1) Ustajanje ne bi trebalo tražiti tri pokušaja
 *   2) Druga ručka za oslonac
 *   3) Stoji sam — četiri gumene nožice
 *   4) Svjetiljka i alarm
 *   5) Sklopiv i podesiv
 *   6) Šest razloga + prije/poslije
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$pl      = get_template_directory_uri() . '/img/pal/';
$pl_path = get_template_directory() . '/img/pal/';
$pl_vid  = function( $file, $poster, $alt ) use ( $pl, $pl_path ) {
  if ( ! file_exists( $pl_path . $file ) ) { return ''; }
  return '<video class="npl-video" autoplay muted loop playsinline preload="metadata" poster="'
       . esc_url( $pl . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $pl . $file ) . '" type="video/mp4"></video>';
};
$pl_img  = function( $file, $alt, $cls = '' ) use ( $pl, $pl_path ) {
  if ( ! file_exists( $pl_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $pl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) USTAJANJE -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2">
    <div class="npl-copy">
      <p class="npl-kicker">Problem koji rješava</p>
      <h2 class="npl-h2">Ustajanje ne bi trebalo tražiti tri pokušaja</h2>
      <p>Naginjete se naprijed. Njišete se naprijed-natrag. Hvatate se za naslon rukama svom snagom. Pružate ruku prema rubu stola.</p>
      <p>Zatim se bacite naprijed u nadi da ćete uspjeti. Ponekad uspijete. Ponekad se jednostavno vratite u sjedeći položaj i pravite se da još niste spremni.</p>
      <p class="npl-strong">Postoji bolji način.</p>
      <a class="npl-cta" href="#bundle-selector">Pogledaj ponudu</a>
    </div>
    <div class="npl-media npl-media--stack">
      <?php echo $pl_img( 'pal-ustajanje.jpg', 'Ustajanje uz NORIKS Pal štap' ); ?>
      <?php echo $pl_img( 'pal-pregled.jpg', 'Pregled štapa: druga ručka, stoji sam, čvrsta baza' ); ?>
    </div>
  </div>
</section>

<!-- 2) DRUGA RUČKA -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-media"><?php echo $pl_img( 'pal-rucke.jpg', 'Ortopedske ručke za oslonac' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Druga ručka</p>
      <h2 class="npl-h2">Oslonac točno ondje gdje vam treba</h2>
      <p>Uz gornju ručku štap ima i <strong>drugu ručku niže</strong>. Za nju se primite kad ustajete iz fotelje, s kreveta ili s niske stolice.</p>
      <p>Pritisak ide okomito prema dolje, u stabilnu bazu — ne naprijed, gdje bi vas povuklo iz ravnoteže. Zato ustajete jednim pokretom, bez naginjanja i bez tuđe pomoći.</p>
      <ul class="npl-check">
        <li>Ustajanje iz fotelje, kreveta ili s klupe</li>
        <li>Ručke ne žuljaju dlan ni nakon duljeg hodanja</li>
        <li>Bez čekanja da vam netko pomogne</li>
      </ul>
    </div>
  </div>
</section>

<!-- 3) STOJI SAM -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2">
    <div class="npl-media npl-media--stack">
      <?php echo $pl_vid( 'pal-video.mp4', 'pal-video.jpg', 'Štap stoji sam na četiri nožice' ); ?>
      <?php echo $pl_img( 'pal-nozice.jpg', 'Četiri gumene nožice' ); ?>
    </div>
    <div class="npl-copy">
      <p class="npl-kicker">Stabilnost</p>
      <h2 class="npl-h2">Stoji sam — nema saginjanja za štapom</h2>
      <p>Četiri gumene nožice drže štap uspravno kad ga pustite. Ne pada na pod uz kauč, uz stol ni u čekaonici, pa se ne morate saginjati da biste ga podigli.</p>
      <p>Baza je <strong>protuklizna</strong> i drži na pločicama, parketu i laminatu. Vani se prilagodi neravnom terenu i ostaje stabilna.</p>
    </div>
  </div>
</section>

<!-- 4) SVJETILJKA I ALARM -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap">
    <p class="npl-kicker npl-center">Sigurnost</p>
    <h2 class="npl-h2 npl-center">Svjetiljka za noć, alarm za svaki slučaj</h2>
    <div class="npl-two">
      <figure class="npl-tile">
        <?php echo $pl_img( 'pal-svjetiljka.jpg', 'Ugrađena svjetiljka' ); ?>
        <figcaption>
          <h3>Ugrađena svjetiljka</h3>
          <p>Osvjetljava put pred vama — za odlazak do kupaonice noću ili šetnju u sumrak, bez paljenja svjetla u cijeloj kući.</p>
        </figcaption>
      </figure>
      <figure class="npl-tile">
        <?php echo $pl_img( 'pal-alarm.jpg', 'Zvučni alarm' ); ?>
        <figcaption>
          <h3>Zvučni alarm</h3>
          <p>Pritiskom na gumb oglašava se glasan signal koji upozori ukućane ako padnete ili vam zatreba pomoć.</p>
        </figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- 5) SKLOPIV I PODESIV -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Svakodnevna upotreba</p>
      <h2 class="npl-h2">Sklopiv, podesiv, uvijek pri ruci</h2>
      <p>Štap se <strong>sklopi u nekoliko dijelova</strong> i stane u torbu ili pretinac u autu — praktično za putovanja, odlaske k liječniku i vožnju.</p>
      <p>Visina se podešava u nekoliko sekundi, bez alata, pa odgovara svim visinama korisnika.</p>
      <ul class="npl-check">
        <li>Sklapanje bez alata, u nekoliko sekundi</li>
        <li>Podesiva duljina za sve visine</li>
        <li>Lagan za nošenje, čvrst pod opterećenjem</li>
      </ul>
    </div>
    <div class="npl-media npl-media--pair">
      <?php echo $pl_img( 'pal-sklopivo.jpg', 'Sklopiva izvedba' ); ?>
      <?php echo $pl_img( 'pal-sklapanje.jpg', 'Sklapanje štapa u nekoliko sekundi' ); ?>
      <?php echo $pl_img( 'pal-duljina.jpg', 'Podesiva duljina za sve visine' ); ?>
      <?php echo $pl_img( 'pal-detalji.jpg', 'Detalji: ručka, baza, stoji sam' ); ?>
    </div>
  </div>
</section>

<!-- 6) ŠEST RAZLOGA -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap">
    <h2 class="npl-h2 npl-center">Šest razloga za NORIKS Pal</h2>
    <div class="npl-six">
      <div class="npl-reason"><span>1</span><h3>Lakše ustajanje</h3><p>Druga ručka nosi težinu umjesto vaših ramena i zapešća.</p></div>
      <div class="npl-reason"><span>2</span><h3>Sigurnost noću</h3><p>Ugrađena svjetiljka osvjetljava put pred vama.</p></div>
      <div class="npl-reason"><span>3</span><h3>Alarm za hitne slučajeve</h3><p>Glasan signal koji čuju ukućani.</p></div>
      <div class="npl-reason"><span>4</span><h3>Stabilna baza</h3><p>Četiri protuklizne nožice — štap stoji sam.</p></div>
      <div class="npl-reason"><span>5</span><h3>Sklopiv i prijenosan</h3><p>Stane u torbu i u pretinac u autu.</p></div>
      <div class="npl-reason"><span>6</span><h3>Više samostalnosti</h3><p>Ustajanje i šetnja bez čekanja na tuđu pomoć.</p></div>
    </div>
    <div class="npl-media npl-media--wide"><?php echo $pl_img( 'pal-razlozi.jpg', 'Šest razloga za NORIKS Pal' ); ?></div>
    <a class="npl-cta npl-cta--center" href="#bundle-selector">Naruči bez rizika — 30 dana</a>
  </div>
</section>

<!-- 7) KOD NAŠIH KUPACA -->
<section class="npl-sec">
  <div class="npl-wrap">
    <p class="npl-kicker npl-center">Kod naših kupaca</p>
    <h2 class="npl-h2 npl-center">Štap u stvarnim domovima</h2>
    <p class="npl-sub">Fotografije kupaca — uz fotelju, u hodniku, u mraku i sklopljen za put.</p>
    <div class="npl-ugc">
      <figure><?php echo $pl_img( 'pal-ugc-1.jpg', 'Štap uz fotelju' ); ?></figure>
      <figure><?php echo $pl_img( 'pal-ugc-3.jpg', 'Štap u dnevnom boravku' ); ?></figure>
      <figure><?php echo $pl_img( 'pal-noc.jpg', 'Svjetiljka u mraku' ); ?></figure>
      <figure><?php echo $pl_img( 'pal-ugc-baza.jpg', 'Protuklizna baza izbliza' ); ?></figure>
      <figure><?php echo $pl_img( 'pal-ugc-sklop.jpg', 'Štap sklopljen' ); ?></figure>
      <figure><?php echo $pl_img( 'pal-ugc-6.jpg', 'Štap uz zid' ); ?></figure>
      <figure><?php echo $pl_img( 'pal-ugc-2.jpg', 'Štap u hodniku' ); ?></figure>
      <figure><?php echo $pl_img( 'pal-ugc-4.jpg', 'Štap uz kauč' ); ?></figure>
      <figure><?php echo $pl_img( 'pal-ugc-5.jpg', 'Svjetiljka na ručki' ); ?></figure>
    </div>

    <div class="npl-ba">
      <div class="npl-ba__img"><?php echo $pl_img( 'pal-prije-poslije.jpg', 'Prije i poslije — samostalno kretanje' ); ?></div>
      <div class="npl-ba__txt">
        <h3>Od „trebam pomoć" do „idem sam"</h3>
        <p>Razlika nije u snazi nogu, nego u tome što imate za što se primiti. Druga ručka nosi težinu umjesto vaših ramena i zapešća.</p>
        <p class="npl-strong">Samostalno ustajanje, pa i šetnja parkom.</p>
        <div class="npl-guar"><?php echo $pl_img( 'pal-garancija.jpg', '30 dana jamstva na povrat novca' ); ?></div>
      </div>
    </div>
  </div>
</section>

<style>
.npl-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #12212b; }
.npl-sec * { box-sizing: border-box; }
.npl-tint { background: #eef6f8; }
.npl-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.npl-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #2b8fa6; margin: 0 0 10px; }
.npl-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; }
.npl-center { text-align: center; }
.npl-copy p { font-size: 16px; line-height: 1.7; color: #465863; margin: 0 0 14px; }
.npl-strong { font-weight: 800; color: #12212b !important; font-size: 17px !important; }
.npl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.npl-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(18,33,43,.05), 0 14px 40px rgba(18,33,43,.10); }
.npl-media--wide { margin-top: 34px; }
.npl-check { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 11px; }
.npl-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.npl-check li::before { content: "✓"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #2b8fa6; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.npl-two { display: grid; grid-template-columns: 1fr 1fr; gap: 28px; margin-top: 34px; }
.npl-tile { margin: 0; background: #fff; border: 1px solid #d9e8ec; border-radius: 14px; overflow: hidden; }
.npl-tile img { width: 100%; aspect-ratio: 4/3; object-fit: cover; display: block; }
.npl-tile figcaption { padding: 22px 24px 24px; }
.npl-tile h3 { font-size: 18px; font-weight: 800; margin: 0 0 8px; }
.npl-tile p { font-size: 15px; color: #465863; line-height: 1.6; margin: 0; }
.npl-six { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.npl-reason { background: #fff; border: 1px solid #d9e8ec; border-radius: 14px; padding: 24px 20px; }
.npl-reason span { display: inline-flex; align-items: center; justify-content: center; width: 30px; height: 30px; border-radius: 50%; background: #2b8fa6; color: #fff; font-weight: 800; font-size: 14px; margin-bottom: 12px; }
.npl-reason h3 { font-size: 16.5px; font-weight: 800; margin: 0 0 6px; line-height: 1.3; }
.npl-reason p { font-size: 14.5px; color: #465863; line-height: 1.6; margin: 0; }
.npl-cta { display: inline-block; background: #12212b; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.npl-cta:hover { background: #2b8fa6; color: #fff !important; }
.npl-cta--center { display: block; width: fit-content; margin: 38px auto 0; }
.npl-sub { text-align: center; font-size: 16px; color: #5b6d78; max-width: 60ch; margin: 0 auto 34px; line-height: 1.6; }
.npl-video { width: 100%; display: block; border-radius: 14px; }
.npl-media--pair { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
.npl-media--stack { display: grid; gap: 16px; }
.npl-guar { max-width: 190px; margin-top: 16px; }
.npl-guar img { width: 100%; display: block; border-radius: 10px; }
.npl-ugc { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
.npl-ugc figure { margin: 0; border-radius: 12px; overflow: hidden; background: #eef6f8; }
.npl-ugc img { width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; }
.npl-ba { display: grid; grid-template-columns: 1.1fr 1fr; gap: 40px; align-items: center; margin-top: 44px;
  background: #eef6f8; border-radius: 16px; padding: 28px; }
.npl-ba__img img { width: 100%; display: block; border-radius: 12px; }
.npl-ba__txt h3 { font-size: 22px; font-weight: 800; margin: 0 0 12px; }
.npl-ba__txt p { font-size: 15.5px; line-height: 1.65; color: #465863; margin: 0 0 12px; }
@media (max-width: 980px) {
  .npl-ugc { grid-template-columns: 1fr 1fr; }
  .npl-ba { grid-template-columns: 1fr; gap: 22px; padding: 20px; }
  .npl-media--pair { grid-template-columns: 1fr 1fr; }
  .npl-row2 { grid-template-columns: 1fr; gap: 30px; }
  .npl-row2--rev .npl-media { order: -1; }
  .npl-two { grid-template-columns: 1fr; gap: 18px; }
  .npl-six { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 560px) {
  .npl-sec { padding: 44px 0; }
  .npl-wrap { padding: 0 16px; }
  .npl-six { grid-template-columns: 1fr; gap: 14px; }
  .npl-cta { width: 100%; text-align: center; }
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
