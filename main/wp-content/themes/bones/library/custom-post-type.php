<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/


// let's create the function for the custom type
function add_custom_post_types() { 
	register_post_type( 'project',
		array( 'labels' => array(
			'name' => __( 'Projects', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Project', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'Projects', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New Project', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Project', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit Project', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Projects', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Project', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Project', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Projects', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'No projects added, Carl get to work you bum.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'No projects in trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Used for entering projects showcasing all your good work', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/icons/application-wave.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'work', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'projects',
			'capability_type' => 'page',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */	
	
	register_taxonomy_for_object_type( 'category', 'project' );
	
	register_post_type( 'client',
		array( 'labels' => array(
			'name' => __( 'Clients', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Client', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'Clients', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New Client', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Client', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit Clients', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Clients', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Client', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Client', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Clients', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'No clients added.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'No clients in trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Listing of clients you\'ve done work for', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/icons/users.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'client', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'clients',
			'capability_type' => 'page',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title')
	 	) /* end of options */
	); /* end of register post type */
	
	register_post_type( 'tout',
		array( 'labels' => array(
			'name' => __( 'Touts', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Tout', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'Touts', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New Tout', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Tout', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit Touts', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Touts', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Tout', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Tout', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Touts', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'No touts added.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'No Touts in trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Listing of touts to showcase your work', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/icons/megaphone.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'tout', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'touts',
			'capability_type' => 'page',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array('title', 'editor')
	 	) /* end of options */
	); /* end of register post type */
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'add_custom_post_types');
?>
