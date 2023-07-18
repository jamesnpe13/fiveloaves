<?php
function custom_taxonomies()
{
	// menu categories
	$labels_menuCategories = array(
		'name' => _x('Menu Categories', 'taxonomy general name'),
		'singular_name' => _x('Menu Category', 'taxonomy singular name'),
		'all_items' => __('All Menu Categories'),
		'parent_item' => __('Parent Menu Categories'),
		'parent_item_colon' => __('Parent Menu Categories:'),
		'edit_item' => __('Edit Menu Category'),
		'update_item' => __('Update Menu Category'),
		'add_new_item' => __('Add Menu Category'),
		'menu_name' => __('Menu Categories'),
	);

	$args_menuCategories = array(
		'hierarchical' => true,
		'labels' => $labels_menuCategories,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'menu-categories'),
		'show_in_rest' => true,
	);

	register_taxonomy('menu_categories', 'menuitems', $args_menuCategories);

	// catering categories
	$labels_cateringCategories = array(
		'name' => _x('Catering Categories', 'taxonomy general name'),
		'singular_name' => _x('Catering Category', 'taxonomy singular name'),
		'all_items' => __('All Catering Categories'),
		'parent_item' => __('Parent Catering Categories'),
		'parent_item_colon' => __('Parent Catering Categories:'),
		'edit_item' => __('Edit Catering Category'),
		'update_item' => __('Update Catering Category'),
		'add_new_item' => __('Add Catering Category'),
		'menu_name' => __('Catering Categories'),
	);

	$args_cateringCategories = array(
		'hierarchical' => true,
		'labels' => $labels_cateringCategories,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'catering-categories'),
		'show_in_rest' => true,
	);

	register_taxonomy('catering_categories', 'catering_items', $args_cateringCategories);
}

add_action("init", "custom_taxonomies");
