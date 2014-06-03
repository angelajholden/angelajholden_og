<?php 
/*

Template Name: Snippets

*/
get_header(); the_post(); ?>

  <header>
    <h1>Snippets</h1>
    <?php //the_content(); ?>
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

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <p>Posted on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time></p>

          <?php if ( has_post_thumbnail() ) { ?>
            <figure><?php the_post_thumbnail('thumbnail'); ?></figure>
          <?php } ?>

          <p class="archiveExcerpt">
            <?php
              $content = get_the_content();
              $trimmed_content = wp_trim_words( $content, 30, '... <a class="archiveLink" href="'. get_permalink() .'">Read More</a>' );
              echo $trimmed_content;
            ?>
          </p>

        </article>

      <?php  endwhile; ?>
      <?php wp_reset_postdata(); ?>

  	</div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>