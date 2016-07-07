<?php get_header(); ?>

  <div class="wrap clearfix">

	  <header>
		  <?php if (is_category()) : ?>
		    <h1><?php single_cat_title(); ?></h1>
  	  	<nav>
			  	<ul class="cat-nav">
			  		<li><a href="<?php bloginfo('url') ?>/blog/">All Posts</a></li>
				  	<?php $args = array(
				  		'hierarchical' => 0, 
				  		'title_li' => __( '' ),
				  		'use_desc_for_title' => 0
				  	); wp_list_categories( $args ); ?>
				  </ul>
				</nav>
		    <?php echo category_description(); ?>
		  <?php elseif (is_tag()) : ?>
		  	<h1>Posts Tagged: <?php single_tag_title(); ?></h1>
		  <?php elseif (is_archive()) : ?>
		  	<h1>Latest Posts</h1>
		  <?php endif; ?>
	  </header>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  		<article class="archivePost clearfix">

        <h2 class="archiveTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <p class="postMeta">Category <span class="bullet">&bull;</span> <?php the_category(','); ?><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time></p>

          <p class="excerpt"><?php echo get_the_excerpt(); ?>... <a class="read-more" href="<?php the_permalink(); ?>">Read More</a></p>

      </article>

      <hr />

		<?php endwhile; else : ?>
		<?php endif; ?>

		<?php the_posts_pagination( array(
		  'mid_size' => 2,
		  'prev_text' => __( '⟨', 'textdomain' ),
		  'next_text' => __( '⟩', 'textdomain' ),
		) ); ?>

  </div>

<?php get_footer(); ?>