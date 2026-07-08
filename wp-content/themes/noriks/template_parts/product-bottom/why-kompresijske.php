<!-- product-bottom: KOMPRESIJSKE NOGAVICE (kompresijske-nogavice) -->
<?php
// Images live in the theme's /img/ folder. Drop these 3 files there:
//   wp-content/themes/noriks/img/kompresijske-1.jpg
//   wp-content/themes/noriks/img/kompresijske-2.jpg
//   wp-content/themes/noriks/img/kompresijske-3.jpg
// Until a file exists, a neutral placeholder is shown.
// Drop the images into wp-content/themes/noriks/img/ named so they start
// with "kompresijske" (e.g. kompresijske-1.jpg, kompresijske-2.jpg ...).
// Any of jpg/jpeg/png/webp works; they are used in sorted order.
$kn_dir_path = get_template_directory() . '/img/';
$kn_dir_uri  = get_template_directory_uri() . '/img/';

$kn_matches = glob( $kn_dir_path . 'kompresijske*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE );
$kn_matches = is_array( $kn_matches ) ? $kn_matches : array();
sort( $kn_matches );

$kn_url = function( $i ) use ( $kn_matches, $kn_dir_uri ) {
    return isset( $kn_matches[ $i ] ) ? ( $kn_dir_uri . rawurlencode( basename( $kn_matches[ $i ] ) ) ) : '';
};
$kn_img_1 = $kn_url( 0 );
$kn_img_2 = $kn_url( 1 );
$kn_img_3 = $kn_url( 2 );

$kn_placeholder = '<div style="width:100%;aspect-ratio:1/1;background:#f1f1f1;"></div>';
?>

<section class="why-section">
  <div style="max-width: 1440px;" class="container why-container">

    <!-- Left media -->
    <div class="why-col">
      <div class="video-wrapper">
        <?php if ( $kn_img_1 ) : ?>
          <img loading="lazy" decoding="async" style="width:100%; aspect-ratio:1/1; object-fit:cover;" src="<?php echo esc_url( $kn_img_1 ); ?>" alt="Kompresijske nogavice">
        <?php else : echo $kn_placeholder; endif; ?>
      </div>
    </div>

    <!-- Right content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
        ZAŠTO KOMPRESIJSKE NOGAVICE?
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Bolja cirkulacija, manje umora</strong></p>
        <p class="description">Postupna kompresija nježno potiče protok krvi prema srcu, smanjuje osjećaj težine i umora u nogama te pomaže da noge ostanu lagane i kroz najduži dan.</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Manje oticanja</strong></p>
        <p class="description">Idealne za duga putovanja, dugo stajanje ili sjedenje. Ravnomjeran pritisak smanjuje zadržavanje tekućine i oticanje gležnjeva i listova.</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Podrška koja se osjeti</strong></p>
        <p class="description">Anatomski kroj drži nogavicu na mjestu, bez stezanja na vrhu. Osjećaj čvrste, ali ugodne podrške tijekom cijelog dana.</p>
      </div>
    </div>

  </div>
</section>

<section style="background: white;" class="why-section">
  <div style="max-width: 1440px;" class="container why-container">

    <!-- Left media -->
    <div class="why-col">
      <div class="video-wrapper">
        <?php if ( $kn_img_2 ) : ?>
          <img loading="lazy" decoding="async" style="width:100%; aspect-ratio:1/1; object-fit:cover;" src="<?php echo esc_url( $kn_img_2 ); ?>" alt="Kompresijske nogavice - sport">
        <?php else : echo $kn_placeholder; endif; ?>
      </div>
    </div>

    <!-- Right content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
        ZA SPORT, RAD I OPORAVAK
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Više energije tijekom aktivnosti</strong></p>
        <p class="description">Kompresija podupire mišiće i smanjuje vibracije tijekom trčanja, treninga ili dugog hodanja — manje zamora, više izdržljivosti.</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p class="description">
          ✅ Brži oporavak nakon treninga <br/>
          ✅ Manje grčeva i težine u nogama <br/>
          ✅ Savršene za posao na nogama i putovanja
        </p>
      </div>
    </div>

  </div>
</section>

<section class="why-section">
  <div style="max-width: 1440px;" class="container why-container">

    <!-- Left media -->
    <div class="why-col">
      <div class="video-wrapper">
        <?php if ( $kn_img_3 ) : ?>
          <img loading="lazy" decoding="async" style="width:100%; aspect-ratio:1/1; object-fit:cover;" src="<?php echo esc_url( $kn_img_3 ); ?>" alt="Kompresijske nogavice - materijal">
        <?php else : echo $kn_placeholder; endif; ?>
      </div>
    </div>

    <!-- Right content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
        UDOBNOST KOJA TRAJE
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Prozračan, mekan materijal</strong></p>
        <p class="description">Prozračno tkanje odvodi vlagu i drži stopala suhima, a mekana pletiva ne žuljaju i ne stežu — ugodne za nošenje od jutra do večeri.</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Ojačana peta i prsti</strong></p>
        <p class="description">Pojačane zone na peti i prstima produžuju trajnost, a ravni šav sprječava nadražaje. Kvaliteta koja se osjeti već pri prvom nošenju.</p>
      </div>
    </div>

  </div>
</section>

<!-- Usporedba: NORIKS vs ostali -->
<section class="why-section knc-compare-section">
  <div class="knc-compare-wrap">
    <h2 class="knc-compare-title">NORIKS vs ostali</h2>
    <div class="knc-table-scroll">
      <table class="knc-table">
        <thead>
          <tr>
            <th class="knc-feat"></th>
            <th class="knc-comp">Klasične čarape<span>(Bauerfeind, medi…)</span></th>
            <th class="knc-comp">TV-čarape<span>(Zip Sox &amp; Co.)</span></th>
            <th class="knc-us">NORIKS<em class="knc-badge">Br. 1</em></th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Medicinska kompresija</td><td class="ok">✓</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr><td>Patentni zatvarač za jednostavno obuvanje</td><td class="no">✕</td><td class="ok">✓</td><td class="us ok">✓</td></tr>
          <tr><td>Samostalno obuvanje bez pomoći</td><td class="no">✕</td><td class="mid">~</td><td class="us ok">✓</td></tr>
          <tr><td>Ojačani zatvarač, nikad se ne zaglavi</td><td class="mid">—</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr><td>Prozračna tkanina</td><td class="mid">~</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr><td>Udobnost cijeli dan (+12 sati)</td><td class="mid">~</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr><td>Jamstvo povrata novca 60 dana</td><td class="no">✕</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr class="knc-price"><td>Cijena po paru</td><td>od 85 €</td><td>~15 €</td><td class="us">od 29,90 €</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<style>
  .knc-compare-section { background:#fff; padding:30px 0 40px; }
  .knc-compare-wrap { max-width:1000px; margin:0 auto; padding:0 16px; }
  .knc-compare-title { text-align:center; font-size:clamp(24px,3vw,34px); font-weight:700; color:#12305a; margin:0 0 22px; }
  .knc-table-scroll { overflow-x:auto; }
  .knc-table { width:100%; border-collapse:collapse; min-width:560px; }
  .knc-table th, .knc-table td { padding:14px 10px; text-align:center; font-size:15px; }
  .knc-table thead th { color:#fff; font-weight:700; vertical-align:middle; }
  .knc-table .knc-feat { background:transparent; }
  .knc-table .knc-comp { background:#12305a; }
  .knc-table .knc-comp span { display:block; font-weight:400; font-size:12px; opacity:.85; margin-top:2px; }
  .knc-table .knc-us { background:#d64525; position:relative; border-top-left-radius:10px; border-top-right-radius:10px; }
  .knc-badge { display:inline-block; margin-top:6px; background:#fff; color:#d64525; font-style:normal; font-weight:700; font-size:11px; padding:2px 10px; border-radius:999px; }
  .knc-table tbody td:first-child { text-align:left; font-weight:600; color:#12305a; }
  .knc-table tbody tr { border-bottom:1px solid #eef0f4; }
  .knc-table td.ok { color:#1a9e5f; font-size:18px; font-weight:700; }
  .knc-table td.no { color:#c9c9c9; font-size:18px; }
  .knc-table td.mid { color:#c79a2e; font-size:18px; }
  .knc-table td.us { background:#fdefe9; }
  .knc-table td.us.ok { color:#1a9e5f; }
  .knc-table .knc-price td { font-weight:700; }
  .knc-table .knc-price td.us { color:#d64525; }
  .knc-table tbody tr:last-child td.us { border-bottom-left-radius:10px; border-bottom-right-radius:10px; }
  @media (max-width:600px){ .knc-table th, .knc-table td { padding:11px 6px; font-size:13px; } .knc-table tbody td:first-child{ font-size:12.5px; } }
</style>

<?php $knv = get_template_directory_uri() . '/img/kompresijske-videos/'; ?>

<!-- Kako funkcionira u praksi (product demo videos, autoplay on view) -->
<section class="why-section knc-demo">
  <div class="knc-demo-wrap">
    <h2 class="knc-demo-title">Kako to funkcionira u praksi</h2>
    <div class="knc-demo-grid">
      <video class="knc-lazyvid" data-src="<?php echo esc_url( $knv ); ?>demo-1.mp4" poster="<?php echo esc_url( $knv ); ?>demo-1-poster.jpg" muted loop playsinline preload="none"></video>
      <video class="knc-lazyvid" data-src="<?php echo esc_url( $knv ); ?>demo-2.mp4" poster="<?php echo esc_url( $knv ); ?>demo-2-poster.jpg" muted loop playsinline preload="none"></video>
      <video class="knc-lazyvid" data-src="<?php echo esc_url( $knv ); ?>demo-3.mp4" poster="<?php echo esc_url( $knv ); ?>demo-3-poster.jpg" muted loop playsinline preload="none"></video>
      <video class="knc-lazyvid" data-src="<?php echo esc_url( $knv ); ?>demo-4.mp4" poster="<?php echo esc_url( $knv ); ?>demo-4-poster.jpg" muted loop playsinline preload="none"></video>
    </div>
  </div>
</section>

<!-- Što kažu naši kupci (UGC testimonial videos, load on click) -->
<section class="why-section knc-ugc">
  <div class="knc-ugc-wrap">
    <h2 class="knc-ugc-title">Što kažu naši kupci</h2>
    <div class="knc-ugc-grid">
      <div class="knc-ugc-item" data-src="<?php echo esc_url( $knv ); ?>review-1.mp4"><video class="knc-ugc-video" poster="<?php echo esc_url( $knv ); ?>review-1-poster.jpg" preload="none" playsinline></video><span class="knc-ugc-play" aria-label="Play"></span></div>
      <div class="knc-ugc-item" data-src="<?php echo esc_url( $knv ); ?>review-2.mp4"><video class="knc-ugc-video" poster="<?php echo esc_url( $knv ); ?>review-2-poster.jpg" preload="none" playsinline></video><span class="knc-ugc-play" aria-label="Play"></span></div>
      <div class="knc-ugc-item" data-src="<?php echo esc_url( $knv ); ?>review-3.mp4"><video class="knc-ugc-video" poster="<?php echo esc_url( $knv ); ?>review-3-poster.jpg" preload="none" playsinline></video><span class="knc-ugc-play" aria-label="Play"></span></div>
    </div>
  </div>
</section>

<style>
  .knc-demo { background:#fff; padding:30px 0 22px; }
  .knc-demo-wrap, .knc-ugc-wrap { max-width:1100px; margin:0 auto; padding:0 16px; }
  .knc-demo-title { text-align:center; font-size:clamp(22px,3vw,30px); font-weight:700; color:#222; margin:0 0 22px; }
  .knc-demo-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:14px; }
  .knc-lazyvid { width:100%; aspect-ratio:9/16; object-fit:cover; border-radius:14px; background:#eceae4; display:block; }
  .knc-ugc { background:#12305a; padding:34px 0 42px; }
  .knc-ugc-title { text-align:center; font-size:clamp(22px,3vw,30px); font-weight:700; color:#fff; margin:0 0 24px; }
  .knc-ugc-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:18px; max-width:820px; margin:0 auto; }
  .knc-ugc-item { position:relative; aspect-ratio:9/16; border-radius:14px; overflow:hidden; background:#0d2444; cursor:pointer; }
  .knc-ugc-item video { width:100%; height:100%; object-fit:cover; display:block; }
  .knc-ugc-play { position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:56px; height:56px; border-radius:50%; background:rgba(255,255,255,.92); }
  .knc-ugc-play::after { content:""; position:absolute; top:50%; left:54%; transform:translate(-50%,-50%); border-style:solid; border-width:11px 0 11px 18px; border-color:transparent transparent transparent #12305a; }
  @media (max-width:768px){
    .knc-demo-grid { grid-template-columns:repeat(2,1fr); gap:10px; }
  }
  @media (max-width:560px){
    .knc-ugc-grid { grid-template-columns:1fr; max-width:320px; }
  }
</style>

<script>
(function(){
  var lazy = document.querySelectorAll('.knc-lazyvid');
  if ('IntersectionObserver' in window && lazy.length){
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(en){
        var v = en.target;
        if (en.isIntersecting){
          if (!v.src){ v.src = v.dataset.src; }
          var p = v.play(); if (p && p.catch) p.catch(function(){});
        } else { v.pause(); }
      });
    }, { threshold:0.25 });
    lazy.forEach(function(v){ io.observe(v); });
  } else {
    lazy.forEach(function(v){ if(!v.src){ v.src = v.dataset.src; v.play&&v.play(); } });
  }
  document.querySelectorAll('.knc-ugc-item').forEach(function(item){
    item.addEventListener('click', function(){
      if (item.dataset.loaded) return;
      item.dataset.loaded = '1';
      var play = item.querySelector('.knc-ugc-play'); if (play) play.remove();
      var v = item.querySelector('.knc-ugc-video');
      if (!v){ v = document.createElement('video'); v.className = 'knc-ugc-video'; item.appendChild(v); }
      v.src = item.dataset.src; v.controls = true; v.autoplay = true; v.playsInline = true; v.preload = 'auto';
      var p = v.play(); if (p && p.catch) p.catch(function(){});
    });
  });
})();
</script>
