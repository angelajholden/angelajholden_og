<?php 
/*
* Template Name: Homepage
*/
get_header(); the_post(); ?>
  	<div class="banner">
  		<video id="bgvideo" preload="auto" muted="true" autoplay="true" loop="true" poster="<?php echo get_template_directory_uri(); ?>/images/honeybee.jpg">
  			<source src="<?php echo get_template_directory_uri(); ?>/video/honeybee.mp4" type="video/mp4"></source>
  			<img src="<?php echo get_template_directory_uri(); ?>/images/honeybee.jpg" width="1600" height="900" alt="Bee in ultra slow motion By Emile van Wijk and Joris Schaap">
  		</video>
  		<div class="page-title"><?php the_title(); ?></div>
  		<p class="page-desc"><?php bloginfo('description'); ?></p>
  	</div>

    <section class="accepting">
      <div class="wrap clearfix">Now accepting projects for November &amp; December 2015, January 2016<span><a href="<?php bloginfo('url'); ?>/questionnaire/">Questionnaire</a></span></div>
    </section>

    <?php get_template_part('inc/skills'); ?>

  	<?php get_template_part('inc/reviews'); ?>

    <?php //get_template_part('inc/coaching'); ?>

    <?php get_template_part('inc/about'); ?>

<?php get_footer(); ?>