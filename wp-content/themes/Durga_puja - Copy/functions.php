<?php

function Durga_puja_theme_setup(){
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size( 'home-featured', 680, 400, array('center','center'));
    add_image_size( 'single-img', 600, 550, array('center','center'));
    add_theme_support('automatic-feed-links');



};

register_nav_menus( 
    array('primary-menu'=>'top menu')
);


function Durga_puja_widgets_init() {


    

register_sidebar( array(
    'name'          => __( 'Primary Sidebar', 'Durga_puja' ),
    'id'            => 'main-sidebar',
    'description'   => 'Main sidebar on right side',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => __( 'Footer Widget 1', 'Durga_puja' ),
    'id'            => 'footer-1',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => __( 'Footer Widget 2', 'Durga_puja' ),
    'id'            => 'footer-2',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => __( 'Footer Widget 3', 'Durga_puja' ),
    'id'            => 'footer-3',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => __( 'Footer Widget 4', 'Durga_puja' ),
    'id'            => 'footer-4',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );
register_sidebar( array(
    'name'          => __( 'Footer Widget 5', 'Durga_puja' ),
    'id'            => 'footer-5',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );
register_sidebar( array(
    'name'          => __( 'Footer Widget 6', 'Durga_puja' ),
    'id'            => 'footer-6',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );
}
add_action('widgets_init','Durga_puja_widgets_init');
function Durga_puja_scripts(){
	wp_enqueue_style( 'style', get_stylesheet_uri() );

    

   
}
add_action('wp_enqueue_scripts', 'Durga_puja_scripts');
?>

