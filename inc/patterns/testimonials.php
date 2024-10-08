<?php
/**
 * Testimonials
 */
return array(
	'title'      => esc_html__( 'Testimonials', 'wpwheels' ),
	'categories' => array( 'wpwheels', 'testimonials' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":"0px","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","className":"welcome","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull welcome has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-columns-reverse"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center is-style-columns-reverse"><!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"40px"}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator -->

	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"primary"} -->
	<p class="has-primary-color has-text-color" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:3px;text-transform:uppercase">'. esc_html__('Testimonials','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">'. esc_html__('VIEW ALL','wpwheels') .'</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->

	<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0px","top":"10px"}},"typography":{"lineHeight":1.4}},"className":"wp-block-heading","fontSize":"max-48"} -->
	<h2 class="wp-block-heading has-max-48-font-size" style="margin-top:10px;margin-bottom:0px;line-height:1.4">'. esc_html__('Why People Are Choosing Us?','wpwheels') .'</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"large"} -->
	<p class="has-large-font-size">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--x-small)"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px","radius":"4px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"max-72"} -->
	<p class="has-max-72-font-size" style="line-height:1">“</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
	<p style="margin-top:0">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:image {"id":89,"width":60,"height":60,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"50px"}},"className":"is-style-rounded"} -->
	<figure class="wp-block-image size-large is-resized has-custom-border is-style-rounded"><img src="'. esc_url( get_theme_file_uri() ) .'/assets/images/placeholder.png" alt="" class="wp-image-89" style="border-radius:50px;width:60px;height:60px" width="60" height="60"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"typography":{"lineHeight":"1.5"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="line-height:1.5"><!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><strong>'. esc_html__('Stella Hudson','wpwheels').'</strong></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
	<p class="has-primary-color has-text-color has-small-font-size">'. esc_html__('UX/UI','wpwheels').'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px","radius":"4px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"max-72"} -->
	<p class="has-max-72-font-size" style="line-height:1">“</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
	<p style="margin-top:0">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:image {"id":235,"width":60,"height":60,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"50px"}},"className":"is-style-rounded"} -->
	<figure class="wp-block-image size-large is-resized has-custom-border is-style-rounded"><img src="'. esc_url( get_theme_file_uri() ) .'/assets/images/placeholder.png" alt="" class="wp-image-235" style="border-radius:50px;width:60px;height:60px" width="60" height="60"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"typography":{"lineHeight":"1.5"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="line-height:1.5"><!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><strong>'. esc_html__('Nina Larson','wpwheels').'</strong></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
	<p class="has-primary-color has-text-color has-small-font-size">'. esc_html__('Developer','wpwheels').'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"border":{"width":"1px","radius":"4px"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="border-width:1px;border-radius:4px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"max-72"} -->
	<p class="has-max-72-font-size" style="line-height:1">“</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
	<p style="margin-top:0">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:image {"id":229,"width":60,"height":60,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}},"className":"is-style-rounded"} -->
	<figure class="wp-block-image size-full is-resized has-custom-border is-style-rounded"><img src="'. esc_url( get_theme_file_uri() ) .'/assets/images/placeholder.png" alt="" class="wp-image-229" style="border-radius:50px;width:60px;height:60px" width="60" height="60"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"typography":{"lineHeight":"1.5"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="line-height:1.5"><!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><strong>'. esc_html__('Paul Harrison','wpwheels').'</strong></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
	<p class="has-primary-color has-text-color has-small-font-size">'. esc_html__('Designer','wpwheels').'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->'
);
