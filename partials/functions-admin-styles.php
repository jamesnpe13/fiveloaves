<?php
// disable block editor
add_filter("use_block_editor_for_post", "__return_false");

function remove_pages_editor()
{
	remove_post_type_support('page', 'editor');
}

add_action('init', 'remove_pages_editor');
