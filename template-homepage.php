<?php 
/*
* Template Name: Homepage
*/
get_header(); the_post(); ?>
    
  	<div class="banner">
  		<?php //the_post_thumbnail(); ?>
  		<h1 class="page-title"><?php the_title(); ?></h1>
  		<p><?php //bloginfo('description'); ?></p>
  	</div>

	  <section class="skills">
	    <div class="wrap">

	    	<article id="<?php post_name(); ?>">
	    		<?php the_content(); ?>
	    	</article>

	    	<div id="accordion">

	    	<?php
		    	$args = array(
		    		'post_type' => 'ajhskill',
		    		'post_status' => 'publish',
		    		'order' => 'desc',
		    		'showposts' => -1
		    	);
		    	$skill_loop = new WP_Query( $args );
		    	while ( $skill_loop->have_posts() ) : $skill_loop->the_post(); ?>

			    	<h2><?php the_title(); ?></h2>
					  <article id="<?php post_name(); ?>">
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
      	<p>My name is Angela Holden and I’m a freelance web designer, front end developer and technical writer from Minneapolis, MN, now living in San Diego, CA. I love WordPress, content, color, typography, and providing great user experiences. I’ve been designing websites for over six years and I love every minute that I spend doing it.</p>

        <p>I work from my home in San Diego and I have clients in the U.S. and overseas. For more information about what I can do, please <a href="#contact">contact</a> me for a complementary consultation.</p>

        <p>Cheers!</p>
        <div class="signature"><?php include('svg/signature.svg'); ?></div>
      </div>
    </section>

<?php get_footer(); ?>