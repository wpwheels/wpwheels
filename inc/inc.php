<?php
/**
 * Theme includes
 *
 * @since 1.0.0
 */

/**
 * Load plugin recommendations.
 */
require_once get_theme_file_path( '/inc/tgm/tgm.php' );

/**
 * Helper functions.
 */
require_once get_theme_file_path( '/inc/helpers.php' );

/**
 * Block Patterns
 */
require_once get_theme_file_path( '/inc/patterns/block-patterns.php' );


// Admin only classes.
if ( is_admin() ) {

    // Recommend plugins.
    require_once get_theme_file_path( '/inc/dashboard/class-dashboard.php' );
}
