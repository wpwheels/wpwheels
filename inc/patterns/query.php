<?php
/**
 * Query Posts
 */
return array(
	'title'      => esc_html__( 'Query Posts', 'wpwheels' ),
	'categories' => array( 'wpwheels', 'posts' ),
	'content'    => '
    <!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":10},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide"><!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":10},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":2}} -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
	<div class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"16/9","style":{"border":{"radius":"4px"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}}} /-->

	<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-small"}}},"className":"highlight"} /-->

	<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"bottom":"30px"}},"typography":{"fontSize":"18px"}},"className":"post-meta","layout":{"type":"flex"}} -->
	<div class="wp-block-group post-meta" style="margin-bottom:30px;font-size:18px"><!-- wp:paragraph -->
	<p>By: </p>
	<!-- /wp:paragraph -->

	<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"textTransform":"capitalize"}}} /-->

	<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"15px"}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity"/>
	<!-- /wp:separator -->

	<!-- wp:post-terms {"term":"category","prefix":"In: "} /-->

	<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"15px"}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
	<p>Published Date: </p>
	<!-- /wp:paragraph -->

	<!-- wp:post-date /--></div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->

	<!-- wp:post-excerpt {"moreText":"Read More","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
	<!-- /wp:post-template -->

	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide"><!-- wp:query-pagination {"align":"wide","layout":{"type":"flex"}} -->
	<!-- wp:query-pagination-previous /-->

	<!-- wp:query-pagination-numbers /-->

	<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination --></div>
	<!-- /wp:group --></div>
	<!-- /wp:query --></div>
	<!-- /wp:query -->'
);


