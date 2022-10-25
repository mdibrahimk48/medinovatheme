<?php

add_action( 'cmb2_admin_init', 'cmb2_price_metaboxes' );
/**
 * Define the metabox and field configurations.
 */


function cmb2_price_metaboxes() {
	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'price_metabox',
		'title'         => __( 'Price Metabox', 'classicmedinova' ),
		'object_types'  => array( 'page', 'customprice' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$cmb->add_field( array(
		'name' => esc_html__( 'Please Enter Yearly Price', 'classicmedinova' ),
		'desc' => esc_html__( 'Price Field', 'classicmedinova' ),
		'id'   => 'price',
		'type' => 'text',
		// 'repeatable' => true,
		// 'column' => array(
		// 	'name'     => esc_html__( 'Column Title', 'cmb2' ), // Set the admin column title
		// 	'position' => 2, // Set as the second column.
		// );
		// 'display_cb' => 'yourprefix_display_text_small_column', // Output the display of the column values through a callback.
	) );

    $cmb->add_field( array(
		'name' => esc_html__( 'Please Enter Services', 'classicmedinova' ),
		'desc' => esc_html__( 'Services Field', 'classicmedinova' ),
		'id'   => 'pservices',
		'type' => 'text',

		//
		'repeatable' => true,
		// 'column' => array(
		// 	'name'     => esc_html__( 'Column Title', 'cmb2' ), // Set the admin column title
		// 	'position' => 2, // Set as the second column.
		// );
		// 'display_cb' => 'yourprefix_display_text_small_column', // Output the display of the column values through a callback.
	) );
}

?>