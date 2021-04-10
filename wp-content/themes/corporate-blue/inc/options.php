<?php
/**
 * Options functions
 *
 * @package corporate_blue
 */

if ( ! function_exists( 'corporate_blue_show_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function corporate_blue_show_options() {
        $arr = array(
            'on'        => esc_html__( 'Yes', 'corporate-blue' ),
            'off'       => esc_html__( 'No', 'corporate-blue' )
        );
        return apply_filters( 'corporate_blue_show_options', $arr );
    }
endif;

if ( ! function_exists( 'corporate_blue_page_choices' ) ) :
    /**
     * List of pages for page choices.
     * @return Array Array of page ids and name.
     */
    function corporate_blue_page_choices() {
        $pages = get_pages();
        $choices = array();
        $choices[0] = esc_html__( 'None', 'corporate-blue' );
        foreach ( $pages as $page ) {
            $choices[ $page->ID ] = $page->post_title;
        }
        return $choices;
    }
endif;

if ( ! function_exists( 'corporate_blue_post_choices' ) ) :
    /**
     * List of posts for post choices.
     * @return Array Array of post ids and name.
     */
    function corporate_blue_post_choices() {
        $posts = get_posts( array( 'numberposts' => -1 ) );
        $choices = array();
        $choices[0] = esc_html__( 'None', 'corporate-blue' );
        foreach ( $posts as $post ) {
            $choices[ $post->ID ] = $post->post_title;
        }
        return $choices;
    }
endif;

if ( ! function_exists( 'corporate_blue_category_choices' ) ) :
    /**
     * List of categories for category choices.
     * @return Array Array of category ids and name.
     */
    function corporate_blue_category_choices() {
        $args = array(
                'type'          => 'post',
                'child_of'      => 0,
                'parent'        => '',
                'orderby'       => 'name',
                'order'         => 'ASC',
                'hide_empty'    => 0,
                'hierarchical'  => 0,
                'taxonomy'      => 'category',
            );
        $categories = get_categories( $args );
        $choices = array();
        $choices[0] = esc_html__( 'None', 'corporate-blue' );
        foreach ( $categories as $category ) {
            $choices[ $category->term_id ] = $category->name;
        }
        return $choices;
    }
endif;

if ( ! function_exists( 'corporate_blue_site_layout' ) ) :
    /**
     * site layout
     * @return array site layout
     */
    function corporate_blue_site_layout() {
        $corporate_blue_site_layout = array(
            'full'    => get_template_directory_uri() . '/assets/uploads/full.png',
            'boxed'   => get_template_directory_uri() . '/assets/uploads/boxed.png',
        );

        $output = apply_filters( 'corporate_blue_site_layout', $corporate_blue_site_layout );

        return $output;
    }
endif;

if ( ! function_exists( 'corporate_blue_sidebar_position' ) ) :
    /**
     * Sidebar position
     * @return array Sidebar position
     */
    function corporate_blue_sidebar_position() {
        $corporate_blue_sidebar_position = array(
            'right-sidebar' => get_template_directory_uri() . '/assets/uploads/right.png',
            'left-sidebar'  => get_template_directory_uri() . '/assets/uploads/left.png',
            'no-sidebar'    => get_template_directory_uri() . '/assets/uploads/full.png',
        );

        $output = apply_filters( 'corporate_blue_sidebar_position', $corporate_blue_sidebar_position );

        return $output;
    }
endif;

if ( ! function_exists( 'corporate_blue_get_spinner_list' ) ) :
    /**
     * List of spinner icons options.
     * @return array List of all spinner icon options.
     */
    function corporate_blue_get_spinner_list() {
        $arr = array(
            'spinner-two-way'       => esc_html__( 'Two Way', 'corporate-blue' ),
            'spinner-dots'          => esc_html__( 'Dots', 'corporate-blue' ),
        );
        return apply_filters( 'corporate_blue_spinner_list', $arr );
    }
endif;
