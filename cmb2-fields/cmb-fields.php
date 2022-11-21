<?php

add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */


function cmb2_sample_metaboxes() {
	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'test_metabox',
		'title'         => __( 'Test Metabox', 'classicmedinova' ),
		'object_types'  => array( 'page', 'customtestimonial' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$cmb->add_field( array(
		'name' => esc_html__( 'Please Enter Person Company', 'classicmedinova' ),
		'desc' => esc_html__( 'Person Company Field', 'classicmedinova' ),
		'id'   => 'tcompany',
		'type' => 'text',
		dfgdgd

		//
		'repeatable' => true,
		// 'column' => array(
		// 	'name'     => esc_html__( 'Column Title', 'cmb2' ), // Set the admin column title
		// 	'position' => 2, // Set as the second column.
		// );
		// 'display_cb' => 'yourprefix_display_text_small_column', // Output the display of the column values through a callback.
	) );

	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => 'yourprefix_group_metabox',
		'title'        => esc_html__( 'Social Icon Group', 'classicmedinova' ),
		'object_types' => array( 'customteam' ),
	) );

	// $group_field_id is the field id string, so in this case: 'yourprefix_group_demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => 'cteam',
		'type'        => 'group',
		'description' => esc_html__( 'Generates reusable form entries for Social Fields', 'classicmedinova' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Entry {#}', 'classicmedinova' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Add Another Entry', 'classicmedinova' ),
			'remove_button'  => esc_html__( 'Remove Entry', 'classicmedinova' ),
			//'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Entry Icon Class', 'classicmedinova' ),
		'id'         => 'iconclass',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'URL', 'classicmedinova' ),
		'id'          => 'iconurl',
		'type'        => 'text',
	) );
}

?>