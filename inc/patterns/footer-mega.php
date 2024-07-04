<?php
/**
 * Footer Mega
 */
return array(
	'title'      => esc_html__( 'Footer Mega', 'wpwheels' ),
	'categories' => array( 'wpwheels', 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"},"margin":{"top":"0px"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"},"fontSize":"small"} -->
	<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-small-font-size" style="margin-top:0px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:columns {"align":"wide","style":{"elements":{"link":{"color":[]}}}} -->
	<div class="wp-block-columns alignwide has-link-color"><!-- wp:column {"width":"40%"} -->
	<div class="wp-block-column" style="flex-basis:40%"><!-- wp:heading {"level":4,"className":"wp-block-heading"} -->
	<h4 class="wp-block-heading" id="our-company">'. esc_html__('Our Company','wpwheels') .'</h4>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p>'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','wpwheels') .'</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"className":"is-style-fill"} -->
	<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)">'. esc_html__('Learn More','wpwheels') .'</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"20%"} -->
	<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":4,"className":"wp-block-heading"} -->
	<h4 class="wp-block-heading" id="about-us">'. esc_html__('About Us','wpwheels') .'</h4>
	<!-- /wp:heading -->

	<!-- wp:list {"style":{"spacing":{"padding":{"left":"20px"}}}} -->
	<ul style="padding-left:20px"><!-- wp:list-item -->
	<li><a href="#">'. esc_html__('Start Here','wpwheels') .'</a></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><a href="#">'. esc_html__('Our Mission','wpwheels') .'</a></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><a href="#">'. esc_html__('Brand Guide','wpwheels') .'</a></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><a href="#">'. esc_html__('Newsletter','wpwheels') .'</a></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><a href="#">'. esc_html__('Accessibility','wpwheels') .'</a></li>
	<!-- /wp:list-item --></ul>
	<!-- /wp:list --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"20%"} -->
	<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":4,"className":"wp-block-heading"} -->
	<h4 class="wp-block-heading" id="services">'. esc_html__('Services','wpwheels') .'</h4>
	<!-- /wp:heading -->

	<!-- wp:list {"style":{"spacing":{"padding":{"left":"20px"}}}} -->
	<ul style="padding-left:20px"><!-- wp:list-item -->
	<li><a href="#">'. esc_html__('Web Design','wpwheels') .'</a></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><a href="#">'. esc_html__('Development','wpwheels') .'</a></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><a href="#">'. esc_html__('Copywriting','wpwheels') .'</a></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><a href="#">'. esc_html__('Marketing','wpwheels') .'</a></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><a href="#">'. esc_html__('Social Media','wpwheels') .'</a></li>
	<!-- /wp:list-item --></ul>
	<!-- /wp:list --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"20%"} -->
	<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":4,"className":"wp-block-heading"} -->
	<h4 class="wp-block-heading" id="connect">'. esc_html__('Connect','wpwheels') .'</h4>
	<!-- /wp:heading -->

	<!-- wp:list {"style":{"spacing":{"padding":{"left":"20px"}}}} -->
	<ul style="padding-left:20px"><!-- wp:list-item -->
	<li><a href="#">'. esc_html__('Facebook','wpwheels') .'</a></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><a href="#">'. esc_html__('Instagram','wpwheels') .'</a></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><a href="#">'. esc_html__('Twitter','wpwheels') .'</a></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><a href="#">'. esc_html__('LinkedIn','wpwheels') .'</a></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><a href="#">'. esc_html__('Dribbble','wpwheels') .'</a></li>
	<!-- /wp:list-item --></ul>
	<!-- /wp:list --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:separator {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small)"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
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


