<?php

// Register Custom Post Type Custom Price
function create_customprice_cpt() {

	$labels = array(
		'name' => _x( 'Custom Prices', 'Post Type General Name', 'classicmedinova' ),
		'singular_name' => _x( 'Custom Price', 'Post Type Singular Name', 'classicmedinova' ),
		'menu_name' => _x( 'Custom Prices', 'Admin Menu text', 'classicmedinova' ),
		'name_admin_bar' => _x( 'Custom Price', 'Add New on Toolbar', 'classicmedinova' ),
		'archives' => __( 'Custom Price Archives', 'classicmedinova' ),
		'attributes' => __( 'Custom Price Attributes', 'classicmedinova' ),
		'parent_item_colon' => __( 'Parent Custom Price:', 'classicmedinova' ),
		'all_items' => __( 'All Custom Prices', 'classicmedinova' ),
		'add_new_item' => __( 'Add New Custom Title', 'classicmedinova' ),
		'add_new' => __( 'Add New', 'classicmedinova' ),
		'new_item' => __( 'New Custom Price', 'classicmedinova' ),
		'edit_item' => __( 'Edit Custom Price', 'classicmedinova' ),
		'update_item' => __( 'Update Custom Price', 'classicmedinova' ),
		'view_item' => __( 'View Custom Price', 'classicmedinova' ),
		'view_items' => __( 'View Custom Prices', 'classicmedinova' ),
		'search_items' => __( 'Search Custom Price', 'classicmedinova' ),
		'not_found' => __( 'Not found', 'classicmedinova' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'classicmedinova' ),
		'featured_image' => __( 'Featured Image', 'classicmedinova' ),
		'set_featured_image' => __( 'Set featured image', 'classicmedinova' ),
		'remove_featured_image' => __( 'Remove featured image', 'classicmedinova' ),
		'use_featured_image' => __( 'Use as featured image', 'classicmedinova' ),
		'insert_into_item' => __( 'Insert into Custom Price', 'classicmedinova' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Custom Price', 'classicmedinova' ),
		'items_list' => __( 'Custom Prices list', 'classicmedinova' ),
		'items_list_navigation' => __( 'Custom Prices list navigation', 'classicmedinova' ),
		'filter_items_list' => __( 'Filter Custom Prices list', 'classicmedinova' ),
	);
	$args = array(
		'label' => __( 'Custom Price', 'classicmedinova' ),
		'description' => __( '', 'classicmedinova' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-controls-repeat',
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'customprice', $args );

}
add_action( 'init', 'create_customprice_cpt', 0 );

?>