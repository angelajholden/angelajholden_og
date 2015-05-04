<?php 

if ( ! function_exists( 'ajh_setup' ) ) :
function ajh_setup() {

	// Main Nav
	register_nav_menus( array(
		'main_menu' => 'Main Menu',
		'footer_one' => 'Footer One',
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Featured Images
  add_theme_support( 'post-thumbnails' );


}
endif; // ajh_setup
add_action( 'after_setup_theme', 'ajh_setup' );
add_image_size( 'project', 1000, 563, array( 'center', 'top') );

// Load jQuery
if (!is_admin()) {
function ajh_enqueue_scripts_styles() {
  // Styles
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . "/css/main.css" );
	wp_enqueue_style( 'font-awesome', "//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" );

  // jQuery
  wp_deregister_script('jquery');
  wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js", false, null);
  wp_enqueue_script('jquery');

  // jQuery UI
  wp_deregister_script('jquery-ui');
  wp_register_script('jquery-ui', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js", false, null);
  wp_enqueue_script('jquery-ui');

  // Prism
  wp_register_script('prism', get_stylesheet_directory_uri() . "/js/prism.min.js");
  wp_enqueue_script('prism');

  // Fitvids
  wp_register_script('fitvids', get_stylesheet_directory_uri() . "/js/fitvids.min.js");
  wp_enqueue_script('fitvids');

  // Instafeed
  //wp_register_script('instafeed', get_stylesheet_directory_uri() . "/js/instafeed.min.js");
  //wp_enqueue_script('instafeed');

  // Global
  wp_register_script('global', get_stylesheet_directory_uri() . "/js/global.min.js");
  wp_enqueue_script('global');
	}
}
add_action("wp_enqueue_scripts", "ajh_enqueue_scripts_styles", 11);

// Sanitized Version of the Post Title
function post_name() {
  global $post;
  $title = sanitize_title($post->post_title);
  echo $title;
}
  
// Edit the Excerpt Length & String
function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More') . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Remove 'More...' link scroll
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

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

// Custom Post Types
require get_template_directory() . '/cpt/cpt.php';

// Parse Youtube URL
require get_template_directory() . '/cpt/youtube-url.php';

// Template Tags
require get_template_directory() . '/inc/template-tags.php';