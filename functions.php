<?php
/**
 * Moroccan Interior functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MoroccanInterior
 */

// The theme's template functions.
require 'inc/template-functions.php';


add_action( 'init', 'moroccaninterior_remove_sf_actions' );
/**
 * Remove storefront actions
 */
function moroccaninterior_remove_sf_actions() {
	
	remove_action( 'storefront_header', 'storefront_product_search', 40 );
	
	remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper', 42 );
	remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );

	remove_action( 'storefront_header', 'storefront_primary_navigation', 50 );
	add_action( 'storefront_header', 'storefront_primary_navigation', 30 );
	remove_action( 'storefront_header', 'storefront_header_cart', 60 );
	add_action( 'storefront_header', 'storefront_header_cart', 30 );

	remove_action( 'storefront_footer', 'storefront_credit', 20 );
	add_action( 'storefront_footer', 'moroccaninterior_credit', 20 );
	
}

// Remove additional information heading from single products.
add_filter( 'woocommerce_product_additional_information_heading', '__return_false' );

// Remove description heading from single products.
add_filter( 'woocommerce_product_description_heading', '__return_false' );
