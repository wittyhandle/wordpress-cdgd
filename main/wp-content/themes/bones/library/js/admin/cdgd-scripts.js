jQuery(function($)
{		
	if (typeof P2PAdmin != 'undefined' && typeof P2PAdmin.boxes['touts_to_projects'] != 'undefined')
	{
		P2PAdmin.boxes['touts_to_projects'].connections.on('create', function() 
		{
			//jQuery('#title-prompt-text').html("");
			jQuery('#project-title').val(jQuery('.p2p-col-title a').html().trim());
		});
		
		P2PAdmin.boxes['touts_to_projects'].connections.on('delete', function() 
		{
			//jQuery('#title-prompt-text').html("Optional tout title (project title will be used if blank)");
			jQuery('#project-title').val('');
		});
		
		P2PAdmin.boxes['touts_to_projects'].connections.on('clear', function() 
		{
			//jQuery('#title-prompt-text').html("Optional tout title (project title will be used if blank)");
			jQuery('#project-title').val('');			
		});
	}
	
});