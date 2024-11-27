'use strict';
// var now = new Date().getHours();

const body = document.getElementsByTagName( 'BODY' )[ 0 ];
const daynightSwitchers = document.querySelectorAll( '.daynight-switcher' ); // Take all switchers

// // Get the #greeting element
// var greeting = document.querySelector('#greeting');

// /**
//  * Get the greeting based on time
//  * @return {String} The greeting
//  */
//  var getGreeting = function () {
// 	// Code goes here...
// };

// // // Set the greeting
// // greeting.textContent = getGreeting();

/**
	 * Get the greeting based on time
	 * @return {String} The greeting
	 */
//  var getGreeting = function () {
// 	if (now > 20) return 'Good night!';     // If it's after 8pm
// 	if (now > 17) return 'Good evening!';   // If it's after 5pm
// 	if (now > 11) return 'Good afternoon!'; // If it's after noon
// 	return 'Good morning!';                 // Default message
// };

//  !TODO
/**
	//  * Adjust the color theme based on time
	//  */
//  var adjustColorMode = function () {

// 	// If it's nighttime, go dark mode
// 	if (now > 20) {
// 		bodyel.classList.add('night');
// 		console.log('20')
// 		return;
// 	}

// 	// If it's morning or evening, go transitional
// 	if (now > 12 || now < 16) {
// 		bodyel.classList.add('transitional');
// 		console.log('trans')
// 	}

// };

// /**
//  * Add a greeting and adjust the color palette
//  */
//  var updateUI = function () {

// 	// Set the greeting
// 	greeting.textContent = getGreeting();

// 	// Update color palette
// 	adjustDaynightMode();

// };

// // Update the UI on page load
// updateUI();

// // Check again every 15 minutes
// setInterval(function () {
// 	now = new Date().getHours();
// 	updateUI();
// }, 1000 * 60 * 15);

// /**
//  * Adjust the color theme based on time
//  */
// var adjustColorMode = function () {

// // Remove any existing classes
// bodyel.classList.remove('transitional');
// bodyel.classList.remove('night');

// // If it's nighttime, go dark mode
// if (now > 20) {
// 	bodyel.classList.add('night');
// 	return;
// }

// // If it's morning or evening, go transitional
// if (now > 17 || now < 11) {
// 	bodyel.classList.add('transitional');
// 	bodyel.classList.add('transitional');
// }

// };

// Check that Daynight Mode hasn't been already manually set and set up the default mode

if ( readCookie( 'dayNightSet' ) != 'manually' && readCookie( 'dayNightSet' ) != 'auto' ) {
	if ( wpRigVars.daynightDefaultMode === 'day' ) {
		createCookie( 'dayNightActiveMode', 'day-mode', 30 );
	} else if ( wpRigVars.daynightDefaultMode === 'night' ) {
		createCookie( 'dayNightActiveMode', 'night-mode', 30 );
	}
}

