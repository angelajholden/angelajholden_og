<?php get_header(); the_post(); ?>

  <header>
    <h1><?php the_title(); ?></h1>
  </header>

    <div class="blogWrap">

      <article class="singlePost">

        <?php $video = get_post_meta( get_the_ID(), 'video_url', true );
            if( ! empty( $video ) ) { ?>
            <figure class="iframe">
              <?php echo parse_youtube_url($video,'embed'); ?>
            </figure>
        <?php } elseif ( has_post_thumbnail() ) { ?>
          <figure>
            <?php the_post_thumbnail('full'); ?>
            <figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
          </figure>
        <?php } ?>

        <?php if ( has_tag('demo') ) { ?>
          <p class="demo-button">
          	<a href="<?php echo get_post_meta(get_the_ID(), 'live_demo', true); ?>" target="_blank">Live Demo</a>

          	<?php if (get_post_meta(get_the_ID(), 'download', true)) { ?>
          		<a href="<?php echo get_post_meta(get_the_ID(), 'download', true); ?>">Download</a>
          	<?php } ?>

          	<?php if (get_post_meta(get_the_ID(), 'purchase', true)) { ?>
          		<a href="<?php echo get_post_meta(get_the_ID(), 'purchase', true); ?>" target="_blank">Purchase</a>
          	<?php } ?>

          </p>
        <?php } ?>

        <p>Posted in <?php the_category(','); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time></p>

         <div class="theTags"><?php the_tags( 'Tagged: ', ' <span>•</span> ', '' ); ?></div>

          <?php the_content(); ?>

          <div class="edit-button"><?php edit_post_link('Edit'); ?></div>

          <?php include('inc/share.php'); ?>

        <div class="comments"><?php comments_template(); ?></div>

      </article>

      <p><a href="<?php bloginfo('url') ?>/main-archive/">View All Articles</a></p>

    </div><?php //Blog Wrap ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>