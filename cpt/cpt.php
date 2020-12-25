<?php 

	function custom_post_type_about() {
	    $labels = array(
	    'name'               => 'About',
	    'singular_name'      => 'About',
	    'add_new'            => 'Add Content',
	    'add_new_item'       => 'Add New Content',
	    'edit_item'          => 'Edit Content',
	    'new_item'           => 'New Content',
	    'view_item'          => 'View Content',
	    'search_items'       => 'Search Content',
	    'not_found'          => 'Nothing found',
	    'not_found_in_trash' => 'Nothing found in Trash',
	    'parent_item_colon'  => '',
	    'menu_name'          => 'About',
	    );

	    $args = array(
	    'labels'                => $labels,
	    'public'                => true,
	    'publicly_queryable'    => true,
	    'exclude_from_search'		=> false,
	    'show_ui'               => true,
	    'show_in_nav_menus'			=> true,
	    'show_in_rest'					=> true,
	    'query_var'             => true,
	    'rewrite'               => true,
	    'capability_type'       => 'post',
	    'has_archive'           => true,
	    'hierarchical'          => false,
	    'menu_icon'             => 'dashicons-star-filled',
	    'rewrite'               => array('slug' => 'about'),
	    'supports'              => array('title', 'editor', 'custom-fields', 'author', 'excerpt', 'thumbnail'),
	    'taxonomies'            => array('category', 'post_tag')
	  );
	  register_post_type( 'about' , $args );
	};
	add_action('init', 'custom_post_type_about');

	function custom_post_type_skills() {
	    $labels = array(
	    'name'               => 'Skills',
	    'singular_name'      => 'Skill',
	    'add_new'            => 'Add a Skill',
	    'add_new_item'       => 'Add New Skill',
	    'edit_item'          => 'Edit Skill',
	    'new_item'           => 'New Skill',
	    'view_item'          => 'View Skill',
	    'search_items'       => 'Search Skills',
	    'not_found'          => 'Nothing found',
	    'not_found_in_trash' => 'Nothing found in Trash',
	    'parent_item_colon'  => '',
	    'menu_name'          => 'Skills',
	    );

	    $args = array(
	    'labels'                => $labels,
	    'public'                => true,
	    'publicly_queryable'    => true,
	    'exclude_from_search'		=> false,
	    'show_ui'               => true,
	    'show_in_nav_menus'			=> true,
	    'show_in_rest'					=> true,
	    'query_var'             => true,
	    'rewrite'               => true,
	    'capability_type'       => 'post',
	    'has_archive'           => true,
	    'hierarchical'          => false,
	    'menu_icon'             => 'dashicons-buddicons-replies',
	    'rewrite'               => array('slug' => 'skills'),
	    'supports'              => array('title', 'editor', 'custom-fields', 'author', 'excerpt', 'thumbnail'),
	    'taxonomies'            => array('category', 'post_tag')
	  );
	  register_post_type( 'skills' , $args );
	};
	add_action('init', 'custom_post_type_skills');

	function custom_post_type_projects() {
	    $labels = array(
	    'name'               => 'Projects',
	    'singular_name'      => 'Project',
	    'add_new'            => 'Add a Project',
	    'add_new_item'       => 'Add New Project',
	    'edit_item'          => 'Edit Project',
	    'new_item'           => 'New Project',
	    'view_item'          => 'View Project',
	    'search_items'       => 'Search Projects',
	    'not_found'          => 'Nothing found',
	    'not_found_in_trash' => 'Nothing found in Trash',
	    'parent_item_colon'  => '',
	    'menu_name'          => 'Projects',
	    );

	    $args = array(
	    'labels'                => $labels,
	    'public'                => true,
	    'publicly_queryable'    => true,
	    'exclude_from_search'		=> false,
	    'show_ui'               => true,
	    'show_in_nav_menus'			=> true,
	    'show_in_rest'					=> true,
	    'query_var'             => true,
	    'rewrite'               => true,
	    'capability_type'       => 'post',
	    'has_archive'           => true,
	    'hierarchical'          => false,
	    'menu_icon'             => 'dashicons-star-filled',
	    'rewrite'               => array('slug' => 'projects'),
	    'supports'              => array('title', 'editor', 'custom-fields', 'thumbnail', 'author', 'excerpt'),
	    'taxonomies'            => array('category', 'post_tag')
	  );
	  register_post_type( 'ajhproject' , $args );
	};
	add_action('init', 'custom_post_type_projects');

	function custom_post_type_services() {
	    $labels = array(
	    'name'               => 'Services',
	    'singular_name'      => 'Service',
	    'add_new'            => 'Add a Service',
	    'add_new_item'       => 'Add New Service',
	    'edit_item'          => 'Edit Service',
	    'new_item'           => 'New Service',
	    'view_item'          => 'View Service',
	    'search_items'       => 'Search Services',
	    'not_found'          => 'Nothing found',
	    'not_found_in_trash' => 'Nothing found in Trash',
	    'parent_item_colon'  => '',
	    'menu_name'          => 'Services',
	    );

	    $args = array(
	    'labels'                => $labels,
	    'public'                => true,
	    'publicly_queryable'    => true,
	    'exclude_from_search'		=> false,
	    'show_ui'               => true,
	    'show_in_nav_menus'			=> true,
	    'show_in_rest'					=> true,
	    'query_var'             => true,
	    'rewrite'               => true,
	    'capability_type'       => 'post',
	    'has_archive'           => true,
	    'hierarchical'          => false,
	    'menu_icon'             => 'dashicons-coffee',
	    'rewrite'               => array('slug' => 'services'),
	    'supports'              => array('title', 'editor', 'custom-fields', 'author', 'excerpt', 'thumbnail'),
	    'taxonomies'            => array('category', 'post_tag')
	  );
	  register_post_type( 'ajhskill' , $args );
	};
	add_action('init', 'custom_post_type_services');

	// Flush Permalinks Upon Activation
	function ajh_rewrite_flush() {
		custom_post_type_about();
		custom_post_type_skills();
		custom_post_type_projects();
		custom_post_type_services();
	  flush_rewrite_rules();
	}
	register_activation_hook( __FILE__, 'ajh_rewrite_flush' );
