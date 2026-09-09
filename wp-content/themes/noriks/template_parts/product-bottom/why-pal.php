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
    <div class="npl-media"><?php echo $pl_img( 'pal-ustajanje.jpg', 'Ustajanje uz NORIKS Pal štap' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Problem koji rješava</p>
      <h2 class="npl-h2">Ustajanje ne bi trebalo tražiti tri pokušaja</h2>
      <p>Naginjete se naprijed. Njišete se naprijed-natrag. Hvatate se za naslon rukama svom snagom. Pružate ruku prema rubu stola.</p>
      <p>Zatim se bacite naprijed u nadi da ćete uspjeti. Ponekad uspijete. Ponekad se jednostavno vratite u sjedeći položaj i pravite se da još niste spremni.</p>
      <p class="npl-strong">Postoji bolji način.</p>
      <a class="npl-cta" href="#bundle-selector">Pogledaj ponudu</a>
    </div>
  </div>
</section>

<!-- 2) DRUGA RUČKA — slika desno -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
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
    <div class="npl-media"><?php echo $pl_img( 'pal-rucke.jpg', 'Ortopedske ručke za oslonac' ); ?></div>
  </div>
</section>

<!-- 3) PREGLED ŠTAPA — slika lijevo -->
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
    <div class="npl-media"><?php echo $pl_img( 'pal-nozice.jpg', 'Četiri protuklizne gumene nožice' ); ?></div>
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
  </div>
</section>

<!-- 6) SVJETILJKA — slika desno -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Sigurnost noću</p>
      <h2 class="npl-h2">Ugrađena svjetiljka za put do kupaonice</h2>
      <p>Svjetiljka je ugrađena u ručku i pali se jednim pritiskom. Osvjetljava pod ispred vas — za odlazak do kupaonice noću ili šetnju u sumrak, bez paljenja svjetla u cijeloj kući.</p>
      <p>Većina padova u kući dogodi se noću, na putu koji poznajete napamet. Svjetlo pod nogama tu razliku napravi.</p>
    </div>
    <div class="npl-media"><?php echo $pl_img( 'pal-svjetiljka.jpg', 'Ugrađena svjetiljka na ručki štapa' ); ?></div>
  </div>
</section>

<!-- 7) ALARM — slika lijevo -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-alarm.jpg', 'Zvučni alarm na štapu' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Za svaki slučaj</p>
      <h2 class="npl-h2">Alarm koji se čuje kroz cijelu kuću</h2>
      <p>Pritiskom na gumb oglašava se glasan signal koji upozori ukućane ako padnete ili vam zatreba pomoć — i onda kad telefon nije pri ruci.</p>
      <p class="npl-strong">Mir za vas i za obitelj.</p>
    </div>
  </div>
</section>

<!-- 8) SKLOPIV — slika desno -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Prijenosnost</p>
      <h2 class="npl-h2">Sklopi se i stane u torbu</h2>
      <p>Štap se <strong>sklopi u nekoliko dijelova</strong> i stane u torbu ili pretinac u autu — praktično za putovanja, odlaske k liječniku i vožnju.</p>
      <p>U restoranu ili čekaonici ga sklopite i odložite pokraj sebe umjesto da vam smeta uz stolicu.</p>
    </div>
    <div class="npl-media"><?php echo $pl_img( 'pal-sklopivo.jpg', 'Štap u sklopljenom stanju' ); ?></div>
  </div>
</section>

<!-- 9) SKLAPANJE — slika lijevo -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-sklapanje.jpg', 'Sklapanje štapa u nekoliko sekundi' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Bez alata</p>
      <h2 class="npl-h2">Sklapanje traje nekoliko sekundi</h2>
      <p>Dijelovi su povezani unutarnjom gumom, pa se štap rastavlja i sastavlja jednim pokretom. Ne treba vam alat ni pomoć druge osobe.</p>
      <ul class="npl-check">
        <li>Rastavljanje i sastavljanje jednim pokretom</li>
        <li>Dijelovi ostaju povezani — ništa se ne gubi</li>
        <li>Radi jednako i s ograničenom snagom u šakama</li>
      </ul>
    </div>
  </div>
</section>

