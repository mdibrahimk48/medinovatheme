<?php

if(!function_exists('mymedicalservice')){
    function mymedicalservice(){

        $labels = array(
            'name'                  => __('Medical Services', 'classicmedinova'),
            'singular_name'         => 'Test', 
            'add_new_item'          => __('Add New Services', 'classicmedinova'),
            'search_items'          => __('Search Services', 'classicmedinova'),
            'all_items'             => __('All Services', 'classicmedinova'),
            'not_found'             => __('No Services Found!', 'classicmedinova'),
        );

        $arg = array(
            'labels'                => $labels,
            'public'                => true,
            'supports'              => array('title','editor','thumbnail','custom-fields'),
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-portfolio',
        );
        register_post_type('mdservice', $arg);

    }
    
}

add_action('init', 'mymedicalservice');


function wporg_register_taxonomy_course() {
    $labels = array(
        'name'              => _x( 'Courses', 'taxonomy general name' ),
        'singular_name'     => _x( 'Course', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Courses' ),
        'all_items'         => __( 'All Courses' ),
        'parent_item'       => __( 'Parent Course' ),
        'parent_item_colon' => __( 'Parent Course:' ),
        'edit_item'         => __( 'Edit Course' ),
        'update_item'       => __( 'Update Course' ),
        'add_new_item'      => __( 'Add New Course' ),
        'new_item_name'     => __( 'New Course Name' ),
        'menu_name'         => __( 'Course' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'course' ],
    );
    register_taxonomy( 'course', [ 'post' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_course' );

?>