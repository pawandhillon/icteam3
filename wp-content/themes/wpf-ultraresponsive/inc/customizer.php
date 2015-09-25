<?php 

function wpf_ultraresponsive_customizer_register( $wp_customize ) {
   
 
$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';

////////////////////////////   
// theme option panel
///////////////////////////
   
$wp_customize->add_panel( 'wpf_ultraresponsive_theme_option', array(
    'title' => __('WpF ultraResponsive', 'ultraresponsive'),
    'description' => __('Change theme settings from below like logo, banner, colors, social, footer text etc', 'ultraresponsive'),
    'priority' => 10,
) );
   

///////////////////
// logo section 
////////////////////


$wp_customize->add_section( 'logo_favicon_section' , array(
    'title'      => __( 'Logo & Favicon', 'ultraresponsive' ),
	'panel' => 'wpf_ultraresponsive_theme_option',
) );


// logo settings
$wp_customize->add_setting( 'ultraResponsive_logo_uploader' , array(
	'default'     => '',
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ultraResponsive_logo_uploader', array(
	'label'        => __( 'Upload Your Logo. Best size: Width is your choice & Height is 30px', 'ultraresponsive' ),
	'section'    => 'logo_favicon_section',
	'settings'   => 'ultraResponsive_logo_uploader',
) ) );



// favicon settings
$wp_customize->add_setting( 'ultraResponsive_favicon_uploader' , array(
	'default'     => '',
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ultraResponsive_favicon_uploader', array(
	'label'        => __( 'Upload Your Favicon (16x x 16x).', 'ultraresponsive' ),
	'section'    => 'logo_favicon_section',
	'settings'   => 'ultraResponsive_favicon_uploader',
) ) );


///////////////////////////
// Banner Title 
////////////////////////



$wp_customize->add_section( 'banner_section' , array(
    'title'      => __( 'Header Image Title', 'ultraresponsive' ),
	'priority' => 70,
) );


// Banner Title

$wp_customize->add_setting( 'ultraResponsive_banner_title' , array(
	'default'     => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ultraResponsive_banner_title', array(
	'label'        => __( 'Put Banner Title.', 'ultraresponsive' ),
	'section'    => 'banner_section',
	'settings'   => 'ultraResponsive_banner_title',
) ) );


//////////////////////////////
// Preloader enable/disable
///////////////////////////////



$wp_customize->add_section( 'ultraResponsive_preloader' , array(
    'title'      => __( 'Disable Preloader', 'ultraresponsive' ),
	'panel' => 'wpf_ultraresponsive_theme_option',
) );


$wp_customize->add_setting(
    'ultraResponsive_preloader_activation',
    array(
        'default' => 'enable',
		'sanitize_callback' => 'wpf_ultraresponsive_sanitize_choices',
    )
);
 
$wp_customize->add_control(
    'ultraResponsive_preloader_activation',
    array(
        'type' => 'radio',
        'label' => '',
        'section' => 'ultraResponsive_preloader',
		'settings'   => 'ultraResponsive_preloader_activation',
        'choices' => array(
            'enable' => __( 'Enable', 'ultraresponsive' ),
            'disable' => __( 'Disable', 'ultraresponsive' ),
        ),
    )
);


/////////////////////////////////
// WoW animation enable/disable
//////////////////////////////////



$wp_customize->add_section( 'ultraResponsive_animation' , array(
    'title'      => __( 'Disable Animation', 'ultraresponsive' ),
	'panel' => 'wpf_ultraresponsive_theme_option',
) );


$wp_customize->add_setting(
    'ultraResponsive_animation_activation',
    array(
        'default' => 'enable',
		'sanitize_callback' => 'wpf_ultraresponsive_sanitize_choices',
    )
);
 
$wp_customize->add_control(
    'ultraResponsive_animation_activation',
    array(
        'type' => 'radio',
        'label' => __( 'Enable or disable smooth animations', 'ultraresponsive' ),
        'section' => 'ultraResponsive_animation',
		'settings'   => 'ultraResponsive_animation_activation',
        'choices' => array(
            'enable' => __( 'Enable', 'ultraresponsive' ),
            'disable' => __( 'Disable', 'ultraresponsive' ),
        ),
    )
);

/////////////////////////////////
// Sidebar Settings
//////////////////////////////////



$wp_customize->add_section( 'ultraResponsive_sidebar' , array(
    'title'      => __( 'Choose Sidebar', 'ultraresponsive' ),
	'panel' => 'wpf_ultraresponsive_theme_option',
) );


$wp_customize->add_setting(
    'ultraResponsive_sidebar_settings',
    array(
        'default' => 'right',
		'sanitize_callback' => 'wpf_ultraresponsive_sanitize_choices',
    )
);
 
