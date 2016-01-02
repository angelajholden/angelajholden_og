<?php get_header(); ?>

  <div class="wrap clearfix">

	  <header>
		  <h1>Services</h1>
	  </header>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  		<article class="archivePost clearfix">

        <h2 class="archiveTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <p class="excerpt"><?php echo get_the_excerpt(); ?><a class="read-more" href="<?php the_permalink(); ?>">Read More</a></p>

      </article>

		<?php endwhile; else : ?>
		<?php endif; ?>

		<?php the_posts_navigation(); ?>

  </div>

<?php get_footer(); ?>