<?php
/*
Template Name: Gallery
*/

//Remove featured image
beans_remove_action( 'beans_post_image' );

add_action( 'beans_post_body', 'beanschildstarter_gallery' );
/**
 * Add slideshow to the Gallery page using a category of 'gallery'.
 *
 * @since 1.0.0
 *
 * @return void
 */
function beanschildstarter_gallery() {
	$query = new WP_Query( array(
		'category_name'  => 'gallery',
		'paged'          => get_query_var( 'paged' ),
		'nopaging'       => false,
		'posts_per_page' => 50
	) );

	include_once CHILD_THEME_DIR . '/views/gallery.php';
}

beans_load_document();
