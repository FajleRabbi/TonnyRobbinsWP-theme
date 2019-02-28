<?php
/**
 * erobbins functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package erobbins
 */


//Theme additional file
require_once('inc/tgm.php');
require_once('inc/erobbins-metabox.php');
require_once('inc/erobbins-theme-options.php');
require_once('inc/erobbins-taxonomy.php');
require_once('inc/erobbins-customizer.php');



if (!function_exists('erobbins_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function erobbins_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on erobbins, use a find and replace
         * to change 'erobbins' to the name of your theme in all the template files.
         */
        load_theme_textdomain('erobbins', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        add_image_size('erobbins-squared-size', '370', '370', true);
	    add_image_size('erobbins-full-width-size', '800', '350', true);

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'erobbins'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'erobbins_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function erobbins_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('erobbins_content_width', 640);
}

add_action('after_setup_theme', 'erobbins_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function erobbins_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'erobbins'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'erobbins'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widget-title">',
        'after_title' => '</span>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Single Page Sidebar', 'erobbins'),
        'id' => 'single-page-sidebar',
        'description' => esc_html__('Add widgets here for single page sidebar', 'erobbins'),
        'before_widget' => '<div id="%1$s" class="erobbins-single-page-sidebar widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widget-title">',
        'after_title' => '</span>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer 1 Widgets', 'erobbins'),
        'id' => 'footer-1',
        'description' => esc_html__('Add widgets here for footer 1', 'erobbins'),
        'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-12 single-footer widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widget-title">',
        'after_title' => '</span>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer 2 Widgets', 'erobbins'),
        'id' => 'footer-2',
        'description' => esc_html__('Add widgets here for footer 2', 'erobbins'),
        'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-12 single-footer widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widget-title">',
        'after_title' => '</span>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer 3 Widgets', 'erobbins'),
        'id' => 'footer-3',
        'description' => esc_html__('Add widgets here for footer 3', 'erobbins'),
        'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-12 single-footer widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widget-title">',
        'after_title' => '</span>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer 4 Widgets', 'erobbins'),
        'id' => 'footer-4',
        'description' => esc_html__('Add widgets here for footer 4', 'erobbins'),
        'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-12 single-footer widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="widget-title">',
        'after_title' => '</span>',
    ));
}

add_action('widgets_init', 'erobbins_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function erobbins_scripts()
{

    wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i");
	wp_enqueue_style("proximanova-fonts", get_theme_file_uri('/assets/fonts/proxima_nova/stylesheet.css'));
	wp_enqueue_style("georgia-fonts", get_theme_file_uri('/assets/fonts/georgia/stylesheet.css'));
    wp_enqueue_style("font-awesome", get_theme_file_uri("/assets/css/font-awesome.min.css"), null, "4.7.0");
    wp_enqueue_style("bootstrap", get_theme_file_uri("/assets/css/bootstrap.min.css"), null, "v4.0.0");
    wp_enqueue_style("default-erobbins", get_theme_file_uri("/assets/css/default.css"), null, "1.0.0");
    wp_enqueue_style("slicknav", get_theme_file_uri("/assets/css/slicknav.min.css"), null, "4.7.0");
    wp_enqueue_style('erobbins-style', get_stylesheet_uri());
	wp_enqueue_style("erobbins-responsive", get_theme_file_uri("/assets/css/responsive.css"), null, "1.0.0");



	wp_enqueue_script("popper-js", get_theme_file_uri("/assets/js/popper.min.js"), array( "jquery" ), false, true);
    wp_enqueue_script("bootstrap-js", get_theme_file_uri("/assets/js/bootstrap.min.js"), array( "jquery" ), "v4.0.0", true);
    wp_enqueue_script("slicknav-js", get_theme_file_uri("/assets/js/jquery.slicknav.min.js"), array( "jquery" ), false, true);
    wp_enqueue_script("active-js", get_theme_file_uri("/assets/js/active.js"), array( "jquery" ), "1.0", true);


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'erobbins_scripts');



// Filter hooks

function wpb_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
 
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );



// Search form
function erobbins_search_form( $form ) {
    $homedir     = home_url( "/" );
    $placeholder = __( 'Type Keywords', 'erobbins' );
    $button      = __( 'Search', 'erobbins' );
    $newform = <<<FORM
<form role="search" method="get" action="{$homedir}">
    <label>
        <input type="search" placeholder="{$placeholder}" name="s">
    </label>
    <input type="hidden" name="post_type" value="post">
    <input type="submit" class="search-submit" value="{$button}">
</form>
FORM;

    return $newform;

}

add_filter( "get_search_form", "erobbins_search_form" );






require_once get_template_directory() . '/inc/template-tags.php';
require_once get_template_directory() . '/inc/template-functions.php';
require_once get_template_directory() . '/inc/woocommerce.php';