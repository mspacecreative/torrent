<?php

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_style', 9999 );
function enqueue_child_theme_style() {
	wp_enqueue_style( 'dtbwp_css_child', get_stylesheet_directory_uri() . '/style.css', array(
		'dtbwp_style',
	), 1.0 );
}

add_action( 'after_setup_theme', 'remove_post_formats', 11 ); 

function remove_post_formats() {

    // Add this line in to re-enable support for just Posts
    remove_theme_support( 'post-formats', array( 'post' ) );
}

function styles_scripts() {
	
	wp_register_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
	wp_enqueue_script('scripts');
}

// ENQUEUE STYLES AND SCRIPTS
add_action('init', 'styles_scripts');
