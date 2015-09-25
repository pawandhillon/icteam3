<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!-- Favicon -->  	
	<?php if ( get_theme_mod( 'ultraResponsive_favicon_uploader' ) ) : ?>
	<link rel="icon" href="<?php echo esc_url( get_theme_mod( 'ultraResponsive_favicon_uploader' ) ); ?>">
	<?php endif; ?>	

  <?php wp_head();?>
  </head>
  
  <body <?php body_class(); ?> >  
  
	<!-- SCROLL UP BUTTON --> 
	
	 <a class="scrollup" href="#"></a>
	 
	<!-- END SCROLL UP BUTTON -->		
	

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
          <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only"><?php _e('Toggle navigation','ultraresponsive');?></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			 
			<!-- logo start -->
			
			<?php  if(get_theme_mod( 'ultraResponsive_logo_uploader')) : ?>
			
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_theme_mod( 'ultraResponsive_logo_uploader'));?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>

			<?php else : ?>
				
				<a class="navbar-brand logo_text" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name', 'display'); ?></a>
				
			<?php endif; ?>	
			
			<!-- logo end -->			
                   
          </div>
		  
          <div id="navbar" class="navbar-collapse collapse">
		  
			
			<?php /* Primary Menu */
				
				
					wp_nav_menu( array(
					  'theme_location' => 'primary-menu',
					  'depth' => 2,
					  'container' => false,
					  'fallback_cb' => '',
					  'menu_class' => 'nav navbar-nav navbar-right custom_nav',
					  'menu_id' => 'top-menu',
					  //Process nav menu using custom nav walker
					  'walker' => new wp_bootstrap_navwalker())
					);
				
								
			?>				 

			
          </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 

	<?php get_template_part('inc/banner');?>