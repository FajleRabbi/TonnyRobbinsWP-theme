<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package erobbins
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<div class="preloader-wrapper">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

    <header id="masthead" class="site-header">
        <div class="header-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="header-top-contact">
                            <ul>
                                <?php if (!empty(get_theme_mod('header_number')) || !empty(get_theme_mod('header_number'))) : ?>
                                    <li class="top-contact-number">
                                        <a href="tel:<?php echo esc_attr(get_theme_mod('header_number')); ?>">
                                            <?php echo esc_html(get_theme_mod('header_number')); ?></a>
                                    </li>
                                <?php endif; ?>

                                <?php if (!empty(get_theme_mod('header_top_social_facebook'))) : ?>
                                    <li>
                                        <a target="_blank" href="<?php echo esc_url(get_theme_mod('header_top_social_facebook')); ?>"><i
                                                    class="fa fa-facebook"></i></a></li>
                                <?php endif; ?>
                                <?php if (!empty(get_theme_mod('header_top_social_twitter'))) : ?>
                                    <li>
                                        <a target="_blank" href="<?php echo esc_url(get_theme_mod('header_top_social_twitter')); ?>"><i
                                                    class="fa fa-twitter"></i></a></li>
                                <?php endif; ?>
                                <?php if (!empty(get_theme_mod('header_top_social_instagram'))) : ?>
                                    <li>
                                        <a target="_blank" href="<?php echo esc_url(get_theme_mod('header_top_social_instagram')); ?>"><i
                                                    class="fa fa-instagram"></i></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="login">
                            <ul>
                                <li>
                                    <a href="#">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3 d-flex align-items-center justify-content-strat">
                        <?php get_template_part('template-parts/header/logo'); ?>
                    </div>
                    <div class="col-6">
                        <nav id="site-navigation" class="main-navigation d-flex align-items-center justify-content-center">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'menu-1',
                                'menu_id' => 'main_menu',
                                'menu_class' => 'main-menu'
                            ));
                            ?>
                        </nav><!-- #site-navigation -->
                        <div class="erobbins-responsive-menu-wrapper">
                            <div class="erobbins-responsive-menu"></div>
                        </div>
                    </div>
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <div class="extra-box">
                            <div class="search-box">
                                <a class="search" href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header><!-- #masthead -->

    <div id="content" class="site-content">
