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
// The theme's template functions.
require 'inc/customizer.php';


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
add_action( 'init', 'moroccaninterior_remove_sf_actions' );

// Remove additional information heading from single products.
add_filter( 'woocommerce_product_additional_information_heading', '__return_false' );

// Remove description heading from single products.
add_filter( 'woocommerce_product_description_heading', '__return_false' );

/**
 * Enqueue Google Fonts
 */
function moroccaninterior_add_google_fonts() {
	wp_enqueue_style( 'moroccaninterior-google-fonts', 'https://fonts.googleapis.com/css2?family=Alegreya+SC:ital,wght@0,400;0,500;0,700;0,800;0,900;1,400;1,500;1,700;1,800;1,900&family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&display=swap', false ); // phpcs:ignore
}
add_action( 'wp_enqueue_scripts', 'moroccaninterior_add_google_fonts' );
