<?php

$project_grid_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_project_grid_meta',
	'title' => 'Grid Image',
	'template' => get_stylesheet_directory() . '/metaboxes/project-grid-meta.php',
	'init_action' => 'load_wpa_project_lib',
	'types' => array('project')
));