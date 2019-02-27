<?php


/*******************************
 ***Home Slider shortcode*
 ********************************/


function erobbins_home_slider( $atts ) {
	extract( shortcode_atts( array(
		'loop'            => 'true',
		'nav'             => 'true',
		'dots'            => true,
		'autoplay'        => '',
		'autoplayTimeout' => 5000,


	), $atts, 'home_slider_shortcode' ) );

	ob_start(); ?>

    <script>
        jQuery(document).ready(function ($) {
            function recalcCarouselWidth(carousel) {
                var $stage = carousel.find('.owl-stage'),
                    stageW = $stage.width(),
                    $el = $('.owl-item'),
                    elW = 0;
                $el.each(function () {
                    elW += $(this)[0].getBoundingClientRect().width;
                });
                if (elW > stageW) {
                    console.log('elW maggiore di stageW: ' + elW + ' > ' + stageW);
                    $stage.width(Math.ceil(elW));
                }
            }

            $(window).on('resize', function (e) {
                recalcCarouselWidth($('.owl-carousel'));
            }).resize();
            $('.owl-carousel').on('refreshed.owl.carousel', function (event) {
                recalcCarouselWidth($('.owl-carousel'));
            });
            $('.owl-carousel').on('onResize.owl.carousel', function (event) {
                recalcCarouselWidth($('.owl-carousel'));
            });
            $('#homeSlider').owlCarousel({
                items: 1,
                center: true,
                loop:<?php echo $loop; ?>,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                dots: true,
                // dotsData: true,
                // autoplay:true,
                smartSpeed: 450,
            });
        });

    </script>
    <div class="home-slider-wrapper">


        <div class="home-slider owl-carousel" id="homeSlider">
			<?php
			$sliderObjects = $atts['slider_options'];
			//var_dump($sliderObjects);
			foreach ( $sliderObjects as $sliderObject ) {
				$title   = $sliderObject->title;
				$content = $sliderObject->content;
				$image   = wp_get_attachment_image_src( $sliderObject->image, 'large' );
				$link    = explode( '|', $sliderObject->link );
				?>
                <div class="single-slider" style="background-image: url(<?php echo esc_url( $image[0] ); ?>)">
                    <div class="ovarlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="sliderContent">
                                    <h2><?php echo esc_html( $title ); ?></h2>
                                    <p><?php echo apply_filters( 'the_content', $content ); ?></p>
									<?php if ( ! empty( $link[1] ) ) : ?>
                                        <a <?php if ( ! empty( $link[0] ) ) : ?>href="<?php echo esc_url( $link[0] ); ?>"<?php endif; ?>
										   <?php if ( ! empty( $link[2] ) ) : ?>target="<?php echo esc_attr( $link[2] ); ?>"<?php endif; ?>
                                           class="default-button"><?php echo esc_html( $link[1] ); ?> <i
                                                    class="fa fa-angle-right"></i>
                                        </a>
									<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php
			}

			?>
        </div>
    </div>


	<?php
	$homeSliderMarkup = ob_get_clean();

	return $homeSliderMarkup;
}

add_shortcode( 'home_slider_shortcode', 'erobbins_home_slider' );


/*******************************
 ***Erobbins Theme Primary Button*
 ********************************/


function erobbins_primay_button( $atts ) {
	extract( shortcode_atts( array(
		'primary_button'   => '',
		'button_align'     => 'left',
		'bg_color'         => '#16aecf',
		'text_color'       => '#fff',
		'hover_bg_color'   => '#10526f',
		'hover_text_color' => '#fff',

	), $atts, 'primary_button_shortcode' ) );

	ob_start();

	$primary_button = explode( '|', $primary_button );
	?>
	<?php if ( ! empty( $primary_button ) || ! empty( $primary_button[1] ) ) : ?>
        <div class="primary-button text-<?php echo esc_attr( $button_align ); ?>">
            <a style="border-color: <?php echo esc_attr( $bg_color ); ?>;color: <?php echo esc_attr( $text_color ); ?>;background-color: <?php echo esc_attr( $bg_color ); ?>;"
			   <?php if ( ! empty( $primary_button[0] ) ) : ?>href="<?php echo esc_url( $primary_button[0] ); ?>"<?php endif; ?>
			   <?php if ( ! empty( $primary_button[2] ) ) : ?>target="<?php echo esc_attr( $primary_button[2] ); ?>"<?php endif; ?>
               onmouseover="this.style.backgroundColor='<?php echo esc_attr( $hover_bg_color ); ?>';"
               onmouseout="this.style.backgroundColor='<?php echo esc_attr( $bg_color ); ?>';"
               class="default-button"><?php echo esc_html( $primary_button[1] ); ?></a>
        </div>
	<?php endif; ?>
	<?php
	$primaryButton = ob_get_clean();

	return $primaryButton;
}

add_shortcode( 'primary_button_shortcode', 'erobbins_primay_button' );


/*******************************
 ***Erobbins Theme Featured Box*
 ********************************/


