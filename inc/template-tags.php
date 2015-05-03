<?php

// Search Bar
if ( ! function_exists( 'ajh_search' ) ) :
function ajh_search() { ?>
	<div class="search404">
		  <form action="<?php echo home_url( '/' ); ?>" method="get">
		    <fieldset>
		      <label class="screen-reader-text">Search</label>
		      <input class="Input404" name="s" type="search" placeholder="Search...">
		      <input class="Image404" name="submit" type="submit" value="Submit">
		    </fieldset>
		  </form>
		</div>
<?php }
endif;

// WordPress Sharing Buttons
if ( ! function_exists( 'wordpress_sharing' ) ) :
function wordpress_sharing() { ?>
	<div class="sharing">
	<?php function getUrl() {
	  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
	  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
	  $url .= $_SERVER["REQUEST_URI"];
	  return $url;
	} ?>
		<?php $encoded_url = urlencode( getUrl() );
		  if ( !empty($encoded_url) ) { ?>
			  <a class="facebook share" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $encoded_url; ?>" title="Facebook" target="_blank">
			  	<span class="fa fa-facebook"></span>
			  	<span class="screen-reader-text">Facebook</span></a>
				<a class="twitter share" href="https://twitter.com/intent/tweet?url=<?php echo $encoded_url; ?>" title="Twitter" target="_blank">
					<span class="fa fa-twitter"></span>
					<span class="screen-reader-text">Twitter</span></a>
				<a class="google share" href="https://plus.google.com/share?url=<?php echo $encoded_url; ?>" title="Google Plus" target="_blank">
					<span class="fa fa-google-plus"></span>
					<span class="screen-reader-text">Google</span></a>
				<a class="linkedin share" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $encoded_url; ?>" title="LinkedIn" target="_blank">
					<span class="fa fa-linkedin"></span>
					<span class="screen-reader-text">LinkedIn</span></a>
				<a class="email share" href="mailto:?body=<?php echo $encoded_url; ?>" title="Email" target="_blank">
					<span class="fa fa-envelope"></span>
					<span class="screen-reader-text">LinkedIn</span></a>
		<?php } ?>
		<script type="text/javascript" async data-pin-shape="round" data-pin-height="32" data-pin-hover="true" src="//assets.pinterest.com/js/pinit.js"></script>
	</div>
<?php }
endif;
