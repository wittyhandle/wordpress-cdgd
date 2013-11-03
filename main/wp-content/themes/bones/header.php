<?php get_template_part('head'); ?>

	<body <?php body_class(); ?>>
		<div id="container">

			<header class="clearfix">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/library/images/icons/logo.png" />
				</a>
				
				<?php wp_nav_menu( 'container=nav&container_id=menu&after=<span>/</span>' ); ?>
				
			</header>