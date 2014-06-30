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

        <h2 class="archiveTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <p class="archiveTime">Posted on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time></p>

          <div class="theTags"><?php the_terms( $snippet->ID, 'keyword', 'Keywords: ', ' <span>•</span> ' ); ?></div>

          <?php if ( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>">
              <figure class="snippetImage"><?php the_post_thumbnail('full'); ?></figure>
            </a>
          <?php } ?>

          <p class="archiveExcerpt">
            <?php
              $content = get_the_content();
              $trimmed_content = wp_trim_words( $content, 20, '...<br /><a class="archiveLink" href="'. get_permalink() .'">Read More</a>' );
              echo $trimmed_content;
            ?>
          </p>

        </article>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

  	</div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>