const adjustDaynightMode = function() {
	if ( readCookie( 'dayNightActiveMode' ) === 'day-mode' ) {
		// Change icon to day
		daynightAnimate();
		daynightSwitchers.forEach( ( switcher ) => {
			//switcher.innerHTML = (switcher.innerHTML.replace(/\n/g, "")).replace('icon-night', 'icon-day');
			switcher.innerHTML = '<path d="M64 106.8c-2.4 0-4.4 2-4.4 4.4v12.4c0 2.4 2 4.4 4.4 4.4 2.4 0 4.4-2 4.4-4.4v-12.4c0-2.4-2-4.4-4.4-4.4zM64 21.2c2.4 0 4.4-2 4.4-4.4v-12.4c0-2.4-2-4.4-4.4-4.4-2.4 0-4.4 2-4.4 4.4v12.4c0 2.4 2 4.4 4.4 4.4zM27.5 94.3l-8.8 8.8c-1.7 1.7-1.7 4.5 0 6.2.9.9 2 1.3 3.1 1.3s2.2-.4 3.1-1.3l8.8-8.8c1.7-1.7 1.7-4.5 0-6.2-1.7-1.7-4.5-1.7-6.2 0zM97.4 35c1.1 0 2.2-.4 3.1-1.3l8.8-8.8c1.7-1.7 1.7-4.5 0-6.2-1.7-1.7-4.5-1.7-6.2 0l-8.8 8.8c-1.7 1.7-1.7 4.5 0 6.2.8.9 2 1.3 3.1 1.3zM21.2 64c0-2.4-2-4.4-4.4-4.4h-12.4c-2.4 0-4.4 2-4.4 4.4s2 4.4 4.4 4.4h12.4c2.4 0 4.4-2 4.4-4.4zM123.6 59.6h-12.4c-2.4 0-4.4 2-4.4 4.4s2 4.4 4.4 4.4h12.4c2.4 0 4.4-2 4.4-4.4 0-2.4-2-4.4-4.4-4.4zM27.5 33.7c.9.9 2 1.3 3.1 1.3s2.2-.4 3.1-1.3c1.7-1.7 1.7-4.5 0-6.2l-8.8-8.8c-1.7-1.7-4.5-1.7-6.2 0-1.7 1.7-1.7 4.5 0 6.2l8.8 8.8zM100.5 94.3c-1.7-1.7-4.5-1.7-6.2 0-1.7 1.7-1.7 4.5 0 6.2l8.8 8.8c.9.9 2 1.3 3.1 1.3s2.2-.4 3.1-1.3c1.7-1.7 1.7-4.5 0-6.2l-8.8-8.8zM64 30c-18.7 0-34 15.3-34 34s15.3 34 34 34 34-15.3 34-34-15.3-34-34-34zm0 59.3c-13.9 0-25.3-11.3-25.3-25.3 0-13.9 11.3-25.3 25.3-25.3 13.9 0 25.3 11.3 25.3 25.3 0 13.9-11.4 25.3-25.3 25.3z"/>';
		} );
		body.classList.remove( 'night-mode' );
		// Assign a .day-mode class only if Night mode is default
		if ( wpRigVars.daynightDefaultMode === 'night' ) {
			body.classList.add( 'day-mode' );
		}
	} else if ( readCookie( 'dayNightActiveMode' ) === 'night-mode' ) {
		// Change icon to night
		daynightAnimate();
		daynightSwitchers.forEach( ( switcher ) => {
			//switcher.innerHTML = (switcher.innerHTML.replace(/\n/g, "")).replace('icon-day', 'icon-night');
			switcher.innerHTML = '<path d="M108.7 88.2c-.6-1.5-2-2.5-3.5-2.7-14.5-1.9-27-11.5-32.6-25-5.6-13.5-3.6-29.1 5.3-40.7 1-1.3 1.2-2.9.6-4.4-.6-1.5-2-2.5-3.5-2.7-2.2-.3-4.4-.4-6.6-.4-6.6 0-13 1.3-19.1 3.8-12.3 5.1-21.9 14.7-27 27.1-5.1 12.3-5.1 25.9 0 38.3 7.8 18.7 25.9 30.9 46.2 30.9 6.6 0 13-1.3 19.1-3.8 8.1-3.4 15.2-8.8 20.5-15.8.9-1.4 1.2-3.1.6-4.6zm-25.6 12c-5 2.1-10.3 3.1-15.7 3.1-16.7 0-31.6-10-38-25.4-4.2-10.1-4.2-21.3 0-31.4 4.2-10.1 12.1-18 22.2-22.2 4.4-1.8 9-2.9 13.7-3.1-7 13.1-7.9 28.8-2.1 42.7 5.9 13.9 17.6 24.4 31.8 28.7-3.5 3.2-7.5 5.7-11.9 7.6z"/>';
		} );
		body.classList.remove( 'day-mode' );
		// Assign a .night-mode class only if Day mode is default
		if ( wpRigVars.daynightDefaultMode === 'day' ) {
			body.classList.add( 'night-mode' );
		}
	}
};

