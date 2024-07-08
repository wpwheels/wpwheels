<?php
/**
 * Free v Pro
 *
 * @package Wpwheels
 */

$icons = array(
	'0' => '<span class="dashicons dashicons-no"></span>',
	'1' => '<span class="dashicons dashicons-yes"></span>',
);
?>
<div class="wpwheels-dashboard-body">
	<div class="free-vs-pro-wrapper">
		<div class="section-cta-upgrade">
			<span><?php esc_html_e( 'PREMIUM', 'wpwheels' ); ?></span>
			<h2><?php esc_html_e( 'Unlock More with Wpwheels Pro', 'wpwheels' ); ?></h2>
			<p><?php esc_html_e( 'Unlock all the possibilties and true potential with premium version of this theme', 'wpwheels' ); ?></p>
			<a href="<?php echo esc_url( $this->theme_url . '?utm_source=wp&utm_medium=theme-dashboard&utm_campaign=fvp' ); ?>" target="_blank" class="button button-primary button-plus"><?php esc_html_e( 'Upgrade To Pro', 'wpwheels' ); ?></a>
		</div>
		<table>
			<thead>
				<tr>
					<th class="wpwheels-text-left"><?php esc_html_e( 'Features', 'wpwheels' ); ?></th>
					<th class="wpwheels-text-center"><?php esc_html_e( 'Free', 'wpwheels' ); ?></th>
					<th class="wpwheels-text-center"><?php esc_html_e( 'Pro', 'wpwheels' ); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$free_vs_pro = array(
					array(
						'feature' => __( 'Help and support', 'wpwheels' ),
						'free'    => __( 'Standard support', 'wpwheels' ),
						'pro'     => __( 'High priority support', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Predesigned website templates', 'wpwheels' ),
						'free'    => __( '1', 'wpwheels' ),
						'pro'     => __( '4', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Seo optimized', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Translation ready', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'RTL ready', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Post formats support', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'WooCommerce ready', 'wpwheels' ),
						'free'    => 1,
						'pro'     => __( 'With more options', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Preloader option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => __( '17+ Preloaders', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Progressbar option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Typography font option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Typography color option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Primary menu font option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Primary menu responisve font sizes', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Sub menu font option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Sub menu responisve font sizes', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Headings font option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Headings responisve font sizes', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Body font option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Body responisve font sizes', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Primary color option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Menu color option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Sub-menu color option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage ticker posts', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Multiple ticker labels', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Multiple ticker styles', 'wpwheels' ),
						'free'    => 0,
						'pro'     => __( '5+', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Homepage banner slider option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage banner slider style', 'wpwheels' ),
						'free'    => __( '1', 'wpwheels' ),
						'pro'     => __( '4', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Homepage banner thumbnail option', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage banner thumbnail style', 'wpwheels' ),
						'free'    => 0,
						'pro'     => __( '2', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Homepage banner carousel option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage banner carousel style', 'wpwheels' ),
						'free'    => __( '1', 'wpwheels' ),
						'pro'     => __( '4', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Homepage pinned posts', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage banner section visibility options', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage banner section dimensions', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage banner section dividers', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage trending posts', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage trending post style', 'wpwheels' ),
						'free'    => __( '1', 'wpwheels' ),
						'pro'     => __( '2', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Homepage trending post visibility options', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage trending post section dimensions', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage trending post section dividers', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Homepage layout option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => __( 'With more options', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Homepage custom sidebar', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Darkmode option', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Topbar option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Topbar color option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Header style', 'wpwheels' ),
						'free'    => __( '2', 'wpwheels' ),
						'pro'     => __( '4', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Header ad banner', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Sticky header', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Header section dimensions', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Menu Bar option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
				
					array(
						'feature' => __( 'Sticky sidebar', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Offcanvas', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Offcanvas light/dark theme', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Offcanvas logo', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Offcanvas widgets title style', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Archive style', 'wpwheels' ),
						'free'    => __( '4', 'wpwheels' ),
						'pro'     => __( '8', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Archive post metas', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Ajax load posts on click', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Infinite scroll load posts', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Related posts', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Floating related posts', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Author posts', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Author info box', 'wpwheels' ),
						'free'    => 1,
						'pro'     => __( 'With social links option', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Integrated social share option', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Page layout option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Category image option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Category color option', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Category banner image option', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Category different pagination', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Category post metas option', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Different design style for each category', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Different design style for each tags', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Tags different pagination', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Tags post metas option', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Custom widgets', 'wpwheels' ),
						'free'    => __( '16+', 'wpwheels' ),
						'pro'     => __( '22+', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Widgets title style & align options', 'wpwheels' ),
						'free'    =>  __( '10+ Styles', 'wpwheels' ),
						'pro'     =>  __( '19+ Styles', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Widgetareas', 'wpwheels' ),
						'free'    =>  __( '12+', 'wpwheels' ),
						'pro'     =>  __( '12+', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Widgetareas visibility options', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Widgetareas dimension options', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Widgetareas dividers', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Single post layout', 'wpwheels' ),
						'free'    =>  __( '3', 'wpwheels' ),
						'pro'     =>  __( '6', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Single post navigation style', 'wpwheels' ),
						'free'    => __( '3', 'wpwheels' ),
						'pro'     => __( '5', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Post primary category option', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Post subtitle option', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Extended gallery format support', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Extended video format support', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Extended audio format support', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( '404 page options', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Footer layouts', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Footer widgets title style & align options', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Footer light/dark theme', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Sub footer', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Sub footer light/dark theme', 'wpwheels' ),
						'free'    => 1,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Sub footer layout', 'wpwheels' ),
						'free'    => __( '1', 'wpwheels' ),
						'pro'     => __( '2', 'wpwheels' ),
					),
					array(
						'feature' => __( 'Sub footer logo', 'wpwheels' ),
						'free'    => 0,
						'pro'     => 1,
					),
					array(
						'feature' => __( 'Scroll to top', 'wpwheels' ),
						'free'    => 1,
						'pro'     => __( 'With more options', 'wpwheels' ),
					),
				);
				foreach ( $free_vs_pro as $features ) :
					?>
					<tr>
						<td class="wpwheels-text-left"><?php echo esc_html( $features['feature'] ); ?></td>
						<td class="wpwheels-text-center">
							<?php
							if ( 1 === $features['free'] ) {
								echo $icons[1];
							} elseif ( 0 === $features['free'] ) {
								echo $icons[0];
							} else {
								echo esc_html( $features['free'] );
							}
							?>
						</td>
						<td class="wpwheels-text-center">
							<?php
							if ( 1 === $features['pro'] ) {
								echo $icons[1];
							} elseif ( 0 === $features['pro'] ) {
								echo $icons[0];
							} else {
								echo esc_html( $features['pro'] );
							}
							?>
						</td>
					</tr>
					<?php
				endforeach;
				?>
			</tbody>
		</table>
		<div class="free-vs-pro-footer">
			<a href="<?php echo esc_url( $this->theme_url . '?utm_source=wp&utm_medium=theme-dashboard&utm_campaign=fvp' ); ?>" target="_blank"><?php esc_html_e( 'And many more features', 'wpwheels' ); ?><span class="dashicons dashicons-external"></span></a>
		</div>
	</div>
</div>
