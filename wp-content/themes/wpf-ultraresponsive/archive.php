	<?php 
	
	/*************
	 * @package  		 WpF ultraResponsive
	 * @file     		 archive.php
	 * @author   		 WpFreeware
	 * @Author Link 	 http://wpfreeware.com
	 * @license	 		 GPL 3.0 or Later
	 * @license url: 	 http://www.gnu.org/licenses/gpl-3.0.html
	 ***************/		
	
	get_header();?>
	

    
    <!--=========== BEGIN CONTENT SECTION ================-->
	
	
    <section id="courseArchive">


	  <div class="container"><div class="row">
		  
			<div class="breadcrumbs">
			
					<h2>
					<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
						<?php /* If this is a category archive */ if (is_category()) { ?>
							<?php _e('Archive for the:', 'ultraresponsive'); ?> <span class="search_string"><?php echo single_cat_title(); ?></span>
						<?php /* If this is a tag archive */  } elseif( is_tag() ) { ?>
							<?php _e('Archive for the:', 'ultraresponsive'); ?> <span class="search_string"><?php single_tag_title(); ?></span>
						<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
							<?php _e('Archive for:', 'ultraresponsive'); ?> <span class="search_string"><?php the_time('F jS, Y'); ?></span>										
						<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
							<?php _e('Archive for:', 'ultraresponsive'); ?> <span class="search_string"><?php the_time('F, Y'); ?></span>									
						<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
							<?php _e('Archive for:', 'ultraresponsive'); ?> <span class="search_string"><?php echo date('Y'); ?></span>										
						<?php /* If this is a search */ } elseif (is_search()) { ?>
							<?php _e('Search Results:', 'ultraresponsive'); ?>					
						<?php /* If this is an author archive */ } elseif (is_author()) { ?>
							<?php _e('Posted by:', 'ultraresponsive'); ?>	<span class="search_string"><?php the_author(); ?></span>									
						<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
							<?php _e('Blog Archives:', 'ultraresponsive'); ?>										
					<?php } ?>
					</h2>				
				
			
			</div>
		  
		</div></div>	
	  
	
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
		 <?php get_sidebar(); ?>
		 <!-- end sidebar --> 
		  
        </div>
      </div>
    </section>
	
	
	
    <!--=========== END CONTENT SECTION ================-->
    
	<?php get_footer();?>