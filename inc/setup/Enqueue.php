<?php 
/**
 * Elegance Enqueue Stylesheets & Scripts
 * @package Elegance
 * @author Tristan Elliott
 * 
 * ------
 * Visit for more information
 * https://developer.wordpress.org/themes/basics/including-css-javascript/
 * 
 */

if ( ! function_exists( 'elegance_scripts' ) ) :
    /**
     * Checking if the function exists.
     */
    function elegance_scripts()
    {
        /**
         * Stylesheet Enqueue
         * @version 1.0.0
         */
        wp_enqueue_style( 'elegance-style', get_stylesheet_uri() );
        wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/dist/css/bootstrap.min.css', array(), '4.3.1', 'all');
        wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/dist/fonts/font-awesome.min.css', array(), '4.0.0', 'all');

        /**
         * Scripts Enqueue
         * @version 1.0.0
         */
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/dist/js/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );

        /**
         * Woocommerce Stylesheet
         * @version 1.0.0
         */
        wp_enqueue_style( 'woocommerce-css', get_template_directory_uri() . '/assets/dist/css/woocommerce.css', array(), '1.0.0', 'all');
        
    }
endif;

add_action( 'wp_enqueue_scripts', 'elegance_scripts' );