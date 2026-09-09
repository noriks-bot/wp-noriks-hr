<?php
/**
 * product-bottom: NORIKS FIT Woman — oblikujuca majica s 3D linijama (orto-kompwom).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno.
 * Recenzije su preslikane s originala (leonieandco): bordo pas + vodoravni klizac.
 *   1) Zagladen trbuh (lijevo)     5) Tkanina i kroj (desno)
 *   2) Mi vs drugi (desno)         6) Kako je nositi (lijevo)
 *   3) RECENZIJE — klizac          7) Boje (desno)
 *   4) Osjecajte se sigurno (lijevo)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$kw      = get_template_directory_uri() . '/img/kompwom/';
$kw_path = get_template_directory() . '/img/kompwom/';
$kw_img  = function( $file, $alt, $cls = '' ) use ( $kw, $kw_path ) {
  if ( ! file_exists( $kw_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $kw . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) ZAGLAĐEN TRBUH — slika lijevo -->
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

<!-- 2) MI VS DRUGI — slika desno -->
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

<!-- 3) OSJEĆAJTE SE SIGURNO — slika lijevo -->
<section class="nkw-rev">
  <div class="nkw-rev__head">
    <span class="nkw-rev__badge">★★★★★ Izvrsno · Ocjena 4,9/5</span>
    <h2 class="nkw-rev__title">Recenzije žena poput vas</h2>
  </div>
  <div class="nkw-rev__track">
    <?php
    $kw_reviews = array(
      array( 'img' => 'kwm-ugc-1.jpg', 'name' => 'Karolina B.', 'meta' => 'Veličina M · 46 · Zagreb', 'worn' => 'Nosi 7 tjedana',
             'text' => '„Košulje mi sjedaju ravno, sprijeda i straga. One koje sam probala prije nisu izdržale ni jedan cijeli dan."' ),
      array( 'img' => 'kwm-ugc-2.jpg', 'name' => 'Danijela P.', 'meta' => 'Veličina 2XL · 48 · Split', 'worn' => 'Nosi 5 tjedana',
             'text' => '„Prva oblikujuća majica koja mi se ne rola prema gore. Rub drži, a tkanina je dovoljno tanka za ljeto."' ),
      array( 'img' => 'kwm-ugc-3.jpg', 'name' => 'Hana T.', 'meta' => 'Veličina 3XL · 51 · Osijek', 'worn' => 'Nosi 6 tjedana',
             'text' => '„Kupila sam je za vjenčanje, a sad je nosim na posao. Sjedenje više ne mijenja način na koji haljina pada."' ),
      array( 'img' => 'kwm-ugc-4.jpg', 'name' => 'Lara D.', 'meta' => 'Veličina M · 43 · Rijeka', 'worn' => 'Nosi 8 tjedana',
             'text' => '„Obučem je nakon doručka i zaboravim da je imam. Do podneva je uopće ne primjećujem."' ),
      array( 'img' => 'kwm-ugc-5.jpg', 'name' => 'Natalija A.', 'meta' => 'Veličina 2XL · 37 · Zadar', 'worn' => 'Nosi 9 tjedana',
             'text' => '„Nikad mi nije dobro stajalo kad zataknem majicu u hlače. S ovom ispod struk izgleda uži i ne popravljam se cijeli dan."' ),
      array( 'img' => 'kwm-ugc-6.jpg', 'name' => 'Nikolina M.', 'meta' => 'Veličina L · 48 · Varaždin', 'worn' => 'Nosi 4 tjedna',
             'text' => '„Naručila sam je za jednu kombinaciju, a završila ispod većine džempera. Pletivo izgleda glatko umjesto nabrano u struku."' ),
      array( 'img' => 'kwm-ugc-7.jpg', 'name' => 'Petra J.', 'meta' => 'Veličina XL · 50 · Pula', 'worn' => 'Nosi 6 tjedana',
             'text' => '„Za stolom sam devet sati dnevno i ostaje udobna. Nema šavova koji se osjete, a bluza straga ostaje glatka."' ),
      array( 'img' => 'kwm-ugc-8.jpg', 'name' => 'Sofija K.', 'meta' => 'Veličina M · 45 · Karlovac', 'worn' => 'Nosi 10 tjedana',
             'text' => '„Leđa su mi zahvalna. Majica me nježno podsjeća da se uspravim, a da me pritom nigdje ne steže."' ),
    );
    foreach ( $kw_reviews as $r ) : ?>
    <article class="nkw-rev__card">
      <div class="nkw-rev__img"><?php echo $kw_img( $r['img'], 'Kupka u NORIKS FIT Woman majici' ); ?></div>
      <div class="nkw-rev__body">
        <div class="nkw-rev__top">
          <div>
            <p class="nkw-rev__name"><?php echo esc_html( $r['name'] ); ?>
              <svg width="15" height="15" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#3aa06a"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </p>
            <p class="nkw-rev__meta"><?php echo esc_html( $r['meta'] ); ?></p>
          </div>
          <span class="nkw-rev__worn"><?php echo esc_html( $r['worn'] ); ?></span>
        </div>
        <p class="nkw-rev__text"><?php echo esc_html( $r['text'] ); ?></p>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
  <p class="nkw-rev__hint">Povucite u stranu za više recenzija →</p>
</section>

<!-- 7) BOJE — slika desno -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-drzanje.jpg', 'Suženiji struk i uspravno držanje' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Tri stvari odjednom</p>
      <h2 class="nkw-h2">Osjećajte se <em>sigurno u svojoj koži</em></h2>
      <div class="nkw-points">
        <div class="nkw-point"><h3>Suženiji struk</h3><p>3D linije oblikuju struk i zaglađuju izbočine iznad hlača ili suknje.</p></div>
        <div class="nkw-point"><h3>Odmah ravan trbuh</h3><p>Nježna kompresija drži trbuh ispod svake odjeće, bez pritiska u jednu točku.</p></div>
        <div class="nkw-point"><h3>Uspravno držanje</h3><p>Potpora na leđima pomaže da stojite uspravno i rasterećuje donji dio leđa.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) TKANINA I KROJ — slika desno -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Tkanina i kroj</p>
      <h2 class="nkw-h2">Reljef je <em>upleten</em>, ne tiskan</h2>
      <p>Široki pojas prelazi preko trbuha i bokova, drugi ide preko leđa. Zato ništa ne puca i ništa se ne ljušti.</p>
      <div class="nkw-facts">
        <div><h3>3D linije</h3><p>Strukturirane, upletene u pletivo — ne otpadaju s vremenom.</p></div>
        <div><h3>Pojas na leđima</h3><p>Drugi pojas prelazi leđa i podupire uspravno držanje.</p></div>
        <div><h3>Rukavi</h3><p>Pripijeni kroj koji se ne rola i ne skuplja prema gore.</p></div>
        <div><h3>Materijal</h3><p>Tanak, mat i prozračan — nestane ispod košulje ili sakoa.</p></div>
      </div>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-detalji.jpg', 'Detalji: 3D linije, pojas, rukavi, materijal' ); ?></div>
  </div>
</section>

<!-- 5) KAKO JE NOSITI — slika lijevo -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-siva.jpg', 'NORIKS FIT Woman tamnosiva' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Kako je nositi</p>
      <h2 class="nkw-h2">Obucite ujutro i zaboravite je do večeri</h2>
      <p>Trebate normalno disati i jesti bez razmišljanja o majici. Ako je trag na koži vidljiv dvadeset minuta nakon skidanja, veličina je premala.</p>
      <ul class="nkw-check">
        <li><strong>Cijeli dan</strong> — kompresija je raspoređena, pa ništa ne ureza</li>
        <li><strong>Ispod svega</strong> — bez linije i bez ruba ispod odjeće</li>
        <li><strong>Jednostavna njega</strong> — strojno pranje na 30 °C</li>
      </ul>
      <p class="nkw-note nkw-note--left">Veličinu birajte prema opsegu grudi. Ako ste između dvije, uzmite veću.</p>
    </div>
  </div>
</section>

<!-- 6) RECENZIJE (postavitev z originala — bordo pas z drsnikom) -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Tri boje</p>
      <h2 class="nkw-h2">Crna, tamnosiva i <em>roza</em></h2>
      <p>Crna ispod svega, tamnosiva za dnevno nošenje, roza kad želite nešto toplije. Sve tri imaju isto pletivo i isti reljef.</p>
      <p>Boju i veličinu birate na ovoj stranici, prije dodavanja u košaricu.</p>
      <a class="nkw-cta" href="#bundle-selector">Odaberi boju i veličinu</a>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-roza.jpg', 'NORIKS FIT Woman roza' ); ?></div>
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
.nkw-copy p { font-size: 16px; line-height: 1.7; color: #56494f; margin: 0 0 14px; }
.nkw-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.nkw-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(36,28,34,.05), 0 14px 40px rgba(36,28,34,.10); }
.nkw-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nkw-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.nkw-check li::before { content: "\2713"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkw-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.nkw-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; }
.nkw-vs li::before { position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkw-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.nkw-vs .is-no { color: #8b7b83; }
.nkw-vs .is-no::before { content: "\2715"; background: #ece0e4; color: #a8949c; }
.nkw-points { display: flex; flex-direction: column; gap: 20px; }
.nkw-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #a8536b; }
.nkw-point p { font-size: 15.5px; color: #56494f; line-height: 1.6; margin: 0; }
.nkw-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 22px 26px; margin-top: 6px; }
.nkw-facts h3 { font-size: 16px; font-weight: 800; margin: 0 0 6px; color: #241c22; }
.nkw-facts p { font-size: 14.5px; color: #6b5f66; line-height: 1.6; margin: 0; }
.nkw-note { font-size: 13.5px; color: #8b7b83; font-style: italic; margin: 20px 0 0; }
.nkw-note--left { text-align: left; }
.nkw-cta { display: inline-block; background: #241c22; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nkw-cta:hover { background: #a8536b; color: #fff !important; }

/* ── recenzije: bordo pas + vodoravni klizac (kot na originalu) ────── */
.nkw-rev { background: #5c2331; padding: 62px 0 54px; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; }
.nkw-rev * { box-sizing: border-box; }
.nkw-rev__head { max-width: 1240px; margin: 0 auto 30px; padding: 0 24px; text-align: center; }
.nkw-rev__badge { display: inline-block; border: 1px solid rgba(255,255,255,.45); border-radius: 100px; padding: 8px 18px; font-size: 12.5px; font-weight: 700; letter-spacing: .04em; color: #fff; }
.nkw-rev__title { font-family: Georgia, 'Times New Roman', serif; font-size: clamp(27px, 3.4vw, 40px); font-weight: 400; color: #fff; margin: 16px 0 0; line-height: 1.2; }
.nkw-rev__track { display: flex; gap: 20px; overflow-x: auto; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch;
  padding: 4px 24px 18px; margin: 0 auto; max-width: 1240px; scrollbar-width: thin; scrollbar-color: rgba(255,255,255,.4) transparent; }
.nkw-rev__track::-webkit-scrollbar { height: 6px; }
.nkw-rev__track::-webkit-scrollbar-track { background: rgba(255,255,255,.12); border-radius: 100px; }
.nkw-rev__track::-webkit-scrollbar-thumb { background: rgba(255,255,255,.45); border-radius: 100px; }
.nkw-rev__card { flex: 0 0 310px; width: 310px; scroll-snap-align: start; background: #fff; border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; }
.nkw-rev__img img { width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; }
.nkw-rev__body { padding: 16px 18px 20px; }
.nkw-rev__top { display: flex; align-items: flex-start; justify-content: space-between; gap: 10px; }
.nkw-rev__name { display: flex; align-items: center; gap: 6px; font-size: 15px; font-weight: 800; color: #241c22; margin: 0; }
.nkw-rev__name svg { flex: 0 0 15px; }
.nkw-rev__meta { font-size: 12.5px; color: #7b6d73; margin: 3px 0 0; }
.nkw-rev__worn { flex: 0 0 auto; background: #f3eaed; color: #5c2331; font-size: 10.5px; font-weight: 800; letter-spacing: .04em; text-transform: uppercase; padding: 5px 9px; border-radius: 100px; white-space: nowrap; }
.nkw-rev__text { font-size: 14.5px; line-height: 1.6; color: #46393f; margin: 13px 0 0; }
.nkw-rev__hint { text-align: center; font-size: 12.5px; color: rgba(255,255,255,.6); margin: 8px 0 0; }

@media (max-width: 980px) {
  .nkw-row2 { grid-template-columns: 1fr; gap: 30px; }
  .nkw-row2--rev .nkw-media { order: -1; }
  .nkw-facts { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 560px) {
  .nkw-sec { padding: 44px 0; }
  .nkw-wrap { padding: 0 16px; }
  .nkw-facts { grid-template-columns: 1fr; gap: 16px; }
  .nkw-cta { width: 100%; text-align: center; }
  .nkw-rev { padding: 46px 0 40px; }
  .nkw-rev__head { padding: 0 16px; }
  .nkw-rev__track { padding: 4px 16px 16px; gap: 14px; }
  .nkw-rev__card { flex: 0 0 300px; width: 300px; }
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
