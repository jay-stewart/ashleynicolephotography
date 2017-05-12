<?php
/**
 * Additional features to allow styling of the templates
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function anp_body_classes( $classes ) {

	// Add class on front page.
	if ( is_front_page() && 'posts' !== get_option( 'show_on_front' ) ) {
		$classes[] = 'anp-front-page';
	}

	// Add class if sidebar is used.
	if ( is_active_sidebar( 'sidebar-1' ) && ! is_page() ) {
		$classes[] = 'has-sidebar';
	}


	return $classes;
}
add_filter( 'body_class', 'anp_body_classes' );




/**
 * Checks to see if we're on the homepage or not.
 */
function anp_is_frontpage() {
	return ( is_front_page() && ! is_home() );
}
