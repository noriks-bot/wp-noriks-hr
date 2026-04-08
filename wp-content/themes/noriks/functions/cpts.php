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
add_action('init', 'register_custom_post_type_lander');
add_action('init', 'register_custom_post_type_product_reviews');
add_action('init', 'register_custom_post_type_lander2');
add_action('init', 'noriks_register_landigs_meta');
add_action('add_meta_boxes', 'noriks_add_landigs_meta_box');
add_action('save_post_landigs', 'noriks_save_landigs_meta');
add_action('init', 'noriks_ensure_default_step_landing', 20);

