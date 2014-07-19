<?php 

// Custom Post Type Videos
function custom_post_type_videos() {
    $labels = array(
    'name'               => 'Videos',
    'singular_name'      => 'Video',
    'add_new'            => 'Add a Video',
    'add_new_item'       => 'Add New Video',
    'edit_item'          => 'Edit Video',
    'new_item'           => 'New Video',
    'view_item'          => 'View Video',
    'search_items'       => 'Search Videos',
    'not_found'          => 'Nothing found',
    'not_found_in_trash' => 'Nothing found in Trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Videos',
    );

    $args = array(
    'labels'                => $labels,
    'public'                => true,
    'publicly_queryable'    => true,
    'show_ui'               => true,
    'query_var'             => true,
    'rewrite'               => true,
    'capability_type'       => 'post',
    'has_archive'        		=> true,
    'hierarchical'          => false,
    'menu_position'         => 6,
    'menu_icon'             => 'dashicons-format-video',
    'rewrite'               => array('slug' => 'videos'),
    'supports'              => array('title','thumbnail', 'editor', 'excerpt','custom-fields'),
    'taxonomies'            => array('post_tag / categories')
  );
  register_post_type( 'video' , $args );
};
add_action('init', 'custom_post_type_videos');

// Add new taxonomy, NOT hierarchical (like tags)
function create_video_taxonomy() {
  $labels = array(
    'name'                       => _x( 'Topics', 'taxonomy general name' ),
    'singular_name'              => _x( 'Topic', 'taxonomy singular name' ),
    'search_items'               => __( 'Search Topics' ),
    'popular_items'              => __( 'Popular Topics' ),
    'all_items'                  => __( 'All Topics' ),
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => __( 'Edit Topic' ),
    'update_item'                => __( 'Update Topic' ),
    'add_new_item'               => __( 'Add New Topic' ),
    'new_item_name'              => __( 'New Topic Name' ),
    'separate_items_with_commas' => __( 'Separate Topics with commas' ),
    'add_or_remove_items'        => __( 'Add or remove Topics' ),
    'choose_from_most_used'      => __( 'Choose from the most used Topics' ),
    'not_found'                  => __( 'No Topics found.' ),
    'menu_name'                  => __( 'Topics' ),
  );

  $args = array(
    'hierarchical'          => false,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'topic' ),
  );

  register_taxonomy( 'topic', 'video', $args );
}
add_action( 'init', 'create_video_taxonomy', 0 );

/*
* parse_youtube_url() PHP function
* @param string $url URL to be parsed, eg:
* http://youtu.be/BLxI_1iKYgc,
* http://www.youtube.com/embed/BLxI_1iKYgc
* http://www.youtube.com/watch?v=BLxI_1iKYgc
* @param string $return what to return
* - embed, return embed code
* - thumb, return URL to thumbnail image
* - hqthumb, return URL to high quality thumbnail image.
* @param string $width width of embeded video, default 560
* @param string $height height of embeded video, default 349
* @param string $rel whether embeded video to
   show related video after play or not.
* How to Use...
* // return thumb image
  echo parse_youtube_url('http://youtu.be/ML2KAaR26Pk','mqthumb');
* // return embed url
  echo parse_youtube_url('http://www.youtube.com/watch?v=ML2KAaR26Pk','embedurl');
*/

function parse_youtube_url($url,$return='embed',$width='',$height='',$rel=0){
  $urls = parse_url($url);
    // url is http://youtu.be/abcd
    if($urls['host'] == 'youtu.be'){
      $id = ltrim($urls['path'],'/');
    }
    // url is http://www.youtube.com/embed/abcd
    else if(strpos($urls['path'],'embed') == 1){
      $id = end(explode('/',$urls['path']));
    }
     // url is xxxx only
    else if(strpos($url,'/')===false){
      $id = $url;
    }
    // http://www.youtube.com/watch?feature=player_embedded&v=ML2KAaR26Pk
    // url is http://www.youtube.com/watch?v=ML2KAaR26Pk
    else{
      parse_str($urls['query']);
      $id = $v;
      if(!empty($feature)){
          $id = end(explode('v=',$urls['query']));
      }
    }
    // return embed iframe
    if($return == 'embed'){
      return '<iframe width="'.($width?$width:560).'" height="'.($height?$height:315).'" src="http://www.youtube.com/embed/'.$id.'?rel='.$rel.'" frameborder="0" allowfullscreen></iframe>';
    }
    // return embed only
    else if($return == 'embedurl'){
      return '//www.youtube.com/embed/'.$id;
    }
    // return normal thumb
    else if($return == 'thumb'){
      return '//i1.ytimg.com/vi/'.$id.'/default.jpg';
    }
    // return hqthumb
    else if($return == 'mqthumb'){
      return '//i1.ytimg.com/vi/'.$id.'/mqdefault.jpg';
    }
    // else return id
    else{
      return $id;
    }
}

