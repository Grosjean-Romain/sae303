<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title> <?php
            if (is_front_page()) {
                echo 'Data · Elect';
            } else {
                wp_title('·', true, 'right');
                bloginfo('name');
            }
            ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/svg/logo_blanc.svg" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>

            <nav class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container' => 'ul',
                    'menu_class' => 'header-menu',
                ));
                ?>
            </nav>
        </div>
    </header>

    <div class="wrap">