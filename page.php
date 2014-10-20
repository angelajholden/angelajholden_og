<?php get_header(); the_post(); ?>

  <div class="blogSpace"></div>

  <header>
    <h1><?php the_title(); ?></h1>
  </header>

    <div class="blogWrap">

      <article class="singlePost">

          <?php if ( has_post_thumbnail() ) { ?>
            <figure>
              <?php the_post_thumbnail('full'); ?>
              <figcaption><?php the_post_thumbnail_caption(); ?></figcaption>
            </figure>
          <?php } ?>

          <?php the_content(); ?>

          <?php if (is_page('Contact')) {
          	echo do_shortcode('[contact-form-7 id="1453" title="Website Inquiry"]');
          	echo '<style>.side{padding:0;margin-bottom:0;}</style>';
          } ?>

        <?php edit_post_link('Edit'); ?>

      </article>

    </div><?php //Blog Wrap ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>