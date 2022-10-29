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


function wporg_register_taxonomy_category() {
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category' ),
        'menu_name'         => __( 'Category' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'mdservice' ],
    );
    register_taxonomy( 'category', [ 'mdservice' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_category' );

?>