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
				
				orig_url = that.parent().find('input.image_holder').val();
				var lastSlash = orig_url.lastIndexOf('/');
				var imageName = orig_url.substring(lastSlash + 1);
				
				that.parent().find('p.image-label')
					.html(imageName);
				
			}, 'json');
		
	});
	
	// make the hero media fields sortable
	jQuery('#wpa_loop-heros').sortable({
		change: function()
		{
			jQuery('#save-warning-heros').show();
		}
	});
	
	// make the slide media fields sortable
	jQuery('#wpa_loop-slides').sortable({
		change: function()
		{
			jQuery('#save-warning-slides').show();
		}
	});
	
});