$wp_customize->add_control(
    'ultraResponsive_sidebar_settings',
    array(
        'type' => 'radio',
        'label' => __( 'Select your sidebar. These will be applied to your home, post, archive, search, author etc templates.', 'ultraresponsive' ),
        'section' => 'ultraResponsive_sidebar',
		'settings'   => 'ultraResponsive_sidebar_settings',
        'choices' => array(
            'left' => __( 'Left', 'ultraresponsive' ),
            'right' => __( 'Right', 'ultraresponsive' ),
        ),
    )
);


/////////////////////////
// Theme Color Scheme
/////////////////////////

$wp_customize->add_section( 'theme_color_section' , array(
    'title'      => __( 'Theme Colors', 'ultraresponsive' ),
	'panel' => 'wpf_ultraresponsive_theme_option',
) );


// main color settings
$wp_customize->add_setting( 'wpf_ultraresponsive_theme_color' , array(
	'default'     => '#78ADC9',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpf_ultraresponsive_theme_color', array(
	'label'        => __( 'Select Color Scheme', 'ultraresponsive' ),
	'section'    => 'theme_color_section',
	'settings'   => 'wpf_ultraresponsive_theme_color',
) ) );


// Header/Footer color settings
$wp_customize->add_setting( 'wpf_ultraresponsive_theme_header_footer_color' , array(
	'default'     => '#313B3D',
	'sanitize_callback' => 'sanitize_hex_color',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpf_ultraresponsive_theme_header_footer_color', array(
	'label'        => __( 'Select Header & Footer Color', 'ultraresponsive' ),
	'section'    => 'theme_color_section',
	'settings'   => 'wpf_ultraresponsive_theme_header_footer_color',
) ) );


////////////////////
// Footer section
////////////////////

$wp_customize->add_section( 'footer_section' , array(
    'title'      => __( 'Footer Setting', 'ultraresponsive' ),
	'panel' => 'wpf_ultraresponsive_theme_option',
) );


// footer text 

$wp_customize->add_setting( 'ultraResponsive_footer_text' , array(
	'default'     => __( 'Footer text here.', 'ultraresponsive' ),
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ultraResponsive_footer_text', array(
	'label'        => __( 'Put your footer text here.', 'ultraresponsive' ),
	'section'    => 'footer_section',
	'settings'   => 'ultraResponsive_footer_text',
) ) );



// footer Social 


// facebook
$wp_customize->add_setting( 'footer_social_facebook' , array(
	'default'     => '',
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_social_facebook', array(
	'label'        => __( 'Facebook Url', 'ultraresponsive' ),
	'section'    => 'footer_section',
	'settings'   => 'footer_social_facebook',
) ) );

//twitter
$wp_customize->add_setting( 'footer_social_twitter' , array(
	'default'     => '',
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_social_twitter', array(
	'label'        => __( 'Twitter Url', 'ultraresponsive' ),
	'section'    => 'footer_section',
	'settings'   => 'footer_social_twitter',
) ) );


//google+ 
$wp_customize->add_setting( 'footer_social_googleplus' , array(
	'default'     => '',
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_social_googleplus', array(
	'label'        => __( 'Google+ Url', 'ultraresponsive' ),
	'section'    => 'footer_section',
	'settings'   => 'footer_social_googleplus',
) ) );


//linkedin 
$wp_customize->add_setting( 'footer_social_linkin' , array(
	'default'     => '',
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_social_linkin', array(
	'label'        => __( 'LinkedIn Url', 'ultraresponsive' ),
	'section'    => 'footer_section',
	'settings'   => 'footer_social_linkin',
) ) );


//youtube 
$wp_customize->add_setting( 'footer_social_youtube' , array(
	'default'     => '',
	'sanitize_callback' => 'esc_url_raw',
) );


$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_social_youtube', array(
	'label'        => __( 'Youtube Url', 'ultraresponsive' ),
	'section'    => 'footer_section',
	'settings'   => 'footer_social_youtube',
) ) );


   
}

add_action( 'customize_register', 'wpf_ultraresponsive_customizer_register' );

////////////////////////////////////
// sanitizing radio values
////////////////////////////////////

function wpf_ultraresponsive_sanitize_choices( $input, $setting ) {
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );
 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}


/****************************************
** Load scripts/stylesheets in header**
* Load choosen theme color
* Load preloader if it's enabled in customizer
* Header Banner will load if selected in customizer
 *****************************************/

function wpf_ultraresponsive_customize_css()
{	

    ?>
		<!-- banner & header/footer backgroud -->
         <style type="text/css">
		 
             <?php  if(get_header_image()) : ?>
			 #imgBanner{ background-image: url("<?php echo esc_url(get_header_image()); ?>") !important;}
			 <?php endif;?>
			 
			 .navbar-default,
			 .navbar-nav > li > .dropdown-menu,
			 .footer_top{ 
				background-color: <?php echo get_theme_mod( 'wpf_ultraresponsive_theme_header_footer_color', '#313B3D'); ?> !important; 
			 }
			 
			 #imgBanner h2{
				 color: #<?php echo get_header_textcolor();?>;
			 }

			 
         </style>
		
		<!-- Preloader -->
		 <?php if ( get_theme_mod( 'ultraResponsive_preloader_activation','enable' ) == 'enable' ) : ?>
		 <script type="text/javascript">
			  window.addEventListener('DOMContentLoaded', function() {
				new QueryLoader2(document.querySelector("body"), {
					barColor: "#efefef",
					backgroundColor: "#111",
					percentage: true,
					barHeight: 1,
					minimumTime: 200,
					fadeOutTime: 1000
				});
			});			
		 </script>
	   <?php endif; ?>	   
		 
	
    <?php
	
	/* Theme color scheme */
	
	$theme_color = '<style type="text/css">
	
	
