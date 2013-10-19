<?php

$project_slide_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_project_slide_meta',
	'title' => 'Slide Images',
	'template' => get_stylesheet_directory() . '/metaboxes/project-slide-meta.php',
	'init_action' => 'my_init_action_func',
	'types' => array('project')
));