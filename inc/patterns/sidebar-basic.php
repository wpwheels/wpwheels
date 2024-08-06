<?php
/**
 * Sidebar Basic
 */
return array(
	'title'      => esc_html__( 'Sidebar Basic', 'wpwheels' ),
	'categories' => array( 'wpwheels', 'sidebar' ),
	'blockTypes' => array( 'core/template-part/general' ),
	'content'    => '
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"small","layout":{"type":"constrained","wideSize":"710px","contentSize":"710px","justifyContent":"left"}} -->
	<div class="wp-block-group has-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|large","right":"0","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"5px"}},"backgroundColor":"tertiary","layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
	<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="border-radius:5px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:0;padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:heading {"fontSize":"base"} -->
	<h2 class="wp-block-heading has-base-font-size">'.esc_html__('Latest Post','wpwheels').'</h2>
	<!-- /wp:heading -->

	<!-- wp:latest-posts {"postsToShow":3,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":113,"featuredImageSizeHeight":113} /-->

	<!-- wp:separator {"className":"is-style-separator-dotted","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"main-accent"} -->
	<hr class="wp-block-separator has-text-color has-main-accent-color has-alpha-channel-opacity has-main-accent-background-color has-background is-style-separator-dotted" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)"/>
	<!-- /wp:separator -->

	<!-- wp:heading {"fontSize":"base"} -->
	<h2 class="wp-block-heading has-base-font-size">'.esc_html__('Gallery','wpwheels').'</h2>
	<!-- /wp:heading -->

	<!-- wp:gallery {"linkTo":"none"} -->
	<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":308,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="'. esc_url( get_theme_file_uri() ) .'/assets/images/ad-banner.png" alt="" class="wp-image-308"/></figure>
	<!-- /wp:image -->

	<!-- wp:image {"id":302,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="'. esc_url( get_theme_file_uri() ) .'/assets/images/placeholder.png" alt="" class="wp-image-302"/></figure>
	<!-- /wp:image -->

	<!-- wp:image {"id":123,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="'. esc_url( get_theme_file_uri() ) .'/assets/images/ad-banner.png" alt="" class="wp-image-123"/></figure>
	<!-- /wp:image -->

	<!-- wp:image {"id":122,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="'. esc_url( get_theme_file_uri() ) .'/assets/images/placeholder.png" alt="" class="wp-image-122"/></figure>
	<!-- /wp:image -->

	<!-- wp:image {"id":117,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="'. esc_url( get_theme_file_uri() ) .'/assets/images/ad-banner.png" alt="" class="wp-image-117"/></figure>
	<!-- /wp:image -->

	<!-- wp:image {"id":114,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="'. esc_url( get_theme_file_uri() ) .'/assets/images/placeholder.png" alt="" class="wp-image-114"/></figure>
	<!-- /wp:image --></figure>
	<!-- /wp:gallery -->

	<!-- wp:separator {"className":"is-style-separator-dotted is-style-default","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"main-accent"} -->
	<hr class="wp-block-separator has-text-color has-main-accent-color has-alpha-channel-opacity has-main-accent-background-color has-background is-style-separator-dotted is-style-default" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)"/>
	<!-- /wp:separator -->

	<!-- wp:heading {"fontSize":"base"} -->
	<h2 class="wp-block-heading has-base-font-size">'.esc_html__('Categories','wpwheels').'</h2>
	<!-- /wp:heading -->

	<!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"},"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}}} /-->

	<!-- wp:separator {"className":"is-style-separator-dotted","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"main-accent"} -->
	<hr class="wp-block-separator has-text-color has-main-accent-color has-alpha-channel-opacity has-main-accent-background-color has-background is-style-separator-dotted" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)"/>
	<!-- /wp:separator -->

	<!-- wp:heading {"fontSize":"base"} -->
	<h2 class="wp-block-heading has-base-font-size">'.esc_html__('Advertisement','wpwheels').'</h2>
	<!-- /wp:heading -->

	<!-- wp:image {"id":347,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="'. esc_url( get_theme_file_uri() ) .'/assets/images/ad-banner.png" alt="" class="wp-image-347"/></figure>
	<!-- /wp:image -->

	<!-- wp:separator {"className":"is-style-separator-dotted","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"main-accent"} -->
	<hr class="wp-block-separator has-text-color has-main-accent-color has-alpha-channel-opacity has-main-accent-background-color has-background is-style-separator-dotted" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)"/>
	<!-- /wp:separator -->

	<!-- wp:heading {"fontSize":"base"} -->
	<h2 class="wp-block-heading has-base-font-size">'.esc_html__('Follow Us','wpwheels').'</h2>
	<!-- /wp:heading -->

	<!-- wp:social-links {"iconColor":"base","iconColorValue":"#fff","iconBackgroundColor":"primary","iconBackgroundColorValue":"#4d34fa","className":"is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-small","left":"10px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
	<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

	<!-- wp:social-link {"url":"#","service":"youtube"} /-->

	<!-- wp:social-link {"url":"#","service":"chain"} /-->

	<!-- wp:social-link {"url":"#","service":"github"} /-->

	<!-- wp:social-link {"url":"#","service":"wordpress"} /--></ul>
	<!-- /wp:social-links --></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->
    '
);