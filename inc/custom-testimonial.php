<?php

// Register Custom Post Type Testimonial
function create_testimonial_cpt() {

	$labels = array(
		'name' => _x( 'Testimonials', 'Post Type General Name', 'classicmedinova' ),
		'singular_name' => _x( 'Testimonial', 'Post Type Singular Name', 'classicmedinova' ),
		'menu_name' => _x( 'Testimonials', 'Admin Menu text', 'classicmedinova' ),
		'name_admin_bar' => _x( 'Testimonial', 'Add New on Toolbar', 'classicmedinova' ),
		'archives' => __( 'Testimonial Archives', 'classicmedinova' ),
		'attributes' => __( 'Testimonial Attributes', 'classicmedinova' ),
		'parent_item_colon' => __( 'Parent Testimonial:', 'classicmedinova' ),
		'all_items' => __( 'All Testimonials', 'classicmedinova' ),
		'add_new_item' => __( 'Add New Testimonial', 'classicmedinova' ),
		'add_new' => __( 'Add New', 'classicmedinova' ),
		'new_item' => __( 'New Testimonial', 'classicmedinova' ),
		'edit_item' => __( 'Edit Testimonial', 'classicmedinova' ),
		'update_item' => __( 'Update Testimonial', 'classicmedinova' ),
		'view_item' => __( 'View Testimonial', 'classicmedinova' ),
		'view_items' => __( 'View Testimonials', 'classicmedinova' ),
		'search_items' => __( 'Search Testimonial', 'classicmedinova' ),
		'not_found' => __( 'Not found', 'classicmedinova' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'classicmedinova' ),
		'featured_image' => __( 'Featured Image', 'classicmedinova' ),
		'set_featured_image' => __( 'Set featured image', 'classicmedinova' ),
		'remove_featured_image' => __( 'Remove featured image', 'classicmedinova' ),
		'use_featured_image' => __( 'Use as featured image', 'classicmedinova' ),
		'insert_into_item' => __( 'Insert into Testimonial', 'classicmedinova' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'classicmedinova' ),
		'items_list' => __( 'Testimonials list', 'classicmedinova' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'classicmedinova' ),
		'filter_items_list' => __( 'Filter Testimonials list', 'classicmedinova' ),
	);
	$args = array(
		'label' => __( 'Testimonial', 'classicmedinova' ),
		'description' => __( '', 'classicmedinova' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-aside',
		'supports' => array('title', 'editor', 'thumbnail', 'author', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 7,
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
	register_post_type( 'customtestimonial', $args );

}
add_action( 'init', 'create_testimonial_cpt', 0 );

?>