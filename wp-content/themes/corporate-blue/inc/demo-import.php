<?php
/**
 * demo import
 *
 * @package corporate_blue
 */

/**
 * Imports predefine demos.
 * @return [type] [description]
 */
function corporate_blue_intro_text( $default_text ) {
    $default_text .= sprintf( '<p class="about-description">%1$s <a href="%2$s">%3$s</a></p>', esc_html__( 'Demo content files for Corporate Blue Theme.', 'corporate-blue' ),
    esc_url( 'https://drive.google.com/open?id=1Yp_3JirvZzS5KgPPeDWs6SLZ39xWIf1V' ), esc_html__( 'Click here to download Demo Data', 'corporate-blue' ) );

    return $default_text;
}
add_filter( 'pt-ocdi/plugin_intro_text', 'corporate_blue_intro_text' );
