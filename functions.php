<?php

/**
 *
 * Table of Contents:
 * #SETUP - Theme basic set-up and functionality
 * #SCRIPTS - Enqueue styles and scripts
 * #MENUS - Register menus
 */

/* =============================================================================
   #SETUP - Theme basic set-up and functionality
*/

if ( ! function_exists( 'bareminimum_setup' ) ) {
	function bareminimum_setup() {

		add_theme_support( 'title-tag' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'post-thumbnails' );

	  add_theme_support( 'html5', array(
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption' )
		);

		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
	   * Other common functions you might add here:
		 * Post formats (a la Tumblr style)
		 * Content width
		 * Custom Theme background (color or image)
		 * Custom Header
		 * Custom Logo
		 * Additional image sizes
	   */
	}
	add_action( 'after_setup_theme', 'bareminimum_setup' );
}

/* =============================================================================
   #SCRIPTS
*/

if ( ! function_exists( 'bareminimum_enqueue_scripts' ) ) {
	function bareminimum_enqueue_scripts() {
		// Load main stylesheet
		wp_enqueue_style( 'style', get_stylesheet_uri() );
	}
	add_action( 'wp_enqueue_scripts', 'bareminimum_enqueue_scripts' );
}

/* =============================================================================
   #MENUS
*/