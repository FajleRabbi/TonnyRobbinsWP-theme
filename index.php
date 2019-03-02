<?php
// index.php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package erobbins
 */

get_header();
//echo '<img src="'.get_the_post_thumbnail_url(get_option('page_for_posts'),'large').'">';

?>




<?php
//for ($i = 0; $i < 100; $i++)
//{
//	if ($i % 5 == 0)
//	{
//		echo $i ."even | ";
//	}
//	else
//	{
//		echo $i ."odd | ";
//	}
//}
//echo '<pre>';var_dump($query); echo '</pre>';
?>


<?php

    $sticky = get_option( 'sticky_posts' );
    $args = array(
        'posts_per_page' => 1,
        'post__in'  => $sticky,
        'ignore_sticky_posts' => 1
    );
    $query = new WP_Query( $args );
    if ( isset( $sticky[0] ) ) :
    $post_id = $sticky[0];


?>
    <div class="breadcrumb-nvxt-wrapper blog-special-post" style="background-image: url(<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-list">
                        <h2><?php echo get_the_title($post_id); ?></h2>
                        <p><?php echo get_the_excerpt($post_id); ?></p>
                        <a href="<?php echo get_the_permalink($post_id); ?>" class="default-button featured-button"><?php _e('Read More', 'erobbins'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php else : ?>

        <div class="breadcrumb-nvxt-wrapper nvxt-plugin" style="background-image: url(<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>)">
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
