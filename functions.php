<?php

// include 
include( get_theme_file_path( 'includes/front/enqueue.php' ) );
include( get_theme_file_path( 'includes/setup.php' ) );

// Hooks 
add_action( 'wp_enqueue_scripts', 'te_script' );
add_action( 'after_setup_theme', 'te_setup' );