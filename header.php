<!DOCTYPE html>
<html lang="en">
  <head>
  	<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MN748XR');</script>
		<!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title(''); ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.png">
    <?php if (is_search()) { ?>
      <meta name="robots" content="noindex, nofollow">
    <?php } ?>    
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
    <body id="top" <?php body_class('animated fadeIn'); ?>>
    	<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MN748XR"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) -->
      <div class="headerWrap">
        <div class="mainHead clearfix">
          
          <header class="headerContainer clearfix">
            <a class="clearfix" href="<?php bloginfo('url'); ?>">
              <!--<figure class="logoSVG"><?php //ajh_logo(); ?></figure>-->
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
        </div><?php //Main Head ?>
      </div><?php //Header Wrap ?>
      <div class="page-wrap">