<div class="sidebarWrap">

	<?php if ( ! is_page ( 'Contact' ) ) { ?>

	<!-- Only show this content if it's NOT the Contact Page. -->

		<!-- Hire Me -->

		<aside class="side">

	  	<h3 class="h3">Hire Me</h3>

	  	<p class="hire-me">I'm available to <a href="<?php bloginfo('url'); ?>/contact/">discuss</a> your project.</p>

	  </aside>

	  <!-- Latest Snippets -->
    
	  <aside class="side">

	  	<h3 class="h3">Random Snippets</h3>

	  	<?php

		  	$args = array(
		  		'post_type' => 'snippet',
		  		'post_status' => 'publish',
		  		'orderby' => 'rand',
		  		'showposts' => 4
		  	);

		  	$snippet_loop = new WP_Query( $args );

		  	while ( $snippet_loop->have_posts() ) : $snippet_loop->the_post(); ?>

			  	<div class="side-snips clearfix">

			  		<a href="<?php the_permalink(); ?>">

			  			<?php if (has_tag('wp-snippet')) { ?>

				  			<figure class="side-snip-img wp"><span>wp</span></figure>

				  		<?php } elseif (has_tag('php-snippet')) { ?>

		        		<figure class="side-snip-img php"><span>php</span></figure>

		        	<?php } elseif (has_tag('css-snippet')) { ?>

		        		<figure class="side-snip-img css"><span>css</span></figure>

		        	<?php } elseif (has_tag('html-snippet')) { ?>

		        		<figure class="side-snip-img html"><span>html</span></figure>

		        	<?php } elseif (has_tag('js-snippet')) { ?>

		        		<figure class="side-snip-img js"><span>js</span></figure>

		        	<?php } ?>

				  		<h4><?php the_title(); ?></h4>

			  		</a>

			  	</div>
	  	
		  	<?php	endwhile; ?>

	  	<?php wp_reset_postdata(); ?>

	  </aside>

	  <!-- Latest Videos -->

	  <aside class="side">

	  	<h3 class="h3">Latest Videos</h3>

	  	<?php

		  	$args = array(
		  		'post_type' => 'post',
		  		'tag'	=> 'video',
		  		'post_status' => 'publish',
		  		'order' => 'desc',
		  		'showposts' => 2
		  	);

		  	$video_loop = new WP_Query( $args );

		  	while ( $video_loop->have_posts() ) : $video_loop->the_post(); ?>

			  	<div class="side-video clearfix">

			  		<?php $video = get_post_meta( get_the_ID(), 'video_url', true );

		            if( ! empty( $video ) ) { ?>

		          <a href="<?php the_permalink(); ?>">

		          	<h4><?php the_title(); ?></h4>

		            <figure><img src="<?php echo parse_youtube_url($video,'mqthumb'); ?>"></figure>

		          </a>

		        <?php } ?>

			  	</div>
	  	
		  	<?php	endwhile; ?>

	  	<?php wp_reset_postdata(); ?>

	  </aside>

	  <!-- Affiliates -->

	  <aside class="side afl">

	  	<h3 class="h3">Affiliates</h3>

		  <!-- Dollar Photo Club -->
			<a href="http://mbsy.co/9clQc" ><img class="afl-img" src="https://ambassador-api.s3.amazonaws.com/uploads/marketing/5205/2014_06_11_10_51_10.jpg" alt="Dollar Photo Club"/></a>

			&nbsp;

			<!-- Theme Forest -->
			<a href="http://themeforest.net/user/angelajholden/portfolio?ref=angelajholden"><img class="afl-img" src="/helsinki/wp-content/uploads/336x280_V3.jpg" alt="Theme Forest"></a>

			&nbsp;

			<!-- Media Temple -->
			<a href="http://mdtm.pl/ZIEdAF"><img class="afl-img" src="/helsinki/wp-content/uploads/media-temple-grid-336x280.gif" alt="Media Temple"></a>

		</aside>

	<?php } ?>

	<!-- Everything below this line is dynamic content from the Widget Area. -->

	<?php if (is_page('Contact') && is_active_sidebar('contact-page')) {

	  	dynamic_sidebar('contact-page');

	  	echo '<style>.pageWrap{min-height:100%;}</style>';

	  } elseif (is_active_sidebar('sidebar')) {

	  	dynamic_sidebar('sidebar'); } ?>

</div>