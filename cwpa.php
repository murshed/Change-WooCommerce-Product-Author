<?php
/*
* Plugin Name: Change WooCommerce Product Author
* Plugin URI: https://wordpress.org/plugins/change-woocommerce-product-author/
* Description: Change WooCommerce Product Author Ownership Easily.
* Version: 1.0.0
* Author: FahimMurshed
* Author URI: https://murshidalam.com
* License: GNU/GPL V2 or Later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html

*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

	function function_add_author_cwpa() {
		add_post_type_support( 'product', 'author' );
	}
	add_action('init', 'function_add_author_cwpa', 999 );
  