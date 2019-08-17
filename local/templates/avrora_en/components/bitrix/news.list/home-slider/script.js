
jQuery(document).ready(function () {
    "use strict";

    var sliderClass =  '.slider-list' ;
    var arrowClass =  '.home-slide-arrows' ;

    if (jQuery(sliderClass).length) {
        jQuery(sliderClass).slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            autoplay: true,
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
