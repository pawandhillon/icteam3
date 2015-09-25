<?php 

/////////////////////
// Load enqueue
//////////////////////


include_once( 'inc/enqueue.php' );


/////////////////////
// Customizer
//////////////////////


include_once( 'inc/customizer.php' );

///////////////////////////
// comment lists
//////////////////////////

include_once( 'inc/wp_list_comments.php' );


//////////////////////
// TGM
//////////////////////

require_once('inc/tgm/class-tgm-plugin-activation.php');
require_once('inc/tgm/example.php');



/////////////////////////////////////////////////
// push header 30px bottom if toolbar is showing 
/////////////////////////////////////////////////

if ( is_admin_bar_showing() ) {

function wpf_ultraresponsive_push_bottom_header_area(){

    ?>
	
	<style type="text/css">
		.navbar{margin-top:30px;}
	</style>
	
	<?php

}
add_action( 'wp_head', 'wpf_ultraresponsive_push_bottom_header_area' );

}



///////////////////////////////////////	
// Register Custom Navigation Walker
//////////////////////////////////////

require_once('inc/wp_bootstrap_navwalker.php');

///////////////////////////////////////////////////////////////
// // Numeric Page Navi (built into the theme by default)
/////////////////////////////////////////////////////////////

function wpf_ultraresponsive_page_navi() {
  global $wp_query, $paged;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo '<nav class="pagination">';
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '<i class="fa fa-chevron-left"></i>',
    'next_text'    => '<i class="fa fa-chevron-right"></i>',
    'type'         => 'list',
    'end_size'     => 3,
    'mid_size'     => 3
  ) );
  echo '</nav>';
} /* end page navi */



/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since WpF ultraResponsive 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 750;
}


if ( ! function_exists( 'wpf_ultraresponsive_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function wpf_ultraresponsive_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain('ultraresponsive', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	
	
	/*
	 * Custom background image support
	 */		
	add_theme_support( 'custom-background', array( 'default-color' => '#f6f6f6') );	
	

	/*
	 * Custom Header image support
	 */	
	 
	$header_args = array(
		'width'                  => 1920,
		'height'                 => 300,
		'flex-height'            => false,
		'flex-width'             => true,
		'uploads'                => true,
		'random-default'         => true,
		'header-text'            => true,
	);
	add_theme_support( 'custom-header', $header_args );	
	
	
	
	/**
	 * Apply theme's stylesheet to the visual editor.
	 *
	 * @uses add_editor_style() Links a stylesheet to visual editor
	 * @uses get_stylesheet_uri() Returns URI of theme stylesheet
	 */
	 
	add_theme_support('editor_style');
	add_editor_style( 'css/editor-style.css' );
	
	
	/*** primary menu  ***/

	register_nav_menu( 'primary-menu', __( 'Primary Menu', 'ultraresponsive' ) );	

	

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1024, 570, true ); // default size
	add_image_size( 'wpf-ultraresponsive-post-image', 750, 422, true ); // post-thumb

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
		


}
endif; // WpF_ultraResponsive_setup
add_action( 'after_setup_theme', 'wpf_ultraresponsive_setup' );



/**
 * Register widget area.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
 
function wpf_ultraresponsive_widgets_init() {	
	
	
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ultraresponsive' ),
		'id'            => 'ultraresponsive-primary-sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar', 'ultraresponsive' ),
		'before_widget' => '<div class="single_sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2><span class="fa fa-angle-double-right"></span> ',
		'after_title'   => '</h2>',
	) );	
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'ultraresponsive' ),
		'id'            => 'ultraresponsive-page-sidebar',
		'description'   => __( 'Add widgets here to appear in your Page sidebar', 'ultraresponsive' ),
		'before_widget' => '<div class="single_sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2><span class="fa fa-angle-double-right"></span> ',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'ultraresponsive' ),
		'id'            => 'ultraresponsive-footer-widgets',
		'description'   => __( 'Add widgets here to appear in your footer area', 'ultraresponsive' ),
		'before_widget' => '<div class="col-ld-3  col-md-3 col-sm-3"><div class="single_footer_widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );	
}
add_action( 'widgets_init', 'wpf_ultraresponsive_widgets_init' );



////////////////////////////////////
// added classes into post nav links
/////////////////////////////////////

add_filter('next_post_link', 'wpf_ultraresponsive_post_link_attributes_next');
add_filter('previous_post_link', 'wpf_ultraresponsive_post_link_attributes_previous');

function wpf_ultraresponsive_post_link_attributes_next($output) {
    $injection = 'class="next_post wow fadeInRight"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}

function wpf_ultraresponsive_post_link_attributes_previous($output) {
    $injection = 'class="prev_post wow fadeInLeft"';
    return str_replace('<a href=', '<a '.$injection.' href=', $output);
}


?>