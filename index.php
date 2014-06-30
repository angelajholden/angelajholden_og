<?php get_header(); ?>

  <div class="blogSpace"></div>

    <div class="blogWrap">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
        <article class="archivePost clearfix">

          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <?php if ( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>">
              <figure><?php the_post_thumbnail('large'); ?></figure>
            </a>
          <?php } ?>

            <p>Posted in <?php the_category(','); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time></p>

            <p><?php the_excerpt(); ?></p>

          <p class="singleButton"><a class="readMore" href="<?php the_permalink(); ?>">Read more</a></p>

        </article>

      <?php endwhile; else: ?>
      <?php endif; ?>

      <div style="clear:both;"><a href="<?php bloginfo('url') ?>/main-archive/">View All Articles</a></div>

    </div><?php //Blog Wrap ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>