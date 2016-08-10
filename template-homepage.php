<?php 
/*
* Template Name: Homepage
*/
get_header(); the_post(); ?>

	<section class="hero" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/bg.jpg);">
		<div class="wrap">
			<h1 class="headline">WordPress Web Design<br />&amp; Front End Development</h1>
			<p class="lead">Contact me today to dicuss your project.</p>
			<p><a class="contact-me" href="#contact">Contact Me</a><a class="questionnaire" href="<?php bloginfo('url'); ?>/questionnaire/">Questionnaire</a></p>
		</div>
	</section>

    <?php //get_template_part('inc/banner'); ?>

    <?php get_template_part('inc/skills'); ?>

  	<?php get_template_part('inc/reviews'); ?>

    <?php get_template_part('inc/about'); ?>

<?php get_footer(); ?>