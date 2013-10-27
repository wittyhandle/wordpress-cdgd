jQuery(function($)
{
	function clearTitle()
	{
		jQuery('#project-title').val('');
		jQuery('#project-title-label').val('');
	}
	
	if (typeof P2PAdmin != 'undefined' && typeof P2PAdmin.boxes['touts_to_projects'] != 'undefined')
	{
		P2PAdmin.boxes['touts_to_projects'].connections.on('create', function() 
		{
			jQuery('#project-title').val(jQuery('.p2p-col-title a').html().trim());
			jQuery('#project-title-label').val(jQuery('.p2p-col-title a').html().trim());
		});

		P2PAdmin.boxes['touts_to_projects'].connections.on('delete', clearTitle);

		P2PAdmin.boxes['touts_to_projects'].connections.on('clear', clearTitle);
		//console.log('set this ' + )
		jQuery('#project-title-label').val(jQuery('#project-title').val());
	}
	
});