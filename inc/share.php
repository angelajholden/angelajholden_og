<?php function getUrl() {
  $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $url .= $_SERVER["REQUEST_URI"];
  return $url;
} ?>

<?php $encoded_url = urlencode( getUrl() );
  if ( !empty($encoded_url) ) { ?>
  <a class="readMore share" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $encoded_url; ?>" target="_blank">Facebook</a>
	<a class="readMore share" href="https://twitter.com/intent/tweet?url=<?php echo $encoded_url; ?>" target="_blank">Twitter</a>
	<a class="readMore share" href="https://plus.google.com/share?url=<?php echo $encoded_url; ?>" target="_blank">Google+</a>
  <a class="readMore share" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $encoded_url; ?>" target="_blank">LinkedIn</a>
 <?php } ?>