<?php
/**
 * product-bottom: ORTOPEDSKI POJAS ZA LEĐA (ortopas)
 *
 * Dedicated bottom-nicer for the NORIKS orthopedic back belt.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('ortopas').
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* ------------------------------------------------------------------
 * MEDIJI po sekcijama.
 * Slika 1 ostaje na WP mediji; videi 2 i 3 su u temi (git) i pozivaju se
 * relativno preko get_template_directory_uri() — /img/ortopas-videos/.
 * ------------------------------------------------------------------ */
$opz_vid_dir      = get_template_directory_uri() . '/img/ortopas-videos/';
$opz_img_collage  = 'https://noriks.com/hr/wp-content/uploads/2026/07/ortopas-hr-9.png'; // 1) zadovoljni kupci (slika)
$opz_video_relief = $opz_vid_dir . 'relief.mp4';                                          // 2) prirodno oslobađanje (video)
$opz_video_cause  = $opz_vid_dir . 'cause.mp4';                                           // 3) pravi uzrok (video)
?>

<!-- ============ 1) Preko 14.000 zadovoljnih kupaca ============ -->
<section class="opz-why opz-customers">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <img loading="lazy" decoding="async" src="<?php echo esc_url( $opz_img_collage ); ?>" alt="Zadovoljni kupci NORIKS ortopedskog pojasa" />
    </div>
    <div class="opz-col opz-copy">
      <div class="opz-stars" aria-hidden="true">★★★★★</div>
      <h2 class="opz-title">Preko 14.000 zadovoljnih kupaca</h2>
      <p class="opz-sub">Tisuće ljudi već su svakodnevnu bol u leđima zamijenili stabilnošću i olakšanjem — na poslu, u vožnji i kod kuće.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Prirodno oslobađanje od boli ============ -->
<section class="opz-why">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <video src="<?php echo esc_url( $opz_video_relief ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Prirodno oslobađanje od boli</h2>
      <p>Kada stavite NORIKS pojas, napredna tehnologija s <strong>dvije kompresijske zone</strong> djeluje na pravilno poravnanje vaših bokova i donjeg dijela leđa. To može stabilizirati vašu kralježnicu i rasteretiti išijasni živac.</p>
      <p>Uobičajeno biste morali proći opsežnu fizioterapiju da biste postigli ovo olakšanje. NORIKS pojas omogućuje da <strong>olakšanje osjetite u stvarnom vremenu</strong> — dok radite ili ste u pokretu s najdražima.</p>
      <p>Čim su vaš donji dio leđa i bokovi pravilno poduprti, pritisak na išijasni živac može se smanjiti. To može značiti <strong>manje boli i veću pokretljivost</strong>.</p>
    </div>
  </div>
</section>

<!-- ============ 3) Pravi uzrok bolova u leđima i išijasa ============ -->
<section class="opz-why opz-cause">
  <div class="opz-wrap opz-row opz-reverse">
    <div class="opz-col opz-media">
      <video src="<?php echo esc_url( $opz_video_cause ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Pravi uzrok bolova u leđima i išijasa</h2>
      <p>Sati provedeni za radnim stolom, ponavljajući pokreti ili teški fizički rad mogu stvoriti <strong>neravnomjeran pritisak na međukralježničke diskove</strong>. U kombinaciji s nepravilnim držanjem, to kroz godine može uzrokovati znatna oštećenja kralježnice.</p>
      <p>Kao posljedica, diskovi mogu iskliznuti iz svog položaja i pritisnuti išijasni živac, što dovodi do <strong>peckanja, probadanja, pa čak i slabosti</strong> koji se šire od donjeg dijela leđa niz noge.</p>
    </div>
  </div>
</section>

<style>
  .opz-why { padding: 44px 0; }
  .opz-why.opz-customers { background: #f7f7f7; }
  .opz-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .opz-row { display: grid; grid-template-columns: 1fr 1fr; gap: 44px; align-items: center; }
  .opz-media img,
  .opz-media video { width: 100%; height: auto; border-radius: 12px; display: block; }
  .opz-stars { color: #f5a623; font-size: 24px; letter-spacing: 2px; margin-bottom: 10px; }
  .opz-title { font-size: clamp(26px,3.2vw,40px); font-weight: 800; color: #1c1c1c; line-height: 1.15; margin: 0 0 16px; }
  .opz-copy p { font-size: 16px; line-height: 1.7; color: #333; margin: 0 0 14px; }
  .opz-sub { font-size: 17px; line-height: 1.6; color: #333; margin: 0; }

  /* section 3: image on the right */
  .opz-reverse .opz-media { order: 2; }
  .opz-reverse .opz-copy { order: 1; }

  @media (max-width: 820px) {
    .opz-row { grid-template-columns: 1fr; gap: 22px; }
    .opz-reverse .opz-media { order: 0; }
    .opz-reverse .opz-copy { order: 0; }
    .opz-title { text-align: left; }
  }
</style>
