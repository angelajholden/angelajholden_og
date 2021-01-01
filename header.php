<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php if (is_front_page()) : ?>
    <title><?php bloginfo('title'); ?> • <?php bloginfo('description'); ?></title>
    <?php else : ?>
    <title><?php bloginfo('title'); ?><?php single_post_title(' • '); ?></title>
    <?php endif; ?>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php if (is_front_page()) : ?>
    <figure class=bgImage>
        <!-- placeholder value intentionally null; skipped by screen readers -->
        <img src="<?php bloginfo('template_url'); ?>/images/bg.jpg" alt="">
    </figure>
    <?php endif; ?>

    <header class="headerWrap">
        <div class="mainHead">

            <div class="headerContainer">
                <a class="blogTitle" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            </div>

            <nav class="mainMenu">
                <button class="search-menu" aria-label="Search this Site"><?php ajh_search_icon(); ?></button>

                <a class="screen-reader-text" href="#skip-nav">Skip Navigation</a>

                <button aria-label="Open Menu" id="menu-icon" class="menu_open">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>

                <?php
					wp_nav_menu( array( 
					'name'            => 'Main Menu',
					'theme_location'  => 'main_menu',
					'container'       => 'false',
					'container_class' => ''
					));
				?>
            </nav>
        </div>
        <div class="modalDialog">
            <div class="dialog">
                <button aria-label="Close the Search Form" id="search" class="dialogClose">&times;</button>
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>
    <main id="skip-nav" class="pageWrap">