.navbar-default .navbar-brand span,
.navbar-default .navbar-nav > li > a:focus,
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav .open .dropdown-menu > li > a,
.news_tab .media-body > a:hover,
.comment_navigation a:hover:hover,
.comment_navigation span,
.course_more:hover,.course_more:focus,
.singCourse_title a:hover,
.singCourse_price,
.footer_bootomLeft a,
.pagination li a,
.footer_bootomRight p a,
.single_sidebar > h2,
.related_post > h2,
.comment-reply-link:hover,
#cancel-comment-reply-link,
.logged-in-as a:hover,
.single_page_content_container a,
.author_details h2 a:hover
{
  color: '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
}

.bypostauthor{
	border-left: 5px solid '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
}


.dropdown-menu > li > a:focus,
.dropdown-menu > li > a:hover {
  color: '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').' !important;  
}


.navbar-default .navbar-toggle .icon-bar,
.titile:after,.feed_tabs li a:hover,
.title_area span,
.whyus_icon,
.scrollup:hover,
.pagination li a:hover,
.pagination li a:focus,
.course_table thead,
.single_sidebar input[type="submit"],
#respond .form-submit #submit
{
  background-color: '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
}


.navbar-default .navbar-nav > .open > a, 
.navbar-default .navbar-nav > .open > a:focus, 
.navbar-default .navbar-nav > .open > a:hover {
  background-color: transparent;
  color: '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
} 


.feed_tabs{
	border-bottom: 2px solid '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
}


.feed_tabs li.active a,
.feed_tabs li.active a:hover,
.feed_tabs li.active a:focus{
  border:2px solid;
  color: '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').' !important; 
  border-color: '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').' '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').' transparent;
}


.see_all:hover, 
.see_all:focus{
  border-color:'.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
  color: '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';  
}


.single_blog_archive {
  border-bottom: 3px solid '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';  
}


.blog_title a:hover,
.blog_commentbox > p a:hover,
.blog_readmore:hover,
.blog_readmore:focus,
.single_blog blockquote>span,
.single_blog ul li > span,
.error_page_content p>a:hover,
.error_page_content h1,
.footer_widget_nav li a,
.singlecourse_price,
.related_course > h2,
.single_sidebar > ul > li>a:hover,
.single_sidebar > ul > li>a:focus,
.blog_readmore:hover::before,
.blog_readmore:hover::after,
.blog_readmore:focus::before,
.blog_readmore:focus::after,
.tagcloud a:hover
{
  color: '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
} 


.prev_post:hover{
  color: '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
  border-color: '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').'; 
}


.next_post:hover{
  color: '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
  border-color: '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
}


.error_page_content h1:after,
.error_page_content h1:before {
  border: 2px solid '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
}


.error_page_content p:before {
  border-top: 1px solid '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
}


.error_page_content p:after {
  border-top: 1px solid '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
}


.error_page_content p {
  border-bottom: 2px solid '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
  border-top: 2px solid '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
} 


.wp-form-control:focus{
  border: 1px solid '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
}


.wpcf7-submit {
  border: 1px solid '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
  color: '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';  
}


.wpcf7-submit:hover,
.wpcf7-submit:focus{
  background-color: '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
  color: #ffffff;
} 


.sticky{
	border-left: 3px solid '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
	border-right: 3px solid '.get_theme_mod('wpf_ultraresponsive_theme_color','#78ADC9').';
	border-bottom:0px;
}	
	
	
	
	</style>';
	
	echo $theme_color;
	

}
add_action( 'wp_head', 'wpf_ultraresponsive_customize_css');



/****************************************
 * This outputs the javascript needed to automate the live settings preview.
 * Also keep in mind that this function isn't necessary unless your settings 
 * are using 'transport'=>'postMessage' instead of the default 'transport'
 * => 'refresh'
 * 
 * Used by hook: 'customize_preview_init'
 *****************************************/

function wpf_ultraresponsive_customizer_live_preview() {

	wp_enqueue_script(
		'ultraresponsive-theme-customizer',
		get_template_directory_uri() . '/js/ultraresponsive_customizer.js',
		array( 'jquery', 'customize-preview' ),
		'',
		true
	);

} 
add_action( 'customize_preview_init', 'wpf_ultraresponsive_customizer_live_preview' );

?>