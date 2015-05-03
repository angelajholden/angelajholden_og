<?php get_header(); ?>

  <section class="wrap clearfix">

	  <header>
	  	<h1>Projects</h1>
	  </header>

	  <p>I'm a Front End Developer with an expertise building responsive WordPress websites. My skillset, however, is versatile and I'm hired to work on many different types of projects.</p>

	  <hr>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		    <article class="ajh-port">
		    	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		    	<?php the_excerpt(); ?>
		    	<figure><?php the_post_thumbnail('full'); ?></figure>
		    </article>

		    <hr>

		  <?php endwhile; else : ?>
			<?php endif; ?>

			<?php the_posts_navigation(); ?>

  </section>

<?php get_footer(); ?>