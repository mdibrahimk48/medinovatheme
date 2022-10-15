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
            'menu_position'         => 66,
            'menu_icon'             => 'dashicons-portfolio',
        );
        register_post_type('mdservice', $arg);

    }
    
}

add_action('init', 'mymedicalservice');

?>