<?php

class WC_Bundle_Style_Coupons {

	/**
	 * The single instance of the class.
	 * 
	 * @var obj The WC_Bundle_Style_Coupons object
	 */
	protected static $_instance = null;

	private $setting_key = 'wc_bundle_style_coupon';

	/**
	 * Main WC_Bundle_Style_Coupons instance.
	 *
	 * Ensures only one instance of WC_Bundle_Style_Coupons is loaded or can be loaded.
	 *
	 * @return WC_Bundle_Style_Coupons Single instance.
	 */
	public static function get_instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function __construct() {
		add_action( 'init', array( $this, 'load_textdomain_files' ), 10, 0 );
		add_action( 'woocommerce_coupon_options_usage_restriction', array( $this, 'coupon_options' ), 10, 0 );
		add_action( 'woocommerce_process_shop_coupon_meta', array( $this, 'process_shop_coupon_meta' ), 10, 2 );
		add_filter( 'woocommerce_coupon_is_valid', array( $this, 'coupon_is_valid' ), 10, 2 );
	}

	public function load_textdomain_files() {
		load_plugin_textdomain( 'wc_bundle_style_coupons', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	public function coupon_options() {
		woocommerce_wp_checkbox( array(
			'id'          => $this->setting_key,
			'label'       => __( 'Bundle coupon', 'wc_bundle_style_coupons' ),
			'description' => __( 'Only apply this coupon when all products that this coupon applies to are in the cart.', 'wc_bundle_style_coupons' )
		) );
	}

	public function process_shop_coupon_meta( $post_id, $post ) {
		$coupon_bundle = isset( $_POST[ $this->setting_key ] ) ? 'yes' : 'no';
		update_post_meta( $post_id,  $this->setting_key, $coupon_bundle );
	}

	public function coupon_is_valid( $valid, $coupon ) {

		$product_ids = $coupon->get_product_ids();

		if ( 'yes' == get_post_meta( $coupon->get_id(), $this->setting_key, true ) ) {
			foreach ( wc()->cart->cart_contents as $key => $value ) {
				if ( in_array( $value['product_id'], $product_ids ) ) {
					$id_array_key = array_search( $value['product_id'], $product_ids );
					unset( $product_ids[ $id_array_key ] );
				}
			}

			if ( ! empty( $product_ids ) ) {
				return false;
			}
		}

		return $valid;
	}
}