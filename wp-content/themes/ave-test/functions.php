<?php

// Cargar Bootstrap y estilo personalizado
function load_bootstrap() {
  wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
  wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'load_bootstrap' );

// Cargar scripts
function custom_scripts() {
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/scripts.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

// Habilitar imagenes destacadas
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 400, 300 );


// Habilitar personalización del logotipo
function custom_logo_setup() {
  add_theme_support( 'custom-logo', array(
    'height'      => 50,
    'width'       => 200,
    'flex-width' => true,
  ) );
}
add_action( 'after_setup_theme', 'custom_logo_setup' );

// Registrar un menú principal
function register_main_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_main_menu' );


function add_google_maps_api_key() {
    ?>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AGREGAR-CREDENCIAL-API&callback=initMap"></script>
    <?php
}
add_action( 'wp_head', 'add_google_maps_api_key' );

?>