// Custom Post Type Videos
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
    'supports'              => array('title','thumbnail', 'editor', 'excerpt','custom-fields'),
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
    'rewrite'               => array( 'slug' => 'keyword' ),
  );

  register_taxonomy( 'keyword', 'snippet', $args );
}
add_action( 'init', 'create_snippet_taxonomy', 0 );

// Hide Admin Bar
add_filter('show_admin_bar', '__return_false');

// Load jQuery
if ( !is_admin() ) {
  wp_deregister_script('jquery');
  wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"), false);
  wp_enqueue_script('jquery');

  wp_deregister_script('fancybox');
  wp_register_script('fancybox', get_stylesheet_directory_uri() . "/js/jquery.fancybox.min.js");
  wp_enqueue_script('fancybox');

  wp_deregister_script('prism');
  wp_register_script('prism', get_stylesheet_directory_uri() . "/js/prism.min.js");
  wp_enqueue_script('prism');

  wp_deregister_script('fitvids');
  wp_register_script('fitvids', get_stylesheet_directory_uri() . "/js/fitvids.min.js");
  wp_enqueue_script('fitvids');

  wp_deregister_script('global');
  wp_register_script('global', get_stylesheet_directory_uri() . "/js/global.min.js");
  wp_enqueue_script('global');
}

// Shorten the Title for the Videos
/* Used like this:
	<h2 class="videoTitle" title="<?php the_title_attribute(); ?>">
	<?php the_titlesmall('', '...', true, '25') ?>
	</h2> */
function the_titlesmall($before = '', $after = '', $echo = true, $length = false) { $title = get_the_title();
  if ( $length && is_numeric($length) ) {
    $title = substr( $title, 0, $length );
  }
  if ( strlen($title)> 0 ) {
    $title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
    if ( $echo )
      echo $title;
    else
      return $title;
  }
}

// Sanitized Version of the Post Title
function post_name() {
  global $post;
  $title = sanitize_title($post->post_title);
  echo $title;
}

// Attach a class to linked image's parent anchors
function give_linked_images_class($html, $id, $caption, $title, $align, $url, $size, $alt = '' ){
  $classes = 'fancybox';

  if ( preg_match('/<a.*? class=".*?">/', $html) ) {
    $html = preg_replace('/(<a.*? class=".*?)(".*?>)/', '$1 ' . $classes . '$2', $html);
  } else {
    $html = preg_replace('/(<a.*?)>/', '$1 class="' . $classes . '" >', $html);
  }
  return $html;
}
add_filter('image_send_to_editor','give_linked_images_class',10,8);

// Add class and rel to WordPress Galleries
add_filter('wp_get_attachment_link', 'rc_add_rel_attribute');
 
function rc_add_rel_attribute($link) {
  global $post;
  return str_replace('<a href', '<a class="fancybox" rel="gallery" href', $link);
}

// Edit the Excerpt Length & String
	function custom_excerpt_length( $length ) {
		return 40;
	}
		add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	function new_excerpt_more( $more ) {
		return '...';
	}
		add_filter('excerpt_more', 'new_excerpt_more');

// Link Manager
	add_filter( 'pre_option_link_manager_enabled', '__return_true' );

// Remove 'More...' link scroll
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

// Main Nav
	register_nav_menus( array(
		'main_menu' => 'Main Menu',
	) );

// Register Dynamic Sidebar 'Sidebar'
	$side = array(
		'name'          => __( 'Sidebar' ),
		'id'            => 'sidebar',
		'description'		=> 'Widgets in this sidebar will be displayed on Posts & Pages.',
    'class'         => 'sidebar',
		'before_widget' => '<aside class="widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="h3">',
		'after_title'   => '</h3>' );
  register_sidebar( $side );

// Featured Images
  add_theme_support( 'post-thumbnails' );
  add_image_size('960x400', 650, 366, true);
  add_image_size('300x169', 300, 169, true);

// SHOW FEATURED IMAGES ON POST & PAGE ADMIN VIEW

