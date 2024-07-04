<?php
/**
 * Services
 */
return array(
	'title'      => esc_html__( 'Services', 'wpwheels' ),
	'categories' => array( 'wpwheels', 'featured' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","className":"welcome","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull welcome has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-columns-reverse"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center is-style-columns-reverse"><!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"40px"}},"backgroundColor":"primary"} -->
    <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
    <!-- /wp:separator -->

    <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"primary"} -->
    <p class="has-primary-color has-text-color" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:3px;text-transform:uppercase">'. esc_html__('Our Services','wpwheels') .'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">'. esc_html__('VIEW ALL','wpwheels') .'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->

    <!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0px","top":"10px"}},"typography":{"lineHeight":1.4}},"className":"wp-block-heading","fontSize":"max-48"} -->
    <h2 class="wp-block-heading has-max-48-font-size" style="margin-top:10px;margin-bottom:0px;line-height:1.4">'. esc_html__('Scale your business using our technology','wpwheels') .'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"fontSize":"large"} -->
    <p class="has-large-font-size">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','wpwheels') .'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small"}}}} -->
    <div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--x-small)"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"border":{"style":"dashed","width":"1px"}}} -->
    <div class="wp-block-column" style="border-style:dashed;border-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"level":3} -->
    <h3 class="wp-block-heading" id="sample-heading-1">'. esc_html__('Digital Marketing','wpwheels') .'</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','wpwheels') .'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)">'. esc_html__('Learn More','wpwheels') .'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->

    <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"border":{"style":"dashed","width":"1px"}}} -->
    <div class="wp-block-column" style="border-style:dashed;border-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"level":3} -->
    <h3 class="wp-block-heading" id="sample-heading-1">'. esc_html__('WordPress','wpwheels') .'</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','wpwheels') .'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)">'. esc_html__('Learn More','wpwheels') .'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column -->

    <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"border":{"style":"dashed","width":"1px"}}} -->
    <div class="wp-block-column" style="border-style:dashed;border-width:1px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"level":3} -->
    <h3 class="wp-block-heading" id="sample-heading-1">'. esc_html__('Hosting Provider','wpwheels') .'</h3>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p>'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','wpwheels') .'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"className":"is-style-outline"} -->
    <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)">'. esc_html__('Learn More','wpwheels') .'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->'
);


