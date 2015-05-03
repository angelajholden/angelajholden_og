<?php get_header(); ?>

  <section class="wrap">

  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article class="clearfix">

	    <header>
		    <h1><?php the_title(); ?></h1>
		    <p class="completed">Completed <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F Y'); ?></time></p>
		  </header>

        <figure><?php the_post_thumbnail('full'); ?></figure>

        <div class="main"><?php the_content(); ?></div>

      </article>

      <hr>

        <?php wordpress_sharing(); ?>

        <?php if (has_tag()) : ?>
          <div class="theTags"><?php the_tags( 'Tagged: ', ' <span class="bullet">&bull;</span> ', '' ); ?></div>
        <?php endif; ?>

        <?php the_post_navigation(); ?>

      <div class="edit-button"><?php edit_post_link('Edit'); ?></div>

    <?php endwhile; else : ?>
		<?php endif; ?>

  </section><?php //Blog Wrap ?>

<?php get_footer(); ?>