<?php
/**
 * product-bottom: NOSILJKA (orto-nosilka) — Bambelle sling carrier.
 * Kopija en-bambelle.noriks.com/product/toddler-sling-carrier sekcija, HR prijevod.
 * Redoslijed (original):
 *   1. No More Tired Arms or Back Pain!  (tekst L / slika D)
 *   2. Built For Convenience             (slika L / tekst D)
 *   3. Join Our Sling Community!         (tekst L / kolaz D)
 * Slike: img/nosilka/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$ns = get_template_directory_uri() . '/img/nosilka/';
$ns_img = function( $file, $alt ) use ( $ns ) {
  return '<img src="'.esc_url($ns.$file).'" alt="'.esc_attr($alt).'" loading="lazy" onerror="this.style.display=\'none\'">';
};
?>

<!-- ============ 1) Nikad vise umornih ruku — tekst LIJEVO, slika DESNO ============ -->
<section class="nsl-sec">
  <div class="nsl-wrap nsl-row2">
    <div class="nsl-copy">
      <h2 class="nsl-h2">Nikad više umornih ruku i bolova u leđima!</h2>
      <p>Cjelodnevno nošenje bebe koja traži naručje brzo iscrpljuje… <strong>Bolne ruke, umorna ramena, bol u leđima</strong> — i nikad slobodnih ruku.</p>
      <p>NORIKS <strong>BabyGo nosiljka</strong> <strong>ravnomjerno raspoređuje težinu</strong> pa se roditelji mogu slobodno kretati bez naprezanja. Najlakši je način da ostanete blizu — i <strong>bez boli</strong>!</p>
    </div>
    <div class="nsl-media"><?php echo $ns_img('01-ruke-leda.png','Nosiljka — bez umornih ruku i bolova u leđima'); ?></div>
  </div>
</section>

<!-- ============ 2) Stvorena za prakticnost — slika LIJEVO, tekst DESNO ============ -->
<section class="nsl-sec nsl-alt">
  <div class="nsl-wrap nsl-row2">
    <div class="nsl-media"><?php echo $ns_img('02-prakticnost.png','Nosiljka u svakodnevici — kupovina s bebom'); ?></div>
    <div class="nsl-copy">
      <h2 class="nsl-h2">Stvorena za praktičnost</h2>
      <p>Kad beba želi biti u naručju, a život ne staje — tu uskače nosiljka.</p>
      <p>BabyGo drži vašeg mališana priljubljenog uz vas, dok vi možete <strong>kupovati, kuhati, pospremati ili jednostavno popiti svoju kavu.</strong></p>
    </div>
  </div>
</section>

<!-- ============ 3) Pridruzite se zajednici — tekst LIJEVO, kolaz DESNO ============ -->
<section class="nsl-sec">
  <div class="nsl-wrap nsl-row2">
    <div class="nsl-copy">
      <h2 class="nsl-h2">Pridružite se našoj zajednici!</h2>
      <p>Ostanite blizu, krećite se slobodno i otkrijte zašto <strong>tisuće roditelja</strong> oduševljeno priča o nosiljci koja im je promijenila svakodnevicu.</p>
    </div>
    <div class="nsl-media"><?php echo $ns_img('03-zajednica.png','Tisuće zadovoljnih roditelja — nosiljka zajednica'); ?></div>
  </div>
</section>

<!-- ============ 4) Galerija — full-bleed drseca traka (17 fotk zajednice) ============ -->
<section class="nsl-gal-sec">
  <div class="nsl-gal">
    <div class="nsl-gal-track">
      <?php for ( $r = 0; $r < 2; $r++ ) : for ( $i = 1; $i <= 17; $i++ ) : ?>
        <img src="<?php echo esc_url( $ns.'galerija/g'.$i.'.jpg' ); ?>" alt="NORIKS BabyGo — zadovoljni roditelji" loading="lazy" onerror="this.style.display='none'">
      <?php endfor; endfor; ?>
    </div>
  </div>
</section>

<style>
  .nsl-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; } /* isti container kao gornji .product */
  .nsl-sec { padding: 60px 0; }
  .nsl-alt { background: #f5f8fb; }
  .nsl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  .nsl-h2 { font-size: clamp(26px,3.2vw,40px); font-weight: 800; color: #20283a; line-height: 1.12; margin: 0 0 16px; }
  .nsl-copy p { font-size: 15.5px; line-height: 1.65; color: #3c4354; margin: 0 0 14px; }
  .nsl-media img { width: 100%; height: auto; display: block; border-radius: 18px; box-shadow: 0 14px 40px rgba(32,40,58,.10); }

  /* 4) galerija — full-bleed, pocasno drsenje, pauza na hover */
  .nsl-gal-sec { padding: 10px 0 40px; }
  .nsl-gal { overflow: hidden; width: 100vw; margin-left: calc(50% - 50vw); }
  .nsl-gal-track { display: flex; gap: 8px; width: max-content; animation: nslGal 70s linear infinite; }
  .nsl-gal:hover .nsl-gal-track { animation-play-state: paused; }
  .nsl-gal-track img { width: 210px; aspect-ratio: 3/4; object-fit: cover; border-radius: 10px; display: block; flex: 0 0 auto; }
  @keyframes nslGal { from { transform: translateX(0); } to { transform: translateX(-50%); } }

  @media (max-width: 860px) {
    .nsl-sec { padding: 30px 0; }
    .nsl-row2 { grid-template-columns: 1fr; gap: 18px; }
    .nsl-row2 .nsl-media { order: -1; }
    .nsl-h2 { font-size: 2rem; }
    .nsl-gal-track img { width: 150px; }
    .nsl-gal-sec { padding: 6px 0 24px; }
  }
</style>
