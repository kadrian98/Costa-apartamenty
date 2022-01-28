<?php

function styles() {


          wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery.js', array(), false, true );
          wp_enqueue_script('swippr', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), false, true);
          wp_enqueue_script( 'menu-bg', get_stylesheet_directory_uri() . '/js/menu-background.js', array(), false, true );
          
          wp_enqueue_script( 'slider', get_stylesheet_directory_uri() . '/js/slider.js', array(), false, true );
          wp_enqueue_script( 'menu', get_stylesheet_directory_uri() . '/js/menu.js', array(), false, true );
          wp_enqueue_script( 'slider-uslugi', get_stylesheet_directory_uri() . '/js/swiper-uslugi.js', array(), false, true );
          
          wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
          wp_enqueue_style('fontello', get_theme_file_uri('/css/fontello.css'));
          wp_enqueue_style('swipper', 'https://unpkg.com/swiper/swiper-bundle.min.css');
          wp_enqueue_style('main-style', get_theme_file_uri('/dist/css/style.css'));
          

}

add_action('wp_enqueue_scripts', 'styles');

function features() {
          add_theme_support('title-tag');
          add_image_size('slider', 300, 300, true);
}

add_action('after_setup_theme', 'features');

