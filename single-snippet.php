<?php get_header(); the_post(); ?>

    <div class="blogWrap">

      <article class="singlePost">

        <header>
          <h1><?php the_title(); ?></h1>
        </header>

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

        <div class="comments"><?php comments_template(); ?></div>

      </article>

      <p><a href="<?php bloginfo('url') ?>/snippets/">View All Snippets</a></p>

    </div><?php //Blog Wrap ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>