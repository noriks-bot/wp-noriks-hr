<?php
/**
 * product-bottom: NORIKS-HERS (orto-norikshers / orto-noriks-hers)
 *
 * Kolagenski listići za ožiljke i bore.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('norikshers').
 *
 * Sekcije su gotove lokalizirane grafike (img/norikshers/01..15.png) —
 * složene kao bešavni image-stack, po redu.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nh      = get_template_directory_uri() . '/img/norikshers/';
$nh_imgs = array( '01','02','03','04','05','06','07','08','09','10','11','12','13','14','15' );
?>

<section class="nh-stack">
  <?php foreach ( $nh_imgs as $nh_n ) : ?>
    <img class="nh-img" src="<?php echo esc_url( $nh . $nh_n . '.png' ); ?>" alt="NORIKS HERS — kolagenski listići" loading="lazy" decoding="async" />
  <?php endforeach; ?>
</section>

<style>
  .nh-stack { max-width: 760px; margin: 0 auto; padding: 0; }
  .nh-img { display: block; width: 100%; height: auto; margin: 0; }

  /* Nema "Tablica veličina" linka (no-attrs proizvod). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: sakrij standardne točke (•), razmaci. */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 26px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin-left: 0; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }
</style>

<script>
/* Narančasti active bundle-option preko inline !important (preživljava LiteSpeed UCSS). */
(function(){
  function paintOrto(){
    var sel = document.getElementById('bundle-selector');
    if(!sel) return;
    sel.querySelectorAll('.bundle-option').forEach(function(c){ c.style.removeProperty('border-color'); c.style.removeProperty('background'); });
    var checked = sel.querySelector('input[name="bundle_option"]:checked');
    var card = checked ? checked.closest('.bundle-option')
             : (sel.querySelector('.bundle-option.active') || sel.querySelector('.bundle-option'));
    if(card){ card.style.setProperty('border-color','#f39c12','important'); card.style.setProperty('background','#f39c1217','important'); }
  }
  function bindOrto(){
    var sel = document.getElementById('bundle-selector');
    if(!sel) return;
    paintOrto();
    sel.querySelectorAll('input[name="bundle_option"]').forEach(function(r){ r.addEventListener('change', paintOrto); });
  }
  if(document.readyState==='loading'){ document.addEventListener('DOMContentLoaded', bindOrto); } else { bindOrto(); }
})();
</script>
