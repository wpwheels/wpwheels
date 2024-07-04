<?php
/**
 * Call to Action Basic
 */
return array(
	'title'      => esc_html__( 'Call to Action Basic', 'wpwheels' ),
	'categories' => array( 'wpwheels', 'call-to-action' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"contrast","textColor":"base","className":"welcome","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull welcome has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"40px"}},"backgroundColor":"base"} -->
    <hr class="wp-block-separator has-text-color has-base-color has-alpha-channel-opacity has-base-background-color has-background"/>
    <!-- /wp:separator -->

    <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"layout":{"selfStretch":"fit","flexSize":null}}} -->
    <p style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:3px;text-transform:uppercase">'. esc_html__('Stay Connected','wpwheels') .'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"layout":{"selfStretch":"fixed","flexSize":"720px"}},"fontSize":"large"} -->
    <p class="has-large-font-size" style="line-height:1.5">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','wpwheels') .'</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group -->

    <!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
    <div class="wp-block-buttons alignwide"><!-- wp:button {"fontSize":"small"} -->
    <div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button">'. esc_html__('Subscribe Now','wpwheels') .'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->'
);


