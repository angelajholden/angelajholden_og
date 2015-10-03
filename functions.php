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
	  add_image_size( 'project', 1000, 563, array( 'center', 'top') );

	}
endif; // ajh_setup
add_action( 'after_setup_theme', 'ajh_setup' );

// Load jQuery
if (!is_admin()) {
function ajh_enqueue_scripts_styles() {
  // Styles
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . "/css/main.css" );
	wp_enqueue_style( 'font-awesome', "//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" );
	wp_enqueue_style( 'web-fonts', "//fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600" );

  // jQuery
  wp_deregister_script('jquery');
  wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js", false, null);
  wp_enqueue_script('jquery');

  // jQuery UI
  wp_deregister_script('jquery-ui');
  wp_register_script('jquery-ui', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js", false, null);
  wp_enqueue_script('jquery-ui');

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
	return '';
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
      padding: 2.5% 0;
    }
    body.login div#login h1 a {
      background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png');
      height: 15px;
      width: 150px;
      text-indent: -9999px;
      margin: 0 auto;
      padding: 168px 0 0 0;
      color: #555;
      background-size: 150px 168px;
      font-size: 18px;
      line-height: 1;
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

function ajh_bg_video() { ?>
<?php if (is_page_template('template-homepage.php')) : ?>
	<script>
	var $a=jQuery.noConflict();$a(document).ready(function(){function scaleVideo(){var windowHeight=$a(window).height(),windowWidth=$a(window).width(),videoNativeWidth=$a("video#bgvideo")[0].videoWidth,videoNativeHeight=$a("video#bgvideo")[0].videoHeight,heightScaleFactor=windowHeight/videoNativeHeight,widthScaleFactor=windowWidth/videoNativeWidth;if(widthScaleFactor>heightScaleFactor)var scale=widthScaleFactor;else var scale=heightScaleFactor;var scaledVideoHeight=videoNativeHeight*scale,scaledVideoWidth=videoNativeWidth*scale;$a("video#bgvideo").height(scaledVideoHeight),$a("video#bgvideo").width(scaledVideoWidth)}$a("video#bgvideo").on("loadedmetadata",scaleVideo),$a(window).on("resize",scaleVideo)});
	</script>
<?php endif; ?>
<?php }
add_action('wp_head', 'ajh_bg_video');

// Update Your Browser
function update_your_browser() { ?>
	<script> 
		var $buoop = {c:2}; 
		function $buo_f(){ 
		 var e = document.createElement("script"); 
		 e.src = "//browser-update.org/update.js"; 
		 document.body.appendChild(e);
		};
		try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
		catch(e){window.attachEvent("onload", $buo_f)}
	</script> 
<?php }
add_action('wp_head', 'update_your_browser');

/**
 * Disable the emoji's
 */
function ajh_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'ajh_disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

// Check if there are any search results
function is_search_has_results() {
  global $wp_query;
  $result = ( 0 != $wp_query->found_posts ) ? true : false;
  return $result;
}

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
require get_template_directory() . '/inc/youtube-url.php';

// Template Tags
require get_template_directory() . '/inc/template-tags.php';

// SVGs
require get_template_directory() . '/inc/svg.php';
