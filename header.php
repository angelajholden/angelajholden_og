<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php if (is_search()) { ?>
      <meta name="robots" content="noindex, nofollow">
    <?php } ?>
    <title><?php wp_title(''); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
    <body <?php body_class(); ?>>

      <div class="headerWrap">
        <div class="mainHead clearfix">
          <header class="clearfix">
            <a href="<?php bloginfo('url'); ?>">
              <figure><?php include('inc/logo.svg'); ?></figure>
              <h1 class="blogTitle"><?php bloginfo('name'); ?></h1>
            </a>
            <p><?php bloginfo('description'); ?></p>
          </header>

          <ul class="socialIcons">
            <li><a href="//facebook.com/angelajholden" target="_blank"><?php include('inc/facebook.svg'); ?></a></li>
            <li><a href="//twitter.com/angelaholden" target="_blank"><?php include('inc/twitter.svg'); ?></a></li>
            <li><a href="//google.com/+AngelaHoldenDesign" target="_blank"><?php include('inc/googleplus.svg'); ?></a></li>
            <li><a href="//github.com/angelajholden" target="_blank"><?php include('inc/github.svg'); ?></a></li>
            <li><a href="//angelaholdendesign.com" target="_blank"><?php include('inc/screen.svg'); ?></a></li>
          </ul> 
        </div><?php //Main Head ?>
      </div><?php //Header Wrap ?>

        <nav>
          <a href="#" id="pull"><?php include('inc/menu.svg'); ?> Menu</a>
          <?php
            wp_nav_menu( array( 
              'name'            => 'Main Menu',
              'theme_location'  => 'main_menu',
              'container'       => 'false',
              'container_class' => ''
            ));
          ?>
        </nav>

      <section class="pageWrap clearfix">