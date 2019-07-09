
jQuery(document).ready(function () {
    "use strict";

    var arrowClass =  '.payment-slide-arrows' ;
    var listClass = '.list-payments';
    setTimeout(function(){
        jQuery(listClass).slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            dots: false
            //   autoplay: true,
        });

    }, 500);


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
