<!-- product-bottom: SHARED reviews / social proof (all products) -->

<!-- end BOXERICE -->






<style>
    .most-popular {
    
        padding-top: 20px;
    
    }
</style>













  
  
  <style>
      
      .comparison-section-gray  {
         border-radius: 5px;
        }
              
      .comparison-intro-gray  {
           margin-bottom: 0;
        }
      
  </style>
  <div  style="background: #f9f9f9; padding-top: 30px;" >
<section style="background: #f9f9f9; max-width: 1440px;" class="comparison-section comparison-section-gray">
    <div style="background: #f9f9f9;padding: 0;padding-left: 10px;
    padding-right: 10px;" class="comparison-intro comparison-intro-gray ">
      <!--<h4 style="" class="highlight"><?php echo get_field("singlepp_content_standard_reviews_t1","options"); ?></h4>-->
      <h1 style="color:black;     margin-bottom: 4px;">
          
          
          <?php if ( noriks_is_type( 'bunion' ) ): ?>

           Nisi sam u potrazi za olakšanjem od čukljeva.

          <?php elseif ( noriks_is_type( 'ortopas' ) ): ?>

           Nisi sam u potrazi za rasterećenjem leđa.

          <?php elseif ( noriks_is_type( 'kompresijske-nogavice' ) ): ?>

           Nisi sam u potrazi za savršenim kompresijskim čarapama.

          <?php elseif ( noriks_is_type( 'bokserice' ) ): ?>

           Nisi sam u potrazi za savršenim boksericama za ljeto.



          <?php else: ?>
          
         
          
        <?php echo get_field("singlepp_content_standard_reviews_t2","options"); ?>
          

          
          <?php endif; ?>
          
          
          </h1>
    <p class="note" style="color: black; margin-top: 0px; margin-bottom: 5px;">
        
           <?php if ( noriks_is_type( 'bunion' ) ): ?>

           Tisuće ljudi već koristi NORIKS korektor čukljeva za manje boli i pravilnije poravnanje palca – kod kuće, uz gledanje TV-a i tijekom spavanja.

           <?php elseif ( noriks_is_type( 'ortopas' ) ): ?>

           Tisuće ljudi već nose NORIKS ortopedski pojas za manje bolova i stabilnija leđa – na poslu, pri dizanju tereta i tijekom dugog sjedenja.

           <?php elseif ( noriks_is_type( 'kompresijske-nogavice' ) ): ?>

           Tisuće muškaraca već nose NORIKS kompresijske čarape za lakše i odmornije noge – na poslu, putovanjima i treningu.

           <?php elseif ( noriks_is_type( 'bokserice-ispod-kupacih' ) ): ?>

           Više od 120.000 kupaca već je potvrdilo: NORIKS je rješenje koje spaja udobnost na plaži, brzo sušenje i kroj koji konačno odgovara stvarnim muškarcima.

           <?php else: ?>
        
        
        <?php echo get_field("singlepp_content_standard_reviews_t3","options"); ?>
        
        <?php endif; ?>
        
        </p>
    </div>
  </section>
  </div>
  
  
  <style>
      @media (max-width: 768px) {
          
          .basic-reviews-section  {
               padding-left: 0px;
               padding-right: 0px;
            }
            .review .content {
                font-size: 13px;
            }
            .review .info {
                font-size: 13px;
                line-height: 1.3;
            }
            .review {
  
                padding-bottom: 15px;
                margin-bottom: 16px;

            }
      }
  </style>
  
  
  <style>
