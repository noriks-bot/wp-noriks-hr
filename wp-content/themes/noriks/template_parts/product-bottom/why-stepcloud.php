<?php
/**
 * product-bottom: NORIKS StepCloud — masazni ulosci s biomehanickom potporom svoda (orto-stepcloud).
 * Original: stepprs.com (Massage Insoles). Slike: img/stepcloud/ (kreative z namizja + ciste fotografije z originalne strani).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno, nikada na sredini;
 * slike su omedene na max-height 430px.
 *   1) Prednosti svakodnevne uporabe (lijevo)
 *   2) Tehnologija (desno)
 *   3) Značajke (lijevo)
 *   4) Kako koristiti (desno)
 *   5) Usporedba (lijevo)
 *   6) Boje i veličine (desno)
 *   7) Paketi (lijevo)
 *   8) NORIKS StepCloud (desno)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nsc      = get_template_directory_uri() . '/img/stepcloud/';
$nsc_path = get_template_directory() . '/img/stepcloud/';
$nsc_img  = function( $file, $alt ) use ( $nsc, $nsc_path ) {
  if ( ! file_exists( $nsc_path . $file ) ) { return ''; }
  return '<img src="' . esc_url( $nsc . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) PREDNOSTI SVAKODNEVNE UPORABE — slika lijevo -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap nsc-row2">
    <div class="nsc-media"><?php echo $nsc_img( 'sc-05-prednosti.jpg', 'Par u šetnji s NORIKS StepCloud ulošcima' ); ?></div>
    <div class="nsc-copy">
      <p class="nsc-kicker">Prednosti svakodnevne uporabe</p>
      <h2 class="nsc-h2">Dan na nogama <em>bez boli u stopalima</em></h2>
      <ul class="nsc-check">
        <li>Odradite <strong>12-satnu smjenu</strong> bez boli u stopalima</li>
        <li>Godine bolova od radnih čizama nestaju u sekundi</li>
        <li><strong>Trenutno olakšanje</strong> kod kroničnih bolova</li>
        <li>Potiče <strong>oporavak mišića</strong> i smanjuje upalu</li>
        <li>Povratak aktivnom životu — šetnje, posao, trening</li>
      </ul>
      <a class="nsc-cta" href="#bundle-selector">Naruči NORIKS StepCloud</a>
    </div>
  </div>
</section>

<!-- 2) TEHNOLOGIJA — slika desno -->
<section class="nsc-sec">
  <div class="nsc-wrap nsc-row2 nsc-row2--rev">
    <div class="nsc-copy">
      <p class="nsc-kicker">Tehnologija</p>
      <h2 class="nsc-h2">Biomehanička tehnologija <em>potpore svodu stopala</em></h2>
      <p>NORIKS koristi biomehaničku potporu svoda kako bi obuhvatio sredinu stopala i prirodno rasporedio pritisak — svaki korak je stabilniji i mekši, uz manje umora na kraju dana.</p>
      <p>Jednostavna nadogradnja u cipeli za cjelodnevnu udobnost i sigurniji korak, bez promjene navika.</p>
    </div>
    <div class="nsc-media"><?php echo $nsc_img( 'sc-06-tehnologija.jpg', 'NORIKS StepCloud uložak — biomehanička potpora' ); ?></div>
  </div>
</section>

<!-- 3) ZNAČAJKE — slika lijevo -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap nsc-row2">
    <div class="nsc-media"><?php echo $nsc_img( 'sc-04-znacajke.jpg', 'Značajke NORIKS StepCloud uloška' ); ?></div>
    <div class="nsc-copy">
      <p class="nsc-kicker">Značajke</p>
      <h2 class="nsc-h2">Svaki detalj <em>ima svrhu</em></h2>
      <div class="nsc-points">
        <div class="nsc-point"><h3>Biomehanička potpora svodu</h3><p>Obuhvaća sredinu stopala i rasterećuje petu i prednji dio.</p></div>
        <div class="nsc-point"><h3>Ciljani masažni čvorići</h3><p>Nježno stimuliraju stopalo pri svakom koraku.</p></div>
        <div class="nsc-point"><h3>Debela petna čašica</h3><p>Ublažava udarac pete i drži stopalo u osi.</p></div>
        <div class="nsc-point"><h3>Prozračni otvori</h3><p>Zrak kruži, pa se stopalo manje znoji.</p></div>
        <div class="nsc-point"><h3>Mekano jastučenje</h3><p>Upija udarce na tvrdim podovima i asfaltu.</p></div>
        <div class="nsc-point"><h3>Može se skratiti</h3><p>Škarama po oznaci, za točan broj cipele.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) KAKO KORISTITI — slika desno -->
<section class="nsc-sec">
  <div class="nsc-wrap nsc-row2 nsc-row2--rev">
    <div class="nsc-copy">
      <p class="nsc-kicker">Kako koristiti</p>
      <h2 class="nsc-h2">U cipeli <em>za manje od minute</em></h2>
      <ol class="nsc-steps">
        <li>Izvadite stari uložak iz cipele i bacite ga</li>
        <li>Umetnite NORIKS u cipelu</li>
        <li>Ako je stopalu pretijesno, skratite uložak</li>
        <li>Uživajte u udobnosti</li>
      </ol>
      <p class="nsc-note">Ulošci se stavljaju umjesto tvorničkog uloška, nikada preko njega.</p>
    </div>
    <div class="nsc-media"><?php echo $nsc_img( 'sc-08-kako-koristiti.jpg', 'Umetanje NORIKS StepCloud uloška u tenisicu' ); ?></div>
  </div>
</section>

<!-- 5) USPOREDBA — slika lijevo -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap nsc-row2">
    <div class="nsc-media"><?php echo $nsc_img( 'sc-07-usporedba.jpg', 'Usporedba NORIKS uložaka s drogerijskim i običnim' ); ?></div>
    <div class="nsc-copy">
      <p class="nsc-kicker">Usporedba</p>
      <h2 class="nsc-h2">Mi <em>prema ostalim ulošcima</em></h2>
      <ul class="nsc-vs">
        <li class="is-yes">Olakšanje do 12 sati dnevno</li>
        <li class="is-yes">Zadržava oblik 2 mjeseca</li>
        <li class="is-yes">Prava potpora svodu stopala</li>
        <li class="is-yes">Pomaže kod kroničnih bolova u stopalima</li>
        <li class="is-yes">Olakšanje od prvog nošenja</li>
        <li class="is-no">Ulošci iz drogerije: samo mekana pjena</li>
        <li class="is-no">Obični ulošci: spljošte se za nekoliko tjedana</li>
      </ul>
    </div>
  </div>
</section>

<!-- 6) BOJE I VELIČINE — slika desno -->
<section class="nsc-sec">
  <div class="nsc-wrap nsc-row2 nsc-row2--rev">
    <div class="nsc-copy">
      <p class="nsc-kicker">Boje i veličine</p>
      <h2 class="nsc-h2">Tri boje <em>i svi brojevi obuće</em></h2>
      <p>Narančasta, crna i siva — jednaka konstrukcija, birajte prema cipeli. Veličine pokrivaju EU 35 do 50, a uložak se po potrebi skrati po oznaci.</p>
      <ul class="nsc-check">
        <li>Za <strong>tenisice, radne cipele i čizme</strong></li>
        <li>Jedan par se skrati za pola broja manje</li>
        <li>Muški i ženski brojevi</li>
      </ul>
    </div>
    <div class="nsc-media"><?php echo $nsc_img( 'sc-02-crni.jpg', 'NORIKS StepCloud ulošci u crnoj boji' ); ?></div>
  </div>
</section>

<!-- 7) PAKETI — slika lijevo -->
<section class="nsc-sec nsc-tint">
  <div class="nsc-wrap nsc-row2">
    <div class="nsc-media"><?php echo $nsc_img( 'sc-09-akcija.jpg', 'NORIKS StepCloud akcijska ponuda' ); ?></div>
    <div class="nsc-copy">
      <p class="nsc-kicker">Paketi</p>
      <h2 class="nsc-h2">Više pari <em>— niža cijena po paru</em></h2>
      <p>Ulošci uz svakodnevno nošenje zadržavaju oblik oko dva mjeseca, pa većina kupaca uzme više pari odjednom — za radne cipele, tenisice i čizme.</p>
      <ul class="nsc-check">
        <li><strong>2 para</strong> — niža cijena po paru</li>
        <li><strong>3 para</strong> — za cijelu obitelj</li>
        <li><strong>5 pari</strong> — najniža cijena po paru</li>
      </ul>
    </div>
  </div>
</section>

<!-- 8) NORIKS STEPCLOUD — slika desno -->
<section class="nsc-sec">
  <div class="nsc-wrap nsc-row2 nsc-row2--rev">
    <div class="nsc-copy">
      <p class="nsc-kicker">NORIKS StepCloud</p>
      <h2 class="nsc-h2">Isprobajte ih <em>30 dana bez rizika</em></h2>
      <p>Umetnite ih u cipele koje nosite svaki dan. Ako nakon tjedan dana ne osjetite razliku, vratit ćemo vam novac.</p>
      <ul class="nsc-check">
        <li><strong>30 dana</strong> za povrat novca</li>
        <li>Brza dostava na kućnu adresu</li>
        <li>Plaćanje pouzećem pri preuzimanju</li>
      </ul>
      <a class="nsc-cta" href="#bundle-selector">Naruči NORIKS StepCloud</a>
    </div>
    <div class="nsc-media"><?php echo $nsc_img( 'sc-01-narancasti.jpg', 'NORIKS StepCloud ulošci u narančastoj boji' ); ?></div>
  </div>
</section>

<style>
.nsc-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #2b1a10; }
.nsc-sec * { box-sizing: border-box; }
.nsc-tint { background: #fff2ea; }
.nsc-wrap { width: 100%; max-width: 1440px; margin: 0 auto; padding: 0 24px; }
.nsc-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #f0581a; margin: 0 0 10px; }
.nsc-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #2b1a10; }
.nsc-h2 em { font-style: italic; font-weight: 800; color: #f0581a; }
.nsc-copy p { font-size: 16px; line-height: 1.7; color: #5d4a3d; margin: 0 0 14px; }
.nsc-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nsc-media { text-align: center; }
.nsc-media img { display: inline-block; width: auto; max-width: 100%; max-height: 430px; object-fit: contain; border-radius: 14px;
  box-shadow: 0 2px 4px rgba(20,25,40,.05), 0 14px 40px rgba(20,25,40,.10); }
.nsc-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nsc-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #2b1a10; }
.nsc-check li::before { content: "\2713"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsc-cross { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nsc-cross li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; color: #2b1a10; }
.nsc-cross li::before { content: "\2715"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; background: #e04a4a; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsc-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.nsc-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; color: #2b1a10; }
.nsc-vs li::before { position: absolute; left: 0; top: 0; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsc-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.nsc-vs .is-no { color: #7d8898; }
.nsc-vs .is-no::before { content: "\2715"; background: #e6e9ef; color: #8f9bab; }
.nsc-points { display: flex; flex-direction: column; gap: 20px; }
.nsc-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #f0581a; }
.nsc-point p { font-size: 15.5px; color: #5d4a3d; line-height: 1.6; margin: 0; }
.nsc-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 6px; }
.nsc-facts > div { background: #fff2ea; border-radius: 12px; padding: 16px 18px; }
.nsc-num { display: block; font-size: 26px; font-weight: 800; color: #f0581a; line-height: 1.1; margin-bottom: 6px; }
.nsc-facts h3 { font-size: 15.5px; font-weight: 800; margin: 0 0 4px; color: #2b1a10; }
.nsc-facts p { font-size: 14px !important; color: #5d4a3d !important; line-height: 1.5 !important; margin: 0 !important; }
.nsc-steps { list-style: none; counter-reset: st; padding: 0; margin: 6px 0 20px; display: flex; flex-direction: column; gap: 14px; }
.nsc-steps li { counter-increment: st; position: relative; padding-left: 44px; font-size: 15.5px; line-height: 1.55; color: #2b1a10; }
.nsc-steps li::before { content: counter(st); position: absolute; left: 0; top: -2px; width: 30px; height: 30px; border-radius: 50%; background: #f0581a; color: #fff; font-size: 14px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsc-tags { list-style: none; padding: 0; margin: 6px 0 18px; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 10px 16px; }
.nsc-tags li { position: relative; padding-left: 24px; font-size: 15.5px; font-weight: 600; color: #2b1a10; }
.nsc-tags li::before { content: ""; position: absolute; left: 0; top: 6px; width: 12px; height: 12px; border-radius: 50%; background: #f0581a; }
.nsc-note { font-size: 13.5px !important; color: #7d8898 !important; font-style: italic; margin: 6px 0 0 !important; }
.nsc-cta { display: inline-block; background: #f0581a; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nsc-cta:hover { background: #c5430c; color: #fff !important; }

@media (max-width: 980px) {
  .nsc-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nsc-row2--rev .nsc-media { order: -1; }
}
@media (max-width: 560px) {
  .nsc-sec { padding: 42px 0; }
  .nsc-wrap { padding: 0 16px; }
  .nsc-cta { width: 100%; text-align: center; }
  .nsc-media img { max-height: 360px; }
  .nsc-num { font-size: 23px; }
  .nsc-tags { grid-template-columns: 1fr; }
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
.woocommerce-product-details__short-description .nsc-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #f0581a !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
