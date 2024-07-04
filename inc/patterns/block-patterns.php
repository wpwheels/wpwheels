<?php
/**
* Registers block patterns and categories.
*/
function wpwheels_register_patterns() {
	$block_pattern_categories = array(
		'wpwheels'	=> array( 'label' => esc_html__( 'WPWheels', 'wpwheels' ) ),
		'faq'		=> array( 'label' => esc_html__( 'FAQ', 'wpwheels' ) ),
		'pricing'	=> array( 'label' => esc_html__( 'Pricing', 'wpwheels' ) ),
		'hero'		=> array( 'label' => esc_html__( 'Hero', 'wpwheels' ) )
	);

	/**
	 * Filters the theme block pattern categories.
	 */
	$block_pattern_categories = apply_filters( 'wpwheels_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'header-basic',
		'header-notification',
		'hero-classic',
		'team',
		'faq',
		'news',
		'query',
		'cta-basic',
		'cta-grid',
		'services',
		'pricing',
		'testimonials',
		'follow-subscribe',
		'footer-basic',
		'footer-mega',
		'404-basic'
	);

	/**
	 * Filters the theme block patterns.
	 */
	$block_patterns = apply_filters( 'wpwheels_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'wpwheels/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'wpwheels_register_patterns', 9 );