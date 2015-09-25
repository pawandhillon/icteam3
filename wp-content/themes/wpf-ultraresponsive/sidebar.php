          <!-- start sidebar -->
          <div class="col-lg-4 col-md-4 col-sm-4 <?php if( get_theme_mod( 'ultraResponsive_sidebar_settings', 'right') == 'left' ): echo "col-md-pull-8"; endif; ?>">
            <div class="courseArchive_sidebar">
				
				<?php 
					
					if ( is_page() ):	
						dynamic_sidebar('ultraresponsive-page-sidebar'); // Appear only pages
					else:
						dynamic_sidebar('ultraresponsive-primary-sidebar'); // Appear everywhere except pages
					endif;	
				
				?>				
			
			  
            </div>
          </div>
          <!-- End sidebar -->	