<?php
/**
 * Slider Customizer Options
 *
 * @package corporate_blue
 */

// Add slider section
$wp_customize->add_section( 'corporate_blue_slider_section', array(
	'title'             => esc_html__( 'Slider Section','corporate-blue' ),
	'description'       => esc_html__( 'Slider Setting Options', 'corporate-blue' ),
	'panel'             => 'corporate_blue_theme_options_panel',
) );

// slider menu enable setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[enable_slider]', array(
	'default'           => corporate_blue_theme_option('enable_slider'),
	'sanitize_callback' => 'corporate_blue_sanitize_switch',
) );

$wp_customize->add_control( new Corporate_Blue_Switch_Control( $wp_customize, 'corporate_blue_theme_options[enable_slider]', array(
	'label'             => esc_html__( 'Enable Slider', 'corporate-blue' ),
	'section'           => 'corporate_blue_slider_section',
	'on_off_label' 		=> corporate_blue_show_options(),
) ) );

// slider social menu enable setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[slider_entire_site]', array(
	'default'           => corporate_blue_theme_option('slider_entire_site'),
	'sanitize_callback' => 'corporate_blue_sanitize_switch',
) );

$wp_customize->add_control( new Corporate_Blue_Switch_Control( $wp_customize, 'corporate_blue_theme_options[slider_entire_site]', array(
	'label'             => esc_html__( 'Show Entire Site', 'corporate-blue' ),
	'section'           => 'corporate_blue_slider_section',
	'on_off_label' 		=> corporate_blue_show_options(),
) ) );

// slider arrow control enable setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[slider_arrow]', array(
	'default'           => corporate_blue_theme_option('slider_arrow'),
	'sanitize_callback' => 'corporate_blue_sanitize_switch',
) );

$wp_customize->add_control( new Corporate_Blue_Switch_Control( $wp_customize, 'corporate_blue_theme_options[slider_arrow]', array(
	'label'             => esc_html__( 'Show Arrow Controller', 'corporate-blue' ),
	'section'           => 'corporate_blue_slider_section',
	'on_off_label' 		=> corporate_blue_show_options(),
) ) );

// slider btn label chooser control and setting
$wp_customize->add_setting( 'corporate_blue_theme_options[slider_btn_label]', array(
	'default'          	=> corporate_blue_theme_option('slider_btn_label'),
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'corporate_blue_theme_options[slider_btn_label]', array(
	'label'             => esc_html__( 'Button Label', 'corporate-blue' ),
	'section'           => 'corporate_blue_slider_section',
	'type'				=> 'text',
) );

for ( $i = 1; $i <= 5; $i++ ) :

	// slider pages drop down chooser control and setting
	$wp_customize->add_setting( 'corporate_blue_theme_options[slider_content_page_' . $i . ']', array(
		'sanitize_callback' => 'corporate_blue_sanitize_page_post',
	) );

	$wp_customize->add_control( new Corporate_Blue_Dropdown_Chosen_Control( $wp_customize, 'corporate_blue_theme_options[slider_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'corporate-blue' ), $i ),
		'section'           => 'corporate_blue_slider_section',
		'choices'			=> corporate_blue_page_choices(),
	) ) );

endfor;