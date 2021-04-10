<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corporate_blue
 */

/**
 * corporate_blue_site_content_ends_action hook
 *
 * @hooked corporate_blue_site_content_ends -  10
 *
 */
do_action( 'corporate_blue_site_content_ends_action' );

/**
 * corporate_blue_footer_start_action hook
 *
 * @hooked corporate_blue_footer_start -  10
 *
 */
do_action( 'corporate_blue_footer_start_action' );

/**
 * corporate_blue_site_info_action hook
 *
 * @hooked corporate_blue_site_info -  10
 *
 */
do_action( 'corporate_blue_site_info_action' );

/**
 * corporate_blue_footer_ends_action hook
 *
 * @hooked corporate_blue_footer_ends -  10
 * @hooked corporate_blue_slide_to_top -  20
 *
 */
do_action( 'corporate_blue_footer_ends_action' );

/**
 * corporate_blue_page_ends_action hook
 *
 * @hooked corporate_blue_page_ends -  10
 *
 */
do_action( 'corporate_blue_page_ends_action' );

wp_footer();

/**
 * corporate_blue_body_html_ends_action hook
 *
 * @hooked corporate_blue_body_html_ends -  10
 *
 */
do_action( 'corporate_blue_body_html_ends_action' );
