<?php

/**
 * Custom Post Type CPT
 */

add_action('init', 'cpt_init');
function cpt_init() 
{
	$labels = array(
		'name' => _x('CPTs', 'post type general name'),
		'singular_name' => _x('CPT', 'post type singular name'),
		'add_new' => _x('Add New', 'cpt'),
		'add_new_item' => __('Add New CPT'),
		'edit_item' => __('Edit CPT'),
		'new_item' => __('New CPT'),
		'all_items' => __('All CPTs'),
		'view_item' => __('View CPT'),
		'search_items' => __('Search CPTs'),
		'not_found' =>  __('No CPTs Found'),
		'not_found_in_trash' => __('No CPTs Found in Trash'), 
		'parent_item_colon' => '',
		'menu_name' => 'CPTs'
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
		'supports' => array('title', 'thumbnail', 'custom-fields')
	); 
	register_post_type('cpt',$args);
}
register_taxonomy(
	"taxonomy-title", 
	"cpt", 
	array(
		"hierarchical" => true, 
		"label" => "Taxonomy Titles", 
		"singular_label" => "Taxonomy Title",
		"query_var" => true, 
		"rewrite" => true
	)
);