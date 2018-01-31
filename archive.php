<?php get_header(); ?>

  <div class="wrap clearfix">

	  <header>
		  <?php if (is_category()) : ?>
		    <h1><?php single_cat_title(); ?></h1>
		    <?php /*
  	  	<nav>
			  	<ul class="cat-nav">
			  		<li><a href="<?php bloginfo('url') ?>/blog/">All Posts</a></li>
				  	<?php $args = array(
				  		'hierarchical' => 0, 
				  		'title_li' => __( '' ),
				  		'use_desc_for_title' => 0
				  	); wp_list_categories( $args ); ?>
				  </ul>
				</nav> */ ?>
		  <?php elseif (is_tag()) : ?>
		  	<h1>Posts Tagged: <?php single_tag_title(); ?></h1>
		  <?php elseif (is_archive()) : ?>
		  	<h1>Latest Posts</h1>
		  <?php endif; ?>
	  </header>

	  <hr />

	  <main class="content">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	  		<article <?php post_class('archivePost clearfix'); ?>>

					<?php if(has_post_thumbnail()) : ?>
						<a class="feat-title-link" href="<?php the_permalink(); ?>">
							<figure class="feat-img-post"><?php the_post_thumbnail(); ?></figure>
						</a>
					<?php else : ?>
						<a class="feat-title-link" href="<?php the_permalink(); ?>">
							<div class="feat-img-placeholder">
								<div class="feat-title"><?php the_title(); ?></div>
							</div>
						</a>
					<?php endif; ?>

	        <h2 class="archiveTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	        <p class="postMeta">Category <span class="bullet">&bull;</span> <?php the_category(','); ?></p>

	      </article>

			<?php endwhile; else : ?>
			<?php endif; ?>

		</main>

		<hr />

		<?php the_posts_pagination( array(
		  'mid_size' => 2,
		  'prev_text' => __( '⟨', 'textdomain' ),
		  'next_text' => __( '⟩', 'textdomain' ),
		) ); ?>

  </div>

<?php get_footer(); ?>