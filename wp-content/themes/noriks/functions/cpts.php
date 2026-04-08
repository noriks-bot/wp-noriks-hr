<?php

function noriks_register_landigs_post_type() {
    $labels = array(
        'name'                  => _x('Landigs', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Landing', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Landigs', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Landing', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Landing', 'textdomain'),
        'new_item'              => __('New Landing', 'textdomain'),
        'edit_item'             => __('Edit Landing', 'textdomain'),
        'view_item'             => __('View Landing', 'textdomain'),
        'all_items'             => __('All Landigs', 'textdomain'),
        'search_items'          => __('Search Landigs', 'textdomain'),
        'not_found'             => __('No landigs found.', 'textdomain'),
        'not_found_in_trash'    => __('No landigs found in Trash.', 'textdomain'),
        'featured_image'        => _x('Landing Image', 'Overrides the “Featured Image” phrase.', 'textdomain'),
        'set_featured_image'    => _x('Set landing image', 'Overrides the “Set featured image” phrase.', 'textdomain'),
        'remove_featured_image' => _x('Remove landing image', 'Overrides the “Remove featured image” phrase.', 'textdomain'),
        'use_featured_image'    => _x('Use as landing image', 'Overrides the “Use as featured image” phrase.', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_in_menu'       => true,
        'show_ui'            => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'landigs', 'with_front' => false),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 23,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true,
    );

    register_post_type('landigs', $args);
}

function noriks_register_landigs_meta() {
    $meta_fields = array(
        '_landigs_target_product_id'  => 'integer',
        '_landigs_target_product_url' => 'string',
        '_landigs_primary_label'      => 'string',
        '_landigs_primary_options'    => 'string',
        '_landigs_secondary_label'    => 'string',
        '_landigs_secondary_options'  => 'string',
        '_landigs_hide_secondary'     => 'string',
        '_landigs_offer_options'      => 'string',
    );

    foreach ($meta_fields as $key => $type) {
        register_post_meta('landigs', $key, array(
            'single'            => true,
            'type'              => $type,
            'show_in_rest'      => true,
            'sanitize_callback' => $type === 'integer' ? 'absint' : 'sanitize_textarea_field',
            'auth_callback'     => function () {
                return current_user_can('edit_posts');
            },
        ));
    }
}

function noriks_add_landigs_meta_box() {
    add_meta_box(
        'noriks-landigs-settings',
        __('Landing Settings', 'textdomain'),
        'noriks_render_landigs_meta_box',
        'landigs',
        'normal',
        'high'
    );
}

