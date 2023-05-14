<?php
function shop_style() {
    wp_enqueue_style(
        'shop',
        get_template_directory_uri() . '/css/master.css', array(),
        filemtime(  get_template_directory() . '/css/master.css' ) );
}
add_action( 'wp_enqueue_scripts', 'shop_style' );




add_theme_support( 'post-thumbnails' );
add_image_size( 'job-thumbnail', 120, 130 );



function shop_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu Name', 'mnk' ),
        'footer_menu'  => __( 'Footer Menu', 'mnk' ),
    ) );
}
add_action( 'after_setup_theme', 'shop_register_nav_menu', 0 );

