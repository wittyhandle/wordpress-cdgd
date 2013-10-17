<?php
function my_connection_types() 
{
	p2p_register_connection_type( array(
		'name' => 'projects_to_clients',
		'from' => 'project',
		'to' => 'client',
		'cardinality' => 'many-to-one',
		'admin_box' => array(
			'show' => 'from',
			'context' => 'side'
		),
		'title' => array(
			'from' => 'Add a Client'
		),
		'to_labels' => array(
			'singular_name' => 'Client',
			'not_found' => 'No client found'
		)
	) );
}
add_action( 'p2p_init', 'my_connection_types' );
?>