function erobbins_featured_box( $atts ) {
	extract( shortcode_atts( array(
		'align'       => '',
		'title'       => '',
		'description' => '',
		'image'       => '',
		'link'        => ''

	), $atts, 'featured_box_shortcode' ) );

	ob_start();

	$featuredImage = wp_get_attachment_image_src( $image, 'large' );
	$link          = explode( '|', $link );
	?>

    <div class="featured-wrapper">
        <a <?php if ( ! empty( $link[0] ) ) : ?>href="<?php echo esc_url( $link[0] ); ?>"<?php endif; ?>
		   <?php if ( ! empty( $link[2] ) ) : ?>target="<?php echo esc_attr( $link[2] ); ?>"<?php endif; ?>>
            <div class="single-featured text-<?php echo esc_attr( $align ); ?>"
                 style="background-image: url(<?php echo esc_url( $featuredImage[0] ); ?>);">
				<?php if ( ! empty( $title ) ) : ?>
                    <h2><?php echo esc_html( $title ); ?></h2>
				<?php endif; ?>
				<?php
				if ( ! empty( $description ) ) {
					echo '<p>' . esc_html( $description ) . '</p>';
				}
				?>
				<?php if ( ! empty( $link[0] ) ) : ?>
                    <span class="default-button featured-button"><?php echo esc_html( $link[1] ); ?></span>
				<?php endif; ?>
            </div>
        </a>
    </div>

	<?php
	$featuredBox = ob_get_clean();

	return $featuredBox;
}

add_shortcode( 'featured_box_shortcode', 'erobbins_featured_box' );


/*******************************
 ***Erobbins Vertical slider*
 ********************************/


function erobbins_vertical_slider( $atts ) {
	extract( shortcode_atts( array(
		'title'       => '',
		'image'       => '',
		'position'       => '',
		'description'       => '',
		'link'       => '',

	), $atts, 'vertical_slider_shortcode' ) );

	ob_start();

	$varticalSliderObjects = $atts['vartical_slider'];
	?>


    <div class="vertical-slider-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="slider-nav">
                        <?php foreach($varticalSliderObjects as $varticalSliderObject) :
                        $image = wp_get_attachment_image_src($varticalSliderObject->image, 'large');
                        $title = $varticalSliderObject->title;
                        ?>
                        <div><img src="<?php echo esc_url($image[0]); ?>" alt="<?php echo esc_attr($title); ?>"></div>
                        <?php endforeach; ?>
                    </div>

                </div>
                <div class="col-8 d-flex align-items-center justify-content-start">
                    <div class="slider-arrow prev-arrow">
                        <i class="fa fa-angle-up"></i>
                    </div>
                    <div class="slider-for">

	                    <?php foreach($varticalSliderObjects as $varticalSliderObject) :
	                    $title = $varticalSliderObject->title;
	                    $position = $varticalSliderObject->position;
	                    $description = $varticalSliderObject->description;
	                    $link = explode('|', $varticalSliderObject->link);
	                    ?>
                        <div class="singel-slider-content">
                            <h4><?php echo esc_html($title); ?></h4>
                            <em><?php echo esc_html($position); ?></em>
                            <p><?php echo esc_html($description); ?></p>
                            <?php if(!empty($link[0])) : ?>
                            <a <?php if(!empty($link[0])) : ?> href="<?php echo esc_url($link[0]); ?>"<?php endif; ?>
                               <?php if(!empty($link[2])) : ?>target="<?php echo esc_attr($link[2]); ?>" <?php endif; ?>><?php echo esc_html($link[1]); ?></a>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>

                    </div>
                    <div class="slider-arrow next-arrow">
                        <i class="fa fa-angle-down"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        jQuery(document).ready(function($){
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav',
                centerMode: true,
                centerPadding: '200px',
                focusOnSelect: true,
            });
            $('.slider-nav').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: false,
                arrows:true,
                prevArrow: $(".fa-angle-up"),
                nextArrow: $(".fa-angle-down"),
                centerMode: true,
                centerPadding: '200px',
                focusOnSelect: true,
                vertical: true,
                verticalSwiping: true,
            });
        });
    </script>



	<?php
	$verticalSlider = ob_get_clean();
	return $verticalSlider;
}

add_shortcode( 'vertical_slider_shortcode', 'erobbins_vertical_slider' );


/*******************************
 ***Erobbins Post Type List*****
 ********************************/


function erobbins_post_type_list( $atts ) {
	extract( shortcode_atts( array(
		'post_taxonomy'       => '',

	), $atts, 'vertical_slider_shortcode' ) );

	ob_start();
	?>

    <?php


	    $post_taxonomy_data = explode( ',', $post_taxonomy );

        foreach( $post_taxonomy_data as $post_taxonomy ){
            $post_taxonomy_tmp = explode( ':', $post_taxonomy );
            $post_type = $post_taxonomy_tmp[0];

	        if( isset($post_taxonomy_tmp[1]) ){
		        $taxonomy_term[] = $post_taxonomy_tmp[1];
	        }

        }

	    $taxonomy_objects = get_object_taxonomies( $post_type, 'objects' );
	    $taxonomy = key( $taxonomy_objects );



        $args = array(
            'post_type' 		=> $post_type,
            'posts_per_page' 	=> -1,
//            'orderby'        	=> $orderby,
//            'order' 			=> $order,
        );

        if( count($taxonomy_term) )
        {
            $tax_query = array(
                'relation' => 'OR'
            );

            foreach( $taxonomy_term as $term ){
                $tax_query[] = array(
                    'taxonomy' => $taxonomy,
                    'field'    => 'slug',
                    'terms'    => $term,
                );
            }


           $args['tax_query'] = $tax_query;
        }

	$the_query = new WP_Query( $args );

        while($the_query->have_posts()){
	        $the_query->the_post();
	        the_title(); echo '<br>';


        }

        wp_reset_query();

    ?>

	<?php
	$postType = ob_get_clean();
	return $postType;
}

add_shortcode( 'post_type_shortcode', 'erobbins_post_type_list' );

