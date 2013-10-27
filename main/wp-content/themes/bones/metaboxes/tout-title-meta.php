<div class="my_meta_control cdgd-tout-title-mb">

	<p>
		<?php $metabox->the_field('project_title'); ?>
		<input id="project-title-label" type="text" disabled/>
		<input id="project-title" type="hidden" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</p>

</div>