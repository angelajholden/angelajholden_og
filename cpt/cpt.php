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
	    'supports'              => array('title', 'editor', 'excerpt'),
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
	    'supports'              => array('title', 'editor', 'custom-fields', 'thumbnail', 'author', 'excerpt'),
	    'taxonomies'            => array('post_tag')
	  );
	  register_post_type( 'ajhproject' , $args );
	};
	add_action('init', 'custom_post_type_projects');

// TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_book_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_book_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Genres', 'taxonomy general name' ),
		'singular_name'     => _x( 'Genre', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Genres' ),
		'all_items'         => __( 'All Genres' ),
		'parent_item'       => __( 'Parent Genre' ),
		'parent_item_colon' => __( 'Parent Genre:' ),
		'edit_item'         => __( 'Edit Genre' ),
		'update_item'       => __( 'Update Genre' ),
		'add_new_item'      => __( 'Add New Genre' ),
		'new_item_name'     => __( 'New Genre Name' ),
		'menu_name'         => __( 'Genre' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'genre' ),
	);

	register_taxonomy( 'genre', array( 'ajhskill' ), $args );

	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Writers', 'taxonomy general name' ),
		'singular_name'              => _x( 'Writer', 'taxonomy singular name' ),
		'search_items'               => __( 'Search Writers' ),
		'popular_items'              => __( 'Popular Writers' ),
		'all_items'                  => __( 'All Writers' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Writer' ),
		'update_item'                => __( 'Update Writer' ),
		'add_new_item'               => __( 'Add New Writer' ),
		'new_item_name'              => __( 'New Writer Name' ),
		'separate_items_with_commas' => __( 'Separate writers with commas' ),
		'add_or_remove_items'        => __( 'Add or remove writers' ),
		'choose_from_most_used'      => __( 'Choose from the most used writers' ),
		'not_found'                  => __( 'No writers found.' ),
		'menu_name'                  => __( 'Writers' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'writer' ),
	);

	register_taxonomy( 'writer', 'ajhskill', $args );
}

// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_author_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_author_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Authors', 'taxonomy general name' ),
		'singular_name'     => _x( 'Author', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Authors' ),
		'all_items'         => __( 'All Authors' ),
		'parent_item'       => __( 'Parent Author' ),
		'parent_item_colon' => __( 'Parent Author:' ),
		'edit_item'         => __( 'Edit Author' ),
		'update_item'       => __( 'Update Author' ),
		'add_new_item'      => __( 'Add New Author' ),
		'new_item_name'     => __( 'New Author Name' ),
		'menu_name'         => __( 'Author' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => '' ),
	);

	register_taxonomy( 'author', array( 'ajhskill' ), $args );

	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Publishers', 'taxonomy general name' ),
		'singular_name'              => _x( 'Publisher', 'taxonomy singular name' ),
		'search_items'               => __( 'Search Publishers' ),
		'popular_items'              => __( 'Popular Publishers' ),
		'all_items'                  => __( 'All Publishers' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Publisher' ),
		'update_item'                => __( 'Update Publisher' ),
		'add_new_item'               => __( 'Add New Publisher' ),
		'new_item_name'              => __( 'New Publisher Name' ),
		'separate_items_with_commas' => __( 'Separate Publishers with commas' ),
		'add_or_remove_items'        => __( 'Add or remove Publishers' ),
		'choose_from_most_used'      => __( 'Choose from the most used Publishers' ),
		'not_found'                  => __( 'No Publishers found.' ),
		'menu_name'                  => __( 'Publishers' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => '' ),
	);

	register_taxonomy( 'publishers', 'ajhskill', $args );
}

// TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST

	// Flush Permalinks Upon Activation
	function ajh_rewrite_flush() {
		custom_post_type_projects();
		custom_post_type_skills();
	  flush_rewrite_rules();
	}
	register_activation_hook( __FILE__, 'ajh_rewrite_flush' );

?>