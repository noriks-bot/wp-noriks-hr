<?php
/**
 * Podatkovni izdelki (Dejan, 25. 10. 2026): why sekcije, mnenja in naslovi so shranjeni
 * pri izdelku v polju _noriks_vsebina (JSON), izrise jih ena splosna predloga.
 * Za nov izdelek tako ni treba spreminjati kode teme.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! function_exists( 'noriks_vsebina_izdelka' ) ) {
    function noriks_vsebina_izdelka( $product_id = null ) {
        static $predpomnilnik = array();
        if ( ! $product_id ) { $product_id = get_the_ID(); }
        if ( ! $product_id ) { return null; }
        if ( array_key_exists( $product_id, $predpomnilnik ) ) { return $predpomnilnik[ $product_id ]; }
        $surovo = get_post_meta( $product_id, '_noriks_vsebina', true );
        $v = is_array( $surovo ) ? $surovo : json_decode( (string) $surovo, true );
        if ( ! is_array( $v ) || empty( $v['sekcije'] ) ) { $v = null; }
        return $predpomnilnik[ $product_id ] = $v;
    }
}
