<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description ) {
	return;
}

?>

<!--
<div class="woocommerce-product-details__short-description">
	<?php echo $short_description; // WPCS: XSS ok. ?>
</div>
-->


<!-- my thre icons content -->

<!--
<div class="features">
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img1","option"); ?>" alt="Perfect Fit">
      <p><?php echo get_field("singlepp_icon_t1","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img2","option"); ?>" alt="Hides Dad Bod">
      <p><?php echo get_field("singlepp_icon_t2","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img3","option"); ?>" alt="Breathes">
       <p><?php echo get_field("singlepp_icon_t3","option"); ?></p>
    </div>
  </div>
-->

<style>


    .features {
      display: flex;
    justify-content: space-between;
    gap: 16px;
    margin-top: 20px;
    }

    .feature-card {
    display: flex
;
    flex-direction: column;
    align-items: center;
    flex: 1;
    gap: 8px;
    border-radius: 5px;
    background: #F4F4F4;
    padding: 16px;
    font-size: 14px;
    font-weight: 400;
    color: #111213;
    line-height: 1.2;
    text-align: center;
    }

    .feature-card img {
      width: 32px;
      height: 32px;
      margin-bottom: 0px;
    }

    .feature-card p {
      margin: 0;
      font-weight: 500;
      font-size: 14px;
      color: #222;
       letter-spacing: -0.5px !important;
    }
  </style>

<?php if ( function_exists('noriks_is_type') && noriks_is_type('norikshers') ) : ?>
<div class="nhs-usp">
  <div class="nhs-usp-guarantee"><svg width="15" height="15" viewBox="0 0 24 24" style="flex:0 0 auto;"><circle cx="12" cy="12" r="12" fill="#7c3aed"/><path d="M7 12.5l3 3 7-7" fill="none" stroke="#fff" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg> 30-dnevno jamstvo povrata novca</div>
  <div class="nhs-usp-grid">
    <div><span class="nhs-usp-ic">≈</span> Smanjuje bore</div>
    <div><span class="nhs-usp-ic">↓</span> Smanjuje fine linije</div>
    <div><span class="nhs-usp-ic">♡</span> Blijedi ožiljke preko noći</div>
    <div><span class="nhs-usp-ic">✚</span> Dodatno ljepljivo</div>
    <div><span class="nhs-usp-ic">✓</span> Višekratno i izdržljivo</div>
    <div><span class="nhs-usp-ic">↗</span> Potiče proizvodnju kolagena</div>
  </div>
