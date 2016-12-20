<?php 
/*
* Template Name: Homepage
*/
get_header(); the_post(); ?>

	<section class="hero" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/bg.jpg);">
		<div class="wrap">
			<h1 class="headline">WordPress Web Design<br />&amp; Front End Development</h1>
			<p><a class="contact-me" href="#contact">Contact Me</a><a class="questionnaire" href="<?php bloginfo('url'); ?>/questionnaire/">Questionnaire</a></p>
		</div>
	</section>

    <?php //get_template_part('inc/banner'); ?>

    <?php get_template_part('inc/skills'); ?>

    <section class="reviews">
			<div class="reviewbg">
				<div class="wrap">
					<h2>Front End Development</h2>
					<p class="lead">I'm available for UI/UX and front end development work.<br />I can create the design and develop the front end code for any project.</p>
			  </div>
			</div>
		</section>

  	<?php //get_template_part('inc/reviews'); ?>

    <?php get_template_part('inc/about'); ?>

<?php get_footer(); ?>