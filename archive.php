<?php 
/*

Template Name: Main Archive

*/
get_header(); the_post(); ?>

  <header>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
  </header>

  	<div class="blogWrap clearfix">

      <?php
        $args = array(
          'post_type'   => 'post',
          'post_status' => 'publish',
          'showposts'   => -1
        );
        $posts_loop = new WP_Query( $args );
        while ( $posts_loop->have_posts() ) : $posts_loop->the_post(); ?>

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

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

  	</div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>