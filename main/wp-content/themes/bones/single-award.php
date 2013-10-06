<?php get_header(); ?>
hello

	<?php
	if( function_exists('dfiGetFeaturedImages') ) {
		$featuredImages = dfiGetFeaturedImages();
		print_r($featuredImages);
	}
	?>