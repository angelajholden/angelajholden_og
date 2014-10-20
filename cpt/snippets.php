<?php 
// Custom Post Type Snippets
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
    'supports'              => array('title','thumbnail', 'editor', 'excerpt','custom-fields','comments'),
    'taxonomies'            => array('post_tag / categories')
  );
  register_post_type( 'snippet' , $args );
};
add_action('init', 'custom_post_type_snippets');

// Add new taxonomy, NOT hierarchical (like tags)
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
    'rewrite'               => array( 'slug' => '' ),
  );

  register_taxonomy( 'keyword', 'snippet', $args );
}
add_action( 'init', 'create_snippet_taxonomy', 0 );