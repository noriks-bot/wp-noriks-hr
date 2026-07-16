<?php
/**
 * product-bottom: FISIOREST (orto-fisiorest)
 *
 * Dedicated bottom-nicer for the NORIKS FisioRest product.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('fisiorest').
 *
 * SCAFFOLD — sekcije se dodaju po uputama korisnika (mediji u temu: img/fisiorest*).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

// 1) "Znanstveno potkrijepljeno" — 4 kartice.
$fis_science = array(
    array( 'title' => 'Grba na vratu',        'text' => 'Trakcija <strong>oslobađa pritisak i vraća pravilno držanje</strong> kako bi smanjila grbu od tehnološkog vrata.' ),
    array( 'title' => 'Bolovi u vratu',       'text' => '<strong>Ublažava mišićne čvorove i ukočenost</strong> te <strong>ponovno poravnava krivinu vrata</strong> za brzo olakšanje boli.' ),
    array( 'title' => 'Kvalitetan san',       'text' => 'Umirujuća terapija <strong>opušta vrat i kralježnicu</strong> za dubok i okrepljujući san.' ),
    array( 'title' => 'Oslobađanje od stresa','text' => 'Topla masaža i istezanje <strong>oslobađaju nakupljenu napetost</strong> za veću udobnost.' ),
);
?>

<!-- ============ 1) Znanstveno potkrijepljeno ============ -->
<section class="fis-science">
  <div class="fis-wrap">
    <div class="fis-box">
      <h2 class="fis-title">Znanstveno potkrijepljeno: dokazano olakšanje za njegu vrata</h2>
      <div class="fis-grid">
        <?php foreach ( $fis_science as $fis_c ) : ?>
          <div class="fis-card">
            <h3 class="fis-card-title"><?php echo esc_html( $fis_c['title'] ); ?></h3>
            <p class="fis-card-text"><?php echo wp_kses_post( $fis_c['text'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<style>
  /* 1) Znanstveno potkrijepljeno — siva kartica */
  .fis-science { padding: 40px 0; }
  .fis-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .fis-box { background: #f4f4f4; border-radius: 16px; padding: 36px 30px; }
  .fis-title { font-size: clamp(23px,2.9vw,32px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 26px; }
  .fis-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; }
  .fis-card { padding: 0 22px; border-left: 1px solid #dcdcdc; }
  .fis-card:first-child { border-left: 0; padding-left: 0; }
  .fis-card-title { font-size: 17px; font-weight: 800; color: #1c1c1c; margin: 0 0 10px; }
  .fis-card-text { font-size: 15px; line-height: 1.55; color: #333; margin: 0; }
  @media (max-width: 820px) {
    .fis-grid { grid-template-columns: 1fr 1fr; gap: 22px 0; }
    .fis-card:nth-child(odd) { border-left: 0; padding-left: 0; }
  }
  @media (max-width: 480px) {
    .fis-grid { grid-template-columns: 1fr; }
    .fis-card { border-left: 0; padding-left: 0; }
  }

  /* Nema "Tablica veličina" linka na FisioRest-u (identično kao bunion). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: sakrij standardne točke (•), razmaci. */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 26px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin-left: 0; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }
</style>
