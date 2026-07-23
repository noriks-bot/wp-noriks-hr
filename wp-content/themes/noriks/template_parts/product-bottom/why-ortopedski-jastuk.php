<?php
/**
 * product-bottom: NORIKS ErgoSit — ORTOPEDSKI JASTUK ZA SJEDENJE (orto-ortopedski-jastuk)
 * No-attrs proizvod (bez boje/veličine), quantity-only bundle. "Tablica veličina" sakrivena.
 * Koncept + sadržaj kopiran s originalne stranice (celinva), prijevod HR + rebrand NORIKS ErgoSit.
 * Postavitev: sekcije lijevo-desno, isti redoslijed kao original. Lokalizirane HR grafike.
 * Boja bundle gumba: pink #e5157e (iz artworka). Slike: img/ortopedski-jastuk/ | Videi: /videos/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$oj  = get_template_directory_uri() . '/img/ortopedski-jastuk/';
$ojv = get_template_directory_uri() . '/img/ortopedski-jastuk/videos/';
$oj_img = function( $file, $alt ) use ( $oj ) {
  return '<img src="'.esc_url($oj.$file).'" alt="'.esc_attr($alt).'" loading="lazy" onerror="this.style.display=\'none\'">';
};
?>

<!-- ============ 1) Marquee + hero + UGC ============ -->
<section class="oj-hero">
  <div class="oj-marquee" aria-hidden="true">
    <div class="oj-marquee-track">
      <?php $oj_ticker = array('PROZRAČNO I PERIVO','SAVRŠENO PORAVNANJE','STABILITYCORE™ PJENA','OEKO-TEX® CERTIFICIRANO','HIPOALERGENO','SILKFLEX™ NAVLAKA');
      for ( $r = 0; $r < 2; $r++ ) { foreach ( $oj_ticker as $t ) { echo '<span class="oj-tick">'.esc_html($t).'</span><span class="oj-dot">•</span>'; } } ?>
    </div>
  </div>
  <div class="oj-wrap">
    <h2 class="oj-hero-h">Svjetski <em>#1 ortopedski jastuk za sjedenje</em> za svakodnevnu udobnost</h2>
    <p class="oj-hero-sub">Vjeruju mu tisuće zadovoljnih kupaca — od <strong>vozača na cesti do uredskih radnika i obitelji kod kuće.</strong></p>
    <div class="oj-ugc-grid">
      <?php for ( $i = 1; $i <= 6; $i++ ) : ?>
        <div class="oj-ugc-item" data-src="<?php echo esc_url( $ojv.'ugc-'.$i.'.mp4' ); ?>">
          <video class="oj-ugc-video" preload="metadata" playsinline muted></video>
          <span class="oj-ugc-play" aria-label="Reproduciraj"></span>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 2) Benefit grafika (full) ============ -->
<section class="oj-full"><div class="oj-full-in"><?php echo $oj_img('02_bolecine_HR.png','Sjedite satima bez boli i ukočenosti'); ?></div></section>

<!-- ============ 3) Kraj boli u trtici (slika lijevo, tekst desno) ============ -->
<section class="oj-sec">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><?php echo $oj_img('07_lifestyle_HR.png','Prije i poslije — bol u trtici pri vožnji'); ?></div>
    <div class="oj-copy">
      <h2 class="oj-h2"><em>Kraj boli u trtici, išijasu i leđima</em> od sjedenja</h2>
      <p>Većina stolica uništi vaše tijelo unutar 30 minuta. <strong>Kukovi se naginju, kralježnica se povija, a pritisak raste na trtici i išijasnom živcu.</strong> Zato duge vožnje, uredski rad ili večera za stolom ostavljaju bolna, ukočena ili utrnula leđa.</p>
      <p>NORIKS <strong>ErgoSit jastuk</strong> građen je drukčije. Izrez za trticu uklanja izravan pritisak, dok konturirani dizajn podupire kralježnicu i vraća zdravo držanje. Memory pjena visoke gustoće ravnomjerno raspoređuje težinu po kukovima i bedrima te održava protok krvi da noge ne utrnu.</p>
    </div>
  </div>
</section>

<!-- ============ 4) Bolje držanje + cirkulacija (tekst lijevo, slika desno) ============ -->
<section class="oj-sec oj-alt">
  <div class="oj-wrap oj-row2">
    <div class="oj-copy">
      <h2 class="oj-h2">Poboljšajte držanje i potaknite cirkulaciju</h2>
      <p>Autosjedala i uredske stolice rađeni su za trajnost, ne za vaše tijelo. Njihov oblik tjera kukove da tonu, bedra u sjedalo, a cirkulacija usporava — noge postaju nemirne, a leđa bolna i dugo nakon što ustanete.</p>
      <p>NORIKS <strong>ErgoSit</strong> osmišljen je za duge sate. Oblikovana baza drži kukove u razini, konturirani rubovi smanjuju pritisak na bedra, a uzdignuće podupire kralježnicu kilometar za kilometrom. Rezultat? Uspravno držanje, zdrava cirkulacija i sati sjedenja bez boli i ukočenosti.</p>
    </div>
    <div class="oj-media"><?php echo $oj_img('05_drzanje_HR.png','NORIKS ErgoSit automatski ispravlja držanje'); ?></div>
  </div>
</section>

<!-- ============ 5) Znanost (full grafika) ============ -->
<section class="oj-full"><div class="oj-full-in"><?php echo $oj_img('06_znanost_HR.png','Znanost iza NORIKS olakšanja'); ?></div></section>

<!-- ============ 6) Prilagođava se gdje god sjedite (grid slika lijevo, tekst desno) ============ -->
<section class="oj-sec">
  <div class="oj-wrap oj-row2">
    <div class="oj-grid2">
      <?php echo $oj_img('08_lifestyle_HR.png','NORIKS ErgoSit u svakodnevnoj uporabi'); ?>
      <?php echo $oj_img('09_lifestyle_HR.png','NORIKS ErgoSit prilagođava se svakom sjedalu'); ?>
    </div>
    <div class="oj-copy">
      <h2 class="oj-h2">Olakšanje koje se prilagođava gdje god sjedite</h2>
      <p>NORIKS <strong>ErgoSit</strong> prilagođava se svakom mjestu na kojem sjedite. Stabilna baza protiv klizanja drži ga na mjestu na <strong>autosjedalima, uredskim stolicama, stolicama za blagovanje i invalidskim kolicima</strong> — pa udobnost ide s vama cijeli dan.</p>
      <p>Memory pjena visoke gustoće podupire tijelo bez splošnjavanja, dok periva navlaka koja se skida ostaje svježa, čista i spremna za svakodnevnu uporabu.</p>
    </div>
  </div>
</section>

<!-- ============ 7) Osmišljen s ortopedskim znanjem (slika lijevo, tekst desno) ============ -->
<section class="oj-sec oj-alt">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><?php echo $oj_img('04_lijecnik_HR.png','Preporuka liječnika — NORIKS ErgoSit'); ?></div>
    <div class="oj-copy">
      <h2 class="oj-h2">Osmišljen s ortopedskim znanjem, stvoren za svakodnevno sjedenje</h2>
      <p>Uz uvid ortopedskih stručnjaka i mjesece ergonomskog testiranja, NORIKS <strong>ErgoSit</strong> osmišljen je da ublaži najčešće bolove uzrokovane dugim sjedenjem — od pritiska na trtici do nelagode u donjem dijelu leđa i kukovima.</p>
      <a class="oj-cta" href="#bundle-selector">👉 Naruči odmah</a>
    </div>
  </div>
</section>

<!-- ============ 8) Dimenzije + sadržaj (full grafike) ============ -->
<section class="oj-full"><div class="oj-full-in"><?php echo $oj_img('10_MERE_cm_HR.png','Dimenzije NORIKS ErgoSit jastuka'); ?></div></section>
<section class="oj-full oj-alt"><div class="oj-full-in"><?php echo $oj_img('03_embalaza_HR.png','NORIKS ErgoSit — pakiranje'); ?></div></section>
<section class="oj-full"><div class="oj-full-in"><?php echo $oj_img('11_vsebina_HR.png','Što dobivate u paketu'); ?></div></section>
<section class="oj-full oj-alt"><div class="oj-full-in"><?php echo $oj_img('14_vsebina_HR.png','NORIKS ErgoSit — sadržaj paketa'); ?></div></section>

<!-- ============ 9) Učinkovito protiv čestih problema (akordeon) ============ -->
<section class="oj-sec">
  <div class="oj-wrap-narrow">
    <h2 class="oj-h2 oj-center"><em>Učinkovito protiv</em> čestih problema pri sjedenju</h2>
    <div class="oj-acc">
      <?php
      $oj_probs = array(
        array('Bol u trtici (trtična kost)','Izrez za trticu uklanja pritisak s trtične kosti i raspoređuje težinu po jastuku, pa ne osjećate onu oštru, pekuću bol već nakon nekoliko minuta sjedenja.'),
        array('Išijas i probadanje niz nogu','Držeći kukove u razini, a kralježnicu uspravnom, jastuk rasterećuje išijasni živac — pa možete sjediti, voziti ili raditi bez probadajuće boli koja se širi niz noge.'),
        array('Bol u donjem dijelu leđa','Većina stolica ostavlja prazninu iza donjeg dijela leđa. NORIKS je popunjava, vraća prirodnu krivinu kralježnice i smanjuje napetost mišića tijekom dugih sati sjedenja.'),
        array('Utrnulost i oticanje nogu','Ravne podloge prekidaju cirkulaciju. Konturirani rubovi jastuka rasterećuju bedra i održavaju protok krvi, pa se noge osjećaju lagano i energično, a ne teško ili utrnulo.'),
        array('Bol u SI zglobu i kukovima','Neravnomjerna težina opterećuje kukove i zglobove. NORIKS ravnomjerno raspoređuje pritisak, pomaže održati uravnoteženo držanje i smanjuje napetost u kukovima.'),
        array('Olakšanje za osjetljivo sjedenje','Za osjetljiva područja jastuk spaja čvrst oslonac s nježnim konturiranjem — rasterećuje pritisak pa možete udobno sjediti čak i kad je tijelo osjetljivo.'),
      );
      foreach ( $oj_probs as $p ) : ?>
        <div class="oj-acc-item">
          <button class="oj-acc-head" type="button" aria-expanded="false">
            <span class="oj-acc-tick">✔</span><span class="oj-acc-title"><?php echo esc_html($p[0]); ?></span><span class="oj-acc-chev">⌄</span>
          </button>
          <div class="oj-acc-body"><p><?php echo esc_html($p[1]); ?></p></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 10) 20x jeftinije (tekst) ============ -->
<section class="oj-sec oj-alt">
  <div class="oj-wrap-narrow oj-center">
    <h2 class="oj-h2 oj-center"><em>20× jeftinije</em> od skupih rješenja</h2>
    <p class="oj-lead">Većina ljudi <strong>potroši tisuće</strong> pokušavajući riješiti bol od sjedenja:</p>
    <ul class="oj-x">
      <li><span>✕</span> Ergonomska stolica: <strong>750–1.100 €</strong></li>
      <li><span>✕</span> Tjedni odlasci kiropraktičaru: <strong>70–140 € po posjetu</strong> (3.000+ € godišnje)</li>
      <li><span>✕</span> Fizikalna terapija: <strong>190 €+ po posjetu</strong>, često tjedni termina</li>
    </ul>
    <p><strong>NORIKS ErgoSit ortopedski jastuk</strong> — jednokratna kupnja koja ublažava bol u trtici, leđima i kukovima, a da ne isprazni novčanik.</p>
    <a class="oj-cta" href="#bundle-selector">Naruči odmah</a>
  </div>
</section>

<!-- ============ 11) Jastuk koji ne odustaje (usporedna tablica) ============ -->
<section class="oj-sec">
  <div class="oj-wrap oj-row2">
    <div class="oj-copy">
      <h2 class="oj-h2">Jastuk koji ne odustaje</h2>
      <p class="oj-lead">Ostaje čvrst, ublažava bol i drži oslonac ondje gdje drugi zakažu.</p>
    </div>
    <div class="oj-cmp-scroll">
      <table class="oj-cmp">
        <thead><tr><th></th><th class="oj-us">NORIKS ErgoSit</th><th>Drugi</th></tr></thead>
        <tbody>
          <tr><td>Rasterećuje trticu i leđa</td><td class="us ok">✓</td><td class="no">✕</td></tr>
          <tr><td>Podupire uspravno, zdravo držanje</td><td class="us ok">✓</td><td class="no">✕</td></tr>
          <tr><td>Zadržava oblik s vremenom</td><td class="us ok">✓</td><td class="no">✕</td></tr>
          <tr><td>Baza protiv klizanja</td><td class="us ok">✓</td><td class="no">✕</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ============ 12) 60 dana bez brige (tamna + značka) ============ -->
<section class="oj-guarantee">
  <div class="oj-wrap oj-row2">
    <div class="oj-guar-badge"><?php echo $oj_img('15_znacka_60_dana_HR.png','60 dana jamstva povrata novca'); ?></div>
    <div class="oj-guar-copy">
      <h2 class="oj-h2 oj-h2-light">Isprobajte <em>60 dana</em>, bez brige</h2>
      <p>Pronaći pravi jastuk nije lako — mnogi splošnjaju ili jednostavno ne donesu pravo olakšanje. Zato svaki NORIKS <strong>ErgoSit</strong> dolazi s našim jamstvom udobnosti od 60 dana.</p>
      <p>Ponesite ga u ured, u auto ili za duge sate kod kuće. Ako ne osjetite manje boli i više udobnosti u svakodnevnom sjedenju, naš tim će se pobrinuti da bude kako treba.</p>
      <p>Jer kada je riječ o vašem zdravlju i udobnosti, vjerujemo da razliku trebate <strong>osjetiti</strong>, a ne samo priželjkivati.</p>
      <a class="oj-cta" href="#bundle-selector">Naruči bez rizika</a>
    </div>
  </div>
</section>

<style>
  .oj-wrap { max-width: 1120px; margin: 0 auto; padding: 0 18px; }
  .oj-wrap-narrow { max-width: 820px; margin: 0 auto; padding: 0 18px; }
  .oj-sec { padding: 46px 0; }
  .oj-alt { background: #faf6f9; }
  .oj-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 44px; align-items: center; }
  .oj-h2 { font-size: clamp(24px,3vw,36px); font-weight: 800; color: #1b1533; line-height: 1.15; margin: 0 0 16px; }
  .oj-h2 em { color: #e5157e; font-style: normal; }
  .oj-h2-light { color: #fff; }
  .oj-center { text-align: center; }
  .oj-copy p, .oj-lead { font-size: 15.5px; line-height: 1.6; color: #3a3450; margin: 0 0 14px; }
  .oj-lead { font-size: 16px; color: #55506b; }
  .oj-media img, .oj-grid2 img { width: 100%; height: auto; display: block; border-radius: 16px; }

  /* full-width grafike */
  .oj-full { padding: 8px 0; }
  .oj-full.oj-alt { background: transparent; }
  .oj-full-in { max-width: 980px; margin: 0 auto; padding: 8px 18px; }
  .oj-full-in img { width: 100%; height: auto; display: block; border-radius: 16px; }

  /* Marquee + hero */
  .oj-hero { padding: 0 0 34px; }
  .oj-marquee { background: #1b1533; overflow: hidden; white-space: nowrap; }
  .oj-marquee-track { display: inline-block; padding: 13px 0; animation: ojScroll 26s linear infinite; }
  .oj-tick { color: #fff; font-weight: 800; font-size: 14px; letter-spacing: .06em; text-transform: uppercase; }
  .oj-dot { color: #e5157e; margin: 0 22px; font-weight: 800; }
  @keyframes ojScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }
  .oj-hero-h { text-align: center; font-size: clamp(26px,3.4vw,42px); font-weight: 800; color: #1b1533; line-height: 1.12; margin: 34px auto 12px; max-width: 900px; }
  .oj-hero-h em { color: #e5157e; font-style: italic; }
  .oj-hero-sub { text-align: center; font-size: 16px; color: #55506b; max-width: 660px; margin: 0 auto 28px; line-height: 1.55; }

  /* UGC videi */
  .oj-ugc-grid { display: grid; grid-template-columns: repeat(6,1fr); gap: 12px; }
  .oj-ugc-item { position: relative; aspect-ratio: 9/16; border-radius: 12px; overflow: hidden; background: #1b1533; cursor: pointer; }
  .oj-ugc-item video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .oj-ugc-play { position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); width: 50px; height: 50px; border-radius: 50%; background: rgba(255,255,255,.92); }
  .oj-ugc-play::after { content: ""; position: absolute; top: 50%; left: 54%; transform: translate(-50%,-50%); border-style: solid; border-width: 10px 0 10px 16px; border-color: transparent transparent transparent #1b1533; }

  .oj-grid2 { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }

  /* CTA */
  .oj-cta { display: inline-block; background: #e5157e; color: #fff; font-weight: 800; font-size: 16px; padding: 15px 34px; border-radius: 10px; text-decoration: none; margin-top: 8px; }
  .oj-cta:hover { background: #1b1533; }

  /* akordeon */
  .oj-acc { margin-top: 22px; }
  .oj-acc-item { border-bottom: 1px solid #ecdfe8; }
  .oj-acc-head { width: 100%; background: none; border: 0; display: flex; align-items: center; gap: 12px; padding: 16px 4px; cursor: pointer; font-size: 16px; font-weight: 700; color: #1b1533; text-align: left; }
  .oj-acc-tick { color: #22b573; font-weight: 800; }
  .oj-acc-title { flex: 1; }
  .oj-acc-chev { transition: transform .2s; color: #b39aab; }
  .oj-acc-item.open .oj-acc-chev { transform: rotate(180deg); }
  .oj-acc-body { max-height: 0; overflow: hidden; transition: max-height .25s ease; }
  .oj-acc-item.open .oj-acc-body { max-height: 260px; }
  .oj-acc-body p { font-size: 14.5px; line-height: 1.6; color: #4a4560; margin: 0 0 16px; padding-left: 28px; }

  /* 20x lista */
  .oj-x { list-style: none; margin: 4px auto 16px; padding: 0; max-width: 520px; text-align: left; }
  .oj-x li { font-size: 15px; color: #3a3450; margin: 0 0 10px; }
  .oj-x li span { color: #d64545; font-weight: 800; margin-right: 8px; }

  /* usporedna tablica */
  .oj-cmp-scroll { overflow-x: auto; border-radius: 16px; box-shadow: 0 10px 30px rgba(27,21,51,.12); }
  .oj-cmp { width: 100%; border-collapse: collapse; min-width: 340px; background: #fff; }
  .oj-cmp th, .oj-cmp td { padding: 15px 14px; text-align: center; font-size: 14px; border-bottom: 1px solid #eee; }
  .oj-cmp thead th { font-weight: 800; color: #1b1533; font-size: 13px; }
  .oj-cmp thead th.oj-us { background: #e5157e; color: #fff; border-radius: 12px 12px 0 0; }
  .oj-cmp tbody td:first-child { text-align: left; font-weight: 600; color: #1b1533; }
  .oj-cmp td.us { background: #fdeef6; }
  .oj-cmp td.ok { color: #1a9e5f; font-size: 18px; font-weight: 700; }
  .oj-cmp td.no { color: #d64545; font-size: 17px; }

  /* jamstvo (tamna) */
  .oj-guarantee { background: #1b1533; padding: 50px 0; }
  .oj-guar-copy p { color: #cfc9e0; font-size: 15px; line-height: 1.6; margin: 0 0 12px; }
  .oj-guar-badge img { width: 260px; max-width: 100%; height: auto; margin: 0 auto; display: block; border-radius: 0; }

  @media (max-width: 860px) {
    .oj-row2 { grid-template-columns: 1fr; gap: 24px; }
    .oj-ugc-grid { grid-template-columns: repeat(3,1fr); }
    .oj-row2 .oj-media, .oj-row2 .oj-grid2 { order: -1; }
    .oj-guarantee .oj-guar-badge { order: -1; }
  }

  /* No-attrs: sakrij "Tablica veličina" ako se negdje pojavi */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap, #open-size-chart, #open-size-chartCustom { display: none !important; }
</style>

<script>
(function(){
  /* Pink active bundle-option (preživljava LiteSpeed UCSS). */
  function paintOj(){
    var sel = document.getElementById('bundle-selector'); if(!sel) return;
    sel.querySelectorAll('.bundle-option').forEach(function(c){ c.style.removeProperty('border-color'); c.style.removeProperty('background'); });
    var checked = sel.querySelector('input[name="bundle_option"]:checked');
    var card = checked ? checked.closest('.bundle-option') : (sel.querySelector('.bundle-option.active') || sel.querySelector('.bundle-option'));
    if(card){ card.style.setProperty('border-color','#e5157e','important'); card.style.setProperty('background','rgba(229,21,126,0.07)','important'); }
  }
  function bindOj(){ var sel=document.getElementById('bundle-selector'); if(!sel) return; paintOj(); sel.querySelectorAll('input[name="bundle_option"]').forEach(function(r){ r.addEventListener('change', paintOj); }); }
  if(document.readyState==='loading'){ document.addEventListener('DOMContentLoaded', bindOj); } else { bindOj(); }

  /* Akordeon */
  document.querySelectorAll('.oj-acc-head').forEach(function(btn){
    btn.addEventListener('click', function(){ var it=btn.closest('.oj-acc-item'); var open=it.classList.toggle('open'); btn.setAttribute('aria-expanded', open?'true':'false'); });
  });

  /* UGC video: prikaži prvi kadar, klik = pusti sa zvukom */
  document.querySelectorAll('.oj-ugc-item').forEach(function(item){
    var v = item.querySelector('.oj-ugc-video'); if(!v) return; v.src = item.dataset.src;
    item.addEventListener('click', function(){
      if (item.dataset.loaded) return; item.dataset.loaded='1';
      var play=item.querySelector('.oj-ugc-play'); if(play) play.remove();
      v.muted=false; v.controls=true; v.playsInline=true; var p=v.play(); if(p&&p.catch) p.catch(function(){});
    });
  });

  /* Glatki scroll za CTA */
  document.querySelectorAll('a.oj-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
