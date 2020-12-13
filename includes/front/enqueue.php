<?php

function te_script(){
    $uri                    = get_theme_file_uri();
    wp_enqueue_style( 'bootstrap', $uri.'/css/bootstrap.css' );
    wp_enqueue_style( 'magnific-popup', $uri.'/css/magnific-popup.min.css' );
    wp_enqueue_style( 'font-awesome', $uri.'/css/font-awesome.css' );
    wp_enqueue_style( 'fancybox', $uri.'/css/jquery.fancybox.min.css' );
    wp_enqueue_style( 'themify-icons', $uri.'/css/themify-icons.css' );
    wp_enqueue_style( 'niceselect', $uri.'/css/niceselect.css' );
    wp_enqueue_style( 'animate', $uri.'/css/animate.css' );
    wp_enqueue_style( 'flex-slider', $uri.'/css/flex-slider.min.css' );
    wp_enqueue_style( 'owl-carousel', $uri.'/css/owl-carousel.css' );
    wp_enqueue_style( 'slicknav', $uri.'/css/slicknav.min.css' );
    wp_enqueue_style( 'reset', $uri.'/css/reset.css' );
    wp_enqueue_style( 'style', $uri.'/style.css' );
    wp_enqueue_style( 'responsive', $uri.'/css/responsive.css' );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'jquerymigrate', $uri.'/js/jquery-migrate-3.0.0.js', [], '', true );
    wp_enqueue_script( 'jquery-ui', $uri.'/js/jquery-ui.min.js', [], '', true );
    wp_enqueue_script( 'popper', $uri.'/js/popper.min.js', [], '', true );
    wp_enqueue_script( 'bootstrap', $uri.'/js/bootstrap.min.js', [], '', true );
    wp_enqueue_script( 'colors', $uri.'/js/colors.js', [], '', true );
    wp_enqueue_script( 'slicknav', $uri.'/js/slicknav.min.js', [], '', true );
    wp_enqueue_script( 'owl-carousel', $uri.'/js/owl-carousel.js', [], '', true );
    wp_enqueue_script( 'magnific-popup', $uri.'/js/magnific-popup.js', [], '', true );
    wp_enqueue_script( 'waypoints', $uri.'/js/waypoints.min.js', [], '', true );
    wp_enqueue_script( 'finalcountdown', $uri.'/js/finalcountdown.min.js', [], '', true );
    wp_enqueue_script( 'nicesellect', $uri.'/js/nicesellect.js', [], '', true );
    wp_enqueue_script( 'flex-slider', $uri.'/js/flex-slider.js', [], '', true );
    wp_enqueue_script( 'scrollup', $uri.'/js/scrollup.js', [], '', true );
    wp_enqueue_script( 'onepage-nav', $uri.'/js/onepage-nav.min.js', [], '', true );
    wp_enqueue_script( 'easing', $uri.'/js/easing.js', [], '', true );
    wp_enqueue_script( 'active', $uri.'/js/active.js', [], '', true );
   
}