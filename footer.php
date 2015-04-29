				
				<?php //include_once('inc/instafeed.php'); ?>

		    <div id="contact"></div>

		    <section class="contact clearfix">
		    	<div class="wrap">
		    		<h1>Contact Me</h1>
			    	<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
			    	<p class="info">
			    		<span>(619) 798-6024</span>
			    		<span><a href="mailto:info@angelajholden.com">info@angelajholden.com</a></span>
			    		<span>San Diego, CA</span>
			    	</p>
			    </div>
		    </section>

		    <footer>

		      <div class="wrap clearfix">

		        <div class="ajh-footer">
		          <a id="totop" href="#top"><img src="<?php bloginfo('template_url') ?>/images/logo.png" title="Angela J. Holden" alt="Angela J. Holden Website Design"></a>
		          <p class="copyright"><?php echo date('Y'); ?> &copy; <?php bloginfo('title'); ?><br>Angela Holden Design</p>
		        </div>

		        <div class="ajh-footer">
		          <?php include('inc/social.php'); ?>
		          <?php include('search.php'); ?>
		        </div>

		        <nav class="ajh-footer">
		        	<h3>Projects</h3>
		          <?php wp_nav_menu( array( 
		            'name'            => 'Footer Two',
		            'theme_location'  => 'footer_two',
		            'container'       => 'false',
		            'menu_class' 			=> 'footer-nav',
		            'depth'						=> '1'
		          )); ?>
		        </nav>

		      </div><?php // End Footer Wrap ?>

		    </footer>
  		</div><?php // End .page-wrap ?>
    <?php wp_footer(); ?>
  </body>
</html>