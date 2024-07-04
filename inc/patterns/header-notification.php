<?php
/**
 * Header Notification with button
 */
return array(
	'title'      => esc_html__( 'Header Notification with Button', 'wpwheels' ),
	'categories' => array( 'wpwheels', 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","bottom":"30px"},"margin":{"top":"0px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:30px;padding-bottom:30px"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide"><!-- wp:site-title /--></div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","orientation":"horizontal"}} -->
	<div class="wp-block-group"><!-- wp:navigation {"ref":4,"layout":{"type":"flex","setCascadingProperties":true}} /-->

	<!-- wp:buttons {"layout":{"type":"flex","orientation":"horizontal"}} -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Contact</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->'
);


