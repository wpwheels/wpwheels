<?php
/**
 * Pricing Table
 */
return array(
	'title'      => esc_html__( 'Pricing Table', 'wpwheels' ),
	'categories' => array( 'wpwheels', 'pricing' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"className":"welcome","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull welcome" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-columns-reverse"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center is-style-columns-reverse"><!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"40px"}},"backgroundColor":"primary"} -->
	<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"primary"} -->
	<p class="has-primary-color has-text-color" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:3px;text-transform:uppercase">'. esc_html__('Our Offer','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0px","top":"10px"}},"typography":{"lineHeight":1.4}},"className":"wp-block-heading","fontSize":"max-48"} -->
	<h2 class="wp-block-heading has-max-48-font-size" style="margin-top:10px;margin-bottom:0px;line-height:1.4">'. esc_html__('Plans &amp; Pricing','wpwheels') .'</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"large"} -->
	<p class="has-large-font-size">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--x-small)"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"radius":"5px"},"color":{"background":"#eaf4eb"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"className":"is-style-default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-default has-background" style="border-radius:5px;background-color:#eaf4eb;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"large"} -->
	<h2 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">'. esc_html__('Basic','wpwheels') .'</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"max-60"} -->
	<p class="has-max-60-font-size">'. esc_html__('$49','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1.5rem"}}},"fontSize":"medium"} -->
	<p class="has-medium-font-size" style="margin-top:1.5rem">'. esc_html__('/year','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">'. esc_html__('Responsive Layouts','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"className":"is-style-dotted is-style-dots"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-dotted is-style-dots"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">'. esc_html__('Full Site Editing','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"className":"is-style-dotted is-style-dots"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-dotted is-style-dots"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">'. esc_html__('Block Pattern Library','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"className":"is-style-dotted is-style-dots"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-dotted is-style-dots"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">'. esc_html__('Support via Public Forum','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:button {"backgroundColor":"secondary","textColor":"contrast"} -->
	<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-secondary-background-color has-text-color has-background wp-element-button" href="#">'. esc_html__('Get Started','wpwheels') .'</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"radius":"5px"},"color":{"background":"#e4dfe5"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"className":"is-style-shadow-light","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-shadow-light has-background" style="border-radius:5px;background-color:#e4dfe5;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"align":"right","textColor":"primary","fontSize":"x-large"} -->
	<p class="has-text-align-right has-primary-color has-text-color has-x-large-font-size">✹</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"left","textColor":"primary"} -->
	<p class="has-text-align-left has-primary-color has-text-color">'. esc_html__('Most Popular','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"large"} -->
	<h2 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">'. esc_html__('Premium','wpwheels') .'</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"max-60"} -->
	<p class="has-max-60-font-size">'. esc_html__('$99','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1.5rem"}}},"fontSize":"medium"} -->
	<p class="has-medium-font-size" style="margin-top:1.5rem">'. esc_html__('/year','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">'. esc_html__('Everything in Basic','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"className":"is-style-dotted is-style-dots"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-dotted is-style-dots"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">'. esc_html__('One Click Demo Import','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"className":"is-style-dotted is-style-dots"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-dotted is-style-dots"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">'. esc_html__('Additional Block Patterns','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"className":"is-style-dotted is-style-dots"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-dotted is-style-dots"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">'. esc_html__('Support via Dedicated Email','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">'. esc_html__('Get Started','wpwheels') .'</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"radius":"5px"},"color":{"background":"#eaf4eb"},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"className":"is-style-default","layout":{"type":"constrained"}} -->
	<div class="wp-block-group is-style-default has-background" style="border-radius:5px;background-color:#eaf4eb;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"large"} -->
	<h2 class="wp-block-heading has-text-align-center has-large-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">'. esc_html__('Enterprise','wpwheels') .'</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"center"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"max-60"} -->
	<p class="has-max-60-font-size">'. esc_html__('$199','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1.5rem"}}},"fontSize":"medium"} -->
	<p class="has-medium-font-size" style="margin-top:1.5rem">'. esc_html__('/year','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">'. esc_html__('Everything in Premium','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"className":"is-style-dotted is-style-dots"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-dotted is-style-dots"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">'. esc_html__('Monthly Maintenance Service','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"className":"is-style-dotted is-style-dots"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-dotted is-style-dots"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">'. esc_html__('Website Security Hardening','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"className":"is-style-dotted is-style-dots"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-dotted is-style-dots"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">'. esc_html__('SEO Included','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--large)"><!-- wp:button {"backgroundColor":"secondary","textColor":"contrast"} -->
	<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-secondary-background-color has-text-color has-background wp-element-button" href="#">'. esc_html__('Get Started','wpwheels') .'</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->'
);