const adjustDaynightModeInit = function() {
	if ( readCookie( 'dayNightActiveMode' ) === 'day-mode' ) {
		// Change icon to day
		daynightInitAnimate();
		daynightSwitchers.forEach( ( switcher ) => {
			//switcher.innerHTML = (switcher.innerHTML.replace(/\n/g, "")).replace('icon-night', 'icon-day');
			switcher.innerHTML = '<path d="M64 106.8c-2.4 0-4.4 2-4.4 4.4v12.4c0 2.4 2 4.4 4.4 4.4 2.4 0 4.4-2 4.4-4.4v-12.4c0-2.4-2-4.4-4.4-4.4zM64 21.2c2.4 0 4.4-2 4.4-4.4v-12.4c0-2.4-2-4.4-4.4-4.4-2.4 0-4.4 2-4.4 4.4v12.4c0 2.4 2 4.4 4.4 4.4zM27.5 94.3l-8.8 8.8c-1.7 1.7-1.7 4.5 0 6.2.9.9 2 1.3 3.1 1.3s2.2-.4 3.1-1.3l8.8-8.8c1.7-1.7 1.7-4.5 0-6.2-1.7-1.7-4.5-1.7-6.2 0zM97.4 35c1.1 0 2.2-.4 3.1-1.3l8.8-8.8c1.7-1.7 1.7-4.5 0-6.2-1.7-1.7-4.5-1.7-6.2 0l-8.8 8.8c-1.7 1.7-1.7 4.5 0 6.2.8.9 2 1.3 3.1 1.3zM21.2 64c0-2.4-2-4.4-4.4-4.4h-12.4c-2.4 0-4.4 2-4.4 4.4s2 4.4 4.4 4.4h12.4c2.4 0 4.4-2 4.4-4.4zM123.6 59.6h-12.4c-2.4 0-4.4 2-4.4 4.4s2 4.4 4.4 4.4h12.4c2.4 0 4.4-2 4.4-4.4 0-2.4-2-4.4-4.4-4.4zM27.5 33.7c.9.9 2 1.3 3.1 1.3s2.2-.4 3.1-1.3c1.7-1.7 1.7-4.5 0-6.2l-8.8-8.8c-1.7-1.7-4.5-1.7-6.2 0-1.7 1.7-1.7 4.5 0 6.2l8.8 8.8zM100.5 94.3c-1.7-1.7-4.5-1.7-6.2 0-1.7 1.7-1.7 4.5 0 6.2l8.8 8.8c.9.9 2 1.3 3.1 1.3s2.2-.4 3.1-1.3c1.7-1.7 1.7-4.5 0-6.2l-8.8-8.8zM64 30c-18.7 0-34 15.3-34 34s15.3 34 34 34 34-15.3 34-34-15.3-34-34-34zm0 59.3c-13.9 0-25.3-11.3-25.3-25.3 0-13.9 11.3-25.3 25.3-25.3 13.9 0 25.3 11.3 25.3 25.3 0 13.9-11.4 25.3-25.3 25.3z"/>';
		} );
		body.classList.remove( 'night-mode' );
		// Assign a .day-mode class only if Night mode is default
		if ( wpRigVars.daynightDefaultMode === 'night' ) {
			body.classList.add( 'day-mode' );
		}
	} else if ( readCookie( 'dayNightActiveMode' ) === 'night-mode' ) {
		// Change icon to night
		daynightInitAnimate();
		daynightSwitchers.forEach( ( switcher ) => {
			//switcher.innerHTML = (switcher.innerHTML.replace(/\n/g, "")).replace('icon-day', 'icon-night');
			switcher.innerHTML = '<path d="M108.7 88.2c-.6-1.5-2-2.5-3.5-2.7-14.5-1.9-27-11.5-32.6-25-5.6-13.5-3.6-29.1 5.3-40.7 1-1.3 1.2-2.9.6-4.4-.6-1.5-2-2.5-3.5-2.7-2.2-.3-4.4-.4-6.6-.4-6.6 0-13 1.3-19.1 3.8-12.3 5.1-21.9 14.7-27 27.1-5.1 12.3-5.1 25.9 0 38.3 7.8 18.7 25.9 30.9 46.2 30.9 6.6 0 13-1.3 19.1-3.8 8.1-3.4 15.2-8.8 20.5-15.8.9-1.4 1.2-3.1.6-4.6zm-25.6 12c-5 2.1-10.3 3.1-15.7 3.1-16.7 0-31.6-10-38-25.4-4.2-10.1-4.2-21.3 0-31.4 4.2-10.1 12.1-18 22.2-22.2 4.4-1.8 9-2.9 13.7-3.1-7 13.1-7.9 28.8-2.1 42.7 5.9 13.9 17.6 24.4 31.8 28.7-3.5 3.2-7.5 5.7-11.9 7.6z"/>';
		} );
		body.classList.remove( 'day-mode' );
		// Assign a .night-mode class only if Day mode is default
		if ( wpRigVars.daynightDefaultMode === 'day' ) {
			body.classList.add( 'night-mode' );
		}
	}
};

