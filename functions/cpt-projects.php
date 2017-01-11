<?php

/**
 * Custom Post Type Projects
 */

add_action('init', 'projects_init');
function projects_init()
{
	$labels = array(
		'name' => _x('Projects', 'post type general name'),
		'singular_name' => _x('Project', 'post type singular name'),
		'add_new' => _x('Add Project', 'project'),
		'add_new_item' => __('Add New Project'),
		'edit_item' => __('Edit Project'),
		'new_item' => __('New Project'),
		'all_items' => __('All Projects'),
		'view_item' => __('View Project'),
		'search_items' => __('Search Projects'),
		'not_found' =>  __('No Projects Found'),
		'not_found_in_trash' => __('No Projects Found in Trash'),
		'parent_item_colon' => '',
		'menu_name' => 'Portfolio'
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
	register_post_type('projects',$args);
}
register_taxonomy(
	"type",
	"projects",
	array(
		"hierarchical" => true,
		"label" => "Project Types",
		"singular_label" => "Project Type",
		"query_var" => true,
		"rewrite" => true
	)
);
