<?php 
get_header(); 
global $query_string;
query_posts( $query_string . '&showposts=-1' );
?>

	<header>
		<h1>Videos for <?php single_tag_title(); ?></h1>
    <p>These are all of the videos for the topic ‘<?php single_tag_title(); ?>’</p>
	</header>

		<div class="blogWrap clearfix">

			<?php while (have_posts() ) : the_post(); ?>

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

			<div style="clear:both;"><a href="<?php bloginfo('url') ?>/videos/">View All Videos</a></div>

		</div><?php //.blogWrap ?>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>