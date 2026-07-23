<?php
/**
 * product-bottom: NORIKS ErgoSit — ORTOPEDSKI JASTUK ZA SJEDENJE (orto-ortopedski-jastuk)
 * No-attrs proizvod (bez boje/veličine), quantity-only bundle. "Tablica veličina" sakrivena.
 * Dizajn: lokalizirane HR grafike (svaka slika = sekcija) + UGC videi. Boja bundle gumba: pink #e5157e.
 * Foto-grafike: img/ortopedski-jastuk/  |  Videi: img/ortopedski-jastuk/videos/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$oj  = get_template_directory_uri() . '/img/ortopedski-jastuk/';
$ojv = get_template_directory_uri() . '/img/ortopedski-jastuk/videos/';
?>

<!-- ============ Marquee ============ -->
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
  </div>
</section>

<!-- ============ UGC videi ============ -->
<section class="oj-ugc-sec">
  <div class="oj-wrap">
    <h2 class="oj-h2 oj-center">Što kažu naši kupci</h2>
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

<!-- ============ Lokalizirane sekcije (svaka slika = sekcija) ============ -->
<section class="oj-imgs">
  <?php
  $oj_imgs = array(
    '02_bolecine_HR.png'      => 'Sjedite satima bez boli i ukočenosti',
    '03_embalaza_HR.png'      => 'NORIKS ErgoSit ortopedski jastuk',
    '04_lijecnik_HR.png'      => 'Osmišljen s ortopedskim znanjem',
    '05_drzanje_HR.png'       => 'Bolje držanje i cirkulacija',
    '06_znanost_HR.png'       => 'Znanost iza udobnosti',
    '07_lifestyle_HR.png'     => 'Olakšanje gdje god sjedite',
    '08_lifestyle_HR.png'     => 'Udobnost u autu, uredu i kod kuće',
    '09_lifestyle_HR.png'     => 'Prilagođava se svakom sjedalu',
    '10_MERE_cm_HR.png'       => 'Dimenzije NORIKS ErgoSit jastuka',
    '11_vsebina_HR.png'       => 'Što dobivate u paketu',
    '14_vsebina_HR.png'       => 'NORIKS ErgoSit — sadržaj',
    '15_znacka_60_dana_HR.png'=> '60 dana jamstva povrata novca',
  );
  foreach ( $oj_imgs as $file => $alt ) : ?>
    <div class="oj-img-row">
      <img src="<?php echo esc_url( $oj.$file ); ?>" alt="<?php echo esc_attr( $alt ); ?>" loading="lazy" onerror="this.closest('.oj-img-row').style.display='none';">
    </div>
  <?php endforeach; ?>
  <div class="oj-cta-wrap"><a class="oj-cta" href="#bundle-selector">👉 Naruči odmah</a></div>
</section>

<style>
  .oj-wrap { max-width: 1000px; margin: 0 auto; padding: 0 16px; }
  .oj-h2 { font-size: clamp(23px,3vw,32px); font-weight: 800; color: #1b1533; line-height: 1.15; margin: 0 0 20px; }
  .oj-center { text-align: center; }

  /* Marquee + hero */
  .oj-hero { padding: 0 0 26px; }
  .oj-marquee { background: #1b1533; overflow: hidden; white-space: nowrap; }
  .oj-marquee-track { display: inline-block; padding: 13px 0; animation: ojScroll 26s linear infinite; }
  .oj-tick { color: #fff; font-weight: 800; font-size: 14px; letter-spacing: .06em; text-transform: uppercase; }
  .oj-dot { color: #e5157e; margin: 0 22px; font-weight: 800; }
  @keyframes ojScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }
  .oj-hero-h { text-align: center; font-size: clamp(26px,3.4vw,42px); font-weight: 800; color: #1b1533; line-height: 1.12; margin: 34px auto 12px; max-width: 900px; }
  .oj-hero-h em { color: #e5157e; font-style: italic; }
  .oj-hero-sub { text-align: center; font-size: 16px; color: #55506b; max-width: 660px; margin: 0 auto; line-height: 1.55; }

  /* UGC videi */
  .oj-ugc-sec { padding: 34px 0; }
  .oj-ugc-grid { display: grid; grid-template-columns: repeat(6,1fr); gap: 12px; }
  .oj-ugc-item { position: relative; aspect-ratio: 9/16; border-radius: 12px; overflow: hidden; background: #1b1533; cursor: pointer; }
  .oj-ugc-item video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .oj-ugc-play { position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); width: 50px; height: 50px; border-radius: 50%; background: rgba(255,255,255,.92); }
  .oj-ugc-play::after { content: ""; position: absolute; top: 50%; left: 54%; transform: translate(-50%,-50%); border-style: solid; border-width: 10px 0 10px 16px; border-color: transparent transparent transparent #1b1533; }

  /* Lokalizirane slike-sekcije */
  .oj-imgs { padding: 6px 0 8px; }
  .oj-img-row { max-width: 1000px; margin: 0 auto; padding: 8px 16px; }
  .oj-img-row img { width: 100%; height: auto; display: block; border-radius: 16px; }

  /* CTA */
  .oj-cta-wrap { text-align: center; margin: 22px 0 8px; }
  .oj-cta { display: inline-block; background: #e5157e; color: #fff; font-weight: 800; font-size: 16px; padding: 15px 34px; border-radius: 10px; text-decoration: none; }
  .oj-cta:hover { background: #1b1533; }

  /* Bundle gumbi u PINK boji (iz slike) umjesto narančastih */
  #bundle-selector .bundle-option.active { border-color: #e5157e !important; background: rgba(229,21,126,0.07) !important; }
  #bundle-selector .bundle-box select { border-color: #e5157e !important; }

  @media (max-width: 760px) {
    .oj-ugc-grid { grid-template-columns: repeat(3,1fr); }
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
  function bindOj(){
    var sel = document.getElementById('bundle-selector'); if(!sel) return;
    paintOj();
    sel.querySelectorAll('input[name="bundle_option"]').forEach(function(r){ r.addEventListener('change', paintOj); });
  }
  if(document.readyState==='loading'){ document.addEventListener('DOMContentLoaded', bindOj); } else { bindOj(); }

  /* UGC video: prikaži prvi kadar, klik = pusti sa zvukom */
  document.querySelectorAll('.oj-ugc-item').forEach(function(item){
    var v = item.querySelector('.oj-ugc-video'); if(!v) return;
    v.src = item.dataset.src;
    item.addEventListener('click', function(){
      if (item.dataset.loaded) { return; }
      item.dataset.loaded = '1';
      var play = item.querySelector('.oj-ugc-play'); if (play) play.remove();
      v.muted = false; v.controls = true; v.playsInline = true;
      var p = v.play(); if (p && p.catch) p.catch(function(){});
    });
  });

  /* Glatki scroll za CTA */
  document.querySelectorAll('a.oj-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
