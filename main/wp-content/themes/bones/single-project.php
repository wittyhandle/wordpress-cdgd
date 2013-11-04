<?php get_header(); ?>

<div class="clearfix project-details">
	
	<nav id="menu_details">
		<?php 
			$cats = get_the_terms( get_the_ID(), 'project_category' );
			if ($cats)
			{
				$cat = array_pop($cats);
				echo sprintf('<h1>%s</h1>', $cat->name);
			}
		?>
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