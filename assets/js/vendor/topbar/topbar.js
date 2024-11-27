function checkTopBarStatus() {
	if (
		readCookie( 'topBarStatusNew' ) !== 'closed' &&
		document.querySelector( '#topbar' )
	) {
		// Init topbar.
		const topbar = document.getElementById( 'topbar' );
		// topbar.style.display = 'block';
		topbar.style.maxHeight = '50vh';

		const topbarCloseBtn = document.getElementById( 'topbar-close-btn' );
		// Close Topbar on click.
		topbarCloseBtn.addEventListener( 'click', ( e ) => {
			createCookie( 'topBarStatusNew', 'closed', 30 );
			topbar.style.maxHeight = '0';
			checkTopBarStatus();
			// adjustAnchorsOffset();
		} );
	}
}

checkTopBarStatus();
// function adjustAnchorsOffset() {
// 	const headerHeight = document.getElementById( 'masthead' ).offsetHeight;
// 	const css =
// 			'h2::before, h3::before, h4::before, h5::before, :target::before { content: ""; display: block; height:' +
// 			( headerHeight + 8 ) +
// 			'px; margin: -' +
// 			( headerHeight + 8 ) +
// 			'px 0 0; } #primary.site-header--sticky { padding-top: ' +
// 			headerHeight +
// 			'px;}',
// 		head = document.head || document.getElementsByTagName( 'head' )[ 0 ],
// 		style = document.createElement( 'style' );

// 	head.appendChild( style );

// 	style.setAttribute( 'id', 'anchorsOffset' );

// 	if ( style.styleSheet ) {
// 		// This is required for IE8 and below.
// 		style.styleSheet.cssText = css;
// 	} else if ( document.getElementById( 'anchorsOffset' ) ) {
// 		document.getElementById( 'anchorsOffset' ).innerHTML = css;
// 	} else {
// 		style.appendChild( document.createTextNode( css ) );
// 	}
// }

// adjustAnchorsOffset();

// Calculating the distance offset.
// https://codepen.io/elifitch/pen/Cobzr

// let stuck = false;
// const stickPoint = getDistance();

// function getDistance() {
// 	const topDist = topbar.offsetTop;
// 	return topDist;
// }

// window.onscroll = function() {
// 	const distance = getDistance() - window.pageYOffset;
// 	const offset = window.pageYOffset;
// 	if ( distance <= 0 && ! stuck ) {
// 		stuck = true;
// 	} else if ( stuck && offset <= stickPoint ) {
// 		stuck = false;
// 	}
// };
