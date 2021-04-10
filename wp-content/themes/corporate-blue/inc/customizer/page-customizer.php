<?php
/**
 * Page Customizer Options
 *
 * @package corporate_blue
 */

// Add excerpt section
$wp_customize->add_section( 'corporate_blue_page_section', array(
	'title'             => esc_html__( 'Page Setting','corporate-blue' ),
	'description'       => esc_html__( 'Page Setting Options', 'corporate-blue' ),
	'panel'             => 'corporate_blue_theme_options_panel',
) );

// sidebar layout setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[sidebar_page_layout]', array(
	'sanitize_callback'   => 'corporate_blue_sanitize_select',
	'default'             => corporate_blue_theme_option('sidebar_page_layout'),
) );

$wp_customize->add_control(  new Corporate_Blue_Radio_Image_Control ( $wp_customize, 'corporate_blue_theme_options[sidebar_page_layout]', array(
	'label'               => esc_html__( 'Sidebar Layout', 'corporate-blue' ),
	'section'             => 'corporate_blue_page_section',
	'choices'			  => corporate_blue_sidebar_position(),
) ) );
