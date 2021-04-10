<?php
/**
 * Topbar Customizer Options
 *
 * @package corporate_blue
 */

// Add topbar section
$wp_customize->add_section( 'corporate_blue_topbar_section', array(
	'title'             => esc_html__( 'Top Bar Section','corporate-blue' ),
	'description'       => sprintf( '%1$s <a class="menu_locations" href="#"> %2$s </a> %3$s', esc_html__( 'Note: To show social menu.', 'corporate-blue' ), esc_html__( 'Click Here', 'corporate-blue' ), esc_html__( 'to create menu.', 'corporate-blue' ) ),
	'panel'             => 'corporate_blue_theme_options_panel',
) );

// topbar enable setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[enable_topbar]', array(
	'default'           => corporate_blue_theme_option('enable_topbar'),
	'sanitize_callback' => 'corporate_blue_sanitize_switch',
) );

$wp_customize->add_control( new Corporate_Blue_Switch_Control( $wp_customize, 'corporate_blue_theme_options[enable_topbar]', array(
	'label'             => esc_html__( 'Enable Topbar', 'corporate-blue' ),
	'section'           => 'corporate_blue_topbar_section',
	'on_off_label' 		=> corporate_blue_show_options(),
) ) );

// topbar address control and setting
$wp_customize->add_setting( 'corporate_blue_theme_options[topbar_address]', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Corporate_Blue_Dropdown_Chosen_Control( $wp_customize, 'corporate_blue_theme_options[topbar_address]', array(
	'label'             => esc_html__( 'Address', 'corporate-blue' ),
	'section'           => 'corporate_blue_topbar_section',
	'type'				=> 'text',
) ) );

// topbar phone control and setting
$wp_customize->add_setting( 'corporate_blue_theme_options[topbar_phone]', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Corporate_Blue_Dropdown_Chosen_Control( $wp_customize, 'corporate_blue_theme_options[topbar_phone]', array(
	'label'             => esc_html__( 'Phone No', 'corporate-blue' ),
	'section'           => 'corporate_blue_topbar_section',
	'type'				=> 'text',
) ) );

// topbar email control and setting
$wp_customize->add_setting( 'corporate_blue_theme_options[topbar_email]', array(
	'sanitize_callback' => 'sanitize_email',
) );

$wp_customize->add_control( new Corporate_Blue_Dropdown_Chosen_Control( $wp_customize, 'corporate_blue_theme_options[topbar_email]', array(
	'label'             => esc_html__( 'Email ID', 'corporate-blue' ),
	'section'           => 'corporate_blue_topbar_section',
	'type'				=> 'email',
) ) );

// topbar social menu enable setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[show_social_menu]', array(
	'default'           => corporate_blue_theme_option('show_social_menu'),
	'sanitize_callback' => 'corporate_blue_sanitize_switch',
) );

$wp_customize->add_control( new Corporate_Blue_Switch_Control( $wp_customize, 'corporate_blue_theme_options[show_social_menu]', array(
	'label'             => esc_html__( 'Show Social Menu', 'corporate-blue' ),
	'section'           => 'corporate_blue_topbar_section',
	'on_off_label' 		=> corporate_blue_show_options(),
) ) );

// topbar search enable setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[show_top_search]', array(
	'default'           => corporate_blue_theme_option('show_top_search'),
	'sanitize_callback' => 'corporate_blue_sanitize_switch',
) );

$wp_customize->add_control( new Corporate_Blue_Switch_Control( $wp_customize, 'corporate_blue_theme_options[show_top_search]', array(
	'label'             => esc_html__( 'Show Search', 'corporate-blue' ),
	'section'           => 'corporate_blue_topbar_section',
	'on_off_label' 		=> corporate_blue_show_options(),
) ) );