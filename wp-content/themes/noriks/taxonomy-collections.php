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
?>

<section class="noriks-collection-hero">
  <div class="noriks-collection-hero__inner">
    <div class="noriks-collection-hero__content">
      <p class="noriks-collection-hero__eyebrow">Collection</p>
      <h1 class="noriks-collection-hero__title"><?php echo esc_html($banner_title); ?></h1>
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
  <div class="noriks-collection-products__inner">
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
  </div>
</section>

<style>
.tax-collections .site-main {
  margin-bottom: 0;
}
.noriks-collection-hero {
  padding: 28px 16px 12px;
}
.noriks-collection-hero__inner {
  max-width: 1320px;
  margin: 0 auto;
  background: linear-gradient(135deg, #111 0%, #2a2a2a 45%, #4b4b4b 100%);
  border-radius: 18px;
  overflow: hidden;
  display: grid;
  grid-template-columns: minmax(0, 1.2fr) minmax(320px, .8fr);
  align-items: stretch;
}
.noriks-collection-hero__content {
  padding: 42px 32px;
  color: #fff;
}
.noriks-collection-hero__eyebrow {
  margin: 0 0 10px;
  font-size: 12px;
  letter-spacing: .18em;
  text-transform: uppercase;
  opacity: .7;
}
.noriks-collection-hero__title {
  margin: 0;
  color: #fff;
  font-size: clamp(32px, 5vw, 56px);
  font-weight: 700;
  line-height: .95;
}
.noriks-collection-hero__subtitle {
  max-width: 38ch;
  margin: 16px 0 0;
  font-size: 17px;
  line-height: 1.45;
  color: rgba(255,255,255,.84);
}
.noriks-collection-hero__media {
  min-height: 280px;
  background: rgba(255,255,255,.06);
}
.noriks-collection-hero__media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.noriks-collection-products {
  padding: 24px 16px 56px;
}
.noriks-collection-products__inner {
  max-width: 1320px;
  margin: 0 auto;
}
.tax-collections ul.products {
  margin-top: 0;
  display: grid !important;
  grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
  gap: 16px !important;
  align-items: start !important;
}
.tax-collections ul.products li.product {
  width: 100% !important;
  margin: 0 !important;
}
@media (max-width: 880px) {
  .noriks-collection-hero__inner {
    grid-template-columns: 1fr;
  }
  .noriks-collection-hero__content {
    padding: 28px 22px;
  }
  .noriks-collection-hero__media {
    min-height: 220px;
  }
  .tax-collections ul.products {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }
}
</style>

<?php
do_action('woocommerce_after_main_content');
get_footer('shop');
