	
	
	<!-- Start single blog archive -->
	<div class="col-lg-12 col-12 col-sm-12">
	
	  <div id="post-<?php the_ID(); ?>" <?php post_class('single_blog_archive wow fadeInUp'); ?>>
		
		<?php
		// if post has featured image to display
		if ( has_post_thumbnail() ) : ?>
		
		<div class="blogimg_container">
		  <a href="<?php the_permalink();?>" class="blog_img">
			<?php the_post_thumbnail('wpf-ultraresponsive-post-image', array('alt' => esc_attr( get_the_title() ) )); ?>
		  </a>
		</div>
		
		<?php endif; ?>

		<?php the_title( sprintf( '<h1 class="blog_title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<?php get_template_part('post-meta');?>
		<p class="blog_summary"><?php echo get_the_excerpt(); ?></p>
		<a class="blog_readmore" href="<?php the_permalink(); ?>"><?php _e('Read More','ultraresponsive');?></a>
	  </div>
	  
	</div>
	<!-- End single blog archive -->	