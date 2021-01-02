<?php 
/*
* Template Name: Homepage
*/
get_header(); the_post(); ?>

<section class="hero">
    <div class="wrap">
        <h1 class="headline">Frontend &amp;<br>UI Development</h1>
        <p><a class="questionnaire" href="<?php bloginfo('url'); ?>/projects/">View Projects</a></p>
    </div>
</section>

<?php get_template_part('inc/skills'); ?>

<section class="reviews">

    <div class="wrap">
        <h2>Frontend &amp; UI Developer</h2>
        <p class="lead">My expertise is HTML5, SCSS and JavaScript. I build websites and web apps with WordPress, Vue,
            Node and Express.</p>
    </div>

</section>

<?php get_template_part('inc/about'); ?>

<?php get_footer(); ?>
