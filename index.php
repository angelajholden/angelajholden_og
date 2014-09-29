<?php get_header(); ?>

  <div class="blogSpace"></div>

    <header>
      <h1>Welcome!</h1>
      <p>My name is Angela and I'm a freelance web designer and developer in San Diego, CA. My expertise is Photoshop to finsih WordPress development, but I get hired to do all sorts of web related stuff.</p>
    </header>

    <div class="blogWrap frontWrap">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
        <article class="archivePost clearfix">

          <h2 class="archiveTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <?php $video = get_post_meta( get_the_ID(), 'video_url', true );
              if( ! empty( $video ) ) { ?>
            <a href="<?php the_permalink(); ?>">
              <figure><img src="<?php echo parse_youtube_url($video,'mqthumb'); ?>"></figure></a>
          <?php } elseif ( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>">
              <figure><?php the_post_thumbnail('650x366'); ?></figure>
            </a>
          <?php } ?>

            <p class="postMeta">Posted in <?php the_category(','); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time></p>

            <?php the_excerpt(); ?>

          <a class="readMore singleButton" href="<?php the_permalink(); ?>">Read more</a>

        </article>

      <?php endwhile; else: ?>
      <?php endif; ?>

      <div style="clear:both;"><a href="<?php bloginfo('url') ?>/main-archive/">View All Articles</a></div>

    </div><?php //Blog Wrap ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>