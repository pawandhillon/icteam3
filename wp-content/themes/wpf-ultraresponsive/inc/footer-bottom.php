      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
		  
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
			  
                <ul class="footer_social">
                  
				<?php if( get_theme_mod('footer_social_facebook') ): ?>
					<li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="<?php echo esc_url(get_theme_mod('footer_social_facebook')); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<?php endif;?>	

				<?php if( get_theme_mod('footer_social_twitter') ): ?>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="<?php echo esc_url(get_theme_mod('footer_social_twitter')); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>					
				<?php endif;?>	

				<?php if( get_theme_mod('footer_social_googleplus') ): ?>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="<?php echo esc_url(get_theme_mod('footer_social_googleplus')); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>				  
				<?php endif;?>				

				<?php if( get_theme_mod('footer_social_linkin') ): ?>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="<?php echo esc_url(get_theme_mod('footer_social_linkin')); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>				  
				<?php endif;?>	
				
				<?php if( get_theme_mod('footer_social_youtube') ): ?>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="<?php echo esc_url(get_theme_mod('footer_social_youtube')); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>				  
				<?php endif;?>					
				

                </ul>				
			  
               
              </div>
            </div>
			
			
			
			
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
				<?php if ( is_home() || is_front_page() ): ?>
					<p> <?php printf( __('Proudly Powered by <a href="%1$s">WordPress</a>', 'ultraresponsive'), esc_url('http://www.wordpress.org') );?> <?php printf( __('| Developed by <a href="%1$s">WpFreeware</a>', 'ultraresponsive'), esc_url('http://www.wpfreeware.com') );?> </p>
				<?php else: ?>
					 
					<?php if ( get_theme_mod( 'ultraResponsive_footer_text' ) ) : ?>
						<p><?php echo esc_html(get_theme_mod( 'ultraResponsive_footer_text' )); ?></p>
					<?php endif; ?>	
					
				<?php endif; ?>
              </div>
            </div>
			
			
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->