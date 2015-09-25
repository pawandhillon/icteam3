					  
					  
    <?php $orig_post = $post;
    global $post;
    $categories = get_the_category($post->ID);
    if ($categories) {
    $category_ids = array();
    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

    $args=array(
    'category__in' => $category_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page'=> 2, 
    'ignore_sticky_posts'=>1  
    );

    $my_query = new wp_query( $args );
    if( $my_query->have_posts() ) {
    echo '<div class="related_post">
                <h2>'.__('Related Posts', 'ultraresponsive').'</h2>
                <div class="row">
		';
		
    while( $my_query->have_posts() ) {
    $my_query->the_post();?>

		  
		  <div class="col-lg-6 col-md-6 col-sm-6">
			<div class="single_blog_archive wow fadeInUp">
			
			<?php
			// if post has featured image to display
			if ( has_post_thumbnail() ) : ?>
			
			  <div class="blogimg_container">
				<a class="blog_img" href="<?php the_permalink()?>">
				  <?php the_post_thumbnail('wpf-ultraresponsive-post-image', array('alt' => esc_attr( get_the_title() ) )); ?>
				</a>
			  </div>			
			
			<?php endif; ?>
			  
			<h2 class="blog_title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
			<?php get_template_part('post-meta');?>
			<p class="blog_summary"><?php echo get_the_excerpt(); ?></p>
			<a class="blog_readmore" href="<?php the_permalink(); ?>"><?php _e('Read More','ultraresponsive');?></a>
			</div>
		  </div>
		  
	  
	
    <?php
    }
    echo '</div></div>';
    }
    }
    $post = $orig_post;
    wp_reset_query(); ?>					  