<?php
/*
Plugin Name: Section Theme
Description: sections desing frontpage
Author: Valeria Gulizia
Author URI:  https://www.valeriagulizia.it
* Version: 1
*/

//plugin translation
function section_theme_setup() {
load_plugin_textdomain('section-theme', false, dirname(plugin_basename(__FILE__)) . '/lang/');
}

// end custom_theme_setup
add_action('after_setup_theme', 'section_theme_setup');



/* Post type
-------------------------------------------------------- */


function kamurria_init(){
	// custom post types
	$labels = array(
		'name' => 'Sections',
		'singular_name' => 'Section',
		'menu_name' => 'Sections Theme',
		'all_items' => 'All Sections',
		'add_new' => 'Add New',
		'add_new_item' => 'Add new Section',
		'edit' => 'Edit',
		'edit_item' => 'Edit Section',
		'new_item' => 'New Section',
		'view' => 'View',
		'view_item' => 'View Section',
		'search_items' => 'Search Section',
		'not_found' => 'No Sections found',
		'not_found_in_trash' => 'No Sections in Thrash',
		'parent' => 'Parent Section',
	);
	$supports = array(
		'title',
		'editor',
		'excerpt',
		'custom-fields',
		'comments',
		'revisions',
		'thumbnail',
		'author',
		'page-attributes'
	);
	$args = array(
		'labels' => $labels,
		'description' => '',
		'public' => true,
		'show_ui' => true,
		'has_archive' => true,
		'show_in_menu' => true,
		'exclude_from_search' => false,
		'capability_type' => 'page',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array( 'slug' => 'section', 'with_front' => true ),
		'query_var' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-buddicons-replies',
		'supports' => $supports,
		'taxonomies' => array( 'section_theme' )

	);
	register_post_type( 'section_theme', $args );
}
add_action( 'init', 'kamurria_init' );
