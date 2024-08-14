<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WPWheels
 * @since 1.0.0
 */

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
if ( ! function_exists( 'wpwheels_setup' ) ) {

	function wpwheels_setup() {

		// Languages
		load_theme_textdomain( 'wpwheels', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_theme_support( 'editor-styles' );
		
		add_editor_style(
			array(
				'.build/public/index.css',
			)
		);

		// HTML5
		add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );

		// Thumbnail
		add_theme_support( 'post-thumbnails' );
		
		// Responsive video
		add_theme_support( 'responsive-embeds' );

		// Custom Logo
		add_theme_support( 'custom-logo' );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'wpwheels' ),
			)
		);

	}
}
add_action( 'after_setup_theme', 'wpwheels_setup' );

/**
 * Theme Enqueue Styles.
 */
if ( ! function_exists( 'wpwheels_enqueue_style_sheet' ) ) {

	/**
	 * Enqueue styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function wpwheels_enqueue_style_sheet() {

		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'wpwheels-developer-style',
			get_theme_file_uri( 'build/public/index.css' ),
			array(),
			filemtime( get_theme_file_path( 'build/public/index.css' ) )
		);
		// if the site is in RTL mode
		wp_style_add_data( 'wpwheels-developer-style', 'rtl', 'replace' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpwheels_enqueue_style_sheet' );

/**
 * Register block styles.
 *
 * @since 1.0.0
 */
function wpwheels_register_block_styles() {

	$block_styles = array(
		'core/columns' => array(
			'columns-reverse' => esc_html__( 'Reverse', 'wpwheels' ),
		),
		'core/group' => array(
			'shadow-light' => esc_html__( 'Shadow', 'wpwheels' ),
			'shadow-solid' => esc_html__( 'Solid', 'wpwheels' ),
		),
		'core/image' => array(
			'shadow-light' => esc_html__( 'Shadow', 'wpwheels' ),
			'shadow-solid' => esc_html__( 'Solid', 'wpwheels' ),
		),
		'core/list' => array(
			'no-disc' => esc_html__( 'No Disc', 'wpwheels' ),
		),
		'core/navigation-link' => array(
			'outline' => esc_html__( 'Outline', 'wpwheels' ),
		),
		'core/quote' => array(
			'shadow-light' => esc_html__( 'Shadow', 'wpwheels' ),
			'shadow-solid' => esc_html__( 'Solid', 'wpwheels' ),
		),
		'core/social-links' => array(
			'outline' => esc_html__( 'Outline', 'wpwheels' ),
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
add_action( 'init', 'wpwheels_register_block_styles' );

/**
 * Theme includes.
 */
require_once get_theme_file_path( '/inc/inc.php' );