<?php
/**
 * Register block styles.
 */
function theme_register_block_styles() {
	$block_styles = array(
		'core/columns' => array(
			'column-reverse' => __( 'Reverse', '[themeslug]' ),
		),
		'core/cover' => array(
			'gradient' => __( 'Gradient', '[themeslug]' ),
		),
		'core/heading' => array(
			'balanced' => __( 'Balanced', '[themeslug]' ),
		),
		'core/list' => array(
			'no-style' => __( 'No Style', '[themeslug]' ),
		),
		'core/social-links' => array(
			'outline' => __( 'Outline', '[themeslug]' ),
		),
	);
	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'theme_register_block_styles' );
