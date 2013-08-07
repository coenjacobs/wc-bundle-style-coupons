<?php

/*
Plugin Name: WooCommerce Bundle Style Coupons
Description: Only apply a coupon when all products that this coupon applies to are in cart.
Author: Coen Jacobs
Author URI: http://coenjacobs.me
Version: 0.1.1
*/

include( 'includes/class-wc-bundle-style-coupons.php' );
global $wc_bundle_style_coupons;
$wc_bundle_style_coupons = new WC_Bundle_Style_Coupons();