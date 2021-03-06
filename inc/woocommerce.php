<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package erobbins
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function erobbins_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'erobbins_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function erobbins_woocommerce_scripts() {
	wp_enqueue_style( 'erobbins-woocommerce-style', get_template_directory_uri() . '/woocommerce/woocommerce.css' );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'erobbins-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'erobbins_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
//add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 *
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function erobbins_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'erobbins_woocommerce_active_body_class' );

/**
 * Products per page.
 *
 * @return integer number of products.
 */
function erobbins_woocommerce_products_per_page() {
	return 12;
}
add_filter( 'loop_shop_per_page', 'erobbins_woocommerce_products_per_page' );

/**
 * Product gallery thumnbail columns.
 *
 * @return integer number of columns.
 */
function erobbins_woocommerce_thumbnail_columns() {
	return 4;
}
add_filter( 'woocommerce_product_thumbnails_columns', 'erobbins_woocommerce_thumbnail_columns' );

/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function erobbins_woocommerce_loop_columns() {
	return 4;
}
add_filter( 'loop_shop_columns', 'erobbins_woocommerce_loop_columns' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 *
 * @return array $args related products args.
 */
function erobbins_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 4,
		'columns'        => 4,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'erobbins_woocommerce_related_products_args' );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );


if ( ! function_exists( 'erobbins_woocommerce_product_columns_wrapper' ) ) {
	/**
	 * Product columns wrapper.
	 *
	 * @return  void
	 */

	function erobbins_woocommerce_product_columns_wrapper() {


	    ?>
        <div class="erobbins-shop-loop-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="before-shop">
                            <?php
                                woocommerce_result_count();
                                woocommerce_catalog_ordering();
                             ?>
                        </div>
        <?php



		$columns = erobbins_woocommerce_loop_columns();
		echo '<div class="columns-' . absint( $columns ) . '">';

	}
}
add_action( 'woocommerce_before_shop_loop', 'erobbins_woocommerce_product_columns_wrapper', 9 );

if ( ! function_exists( 'erobbins_woocommerce_product_columns_wrapper_close' ) ) {
	/**
	 * Product columns wrapper close.
	 *
	 * @return  void
	 */
	function erobbins_woocommerce_product_columns_wrapper_close() {
		echo '</div></div></div></div></div>';
	}
}
add_action( 'woocommerce_after_shop_loop', 'erobbins_woocommerce_product_columns_wrapper_close', 40 );

/**
 * Remove default WooCommerce wrapper.
 */
//remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
//remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'erobbins_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function erobbins_woocommerce_wrapper_before() {

		remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
		?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
                <div class="erobbins-shop-hero">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <header class="woocommerce-products-header">
                                    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                                        <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
                                    <?php endif; ?>

                                    <?php
                                    /**
                                     * Hook: woocommerce_archive_description.
                                     *
                                     * @hooked woocommerce_taxonomy_archive_description - 10
                                     * @hooked woocommerce_product_archive_description - 10
                                     */
                                    do_action( 'woocommerce_archive_description' );
                                    ?>
                                </header>
                                <?php
                                    if(!is_product()){
                                        woocommerce_breadcrumb();
                                    }
                                 ?>
                            </div>
                        </div>
                    </div>
                </div>
			<?php

	}
}
add_action( 'woocommerce_before_main_content', 'erobbins_woocommerce_wrapper_before' );

if ( ! function_exists( 'erobbins_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function erobbins_woocommerce_wrapper_after() {
			?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'erobbins_woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	* <?php
		* if ( function_exists( 'erobbins_woocommerce_header_cart' ) ) {
			* erobbins_woocommerce_header_cart();
		* }
	* ?>
 */

if ( ! function_exists( 'erobbins_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 *
	 * @return array Fragments to refresh via AJAX.
	 */
	function erobbins_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		erobbins_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'erobbins_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'erobbins_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function erobbins_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'erobbins' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'erobbins' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>
		</a>
		<?php
	}
}

if ( ! function_exists( 'erobbins_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function erobbins_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php erobbins_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}

function erobbins_single_product_page_sidebar_remove() {
	if ( is_product() ) {
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
	}
}
add_action( 'wp', 'erobbins_single_product_page_sidebar_remove' );






function erobbins_woo_single_product_before(){
    ?>
        <div class="single-product-page-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
    <?php

}
add_action('woocommerce_before_single_product', 'erobbins_woo_single_product_before', 15);


//after single product page

function erobbins_woo_single_product_after() {
    ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
add_action( 'woocommerce_after_single_product', 'erobbins_woo_single_product_after', 5 );


remove_action( 'woocommerce_before_single_product', 'wc_print_notices', 10 );


