<?php
/**
* Google Fonts Implementation
*
* @package Adventure
* @since Adventure 1.0
*
*/

/**
* Register Google Fonts
*
* @since Adventure 1.0
*/
function organic_register_fonts() {
	$protocol = is_ssl() ? 'https' : 'http';
	wp_register_style( 'roboto', "$protocol://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" );
	wp_register_style( 'open sans', "$protocol://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,800italic,700italic,600italic,400italic,300italic" );
	wp_register_style( 'lora', "$protocol://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic" );
}
add_action( 'init', 'organic_register_fonts' );

/**
* Enqueue Google Fonts on Front End
*
* @since Adventure 1.0
*/

function organic_fonts() {
	wp_enqueue_style( 'roboto' );
	wp_enqueue_style( 'open sans' );
	wp_enqueue_style( 'lora' );
}
add_action( 'wp_enqueue_scripts', 'organic_fonts' );

/**
* Enqueue Google Fonts on Custom Header Page
*
* @since Adventure 1.0
*/
function organic_admin_fonts( $hook_suffix ) {
	if ( 'appearance_page_custom-header' != $hook_suffix )
	return;
	
	wp_enqueue_style( 'roboto' );
	wp_enqueue_style( 'open sans' );
	wp_enqueue_style( 'lora' );
}
add_action( 'admin_enqueue_scripts', 'organic_admin_fonts' );