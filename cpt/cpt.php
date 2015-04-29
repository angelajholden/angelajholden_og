<?php 

	// SERVICES
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
	    'show_ui'               => true,
	    'query_var'             => true,
	    'rewrite'               => true,
	    'capability_type'       => 'post',
	    'has_archive'           => true,
	    'hierarchical'          => false,
	    'menu_position'         => 7,
	    'menu_icon'             => 'dashicons-store',
	    'rewrite'               => array('slug' => 'services'),
	    'supports'              => array('title', 'editor', 'custom-fields'),
	    'taxonomies'            => array('category', 'post_tag')
	  );
	  register_post_type( 'service' , $args );
	};
	add_action('init', 'custom_post_type_services');

	// SKILLS
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
	    'show_ui'               => true,
	    'query_var'             => true,
	    'rewrite'               => true,
	    'capability_type'       => 'post',
	    'has_archive'           => true,
	    'hierarchical'          => false,
	    'menu_position'         => 7,
	    'menu_icon'             => 'dashicons-star-filled',
	    'rewrite'               => array('slug' => 'skills'),
	    'supports'              => array('title', 'editor', 'custom-fields'),
	    'taxonomies'            => array('category', 'post_tag')
	  );
	  register_post_type( 'skill' , $args );
	};
	add_action('init', 'custom_post_type_skills');

	// Flush Permalinks Upon Activation
	function ajh_rewrite_flush() {
		custom_post_type_services();
		custom_post_type_skills();
	  flush_rewrite_rules();
	}
	register_activation_hook( __FILE__, 'ajh_rewrite_flush' );

?>