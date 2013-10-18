<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control metabox">

	<p class="help">
		Either select existing assets or upload new ones by clicking the Select Hero Image button. Click the Add Hero
		button to add new hero images to the project. Click the Remove button to remove hero images. To re-order hero
		images, drag from the empty space within a hero image row and drop under or over another image.
	</p>
	
	<p id="save-warning">
		Make sure to save the sort order!
	</p>	
  
    <?php while($mb->have_fields_and_multi('heros')): ?>
	
	<?php $mb->the_group_open(); ?>
	
		<?php $mb->the_field('hero'); ?>
	    <?php $wpalchemy_media_access->setGroupName('hero-n' . $mb->get_the_index())->setInsertButtonLabel('Insert into Project'); ?>

	    	<div class="fields-block">
				<p><?php echo $wpalchemy_media_access->getButton(array('label' => 'Select Hero Image')); ?></p>
	        	<p class="remove"><a href="#" class="dodelete button">Remove</a></p>			
			
				<?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>	        
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
 
	<?php $mb->the_group_close(); ?>
    <?php endwhile; ?>

	<p class="toolbar">
		<a href="#" class="docopy-heros button">Add Hero</a>
		<input type="submit" class="button" name="save" value="Save"/>
	</p>

</div>