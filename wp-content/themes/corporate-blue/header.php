<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corporate_blue
 */

/**
 * corporate_blue_doctype_action hook
 *
 * @hooked corporate_blue_doctype -  10
 *
 */
do_action( 'corporate_blue_doctype_action' );

/**
 * corporate_blue_head_action hook
 *
 * @hooked corporate_blue_head -  10
 *
 */
do_action( 'corporate_blue_head_action' );

/**
 * corporate_blue_body_start_action hook
 *
 * @hooked corporate_blue_body_start -  10
 *
 */
do_action( 'corporate_blue_body_start_action' );
 
/**
 * corporate_blue_page_start_action hook
 *
 * @hooked corporate_blue_page_start -  10
 * @hooked corporate_blue_loader -  20
 *
 */
do_action( 'corporate_blue_page_start_action' );

/**
 * corporate_blue_header_start_action hook
 *
 * @hooked corporate_blue_header_start -  10
 *
 */
do_action( 'corporate_blue_header_start_action' );

/**
 * corporate_blue_site_branding_action hook
 *
 * @hooked corporate_blue_site_branding -  10
 *
 */
do_action( 'corporate_blue_site_branding_action' );

/**
 * corporate_blue_primary_nav_action hook
 *
 * @hooked corporate_blue_primary_nav -  10
 *
 */
do_action( 'corporate_blue_primary_nav_action' );

/**
 * corporate_blue_header_ends_action hook
 *
 * @hooked corporate_blue_header_ends -  10
 *
 */
do_action( 'corporate_blue_header_ends_action' );

/**
 * corporate_blue_site_content_start_action hook
 *
 * @hooked corporate_blue_site_content_start -  10
 *
 */
do_action( 'corporate_blue_site_content_start_action' );

/**
 * corporate_blue_primary_content_action hook
 *
 * @hooked corporate_blue_add_slider_section -  10
 *
 */
do_action( 'corporate_blue_primary_content_action' );