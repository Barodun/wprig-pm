/**
 * File elements-configuration.js
 *
 * Contains calls, inits, and configurations for your third-party plugins.
 */

function initElementsConfiguration() {
	/*
	 * Toogle header btn
	 *
	 * Where: Whole website
	 */

	const headerBtn = document.querySelector('.header__nav-toggle')
	const nav = document.querySelector('#site-navigation')
	headerBtn.addEventListener('click', () => {
		nav.classList.toggle('nav--toggled-on')
		headerBtn.classList.toggle('active')
	})

	nav.addEventListener('click', () => {
		if (nav.classList.contains('nav--toggled-on')) {
			nav.classList.toggle('nav--toggled-on')
			headerBtn.classList.toggle('active')
		}
	})


	/*
	 * TCA page scripts
	 *
	 * Where: TCA Project page
	 */

	if (document.querySelector('.page-tca')) {
		const container = document.querySelector('.drag-view');
		document.querySelector('.drag-view__slider').addEventListener('input', (e) => {
			if (e.target.value > 50) {
				container.classList.add('light')
			} else {
				container.classList.remove('light')
			}
			if (e.target.value > 2 && e.target.value < 98) {
				container.style.setProperty('--position', `${e.target.value}%`);
			}
		})

		var swiper = new Swiper(".hall-of-fame", {
			loop: true,
			slidesPerView: 1.75,
			spaceBetween: 24,
			centeredSlides: true,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			breakpoints: {
			  769: {
				slidesPerView: 3.35,
				spaceBetween: 32,
			  },
			//   1024: {
			// 	slidesPerView: 5,
			// 	spaceBetween: 50,
			//   },
			},
		});
	}
}

// Run once after DOMContentLoaded event triggered.
document.addEventListener('DOMContentLoaded', function () {
	initElementsConfiguration();
});
