<?php
/**
 * Helper functions.
 */

if ( ! function_exists( 'kenta_install_cmp_redirect_url' ) ) {
	/**
	 * @param string $hash
	 *
	 * @return string
	 */
	function kenta_install_cmp_redirect_url( $hash = '' ) {
		$switch              = apply_filters( 'kenta_welcome_demo_switch_after_importing', false );
		$args['page']        = 'kenta-starter-sites';
		$args['skip-opt-in'] = 'yes';
		if ( $switch ) {
			$args['switch'] = true;
		}

		return add_query_arg( $args, admin_url( 'admin.php' ) ) . $hash;
	}
}

/**
 * Set excerpt limits
 */
if ( ! function_exists( 'wpwheels_excerpt_limit' ) ) {

	function wpwheels_excerpt_limit( $length ) {
		return 25;
	}
}
add_filter( 'excerpt_length', 'wpwheels_excerpt_limit' );

/**
 * Set excerpt ending text
 */
if ( ! function_exists( 'wpwheels_excerpt_more' ) ) {

	function wpwheels_excerpt_more( $more ) {
		return '....';
	}
}
add_filter('excerpt_more', 'wpwheels_excerpt_more');

/**
 * Get Mailchimp Forms
 */
if ( ! function_exists( 'wpwheels_get_mailchimp_forms' ) ) {
	/**
	 * Get Mailchimp Forms.
	 *
	 * @param string $style
	 * @return string
	 */
	function wpwheels_get_mailchimp_forms() {
		$form = '<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons"><!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html__( 'Subscribe', 'wpwheels' ) . '</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>';

		if ( function_exists( 'mc4wp' ) ) {
			$forms = mc4wp_get_forms();
			if ( $forms && ! empty( $forms ) ) {
				$form_id = ( isset( $forms[0] ) ? $forms[0]->ID : 0 );
				$form    = '<!-- wp:group {"className":"wpwheels-newsletter"} -->
					<div class="wp-block-group wpwheels-newsletter"><!-- wp:mailchimp-for-wp/form {"id":' . absint( $form_id ) . '} /--></div></div>
					<!-- /wp:group -->';
			}
		}

		return $form;
	}
}
