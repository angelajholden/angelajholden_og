<?php get_header(); the_post(); ?>

  <div class="blogSpace"></div>

    <div class="blogWrap">

      <article class="singlePost">

        <header>
          <h1><?php the_title(); ?></h1>
        </header>

        <?php if ( has_post_thumbnail() ) { ?>
          <figure>
            <?php the_post_thumbnail('full'); ?>
            <figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
          </figure>
        <?php } ?>

        <p>Posted on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time></p>

        <div class="theTags"><?php the_terms( $snippet->ID, 'keyword', 'Keywords: ', ' <span>•</span> ' ); ?></div>

          <?php 
            $video = get_post_meta( get_the_ID(), 'video_url', true );
            if( ! empty( $video ) ) { ?>
            <figure class="iframe">
              <?php echo parse_youtube_url($video,'embed'); ?>
            </figure>
          <?php } ?>

          <?php the_content(); ?>

            <?php edit_post_link('Edit'); ?>

          <?php include('inc/share.php'); ?>

      </article>

      <p><a href="<?php bloginfo('url') ?>/main-archive/">View All Articles</a></p>

    </div><?php //Blog Wrap ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>