<?php

add_action('init', 'erobbins_kc_addons', 99);

function erobbins_kc_addons(){

    if (function_exists('kc_add_map')) {


        kc_add_map(
            array(

                'home_slider_shortcode' => array(

                    'name' => __('Home Slider', 'erobbins'),
                    'description' => __('', 'erobbins'),
                    'icon' => 'kc-icon-progress',
                    'category' => 'Erobbins',
                    'css_box' => true,
                    'params' => array(
                        array(
                            'type' => 'select',
                            'label' => __( 'Loop', 'erobbins' ),
                            'name' => 'loop',
                            'description' => __( 'Slider Loop.', 'erobbins' ),
                            'admin_label' => true,
                            'options' => array(
                                'true' => __('True', 'erobbins'),
                                'false' => __('False', 'erobbins'),
                            )
                        ),
                        array(
                            'type' => 'select',
                            'label' => __( 'Nav', 'erobbins' ),
                            'name' => 'nav',
                            'description' => __( 'Slider Nav.', 'erobbins' ),
                            'admin_label' => true,
                            'options' => array(
                                'true' => __('True', 'erobbins'),
                                'false' => __('False', 'erobbins'),
                            )
                        ),

                        array(
                            'type' => 'select',
                            'label' => __( 'Dots', 'erobbins' ),
                            'name' => 'dots',
                            'description' => __( 'Slider Dots.', 'erobbins' ),
                            'admin_label' => true,
                            'options' => array(
                                'true' => __('True', 'erobbins'),
                                'false' => __('False', 'erobbins'),
                            )
                        ),
                        array(
                            'type' => 'select',
                            'label' => __( 'AutoPlay', 'erobbins' ),
                            'name' => 'autoplay',
                            'description' => __( 'Slider AutoPlay.', 'erobbins' ),
                            'admin_label' => true,
                            'options' => array(
                                'true' => __('True', 'erobbins'),
                                'false' => __('False', 'erobbins'),
                            )
                        ),

                        array(
                            'type'			=> 'group',
                            'label'			=> __('Slider Options', 'erobbins'),
                            'name'			=> 'slider_options',
                            'description'	=> __( 'Repeat this fields with each item created, Each item corresponding slider element.', 'erobbins' ),
                            'options'		=> array('add_text' => __('Add new slider', 'erobbins')),
                            'params' => array(
                                
                                array(
                                    'type' => 'text',
                                    'label' => __( 'Title', 'erobbins' ),
                                    'name' => 'title',
                                    'description' => __( 'Slider Title.', 'erobbins' ),
                                    'admin_label' => true,
                                ),
                                array(
                                    'type' => 'attach_image',
                                    'label' => __( 'Background Image', 'erobbins' ),
                                    'name' => 'image',
                                    'description' => __( 'Slider Background Image.', 'erobbins' ),
                                    'admin_label' => true,
                                ),
                                array(
                                    'type' => 'textarea',
                                    'label' => __( 'Content', 'erobbins' ),
                                    'name' => 'content',
                                    'description' => __( 'Slider Content.', 'erobbins' ),
                                    'admin_label' => true,
                                ),
                                array(
                                    'type' => 'link',
                                    'label' => __( 'Slider Action', 'erobbins' ),
                                    'name' => 'link',
                                    'description' => __( 'Slider Action link', 'erobbins' ),
                                    'admin_label' => true,
                                ),
                            ),
                        ),
                    )

                )

            )
        ); // End add map





	    kc_add_map(
		    array(

			    'primary_button_shortcode' => array(

				    'name' => __('Primary Button', 'erobbins'),
				    'description' => __('ERobbins Primary Button', 'erobbins'),
				    'icon' => 'kc-icon-progress',
				    'category' => 'Erobbins',
				    'params' => array(
					    array(
						    'type' => 'select',
						    'label' => __( 'Primary Button Alignments', 'erobbins' ),
						    'name' => 'button_align',
						    'value' => 'left',
						    'options' => array(
						    	'left' => __('Left', 'erobbins'),
						    	'center' => __('Center', 'erobbins'),
						    	'right' => __('Right', 'erobbins'),
						    )
					    ),
					    array(
						    'type' => 'color_picker',
						    'label' => __( 'Background Color', 'erobbins' ),
						    'name' => 'bg_color',
						    'value' => '#16aecf',
					    ),
					    array(
						    'type' => 'color_picker',
						    'label' => __( 'Text Color', 'erobbins' ),
						    'name' => 'text_color',
						    'value' => '#fff',
					    ),
					    array(
						    'type' => 'color_picker',
						    'label' => __( 'Hover Background Color', 'erobbins' ),
						    'name' => 'hover_bg_color',
						    'value' => '#10526f',
					    ),

					    array(
						    'type' => 'color_picker',
						    'label' => __( 'Hover Text Color', 'erobbins' ),
						    'name' => 'hover_text_color',
						    'value' => '#fff',
					    ),
					    array(
						    'type' => 'link',
						    'label' => __( 'Primary Button', 'erobbins' ),
						    'name' => 'primary_button',
					    ),
				    )

			    )

		    )
	    ); // End add map



	    kc_add_map(
		    array(

			    'featured_box_shortcode' => array(

				    'name' => __('Featured Box', 'erobbins'),
				    'description' => __('ERobbins Featured Box', 'erobbins'),
				    'icon' => 'kc-icon-progress',
				    'category' => 'Erobbins',
				    'params' => array(
					    array(
						    'type' => 'select',
						    'label' => __( 'Featured Box Alignments', 'erobbins' ),
						    'name' => 'align',
						    'value' => 'center',
						    'options' => array(
							    'left' => __('Left', 'erobbins'),
							    'center' => __('Center', 'erobbins'),
							    'right' => __('Right', 'erobbins'),
						    )
					    ),
					    array(
						    'type' => 'text',
						    'label' => __( 'Featured Box Title', 'erobbins' ),
						    'name' => 'title',
					    ),
					    array(
						    'type' => 'textarea',
						    'label' => __( 'Featured Box Description', 'erobbins' ),
						    'name' => 'description',
					    ),
					    array(
						    'type' => 'attach_image',
						    'label' => __( 'Featured Box Image', 'erobbins' ),
						    'name' => 'image',
					    ),

					    array(
						    'type' => 'link',
						    'label' => __( 'Featured Box Link', 'erobbins' ),
						    'name' => 'link',
					    ),
				    )

			    )

		    )
	    ); // End add map




	    kc_add_map(
		    array(

			    'vertical_slider_shortcode' => array(

				    'name' => __('Testimonial Vartical Slider', 'erobbins'),
				    'description' => __('Vartical slider to display testimonials', 'erobbins'),
				    'icon' => 'kc-icon-progress',
				    'category' => 'Erobbins',
				    'css_box' => true,
				    'params' => array(
					    array(
						    'type'			=> 'group',
						    'label'			=> __('Vartical Slider Options', 'erobbins'),
						    'name'			=> 'vartical_slider',
						    'description'	=> __( 'Repeat this fields with each item created, Each item corresponding slider element.', 'erobbins' ),
						    'options'		=> array('add_text' => __('Add new slider', 'erobbins')),
						    'params' => array(

							    array(
								    'type' => 'text',
								    'label' => __( 'Title', 'erobbins' ),
								    'name' => 'title',
								    'description' => __( 'Slider Testimonial Title.', 'erobbins' ),
								    'admin_label' => true,
							    ),
							    array(
								    'type' => 'text',
								    'label' => __( 'Position', 'erobbins' ),
								    'name' => 'position',
								    'description' => __( 'Slider Testimonial Title.', 'erobbins' ),
								    'admin_label' => true,
							    ),
							    array(
								    'type' => 'attach_image',
								    'label' => __( 'Slider Image', 'erobbins' ),
								    'name' => 'image',
								    'description' => __( 'Slider Testimonial Image.', 'erobbins' ),
								    'admin_label' => true,
							    ),
							    array(
								    'type' => 'textarea',
								    'label' => __( 'Content', 'erobbins' ),
								    'name' => 'description',
								    'description' => __( 'Slider Testimonial Description.', 'erobbins' ),
								    'admin_label' => true,
							    ),
							    array(
								    'type' => 'link',
								    'label' => __( 'Slider Action', 'erobbins' ),
								    'name' => 'link',
								    'description' => __( 'Slider Action link', 'erobbins' ),
								    'admin_label' => true,
							    ),
						    ),
					    ),
				    )

			    )

		    )
	    ); // End add map



	    kc_add_map(
		    array(

			    'post_type_shortcode' => array(

				    'name' => __('Post Type List', 'erobbins'),
				    'description' => __('Display post type with this addons.', 'erobbins'),
				    'icon' => 'kc-icon-progress',
				    'category' => 'Erobbins',
				    'params' => array(
					    array(
						    'type' => 'post_taxonomy',
						    'label' => __( 'Post type list.', 'erobbins' ),
						    'name' => 'post_taxonomy',
					    ),
				    )

			    )

		    )
	    ); // End add map




    }
}