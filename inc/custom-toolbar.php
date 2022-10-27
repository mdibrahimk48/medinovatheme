<?php

// Register Custom Post Type Custom Toolbar
function create_customtoolbar_cpt() {

	$labels = array(
		'name' => _x( 'Custom Toolbars', 'Post Type General Name', 'classicmedinova' ),
		'singular_name' => _x( 'Custom Toolbar', 'Post Type Singular Name', 'classicmedinova' ),
		'menu_name' => _x( 'Custom Toolbars', 'Admin Menu text', 'classicmedinova' ),
		'name_admin_bar' => _x( 'Custom Toolbar', 'Add New on Toolbar', 'classicmedinova' ),
		'archives' => __( 'Custom Toolbar Archives', 'classicmedinova' ),
		'attributes' => __( 'Custom Toolbar Attributes', 'classicmedinova' ),
		'parent_item_colon' => __( 'Parent Custom Toolbar:', 'classicmedinova' ),
		'all_items' => __( 'All Custom Toolbars', 'classicmedinova' ),
		'add_new_item' => __( 'Add New Cell', 'classicmedinova' ),
		'add_new' => __( 'Add New', 'classicmedinova' ),
		'new_item' => __( 'New Custom Toolbar', 'classicmedinova' ),
		'edit_item' => __( 'Edit Custom Toolbar', 'classicmedinova' ),
		'update_item' => __( 'Update Custom Toolbar', 'classicmedinova' ),
		'view_item' => __( 'View Custom Toolbar', 'classicmedinova' ),
		'view_items' => __( 'View Custom Toolbars', 'classicmedinova' ),
		'search_items' => __( 'Search Custom Toolbar', 'classicmedinova' ),
		'not_found' => __( 'Not found', 'classicmedinova' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'classicmedinova' ),
		'featured_image' => __( 'Featured Image', 'classicmedinova' ),
		'set_featured_image' => __( 'Set featured image', 'classicmedinova' ),
		'remove_featured_image' => __( 'Remove featured image', 'classicmedinova' ),
		'use_featured_image' => __( 'Use as featured image', 'classicmedinova' ),
		'insert_into_item' => __( 'Insert into Custom Toolbar', 'classicmedinova' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Custom Toolbar', 'classicmedinova' ),
		'items_list' => __( 'Custom Toolbars list', 'classicmedinova' ),
		'items_list_navigation' => __( 'Custom Toolbars list navigation', 'classicmedinova' ),
		'filter_items_list' => __( 'Filter Custom Toolbars list', 'classicmedinova' ),
	);
	$args = array(
		'label' => __( 'Custom Toolbar', 'classicmedinova' ),
		'description' => __( '', 'classicmedinova' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-network',
		'supports' => array('title'),
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
	register_post_type( 'customtoolbar', $args );

}
add_action( 'init', 'create_customtoolbar_cpt', 0 );

?>