<?php 

// Add nessesery settings for example: css,js to our custom theme 
if(!function_exists('add_settings')) {

  function add_settings() {
    wp_enqueue_style('custom-font-archivo', "//fonts.googleapis.com/css2?family=Archivo:wght@300;400;500;600;700&display=swap");
    wp_enqueue_style('custom-font-work-sans', "//fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600&display=swap");
    wp_enqueue_style('custom-style', get_theme_file_uri("./build/style-index.css"));
    wp_enqueue_script('custom-js', get_theme_file_uri("./build/index.js"), array(), 1.0, true);
  }

}

// Register menu
if(!function_exists('add_custom_menu')) {

  function add_custom_menu() {
    register_nav_menu('main-menu', __('Main Menu'));  
  }
}

if(!function_exists('featured_images')) {
  function featured_images() {
    add_theme_support('post-thumbnails');
    add_image_size('post-thumbnails', 300, 400);

  }
}


add_theme_support('title-tag');
add_action('init', "add_custom_menu");
add_action('wp_enqueue_scripts', 'add_settings');
add_action('after_setup_theme', 'featured_images');