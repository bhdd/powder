<?php
/**
 * Initialize theme styles and support.
 */
if ( ! function_exists( 'theme_setup' ) ) {
	function theme_setup() {

		// Enqueue editor style sheet.
		add_editor_style( get_template_directory_uri() . '/style.css' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'theme_setup' );
