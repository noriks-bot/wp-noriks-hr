<?php
/**
 * product-bottom: NOSILJKA (orto-nosilka) — NORIKS BabyGo sling carrier.
 * Sekcije po en-bambelle referenci, HR prijevod, obogaceni prodajni copy.
 * Redoslijed:
 *   1. Galerija traka (g1–g9, full-bleed, drseca)      — PRVA sekcija
 *   2. Nikad vise umornih ruku  (tekst L / slika D)
 *   3. Stvorena za prakticnost  (slika L / tekst D)
 *   4. Pridruzite se zajednici  (tekst L / kolaz D) + CTA
 *   5. Galerija traka (g10–g17, full-bleed, drseca)    — ZADNJA sekcija
 * Slike: img/nosilka/ (+ /galerija/)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$ns = get_template_directory_uri() . '/img/nosilka/';
$ns_img = function( $file, $alt ) use ( $ns ) {
  return '<img src="'.esc_url($ns.$file).'" alt="'.esc_attr($alt).'" loading="lazy" onerror="this.style.display=\'none\'">';
};
?>

<!-- ============ 1) Galerija — PRVA traka (g1–g9) ============ -->
<section class="nsl-gal-sec nsl-gal-top">
  <div class="nsl-gal">
    <div class="nsl-gal-track">
      <?php for ( $r = 0; $r < 2; $r++ ) : for ( $i = 1; $i <= 9; $i++ ) : ?>
        <img src="<?php echo esc_url( $ns.'galerija/g'.$i.'.jpg' ); ?>" alt="NORIKS BabyGo — roditelji i bebe" loading="lazy" onerror="this.style.display='none'">
      <?php endfor; endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 2) Nikad vise umornih ruku — tekst LIJEVO, slika DESNO ============ -->
<section class="nsl-sec">
  <div class="nsl-wrap nsl-row2">
    <div class="nsl-copy">
      <h2 class="nsl-h2">Nikad više umornih ruku i bolova u leđima!</h2>
      <p>Cjelodnevno nošenje bebe koja traži naručje brzo iscrpljuje… <strong>Bolne ruke, umorna ramena, bol u leđima</strong> — i nikad slobodnih ruku.</p>
      <p>NORIKS <strong>BabyGo nosiljka</strong> <strong>ravnomjerno raspoređuje težinu</strong> preko ramena i leđa, pa se roditelji mogu slobodno kretati bez naprezanja. Najlakši je način da ostanete blizu — i <strong>bez boli</strong>!</p>
      <p>Zamislite dan u kojem beba ima svu bliskost koju treba, a vi imate <strong>slobodne ruke i leđa koja ne bole</strong>. Upravo to BabyGo omogućuje tisućama roditelja — svaki dan.</p>
    </div>
    <div class="nsl-media"><?php echo $ns_img('01-ruke-leda.png','Nosiljka — bez umornih ruku i bolova u leđima'); ?></div>
  </div>
</section>

<!-- ============ 3) Stvorena za prakticnost — slika LIJEVO, tekst DESNO ============ -->
<section class="nsl-sec nsl-alt">
  <div class="nsl-wrap nsl-row2">
    <div class="nsl-media"><?php echo $ns_img('02-prakticnost.png','Nosiljka u svakodnevici — kupovina s bebom'); ?></div>
    <div class="nsl-copy">
      <h2 class="nsl-h2">Stvorena za praktičnost</h2>
      <p>Kad beba želi biti u naručju, a život ne staje — tu uskače BabyGo.</p>
      <p>Drži vašeg mališana priljubljenog uz vas, dok vi možete <strong>kupovati, kuhati, pospremati ili jednostavno popiti svoju kavu.</strong></p>
      <p>Lagana je, stane u svaku torbu i navuče se u <strong>nekoliko sekundi</strong> — bez kompliciranih kopči i podešavanja. Od jutarnje kave do večernje šetnje, BabyGo je uvijek spremna kad je vaša beba zatraži.</p>
    </div>
  </div>
</section>

<!-- ============ 4) Pridruzite se zajednici — tekst LIJEVO, kolaz DESNO + CTA ============ -->
<section class="nsl-sec">
  <div class="nsl-wrap nsl-row2">
    <div class="nsl-copy">
      <h2 class="nsl-h2">Pridružite se našoj zajednici!</h2>
      <p><strong>Tisuće mama i tata</strong> više ne izlazi iz kuće bez svoje BabyGo nosiljke — a razlog je jednostavan: beba je <strong>smirena i priljubljena uz vas</strong>, a vi napokon živite svoj dan.</p>
      <p>Manje plača, više zagrljaja. Manje boli u leđima, više slobode. Pridružite se roditeljima koji su svakodnevicu pretvorili iz žongliranja s bebom u naručju — u <strong>mirne šetnje, obavljene poslove i popijene tople kave</strong>.</p>
      <p>Vaše će vam ruke zahvaliti. Vaša beba još i više.</p>
      <a class="nsl-cta" href="#bundle-selector">Naruči svoju BabyGo nosiljku</a>
    </div>
    <div class="nsl-media"><?php echo $ns_img('03-zajednica.png','Tisuće zadovoljnih roditelja — nosiljka zajednica'); ?></div>
  </div>
</section>

<!-- ============ 5) Galerija — ZADNJA traka (g10–g17) ============ -->
<section class="nsl-gal-sec">
  <div class="nsl-gal">
    <div class="nsl-gal-track">
      <?php for ( $r = 0; $r < 2; $r++ ) : for ( $i = 10; $i <= 17; $i++ ) : ?>
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

  /* CTA — navy gumb, plavi hover */
  .nsl-cta { display: inline-block; background: #20283a; color: #fff; font-weight: 800; font-size: 15px; padding: 15px 32px; border-radius: 10px; text-decoration: none; margin-top: 8px; }
  .nsl-cta:hover { background: #3d76b4; color: #fff; }

  /* galerija — full-bleed, pocasno drsenje, pauza na hover */
  .nsl-gal-sec { padding: 10px 0 40px; }
  .nsl-gal-top { padding: 26px 0 10px; }
  .nsl-gal { overflow: hidden; width: 100vw; margin-left: calc(50% - 50vw); }
  .nsl-gal-track { display: flex; gap: 8px; width: max-content; animation: nslGal 70s linear infinite; }
  .nsl-gal:hover .nsl-gal-track { animation-play-state: paused; }
  .nsl-gal-track img { width: 280px; aspect-ratio: 3/4; object-fit: cover; border-radius: 10px; display: block; flex: 0 0 auto; }
  @keyframes nslGal { from { transform: translateX(0); } to { transform: translateX(-50%); } }

  @media (max-width: 860px) {
    .nsl-sec { padding: 30px 0; }
    .nsl-row2 { grid-template-columns: 1fr; gap: 18px; }
    .nsl-row2 .nsl-media { order: -1; }
    .nsl-h2 { font-size: 2rem; }
    .nsl-gal-track img { width: 190px; }
    .nsl-gal-sec { padding: 6px 0 24px; }
    .nsl-gal-top { padding: 14px 0 6px; }
  }
</style>

<script>
(function(){
  /* Glatki scroll za CTA na ponude */
  document.querySelectorAll('a.nsl-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
