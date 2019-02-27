<?php
	
	
	function erobbins_custom_style()
	{
		
		wp_enqueue_style('erobbins-custom-style', get_template_directory_uri() . '/assets/css/custom.css');
		
		
		// body font family
		$body_font = cs_get_option('body_font');
		$body_font_size = cs_get_option('body_font_size');
		$heading_font = cs_get_option('heading_font');
		
		
		// primary color option
		$primary_color   = cs_get_option('primary_color');
		$secondary_color = cs_get_option('secondary_color');
		
		
		// header top color options
		$header_top_text_color = cs_get_option("header_top_text_color");
		$header_top_icon_color = cs_get_option("header_top_icon_color");
		
		//header bottom color options
		$header_bottom_bg_color         = cs_get_option("header_bottom_bg_color");
		$header_bottom_text_color       = cs_get_option("header_bottom_text_color");
		$header_bottom_text_hover_color = cs_get_option("header_bottom_text_hover_color");
		$header_bottom_submenu_bg_color = cs_get_option("header_bottom_submenu_bg_color");



		$custom_css = '
			body{
				font-family: '.esc_attr($body_font['family']).';
				font-weight: '.esc_attr($body_font['variant']).';
				font-size: '.esc_attr($body_font_size).';
				
			}
			h1,h2,h3,h4,h5,h6{
				font-family: '.$heading_font['family'].';
				font-weight: '.$heading_font['variant'].';
			}
			



			.erobbins_blog_wrap article h2, a, .single_post_article .entry-title, .nav-links a,.nav-links h6, #respond .comment-reply-title, .comments-title{
				color: ' . esc_attr($primary_color) . ';
			}
			.default_btn, .post_pagination .nav-links span.current, .perthbiz_siderbar .widget_search input[type=submit], input[type=submit], .comment-author .says, .comments-area .reply a{
				background-color: ' . esc_attr($primary_color) . ';
			}
		
		
			
			.nav-links a:hover{
				color: ' . esc_attr($secondary_color) . ';
			}
			input[type=submit]:hover,.default_btn:hover,.post_pagination .nav-links a:hover,.widget_search input[type=submit]:hover, .comments-area .reply a:hover{
				background-color: ' . esc_attr($secondary_color) . ';
			}
		
		
		
		
			.header_desc_text span, .header_contact ul li a {
				color: ' . esc_attr($header_top_text_color) . ';
			}
			.header_contact ul li i{
				color: ' . esc_attr($header_top_icon_color) . ';
			}
			
			
			.header_bottom{
				background-color: ' . esc_attr($header_bottom_bg_color) . ';
			}
			.header_bottom ul li a{
				color: ' . esc_attr($header_bottom_text_color) . ';
			}

			.header_bottom ul li:hover, .header_bottom ul li a:hover{
				color: ' . esc_attr($header_bottom_text_hover_color) . ';
			}
			.header_bottom ul li ul{
				background-color: ' . esc_attr($header_bottom_submenu_bg_color) . ';
			}
			
			
			
		';
		
		
		wp_add_inline_style('erobbins-custom-style', $custom_css);
	}
	
	add_action('wp_enqueue_scripts', 'erobbins_custom_style');

