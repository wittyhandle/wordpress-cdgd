<?php get_header(); ?>
<?php 
	$mode = get_query_var('mode');
	echo $mode . ' <--';
?>
<div class="clearfix project-details">
	
	<nav id="menu_details">
		<?php 
			$cats = get_the_category();
			if ($cats)
			{
				$cat = array_pop($cats);
				global $cat;
				echo sprintf('<h1>%s</h1>', $cat->name);
			}
			
			echo '<div>';
			next_post_link("%link", "View Next", true);
			echo '<span class="arrow-right"></span>';
			echo '</div>';
			
			echo '<div>';
			previous_post_link("%link", "View Previous", true);
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