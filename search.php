<?php get_header(); ?>

  <div class="wrap clearfix">

	  <header>
		  <h1>Search Results</h1>
	  </header>

	  <hr>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  		<article class="archivePost clearfix">

        <h2 class="archiveTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <p><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time></p>

          <?php the_excerpt(); ?>

      </article>

		<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria. Try searching again.' ); ?></p>
		<?php endif; ?>

		<?php ajh_search(); ?>

		<?php the_posts_navigation(); ?>

  </div>

<?php get_footer(); ?>