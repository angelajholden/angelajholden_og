<?php get_header(); ?>

  <section class="wrap clearfix">

	  <header>
	  	<h1>Projects</h1>
	  </header>

	  <p>I'm a Front End Developer with an expertise building responsive WordPress websites. My skillset, however, is versatile and I'm hired to work on many different types of projects. Please see my <a href="https://github.com/angelajholden" target="_blank">Github</a> profile for code examples.</p>

	  <hr>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		    <a class="ajh-port" href="<?php the_permalink(); ?>">
			    <article>
			    	<h2><?php the_title(); ?></h2>
			    	<figure class="project-img"><?php the_post_thumbnail('full'); ?>
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

			<?php the_posts_navigation(); ?>

  </section>

<?php get_footer(); ?>