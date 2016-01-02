<?php 
/*
* Template Name: Homepage
*/
get_header(); the_post(); ?>

    <?php get_template_part('inc/banner'); ?>

    <?php get_template_part('inc/skills'); ?>

  	<?php get_template_part('inc/reviews'); ?>

    <?php get_template_part('inc/about'); ?>

<?php get_footer(); ?>