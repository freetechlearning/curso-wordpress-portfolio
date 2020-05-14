<?php
/**
 * functions.php 
 * 
 * @package WordPress
 * @subpackage freetechportfolio
 */

if (! function_exists('freetechportfolio_setup')){
    function freetechportfolio_setup(){

        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support( 'automatic-feed-links' );

        register_nav_menus( array(
            'principal'   => __( 'Menu Principal', 'freetechportfolio' ),
            'social' => __('Menu Social', 'freetechportfolio' )
        ) );


        load_theme_textdomain( 'freetechportfolio', get_template_directory() . '/languages' );
    }
}
add_action('after_setup_theme', 'freetechportfolio_setup');

?>