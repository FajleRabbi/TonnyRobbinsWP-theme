<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package erobbins
 */

get_header();
?>

 <div id="primary" class="content-area erobbins_main_area erobbins_main_area404 d-flex align-items-center justify-content-center">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="erobbins_blog_wrap">

							<section class="error-404 not-found">
								<header class="page-header">
									<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'erobbins' ); ?></h1>
								</header><!-- .page-header -->

								<div class="page-content">
									<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'erobbins' ); ?></p>
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
								</div><!-- .page-content -->
							</section><!-- .error-404 -->
						</div>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
