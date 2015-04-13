<?php get_header(); ?>

  <div class="wrap">

  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	  <header>
	    <h1><?php the_title(); ?></h1>
	  </header>

      <article class="singlePost">

        <p>Posted in <?php the_category(','); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time></p>

        <?php $video = get_post_meta( get_the_ID(), 'video_url', true );
          if( ! empty( $video ) ) { ?>
            <figure class="iframe">
              <?php echo parse_youtube_url($video,'embed'); ?>
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

          <?php the_content(); ?>

        </article>

         <div class="theTags"><?php the_tags( 'Tagged: ', ' <span>•</span> ', '' ); ?></div>

          <?php the_post_navigation(); ?>

          <div class="edit-button"><?php edit_post_link('Edit'); ?></div>

          <?php //include('inc/share.php'); ?>

        <div class="comments"><?php comments_template(); ?></div>

      <?php endwhile; else : ?>
			<?php endif; ?>

    </div><?php //Blog Wrap ?>

<?php get_footer(); ?>