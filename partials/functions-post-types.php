<?php

function custom_post_types()
{
	$labels_menuItems = array(
		'name' => 'Menu Items',
		'singular_name' => 'Menu Item',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Menu Item',
		'edit' => 'Edit',
		'edit_item' => 'Edit Menu Item',
		'new_item' => 'New Menu Item',
		'view' => 'View',
		'view_item' => 'View Menu Item',
		'search_items' => 'Search Menu Items',
		'not_found' => 'No Menu Items found',
		'not_found_in_trash' => 'No Menu Items found in not_found_in_trash',
		'parent' => 'Parent Menu Item',
	);

	register_post_type(
		'menuItems',
		array(
			'labels' => $labels_menuItems,
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'capability_type' => 'post',
			'supports' => array('title', 'editor', 'thumbnail', 'custom_fields'),
			'menu_icon' => 'dashicons-welcome-write-blog'
		)
	);
}

add_action("init", "custom_post_types");
