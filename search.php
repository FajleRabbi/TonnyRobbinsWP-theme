<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'erobbins' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
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

									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'search' );

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
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
// get_sidebar();
get_footer();