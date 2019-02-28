

(function($) {
    "use strict";
    jQuery(document).ready(function($){


// vertical slider


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
            arrows: true,
            prevArrow: $(".fa-angle-up"),
            nextArrow: $(".fa-angle-down"),
            centerMode: true,
            centerPadding: '200px',
            focusOnSelect: true,
            vertical: true,
            verticalSwiping: true,
        });



//full width slider
        $('.erobbins-full-slider').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 3,
            arrows: true,
            draggable:true,
            focusOnSelect:true,
            prevArrow: $(".full-width-slider .fa-angle-left"),
            nextArrow: $(".full-width-slider .fa-angle-right"),
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]

        });

    });




})(jQuery);







