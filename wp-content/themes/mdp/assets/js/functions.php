<?php
// functions.php

// Add theme support
function mdp() {
    // Other theme support features here
    add_theme_support('automatic-feed-links');
    add_theme_support("title-tag");
    add_theme_support("wp-block-styles");
    add_theme_support( "responsive-embeds" );
    add_theme_support( "html5", $args );
    add_theme_support( "custom-logo", $args );
    add_theme_support( "custom-header", $args );
    add_theme_support( "custom-background", $args );
    add_theme_support( "align-wide" );
    add_editor_style('editor-style.css');
    add_theme_support("post-thumbnails");




}
add_action("after_setup_theme", "your_theme_setup");// functions.php

function your_theme_widgets_init() {
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'description' => 'This is the main sidebar widget area.',
        // Other options like 'before_widget', 'after_widget', etc.
    ));
}
add_action('widgets_init', 'your_theme_widgets_init');



?>
