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
<!--<div class="page-header-wrap">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-12">-->
<!--				<header class="page-header">-->
<!--					--><?php
//					the_archive_title( '<h1 class="page-title">', '</h1>' );
//					the_archive_description( '<div class="archive-description">', '</div>' );
//					?>
<!--				</header><!-- .page-header -->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->

<?php
$term = get_queried_object();
$cat_ID = $term->cat_ID;
$term_data = get_term_meta( $cat_ID, 'erobbins_taxonomy_options', true );
if(!empty($term_data['cat_bg_image'])){
	$term_bg_img = wp_get_attachment_image_src($term_data['cat_bg_image'], 'full');

}

?>
    <div class="breadcrumb-nvxt-wrapper archive-hero" <?php if(!empty($term_bg_img)) : ?>style="background: url(<?php echo esc_url($term_bg_img[0]); ?>)" <?php endif; ?>>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-list">
                        <h1><?php
                            single_cat_title(); ?></h1>
                        <?php
                        the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_template_part( 'template-parts/blog-hero/search'); ?>


    <div id="primary" class="content-area erobbins_main_area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) :
							?>
                            <header>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
						<?php
						endif;

						/* Start the Loop */
						$count = 0;
						while ( have_posts() ) :
							the_post();

							if($count % 6 == 0){
								$column = 'col-md-8';
							}else{
								$column = 'col-md-4';
							};


							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */




							?>

                            <div class="<?php echo esc_attr($column); ?>  blog-single-post">
								<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
                            </div>


							<?php
							$count++;
						endwhile;
						?>


					<?php else :

						get_template_part( 'template-parts/content', 'none' );

					endif;

					?>
                </div>
            </div>

            <div class="container blog-pagination-container">
                <div class="row">
                    <div class="col-12 text-center">
						<?php the_posts_pagination( array(
							'mid_size'           => 4,
							'prev_text'          => __( '«', 'erobbins' ),
							'next_text'          => __( '»', 'erobbins' ),
							'screen_reader_text' => false
						) ); ?>
                    </div>
                </div>
            </div>


        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
