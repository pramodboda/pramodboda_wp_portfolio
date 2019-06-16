<?php
/**
 * =====================================================================
 * 1. Functions.php
 * =====================================================================
 */

 /* --------------------------------------------------------------------- */
 /* 1. CONSTANTS */
 /* --------------------------------------------------------------------- */

 define('THEMEROOT', get_stylesheet_directory_uri());
 define('IMAGES', THEMEROOT . 'assets/images');
 define('JS', THEMEROOT . '/assets/js');
 define('CSS', THEMEROOT . '/assets/css');





 
/* --------------------------------------------------------------------- */
/* 2. THEME SETUP */
/* --------------------------------------------------------------------- */

if(!function_exists('pramodboda_theme_setup')){
    function pramodboda_theme_setup(){
        // Make the theme available for translations.
        $lang_dir = THEMEROOT . '/languages';
        load_theme_textdomain('pramodboda', $lang_dir);

        // Add support for automatic feed links.
        add_theme_support('automatic-feed-links');

        // Add support for post thumbnails.
        add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme', 'pramodboda_theme_setup');
}




 
?>


