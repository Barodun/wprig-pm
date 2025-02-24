<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
if ( is_home() ) {
	wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );
} else {
	wp_rig()->print_styles( 'wp-rig-content' );
}
?>
<main id="primary" class="site-main">
    <section>
        <div class="container">
            
    <h1 class="typo--h1">test</h1>
    <p>sagasg</p>	
        </div>
    </section>
</main><!-- #primary -->
<?php
get_footer();
