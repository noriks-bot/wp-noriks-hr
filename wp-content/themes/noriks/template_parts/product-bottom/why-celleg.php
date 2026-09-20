<?php
/**
 * product-bottom: NORIKS CelLeg — 3D kompresijske tajice protiv celulita (orto-celleg).
 * Original: luveon.com (Leggings 3D Luveon). Slike: img/celleg/ (kreative z namizja + ciste fotografije z originalne strani).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno, nikada na sredini;
 * slike su omedene na max-height 430px.
 *   1) Tri stvari odjednom (lijevo)
 *   2) Kompresija (desno)
 *   3) Uzrok (lijevo)
 *   4) Kalorije (desno)
 *   5) Tekstilna inovacija (lijevo)
 *   6) Boje (desno)
 *   7) Veličine (lijevo)
 *   8) NORIKS CelLeg (desno)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ncl      = get_template_directory_uri() . '/img/celleg/';
$ncl_path = get_template_directory() . '/img/celleg/';
$ncl_img  = function( $file, $alt ) use ( $ncl, $ncl_path ) {
  if ( ! file_exists( $ncl_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ncl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) TRI STVARI ODJEDNOM — slika lijevo -->
<section class="ncl-sec ncl-tint">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-media"><?php echo $ncl_img( 'cl-01-prednosti.jpg', 'NORIKS CelLeg crne 3D tajice' ); ?></div>
    <div class="ncl-copy">
      <p class="ncl-kicker">Tri stvari odjednom</p>
      <h2 class="ncl-h2">Tajice koje <em>oblikuju dok ih nosite</em></h2>
      <div class="ncl-points">
        <div class="ncl-point"><h3>Čvrste noge i stražnjica</h3><p>Prirodno učvršćuju noge i stražnjicu, pa silueta izgleda skladnije čim ih obučete.</p></div>
        <div class="ncl-point"><h3>Smanjuje celulit</h3><p>Cilja područja gdje se celulit stvara i vidljivo zaglađuje kožu.</p></div>
        <div class="ncl-point"><h3>Mršavi 2x brže</h3><p>Troši više kalorija uz manje kretanja, čak i tijekom običnog dana.</p></div>
      </div>
      <a class="ncl-cta" href="#bundle-selector">Naruči NORIKS CelLeg</a>
    </div>
  </div>
</section>

<!-- 2) KOMPRESIJA — slika desno -->
<section class="ncl-sec">
  <div class="ncl-wrap ncl-row2 ncl-row2--rev">
    <div class="ncl-copy">
      <p class="ncl-kicker">Kompresija</p>
      <h2 class="ncl-h2">Ciljano djelovanje <em>protiv celulita</em></h2>
      <p>3D linije utkane su točno preko bedara i stražnjice — područja na kojima se celulit najčešće vidi. Pletivo ondje stišće jače, a na ostatku noge blaže.</p>
      <ul class="ncl-check">
        <li>Ciljana kompresija na bedrima i stražnjici</li>
        <li>Potiče <strong>mikrocirkulaciju i limfni protok</strong></li>
        <li>Koža izgleda <strong>zaglađenije</strong> već pri prvom nošenju</li>
      </ul>
    </div>
    <div class="ncl-media"><?php echo $ncl_img( 'cl-02-kompresija.jpg', 'Prikaz kompresije NORIKS CelLeg tajica' ); ?></div>
  </div>
</section>

<!-- 3) UZROK — slika lijevo -->
<section class="ncl-sec ncl-tint">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-media"><?php echo $ncl_img( 'cl-03-uzrok.jpg', 'Bez NORIKSA i s NORIKSOM — protok krvi' ); ?></div>
    <div class="ncl-copy">
      <p class="ncl-kicker">Uzrok</p>
      <h2 class="ncl-h2">Uklanja glavni uzrok <em>celulita</em></h2>
      <p>Spor protok krvi u potkožnom tkivu jedan je od glavnih razloga zašto se pojavi izgled „narančine kore”.</p>
      <ul class="ncl-vs">
        <li class="is-no">Bez NORIKSA: spor protok krvi = celulit</li>
        <li class="is-yes">S NORIKSOM: povećanje protoka krvi za 30 %</li>
        <li class="is-yes">S NORIKSOM: glatka koža</li>
      </ul>
      <p class="ncl-note">3D linije povećavaju protok krvi za oko 30 % u odnosu na obične tajice.</p>
    </div>
  </div>
</section>

<!-- 4) KALORIJE — slika desno -->
<section class="ncl-sec">
  <div class="ncl-wrap ncl-row2 ncl-row2--rev">
    <div class="ncl-copy">
      <p class="ncl-kicker">Kalorije</p>
      <h2 class="ncl-h2">Troši 3x više kalorija <em>bez mijenjanja rutine</em></h2>
      <p>Kompresija drži mišiće nogu i stražnjice blago aktivnima cijeli dan. Isti broj koraka zato znači veću potrošnju.</p>
      <div class="ncl-facts">
        <div><span class="ncl-num">40</span><h3>Bez NORIKSA</h3><p>1000 koraka — oko 40 potrošenih kalorija.</p></div>
        <div><span class="ncl-num">120</span><h3>S NORIKSOM</h3><p>1000 koraka — oko 120 potrošenih kalorija.</p></div>
      </div>
      <p class="ncl-note">Tajice nisu zamjena za prehranu i kretanje, ali čine da svakodnevni pokret vrijedi više.</p>
    </div>
    <div class="ncl-media"><?php echo $ncl_img( 'cl-04-kalorije.jpg', 'Usporedba potrošnje kalorija s tajicama i bez njih' ); ?></div>
  </div>
</section>

<!-- 5) TEKSTILNA INOVACIJA — slika lijevo -->
<section class="ncl-sec ncl-tint">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-media"><?php echo $ncl_img( 'cl-05-tekstil.jpg', 'Detalj 3D pletiva NORIKS CelLeg tajica' ); ?></div>
    <div class="ncl-copy">
      <p class="ncl-kicker">Tekstilna inovacija</p>
      <h2 class="ncl-h2">Pletivo koje <em>zaglađuje i oblikuje</em></h2>
      <p>Bešavno pletivo od 70 % poliamida i 30 % elastana. Rastezljivo u svim smjerovima, neprozirno i dovoljno gusto da drži oblik, a ipak prozračno.</p>
      <ul class="ncl-check">
        <li>Bez bočnih šavova koji žuljaju</li>
        <li><strong>Neprozirne</strong> i pri čučnju</li>
        <li>Visoki pojas koji se <strong>ne rola</strong></li>
      </ul>
    </div>
  </div>
</section>

<!-- 6) BOJE — slika desno -->
<section class="ncl-sec">
  <div class="ncl-wrap ncl-row2 ncl-row2--rev">
    <div class="ncl-copy">
      <p class="ncl-kicker">Boje</p>
      <h2 class="ncl-h2">Devet boja <em>za svaki dan</em></h2>
      <ul class="ncl-tags">
        <li>Crna</li>
        <li>Siva</li>
        <li>Paunovo zelena</li>
        <li>Bež</li>
        <li>Tamnoplava</li>
        <li>Roza</li>
        <li>Plava</li>
        <li>Žuta</li>
        <li>Svijetloljubičasta</li>
      </ul>
      <p>Kroj i kompresija jednaki su u svim bojama — birajte prema ormaru.</p>
    </div>
    <div class="ncl-media"><?php echo $ncl_img( 'cl-b3-paunovo-zelena.jpg', 'NORIKS CelLeg tajice u paunovo zelenoj boji' ); ?></div>
  </div>
</section>

<!-- 7) VELIČINE — slika lijevo -->
<section class="ncl-sec ncl-tint">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-media"><?php echo $ncl_img( 'cl-b4-bez.jpg', 'NORIKS CelLeg tajice u bež boji' ); ?></div>
    <div class="ncl-copy">
      <p class="ncl-kicker">Veličine</p>
      <h2 class="ncl-h2">Od XS <em>do 5XL</em></h2>
      <p>Veličinu birajte prema opsegu struka i bokova iz tablice, a ne prema broju traperica. Ako ste između dvije veličine, odlučite prema željenom osjećaju: manja daje jaču kompresiju, veća blaži pritisak.</p>
      <ul class="ncl-check">
        <li>Devet veličina — <strong>XS do 5XL</strong></li>
        <li>Visoki pojas drži trbuh bez stezanja</li>
        <li>Duljina do gležnja</li>
      </ul>
    </div>
  </div>
</section>

<!-- 8) NORIKS CELLEG — slika desno -->
<section class="ncl-sec">
  <div class="ncl-wrap ncl-row2 ncl-row2--rev">
    <div class="ncl-copy">
      <p class="ncl-kicker">NORIKS CelLeg</p>
      <h2 class="ncl-h2">30 dana <em>za isprobavanje</em></h2>
      <p>Obucite ih na posao, u šetnju i na trening. Ako vam ne odgovaraju, vratite ih i dobit ćete novac natrag.</p>
      <ul class="ncl-check">
        <li><strong>30 dana</strong> za isprobavanje</li>
        <li>Brza dostava na kućnu adresu</li>
        <li>Sigurno plaćanje, i pouzećem</li>
      </ul>
      <a class="ncl-cta" href="#bundle-selector">Naruči NORIKS CelLeg</a>
    </div>
    <div class="ncl-media"><?php echo $ncl_img( 'cl-07-brend.jpg', 'NORIKS CelLeg — 30 dana za isprobavanje' ); ?></div>
  </div>
</section>

<style>
.ncl-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #2a1c26; }
.ncl-sec * { box-sizing: border-box; }
.ncl-tint { background: #fbf1f6; }
.ncl-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.ncl-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #a4557f; margin: 0 0 10px; }
.ncl-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #2a1c26; }
.ncl-h2 em { font-style: italic; font-weight: 800; color: #a4557f; }
.ncl-copy p { font-size: 16px; line-height: 1.7; color: #5d4b57; margin: 0 0 14px; }
.ncl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ncl-media { text-align: center; }
.ncl-media img { display: inline-block; width: auto; max-width: 100%; max-height: 430px; object-fit: contain; border-radius: 14px;
  box-shadow: 0 2px 4px rgba(20,25,40,.05), 0 14px 40px rgba(20,25,40,.10); }
.ncl-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.ncl-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #2a1c26; }
.ncl-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.ncl-cross { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.ncl-cross li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #2a1c26; }
.ncl-cross li::before { content: "\2715"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #e04a4a; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.ncl-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.ncl-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; color: #2a1c26; }
.ncl-vs li::before { position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.ncl-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.ncl-vs .is-no { color: #7d8898; }
.ncl-vs .is-no::before { content: "\2715"; background: #e6e9ef; color: #8f9bab; }
.ncl-points { display: flex; flex-direction: column; gap: 20px; }
.ncl-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #a4557f; }
.ncl-point p { font-size: 15.5px; color: #5d4b57; line-height: 1.6; margin: 0; }
.ncl-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 6px; }
.ncl-facts > div { background: #fbf1f6; border-radius: 12px; padding: 16px 18px; }
.ncl-num { display: block; font-size: 26px; font-weight: 800; color: #a4557f; line-height: 1.1; margin-bottom: 6px; }
.ncl-facts h3 { font-size: 15.5px; font-weight: 800; margin: 0 0 4px; color: #2a1c26; }
.ncl-facts p { font-size: 14px !important; color: #5d4b57 !important; line-height: 1.5 !important; margin: 0 !important; }
.ncl-steps { list-style: none; counter-reset: st; padding: 0; margin: 6px 0 20px; display: flex; flex-direction: column; gap: 14px; }
.ncl-steps li { counter-increment: st; position: relative; padding-left: 44px; font-size: 15.5px; line-height: 1.55; color: #2a1c26; }
.ncl-steps li::before { content: counter(st); position: absolute; left: 0; top: -2px; width: 30px; height: 30px; border-radius: 50%; background: #a4557f; color: #fff; font-size: 14px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.ncl-tags { list-style: none; padding: 0; margin: 6px 0 18px; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px 16px; }
.ncl-tags li { position: relative; padding-left: 24px; font-size: 15.5px; font-weight: 600; color: #2a1c26; }
.ncl-tags li::before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #a4557f; }
.ncl-note { font-size: 13.5px !important; color: #7d8898 !important; font-style: italic; margin: 6px 0 0 !important; }
.ncl-cta { display: inline-block; background: #a4557f; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.ncl-cta:hover { background: #833f63; color: #fff !important; }

@media (max-width: 980px) {
  .ncl-row2 { grid-template-columns: 1fr; gap: 28px; }
  .ncl-row2--rev .ncl-media { order: -1; }
}
@media (max-width: 560px) {
  .ncl-sec { padding: 42px 0; }
  .ncl-wrap { padding: 0 16px; }
  .ncl-cta { width: 100%; text-align: center; }
  .ncl-media img { max-height: 360px; }
  .ncl-num { font-size: 23px; }
  .ncl-tags { grid-template-columns: 1fr; }
}

/* kratek opis izdelka: kljukice namesto pik (REST pobrise inline slog) */
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
.woocommerce-product-details__short-description .ncl-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #a4557f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
