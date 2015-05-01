<?php get_header(); ?>

  <div class="wrap clearfix">

  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		  <header>
		    <h1><?php the_title(); ?></h1>
		  </header>

		  <hr>

	      <article class="singlePost">

	        <?php if ( has_post_thumbnail() ) { ?>
	          <figure>
	            <?php the_post_thumbnail('full'); ?>
	            <figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
	          </figure>
	        <?php } ?>

	        <?php the_content(); ?>

	      </article>

	    <?php endwhile; else : ?>
			<?php endif; ?>

		<?php edit_post_link('Edit'); ?>

  </div>

<?php get_footer(); ?>