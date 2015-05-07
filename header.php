<!DOCTYPE html>
<html lang="en">
  <head>
  	<script type="text/javascript">
		  WebFontConfig = {
		    google: { families: [ 'Open+Sans:400italic,400,600,300:latin' ] }
		  };
		  (function() {
		    var wf = document.createElement('script');
		    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		    wf.type = 'text/javascript';
		    wf.async = 'true';
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(wf, s);
		  })();
		</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title(''); ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">

    <?php if (is_search()) { ?>
      <meta name="robots" content="noindex, nofollow">
    <?php } ?>    

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

  </head>
    <body id="top" <?php body_class('fadeIn'); ?>>
    	<div id="fakeloader"></div>
      <div class="headerWrap">
        <div class="mainHead clearfix">
          
          <header class="headerContainer clearfix">
            <a class="clearfix" href="<?php bloginfo('url'); ?>">
              <figure class="logoSVG"><?php ajh_logo(); ?></figure>
              <h1 class="blogTitle"><?php bloginfo('name'); ?></h1>
            </a>
          </header>

          <a href="#" id="pull"><?php ajh_menu_icon(); ?></a>
          <nav class="mainMenu">
	          <?php
	            wp_nav_menu( array( 
	              'name'            => 'Main Menu',
	              'theme_location'  => 'main_menu',
	              'container'       => 'false',
	              'container_class' => '',
	              'depth'						=> '1'
	            ));
	          ?>
	        </nav>

        </div><?php //Main Head ?>
      </div><?php //Header Wrap ?>

      <div class="page-wrap">