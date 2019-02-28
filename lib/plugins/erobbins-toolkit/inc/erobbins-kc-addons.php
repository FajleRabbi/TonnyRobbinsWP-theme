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
						    'type' => 'text',
						    'label' => __( 'Post type title.', 'erobbins' ),
						    'name' => 'title',
					    ),
					    array(
						    'name' => 'per_page',
						    'label' => __('Number of post display.', 'erobbins'),
						    'type' => 'number_slider',
						    'options' => array(
							    'min' => 0,
							    'max' => 20,
							    'unit' => '',
							    'show_input' => true
						    ),
						    'value' => '5',
						    'description' => __('Display number of post','erobbins')
					    ),
					    array(
						    'type' => 'select',
						    'label' => __( 'Orderby', 'erobbins' ),
						    'name' => 'orderby',
						    'options' => array(
						    	'ID' => __('Post ID', 'erobbins'),
						    	'author' => __('Author', 'erobbins'),
						    	'title' => __('Title', 'erobbins'),
						    	'name' => __('Post name (post slug)', 'erobbins'),
						    	'type' => __('Post type (available since Version 4.0)', 'erobbins'),
						    	'date' => __('Date', 'erobbins'),
						    	'modified' => __('Last modified date', 'erobbins'),
						    	'rand' => __('Random order', 'erobbins'),
						    	'comment_count' => __('Number of comments', 'erobbins'),
						    )
					    ),
					    array(
						    'type' => 'select',
						    'label' => __( 'Order', 'erobbins' ),
						    'name' => 'order',
						    'options' => array(
						    	'asc' => 'ASC',
						    	'desc' => 'DESC',
						    )
					    ),
					    array(
						    'type' => 'post_taxonomy',
						    'label' => __( 'Post type list.', 'erobbins' ),
						    'name' => 'post_taxonomy',
					    ),
					    array(
						    'type' => 'select',
						    'label' => __( 'Post type column layout.', 'erobbins' ),
						    'name' => 'layout',
						    'options' => array(
						    	'normal_layout' => __('Normal Blog Layout', 'erobbins'),
						    	'special_layout' => __('Special Blog Layout', 'erobbins')
						    ),
						    'value' => 'col-md-4',
					    ),

					    array(
						    'type' => 'toggle',
						    'label' => __( 'Hide category', 'erobbins' ),
						    'name' => 'hide_category',
						    'value' => false,
					    ),
					    array(
						    'type' => 'toggle',
						    'label' => __( 'Hide title', 'erobbins' ),
						    'name' => 'hide_title',
						    'value' => false,
					    ),
					    array(
						    'type' => 'toggle',
						    'label' => __( 'Hide read more button', 'erobbins' ),
						    'name' => 'hide_read_more_button',
						    'value' => false,
					    ),
				    )

			    )

		    )
	    ); // End add map


	    kc_add_map(
		    array(

			    'full_width_slider_shortcode' => array(

				    'name' => __('Full width slider', 'erobbins'),
				    'description' => __('Display full width slider', 'erobbins'),
				    'icon' => 'kc-icon-progress',
				    'category' => 'Erobbins',
				    'params' => array(

					    array(
						    'type'			=> 'group',
						    'label'			=> __('Full width slider information', 'erobbins'),
						    'name'			=> 'full_width_slider_opt',
						    'description'	=> __( 'Repeat this field to display full width slider.', 'erobbins' ),
						    'options'		=> array('add_text' => __('Add new slider', 'erobbins')),
						    'params' => array(

							    array(
								    'type' => 'text',
								    'label' => __( 'title', 'erobbins' ),
								    'name' => 'title',
							    ),
							    array(
								    'type' => 'attach_image',
								    'label' => __( 'image', 'erobbins' ),
								    'name' => 'image',
							    ),
							    array(
								    'type' => 'link',
								    'label' => __( 'link', 'erobbins' ),
								    'name' => 'link',
							    ),
						    ),
					    ),
				    )

			    )

		    )
	    ); // End add map




    }
}