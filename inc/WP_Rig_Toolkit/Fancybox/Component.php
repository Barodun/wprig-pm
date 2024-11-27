<?php
/**
 * WP_Rig\WP_Rig\WP_Rig_Toolkit\Fancybox\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\WP_Rig_Toolkit\Fancybox;

use WP_Rig\WP_Rig\Component_Interface;
use function WP_Rig\WP_Rig\wp_rig;
use WP_Post;
use function add_action;
use function add_filter;
use function wp_enqueue_script;
use function get_theme_file_uri;
use function get_theme_file_path;
use function wp_script_add_data;
use function wp_localize_script;

/**
 * Class for managing comments UI.
 *
 * Exposes template tags:
 *
 * @link https://wordpress.org/plugins/amp/
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'fancybox';
	}


	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'wp_enqueue_scripts', array( $this, 'action_activate_fancybox' ), 200 );
	}


	/**
	 * Enqueues scripts and styles.
	 */
	public function action_activate_fancybox() {
		// If the AMP plugin is active, return early.
		if ( wp_rig()->is_amp() ) {
			return;
		}

		if ( is_singular( 'catalog_item' ) ) {
			// Enqueue Fancybox script in the footer.
			wp_enqueue_script(
				'fancybox',
				get_theme_file_uri( '/assets/js/vendor/fancybox/fancybox.min.js' ),
				array(),
				wp_rig()->get_asset_version( get_theme_file_path( '/assets/js/vendor/fancybox/fancybox.min.js' ) ),
				true // Load in footer
			);

			// Add defer and precache attributes to the script.
			wp_script_add_data( 'fancybox', 'defer', true );
			wp_script_add_data( 'fancybox', 'precache', true );

			// Enqueue Fancybox styles.
			wp_enqueue_style(
				'fancybox',
				get_theme_file_uri( '/assets/css/vendor/fancybox/fancybox.min.css' ),
				array(),
				wp_rig()->get_asset_version( get_theme_file_path( '/assets/css/vendor/fancybox/fancybox.min.css' ) )
			);
		}
	}
}
