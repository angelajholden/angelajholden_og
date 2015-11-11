<section class="reviews">
	<div class="reviewbg">
		<div class="wrap">

			<h2>Reviews & Testimonials</h2>

	  	<ul class="rslides">

	    	<?php
		    	$args = array(
		    		'post_type' => 'ajhreview',
		    		'post_status' => 'publish',
		    		'orderby' => 'rand',
		    		'showposts' => 5
		    	);
	    	$ajhreview_loop = new WP_Query( $args );
	    	while ( $ajhreview_loop->have_posts() ) : $ajhreview_loop->the_post(); ?>

		    	<li><?php the_content(); ?></li>
	    	
	    	<?php	endwhile; ?>
	    	<?php wp_reset_postdata(); ?>

	    </ul>

	  </div>
	</div>
</section>