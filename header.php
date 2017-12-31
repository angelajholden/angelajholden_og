<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="robots" content="noindex, nofollow">
    <?php if (is_home() || is_front_page()) : ?>
    	<title><?php bloginfo('title'); ?> • <?php bloginfo('description'); ?></title>
  	<?php else : ?>
  		<title><?php bloginfo('title'); ?><?php single_post_title(' • '); ?></title>
    <?php endif; ?>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.png">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <?php if ( $_SERVER["SERVER_ADDR"] == '159.203.172.16' ) : ?>
	    <!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51555467-1"></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());
			  gtag('config', 'UA-51555467-1');
			</script>
		<?php endif; ?>
  </head>
	<body id="top" <?php body_class('animated fadeIn'); ?>>
	<div class="headerWrap">
	  <div class="mainHead clearfix">
	    <header class="headerContainer clearfix">
	      <a class="clearfix" href="<?php bloginfo('url'); ?>">
	        <div class="blogTitle"><?php bloginfo('name'); ?></div>
	      </a>
	    </header>
	    <a id="pull"><?php ajh_menu_icon(); ?></a>
	    <nav class="mobileMenu">
	      <?php
	        wp_nav_menu( array( 
	          'name'            => 'Mobile Menu',
	          'theme_location'  => 'mobile_menu',
	          'container'       => 'false',
	          'container_class' => ''
	        ));
	      ?>
	    </nav>
	    <nav class="mainMenu">
	    	<ul class="search-menu">
	    		<li><a class="search"><?php ajh_search_icon(); ?></a></li>
	    	</ul>
	      <?php
	        wp_nav_menu( array( 
	          'name'            => 'Main Menu',
	          'theme_location'  => 'main_menu',
	          'container'       => 'false',
	          'container_class' => ''
	        ));
	      ?>
	    </nav>
	    <div class="modalDialog">
				<div>
					<a id="search" class="close">&times;</a>
					<?php get_search_form(); ?>
				</div>
			</div>
	  </div>
	</div>
	<div class="page-wrap">