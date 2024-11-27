<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

	<footer id="colophon" class="site-footer py-s py-l__tablet">
		<div class="container">
			<div class="columns is-multiline is-mobile">
				<div class="column is-12-mobile is-5-tablet is-4-desktop is-6-widescreen pb-l p-xs__tablet">
					<h2 class="typo--h3 typo--h2__widescreen m-0 font--normal"><span class="typo--italic font--heading">Elevate</span> your brand presence with us</h2>
				</div>
				<div class="column is-12-mobile is-7-tablet is-8-desktop is-6-widescreen">
					<div class="columns is-multiline is-mobile">
						<div class="column is-6-mobile is-hidden-tablet">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="is-flex">
								<svg width="58" height="75" viewBox="0 0 58 75" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M27.7673 0H0V0.964104H2.14441C7.61133 0.964104 8.57681 2.039 8.57681 7.39367V67.6105C8.57681 72.9684 7.61133 74.1426 2.14441 74.1426H0V75H25.3838V74.1467H21.9777C16.51 74.1467 15.5453 72.9684 15.5453 67.6146V44.9995H27.7673C47.0645 44.9995 58 37.6067 58 22.4985C58 7.39036 47.0645 0 27.7673 0ZM25.8372 43.7171H15.5453V1.28575H25.8372C46.0998 1.28575 50.6029 11.2509 50.6029 22.501C50.6029 33.8594 46.0998 43.7171 25.8372 43.7171Z" fill="#FEFEFE"/>
								</svg>
							</a>
						</div>
						<div class="column is-6-mobile is-12-tablet pt-0 pb-l p-xs__tablet">
							<div class="columns is-multiline is-mobile">
								<div class="column is-12-mobile is-3-tablet is-flex-tablet align-items--flex-start">
									<h3 class="typo--small font--normal color--l-grey is-uppercase m-0 pt-3xs__tablet">Links</h3>
								</div>
								<div class="column is-12-mobile is-9-tablet pt-0 p-xs__tablet">
									<p class="m-0 mb-2xs"><a href="" class="typo--h5">Home</a></p>
									<p class="m-0 mb-2xs"><a href="" class="typo--h5">Work</a></p>
									<p class="m-0 mb-2xs"><a href="" class="typo--h5">Services</a></p>
									<p class="m-0"><a href="" class="typo--h5">About</a></p>
								</div>
							</div>
						</div>
						<div class="column is-12-mobile is-12-tablet pt-0 pb-l p-xs__tablet">
							<div class="columns is-multiline is-mobile">
								<div class="column is-12-mobile is-3-tablet is-flex-tablet align-items--center">
									<h3 class="typo--small font--normal color--l-grey is-uppercase m-0">General enquiries</h3>
								</div>
								<div class="column is-12-mobile is-9-tablet pt-0 p-xs__tablet">
									<a href="mailto:hello@pantsevich.me" class="typo--h5 typo--h4__widescreen">hello@pantsevich.me</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="columns is-multiline is-mobile pt-xl__tablet">
				<div class="column is-12-mobile is-2-tablet is-flex-tablet align-items--center is-hidden-mobile">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="is-flex">
						<svg width="48" height="62" viewBox="0 0 48 62" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M22.7409 0H0V0.790294H1.75623C6.23355 0.790294 7.02426 1.67141 7.02426 6.06073V55.4216C7.02426 59.8136 6.23355 60.7761 1.75623 60.7761H0V61.4789H20.7889V60.7794H17.9994C13.5214 60.7794 12.7313 59.8136 12.7313 55.425V36.8869H22.7409C38.545 36.8869 47.501 30.8269 47.501 18.4425C47.501 6.05802 38.545 0 22.7409 0ZM21.1602 35.8357H12.7313V1.05395H21.1602C37.755 1.05395 41.4429 9.22258 41.4429 18.4445C41.4429 27.7552 37.755 35.8357 21.1602 35.8357Z" fill="#FEFEFE"/>
						</svg>
					</a>
				</div>
				<div class="column is-6-mobile is-offset-3-tablet is-3-tablet is-offset-2-desktop is-2-desktop is-offset-4-widescreen is-flex-tablet align-items--center align-items--flex-end__tablet">
					<a href="#" class="typo--small font--normal color--l-grey is-uppercase">Privacy policy</a>
				</div>
				<div class="column is-6-mobile is-3-tablet is-3-desktop is-2-widescreen is-flex-tablet align-items--center align-items--flex-end__tablet justify-content--center__desktop">
					<a href="#" class="typo--small font--normal color--l-grey is-uppercase">Terms & conditions</a>
				</div>
				<div class="column is-12-mobile is-12-tablet is-3-desktop is-2-widescreen is-flex-tablet align-items--center align-items--flex-end__tablet justify-content--center__tablet pr-0__widescreen">
					<p class="typo--small font--normal color--l-grey m-0 has-text-centered-tablet">© 2024. <a href="/" class="color--l-grey">Pantsevich Media</a></p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
