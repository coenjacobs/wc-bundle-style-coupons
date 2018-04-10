<?php

/*
Plugin Name: WooCommerce Bundle Style Coupons
Description: Only apply a coupon when all products that this coupon applies to are in cart.
Author: Coen Jacobs
Author URI: http://coenjacobs.me
Version: 0.2-alpha
*/

include( 'includes/class-wc-bundle-style-coupons.php' );

function wc_bundle_style_coupons_init() {
	global $wc_bundle_style_coupons;
	$wc_bundle_style_coupons = WC_Bundle_Style_Coupons::get_instance();
}
add_action( 'woocommerce_loaded', 'wc_bundle_style_coupons_init' );