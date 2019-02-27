<?php
	require get_template_directory() . '/inc/cs-framework/cs-framework.php';
	
	if (!defined('ABSPATH')) {
		die;
	} // Cannot access pages directly.
	
	
	
	
	function erobbins_metabox_options($options)
	{
		
		$options = array(); // remove old options

    // erobbins main slider option
		$options[] = array(
			'id'        => 'erobbins_home_slider',
			'title'     => esc_html__('Slider Information', 'erobbins'),
			'post_type' => 'main_slider',
			'context'   => 'normal',
			'priority'  => 'default',
			'sections'  => array(
				
				// begin section
				array(
					'name'   => 'main_slider_info',
					'fields' => array(
						
						// a field
						array(
							'id'    => 'slider_switcher',
							'type'  => 'switcher',
							'title' => 'Slider Button Enable?',
							'default' => true,
						),
						array(
							'id'    => 'slider_btn_text',
							'type'  => 'text',
							'title' => 'Slider Button Text',
							'default' => 'Find Out More',
							'dependency'   => array( 'slider_switcher', '==', 'true' )
						),
						array(
							'id'    => 'slider_btn_link',
							'type'  => 'text',
							'title' => 'Slider Button Link',
							'dependency'   => array( 'slider_switcher', '==', 'true' )
							
						)

					
					),
				
				),
			),
		);


		return $options;
		
	}
	
	add_filter('cs_metabox_options', 'erobbins_metabox_options');
