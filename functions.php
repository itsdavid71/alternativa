<?php
function create_custom_post_type() {
    register_post_type('news',
        array(
            'labels'      => array(
                'name'          => __('Кастомный пост'),
                'singular_name' => __('Кастомный пост'),
            ),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array('slug' => 'news'),
            'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),
        )
    );
}
add_action('init', 'create_custom_post_type');

add_theme_support('post-thumbnails');

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

function register_my_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ),  
            'footer-menu' => __( 'Footer Menu' ) 
        )
    );
}
add_action( 'init', 'register_my_menus' );



add_action( 'wp_enqueue_scripts', 'true_stili_frontend', 25 );
 
function true_stili_frontend() {
 	wp_enqueue_style( 'true_stili', get_stylesheet_directory_uri() . '/style.css' );
}