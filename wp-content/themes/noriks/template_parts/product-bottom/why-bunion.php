<?php
/**
 * product-bottom: KOREKTOR ČUKLJEVA (bunion / halux valgus)
 *
 * Dedicated bottom-nicer for the NORIKS bunion corrector.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('bunion').
 *
 * SCAFFOLD: sekcije i mediji dodaju se kad stignu slike/videi i referentni
 * sadržaj (isti pristup kao why-ortopas.php). Mediji idu u temu:
 *   img/bunion-videos/  i  img/bunion-reviews/  (relativno preko get_template_directory_uri()).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// $bun_vid_dir = get_template_directory_uri() . '/img/bunion-videos/';
?>

<!-- ============ 1) Uvod ============ -->
<section class="bun-why bun-intro">
  <div class="bun-wrap">
    <div class="bun-stars" aria-hidden="true">★★★★★</div>
    <h2 class="bun-title">Prirodno olakšanje kod čukljeva (halux valgus)</h2>
    <p class="bun-sub">NORIKS korektor čukljeva nježno poravnava palac u njegov prirodan položaj, rasterećuje bolno izbočenje i smanjuje trenje pri hodu — za više udobnosti tijekom cijelog dana.</p>
  </div>
</section>

<style>
  .bun-why { padding: 44px 0; }
  .bun-why.bun-intro { background: #f7f7f7; }
  .bun-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; text-align: center; }
  .bun-stars { color: #f5a623; font-size: 24px; letter-spacing: 2px; margin-bottom: 10px; }
  .bun-title { font-size: clamp(26px,3.2vw,40px); font-weight: 800; color: #1c1c1c; line-height: 1.15; margin: 0 0 16px; }
  .bun-sub { font-size: 17px; line-height: 1.6; color: #333; margin: 0 auto; max-width: 780px; }
</style>