.loader {
  border: 4px solid #f3f3f3;
  border-top: 4px solid #f5a623;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  animation: spin 0.8s linear infinite;
  margin: 0 auto;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.extra-review-group {
  opacity: 0;
  transition: opacity 0.5s ease;
}

.extra-review-group.show {
  opacity: 1;
}
</style>







<?php 
  // ===== CONFIG: LANGUAGE & DATA =====
  $reviews_language = get_field("webshop_language", "options");
  if (!$reviews_language) { $reviews_language = "EN"; }

  // Detect product group for the review pool
  $current_product_id = (function_exists('is_product') && is_product()) ? get_queried_object_id() : get_the_id();
  $is_bokserice_page  = noriks_is_type( 'bokserice', $current_product_id );
  $is_nogavice_page   = noriks_is_type( 'kompresijske-nogavice', $current_product_id );
  $is_ortopas_page    = noriks_is_type( 'ortopas', $current_product_id );
  $is_bunion_page     = noriks_is_type( 'bunion', $current_product_id );
  // Back belt / bunion corrector take precedence even if they still carry the socks category.
  if ( $is_ortopas_page || $is_bunion_page ) { $is_nogavice_page = false; }

  // Fallback product name shown in review cards.
  $rv_fallback_title = $is_bunion_page ? 'NORIKS korektor čukljeva'
                     : ( $is_ortopas_page ? 'Ortopedski pojas za leđa'
                     : ( $is_nogavice_page ? 'Kompresijske čarape sa zatvaračem' : 'Jedna Siva Majica' ) );

  // Include review pools (own pool per product group)
  if ( $is_bunion_page ) {
    include get_stylesheet_directory() . '/auto_reviews/HR_bunion.php';
  } elseif ( $is_ortopas_page ) {
    include get_stylesheet_directory() . '/auto_reviews/HR_ortopas.php';
  } elseif ( $is_nogavice_page ) {
    include get_stylesheet_directory() . '/auto_reviews/HR_nogavice.php';
  } elseif ( $is_bokserice_page ) {
    include get_stylesheet_directory() . '/auto_reviews/HR_bokserice.php';
  } else {
    include get_stylesheet_directory() . '/auto_reviews/'.$reviews_language.'.php';
  }

  include get_stylesheet_directory() . '/auto_reviews/'.$reviews_language.'-2.php';

  // Ensure arrays exist
  $auto_reviews_en   = is_array($auto_reviews_en)   ? $auto_reviews_en   : [];
  $auto_reviews_ship = isset($auto_reviews_ship) && is_array($auto_reviews_ship) ? $auto_reviews_ship : [];

  // ===== HELPERS: STABLE DAILY RANDOMIZATION =====

  /**
   * Get WP/Woo timezone (fallback Europe/Ljubljana).
   */
  function reviews_wp_tz(): DateTimeZone {
    $tz_string = function_exists('wp_timezone_string') ? wp_timezone_string() : (get_option('timezone_string') ?: 'Europe/Ljubljana');
    return new DateTimeZone($tz_string ?: 'Europe/Ljubljana');
  }

  /**
   * Deterministic "random" integer in [0, $mod-1] from a seed string.
   */
  function stable_mod_index(string $seed, int $mod): int {
    if ($mod <= 0) return 0;
    $h = substr(sha1($seed), 0, 8); // 32-bit slice
    $n = hexdec($h);
    return (int) ($n % $mod);
  }

  /**
   * Deterministic shuffle based on a seed string. (Stable for a given seed.)
   */
  function shuffle_with_seed(array $arr, string $seed): array {
    if (empty($arr)) return $arr;
    $keys = array_keys($arr);
    usort($keys, function($a, $b) use ($seed) {
      $ha = sha1($seed . ':' . $a);
      $hb = sha1($seed . ':' . $b);
      return strcmp($ha, $hb);
    });
    $out = [];
    foreach ($keys as $k) { $out[] = $arr[$k]; }
    return $out;
  }

  /**
   * Build/caches a pool of products: [['title'=>..., 'url'=>...], ...]
   */
  function get_wc_product_pool(
      $transient_key = 'reviews_product_pool_cache_v2',
      $ttl = 12 * HOUR_IN_SECONDS
  ) {
      if ( ! function_exists( 'wc_get_products' ) ) {
          return [];
      }

      $product_id = 0;
      if ( function_exists( 'is_product' ) && is_product() ) {
          $product_id = get_queried_object_id();
      }

      $is_bokserice = false;
      $is_nogavice  = false;
      $is_ortopas   = false;
      $is_bunion    = false;
      if ( $product_id ) {
          $is_bokserice = noriks_is_type( 'bokserice', $product_id );
          $is_nogavice  = noriks_is_type( 'kompresijske-nogavice', $product_id );
          $is_ortopas   = noriks_is_type( 'ortopas', $product_id );
          $is_bunion    = noriks_is_type( 'bunion', $product_id );
          if ( $is_ortopas || $is_bunion ) { $is_nogavice = false; }
      }

      $cache_key = $transient_key . ( $is_bunion ? '_bunion' : ( $is_ortopas ? '_ortopas' : ( $is_nogavice ? '_nogavice' : ( $is_bokserice ? '_bokserice' : '_all' ) ) ) );

      if ( function_exists( 'get_transient' ) ) {
          $cached = get_transient( $cache_key );
          if ( ! empty( $cached ) && is_array( $cached ) ) {
              return $cached;
          }
      }

      $args = [
          'status'  => 'publish',
          'limit'   => -1,
          'return'  => 'ids',
          'orderby' => 'date',
          'order'   => 'DESC',
      ];

      if ( $is_bunion ) {
          $args['category'] = [ 'orto-bunion' ];
      } elseif ( $is_ortopas ) {
          $args['category'] = [ 'orto-ortopas' ];
      } elseif ( $is_nogavice ) {
          $args['category'] = [ 'kompresijske-carape' ];
      } elseif ( $is_bokserice ) {
          $args['category'] = [ 'bokserice' ];
      } else {
          $args['tax_query'] = [
              [
                  'taxonomy' => 'product_cat',
                  'field'    => 'slug',
                  'terms'    => [ 'bokserice', 'kompresijske-carape' ],
                  'operator' => 'NOT IN',
              ],
          ];
      }

      $ids = wc_get_products( $args );

      $pool = [];
      if ( ! empty( $ids ) ) {
          foreach ( $ids as $pid ) {
              $title = get_the_title( $pid );
              $url   = get_permalink( $pid );
              if ( $title && $url ) {
                  $pool[] = [
                      'title' => $title,
                      'url'   => $url,
                  ];
              }
          }
      }

      if ( function_exists( 'set_transient' ) ) {
          set_transient( $cache_key, $pool, $ttl );
      }

      return $pool;
  }

  /**
   * Load avatar images from theme folder and return URLs.
   * Expected folders:
   *  - /auto_reviews/bokserice-slike/
   *  - /auto_reviews/majice-slike/
   */
  function get_review_avatar_pool(string $type = 'majice'): array {
    $type = in_array( $type, array( 'bokserice', 'nogavice', 'majice' ), true ) ? $type : 'majice';

    $dir_path = trailingslashit(get_stylesheet_directory()) . 'auto_reviews/' . $type . '-slike/';
    $dir_url  = trailingslashit(get_stylesheet_directory_uri()) . 'auto_reviews/' . $type . '-slike/';

    if ( ! is_dir($dir_path) ) return [];

    $files = glob($dir_path . '*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE);
    if (empty($files)) return [];

    $urls = [];
    foreach ($files as $f) {
      $base = basename($f);
      if ($base && $base[0] !== '.') {
        $urls[] = $dir_url . rawurlencode($base);
      }
    }
    return $urls;
  }

  /**
   * Assign avatars (some real, some placeholder) deterministically per day + review index.
   * If real image is chosen, sets $r['avatar_url'].
   */
  function assign_avatars_stable(array $reviews, array $avatar_pool, string $daily_seed, string $context_seed = 'product', int $real_probability_percent = 60): array {
    $count = count($avatar_pool);
    foreach ($reviews as $i => &$r) {
      $r['avatar_url'] = '';

      if ($count <= 0) continue;

      $roll = stable_mod_index($daily_seed . ':avatar-roll:' . $context_seed . ':' . $i, 100);
      if ($roll < max(0, min(100, $real_probability_percent))) {
        $pick_i = stable_mod_index($daily_seed . ':avatar-pick:' . $context_seed . ':' . $i, $count);
        $r['avatar_url'] = $avatar_pool[$pick_i] ?? '';
      }
    }
    return $reviews;
  }
  
  
  
  /**
 * Avatar images rules:
 * - First $first_n reviews ALWAYS get an image (if available)
 * - Remaining images (unique) are placed randomly within reviews [$range_start .. $range_end]
 * - Each image can appear ONLY once
 * - Deterministic per day (stable daily seed)
 */
function assign_unique_avatars_first3_then_random_until30(
  array $reviews,
  array $avatar_pool,
  string $daily_seed,
  string $context_seed = 'product',
  int $first_n = 3,
  int $range_start = 3,   // 0-based index: review #4
  int $range_end = 30     // 1-based count: up to review #30 -> last index 29
): array {
  $total = count($reviews);
  if ($total <= 0) return $reviews;

  // Ensure key exists and default is placeholder
  foreach ($reviews as &$r) { $r['avatar_url'] = ''; }
  unset($r);

  if (empty($avatar_pool)) return $reviews;

  // Deterministic shuffle of images (stable per day)
  $pool = shuffle_with_seed($avatar_pool, 'avatar-pool:' . $daily_seed . ':' . $context_seed);
  $pool_count = count($pool);

  // 1) First N reviews always get images (as many as available)
  $first_n = max(0, min($first_n, $total, $pool_count));
  for ($i = 0; $i < $first_n; $i++) {
    $reviews[$i]['avatar_url'] = $pool[$i] ?? '';
  }

  // If no more images left, finish
  if ($pool_count <= $first_n) return $reviews;

  // 2) Randomly place remaining images from review #4 to #30 (indexes 3..29)
  $last_index = min($total - 1, $range_end - 1);
  if ($last_index < $range_start) return $reviews;

  $eligible = range($range_start, $last_index);

  // Deterministic shuffle of eligible positions (stable per day)
  $eligible = shuffle_with_seed($eligible, 'avatar-positions:' . $daily_seed . ':' . $context_seed);

  $remaining_images = array_slice($pool, $first_n);
  $take = min(count($remaining_images), count($eligible));

  for ($j = 0; $j < $take; $j++) {
    $pos = $eligible[$j];
    $reviews[$pos]['avatar_url'] = $remaining_images[$j] ?? '';
  }

  return $reviews;
}
  
  
  
  /**
 * Assign avatars for first N reviews:
 * - Use each real image at most once (no repeats).
 * - Only apply to first $use_first_n reviews.
 * - After that (or if pool runs out), use placeholder (avatar_url = '').
 * Deterministic per day.
 */
function assign_unique_avatars_first_n(array $reviews, array $avatar_pool, string $daily_seed, string $context_seed = 'product', int $use_first_n = 10): array {
  $total = count($reviews);
  if ($total <= 0) return $reviews;

  // Ensure every review has the key
  foreach ($reviews as &$r) { $r['avatar_url'] = ''; }
  unset($r);

  if (empty($avatar_pool)) return $reviews;

  // Deterministic shuffled image order for the day + context
  $shuffled_pool = shuffle_with_seed($avatar_pool, 'avatar-pool:' . $daily_seed . ':' . $context_seed);

  // We can only place as many images as we have, and only in first N reviews
  $limit = min($use_first_n, $total, count($shuffled_pool));

  for ($i = 0; $i < $limit; $i++) {
    $reviews[$i]['avatar_url'] = $shuffled_pool[$i] ?? '';
  }

  return $reviews;
}

  /**
   * Assign a deterministic product (title+url) to each review for the day.
   * Stable per day AND per review index.
   */
  function assign_products_stable(array $reviews, array $product_pool, string $daily_seed): array {
    $count = count($product_pool);
    foreach ($reviews as $i => &$r) {
      if ($count > 0) {
        $pick = $product_pool[ stable_mod_index($daily_seed . ':prod:' . $i, $count) ];
        $r['product_title'] = $pick['title'];
        $r['product_url']   = $pick['url'];
      } else {
        $r['product_title'] = $r['product_title'] ?? '';
        $r['product_url']   = $r['product_url']   ?? '';
      }
    }
    return $reviews;
  }

  /**
   * Distribute review dates backward from today to a cutoff date (inclusive),
   * with a deterministic per-day count using the daily seed.
   */
  function assign_dates_stable(array $reviews, string $cutoff_date_string = '20.6.2025', int $min_per_day = 2, int $max_per_day = 9, string $display_format = 'j.n.Y'): array {
    if (empty($reviews)) return $reviews;

    $tz      = reviews_wp_tz();
    $today   = new DateTime('today', $tz);
     $today->modify('-7 days'); // newest review date = today - 7 days
    $cutoff  = DateTime::createFromFormat('j.n.Y', $cutoff_date_string, $tz) ?: new DateTime('20.6.2025', $tz);
    if ($cutoff > $today) $cutoff = clone $today;

    $daily_seed = $today->format('Y-m-d');
    $reviews    = shuffle_with_seed($reviews, 'reviews-order:' . $daily_seed);

    $total    = count($reviews);
    $assigned = 0;
    $day_off  = 0;

    while ($assigned < $total) {
      $date = (clone $today)->modify("-{$day_off} days");
      if ($date < $cutoff) $date = clone $cutoff;

      $span   = max(0, $max_per_day - $min_per_day);
      $add    = ($span > 0) ? (stable_mod_index('perday:'.$daily_seed.':'.$day_off, $span + 1)) : 0;
      $perday = $min_per_day + $add;

      $take = min($perday, $total - $assigned);
      for ($i = 0; $i < $take; $i++) {
        $reviews[$assigned]['assigned_date'] = $date->format($display_format);
        $assigned++;
      }

      $day_off++;
      if ($date == $cutoff && $assigned >= $total) break;
    }

    foreach ($reviews as &$r) {
      if (empty($r['assigned_date'])) $r['assigned_date'] = $cutoff->format($display_format);
    }
    return $reviews;
  }

  // ===== BUILD FOR TODAY =====
  $tz         = reviews_wp_tz();
  $today_obj  = new DateTime('today', $tz);
  $daily_seed = $today_obj->format('Y-m-d');

  // Avatar pools based on page category
  $avatar_type = $is_nogavice_page ? 'nogavice' : ( $is_bokserice_page ? 'bokserice' : 'majice' );
  $avatar_pool = get_review_avatar_pool($avatar_type);

  $product_pool = get_wc_product_pool();

  // 1) Stable daily shuffle of review pools
  $auto_reviews_en   = shuffle_with_seed($auto_reviews_en,   'pool-en:'   . $daily_seed);
  $auto_reviews_ship = shuffle_with_seed($auto_reviews_ship, 'pool-ship:' . $daily_seed);

  // 2) Stable product assignment for the day
  $auto_reviews_en   = assign_products_stable($auto_reviews_en,   $product_pool, $daily_seed);
  $auto_reviews_ship = assign_products_stable($auto_reviews_ship, $product_pool, $daily_seed);

  // 3) Deterministic date distribution back to cutoff 20.06.2025
  $auto_reviews_en   = assign_dates_stable($auto_reviews_en,   '20.6.2025', 2, 9, 'j.n.Y');
  $auto_reviews_ship = assign_dates_stable($auto_reviews_ship, '20.6.2025', 2, 9, 'j.n.Y');


  // 4) Deterministic avatars (some real, some placeholder)
$auto_reviews_en   = assign_unique_avatars_first3_then_random_until30($auto_reviews_en,   $avatar_pool, $daily_seed, 'product', 3, 3, 30);

$auto_reviews_ship = assign_unique_avatars_first_n($auto_reviews_ship, $avatar_pool, $daily_seed, 'shipping', 0);

  
  

  // ===== PAGINATION CHUNKS =====
  $initial_count = 18;   // show on load
  $load_count    = 9;    // per "load more"

  $initial_product   = array_slice($auto_reviews_en, 0, $initial_count);
  $remaining_product = array_slice($auto_reviews_en, $initial_count);
  $chunks_product    = array_chunk($remaining_product, $load_count);

  $initial_ship   = array_slice($auto_reviews_ship, 0, $initial_count);
  $remaining_ship = array_slice($auto_reviews_ship, $initial_count);
  $chunks_ship    = array_chunk($remaining_ship, $load_count);

  // Dynamic counts
  $prod_count = count($auto_reviews_en);
  $ship_count = count($auto_reviews_ship);
?>

<section id="reviews-section" class="basic-reviews-section" style="margin-bottom:40px!important;padding-bottom:40px!important;">
  <div class="container basic-reviews-section-container" style="width:100%;max-width:1440px;padding-top:20px!important;margin:0 auto;padding-left: 10px; padding-right: 10px;">

    <!-- Tabs -->
    <div class="reviews-tabs" style="display:flex;gap:18px;border-bottom:1px solid #cbc8c8;margin-bottom:18px;">
      <button type="button" class="reviews-tab is-active" data-tab="product"
        style="appearance:none;background:#00000008;border:1px solid #cbc8c8;border-bottom:0;padding:8px 14px;border-radius:0;font-weight:700;">
        <?php echo esc_html__('Recenzije proizvoda', 'your-textdomain'); ?> (692)
      </button>
      <button type="button" class="reviews-tab" data-tab="shipping"
        style="appearance:none;background:transparent;border:1px solid transparent;border-bottom:0;padding:8px 14px;border-radius:0;font-weight:700;">
        <?php echo esc_html__('Recenzije dostave', 'your-textdomain'); ?> (389)
      </button>
    </div>

    <!-- PRODUCT GRID (default visible) -->
    <div class="reviews-grid" id="reviews-grid-product">
      <?php if (!empty($initial_product)) : foreach ($initial_product as $review) :
        $name  = $review['name'] ?? 'Anonymní';
        $text  = $review['text'] ?? '';
        $title = !empty($review['product_title']) ? $review['product_title'] : $rv_fallback_title;
        $url   = !empty($review['product_url'])   ? $review['product_url']   : '#';
        $stars = '★★★★★';
        $date_display = $review['assigned_date'] ?? '';
        $avatar_url   = !empty($review['avatar_url']) ? $review['avatar_url'] : '';
      ?>
        <article class="review-card">
          <div class="card-top">
            <h3 class="product-title"><a href="<?php echo esc_url($url); ?>">
              <?php echo esc_html($title); ?>
            </a></h3>
            <div class="date">
              <?php echo esc_html($date_display); ?>
            </div>
          </div>
          <div class="stars"><?php echo $stars; ?></div>
          <div class="identity">
            <?php if ( ! $is_nogavice_page && ! $is_ortopas_page && ! $is_bunion_page ) : ?>
              <?php if ($avatar_url) : ?>
                <div class="avatar"><img src="<?php echo esc_url($avatar_url); ?>" alt="" loading="lazy" /></div>
              <?php else : ?>
                <div class="avatar">👤</div>
              <?php endif; ?>
            <?php endif; ?>
            <div class="name"><?php echo esc_html($name); ?></div>
            <span class="verified"><?php _e('Potvrđeno','your-textdomain'); ?></span>
          </div>
          <div class="content"><?php echo esc_html($text); ?></div>
        </article>
      <?php endforeach; endif; ?>
    </div>

    <!-- SHIPPING GRID (hidden initially) -->
    <div class="reviews-grid" id="reviews-grid-shipping" style="display:none;">
      <?php if (!empty($initial_ship)) : foreach ($initial_ship as $review) :
        $name  = $review['name'] ?? 'Anonymní';
        $text  = $review['text'] ?? '';
        $title = !empty($review['product_title']) ? $review['product_title'] : $rv_fallback_title;
        $url   = !empty($review['product_url'])   ? $review['product_url']   : '#';
        $stars = '★★★★★';
        $date_display = $review['assigned_date'] ?? '';
        $avatar_url   = !empty($review['avatar_url']) ? $review['avatar_url'] : '';
      ?>
        <article class="review-card">
          <div class="card-top">
            <h3 class="product-title">
              <a href="<?php echo esc_url($url); ?>">
                <?php echo esc_html($title); ?>
              </a>
            </h3>
            <div class="date">
              <?php echo esc_html($date_display); ?>
            </div>
          </div>
          <div class="stars"><?php echo $stars; ?></div>
          <div class="identity">
            <?php if ( ! $is_nogavice_page && ! $is_ortopas_page && ! $is_bunion_page ) : ?>
              <?php if ($avatar_url) : ?>
                <div class="avatar"><img src="<?php echo esc_url($avatar_url); ?>" alt="" loading="lazy" /></div>
              <?php else : ?>
                <div class="avatar">👤</div>
              <?php endif; ?>
            <?php endif; ?>
            <div class="name"><?php echo esc_html($name); ?></div>
            <span class="verified"><?php _e('Potvrđeno','your-textdomain'); ?></span>
          </div>
          <?php if (!empty($review['headline'])) : ?>
            <div class="headline"><?php echo esc_html($review['headline']); ?></div>
          <?php endif; ?>
          <div class="content"><?php echo esc_html($text); ?></div>
        </article>
      <?php endforeach; endif; ?>
    </div>

  </div>

  <!-- Controls: one CTA row, reused per tab -->
  <div class="container basic-reviews-section-container" style="width:100%;max-width:1100px;margin-top:30px!important;margin:0 auto;">
    <div class="cta-button" style="background:transparent;padding:0;justify-content:left;">
      <a class="cta-button2 button button--xl"
         style="margin:0 auto;text-align:left;background:black;font-family:'Roboto',sans-serif;color:#fff;text-transform:none;font-size:15px;padding:10px 25px;"
         href="#"><?php echo get_field("singlepp_content_standard_reviews_seemore_button","options"); ?></a>
    </div>
    <div id="reviews-loading" style="display:none;text-align:center;padding:15px;">
      <div class="loader"></div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function(){
    // Data from PHP (already include product_title/product_url/assigned_date/avatar_url)
    const chunksProduct = <?php echo json_encode($chunks_product); ?>;
    const chunksShip    = <?php echo json_encode($chunks_ship); ?>;
    const isNogavice    = <?php echo ( $is_nogavice_page || $is_ortopas_page || $is_bunion_page ) ? 'true' : 'false'; ?>; // text-only (socks + back belt + bunion)
    const rvFallback    = <?php echo json_encode($rv_fallback_title); ?>;

    let nextProduct = 0;
    let nextShip    = 0;

    const tabs    = document.querySelectorAll('.reviews-tab');
    const gridP   = document.getElementById('reviews-grid-product');
    const gridS   = document.getElementById('reviews-grid-shipping');
    const seeMore = document.querySelector('.cta-button2');
    const loader  = document.getElementById('reviews-loading');

    let activeTab = 'product';

    function setTab(tab){
      activeTab = tab;
      tabs.forEach(t=>{
        if(t.dataset.tab === tab){ t.classList.add('is-active'); t.style.background='#00000008'; t.style.borderColor='#e6e6e6'; }
        else{ t.classList.remove('is-active'); t.style.background='transparent'; t.style.borderColor='transparent'; }
      });
      if(tab === 'product'){ gridP.style.display='grid'; gridS.style.display='none'; }
      else{ gridP.style.display='none'; gridS.style.display='grid'; }

      const moreAvail = tab === 'product'
        ? (nextProduct < (chunksProduct?.length || 0))
        : (nextShip < (chunksShip?.length || 0));
      if (seeMore) seeMore.style.display = moreAvail ? 'inline-block' : 'none';
    }

    setTab('product');
    tabs.forEach(btn => btn.addEventListener('click', ()=> setTab(btn.dataset.tab)));

    // Escape helper
    const esc = (str) => String(str ?? '').replace(/[&<>"']/g, s => ({
      '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;'
    }[s]));

    function avatarHtml(avatarUrl){
      if(isNogavice){ return ''; }
      if(avatarUrl){
        return `<div class="avatar"><img src="${esc(avatarUrl)}" alt="" loading="lazy" /></div>`;
      }
      return `<div class="avatar">👤</div>`;
    }

    // Append a chunk of cards into a grid
    function appendChunk(grid, chunk){
      chunk.forEach(function(review){
        const article = document.createElement('article');
        article.className = 'review-card is-new';

        const url       = review.product_url   || '#';
        const title     = review.product_title || rvFallback;
        const name      = review.name          || 'Anonymní';
        const text      = review.text          || '';
        const headline  = review.headline      || '';
        const date      = review.assigned_date || '';
        const avatarUrl = review.avatar_url    || '';

        article.innerHTML = `
          <div class="card-top">
            <h3 class="product-title"><a href="${esc(url)}">${esc(title)}</a></h3>
            <div class="date">${esc(date)}</div>
          </div>
          <div class="stars">★★★★★</div>
          <div class="identity">
            ${avatarHtml(avatarUrl)}
            <div class="name">${esc(name)}</div>
            <span class="verified"><?php _e('Potvrđeno','your-textdomain'); ?></span>
          </div>
          ${headline ? `<div class="headline">${esc(headline)}</div>` : ''}
          <div class="content">${esc(text)}</div>
        `;
        grid.appendChild(article);
      });
    }

    seeMore && seeMore.addEventListener('click', function(e){
      e.preventDefault();
      seeMore.style.display='none';
      loader.style.display='block';

      setTimeout(function(){
        if(activeTab === 'product' && nextProduct < (chunksProduct?.length || 0)){
          appendChunk(gridP, chunksProduct[nextProduct]);
          nextProduct++;
        }else if(activeTab === 'shipping' && nextShip < (chunksShip?.length || 0)){
          appendChunk(gridS, chunksShip[nextShip]);
          nextShip++;
        }
        loader.style.display='none';
        const moreAvail = activeTab === 'product'
          ? (nextProduct < (chunksProduct?.length || 0))
          : (nextShip < (chunksShip?.length || 0));
        if(moreAvail) seeMore.style.display='inline-block';
      }, 400);
    });
  });
