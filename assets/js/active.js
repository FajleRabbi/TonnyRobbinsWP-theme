(function($) {
    "use strict";
    jQuery(document).ready(function($){

        $('#main_menu').slicknav({
            prependTo:'.erobbins-responsive-menu',
            nestedParentLinks: true,
        });
        $('#main_menu').slicknav('close');


        var zero = 300;
       
        $(window).on('scroll', function(){
            if($(this).scrollTop()>150){
                $('.site-header').toggleClass('hide', $(window).scrollTop() > zero);
            }
            
            zero = $(window).scrollTop();
       
        });


    });

    jQuery(window).on('load', function(){
    	$('.preloader-wrapper').fadeOut();
    });




})(jQuery);