<?php
/**
 * Created by PhpStorm.
 * User: Dell_PC
 * Date: 3/31/2020
 * Time: 19:13
 */

function addStyle()
{
    $tmp_uri = get_template_directory_uri();
    wp_enqueue_style( 'bootstrap',  $tmp_uri. '/assets/css/bootstrap.min.css', [], '20190102' );
    wp_enqueue_style( 'all_css', $tmp_uri. '/assets/css/all.min.css', [], '20190102' );
    wp_enqueue_style( 'animation', $tmp_uri. '/assets/css/animate.min.css', [], '20190102' );
    wp_enqueue_style( 'icon', $tmp_uri. '/assets/css/simple-line-icons.min.css', [], '20190102' );
    wp_enqueue_style( 'owl', $tmp_uri. '/assets/css/assets/owl.carousel.min.css', [], '20190102' );
    wp_enqueue_style( 'owl01', $tmp_uri. '/assets/css/assets/owl.theme.default.min.css', [], '20190102' );
    wp_enqueue_style( 'popup', $tmp_uri. '/assets/css/magnific-popup.min.css', [], '20190102' );
    wp_enqueue_style( 'theme1', $tmp_uri. '/assets/css/theme.css', [], '20190102' );
    wp_enqueue_style( 'theme2', $tmp_uri. '/assets/css/theme-blog.css', [], '20190102' );
    wp_enqueue_style( 'theme3', $tmp_uri. '/assets/css/theme-elements.css', [], '20190102' );
    wp_enqueue_style( 'theme4', $tmp_uri. '/assets/css/theme-shop.css', [], '20190102' );
    wp_enqueue_style( 'theme5', $tmp_uri. '/assets/css/default.css', [], '20190102' );
    wp_enqueue_style( 'theme5', $tmp_uri. '/assets/css/custom.css', [], '20190102' );
}

function addJsScripts()
{
    wp_enqueue_script( 'js1', get_theme_file_uri( '/assets/js/jquery.min.js' ), array(), '20161114', true );
    wp_enqueue_script( 'js2', get_theme_file_uri( '/assets/js/jquery.appear.min.js' ), array(), '20161114', true );
    wp_enqueue_script( 'js3', get_theme_file_uri( '/assets/js/jquery.easing.min.js' ), array(), '20161114', true );
    wp_enqueue_script( 'js4', get_theme_file_uri( '/assets/js/jquery.cookie.min.js' ), array(), '20161114', true );
    wp_enqueue_script( 'js5', get_theme_file_uri( '/assets/js/popper.min.js' ), array(), '20161114', true );
    wp_enqueue_script( 'js6', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array(), '20161114', true );
    wp_enqueue_script( 'js7', get_theme_file_uri( '/assets/js/common.min.js' ), array(), '20161114', true );
    wp_enqueue_script( 'js8', get_theme_file_uri( '/assets/js/theme.js' ), array(), '20161114', true );
    wp_enqueue_script( 'js9', get_theme_file_uri( '/assets/js/theme.init.js' ), array(), '20161114', true );
}


add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('menus');
register_nav_menu('header','En tête du menu');


add_action('after_setup_theme',function(){
    add_theme_support("title-tag");
    addStyle();
});

add_filter('nav_menu_submenu_css_class',function(){

});
add_filter('nav_menu_css_class',function($classes){
    $classes[] = 'dropdown';
    return $classes;
});

add_filter('nav_menu_link_attributes',function($attr){
   $attr['class'] = 'dropdown-item dropdown-toggle';
   return $attr;
});


add_action( 'wp_enqueue_scripts', function() {
    addJsScripts();
});

add_filter('document_title_separator',function(){
   return '|';
});
add_filter('document_title_parts',function ($parts){
    return $parts;
});

add_action( 'after_setup_theme', function () {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
});


