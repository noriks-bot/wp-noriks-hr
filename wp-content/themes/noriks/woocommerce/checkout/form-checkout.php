<?php
/**
 * Checkout Form — Fallback (not normally used)
 * 
 * The checkout is hijacked by checkout_mods.php via template_redirect
 * This file only runs if template_redirect doesn't fire (e.g., empty cart)
 */
if ( ! defined( 'ABSPATH' ) ) exit;

// Default WC checkout
wc_get_template( 'checkout/form-checkout.php', array( 'checkout' => WC()->checkout() ), '', WC()->plugin_path() . '/templates/' );
