<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control metabox">
  
    <?php while($mb->have_fields_and_multi('heros')): ?>
	<?php $mb->the_group_open(); ?>
	
		<?php $mb->the_field('imgurl'); ?>
	    <?php $wpalchemy_media_access->setGroupName('hero-n' . $mb->get_the_index())->setInsertButtonLabel('Insert'); ?>

	    <div>
	        <a href="#" class="dodelete button">Remove</a>
			
			<?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
	        <?php echo $wpalchemy_media_access->getButton(); ?>
			<?php $mb->the_field('attachment_id'); ?>			
			<?php echo $wpalchemy_media_access->getIdField(array('class' => 'tout', 'name' => $mb->get_the_name(), 'value' => $mb->get_the_value(), 'id' => 'attachment-' . $mb->get_the_index())); ?>
		
			<?php
				$attachment_id = $mb->get_the_value();
				if ( isset($attachment_id) )
				{
					echo wp_get_attachment_image( $attachment_id, array(50, 50), false, array('class' => 'cdgd-selected-thumbnail') );
				}
				else
				{?>
					<img class="cdgd-selected-thumbnail">
				<?php }
			?>

	    </div>
 
	<?php $mb->the_group_close(); ?>
    <?php endwhile; ?>

	<p><a href="#" class="docopy-heros button">Add</a></p>
 
</div>

<script type="text/javascript">
	
	jQuery(function($)
	{		
		//<img width="32" height="27" src="http://localhost:1234/wp-content/uploads/2013/10/cdetorres_time_mobility_tout_01-150x129.png" class="attachment-32x32" alt="cdetorres_time_mobility_tout_01">
		jQuery('body').on('change', 'input.tout', function()
		//jQuery('input.tout').change(function()
		{
			var that = jQuery(this);
			console.log('the id ' + that.attr('id'));
			jQuery.post(
				'/wp-admin/admin-ajax.php',
				{
					action: 'thumbnail-spec',
					media_id: that.val(),
					dimension: 50
				},
				function( response ) {
					
					// render the img tag
					console.log(response);
					that.parent().find('img')
						.attr('src', response[0])
						.attr('width', response[1])
						.attr('height', response[2]);
					
				}, 'json');
			
		});
		
	});
	
</script>