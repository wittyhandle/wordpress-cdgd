jQuery(function($)
{		
	if (typeof P2PAdmin != 'undefined')
	{
		P2PAdmin.boxes['touts_to_projects'].connections.on('create', function() 
		{
			jQuery('#title-prompt-text').html("");
			jQuery('#title').val(jQuery('.p2p-col-title a').html().trim());
		});
		
		P2PAdmin.boxes['touts_to_projects'].connections.on('delete', function() 
		{
			jQuery('#title-prompt-text').html("Optional tout title (project title will be used if blank)");
			jQuery('#title').val('');
		});
		
		P2PAdmin.boxes['touts_to_projects'].connections.on('clear', function() 
		{
			jQuery('#title-prompt-text').html("Optional tout title (project title will be used if blank)");
			jQuery('#title').val('');			
		});
	}
	
});