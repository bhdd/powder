<?php
/**
 * Register pattern category.
 */
function theme_register_pattern_category( $slug, $label, $description ) {
	register_block_pattern_category(
		'[themeslug]-' . $slug,
		array(
			'label'       => __( $label, '[themeslug]' ),
			'description' => __( $description, '[themeslug]' ),
		)
	);
}

/**
 * Register pattern categories.
 */
function theme_register_pattern_categories() {
	$categories = array(
		'about'          => array( __( 'About', '[themeslug]' ), __( 'A collection of about patterns for [themename].', '[themeslug]' ) ),
		'call-to-action' => array( __( 'Call to Action', '[themeslug]' ), __( 'A collection of call to action patterns for [themename].', '[themeslug]' ) ),
		'content'        => array( __( 'Content', '[themeslug]' ), __( 'A collection of content patterns for [themename].', '[themeslug]' ) ),
		'faq'            => array( __( 'FAQs', '[themeslug]' ), __( 'A collection of FAQ patterns for [themename].', '[themeslug]' ) ),
		'featured'       => array( __( 'Featured', '[themeslug]' ), __( 'A collection of featured patterns for [themename].', '[themeslug]' ) ),
		'footer'         => array( __( 'Footer', '[themeslug]' ), __( 'A collection of footer patterns for [themename].', '[themeslug]' ) ),
		'gallery'        => array( __( 'Gallery', '[themeslug]' ), __( 'A collection of gallery patterns for [themename].', '[themeslug]' ) ),
		'header'         => array( __( 'Header', '[themeslug]' ), __( 'A collection of header patterns for [themename].', '[themeslug]' ) ),
		'hero'           => array( __( 'Hero', '[themeslug]' ), __( 'A collection of hero patterns for [themename].', '[themeslug]' ) ),
		'posts'          => array( __( 'Posts', '[themeslug]' ), __( 'A collection of posts patterns for [themename].', '[themeslug]' ) ),
		'pricing'        => array( __( 'Pricing', '[themeslug]' ), __( 'A collection of pricing patterns for [themename].', '[themeslug]' ) ),
		'team'           => array( __( 'Team', '[themeslug]' ), __( 'A collection of team patterns for [themename].', '[themeslug]' ) ),
		'template'       => array( __( 'Template', '[themeslug]' ), __( 'A collection of template patterns for [themename].', '[themeslug]' ) ),
		'testimonials'   => array( __( 'Testimonials', '[themeslug]' ), __( 'A collection of testimonials patterns for [themename].', '[themeslug]' ) ),
	);

	foreach ( $categories as $slug => $details ) {
		theme_register_pattern_category( $slug, $details[0], $details[1] );
	}
}
add_action( 'init', 'theme_register_pattern_categories' );
