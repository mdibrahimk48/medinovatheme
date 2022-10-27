<?php

add_action( 'cmb2_init', 'cmb2_toolbar_metabox' );
function cmb2_toolbar_metabox() {

	$prefix = '_cmb_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'toolbar_metabox',
		'title'        => __( 'Metabox Title', 'classicmedinova' ),
		'object_types' => array( 'customtoolbar' ),
		'context'      => 'normal',
		'priority'     => 'high',
	) );

	$cmb->add_field( array(
		'name' => __( 'Enter Email', 'classicmedinova' ),
		'id' => $prefix . 'enter_email',
		'type' => 'text_email',
		'desc' => __( 'Email Filed', 'classicmedinova' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Social Icon Class', 'classicmedinova' ),
		'id' => $prefix . 'social_icon_class',
		'type' => 'text',
		'desc' => __( 'Enter Social Icon Class', 'classicmedinova' ),
		'repeatable' => true,
	) );

}

?>