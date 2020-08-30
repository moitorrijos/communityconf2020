/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const mobileMenuButton = document.querySelector( 'button.mobile-menu' );
	const navigation = document.querySelector( '.main-navigation' );

	function toggleNavigation( event ) {
		event.preventDefault();
		navigation.classList.toggle( 'show' );
		mobileMenuButton.classList.toggle( 'close' );
	}

	mobileMenuButton.addEventListener( 'click', toggleNavigation );
}() );
