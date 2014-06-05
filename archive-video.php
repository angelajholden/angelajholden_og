<?php 
/*

Template Name: Videos

*/
get_header(); the_post(); ?>

	<header>
		<h1>Videos</h1>
		<?php the_content(); ?>
	</header>

		<div class="blogWrap clearfix">

			<?php
				$args= array(
					'post_type' => 'video',
					'post_status' =>'publish',
					'showposts' => -1,
					'order' => 'title'
				);
					$video_loop = new WP_Query($args);
					while ( $video_loop->have_posts() ) : $video_loop->the_post(); ?>

					<article class="video clearfix">
					<h2 class="videoTitle"><?php the_title(); ?></h2>
					<p class="theTags">Posted on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time('F j, Y'); ?></time>. <?php the_terms( $video->ID, 'topic', 'Topics: ', ' <span>•</span> ' ); ?></p>

		    	<?php 
						$video = get_post_meta( get_the_ID(), 'video_url', true );
						if( ! empty( $video ) ) { ?>
						<figure>
					    <img class="videoThumb" src="<?php echo parse_youtube_url($video,'mqthumb'); ?>">
				    </figure>
				    <?php the_excerpt(); ?>
				    <p class="videoButton"><a class="readMore fancybox fancybox.iframe" href="<?php echo parse_youtube_url($video,'embedurl'); ?>">Watch Video</a></p>
						<?php } ?>
				  </article>

			  <?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

		</div><?php //.blogWrap ?>

  <?php get_sidebar(); ?>
<?php get_footer(); ?>