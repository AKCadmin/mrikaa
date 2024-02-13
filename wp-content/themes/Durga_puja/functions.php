<?php

function Durga_puja_theme_setup(){
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size( 'home-featured', 680, 400, array('center','center'));
    add_image_size( 'single-img', 600, 550, array('center','center'));
    add_theme_support('automatic-feed-links');
    register_nav_menus( 
        array('primary-menu'=>'top menu')
    );



};

add_action('after_setup_theme', 'Durga_puja_theme_setup' );




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
register_sidebar( array(
    'name'          => __( 'Header Widget 1', 'Durga_puja' ),
    'id'            => 'header-1',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => __( 'Header Widget 2', 'Durga_puja' ),
    'id'            => 'header-2',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => __( 'Home Widget 1', 'Durga_puja' ),
    'id'            => 'home-1',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => __( 'Home Widget 2', 'Durga_puja' ),
    'id'            => 'home-2',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => __( 'Home Widget 3', 'Durga_puja' ),
    'id'            => 'home-3',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => __( 'Home Widget 4', 'Durga_puja' ),
    'id'            => 'home-4',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'theme_name' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );

register_sidebar( array(
    'name'          => __( 'Home Widget 5', 'Durga_puja' ),
    'id'            => 'home-5',
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


    // Custom post type



    
    // Custom post type

    

   
}
add_action('wp_enqueue_scripts', 'Durga_puja_scripts');
?>



<?php
function gallery_post_type() {
 $labels = array(
  'name'                => _x( 'gallery', 'Post Type General Name', 'acsweb' ),
  'singular_name'       => _x( 'gallery', 'Post Type Singular Name', 'acsweb' ),
  'menu_name'           => __( 'gallery', 'acsweb' ),
  'parent_item_colon'   => __( 'Parent gallery', 'acsweb' ),
  'all_items'           => __( 'All gallery', 'acsweb' ),
  'view_item'           => __( 'View gallery', 'acsweb' ),
  'add_new_item'        => __( 'Add New gallery', 'acsweb' ),
  'add_new'             => __( 'Add New', 'acsweb' ),
  'edit_item'           => __( 'Edit gallery', 'acsweb' ),
  'update_item'         => __( 'Update gallery', 'acsweb' ),
  'search_items'        => __( 'Search gallery', 'acsweb' ),
  'not_found'           => __( 'Not Found', 'acsweb' ),
  'not_found_in_trash'  => __( 'Not found in Trash', 'acsweb' ),
 );
 $args = array(
  'label'               => __( 'gallery', 'acsweb' ),
  'description'         => __( 'gallery news and reviews', 'acsweb' ),
  'labels'              => $labels,
  'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
  'taxonomies'          => array( 'genres' ), 
  'hierarchical'        => false,
  'public'              => true,
  'show_ui'             => true,
  'show_in_menu'        => true,
  'show_in_nav_menus'   => true,
  'show_in_admin_bar'   => true,

  'menu_position'       => 5,
  'menu_icon'           => 'dashicons-format-image',
  'can_export'          => true,
  'has_archive'         => true,
  'exclude_from_search' => false,
  'publicly_queryable'  => true,
  'capability_type'     => 'page',
  'taxonomies'          => array( 'category' ),
 );
 register_post_type( 'gallery', $args );
}
add_action( 'init', 'gallery_post_type', 0 );
?>





