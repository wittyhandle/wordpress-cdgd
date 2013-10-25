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
				
				// render the img tag
				that.parent().find('img')
					.attr('src', response[0])
					.attr('width', response[1])
					.attr('height', response[2])
					.fadeIn(300);
				
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