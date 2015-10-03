<?php get_header(); ?>

  <section class="wrap">

  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article class="clearfix">

	    <header>
		    <h1><?php the_title(); ?></h1>
		    <p class="completed">Completed <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F Y'); ?></time></p>
		  </header>

        <figure class="project-img"><?php the_post_thumbnail('full', array('draggable' => 'false')); ?></figure>

        <?php if (get_post_meta(get_the_ID(), 'live_demo', true)) { ?>
		      <p class="demo-button">
		      	
	      		<a href="<?php echo get_post_meta(get_the_ID(), 'live_demo', true); ?>" target="_blank">View Site</a>

	      	<?php if (get_post_meta(get_the_ID(), 'download', true)) { ?>
	      		<a href="<?php echo get_post_meta(get_the_ID(), 'download', true); ?>" target="_blank">View Code</a>
	      	<?php } ?>

	      	<?php if (get_post_meta(get_the_ID(), 'purchase', true)) { ?>
	      		<a href="<?php echo get_post_meta(get_the_ID(), 'purchase', true); ?>" target="_blank">Purchase</a>
	      	<?php } ?>

		      </p>
		    <?php } ?>

        <div class="main"><?php the_content(); ?></div>

      </article>

      <hr>

        <?php wordpress_sharing(); ?>

        <?php if (has_tag()) : ?>
          <div class="theTags"><?php the_tags( 'Tagged: ', ' <span class="bullet">&bull;</span> ', '' ); ?></div>
        <?php endif; ?>

        <?php the_post_navigation(); ?>

   		<hr>

	    <figure class="gravatar"><?php echo get_avatar( get_the_author_meta('email'), '150' ); ?></figure>
	    <div class="author-bio clearfix">
				<h2 class="author-name"><?php echo get_the_author(); ?></h2>
				<p class="author-desc"><?php the_author_meta( 'description' ); ?></p>
			</div>

      <div class="edit-button"><?php edit_post_link('Edit'); ?></div>

    <?php endwhile; else : ?>
		<?php endif; ?>

  </section><?php //Blog Wrap ?>

<?php get_footer(); ?>