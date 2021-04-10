<?php
/**
 * Footer Customizer Options
 *
 * @package corporate_blue
 */

// Add footer section
$wp_customize->add_section( 'corporate_blue_footer_section', array(
	'title'             => esc_html__( 'Footer Section','corporate-blue' ),
	'description'       => esc_html__( 'Footer Setting Options', 'corporate-blue' ),
	'panel'             => 'corporate_blue_theme_options_panel',
) );

// slide to top enable setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[slide_to_top]', array(
	'default'           => corporate_blue_theme_option('slide_to_top'),
	'sanitize_callback' => 'corporate_blue_sanitize_switch',
) );

$wp_customize->add_control( new Corporate_Blue_Switch_Control( $wp_customize, 'corporate_blue_theme_options[slide_to_top]', array(
	'label'             => esc_html__( 'Show Slide to Top', 'corporate-blue' ),
	'section'           => 'corporate_blue_footer_section',
	'on_off_label' 		=> corporate_blue_show_options(),
) ) );

// copyright text
$wp_customize->add_setting( 'corporate_blue_theme_options[copyright_text]',
	array(
		'default'       		=> corporate_blue_theme_option('copyright_text'),
		'sanitize_callback'		=> 'corporate_blue_santize_allow_tags',
	)
);
$wp_customize->add_control( 'corporate_blue_theme_options[copyright_text]',
    array(
		'label'      			=> esc_html__( 'Copyright Text', 'corporate-blue' ),
		'section'    			=> 'corporate_blue_footer_section',
		'type'		 			=> 'textarea',
    )
);
