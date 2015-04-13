<?php 

/*
* -------------------------------- WP QUERY LOOP & PAGE NAV ---------------------------------
* ------------------ https://codex.wordpress.org/Class_Reference/WP_Query -------------------
http://wordpress.stackexchange.com/questions/120407/how-to-fix-pagination-for-custom-loops */

	if ( ! function_exists( 'ajh_custom_query_nav' ) ) :
	function ajh_custom_query_nav() { 
    // Define custom query parameters
		$custom_query_args = array( 
			'post_type'   => 'post',
      'post_status' => 'publish',
      'orderby'			=>	'DESC'
       );

		// Get current page and append to custom query parameters array
		$custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

		// Instantiate custom query
		$custom_query = new WP_Query( $custom_query_args );

		// Pagination fix
		$temp_query = $wp_query;
		$wp_query   = NULL;
		$wp_query   = $custom_query;

		// Output custom query loop
		if ( $custom_query->have_posts() ) :
		    while ( $custom_query->have_posts() ) :
		        $custom_query->the_post(); ?>

		        <article class="archive-content clearfix">
							<?php if (has_post_thumbnail()) {
								the_post_thumbnail('archive-size');
								} ?>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p class="xs-excerpt"><?php echo get_the_excerpt(); ?></p>
							<a class="learn-more" href="<?php the_permalink(); ?>">Learn More</a>
						</article>

					<?php endwhile;
					endif;
		// Reset postdata
		wp_reset_postdata(); ?>

		<?php // Custom query loop pagination ?>
		<nav class="navigation posts-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php _e( 'Posts navigation', 'obuinteractive' ); ?></h2>
			<div class="nav-links">
				<div class="nav-previous"><?php next_posts_link( 'Older posts', $custom_query->max_num_pages ); ?></div>
				<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>
			</div><!-- .nav-links -->
		</nav><!-- .navigation -->

		<?php // Reset main query object ?>
		<?php $wp_query = NULL;
					$wp_query = $temp_query;
		}
	endif;

 ?>