</div>
<style>
  .nhs-usp { margin: 6px 0 2px; }
  .nhs-usp-guarantee { display: inline-flex; align-items: center; gap: 9px; background: #f6f2ff; border: 1px dashed #c3aef0; border-radius: 999px; padding: 8px 18px; font-size: 13.5px; font-weight: 600; color: #180D33; margin-bottom: 18px; }
  .nhs-usp-guarantee span { color: #7c3aed; }
  .nhs-usp-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 5px 7px; }
  .nhs-usp-grid > div { display: flex; align-items: center; gap: 10px; font-size: 14.5px; color: #2a2340; }
  .nhs-usp-ic { flex: 0 0 auto; width: 20px; text-align: center; color: #180D33; font-size: 15px; }
  @media (max-width: 560px) { .nhs-usp-grid { gap: 5px 8px; } .nhs-usp-grid > div { font-size: 13px; } .nhs-usp-ic { width: 18px; font-size: 14px; } }
  /* Countdown na ovom proizvodu: neutralno sivo (bez crvenog). */
  .gck-countdown { background: #ededed !important; border: 1px solid #f7f7f7 !important; border-radius: 0 !important; color: #333 !important; text-align: left !important; }
  .gck-countdown * { color: #333 !important; }
  /* Discount badge (−33% …): vijolicno na ovom proizvodu. */
  .gck-discount-badge { background: #7c3aed !important; color: #fff !important; }
  /* Bundle radio gumbi: vijolicno na ovom proizvodu. */
  .bundle-option input[type="radio"] { border-color: #7c3aed !important; }
  .bundle-option input[type="radio"]::before { background: #7c3aed !important; }
  .bundle-option input[type="radio"]:checked::before { background: #7c3aed !important; }
</style>
<?php endif; ?>

<?php if ( function_exists('noriks_is_type') && noriks_is_type('ortopedski-jastuk') ) : ?>
<!-- ErgoSit: zelena "preporuka" pilula (JS je premjesti odmah ispod naslova) + original-style checklista -->
<div class="oj-recpill">
  <img src="<?php echo esc_url( get_template_directory_uri().'/img/ortopedski-jastuk/04_lijecnik_HR.png' ); ?>" alt="Liječnik" class="oj-recpill-av" onerror="this.style.display='none'">
  <span><strong>Preporučuje dr. Marić</strong>&nbsp;|&nbsp;<em>Specijalist za kralježnicu</em></span>
  <svg class="oj-recpill-check" width="14" height="14" viewBox="0 0 24 24"><circle cx="12" cy="12" r="12" fill="#22b573"/><path d="M7 12.5l3 3 7-7" fill="none" stroke="#fff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
<!-- ErgoSit: mala "zaliha" pilula kao original (umjesto velikog crvenog countdown boxa) -->
<div class="oj-stockpill">
  <svg width="15" height="15" viewBox="0 0 24 24" style="flex:0 0 auto;"><circle cx="12" cy="12" r="12" fill="#e5344a"/><path d="M12 6.5v7" stroke="#fff" stroke-width="2.6" stroke-linecap="round"/><circle cx="12" cy="17" r="1.5" fill="#fff"/></svg>
  <em>Ostalo je još samo nekoliko komada!</em>
</div>
<!-- ErgoSit: "narudžbe u 24h" red kao original (zeleni pulsirajući krug), JS ga stavi iznad ADD TO CART -->
<div class="oj-orders">
  <span class="oj-orders-dot"></span>
  <em><strong>128 narudžbi</strong> u posljednja <strong>24 sata!</strong></em>
</div>
<style>
  .oj-recpill { display: inline-flex; align-items: center; gap: 9px; background: #e9f8f0; border-radius: 999px; padding: 6px 16px 6px 7px; font-size: 13.5px; color: #1b1533; margin: 8px 0 12px; }
  .oj-recpill strong { font-weight: 800; }
  .oj-recpill em { font-style: italic; color: #4a6155; }
  .oj-recpill-av { width: 26px; height: 26px; border-radius: 50%; object-fit: cover; object-position: 50% 12%; flex: 0 0 auto; }
  .oj-recpill-check { flex: 0 0 auto; }
  /* Mala zaliha-pilula (original: "Only a few are left in stock!") */
  .oj-stockpill { display: flex; width: max-content; max-width: 100%; align-items: center; gap: 6px; background: #fff; border: 1px solid #f3b8c6; border-radius: 11px; padding: 4px 9px; }
  .oj-stockpill svg { width: 12px; height: 12px; }
  .oj-stockpill em { font-style: italic; font-size: 11.5px; font-weight: 600; color: #e5344a; }
  /* Sakrij veliki crveni countdown box na ovom proizvodu */
  .gck-countdown { display: none !important; }
  /* Discount badge (−33% …): outline chip kao original */
  .gck-discount-badge { background: #fff !important; color: #ED5E95 !important; border: 1px solid #ED5E95 !important; border-radius: 6px !important; padding: 5px 9px !important; font-size: 11px !important; font-weight: 700 !important; line-height: 1 !important; display: inline-flex !important; align-items: center !important; align-self: center !important; vertical-align: middle !important; }
  /* Sakrij SAMO riječ "Ukupno:" u ponudama (cijene ostaju) */
  .bundle-total-line > span[style*="font-weight:normal"] { display: none !important; }
  /* Sakrij crveni "€/kom" chip u ponudama */
  .gck-per-chip { display: none !important; }
  /* Ujednačen vertikalni ritam u summary (cijena → pilula → ponude → gumb): 12px svugdje */
  .summary .price { margin: 0 0 18px !important; }
  .oj-recpill { margin: 6px 0 12px !important; }
  .oj-stockpill { margin: 0 0 12px !important; }
  #bundle-selector { margin-top: 0 !important; }
  #bundle-selector .bundle-option { margin: 0 0 12px !important; }
  .oj-orders { margin: 0 0 12px !important; }
  /* ADD TO CART gumb: rose-pink kao original */
  .single-product .single_add_to_cart_button,
  .single-product button.single_add_to_cart_button.alt {
    background: #ef4266 !important; border-color: #ef4266 !important; color: #fff !important;
  }
  .single-product .single_add_to_cart_button:hover,
  .single-product button.single_add_to_cart_button.alt:hover {
    background: #d92f55 !important; border-color: #d92f55 !important;
  }
  /* Akcijska (sale) cijena: pink kao original */
  .summary .price ins,
  .summary .price ins .woocommerce-Price-amount,
  .summary .price > .woocommerce-Price-amount:last-child {
    color: #fd4f93 !important;
  }
  /* Ponude — TOCNO po originalu (izmjereno): #ED5E95, border 2px .3, radius 6px */
  .bundle-option { background: rgba(237,94,149,0.02) !important; border: 2px solid rgba(237,94,149,0.3) !important; border-radius: 6px !important; }
  .bundle-option.active { border-color: #ED5E95 !important; background: rgba(237,94,149,0.1) !important; }
  /* Jedan red: naziv+chip lijevo, cijene desno u stupcu, vertikalno centrirano */
  .bundle-option { display: flex !important; flex-wrap: wrap; align-items: center !important; min-height: 72px; padding: 14px 18px !important; cursor: pointer; transition: border-color .15s ease, background .15s ease; }
  .bundle-option .bundle-option-title { display: inline-flex; align-items: center; font-weight: 700; color: rgba(18,16,48,0.9); font-size: 16px; }
  .bundle-option .bundle-total-line { margin: 0 0 0 auto !important; display: inline-flex; flex-direction: row; align-items: center; gap: 4px; font-size: 16px; font-weight: 700; color: #ED5E95; }
  .bundle-option .gck-regular-price { font-weight: 400 !important; font-size: 14px !important; color: rgba(18,16,48,0.6) !important; text-decoration: line-through; }
  .bundle-option input[type="radio"] { margin-right: 7px !important; border-color: #ED5E95 !important; }
  .bundle-option .bundle-option-title { margin-left: 2px; }
  .bundle-option input[type="radio"]::before, .bundle-option input[type="radio"]:checked::before { background: #ED5E95 !important; }
  .bundle-option .gck-discount-badge { margin-left: 8px; }
  /* No-attrs proizvod: prazan bundle-pairs gura sadržaj prema gore — sakrij ga */
  .bundle-option .bundle-pairs { display: none !important; }
  /* Mobilni: tjesnji razmaci i kompaktnije kartice */
  @media (max-width: 600px) {
    .summary .price { margin: 0 0 12px !important; }
    .oj-recpill { margin: 4px 0 8px !important; }
    .oj-stockpill { margin: 0 0 8px !important; }
    #bundle-selector .bundle-option { margin: 0 0 8px !important; }
    .bundle-option { min-height: 58px; padding: 11px 12px !important; }
    .bundle-option input[type="radio"] { margin-right: 6px !important; }
    .bundle-option .bundle-option-title { font-size: 14.5px; }
    .bundle-option .gck-discount-badge { margin-left: 6px; padding: 4px 7px !important; font-size: 10px !important; }
    .bundle-option .bundle-total-line { gap: 3px; font-size: 15px; }
    .bundle-option .gck-regular-price { font-size: 12.5px !important; }
    .oj-orders { margin: 0 0 8px !important; }
    .oj-orders em { font-size: 13px; }
  }
  /* "narudžbe u 24h" red (zeleni pulsirajući krug) */
  .oj-orders { display: flex; align-items: center; gap: 9px; margin: 12px 0 10px; }
  .oj-orders em { font-style: italic; font-size: 14px; color: #121030; }
  .oj-orders-dot { flex: 0 0 auto; width: 11px; height: 11px; border-radius: 50%; background: #17c964; box-shadow: 0 0 0 3px rgba(23,201,100,.25); animation: ojPulse 1.6s ease-in-out infinite; }
  @keyframes ojPulse { 0%,100% { box-shadow: 0 0 0 3px rgba(23,201,100,.25); } 50% { box-shadow: 0 0 0 6px rgba(23,201,100,.12); } }
  /* Checklista u kratkom opisu — čisto kao original (bez bullet točkica) */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 10px 0 14px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 24px; text-indent: -24px; margin: 0 0 7px; font-size: 15px; line-height: 1.45; color: #1b1533; }
</style>
<script>
(function(){
  /* Premjesti pilule: preporuka ispod naslova, zaliha ispod cijene */
  function movePills(){
    var pill = document.querySelector('.oj-recpill');
    var title = document.querySelector('.product_title');
    if ( pill && title && title.nextSibling !== pill ) { title.parentNode.insertBefore(pill, title.nextSibling); }
    var stock = document.querySelector('.oj-stockpill');
    var badge = document.querySelector('.summary .price-badge');
    var price = document.querySelector('.summary .price');
    var anchor = badge || price; /* iza "Najniža cena" badgea, da cijena+badge ostanu u istom redu */
    if ( stock && anchor && anchor.nextSibling !== stock ) { anchor.parentNode.insertBefore(stock, anchor.nextSibling); }
    /* "narudžbe u 24h" iznad ADD TO CART gumba */
    var orders = document.querySelector('.oj-orders');
    var cartBtn = document.querySelector('.single_add_to_cart_button');
    if ( orders && cartBtn && cartBtn.previousElementSibling !== orders ) { cartBtn.parentNode.insertBefore(orders, cartBtn); }
  }
  if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', movePills); } else { movePills(); }
})();
</script>
<?php endif; ?>
