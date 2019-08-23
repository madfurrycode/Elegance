<?php 
/**
 * Elegance Menu Locations
 * @package Elegance
 * @author Tristan Elliott
 * 
 * ------
 * Visit for more information
 * https://developer.wordpress.org/themes/functionality/navigation-menus/
 * 
 */

if ( ! function_exists( 'elegance_menus' ) ) :
    /**
     * Checking if the function exists.
     */
    function elegance_menus()
    {
        /**
         * Navigation Menus
         * @version 1.0.0
         */
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary', 'elegance' ),
        ) );
    }
endif;

add_action( 'after_setup_theme', 'elegance_menus' );