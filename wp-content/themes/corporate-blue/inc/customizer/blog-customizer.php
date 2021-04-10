<?php
/**
 * Blog / Archive / Search Customizer Options
 *
 * @package corporate_blue
 */

// Add blog section
$wp_customize->add_section( 'corporate_blue_blog_section', array(
	'title'             => esc_html__( 'Blog/Archive Page Setting','corporate-blue' ),
	'description'       => esc_html__( 'Blog/Archive/Search Page Setting Options', 'corporate-blue' ),
	'panel'             => 'corporate_blue_theme_options_panel',
) );

// latest blog title drop down chooser control and setting
$wp_customize->add_setting( 'corporate_blue_theme_options[latest_blog_title]', array(
	'sanitize_callback' => 'sanitize_text_field',
	'default'          	=> corporate_blue_theme_option( 'latest_blog_title' ),
) );

$wp_customize->add_control( new Corporate_Blue_Dropdown_Chosen_Control( $wp_customize, 'corporate_blue_theme_options[latest_blog_title]', array(
	'label'             => esc_html__( 'Latest Blog Title', 'corporate-blue' ),
	'description'       => esc_html__( 'Note: This title is displayed when your homepage displays option is set to latest posts.', 'corporate-blue' ),
	'section'           => 'corporate_blue_blog_section',
	'type'				=> 'text',
) ) );

// sidebar layout setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[sidebar_layout]', array(
	'sanitize_callback'   => 'corporate_blue_sanitize_select',
	'default'             => corporate_blue_theme_option( 'sidebar_layout' ),
) );

$wp_customize->add_control(  new Corporate_Blue_Radio_Image_Control ( $wp_customize, 'corporate_blue_theme_options[sidebar_layout]', array(
	'label'               => esc_html__( 'Sidebar Layout', 'corporate-blue' ),
	'section'             => 'corporate_blue_blog_section',
	'choices'			  => corporate_blue_sidebar_position(),
) ) );

// column control and setting
$wp_customize->add_setting( 'corporate_blue_theme_options[column_type]', array(
	'default'          	=> corporate_blue_theme_option( 'column_type' ),
	'sanitize_callback' => 'corporate_blue_sanitize_select',
) );

$wp_customize->add_control( 'corporate_blue_theme_options[column_type]', array(
	'label'             => esc_html__( 'Column Layout', 'corporate-blue' ),
	'section'           => 'corporate_blue_blog_section',
	'type'				=> 'select',
	'choices'			=> array( 
		'column-1' 		=> esc_html__( 'One Column', 'corporate-blue' ),
		'column-2' 		=> esc_html__( 'Two Column', 'corporate-blue' ),
	),
) );

// excerpt count control and setting
$wp_customize->add_setting( 'corporate_blue_theme_options[excerpt_count]', array(
	'default'          	=> corporate_blue_theme_option( 'excerpt_count' ),
	'sanitize_callback' => 'corporate_blue_sanitize_number_range',
	'validate_callback' => 'corporate_blue_validate_excerpt_count',
	'transport'			=> 'postMessage',
) );

$wp_customize->add_control( 'corporate_blue_theme_options[excerpt_count]', array(
	'label'             => esc_html__( 'Excerpt Length', 'corporate-blue' ),
	'description'       => esc_html__( 'Note: Min 1 & Max 50.', 'corporate-blue' ),
	'section'           => 'corporate_blue_blog_section',
	'type'				=> 'number',
	'input_attrs'		=> array(
		'min'	=> 1,
		'max'	=> 50,
		),
) );

// pagination control and setting
$wp_customize->add_setting( 'corporate_blue_theme_options[pagination_type]', array(
	'default'          	=> corporate_blue_theme_option( 'pagination_type' ),
	'sanitize_callback' => 'corporate_blue_sanitize_select',
) );

$wp_customize->add_control( 'corporate_blue_theme_options[pagination_type]', array(
	'label'             => esc_html__( 'Pagination Type', 'corporate-blue' ),
	'section'           => 'corporate_blue_blog_section',
	'type'				=> 'select',
	'choices'			=> array( 
		'default' 		=> esc_html__( 'Default', 'corporate-blue' ),
		'numeric' 		=> esc_html__( 'Numeric', 'corporate-blue' ),
	),
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[show_date]', array(
	'default'           => corporate_blue_theme_option( 'show_date' ),
	'sanitize_callback' => 'corporate_blue_sanitize_switch',
) );

$wp_customize->add_control( new Corporate_Blue_Switch_Control( $wp_customize, 'corporate_blue_theme_options[show_date]', array(
	'label'             => esc_html__( 'Show Date', 'corporate-blue' ),
	'section'           => 'corporate_blue_blog_section',
	'on_off_label' 		=> corporate_blue_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[show_category]', array(
	'default'           => corporate_blue_theme_option( 'show_category' ),
	'sanitize_callback' => 'corporate_blue_sanitize_switch',
) );

$wp_customize->add_control( new Corporate_Blue_Switch_Control( $wp_customize, 'corporate_blue_theme_options[show_category]', array(
	'label'             => esc_html__( 'Show Category', 'corporate-blue' ),
	'section'           => 'corporate_blue_blog_section',
	'on_off_label' 		=> corporate_blue_show_options(),
) ) );

// Archive author meta setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[show_author]', array(
	'default'           => corporate_blue_theme_option( 'show_author' ),
	'sanitize_callback' => 'corporate_blue_sanitize_switch',
) );

$wp_customize->add_control( new Corporate_Blue_Switch_Control( $wp_customize, 'corporate_blue_theme_options[show_author]', array(
	'label'             => esc_html__( 'Show Author', 'corporate-blue' ),
	'section'           => 'corporate_blue_blog_section',
	'on_off_label' 		=> corporate_blue_show_options(),
) ) );

// Archive comment meta setting and control.
$wp_customize->add_setting( 'corporate_blue_theme_options[show_comment]', array(
	'default'           => corporate_blue_theme_option( 'show_comment' ),
	'sanitize_callback' => 'corporate_blue_sanitize_switch',
) );

$wp_customize->add_control( new Corporate_Blue_Switch_Control( $wp_customize, 'corporate_blue_theme_options[show_comment]', array(
	'label'             => esc_html__( 'Show Comment', 'corporate-blue' ),
	'section'           => 'corporate_blue_blog_section',
	'on_off_label' 		=> corporate_blue_show_options(),
) ) );