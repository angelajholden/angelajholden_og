<?php get_header(); ?>

  <div class="wrap clearfix">

  <header>
	  <?php if (is_category()) : ?>
	    <h1><?php single_cat_title(); ?></h1>
	    <p><?php echo category_description(); ?></p>
	  <?php elseif (is_tag()) : ?>
	  	<h1>Tag: <?php single_tag_title(); ?></h1>
	  <?php elseif (is_archive()) : ?>
	  	<h1>Latest Posts</h1>
	  <?php endif; ?>
  </header>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  		<article class="archivePost clearfix">

        <h2 class="archiveTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <p class="postMeta">Posted in <?php the_category(','); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time></p>

          <?php the_excerpt(); ?>

          <a class="readMore singleButton" href="<?php the_permalink(); ?>">Read more</a>

      </article>

		<?php endwhile; else : ?>
		<?php endif; ?>

		<?php the_posts_navigation(); ?>

  </div>

<?php get_footer(); ?>