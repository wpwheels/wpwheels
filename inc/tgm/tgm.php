<?php
/**
 * Plugin recommendation
 *
 * @package Blogin_wpwheels
 */

// Load TGM library.
require_once get_theme_file_path( 'inc/tgm/class-tgm-plugin-activation.php' );

if ( ! function_exists( 'wpwheels_recommended_plugins' ) ) :

	/**
	 * Register recommended plugins.
	 *
	 * @since 1.0.0
	 */
	function wpwheels_recommended_plugins() {
		$plugins = array(
			array(
				'name'     => esc_html__( 'BlockWheels', 'wpwheels' ),
				'slug'     => 'blockwheels',
				'required' => false,
			),
			array(
				'name'     => esc_html__( 'Mailchimp for WordPress', 'wpwheels' ),
				'slug'     => 'mailchimp-for-wp',
				'required' => false,
			),
		);

		$config = array();

		tgmpa( $plugins, $config );
	}

endif;

add_action( 'tgmpa_register', 'wpwheels_recommended_plugins' );
