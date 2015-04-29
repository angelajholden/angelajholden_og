<?php
	get_header();
	global $query_string;
	query_posts( $query_string . '&showposts=-1' );
?>

  <section class="wrap clearfix">

	  <header>
	  	<h1>Services</h1>
	  </header>

	  <p>I'm a UI Designer and Front End Developer with an expertise building responsive Photoshop to finish WordPress websites. My skillset, however, is versatile and I'm hired to work on many different types of projects. This will give you an idea of the work I do, the tools I use, and my terms if you’d like to hire me.</p>

	  <hr>

  		<div id="tabs">

  			<ul>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				    <li><a href="#<?php post_name(); ?>"><?php the_title(); ?></a></li>

				  <?php endwhile; else : ?>
					<?php endif; ?>

			  </ul>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				  <article id="<?php post_name(); ?>">
				  	<?php the_content(); ?>
				  </article>

				<?php endwhile; else : ?>
				<?php endif; ?>

			</div>

  </section>

<?php get_footer(); ?>