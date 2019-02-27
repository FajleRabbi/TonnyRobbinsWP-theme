<?php

require get_template_directory() . '/inc/cs-framework/cs-framework.php';
define('CS_ACTIVE_SHORTCODE', false); // default true
define('CS_ACTIVE_CUSTOMIZE', false); // default true

function erobbins_theme_options($options)
{

    $options = array(); // remove old options



    // Header options erobbins theme
    $options[] = array(
        'name' => 'header_options',
        'title' => esc_html__('Header settings', 'erobbins'),
        'icon' => 'fa fa-heart',
        'fields' => array(

            array(
                'type'    => 'heading',
                'content' => __('Header Bottom Options', 'erobbins')
            ),

            // logo text option
            array(
                'id' => 'logo_text',
                'type' => 'text',
                'title' => esc_html__('Custom Logo Text', 'erobbins'),
            ),



        )

    );



    // Footer options erobbins theme
    $options[] = array(
        'name' => 'footer_options',
        'title' => esc_html__('Footer settings', 'erobbins'),
        'icon' => 'fa fa-heart',
        'fields' => array(
            array(
                'type' => 'heading',
                'content' => 'Footer Bottom | Copyright Area Options',
            ),
            array(
                'id' => 'copyright_switcher',
                'type' => 'switcher',
                'title' => esc_html__('Copyright section enable?', 'erobbins'),
                'default' => true,
            ),
            array(
                'id' => 'copyright_text',
                'type' => 'text',
                'title' => esc_html__('Copyright Text', 'erobbins'),
                
            ),
        )
    );


    return $options;

}

add_filter('cs_framework_options', 'erobbins_theme_options');