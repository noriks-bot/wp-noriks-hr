<?php
/**
 * product-bottom: NORIKS Seal — rucni vakuumski aparat za hranu (orto-seal).
 *
 * Sekcije prate original (chefpreserve.com/products/cp) jedan-na-jedan:
 *   1) Druge metode pohrane (3 stupca)
 *   2) Zasto ljudi vole NORIKS Seal (3 bloka + statistika 94/91/96 %)
 *   3) Zatvorite brze. Spremite pametnije. Bacajte manje. (6 znacajki)
 *   4) Radi u 4 jednostavna koraka
 *   5) Inovativne vakuumske vrecice (4 svojstva)
 *   6) Bez vakuuma vs. vakuumirano (3-dnevni test)
 * Slika je uvijek lijevo ili desno, nikad na sredini.
 * Recenzije i FAQ renderira zajednicki reviews.php.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$sl      = get_template_directory_uri() . '/img/seal/';
$sl_path = get_template_directory() . '/img/seal/';

$sl_img = function( $file, $alt ) use ( $sl, $sl_path ) {
  if ( file_exists( $sl_path . $file ) ) {
    return '<img src="' . esc_url( $sl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
  }
  return '<div class="nsl-ph" role="img" aria-label="' . esc_attr( $alt ) . '"><span>' . esc_html( $alt ) . '</span></div>';
};
?>

<!-- 1) Druge metode pohrane -->
<section class="nsl-sec nsl-dark">
  <div class="nsl-wrap">
    <div class="nsl-lead">
      <h2 class="nsl-h2">Druge metode pohrane</h2>
      <p>Zašto hrana u običnoj vrećici ili posudi ne izdrži dugo — u sve tri ostaje zrak.</p>
    </div>
    <div class="nsl-three nsl-neg">
      <div class="nsl-card">
        <h3>Obične zip vrećice</h3>
        <ul>
          <li>Zadržavaju zrak</li>
          <li>Zadržavaju vlagu</li>
          <li>Nisu hermetički zatvorene</li>
        </ul>
      </div>
      <div class="nsl-card">
        <h3>Obične posude</h3>
        <ul>
          <li>Zadržavaju zrak</li>
          <li>Zadržavaju vlagu</li>
          <li>Nisu hermetički zatvorene</li>
        </ul>
      </div>
      <div class="nsl-card">
        <h3>Stolni aparati za vakuumiranje</h3>
        <ul>
          <li>Teški i glomazni</li>
          <li>Vrećicu treba rezati</li>
          <li>Kompliciran rad</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- 2) Zasto ljudi vole NORIKS Seal — tri bloka, slika naizmjenicno -->
<section class="nsl-sec nsl-light">
  <div class="nsl-wrap">
    <div class="nsl-lead">
      <h2 class="nsl-h2">Zašto ljudi vole NORIKS Seal</h2>
    </div>

    <div class="nsl-row">
      <div class="nsl-media"><?php echo $sl_img( 'seal-05-losos-flatlay.jpg', 'Vakuumirani losos ostaje svjež' ); ?></div>
      <div class="nsl-copy">
        <p class="nsl-eyebrow">Čuva hranu svježom</p>
        <h3 class="nsl-h3">Vakuumirano u 5 sekundi</h3>
        <p>Prislonite uređaj na ventil, pritisnite gumb i zrak je vani. Kad je vrećica prazna, uređaj se <strong>sam isključi</strong> — ne morate gledati na sat ni držati tipku.</p>
        <div class="nsl-stat"><span>94 %</span><p>korisnika primijetilo je da im hrana ostaje svježa dulje nego kod uobičajenog čuvanja.</p></div>
      </div>
    </div>

    <div class="nsl-row">
      <div class="nsl-copy">
        <p class="nsl-eyebrow">Manje bacanja, manji račun</p>
        <h3 class="nsl-h3">Ono što ste kupili i pojedete</h3>
        <p>Bez zraka nema oksidacije: avokado ne posmeđi preko noći, jagode ne uplijesne za dva dana, a ostatak ručka ne završi u smeću. <strong>Ušteda se vidi na računu za namirnice</strong>, ne samo u hladnjaku.</p>
        <div class="nsl-stat"><span>91 %</span><p>korisnika prijavilo je primjetnu uštedu na namirnicama zbog manje bačene hrane.</p></div>
      </div>
      <div class="nsl-media"><?php echo $sl_img( 'seal-14-avokado-kvadrat.jpg', 'Vakuumirani avokado ne posmeđi' ); ?></div>
    </div>

    <div class="nsl-row">
      <div class="nsl-media"><?php echo $sl_img( 'seal-06-ladica.jpg', 'Uređaj stane u ladicu za pribor' ); ?></div>
      <div class="nsl-copy">
        <p class="nsl-eyebrow">Kompaktno, bežično, prijenosno</p>
        <h3 class="nsl-h3">Stane u ladicu za pribor</h3>
        <p>Radna ploha ostaje prazna. Uređaj je na punjivu bateriju, pa ga možete ponijeti na vikendicu, u kamp ili na ribolov — <strong>i zato ga se zaista koristi</strong>, a ne drži u ormaru.</p>
        <div class="nsl-stat"><span>96 %</span><p>korisnika koristi ga češće jer je lako spremljen i uvijek pri ruci.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 3) Sest znacajki -->
<section class="nsl-sec nsl-dark">
  <div class="nsl-wrap nsl-row">
    <div class="nsl-media"><?php echo $sl_img( 'seal-07-packshot-crni.jpg', 'NORIKS Seal s vrećicama i kabelom' ); ?></div>
    <div class="nsl-copy">
      <h2 class="nsl-h2">Zatvorite brže. Spremite pametnije. Bacajte manje.</h2>
      <ul class="nsl-feat">
        <li><strong>Punjiva baterija</strong><span>Punjenje preko USB-C, bez traženja utičnice.</span></li>
        <li><strong>Prijenosno i snažno</strong><span>Stane u ruku, a zrak izvlači kao veliki aparat.</span></li>
        <li><strong>Pametno automatsko isključivanje</strong><span>Stane samo kad je vrećica prazna.</span></li>
        <li><strong>Kompaktno i lagano</strong><span>20,5 × 4,7 cm i 237 g — stane u svaku ladicu.</span></li>
        <li><strong>Rad jednim gumbom</strong><span>Bez postavki i bez rezanja vrećica.</span></li>
        <li><strong>Dvije godine jamstva</strong><span>Uz 30 dana za povrat ili zamjenu.</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- 4) Cetiri koraka -->
<section class="nsl-sec nsl-light">
  <div class="nsl-wrap nsl-row">
    <div class="nsl-copy">
      <h2 class="nsl-h2">Radi u 4 jednostavna koraka</h2>
      <ol class="nsl-steps">
        <li><span>1</span><div><strong>Napunite vrećicu.</strong> Meso, riba, sir, povrće, orasi ili ostatak ručka.</div></li>
        <li><span>2</span><div><strong>Zatvorite zatvarač.</strong> Klipsa iz kompleta pomaže da zatvarač sjedne do kraja.</div></li>
        <li><span>3</span><div><strong>Pritisnite gumb.</strong> Uređaj prislonite na ventil na vrećici.</div></li>
        <li><span>4</span><div><strong>Gotovo.</strong> Uređaj se sam isključi kad je zrak vani.</div></li>
      </ol>
    </div>
    <div class="nsl-media"><?php echo $sl_img( 'seal-03-avokado-vrecice.jpg', 'Vakuumiranje vrećice s avokadom' ); ?></div>
  </div>
</section>

<!-- 5) Inovativne vakuumske vrecice -->
<section class="nsl-sec nsl-dark">
  <div class="nsl-wrap nsl-row">
    <div class="nsl-media"><?php echo $sl_img( 'seal-16-orasasti-plodovi.jpg', 'NORIKS vakuumska vrećica s orašastim plodovima' ); ?></div>
    <div class="nsl-copy">
      <h2 class="nsl-h2">Inovativne vakuumske vrećice</h2>
      <ul class="nsl-feat nsl-feat2">
        <li><strong>Za zamrzivač, mikrovalnu i perilicu posuđa</strong><span>Sigurne za spremanje, podgrijavanje i pranje.</span></li>
        <li><strong>Čuvaju okus i hranjive tvari</strong><span>Bez zraka se okus i sastojci dulje zadrže.</span></li>
        <li><strong>Bez mirisa i bez curenja</strong><span>Zatvarač brtvi, miris ostaje unutra.</span></li>
        <li><strong>Izdržljive i za višekratnu upotrebu</strong><span>Operete ih i koristite iznova.</span></li>
      </ul>
      <p class="nsl-note">Polovica vrećica u kompletu je manja (1 l), polovica veća (2 l).</p>
    </div>
  </div>
</section>

<!-- 6) Bez vakuuma vs. vakuumirano -->
<section class="nsl-sec nsl-light">
  <div class="nsl-wrap nsl-row">
    <div class="nsl-copy">
      <h2 class="nsl-h2">Bez vakuuma vs. vakuumirano</h2>
      <div class="nsl-vs">
        <div class="nsl-vs-col nsl-vs-bad">
          <h3>Bez vakuuma</h3>
          <ul>
            <li>Avokado posmeđi</li>
            <li>Jagode omekšaju i uplijesne</li>
            <li>Meso posivi po rubovima</li>
            <li>Kruh i orasi izgube hrskavost</li>
          </ul>
        </div>
        <div class="nsl-vs-col nsl-vs-good">
          <h3>Vakuumirano</h3>
          <ul>
            <li>Boja ostaje ista</li>
            <li>Voće ostaje čvrsto</li>
            <li>Meso zadrži izgled i miris</li>
            <li>Hrskavost ostaje</li>
          </ul>
        </div>
      </div>
      <p class="nsl-note">* Prema trodnevnom testu čuvanja u stvarnim uvjetima.</p>
    </div>
    <div class="nsl-media"><?php echo $sl_img( 'seal-04-smocnica.jpg', 'Vakuumirane namirnice u smočnici' ); ?></div>
  </div>
</section>

<style>
.nsl-sec { padding: 46px 0; }
.nsl-dark  { background: #16211f; color: #eef2f0; }
.nsl-light { background: #f6f3ef; color: #22302c; }
.nsl-dark h2, .nsl-dark h3, .nsl-dark p, .nsl-dark li, .nsl-dark span, .nsl-dark strong { color: #eef2f0; }
.nsl-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; }
.nsl-lead { max-width: 820px; margin: 0 auto 26px; text-align: center; }
.nsl-h2 { font-size: 27px; line-height: 1.22; margin: 0 0 12px; font-weight: 700; }
.nsl-h3 { font-size: 21px; line-height: 1.25; margin: 0 0 10px; font-weight: 700; }
.nsl-sec p { font-size: 15.5px; line-height: 1.62; margin: 0 0 12px; }
.nsl-eyebrow { text-transform: uppercase; letter-spacing: .14em; font-size: 12px; font-weight: 700; color: #c0452f; margin: 0 0 6px; }
.nsl-dark .nsl-eyebrow { color: #f08a72; }
.nsl-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; margin-bottom: 34px; }
.nsl-row:last-child { margin-bottom: 0; }
.nsl-media img { width: 100%; height: auto; max-height: 430px; object-fit: contain; display: block; border-radius: 14px; }
.nsl-ph { display: flex; align-items: center; justify-content: center; min-height: 200px; background: #e3ded6; border-radius: 12px; color: #8b8175; font-size: 14px; text-align: center; padding: 12px; }
.nsl-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
.nsl-card { background: rgba(255,255,255,.06); border: 1px solid rgba(255,255,255,.14); border-radius: 14px; padding: 20px 22px; }
.nsl-card h3 { font-size: 18px; margin: 0 0 12px; font-weight: 700; }
.nsl-card ul { list-style: none; padding: 0; margin: 0; }
.nsl-card li { position: relative; padding-left: 26px; margin-bottom: 8px; font-size: 15px; line-height: 1.5; }
.nsl-card li:before { content: "✕"; position: absolute; left: 0; top: 0; color: #f08a72; font-weight: 700; }
.nsl-stat { display: flex; align-items: center; gap: 14px; margin-top: 14px; }
.nsl-stat span { flex: 0 0 auto; font-size: 30px; font-weight: 800; color: #c0452f; line-height: 1; }
.nsl-dark .nsl-stat span { color: #f08a72; }
.nsl-stat p { margin: 0; font-size: 14.5px; line-height: 1.5; }
.nsl-feat { list-style: none; padding: 0; margin: 14px 0 0; display: grid; grid-template-columns: 1fr 1fr; gap: 14px 22px; }
.nsl-feat2 { grid-template-columns: 1fr; }
.nsl-feat li { padding-left: 24px; position: relative; font-size: 15px; line-height: 1.5; }
.nsl-feat li:before { content: ""; position: absolute; left: 0; top: 7px; width: 12px; height: 12px; border-radius: 50%; background: #c0452f; }
.nsl-dark .nsl-feat li:before { background: #f08a72; }
.nsl-feat strong { display: block; }
.nsl-feat span { display: block; font-size: 14px; opacity: .82; }
.nsl-steps { list-style: none; padding: 0; margin: 14px 0 0; }
.nsl-steps li { display: flex; gap: 12px; margin-bottom: 12px; font-size: 15px; line-height: 1.55; }
.nsl-steps span { flex: 0 0 auto; width: 28px; height: 28px; border-radius: 50%; background: #c0452f; color: #fff;
                  font-weight: 800; display: flex; align-items: center; justify-content: center; font-size: 14px; }
.nsl-vs { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 14px; }
.nsl-vs-col { border-radius: 14px; padding: 18px 20px; background: #fff; border: 1px solid #e3ded6; }
.nsl-vs-col h3 { font-size: 17px; margin: 0 0 10px; }
.nsl-vs-col ul { list-style: none; padding: 0; margin: 0; }
.nsl-vs-col li { position: relative; padding-left: 24px; margin-bottom: 7px; font-size: 14.5px; line-height: 1.5; }
.nsl-vs-bad li:before  { content: "✕"; position: absolute; left: 0; color: #b0554a; font-weight: 700; }
.nsl-vs-good li:before { content: "✓"; position: absolute; left: 0; color: #2f7d5b; font-weight: 700; }
.nsl-note { font-size: 14px; opacity: .8; margin: 10px 0 0; }
@media (max-width: 820px) {
  .nsl-sec { padding: 22px 0; }
  .nsl-wrap { padding-left: 14px; padding-right: 14px; }
  .nsl-h2 { font-size: 22px; }
  .nsl-row { grid-template-columns: 1fr; gap: 18px; margin-bottom: 26px; }
  .nsl-row .nsl-media { order: -1; }
  .nsl-three { grid-template-columns: 1fr; }
  .nsl-feat { grid-template-columns: 1fr; }
  .nsl-vs { grid-template-columns: 1fr; }
}

/* kratki opis proizvoda: kvacice umjesto tockica */
.woocommerce-product-details__short-description ul,
.woocommerce div.product .woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 8px 0 14px !important; padding-left: 0 !important; }
.woocommerce-product-details__short-description ul li,
.woocommerce div.product .woocommerce-product-details__short-description ul li {
  list-style: none !important; list-style-type: none !important; padding-left: 24px !important;
  text-indent: -24px !important; margin-left: 0 !important; line-height: 1.55 !important; margin-bottom: 8px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nsl-tick {
  display: inline-block !important; width: 24px !important; text-indent: 0 !important;
  color: #c0452f !important; font-weight: 800 !important; }
</style>
