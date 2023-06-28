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
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'carousel-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
		wp_enqueue_style( 'font', 'https://use.typekit.net/jkw6oft.css' );

		wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js' );
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js' );
		wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );
		wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/carousel.js', array('jquery', 'slick') );
	}
	add_action( 'wp_enqueue_scripts', 'bareminimum_enqueue_scripts' );
}

/* =============================================================================
   #MENUS
*/