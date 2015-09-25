	<?php 
	
	/*************
	 * Template Name: Full-width page
	 *
	 * @package  		 WpF ultraResponsive
	 * @file     		 template-fullwidth.php
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
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="courseArchive_content">			
              <!-- start blog archive  -->
              
			  
				<div class="row">
				
				<?php if(have_posts()) : ?>
				<?php while(have_posts())  : the_post(); ?>


					<!-- start single blog -->
					<div class="col-lg-12 col-12 col-sm-12">
					
					
					  <div class="single_blog">
					  
						<?php
						// if post has featured image to display
						if ( has_post_thumbnail() ) : ?>
						
						<div class="blogimg_container">
						  <a href="<?php the_permalink();?>" class="blog_img">
							<?php the_post_thumbnail('wpf-ultraresponsive-post-image', array('alt' => esc_attr( get_the_title() ) )); ?>
						  </a>
						</div>
						
						<?php endif; ?>
						
						<div class="single_page_content_container">
						
							<h1 class="blog_title"><?php the_title();?></h1>
							
							<?php the_content();?>
							
							 
							  <?php 
							  
								wp_link_pages( array(
									'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'ultraresponsive' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '',
									'link_after'  => '',
								) );								  
							  
							  ?>							
											
						
						</div>
						
					
						
					  </div>
					  
					  <?php 
							
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;	
							

					  ?>					  

					</div>
					<!-- End single blog --> 
							  
					
				<?php endwhile; ?>

              
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
		
		  
		  
        </div>
      </div>
    </section>
	
    <!--=========== END CONTENT SECTION ================-->
    
	<?php get_footer();?>