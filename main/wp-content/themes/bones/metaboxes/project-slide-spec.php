<?php

$project_slide_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_project_slide_meta',
	'title' => 'Slide Images',
	'template' => get_stylesheet_directory() . '/metaboxes/project-slide-meta.php',
	'init_action' => 'load_wpa_project_lib',
	'types' => array('project')
));