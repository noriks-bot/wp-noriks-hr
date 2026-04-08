<?php
defined('ABSPATH') || exit;

get_header('shop');

do_action('woocommerce_before_main_content');

$term = get_queried_object();
$term_id = $term instanceof WP_Term ? (int) $term->term_id : 0;

$banner_title = $term_id ? get_term_meta($term_id, 'noriks_collection_banner_title', true) : '';
$banner_subtitle = $term_id ? get_term_meta($term_id, 'noriks_collection_banner_subtitle', true) : '';
$banner_image_id = $term_id ? (int) get_term_meta($term_id, 'noriks_collection_banner_image_id', true) : 0;
$banner_image_url = $banner_image_id ? wp_get_attachment_image_url($banner_image_id, 'full') : '';
$product_order_raw = $term_id ? get_term_meta($term_id, 'noriks_collection_product_order', true) : '';
$ordered_product_ids = function_exists('noriks_collection_order_ids_from_string') ? noriks_collection_order_ids_from_string($product_order_raw) : array();

if (!$banner_title && $term instanceof WP_Term) {
    $banner_title = $term->name;
}

$query_args = array(
    'post_type'      => 'product',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array(
            'taxonomy' => 'collections',
            'field'    => 'term_id',
            'terms'    => $term_id,
        ),
    ),
);

if (!empty($ordered_product_ids)) {
    $query_args['post__in'] = $ordered_product_ids;
    $query_args['orderby'] = 'post__in';
}

$products = new WP_Query($query_args);
$default_banner_url = trailingslashit(get_template_directory_uri()) . 'img/noriks-shop.png';
$bottom_banner_url = trailingslashit(get_template_directory_uri()) . 'assets/images/collections/bundles-offer-category-cz.webp';
?>

<section class="one-banner-shop noriks-collection-banner" style="position: relative; margin: 0 auto; padding: 0;">
  <img
    src="<?php echo esc_url($banner_image_url ?: $default_banner_url); ?>"
    style="display:block; width:100%; min-height:105px; border-radius:0;"
    alt="<?php echo esc_attr($banner_title); ?>"
  >

  <div class="noriks-collection-banner__content">
    <h1
      class="h1"
      style="
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%, -50%);
        font-size:2.5rem;
        font-weight:800;
        width:100%;
        font-family:'Barlow', sans-serif;
        letter-spacing:0.5px;
        color:white;
        text-align:center;
        text-transform: uppercase;
        margin: 0;
      "
    >
      <?php echo esc_html($banner_title); ?>
    </h1>

    <?php if ($banner_subtitle) : ?>
      <p class="noriks-collection-banner__subtitle"><?php echo esc_html($banner_subtitle); ?></p>
    <?php endif; ?>
  </div>
</section>

<section class="noriks-collection-hero">
  <div class="noriks-collection-hero__inner">
    <div class="noriks-collection-hero__content">
      <h2 class="noriks-collection-hero__title"><?php echo esc_html($banner_title); ?></h2>
      <?php if ($banner_subtitle) : ?>
        <p class="noriks-collection-hero__subtitle"><?php echo esc_html($banner_subtitle); ?></p>
      <?php endif; ?>
    </div>
    <?php if ($banner_image_url) : ?>
      <div class="noriks-collection-hero__media">
        <img src="<?php echo esc_url($banner_image_url); ?>" alt="<?php echo esc_attr($banner_title); ?>">
      </div>
    <?php endif; ?>
  </div>
</section>

<section class="noriks-collection-products">
  <?php if ($products->have_posts()) : ?>
    <?php wc_set_loop_prop('columns', 4); ?>
    <?php woocommerce_product_loop_start(); ?>
    <?php while ($products->have_posts()) : $products->the_post(); ?>
      <?php wc_get_template_part('content', 'product'); ?>
    <?php endwhile; ?>
    <?php woocommerce_product_loop_end(); ?>
    <?php wp_reset_postdata(); ?>
  <?php else : ?>
    <p class="woocommerce-info"><?php esc_html_e('No products found in this collection.', 'textdomain'); ?></p>
  <?php endif; ?>
