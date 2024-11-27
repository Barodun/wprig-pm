<?php
/**
 * WP_Rig\WP_Rig\Theme class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

use InvalidArgumentException;

/**
 * Main class for the theme.
 *
 * This class takes care of initializing theme features and available template tags.
 */
class Theme {

	/**
	 * Associative array of theme components, keyed by their slug.
	 *
	 * @var array
	 */
	protected $components = array();

	/**
	 * The template tags instance, providing access to all available template tags.
	 *
	 * @var Template_Tags
	 */
	protected $template_tags;

	/**
	 * Constructor.
	 *
	 * Sets the theme components.
	 *
	 * @param array $components Optional. List of theme components. Only intended for custom initialization, typically
	 *                          the theme components are declared by the theme itself. Each theme component must
	 *                          implement the Component_Interface interface.
	 *
	 * @throws InvalidArgumentException Thrown if one of the $components does not implement Component_Interface.
	 */
	public function __construct( array $components = array() ) {
		if ( empty( $components ) ) {
			$components = $this->get_default_components();
		}

		// Set the components.
		foreach ( $components as $component ) {

			// Bail if a component is invalid.
			if ( ! $component instanceof Component_Interface ) {
				throw new InvalidArgumentException(
					sprintf(
						/* translators: 1: classname/type of the variable, 2: interface name */
						__( 'The theme component %1$s does not implement the %2$s interface.', 'wp-rig' ),
						gettype( $component ),
						Component_Interface::class
					)
				);
			}

			$this->components[ $component->get_slug() ] = $component;
		}

		// Instantiate the template tags instance for all theme templating components.
		$this->template_tags = new Template_Tags(
			array_filter(
				$this->components,
				function ( Component_Interface $component ) {
					return $component instanceof Templating_Component_Interface;
				}
			)
		);
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 *
	 * This method must only be called once in the request lifecycle.
	 */
	public function initialize() {
		array_walk(
			$this->components,
			function ( Component_Interface $component ) {
				$component->initialize();
			}
		);
	}

	/**
	 * Retrieves the template tags instance, the entry point exposing template tag methods.
	 *
	 * Calling `wp_rig()` is a short-hand for calling this method on the main theme instance. The instance then allows
	 * for actual template tag methods to be called. For example, if there is a template tag called `posted_on`, it can
	 * be accessed via `wp_rig()->posted_on()`.
	 *
	 * @return Template_Tags Template tags instance.
	 */
	public function template_tags(): Template_Tags {
		return $this->template_tags;
	}

	/**
	 * Retrieves the component for a given slug.
	 *
	 * This should typically not be used from outside of the theme classes infrastructure.
	 *
	 * @param string $slug Slug identifying the component.
	 * @return Component_Interface Component for the slug.
	 *
	 * @throws InvalidArgumentException Thrown when no theme component with the given slug exists.
	 */
	public function component( string $slug ): Component_Interface {
		if ( ! isset( $this->components[ $slug ] ) ) {
			throw new InvalidArgumentException(
				sprintf(
					/* translators: %s: slug */
					__( 'No theme component with the slug %s exists.', 'wp-rig' ),
					$slug
				)
			);
		}

		return $this->components[ $slug ];
	}

	/**
	 * Gets the default theme components.
	 *
	 * This method is called if no components are passed to the constructor, which is the common scenario.Theme Editor
	 *
	 * Theme Editor: 'editor-styles'
	 * Block Styles: 'wp-block-styles'
	 *
	 * @return array List of theme components to use by default.
	 */
	protected function get_default_components(): array {
		$components = array(
			new Localization\Component(),
			new Base_Support\Component(),
			new Editor\Component(),
			new Accessibility\Component(),
			new Image_Sizes\Component(),
			new AMP\Component(),
			new PWA\Component(),
			new Comments\Component(),
			new Nav_Menus\Component(),
			new Sidebars\Component(),
			new Custom_Background\Component(),
			new Custom_Header\Component(),
			new Custom_Logo\Component(),
			new Post_Thumbnails\Component(),
			new EZ_Customizer\Component(),
			new Styles\Component(),
			new Scripts\Component(),
			new Excerpts\Component(),

			/**
			 * WP Rig Toolkit Components
			 *
			 * @link https://tattered-red-32e.notion.site/WP_Rig_Toolkit-84dea07cca79455c9fb8c8d13df59e2c
			 */


			/*----------------------------
			# Global Features
			----------------------------*/

			/**
			 * Daynight
			 *
			 * WP Rig component to provide a day/night mode.
			 */
			// new WP_Rig_Toolkit\Daynight\Component(),

			/**
			 * Fresh_URL
			 *
			 * Plugin that keeps your URLs clean.
			 */
			// new WP_Rig_Toolkit\Fresh_URL\Component(),

			/**
			 * Sticky_Header
			 *
			 * WP Rig component for sticky header.
			 */
			// new WP_Rig_Toolkit\Sticky_Header\Component(),

			/**
			 * Sticky_Header
			 *
			 * An old JS library for manipulating smooth scroll behavior.
			 */
			// new WP_Rig_Toolkit\Smooth_Scroll\Component(),

			/**
			 * Stickyjs
			 *
			 * A library for sticky elements written in vanilla JavaScript.
			 */
			// new WP_Rig_Toolkit\Stickyjs\Component(),

			/**
			 * Sticky_Sidebar
			 *
			 * A pure JavaScript plugin for making smart and high performance sticky sidebar.
			 */
			// new WP_Rig_Toolkit\Sticky_Sidebar\Component(),

			/**
			 * Validatejs
			 *
			 * A pure JavaScript library for forms validation.
			 */
			// new WP_Rig_Toolkit\Validatejs\Component(),

			/**
			 * Masonry
			 *
			 * TODO: A pure JavaScript plugin for making smart and high performance sticky sidebar.
			 */
			// new WP_Rig_Toolkit\Masonry\Component(),


			/**
			 * WP Rig component for a closable topbar element.
			 *
			 * A pure JavaScript plugin for making smart and high performance sticky sidebar.
			 */
			// new WP_Rig_Toolkit\Topbar\Component(),


			/*----------------------------
			# Galleries and Lightboxes
			----------------------------*/

			/**
			 * GLightbox
			 *
			 * A touchable pure JavaScript lightbox.
			 */
			// new WP_Rig_Toolkit\GLightbox\Component(),

			/**
			 * Photoswipe
			 *
			 * Responsive JavaScript Image Gallery.
			 */
			// new WP_Rig_Toolkit\Photoswipe\Component(),


			/*----------------------------
			# Popups and Modals
			----------------------------*/

			/**
			 * Tingle
			 *
			 * A minimalist and easy-to-use modal pure JavaScript plugin.
			 */
			// new WP_Rig_Toolkit\Tingle\Component(),


			/*----------------------------
			# Sliders
			----------------------------*/

			/**
			 * Splidejs
			 *
			 * The lightweight, flexible and accessible slider/carousel.
			 */
			//new WP_Rig_Toolkit\Splidejs\Component(),


			/*----------------------------
			# Content components
			----------------------------*/

			/**
			 * VanillaJSAccordion
			 *
			 * WP Rig component for accordion functionality.
			 */
			// new WP_Rig_Toolkit\VanillaJSAccordion\Component(),

			/**
			 * Swiper
			 *
			 * The most popular slider.
			 */
			new WP_Rig_Toolkit\Swiper\Component(),

			/**
			 * Tocbot
			 *
			 * Tocbot builds a table of contents (TOC) from headings in an HTML document.
			 */
			// new WP_Rig_Toolkit\Tocbot\Component(),

			/**
			 * Listjs
			 *
			 * Search, sort, filters, flexibility to tables, list and more!
			 */
			//new WP_Rig_Toolkit\Listjs\Component(),

			/**
			 * Typedjs
			 *
			 * JS library for typing animation of text.
			 */
			// new WP_Rig_Toolkit\Typedjs\Component(),

			/**
			 * TypeIt
			 *
			 * JS library for typing animation of text. (Paid but realy flexible).
			 */
			//new WP_Rig_Toolkit\TypeIt\Component(),

			/**
			 * Fancybox
			 *
			 * Pure js library to create lightboxes.
			 */
			// new WP_Rig_Toolkit\Fancybox\Component(),
		);

		if ( defined( 'JETPACK__VERSION' ) ) {
			$components[] = new Jetpack\Component();
		}

		return $components;
	}
}
