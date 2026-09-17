<?php
/**
 * product-bottom: NORIKS Bowl — povisena zdjelica za pse s nagibom 15° (orto-bowl).
 * Original: hellonavea.com (NAVEA Orthopedic Feeding Bowl Small). Slike: img/bowl/ (s namizja NORIKS-BOWL/SPLETNA STRAN).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno, nikoli na sredini;
 * slike su omejene na max-height 430px.
 *   1) Za sretnijeg i zdravijeg psa (lijevo)   4) Za male pasmine (desno)
 *   2) Specifikacije (desno)                     5) Nehrdajuci celik (lijevo)
 *   3) Tri prednosti (lijevo)                    6) Izjava + jamstvo (desno)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$bw      = get_template_directory_uri() . '/img/bowl/';
$bw_path = get_template_directory() . '/img/bowl/';
$bw_img  = function( $file, $alt ) use ( $bw, $bw_path ) {
  if ( ! file_exists( $bw_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $bw . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) ZA SRETNIJEG I ZDRAVIJEG PSA — slika lijevo -->
<section class="nbw-sec nbw-tint">
  <div class="nbw-wrap nbw-row2">
    <div class="nbw-media"><?php echo $bw_img( 'bwl-05-naslov-kuhinja.jpg', 'Francuski buldog uz NORIKS Bowl zdjelicu' ); ?></div>
    <div class="nbw-copy">
      <p class="nbw-kicker">Obrok bez savijanja vrata</p>
      <h2 class="nbw-h2">Za sretnijeg <em>i zdravijeg psa</em></h2>
      <p>Iz obične zdjelice na podu pas jede sagnut, s vratom savijenim prema dolje. Hrana se gura prema rubu, a manji psi njuškom love zadnje granule po kutovima.</p>
      <p>NORIKS Bowl podiže zdjelu na 11 cm i nagne je za 15° prema psu — hrana klizi prema njemu, a glava ostaje u prirodnijem položaju.</p>
      <ul class="nbw-check">
        <li><strong>Manje savijanja vrata</strong> dok jede</li>
        <li><strong>Mirniji obrok</strong> — hrana ne bježi po podu</li>
        <li><strong>Ugodnije starijim psima</strong> kojima je saginjanje naporno</li>
      </ul>
      <a class="nbw-cta" href="#bundle-selector">Naruči NORIKS Bowl</a>
    </div>
  </div>
</section>

<!-- 2) SPECIFIKACIJE — slika desno -->
<section class="nbw-sec">
  <div class="nbw-wrap nbw-row2 nbw-row2--rev">
    <div class="nbw-copy">
      <p class="nbw-kicker">Svaki detalj ima svrhu</p>
      <h2 class="nbw-h2">Oblikovana <em>oko načina na koji pas jede</em></h2>
      <div class="nbw-facts">
        <div><span class="nbw-num">15°</span><h3>Nagib zdjele</h3><p>Za bolje držanje glave i vrata pri jelu.</p></div>
        <div><span class="nbw-num">11 cm</span><h3>Visina postolja</h3><p>Manje napetosti u vratu nego kod zdjelice na podu.</p></div>
        <div><span class="nbw-num">5 cm</span><h3>Plitka zdjela</h3><p>Brkovi ne udaraju o rub, a hrana je lako dostupna.</p></div>
        <div><span class="nbw-num">430 ml</span><h3>Zapremina</h3><p>Promjer 15 cm — dovoljno za obrok ili vodu malog psa.</p></div>
      </div>
    </div>
    <div class="nbw-media"><?php echo $bw_img( 'bwl-10-specifikacije.jpg', 'Specifikacije NORIKS Bowl: nagib 15°, visina 11 cm, plitko 5 cm' ); ?></div>
  </div>
</section>

<!-- 3) TRI PREDNOSTI — slika lijevo -->
<section class="nbw-sec nbw-tint">
  <div class="nbw-wrap nbw-row2">
    <div class="nbw-media"><?php echo $bw_img( 'bwl-09-prednosti.jpg', 'Šnaucer jede iz NORIKS Bowl zdjelice' ); ?></div>
    <div class="nbw-copy">
      <p class="nbw-kicker">Tri razloga</p>
      <h2 class="nbw-h2">Zašto psi jedu <em>udobnije</em></h2>
      <div class="nbw-points">
        <div class="nbw-point"><h3>Prirodniji položaj</h3><p>Nagib od 15° potiče prirodniji i udobniji položaj pri jelu — pas ne mora gurati njušku u dno zdjele.</p></div>
        <div class="nbw-point"><h3>Higijenski čelik</h3><p>Vrhunski nehrđajući čelik ostaje higijenski i svjež te se lako čisti.</p></div>
        <div class="nbw-point"><h3>Glatka površina</h3><p>Ostaci hrane se ne lijepe, pa je čišćenje brže nego kod plastične zdjelice.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) ZA MALE PASMINE — slika desno -->
<section class="nbw-sec">
  <div class="nbw-wrap nbw-row2 nbw-row2--rev">
    <div class="nbw-copy">
      <p class="nbw-kicker">Veličina</p>
      <h2 class="nbw-h2">Stvorena <em>za male pasmine</em></h2>
      <p>Visina postolja i veličina zdjele prilagođeni su psima niskog rasta, kojima je zdjelica na podu predaleko, a obična povišena zdjela previsoka.</p>
      <ul class="nbw-breeds">
        <li>Jazavčar</li>
        <li>Francuski buldog</li>
        <li>Minijaturni šnaucer</li>
        <li>Mops</li>
        <li>Maltezer</li>
        <li>Jack Russell terijer</li>
      </ul>
      <p class="nbw-note">Dimenzije zdjele: promjer 15 cm, dubina 5 cm, zapremina oko 430 ml.</p>
    </div>
    <div class="nbw-media"><?php echo $bw_img( 'bwl-03-francuski-buldog.jpg', 'Francuski buldog uz NORIKS Bowl zdjelicu' ); ?></div>
  </div>
</section>

<!-- 5) NEHRĐAJUĆI ČELIK — slika lijevo -->
<section class="nbw-sec nbw-tint">
  <div class="nbw-wrap nbw-row2">
    <div class="nbw-media"><?php echo $bw_img( 'bwl-06-celik.jpg', 'NORIKS Bowl od nehrđajućeg čelika' ); ?></div>
    <div class="nbw-copy">
      <p class="nbw-kicker">Materijal</p>
      <h2 class="nbw-h2">Čelik umjesto <em>plastike</em></h2>
      <p>Plastične zdjelice s vremenom dobiju sitne ogrebotine u kojima se zadržavaju ostaci hrane i miris. Čelik ostaje gladak godinama.</p>
      <ul class="nbw-vs">
        <li class="is-yes">Nehrđajući čelik — zdjela i postolje</li>
        <li class="is-yes">Ne upija mirise i ne mijenja boju</li>
        <li class="is-yes">Ispere se toplom vodom za nekoliko sekundi</li>
        <li class="is-no">Plastika koja se ogrebe i zadržava ostatke</li>
        <li class="is-no">Keramika koja se okrhne ako padne</li>
      </ul>
    </div>
  </div>
</section>

<!-- 6) IZJAVA + JAMSTVO — slika desno -->
<section class="nbw-sec">
  <div class="nbw-wrap nbw-row2 nbw-row2--rev">
    <div class="nbw-copy">
      <p class="nbw-kicker">NORIKS Bowl</p>
      <h2 class="nbw-h2">Stabilna, elegantna <em>i uistinu udobna</em></h2>
      <p>Postolje stoji čvrsto i kad je pas nespretan, čelik se opere u nekoliko sekundi, a u kuhinji izgleda kao dio namještaja, a ne kao plastična posuda na podu.</p>
      <ul class="nbw-check">
        <li>Za hranu i za vodu — mnogi uzmu dvije</li>
        <li>Brza dostava na kućnu adresu</li>
        <li><strong>30 dana</strong> za povrat novca</li>
      </ul>
      <a class="nbw-cta" href="#bundle-selector">Naruči NORIKS Bowl</a>
    </div>
    <div class="nbw-media"><?php echo $bw_img( 'bwl-08-izjava.jpg', 'Jazavčar uz NORIKS Bowl zdjelicu' ); ?></div>
  </div>
</section>

<style>
.nbw-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1c2b44; }
.nbw-sec * { box-sizing: border-box; }
.nbw-tint { background: #eef3fa; }
.nbw-wrap { width: 100%; max-width: 1440px; margin: 0 auto; padding: 0 24px; }
.nbw-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #2f5b9a; margin: 0 0 10px; }
.nbw-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #1c2b44; }
.nbw-h2 em { font-style: italic; font-weight: 800; color: #2f5b9a; }
.nbw-copy p { font-size: 16px; line-height: 1.7; color: #4b5a70; margin: 0 0 14px; }
.nbw-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nbw-media { text-align: center; }
.nbw-media img { display: inline-block; width: auto; max-width: 100%; max-height: 430px; object-fit: contain; border-radius: 14px;
  box-shadow: 0 2px 4px rgba(28,43,68,.05), 0 14px 40px rgba(28,43,68,.10); }
.nbw-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nbw-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #2c3b52; }
.nbw-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nbw-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.nbw-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; color: #2c3b52; }
.nbw-vs li::before { position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nbw-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.nbw-vs .is-no { color: #7d8898; }
.nbw-vs .is-no::before { content: "\2715"; background: #dfe6f0; color: #8f9bab; }
.nbw-points { display: flex; flex-direction: column; gap: 20px; }
.nbw-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #2f5b9a; }
.nbw-point p { font-size: 15.5px; color: #4b5a70; line-height: 1.6; margin: 0; }
.nbw-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 6px; }
.nbw-facts > div { background: #eef3fa; border-radius: 12px; padding: 16px 18px; }
.nbw-num { display: block; font-size: 26px; font-weight: 800; color: #2f5b9a; line-height: 1.1; margin-bottom: 6px; }
.nbw-facts h3 { font-size: 15.5px; font-weight: 800; margin: 0 0 4px; color: #1c2b44; }
.nbw-facts p { font-size: 14px !important; color: #5c6a7e !important; line-height: 1.5 !important; margin: 0 !important; }
.nbw-breeds { list-style: none; padding: 0; margin: 6px 0 18px; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px 16px; }
.nbw-breeds li { position: relative; padding-left: 24px; font-size: 15.5px; font-weight: 600; color: #2c3b52; }
.nbw-breeds li::before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #2f5b9a; }
.nbw-note { font-size: 13.5px !important; color: #7d8898 !important; font-style: italic; margin: 6px 0 0 !important; }
.nbw-cta { display: inline-block; background: #2f5b9a; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nbw-cta:hover { background: #22477c; color: #fff !important; }

@media (max-width: 980px) {
  .nbw-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nbw-row2--rev .nbw-media { order: -1; }
}
@media (max-width: 560px) {
  .nbw-sec { padding: 42px 0; }
  .nbw-wrap { padding: 0 16px; }
  .nbw-cta { width: 100%; text-align: center; }
  .nbw-media img { max-height: 360px; }
  .nbw-num { font-size: 23px; }
}

/* ── kratek opis izdelka: kljukice namesto pik (REST pobrise inline slog) ── */
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
.woocommerce-product-details__short-description .nbw-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f5b9a !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
