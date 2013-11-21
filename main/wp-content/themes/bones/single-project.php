<?php get_header(); ?>
<div class="clearfix project-details">
	
	<nav id="menu_details">
		<?php 
			$cats = get_the_category();
			$mode = get_query_var('mode');
			if ($cats)
			{
				$cat = array_pop($cats);
				global $cat;
				echo sprintf('<h1>%s</h1>', $cat->name);
			}
			
			echo '<div>';
			
			$next_link = next_post_link_plus(array(
				'order_by' => 'menu_order',
				'link' => 'View Next',
				'format' => '%link',
				'in_same_cat' => $mode != 'all',
				'loop' => true,
				'return' => 'output'
			));
			
			if ('all' == $mode)
			{
				echo str_replace('/work/', '/work/all/', $next_link);
			}
			else
			{
				echo $next_link;
			}
			
			echo '<span class="arrow-right"></span>';
			echo '</div>';
			
			echo '<div>';
			$prev_link = previous_post_link_plus(array(
				'order_by' => 'menu_order',
				'link' => 'View Previous',
				'format' => '%link',
				'in_same_cat' => $mode != 'all',
				'loop' => true,
				'return' => 'output'
			));
			
			if ('all' == $mode)
			{
				echo str_replace('/work/', '/work/all/', $prev_link);
			}
			else
			{
				echo $prev_link;
			}
			
			echo '<span class="arrow-left"></span>';
			echo '</div>';
			
			echo '<div>';
			echo '<a href="#">View All ';
			echo $cat->name;
			echo '</a></div>';
		?>
		
		<div>
			<a href="#">View All</a>
		</div>
		
		<div class="work-detail">
		
			<?
				$connected = new WP_Query( array(
				  'connected_type' => 'projects_to_clients',
				  'connected_items' => get_queried_object(),
				  'nopaging' => true,
				));
				
				
			?>
				
			<? while ( $connected->have_posts() ) : $connected->the_post(); ?>
				<p class="client"><? the_title(); ?></p>
			<? 
				endwhile;
				wp_reset_postdata();
			?>
			
			<p class="title"><? the_title(); ?></p>
			<? the_content(); ?>
		</div>
		
	</nav>

	<div id="heros">
		<?php

			$project_hero_metabox->the_meta();

			while($project_hero_metabox->have_fields('heros'))
			{
				?><img src="<?php $project_hero_metabox->the_value('hero'); ?>"/><?php
			}

		?>
	</div>
	
</div>

<?php get_footer(); ?>