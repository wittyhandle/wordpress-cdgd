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
	
	p2p_register_connection_type( array(
		'name' => 'touts_to_projects',
		'from' => 'tout',
		'to' => 'project',
		'cardinality' => 'many-to-one',
		'admin_box' => array(
			'show' => 'from',
			'context' => 'advanced'
		),
		'title' => array(
			'from' => 'Select Project'
		),
		'to_labels' => array(
			'singular_name' => 'Project',
			'not_found' => 'No project found'
		)
	) );
}
add_action( 'p2p_init', 'my_connection_types' );
?>