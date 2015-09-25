	<div class="clearfix"></div>
	<div class="author_bio_area">
	
		<div class="author_card alignleft">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
		</div>
		
		<div class="author_details alignright">
			<h2><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></h2>
			
			<?php if( get_the_author_meta('description') ): ?>
			<p><?php echo get_the_author_meta('description');?></p>
			<?php endif; ?>
		</div>
		
	</div>
	<div class="clearfix"></div>