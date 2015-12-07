<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


// http_redirect

function paw_ux_redirect() {

    if ( is_post_type_archive( 'skills' ) ) {
        wp_redirect( home_url(),301);
        exit;
    }
}
add_action( 'template_redirect', 'paw_ux_redirect' );


// function red_archive_title( $title ) {
// 	  if ( is_post_type_archive( 'products' ) ) {
// 		  $title = 'front-page';
// 	  }

//      return $title;
//  }
//  add_filter( 'get_the_archive_title', 'red_archive_title' );
