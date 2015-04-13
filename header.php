<!DOCTYPE html>
<html lang="en">
  <head>
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
    <body id="top" <?php body_class(); ?>>

      <div class="headerWrap">
        <div class="mainHead clearfix">
          
          <header class="headerContainer clearfix">
            <a class="clearfix" href="<?php bloginfo('url'); ?>">
              <figure><?php include('svg/logo.svg'); ?></figure>
              <h1 class="blogTitle"><?php bloginfo('name'); ?></h1>
            </a>
          </header>

          <nav class="mainMenu">
	          <a href="#" id="pull"><?php include('svg/menu.svg'); ?> Menu</a>
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