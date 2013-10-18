<?php

$custom_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_custom_meta',
	'title' => 'Hero Images',
	'template' => get_stylesheet_directory() . '/metaboxes/project-hero-meta.php',
	'init_action' => 'my_init_action_func',
	'types' => array('project')
));