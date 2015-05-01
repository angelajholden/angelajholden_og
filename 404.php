<?php get_header(); ?>

  <section class="wrap clearfix">

  	<header>
  		<h1>Error 404</h1>
  	</header>

  	<hr>

		<p><?php _e( 'Nothing found. Try one of the links below or try searching again.', 'angelajholden-v3' ); ?></p>

		<?php ajh_search(); ?>

		<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

		<div class="widget widget_categories">
			<h2 class="widget-title"><?php _e( 'Categories', 'angelajholden-v3' ); ?></h2>
			<ul>
			<?php
				wp_list_categories( array(
					'orderby'    => 'count',
					'order'      => 'DESC',
					'show_count' => 1,
					'title_li'   => '',
					'number'     => 10,
				) );
			?>
			</ul>
		</div><!-- .widget -->

		<?php
			/* translators: %1$s: smiley */
			$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'angelajholden-v3' ), convert_smilies( ':)' ) ) . '</p>';
			the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
		?>

		<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

  </section>

<?php get_footer(); ?>