/**
	 * Run Daynight adjustment on page loading
	 */
	 adjustDaynightModeInit();

/**
	 * AUTO Adjust the color theme based on OS theme
	 */

// Check the default OS state and set initially daynight mode.
// if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
// 	createCookie('dayNightSet', 'auto', 30);
// 	createCookie('dayNightActiveMode', 'night-mode', 30);
// 	adjustDaynightMode();
// } else {
// 	createCookie('dayNightSet', 'auto', 30);
// 	createCookie('dayNightActiveMode', 'light-mode', 30);
// 	adjustDaynightMode();
// }

// Catch switching OS theme dynamically.
window.matchMedia( '(prefers-color-scheme: dark)' )
	.addEventListener( 'change', ( event ) => {
		if ( event.matches ) {
			// Dark mode
			eraseCookie( 'dayNightActiveMode' );
			createCookie( 'dayNightActiveMode', 'night-mode', 30 );
			adjustDaynightMode();
		} else {
			// Light mode
			eraseCookie( 'dayNightActiveMode' );
			createCookie( 'dayNightActiveMode', 'day-mode', 30 );
			adjustDaynightMode();
		}
	} );

/**
	 * Manually switching Daynight mode
	 */

function removeAnimClass() {
	daynightSwitchers.forEach( ( switcher ) => {
		switcher.classList.remove( 'zoomOutIn' );
		switcher.classList.remove( 'zoomIn' );
	} );
}

function daynightAnimate() {
	daynightSwitchers.forEach( ( switcher ) => {
		switcher.classList.add( 'zoomOutIn' );
		setTimeout( removeAnimClass, 499 );
	} );
}

function daynightInitAnimate() {
	daynightSwitchers.forEach( ( switcher ) => {
		switcher.classList.add( 'zoomIn' );
		setTimeout( removeAnimClass, 499 );
	} );
}

daynightSwitchers.forEach( ( switcher ) => {
	switcher.addEventListener( 'click', () => {
		// Start icon animation
		daynightAnimate();
		// Lets write that user checked it by hands
		eraseCookie( 'dayNightSet' );
		createCookie( 'dayNightSet', 'manually', 30 );

		// Change state of mode on click

		if ( readCookie( 'dayNightActiveMode' ) === 'day-mode' ) {
			// Set night mode
			eraseCookie( 'dayNightActiveMode' );

			// Change icon when in minimized (in the middle of animation)
			createCookie( 'dayNightActiveMode', 'night-mode', 30 );
			setTimeout( adjustDaynightMode, 250 );
		} else if ( readCookie( 'dayNightActiveMode' ) === 'night-mode' ) {
			// Set day mode
			eraseCookie( 'dayNightActiveMode' );
			createCookie( 'dayNightActiveMode', 'day-mode', 30 );

			// Change icon when in minimized (in the middle of animation)
			setTimeout( adjustDaynightMode, 250 );
		}
	} );
} );
