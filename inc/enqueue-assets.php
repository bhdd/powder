<?php
/**
 * Enqueue theme stylesheet.
 */
function theme_enqueue_style_sheet() {
	wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/style.css', array(), wp_get_theme( '[themeslug]' )->get( 'Version' ) );
	wp_enqueue_script( 'theme-header', get_template_directory_uri() . '/assets/js/scroll-header.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_style_sheet' );
