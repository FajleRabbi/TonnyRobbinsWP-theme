<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package erobbins
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="erobbins_b_post clearfix">
        <div class="erobbins_b_content">
			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php
					erobbins_posted_on();
					erobbins_posted_by();
					?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="erobbins_featured_image">
				<?php erobbins_post_thumbnail(); ?>
			</div>

			<div class="entry-summary">
				<?php the_excerpt(); ?>
				
			</div><!-- .entry-summary -->

			<footer class="entry-footer">
				<?php erobbins_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
