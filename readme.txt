=== WooCommerce Bundle Style Coupons ===
Contributors: CoenJacobs
Tags: woocommerce
Requires at least: 3.5
Stable tag: 0.3
Tested up to: 6.1.1
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Enables store owners to make a coupon only apply when all products required for it are in the cart.

== Description ==

This is a fairly simple plugin that enables store owners to make a coupon only apply when all products required for it are in the cart. This plugin introduces a new checkbox when editing a coupon, that enables this new feature.

When you want to run a bundle deal, for three products, all those three products need to be in the cart before the coupon works. For example if you want to offer a 50% coupon for purchases of product x, product y and product z in a single order. Just a single checkbox enforces this new rule.

Contributions are welcome via the [GitHub repository](https://github.com/coenjacobs/wc-bundle-style-coupons).

== Installation ==

1. Download the plugin file to your computer and unzip it
2. Using an FTP program, or your hosting control panel, upload the unzipped plugin folder to your WordPress installation’s wp-content/plugins/ directory.
3. Activate the plugin from the Plugins menu within the WordPress admin.

Or use the automatic installation wizard through your admin panel, just search for this plugins name.

== Frequently Asked Questions ==

= Where can I find the setting for this plugin? =

This plugin uses a per coupon based setting, so you'll have to make a coupon and look for the checkbox at the bottom of the Usage Restriction tab that says 'Bundle coupon'

== Screenshots ==

1. The setting to enable this feature in the edit coupon screen

== Changelog ==

= 0.3 - 2023/01/18 =
 * Update: Use WooCommerce CRUD to get/set coupon meta.
 * Update: Tested against WooCommerce 7.4.
 * Update: Tested against WordPress 6.1.

= 0.2 - 2018/04/30 =
 * Fix: WooCommerce 3.0 compatible
 * Tweak: Moved class to separate file
 * Tweak: Only load plugin if WooCommerce is active
 * Tweak: Display checkbox on "Usage Restrictions" tab of Coupon metabox

= 0.1.1 - 2013/04/28 =
 * Fix: Typo in coupon level settings label

= 0.1 - 2013/04/24 =
 * Initial release
