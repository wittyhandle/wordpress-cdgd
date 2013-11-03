<?php get_header(); ?>

<div class="clearfix project-details">
	
	<div id="menu_details">
		left
	</div>

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