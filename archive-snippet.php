<?php get_header(); ?>

  <div class="wrap clearfix">

  <header>
    <h1>Snippets</h1>
    <p>These are some of the snippets that I've collected, modified, and use frequently in my projects. When possible, an attribution for the original source is provided.</p>
  </header>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  		<article class="archivePost clearfix">
				<h2 class="archiveTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="theTags"><?php the_terms( $snippet->ID, 'keyword', 'Keywords: ', ' <span>•</span> ' ); ?></div>
			</article>

		<?php endwhile; else : ?>
		<?php endif; ?>

		<?php the_posts_navigation(); ?>

  </div>

<?php get_footer(); ?>