<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php if (is_search()) { ?>
      <meta name="robots" content="noindex, nofollow">
    <?php } ?>
    <?php if ( is_front_page() || is_home() ) { ?>
      <title>Angela J. Holden Website Design</title>
    <?php } else { ?>
      <title><?php wp_title(' '); ?> | Angela J. Holden Website Design</title>
    <?php } ?>
    <?php if (is_single() || is_page() ) : if (have_posts() ) : while (have_posts() ) : the_post(); ?>
    <meta name="description" content="<?php echo get_the_excerpt();?>">
    <?php endwhile; endif; elseif (is_home() ): ?>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
            <a class="clearfix" href="<?php bloginfo('url'); ?>">
              <figure><?php include('inc/logo.svg'); ?></figure>
              <h1 class="blogTitle"><?php bloginfo('name'); ?></h1>
            </a>
          </header>
          <ul class="socialIcons">
            <?php include('inc/svg-icons.php'); ?>
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