jQuery(function($)
{		
	jQuery('textarea.wp-editor-area').bind('input propertychange', function() 
	{		
		fd = jQuery('#faux-desc');
		fd.html(jQuery(this).val());
		
		fd.height() == 0 ? fd.hide() : fd.show()

		var bg_color = fd.height() > 80 ? '#ffbaba' : '#dff2bf';				
		fd.css('background-color', bg_color);				
	});

});