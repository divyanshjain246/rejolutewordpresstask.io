<?php
/**
 * Single Post Customizer Options
 *
 * @package corporate_blue
 */

// Add excerpt section
$wp_customize->add_section( 'corporate_blue_single_section', array(
	'title'             => esc_html__( 'Single Post Setting','corporate-blue' ),
	'description'       => esc_html__( 'Single Post Setting Options', 'corporate-blue' ),
	'panel'             => 'corporate_blue_theme_options_panel',
) );

// sidebar layout setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[sidebar_single_layout]', array(
	'sanitize_callback'   => 'corporate_blue_sanitize_select',
	'default'             => corporate_blue_theme_option('sidebar_single_layout'),
) );

$wp_customize->add_control(  new Corporate_Blue_Radio_Image_Control ( $wp_customize, 'corporate_blue_theme_options[sidebar_single_layout]', array(
	'label'               => esc_html__( 'Sidebar Layout', 'corporate-blue' ),
	'section'             => 'corporate_blue_single_section',
	'choices'			  => corporate_blue_sidebar_position(),
) ) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[show_single_date]', array(
	'default'           => corporate_blue_theme_option( 'show_single_date' ),
	'sanitize_callback' => 'corporate_blue_sanitize_switch',
) );

$wp_customize->add_control( new Corporate_Blue_Switch_Control( $wp_customize, 'corporate_blue_theme_options[show_single_date]', array(
	'label'             => esc_html__( 'Show Date', 'corporate-blue' ),
	'section'           => 'corporate_blue_single_section',
	'on_off_label' 		=> corporate_blue_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[show_single_category]', array(
	'default'           => corporate_blue_theme_option( 'show_single_category' ),
	'sanitize_callback' => 'corporate_blue_sanitize_switch',
) );

$wp_customize->add_control( new Corporate_Blue_Switch_Control( $wp_customize, 'corporate_blue_theme_options[show_single_category]', array(
	'label'             => esc_html__( 'Show Category', 'corporate-blue' ),
	'section'           => 'corporate_blue_single_section',
	'on_off_label' 		=> corporate_blue_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[show_single_tags]', array(
	'default'           => corporate_blue_theme_option( 'show_single_tags' ),
	'sanitize_callback' => 'corporate_blue_sanitize_switch',
) );

$wp_customize->add_control( new Corporate_Blue_Switch_Control( $wp_customize, 'corporate_blue_theme_options[show_single_tags]', array(
	'label'             => esc_html__( 'Show Tags', 'corporate-blue' ),
	'section'           => 'corporate_blue_single_section',
	'on_off_label' 		=> corporate_blue_show_options(),
) ) );

// Archive author meta setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[show_single_author]', array(
	'default'           => corporate_blue_theme_option( 'show_single_author' ),
	'sanitize_callback' => 'corporate_blue_sanitize_switch',
) );

$wp_customize->add_control( new Corporate_Blue_Switch_Control( $wp_customize, 'corporate_blue_theme_options[show_single_author]', array(
	'label'             => esc_html__( 'Show Author', 'corporate-blue' ),
	'section'           => 'corporate_blue_single_section',
	'on_off_label' 		=> corporate_blue_show_options(),
) ) );
