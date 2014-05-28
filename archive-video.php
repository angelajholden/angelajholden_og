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

					<article class="video">
					<h2 class="videoTitle"><?php the_title(); ?></h2>
				    <figure>
				    	<?php 
								$video = get_post_meta( get_the_ID(), 'video_url', true );
								// check if the custom field has a value
								if( ! empty( $video ) ) { ?>
								  <a class="fancybox fancybox.iframe" href="<?php echo parse_youtube_url($video,'embedurl'); ?>">
							    <img class="videoThumb" src="<?php echo parse_youtube_url($video,'mqthumb'); ?>"></a>
								<?php } ?>
				    </figure>
				  </article>

			  <?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

		</div><?php //.blogWrap ?>

  <?php get_sidebar(); ?>
<?php get_footer(); ?>