// Get the Featured Image
	function ahd_get_featured_image($post_ID) {
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail');
      return $post_thumbnail_img[0];
    }
	}

// Add a New Column
	function ahd_columns_head($defaults) {
    $defaults['featured_image'] = 'Featured Image';
  return $defaults;
	}
 
// Show the Featured Image
	function ahd_columns_content($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
        $post_featured_image = ahd_get_featured_image($post_ID);
      if ($post_featured_image) {
          echo '<img src="' . $post_featured_image . '" />';
      }
    }
	}
	add_filter('manage_posts_columns', 'ahd_columns_head');
	add_action('manage_posts_custom_column', 'ahd_columns_content', 10, 2);
	add_filter('manage_pages_columns', 'ahd_columns_head');
  add_action('manage_pages_custom_column', 'ahd_columns_content', 10, 2);

// Limit Post Revisions
if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', 5);

// Is Variable Defined
function isdef($x) {
	$x = preg_replace("/[^\w\d_]+/","",$x);
	if($x!="NONE" && $x!="" && $x!=NULL && $x!=" ") {
		  return true;  
	} else {
		  return false;
	}
}

// Shows Performance in the Footer
function performance( $visible = false ) {
  $stat = sprintf(  '%d queries in %.3f seconds, using %.2fMB memory',
    get_num_queries(),
    timer_stop( 0, 3 ),
    memory_get_peak_usage() / 1024 / 1024
    );
  echo $visible ? $stat : "<!-- {$stat} -->" ;
}
add_action( 'wp_footer', 'performance', 20 );

// Small Performance Boost
remove_filter('atom_service_url','atom_service_url_filter');

// BLOCKS THE WORDPRESS AUTO UPDATER EMAIL NOTIFICATION
add_filter( 'auto_core_update_send_email', '__return_false' );

// remove version info from head and feeds for security reasons
function complete_version_removal() { return ''; }
add_filter('the_generator', 'complete_version_removal');

// remove wp version param from any enqueued scripts and styles
function remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'remove_wp_ver_css_js', 9999 );

// Clean up the <head>
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'feed_links_extra');
remove_action('wp_head', 'feed_links');
remove_action('wp_head', 'index_rel_link' );
remove_action('wp_head', 'parent_post_rel_link', 10);

// Current Page URL
function curPageURL() {
  $pageURL = 'http';
  if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
  if ($_SERVER["SERVER_PORT"] != "80") {
    $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
  } else {
    $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
  }
  return $pageURL;
}

// Title for the Home Page
function wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'name' );
  }
  return $title;
}
add_filter( 'wp_title', 'wp_title_for_home' );

// Customize the Login Form
function ajh_login_logo() { ?>
  <style type="text/css">
    body.login div#login {
      padding-top: 6%;
    }
    body.login div#login h1 a {
      background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png');
      height: auto;
      width: 150px;
      text-indent: 0;
      padding: 175px 0 0 0;
      color: #555;
      background-size: 150px 168px;
    }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'ajh_login_logo' );

function ajh_logo_url() {
    return home_url();
  }
  add_filter( 'login_headerurl', 'ajh_logo_url' );

function ajh_logo_url_title() {
    return 'Angela J. Holden';
  }
add_filter( 'login_headertitle', 'ajh_logo_url_title' );

// Get Image Caption
function the_post_thumbnail_caption() {
  global $post;

  $thumbnail_id    = get_post_thumbnail_id($post->ID);
  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

  if ($thumbnail_image && isset($thumbnail_image[0])) {
    echo '<p>'.$thumbnail_image[0]->post_excerpt.'</p>';
  }
}

// Add Width & Height Column to Media Library
function wh_column( $cols ) {
  $cols["dimensions"] = "Dimensions (w, h)";
  return $cols;
}
function wh_value( $column_name, $id ) {
  $meta = wp_get_attachment_metadata($id);
     if(isset($meta['width']))
     echo $meta['width'].' x '.$meta['height'];
}
add_filter( 'manage_media_columns', 'wh_column' );
add_action( 'manage_media_custom_column', 'wh_value', 10, 2 );

// Include Google Analytics Tracking Code
  function google_analytics_tracking_code(){ ?>
    <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-51555467-1', 'angelajholden.com');
      ga('send', 'pageview');
    </script>
<?php }

add_action('wp_footer', 'google_analytics_tracking_code');

// Remove <p> tags from around images
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

?>