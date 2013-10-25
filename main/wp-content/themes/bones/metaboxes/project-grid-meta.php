<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control">

	<p class="help">
		Select a grid image that appears on the Works grid page as well as a tout.
	</p>

	<?php $mb->the_field('grid'); ?>
	<?php $wpalchemy_media_access->setGroupName('nn')->setInsertButtonLabel('Insert into Project'); ?>

	<div class="single-media">

		<div class="fields-block">
			<?php echo $wpalchemy_media_access->getButton(array('label' => 'Select Grid Image')); ?>
			<p class="image-label"><?php 
				$image_path = $mb->get_the_value();
				if (empty($image_path))
				{
					echo 'No Image Selected';
				}
				else
				{
					$last_slash = strrpos($image_path, '/');
					$image = substr($image_path, $last_slash + 1);
					echo $image;
				}

			?></p>
		</div>

		<?php $mb->the_field('attachment_id'); ?>
		<?php echo $wpalchemy_media_access->getIdField(array(
			'class' => 'cdgd-media-id-field', 
			'name' => $mb->get_the_name(), 
			'value' => $mb->get_the_value())); ?>

		<div class="thumbnail-block">
			<?php
				$attachment_id = $mb->get_the_value();
				if ( isset($attachment_id) )
				{
					echo wp_get_attachment_image($attachment_id, array(75, 75), false, array('class' => 'cdgd-selected-thumbnail', 'style' => 'display: block') );
				}
				else
				{?>
					<img class="cdgd-selected-thumbnail">
				<?php }
			?>
		</div>
	</div>
</div>