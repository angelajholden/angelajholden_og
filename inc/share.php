<?php function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  return $url;
} ?>
<?php $encoded_url = urlencode( getUrl() );
  if ( !empty($encoded_url) ) { ?>
  <div class="sharing">
	  <a id="popup" class="facebook share" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $encoded_url; ?>" target="_blank"><?php include('facebook.svg'); ?><span>Facebook</span></a>
		<a id="popup" class="twitter share" href="https://twitter.com/intent/tweet?url=<?php echo $encoded_url; ?>" target="_blank"><?php include('twitter.svg'); ?><span>Twitter</span></a>
		<a id="popup" class="google share" href="https://plus.google.com/share?url=<?php echo $encoded_url; ?>" target="_blank"><?php include('googleplus.svg'); ?><span>Google</span></a>
	</div>
 <?php } ?>
