<?php
/**
 * product-bottom: KOREKTOR ČUKLJEVA (bunion / halux valgus)
 *
 * Lokalizirane sekcijske slike (img/bunion/*.png) + "Kako se koristi" video koraci.
 * Recenzije + FAQ dolaze iz reviews.php (dispatcher).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$bun_img  = get_template_directory_uri() . '/img/bunion/';
$bun_imgp = get_template_directory()     . '/img/bunion/';
$bun_vid  = get_template_directory_uri() . '/img/bunion-videos/';

// Redoslijed sekcijskih slika (neutralna imena; datoteka je lokalizirana po jeziku teme).
$bun_stack_top    = array( 'beforeafter', 'recommended', 'tech', 'why', 'features' );
$bun_stack_bottom = array( 'doctor', 'vs-surgery', 'vs-shoes', 'vs-similar', 'vs-separators', 'athome', 'book' );

// "Kako se koristi" — 3 koraka (video).
$bun_steps = array(
    array( 'video' => $bun_vid . 'step-1.mp4', 'caption' => 'Pričvrstite NORIKS korektor na palac i stopalo' ),
    array( 'video' => $bun_vid . 'step-2.mp4', 'caption' => 'Podesite intenzitet istezanja po želji' ),
    array( 'video' => $bun_vid . 'step-3.mp4', 'caption' => 'Opustite se i pustite da NORIKS korektor odradi svoj posao' ),
);
?>

<section class="bun-page">

  <?php foreach ( $bun_stack_top as $bun_f ) : if ( ! file_exists( $bun_imgp . $bun_f . '.png' ) ) continue; ?>
    <img class="bun-simg" loading="lazy" decoding="async" src="<?php echo esc_url( $bun_img . $bun_f . '.png' ); ?>" alt="NORIKS korektor čukljeva">
  <?php endforeach; ?>

  <!-- ============ Kako se koristi (video koraci) ============ -->
  <div class="bun-howto">
    <h2 class="bun-howto-title">Kako se koristi</h2>
    <div class="bun-howto-intro">
      <p>Preporučujemo da započnete s 30 minuta dnevno i postupno povećavate do sesije od 1 do 3 sata.</p>
      <p>Najbolji je za mirovanje — dok ležite na kauču, gledate TV, čitate ili spavate.</p>
    </div>
    <div class="bun-steps-grid">
      <?php $bun_n = 0; foreach ( $bun_steps as $bun_step ) : $bun_n++; ?>
        <div class="bun-step">
          <div class="bun-step-media">
            <video src="<?php echo esc_url( $bun_step['video'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          </div>
          <div class="bun-step-num"><?php echo (int) $bun_n; ?></div>
          <p class="bun-step-caption"><?php echo esc_html( $bun_step['caption'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <?php foreach ( $bun_stack_bottom as $bun_f ) : if ( ! file_exists( $bun_imgp . $bun_f . '.png' ) ) continue; ?>
    <img class="bun-simg" loading="lazy" decoding="async" src="<?php echo esc_url( $bun_img . $bun_f . '.png' ); ?>" alt="NORIKS korektor čukljeva">
  <?php endforeach; ?>

</section>

<style>
  /* Kratki opis (short description): sakrij standardne točke (•), razmaci. */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 26px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin-left: 0; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }

  /* Nema "Tablica veličina" linka na korektoru čukljeva. */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Sekcijske slike — full-width stack. */
  .bun-page { padding: 0 0 10px; }
  .bun-simg { display: block; width: 100%; max-width: 760px; height: auto; margin: 0 auto; }

  /* Kako se koristi */
  .bun-howto { background: #f0f2f5; padding: 40px 16px; margin: 8px 0; }
  .bun-howto-title { text-align: center; font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; margin: 0 0 14px; }
  .bun-howto-intro { max-width: 820px; margin: 0 auto 30px; text-align: center; }
  .bun-howto-intro p { font-size: 16px; line-height: 1.6; color: #333; margin: 0 0 10px; }
  .bun-steps-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; max-width: 1000px; margin: 0 auto; }
  .bun-step { text-align: center; }
  .bun-step-media { width: 100%; aspect-ratio: 1 / 1; border-radius: 14px; overflow: hidden; background: #e6e9ee; }
  .bun-step-media video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .bun-step-num { font-size: 22px; font-weight: 800; color: #1c1c1c; margin: 14px 0 6px; }
  .bun-step-caption { font-size: 15px; line-height: 1.5; color: #333; margin: 0 8px; }

  @media (max-width: 820px) {
    .bun-steps-grid { grid-template-columns: 1fr; gap: 16px; }
  }
</style>
