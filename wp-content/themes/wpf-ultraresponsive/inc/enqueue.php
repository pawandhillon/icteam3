<?php


function wpf_ultraresponsive_scripts() {
   
	/******* Register Scripts ****/
	
   // comment ajax reply
   if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );    
   
   // preloader
   if( get_theme_mod( 'ultraResponsive_preloader_activation','enable' ) == 'enable' ) wp_enqueue_script( 'wpf_ultraresponsive_preloaderjs', get_template_directory_uri() . '/js/queryloader2.js', false, null, true );
   
   // wow animation
	if( get_theme_mod( 'ultraResponsive_animation_activation', 'enable') == 'enable' ) { 
	wp_enqueue_script( 'wpf_ultraresponsive_wowjs', get_template_directory_uri() . '/js/wow.js', false, null, true );
	wp_enqueue_script( 'wpf_ultraresponsive_wow_activation', get_template_directory_uri() . '/js/wow_activation.js', false, null, true );
	}
	
	wp_enqueue_script( 'wpf_ultraresponsive_bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', false, null, true );
	wp_enqueue_script( 'wpf_ultraresponsive_customjs', get_template_directory_uri() . '/js/custom.js', false, null, true );
	
	// IE Fallbacks
	wp_enqueue_script( 'ie_html5shiv', get_template_directory_uri(). '/js/html5shiv.js', false, '3.7.3', false);
	wp_script_add_data( 'ie_html5shiv', 'conditional', 'lt IE 9' );
	wp_enqueue_script( 'ie_respond', get_template_directory_uri(). '/js/respond.js', false, null, false);
	wp_script_add_data( 'ie_respond', 'conditional', 'lt IE 9' );	



    /******* Register Styles ****/
	
    wp_enqueue_style( 'wpf_ultraresponsive_bootstrap', get_template_directory_uri() . '/css/bootstrap.css','all' );
    wp_enqueue_style( 'wpf_ultraresponsive_fontawesome', get_template_directory_uri() . '/css/font-awesome.css','all' );
    if( get_theme_mod( 'ultraResponsive_animation_activation','enable') == 'enable' ) wp_enqueue_style( 'wpf_ultraresponsive_animation', get_template_directory_uri() . '/css/animate.css','all' );
    wp_enqueue_style( 'wpf_ultraresponsive_preloader', get_template_directory_uri() . '/css/queryLoader.css','all' );
	wp_enqueue_style( 'wpf_ultraresponsive_rtl', get_template_directory_uri() . '/rtl.css','all' );	
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css','all' );
	$protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'wpf_ultraresponsive_googlefont_merriweather',"$protocol://fonts.googleapis.com/css?family=Merriweather",'all' );
    wp_enqueue_style( 'wpf_ultraresponsive_googlefont_varela',"$protocol://fonts.googleapis.com/css?family=Varela",'all' );		
    wp_enqueue_style( 'wpf_ultraresponsive_googlefont_roboto',"$protocol://fonts.googleapis.com/css?family=Roboto",'all' );
	

}


if (!is_admin()) add_action("wp_enqueue_scripts", "wpf_ultraresponsive_scripts", 11);


?>