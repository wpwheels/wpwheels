<?php
/**
 * Hero Classic
 */
return array(
	'title'      => esc_html__( 'Hero Classic', 'wpwheels' ),
	'categories' => array( 'wpwheels', 'hero' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"secondary","className":"welcome","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull welcome has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-columns-reverse"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center is-style-columns-reverse"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"40px"}},"backgroundColor":"primary"} -->
    <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
    <!-- /wp:separator -->

    <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"primary"} -->
    <p class="has-primary-color has-text-color" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:3px;text-transform:uppercase">'. __('Fast & Secure','wpwheels').'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0px","top":"10px"}}},"className":"wp-block-heading","fontSize":"max-72"} -->
    <h2 class="wp-block-heading has-max-72-font-size" style="margin-top:10px;margin-bottom:0px">'. esc_html__('Perfect gifts for your loved ones!','wpwheels') .'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"fontSize":"large"} -->
    <p class="has-large-font-size">'.esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','wpwheels').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex"},"style":{"spacing":{"blockGap":"20px","margin":{"top":"30px"}}}} -->
    <div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"fontSize":"small"} -->
    <div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button">'. esc_html__('Buy Product','wpwheels') .'</a></div>
    <!-- /wp:button -->

    <!-- wp:button {"className":"is-style-outline-background is-style-outline","fontSize":"small"} -->
    <div class="wp-block-button has-custom-font-size is-style-outline-background is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button" href="#">'. esc_html__('How it Works','wpwheels').'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"id":300,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="'. esc_url( get_theme_file_uri() ) .'/assets/images/banner-image.png" alt="" class="wp-image-300"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->'
);


