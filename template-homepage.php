<?php 
/*
* Template Name: Homepage
*/
get_header(); the_post(); ?>
    
  	<div class="banner">
  		<?php the_post_thumbnail(); ?>
  		<h1 class="page-title"><?php the_title(); ?></h1>
  	</div>

	  <section class="skills">
	    <div class="wrap">

	    	<article>
	    		<?php the_content(); ?>
	    	</article>

	    	<div id="accordion">

	    	<?php
		    	$args = array(
		    		'post_type' => 'skill',
		    		'post_status' => 'publish',
		    		'order' => 'desc',
		    		'showposts' => -1
		    	);
		    	$skill_loop = new WP_Query( $args );
		    	while ( $skill_loop->have_posts() ) : $skill_loop->the_post(); ?>

			    	<h2><?php the_title(); ?></h2>
					  <article>
					  	<?php the_content(); ?>
					  </article>
		    	
		    	<?php	endwhile; ?>
		    	<?php wp_reset_postdata(); ?>

	    	</div><?php // End #accordian ?>
	    </div><?php // End .wrap ?>
	  </section>

    <section class="aboutMe">
      <div class="wrap clearfix">
      	<img src="<?php bloginfo('template_url'); ?>/images/angela.jpg" alt="About Angela J. Holden Website Design" title="Angela J. Holden">
      	<h1>About Me</h1>
      	<p>My name is Angela Holden and I’m a freelance web designer and technical writer from Minneapolis, MN, now living in San Diego, CA. I love WordPress, content, color, typography, and providing great user experiences. I’ve been designing websites for five years and I love every minute that I spend doing it. In 2009 I built my first website, and in 2013 I earned a Master’s Degree in Technical Communication from Metropolitan State University.</p>

        <p>I work from my home in San Diego and I have clients in the U.S. and overseas. For more information about what I can do, please <a href="#contact">contact</a> me for a consultation.</p>

        <p>Cheers!</p>
        <div class="signature"><?php include('svg/signature.svg'); ?></div>
      </div>
    </section>

<?php get_footer(); ?>