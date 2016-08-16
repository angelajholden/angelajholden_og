<?php 
/*
* Template Name: Homepage
*/
get_header(); the_post(); ?>

	<section class="hero" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/bg.jpg);">
		<div class="wrap">
			<h1 class="headline">WordPress Web Design<br />&amp; Front End Development</h1>
			<p class="lead">Process–driven web design from start to finish.</p>
			<p><a class="contact-me" href="#contact">Contact Me</a><a class="questionnaire" href="<?php bloginfo('url'); ?>/questionnaire/">Questionnaire</a></p>
		</div>
	</section>

    <?php //get_template_part('inc/banner'); ?>

    <?php get_template_part('inc/skills'); ?>

    <section class="reviews">
			<div class="reviewbg">
				<div class="wrap">
					<h2>WordPress Coaching Podcast</h2>
					<p class="lead">A podcast about using WordPress, and the business of WordPress.</p>
					<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/223983376&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
			  </div>
			</div>
		</section>

  	<?php //get_template_part('inc/reviews'); ?>

    <?php get_template_part('inc/about'); ?>

<?php get_footer(); ?>