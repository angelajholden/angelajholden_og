<div id="accordion" class="fadeIn">

<?php
	$args = array(
		'post_type' => 'ajhskill',
		'post_status' => 'publish',
		'order' => 'desc',
		'showposts' => -1
	);
	$skill_loop = new WP_Query( $args );
		while ( $skill_loop->have_posts() ) : $skill_loop->the_post(); ?>

	  	<h2><?php the_title(); ?></h2>
		  <article id="<?php post_name(); ?>">
		  	<?php the_content(); ?>
		  </article>
		
		<?php	endwhile; ?>
	<?php wp_reset_postdata(); ?>

</div><?php // End #accordian ?>