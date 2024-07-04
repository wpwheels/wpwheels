<?php
/**
 * Dashboard Page
 *
 * @package WPWheels
 * @since 1.0.2
 */

if ( ! class_exists( 'WPWheels_Dashboard' ) ) {

	/**
	 * Main class.
	 *
	 */
	class WPWheels_Dashboard {

		/**
		 * Instance
		 *
		 * @access private
		 * @var null $instance
		 */
		private static $instance;

		/**
		 * Initiator
		 *
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
		 */
		private $theme_name;

		/**
		 * Theme Version
		 *
		 * @access private
		 * @var null $theme_version
		 */
		private $theme_version;

		/**
		 * Page Slug
		 *
		 * @access private
		 * @var null $page_slug
		 */
		private $page_slug;

		/**
		 * Redirect Url
		 *
		 * @access private
		 * @var null $redirect_url
		 */
		private $redirect_url;

		/**
		 * Constructor.
		 *
		 */
		public function __construct() {

			$theme = wp_get_theme();

			$this->theme_name = $theme->get( 'Name' );

			$this->theme_version = $theme->get( 'Version' );

			$this->page_slug	= 'blockwheels';

			$template_link = add_query_arg(
				array(
					'page'    => $this->page_slug
				),
				admin_url( 'admin.php' )
			);

			$this->redirect_url = $template_link;

			if ( current_user_can( 'manage_options' ) ) {
				// Create admin notices.
				add_action( 'admin_notices', array( $this, 'display_admin_notice' ), 99 );
			}
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

			add_action( 'wp_ajax_wpwheels_dismissed_notice', array( $this, 'dismiss_notice' ) );
			add_action( 'wp_ajax_wpwheels_check_notice_actions', array( $this, 'check_notice' ) );
			add_action( 'wp_ajax_wpwheels_notice_button_click', array( $this, 'execute_notice' ) );
		}

		public function get_wpwheels_extra_status() {
			
			$free_status = $this->get_plugin_status( 'blockwheels' );

			return array(
				'slug'   => 'blockwheels',
				'status' => $free_status,
			);
		}

		public function get_plugin_status( $slug ) {
			$full_name = $this->is_plugin_installed( $slug );

			if ( ! $full_name ) {
				return 'uninstalled';
			}

			if ( ! $this->is_plugin_active( $full_name ) ) {
				return 'installed';
			}

			return 'active';
		}

		public function is_plugin_installed( $slug ) {
			$installed_plugins = $this->get_installed_plugins();

			foreach ( $installed_plugins as $plugin => $data ) {
				$parts             = explode( '/', $plugin );
				$plugin_first_part = $parts[0];

				if ( strtolower( $slug ) === strtolower( $plugin_first_part ) ) {
					return $plugin;
				}
			}

			return false;
		}


		public function is_plugin_active( $plugin ) {
			if ( ! function_exists( 'activate_plugin' ) ) {
				require_once ABSPATH . 'wp-admin/includes/plugin.php';
			}

			return is_plugin_active( $plugin );
		}

		public function get_installed_plugins( $plugin_folder = '' ) {
			// https://github.com/WordPress/WordPress/blob/ba92ed7615dec870a363bc99d6668faedfa77415/wp-admin/includes/plugin.php#L2254
			wp_cache_delete( 'plugins', 'plugins' );

			if ( ! function_exists( 'get_plugins' ) ) {
				require_once ABSPATH . 'wp-admin/includes/plugin.php';
			}

			return get_plugins( $plugin_folder );
		}

		protected function require_wp_headers() {
			require_once ABSPATH . 'wp-admin/includes/file.php';

			if ( ! class_exists( 'Plugin_Upgrader', false ) ) {
				require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
			}

			if ( ! class_exists( 'WPWheels_Upgrade_Skin', false ) ) {
				require_once dirname( __FILE__ ) . '/class-upgrade-skin.php';
			}
		}

		public function get_plugins_api( $slug ) {

			static $api = array(); // Cache received responses.

			if ( ! isset( $api[ $slug ] ) ) {
				if ( ! function_exists( 'plugins_api' ) ) {
					require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
				}

				require_once dirname( __FILE__ ) . '/class-upgrade-skin.php';

				$response = plugins_api(
					'plugin_information',
					array(
						'slug'   => $slug,
						'fields' => array(
							'sections' => false,
						),
					)
				);

				$api[ $slug ] = false;

				if ( is_wp_error( $response ) ) {
				} else {
					$api[ $slug ] = $response;
				}
			}

			return $api[ $slug ];
		}

		public function download_and_install( $slug ) {
			$this->require_wp_headers();

			if ( $this->is_plugin_installed( $slug ) ) {
				return true;
			}

			$api = $this->get_plugins_api( $slug );

			if ( ! isset( $api->download_link ) ) {
				return true;
			}

			// Prep variables for Plugin_Installer_Skin class.
			$source = $api->download_link;

			if ( ! $source ) {
				return false;
			}

			$skin = new WPWheels_Upgrade_Skin();

			// Create a new instance of Plugin_Upgrader.
			$upgrader = new Plugin_Upgrader( $skin );

			$res = $upgrader->fs_connect( array( WP_CONTENT_DIR, WP_PLUGIN_DIR ) );

			if ( ! $res ) {
				return false;
			}

			$upgrader->install( $source );
		}

		public function plugin_activation( $plugin ) {
			$full_name = $this->is_plugin_installed( $plugin );

			if ( $full_name ) {
				if ( ! $this->is_plugin_active( $full_name ) ) {
					return activate_plugin( $full_name, '', false, true );
				}
			}

			return new WP_Error();
		}

		/**
		 * Display admin notices.
		 *
		 */
		public function display_admin_notice() {
			
			if ( ! current_user_can( 'activate_plugins' ) ) {
				return;
			}
			if ( get_option( 'dismissed-wpwheels_plugin_notice', false ) ) {
				return;
			}

			$status  = $this->get_wpwheels_extra_status()['status'];
		
			if ( $status === 'active' ) {
				return;
			}
			?>
		
			<div class="notice notice-blockwheels-plugin">
				<div class="notice-blockwheels-plugin-root">
					<div class="blockwheels-plugin-inner">
						<button type="button" class="notice-dismiss">
							<span class="screen-reader-text">
								<?php esc_html_e( 'Dismiss this notice.', 'wpwheels' ); ?>
							</span>
						</button>
						<div class="wpwheels-notification-content">
							<div class="content-text-column">
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
							</div>
							<div class="content-image-column">
								<div class="intro_info">
									<img class="notice-banner" src="<?php echo esc_url(get_theme_file_uri() . '/assets/images/notice-arrow.png'); ?>" alt="Arrow">
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
									<img class="notice-banner" src="<?php echo esc_url(get_theme_file_uri() . '/assets/images/notice-banner.png'); ?>" alt="BlockWheels">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
		}

		/**
		 * Enqueue scripts.
		 *
		 */
		public function enqueue_scripts() {
		
			if ( ! current_user_can( 'activate_plugins' ) ) {
				return;
			}
			if ( get_option( 'dismissed-wpwheels_plugin_notice', false ) ) {
				return;
			}
		
			$status  = $this->get_wpwheels_extra_status()['status'];
		
			if ( $status === 'active' ) {
				return;
			}

			wp_enqueue_script(
				'wpwheels-notice-js',
				get_theme_file_uri( '/assets/js/notice.js' ),
				['jquery'],
				filemtime( get_theme_file_path( '/assets/js/notice.js' ) ),
				true
			);
			wp_localize_script(
				'wpwheels-notice-js',
				'wpwheels_notice_i18n',
				array(
					'activating'            => __( 'Activating...', 'wpwheels' ),
					'installing_activating' => __( 'Installing & activating...', 'wpwheels' ),
				)
			);

			wp_enqueue_style(
				'wpwheels-notice-css',
				get_theme_file_uri( '/assets/css/notice.css' ),
				array(),
				filemtime( get_theme_file_path( '/assets/css/notice.css' ) )
			);
		}

		/**
		 * Dismiss notice callback
		 *
		 */
		public function dismiss_notice() {
			update_option( 'dismissed-wpwheels_plugin_notice', true );
			wp_die();
		}

		/**
		 * Check notice callback.
		 *
		 */
		public function check_notice() {
			$status       = $this->get_wpwheels_extra_status();
			$actions_html = '';
			if ( $status['status'] == 'installed' ) {
				$actions_html = '<div class="notice-actions">
			<button type="button" class="button button-primary" data-action="activate">' . __( 'Activate BlockWheels', 'wpwheels' ) . '</button>
			</div>';
			} elseif ( $status['status'] == 'uninstalled' ) {
				$actions_html = '<div class="notice-actions">
			<button type="button" class="button button-primary" data-action="install_activate">' . __( 'Install & Activate BlockWheels', 'wpwheels' ) . '</button>
			</div>';
			}
			wp_send_json_success(
				$actions_html
			);
		}

		/**
		 * Execute notice callback
		 *
		 */
		public function execute_notice() {
			if ( ! current_user_can( 'activate_plugins' ) ) {
				return;
			}

			$status  = $this->get_wpwheels_extra_status();
	
			if ( $status['status'] === 'active' ) {
				wp_send_json_success(
					array(
						'status'    => 'active',
						'pluginUrl' => esc_url( $this->redirect_url ),
					)
				);
			}
	
			if ( $status['status'] === 'uninstalled' ) {
				$this->download_and_install( $status['slug'] );
				$this->plugin_activation( $status['slug'] );
	
				wp_send_json_success(
					array(
						'status'    => 'active',
						'pluginUrl' => esc_url( $this->redirect_url ),
					)
				);
			}
	
			if ( $status['status'] === 'installed' ) {
				$this->plugin_activation( $status['slug'] );
	
				wp_send_json_success(
					array(
						'status'    => 'active',
						'pluginUrl' => esc_url( $this->redirect_url ),
					)
				);
			}
	
			wp_die();
		}
	}
}

WPWheels_Dashboard::get_instance();
