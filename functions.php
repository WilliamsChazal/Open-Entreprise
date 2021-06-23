<?php 
// Ajout de fonctions au thème. 
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );
// Ajout du style et des scripts. 
function register_assets(){
  wp_enqueue_style('Open-Entreprise', get_stylesheet_uri(), array(),'1.0');
}
add_action('wp_enqueue_scripts','register_assets');
// Prise en charge du logo. 
function custom_logo(){
    add_theme_support ('custom-logo', array(
        'flex-height' => true,
        'flex-width' => true,

    ));
}
add_action('after_setup_theme','custom_logo');