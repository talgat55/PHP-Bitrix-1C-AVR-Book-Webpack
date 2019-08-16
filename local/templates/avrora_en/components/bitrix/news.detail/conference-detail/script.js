
jQuery(document).ready(function () {
    "use strict";

    var arrowClass =  '.slider-slide-arrows' ;
    var listClass = '.slider-list';

    var layerOverflow = '.layer-overflow';
    var modalClass = '.modal-cutom';
    var activeClass = 'is-active';

        jQuery(listClass).slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
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

    // show modal
    jQuery('.create-order').click(function (e) {
        e.preventDefault();

        jQuery(modalClass + ', ' + layerOverflow).addClass(activeClass);
    });
    // close modal
    jQuery('.modal-content .close-icon, ' + layerOverflow).click(function (e) {
        e.preventDefault();

        jQuery(modalClass).removeClass(activeClass);
        jQuery(layerOverflow).removeClass(activeClass);
    });


    // end redy function
});
