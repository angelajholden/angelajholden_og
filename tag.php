<?php 
  get_header(); 
  global $query_string;
  query_posts( $query_string . '&showposts=-1' );
?>

  <header>
    <h1>Tag: <?php single_tag_title(); ?></h1>
    <p>These are all of the posts about <?php single_cat_title(); ?>.</p>
  </header>

  	<div class="blogWrap clearfix">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  		<article class="archivePost clearfix">

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <p>Posted in <?php the_category(','); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time></p>

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

      <?php endwhile; else: ?>
      <?php endif; ?>

  	</div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>