<?php get_header(); ?>

  <div class="wrap clearfix">

	  <header>
		  <h1>Main Archive</h1>
			<p>This is the main archive for all blog posts and categories.</p>
	  </header>

	  <?php ajh_search(); ?>

	  <hr>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  		<article class="archivePost clearfix">

        <h2 class="archiveTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <p class="postMeta">Category <span class="bullet">&bull;</span> <?php the_category(','); ?><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time></p>

          <?php the_excerpt(); ?>

      </article>

		<?php endwhile; else : ?>
		<?php endif; ?>

		<?php the_posts_navigation(); ?>

  </div>

<?php get_footer(); ?>