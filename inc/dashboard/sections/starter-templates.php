<?php
/**
 * Starter Templates
 *
 * @package Wpwheels
 */

?>
<div class="wpwheels-dashboard-body">
    <div class="starter-templates-wrap">
        <?php
		$btn_data = $this->starter_template_button();
		if ( $btn_data['plugins_active'] ) :
			do_action( 'wpwheels_starter_templates' );
		else :
			?>
        <div class="starter-templates-notice">
            <h2><?php esc_html_e( 'Starter Templates', 'wpwheels' ); ?></h2>
            <div class="starter-template-desc intro__desc">
                <?php esc_html_e( 'Get access to carefully crafted professional and visually appealing website templates, saving you valuable time and effort in the development process.', 'wpwheels' ); ?>
            </div>
            <div class="starter-template-action">
                <div class="starter-template-plugins-info">
                    <?php echo $btn_data['btn_html']; ?>
                </div>
                <a href="<?php echo esc_url( $this->redirect_template_url ); ?>"
                    class="button button-primary"><?php esc_html_e( 'Install & Activate', 'wpwheels' ); ?></a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>