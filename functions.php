<?php

// Add new post type for Recipes

add_action('init', 'portfolio_project_init');
function portfolio_project_init() 
{
	$project_labels = array(                                     
		'name' => _x('Projects', 'post type general name'),
		'singular_name' => _x('Project', 'post type singular name'),
		'all_items' => __('All Projects'),
		'add_new' => _x('Add new project', 'projects'),
		'add_new_item' => __('Add new project'),
		'edit_item' => __('Edit project'),
		'new_item' => __('New project'),
		'view_item' => __('View project'),
		'search_items' => __('Search in projects'),
		'not_found' =>  __('No projects found'),
		'not_found_in_trash' => __('No projects found in trash'), 
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $project_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 25,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
		'has_archive' => 'recipes'
	); 
	register_post_type('projects',$args);
}



?>