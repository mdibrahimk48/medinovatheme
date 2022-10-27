<?php

add_action('after_setup_theme','medinovatheme');

if(!function_exists('medinovatheme')){

    function medinovatheme(){
	/**
	 * Make theme available for translation.
	 * Translations can be placed in the /languages/ directory.
	 */
    load_theme_textdomain( 'classicmedinova', get_template_directory() .'/languages' );

    add_theme_support('post-formats', array ('aside','link','gallery','qoute','video'));
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array('style','script', ) );
    add_theme_support( 'automatic-feed-links' );


        if(!function_exists('medinovathemescript')){

            function medinovathemescript(){

                wp_enqueue_style( 'style', get_stylesheet_uri() );

                // <!-- Google Fonts CDN Link --> 
                wp_register_style( 'fontlink', 'https://fonts.gstatic.com' );
                wp_enqueue_style('fontlink');
                
                wp_register_style( 'fontlink2', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap' );
                wp_enqueue_style('fontlink2');

                // <!-- ICON CDN Link --> 
                wp_register_style( 'iconcdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css' );
                wp_enqueue_style('iconcdn');
                
                wp_register_style( 'iconcdn2', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css' );
                wp_enqueue_style('iconcdn2');


                // <!-- Library Link --> 
                wp_enqueue_style( 'library1', get_template_directory_uri() .'/lib/owlcarousel/assets/owl.carousel.min.css', array(), null, 'all');
                wp_enqueue_style( 'library2', get_template_directory_uri() .'/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css', array(), null, 'all');


                // <!-- Customized Bootstrap Stylesheet -->
                wp_enqueue_style( 'bscss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null, 'all');

                // <!-- Template Stylesheet -->               
                wp_enqueue_style( 'tempcss', get_template_directory_uri() . '/css/style.css', array(), null, 'all');



                // <!-- /.footer-->
                wp_register_script( 'jquery1', 'https://code.jquery.com/jquery-3.4.1.min.js' );
                wp_enqueue_script('jquery1');

                wp_register_script( 'jquery2', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js' );
                wp_enqueue_script('jquery2');



                // <!-- Library Files -->
                wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/lib/easing/easing.min.js', null, null, true);
                wp_enqueue_script( 'waypointjs', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', null, null, true);
                wp_enqueue_script( 'owljs', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', null, null, true);
                wp_enqueue_script( 'tempusdominusjs', get_template_directory_uri() . '/lib/tempusdominus/js/moment.min.js', null, null, true);
                wp_enqueue_script( 'tempusdominusjs2', get_template_directory_uri() . '/lib/tempusdominus/js/moment-timezone.min.js', null, null, true);
                wp_enqueue_script( 'tempusdominusjs3', get_template_directory_uri() . '/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js', null, null, true);
                // <!-- Main JS -->
                wp_enqueue_script( 'jqueryjs', get_template_directory_uri() . '/js/main.js', null, null, true);
                
                
                if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                    wp_enqueue_script( 'comment-reply' );
                }
            
            }


            //Menu Class Function
            function add_menuclass($ulclass){
                return preg_replace('/<a /', '<a class="nav-item nav-link"', $ulclass);
            }
            add_filter('wp_nav_menu', 'add_menuclass'); 
        }

        add_action( 'wp_enqueue_scripts', 'medinovathemescript' );

    }

}

if(!function_exists('mymenu')){
    function mymenu(){
        register_nav_menus( array(
            'primary' => __('Primary Menu', 'classicmedinova'),
            'secondary' => __('Secondary Menu', 'classicmedinova')
        ) );
    }
}

add_action('init','mymenu');


//Post View Counter Function
function gt_get_post_view() {
    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
    return "$count views";
}
function gt_set_post_view() {
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int) get_post_meta( $post_id, $key, true );
    $count++;
    update_post_meta( $post_id, $key, $count );
}
function gt_posts_column_views( $columns ) {
    $columns['post_views'] = 'Views';
    return $columns;
}
function gt_posts_custom_column_views( $column ) {
    if ( $column === 'post_views') {
        echo gt_get_post_view();
    }
}
add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );


// Custom Post 
require_once get_template_directory() .'/inc/custom-post.php';
require_once get_template_directory() .'/inc/custom-testimonial.php';
require_once get_template_directory() .'/inc/custom-team.php';
require_once get_template_directory() .'/inc/custom-price.php';
require_once get_template_directory() .'/inc/custom-toolbar.php';
require_once get_template_directory() .'/inc/custom-shortcodes.php';

// CMB2
require_once get_template_directory() .'/inc/cmb2/init.php';
// require_once get_template_directory() .'/inc/cmb2/custom-example-functions.php';
require_once get_template_directory() .'/cmb2-fields/cmb-fields.php';
require_once get_template_directory() .'/cmb2-fields/cmb-price-fields.php';
require_once get_template_directory() .'/cmb2-fields/cmb-toolbar-fields.php';
?>