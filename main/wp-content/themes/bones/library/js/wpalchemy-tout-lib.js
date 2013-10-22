jQuery(function($)
{		
	console.log('called');
	
	jQuery('textarea.wp-editor-area').bind('input propertychange', function() 
	{		
		fd = jQuery('#faux-desc');
		fd.html(jQuery(this).val());
		
		if (fd.height() > 80)
		{
			fd.css('background-color', '#ffbaba');
		}
		else
		{
			fd.css('background-color', '#dff2bf');
		}
		
	});

});