jQuery(function($)
{		
	jQuery('body').on('change', 'input.cdgd-media-id-field', function()
	{
		var that = jQuery(this);
		jQuery.post(
			'/wp-admin/admin-ajax.php',
			{
				action: 'thumbnail-spec',
				media_id: that.val(),
				dimension: 75
			},
			function( response ) {
				
				url = response[0];
				// render the img tag
				that.parent().find('img')
					.attr('src', url)
					.attr('width', response[1])
					.attr('height', response[2])
					.fadeIn(300);
					
				var lastSlash = url.lastIndexOf('/');
				var imageName = url.substring(lastSlash + 1);
				
				jQuery('p.image-label').html(imageName);
				
			}, 'json');
		
	});
	
	// make the hero media fields sortable
	jQuery('#wpa_loop-heros').sortable({
		change: function()
		{
			jQuery('#save-warning').show();
		}
	});
	
	// make the slide media fields sortable
	jQuery('#wpa_loop-slides').sortable({
		change: function()
		{
			jQuery('#save-warning').show();
		}
	});
	
});