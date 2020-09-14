<?php 
/*
* Turn Off Update Notification
*/

function filter_plugin_updates( $value ) {
    unset( $value->response['advanced-custom-fields-pro-master/acf.php'] );
    return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );

/*
* Increase size limit upload
*/
@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '400' );


/*
* WP Login Logo, Link and Tooltip
*/

function my_login_logo_one() {
    ?> 
    <style type="text/css"> 
    body.login div#login h1 a {
    background-image: url(<?php echo get_template_directory_uri(); ?>/assets/image/logo.png); 
    width: 300px;
    height: 100px;
    background-repeat: no-repeat;
    background-position: top center;
    background-size: contain;
    margin-bottom:0;
    } 
    .login form {
    margin-top:0 !important;
    }
    </style>
    <?php 
} 
add_action( 'login_enqueue_scripts', 'my_login_logo_one' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'App Lab';

}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/**
 * WooCommerce Theme Support
 */

add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

/**
 * Add Custom Theme Settings
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	
	
}

/*
* Creating a function to create our CPT FAQ
*/
 
function custom_post_type_faq() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'FAQ', 'Post Type General Name', 'applab' ),
        'singular_name'       => _x( 'Faq', 'Post Type Singular Name', 'applab' ),
        'menu_name'           => __( 'FAQ', 'applab' ),
        'parent_item_colon'   => __( 'Parent Faq', 'applab' ),
        'all_items'           => __( 'All FAQ', 'applab' ),
        'view_item'           => __( 'View Faq', 'applab' ),
        'add_new_item'        => __( 'Add New Faq', 'applab' ),
        'add_new'             => __( 'Add New', 'applab' ),
        'edit_item'           => __( 'Edit Faq', 'applab' ),
        'update_item'         => __( 'Update Faq', 'applab' ),
        'search_items'        => __( 'Search Faq', 'applab' ),
        'not_found'           => __( 'Not Found', 'applab' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'applab' ),
    );
        
// Set other options for Custom Post Type
        
    $args = array(
        'label'               => __( 'FAQ', 'applab' ),
        'description'         => __( 'Faq news and reviews', 'applab' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    
    );
        
    // Registering your Custom Post Type
    register_post_type( 'FAQ', $args );
    
}
    
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
    
add_action( 'init', 'custom_post_type_faq', 0 );


/*
* Creating a function to create our CPT TESTIMONIALS
*/
 
function custom_post_type_testimonials() {

    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Testimonials', 'Post Type General Name', 'applab' ),
            'singular_name'       => _x( 'Testimonials', 'Post Type Singular Name', 'applab' ),
            'menu_name'           => __( 'Testimonials', 'applab' ),
            'parent_item_colon'   => __( 'Parent Testimonials', 'applab' ),
            'all_items'           => __( 'All Testimonials', 'applab' ),
            'view_item'           => __( 'View Testimonials', 'applab' ),
            'add_new_item'        => __( 'Add New Testimonials', 'applab' ),
            'add_new'             => __( 'Add New', 'applab' ),
            'edit_item'           => __( 'Edit Testimonials', 'applab' ),
            'update_item'         => __( 'Update Testimonials', 'applab' ),
            'search_items'        => __( 'Search Testimonials', 'applab' ),
            'not_found'           => __( 'Not Found', 'applab' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'applab' ),
        );
            
    // Set other options for Custom Post Type
            
        $args = array(
            'label'               => __( 'Testimonials', 'applab' ),
            'description'         => __( 'Testimonials news and reviews', 'applab' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
        
        );
            
        // Registering your Custom Post Type
        register_post_type( 'testimonials', $args );
        
    }
        
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
        
    add_action( 'init', 'custom_post_type_testimonials', 0 );