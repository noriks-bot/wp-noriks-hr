<?php
/**
 * ============================================================
 * NORIKS — Front-end performance tweaks (safe, non-destructive)
 * ------------------------------------------------------------
 * Only removes WordPress head bloat that this store does not use,
 * kills the wp-embed script, and adds resource hints for the
 * third-party hosts that appear on every page. No functionality
 * is disabled. Everything here is easy to revert.
 * ============================================================
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * 1) Remove unused <head> meta links (no SEO / functional impact).
 *    (Emoji is already disabled in functions.php.)
 */
add_action( 'init', function () {
    remove_action( 'wp_head', 'wp_generator' );                        // <meta name="generator">
    remove_action( 'wp_head', 'wlwmanifest_link' );                    // Windows Live Writer
    remove_action( 'wp_head', 'rsd_link' );                            // Really Simple Discovery
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );                // <link rel="shortlink">
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 ); // prev/next rel links
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );       // oEmbed discovery <link>s
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );               // wp-embed.min.js loader
} );

/**
 * 2) Make sure the wp-embed script is not enqueued on the front-end.
 *    (Only used to embed *this* site elsewhere — not needed here.)
 */
add_action( 'wp_footer', function () {
    if ( ! is_admin() ) {
        wp_dequeue_script( 'wp-embed' );
    }
} );

/**
 * 3) Resource hints for third-party hosts used on (almost) every page,
 *    so the browser can open the connections earlier.
 */
add_filter( 'wp_resource_hints', function ( $hints, $relation ) {
    if ( 'preconnect' === $relation ) {
        // Country flags in the header + newsletter popup — present site-wide.
        $hints[] = 'https://static.devit.software';
        $hints[] = 'https://6096.squalomail.net';
    }
    if ( 'dns-prefetch' === $relation ) {
        // Google Fonts (used on checkout).
        $hints[] = 'https://fonts.googleapis.com';
        $hints[] = 'https://fonts.gstatic.com';
    }
    return $hints;
}, 10, 2 );
