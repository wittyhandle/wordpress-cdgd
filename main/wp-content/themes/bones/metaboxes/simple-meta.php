<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control metabox">
  
    <?php $mb->the_field('imgurl'); ?>
    <?php $wpalchemy_media_access->setGroupName('nn')->setInsertButtonLabel('Insert'); ?>
 
    <p>
        <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
        <?php echo $wpalchemy_media_access->getButton(); ?>
						
		<?php echo $wpalchemy_media_access->getIdField(array('class' => 'tout')); ?>				
		<img>

    </p>
 
    <?php $mb->the_field('imgurl2'); ?>
    <?php $wpalchemy_media_access->setGroupName('nn2')->setInsertButtonLabel('Insert This')->setTab('gallery'); ?>
 
    <p>
        <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
        <?php echo $wpalchemy_media_access->getButton(array('label' => 'Add Image From Library')); ?>
    </p>
 
</div>

<script type="text/javascript">
	
	jQuery(function($)
	{		
		//<img width="32" height="27" src="http://localhost:1234/wp-content/uploads/2013/10/cdetorres_time_mobility_tout_01-150x129.png" class="attachment-32x32" alt="cdetorres_time_mobility_tout_01">
		jQuery('input.tout').change(function()
		{
			var that = jQuery(this);
			console.log('val ' + jQuery('input.tout').val());
			jQuery.post(
				'/wp-admin/admin-ajax.php',
				{
					action: 'thumbnail-spec',
					media_id: jQuery('input.tout').val(),
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