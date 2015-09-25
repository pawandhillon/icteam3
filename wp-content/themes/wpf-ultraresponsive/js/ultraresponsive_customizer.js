/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	// Update Logo text.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.logo_text' ).html( to );
		} );
	} );
	
	
	// Banner Title.
	wp.customize( 'ultraResponsive_banner_title', function( value ) {
		value.bind( function( to ) {
			$( '#imgBanner > h2' ).html( to );
		} );
	} );


	// Footer text.
	wp.customize( 'ultraResponsive_footer_text', function( value ) {
		value.bind( function( to ) {
			$( '.footer_bootomRight > p' ).html( to );
		} );
	} );	
		
	
} )( jQuery );