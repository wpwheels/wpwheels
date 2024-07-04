<?php
/**
 * FAQ
 */
return array(
	'title'      => esc_html__( 'FAQ', 'wpwheels' ),
	'categories' => array( 'wpwheels', 'faq' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","className":"welcome","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull welcome has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-default"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center is-style-default"><!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"type":"constrained"}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"40px"}},"backgroundColor":"primary"} -->
	<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"primary"} -->
	<p class="has-primary-color has-text-color" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:3px;text-transform:uppercase">'. esc_html__('FAQ','wpwheels').'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0px","top":"10px"}},"typography":{"lineHeight":"1.4"}},"className":"wp-block-heading","fontSize":"max-48"} -->
	<h2 class="wp-block-heading has-max-48-font-size" style="margin-top:10px;margin-bottom:0px;line-height:1.4">'. esc_html__('Let’s Build Something Together','wpwheels').'</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"large"} -->
	<p class="has-large-font-size">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex"},"style":{"spacing":{"blockGap":"20px","margin":{"top":"30px"}}}} -->
	<div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"fontSize":"small"} -->
	<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button">'. esc_html__('Contact Us','wpwheels') .'</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
	<div class="wp-block-group" style="padding-bottom:0"><!-- wp:paragraph {"fontSize":"x-large"} -->
	<p class="has-x-large-font-size">─</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"left"} -->
	<h2 class="wp-block-heading has-text-align-left">'. esc_html__('How many colors should I choose?','wpwheels') .'</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"style":{"spacing":{"padding":{"left":"30px","top":"0"}}}} -->
	<p style="padding-top:0;padding-left:30px">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"20px"} -->
	<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
	<div class="wp-block-group" style="padding-bottom:0"><!-- wp:paragraph {"fontSize":"x-large"} -->
	<p class="has-x-large-font-size">─</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"left"} -->
	<h2 class="wp-block-heading has-text-align-left">'. esc_html__('Do you offer free estimates?','wpwheels') .'</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"style":{"spacing":{"padding":{"left":"30px","top":"0"}}}} -->
	<p style="padding-top:0;padding-left:30px">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"20px"} -->
	<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
	<div class="wp-block-group" style="padding-bottom:0"><!-- wp:paragraph {"fontSize":"x-large"} -->
	<p class="has-x-large-font-size">─</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"left"} -->
	<h2 class="wp-block-heading has-text-align-left">'. esc_html__('Do you offer a Guarantee?','wpwheels') .'</h2>
	<!-- /wp:heading --></div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"style":{"spacing":{"padding":{"left":"30px","top":"0"}}}} -->
	<p style="padding-top:0;padding-left:30px">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->'
);


