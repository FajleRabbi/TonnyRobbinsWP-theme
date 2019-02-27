<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package erobbins
 */



$cat_obj = get_the_category();
$cat_id  = $cat_obj[ mt_rand( 0, count( $cat_obj ) - 1 ) ]->cat_ID;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="erobbins_b_post clearfix">
        <div class="erobbins_b_content">
            <?php
            $term_data = get_term_meta( $cat_id, 'erobbins_taxonomy_options', true );
            ?>
            <?php if(!is_singular()) : ?>
            <div class="erobbins_featured_image">

                <style>
                    .erobbins_featured_image a:before{
                        background: var(--my-color-var);
                    }
                </style>
                <a  href="<?php the_permalink(); ?>" style="background-image: url(<?php echo the_post_thumbnail_url('full'); ?>); --my-color-var: <?php echo $term_data['cat_hover_bg_color']?>;">
                    <?php
                    if(!empty($term_data['cat_icon'])){
                        $cat_icon = wp_get_attachment_image_src($term_data['cat_icon']); ?>
                        <img class="single-blog-cat-icon" src="<?php echo esc_url($cat_icon[0]); ?>" alt="<?php echo esc_attr( get_term( $cat_id )->name ); ?>">

	                    <?php
                    }
                    ?>


                </a>
            </div>


            <?php endif; ?>

			<div class="blog-post-content">
				<?php

				if ( ! empty( $cat_obj ) ) {
					?>
                    <div class="single-meta">
                        <style>
                            .single-meta a:after{
                                background: var(--my-color-var);
                            }
                        </style>
                        <a style="color: <?php echo $term_data['cat_hover_bg_color']?>; --my-color-var: <?php echo $term_data['cat_hover_bg_color']?>" href="<?php echo esc_url( get_category_link( $cat_id ) ); ?>"><?php echo esc_html( get_term( $cat_id )->name ); ?></a>
                    </div>
					<?php
				}
				?>
                <header class="entry-header">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title single_post_title">', '</h1>' );
					else :
						the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><h2 class="entry-title post_title">', '</h2></a>' );
					endif;
					?>
                </header><!-- .entry-header -->
                <div class="entry-footer">
                    <?php erobbins_posted_by(); ?>
                </div>
                <?php
                    if(!is_singular()){
                        echo '<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>';
                    }
                ?>
            </div>


            <div class="entry-content clearfix">
				<?php
				if ( is_singular() ) {
					the_content( sprintf(
						wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'erobbins' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );
				}


				if ( is_singular() ) {
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Next Part:', 'erobbins' ),
						'after'  => '</div>',
					) );
				}
				?>
            </div><!-- .entry-content -->
        </div>
    </div>


</article><!-- #post-<?php the_ID(); ?> -->
