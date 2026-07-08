<!-- product-bottom: KOMPRESIJSKE NOGAVICE (kompresijske-nogavice) -->
<?php
// Full-width marketing images (infographics already contain all text).
// Upload each image to its ACF option field, in order. Empty slots are skipped.
$kn_imgs = array(
    get_field( 'komp_nogavice_img_1', 'option' ),
    get_field( 'komp_nogavice_img_2', 'option' ),
    get_field( 'komp_nogavice_img_3', 'option' ),
    get_field( 'komp_nogavice_img_4', 'option' ),
    get_field( 'komp_nogavice_img_5', 'option' ),
);
$kn_imgs = array_values( array_filter( $kn_imgs ) );
?>

<section class="why-section kn-gallery">
  <div class="kn-gallery-inner">
    <?php if ( ! empty( $kn_imgs ) ) : ?>
      <?php foreach ( $kn_imgs as $kn_i => $kn_src ) : ?>
        <img class="kn-gallery-img"
             loading="<?php echo $kn_i === 0 ? 'eager' : 'lazy'; ?>"
             decoding="async"
             src="<?php echo esc_url( $kn_src ); ?>"
             alt="NORIKS kompresijske čarape">
      <?php endforeach; ?>
    <?php else : ?>
      <?php for ( $kn_p = 0; $kn_p < 5; $kn_p++ ) : ?>
        <div class="kn-gallery-ph">Slika <?php echo $kn_p + 1; ?> — naloži u ACF (komp_nogavice_img_<?php echo $kn_p + 1; ?>)</div>
      <?php endfor; ?>
    <?php endif; ?>
  </div>
</section>

<style>
  .kn-gallery { padding: 10px 0; }
  .kn-gallery-inner { max-width: 900px; margin: 0 auto; padding: 0 16px; display: flex; flex-direction: column; gap: 18px; }
  .kn-gallery-img { display: block; width: 100%; height: auto; border-radius: 0; }
  .kn-gallery-ph { width: 100%; aspect-ratio: 1/1; background: #f1f1f1; border: 1px dashed #cfccc3; display: flex; align-items: center; justify-content: center; color: #9a968c; font-size: 14px; text-align: center; padding: 16px; }
  @media (max-width: 768px) {
    .kn-gallery-inner { padding: 0; gap: 12px; }
  }
</style>
