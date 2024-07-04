<?php
/**
 * Follow Subscribe
 */

$form = wpwheels_get_mailchimp_forms();
return array(
	'title'      => esc_html__( 'Follow Subscribe', 'wpwheels' ),
	'categories' => array( 'wpwheels', 'call-to-action' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"welcome","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull welcome" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:column {"layout":{"type":"constrained"}} -->
<div class="wp-block-column"><!-- wp:cover {"overlayColor":"base","minHeight":300,"isDark":false,"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontSize":"14px","textTransform":"uppercase","letterSpacing":"0.3em"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"text-light"} -->
<p class="has-text-align-center has-text-light-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-size:14px;letter-spacing:0.3em;text-transform:uppercase">' . esc_html__( 'Stay connected', 'wpwheels' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"bottom":"25px"}}}} -->
<h3 class="wp-block-heading has-text-align-center" style="margin-bottom:25px;font-size:24px">' . esc_html__( 'Follow me on various social media platform', 'wpwheels' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"heading","iconColorValue":"#242424","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"layout":{"type":"constrained"}} -->
<div class="wp-block-column"><!-- wp:cover {"customOverlayColor":"#F1F1F1","minHeight":300,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#F1F1F1"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"fontSize":"14px","textTransform":"uppercase","letterSpacing":"0.3em"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"text-light"} -->
<p class="has-text-align-center has-text-light-color has-text-color" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-size:14px;letter-spacing:0.3em;text-transform:uppercase">' . esc_html__( 'Subscribe', 'wpwheels' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"24px"},"spacing":{"margin":{"bottom":"25px"}}}} -->
<h3 class="wp-block-heading has-text-align-center" style="margin-bottom:25px;font-size:24px">' . esc_html__( 'Get the latest posts delivered right to your inbox', 'wpwheels' ) . '</h3>
<!-- /wp:heading -->' . wp_kses_post( $form ) . '

</div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
