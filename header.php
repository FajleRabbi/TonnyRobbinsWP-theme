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
    <meta charset="<?php bloginfo( 'charset' ); ?>">
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
								<?php if ( ! empty( get_theme_mod( 'header_number' ) ) || ! empty( get_theme_mod( 'header_number' ) ) ) : ?>
                                    <li class="top-contact-number">
                                        <a href="tel:<?php echo esc_attr( get_theme_mod( 'header_number' ) ); ?>">
											<?php echo esc_html( get_theme_mod( 'header_number' ) ); ?></a>
                                    </li>
								<?php endif; ?>

								<?php if ( ! empty( get_theme_mod( 'header_top_social_facebook' ) ) ) : ?>
                                    <li>
                                        <a target="_blank"
                                           href="<?php echo esc_url( get_theme_mod( 'header_top_social_facebook' ) ); ?>"><i
                                                    class="fa fa-facebook"></i></a></li>
								<?php endif; ?>
								<?php if ( ! empty( get_theme_mod( 'header_top_social_twitter' ) ) ) : ?>
                                    <li>
                                        <a target="_blank"
                                           href="<?php echo esc_url( get_theme_mod( 'header_top_social_twitter' ) ); ?>"><i
                                                    class="fa fa-twitter"></i></a></li>
								<?php endif; ?>
								<?php if ( ! empty( get_theme_mod( 'header_top_social_instagram' ) ) ) : ?>
                                    <li>
                                        <a target="_blank"
                                           href="<?php echo esc_url( get_theme_mod( 'header_top_social_instagram' ) ); ?>"><i
                                                    class="fa fa-instagram"></i></a></li>
								<?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <?php if(!is_user_logged_in()) : ?>
                        <div class="login">
                            <ul>
                                <li>
                                    <a href="<?php echo esc_url('/my-account'); ?>"><?php _e('Login', 'erobbins'); ?></a>
                                </li>
                            </ul>
                        </div>
                        <?php else:  ?>
                        <div class="logged_in login">
                            <ul>
                                <li>
                                    <a href="<?php echo esc_url('/my-account'); ?>"><?php _e('My Account', 'erobbins'); ?></a>
                                </li>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 d-flex align-items-center justify-content-start">
						<?php get_template_part( 'template-parts/header/logo' ); ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-6">
                        <nav id="site-navigation"
                             class="main-navigation d-flex align-items-center justify-content-center">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'main_menu',
								'menu_class'     => 'main-menu'
							) );
							?>
                        </nav><!-- #site-navigation -->
                        <div class="erobbins-responsive-menu-wrapper">
                            <div class="erobbins-responsive-menu"></div>

                        </div>
                    </div>
                    <div class="col-3 search-icon-wrapper d-flex align-items-center justify-content-end">
                        <div class="extra-box">
                            <div class="search-box">
                                <a class="search" data-toggle="modal" data-target="#myModal"><i
                                            class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header><!-- #masthead -->


    <div class="erobbins-bootstrap-modal">
        <!-- Trigger the modal with a button -->
        <!--           <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

        <div class="modal fade show" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <?php  _e('What can we help you find?', 'erobbins'); ?>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <?php if(function_exists('wd_asl')) : ?>
                        <div class="header-search">
                            <!--                                <h3>What can we help you find?</h3>-->
							<?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
                        </div>
                        <?php else: ?>
                        <div class="header-search default-search">
                            <?php get_search_form(); ?>
                        </div>
                        <?php endif; ?>

                    </div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

            </div>
        </div>
    </div>

    <div id="content" class="site-content">
