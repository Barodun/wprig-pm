/**
 * File cookies.js.
 *
 * Easiest way to work with cookies: create, read, erase.
 *
 * http://www.quirksmode.org/js/cookies.html
 */

function createCookie( name, value, days ) {
	if ( days ) {
		const date = new Date();
		date.setTime( date.getTime() + ( days * 24 * 60 * 60 * 1000 ) );
		var expires = '; expires=' + date.toGMTString();
	} else {
		var expires = '';
	}
	document.cookie = name + '=' + value + expires + '; path=/';
}

function readCookie( name ) {
	const nameEQ = name + '=';
	const ca = document.cookie.split( ';' );
	for ( let i = 0; i < ca.length; i++ ) {
		let c = ca[ i ];
		while ( c.charAt( 0 ) == ' ' ) {
			c = c.substring( 1, c.length );
		}
		if ( c.indexOf( nameEQ ) == 0 ) {
			return c.substring( nameEQ.length, c.length );
		}
	}
	return null;
}

function eraseCookie( name ) {
	createCookie( name, '', -1 );
}
