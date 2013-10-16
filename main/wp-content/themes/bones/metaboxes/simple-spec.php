<?php

$custom_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_custom_meta',
	'title' => 'Hero Images',
	'template' => get_stylesheet_directory() . '/metaboxes/simple-meta.php',
	'types' => array('project')
));