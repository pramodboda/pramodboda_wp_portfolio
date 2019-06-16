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
 define('JS', THEMEROOT . 'assets/js');

 
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



/* --------------------------------------------------------------------- */
/* 3. GET POST META */
/* --------------------------------------------------------------------- */

// if(!function_exists('pramodboda_post_meta')){
//     function pramodboda_post_meta(){
//         if(get_post_type() === 'post'){
//             // post author
//             _e('by','pramodboda');
//             printf('<a href="%1$s" rel="author"> %2$s </a>', esc_url(get_author_posts_url(get_the_author_meta('ID'))), get_the_author());
//             _e('on', 'pramodboda');
//             echo '<span>' . get_the_date() . '</span></p>';
//         }

//     }
// }


/* --------------------------------------------------------------------- */
/* 4. GET NUMBER PAGINATION */
/* --------------------------------------------------------------------- */
if(!function_exists('pramodboda_number_pagination')){
    function pramodboda_number_pagination(){
        $args = array(
            'prev_next' => false,
            'type' => 'array'
        );

        echo '<div class="col-lg-12">';
        $pagination = paginate_links($args);
        if(is_array($pagination)){
            echo '<ul class="nav nav-pills">';
            foreach($pagination as $page){
                if(strpos($page, 'current')){
                    echo '<li class="active"><a href="javascript:;"' . $page . '</a></li>';
                }else{
                    echo '<li>' . $page . '</li>';
                }
            }

            echo '</ul>';
        }
        echo '</div> <!-- end of pagination -->';
    }
}



/* --------------------------------------------------------------------- */
/* 5. GET SCRIPTS */
/* --------------------------------------------------------------------- */
if(!function_exists('pramodboda_css_js_scripts')){
    function pramodboda_css_js_scripts(){
        // Register scripts.
        wp_register_script('bootstrap-js', THEMEROOT . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
        wp_register_script('isotope-js', THEMEROOT . '/assets/js/isotope-docs.min.js', false, false, true);
        wp_register_script('imagesloaded-js', THEMEROOT . '/assets/js/imagesloaded.pkgd.min.js', false, false, true);
        wp_register_script('main-js', THEMEROOT . '/assets/js/main.js', false, false, true);

        // Load the custum scripts.
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('isotope-js');
        wp_enqueue_script('imagesloaded-js');
        wp_enqueue_script('main-js');

        // Load the stylesheets.
        wp_enqueue_style('bootsrap-css', THEMEROOT . '/assets/css/bootstrap.min.css');
        wp_enqueue_style('main-css', THEMEROOT . '/assets/css/style.css');

    }
    add_action('wp_enqueue_scripts', 'pramodboda_css_js_scripts');
}

 
?>


