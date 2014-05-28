<?php get_header(); the_post(); ?>

  <div class="blogSpace"></div>

    <div class="blogWrap">

      <article class="singlePost">

        <header>
          <h1><?php the_title(); ?></h1>
        </header>

        <?php if ( has_post_thumbnail() ) { ?>
          <figure><?php the_post_thumbnail('full'); ?></figure>
        <?php } ?>

        <p>Posted in <?php the_category(','); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time>.</p>

          <?php the_content(); ?>

          <?php the_tags( 'Tagged: ', ' • ' ); ?>

          <hr>

        <?php include('inc/share.php'); ?>

      </article>

    </div><?php //Blog Wrap ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>