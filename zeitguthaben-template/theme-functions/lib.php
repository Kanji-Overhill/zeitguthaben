<?php

/**
 * File: 
 *  theme-functions/lib.php 
 * 
 * This file contains all the JavaScript & CSS files included from external libraries.
 *  Ex: Bootstrap, ScrollMagic etc.
 * 
 */






/**
 * Loads all the libraries CSS files.
 * 
 */
function load_lib_style()
{
    // Bootstrap
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    // Aos
    wp_enqueue_style('Aos', 'https://unpkg.com/aos@next/dist/aos.css');
    // Cookie queries
    // wp_enqueue_style('cookie-queries',  get_template_directory_uri() . '/style/lib/cookie-queries.css');
}
add_action('wp_enqueue_scripts', 'load_lib_style');




