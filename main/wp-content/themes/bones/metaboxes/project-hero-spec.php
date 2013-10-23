<?php

$project_hero_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_project_hero_meta',
	'title' => 'Hero Images',
	'template' => get_stylesheet_directory() . '/metaboxes/project-hero-meta.php',
	'init_action' => 'load_wpa_project_lib',
	'types' => array('project')
));