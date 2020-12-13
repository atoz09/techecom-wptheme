<?php


function te_setup(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'woocommerce' );
    register_nav_menus( [
        'main-menu'         => __('Main Menu','techecom')
    ] );
}