<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package erobbins
 */

get_header();
?>
<div class="page-header-wrap">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->
			</div>
		</div>
	</div>
</div>


    <div id="primary" class="content-area erobbins_main_area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="erobbins_blog_wrap">

							<?php if ( have_posts() ) : ?>

								<?php
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();

									/*
									 * Include the Post-Type-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_type() );

								endwhile;

								the_posts_navigation();

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif;
							?>
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
                        <div class="erobbins-sidebar">
                            <?php echo get_sidebar(); ?>
                        </div>
                    </div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
