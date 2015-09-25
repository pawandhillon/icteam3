	<?php 
	
	/*************
	 * @package  		 WpF ultraResponsive
	 * @file     		 404.php
	 * @author   		 WpFreeware
	 * @Author Link 	 http://wpfreeware.com
	 * @license	 		 GPL 3.0 or Later
	 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
	 ***************/		
	
	get_header();?>
	

    
    <!--=========== BEGIN CONTENT SECTION ================-->
	
    <section id="errorpage">
      <div class="container">
	  
        <div class="error_page_content">
             <h1><?php _e('404', 'ultraresponsive'); ?></h1>
             <h2><?php _e('Sorry!', 'ultraresponsive'); ?></h2>
             <h3><?php _e('This page doesn\'t exist.', 'ultraresponsive'); ?></h3>
             <p class="wow fadeInLeftBig animated" style="visibility: visible; animation-name: fadeInLeftBig;"><?php printf( __('Please, search below or continue to our <a href="%1$s">Home</a>', 'ultraresponsive'), esc_url( home_url( '/' ) ) ); ?></p>
			 
			<div class="clearfix"></div>
			<div class="search_form">
				<?php get_search_form(); ?>
			</div>
		
        </div>
		
      </div>
    </section>	
	
	
    <!--=========== END CONTENT SECTION ================-->
    
	<?php get_footer();?>