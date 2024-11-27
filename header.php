<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>

	<header id="masthead" class="header py-xs bg-color--black is-sticky">
		<div class="container is-flex align-items--flex-start justify-content--space-between header__top">
			<!-- Logo -->
			<?php get_template_part( 'template-parts/header/branding' ); ?>
			<div class="header__nav-toggle ml-auto ml-0__tablet">
				<span class="nav__dot nav__dot1"></span>
				<span class="nav__dot nav__dot2"></span>
				<span class="nav__dot nav__dot3"></span>
				<span class="nav__dot nav__dot4"></span>
				<span class="nav__dot nav__dot5"></span>
			</div>
			<div class="header__top__link">
				<a href="#" class="is-inline-block typo--small color--text-grey is-hidden-mobile">START A PROJECT</a>
			</div>
		</div>

		<!-- Primary menu -->
		<?php get_template_part( 'template-parts/header/navigation' ); ?>
	</header><!-- #masthead -->
