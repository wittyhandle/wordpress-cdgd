<?php

$tout_metabox = $simple_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_tout_meta',
	'title' => 'Description Length Validation',
	'template' => get_stylesheet_directory() . '/metaboxes/tout-meta.php',
	'init_action' => 'load_wpa_tout_lib',
	'types' => array('tout'),
	'context' => 'side',
	'priority' => 'core'
));