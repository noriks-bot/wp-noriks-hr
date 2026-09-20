<?php
/**
 * product-bottom: NORIKS GelSeat — gel jastuk za sjedenje (orto-gelseat).
 * Original: helloholie.com (100% Gel Seat Cushion). Slike: img/gelseat/ (kreative z namizja + ciste fotografije z originalne strani).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno, nikada na sredini;
 * slike su omedene na max-height 430px.
 *   1) Trenutno olakšanje (lijevo)
 *   2) Nikad se ne spljošti (desno)
 *   3) Ostaje hladan (lijevo)
 *   4) Držanje (desno)
 *   5) Leđa i kukovi (lijevo)
 *   6) Održavanje (desno)
 *   7) Usporedba (lijevo)
 *   8) Ponuda (desno)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$ngs      = get_template_directory_uri() . '/img/gelseat/';
$ngs_path = get_template_directory() . '/img/gelseat/';
$ngs_img  = function( $file, $alt ) use ( $ngs, $ngs_path ) {
  if ( ! file_exists( $ngs_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $ngs . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) TRENUTNO OLAKŠANJE — slika lijevo -->
<section class="ngs-sec ngs-tint">
  <div class="ngs-wrap ngs-row2">
    <div class="ngs-media"><?php echo $ngs_img( 'gs-03-satima.jpg', 'NORIKS GelSeat gel jastuk za sjedenje' ); ?></div>
    <div class="ngs-copy">
      <p class="ngs-kicker">Trenutno olakšanje</p>
      <h2 class="ngs-h2">Sjedite satima <em>bez pritiska, boli i ukočenosti</em></h2>
      <p>Kod običnog jastuka cijela težina tijela završi na trtičnoj kosti i sjednim kostima. Nakon pola sata javi se pritisak, pa utrnulost, a navečer bol u leđima.</p>
      <p>Saćasti gel se pod težinom razmakne i raspodijeli pritisak po cijeloj površini — kao da sjedite na stotinama malih oslonaca umjesto na dvije točke.</p>
      <ul class="ngs-check">
        <li>Sprječava <strong>utrnulost i umor nogu</strong></li>
        <li>Ublažava <strong>bol trtice, leđa i kukova</strong></li>
        <li>Ublažava <strong>išijas i pritisak na živce</strong></li>
      </ul>
      <a class="ngs-cta" href="#bundle-selector">Naruči NORIKS GelSeat</a>
    </div>
  </div>
</section>

<!-- 2) NIKAD SE NE SPLJOŠTI — slika desno -->
<section class="ngs-sec">
  <div class="ngs-wrap ngs-row2 ngs-row2--rev">
    <div class="ngs-copy">
      <p class="ngs-kicker">Nikad se ne spljošti</p>
      <h2 class="ngs-h2">Gel se vraća <em>nakon svakog ustajanja</em></h2>
      <p>Spužva i memorijska pjena s vremenom ostanu utisnute i jastuk postane tvrd. Gel u saću je elastičan: pod pritiskom se razmakne, a čim ustanete vrati se u prvobitni oblik.</p>
      <div class="ngs-facts">
        <div><span class="ngs-num">100 %</span><h3>Gel</h3><p>Bez spužve koja se sabije i ostane plosnata.</p></div>
        <div><span class="ngs-num">42 × 37 cm</span><h3>Veličina</h3><p>Stane na uredsku stolicu, auto i kolica.</p></div>
        <div><span class="ngs-num">3,5 cm</span><h3>Debljina</h3><p>Dovoljno za rasterećenje, a ne previsoko.</p></div>
        <div><span class="ngs-num">~1,3 kg</span><h3>Težina</h3><p>Lako ga prenesete iz ureda u auto.</p></div>
      </div>
    </div>
    <div class="ngs-media"><?php echo $ngs_img( 'gs-07-pritisak.jpg', 'Prst pritišće saćasti gel NORIKS GelSeat jastuka' ); ?></div>
  </div>
</section>

<!-- 3) OSTAJE HLADAN — slika lijevo -->
<section class="ngs-sec ngs-tint">
  <div class="ngs-wrap ngs-row2">
    <div class="ngs-media"><?php echo $ngs_img( 'gs-04-hladno.jpg', 'Saćasta struktura gela propušta zrak' ); ?></div>
    <div class="ngs-copy">
      <p class="ngs-kicker">Ostaje hladan</p>
      <h2 class="ngs-h2">Zrak prolazi <em>kroz otvoreno saće</em></h2>
      <p>Memorijska pjena zadržava toplinu tijela, pa nakon sat vremena sjedenja postane vruća i vlažna. Kod saćastog gela zrak struji kroz otvorene ćelije i toplina odlazi.</p>
      <ul class="ngs-check">
        <li>Bez nakupljanja topline i znojenja</li>
        <li>Ugodno i ljeti, i u autu na suncu</li>
        <li>Jednako udobno nakon osam sati sjedenja</li>
      </ul>
    </div>
  </div>
</section>

<!-- 4) DRŽANJE — slika desno -->
<section class="ngs-sec">
  <div class="ngs-wrap ngs-row2 ngs-row2--rev">
    <div class="ngs-copy">
      <p class="ngs-kicker">Držanje</p>
      <h2 class="ngs-h2">Kralježnica <em>u prirodnom položaju</em></h2>
      <p>Kad zdjelica utone u mekani jastuk, donji dio leđa se zaokruži i kralježnica izgubi prirodnu krivulju. Gel je čvrst koliko treba: zdjelica ostaje poravnata, a težina je ravnomjerno raspoređena.</p>
      <ul class="ngs-check">
        <li>Bez pritiska na <strong>trtičnu kost</strong></li>
        <li><strong>Ravnomjeran raspored</strong> težine</li>
        <li>Kralježnica <strong>prirodno poravnata</strong></li>
      </ul>
    </div>
    <div class="ngs-media"><?php echo $ngs_img( 'gs-01-bocno.jpg', 'Prikaz položaja kralježnice na NORIKS GelSeat jastuku' ); ?></div>
  </div>
</section>

<!-- 5) LEĐA I KUKOVI — slika lijevo -->
<section class="ngs-sec ngs-tint">
  <div class="ngs-wrap ngs-row2">
    <div class="ngs-media"><?php echo $ngs_img( 'gs-02-leda.jpg', 'Prikaz olakšanja u donjem dijelu leđa' ); ?></div>
    <div class="ngs-copy">
      <p class="ngs-kicker">Leđa i kukovi</p>
      <h2 class="ngs-h2">Za sve koji <em>sjede cijeli dan</em></h2>
      <p>Jastuk je namijenjen svakodnevnom sjedenju — ne samo uredu.</p>
      <ul class="ngs-tags">
        <li>Uredska stolica</li>
        <li>Vožnja automobilom</li>
        <li>Kamion i kombi</li>
        <li>Invalidska kolica</li>
        <li>Kuhinjska stolica</li>
        <li>Stolica za pecanje</li>
      </ul>
      <p>Često ga uzimaju i nakon operacije kuka ili trtice, kad je dugo sjedenje bolno.</p>
    </div>
  </div>
</section>

<!-- 6) ODRŽAVANJE — slika desno -->
<section class="ngs-sec">
  <div class="ngs-wrap ngs-row2 ngs-row2--rev">
    <div class="ngs-copy">
      <p class="ngs-kicker">Održavanje</p>
      <h2 class="ngs-h2">Navlaka se skine <em>i opere u perilici</em></h2>
      <p>Otkopčajte patentni zatvarač, skinite navlaku i operite je na 30 °C. Sam gel isperite toplom vodom i obrišite.</p>
      <ul class="ngs-check">
        <li>Odvojiva navlaka, <strong>periva u perilici</strong></li>
        <li><strong>Protuklizna</strong> donja strana — jastuk ostaje na mjestu</li>
        <li>Prozračna gornja strana koja ne klizi ispod vas</li>
      </ul>
    </div>
    <div class="ngs-media"><?php echo $ngs_img( 'gs-05-navlaka.jpg', 'Odvojiva navlaka NORIKS GelSeat jastuka' ); ?></div>
  </div>
</section>

<!-- 7) USPOREDBA — slika lijevo -->
<section class="ngs-sec ngs-tint">
  <div class="ngs-wrap ngs-row2">
    <div class="ngs-media"><?php echo $ngs_img( 'gs-08-usporedba.jpg', 'Usporedba gel jastuka i običnog jastuka' ); ?></div>
    <div class="ngs-copy">
      <p class="ngs-kicker">Usporedba</p>
      <h2 class="ngs-h2">Gel jastuk <em>prema običnom jastuku</em></h2>
      <ul class="ngs-vs">
        <li class="is-yes">Trenutno olakšanje leđa i trtice</li>
        <li class="is-yes">Ostaje hladan cijeli dan</li>
        <li class="is-yes">Nikad se ne spljošti</li>
        <li class="is-yes">Protuklizni — radi svugdje</li>
        <li class="is-no">Obični jastuk: nakupljanje pritiska na trtici</li>
        <li class="is-no">Zadržava toplinu i nelagodu</li>
        <li class="is-no">Brzo se spljošti i klizi</li>
      </ul>
    </div>
  </div>
</section>

<!-- 8) PONUDA — slika desno -->
<section class="ngs-sec">
  <div class="ngs-wrap ngs-row2 ngs-row2--rev">
    <div class="ngs-copy">
      <p class="ngs-kicker">Ponuda</p>
      <h2 class="ngs-h2">Uzmite dva <em>— 1+1 GRATIS</em></h2>
      <p>Većina kupaca uzme dva: jedan ostane na uredskoj stolici, drugi u autu — tako ga ne moraju svaki dan prenositi.</p>
      <ul class="ngs-check">
        <li><strong>1+1 GRATIS</strong> — ograničeno vrijeme</li>
        <li><strong>30 dana</strong> za povrat novca</li>
        <li>Brza dostava i plaćanje pouzećem</li>
      </ul>
      <a class="ngs-cta" href="#bundle-selector">Naruči NORIKS GelSeat</a>
    </div>
    <div class="ngs-media"><?php echo $ngs_img( 'gs-06-ponuda.jpg', 'NORIKS GelSeat ponuda 1+1 gratis' ); ?></div>
  </div>
</section>

<style>
.ngs-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #16233b; }
.ngs-sec * { box-sizing: border-box; }
.ngs-tint { background: #eef3fc; }
.ngs-wrap { width: 100%; max-width: 1440px; margin: 0 auto; padding: 0 24px; }
.ngs-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #1f63c8; margin: 0 0 10px; }
.ngs-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #16233b; }
.ngs-h2 em { font-style: italic; font-weight: 800; color: #1f63c8; }
.ngs-copy p { font-size: 16px; line-height: 1.7; color: #4d5a70; margin: 0 0 14px; }
.ngs-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.ngs-media { text-align: center; }
.ngs-media img { display: inline-block; width: auto; max-width: 100%; max-height: 430px; object-fit: contain; border-radius: 14px;
  box-shadow: 0 2px 4px rgba(20,25,40,.05), 0 14px 40px rgba(20,25,40,.10); }
.ngs-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.ngs-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #16233b; }
.ngs-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.ngs-cross { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.ngs-cross li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #16233b; }
.ngs-cross li::before { content: "\2715"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #e04a4a; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.ngs-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.ngs-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; color: #16233b; }
.ngs-vs li::before { position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.ngs-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.ngs-vs .is-no { color: #7d8898; }
.ngs-vs .is-no::before { content: "\2715"; background: #e6e9ef; color: #8f9bab; }
.ngs-points { display: flex; flex-direction: column; gap: 20px; }
.ngs-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #1f63c8; }
.ngs-point p { font-size: 15.5px; color: #4d5a70; line-height: 1.6; margin: 0; }
.ngs-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 6px; }
.ngs-facts > div { background: #eef3fc; border-radius: 12px; padding: 16px 18px; }
.ngs-num { display: block; font-size: 26px; font-weight: 800; color: #1f63c8; line-height: 1.1; margin-bottom: 6px; }
.ngs-facts h3 { font-size: 15.5px; font-weight: 800; margin: 0 0 4px; color: #16233b; }
.ngs-facts p { font-size: 14px !important; color: #4d5a70 !important; line-height: 1.5 !important; margin: 0 !important; }
.ngs-steps { list-style: none; counter-reset: st; padding: 0; margin: 6px 0 20px; display: flex; flex-direction: column; gap: 14px; }
.ngs-steps li { counter-increment: st; position: relative; padding-left: 44px; font-size: 15.5px; line-height: 1.55; color: #16233b; }
.ngs-steps li::before { content: counter(st); position: absolute; left: 0; top: -2px; width: 30px; height: 30px; border-radius: 50%; background: #1f63c8; color: #fff; font-size: 14px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.ngs-tags { list-style: none; padding: 0; margin: 6px 0 18px; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px 16px; }
.ngs-tags li { position: relative; padding-left: 24px; font-size: 15.5px; font-weight: 600; color: #16233b; }
.ngs-tags li::before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #1f63c8; }
.ngs-note { font-size: 13.5px !important; color: #7d8898 !important; font-style: italic; margin: 6px 0 0 !important; }
.ngs-cta { display: inline-block; background: #1f63c8; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.ngs-cta:hover { background: #17499a; color: #fff !important; }

@media (max-width: 980px) {
  .ngs-row2 { grid-template-columns: 1fr; gap: 28px; }
  .ngs-row2--rev .ngs-media { order: -1; }
}
@media (max-width: 560px) {
  .ngs-sec { padding: 42px 0; }
  .ngs-wrap { padding: 0 16px; }
  .ngs-cta { width: 100%; text-align: center; }
  .ngs-media img { max-height: 360px; }
  .ngs-num { font-size: 23px; }
  .ngs-tags { grid-template-columns: 1fr; }
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
.woocommerce-product-details__short-description .ngs-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #1f63c8 !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
