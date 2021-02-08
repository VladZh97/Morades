<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="spinner__container">
            <div class="spinner">
                <div class="inner one"></div>
                <div class="inner two"></div>
                <div class="inner three"></div>
            </div>
        </div>
        <div class="arrow__up"></div>
            <div class="header__inner">
                <div class="container header__container">
                    <div class="header__top">
                        <div class="header__logo">
                            <a href="<?php echo get_home_url()?>" class="header__logo-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                            </a>
                        </div>
                        <div class="header__nav">
                            <div id="menu" class="menu">
                                <nav id="menu__main" class="menu__main">
                                    <?php
                                        wp_nav_menu(array(
                                        'theme_location' => 'main',
                                        'container' => 'ul',
                                        'menu_class' => 'header__items'
                                        ));
                                    ?>
                                </nav>
                            </div>
                        </div>
                        <div class="menu-btn">
                            <div class="menu-btn__burger"></div>
                        </div>
                    </div>
                    <div class="header__bottom">
                        <h1 class="header__title">daj <br>się<span>!</span></h1>
                        <h3 class="header__title-sub">zauważyć</h3>
                    </div>
                </div>
            </div>
        <img class="header__image" src="<?php the_field('header__image', 'option')?>" alt="Car Background Image">
    </header>