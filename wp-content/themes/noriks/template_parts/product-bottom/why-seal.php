<?php
/**
 * product-bottom: NORIKS Seal — rucni vakuumski aparat za hranu (orto-seal).
 * Postavitev sekcij je 1:1 po originalu (chefpreserve.com/products/cp):
 *   0) roza traka z jamstvi
 *   1) Druge metode pohrane — 3 stupca (slika + naslov + 3 crvena X)
 *   2) Zasto ljudi vole — izmenicno velika kvadratna slika / tekst (zvjezdica,
 *      tockasta crta, veliki crveni postotak)
 *   3) Zatvorite brze... — radijalno: 6 oznaka oko proizvoda na crvenom krugu
 *   4) Radi u 4 koraka — crveni brojevi na iscrtkanoj liniji + medij ispod
 *   5) Inovativne vrecice — radijalno: 4 oznake oko vrecice
 *   6) Bez vakuuma vs. vakuumirano — dva stupca, 3-dnevni test
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$sl      = get_template_directory_uri() . '/img/seal/';
$sl_path = get_template_directory() . '/img/seal/';

$sl_img = function( $file, $alt, $class = '' ) use ( $sl, $sl_path ) {
  if ( file_exists( $sl_path . $file ) ) {
    return '<img class="' . esc_attr( $class ) . '" src="' . esc_url( $sl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
  }
  return '<div class="nsl-ph" role="img" aria-label="' . esc_attr( $alt ) . '"><span>' . esc_html( $alt ) . '</span></div>';
};

$sl_vid = function( $file, $poster, $alt ) use ( $sl, $sl_path ) {
  if ( ! file_exists( $sl_path . $file ) ) { return ''; }
  return '<video class="nsl-video" autoplay muted loop playsinline preload="metadata" '
       . 'poster="' . esc_url( $sl . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $sl . $file ) . '" type="video/mp4"></video>';
};

// Ikonice za radijalne sekcije (crveni obris u svijetlo ruzicastom krugu).
$sl_ico = function( $d ) {
  return '<span class="nsl-ico"><svg viewBox="0 0 24 24" fill="none" stroke="#c8102e" stroke-width="1.7" '
       . 'stroke-linecap="round" stroke-linejoin="round">' . $d . '</svg></span>';
};
$ico_batt  = '<rect x="3" y="8" width="14" height="9" rx="2"/><path d="M20 11v3"/><path d="M10 10l-2 3h3l-2 3"/>';
$ico_plug  = '<path d="M9 3v5M15 3v5"/><path d="M6 8h12v3a6 6 0 0 1-12 0z"/><path d="M12 17v4"/>';
$ico_off   = '<rect x="2" y="8" width="20" height="9" rx="4.5"/><circle cx="7.5" cy="12.5" r="2.6"/>';
$ico_box   = '<rect x="3" y="6" width="18" height="13" rx="2"/><path d="M3 10h18"/><circle cx="12" cy="14.5" r="2"/>';
$ico_power = '<path d="M12 4v8"/><path d="M6.5 7.5a7.5 7.5 0 1 0 11 0"/>';
$ico_shield= '<path d="M12 3l7 3v5c0 4.3-3 8-7 10-4-2-7-5.7-7-10V6z"/><path d="M9 12l2 2 4-4"/>';
$ico_snow  = '<path d="M12 3v18M4 7.5l16 9M20 7.5l-16 9"/>';
$ico_drop  = '<path d="M12 3s6 6.4 6 10a6 6 0 0 1-12 0c0-3.6 6-10 6-10z"/><path d="M5 19L19 5"/>';
$ico_leaf  = '<path d="M20 4c0 8-5 12-11 12H5c0-8 5-12 11-12z"/><path d="M5 20c2-5 5-8 9-10"/>';
$ico_recyc = '<path d="M7 7l2-3 2 3"/><path d="M9 4v9H5l2.5 4"/><path d="M15 20h4l-2-3"/><path d="M19 17l-4-7 3-2"/>';
?>

<!-- 0) traka s jamstvima -->
<div class="nsl-marquee"><div class="nsl-marquee-track">
  <?php for ( $i = 0; $i < 4; $i++ ) : ?>
    <span>30 DANA ZA POVRAT</span><i>✦</i><span>2 GODINE JAMSTVA</span><i>✦</i><span>BESPLATNA DOSTAVA IZNAD 70 €</span><i>✦</i>
  <?php endfor; ?>
</div></div>

<!-- 1) Druge metode pohrane -->
<section class="nsl-sec nsl-white">
  <div class="nsl-wrap">
    <h2 class="nsl-h2 nsl-center">Druge metode pohrane</h2>
    <div class="nsl-three">
      <div class="nsl-negcard">
        <?php echo $sl_img( 'seal-alt-1-zip.jpg', 'Obična zip vrećica zadržava zrak' ); ?>
        <h3>Obične zip vrećice</h3>
        <ul><li>Zadržavaju zrak</li><li>Zadržavaju vlagu</li><li>Nisu hermetički zatvorene</li></ul>
      </div>
      <div class="nsl-negcard">
        <?php echo $sl_img( 'seal-alt-2-posuda.jpg', 'Obična posuda zadržava zrak' ); ?>
        <h3>Obične posude</h3>
        <ul><li>Zadržavaju zrak</li><li>Zadržavaju vlagu</li><li>Nisu hermetički zatvorene</li></ul>
      </div>
      <div class="nsl-negcard">
        <?php echo $sl_img( 'seal-alt-3-stolni.jpg', 'Stolni aparat za vakuumiranje' ); ?>
        <h3>Stolni aparati za vakuumiranje</h3>
        <ul><li>Teški i glomazni</li><li>Vrećicu treba rezati</li><li>Kompliciran rad</li></ul>
      </div>
    </div>
  </div>
</section>

<!-- 2) Zasto ljudi vole NORIKS Seal -->
<section class="nsl-sec nsl-grey">
  <div class="nsl-wrap">
    <h2 class="nsl-h2 nsl-center">Zašto ljudi <em>vole</em> NORIKS Seal</h2>

    <div class="nsl-row">
      <div class="nsl-media nsl-sq"><?php echo $sl_vid( 'seal-vid-1.mp4', 'seal-vid-1.jpg', 'Vakuumiranje avokada u nekoliko sekundi' ); ?></div>
      <div class="nsl-copy">
        <span class="nsl-spark">✦</span>
        <h3 class="nsl-h3">Čuva hranu svježom</h3>
        <p>S NORIKS Sealom hranu <strong>vakuumirate u samo 5 sekundi</strong> i ostaje svježa dulje. Pritisnete gumb i uređaj se <strong>sam isključi kad je gotovo</strong>.</p>
        <div class="nsl-dot"></div>
        <div class="nsl-stat"><span>94 %</span><p>korisnika primijetilo je da im hrana ostaje svježa dulje nego kod uobičajenog čuvanja.</p></div>
      </div>
    </div>

    <div class="nsl-row nsl-rev">
      <div class="nsl-copy">
        <span class="nsl-spark">✦</span>
        <h3 class="nsl-h3">Štedi novac jer se manje baca</h3>
        <p><strong>NORIKS Seal drži hranu svježom</strong>, pa manje bacate i manje trošite na pokvarene namirnice. Pomaže protiv posmeđivanja avokada, plijesni na jagodama i kvarenja općenito.</p>
        <div class="nsl-dot"></div>
        <div class="nsl-stat"><span>91 %</span><p>korisnika prijavilo je primjetnu uštedu na namirnicama zbog manje bačene hrane.</p></div>
      </div>
      <div class="nsl-media nsl-sq"><?php echo $sl_img( 'seal-14-avokado-kvadrat.jpg', 'Vakuumirani avokado ne posmeđi' ); ?></div>
    </div>

    <div class="nsl-row">
      <div class="nsl-media nsl-sq"><?php echo $sl_img( 'seal-06-ladica.jpg', 'Uređaj stane u ladicu za pribor' ); ?></div>
      <div class="nsl-copy">
        <span class="nsl-spark">✦</span>
        <h3 class="nsl-h3">Kompaktan, bežičan i prijenosan</h3>
        <p>Dovoljno malen da stane u bilo koju ladicu — idealno ako vam je radna ploha dragocjena. Uvijek je pri ruci pa ga <strong>zaista i koristite</strong>, a bežičan je, tako da ide s vama kamo god krenete.</p>
        <div class="nsl-dot"></div>
        <div class="nsl-stat"><span>96 %</span><p>korisnika koristi ga češće jer je lako spremljen i uvijek pri ruci.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 3) Sest znacajki oko proizvoda -->
<section class="nsl-sec nsl-white">
  <div class="nsl-wrap">
    <h2 class="nsl-h2 nsl-center">Zatvorite brže. Spremite pametnije. Bacajte manje.</h2>
    <div class="nsl-radial">
      <div class="nsl-rl">
        <div class="nsl-rlab"><div class="nsl-rtxt"><strong>Punjiva baterija</strong></div><?php echo $sl_ico( $ico_batt ); ?></div>
        <div class="nsl-rlab"><div class="nsl-rtxt"><strong>Prijenosno i snažno</strong></div><?php echo $sl_ico( $ico_plug ); ?></div>
        <div class="nsl-rlab"><div class="nsl-rtxt"><strong>Pametno automatsko isključivanje</strong></div><?php echo $sl_ico( $ico_off ); ?></div>
      </div>
      <div class="nsl-rc"><?php echo $sl_img( 'seal-13-banner-uspravni.jpg', 'NORIKS Seal' ); ?></div>
      <div class="nsl-rr">
        <div class="nsl-rlab"><?php echo $sl_ico( $ico_box ); ?><div class="nsl-rtxt"><strong>Kompaktno i lagano</strong></div></div>
        <div class="nsl-rlab"><?php echo $sl_ico( $ico_power ); ?><div class="nsl-rtxt"><strong>Rad jednim gumbom</strong></div></div>
        <div class="nsl-rlab"><?php echo $sl_ico( $ico_shield ); ?><div class="nsl-rtxt"><strong>Dvije godine jamstva</strong></div></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) Cetiri koraka -->
<section class="nsl-sec nsl-grey">
  <div class="nsl-wrap">
    <h2 class="nsl-h2 nsl-center">Radi u 4 jednostavna koraka</h2>
    <div class="nsl-steps4">
      <div class="nsl-step">
        <div class="nsl-num">1</div>
        <p class="nsl-steplab">Napunite vrećicu hranom</p>
        <?php echo $sl_img( 'seal-03-avokado-vrecice.jpg', 'Punjenje vrećice hranom' ); ?>
      </div>
      <div class="nsl-step">
        <div class="nsl-num">2</div>
        <p class="nsl-steplab">Zatvorite zatvarač</p>
        <?php echo $sl_img( 'seal-09-prsut.jpg', 'Zatvaranje vrećice' ); ?>
      </div>
      <div class="nsl-step">
        <div class="nsl-num">3</div>
        <p class="nsl-steplab">Pritisnite gumb za početak</p>
        <?php echo $sl_vid( 'seal-vid-1.mp4', 'seal-vid-1.jpg', 'Pritisak na gumb' ); ?>
      </div>
      <div class="nsl-step">
        <div class="nsl-num">4</div>
        <p class="nsl-steplab">Sam se isključi kad je gotovo</p>
        <?php echo $sl_img( 'seal-05-losos-flatlay.jpg', 'Vakuumirana hrana' ); ?>
      </div>
    </div>
  </div>
</section>

<!-- 5) Inovativne vakuumske vrecice -->
<section class="nsl-sec nsl-white">
  <div class="nsl-wrap">
    <h2 class="nsl-h2 nsl-center">Inovativne vakuumske vrećice</h2>
    <div class="nsl-radial">
      <div class="nsl-rl">
        <div class="nsl-rlab"><div class="nsl-rtxt"><strong>Za zamrzivač, mikrovalnu i perilicu</strong><span>Sigurne za spremanje, podgrijavanje i pranje.</span></div><?php echo $sl_ico( $ico_snow ); ?></div>
        <div class="nsl-rlab"><div class="nsl-rtxt"><strong>Čuvaju okus i hranjive tvari</strong><span>Bez zraka se okus i sastojci dulje zadrže.</span></div><?php echo $sl_ico( $ico_leaf ); ?></div>
      </div>
      <div class="nsl-rc nsl-rc-circle"><?php echo $sl_img( 'seal-16-orasasti-plodovi.jpg', 'NORIKS vakuumska vrećica' ); ?></div>
      <div class="nsl-rr">
        <div class="nsl-rlab"><?php echo $sl_ico( $ico_drop ); ?><div class="nsl-rtxt"><strong>Bez mirisa i bez curenja</strong><span>Zatvarač brtvi, miris ostaje unutra.</span></div></div>
        <div class="nsl-rlab"><?php echo $sl_ico( $ico_recyc ); ?><div class="nsl-rtxt"><strong>Izdržljive i za višekratnu upotrebu</strong><span>Operete ih i koristite iznova.</span></div></div>
      </div>
    </div>
    <p class="nsl-note nsl-center">Polovica vrećica u kompletu je manja (1 l), polovica veća (2 l).</p>
  </div>
</section>

<!-- 6) Bez vakuuma vs. vakuumirano -->
<section class="nsl-sec nsl-grey">
  <div class="nsl-wrap">
    <h2 class="nsl-h2 nsl-center">Bez vakuuma vs. vakuumirano</h2>
    <div class="nsl-vs2">
      <figure>
        <?php echo $sl_vid( 'seal-vid-2.mp4', 'seal-vid-2.jpg', 'Avokado u običnoj vrećici nakon tri dana' ); ?>
        <figcaption><span class="nsl-tag nsl-tag-bad">Bez vakuuma</span></figcaption>
      </figure>
      <figure>
        <?php echo $sl_img( 'seal-14-avokado-kvadrat.jpg', 'Vakuumirani avokado nakon tri dana' ); ?>
        <figcaption><span class="nsl-tag nsl-tag-good">Vakuumirano</span></figcaption>
      </figure>
    </div>
    <p class="nsl-note nsl-center">* Prema trodnevnom testu čuvanja u stvarnim uvjetima.</p>
  </div>
</section>

<div class="nsl-marquee"><div class="nsl-marquee-track">
  <?php for ( $i = 0; $i < 4; $i++ ) : ?>
    <span>30 DANA ZA POVRAT</span><i>✦</i><span>2 GODINE JAMSTVA</span><i>✦</i><span>BESPLATNA DOSTAVA IZNAD 70 €</span><i>✦</i>
  <?php endfor; ?>
</div></div>

<style>
.nsl-sec { padding: 54px 0; }
.nsl-white { background: #fff;     color: #151515; }
.nsl-grey  { background: #f6f6f7;  color: #151515; }
.nsl-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; }
.nsl-center { text-align: center; }
.nsl-h2 { font-size: 34px; line-height: 1.18; margin: 0 0 34px; font-weight: 800; letter-spacing: -.01em; }
.nsl-h2 em { font-style: normal; color: #c8102e; }
.nsl-h3 { font-size: 25px; line-height: 1.2; margin: 0 0 12px; font-weight: 800; }
.nsl-sec p { font-size: 16px; line-height: 1.6; margin: 0 0 12px; }
.nsl-note { font-size: 13.5px; color: #6b6b6b; margin: 16px 0 0; }

/* traka */
.nsl-marquee { background: #fdeaee; overflow: hidden; padding: 13px 0; }
.nsl-marquee-track { display: flex; align-items: center; gap: 26px; white-space: nowrap;
  animation: nslmq 34s linear infinite; width: max-content; }
.nsl-marquee span { color: #c8102e; font-weight: 800; font-size: 14px; letter-spacing: .06em; }
.nsl-marquee i { color: #c8102e; font-style: normal; font-size: 13px; }
@keyframes nslmq { from { transform: translateX(0); } to { transform: translateX(-50%); } }

/* 1) tri negativne kartice */
.nsl-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
.nsl-negcard { text-align: center; }
.nsl-negcard img { width: 100%; max-width: 330px; height: auto; display: block; margin: 0 auto 14px; }
.nsl-negcard h3 { font-size: 22px; font-weight: 800; margin: 0 0 14px; }
.nsl-negcard ul { list-style: none; padding: 0; margin: 0; display: inline-block; text-align: left; }
.nsl-negcard li { position: relative; padding-left: 30px; margin-bottom: 9px; font-size: 16px; }
.nsl-negcard li:before { content: "✕"; position: absolute; left: 4px; top: 0; color: #c8102e; font-weight: 800; }

/* 2) izmenicne vrstice */
.nsl-row { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; margin-bottom: 46px; }
.nsl-row:last-child { margin-bottom: 0; }
.nsl-sq { aspect-ratio: 1 / 1; border-radius: 16px; overflow: hidden; background: #ececed; }
.nsl-sq img, .nsl-sq .nsl-video { width: 100%; height: 100%; object-fit: cover; display: block; }
.nsl-spark { color: #c8102e; font-size: 24px; line-height: 1; display: block; margin-bottom: 12px; }
.nsl-dot { border-top: 1.5px dotted #e2909c; margin: 18px 0 16px; }
.nsl-stat { display: flex; align-items: flex-start; gap: 16px; }
.nsl-stat span { flex: 0 0 auto; font-size: 40px; font-weight: 800; color: #c8102e; line-height: 1; }
.nsl-stat p { margin: 0; font-size: 15.5px; line-height: 1.5; }

/* 3) + 5) radijalno */
.nsl-radial { display: grid; grid-template-columns: 1fr 1.05fr 1fr; gap: 26px; align-items: center; }
.nsl-rc img { width: 100%; height: auto; display: block; }
.nsl-rc-circle { position: relative; display: flex; align-items: center; justify-content: center; }
.nsl-rc-circle:before { content: ""; position: absolute; width: 74%; padding-bottom: 74%; border-radius: 50%; background: #c8102e; }
.nsl-rc-circle:after { content: ""; position: absolute; width: 92%; padding-bottom: 92%; border-radius: 50%; border: 1px solid #f0c4cc; }
.nsl-rc-circle img { position: relative; width: 62%; }
.nsl-rl, .nsl-rr { display: flex; flex-direction: column; gap: 46px; }
.nsl-rlab { display: flex; align-items: center; gap: 14px; }
.nsl-rl .nsl-rlab { justify-content: flex-end; text-align: right; }
.nsl-rr .nsl-rlab { justify-content: flex-start; text-align: left; }
.nsl-rtxt strong { display: block; font-size: 17px; font-weight: 800; line-height: 1.25; }
.nsl-rtxt span { display: block; font-size: 14px; color: #5f5f5f; margin-top: 4px; }
.nsl-ico { flex: 0 0 auto; width: 46px; height: 46px; border-radius: 50%; background: #fdeaee;
  display: flex; align-items: center; justify-content: center; }
.nsl-ico svg { width: 23px; height: 23px; }

/* 4) koraki */
.nsl-steps4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 26px; position: relative; }
.nsl-step { text-align: center; position: relative; }
.nsl-num { width: 56px; height: 56px; border-radius: 50%; border: 2px solid #c8102e; background: #c8102e;
  color: #fff; font-size: 21px; font-weight: 800; display: flex; align-items: center; justify-content: center;
  margin: 0 auto 16px; position: relative; z-index: 2; }
.nsl-step:not(:last-child):after { content: ""; position: absolute; top: 28px; left: calc(50% + 34px);
  width: calc(100% - 68px); border-top: 1.5px dashed #e2909c; z-index: 1; }
.nsl-steplab { font-size: 16.5px; font-weight: 800; margin: 0 0 16px; }
.nsl-step img, .nsl-step .nsl-video { width: 100%; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 12px; display: block; }

/* 6) usporedba */
.nsl-vs2 { display: grid; grid-template-columns: 1fr 1fr; gap: 26px; max-width: 900px; margin: 0 auto; }
.nsl-vs2 figure { margin: 0; }
.nsl-vs2 img, .nsl-vs2 .nsl-video { width: 100%; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 14px; display: block; }
.nsl-vs2 figcaption { text-align: center; padding-top: 12px; }
.nsl-tag { display: inline-block; padding: 6px 16px; border-radius: 999px; font-size: 14px; font-weight: 800; }
.nsl-tag-bad  { background: #fdeaee; color: #c8102e; }
.nsl-tag-good { background: #e6f4ec; color: #1f7a4d; }

.nsl-ph { display: flex; align-items: center; justify-content: center; min-height: 200px; background: #ececed;
  border-radius: 12px; color: #8b8b8b; font-size: 14px; text-align: center; padding: 12px; }

@media (max-width: 900px) {
  .nsl-sec { padding: 28px 0; }
  .nsl-wrap { padding-left: 14px; padding-right: 14px; }
  .nsl-h2 { font-size: 24px; margin-bottom: 22px; }
  .nsl-h3 { font-size: 21px; }
  .nsl-three { grid-template-columns: 1fr; gap: 30px; }
  .nsl-row, .nsl-row.nsl-rev { grid-template-columns: 1fr; gap: 18px; margin-bottom: 32px; }
  .nsl-row .nsl-media { order: -1; }
  .nsl-radial { grid-template-columns: 1fr; gap: 22px; }
  .nsl-rc { order: -1; max-width: 330px; margin: 0 auto; }
  .nsl-rl, .nsl-rr { gap: 20px; }
  .nsl-rl .nsl-rlab, .nsl-rr .nsl-rlab { justify-content: flex-start; text-align: left; flex-direction: row-reverse; }
  .nsl-rr .nsl-rlab { flex-direction: row; }
  .nsl-rl .nsl-rlab { flex-direction: row-reverse; }
  .nsl-steps4 { grid-template-columns: 1fr 1fr; gap: 20px 16px; }
  .nsl-step:nth-child(2):after { display: none; }
  .nsl-vs2 { grid-template-columns: 1fr 1fr; gap: 14px; }
}

/* kratki opis proizvoda: zelene kvacice umjesto tockica */
.woocommerce-product-details__short-description ul,
.woocommerce div.product .woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 8px 0 14px !important; padding-left: 0 !important; }
.woocommerce-product-details__short-description ul li,
.woocommerce div.product .woocommerce-product-details__short-description ul li {
  list-style: none !important; list-style-type: none !important; padding-left: 26px !important;
  text-indent: -26px !important; margin-left: 0 !important; line-height: 1.55 !important; margin-bottom: 8px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nsl-tick {
  display: inline-block !important; width: 26px !important; text-indent: 0 !important;
  color: #22c55e !important; font-weight: 800 !important; font-size: 17px !important; }
</style>
