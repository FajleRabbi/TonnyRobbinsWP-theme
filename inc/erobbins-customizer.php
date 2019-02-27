<?php

function erobbins_customizer_register($wp_customize){
	// Panel
	$wp_customize->add_panel('erobbins', array(
		'title'    => __('Erobbins Settings', 'erobbins'),
		'description' => '<p>Erobbins Theme Settings</p>',
		'priority' => 40
	));

	// All sections
    $wp_customize->add_section('erobbins_header_top', array(
        'title'    => __('Header Top Number', 'erobbins'),
        'priority' => 30,
	    'panel' => 'erobbins',
    ));

	$wp_customize->add_section('erobbins_social', array(
		'title'    => __('Header Top Socials', 'erobbins'),
		'priority' => 30,
		'panel' => 'erobbins',
	));



    $wp_customize->add_setting('header_number', array(
        'default' => '01841-946804'
    ));

	/*erobbins Social*/

	$wp_customize->add_setting('header_top_social_facebook', array(
		'default' => esc_url('facebook.com/')
	));


	$wp_customize->add_setting('header_top_social_twitter', array(
		'default' => esc_url('twitter.com/')
	));

	$wp_customize->add_setting('header_top_social_instagram', array(
		'default' => esc_url('instagram.com/')
	));



	//header top number control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'number_input',
            array(
                'label'    => __('Phone Number', 'erobbins'),
                'section'  => 'erobbins_header_top',
                'settings' => 'header_number'
            )
        )
    );


	//header top social control

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'facebook_input',
            array(
                'label'    => __('Facebook URl', 'erobbins'),
                'section'  => 'erobbins_social',
                'settings' => 'header_top_social_facebook'
            )
        )
    );


    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'twitter_input',
            array(
                'label'    => __('Twitter URl', 'erobbins'),
                'section'  => 'erobbins_social',
                'settings' => 'header_top_social_twitter'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'instagram_input',
            array(
                'label'    => __('Instagram URl', 'erobbins'),
                'section'  => 'erobbins_social',
                'settings' => 'header_top_social_instagram',
                'value' => '#'
            )
        )
    );

}
add_action('customize_register', 'erobbins_customizer_register');