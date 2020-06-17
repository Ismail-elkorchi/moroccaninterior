<?php
/**
 * Moroccan Interior template functions.
 *
 * @package MoroccanInterior
 */

/**
 * Display the theme credit
 *
 * @since  1.0.0
 * @return void
 */
function moroccaninterior_credit() {
	?>
	<div class="site-info">
		<?php
		echo esc_html( '&copy; ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' ) . '.' );
		?>
		<br />
		<?php
		if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
		}
		?>
	</div><!-- .site-info -->
	<?php
}


