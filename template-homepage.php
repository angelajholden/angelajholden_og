<?php 
/*
* Template Name: Homepage
*/
get_header(); the_post(); ?>

  	<div class="banner">
  		<video id="bgvideo" preload="auto" muted="true" autoplay="true" loop="true" poster="<?php echo get_template_directory_uri(); ?>/images/honeybee.jpg">
  			<source src="<?php echo get_template_directory_uri(); ?>/video/honeybee.mp4" type="video/mp4"></source>
  			<img src="<?php echo get_template_directory_uri(); ?>/images/honeybee.jpg" width="1600" height="900" alt="Bee in ultra slow motion By Emile van Wijk and Joris Schaap | Angela J. Holden Web Design | San Diego, CA">
  		</video>
  		<h1 class="page-title"><?php the_title(); ?></h1>
  		<p class="page-desc"><?php bloginfo('description'); ?></p>
  	</div>

	  <section class="skills">
	    <div class="wrap">
	    	<article id="<?php post_name(); ?>">
	    		<?php the_content(); ?>
	    	</article>

	    	<div id="accordion" class="fadeIn">

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
      	<img src="<?php bloginfo('template_url'); ?>/images/angela.jpg" width="250" height="250" alt="About Angela J. Holden Website Design" title="Angela J. Holden">
      	<h1>About Me</h1>
      	<p>Hi, my name is Angela and I’m originally from Minneapolis, Minnesota, but now I live in San Diego, California. I moved in 2014 after I finished my Master’s Degree in Technical Communication. I also have a B.A. in Management & Employment Law, and an A.S. in Paralegal Studies. I worked for the law firm <a href="http://lawmoss.com">Moss & Barnett</a> in Minneapolis for many years as a paralegal and commercial debt collector before I started learning to code.</p>
				
				<p>I also have an Etsy shop called <a href="https://www.etsy.com/shop/ThemeHoney">Theme Honey</a> where I sell a premium theme I designed and developed called <a href="<?php bloginfo('uri'); ?>/crafty-theme">Crafty</a>. I do a little bit of logo design here as well, and sell Photoshop files available as a digital download.</p>

				<p>This site was created as a way to show my <a href="<?php bloginfo('url'); ?>/projects">portfolio</a> and blog about WordPress and web design. I learn new things every day, and I want to share what I learn and give back to a community of designers and developers who openly share their work for people like me to learn from. I hope the work I’m doing helps someone learn to do something they love.</p>

        <p>I work from my home in San Diego and I have clients in the U.S. and overseas. For more information about what I can do, please <a href="#contact">contact</a> me for a complementary consultation.</p>

        <p>Cheers!</p>
        <div class="signature"><?php ajh_signature(); ?></div>
      </div>
    </section>

<?php get_footer(); ?>