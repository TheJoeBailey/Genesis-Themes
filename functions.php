<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Vault Pro Theme' );
define( 'CHILD_THEME_URL', 'http://www.thejoebailey.com/' );
define( 'CHILD_THEME_VERSION', '2.0.1' );

//* Enqueue Lato Google font
add_action( 'wp_enqueue_scripts', 'genesis_enqueue_scripts_styles' );
function genesis_enqueue_scripts_styles() {
	
	wp_enqueue_script('vault-sticky-navigation', get_bloginfo( 'stylesheet_directory') . '/js/stickynav.js', array( 'jquery' ), '1.0.0');
	wp_enqueue_script( 'vault-responsive-menu', get_bloginfo( 'stylesheet_directory' ) . '/js/responsive-menu.js', array( 'jquery' ), '1.0.0' );
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lustria|Lato', array(), CHILD_THEME_VERSION );
}

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );



/** Register Utility Bar Widget Areas. */

genesis_register_sidebar( array(
'id' => 'home-hero-banner',
'name' => __( 'Home Hero Banner', 'vault' ),
'description' => __( 'This is the home hero section above the header.', 'vault' ),
) );

add_action( 'genesis_before_header', 'hero_banner' );
/**
* Add Hero Banner above header.
*
* @author Joe Bailey
* @copyright Copyright (c) 2014, Joe Bailey
* @license GPL-2.0+
*/
function hero_banner() {
 
	echo '<div class="home-hero-banner"><div class="wrap">';
 
	genesis_widget_area( 'home-hero-banner', array(
		'before' => '<div class="home-hero-banner">',
		'after' => '</div>',
	) );
 
	echo '</div></div>';
 
}


//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );
