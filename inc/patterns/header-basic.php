<?php
/**
 * Header Basic
 */
return array(
	'title'      => esc_html__( 'Header Basic', 'wpwheels' ),
	'categories' => array( 'wpwheels', 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","bottom":"30px"},"margin":{"top":"0px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:0px;padding-top:30px;padding-bottom:30px"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide"><!-- wp:site-title /-->

	<!-- wp:navigation {"ref":4,"layout":{"type":"flex","setCascadingProperties":true}} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->'
);


