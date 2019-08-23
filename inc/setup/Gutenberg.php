<?php 
/**
 * Elegance Gutenberg Theme Support
 * @package Elegance
 * @author Tristan Elliott
 * 
 * ------
 * Visit for more information
 * https://developer.wordpress.org/themes/functionality/navigation-menus/
 * 
 */

function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'strong magenta', 'elegance' ),
            'slug' => 'strong-magenta',
            'color' => '#a156b4',
        ),
        array(
            'name' => __( 'light grayish magenta', 'elegance' ),
            'slug' => 'light-grayish-magenta',
            'color' => '#d0a5db',
        ),
        array(
            'name' => __( 'very light gray', 'elegance' ),
            'slug' => 'very-light-gray',
            'color' => '#eee',
        ),
        array(
            'name' => __( 'very dark gray', 'elegance' ),
            'slug' => 'very-dark-gray',
            'color' => '#444',
        ),
    ) );
    add_theme_support( 'dark-editor-style' );
}
 
add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );