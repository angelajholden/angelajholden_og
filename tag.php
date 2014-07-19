<?php 
  get_header(); 
  global $query_string;
  query_posts( $query_string . '&showposts=-1' );
?>

  <header>
    <h1><span><?php single_tag_title(); ?></span></h1>
    <p>These are all of the posts tagged ‘<?php single_cat_title(); ?>’</p>
  </header>

  <?php include('search.php'); ?>

  	<div class="blogWrap clearfix">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  		<article class="archivePost clearfix">

        <h2 class="archiveTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php $video = get_post_meta( get_the_ID(), 'video_url', true );
            if( ! empty( $video ) ) { ?>
          <a href="<?php the_permalink(); ?>">
            <figure><img class="videoThumb" src="<?php echo parse_youtube_url($video,'mqthumb'); ?>"></figure></a>
        <?php } elseif ( has_post_thumbnail() ) { ?>
          <a href="<?php the_permalink(); ?>">
            <figure><?php the_post_thumbnail('650x366'); ?></figure>
          </a>
        <?php } ?>

          <p>Posted in <?php the_category(','); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time></p>

          <p class="archiveExcerpt">
            <?php
              $content = get_the_content();
              $trimmed_content = wp_trim_words( $content, 20, '... <a class="archiveLink" href="'. get_permalink() .'">Read More</a>' );
              echo $trimmed_content;
            ?>
          </p>

        </article>

      <?php endwhile; else: ?>
      <?php endif; ?>

      <div style="clear:both;"><a href="<?php bloginfo('url') ?>/main-archive/">View All Articles</a></div>

  	</div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>