</section>

<section class="noriks-collection-bottom-banner">
  <div class="noriks-collection-bottom-banner__inner">
    <div class="noriks-collection-bottom-banner__image">
      <img src="<?php echo esc_url($bottom_banner_url); ?>" alt="Hero balicky banner">
    </div>
    <div class="noriks-collection-bottom-banner__content">
      <h2>Tražiš još ponuda?</h2>
      <p>HERO rasprodaja, popust do 50 % 🔥</p>
      <a class="noriks-collection-bottom-banner__button" href="/collections/akcija/">Kupi više i uštedi →</a>
    </div>
  </div>
</section>

<style>
.tax-collections .site-main {
  margin-bottom: 0;
}

.tax-collections .noriks-collection-banner {
  max-width: none;
  padding: 0 !important;
}

.tax-collections .noriks-collection-banner__content {
  position: absolute;
  inset: 0;
}

.tax-collections .noriks-collection-banner__subtitle {
  position: absolute;
  left: 50%;
  top: calc(50% + 38px);
  transform: translateX(-50%);
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
  font-size: 16px;
  font-weight: 400;
  color: #fff;
  text-align: center;
}

.tax-collections .noriks-collection-hero {
  padding: 14px 20px;
}

.tax-collections .noriks-collection-hero__inner {
  max-width: 1760px;
  margin: 0 auto;
  background: linear-gradient(135deg, #111 0%, #2a2a2a 45%, #4b4b4b 100%);
  border-radius: 3px;
  overflow: hidden;
  display: grid;
  grid-template-columns: minmax(0, 1.15fr) minmax(320px, 0.85fr);
  align-items: stretch;
}

.tax-collections .noriks-collection-hero__content {
  padding: 42px 32px;
  color: #fff;
}

.tax-collections .noriks-collection-hero__title {
  margin: 0;
  color: #fff;
  font-size: clamp(32px, 5vw, 56px);
  font-weight: 700;
  line-height: 0.95;
  text-transform: uppercase;
}

.tax-collections .noriks-collection-hero__subtitle {
  max-width: 38ch;
  margin: 8px 0 0;
  font-size: 17px;
  line-height: 1.45;
  color: rgba(255, 255, 255, 0.84);
}

.tax-collections .noriks-collection-hero__media {
  min-height: 280px;
  background: rgba(255, 255, 255, 0.06);
}

.tax-collections .noriks-collection-hero__media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.tax-collections .noriks-collection-products {
  max-width: 1800px;
  margin: 0 auto;
  padding: 0 20px 20px;
}

.tax-collections .noriks-collection-bottom-banner {
  padding: 10px 20px 56px;
}

.tax-collections .noriks-collection-bottom-banner__inner {
  max-width: 1800px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: minmax(0, 1.05fr) minmax(320px, 0.95fr);
  align-items: center;
  gap: 72px;
}

.tax-collections .noriks-collection-bottom-banner__image img {
  display: block;
  width: 100%;
  height: auto;
  border-radius: 0;
}

.tax-collections .noriks-collection-bottom-banner__content {
  text-align: center;
  padding: 10px 24px 10px 0;
}

.tax-collections .noriks-collection-bottom-banner__content h2 {
  margin: 0 0 24px;
  font-family: 'Roboto', sans-serif;
  font-size: clamp(42px, 4vw, 60px);
  font-weight: 700;
  line-height: 1.05;
  color: #202124;
}

.tax-collections .noriks-collection-bottom-banner__content p {
  margin: 0 0 30px;
  font-family: 'Roboto', sans-serif;
  font-size: 21px;
  line-height: 1.45;
  color: #3c4043;
}

.tax-collections .noriks-collection-bottom-banner__button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-width: 340px;
  min-height: 64px;
  padding: 16px 28px;
  background: #2b2b2b;
  color: #fff;
  font-family: 'Roboto', sans-serif;
  font-size: 18px;
  font-weight: 700;
  text-decoration: none;
  box-shadow: none;
}

