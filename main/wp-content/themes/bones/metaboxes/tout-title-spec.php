<?php

$tout_title_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_tout_title_meta',
	'title' => 'Project Title',
	'template' => get_stylesheet_directory() . '/metaboxes/tout-title-meta.php',
	'types' => array('tout'),
	'lock' => WPALCHEMY_LOCK_AFTER_POST_TITLE,
	'context' => 'advanced',
	'priority' => 'high'
));