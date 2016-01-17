<?php

// Search Bar
if ( ! function_exists( 'ajh_search' ) ) :
function ajh_search() { ?>
	<div class="search404">
		  <form action="<?php echo home_url( '/' ); ?>" method="get">
		    <fieldset class="clearfix">
		      <label class="screen-reader-text">Search</label>
		      <input class="Input404" name="s" type="search" placeholder="Search">
		      <input class="Image404" name="submit" type="submit" value="Search">
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
	  $url  = isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
    $url .= '://' . $_SERVER['SERVER_NAME'];
    $url .= in_array( $_SERVER['SERVER_PORT'], array('80', '443') ) ? '' : ':' . $_SERVER['SERVER_PORT'];
    $url .= $_SERVER['REQUEST_URI'];
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

// Footer Social Profiles
if ( ! function_exists('ajh_social_profiles') ) :
function ajh_social_profiles() { ?>
	<ul class="social">
		<li class="facebook">
			<a href="//www.facebook.com/angelaholdendesign" title="Facebook" target="_blank">
				<span class="fa fa-facebook"></span>
				<span class="screen-reader-text">Facebook</span>
			</a>
		</li>

		<li class="github">
			<a href="//github.com/angelajholden" title="Github" target="_blank">
				<span class="fa fa-github-alt"></span>
				<span class="screen-reader-text">Github</span>
			</a>
		</li>

		<li class="google">
			<a href="//plus.google.com/u/0/+AngelaHoldenDesign/posts" title="Google Plus" target="_blank">
				<span class="fa fa-google-plus"></span>
				<span class="screen-reader-text">Google Plus</span>
			</a>
		</li>

		<li class="instagram">
			<a href="//instagram.com/angelajholden" title="Instagram" target="_blank">
				<span class="fa fa-instagram"></span>
				<span class="screen-reader-text">Instagram</span>
			</a>
		</li>
		<li class="linkedin">
			<a href="//www.linkedin.com/in/angelajholden" title="LinkedIn" target="_blank">
				<span class="fa fa-linkedin"></span>
				<span class="screen-reader-text">LinkedIn</span>
			</a>
		</li>

		<li class="pinterest">
			<a href="//www.pinterest.com/angelajholden/" title="Pinterest" target="_blank">
				<span class="fa fa-pinterest-p"></span>
				<span class="screen-reader-text">Pinterest</span>
			</a>
		</li>
	</ul>
<?php }
endif;

// Instafeed
if ( ! function_exists('ajh_instafeed') ) :
function ajh_instafeed() { ?>
	<section class="instagram">
		<h1>Instagram</h1>
		<div id="instafeed" class="wrap"></div>
	</section>
<?php }
endif;