.tax-collections ul.products {
  display: grid !important;
  grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
  gap: 16px !important;
  align-items: start !important;
  margin: 0 auto;
  padding: 0;
}

.tax-collections ul.products li.product,
.tax-collections ul.products .wc-block-grid__product,
.tax-collections .wc-block-grid__products li.product,
.tax-collections .wc-block-grid__products .wc-block-grid__product {
  margin-bottom: 0 !important;
}

.tax-collections ul.products li.product {
  width: 100% !important;
  position: relative;
  overflow: hidden;
}

.tax-collections ul.products li.product img,
.tax-collections ul.products .wc-block-grid__product img,
.tax-collections .wc-block-grid__products li.product img,
.tax-collections .wc-block-grid__products .wc-block-grid__product img {
  display: block;
  margin: 0 auto 10px;
}

.tax-collections .woocommerce ul.products li.product img {
  display: block;
  width: 100%;
  transition: opacity 0.3s ease;
  backface-visibility: hidden;
}

.tax-collections .secondary-image {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  width: 100%;
  transition: opacity 0.3s ease;
  z-index: 1;
}

.tax-collections .woocommerce ul.products li.product:hover .secondary-image {
  opacity: 1;
}

.tax-collections .woocommerce ul.products li.product:hover .woocommerce-loop-product__link img:first-child {
  opacity: 0;
}

.tax-collections .woocommerce-loop-product__title {
  font-family: 'Roboto', sans-serif;
  font-weight: normal !important;
  margin-top: 0 !important;
  margin-bottom: 0 !important;
  text-align: center;
}

.tax-collections .price {
  margin-bottom: 22px !important;
  text-align: center;
}

.tax-collections .onsale {
  display: none;
}

.tax-collections .top-liked,
.tax-collections .badge {
  z-index: 999;
  opacity: 1;
  font-size: 10px;
}

@media (max-width: 991px) {
  .tax-collections .h1 {
    font-size: 1.5rem !important;
  }

  .tax-collections .noriks-collection-banner__subtitle {
    top: calc(50% + 26px);
    font-size: 13px;
    padding: 0 16px;
  }

  .tax-collections .noriks-collection-products {
    padding: 0 15px 16px;
  }

  .tax-collections .noriks-collection-bottom-banner {
    padding: 8px 15px 40px;
  }

  .tax-collections .noriks-collection-banner {
    padding: 0 !important;
  }

  .tax-collections ul.products {
    grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
  }

  .tax-collections .noriks-collection-hero {
    padding: 9px 15px;
  }

  .tax-collections .noriks-collection-hero__inner {
    grid-template-columns: 1fr;
  }

  .tax-collections .noriks-collection-hero__content {
    padding: 28px 22px;
  }

  .tax-collections .noriks-collection-hero__media {
    min-height: 220px;
  }

  .tax-collections .noriks-collection-bottom-banner__inner {
    grid-template-columns: 1fr;
    gap: 24px;
  }

  .tax-collections .noriks-collection-bottom-banner__content {
    padding: 0;
  }

  .tax-collections .noriks-collection-bottom-banner__content h2 {
    font-size: 34px;
    margin-bottom: 16px;
  }

  .tax-collections .noriks-collection-bottom-banner__content p {
    font-size: 18px;
    margin-bottom: 22px;
  }

  .tax-collections .noriks-collection-bottom-banner__button {
    min-width: 280px;
    min-height: 56px;
    font-size: 16px;
  }
}

@media (max-width: 768px) {
  .tax-collections ul.products {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 10px !important;
  }

  .tax-collections .top-liked,
  .tax-collections .badge {
    font-size: 8px !important;
  }
}
</style>

<?php
do_action('woocommerce_after_main_content');
get_footer('shop');
