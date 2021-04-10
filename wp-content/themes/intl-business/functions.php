<?php
/**
 * Theme functions and definitions
 *
 * @package intl_business
 */ 


if ( ! function_exists( 'intl_business_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function intl_business_enqueue_styles() {
		wp_enqueue_style( 'corporate-blue-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'intl-business-style', get_stylesheet_directory_uri() . '/style.css', array( 'corporate-blue-style-parent' ), '1.0.0' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'intl_business_enqueue_styles', 99 );
