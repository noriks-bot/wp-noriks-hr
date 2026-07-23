<?php
/**
 * product-bottom: NORIKS ErgoSit — ORTOPEDSKI JASTUK ZA SJEDENJE (orto-ortopedski-jastuk)
 * No-attrs proizvod (bez boje/veličine), quantity-only bundle. "Tablica veličina" sakrivena.
 * Prave HTML sekcije (dizajn iz reference), prijevod HR + rebrand NORIKS ErgoSit.
 * Foto-grafike / videi: img/ortopedski-jastuk/ (+ /videos/). Ubaci datoteke istih imena.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$oj  = get_template_directory_uri() . '/img/ortopedski-jastuk/';
$ojv = get_template_directory_uri() . '/img/ortopedski-jastuk/videos/';
$oj_ph = '<div style="width:100%;aspect-ratio:1/1;background:#eceaf1;border-radius:14px;"></div>';
?>

<!-- ============ 1) Marquee + hero UGC videi ============ -->
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
      <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
        <div class="oj-ugc-item" data-src="<?php echo esc_url( $ojv.'ugc-'.$i.'.mp4' ); ?>">
          <video class="oj-ugc-video" poster="<?php echo esc_url( $ojv.'ugc-'.$i.'-poster.jpg' ); ?>" preload="none" playsinline></video>
          <span class="oj-ugc-play" aria-label="Reproduciraj"></span>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 2) Kraj boli u trtici, išijasa i leđima ============ -->
<section class="oj-sec oj-alt">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><?php if (true) : ?><img src="<?php echo esc_url( $oj.'01.jpg' ); ?>" alt="Pritisak na trtici tijekom sjedenja" loading="lazy" onerror="this.style.display='none'"><?php endif; ?></div>
    <div class="oj-copy">
      <h2 class="oj-h2"><em>Kraj boli u trtici, išijasu i leđima</em> od sjedenja</h2>
      <p>Većina stolica uništi vaše tijelo unutar 30 minuta. <strong>Kukovi se naginju, kralježnica se povija, a pritisak raste na trtici i išijasnom živcu.</strong> Zato duge vožnje, uredski rad ili večera za stolom ostavljaju bolna, ukočena ili utrnula leđa.</p>
      <p>NORIKS <strong>ErgoSit ortopedski jastuk</strong> građen je drukčije. Izrez za trticu uklanja izravan pritisak, dok anatomski oblik podupire kralježnicu i vraća zdravo držanje. Memory pjena visoke gustoće ravnomjerno raspoređuje težinu po kukovima i bedrima te održava protok krvi da noge ne utrnu.</p>
    </div>
  </div>
</section>

<!-- ============ 3) Bolje držanje + cirkulacija ============ -->
<section class="oj-sec">
  <div class="oj-wrap oj-row2">
    <div class="oj-copy">
      <h2 class="oj-h2">Poboljšajte držanje i potaknite cirkulaciju</h2>
      <p>Autosjedala i uredske stolice rađeni su za trajnost, ne za vaše tijelo. Njihov oblik tjera kukove da tonu, bedra u sjedalo, a cirkulacija usporava — noge postaju nemirne, a leđa bolna i dugo nakon što ustanete.</p>
      <p>NORIKS <strong>ErgoSit</strong> osmišljen je za duge sate. Oblikovana baza drži kukove u razini, konturirani rubovi smanjuju pritisak na bedra, a uzdignuće za slabinski dio podupire kralježnicu kilometar za kilometrom. Rezultat? Uspravno držanje, zdrava cirkulacija i sati sjedenja bez boli i ukočenosti.</p>
    </div>
    <div class="oj-media"><img src="<?php echo esc_url( $oj.'02.jpg' ); ?>" alt="NORIKS ErgoSit na uredskoj stolici" loading="lazy" onerror="this.style.display='none'"></div>
  </div>
</section>

<!-- ============ 4) Prilagođava se gdje god sjedite ============ -->
<section class="oj-sec oj-alt">
  <div class="oj-wrap oj-row2">
    <div class="oj-grid4">
      <img src="<?php echo esc_url( $oj.'03.jpg' ); ?>" alt="NORIKS ErgoSit na invalidskim kolicima" loading="lazy" onerror="this.style.display='none'">
      <img src="<?php echo esc_url( $oj.'04.jpg' ); ?>" alt="NORIKS ErgoSit u vozilu" loading="lazy" onerror="this.style.display='none'">
      <img src="<?php echo esc_url( $oj.'05.jpg' ); ?>" alt="NORIKS ErgoSit na uredskoj stolici" loading="lazy" onerror="this.style.display='none'">
      <img src="<?php echo esc_url( $oj.'06.jpg' ); ?>" alt="NORIKS ErgoSit u automobilu" loading="lazy" onerror="this.style.display='none'">
    </div>
    <div class="oj-copy">
      <h2 class="oj-h2">Olakšanje koje se prilagođava gdje god sjedite</h2>
      <p>NORIKS <strong>ErgoSit</strong> prilagođava se svakom mjestu na kojem sjedite. Stabilna baza protiv klizanja drži ga na mjestu na <strong>autosjedalima, uredskim stolicama, stolicama za blagovanje i invalidskim kolicima</strong> — pa udobnost ide s vama cijeli dan.</p>
      <p>Memory pjena visoke gustoće podupire tijelo bez splošnjavanja, dok periva navlaka koja se skida ostaje svježa, čista i spremna za svakodnevnu uporabu.</p>
    </div>
  </div>
</section>

<!-- ============ 5) Povjerenje + UGC recenzije (video) ============ -->
<section class="oj-trust">
  <div class="oj-wrap">
    <!--
      NAPOMENA: originalna referentna stranica ovdje prikazuje logotipe medija
      (People, USA Today, Healthline…) kao "kao viđeno u". To NAMJERNO nije
      preneseno da se NORIKS-u ne pripisuje lažna medijska podrška. Ako je NORIKS
      stvarno bio objavljen negdje, ubaci prave logotipe u traku ispod.
    -->
    <div class="oj-badges">
      <span class="oj-badge">OEKO-TEX® certificirano</span>
      <span class="oj-badge">Hipoalergeno</span>
      <span class="oj-badge">Periva navlaka</span>
      <span class="oj-badge">Ortopedski dizajn</span>
      <span class="oj-badge">60 dana jamstva povrata novca</span>
    </div>

    <h2 class="oj-h2 oj-center">Što kažu naši kupci</h2>
    <div class="oj-ugc-grid oj-ugc-6">
      <?php for ( $i = 1; $i <= 6; $i++ ) : ?>
        <div class="oj-ugc-item" data-src="<?php echo esc_url( $ojv.'rev-'.$i.'.mp4' ); ?>">
          <video class="oj-ugc-video" poster="<?php echo esc_url( $ojv.'rev-'.$i.'-poster.jpg' ); ?>" preload="none" playsinline></video>
          <span class="oj-ugc-play" aria-label="Reproduciraj"></span>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 6) Osmišljen s ortopedskim znanjem ============ -->
<section class="oj-sec">
  <div class="oj-wrap oj-row2">
    <div class="oj-media oj-media-badges">
      <img src="<?php echo esc_url( $oj.'07.jpg' ); ?>" alt="NORIKS ErgoSit — ortopedski dizajn" loading="lazy" onerror="this.style.display='none'">
    </div>
    <div class="oj-copy">
      <h2 class="oj-h2">Osmišljen s ortopedskim znanjem, stvoren za svakodnevno sjedenje</h2>
      <p>Uz uvid ortopedskih stručnjaka i mjesece ergonomskog testiranja, NORIKS <strong>ErgoSit</strong> osmišljen je da ublaži najčešće bolove uzrokovane dugim sjedenjem — od pritiska na trtici do nelagode u donjem dijelu leđa i kukovima.</p>
      <a class="oj-cta" href="#bundle-selector">👉 Naruči odmah</a>
    </div>
  </div>
</section>

<!-- ============ 7) Učinkovito protiv čestih problema (akordeon) ============ -->
<section class="oj-sec oj-alt">
  <div class="oj-wrap-narrow">
    <h2 class="oj-h2 oj-center"><em>Učinkovito protiv</em> čestih problema pri sjedenju</h2>
    <div class="oj-acc">
      <?php
      $oj_probs = array(
        array('Bol u trtici (trtična kost)','Izrez za trticu uklanja izravan pritisak na trtičnu kost pa sjedenje ostaje bezbolno i kad traje satima.'),
        array('Išijas i probadanje niz nogu','Ravnomjeran, konturiran oslonac rasterećuje išijasni živac i smanjuje probadajuću bol koja se širi niz nogu.'),
        array('Bol u donjem dijelu leđa','Uzdignuće za slabinski dio podupire prirodnu krivinu kralježnice i drži leđa uspravno umjesto povijeno.'),
        array('Utrnulost i oticanje nogu','Ravnomjerna raspodjela težine održava protok krvi pa noge ne utrnu ni tijekom dugih vožnji.'),
        array('Bol u SI zglobu i kukovima','Anatomski oblik stabilizira zdjelicu i rasterećuje sakroilijakalni zglob i kukove.'),
        array('Olakšanje za osjetljivo sjedenje','Mekana, prozračna memory pjena nježna je pri osjetljivom sjedenju i nakon dužih razdoblja mirovanja.'),
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

<!-- ============ 8) 20x jeftinije od skupih rješenja ============ -->
<section class="oj-sec">
  <div class="oj-wrap oj-row2">
    <div class="oj-media"><img src="<?php echo esc_url( $oj.'08.jpg' ); ?>" alt="Sjedi bolje, živi bolje — NORIKS ErgoSit" loading="lazy" onerror="this.style.display='none'"></div>
    <div class="oj-copy">
      <h2 class="oj-h2"><em>20× jeftinije</em> od skupih rješenja</h2>
      <p>Većina ljudi <strong>potroši tisuće</strong> pokušavajući riješiti bol od sjedenja:</p>
      <ul class="oj-x">
        <li><span>✕</span> Ergonomska stolica: <strong>150–1.200 €</strong></li>
        <li><span>✕</span> Tjedni odlasci kiropraktičaru: <strong>50–120 € po posjetu</strong></li>
        <li><span>✕</span> Fizikalna terapija: <strong>60 €+ po posjetu</strong>, često tjedni termina</li>
      </ul>
      <p><strong>NORIKS ErgoSit ortopedski jastuk</strong> — jednokratna kupnja koja ublažava bol u trtici, leđima i kukovima, a da ne isprazni novčanik.</p>
      <a class="oj-cta" href="#bundle-selector">Naruči odmah</a>
    </div>
  </div>
</section>

<!-- ============ 9) Jastuk koji ne odustaje (usporedba) ============ -->
<section class="oj-sec oj-alt">
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

<!-- ============ 10) 60 dana bez brige (tamna) ============ -->
<section class="oj-guarantee">
  <div class="oj-wrap oj-row2">
    <div class="oj-guar-badge"><img src="<?php echo esc_url( $oj.'badge-60.png' ); ?>" alt="60 dana jamstva povrata novca" loading="lazy" onerror="this.style.display='none'"><span class="oj-guar-fallback">60<small>DANA</small></span></div>
    <div class="oj-guar-copy">
      <h2 class="oj-h2 oj-h2-light">Isprobajte <em>60 dana</em>, bez brige</h2>
      <p>Pronaći pravi jastuk nije lako — mnogi splošnjaju ili jednostavno ne donesu pravo olakšanje. Zato svaki NORIKS <strong>ErgoSit</strong> dolazi s našim jamstvom udobnosti od 60 dana.</p>
      <p>Ponesite ga u ured, u auto ili za duge sate kod kuće. Ako ne osjetite manje boli i više udobnosti u svakodnevnom sjedenju, naš tim će se pobrinuti da bude kako treba.</p>
      <p>Jer kada je riječ o vašem zdravlju i udobnosti, vjerujemo da razliku trebate <strong>osjetiti</strong>, a ne samo priželjkivati.</p>
    </div>
  </div>
</section>

<style>
  .oj-wrap { max-width: 1120px; margin: 0 auto; padding: 0 18px; }
  .oj-wrap-narrow { max-width: 820px; margin: 0 auto; padding: 0 18px; }
  .oj-sec { padding: 46px 0; }
  .oj-alt { background: #f7f6fb; }
  .oj-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 44px; align-items: center; }
  .oj-h2 { font-size: clamp(24px,3vw,36px); font-weight: 800; color: #1b1533; line-height: 1.15; margin: 0 0 16px; }
  .oj-h2 em { color: #e5157e; font-style: normal; }
  .oj-h2-light { color: #fff; }
  .oj-center { text-align: center; }
  .oj-copy p { font-size: 15.5px; line-height: 1.6; color: #3a3450; margin: 0 0 14px; }
  .oj-lead { font-size: 16px; color: #55506b; }
  .oj-media img, .oj-grid4 img { width: 100%; height: auto; display: block; border-radius: 16px; }

  /* 1) Hero + marquee */
  .oj-hero { padding: 0 0 40px; }
  .oj-marquee { background: #1b1533; overflow: hidden; white-space: nowrap; }
  .oj-marquee-track { display: inline-block; padding: 13px 0; animation: ojScroll 26s linear infinite; }
  .oj-tick { color: #fff; font-weight: 800; font-size: 14px; letter-spacing: .06em; text-transform: uppercase; }
  .oj-dot { color: #e5157e; margin: 0 22px; font-weight: 800; }
  @keyframes ojScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }
  .oj-hero-h { text-align: center; font-size: clamp(26px,3.4vw,42px); font-weight: 800; color: #1b1533; line-height: 1.12; margin: 40px auto 12px; max-width: 900px; }
  .oj-hero-h em { color: #e5157e; font-style: italic; }
  .oj-hero-sub { text-align: center; font-size: 16px; color: #55506b; max-width: 660px; margin: 0 auto 30px; line-height: 1.55; }

  /* UGC video grid (klik = učitaj) */
  .oj-ugc-grid { display: grid; grid-template-columns: repeat(5,1fr); gap: 14px; }
  .oj-ugc-6 { grid-template-columns: repeat(6,1fr); max-width: 900px; margin: 0 auto; }
  .oj-ugc-item { position: relative; aspect-ratio: 9/16; border-radius: 12px; overflow: hidden; background: #1b1533; cursor: pointer; }
  .oj-ugc-item video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .oj-ugc-play { position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); width: 52px; height: 52px; border-radius: 50%; background: rgba(255,255,255,.92); }
  .oj-ugc-play::after { content: ""; position: absolute; top: 50%; left: 54%; transform: translate(-50%,-50%); border-style: solid; border-width: 10px 0 10px 17px; border-color: transparent transparent transparent #1b1533; }

  /* 4) grid od 4 slike */
  .oj-grid4 { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }

  /* 5) povjerenje */
  .oj-trust { padding: 44px 0; }
  .oj-badges { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin: 0 0 34px; }
  .oj-badge { background: #fbeaf3; border: 1px solid #f6cfe2; color: #b4126a; border-radius: 999px; padding: 8px 16px; font-size: 13px; font-weight: 700; }

  /* CTA */
  .oj-cta { display: inline-block; background: #1b1533; color: #fff; font-weight: 800; font-size: 15px; padding: 14px 30px; border-radius: 10px; text-decoration: none; margin-top: 6px; }
  .oj-cta:hover { background: #e5157e; }

  /* 7) akordeon */
  .oj-acc { margin-top: 22px; }
  .oj-acc-item { border-bottom: 1px solid #e7e3f0; }
  .oj-acc-head { width: 100%; background: none; border: 0; display: flex; align-items: center; gap: 12px; padding: 16px 4px; cursor: pointer; font-size: 16px; font-weight: 700; color: #1b1533; text-align: left; }
  .oj-acc-tick { color: #22b573; font-weight: 800; }
  .oj-acc-title { flex: 1; }
  .oj-acc-chev { transition: transform .2s; color: #9a93ad; }
  .oj-acc-item.open .oj-acc-chev { transform: rotate(180deg); }
  .oj-acc-body { max-height: 0; overflow: hidden; transition: max-height .25s ease; }
  .oj-acc-item.open .oj-acc-body { max-height: 240px; }
  .oj-acc-body p { font-size: 14.5px; line-height: 1.6; color: #4a4560; margin: 0 0 16px; padding-left: 28px; }

  /* 8) X lista */
  .oj-x { list-style: none; margin: 0 0 16px; padding: 0; }
  .oj-x li { font-size: 15px; color: #3a3450; margin: 0 0 10px; }
  .oj-x li span { color: #d64545; font-weight: 800; margin-right: 8px; }

  /* 9) usporedna tablica */
  .oj-cmp-scroll { overflow-x: auto; border-radius: 16px; box-shadow: 0 10px 30px rgba(27,21,51,.12); }
  .oj-cmp { width: 100%; border-collapse: collapse; min-width: 340px; background: #fff; }
  .oj-cmp th, .oj-cmp td { padding: 15px 14px; text-align: center; font-size: 14px; border-bottom: 1px solid #eee; }
  .oj-cmp thead th { font-weight: 800; color: #1b1533; font-size: 13px; }
  .oj-cmp thead th.oj-us { background: #e5157e; color: #fff; border-radius: 12px 12px 0 0; }
  .oj-cmp tbody td:first-child { text-align: left; font-weight: 600; color: #1b1533; }
  .oj-cmp td.us { background: #fdeef6; }
  .oj-cmp td.ok { color: #1a9e5f; font-size: 18px; font-weight: 700; }
  .oj-cmp td.no { color: #d64545; font-size: 17px; }

  /* 10) jamstvo (tamna) */
  .oj-guarantee { background: #1b1533; padding: 50px 0; }
  .oj-guar-copy p { color: #cfc9e0; font-size: 15px; line-height: 1.6; margin: 0 0 12px; }
  .oj-guar-badge { text-align: center; }
  .oj-guar-badge img { width: 220px; max-width: 100%; height: auto; margin: 0 auto; }
  .oj-guar-fallback { display: none; width: 180px; height: 180px; border-radius: 50%; background: #fff; color: #e5157e; font-weight: 800; font-size: 60px; line-height: 1; align-items: center; justify-content: center; flex-direction: column; margin: 0 auto; }
  .oj-guar-fallback small { display: block; font-size: 20px; color: #1b1533; letter-spacing: .1em; }

  @media (max-width: 860px) {
    .oj-row2 { grid-template-columns: 1fr; gap: 24px; }
    .oj-ugc-grid { grid-template-columns: repeat(3,1fr); }
    .oj-ugc-6 { grid-template-columns: repeat(3,1fr); }
    .oj-row2 .oj-media, .oj-row2 .oj-grid4 { order: -1; }
    .oj-guarantee .oj-guar-badge { order: -1; }
  }

  /* No-attrs: sakrij "Tablica veličina" ako se negdje pojavi */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap, #open-size-chart, #open-size-chartCustom { display: none !important; }
</style>

<script>
(function(){
  /* Akordeon */
  document.querySelectorAll('.oj-acc-head').forEach(function(btn){
    btn.addEventListener('click', function(){
      var item = btn.closest('.oj-acc-item');
      var open = item.classList.toggle('open');
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  });
  /* UGC video: učitaj i pusti na klik */
  document.querySelectorAll('.oj-ugc-item').forEach(function(item){
    item.addEventListener('click', function(){
      if (item.dataset.loaded) return; item.dataset.loaded = '1';
      var play = item.querySelector('.oj-ugc-play'); if (play) play.remove();
      var v = item.querySelector('.oj-ugc-video'); if (!v) return;
      v.src = item.dataset.src; v.controls = true; v.autoplay = true; v.playsInline = true; v.preload = 'auto';
      var p = v.play(); if (p && p.catch) p.catch(function(){});
    });
  });
  /* Ako poster ne postoji, sakrij prazan video item da ne stoji crna rupa */
  document.querySelectorAll('.oj-ugc-video').forEach(function(v){
    var img = new Image(); img.onerror = function(){ var it = v.closest('.oj-ugc-item'); if(it) it.style.display='none'; }; img.src = v.getAttribute('poster') || '';
  });
  /* 60-day badge fallback */
  document.querySelectorAll('.oj-guar-badge img').forEach(function(img){
    img.addEventListener('error', function(){ var fb = img.parentNode.querySelector('.oj-guar-fallback'); if(fb) fb.style.display='inline-flex'; });
  });
  /* Glatki scroll za CTA na bundle */
  document.querySelectorAll('a.oj-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
