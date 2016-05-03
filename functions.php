<?php

/**
 * Enqueue scripts and styles.
 */
	function bein_scripts() {
		// Load our main stylesheet.
		wp_enqueue_style( 'bein-main', get_stylesheet_directory_uri() . '/assets/css/app.min.css', array(), null );
	}
	add_action( 'wp_enqueue_scripts', 'bein_scripts' );


	add_action( 'wp_enqueue_scripts', 'bid_load_javascript_files' );
	function bid_load_javascript_files() {

    wp_deregister_script('jquery');

    // Register the library again from Google's CDN
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), null, false );

	wp_enqueue_script( 'tether', get_stylesheet_directory_uri() . '/assets/js/tether.min.js', array(), '1.1', true );    

		wp_enqueue_script( 'app', get_stylesheet_directory_uri() . '/assets/js/app-min.js', array( 'jquery' ), '1.0', true );

	}



// Add page title to body class
	function bid_add_slug_body_class( $classes ) {
		global $post;
		if ( isset( $post ) ) {
			$classes[] = $post->post_type . '-' . $post->post_name;
		}
		return $classes;
	}
	add_filter( 'body_class', 'bid_add_slug_body_class' );





// REGISTER NAV AND MENUS
    require_once('wp_bootstrap_navwalker.php');
	register_nav_menus( array(
	    'primary' => __( 'Primary Menu', 'ngiv' ),
		 'secondary' => __( 'Secondary Menu', 'ngiv' ),
		 'mobile' => __( 'Mobile Menu', 'ngiv' ),
	) );


    require_once('inc/quickcontent.php');




function sdtheme_setup() {

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1920, 0, true );
}

add_action( 'after_setup_theme', 'sdtheme_setup' );



if(!function_exists('get_post_top_ancestor_id')){
/**
 * Gets the id of the topmost ancestor of the current page. Returns the current
 * page's id if there is no parent.
 * 
 * @uses object $post
 * @return int 
 */
function get_post_top_ancestor_id(){
    global $post;
    
    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    
    return $post->ID;
}}




register_new_royalslider_files(1); 




/// TESTING? DISABLE AUTO P???


remove_filter('the_content', 'wpautop');



// LOSE ADMIN BAR FOR ALL EXCEPT ADMINS //

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}


function disable_dashboard_widgets() {  
  
    remove_meta_box('dashboard_right_now', 'dashboard', 'core');  
    remove_meta_box('wpe_dify_news_feed', 'dashboard', 'core');  
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');  
    remove_meta_box('dashboard_plugins', 'dashboard', 'core');  
    remove_meta_box('dashboard_quick_press', 'dashboard', 'core');  
}  
add_action('wp_dashboard_setup', 'disable_dashboard_widgets');



/*
* Remove "News from Modern Tribe" widget from dashboard
*/
function remove_tribe_dashboard_widget() {
remove_meta_box('tribe_dashboard_widget', 'dashboard', 'normal');
}
add_action('wp_dashboard_setup', 'remove_tribe_dashboard_widget');


// ADD PAGINATION

require_once('inc/wp_bootstrap_pagination.php');

function customize_wp_bootstrap_pagination($args) {

    $args['previous_string'] = '<small><span class="icon-controller-fast-backward"></span></small>';
    $args['next_string'] = '<small><span class="icon-controller-fast-forward"></span></small>';

    return $args;
}
add_filter('wp_bootstrap_pagination_defaults', 'customize_wp_bootstrap_pagination');



// ADD WHITE LABELING TO ADMIN

// Custom WordPress Admin Color Scheme

// function admin_css() {

// wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/library/css/admin.css' );
// wp_enqueue_style( 'admin_font_css', get_template_directory_uri() . '/library/css/fonts.css' );
// }

// add_action('admin_print_styles', 'admin_css' );


