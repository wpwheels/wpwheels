<?php
/**
 * Team Members
 */
return array(
	'title'      => esc_html__( 'Team Members', 'wpwheels' ),
	'categories' => array( 'wpwheels', 'team' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"color":{"background":"#eaf4eb"}},"className":"welcome","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull welcome has-background" style="background-color:#eaf4eb;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-columns-reverse"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center is-style-columns-reverse"><!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"40px"}},"backgroundColor":"primary"} -->
	<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"primary"} -->
	<p class="has-primary-color has-text-color" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:3px;text-transform:uppercase">'. esc_html__('Our Team','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">'. esc_html__('VIEW ALL','wpwheels') .'</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->

	<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0px","top":"10px"}},"typography":{"lineHeight":1.4}},"className":"wp-block-heading","fontSize":"max-48"} -->
	<h2 class="wp-block-heading has-max-48-font-size" style="margin-top:10px;margin-bottom:0px;line-height:1.4">'. esc_html__('Foundational pillars of our organization','wpwheels') .'</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"large"} -->
	<p class="has-large-font-size">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--x-small)"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}},"border":{"radius":"5px"}},"backgroundColor":"neutral","className":"is-style-shadow-light","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-shadow-light has-neutral-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:image {"align":"wide","id":94,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"5px"}},"className":"alignwide"} -->
	<figure class="wp-block-image alignwide size-large has-custom-border"><img src="'. esc_url( get_theme_file_uri() ) .'/assets/images/placeholder.png" alt="" class="wp-image-94" style="border-radius:5px"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":3} -->
	<h3 class="wp-block-heading has-text-align-left" id="sample-heading-1">'. esc_html__('Justin Hammer','wpwheels') .'</h3>
	<!-- /wp:heading -->

	<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#091109","align":"center","className":"is-style-outline","layout":{"type":"flex","justifyContent":"right"}} -->
	<ul class="wp-block-social-links aligncenter has-icon-color is-style-outline"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

	<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"8px"}}},"textColor":"primary"} -->
	<p class="has-text-align-left has-primary-color has-text-color" style="margin-top:8px">'. esc_html__('Founder &amp; CEO','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"left"} -->
	<p class="has-text-align-left">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}},"border":{"radius":"5px"}},"backgroundColor":"neutral","className":"is-style-shadow-light","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-shadow-light has-neutral-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:image {"align":"wide","id":211,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}},"className":"alignwide"} -->
	<figure class="wp-block-image alignwide size-full has-custom-border"><img src="'. esc_url( get_theme_file_uri() ) .'/assets/images/placeholder.png" alt="" class="wp-image-211" style="border-radius:5px"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":3} -->
	<h3 class="wp-block-heading has-text-align-left" id="sample-heading-1">'. esc_html__('Lisa Ferrol','wpwheels').'</h3>
	<!-- /wp:heading -->

	<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#091109","align":"center","className":"is-style-outline","layout":{"type":"flex","justifyContent":"right"}} -->
	<ul class="wp-block-social-links aligncenter has-icon-color is-style-outline"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

	<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"8px"}}},"textColor":"primary"} -->
	<p class="has-text-align-left has-primary-color has-text-color" style="margin-top:8px">'. esc_html__('Web Designer','wpwheels').'</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"left"} -->
	<p class="has-text-align-left">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}},"border":{"radius":"5px"}},"backgroundColor":"neutral","className":"is-style-shadow-light","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-shadow-light has-neutral-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:image {"align":"wide","id":166,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}},"className":"alignwide"} -->
	<figure class="wp-block-image alignwide size-full has-custom-border"><img src="'. esc_url( get_theme_file_uri() ) .'/assets/images/placeholder.png" alt="" class="wp-image-166" style="border-radius:5px"/></figure>
	<!-- /wp:image -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":3} -->
	<h3 class="wp-block-heading has-text-align-left" id="sample-heading-1">'. esc_html__('John Doe','wpwheels').'</h3>
	<!-- /wp:heading -->

	<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#091109","align":"center","className":"is-style-outline","layout":{"type":"flex","justifyContent":"right"}} -->
	<ul class="wp-block-social-links aligncenter has-icon-color is-style-outline"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

	<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"8px"}}},"textColor":"primary"} -->
	<p class="has-text-align-left has-primary-color has-text-color" style="margin-top:8px">Developer</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"left"} -->
	<p class="has-text-align-left">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->'
);


