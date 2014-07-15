<?php 
/*

Template Name: Page w/Sidebar


*/
get_header(); the_post(); ?>

  <div class="blogSpace"></div>

  <?php include('search.php'); ?>

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

          <?php the_content(); ?>

        <?php edit_post_link('Edit'); ?>

      </article>

    </div><?php //Blog Wrap ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>