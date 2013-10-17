<?php
function my_connection_types() 
{
	p2p_register_connection_type( array(
		'name' => 'projects_to_clients',
		'from' => 'project',
		'to' => 'client',
		'admin_box' => array(
			'show' => 'from',
			'context' => 'side'
		)
	) );
}
add_action( 'p2p_init', 'my_connection_types' );
?>