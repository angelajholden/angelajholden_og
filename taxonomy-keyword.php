<?php 
get_header(); 
global $query_string;
query_posts( $query_string . '&showposts=-1' );
?>

  <header>
    <h1>Snippets for <?php single_tag_title(); ?></h1>
    <p>These are all of the snippets with the keyword ‘<?php single_tag_title(); ?>’</p>
  </header>

  	<div class="blogWrap clearfix">

      <?php include('search.php'); ?>

      <?php while (have_posts() ) : the_post(); ?>

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
              $trimmed_content = wp_trim_words( $content, 20, '... <a class="archiveLink" href="'. get_permalink() .'">Read More</a>' );
              echo $trimmed_content;
            ?>
          </p>

        </article>

      <?php endwhile; ?>

      <div style="clear:both;"><a href="<?php bloginfo('url') ?>/snippets/">View All Snippets</a></div>

  	</div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>