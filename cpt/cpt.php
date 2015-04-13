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
	    'taxonomies'            => array('')
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
	    'taxonomies'            => array('')
	  );
	  register_post_type( 'skill' , $args );
	};
	add_action('init', 'custom_post_type_skills');

	// SNIPPETS
	function custom_post_type_snippets() {
	    $labels = array(
	    'name'               => 'Snippets',
	    'singular_name'      => 'Snippet',
	    'add_new'            => 'Add a Snippet',
	    'add_new_item'       => 'Add New Snippet',
	    'edit_item'          => 'Edit Snippet',
	    'new_item'           => 'New Snippet',
	    'view_item'          => 'View Snippet',
	    'search_items'       => 'Search Snippets',
	    'not_found'          => 'Nothing found',
	    'not_found_in_trash' => 'Nothing found in Trash',
	    'parent_item_colon'  => '',
	    'menu_name'          => 'Snippets',
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
	    'menu_icon'             => 'dashicons-media-code',
	    'rewrite'               => array('slug' => 'snippets'),
	    'supports'              => array('title', 'editor', 'custom-fields','comments'),
	    'taxonomies'            => array('')
	  );
	  register_post_type( 'snippet' , $args );
	};
	add_action('init', 'custom_post_type_snippets');

	function create_snippet_taxonomy() {
	  $labels = array(
	    'name'                       => _x( 'Keywords', 'taxonomy general name' ),
	    'singular_name'              => _x( 'Keyword', 'taxonomy singular name' ),
	    'search_items'               => __( 'Search Keywords' ),
	    'popular_items'              => __( 'Popular Keywords' ),
	    'all_items'                  => __( 'All Keywords' ),
	    'parent_item'                => null,
	    'parent_item_colon'          => null,
	    'edit_item'                  => __( 'Edit Keyword' ),
	    'update_item'                => __( 'Update Keyword' ),
	    'add_new_item'               => __( 'Add New Keyword' ),
	    'new_item_name'              => __( 'New Keyword Name' ),
	    'separate_items_with_commas' => __( 'Separate Keywords with commas' ),
	    'add_or_remove_items'        => __( 'Add or remove Keywords' ),
	    'choose_from_most_used'      => __( 'Choose from the most used Keywords' ),
	    'not_found'                  => __( 'No Keywords found.' ),
	    'menu_name'                  => __( 'Keywords' ),
	  );

	  $args = array(
	    'hierarchical'          => false,
	    'labels'                => $labels,
	    'show_ui'               => true,
	    'show_admin_column'     => true,
	    'update_count_callback' => '_update_post_term_count',
	    'query_var'             => true,
	    'rewrite'               => array( 'slug' => 'keywords' ),
	  );

	  register_taxonomy( 'keyword', 'snippet', $args );
	}
	add_action( 'init', 'create_snippet_taxonomy', 0 );

	// Flush Permalinks Upon Activation
	function ajh_rewrite_flush() {
		custom_post_type_services();
		custom_post_type_skills();
	  custom_post_type_snippets();
	  flush_rewrite_rules();
	}
	register_activation_hook( __FILE__, 'ajh_rewrite_flush' );

?>