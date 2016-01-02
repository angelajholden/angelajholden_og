<section class="skills">
  <div class="wrap">
  	<article>
  		<h2>Skills & Services</h2>
  		<p>
  			<span>Web design is a broad field and many people specialize, or have an expertise. I work on the</span><span>front end of a website, which means I create a design, then I build it with HTML5, CSS and WordPress.</span><span>All of my work is responsive and optimized for tablets and mobile devices.</span>
  		</p>
  	</article>
  	
    <div class="ajh-skills clearfix">

	  	<?php
				$args = array(
					'post_type' => 'ajhskill',
					'post_status' => 'publish',
					'order' => 'asc',
					'showposts' => -1
				);
				$skill_loop = new WP_Query( $args );
					while ( $skill_loop->have_posts() ) : $skill_loop->the_post(); ?>

		      <aside>
		      	<a href="<?php the_permalink(); ?>">
		        	<span class="fa <?php echo get_post_meta(get_the_ID(), 'font-awesome', true); ?>"></span>
		        	<h3><?php the_title(); ?></h3>
		        	<?php the_excerpt(); ?>
		        </a>
		      </aside>

	      <?php	endwhile; ?>
			<?php wp_reset_postdata(); ?>

    </div>
  </div><?php // End .wrap ?>
</section>