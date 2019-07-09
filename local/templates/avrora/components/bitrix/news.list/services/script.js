
jQuery(document).ready(function () {
    "use strict";

     //
    //  add width for slider
    //
    var sliderClass = '.list-sliders';

    jQuery(sliderClass).css( 'width' , jQuery(window).width() / 2);

    //
    // Sliders
    //
    var sliderClass =  '.list-sliders' ;
    var arrowClass =  '.services-slide-arrows' ;

    if (jQuery(sliderClass).length) {
        jQuery(sliderClass).slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false
            //   autoplay: true,
        });
    }

    jQuery(arrowClass +' .prev').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find(sliderClass).slick('slickPrev');
    });


    jQuery(arrowClass +' .next').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find(sliderClass).slick('slickNext');
    });

    // end redy function
});