</script>

<!-- new review styling -->
<style>
/* ===== Reviews: Full corrected CSS ===== */

/* Section + container */
#reviews-section{
  font-family: "Roboto", system-ui, -apple-system, Segoe UI, Arial, sans-serif;
  background:#f9f9f9;
}
.basic-reviews-section-container{
  max-width:1440px;
  margin:0 auto;
  padding:0 0px;
}

/* Tabs */
.reviews-tabs{ display:flex; gap:18px; border-bottom:1px solid #eee; margin-bottom:18px; }
.reviews-tab{
  appearance:none; background:transparent; border:1px solid transparent; border-bottom:0;
  padding:8px 14px; font-weight:700; cursor:pointer;
}
.reviews-tab.is-active{ background:#00000008; border-color:#e6e6e6; }

/* Grid */
.reviews-grid{
  display:grid;
  grid-template-columns:repeat(3, 1fr);
  gap:10px;
  width:100%;
}
@media (max-width:1100px){
  .reviews-grid{ grid-template-columns:repeat(2, 1fr); }
}
@media (max-width:640px){
  .reviews-grid{ grid-template-columns:1fr; }
}

/* Card */
.review-card{
  width:100%;
  height:100%;
  background:#fff;
  border:1px solid #efefef;
  border-radius:4px;
  box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
  padding:18px 20px;
  display:flex;
  flex-direction:column;
}

/* Card top */
.review-card .card-top{
  display:flex; align-items:flex-start; justify-content:space-between; gap:12px;
  margin:-2px 0 6px;
}
.review-card .product-title{
  margin:0; font-weight:800; font-size:16px; line-height:1.25;
}
.review-card .product-title a{
  color:#0e0e0e; text-decoration:underline; text-underline-offset:2px;
}
.review-card .date{
  color:#8c8c8c; font-size:13px; white-space:nowrap; margin-top:2px;
}

/* Stars */
.review-card .stars{
  letter-spacing:3px; font-size:18px; color:#0f0f0f; margin:2px 0 10px;
}

/* Identity */
.review-card .identity{
    
  display:flex;
  align-items:flex-start;   /* ⬅️ top-align items */
  gap:12px;
  margin:2px 0 12px;
  
  
}
.review-card .avatar{
  width:32px; height:32px;
  border:1px solid #dfdfdf;
  border-radius:0px;
  display:flex; align-items:center; justify-content:center;
  font-size:18px; color:#000; background:#fff;
  overflow:hidden;
}
.review-card .avatar img{
  width:100%;
  height:100%;
  object-fit:cover;
  display:block;
}
.review-card .name{ font-weight:700; color:#111; font-size:15px; }
.review-card .verified{
  display:inline-block; background:#0f0f0f; color:#fff;
  font-size:12px; font-weight:700; line-height:1;
  padding:5px 8px 4px; border-radius:3px; margin-left:6px;
}

/* Headline + body */
.review-card .headline{ font-weight:800; font-size:16px; color:#111; margin:6px 0 6px; }
.review-card .content{ color:#2b2b2b; font-size:15px; line-height:1.7; }

/* Reveal for appended cards */
.review-card.is-new{ animation:rv-fade .28s ease-out both; }
@keyframes rv-fade{ from{opacity:0; transform:translateY(6px);} to{opacity:1; transform:none;} }

/* Loader */
#reviews-loading .loader{
  width:28px; height:28px; border:3px solid #e6e6e6; border-top-color:#111; border-radius:50%;
  margin:0 auto; animation:rv-spin .75s linear infinite;
}
@keyframes rv-spin{ to{ transform:rotate(360deg);} }



/* Default avatar (placeholder) stays 32x32 */
.review-card .avatar{
  width:32px;
  height:32px;
  border:1px solid #dfdfdf;
  border-radius:0px;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:18px;
  color:#000;
  background:#fff;
  overflow:hidden;
}

/* If avatar contains a real image -> make it 80x80 */
.review-card .avatar:has(img){
  width:250px;
  height:250px;
  font-size:0; /* hide any accidental text spacing */
  align-items:stretch;
  justify-content:stretch;
}

.review-card .avatar img{
  width:100%;
  height:100%;
  object-fit:cover;
  display:block;
}

/* ONLY reviews with real image */
.review-card .identity:has(.avatar img){
  display:block;              /* ⬅️ image gets own row */
}

/* Real image wrapper */
.review-card .avatar:has(img){
  width:100%;
  height:auto;
  border:none;
  margin-bottom:10px;
}

/* Real image itself */
.review-card .avatar img{
  width:100%;
  max-width:320px;
  height:auto;
  display:block;
  object-fit:cover;
  border:1px solid #dfdfdf;
  border-radius:4px;
}

/* Name + verified BELOW image */
.review-card .identity:has(.avatar img) .name,
.review-card .identity:has(.avatar img) .verified{
  display:inline-block;
  vertical-align:middle;
}


@media (max-width: 991px){

  /* ONLY reviews with real image */
  .review-card .avatar:has(img){
    max-width:100%;
  }

  .review-card .avatar img{
    width:100%;        /* ✅ full width on mobile */
    max-width:100%;
    height:auto;
  }

}


</style>






<?php 
$faq_list = get_field('faq_list', 'option');
$faq_list2 = get_field('faq_list_2', 'option');
$faq_list3 = get_field('faq_list_3', 'option');
?>





<?php
$is_ortopas = ( function_exists('noriks_is_type') && noriks_is_type('ortopas') );
$is_knc = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice') );
if ( $is_ortopas ) { $is_knc = false; } // belt carries the sock cat but is NOT socks

// Orthopedic back belt (ortopas) — product FAQ, replaces ONLY the
// "Informacije o Proizvodu" container. (Prijevod s njemačke reference, NORIKS.)
$ortopas_faq = array(
  array(
    'questioon' => 'Koliko brzo osjetim olakšanje boli?',
    'answer'    => 'Mnogi korisnici osjete primjetno olakšanje išijasa i križobolje odmah nakon stavljanja NORIKS pojasa. Njegova ciljana kompresija pruža trenutnu potporu, stabilizira kralježnicu i smanjuje pritisak na živce. Za dugotrajan učinak preporučujemo da pojas nosite dosljedno prema uputama najmanje dva tjedna. S vremenom ćete, uz pravilnu primjenu i zdrave navike, moći osjetiti trajno olakšanje i poboljšanu pokretljivost.'
  ),
  array(
    'questioon' => 'Kako pravilno postaviti pojas?',
    'answer'    => 'NORIKS pojas treba nositi oko bokova, malo ispod linije pojasa. Trebao bi sjediti iznad sakralnog područja (donjeg dijela leđa, neposredno iznad stražnjice) i ispod grebena zdjelice (gornjeg dijela bočnih kukova). Za više informacija možete pogledati upute za uporabu.'
  ),
  array(
    'questioon' => 'Slabi li pojas moje mišiće?',
    'answer'    => 'Ne, NORIKS pojas neće oslabiti vaše mišiće poput lumbalnog steznika. Dok lumbalni steznik zamjenjuje mišiće trupa i može ih pri duljem nošenju oslabiti, NORIKS pojas samo pomaže držati SI-zglobove zajedno i vraća vaše ligamente u njihovu normalnu napetost. Možete ga nositi tjednima ili mjesecima bez straha od atrofije mišića.'
  ),
  array(
    'questioon' => 'Mogu li nositi pojas i tijekom spavanja?',
    'answer'    => 'Da, pojas možete nositi i noću. Nema ograničenja u trajanju nošenja pojasa, a dulje nošenje neće imati negativnih učinaka.'
  ),
  array(
    'questioon' => 'Koliko čvrsto treba stajati?',
    'answer'    => 'Pojas bi trebao čvrsto prianjati, ali ne prestegnuto, kako bi se izbjegla nelagoda ili mjesta pritiska. Trebali biste se moći bez problema kretati, a da vas pojas neugodno ne reže niti klizi. Čvrstoća se lako podešava elastičnim zateznim trakama.'
  ),
  array(
    'questioon' => 'Za koga je NORIKS pojas namijenjen?',
    'answer'    => 'Za svakoga tko pati od bolova u donjem dijelu leđa, išijasa, mišićne napetosti, hernije diska, bolova u kukovima ili zdjelici te problema sa SI-zglobom. Neovisno o dobi, spolu, visini i tjelesnoj težini.'
  ),
  array(
    'questioon' => 'Postoji li jamstvo povrata novca ako pojas ne pomogne?',
    'answer'    => 'Nudimo jamstvo zadovoljstva! Ako niste zadovoljni NORIKS pojasom, kontaktirajte nas na info@noriks.com za povrat i povrat novca unutar 90 dana. Rok počinje od primitka pojasa.<br><br>U središtu nam je podrška u svakodnevnom ublažavanju vaših bolova. Zato vas potičemo da NORIKS pojas najprije dva tjedna testirate svakodnevno prije nego što donesete odluku.'
  ),
);

// Compression-sock benefit content — replaces ONLY the "Informacije o Proizvodu"
// container on sock products. Dostava/Povrati stay as they are.
$knc_faq = array(
  array(
    'questioon' => 'Teške i umorne noge',
    'answer'    => 'NORIKS kompresijske čarape koriste graduiranu kompresiju od 15–20 mmHg kako bi potaknule cirkulaciju od gležnja prema gore. Umjesto da se krv zadržava u nogama, postupni pritisak podupire prirodni povratni tok. Vaše noge osjećaju se lakše već nakon nekoliko sati.'
  ),
  array(
    'questioon' => 'Proširene vene i venski problemi',
    'answer'    => 'Kada cirkulacija oslabi, vene se šire te postaju vidljive i bolne. NORIKS čarape vrše blag, ali konstantan pritisak koji podupire stijenke vena i olakšava protok krvi. Idealne su kao dopuna medicinskom tretmanu ili za prevenciju kod osoba sklonih venskim problemima.'
  ),
  array(
    'questioon' => 'Otekline i zadržavanje vode',
    'answer'    => 'Dugotrajno sjedenje ili stajanje uzrokuje nakupljanje tekućine u gležnjevima i listovima. NORIKS čarape vrše najjači pritisak na gležnju, koji se prema gore postupno smanjuje — ta graduirana kompresija pomaže smanjiti otekline i sprječava da se zadržavanje vode tijekom dana ustali.'
  ),
  array(
    'questioon' => 'Utrnulost i trnci',
    'answer'    => 'Preuske ili loše prilagođene čarape pritišću krvne žile i uzrokuju taj neugodni osjećaj trnaca. NORIKS čarape osmišljene su s prozračnom tkaninom i uravnoteženom kompresijom koja potiče cirkulaciju bez prekidanja protoka krvi. Vaše noge ostaju vitalne i osjetljive, bez utrnulosti ili trnaca.'
  ),
  array(
    'questioon' => 'Udobnost za osjetljivu kožu',
    'answer'    => 'Čak i blag pritisak može postati neugodan na osjetljivoj ili nadraženoj koži. NORIKS čarape kombiniraju mekanu i prozračnu tkaninu, zaštitnu unutarnju podstavu uz zatvarač te umjerenu kompresiju za učinkovitu potporu bez trenja ili nadraživanja. Nosite ih cijeli dan bez brige.'
  ),
);

// On sock products, swap the list only for the "Informacije o Proizvodu" container.
$faq_pick = function( $title, $list ) use ( $is_knc, $knc_faq, $is_ortopas, $ortopas_faq ) {
  $is_info = ( stripos( (string) $title, 'Informacije o Proizvodu' ) !== false );
  if ( $is_ortopas && $is_info ) {
    return $ortopas_faq;
  }
  if ( $is_knc && $is_info ) {
    return $knc_faq;
  }
  return $list;
};

// Shared item renderer.
$render_faq_items = function( $list ) {
  if ( $list && is_array( $list ) ):
    foreach ( $list as $faq_item ): ?>
      <div class="faq-item">
        <button class="faq-question">
          <?php echo $faq_item["questioon"]; ?>
          <span class="arrow">&#9660;</span>
        </button>
        <div class="faq-answer">
          <p><?php echo $faq_item["answer"]; ?></p>
        </div>
      </div>
    <?php endforeach;
  endif;
};

$faq_title_1 = get_field('faq_title_1', 'option');
$faq_title_2 = get_field('faq_title_2', 'option');
$faq_title_3 = get_field('faq_title_3', 'option');
?>
<section class="faq-section">
  <h2><?php echo get_field("singlepp_content_part_faq_h1","options"); ?></h2>

   <!-- first faq container -->
      <div class="faq-container">
         <h4 style="text-align:left; font-size: 1rem;
            font-weight: 700;
            color: #222223;
            margin-bottom: 10px; "><?php echo $faq_title_1; ?></h4>
         <?php $render_faq_items( $faq_pick( $faq_title_1, $faq_list ) ); ?>
      </div>
    <!-- first faq container -->

     <!-- 2 faq container -->
      <div class="faq-container">
          <br/>
         <h4 style="text-align:left; font-size: 1rem;
            font-weight: 700;
            color: #001e36;
            margin-bottom: 10px; "><?php echo $faq_title_2; ?></h4>
         <?php $render_faq_items( $faq_pick( $faq_title_2, $faq_list2 ) ); ?>
      </div>
        <!-- 2 faq container -->

     <!-- 3 faq container -->
      <div class="faq-container">
          <br/>
         <h4 style="text-align:left; font-size: 1rem;
            font-weight: 700;
            color: #001e36;
            margin-bottom: 10px; "><?php echo $faq_title_3; ?></h4>
         <?php $render_faq_items( $faq_pick( $faq_title_3, $faq_list3 ) ); ?>
      </div>
  <!-- 3 faq container -->

</section>

<script>
  document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
      const faqAnswer = button.nextElementSibling;
      const arrow = button.querySelector('.arrow');

      if (faqAnswer.style.maxHeight) {
        faqAnswer.style.maxHeight = null;
        arrow.style.transform = 'rotate(0deg)';
      } else {
        document.querySelectorAll('.faq-answer').forEach(item => {
          item.style.maxHeight = null;
        });
        document.querySelectorAll('.arrow').forEach(item => {
          item.style.transform = 'rotate(0deg)';
        });
        faqAnswer.style.maxHeight = faqAnswer.scrollHeight + 'px';
        arrow.style.transform = 'rotate(180deg)';
      }
    });
  });
</script>
		


