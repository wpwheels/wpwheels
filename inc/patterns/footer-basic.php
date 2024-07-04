<?php
/**
 * Footer Basic
 */
return array(
	'title'      => esc_html__( 'Footer Basic', 'wpwheels' ),
	'categories' => array( 'wpwheels', 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"},"margin":{"top":"0px"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"},"fontSize":"small"} -->
	<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-small-font-size" style="margin-top:0px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide"><!-- wp:paragraph -->
	<p>' . sprintf( __( 'Copyright © %d WPWheels — Powered by ', 'wpwheels' ), date_i18n( 'Y' ) ) . '<a href="' . esc_url('https://wpwheels.com/') . '">' . esc_html__('WPWheels', 'wpwheels') . '</a></p>
	<!-- /wp:paragraph -->

	<!-- wp:social-links {"iconColor":"base","iconColorValue":"#F1F8F2","className":"is-style-logos-only"} -->
	<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

	<!-- wp:social-link {"url":"#","service":"twitter"} /-->

	<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->'
);


