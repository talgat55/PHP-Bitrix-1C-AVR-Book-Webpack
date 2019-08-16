
jQuery(document).ready(function () {
    "use strict";

    var arrowClass =  '.payment-slide-arrows' ;
    var listClass = '.reviews-list';
    var activeClass = 'is-active';

        jQuery(listClass).slick({
            infinite: true,
            slidesToShow: 1,
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

    //  display modal  add review

    jQuery('.create-review-link').click(function (e) {
        e.preventDefault();

        jQuery('.modal-cutom').addClass(activeClass);
        jQuery('.layer-overflow').addClass(activeClass);
    });

    // close modal
    jQuery('.modal-cutom .close-icon').click(function (e) {
        e.preventDefault();

        jQuery('.modal-cutom').removeClass(activeClass);
        jQuery('.layer-overflow').removeClass(activeClass);
    });
    // end redy function
});
