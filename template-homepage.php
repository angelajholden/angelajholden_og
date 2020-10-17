<?php 
/*
* Template Name: Homepage
*/
get_header(); the_post(); ?>

	<section class="hero">
		<div class="wrap">
			<h1 class="headline">Frontend Developer<br />&amp; UI/UX Designer</h1>
			<p><a class="contact-me" href="#contact">Contact Me</a><a class="questionnaire" href="<?php bloginfo('url'); ?>/projects/">View Projects</a></p>
		</div>
	</section>

    <?php //get_template_part('inc/banner'); ?>

    <?php get_template_part('inc/skills'); ?>

    <section class="reviews">
			<div class="reviewbg">
				<div class="wrap">
					<h2>Frontend Development</h2>
					<p class="lead">I'm available for UI/UX design and frontend development.<br />I can create the design and develop the frontend code for any project.</p>
			  </div>
			</div>
		</section>

  	<?php //get_template_part('inc/reviews'); ?>

    <?php get_template_part('inc/about'); ?>

<?php get_footer(); ?>
