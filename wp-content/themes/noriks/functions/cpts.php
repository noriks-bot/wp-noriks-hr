<?php


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

function register_custom_post_type_landigs() {
    $labels = array(
        'name'                  => _x('Landigs', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Landig', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Landigs', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Landig', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Landig', 'textdomain'),
        'new_item'              => __('New Landig', 'textdomain'),
        'edit_item'             => __('Edit Landig', 'textdomain'),
        'view_item'             => __('View Landig', 'textdomain'),
        'all_items'             => __('All Landigs', 'textdomain'),
        'search_items'          => __('Search Landigs', 'textdomain'),
        'not_found'             => __('No landigs found.', 'textdomain'),
        'not_found_in_trash'    => __('No landigs found in Trash.', 'textdomain'),
        'featured_image'        => _x('Landig Image', 'Overrides the Featured Image phrase', 'textdomain'),
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
        'rewrite'            => array('slug' => 'landigs'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 23,
        'menu_icon'          => 'dashicons-welcome-write-blog',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true,
    );

    register_post_type('landigs', $args);
}

function noriks_seed_step_landing_post() {
    if (get_option('noriks_step_landing_seeded')) {
        return;
    }

    if (!post_type_exists('landigs')) {
        return;
    }

    $existing = get_page_by_path('step-landing', OBJECT, 'landigs');
    if ($existing) {
        update_option('noriks_step_landing_seeded', 1);
        return;
    }

    $post_id = wp_insert_post(array(
        'post_title'   => 'Step Landing',
        'post_name'    => 'step-landing',
        'post_status'  => 'publish',
        'post_type'    => 'landigs',
        'post_content' => 'Embedded landing page for the Stepease reference page.',
    ));

    if (is_wp_error($post_id) || !$post_id) {
        return;
    }

    update_post_meta($post_id, '_landigs_source_url', 'https://ortowp.noriks.com/product/stepease/');
    update_option('noriks_step_landing_seeded', 1);
}

function noriks_maybe_flush_landigs_rewrite() {
    if (get_option('noriks_landigs_rewrite_flushed')) {
        return;
    }

    flush_rewrite_rules(false);
    update_option('noriks_landigs_rewrite_flushed', 1);
}


add_action('init', 'register_custom_post_type_lander');
add_action('init', 'register_custom_post_type_product_reviews');
add_action('init', 'register_custom_post_type_lander2');
add_action('init', 'register_custom_post_type_landigs');
add_action('init', 'noriks_seed_step_landing_post', 20);
add_action('init', 'noriks_maybe_flush_landigs_rewrite', 30);

