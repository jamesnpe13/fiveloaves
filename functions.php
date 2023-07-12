<?php

// scripts ands styles
function load_assets()
{
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'load_assets');

// navigation menus

register_nav_menus(
	array(
		'primary' => __('Header Menu'),
		'secondary' => __('Footer Menu'),
	)
);
