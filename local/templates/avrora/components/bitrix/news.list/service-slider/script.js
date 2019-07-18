
jQuery(document).ready(function () {
    "use strict";

    var arrowClass =  '.payment-slide-arrows' ;
    var listClass = '.services-list';

        jQuery(listClass).slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true
            //   autoplay: true,
        });



    jQuery(arrowClass +' .prev').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find(listClass).slick('slickPrev');
    });


    jQuery(arrowClass +' .next').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find(listClass).slick('slickNext');
    });


    // end redy function
});
