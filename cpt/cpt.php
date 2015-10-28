<?php 

	// HOMEPAGE
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
	    'menu_name'          => 'Homepage',
	    );

	    $args = array(
	    'labels'                => $labels,
	    'public'                => true,
	    'publicly_queryable'    => false,
	    'exclude_from_search'		=> true,
	    'show_ui'               => true,
	    'show_in_nav_menus'			=> false,
	    'query_var'             => true,
	    'rewrite'               => true,
	    'capability_type'       => 'post',
	    'has_archive'           => false,
	    'hierarchical'          => false,
	    'menu_icon'             => 'dashicons-store',
	    'rewrite'               => array('slug' => ''),
	    'supports'              => array('title', 'editor', 'custom-fields', 'author'),
	    'taxonomies'            => array('')
	  );
	  register_post_type( 'ajhskill' , $args );
	};
	add_action('init', 'custom_post_type_skills');

	// HOMEPAGE
	function custom_post_type_reviews() {
	    $labels = array(
	    'name'               => 'Reviews',
	    'singular_name'      => 'Review',
	    'add_new'            => 'Add a Review',
	    'add_new_item'       => 'Add New Review',
	    'edit_item'          => 'Edit Review',
	    'new_item'           => 'New Review',
	    'view_item'          => 'View Review',
	    'search_items'       => 'Search Reviews',
	    'not_found'          => 'Nothing found',
	    'not_found_in_trash' => 'Nothing found in Trash',
	    'menu_name'          => 'Reviews',
	    );

	    $args = array(
	    'labels'                => $labels,
	    'public'                => true,
	    'publicly_queryable'    => false,
	    'exclude_from_search'		=> true,
	    'show_ui'               => true,
	    'show_in_nav_menus'			=> false,
	    'query_var'             => true,
	    'rewrite'               => true,
	    'capability_type'       => 'post',
	    'has_archive'           => false,
	    'hierarchical'          => false,
	    'menu_icon'             => 'dashicons-heart',
	    'rewrite'               => array('slug' => ''),
	    'supports'              => array('title', 'editor'),
	    'taxonomies'            => array('')
	  );
	  register_post_type( 'ajhreview' , $args );
	};
	add_action('init', 'custom_post_type_reviews');

	// PROJECTS
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
	    'show_in_nav_menus'			=> false,
	    'query_var'             => true,
	    'rewrite'               => true,
	    'capability_type'       => 'post',
	    'has_archive'           => true,
	    'hierarchical'          => false,
	    'menu_icon'             => 'dashicons-star-filled',
	    'rewrite'               => array('slug' => 'projects'),
	    'supports'              => array('title', 'editor', 'custom-fields', 'thumbnail', 'author'),
	    'taxonomies'            => array('post_tag')
	  );
	  register_post_type( 'ajhproject' , $args );
	};
	add_action('init', 'custom_post_type_projects');

	// Flush Permalinks Upon Activation
	function ajh_rewrite_flush() {
		custom_post_type_projects();
		custom_post_type_skills();
	  flush_rewrite_rules();
	}
	register_activation_hook( __FILE__, 'ajh_rewrite_flush' );

?>