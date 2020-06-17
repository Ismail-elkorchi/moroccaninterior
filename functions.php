<?php
/**
 * Moroccan Interior functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tic
 */

require 'inc/template-functions.php';

/**
 * Remove storefront actions
 */
add_action( 'init', 'mi_remove_sf_actions' );

function mi_remove_sf_actions() {
	
	remove_action( 'storefront_header', 'storefront_product_search', 40 );
	
	remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper', 42 );
	remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );

	remove_action( 'storefront_header', 'storefront_primary_navigation', 50 );
	add_action( 'storefront_header', 'storefront_primary_navigation', 30 );
	remove_action( 'storefront_header', 'storefront_header_cart', 60 );
	add_action( 'storefront_header', 'storefront_header_cart', 30 );

	remove_action( 'storefront_footer', 'storefront_credit', 20 );
	add_action( 'storefront_footer', 'tic_credit', 20 );
	
}