function noriks_render_landigs_meta_box($post) {
    wp_nonce_field('noriks_landigs_meta_box', 'noriks_landigs_meta_box_nonce');

    $fields = array(
        '_landigs_target_product_id'  => '',
        '_landigs_target_product_url' => '',
        '_landigs_primary_label'      => 'Boja',
        '_landigs_primary_options'    => "Crna|#000000\nBijela|#f5f5f5\nSiva|#9ca3af\nTamnoplava|#243647\nSmeđa|#7c5a3c\nMaslinasta|#607d33",
        '_landigs_secondary_label'    => 'Veličina',
        '_landigs_secondary_options'  => "S\nM\nL\nXL\nXXL\n3XL\n4XL",
        '_landigs_hide_secondary'     => '0',
        '_landigs_offer_options'      => "1|1 majica|odličan ulazni paket 17.96€|PRIHRANITE 49%\n2|2 majice|najbolji omjer cijene i količine 44.28€|PRIHRANITE 59%\n3|3 majice|najveća ušteda po komadu 69.26€|PRIHRANITE 62%\n5|5 majica|najveći paket za maksimalnu uštedu 135.38€|PRIHRANITE 73%",
    );

    echo '<table class="form-table"><tbody>';

    foreach ($fields as $key => $default) {
        $value = get_post_meta($post->ID, $key, true);
        if ($value === '') {
            $value = $default;
        }

        $label = ucwords(trim(str_replace(array('_landigs_', '_'), array('', ' '), $key)));
        echo '<tr>';
        echo '<th scope="row"><label for="' . esc_attr($key) . '">' . esc_html($label) . '</label></th>';
        echo '<td>';

        if ($key === '_landigs_hide_secondary') {
            echo '<label><input type="checkbox" name="' . esc_attr($key) . '" value="1" ' . checked($value, '1', false) . '> ' . esc_html__('Hide secondary options', 'textdomain') . '</label>';
        } elseif ($key === '_landigs_target_product_id') {
            echo '<input type="number" class="regular-text" name="' . esc_attr($key) . '" id="' . esc_attr($key) . '" value="' . esc_attr($value) . '">';
        } elseif (strpos($key, '_options') !== false) {
            echo '<textarea class="large-text code" rows="6" name="' . esc_attr($key) . '" id="' . esc_attr($key) . '">' . esc_textarea($value) . '</textarea>';
        } else {
            echo '<input type="text" class="large-text" name="' . esc_attr($key) . '" id="' . esc_attr($key) . '" value="' . esc_attr($value) . '">';
        }

        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody></table>';
}

function noriks_save_landigs_meta($post_id) {
    if (!isset($_POST['noriks_landigs_meta_box_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['noriks_landigs_meta_box_nonce'])), 'noriks_landigs_meta_box')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $keys = array(
        '_landigs_target_product_id',
        '_landigs_target_product_url',
        '_landigs_primary_label',
        '_landigs_primary_options',
        '_landigs_secondary_label',
        '_landigs_secondary_options',
        '_landigs_hide_secondary',
        '_landigs_offer_options',
    );

    foreach ($keys as $key) {
        if ($key === '_landigs_hide_secondary') {
            update_post_meta($post_id, $key, isset($_POST[$key]) ? '1' : '0');
            continue;
        }

        if (!isset($_POST[$key])) {
            continue;
        }

        $raw_value = wp_unslash($_POST[$key]);
        $value = $key === '_landigs_target_product_id' ? absint($raw_value) : sanitize_textarea_field($raw_value);
        update_post_meta($post_id, $key, $value);
    }
}

function noriks_ensure_default_step_landing() {
    if (!post_type_exists('landigs')) {
        return;
    }

    $existing = get_page_by_path('step-landing', OBJECT, 'landigs');
    if ($existing) {
        return;
    }

    $post_id = wp_insert_post(array(
        'post_type'   => 'landigs',
        'post_status' => 'publish',
        'post_title'  => 'Step Landing',
        'post_name'   => 'step-landing',
    ));

    if (!$post_id || is_wp_error($post_id)) {
        return;
    }

    update_post_meta($post_id, '_landigs_target_product_id', 3421);
    update_post_meta($post_id, '_landigs_target_product_url', home_url('/hr/product/noriks-majica/'));
    update_post_meta($post_id, '_landigs_primary_label', 'Boja');
    update_post_meta($post_id, '_landigs_primary_options', "Crna|#000000\nBijela|#f5f5f5\nSiva|#9ca3af\nTamnoplava|#243647\nSmeđa|#7c5a3c\nMaslinasta|#607d33");
    update_post_meta($post_id, '_landigs_secondary_label', 'Veličina');
    update_post_meta($post_id, '_landigs_secondary_options', "S\nM\nL\nXL\nXXL\n3XL\n4XL");
    update_post_meta($post_id, '_landigs_hide_secondary', '0');
    update_post_meta($post_id, '_landigs_offer_options', "1|1 majica|odličan ulazni paket 17.96€|PRIHRANITE 49%\n2|2 majice|najbolji omjer cijene i količine 44.28€|PRIHRANITE 59%\n3|3 majice|najveća ušteda po komadu 69.26€|PRIHRANITE 62%\n5|5 majica|najveći paket za maksimalnu uštedu 135.38€|PRIHRANITE 73%");
    flush_rewrite_rules(false);
}

function noriks_register_collections_taxonomy() {
    $labels = array(
        'name'              => _x('Collections', 'taxonomy general name', 'textdomain'),
        'singular_name'     => _x('Collection', 'taxonomy singular name', 'textdomain'),
        'search_items'      => __('Search Collections', 'textdomain'),
        'all_items'         => __('All Collections', 'textdomain'),
        'edit_item'         => __('Edit Collection', 'textdomain'),
        'update_item'       => __('Update Collection', 'textdomain'),
        'add_new_item'      => __('Add New Collection', 'textdomain'),
        'new_item_name'     => __('New Collection Name', 'textdomain'),
        'menu_name'         => __('Collections', 'textdomain'),
    );

    register_taxonomy('collections', array('product'), array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => false,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => array(
            'slug'       => 'collections',
            'with_front' => false,
        ),
    ));
}

function noriks_flush_rewrite_once() {
    if (get_option('noriks_collections_rewrite_flushed') === '1') {
        return;
    }

    flush_rewrite_rules(false);
    update_option('noriks_collections_rewrite_flushed', '1', false);
}

function noriks_ensure_default_collection_akcija() {
    if (!taxonomy_exists('collections')) {
        return;
    }

    $term = get_term_by('slug', 'akcija', 'collections');
    if ($term && !is_wp_error($term)) {
        return;
    }

    $created = wp_insert_term('Akcija', 'collections', array(
        'slug' => 'akcija',
    ));

    if (is_wp_error($created) || empty($created['term_id'])) {
        return;
    }

    $term_id = (int) $created['term_id'];
    update_term_meta($term_id, 'noriks_collection_promo_title', 'AKCIJA');
    update_term_meta($term_id, 'noriks_collection_promo_subtitle', 'Posebno odabrani proizvodi i ponude');
    update_term_meta($term_id, 'noriks_collection_bottom_banner_title', 'Tražiš još ponuda?');
    update_term_meta($term_id, 'noriks_collection_bottom_banner_subtitle', 'NORIKS rasprodaja, popust do 50 % 🔥');
    update_term_meta($term_id, 'noriks_collection_bottom_banner_button_text', 'Kupi više i uštedi →');
    update_term_meta($term_id, 'noriks_collection_bottom_banner_button_url', '/collections/akcija/');
    update_term_meta($term_id, 'noriks_collection_bottom_banner_image_id', 0);
    update_term_meta($term_id, 'noriks_collection_product_order', '');
    update_term_meta($term_id, 'noriks_collection_bottom_product_ids', '');
}

function noriks_collection_order_ids_from_string($value) {
    $parts = preg_split('/[\s,]+/', (string) $value);
    $parts = array_filter(array_map('absint', $parts));
    return array_values(array_unique($parts));
}

function noriks_add_collection_term_fields() {
    ?>
    <div class="form-field term-group">
        <label for="noriks-collection-promo-title"><?php esc_html_e('Black Banner Title', 'textdomain'); ?></label>
        <input type="text" id="noriks-collection-promo-title" name="noriks_collection_promo_title" value="AKCIJA">
    </div>
    <div class="form-field term-group">
        <label for="noriks-collection-promo-subtitle"><?php esc_html_e('Black Banner Subtitle', 'textdomain'); ?></label>
        <input type="text" id="noriks-collection-promo-subtitle" name="noriks_collection_promo_subtitle" value="Posebno odabrani proizvodi i ponude">
    </div>
    <div class="form-field term-group">
        <label for="noriks-collection-bottom-banner-title"><?php esc_html_e('Bottom Banner Title', 'textdomain'); ?></label>
        <input type="text" id="noriks-collection-bottom-banner-title" name="noriks_collection_bottom_banner_title" value="Tražiš još ponuda?">
    </div>
    <div class="form-field term-group">
        <label for="noriks-collection-bottom-banner-subtitle"><?php esc_html_e('Bottom Banner Subtitle', 'textdomain'); ?></label>
        <input type="text" id="noriks-collection-bottom-banner-subtitle" name="noriks_collection_bottom_banner_subtitle" value="NORIKS rasprodaja, popust do 50 % 🔥">
    </div>
    <div class="form-field term-group">
        <label for="noriks-collection-bottom-banner-button-text"><?php esc_html_e('Bottom Banner Button Text', 'textdomain'); ?></label>
        <input type="text" id="noriks-collection-bottom-banner-button-text" name="noriks_collection_bottom_banner_button_text" value="Kupi više i uštedi →">
    </div>
    <div class="form-field term-group">
        <label for="noriks-collection-bottom-banner-button-url"><?php esc_html_e('Bottom Banner Button URL', 'textdomain'); ?></label>
        <input type="text" id="noriks-collection-bottom-banner-button-url" name="noriks_collection_bottom_banner_button_url" value="/collections/akcija/">
    </div>
    <div class="form-field term-group">
        <label for="noriks-collection-bottom-banner-image-id"><?php esc_html_e('Bottom Banner Image', 'textdomain'); ?></label>
        <input type="hidden" id="noriks-collection-bottom-banner-image-id" name="noriks_collection_bottom_banner_image_id" value="">
        <div class="noriks-collection-banner-preview" style="margin:10px 0;"></div>
        <button type="button" class="button noriks-collection-upload"><?php esc_html_e('Select Image', 'textdomain'); ?></button>
        <button type="button" class="button noriks-collection-remove"><?php esc_html_e('Remove Image', 'textdomain'); ?></button>
    </div>
    <div class="form-field term-group">
        <label for="noriks-collection-product-order"><?php esc_html_e('Manual Product Order', 'textdomain'); ?></label>
        <textarea id="noriks-collection-product-order" name="noriks_collection_product_order" rows="6" placeholder="3421, 3550, 4001"></textarea>
        <p class="description"><?php esc_html_e('Enter product IDs in the exact order you want them shown. Separate with commas or new lines.', 'textdomain'); ?></p>
    </div>
    <div class="form-field term-group">
        <label for="noriks-collection-bottom-product-ids"><?php esc_html_e('Bottom Products', 'textdomain'); ?></label>
        <textarea id="noriks-collection-bottom-product-ids" name="noriks_collection_bottom_product_ids" rows="4" placeholder="5001, 5002, 5003, 5004"></textarea>
        <p class="description"><?php esc_html_e('Optional extra products shown at the very bottom of the collection. Enter up to 4 product IDs, separated by commas or new lines.', 'textdomain'); ?></p>
    </div>
    <?php
}

function noriks_edit_collection_term_fields($term) {
    $promo_title = get_term_meta($term->term_id, 'noriks_collection_promo_title', true);
    $promo_subtitle = get_term_meta($term->term_id, 'noriks_collection_promo_subtitle', true);
    $bottom_banner_title = get_term_meta($term->term_id, 'noriks_collection_bottom_banner_title', true);
    $bottom_banner_subtitle = get_term_meta($term->term_id, 'noriks_collection_bottom_banner_subtitle', true);
    $bottom_banner_button_text = get_term_meta($term->term_id, 'noriks_collection_bottom_banner_button_text', true);
    $bottom_banner_button_url = get_term_meta($term->term_id, 'noriks_collection_bottom_banner_button_url', true);
    $bottom_banner_image_id = get_term_meta($term->term_id, 'noriks_collection_bottom_banner_image_id', true);
    $product_order   = get_term_meta($term->term_id, 'noriks_collection_product_order', true);
    $bottom_products = get_term_meta($term->term_id, 'noriks_collection_bottom_product_ids', true);
    $bottom_image_url = $bottom_banner_image_id ? wp_get_attachment_image_url((int) $bottom_banner_image_id, 'medium') : '';
    ?>
    <tr class="form-field term-group-wrap">
        <th scope="row"><label for="noriks-collection-promo-title"><?php esc_html_e('Black Banner Title', 'textdomain'); ?></label></th>
        <td><input type="text" id="noriks-collection-promo-title" name="noriks_collection_promo_title" value="<?php echo esc_attr($promo_title); ?>" class="large-text"></td>
    </tr>
    <tr class="form-field term-group-wrap">
        <th scope="row"><label for="noriks-collection-promo-subtitle"><?php esc_html_e('Black Banner Subtitle', 'textdomain'); ?></label></th>
        <td><input type="text" id="noriks-collection-promo-subtitle" name="noriks_collection_promo_subtitle" value="<?php echo esc_attr($promo_subtitle); ?>" class="large-text"></td>
    </tr>
    <tr class="form-field term-group-wrap">
        <th scope="row"><label for="noriks-collection-bottom-banner-title"><?php esc_html_e('Bottom Banner Title', 'textdomain'); ?></label></th>
        <td><input type="text" id="noriks-collection-bottom-banner-title" name="noriks_collection_bottom_banner_title" value="<?php echo esc_attr($bottom_banner_title); ?>" class="large-text"></td>
    </tr>
    <tr class="form-field term-group-wrap">
        <th scope="row"><label for="noriks-collection-bottom-banner-subtitle"><?php esc_html_e('Bottom Banner Subtitle', 'textdomain'); ?></label></th>
        <td><input type="text" id="noriks-collection-bottom-banner-subtitle" name="noriks_collection_bottom_banner_subtitle" value="<?php echo esc_attr($bottom_banner_subtitle); ?>" class="large-text"></td>
    </tr>
    <tr class="form-field term-group-wrap">
        <th scope="row"><label for="noriks-collection-bottom-banner-button-text"><?php esc_html_e('Bottom Banner Button Text', 'textdomain'); ?></label></th>
        <td><input type="text" id="noriks-collection-bottom-banner-button-text" name="noriks_collection_bottom_banner_button_text" value="<?php echo esc_attr($bottom_banner_button_text); ?>" class="large-text"></td>
    </tr>
    <tr class="form-field term-group-wrap">
        <th scope="row"><label for="noriks-collection-bottom-banner-button-url"><?php esc_html_e('Bottom Banner Button URL', 'textdomain'); ?></label></th>
        <td><input type="text" id="noriks-collection-bottom-banner-button-url" name="noriks_collection_bottom_banner_button_url" value="<?php echo esc_attr($bottom_banner_button_url); ?>" class="large-text"></td>
    </tr>
    <tr class="form-field term-group-wrap">
        <th scope="row"><label for="noriks-collection-bottom-banner-image-id"><?php esc_html_e('Bottom Banner Image', 'textdomain'); ?></label></th>
        <td>
            <input type="hidden" id="noriks-collection-bottom-banner-image-id" name="noriks_collection_bottom_banner_image_id" value="<?php echo esc_attr($bottom_banner_image_id); ?>">
            <div class="noriks-collection-banner-preview" style="margin:10px 0;">
                <?php if ($bottom_image_url) : ?>
                    <img src="<?php echo esc_url($bottom_image_url); ?>" alt="" style="max-width:240px;height:auto;">
                <?php endif; ?>
            </div>
            <button type="button" class="button noriks-collection-upload"><?php esc_html_e('Select Image', 'textdomain'); ?></button>
            <button type="button" class="button noriks-collection-remove"><?php esc_html_e('Remove Image', 'textdomain'); ?></button>
        </td>
    </tr>
    <tr class="form-field term-group-wrap">
        <th scope="row"><label for="noriks-collection-product-order"><?php esc_html_e('Manual Product Order', 'textdomain'); ?></label></th>
        <td>
            <textarea id="noriks-collection-product-order" name="noriks_collection_product_order" rows="8" class="large-text"><?php echo esc_textarea($product_order); ?></textarea>
            <p class="description"><?php esc_html_e('Enter product IDs in the exact order you want them shown. Separate with commas or new lines.', 'textdomain'); ?></p>
        </td>
    </tr>
    <tr class="form-field term-group-wrap">
        <th scope="row"><label for="noriks-collection-bottom-product-ids"><?php esc_html_e('Bottom Products', 'textdomain'); ?></label></th>
        <td>
            <textarea id="noriks-collection-bottom-product-ids" name="noriks_collection_bottom_product_ids" rows="5" class="large-text"><?php echo esc_textarea($bottom_products); ?></textarea>
            <p class="description"><?php esc_html_e('Optional extra products shown at the very bottom of the collection. Enter up to 4 product IDs, separated by commas or new lines.', 'textdomain'); ?></p>
        </td>
    </tr>
    <?php
}

function noriks_save_collection_term_meta($term_id) {
    $promo_title = isset($_POST['noriks_collection_promo_title']) ? sanitize_text_field(wp_unslash($_POST['noriks_collection_promo_title'])) : '';
    $promo_subtitle = isset($_POST['noriks_collection_promo_subtitle']) ? sanitize_text_field(wp_unslash($_POST['noriks_collection_promo_subtitle'])) : '';
    $bottom_banner_title = isset($_POST['noriks_collection_bottom_banner_title']) ? sanitize_text_field(wp_unslash($_POST['noriks_collection_bottom_banner_title'])) : '';
    $bottom_banner_subtitle = isset($_POST['noriks_collection_bottom_banner_subtitle']) ? sanitize_text_field(wp_unslash($_POST['noriks_collection_bottom_banner_subtitle'])) : '';
    $bottom_banner_button_text = isset($_POST['noriks_collection_bottom_banner_button_text']) ? sanitize_text_field(wp_unslash($_POST['noriks_collection_bottom_banner_button_text'])) : '';
    $bottom_banner_button_url = isset($_POST['noriks_collection_bottom_banner_button_url']) ? esc_url_raw(wp_unslash($_POST['noriks_collection_bottom_banner_button_url'])) : '';
    $bottom_banner_image_id = isset($_POST['noriks_collection_bottom_banner_image_id']) ? absint($_POST['noriks_collection_bottom_banner_image_id']) : 0;
    $product_order_raw = isset($_POST['noriks_collection_product_order']) ? wp_unslash($_POST['noriks_collection_product_order']) : '';
    $bottom_product_raw = isset($_POST['noriks_collection_bottom_product_ids']) ? wp_unslash($_POST['noriks_collection_bottom_product_ids']) : '';
    $product_order_ids = noriks_collection_order_ids_from_string($product_order_raw);
    $bottom_product_ids = array_slice(noriks_collection_order_ids_from_string($bottom_product_raw), 0, 4);

    update_term_meta($term_id, 'noriks_collection_promo_title', $promo_title);
    update_term_meta($term_id, 'noriks_collection_promo_subtitle', $promo_subtitle);
    update_term_meta($term_id, 'noriks_collection_bottom_banner_title', $bottom_banner_title);
    update_term_meta($term_id, 'noriks_collection_bottom_banner_subtitle', $bottom_banner_subtitle);
    update_term_meta($term_id, 'noriks_collection_bottom_banner_button_text', $bottom_banner_button_text);
    update_term_meta($term_id, 'noriks_collection_bottom_banner_button_url', $bottom_banner_button_url);
    update_term_meta($term_id, 'noriks_collection_bottom_banner_image_id', $bottom_banner_image_id);
    update_term_meta($term_id, 'noriks_collection_product_order', implode("\n", $product_order_ids));
    update_term_meta($term_id, 'noriks_collection_bottom_product_ids', implode("\n", $bottom_product_ids));
}

function noriks_enqueue_collection_term_admin_assets($hook) {
    if (($hook !== 'edit-tags.php' && $hook !== 'term.php') || empty($_GET['taxonomy']) || $_GET['taxonomy'] !== 'collections') {
        return;
    }

    wp_enqueue_media();

    $script = <<<JS
(function($){
  function bindCollectionMedia(){
    var frame;
    $('.noriks-collection-upload').off('click').on('click', function(e){
      e.preventDefault();
      var button = $(this);
      var container = button.closest('td, .form-field');
      if(frame){ frame.open(); return; }
      frame = wp.media({ title: 'Select banner image', button: { text: 'Use image' }, multiple: false });
      frame.on('select', function(){
        var attachment = frame.state().get('selection').first().toJSON();
        container.find('input[type="hidden"]').first().val(attachment.id);
        container.find('.noriks-collection-banner-preview').html('<img src="'+attachment.url+'" style="max-width:240px;height:auto;" alt="">');
      });
      frame.open();
    });
    $('.noriks-collection-remove').off('click').on('click', function(e){
      e.preventDefault();
      var container = $(this).closest('td, .form-field');
      container.find('input[type="hidden"]').first().val('');
      container.find('.noriks-collection-banner-preview').empty();
    });
  }
  $(bindCollectionMedia);
})(jQuery);
JS;

    wp_add_inline_script('jquery-core', $script);
    wp_add_inline_style('wp-admin', '
      .taxonomy-collections .term-description-wrap,
      .taxonomy-collections .term-parent-wrap {
        display: none !important;
      }
    ');
}

function noriks_hide_collections_from_product_list_admin() {
    $screen = function_exists('get_current_screen') ? get_current_screen() : null;

    if (!$screen || $screen->id !== 'edit-product') {
        return;
    }

    echo '<style>
    .column-taxonomy-collections,
    #dropdown_taxonomy_collections {
      display: none !important;
    }
    </style>';
}


function register_custom_post_type_lander() {
    $labels = array(
        'name'                  => _x('Landers', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Lander', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Landers', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Lander', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Lander', 'textdomain'),
        'new_item'              => __('New Lander', 'textdomain'),
        'edit_item'             => __('Edit Lander', 'textdomain'),
        'view_item'             => __('View Lander', 'textdomain'),
        'all_items'             => __('All Landers', 'textdomain'),
        'search_items'          => __('Search Landers', 'textdomain'),
        'not_found'             => __('No landers found.', 'textdomain'),
        'not_found_in_trash'    => __('No landers found in Trash.', 'textdomain'),
        'featured_image'        => _x('Lander Cover Image', 'Overrides the “Featured Image” phrase.', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase.', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase.', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase.', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'lander'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-location-alt', // optional icon
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true, // enables Gutenberg and REST API
    );

    register_post_type('lander', $args);
}





// Register Product Reviews CPT
function register_custom_post_type_product_reviews() {
    $labels = array(
        'name'                  => _x('Product Reviews', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Product Review', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Product Reviews', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Product Review', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Product Review', 'textdomain'),
        'new_item'              => __('New Product Review', 'textdomain'),
        'edit_item'             => __('Edit Product Review', 'textdomain'),
        'view_item'             => __('View Product Review', 'textdomain'),
        'all_items'             => __('All Product Reviews', 'textdomain'),
        'search_items'          => __('Search Product Reviews', 'textdomain'),
        'not_found'             => __('No product reviews found.', 'textdomain'),
        'not_found_in_trash'    => __('No product reviews found in Trash.', 'textdomain'),
        'featured_image'        => _x('Product Image', 'Overrides the “Featured Image” phrase.', 'textdomain'),
        'set_featured_image'    => _x('Set product image', 'Overrides the “Set featured image” phrase.', 'textdomain'),
        'remove_featured_image' => _x('Remove product image', 'Overrides the “Remove featured image” phrase.', 'textdomain'),
        'use_featured_image'    => _x('Use as product image', 'Overrides the “Use as featured image” phrase.', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'product-review'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 21,
        'menu_icon'          => 'dashicons-star-half',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'comments'),
        'show_in_rest'       => true,
    );

    register_post_type('product_review', $args);
}






/* -----------------------------
   Register Lander2 CPT
------------------------------ */
function register_custom_post_type_lander2() {
    $labels = array(
        'name'                  => _x('Landers 2', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Lander 2', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Landers 2', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Lander 2', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Lander 2', 'textdomain'),
        'new_item'              => __('New Lander 2', 'textdomain'),
        'edit_item'             => __('Edit Lander 2', 'textdomain'),
        'view_item'             => __('View Lander 2', 'textdomain'),
        'all_items'             => __('All Landers 2', 'textdomain'),
        'search_items'          => __('Search Landers 2', 'textdomain'),
        'not_found'             => __('No landers found.', 'textdomain'),
        'not_found_in_trash'    => __('No landers found in Trash.', 'textdomain'),
        'featured_image'        => _x('Lander 2 Image', 'Overrides the Featured Image phrase', 'textdomain'),
        'set_featured_image'    => _x('Set image', 'Overrides the Set featured image phrase', 'textdomain'),
        'remove_featured_image' => _x('Remove image', 'Overrides the Remove featured image phrase', 'textdomain'),
        'use_featured_image'    => _x('Use as image', 'Overrides the Use as featured image phrase', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'lander2'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 22,
        'menu_icon'          => 'dashicons-admin-site',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true,
    );

    register_post_type('lander2', $args);
}


add_action('init', 'noriks_register_landigs_post_type');
add_action('init', 'noriks_register_collections_taxonomy');
add_action('init', 'register_custom_post_type_lander');
add_action('init', 'register_custom_post_type_product_reviews');
add_action('init', 'register_custom_post_type_lander2');
add_action('init', 'noriks_register_landigs_meta');
add_action('add_meta_boxes', 'noriks_add_landigs_meta_box');
add_action('save_post_landigs', 'noriks_save_landigs_meta');
add_action('init', 'noriks_ensure_default_step_landing', 20);
add_action('init', 'noriks_ensure_default_collection_akcija', 20);
add_action('init', 'noriks_flush_rewrite_once', 30);
add_action('collections_add_form_fields', 'noriks_add_collection_term_fields');
add_action('collections_edit_form_fields', 'noriks_edit_collection_term_fields');
add_action('created_collections', 'noriks_save_collection_term_meta');
add_action('edited_collections', 'noriks_save_collection_term_meta');
add_action('admin_enqueue_scripts', 'noriks_enqueue_collection_term_admin_assets');
add_action('admin_head-edit.php', 'noriks_hide_collections_from_product_list_admin');
