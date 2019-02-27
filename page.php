<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package erobbins
 */

get_header();
?>


<?php if (has_post_thumbnail()) : ?>
    <div class="erobbins-breadcrumb" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)"></div>
<?php endif; ?>


<?php if(!is_front_page()) : ?>
    <div class="breadcrumb-nvxt-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-list">
                        <?php
                        if(function_exists('bcn_display')){
                            bcn_display();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="<?php if(!is_front_page()) : ?>col-md-8 col-lg-9<?php else: ?>col-md-12<?php endif; ?>">
                        <?php
                        while (have_posts()) :
                            the_post();

                            get_template_part('template-parts/content', 'page');

                            // If comments are open or we have at least one comment, load up the comment template.
                            if (comments_open() || get_comments_number()) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                    </div>
                    <?php if(!is_front_page()) : ?>
                    <div class="col-md-4 col-lg-3">
                        <div class="erobbins-sidebar">
                            <?php
                                if(is_active_sidebar('single-page-sidebar')){
                                    dynamic_sidebar('single-page-sidebar');
                                }
                            ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
