    <!--=========== BEGIN COURSE BANNER SECTION ================-->


	<?php  if(get_header_image()) : ?>
		
		<section id="imgBanner">
		
			<?php  if(get_theme_mod( 'ultraResponsive_banner_title')) : ?>
			
				<h2><?php echo esc_html( get_theme_mod( 'ultraResponsive_banner_title') );?></h2>
				
			<?php endif; ?>			
		
		</section>	
		
	<?php endif; ?>		
	
    <!--=========== END COURSE BANNER SECTION ================-->	