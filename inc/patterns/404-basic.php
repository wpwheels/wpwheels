<?php
/**
 * 404 Basic
 */
return array(
	'title'      => esc_html__( '404 Basic', 'wpwheels' ),
	'categories' => array( 'wpwheels', '404', 'error' ),
	'content'    => '
	<!-- wp:heading {"textAlign":"center","level":1} -->
	<h1 class="wp-block-heading has-text-align-center">'.esc_html__('Page Not Found','wpwheels').'</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">'.esc_html__('Unfortunately, the page you are looking for no longer exists, or has been moved. Please try searching for your content below.','wpwheels').'</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
	<div
		class="wp-block-group has-secondary-background-color has-background"
		style="
		padding-top: var(--wp--preset--spacing--small);
		padding-right: var(--wp--preset--spacing--small);
		padding-bottom: var(--wp--preset--spacing--small);
		padding-left: var(--wp--preset--spacing--small);
		"
	>
		<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search","buttonText":"Search"} /-->
	</div>
	<!-- /wp:group -->'
);


