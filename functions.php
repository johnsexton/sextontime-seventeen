<?php

if ( ! function_exists( 'theme_setup' ) ) :
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );
    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 300, 0 );
    add_image_size( 'original', 0, 0 );
    add_image_size( 'preview', 600, 600, true );
    add_image_size( 'header', 1200, 0, true );
    // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'header' => __( 'Header Menu', 'theme' ),
		'footer'  => __( 'Footer Menu', 'theme' ),
	) );
endif; // theme_setup

// Define Functions Path
define('FUNCTIONS_PATH', STYLESHEETPATH . '/functions/');

// Dashboard Hacks
// require_once(FUNCTIONS_PATH . 'dashboard-hacks.php');

// Next/Previous Links
require_once(FUNCTIONS_PATH . 'content-navigation.php');

// Custom Post Types
// require_once(FUNCTIONS_PATH . 'cpt-name.php');
// require_once(FUNCTIONS_PATH . 'cpt-recent-posts-widget.php');
require_once(FUNCTIONS_PATH . 'cpt-projects.php');
require_once(FUNCTIONS_PATH . 'cpt-fishing.php');

// Change Posts to Shares
function theme_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Journal';
    $submenu['edit.php'][5][0] = 'Journal';
    $submenu['edit.php'][10][0] = 'Add Entry';
    $submenu['edit.php'][16][0] = 'Entry Tags';
}
function theme_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Journal Entries';
    $labels->singular_name = 'Journal Entry';
    $labels->add_new = 'Add Entry';
    $labels->add_new_item = 'Add Entry';
    $labels->edit_item = 'Edit Entry';
    $labels->new_item = 'Entry';
    $labels->view_item = 'View Entry';
    $labels->search_items = 'Search Entries';
    $labels->not_found = 'No Entries found';
    $labels->not_found_in_trash = 'No Entries Found in Trash';
    $labels->all_items = 'All Entries';
    $labels->menu_name = 'Journal';
    $labels->name_admin_bar = 'Journal Entry';
}

add_action( 'admin_menu', 'theme_change_post_label' );
add_action( 'init', 'theme_change_post_object' );
