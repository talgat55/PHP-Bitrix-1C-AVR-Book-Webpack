
jQuery(document).ready(function () {
    "use strict";

    var arrowClass =  '.sliders-arrows' ;
    var listClass = '.slider-items';
    var itemClickClass = '.list-hal-heading a';
    var activeClass = 'active';

    // init slider
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


    // arrows
    jQuery(arrowClass +' .prev').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find(listClass+'.active').slick('slickPrev');
    });


    jQuery(arrowClass +' .next').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find(listClass+'.active').slick('slickNext');
    });


    // switch sliders


    jQuery(itemClickClass).click(function (e) {
        e.preventDefault();
        var  currentValue = jQuery(this).attr('data-id');
        // add class in active click item
        jQuery(this).parent().parent().find('a').removeClass(activeClass);
        jQuery(this).addClass(activeClass);
        // add active class in list slides
        jQuery(listClass).removeClass(activeClass);
        jQuery(listClass+'.'+currentValue).addClass(activeClass);
        var dataPrice = jQuery('.slider-items.active').attr('data-price');
        var dataCapacity = jQuery('.slider-items.active').attr('data-capacity');

        jQuery('.last-block .capacity').html(' ').append(dataCapacity);
        jQuery('.last-block .price').html(' ').append(dataPrice);

    });




    // end redy function
});
