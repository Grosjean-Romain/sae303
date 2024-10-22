<!DOCTYPE html>
<html>

<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container' => 'ul',
                'menu_class' => 'header-menu'
            ));
            ?>
        </nav>
    </header>

    <div class="wrap">