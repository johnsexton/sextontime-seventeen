<?php

/**
 * Custom Post Type Fishing Journal
 */

add_action('init', 'fishing_init');
function fishing_init()
{
	$labels = array(
		'name' => _x('Fishing Journal', 'post type general name'),
		'singular_name' => _x('Fishing Journal Entry', 'post type singular name'),
		'add_new' => _x('Add Entry', 'fishing'),
		'add_new_item' => __('Add New Entry'),
		'edit_item' => __('Edit Entry'),
		'new_item' => __('New Entry'),
		'all_items' => __('All Entries'),
		'view_item' => __('View Entry'),
		'search_items' => __('Search Entries'),
		'not_found' =>  __('No Entries Found'),
		'not_found_in_trash' => __('No Entries Found in Trash'),
		'parent_item_colon' => '',
		'menu_name' => 'Fishing'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title', 'custom-fields', 'editor', 'thumbnail')
	);
	register_post_type('fishing',$args);
}
register_taxonomy(
	"spot",
	"fishing",
	array(
		"hierarchical" => true,
		"label" => "Fishing Spots",
		"singular_label" => "Spot",
		"query_var" => true,
		"rewrite" => true
	)
);
