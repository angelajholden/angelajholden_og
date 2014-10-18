<?php 

if ( ! function_exists( 'ajh_setup' ) ) :
function ajh_setup() {

	// Main Nav
	register_nav_menus( array(
		'main_menu' => 'Main Menu',
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Featured Images
  add_theme_support( 'post-thumbnails' );
  add_image_size('650x366', 650, 366, true);
  add_image_size('300x169', 300, 169, true);

}
endif; // ajh_setup
add_action( 'after_setup_theme', 'ajh_setup' );

// Register Dynamic Sidebar 'Sidebar'
function ajh_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ajh' ),
		'id'            => 'sidebar',
		'description'		=> 'Widgets in this sidebar will be displayed on Posts & Pages.',
    'class'         => 'sidebar',
		'before_widget' => '<aside class="widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="h3">',
		'after_title'   => '</h3>'
  ) );
}
add_action( 'widgets_init', 'ajh_widgets_init' );

// Load jQuery
if ( !is_admin() ) {
  wp_deregister_script('jquery');
  wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"), false);
  wp_enqueue_script('jquery');

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

// Hide Admin Bar
add_filter('show_admin_bar', '__return_false');

// Edit the Excerpt Length & String
function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Remove 'More...' link scroll
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

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
function rc_add_rel_attribute($link) {
  global $post;
  return str_replace('<a href', '<a class="fancybox" rel="gallery" href', $link);
}
add_filter('wp_get_attachment_link', 'rc_add_rel_attribute');

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

// Remove <p> tags from around images
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

// Small Performance Boost
remove_filter('atom_service_url','atom_service_url_filter');

// remove version info from head and feeds for security reasons
function complete_version_removal() { 
	return ''; 
}
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
      font-size: 18px;
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

// Shows Performance in the Footer
function ajh_performance( $visible = false ) {
  $stat = sprintf(  '%d queries in %.3f seconds, using %.2fMB memory',
    get_num_queries(),
    timer_stop( 0, 3 ),
    memory_get_peak_usage() / 1024 / 1024
    );
  echo $visible ? $stat : "<!-- {$stat} -->" ;
}
add_action( 'wp_footer', 'ajh_performance', 20 );

// Snippets
require get_template_directory() . '/cpt/snippets.php';

// Portfolio
require get_template_directory() . '/cpt/portfolio.php';

// Parse Youtube URL
require get_template_directory() . '/cpt/youtube-url.php';