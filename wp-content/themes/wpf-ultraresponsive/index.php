	<?php 
	
	/*************
	 * @package  		 WpF ultraResponsive
	 * @file     		 index.php
	 * @author   		 WpFreeware
	 * @Author Link 	 http://wpfreeware.com
	 * @license	 		 GPL 3.0 or Later
	 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
	 ***************/		
	
	get_header();?>
	

    
    <!--=========== BEGIN CONTENT SECTION ================-->
	
	
    <section id="courseArchive">	
	  
	
      <div class="container">
        <div class="row">		
		
          <!-- start content -->
          <div class="col-lg-8 col-md-8 col-sm-8 <?php if( get_theme_mod( 'ultraResponsive_sidebar_settings', 'right') == 'left' ): echo "col-md-push-4"; endif; ?>">
            <div class="courseArchive_content">			
              <!-- start blog archive  -->
              
			  
			  <div class="row">
			  
				<?php if(have_posts()) : ?>
				<?php while(have_posts())  : the_post(); ?>

					
					<?php get_template_part('post-excerpt');?>
									
					
				<?php endwhile; ?>

				<?php wpf_ultraresponsive_page_navi(); ?>
              
              <!-- end blog archive  -->				

				<?php else : ?>
					<div class="col-lg-12 col-12 col-sm-12">
						<h2 class="not_found"><?php _e('Sorry! Nothing Found', 'ultraresponsive'); ?></h2>
					</div>
				<?php endif; ?>				  
			  
			    </div>
            </div>
          </div>
          <!-- End content -->

		 <!-- start sidebar -->
		 <?php get_sidebar();?>
		 <!-- end sidebar --> 
		  
        </div>
      </div>
    </section>
	
	
	
    <!--=========== END CONTENT SECTION ================-->
    
	<?php get_footer();?>