<?php

//enqueue scripts and styles *use production assets. Dev assets are located in  /css and /js
function loadup_scripts() {
	
    //wp_enqueue_script( 'sidr-js', '//cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'scroll-reveal', get_template_directory_uri().'/js/scrollreveal.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'parallax', get_template_directory_uri().'/js/jquery.parallax-1.1.3.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'theme-js', get_template_directory_uri().'/js/mesh.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'sidr-js', get_template_directory_uri().'/js/jquery.sidr.min.js', array('jquery'), '1.0.0', true );

    wp_enqueue_style( 'fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css', '1.0.0', true );
    wp_enqueue_style( 'sidr-css', get_template_directory_uri().'/css/jquery.sidr.bare.css', '1.0.0', true );
    wp_enqueue_style( 'animatecss','//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css', '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'loadup_scripts' );

// Add Thumbnail Theme Support
add_theme_support('post-thumbnails');
add_image_size('background-fullscreen', 1800, 1200, true);
add_image_size('short-banner', 1800, 800, true);

add_image_size('large', 700, '', true); // Large Thumbnail
add_image_size('medium', 250, '', true); // Medium Thumbnail
add_image_size('small', 120, '', true); // Small Thumbnail
add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
add_image_size('icon', 150, 150, true);  //provides a square image size for icons
add_image_size('icon-small', 50, 50, true);  //provides a square image size for icons


https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css

//Register WP Menus
register_nav_menus(
    array(
        'main_nav' => 'Header and breadcrumb trail heirarchy',
        'social_nav' => 'Social menu used throughout'
    )
);

// Register Widget Area for the Sidebar
register_sidebar( array(
    'name' => __( 'Primary Widget Area', 'Sidebar' ),
    'id' => 'primary-widget-area',
    'description' => __( 'The primary widget area', 'Sidebar' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
) );

//Add Options page for ACF
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();
    
}







?>