<!-- 10) PODESIVA DULJINA — slika desno -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Visina</p>
      <h2 class="npl-h2">Podesiva duljina za svaku visinu</h2>
      <p>Visinu podešavate u nekoliko sekundi, bez alata. Isti štap odgovara i osobi od 155 cm i osobi od 190 cm.</p>
      <p>Pravilna visina znači da vam rame ostaje spušteno, a lakat blago savijen — tako zapešće ne preuzima cijelu težinu.</p>
    </div>
    <div class="npl-media"><?php echo $pl_img( 'pal-duljina.jpg', 'Podesiva duljina štapa' ); ?></div>
  </div>
</section>

<!-- 11) DETALJI IZRADE — slika lijevo -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-detalji.jpg', 'Detalji izrade: ručka, spoj, baza' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Izrada</p>
      <h2 class="npl-h2">Lagan za nošenje, čvrst pod opterećenjem</h2>
      <p>Konstrukcija je od aluminijske legure — dovoljno lagana da je nosite jednom rukom, a dovoljno čvrsta da se na nju oslonite cijelom težinom pri ustajanju.</p>
      <ul class="npl-check">
        <li>Aluminijska konstrukcija, mekane ručke</li>
        <li>Spojevi bez zazora — štap ne škripi</li>
        <li>Nosivost predviđena za oslanjanje pri ustajanju</li>
      </ul>
    </div>
  </div>
</section>

<!-- 12) KOD NAŠIH KUPACA — galerija -->
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
  </div>
</section>

<!-- 13) PRIJE I POSLIJE — slika lijevo -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-prije-poslije.jpg', 'Prije i poslije — samostalno kretanje' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Razlika</p>
      <h2 class="npl-h2">Od „trebam pomoć" do „idem sam"</h2>
      <p>Razlika nije u snazi nogu, nego u tome što imate za što se primiti. Druga ručka nosi težinu umjesto vaših ramena i zapešća.</p>
      <p class="npl-strong">Samostalno ustajanje, pa i šetnja parkom.</p>
    </div>
  </div>
</section>

<!-- 14) ŠEST RAZLOGA — slika desno -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Ukratko</p>
      <h2 class="npl-h2">Šest razloga za NORIKS Pal</h2>
      <div class="npl-six">
        <div class="npl-reason"><span>1</span><h3>Lakše ustajanje</h3><p>Druga ručka nosi težinu umjesto ramena i zapešća.</p></div>
        <div class="npl-reason"><span>2</span><h3>Sigurnost noću</h3><p>Ugrađena svjetiljka osvjetljava put pred vama.</p></div>
        <div class="npl-reason"><span>3</span><h3>Alarm za hitne slučajeve</h3><p>Glasan signal koji čuju ukućani.</p></div>
        <div class="npl-reason"><span>4</span><h3>Stabilna baza</h3><p>Četiri protuklizne nožice — štap stoji sam.</p></div>
        <div class="npl-reason"><span>5</span><h3>Sklopiv i prijenosan</h3><p>Stane u torbu i u pretinac u autu.</p></div>
        <div class="npl-reason"><span>6</span><h3>Više samostalnosti</h3><p>Ustajanje i šetnja bez čekanja na tuđu pomoć.</p></div>
      </div>
    </div>
    <div class="npl-media"><?php echo $pl_img( 'pal-razlozi.jpg', 'Šest razloga za NORIKS Pal' ); ?></div>
  </div>
</section>

<!-- 15) JAMSTVO — slika lijevo -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-garancija.jpg', '30 dana jamstva na povrat novca' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Bez rizika</p>
      <h2 class="npl-h2">30 dana za predomisliti se</h2>
      <p>Isprobajte štap kod kuće. Ako vam ne olakša ustajanje ili vam jednostavno ne odgovara, vratite ga unutar 30 dana i vraćamo novac.</p>
      <a class="npl-cta" href="#bundle-selector">Naruči bez rizika</a>
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
.npl-sub { text-align: center; font-size: 16px; color: #5b6d78; max-width: 60ch; margin: 0 auto 34px; line-height: 1.6; }
.npl-video { width: 100%; display: block; border-radius: 14px; }
.npl-ugc { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
.npl-ugc figure { margin: 0; border-radius: 12px; overflow: hidden; background: #eef6f8; }
.npl-ugc img { width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; }
@media (max-width: 980px) {
  .npl-ugc { grid-template-columns: 1fr 1fr; }
  .npl-row2 { grid-template-columns: 1fr; gap: 30px; }
  .npl-row2--rev .npl-media { order: -1; }
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
