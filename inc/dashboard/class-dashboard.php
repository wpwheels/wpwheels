<?php
/**
 * Dashboard Page
 *
 */

if ( ! class_exists( 'Wpwheels_Dashboard' ) ) {
	/**
	 * Main class.
	 *
	 * @since 1.0.0
	 */
	class Wpwheels_Dashboard {

		/**
		 * Instance
		 *
		 * @access private
		 * @var null $instance
		 * @since 1.0.0
		 */
		private static $instance;

		/**
		 * Initiator
		 *
		 * @since 1.0.0
		 * @return object initialized object of class.
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Theme Name
		 *
		 * @access private
		 * @var null $theme_name
		 * @since 1.0.0
		 */
		private $theme_name;

		/**
		 * Theme Version
		 *
		 * @access private
		 * @var null $theme_version
		 * @since 1.0.0
		 */
		private $theme_version;

		/**
		 * Theme Slug
		 *
		 * @access private
		 * @var null $theme_slug
		 * @since 1.0.0
		 */
		private $theme_slug;

		/**
		 * Page Slug
		 *
		 * @access private
		 * @var null $page_slug
		 * @since 1.0.0
		 */
		private $page_slug;

		/**
		 * Review Url
		 *
		 * @access private
		 * @var null $review_url
		 * @since 1.0.0
		 */
		private $review_url;

		/**
		 * Redirect Template Url
		 *
		 * @access private
		 * @var null $redirect_template_url
		 * @since 1.0.0
		 */
		private $redirect_template_url;

		/**
		 * Holds Errors
		 *
		 * @access private
		 * @var array $errors
		 * @since 1.0.0
		 */
		private $errors = array();

		/**
		 * Tabs Array
		 *
		 * @access private
		 * @var array $tab_sections
		 * @since 1.0.0
		 */
		private $tab_sections = array();

		/**
		 * Recommended Plugins
		 *
		 * @access private
		 * @var array $recommended_plugins
		 * @since 1.0.0
		 */
		private $recommended_plugins = array();

		/**
		 * Plugins for Starter Templates
		 *
		 * @access private
		 * @var array $starter_template_plugins
		 * @since 1.0.0
		 */
		private $starter_template_plugins = array();

		/**
		 * Theme Url
		 *
		 * @access private
		 * @var string $theme_url
		 * @since 1.0.0
		 */
		private $theme_url = 'https://unfoldwp.com/products/wpwheels/';

		/**
		 * Documentation Url
		 *
		 * @access private
		 * @var string $doc_url
		 * @since 1.0.0
		 */
		private $doc_url = 'https://docs.unfoldwp.com/docs/wpwheels/';

		/**
		 * Support Url
		 *
		 * @access private
		 * @var string $support_url
		 * @since 1.0.0
		 */
		private $support_url = 'https://unfoldwp.com/contact-us/';

		/**
		 * Constructor.
		 *
		 * @since 1.0.0
		 */
		public function __construct() {

			if ( ! function_exists( 'is_plugin_active' ) ) {
				require_once ABSPATH . 'wp-admin/includes/plugin.php';
			}

			$theme 					= wp_get_theme();
			$this->theme_name 		= $theme->get( 'Name' );
			$this->theme_version 	= $theme->get( 'Version' );
			$this->theme_slug    	= $theme->get_template();
			$this->page_slug		= 'blockwheels';

			$this->review_url = 'https://wordpress.org/support/theme/' . $this->theme_slug . '/reviews/?rate=5#new-post';

			$template_link = add_query_arg(
				array(
					'page'    => $this->page_slug
				),
				admin_url( 'admin.php' )
			);

			$this->redirect_template_url = $template_link;

			// Define Tabs Sections.
			$this->tab_sections = array(
				'getting-started'     => __( 'Getting Started', 'wpwheels' ),
				'recommended-plugins' => __( 'Recommended Plugins', 'wpwheels' ),
				'starter-templates'   => __( 'Starter Templates', 'wpwheels' ),
				'free-vs-pro'         => __( 'Free vs Pro', 'wpwheels' ),
			);

			// List of Plugins used on starter setup.
			$this->starter_template_plugins = array(
				array(
					'name'   => __( 'One Click Demo Import', 'wpwheels' ),
					'desc'   => __( 'Import your content, widgets and theme settings with one click.', 'wpwheels' ),
					'slug'   => 'one-click-demo-import',
					'path'   => 'one-click-demo-import/one-click-demo-import.php',
					'status' => self::get_plugin_status( 'one-click-demo-import/one-click-demo-import.php' ),
					'icon'   => 'https://ps.w.org/one-click-demo-import/assets/icon-256x256.png',
				),
				array(
					'name'   => __( 'Blockwheels', 'wpwheels' ),
					'desc'   => __( 'Awesome starter templates for themes made by UnfoldWP.', 'wpwheels' ),
					'slug'   => 'blockwheels',
					'path'   => 'blockwheels/blockwheels.php',
					'status' => self::get_plugin_status( 'blockwheels/blockwheels.php' ),
					'icon'   => 'https://ps.w.org/blockwheels/assets/icon-256x256.png',
				),
			);

			// And any extra list of Recommended Plugins.
			$this->recommended_plugins = array_merge(
				$this->starter_template_plugins,
				array(
					array(
						'name'   => __( 'MailChimp for WordPress', 'wpwheels' ),
						'desc'   => __( 'Adds various highly effective sign-up methods to your site.', 'wpwheels' ),
						'slug'   => 'mailchimp-for-wp',
						'path'   => 'mailchimp-for-wp/mailchimp-for-wp.php',
						'status' => self::get_plugin_status( 'mailchimp-for-wp/mailchimp-for-wp.php' ),
						'icon'   => 'https://ps.w.org/mailchimp-for-wp/assets/icon-256x256.png',
					),
					array(
						'name'   => __( 'Social Feed Gallery', 'wpwheels' ),
						'desc'   => __( 'User-friendly Instagram plugin for displaying your Instagram feed on your site.', 'wpwheels' ),
						'slug'   => 'insta-gallery',
						'path'   => 'insta-gallery/insta-gallery.php',
						'status' => self::get_plugin_status( 'insta-gallery/insta-gallery.php' ),
						'icon'   => 'https://ps.w.org/insta-gallery/assets/icon-256x256.jpg',
					),
				)
			);

			$this->errors = array(
				'permission' => __( 'Sorry, you do not have permission to perform this action.', 'wpwheels' ),
				'nonce'      => __( 'Could not verifry the nonce.', 'wpwheels' ),
				'default'    => __( 'Oops! something went wrong.', 'wpwheels' ),
				'invalid'    => __( 'Not found!', 'wpwheels' ),
			);

			if ( current_user_can( 'manage_options' ) ) {

				// Create admin notices.
				add_action( 'admin_notices', array( $this, 'display_admin_notice' ), 99 );
			}

			add_action( 'admin_init', array( $this, 'init_reminder' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
			add_action( 'wp_ajax_wpwheels_dismiss_notice', array( $this, 'dismiss_notice' ) );
			add_action( 'wp_ajax_wpwheels_install_plugin', 'wp_ajax_install_plugin' );
			add_action( 'wp_ajax_wpwheels_activate_plugin', array( $this, 'activate_plugin' ) );
			add_action( 'switch_theme', array( $this, 'reset_notices' ) );
			add_action( 'after_switch_theme', array( $this, 'reset_notices' ) );
		}

		/**
		 * Update the reminder time.
		 *
		 * @since 1.0.0
		 */
		public function init_reminder() {
			if ( ! get_option( 'wpwheels_reminder_time' ) ) {
				update_option( 'wpwheels_reminder_time', time() + 14 * DAY_IN_SECONDS );
			}
		}

		/**
		 * Delete the saved options.
		 *
		 * @since 1.0.0
		 */
		public function reset_notices() {
			delete_option( 'wpwheels_reminder_time' );
			delete_option( 'wpwheels_dismissed_notices' );
		}

		/**
		 * Generate proper data for starter plugin installation.
		 *
		 * @since 1.0.0
		 */
		public function starter_template_button() {
			$plugins_active = true;
			$btn_html       = '';
			$data           = array();

			if ( $this->starter_template_plugins && is_array( $this->starter_template_plugins ) ) :
				foreach ( $this->starter_template_plugins as $plugin_data ) :

					if ( 'activated' === $plugin_data['status'] ) :
						$data_action = '';
					else :
						$plugins_active = false;
						if ( 'install' === $plugin_data['status'] ) {
							$data_action = 'wpwheels_install_plugin';
						} else {
							$data_action = 'wpwheels_activate_plugin';
						}
					endif;

					$data_slug = $plugin_data['slug'];
					$data_path = $plugin_data['path'];

					$btn_html .= "<div data-action='" . esc_attr( $data_action ) . "' data-slug='" . esc_attr( $data_slug ) . "' data-path='" . esc_attr( $data_path ) . "'></div>";
				endforeach;
			endif;

			$data['plugins_active'] = $plugins_active;
			$data['btn_html']       = $btn_html;

			return $data;
		}

		/**
		 * Dislpay admin notices.
		 *
		 * @since 1.0.0
		 */
		public function display_admin_notice() {

			if ( $this->can_display_notice() && ! $this->is_dismissed( 'welcome' ) ) {
				$this->display_welcome_notice();
			}

			$reminder_time = get_option( 'wpwheels_reminder_time' );
			if ( $this->can_display_notice() && ! $this->is_dismissed( 'review' ) && ! empty( $reminder_time ) && time() > $reminder_time ) {
				$this->display_review_notice();
			}

		}

		/**
		 * Display welcome notice.
		 *
		 * @since 1.0.0
		 */
		public function display_welcome_notice() {
			$user     = wp_get_current_user();
			$btn_data = $this->starter_template_button();
			?>
<div id="wpwheels-welcome-notice" class="wpwheels-dashboard-wrapper notice wpwheels-notice is-dismissible">
    <img class="notice-top-corner"
        src="<?php echo esc_url(get_theme_file_uri() . '/assets/images/notice-top-corner.png'); ?>"
        alt="Notice Top Corner">
    <img class="notice-bottom-corner"
        src="<?php echo esc_url(get_theme_file_uri() . '/assets/images/notice-bottom-corner.png'); ?>"
        alt="Notice Bottom Corner">

    <div class="wpwheels-notice-wrapper">
        <div class="wpwheels-notice-intro">
            <div class="intro__thanks">
                <?php
								printf(
									/* translators: %s: Theme Name. */
									esc_html__( 'Thank you for selecting the %s Theme!', 'wpwheels' ),
									$this->theme_name
								);
							?>
                <h2><?php esc_html_e( 'Create Your Ideal Site with FSE Blocks!', 'wpwheels' ); ?></h2>
            </div>
            <div class="intro__desc">
                <?php
								printf(
									/* translators: %s: Theme Name. */
									__( '%1$s is now installed and ready for use. We highly recommend installing and activating the <b>BlockWheels</b> Plugin to unlock freemium website templates/demos, 20+ advanced Gutenberg Blocks, and patterns, facilitating the creation of stunning websites with utmost ease.', 'wpwheels' ),
									$this->theme_name,
								);
							?>
            </div>
            <div class="wpwheels-notice-message">
                <div class="wpwheels-notice-template-import">
                    <?php if ( $btn_data['plugins_active'] ) : ?>
                    <p><a href="<?php echo esc_url( $this->redirect_template_url ); ?>"
                            class="button button-primary"><?php esc_html_e( 'Get Started', 'wpwheels' ); ?></a></p>
                    <?php else : ?>
                    <div class="starter-template-action">
                        <div class="starter-template-plugins-info">
                            <?php echo $btn_data['btn_html']; ?>
                        </div>
                        <p><a href="<?php echo esc_url( $this->redirect_template_url ); ?>"
                                class="button button-primary"><?php esc_html_e( 'Install & Activate', 'wpwheels' ); ?></a>
                        </p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="wpwheels-notice-image">
            <div class="intro_info">
                <img class="notice-banner"
                    src="<?php echo esc_url(get_theme_file_uri() . '/assets/images/notice-arrow.png'); ?>" alt="Arrow">
                <div class="info__boxes">
                    <div class="info__box green-bg">
                        <span>16+</span>
                        <?php esc_html_e('Blocks','wpwheels');?>
                    </div>
                    <div class="info__box pink-bg">
                        <span>24+</span>
                        <?php esc_html_e('Patterns','wpwheels');?>
                    </div>
                </div>
            </div>
            <div class="intro__banner">
                <img class="notice-banner"
                    src="<?php echo esc_url(get_theme_file_uri() . '/assets/images/notice-banner.png'); ?>"
                    alt="BlockWheels">
            </div>
        </div>
    </div>
    <button type="button" class="notice-dismiss wpwheels-remove-notice" data-dismiss="welcome">
        <span class="screen-reader-text"><?php esc_html_e( 'Dismiss this notice.', 'wpwheels' ); ?></span>
    </button>
</div>
<?php
		}

		/**
		 * Display review notice.
		 *
		 * @since 1.0.0
		 */
		public function display_review_notice() {
			?>
<div id="wpwheels-review-notice" class="notice wpwheels-notice is-dismissible">
    <div class="wpwheels-notice-wrapper">
        <div class="wpwheels-notice-message">
            <div class="wpwheels-notice-image">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/screenshot.png' ); ?>"
                    alt="<?php esc_attr_e( 'Wpwheels Screenshot', 'wpwheels' ); ?>">
            </div>
            <div class="wpwheels-notice-review-content">
                <div class="wpwheels-notice-intro">
                    <div class="intro__thanks">
                        <?php
									printf(
										/* translators: %s: Theme Name. */
										esc_html__( 'Thank you for using %s', 'wpwheels' ),
										$this->theme_name
									);
									?>
                    </div>
                    <div class="intro__desc">
                        <?php
									printf(
										/* translators: %1$s is link start tag, %2$s is link end tag. */
										esc_html__( ' We hope you love it, and we would really appreciate it if you would %1$srate us%2$s and spread your positive words.', 'wpwheels' ),
										'<a target="_blank" href="' . esc_url( $this->review_url ) . '">',
										'</a>'
									);
									?>
                    </div>
                </div>
                <div class="wpwheels-review-btn-grp">
                    <a target="_blank"
                        href="<?php echo esc_url( $this->review_url ); ?>"><span><?php esc_html_e( '😎', 'wpwheels' ); ?></span><?php esc_html_e( ' Sure Thing', 'wpwheels' ); ?></a>
                    <a href="#" class="wpwheels-remove-notice"
                        data-dismiss="review"><span><?php esc_html_e( '👍', 'wpwheels' ); ?></span><?php esc_html_e( ' Already rated', 'wpwheels' ); ?></a>
                    <a href="#" class="wpwheels-remove-notice" data-dismiss="review"
                        data-dismiss-type="remind"><span><?php esc_html_e( '⏰', 'wpwheels' ); ?></span><?php esc_html_e( ' Remind Later', 'wpwheels' ); ?></a>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="notice-dismiss wpwheels-remove-notice" data-dismiss="review">
        <span class="screen-reader-text"><?php esc_html_e( 'Dismiss this notice.', 'wpwheels' ); ?></span>
    </button>
</div>
<?php
		}

		/**
		 * Should we display notices on this screen?
		 *
		 * @since 1.0.0
		 *
		 * @return bool
		 */
		protected function can_display_notice() {
			$screen = get_current_screen();

			if ( empty( $screen ) ) {
				return false;
			}
			return in_array(
				$screen->id,
				array(
					'dashboard',
					'themes',
				)
			);
		}

		/**
		 * Has a notice been dismissed?
		 *
		 * @since 1.0.0
		 *
		 * @param string $notice Notice name.
		 * @return bool
		 */
		public static function is_dismissed( $notice ) {
			$dismissed = get_option( 'wpwheels_dismissed_notices', array() );
			return in_array( $notice, $dismissed );
		}

		/**
		 * Stores a dismissed notice in database
		 *
		 * @since 1.0.0
		 *
		 * @param string $notice Notice to be Dismissed.
		 * @return void
		 */
		public static function dismiss( $notice ) {
			$dismissed = get_option( 'wpwheels_dismissed_notices', array() );

			if ( ! in_array( $notice, $dismissed ) ) {
				$dismissed[] = $notice;
				update_option( 'wpwheels_dismissed_notices', array_unique( $dismissed ) );
			}
		}

		/**
		 * Get plugin status.
		 *
		 * @since 1.0.0
		 *
		 * @param string $plugin_file Plugin slug.
		 */
		public static function get_plugin_status( $plugin_file ) {

			$installed_plugins = get_plugins();

			if ( ! isset( $installed_plugins[ $plugin_file ] ) ) {
				return 'install';
			} elseif ( is_plugin_active( $plugin_file ) ) {
				return 'activated';
			} else {
				return 'installed';
			}
		}

		/**
		 * Get error msg.
		 *
		 * @since 1.0.0
		 *
		 * @param string $type Error type.
		 */
		public function get_error_msg( $type ) {

			if ( ! isset( $this->errors[ $type ] ) ) {
				$type = 'default';
			}

			return $this->errors[ $type ];
		}


		/**
		 * Acticate plugin callback.
		 *
		 * @since 1.0.0
		 */
		public function activate_plugin() {

			$response_data = array( 'message' => $this->get_error_msg( 'permission' ) );

			if ( ! current_user_can( 'manage_options' ) ) {
				wp_send_json_error( $response_data );
			}

			if ( empty( $_POST ) ) {
				$response_data = array( 'message' => $this->get_error_msg( 'invalid' ) );
				wp_send_json_error( $response_data );
			}

			if ( ! check_ajax_referer( 'wpwheels-plugin-activate', 'nonce', false ) ) {
				$response_data = array( 'message' => $this->get_error_msg( 'nonce' ) );
				wp_send_json_error( $response_data );
			}

			if ( ! current_user_can( 'install_plugins' ) || ! isset( $_POST['path'] ) || ! sanitize_text_field( wp_unslash( $_POST['path'] ) ) ) {
				wp_send_json_error(
					array(
						'success' => false,
						'message' => __( 'Please specify a plugin', 'wpwheels' ),
					)
				);
			}

			$plugin_path = ( isset( $_POST['path'] ) ) ? sanitize_text_field( wp_unslash( $_POST['path'] ) ) : '';

			$activate = activate_plugin( $plugin_path, '', false, true );

			if ( is_wp_error( $activate ) ) {
				wp_send_json_error(
					array(
						'success' => false,
						'message' => $activate->get_error_message(),
					)
				);
			}

			wp_send_json_success(
				array(
					'success' => true,
					'message' => __( 'Plugin Activated Successfully', 'wpwheels' ),
				)
			);
		}

		/**
		 * Enqueue scripts for dashboard page.
		 *
		 * @since 1.0.0
		 *
		 * @param string $hook Page hook.
		 */
		public function enqueue_scripts( $hook ) {

			if ( ! in_array(
				$hook,
				array(
					'index.php',
					'themes.php',
					'appearance_page_wpwheels-dashboard',
					'appearance_page_wpwheels-demo-import'
				)
			) ) {
				return;
			}

			wp_enqueue_script(
				'wpwheels-dashboard-js',
				get_theme_file_uri( 'build/admin/index.js' ),
				['jquery'],
				filemtime( get_theme_file_path( 'build/admin/index.js' ) ),
				true
			);
			wp_localize_script(
				'wpwheels-dashboard-js',
				'wpwheelsDashboard',
				array(
					'notice_dismiss_nonce'   => wp_create_nonce( 'wpwheels-dismiss-nonce' ),
					'plugin_install_nonce'   => wp_create_nonce( 'updates' ),
					'plugin_activate_nonce'  => wp_create_nonce( 'wpwheels-plugin-activate' ),
					'plugin_installing_text' => __( 'Installing', 'wpwheels' ),
					'plugin_installed_text'  => __( 'Installed', 'wpwheels' ),
					'plugin_activating_text' => __( 'Activating', 'wpwheels' ),
					'plugin_activated_text'  => __( 'Activated', 'wpwheels' ),
					'plugin_activate_text'   => __( 'Activate', 'wpwheels' ),
				)
			);

			wp_enqueue_style(
				'wpwheels-dashboard-css',
				get_theme_file_uri( '/build/admin/index.css' ),
				array(),
				filemtime( get_theme_file_path( '/build/admin/index.css' ) )
			);
		}

		/**
		 * Dismiss notice callback
		 *
		 * @since 1.0.0
		 */
		public function dismiss_notice() {

			$response_data = array( 'message' => $this->get_error_msg( 'permission' ) );

			if ( ! current_user_can( 'manage_options' ) ) {
				wp_send_json_error( $response_data );
			}

			if ( empty( $_POST ) ) {
				$response_data = array( 'message' => $this->get_error_msg( 'invalid' ) );
				wp_send_json_error( $response_data );
			}

			if ( ! check_ajax_referer( 'wpwheels-dismiss-nonce', 'nonce', false ) ) {
				$response_data = array( 'message' => $this->get_error_msg( 'nonce' ) );
				wp_send_json_error( $response_data );
			}

			$dismiss = isset( $_POST['dismiss'] ) ? sanitize_text_field( $_POST['dismiss'] ) : '';
			if ( ! $dismiss ) {
				wp_send_json_error(
					array(
						'success' => false,
						'message' => __( 'No dismissable notice found.', 'wpwheels' ),
					)
				);
			}

			$dismiss_type = isset( $_POST['dismiss_type'] ) ? sanitize_text_field( $_POST['dismiss_type'] ) : '';

			if ( $dismiss_type && 'remind' === $dismiss_type ) {
				$reminder_time = time() + 14 * DAY_IN_SECONDS;
				update_option( 'wpwheels_reminder_time', $reminder_time );
			} else {
				self::dismiss( $dismiss );
			}

			wp_send_json_success(
				array(
					'success' => true,
					'message' => __( 'Notice Dismissed Successfully', 'wpwheels' ),
				)
			);
		}

	}

}

Wpwheels_Dashboard::get_instance();