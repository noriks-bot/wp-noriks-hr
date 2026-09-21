<?php
/**
 * product-bottom: NORIKS Relief — bambusov steznik za koljeno (orto-relief).
 * Original: bamburelief.fi (BambuRelief Polvituki). Slike: img/relief/ (kreative z namizja + ciste fotografije z originalne strani).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno, nikada na sredini;
 * slike su omedene na max-height 430px.
 *   1) Zvuči poznato? (lijevo)
 *   2) Olakšanje u nekoliko minuta (desno)
 *   3) Smanjuje upalu (lijevo)
 *   4) Više pokretljivosti (desno)
 *   5) Nosite ga danju i noću (lijevo)
 *   6) Zašto bambus (desno)
 *   7) Veličine (lijevo)
 *   8) NORIKS Relief (desno)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nrl      = get_template_directory_uri() . '/img/relief/';
$nrl_path = get_template_directory() . '/img/relief/';
$nrl_img  = function( $file, $alt ) use ( $nrl, $nrl_path ) {
  if ( ! file_exists( $nrl_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nrl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) ZVUČI POZNATO? — slika lijevo -->
<section class="nrl-sec nrl-tint">
  <div class="nrl-wrap nrl-row2">
    <div class="nrl-media"><?php echo $nrl_img( 'rl-k01-bol.jpg', 'Bol u koljenu — NORIKS Relief steznik za koljeno' ); ?></div>
    <div class="nrl-copy">
      <p class="nrl-kicker">Zvuči poznato?</p>
      <h2 class="nrl-h2">Koljeno koje boli, <em>škripi i oteče</em></h2>
      <p>Ustanete sa stolca i koljeno zapne. Stepenice idete postrance, a nakon šetnje je natečeno i vruće. Većina steznika je pretvrda i nezgrapna, pa ih nakon dva dana odložite u ladicu.</p>
      <ul class="nrl-cross">
        <li><strong>Ukočenost</strong> pri ustajanju i prvim koracima</li>
        <li><strong>Škripanje</strong> i osjećaj trenja u zglobu</li>
        <li><strong>Oticanje</strong> nakon hodanja i stajanja</li>
        <li><strong>Umor</strong> u nogama na kraju dana</li>
      </ul>
      <p>NORIKS Relief radi na jednostavnom principu: ravnomjerna, blaga kompresija koja obuhvaća cijelo koljeno — bez šarki, remena i plastike.</p>
    </div>
  </div>
</section>

<!-- 2) OLAKŠANJE U NEKOLIKO MINUTA — slika desno -->
<section class="nrl-sec">
  <div class="nrl-wrap nrl-row2 nrl-row2--rev">
    <div class="nrl-copy">
      <p class="nrl-kicker">Olakšanje u nekoliko minuta</p>
      <h2 class="nrl-h2">Kompresija koja <em>pokreće krvotok</em></h2>
      <p>Pletivo je gušće točno ondje gdje zglob treba potporu — oko čašice i s obje strane koljena. Umjesto da steže u jednoj liniji kao guma, pritisak je raspoređen po cijelom koljenu i potiče protok krvi.</p>
      <ul class="nrl-check">
        <li><strong>Bolji krvotok</strong> — više kisika do zgloba i mišića oko njega</li>
        <li><strong>Manje oticanja</strong> jer se tekućina brže odvodi</li>
        <li><strong>Stabilnije koljeno</strong> pri hodanju, čučnju i stepenicama</li>
      </ul>
      <p>Većina korisnika razliku osjeti već pri prvom nošenju, a puni učinak dolazi uz redovitu upotrebu.</p>
    </div>
    <div class="nrl-media"><?php echo $nrl_img( 'rl-k02-cirkulacija.webp', 'Prikaz krvotoka u koljenu pod kompresijom' ); ?></div>
  </div>
</section>

<!-- 3) SMANJUJE UPALU — slika lijevo -->
<section class="nrl-sec nrl-tint">
  <div class="nrl-wrap nrl-row2">
    <div class="nrl-media"><?php echo $nrl_img( 'rl-k03-upala.jpg', 'NORIKS Relief steznik smanjuje upalu u koljenu' ); ?></div>
    <div class="nrl-copy">
      <p class="nrl-kicker">Smanjuje upalu</p>
      <h2 class="nrl-h2">Za koljena koja <em>se moraju oporaviti</em></h2>
      <p>Toplina i blagi pritisak smiruju nadraženo tkivo oko zgloba, a bolja cirkulacija pomaže da oteklina splasne brže nego mirovanjem.</p>
      <div class="nrl-facts">
        <div><span class="nrl-num">93 %</span><h3>Manje boli</h3><p>Osjetilo je izrazito smanjenje boli i ukočenosti već nakon prvog nošenja.</p></div>
        <div><span class="nrl-num">96 %</span><h3>Bolja pokretljivost</h3><p>Primijetilo je da se koljena tijekom dana osjećaju lakšima.</p></div>
        <div><span class="nrl-num">97 %</span><h3>Udobnije od ostalih</h3><p>Ocijenilo ga je udobnijim i nježnijim od steznika koje su prije probali.</p></div>
        <div><span class="nrl-num">2 × 1</span><h3>Za oba koljena</h3><p>Isti steznik možete nositi na lijevom ili desnom koljenu.</p></div>
      </div>
      <p class="nrl-note">* Podaci proizvođača bambusovih steznika ove vrste, prikupljeni anketom među kupcima.</p>
    </div>
  </div>
</section>

<!-- 4) VIŠE POKRETLJIVOSTI — slika desno -->
<section class="nrl-sec">
  <div class="nrl-wrap nrl-row2 nrl-row2--rev">
    <div class="nrl-copy">
      <p class="nrl-kicker">Više pokretljivosti</p>
      <h2 class="nrl-h2">Pomaže kod <em>svakodnevnih tegoba</em></h2>
      <p>Nije zamjena za liječnika, ali je potpora koju možete nositi svaki dan — na poslu, u šetnji i tijekom vježbanja.</p>
      <ul class="nrl-tags">
        <li>Artroza koljena</li>
        <li>Upala patelarne tetive</li>
        <li>Reumatoidni artritis</li>
        <li>Burzitis</li>
        <li>Trkačko koljeno</li>
        <li>Oticanje i ukočenost</li>
      </ul>
      <ul class="nrl-check">
        <li>Za <strong>dug boravak na nogama</strong> — posao, kućanski poslovi, vrt</li>
        <li>Za <strong>šetnje i stepenice</strong> bez straha da će koljeno popustiti</li>
        <li>Za <strong>oporavak nakon treninga</strong> i ozljede</li>
      </ul>
    </div>
    <div class="nrl-media"><?php echo $nrl_img( 'rl-k04-hodanje.jpg', 'Šetnja u NORIKS Relief stezniku za koljeno' ); ?></div>
  </div>
</section>

<!-- 5) NOSITE GA DANJU I NOĆU — slika lijevo -->
<section class="nrl-sec nrl-tint">
  <div class="nrl-wrap nrl-row2">
    <div class="nrl-media"><?php echo $nrl_img( 'rl-k05-noc.jpg', 'NORIKS Relief steznici za koljena tijekom odmora' ); ?></div>
    <div class="nrl-copy">
      <p class="nrl-kicker">Danju i noću</p>
      <h2 class="nrl-h2">Ostaje na mjestu, <em>ne klizi niz nogu</em></h2>
      <p>Ergonomski kroj prati oblik koljena, pa steznik ne klizi ni kad ga nosite cijeli dan. Tkanina je toliko mekana da ga možete ostaviti i preko noći.</p>
      <ul class="nrl-check">
        <li><strong>Bez šarki i remena</strong> — ništa ne pritišće i ne žulja</li>
        <li><strong>Tanak</strong> koliko treba da stane ispod hlača i tajica</li>
        <li><strong>Jednostavno se navuče</strong> — bez podešavanja i zatezanja</li>
      </ul>
      <p class="nrl-note">Ako osjetite trnce ili prejak pritisak, skinite steznik i sljedeći put uzmite veću veličinu.</p>
    </div>
  </div>
</section>

<!-- 6) ZAŠTO BAMBUS — slika desno -->
<section class="nrl-sec">
  <div class="nrl-wrap nrl-row2 nrl-row2--rev">
    <div class="nrl-copy">
      <p class="nrl-kicker">Zašto bambus</p>
      <h2 class="nrl-h2">Mekano pletivo <em>koje diše</em></h2>
      <p>Bambusovo vlakno upija vlagu i ostaje prozračno, pa se koža ispod steznika ne znoji kao u sintetici. Elastan drži kompresiju na mjestu — i nakon pranja.</p>
      <ul class="nrl-vs">
        <li class="is-yes">Prirodna svježina — sprječava neugodne mirise bolje od pamuka</li>
        <li class="is-yes">Regulira temperaturu — grije kad je hladno, hladi kad je vruće</li>
        <li class="is-yes">Mekano i hipoalergeno pletivo, bez lateksa</li>
        <li class="is-no">Gruba sintetika u kojoj se koljeno znoji</li>
        <li class="is-no">Tvrde plastične šarke i remeni koji žuljaju</li>
      </ul>
      <p class="nrl-note">Pranje na 30 °C, bez omekšivača i sušilice — sušiti na zraku.</p>
    </div>
    <div class="nrl-media"><?php echo $nrl_img( 'rl-k06-pletivo.jpg', 'Rastezljivo bambusovo pletivo NORIKS Relief steznika' ); ?></div>
  </div>
</section>

<!-- 7) VELIČINE — slika lijevo -->
<section class="nrl-sec nrl-tint">
  <div class="nrl-wrap nrl-row2">
    <div class="nrl-media"><?php echo $nrl_img( 'rl-k07-tablica.jpg', 'Tablica veličina NORIKS Relief steznika za koljeno' ); ?></div>
    <div class="nrl-copy">
      <p class="nrl-kicker">Veličine</p>
      <h2 class="nrl-h2">Izmjerite nogu <em>10 cm iznad koljena</em></h2>
      <p>Sedam veličina pokriva opseg od 32 do 80 cm. Izmjerite opseg noge 10 cm iznad koljenske čašice i odaberite red u koji ulazi vaša mjera. Ako ste između dvije veličine, uzmite veću.</p>
      <ul class="nrl-tags">
        <li>S — 32 do 40 cm</li>
        <li>M — 40 do 48 cm</li>
        <li>L — 48 do 54 cm</li>
        <li>XL — 54 do 59 cm</li>
        <li>2XL — 59 do 64 cm</li>
        <li>3XL — 64 do 72 cm</li>
        <li>4XL — 72 do 80 cm</li>
      </ul>
      <p class="nrl-note">Cijelu tablicu otvorite preko poveznice iznad izbornika veličina.</p>
    </div>
  </div>
</section>

<!-- 8) NORIKS RELIEF — slika desno -->
<section class="nrl-sec">
  <div class="nrl-wrap nrl-row2 nrl-row2--rev">
    <div class="nrl-copy">
      <p class="nrl-kicker">NORIKS Relief</p>
      <h2 class="nrl-h2">Isprobajte ga <em>30 dana bez rizika</em></h2>
      <p>Nosite ga tjedan dana na poslu, u šetnji i preko noći. Ako ne osjetite razliku, javite nam se i vratit ćemo vam novac.</p>
      <ul class="nrl-check">
        <li><strong>30 dana</strong> za povrat novca</li>
        <li>Brza dostava na kućnu adresu</li>
        <li>Plaćanje pouzećem pri preuzimanju</li>
      </ul>
      <a class="nrl-cta" href="#bundle-selector">Naruči NORIKS Relief</a>
    </div>
    <div class="nrl-media"><?php echo $nrl_img( 'rl-k08-prednosti.jpg', 'Prednosti NORIKS Relief steznika za koljeno' ); ?></div>
  </div>
</section>

<style>
.nrl-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #17302c; }
.nrl-sec * { box-sizing: border-box; }
.nrl-tint { background: #eef6f4; }
.nrl-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nrl-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #2f8f7d; margin: 0 0 10px; }
.nrl-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #17302c; }
.nrl-h2 em { font-style: italic; font-weight: 800; color: #2f8f7d; }
.nrl-copy p { font-size: 16px; line-height: 1.7; color: #4a5f5a; margin: 0 0 14px; }
.nrl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nrl-media { text-align: left; }
.nrl-row2--rev .nrl-media { text-align: right; }
.nrl-media img { display: inline-block; width: auto; max-width: 100%; max-height: 560px; object-fit: contain; border-radius: 14px;
  box-shadow: 0 2px 4px rgba(20,25,40,.05), 0 14px 40px rgba(20,25,40,.10); }
.nrl-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nrl-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #17302c; }
.nrl-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nrl-cross { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nrl-cross li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #17302c; }
.nrl-cross li::before { content: "\2715"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #e04a4a; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nrl-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.nrl-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; color: #17302c; }
.nrl-vs li::before { position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nrl-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.nrl-vs .is-no { color: #7d8898; }
.nrl-vs .is-no::before { content: "\2715"; background: #e6e9ef; color: #8f9bab; }
.nrl-points { display: flex; flex-direction: column; gap: 20px; }
.nrl-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #2f8f7d; }
.nrl-point p { font-size: 15.5px; color: #4a5f5a; line-height: 1.6; margin: 0; }
.nrl-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 6px; }
.nrl-facts > div { background: #eef6f4; border-radius: 12px; padding: 16px 18px; }
.nrl-num { display: block; font-size: 26px; font-weight: 800; color: #2f8f7d; line-height: 1.1; margin-bottom: 6px; }
.nrl-facts h3 { font-size: 15.5px; font-weight: 800; margin: 0 0 4px; color: #17302c; }
.nrl-facts p { font-size: 14px !important; color: #4a5f5a !important; line-height: 1.5 !important; margin: 0 !important; }
.nrl-steps { list-style: none; counter-reset: st; padding: 0; margin: 6px 0 20px; display: flex; flex-direction: column; gap: 14px; }
.nrl-steps li { counter-increment: st; position: relative; padding-left: 44px; font-size: 15.5px; line-height: 1.55; color: #17302c; }
.nrl-steps li::before { content: counter(st); position: absolute; left: 0; top: -2px; width: 30px; height: 30px; border-radius: 50%; background: #2f8f7d; color: #fff; font-size: 14px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nrl-tags { list-style: none; padding: 0; margin: 6px 0 18px; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px 16px; }
.nrl-tags li { position: relative; padding-left: 24px; font-size: 15.5px; font-weight: 600; color: #17302c; }
.nrl-tags li::before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #2f8f7d; }
.nrl-note { font-size: 13.5px !important; color: #7d8898 !important; font-style: italic; margin: 6px 0 0 !important; }
.nrl-cta { display: inline-block; background: #2f8f7d; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nrl-cta:hover { background: #23705f; color: #fff !important; }

@media (max-width: 980px) {
  .nrl-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nrl-row2--rev .nrl-media { order: -1; }
}
@media (max-width: 560px) {
  .nrl-sec { padding: 42px 0; }
  .nrl-wrap { padding: 0 16px; }
  .nrl-cta { width: 100%; text-align: center; }
  .nrl-media img { max-height: 440px; }
  .nrl-num { font-size: 23px; }
  .nrl-tags { grid-template-columns: 1fr; }
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
.woocommerce-product-details__short-description .nrl-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f8f7d !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
