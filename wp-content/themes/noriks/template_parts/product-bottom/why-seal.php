<?php
/**
 * product-bottom: NORIKS ChefSeal — rucni vakuumski aparat za hranu (orto-seal).
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
  return '<span class="nsl-ico"><svg viewBox="0 0 24 24" fill="none" stroke="#c3192a" stroke-width="1.7" '
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

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap">

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

<!-- 2) Zasto ljudi vole NORIKS ChefSeal -->
<section class="nsl-sec nsl-grey">
  <div class="nsl-wrap">
    <h2 class="nsl-h2 nsl-center">Zašto ljudi <em>vole</em> NORIKS ChefSeal</h2>

    <div class="nsl-row">
      <div class="nsl-media nsl-sq"><?php echo $sl_vid( 'seal-vid-1.mp4', 'seal-vid-1.jpg', 'Vakuumiranje avokada u nekoliko sekundi' ); ?></div>
      <div class="nsl-copy">
        <span class="nsl-spark">✦</span>
        <h3 class="nsl-h3">Čuva hranu svježom</h3>
        <p>S NORIKS ChefSealom hranu <strong>vakuumirate u samo 5 sekundi</strong> i ostaje svježa dulje. Pritisnete gumb i uređaj se <strong>sam isključi kad je gotovo</strong>.</p>
        <div class="nsl-dot"></div>
        <div class="nsl-stat"><span>94 %</span><p>korisnika primijetilo je da im hrana ostaje svježa dulje nego kod uobičajenog čuvanja.</p></div>
      </div>
    </div>

    <div class="nsl-row nsl-rev">
      <div class="nsl-copy">
        <span class="nsl-spark">✦</span>
        <h3 class="nsl-h3">Štedi novac jer se manje baca</h3>
        <p><strong>NORIKS ChefSeal drži hranu svježom</strong>, pa manje bacate i manje trošite na pokvarene namirnice. Pomaže protiv posmeđivanja avokada, plijesni na jagodama i kvarenja općenito.</p>
        <div class="nsl-dot"></div>
        <div class="nsl-stat"><span>91 %</span><p>korisnika prijavilo je primjetnu uštedu na namirnicama zbog manje bačene hrane.</p></div>
      </div>
      <div class="nsl-media nsl-sq"><?php echo $sl_vid( 'seal-vid-2.mp4', 'seal-vid-2.jpg', 'Avokado ostaje svjež u vakuumskoj vrećici' ); ?></div>
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
      <div class="nsl-rc"><?php echo $sl_img( 'seal-13-banner-uspravni.jpg', 'NORIKS ChefSeal' ); ?></div>
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
        <?php echo $sl_img( 'seal-korak-1.jpg', 'Punjenje vrećice hranom' ); ?>
      </div>
      <div class="nsl-step">
        <div class="nsl-num">2</div>
        <p class="nsl-steplab">Zatvorite zatvarač</p>
        <?php echo $sl_img( 'seal-korak-2.jpg', 'Zatvaranje vrećice' ); ?>
      </div>
      <div class="nsl-step">
        <div class="nsl-num">3</div>
        <p class="nsl-steplab">Pritisnite gumb za početak</p>
        <?php echo $sl_img( 'seal-korak-3.jpg', 'Pritisak na gumb za vakuumiranje' ); ?>
      </div>
      <div class="nsl-step">
        <div class="nsl-num">4</div>
        <p class="nsl-steplab">Sam se isključi kad je gotovo</p>
        <?php echo $sl_img( 'seal-korak-4.jpg', 'Vakuumirana vrećica' ); ?>
      </div>
    </div>
  </div>
</section>

<!-- 5) Inovativne vakuumske vrecice -->
<section class="nsl-sec nsl-white">
  <div class="nsl-wrap">
    <h2 class="nsl-h2 nsl-center">Inovativne vakuumske vrećice</h2>
    <div class="nsl-radial nsl-radial-lg">
      <div class="nsl-rl">
        <div class="nsl-rlab"><div class="nsl-rtxt"><strong>Za zamrzivač, mikrovalnu i perilicu</strong><span>Sigurne za spremanje, podgrijavanje i pranje.</span></div><?php echo $sl_ico( $ico_snow ); ?></div>
        <div class="nsl-rlab"><div class="nsl-rtxt"><strong>Čuvaju okus i hranjive tvari</strong><span>Bez zraka se okus i sastojci dulje zadrže.</span></div><?php echo $sl_ico( $ico_leaf ); ?></div>
      </div>
      <div class="nsl-rc"><?php echo $sl_img( 'seal-krug-vrecica-v3.png', 'NORIKS vakuumska vrećica za višekratnu upotrebu' ); ?></div>
      <div class="nsl-rr">
        <div class="nsl-rlab"><?php echo $sl_ico( $ico_drop ); ?><div class="nsl-rtxt"><strong>Bez mirisa i bez curenja</strong><span>Zatvarač brtvi, miris ostaje unutra.</span></div></div>
        <div class="nsl-rlab"><?php echo $sl_ico( $ico_recyc ); ?><div class="nsl-rtxt"><strong>Izdržljive i za višekratnu upotrebu</strong><span>Operete ih i koristite iznova.</span></div></div>
      </div>
    </div>
    <p class="nsl-note nsl-center"><b>Vrećice se peru i koriste iznova — nisu jednokratne.</b> Polovica vrećica u kompletu je manja (1 l), polovica veća (2 l).</p>
  </div>
</section>

<!-- 6) Bez vakuuma vs. vakuumirano — drsnik -->
<section class="nsl-sec nsl-white nsl-sec-tight">
  <div class="nsl-wrap">
    <h2 class="nsl-h2 nsl-center">Bez vakuuma vs. vakuumirano</h2>
    <p class="nsl-sub nsl-center">*Prema trodnevnom testu čuvanja u stvarnim uvjetima</p>
    <div class="nsl-ba" id="nslBa">
      <img class="nsl-ba-under" src="<?php echo esc_url( $sl . 'seal-avokado-vakuum-v2.jpg' ); ?>" alt="Vakuumirani avokado nakon tri dana" loading="lazy">
      <div class="nsl-ba-over"><img src="<?php echo esc_url( $sl . 'seal-avokado-bez-v2.jpg' ); ?>" alt="Avokado bez vakuuma nakon tri dana" loading="lazy"></div>
      <span class="nsl-ba-lab nsl-ba-l">Bez vakuuma</span>
      <span class="nsl-ba-lab nsl-ba-r">Vakuumirano</span>
      <div class="nsl-ba-handle"><i></i></div>
      <input class="nsl-ba-range" type="range" min="0" max="100" value="50" aria-label="Povuci za usporedbu">
    </div>
  </div>
</section>

<!-- 7) Vakuumiranje. Iznova osmisljeno. — usporedna tablica -->
<section class="nsl-sec nsl-grey">
  <div class="nsl-wrap">
    <h2 class="nsl-h2 nsl-center">Vakuumiranje. Iznova osmišljeno.</h2>
    <div class="nsl-cmp">
      <div class="nsl-cmp-hl"></div>
      <div class="nsl-cmp-grid">
        <div class="nsl-cmp-h">Ključne značajke</div>
        <div class="nsl-cmp-h nsl-cmp-c2">
          <?php echo $sl_img( 'seal-11-packshot-bijeli.jpg', 'NORIKS ChefSeal' ); ?>
          <span>NORIKS ChefSeal</span>
        </div>
        <div class="nsl-cmp-h nsl-cmp-c3">Stolni aparati</div>
        <?php foreach ( array( 'Bez kabela', 'Prijenosno', 'Kompaktno', 'Jednostavno za korištenje', 'Vrećice za višekratnu upotrebu' ) as $nsl_f ) : ?>
          <div class="nsl-cmp-t"><?php echo esc_html( $nsl_f ); ?></div>
          <div class="nsl-cmp-c2"><i class="ok">✓</i></div>
          <div class="nsl-cmp-c3"><i class="no">✕</i></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- 8) Sto kazu nasi kupci -->
<section class="nsl-sec nsl-white">
  <div class="nsl-wrap">
    <h2 class="nsl-h2 nsl-center">Što kažu naši kupci</h2>
    <div class="nsl-ugc">
      <article>
        <div class="nsl-ugc-img">
          <?php echo $sl_img( 'seal-04-smocnica.jpg', 'Vakuumirane namirnice u smočnici' ); ?>
          <span class="nsl-ugc-stars">★★★★★</span>
        </div>
        <p>Koristim ga svaki dan već mjesecima i uštedjela sam hrpu novca na namirnicama. Vakuumiram meso, voće i povrće — u kuhinji više ništa ne bacam.</p>
        <footer><span class="nsl-ugc-av">I</span><div><strong>Ivana K.</strong><em>Provjerena kupnja</em></div></footer>
      </article>
      <article>
        <div class="nsl-ugc-img">
          <?php echo $sl_img( 'seal-05-losos-flatlay.jpg', 'Vakuumirani losos' ); ?>
          <span class="nsl-ugc-stars">★★★★★</span>
        </div>
        <p>Bacio sam stari vakuumski aparat koji je bio glomazan i nespretan. Ovaj je kompaktan, radi posao odlično i jednostavan je. Vrećice se otvaraju bez uništavanja i idu u perilicu.</p>
        <footer><span class="nsl-ugc-av">M</span><div><strong>Marko J.</strong><em>Provjerena kupnja</em></div></footer>
      </article>
      <article>
        <div class="nsl-ugc-img">
          <?php echo $sl_img( 'seal-09-prsut.jpg', 'Vakuumirani pršut u vrećici' ); ?>
          <span class="nsl-ugc-stars">★★★★★</span>
        </div>
        <p>Kad sam vidio prijenosni vakuumer, odmah me osvojio. Ribu vakuumiram u nekoliko sekundi, a vrećice se mogu ponovno zatvoriti pa uzmem pola i ostatak zapakiram natrag.</p>
        <footer><span class="nsl-ugc-av">T</span><div><strong>Tomislav R.</strong><em>Provjerena kupnja</em></div></footer>
      </article>
    </div>
  </div>
</section>

<div class="nsl-marquee"><div class="nsl-marquee-track">
  <?php for ( $i = 0; $i < 4; $i++ ) : ?>
    <span>30 DANA ZA POVRAT</span><i>✦</i><span>2 GODINE JAMSTVA</span><i>✦</i><span>BESPLATNA DOSTAVA IZNAD 70 €</span><i>✦</i>
  <?php endfor; ?>
</div></div>

<script>
(function(){
  function init(){
    var box = document.getElementById('nslBa');
    if(!box) return;
    var over = box.querySelector('.nsl-ba-over');
    var hand = box.querySelector('.nsl-ba-handle');
    var rng  = box.querySelector('.nsl-ba-range');
    function setW(){
      var v = rng.value;
      over.style.width = v + '%';
      hand.style.left  = v + '%';
      var w = box.getBoundingClientRect().width;
      over.querySelector('img').style.width = w + 'px';
    }
    rng.addEventListener('input', setW);
    window.addEventListener('resize', setW);
    setW();
  }
  if(document.readyState === 'loading'){ document.addEventListener('DOMContentLoaded', init); }
  else { init(); }
})();
</script>

<style>
.nsl-sec, .nsl-sec p, .nsl-sec li, .nsl-sec td, .nsl-marquee {
  font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Helvetica, Arial, sans-serif !important; }
.nsl-sec h2, .nsl-sec h3, .nsl-sec strong, .nsl-sec th, .nsl-stat span, .nsl-num, .nsl-tag,
.nsl-steplab, .nsl-marquee span {
  font-family: 'Plus Jakarta Sans', 'Inter', -apple-system, BlinkMacSystemFont, Helvetica, Arial, sans-serif !important; }
.nsl-sec h2, .nsl-sec h3 { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; }
.nsl-sec { padding: 72px 0; }
.nsl-white { background: #fff;     color: #151515; }
.nsl-grey  { background: #f4f4f4;  color: #151515; }
.nsl-sec *, .nsl-marquee * { box-sizing: border-box; }
.nsl-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; box-sizing: border-box; }
.nsl-center { text-align: center; }
.nsl-h2 { font-size: 40px; line-height: 1.1; margin: 0 0 44px; font-weight: 800 !important;
  letter-spacing: -.032em; color: #151515; text-transform: none; }
.nsl-h2 em { font-style: normal; color: #e03142; }
.nsl-h3 { font-size: 27px; line-height: 1.15; margin: 0 0 14px; font-weight: 800 !important;
  letter-spacing: -.028em; color: #151515; }
.nsl-sec p { font-size: 16.5px; line-height: 1.62; margin: 0 0 12px; color: #333; }
.nsl-note { font-size: 13.5px; color: #6b6b6b; margin: 16px 0 0; }

/* traka */
.nsl-marquee { background: #ffeff2; overflow: hidden; padding: 13px 0; }
.nsl-marquee-track { display: flex; align-items: center; gap: 26px; white-space: nowrap;
  animation: nslmq 34s linear infinite; width: max-content; }
.nsl-marquee span { color: #c3192a; font-weight: 800; font-size: 14px; letter-spacing: .06em; }
.nsl-marquee i { color: #c3192a; font-style: normal; font-size: 13px; }
@keyframes nslmq { from { transform: translateX(0); } to { transform: translateX(-50%); } }

/* 1) tri negativne kartice */
.nsl-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
.nsl-negcard { text-align: center; }
.nsl-negcard img { width: 100%; max-width: 330px; height: auto; display: block; margin: 0 auto 18px; }
.nsl-negcard h3 { font-size: 23px; font-weight: 800 !important; margin: 0 0 16px; letter-spacing: -.028em; color: #151515; }
.nsl-negcard ul { list-style: none; padding: 0; margin: 0; display: inline-block; text-align: left; }
.nsl-negcard li { position: relative; padding-left: 32px; margin-bottom: 11px; font-size: 16.5px; color: #333; }
.nsl-negcard li:before { content: "✕"; position: absolute; left: 4px; top: 0; color: #c3192a; font-weight: 800; }

/* 2) izmenicne vrstice */
.nsl-row { display: grid; grid-template-columns: 1fr 1fr; gap: 72px; align-items: center; margin-bottom: 64px; }
.nsl-row:last-child { margin-bottom: 0; }
.nsl-sq { aspect-ratio: 1 / 1; border-radius: 18px; overflow: hidden; background: #ececed; }
.nsl-sq img, .nsl-sq .nsl-video { width: 100%; height: 100%; object-fit: cover; display: block; }
.nsl-copy { max-width: 500px; }
.nsl-spark { color: #e03142; font-size: 26px; line-height: 1; display: block; margin-bottom: 14px; }
.nsl-dot { border-top: 1.5px dotted #efa8b3; margin: 22px 0 20px; }
.nsl-stat { display: flex; align-items: center; gap: 20px; }
.nsl-stat span { flex: 0 0 auto; font-size: 44px; font-weight: 800; color: #e03142; line-height: 1; letter-spacing: -.03em; }
.nsl-stat p { margin: 0; font-size: 15.5px; line-height: 1.5; color: #333; }

/* 3) + 5) radijalno */
.nsl-radial { display: grid; grid-template-columns: 1fr 1.25fr 1fr; gap: 34px; align-items: center; }
.nsl-rc img { width: 100%; height: auto; display: block; }
.nsl-radial-lg { margin-top: 12px; grid-template-columns: 1fr 1.65fr 1fr; gap: 14px; }
.nsl-radial-lg .nsl-rc { max-width: 700px; margin: 0 auto; }
.nsl-radial-lg .nsl-rc img { width: 100%; height: auto; display: block; }
.nsl-radial-lg .nsl-rl, .nsl-radial-lg .nsl-rr { gap: 92px; }
.nsl-radial-lg .nsl-rtxt strong { font-size: 19px; }
.nsl-radial-lg .nsl-rtxt span { font-size: 15px; margin-top: 6px; }
.nsl-radial-lg .nsl-ico { width: 54px; height: 54px; }
.nsl-radial-lg .nsl-ico svg { width: 26px; height: 26px; }
.nsl-rc-circle { position: relative; display: flex; align-items: center; justify-content: center; }
.nsl-rc-circle { aspect-ratio: 1 / 1; }
.nsl-rc-circle:before { content: ""; position: absolute; width: 78%; padding-bottom: 78%; border-radius: 50%; background: #c3192a; }
.nsl-rc-circle:after { content: ""; position: absolute; width: 100%; padding-bottom: 100%; border-radius: 50%; border: 1px solid #f0c4cc; }
.nsl-rc-circle img { position: relative; width: 74%; height: auto; filter: drop-shadow(0 6px 16px rgba(0,0,0,.16)); }
.nsl-rl, .nsl-rr { display: flex; flex-direction: column; gap: 58px; }
.nsl-rlab { display: flex; align-items: center; gap: 14px; }
.nsl-rl .nsl-rlab { justify-content: flex-end; text-align: right; }
.nsl-rr .nsl-rlab { justify-content: flex-start; text-align: left; }
.nsl-rtxt strong { display: block; font-size: 17.5px; font-weight: 800; line-height: 1.25; letter-spacing: -.01em; }
.nsl-rtxt span { display: block; font-size: 14px; color: #5f5f5f; margin-top: 4px; }
.nsl-ico { flex: 0 0 auto; width: 48px; height: 48px; border-radius: 50%; background: #ffeff2;
  display: flex; align-items: center; justify-content: center; }
.nsl-ico svg { width: 23px; height: 23px; }

/* 4) koraki */
.nsl-steps4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 26px; position: relative; }
.nsl-step { text-align: center; position: relative; }
.nsl-num { width: 56px; height: 56px; border-radius: 50%; border: 2px solid #c3192a; background: #c3192a;
  color: #fff; font-size: 21px; font-weight: 800; display: flex; align-items: center; justify-content: center;
  margin: 0 auto 16px; position: relative; z-index: 2; }
.nsl-step:not(:last-child):after { content: ""; position: absolute; top: 28px; left: calc(50% + 34px);
  width: calc(100% - 68px); border-top: 1.5px dashed #efa8b3; z-index: 1; }
.nsl-steplab { font-size: 17px; font-weight: 800; margin: 0 0 18px; letter-spacing: -.01em;
  min-height: 2.5em; display: flex; align-items: center; justify-content: center; }
.nsl-step { display: flex; flex-direction: column; }
.nsl-step > *:last-child { margin-top: auto; }
.nsl-step img, .nsl-step .nsl-video { width: 100%; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 14px; display: block; }

/* 6) usporedba */
.nsl-vs2 { display: grid; grid-template-columns: 1fr 1fr; gap: 26px; max-width: 900px; margin: 0 auto; }
.nsl-vs2 figure { margin: 0; }
.nsl-vs2 img, .nsl-vs2 .nsl-video { width: 100%; aspect-ratio: 1 / 1; object-fit: cover; border-radius: 14px; display: block; }
.nsl-vs2 figcaption { text-align: center; padding-top: 12px; }
.nsl-tag { display: inline-block; padding: 6px 16px; border-radius: 999px; font-size: 14px; font-weight: 800; }
.nsl-tag-bad  { background: #ffeff2; color: #c3192a; }
.nsl-tag-good { background: #e6f4ec; color: #1f7a4d; }

/* 6) drsnik prej/potem */
.nsl-sub { font-size: 15.5px; color: #6b6b6b; margin: -32px 0 26px; }
.nsl-ba { position: relative; max-width: 640px; margin: 0 auto; border-radius: 14px; overflow: hidden;
  background: #e7e7ed; user-select: none; touch-action: pan-y; }
.nsl-ba img { width: 100%; height: auto; display: block; }
.nsl-ba-over { position: absolute; inset: 0; width: 50%; overflow: hidden; }
.nsl-ba-over img { width: 640px; max-width: none; height: 100%; object-fit: cover; object-position: left center; }
.nsl-ba-lab { position: absolute; top: 14px; padding: 7px 14px; border-radius: 7px; font-size: 14.5px; font-weight: 800; color: #fff; z-index: 3; }
.nsl-ba-l { left: 14px; background: #3a3a3a; }
.nsl-ba-r { right: 14px; background: #c3192a; }
.nsl-ba-handle { position: absolute; top: 0; bottom: 0; left: 50%; width: 2px; background: #fff; z-index: 2;
  box-shadow: 0 0 6px rgba(0,0,0,.25); pointer-events: none; }
.nsl-ba-handle i { position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);
  width: 38px; height: 38px; border-radius: 50%; background: rgba(255,255,255,.92); border: 1px solid #ddd;
  box-shadow: 0 2px 8px rgba(0,0,0,.18); }
.nsl-ba-handle i:before { content: "‹ ›"; position: absolute; inset: 0; display: flex; align-items: center;
  justify-content: center; font-size: 15px; color: #444; letter-spacing: -1px; }
.nsl-ba-range { position: absolute; inset: 0; width: 100%; height: 100%; opacity: 0; cursor: ew-resize; z-index: 4; margin: 0; }

/* 7) usporedna tablica */
.nsl-cmp { position: relative; max-width: 860px; margin: 0 auto; }
/* bela podlaga tablice na sivoj sekciji */
.nsl-cmp:before { content: ""; position: absolute; top: -16px; bottom: -18px; left: -22px; right: -22px;
  background: #fff; border-radius: 18px; box-shadow: 0 8px 28px rgba(0,0,0,.07); z-index: 0; }
.nsl-cmp-grid { display: grid; grid-template-columns: 46% 27% 27%; position: relative; z-index: 2; }
.nsl-cmp-grid > div { padding: 19px 10px; font-size: 16.5px; text-align: center; display: flex;
  align-items: center; justify-content: center; }
.nsl-cmp-grid > .nsl-cmp-t, .nsl-cmp-grid > .nsl-cmp-h:first-child { justify-content: flex-start; text-align: left; font-weight: 700; }
.nsl-cmp-h { font-size: 18px; font-weight: 800; letter-spacing: -.02em; align-items: flex-end !important; padding-bottom: 18px !important; }
.nsl-cmp-grid > .nsl-cmp-t, .nsl-cmp-grid > .nsl-cmp-t + div + div { border-top: 1px solid #ececee; }
.nsl-cmp-grid i { font-style: normal; font-size: 21px; font-weight: 700; }
.nsl-cmp-grid .ok { color: #fff; }
.nsl-cmp-grid .no { color: #e03142; }
.nsl-cmp-c2 { flex-direction: column; gap: 6px; }
.nsl-cmp-h.nsl-cmp-c2 { align-items: center !important; justify-content: flex-end !important; text-align: center; }
.nsl-cmp-h.nsl-cmp-c2 img { width: 46px; height: auto; display: block; margin: 0 auto; }
.nsl-cmp-h.nsl-cmp-c2 span { color: #fff; font-size: 14.5px; font-weight: 800; display: block; width: 100%; text-align: center; }
.nsl-cmp-hl { position: absolute; top: -8px; bottom: -8px; left: 46%; width: 27%; background: #c3192a;
  border-radius: 16px; z-index: 1; }

/* 8) mnenja kupcev */
.nsl-ugc { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; }
.nsl-ugc article { border: 1px solid #f0c4cc; border-radius: 14px; padding: 14px 14px 18px; background: #fff; }
.nsl-ugc-img { position: relative; margin-bottom: 26px; }
.nsl-ugc-img img { width: 100%; aspect-ratio: 4 / 3; object-fit: cover; border-radius: 10px; display: block; }
.nsl-ugc-stars { position: absolute; left: 50%; bottom: -15px; transform: translateX(-50%); background: #fff;
  border-radius: 999px; padding: 5px 14px; box-shadow: 0 2px 8px rgba(0,0,0,.12); color: #f5a623;
  font-size: 15px; letter-spacing: 2px; white-space: nowrap; }
.nsl-ugc p { font-size: 15px; line-height: 1.6; color: #333; margin: 0 0 18px; }
.nsl-ugc footer { display: flex; align-items: center; gap: 12px; }
.nsl-ugc-av { width: 44px; height: 44px; border-radius: 50%; background: #ffeff2; color: #c3192a;
  font-weight: 800; font-size: 18px; display: flex; align-items: center; justify-content: center; flex: 0 0 auto; }
.nsl-ugc footer strong { display: block; font-size: 15.5px; }
.nsl-ugc footer em { display: block; font-style: normal; font-size: 13.5px; color: #1f7a4d; font-weight: 600; }

.nsl-sec-tight { padding: 56px 0 60px; }
.nsl-sec-tight .nsl-h2 { margin-bottom: 40px; }
.nsl-ph { display: flex; align-items: center; justify-content: center; min-height: 200px; background: #ececed;
  border-radius: 12px; color: #8b8b8b; font-size: 14px; text-align: center; padding: 12px; }

@media (max-width: 900px) {
  .nsl-marquee { margin-top: 26px; padding: 11px 0; }
  .nsl-marquee span { font-size: 12.5px; }
  .nsl-sec { padding: 34px 0; }
  .nsl-copy { max-width: none; }
  .nsl-wrap { padding-left: 14px; padding-right: 14px; }
  .nsl-h2 { font-size: 26px; margin-bottom: 24px; }
  .nsl-h3 { font-size: 22px; }
  .nsl-stat span { font-size: 36px; }
  .nsl-three { grid-template-columns: 1fr; gap: 30px; }
  .nsl-row, .nsl-row.nsl-rev { grid-template-columns: 1fr; gap: 18px; margin-bottom: 32px; }
  .nsl-row .nsl-media { order: -1; }
  .nsl-radial, .nsl-radial-lg { grid-template-columns: 1fr; gap: 18px; }
  .nsl-rc { order: -1; max-width: 300px; margin: 0 auto 6px; }
  .nsl-rl, .nsl-rr, .nsl-radial-lg .nsl-rl, .nsl-radial-lg .nsl-rr { gap: 14px; }
  .nsl-rl .nsl-rlab, .nsl-rr .nsl-rlab {
    flex-direction: row !important; justify-content: flex-start !important; text-align: left !important;
    gap: 14px; padding: 12px 14px; border: 1px solid #ececee; border-radius: 12px; background: #fff; }
  .nsl-grey .nsl-rlab { background: #fff; }
  .nsl-rtxt strong, .nsl-radial-lg .nsl-rtxt strong { font-size: 16px; }
  .nsl-radial-lg .nsl-rtxt span { font-size: 14px; }
  .nsl-ico, .nsl-radial-lg .nsl-ico { width: 42px; height: 42px; }
  .nsl-ico svg, .nsl-radial-lg .nsl-ico svg { width: 21px; height: 21px; }
  .nsl-steps4 { grid-template-columns: 1fr 1fr; gap: 26px 16px; }
  .nsl-step:nth-child(2):after { display: none; }
  .nsl-num { width: 46px; height: 46px; font-size: 18px; margin-bottom: 12px; }
  .nsl-step:not(:last-child):after { top: 23px; left: calc(50% + 29px); width: calc(100% - 58px); }
  .nsl-steplab { font-size: 15px; margin-bottom: 12px; min-height: 3em; }
  .nsl-sub { margin: -16px 0 20px; font-size: 14px; }
  .nsl-cmp-grid > div { padding: 13px 5px; font-size: 14px; }
  .nsl-cmp-h { font-size: 14.5px; padding-bottom: 12px !important; }
  .nsl-cmp-h.nsl-cmp-c2 img { width: 32px; }
  .nsl-cmp-h.nsl-cmp-c2 span { font-size: 11.5px; }
  .nsl-ugc { grid-template-columns: 1fr; gap: 18px; }
  .nsl-ba-lab { font-size: 12.5px; padding: 6px 11px; top: 10px; }
  .nsl-ba-l { left: 10px; } .nsl-ba-r { right: 10px; }
}

/* kratki opis proizvoda: zelene kvacice umjesto tockica */
.woocommerce-product-details__short-description ul,
.woocommerce div.product .woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 4px 0 10px !important; padding-left: 0 !important; }
.woocommerce-product-details__short-description ul li,
.woocommerce div.product .woocommerce-product-details__short-description ul li {
  list-style: none !important; list-style-type: none !important; padding-left: 26px !important;
  text-indent: -26px !important; margin-left: 0 !important; line-height: 1.38 !important; margin-bottom: 0 !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nsl-tick {
  display: inline-block !important; width: 26px !important; text-indent: 0 !important;
  color: #22c55e !important; font-weight: 800 !important; font-size: 17px !important; }
</style>
