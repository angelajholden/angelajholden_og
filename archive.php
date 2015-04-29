<?php get_header(); ?>

  <div class="wrap clearfix">

	  <header>
		  <?php if (is_category()) : ?>
		    <h1><?php single_cat_title(); ?></h1>
  	  	<nav>
			  	<ul class="cat-nav">
				  	<?php $args = array(
				  		'hierarchical' => 0, 
				  		'title_li' => __( '' ),
				  		'use_desc_for_title' => 0
				  	); wp_list_categories( $args ); ?>
				  </ul>
				</nav>
		    <p><?php echo category_description(); ?></p>
		  <?php elseif (is_tag()) : ?>
		  	<h1>Posts Tagged <?php single_tag_title(); ?></h1>
		  <?php elseif (is_archive()) : ?>
		  	<h1>Latest Posts</h1>
		  <?php endif; ?>
	  </header>

	  <hr>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  		<article class="archivePost clearfix">

        <h2 class="archiveTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <p class="postMeta">Category <span class="bullet">&bull;</span> <?php the_category(','); ?> 
          	<?php comments_popup_link(
	          	__( '<span class="comments-icon fa fa-comment-o"></span>0', 'angelajholden-v3' ), 
					    __( '<span class="comments-icon fa fa-comment-o"></span>1', 'angelajholden-v3' ), 
					    __( '<span class="comments-icon fa fa-comment-o"></span>%', 'angelajholden-v3' )
	          ); ?>
          	<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time>
          </p>

          <?php the_excerpt(); ?>

      </article>

		<?php endwhile; else : ?>
		<?php endif; ?>

		<?php the_posts_navigation(); ?>

  </div>

<?php get_footer(); ?>