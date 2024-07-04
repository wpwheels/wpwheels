<?php
/**
 * Latest Posts
 */
return array(
	'title'      => esc_html__( 'Latest Posts', 'wpwheels' ),
	'categories' => array( 'wpwheels', 'posts' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"className":"welcome","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull welcome" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-columns-reverse"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center is-style-columns-reverse"><!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"40px"}},"backgroundColor":"primary"} -->
	<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"3px","fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"primary"} -->
	<p class="has-primary-color has-text-color" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:3px;text-transform:uppercase">'. esc_html__('Blogs','wpwheels').'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">'. esc_html__('VIEW ALL','wpwheels').'</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group -->

	<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0px","top":"10px"}},"typography":{"lineHeight":1.4}},"className":"wp-block-heading","fontSize":"max-48"} -->
	<h2 class="wp-block-heading has-max-48-font-size" style="margin-top:10px;margin-bottom:0px;line-height:1.4">'. esc_html__('Latest Blogs &amp; News','wpwheels').'</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"large"} -->
	<p class="has-large-font-size">'. esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.','wpwheels') .'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"perPage":3},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
	<div class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"16/9","style":{"border":{"radius":"4px"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}}} /-->

	<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-small"}}},"className":"highlight"} /-->

	<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"bottom":"30px"}},"typography":{"fontSize":"18px"}},"className":"post-meta","layout":{"type":"flex"}} -->
	<div class="wp-block-group post-meta" style="margin-bottom:30px;font-size:18px"><!-- wp:post-terms {"term":"category","prefix":"In: "} /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->

	<!-- wp:post-excerpt {"moreText":"Read More","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
	<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
	<!-- /wp:group -->'
);


