<?php
/**
 * Makes adjustments to Storefront cores Customizer implementation.
 *
 * @package MoroccanInterior
 */

/**
 * Returns an array of the desired default Storefront options.
 *
 * @param array $args an array of default values.
 * @return array
 */
function moroccaninterior_defaults( $args ) {
	$args['storefront_header_background_color'] = '#fff';
	$args['storefront_accent_color']            = '#FFA200';
	$args['storefront_text_color']              = '#636363';

	return apply_filters( 'moroccaninterior_customizer_defaults', $args );
}
add_filter( 'storefront_setting_default_values', 'moroccaninterior_defaults' );
