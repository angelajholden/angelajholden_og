<?php 
/*

Template Name: Snippets

*/
get_header(); ?>

  <header>

    <h1>Snippets</h1>

    <p>These are some of the snippets that I've collected, modified, and use frequently in my projects. When possible, an attribution for the original source is provided.</p>

  </header>

  	<div class="blogWrap clearfix">

      <?php

        $args = array(
          'post_type'   => 'snippet',
          'post_status' => 'publish',
          'showposts'   => -1
        );
        $snippet_loop = new WP_Query( $args );

        while ( $snippet_loop->have_posts() ) : $snippet_loop->the_post(); ?>

  		<article class="archivePost clearfix">

          <?php if ( has_post_thumbnail() ) { ?>

            <a href="<?php the_permalink(); ?>">

            	<h2 class="archiveTitle"><?php the_title(); ?></h2>

              <figure class="snippetImage"><?php the_post_thumbnail('tiny'); ?></figure>

            </a>

          <?php } ?>

          <div class="theTags"><?php the_terms( $snippet->ID, 'keyword', 'Keywords: ', ' <span>•</span> ' ); ?></div>

        </article>

      <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>

  	</div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>