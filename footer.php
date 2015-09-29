				
				<?php //ajh_instafeed(); ?>

		    <div id="contact"></div>

		    <section class="contact clearfix">
		    	<div class="wrap">
		    		<h2>Contact Me</h2>
		    		<?php //<p class="sched"><span class="fa fa-calendar"></span><span class="message">You can call me anytime, but I prefer to schedule consultations so I can make sure I'm setting aside enough time to discuss your project. Let me know a date and time that works for you, and I'm usually available within 24 hours of your inquiry.</span></p>?>
			    	<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
			    	<p class="info">
			    		<span>(619) 798-6024</span>
			    		<span><a href="mailto:info@angelajholden.com">info@angelajholden.com</a></span>
			    		<span>San Diego, CA</span>
			    	</p>
			    </div>
			    <?php //get_template_part('inc/mailchimp'); ?>
		    </section>

		    <footer>

		      <div class="wrap clearfix">

		        <div class="ajh-footer">
		          <a id="totop" href="#top"><figure class="logoSVGfooter"><?php ajh_logo(); ?></figure></a>
		          <p class="copyright"><?php echo date('Y'); ?> &copy; <?php bloginfo('title'); ?></p>
		        </div>

		        <div class="ajh-footer">
		          <?php ajh_social_profiles(); ?>
		          <?php echo get_search_form(); ?>
		        </div>

		        <nav class="ajh-footer">
		        	<h3>Projects</h3>
		          <?php wp_nav_menu( array( 
		            'name'            => 'Footer One',
		            'theme_location'  => 'footer_one',
		            'container'       => 'false',
		            'menu_class' 			=> 'footer-nav',
		            'depth'						=> '1'
		          )); ?>
		        </nav>

		      </div><?php // End Footer Wrap ?>
		      <a href="#" class="scroll-top">↑</a>
		    </footer>
  		</div><?php // End .page-wrap ?>
    <?php wp_footer(); ?>
  </body>
</html>