<?php get_header(); ?>
<div id="content">
	<?php $myPosts = new WP_Query( 'post_type=project&meta_key=_cdgd_test_text&orderby=meta_value&order=ASC' ); ?>
	<?php if ($myPosts->have_posts()) : while ($myPosts->have_posts()) : $myPosts->the_post(); ?>
		<div>
			<?php the_title(); ?>			
			<?php echo get_post_meta( $post->ID, '_cdgd_test_text', true ); ?>
			
			
			
			
		</div>
		
		
				
	<?php endwhile; ?>
	
	<?php else: ?>
		foo
	<?php endif; ?>
	
	<?php wp_reset_postdata(); ?>
	
</div>	