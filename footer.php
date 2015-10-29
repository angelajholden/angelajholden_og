		    	<div id="contact"></div>

		    	<section class="contact clearfix">
		    		<div class="wrap">
		    			<h2>Contact Me</h2>
		    			<?php if(!is_page('questionnaire')) : ?>
		    				<p>Please consider filling out my <a href="<?php bloginfo('url'); ?>/questionnaire/">questionnaire.</a></p>
		    			<?php endif; ?>
			  	  	<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
			  	  </div>
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