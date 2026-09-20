<?php
/**
 * product-bottom: NORIKS Relief — bambusove kompresijske carape bez prstiju (orto-relief).
 * Original: bamburelief.fi (BambuRelief Tukisukat). Slike: img/relief/ (kreative z namizja + ciste fotografije z originalne strani).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno, nikada na sredini;
 * slike su omedene na max-height 430px.
 *   1) Zvuči poznato? (lijevo)
 *   2) Osjetno olakšanje (desno)
 *   3) Otvoreni prsti i peta (lijevo)
 *   4) Nova energija (desno)
 *   5) Mirnija noć (lijevo)
 *   6) Bambus i elastan (desno)
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
    <div class="nrl-media"><?php echo $nrl_img( 'rl-01-naslov.jpg', 'NORIKS Relief kompresijska čarapa bez prstiju' ); ?></div>
    <div class="nrl-copy">
      <p class="nrl-kicker">Zvuči poznato?</p>
      <h2 class="nrl-h2">Stopala koja bole <em>od prvog koraka ujutro</em></h2>
      <p>Ujutro spustite noge s kreveta i prvi korak vas presiječe. Navečer su gležnjevi natečeni, a stopala vruća i umorna od stajanja.</p>
      <ul class="nrl-cross">
        <li>Osjećaj <strong>pečenja</strong> u tabanima</li>
        <li><strong>Trnci</strong> i utrnulost prstiju</li>
        <li><strong>Oticanje</strong> gležnjeva na kraju dana</li>
        <li><strong>Ukočenost</strong> pri prvim jutarnjim koracima</li>
      </ul>
      <p>NORIKS Relief čarape rade na jednostavnom principu: ravnomjeran, blag pritisak koji obuhvaća svod, petu i gležanj.</p>
      <a class="nrl-cta" href="#bundle-selector">Naruči NORIKS Relief</a>
    </div>
  </div>
</section>

<!-- 2) OSJETNO OLAKŠANJE — slika desno -->
<section class="nrl-sec">
  <div class="nrl-wrap nrl-row2 nrl-row2--rev">
    <div class="nrl-copy">
      <p class="nrl-kicker">Osjetno olakšanje</p>
      <h2 class="nrl-h2">Pritisak koji <em>obuhvaća cijelo stopalo</em></h2>
      <p>Pletivo je gušće upravo ondje gdje stopalo treba potporu — oko svoda i pete. Umjesto da stišće u jednoj liniji kao guma obične čarape, pritisak je raspoređen po cijelom stopalu.</p>
      <ul class="nrl-check">
        <li><strong>Svod</strong> dobiva potporu, pa su prvi koraci ujutro blaži</li>
        <li><strong>Peta</strong> je obuhvaćena, bez šava koji pritišće</li>
        <li><strong>Gležanj</strong> ostaje stabilan tijekom dana</li>
      </ul>
      <p>Mnogi olakšanje osjete već prvog dana nošenja, a puni učinak dolazi kad ih nosite redovito.</p>
    </div>
    <div class="nrl-media"><?php echo $nrl_img( 'rl-04-par.jpg', 'Par NORIKS Relief čarapa na stopalima' ); ?></div>
  </div>
</section>

<!-- 3) OTVORENI PRSTI I PETA — slika lijevo -->
<section class="nrl-sec nrl-tint">
  <div class="nrl-wrap nrl-row2">
    <div class="nrl-media"><?php echo $nrl_img( 'rl-03-packshot.jpg', 'NORIKS Relief čarape straga — otvorena peta' ); ?></div>
    <div class="nrl-copy">
      <p class="nrl-kicker">Otvoreni prsti i peta</p>
      <h2 class="nrl-h2">Dizajn koji <em>ne smeta u cipeli</em></h2>
      <p>Prsti i peta su otvoreni. To nije samo izgled: nema šava koji žulja preko noktiju i nema naborane tkanine koja klizi unutar cipele.</p>
      <div class="nrl-facts">
        <div><span class="nrl-num">0</span><h3>Šavova na prstima</h3><p>Ništa ne pritišće osjetljiva mjesta i nokte.</p></div>
        <div><span class="nrl-num">2 mm</span><h3>Tanko pletivo</h3><p>Stane u tenisice, cipele i radne čizme.</p></div>
        <div><span class="nrl-num">24 h</span><h3>Za dan i noć</h3><p>Nosite ih na poslu, kod kuće i tijekom spavanja.</p></div>
        <div><span class="nrl-num">4</span><h3>Veličine</h3><p>Od EU 36 do EU 46, prema broju obuće.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) NOVA ENERGIJA — slika desno -->
<section class="nrl-sec">
  <div class="nrl-wrap nrl-row2 nrl-row2--rev">
    <div class="nrl-copy">
      <p class="nrl-kicker">Nova energija</p>
      <h2 class="nrl-h2">Za noge koje <em>izdrže cijeli dan</em></h2>
      <p>Blaga kompresija potiče protok krvi u stopalima i potkoljenicama. Zato su noge na kraju dugog dana manje teške, a umor se sporije nakuplja.</p>
      <ul class="nrl-check">
        <li>Za <strong>stajanje na poslu</strong> — trgovina, škola, bolnica, proizvodnja</li>
        <li>Za <strong>duge šetnje</strong> i putovanja</li>
        <li>Za <strong>oporavak nakon trčanja</strong> i treninga</li>
      </ul>
    </div>
    <div class="nrl-media"><?php echo $nrl_img( 'rl-07-hodanje.jpg', 'Žena hoda u NORIKS Relief čarapama' ); ?></div>
  </div>
</section>

<!-- 5) MIRNIJA NOĆ — slika lijevo -->
<section class="nrl-sec nrl-tint">
  <div class="nrl-wrap nrl-row2">
    <div class="nrl-media"><?php echo $nrl_img( 'rl-06-krevet.jpg', 'NORIKS Relief čarape u krevetu' ); ?></div>
    <div class="nrl-copy">
      <p class="nrl-kicker">Mirnija noć</p>
      <h2 class="nrl-h2">Manje oticanja <em>dok spavate</em></h2>
      <p>Tekućina se preko noći zadržava u stopalima, pa je jutro najteži dio dana. Uz blagu kompresiju tijekom noći mnogi ujutro javljaju manje oticanja i manje ukočenosti.</p>
      <p>Pletivo je mekano i prozračno, bez gume koja ureže u kožu, pa ih možete nositi i u krevetu.</p>
      <p class="nrl-note">Ako osjetite trnce ili prejak pritisak, skinite čarape i sljedeći put uzmite veću veličinu.</p>
    </div>
  </div>
</section>

<!-- 6) BAMBUS I ELASTAN — slika desno -->
<section class="nrl-sec">
  <div class="nrl-wrap nrl-row2 nrl-row2--rev">
    <div class="nrl-copy">
      <p class="nrl-kicker">Bambus i elastan</p>
      <h2 class="nrl-h2">Mekano pletivo <em>koje diše</em></h2>
      <p>Bambusova viskoza upija vlagu i ostaje prozračna, pa se stopala ne znoje kao u sintetici. Elastan drži kompresiju na mjestu, i nakon pranja.</p>
      <ul class="nrl-vs">
        <li class="is-yes">Bambusova viskoza — mekana i prozračna</li>
        <li class="is-yes">Bez lateksa</li>
        <li class="is-yes">Pranje na 30 °C, bez omekšivača i sušilice</li>
        <li class="is-no">Gruba sintetika u kojoj se stopalo znoji</li>
        <li class="is-no">Uska guma koja ureže iznad gležnja</li>
      </ul>
    </div>
    <div class="nrl-media"><?php echo $nrl_img( 'rl-05-straga.jpg', 'Detalj pletiva NORIKS Relief čarapa' ); ?></div>
  </div>
</section>

<!-- 7) VELIČINE — slika lijevo -->
<section class="nrl-sec nrl-tint">
  <div class="nrl-wrap nrl-row2">
    <div class="nrl-media"><?php echo $nrl_img( 'rl-09-stol.jpg', 'NORIKS Relief čarape na nogama za stolom' ); ?></div>
    <div class="nrl-copy">
      <p class="nrl-kicker">Veličine</p>
      <h2 class="nrl-h2">Birajte prema <em>broju obuće</em></h2>
      <p>Četiri veličine pokrivaju od EU 36 do EU 46. Ako ste između dvije veličine, uzmite veću — čarapa treba prianjati, a ne stezati.</p>
      <ul class="nrl-tags">
        <li>S — EU 36 do 38</li>
        <li>M — EU 38 do 40</li>
        <li>L — EU 40 do 43</li>
        <li>XL — EU 44 do 46</li>
      </ul>
      <p class="nrl-note">Točne mjere pronađite u tablici veličina iznad izbornika.</p>
    </div>
  </div>
</section>

<!-- 8) NORIKS RELIEF — slika desno -->
<section class="nrl-sec">
  <div class="nrl-wrap nrl-row2 nrl-row2--rev">
    <div class="nrl-copy">
      <p class="nrl-kicker">NORIKS Relief</p>
      <h2 class="nrl-h2">Isprobajte ih <em>30 dana bez rizika</em></h2>
      <p>Nosite ih tjedan dana na poslu, u šetnji i preko noći. Ako ne osjetite razliku, javite nam se i vratit ćemo vam novac.</p>
      <ul class="nrl-check">
        <li><strong>30 dana</strong> za povrat novca</li>
        <li>Brza dostava na kućnu adresu</li>
        <li>Plaćanje pouzećem pri preuzimanju</li>
      </ul>
      <a class="nrl-cta" href="#bundle-selector">Naruči NORIKS Relief</a>
    </div>
    <div class="nrl-media"><?php echo $nrl_img( 'rl-08-kauc.jpg', 'Odmor na kauču u NORIKS Relief čarapama' ); ?></div>
  </div>
</section>

<style>
.nrl-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #17302c; }
.nrl-sec * { box-sizing: border-box; }
.nrl-tint { background: #eef6f4; }
.nrl-wrap { width: 100%; max-width: 1440px; margin: 0 auto; padding: 0 24px; }
.nrl-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #2f8f7d; margin: 0 0 10px; }
.nrl-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #17302c; }
.nrl-h2 em { font-style: italic; font-weight: 800; color: #2f8f7d; }
.nrl-copy p { font-size: 16px; line-height: 1.7; color: #4a5f5a; margin: 0 0 14px; }
.nrl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nrl-media { text-align: center; }
.nrl-media img { display: inline-block; width: auto; max-width: 100%; max-height: 430px; object-fit: contain; border-radius: 14px;
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
  .nrl-media img { max-height: 360px; }
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
