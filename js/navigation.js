/* global jQuery */
/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function( $ ) {
	const mobileMenuButton = $( 'button.mobile-menu' );
	const nav = $( '.main-navigation' );

	function toggleNavigation( event ) {
		event.preventDefault();
		nav.toggleClass( 'show' );
		mobileMenuButton.toggleClass( 'close' );
	}

	mobileMenuButton.on( 'click', toggleNavigation );
}( jQuery ) );
