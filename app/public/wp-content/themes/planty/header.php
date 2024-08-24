<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" class="header" role="banner">
            <?php the_custom_logo(); ?>
            <nav class="main-menu-nav" id="menu" role="navigation" itemscope
                itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
            </nav>
        </header>
        <div id="container">
            <main id="content" role="main"> 