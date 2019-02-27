<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package erobbins
 */

?>

	</div><!-- #content -->


    <?php if(is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4') ) : ?>
	<footer class="site-footer">
        <div class="container">
            <div class="row">
                <?php
                    if(is_active_sidebar('footer-1')){
                        dynamic_sidebar('footer-1');
                    }else if(is_active_sidebar('footer-2')){
	                    dynamic_sidebar('footer-2');
                    }else if(is_active_sidebar('footer-3')){
	                    dynamic_sidebar('footer-3');
                    }else if(is_active_sidebar('footer-4')){
	                    dynamic_sidebar('footer-4');
                    }
                ?>
            </div>
        </div>
	</footer><!-- #colophon -->
    <?php endif; ?>
	<?php 
        	$copyright_switcher = cs_get_option('copyright_switcher');
        	$copyright_text = cs_get_option('copyright_text');
         ?>
         <?php if($copyright_switcher == true) : ?>
        <div class="copyright-area">
        	<div class="container">
        		<div class="row">
        			<div class="col-12 text-center">
        				<p><?php echo esc_html( $copyright_text ); ?></p>
        			</div>
        		</div>
        	</div>
        </div>
    	<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
