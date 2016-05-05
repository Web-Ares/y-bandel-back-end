<?php
//required actions
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
add_filter('xmlrpc_enabled', '__return_false');
remove_action('wp_head', 'wlwmanifest_link');
// close required actions

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'signuppageheaders');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
// Отключаем сам REST API
add_filter('rest_enabled', '__return_false');

// Отключаем фильтры REST API
remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');
remove_action('wp_head', 'rest_output_link_wp_head', 10, 0);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('auth_cookie_malformed', 'rest_cookie_collect_status');
remove_action('auth_cookie_expired', 'rest_cookie_collect_status');
remove_action('auth_cookie_bad_username', 'rest_cookie_collect_status');
remove_action('auth_cookie_bad_hash', 'rest_cookie_collect_status');
remove_action('auth_cookie_valid', 'rest_cookie_collect_status');
remove_filter('rest_authentication_errors', 'rest_cookie_check_errors', 100);

// Отключаем события REST API
remove_action('init', 'rest_api_init');
remove_action('rest_api_init', 'rest_api_default_filters', 10, 1);
remove_action('parse_request', 'rest_api_loaded');

// Отключаем Embeds связанные с REST API
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4);

remove_action('wp_head', 'wp_oembed_add_discovery_links');
// если собираетесь выводить вставки из других сайтов на своем, то закомментируйте след. строку.
//remove_action('wp_head', 'wp_oembed_add_host_js');
add_filter('the_content', 'do_shortcode');
add_filter('wpcf7_form_elements', 'do_shortcode');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

add_action('wp_enqueue_scripts', 'add_js');

/* styles and scripts*/
function add_js()
{

    wp_deregister_script('jquery');

    wp_register_script('jquery',get_template_directory_uri().'/dist/js/vendors/jquery-2.1.4.min.js');
    wp_enqueue_script('jquery');


    if (is_page_template('page-home.php')){

        wp_enqueue_style('home', get_template_directory_uri().'/dist/css/main_page.css');
        wp_register_script('swiper',get_template_directory_uri().'/dist/js/vendors/swiper.jquery.min.js');
        wp_enqueue_script('swiper');
        wp_register_script('script-nicescroll',get_template_directory_uri().'/dist/js/vendors/jquery.nicescroll.min.js');
        wp_enqueue_script('script-nicescroll');
    }
    if (is_page_template('page-about.php')){
        wp_enqueue_style('home', get_template_directory_uri().'/dist/css/about-us_page.css');
        wp_register_script('swiper',get_template_directory_uri().'/dist/js/vendors/swiper.jquery.min.js');
        wp_enqueue_script('swiper');
        wp_register_script('script-nicescroll',get_template_directory_uri().'/dist/js/vendors/jquery.nicescroll.min.js');
        wp_enqueue_script('script-nicescroll');
    }
    if( is_page_template('page-all-projects.php') ){

        wp_enqueue_style('home', get_template_directory_uri().'/dist/css/all-works_page.css');
        wp_register_script('swiper',get_template_directory_uri().'/dist/js/vendors/swiper.jquery.min.js');
        wp_enqueue_script('swiper');
        wp_register_script('script-nicescroll',get_template_directory_uri().'/dist/js/vendors/jquery.nicescroll.min.js');
        wp_enqueue_script('script-nicescroll');

    }
    if( is_page_template('page-clients.php') ){

        wp_enqueue_style('home', get_template_directory_uri().'/dist/css/clients_page.css');
        wp_register_script('script-nicescroll',get_template_directory_uri().'/dist/js/vendors/jquery.nicescroll.min.js');
        wp_enqueue_script('script-nicescroll');

    }
    if( is_page_template('page-contact.php') ){

        wp_enqueue_style('home', get_template_directory_uri().'/dist/css/contact-us_page.css');
        wp_register_script('swiper',get_template_directory_uri().'/dist/js/vendors/swiper.jquery.min.js');
        wp_enqueue_script('swiper');
        wp_register_script('script-nicescroll',get_template_directory_uri().'/dist/js/vendors/jquery.nicescroll.min.js');
        wp_enqueue_script('script-nicescroll');

    }
    if( is_page_template('page-managment.php') ){

        wp_enqueue_style('home', get_template_directory_uri().'/dist/css/project-management_page.css');
        wp_register_script('swiper',get_template_directory_uri().'/dist/js/vendors/swiper.jquery.min.js');
        wp_enqueue_script('swiper');
        wp_register_script('script-nicescroll',get_template_directory_uri().'/dist/js/vendors/jquery.nicescroll.min.js');
        wp_enqueue_script('script-nicescroll');

    }
    if(is_singular('project')){
        wp_enqueue_style('home', get_template_directory_uri().'/dist/css/project_page.css');
        wp_register_script('swiper',get_template_directory_uri().'/dist/js/vendors/swiper.jquery.min.js');
        wp_enqueue_script('swiper');
        wp_register_script('script-nicescroll',get_template_directory_uri().'/dist/js/vendors/jquery.nicescroll.min.js');
        wp_enqueue_script('script-nicescroll');
    }

    wp_register_script('app',get_template_directory_uri().'/dist/js/app.min.js');
    wp_enqueue_script('app');
}
wp_enqueue_style('style', get_template_directory_uri().'/style.css');


if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'post-thumbnails' );
register_nav_menus( array(
    'menu' => 'menu'
) );


?>