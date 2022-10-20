<?php

// Register Custom Post Type Custom Team
function create_customteam_cpt() {

	$labels = array(
		'name' => _x( 'Custom Teams', 'Post Type General Name', 'classicmedinova' ),
		'singular_name' => _x( 'Custom Team', 'Post Type Singular Name', 'classicmedinova' ),
		'menu_name' => _x( 'Custom Teams', 'Admin Menu text', 'classicmedinova' ),
		'name_admin_bar' => _x( 'Custom Team', 'Add New on Toolbar', 'classicmedinova' ),
		'archives' => __( 'Custom Team Archives', 'classicmedinova' ),
		'attributes' => __( 'Custom Team Attributes', 'classicmedinova' ),
		'parent_item_colon' => __( 'Parent Custom Team:', 'classicmedinova' ),
		'all_items' => __( 'All Custom Teams', 'classicmedinova' ),
		'add_new_item' => __( 'Add New Team Member Name', 'classicmedinova' ),
		'add_new' => __( 'Add New', 'classicmedinova' ),
		'new_item' => __( 'New Custom Team', 'classicmedinova' ),
		'edit_item' => __( 'Edit Custom Team', 'classicmedinova' ),
		'update_item' => __( 'Update Custom Team', 'classicmedinova' ),
		'view_item' => __( 'View Custom Team', 'classicmedinova' ),
		'view_items' => __( 'View Custom Teams', 'classicmedinova' ),
		'search_items' => __( 'Search Custom Team', 'classicmedinova' ),
		'not_found' => __( 'Not found', 'classicmedinova' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'classicmedinova' ),
		'featured_image' => __( 'Featured Image', 'classicmedinova' ),
		'set_featured_image' => __( 'Set featured image', 'classicmedinova' ),
		'remove_featured_image' => __( 'Remove featured image', 'classicmedinova' ),
		'use_featured_image' => __( 'Use as featured image', 'classicmedinova' ),
		'insert_into_item' => __( 'Insert into Custom Team', 'classicmedinova' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Custom Team', 'classicmedinova' ),
		'items_list' => __( 'Custom Teams list', 'classicmedinova' ),
		'items_list_navigation' => __( 'Custom Teams list navigation', 'classicmedinova' ),
		'filter_items_list' => __( 'Filter Custom Teams list', 'classicmedinova' ),
	);
	$args = array(
		'label' => __( 'Custom Team', 'classicmedinova' ),
		'description' => __( '', 'classicmedinova' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-plus',
		'supports' => array('title', 'editor', 'thumbnail', 'author', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 6,
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
	register_post_type( 'customteam', $args );

}
add_action( 'init', 'create_customteam_cpt', 0 );

?>