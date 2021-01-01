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

<body id="top" <?php body_class('animated fadeIn'); ?>>
    <div class="headerWrap">
        <div class="mainHead">

            <header class="headerContainer clearfix">
                <a href="<?php bloginfo('url'); ?>">
                    <div class="blogTitle"><?php bloginfo('name'); ?></div>
                </a>
            </header>

            <nav class="mainMenu">
                <ul class="search-menu">
                    <li><a class="search"><?php ajh_search_icon(); ?></a></li>
                </ul>

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
            <div>
                <a id="search" class="close">&times;</a>
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
    <div class="page-wrap">
