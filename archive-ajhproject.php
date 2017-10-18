<?php get_header(); ?>

  <section class="wrap clearfix">

	  <header>
	  	<h1>Projects</h1>
	  </header>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		    <a class="ajh-port" href="<?php the_permalink(); ?>">
			    <article>
			    	<h2><?php the_title(); ?></h2>
			    	<p class="completed"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F Y'); ?></time></p>
			    	<figure class="project-img"><?php the_post_thumbnail('large'); ?>
			    		<div class="overlay">
				    		<div class="project-link">
				    			<span class="fa fa-link"></span>
				    			<span class="screen-reader-text">Read More</span>
				    		</div>
			    		</div>
			    	</figure>
			    </article>
		    </a>

		  <?php endwhile; else : ?>
			<?php endif; ?>

			<?php the_posts_pagination( array(
			  'mid_size' => 2,
			  'prev_text' => __( '⟨', 'textdomain' ),
			  'next_text' => __( '⟩', 'textdomain' ),
			) ); ?>

  </section>

<?php get_footer(); ?>