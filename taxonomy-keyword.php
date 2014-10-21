<?php get_header(); ?>

  <header>

    <h1>Snippets for <span><?php single_tag_title(); ?></span></h1>

    <p>These are some of the snippets that I've collected, modified, and use frequently in my projects. When possible, an attribution for the original source is provided.</p>

  </header>

  	<div class="blogWrap clearfix">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		  		<article class="archivePost clearfix">

		        <a href="<?php the_permalink(); ?>">

		        	<h2 class="archiveTitle"><?php the_title(); ?></h2>

		        	<?php if (has_tag('wp')) { ?>

		          	<figure class="snippetImage wp"><span>wp</span></figure>

		        	<?php } elseif (has_tag('php')) { ?>

		        		<figure class="snippetImage php"><span>php</span></figure>

		        	<?php } elseif (has_tag('css')) { ?>

		        		<figure class="snippetImage css"><span>css</span></figure>

		        	<?php } elseif (has_tag('html')) { ?>

		        		<figure class="snippetImage html"><span>html</span></figure>

		        	<?php } elseif (has_tag('js')) { ?>

		        		<figure class="snippetImage js"><span>js</span></figure>

		        	<?php } ?>

		        </a>

		      	<div class="theTags"><?php the_terms( $snippet->ID, 'keyword', 'Keywords: ', ' <span>•</span> ' ); ?></div>

		      </article>

	      <?php endwhile; else: ?>
	      
      <?php endif; ?>

  	</div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>