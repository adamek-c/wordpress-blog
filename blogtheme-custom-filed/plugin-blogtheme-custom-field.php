<?php 

/*
Plugin Name: Blog-theme-custom-field
Version: 1.0
Author: Adam
Text Domain: blog-theme-custom-field
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if(!function_exists('custom_post_type_places')) {
  function custom_post_type_places() {
    register_post_type('places', array(
      'supports' => array('title','editor','author','thumbnail'),
      'labels' => array(
        'name' => __('Miejsca', 'textdomain'),
        'singular_name' => __('Miejsca', 'textdomain'),
        'add_new' => 'Dodaj Miejsce',
        'add_new_item' => 'Dodaj Nowe Piękne Miejsce',
        'edit_item' => 'Edytuj Miejsce',
        'all_items' => 'Wszystkie Miejsca'
      ),
      'rewrite'     => array( 'slug' => 'piekne-miejsca' ),
      'show_in_rest' => true,
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-site',
    ));
  }
}



add_action('init', 'custom_post_type_places');