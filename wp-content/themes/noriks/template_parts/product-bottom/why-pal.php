<?php
/**
 * product-bottom: NORIKS Pal — stap s dvije rucke, svjetiljkom i alarmom (orto-pal).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno,
 * pozadine se izmjenjuju (prva tonirana). Iznimka je galerija kupaca (12).
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
<!-- 1) PROBLEM — slika lijevo -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
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
      <a class="npl-cta" href="#bundle-selector">Pogledaj ponudu</a>
    </div>
  </div>
</section>

<!-- 3) PREGLED ŠTAPA — slika lijevo -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Stabilnost</p>
      <h2 class="npl-h2">Stoji sam — nema saginjanja za štapom</h2>
      <p>Četiri gumene nožice drže štap uspravno kad ga pustite. Ne pada na pod uz kauč, uz stol ni u čekaonici, pa se ne morate saginjati da biste ga podigli.</p>
      <p>To je sitnica koju primijetite već prvi dan: štap vas čeka ondje gdje ste ga ostavili.</p>
    </div>
    <div class="npl-media"><?php echo $pl_vid( 'pal-video.mp4', 'pal-video.jpg', 'Štap stoji sam na četiri nožice' ); ?></div>
  </div>
</section>

<!-- 5) PROTUKLIZNA BAZA — slika lijevo -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-pregled.jpg', 'Pregled štapa: dvije ručke, svjetiljka, alarm, četiri nožice' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Što dobivate</p>
      <h2 class="npl-h2">Pet stvari u jednom štapu</h2>
      <div class="npl-points">
        <div class="npl-point"><h3>Dvije ručke</h3><p>Gornja za hodanje, donja za ustajanje.</p></div>
        <div class="npl-point"><h3>Četiri nožice</h3><p>Štap stoji sam i ne pada na pod.</p></div>
        <div class="npl-point"><h3>Svjetiljka</h3><p>Osvjetljava put ispred vas u mraku.</p></div>
        <div class="npl-point"><h3>Alarm</h3><p>Glasan signal koji čuju ukućani.</p></div>
        <div class="npl-point"><h3>Sklopiva izvedba</h3><p>Stane u torbu i pretinac u autu.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) STOJI SAM (video) — video desno -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Baza</p>
      <h2 class="npl-h2">Drži na pločicama, parketu i vani</h2>
      <p>Gumene nožice su <strong>protuklizne</strong> i ne kližu na glatkim podovima. Vani se baza prilagodi neravnom terenu i ostaje stabilna.</p>
      <ul class="npl-check">
        <li>Ne kliže na pločicama, parketu i laminatu</li>
        <li>Prilagodi se neravnom terenu</li>
        <li>Nožice se mogu zamijeniti kad se istroše</li>
      </ul>
    </div>
    <div class="npl-media"><?php echo $pl_img( 'pal-nozice.jpg', 'Četiri protuklizne gumene nožice' ); ?></div>
  </div>
</section>

<!-- 6) SVJETILJKA — slika desno -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-sklopivo.jpg', 'Sklopiv i podesiv štap' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Prijenosnost</p>
      <h2 class="npl-h2">Sklopi se u sekundi i stane u torbu</h2>
      <p>Dijelovi su povezani unutarnjom gumom, pa se štap rastavlja i sastavlja <strong>jednim pokretom</strong>, bez alata i bez tuđe pomoći. Sklopljen stane u torbu ili pretinac u autu.</p>
      <p>Visinu podešavate u nekoliko sekundi, pa isti štap odgovara i osobi od 155 cm i osobi od 190 cm.</p>
      <ul class="npl-check">
        <li>Rastavljanje i sastavljanje bez alata</li>
        <li>Podesiva duljina za sve visine</li>
        <li>Dijelovi ostaju povezani — ništa se ne gubi</li>
      </ul>
    </div>
  </div>
</section>

<section class="npl-sec npl-rev">
  <div class="npl-wrap">
    <p class="npl-kicker npl-center">Kod naših kupaca</p>
    <h2 class="npl-h2 npl-center">Štap u stvarnim domovima</h2>
    <p class="npl-sub">Fotografije i komentari kupaca — uz fotelju, u hodniku, u mraku i sklopljen za put.</p>
    <div class="npl-rev__grid">
      <?php
      $pl_reviews = array(
        array( 'img' => 'pal-ugc-1.jpg',    'name' => 'Marija K.',  'meta' => 'Zagreb · kupila prije 2 mjeseca',
               'text' => '„Držim ga uz fotelju. Prije sam se dizala u tri pokušaja, sada se primim za donju ručku i ustanem iz prve."' ),
        array( 'img' => 'pal-ugc-3.jpg',    'name' => 'Zdravko P.', 'meta' => 'Osijek · kupio prije 3 mjeseca',
               'text' => '„Stoji sam pokraj stola i ne pada. To mi je najveća stvar — više se ne saginjem za štapom svakih pet minuta."' ),
        array( 'img' => 'pal-noc.jpg',      'name' => 'Ankica M.',  'meta' => 'Split · kupila prije mjesec dana',
               'text' => '„Svjetiljku palim kad idem noću do kupaonice. Ne budim muža paljenjem svjetla, a vidim pod pred sobom."' ),
        array( 'img' => 'pal-ugc-baza.jpg', 'name' => 'Ivan Š.',    'meta' => 'Rijeka · kupio prije 6 tjedana',
               'text' => '„Baza je široka i ne kliže. Isprobao sam na pločicama u kupaonici i na mokrom terasi — drži."' ),
        array( 'img' => 'pal-ugc-6.jpg',    'name' => 'Nada B.',    'meta' => 'Varaždin · kupila prije 2 mjeseca',
               'text' => '„Kupila sam ga majci za 78. rođendan. Sama ga podešava po visini i sama ga sklapa, bez ičije pomoći."' ),
        array( 'img' => 'pal-ugc-5.jpg',    'name' => 'Stjepan L.', 'meta' => 'Karlovac · kupio prije 4 mjeseca',
               'text' => '„Nosim ga u autu kad idem doktoru. Sklopi se u sekundi i stane u torbu, ne smeta u čekaonici."' ),
      );
      foreach ( $pl_reviews as $r ) : ?>
      <article class="npl-rev__card">
        <div class="npl-rev__img"><?php echo $pl_img( $r['img'], 'Fotografija kupca — NORIKS Pal' ); ?></div>
        <div class="npl-rev__body">
          <div class="npl-rev__stars" aria-label="Ocjena 5 od 5">★★★★★</div>
          <p class="npl-rev__text"><?php echo esc_html( $r['text'] ); ?></p>
          <p class="npl-rev__name"><?php echo esc_html( $r['name'] ); ?>
            <svg width="15" height="15" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#2f9e5f"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </p>
          <p class="npl-rev__meta"><?php echo esc_html( $r['meta'] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Razlika</p>
      <h2 class="npl-h2">Od „trebam pomoć" do „idem sam"</h2>
      <p>Razlika nije u snazi nogu, nego u tome što imate za što se primiti. Druga ručka nosi težinu umjesto vaših ramena i zapešća.</p>
      <p class="npl-strong">Samostalno ustajanje, pa i šetnja parkom.</p>
      <a class="npl-cta" href="#bundle-selector">Naruči bez rizika — 30 dana</a>
    </div>
    <div class="npl-media"><?php echo $pl_img( 'pal-prije-poslije.jpg', 'Prije i poslije — samostalno kretanje' ); ?></div>
  </div>
</section>

<!-- 14) ŠEST RAZLOGA — slika desno -->
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
.npl-check { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 11px; }
.npl-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.npl-check li::before { content: "✓"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.npl-points { display: flex; flex-direction: column; gap: 16px; margin-top: 4px; }
.npl-point h3 { font-size: 16.5px; font-weight: 800; margin: 0 0 4px; color: #2b8fa6; }
.npl-point p { font-size: 15px; color: #465863; line-height: 1.6; margin: 0; }
.npl-six { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 4px; }
.npl-reason { background: #fff; border: 1px solid #d9e8ec; border-radius: 12px; padding: 18px 16px; }
.npl-reason span { display: inline-flex; align-items: center; justify-content: center; width: 26px; height: 26px; border-radius: 50%; background: #2b8fa6; color: #fff; font-weight: 800; font-size: 13px; margin-bottom: 9px; }
.npl-reason h3 { font-size: 15.5px; font-weight: 800; margin: 0 0 5px; line-height: 1.3; }
.npl-reason p { font-size: 14px; color: #465863; line-height: 1.55; margin: 0; }
.npl-cta { display: inline-block; background: #12212b; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.npl-cta:hover { background: #2b8fa6; color: #fff !important; }
.npl-rev__grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.npl-rev__card { background: #fff; border: 1px solid #d9e8ec; border-radius: 14px; overflow: hidden;
  display: flex; flex-direction: column; box-shadow: 0 1px 2px rgba(18,33,43,.04), 0 8px 24px rgba(18,33,43,.06); }
.npl-rev__img img { width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; border-radius: 0; box-shadow: none; }
.npl-rev__body { padding: 16px 18px 18px; }
.npl-rev__stars { color: #f0a020; font-size: 14px; letter-spacing: 1px; margin: 0 0 8px; }
.npl-rev__text { font-size: 14.5px; line-height: 1.6; color: #46545e; margin: 0 0 12px; }
.npl-rev__name { display: flex; align-items: center; gap: 6px; font-size: 14.5px; font-weight: 800; color: #12212b; margin: 0; }
.npl-rev__name svg { flex: 0 0 15px; }
.npl-rev__meta { font-size: 12.5px; color: #7b8b94; margin: 3px 0 0; }
.npl-sub { text-align: center; font-size: 16px; color: #5b6d78; max-width: 60ch; margin: 0 auto 34px; line-height: 1.6; }
.npl-video { width: 100%; display: block; border-radius: 14px; }
@media (max-width: 980px) {
  .npl-rev__grid { grid-template-columns: 1fr 1fr; }
    .npl-row2 { grid-template-columns: 1fr; gap: 30px; }
  .npl-row2--rev .npl-media { order: -1; }
  .npl-six { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 560px) {
  .npl-rev__grid { grid-template-columns: 1fr; gap: 16px; }
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
  line-height: 1.45 !important; font-size: 15.5px !important;
  display: block !important; position: relative !important; padding-left: 31px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nsg-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  flex: 0 0 21px !important; width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; margin-top: 1px; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
