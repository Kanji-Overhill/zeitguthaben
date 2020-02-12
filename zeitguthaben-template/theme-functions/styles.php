<?php
/**
 * File: 
 *  theme-functions/styles.php 
 * 
 * This file contains all the CSS files needed for the theme.
 * 
 */



/**
 * Loads all the main CSS files needed for the theme, all the general styles are here.
 * 
 */
function load_styles() {
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . '/css/slick-theme.css');
    wp_enqueue_style('styles', get_template_directory_uri() . '/css/styles.css');
}
add_action('wp_enqueue_scripts', 'load_styles');




