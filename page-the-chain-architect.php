<?php
/**
 * TCA project page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-tca' );
?>
<main id="primary" class="site-main page-tca">
	<section class="hero mt-m">
		<div class="container">
			<?php
            if ( function_exists( 'yoast_breadcrumb' ) ) {
                yoast_breadcrumb( '<div id="breadcrumbs" class="is-uppercase typo--small color--grey mb-2xs mb-m__tablet">','</div>' );
            }
            ?>
			<h1 class="typo--h2 typo--regular mt-0 mb-l">The Chain Architect</h1>
			<div class="columns is-multiline is-mobile">
				<div class="column is-12-mobile is-9-tablet pb-0__tablet">
					<p class="typo--h5 mt-0 mb-l mb-0__tablet">The Chain Architect is an anonymous crypto enthusiast and
						digital art
						collector who aimed to launch an NFT collection inspired by the then-trending series "Squid
						Game" to
						boost his visibility and reputation in the crypto world.</p>
				</div>
				<div class="column is-12-mobile is-3-tablet is-hidden-mobile pb-0__tablet">
					<a href="#" class="btn-white">Get in Touch</a>
				</div>
			</div>
			<div class="columns is-multiline is-mobile color--text-grey mb-s my-l__tablet">
				<div class="column is-6-mobile">
					<h2 class="font--normal typo--small typo--regular is-uppercase mt-0 mb-3xs">CLIENT</h2>
					<p class="typo--h6 m-0">The Chain Architect</p>
				</div>
				<div class="column is-6-mobile">
					<h2 class="font--normal typo--small typo--regular is-uppercase mt-0 mb-3xs">YEAR</h2>
					<p class="typo--h6 m-0">2021</p>
				</div>
				<div class="column is-6-mobile mt-s mt-0__tablet">
					<h2 class="font--normal typo--small typo--regular is-uppercase mt-0 mb-3xs">Project Focus</h2>
					<p class="typo--h6 m-0">Branding & Web Design</p>
				</div>
				<div class="column is-6-mobile mt-s mt-0__tablet is-hidden-tablet">
					<a href="#" class="btn-white">Get in Touch</a>
				</div>
			</div>
			<div>
				<img src="/wp-content/uploads/hero-tca-mobile.png" alt="The Chain Arhitect" class="is-hidden-tablet">
				<img src="/wp-content/uploads/hero-tca-large.jpg" alt="The Chain Arhitect"
					class="is-hidden-mobile full-width">
			</div>
		</div>
	</section>

	<section class="my-xl my-2xl__tablet">
		<div class="container">
			<div class="columns is-multiline is-mobile">
				<div class="column is-12-mobile is-4-tablet pb-0 p-xs__tablet">
					<h2
						class="typo--h5 typo--h4__tablet font--normal color--l-grey is-uppercase mt-0 mb-s mb-0__tablet">
						THE TASK</h2>
				</div>
				<div class="column is-12-mobile is-8-tablet pt-0 p-xs__tablet">
					<p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
						ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
						in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="my-xl">
		<div class="container">
			<img src="/wp-content/uploads/tca-1-mobile.png" alt="TCA" class="is-hidden-tablet">
			<div class="images-group-holder is-flex">
				<div class="images-group images-group__1 is-flex flex-direction--column">
					<div class="img img1">
						<img src="/wp-content/uploads/tca-task-1.png" alt="TCA Task">
					</div>
					<div class="img img2">
						<img src="/wp-content/uploads/tca-task-2.png" alt="TCA Task">
					</div>
				</div>
				<div class="images-group images-group__2 is-flex flex-direction--column">
					<div class="img img3">
						<img src="/wp-content/uploads/tca-task-3.png" alt="TCA Task">
					</div>
					<div class="images-group images-group__3 is-flex">
						<div class="img img5">
							<img src="/wp-content/uploads/tca-task-5.png" alt="TCA Task">
						</div>
						<div class="images-group images-group__4 is-flex flex-direction--column">
							<div class="img img4">
								<img src="/wp-content/uploads/tca-task-4.svg" alt="TCA Task">
							</div>
							<div class="img img6">
								<img src="/wp-content/uploads/tca-task-6.svg" alt="TCA Task">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="my-xl my-2xl__tablet">
		<div class="container">
			<div class="columns is-multiline is-mobile mb-3xs mb-2xl__tablet mt-0__tablet">
				<div class="column is-12-mobile is-4-tablet pb-0 p-xs__tablet py-0__tablet">
					<h2
						class="typo--h5 typo--h4__tablet font--normal color--l-grey is-uppercase__tablet mt-0 mb-s mb-0__tablet">
						Design System</h2>
				</div>
				<div class="column is-12-mobile is-8-tablet pt-0 p-xs__tablet py-0__tablet">
					<p class="m-0">We drew inspiration from the original series' design DNA, incorporating elements like
						symmetry, angular shapes, and a pink gradient glow.</p>
				</div>
			</div>
			<img src="/wp-content/uploads/tca-2-mobile.png" alt="TCA" class="is-hidden-tablet">
			<img src="/wp-content/uploads/tca-2-large.png" alt="TCA" class="is-hidden-mobile w-100">
		</div>
	</section>

	<section class="my-xl my-2xl__tablet">
		<div class="container">
			<div class="columns is-multiline is-mobile mb-s mb-2xl__tablet">
				<div class="column is-12-mobile is-4-tablet pb-0 p-xs__tablet py-0__tablet">
					<h2
						class="typo--h5 typo--h4__tablet font--normal color--l-grey is-uppercase__tablet mt-0 mb-s mb-0__tablet">
						Website</h2>
				</div>
				<div class="column is-12-mobile is-8-tablet pt-0 p-xs__tablet py-0__tablet">
					<p class="m-0">Market research revealed that most NFT collection websites at the time were
						low-quality, overly simplistic, or difficult to navigate. We distinguished The Chain Architect’s
						project with a website featuring modern design, custom-designed graphics, and dynamic, engaging
						animations. The site combined rich functionality with easy navigation. The content was carefully
						crafted to highlight the collection's appeal to NFT enthusiasts while also clearly conveying
						information to newcomers in the crypto industry.</p>
				</div>
			</div>
			<div class="drag-view-holder full-width">
				<div class="drag-view w-100">
					<div class="drag-view-container w-100">
						<div class="drag-view__part drag-view__part--light">
							<div class="drag-view__title has-text-centered typo--h5__tablet py-2xs px-2xs">Light mode
							</div>
							<img src="/wp-content/uploads/light_mode.png" alt="TCA Day Mode">
						</div>
						<div class="drag-view__part drag-view__part--dark">
							<div class="drag-view__title has-text-centered typo--h5__tablet py-2xs px-2xs">Dark mode
							</div>
							<img src="/wp-content/uploads/dark_mode.png" alt="TCA Night Mode">
						</div>
					</div>
					<input type="range" min="0" max="100" value="30" aria-label="Percentage of before photo shown"
						class="drag-view__slider" />
					<div class="drag-view__cursor">
						<span class="drag-view__cursor__arrow left"></span>
						<span class="drag-view__cursor__mode"></span>
						<span class="drag-view__cursor__arrow right"></span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="my-xl my-2xl__tablet">
		<div class="container">
			<div class="columns is-multiline is-mobile mb-s mb-0__tablet">
				<div class="column is-12-mobile is-4-tablet pb-0 p-xs__tablet py-0__tablet">
					<h2
						class="typo--h5 typo--h4__tablet font--normal color--l-grey is-uppercase__tablet mt-0 mb-s mb-0__tablet">
						Rarity Rankings</h2>
				</div>
				<div class="column is-12-mobile is-8-tablet pt-0 p-xs__tablet py-0__tablet">
					<p class="m-0">To display all digital collectibles based on their rarity, we developed a
						comprehensive formula that automatically calculates the rarity score of each image (the rarer,
						the more valuable!). Beyond the technical implementation, our team crafted a unique design for
						this rarity section of the website. It features transparency effects, dynamic rarity scaling,
						and even a day/night mode.</p>
				</div>
			</div>
			<img src="/wp-content/uploads/tca-rarity-mobile.png" alt="TCA Rarity Rankings"
				class="full-width is-hidden-tablet">
			<img src="/wp-content/uploads/tca-rarity-large.png" alt="TCA Rarity Rankings"
				class="full-width is-hidden-mobile">
		</div>
	</section>

	<section class="my-xl my-2xl__tablet">
		<div class="container">
			<div class="columns is-multiline is-mobile mb-s mb-0__tablet">
				<div class="column is-12-mobile is-4-tablet pb-0 p-xs__tablet py-0__tablet">
					<h2
						class="typo--h5 typo--h4__tablet font--normal color--l-grey is-uppercase__tablet mt-0 mb-s mb-0__tablet">
						Social Media Marketing</h2>
				</div>
				<div class="column is-12-mobile is-8-tablet pt-0 p-xs__tablet py-0__tablet">
					<p class="m-0">Competitive analysis showed that social media efforts of rival projects were limited
						to simply posting images of their collections, with Social and Community Marketing at a low
						level. We stood out by emphasizing the value of our collectibles through storytelling and bold
						design — consistent with the website but incorporating more vibrant and catchy elements.</p>
				</div>
			</div>
			<div
				class="social-media-icons is-flex flex-wrap--wrap justify-content--center mt-s mt-2xl__tablet w-75__tablet mx-auto__tablet">
				<div class="social-media-icon">
					<img src="/wp-content/uploads/tca-icon-1.jpg" alt="TCA Icon">
				</div>
				<div class="social-media-icon">
					<img src="/wp-content/uploads/tca-icon-2.jpg" alt="TCA Icon">
				</div>
				<div class="social-media-icon">
					<img src="/wp-content/uploads/tca-icon-3.jpg" alt="TCA Icon">
				</div>
				<div class="social-media-icon">
					<img src="/wp-content/uploads/tca-icon-4.jpg" alt="TCA Icon">
				</div>
				<div class="social-media-icon">
					<img src="/wp-content/uploads/tca-icon-5.jpg" alt="TCA Icon">
				</div>
				<div class="social-media-icon">
					<img src="/wp-content/uploads/tca-icon-6.jpg" alt="TCA Icon">
				</div>
				<div class="social-media-icon">
					<img src="/wp-content/uploads/tca-icon-7.jpg" alt="TCA Icon">
				</div>
			</div>
		</div>
	</section>

	<section class="my-xl my-2xl__tablet">
		<div class="swiper hall-of-fame">
			<div
				class="swiper__header is-relative is-flex justify-content--center align-items--center mb-m mb-l__tablet">
				<div class="swiper-button-prev">
					<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M16.1873 2.75588L15.5881 2.15668L14.9889 2.75588L2.22654 15.5183L1.62735 16.1175L2.22654 16.7167L14.7598 29.2499L15.359 29.8491L15.9582 29.2499L17.5535 27.6546L18.1527 27.0554L17.5535 26.4562L9.11964 18.0224L33.3283 17.8031L34.1604 17.7956L34.168 16.9634L34.1882 14.7342L34.196 13.8714L33.3331 13.8792L9.17689 14.098L17.754 5.52092L18.3532 4.92173L17.754 4.32253L16.1873 2.75588Z"
							stroke="#E43074" stroke-width="1.69478" />
					</svg>
				</div>
				<h2
					class="typo--h4 typo--h2__tablet font--normal has-text-centered is-uppercase my-0 mx-2xs mx-s__tablet">
					Hall of fame</h2>
				<div class="swiper-button-next">
					<svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M19.59 2.75588L20.1892 2.15668L20.7884 2.75588L33.5508 15.5183L34.15 16.1175L33.5508 16.7167L21.0175 29.2499L20.4183 29.8491L19.8191 29.2499L18.2238 27.6546L17.6246 27.0554L18.2238 26.4562L26.6577 18.0224L2.44904 17.8031L1.6169 17.7956L1.60936 16.9634L1.58917 14.7342L1.58136 13.8714L2.4442 13.8792L26.6004 14.098L18.0234 5.52092L17.4242 4.92173L18.0234 4.32253L19.59 2.75588Z"
							stroke="#E43074" stroke-width="1.69478" />
					</svg>
				</div>
			</div>
			<div class="swiper-wrapper">
				<div class="swiper-slide hall-of-fame__slide">
					<img src="/wp-content/uploads/tca-hall-1.jpg" alt="TCA Hall of Fame">
					<div class="is-flex justify-content--center mt-xs mt-s__tablet mt-m__desktop">
						<div class="hall-of-fame__slide__title py-3xs px-2xs py-2xs__tablet px-s__tablet">
							<div class="small">The Chain Architect, 2021</div>
							<div class="typo--medium typo--italic">Punk 294</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide hall-of-fame__slide">
					<img src="/wp-content/uploads/tca-hall-1.jpg" alt="TCA Hall of Fame">
					<div class="is-flex justify-content--center mt-xs mt-s__tablet mt-m__desktop">
						<div class="hall-of-fame__slide__title py-3xs px-2xs py-2xs__tablet px-s__tablet">
							<div class="small">The Chain Architect, 2021</div>
							<div class="typo--medium typo--italic">Punk 294</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide hall-of-fame__slide">
					<img src="/wp-content/uploads/tca-hall-1.jpg" alt="TCA Hall of Fame">
					<div class="is-flex justify-content--center mt-xs mt-s__tablet mt-m__desktop">
						<div class="hall-of-fame__slide__title py-3xs px-2xs py-2xs__tablet px-s__tablet">
							<div class="small">The Chain Architect, 2021</div>
							<div class="typo--medium typo--italic">Punk 294</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide hall-of-fame__slide">
					<img src="/wp-content/uploads/tca-hall-1.jpg" alt="TCA Hall of Fame">
					<div class="is-flex justify-content--center mt-xs mt-s__tablet mt-m__desktop">
						<div class="hall-of-fame__slide__title py-3xs px-2xs py-2xs__tablet px-s__tablet">
							<div class="small">The Chain Architect, 2021</div>
							<div class="typo--medium typo--italic">Punk 294</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide hall-of-fame__slide">
					<img src="/wp-content/uploads/tca-hall-1.jpg" alt="TCA Hall of Fame">
					<div class="is-flex justify-content--center mt-xs mt-s__tablet mt-m__desktop">
						<div class="hall-of-fame__slide__title py-3xs px-2xs py-2xs__tablet px-s__tablet">
							<div class="small">The Chain Architect, 2021</div>
							<div class="typo--medium typo--italic">Punk 294</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="mt-xl mt-2xl__tablet">
		<div class="container">
			<div class="columns is-multiline is-mobile mb-s mb-2xl__tablet">
				<div class="column is-12-mobile is-4-tablet pb-0 p-xs__tablet py-0__tablet">
					<h2
						class="typo--h5 typo--h4__tablet font--normal color--l-grey is-uppercase__tablet mt-0 mb-s mb-0__tablet">
						Influencer Marketing</h2>
				</div>
				<div class="column is-12-mobile is-8-tablet pt-0 p-xs__tablet py-0__tablet">
					<p class="m-0">The challenge of engaging the top 10 NFT bloggers to promote the collection with
						minimal resources called for a highly creative strategy. We started by identifying those within
						the top 50 NFT bloggers who had expressed their love for Squid Game on social media. We then
						launched the NFT Hall of Fame project, creating custom portraits of these bloggers in the style
						of our client’s collection and gifting them these images. We highlighted this initiative across
						our own social media channels.</p>
				</div>
			</div>
			<div class="columns is-multiline is-mobile">
				<div class="column is-12-mobile is-5-tablet is-flex-tablet align-items--center__tablet">
					<img src="/wp-content/uploads/tca-marketing-1.png" alt="TCA Marketing">
				</div>
				<div class="column is-12-mobile is-5-tablet is-offset-1-tablet mb-m__tablet">
					<img src="/wp-content/uploads/tca-marketing-2.png" alt="TCA Marketing" class="pl-m__tablet">
				</div>
				<div class="column is-12-mobile is-5-tablet is-relative">
					<img src="/wp-content/uploads/tca-marketing-3.png" alt="TCA Marketing" class="pr-m__tablet">
					<img src="/wp-content/uploads/tca-marketing-7.png" alt="TCA Marketing tweet"
						class="is-absolute tweet-black is-hidden-mobile">
				</div>
				<div class="column is-12-mobile is-5-tablet is-offset-1-tablet mb-m__tablet is-relative">
					<img src="/wp-content/uploads/tca-marketing-4.png" alt="TCA Marketing" class="pr-m__tablet">
					<img src="/wp-content/uploads/tca-marketing-8.png" alt="TCA Marketing tweet"
						class="is-absolute tweet-light is-hidden-mobile">
				</div>
				<div class="column is-12-mobile is-5-tablet">
					<img src="/wp-content/uploads/tca-marketing-5.png" alt="TCA Marketing" class="">
				</div>
				<div
					class="column is-12-mobile is-6-tablet is-offset-1-tablet is-flex-tablet flex-direction--column justify-content--center__tablet">
					<img src="/wp-content/uploads/tca-marketing-6.png" alt="TCA Marketing">
					<p class="is-hidden-mobile mb-0 mt-xl">The results were outstanding—6 of the 10 leading NFT bloggers
						promoted the Squid Game
						collection on their platforms, either by posting, following, reposting, or engaging directly
						with the client.<br>
						This entire integration was achieved with zero marketing budget and significantly boosted brand
						awareness.
					</p>
				</div>
			</div>
			<div class="marketing-large-image is-relative full-width mt-xs">
				<img src="/wp-content/uploads/tca-marketing-mobile.jpg" class="w-100 is-hidden-tablet"
					alt="TCA Marketing">
				<img src="/wp-content/uploads/tca-marketing-large.jpg" class="w-100 is-hidden-mobile"
					alt="TCA Marketing">
			</div>
		</div>
	</section>

	<section class="mb-xl py-xl py-2xl__tablet bg-color--white">
		<div class="container">
			<div class="columns is-multiline is-mobile mb-s mb-2xl__tablet">
				<div class="column is-12-mobile is-4-tablet pb-0 p-xs__tablet py-0__tablet">
					<h2
						class="typo--h5 typo--h4__tablet font--normal color--black is-uppercase__tablet mt-0 mb-s mb-0__tablet">
						Results</h2>
				</div>
				<div class="column is-12-mobile is-8-tablet pt-0 p-xs__tablet py-0__tablet">					
					<p class="color--black m-0 mb-s mb-l__tablet">The challenge of engaging the top 10 NFT bloggers to promote the
							collection with
							minimal resources called for a highly creative strategy. We started by identifying those within
							the top 50 NFT bloggers who had expressed their love for Squid Game on social media. We then
							launched the NFT Hall of Fame project, creating custom portraits of these bloggers in the style
							of our client’s collection and gifting them these images. We highlighted this initiative across
							our own social media channels.</p>
					<a href="#" class="btn-black">See website</a>
				</div>
			</div>
		</div>
	</section>
</main><!-- #primary -->
<style>
	.tweet-black {
		z-index: 2;
		bottom: 6rem;
		left: 63%;
		width: 70%;
	}

	.tweet-light {
		z-index: 2;
		bottom: 50%;
		left: 45%;
		width: 70%;
	}

</style>
<?php
get_footer();
