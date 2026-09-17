<?php
/**
 * product-bottom: NORIKS Slim — oblikujuce gacice visokog struka (orto-slim).
 * Original: saybeam.com/products/saybeam-sculpt-brief. Slike: img/slim/ (s namizja NORIKS-SLIMY/SPLETNA STRAN).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno, nikoli na sredini;
 * slike su omejene na max-height 430px.
 *   1) Bez / s NORIKS Slim (slika lijevo)    5) Nakon poroda (lijevo)
 *   2) Lijepo i samouvjereno (desno)          6) Sest boja (desno)
 *   3) Tehnologija pletiva (lijevo)           7) Tablica velicina (lijevo)
 *   4) Visokoelasticno oblikovanje (desno)    8) Bonus e-knjiga (desno)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$sl      = get_template_directory_uri() . '/img/slim/';
$sl_path = get_template_directory() . '/img/slim/';
$sl_img  = function( $file, $alt ) use ( $sl, $sl_path ) {
  if ( ! file_exists( $sl_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $sl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) BEZ / S NORIKS SLIM — slika lijevo -->
<section class="nsl-sec nsl-tint">
  <div class="nsl-wrap nsl-row2">
    <div class="nsl-media"><?php echo $sl_img( 'slm-05-usporedba.jpg', 'Bez i s NORIKS Slim oblikujućim gaćicama' ); ?></div>
    <div class="nsl-copy">
      <p class="nsl-kicker">Razlika se vidi odmah</p>
      <h2 class="nsl-h2">Oblikujuće rublje uz koje <em>odjeća puno bolje pada</em></h2>
      <p>Obične gaćice ne drže ništa, a klasični steznici stisnu u jednoj liniji — pa se iznad ruba napravi izbočina, a sam rub se ocrtava ispod odjeće.</p>
      <ul class="nsl-vs">
        <li class="is-yes">Vidljivo glađa silueta</li>
        <li class="is-yes">Trbuh dobro pridržan cijeli dan</li>
        <li class="is-yes">Odjeća pada ravnije</li>
        <li class="is-no">Nabori ispod uske majice</li>
        <li class="is-no">Rub koji se rola i ureže pri sjedenju</li>
        <li class="is-no">Skrivanje ispod širokih majica</li>
      </ul>
      <a class="nsl-cta" href="#bundle-selector">Odaberi boju i veličinu</a>
    </div>
  </div>
</section>

<!-- 2) LIJEPO I SAMOUVJERENO — slika desno -->
<section class="nsl-sec">
  <div class="nsl-wrap nsl-row2 nsl-row2--rev">
    <div class="nsl-copy">
      <p class="nsl-kicker">Od jutra do večeri</p>
      <h2 class="nsl-h2">Osjećajte se lijepo <em>i samouvjereno</em></h2>
      <div class="nsl-points">
        <div class="nsl-point"><h3>Bez nabora</h3><p>Ukriženi pojas zaglađuje trbuh i ne pomiče se kad sjednete, ustanete ili se sagnete.</p></div>
        <div class="nsl-point"><h3>Oblikovan struk i stražnjica</h3><p>Anatomski kroj prati liniju tijela — struk izgleda uži, a stražnjica podignutija.</p></div>
        <div class="nsl-point"><h3>Udobnost cijeli dan</h3><p>Bešavna, mekana tkanina koju zaboravite čim je obučete.</p></div>
      </div>
    </div>
    <div class="nsl-media"><?php echo $sl_img( 'slm-06-samouvjereno.jpg', 'Žena u NORIKS Slim gaćicama' ); ?></div>
  </div>
</section>

<!-- 3) TEHNOLOGIJA PLETIVA — slika lijevo -->
<section class="nsl-sec nsl-tint">
  <div class="nsl-wrap nsl-row2">
    <div class="nsl-media"><?php echo $sl_img( 'slm-07-pletivo.jpg', 'Ukriženi pojas i pletivo NORIKS Slim gaćica' ); ?></div>
    <div class="nsl-copy">
      <p class="nsl-kicker">Pametno pletivo</p>
      <h2 class="nsl-h2">Zaglađuje i podupire, <em>bez osjećaja stezanja</em></h2>
      <p>Pojas prelazi ukriženo preko trbuha i nastavlja se na bokove i leđa. Pritisak se tako raspoređuje oko cijelog struka — 360° — umjesto da stisne u jednu točku.</p>
      <div class="nsl-facts">
        <div><h3>Ukriženi pojas 360°</h3><p>Sprijeda, sa strane i straga — drži trbuh ravnomjerno.</p></div>
        <div><h3>Visok struk</h3><p>Gornji rub seže iznad pupka i ne rola se prema dolje.</p></div>
        <div><h3>Mrežasti umeci</h3><p>Propuštaju zrak, pa nije vruće ni ljeti.</p></div>
        <div><h3>Pamučni uložak</h3><p>Mekan i higijenski — nose se i umjesto običnih gaćica.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) VISOKOELASTIČNO OBLIKOVANJE — slika desno -->
<section class="nsl-sec">
  <div class="nsl-wrap nsl-row2 nsl-row2--rev">
    <div class="nsl-copy">
      <p class="nsl-kicker">Elastična kompresija</p>
      <h2 class="nsl-h2">Visokoelastično <em>oblikovanje</em></h2>
      <p>Tkanina se rasteže u svim smjerovima i vraća u oblik — drži čvrsto, a kreće se s vama kad sjedite, hodate ili podižete dijete.</p>
      <ul class="nsl-check">
        <li><strong>Kontrola trbuha</strong> — trbuh je pridržan cijeli dan</li>
        <li><strong>Gladak struk</strong> — bez izbočine iznad hlača ili suknje</li>
        <li><strong>Ne klizi</strong> — ostaje na mjestu i kad sjednete</li>
        <li><strong>Nevidljivo</strong> — ispod pripijene haljine, traperica i tajica</li>
      </ul>
    </div>
    <div class="nsl-media"><?php echo $sl_img( 'slm-09-oblikovanje.jpg', 'Visokoelastično oblikovanje struka' ); ?></div>
  </div>
</section>

<!-- 5) NAKON PORODA — slika lijevo -->
<section class="nsl-sec nsl-tint">
  <div class="nsl-wrap nsl-row2">
    <div class="nsl-media"><?php echo $sl_img( 'slm-11-oblikovanje-nakon-poroda.jpg', 'Mame u NORIKS Slim gaćicama' ); ?></div>
    <div class="nsl-copy">
      <p class="nsl-kicker">I nakon trudnoće</p>
      <h2 class="nsl-h2">Oblikovanje koje radi <em>s vašim tijelom</em>, a ne protiv njega</h2>
      <p>Nakon trudnoće trbuh i struk se često ne vrate odmah u staru liniju. NORIKS Slim ih nježno pridrži, pa odjeća opet ljepše pada — bez stezanja i bez rolanja.</p>
      <ul class="nsl-check">
        <li><strong>Mekana i prozračna</strong> tkanina na osjetljivoj koži</li>
        <li><strong>Gornji rub iznad pupka</strong> — ne ureže se u donji dio trbuha</li>
        <li><strong>Veličine do 5XL</strong> — birate prema opsegu struka</li>
      </ul>
      <p class="nsl-note">Nakon carskog reza ili ako niste sigurni, prije nošenja se posavjetujte sa svojim liječnikom.</p>
    </div>
  </div>
</section>

<!-- 6) ŠEST BOJA — slika desno -->
<section class="nsl-sec">
  <div class="nsl-wrap nsl-row2 nsl-row2--rev">
    <div class="nsl-copy">
      <p class="nsl-kicker">Šest boja</p>
      <h2 class="nsl-h2">Za svaki dan <em>i svaku odjeću</em></h2>
      <p>Boja kože i crna ispod svega, tamnoplava za svaki dan, a lila, fuksija i šljiva kad želite nešto svoje. Sve boje imaju isto pletivo i isti kroj.</p>
      <ul class="nsl-colors">
        <li><span style="background:#17161a"></span>Crna</li>
        <li><span style="background:#ecd9bd"></span>Boja kože</li>
        <li><span style="background:#232b52"></span>Tamnoplava</li>
        <li><span style="background:#d8c1ee"></span>Lila</li>
        <li><span style="background:#d81b72"></span>Fuksija</li>
        <li><span style="background:#5b2147"></span>Šljiva</li>
      </ul>
      <a class="nsl-cta" href="#bundle-selector">Odaberi boju i veličinu</a>
    </div>
    <div class="nsl-media"><?php echo $sl_img( 'slm-12-boje-v2.jpg', 'NORIKS Slim u šest boja' ); ?></div>
  </div>
</section>

<!-- 7) TABLICA VELIČINA — slika lijevo -->
<section class="nsl-sec nsl-tint">
  <div class="nsl-wrap nsl-row2">
    <div class="nsl-media"><?php echo $sl_img( 'slm-15-tablica-velicina.jpg', 'Tablica veličina NORIKS Slim' ); ?></div>
    <div class="nsl-copy">
      <p class="nsl-kicker">Pravi broj iz prve</p>
      <h2 class="nsl-h2">Veličinu birajte <em>prema opsegu struka</em></h2>
      <p>Ne prema uobičajenoj veličini odjeće — nakon trudnoće ili promjene težine to dvoje se često ne podudara.</p>
      <ol class="nsl-steps">
        <li>Pronađite najuži dio trupa, malo iznad pupka.</li>
        <li>Obavijte centimetarsku traku vodoravno, pripijeno, ali ne stegnuto.</li>
        <li>Pronađite svoj opseg u tablici. Između dvije veličine? Uzmite <strong>veću</strong>.</li>
      </ol>
      <a class="nsl-cta nsl-cta--line js-open-size-chart" href="#">Otvori tablicu veličina</a>
    </div>
  </div>
</section>

<!-- 8) BONUS E-KNJIGA — slika desno -->
<section class="nsl-sec">
  <div class="nsl-wrap nsl-row2 nsl-row2--rev">
    <div class="nsl-copy">
      <p class="nsl-kicker">Bonus uz narudžbu</p>
      <h2 class="nsl-h2">Metoda ravnog trbuha — <em>besplatna e-knjiga</em></h2>
      <p>Jednostavan vodič do ravnijeg i čvršćeg donjeg trbuha — bez teretane. Kratke vježbe i navike koje možete uklopiti u običan dan.</p>
      <ul class="nsl-check">
        <li>Vježbe koje traju nekoliko minuta dnevno</li>
        <li>Bez opreme i bez odlaska u teretanu</li>
        <li>Stiže uz vašu narudžbu, besplatno</li>
      </ul>
      <p class="nsl-guarantee"><strong>30 dana za povrat ili zamjenu veličine.</strong> Ako vam ne odgovaraju, javite nam se e-mailom.</p>
    </div>
    <div class="nsl-media"><?php echo $sl_img( 'slm-10-ebook.jpg', 'E-knjiga Metoda ravnog trbuha' ); ?></div>
  </div>
</section>

<style>
.nsl-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #2b1622; }
.nsl-sec * { box-sizing: border-box; }
.nsl-tint { background: #fbf1f6; }
.nsl-wrap { width: 100%; max-width: 1440px; margin: 0 auto; padding: 0 24px; }
.nsl-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #a3336b; margin: 0 0 10px; }
.nsl-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #2b1622; }
.nsl-h2 em { font-style: italic; font-weight: 800; color: #a3336b; }
.nsl-copy p { font-size: 16px; line-height: 1.7; color: #5a4550; margin: 0 0 14px; }
.nsl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nsl-media { text-align: center; }
.nsl-media img { display: inline-block; width: auto; max-width: 100%; max-height: 430px; object-fit: contain; border-radius: 14px;
  box-shadow: 0 2px 4px rgba(43,22,34,.05), 0 14px 40px rgba(43,22,34,.10); }
.nsl-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nsl-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #3f2a35; }
.nsl-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsl-vs { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 10px; }
.nsl-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; color: #3f2a35; }
.nsl-vs li::before { position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsl-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.nsl-vs .is-no { color: #8e7883; }
.nsl-vs .is-no::before { content: "\2715"; background: #f0dfe7; color: #b0909f; }
.nsl-points { display: flex; flex-direction: column; gap: 20px; }
.nsl-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #a3336b; }
.nsl-point p { font-size: 15.5px; color: #5a4550; line-height: 1.6; margin: 0; }
.nsl-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 22px 26px; margin-top: 6px; }
.nsl-facts h3 { font-size: 16px; font-weight: 800; margin: 0 0 6px; color: #2b1622; }
.nsl-facts p { font-size: 14.5px; color: #6d5863; line-height: 1.6; margin: 0; }
.nsl-colors { list-style: none; padding: 0; margin: 6px 0 24px; display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 12px 16px; }
.nsl-colors li { display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 600; color: #3f2a35; }
.nsl-colors span { flex: 0 0 26px; width: 26px; height: 26px; border-radius: 50%; box-shadow: inset 0 0 0 1px rgba(0,0,0,.12); }
.nsl-steps { margin: 4px 0 22px; padding-left: 22px; }
.nsl-steps li { font-size: 15.5px; line-height: 1.6; color: #3f2a35; margin-bottom: 8px; }
.nsl-note { font-size: 13.5px !important; color: #8e7883 !important; font-style: italic; margin: 6px 0 0 !important; }
.nsl-guarantee { font-size: 14.5px !important; background: #fff; border: 1px solid #f0dfe7; border-radius: 10px; padding: 12px 16px; }
.nsl-cta { display: inline-block; background: #a3336b; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nsl-cta:hover { background: #82254f; color: #fff !important; }
.nsl-cta--line { background: #fff; color: #a3336b !important; border: 2px solid #a3336b; padding: 13px 28px; }
.nsl-cta--line:hover { background: #a3336b; color: #fff !important; }

@media (max-width: 980px) {
  .nsl-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nsl-row2--rev .nsl-media { order: -1; }
}
@media (max-width: 560px) {
  .nsl-sec { padding: 42px 0; }
  .nsl-wrap { padding: 0 16px; }
  .nsl-facts { grid-template-columns: 1fr; gap: 16px; }
  .nsl-colors { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .nsl-cta { width: 100%; text-align: center; }
  .nsl-media img { max-height: 360px; }
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
.woocommerce-product-details__short-description .nsl-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #a3336b !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
