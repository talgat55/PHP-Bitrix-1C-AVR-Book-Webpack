jQuery(document).ready(function () {
    "use strict";

    var arrowClass = '.numbers-list .slide-arrows';
    var listClass = '.sliders';
    var layerOverflow = '.layer-overflow';
    var modalClass = '.modal-cutom';
    var thisForm = jQuery('form');
    var modalSuccess = jQuery('.modal-success');
    var activeClass = 'is-active';

    jQuery(listClass).slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
        //   autoplay: true,
    });


    jQuery(arrowClass + ' .prev').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find(listClass).slick('slickPrev');
    });


    jQuery(arrowClass + ' .next').click(function (e) {
        e.preventDefault();
        jQuery(this).parent().parent().parent().find(listClass).slick('slickNext');
    });

    // show modal
    jQuery('.order-price').click(function (e) {
        e.preventDefault();

        jQuery(modalClass + ', ' + layerOverflow).addClass(activeClass);
    });
    // close modal
    jQuery('.modal-content .close-icon, ' + layerOverflow).click(function (e) {
        e.preventDefault();

        jQuery(modalClass).removeClass(activeClass);
        jQuery(layerOverflow).removeClass(activeClass);
    });

    // mask for input phone
    jQuery('.phone-input').mask('+0(000) 000-0000');

    // submit


    thisForm.submit(function () {

        if (!thisForm.parent().hasClass('search-page')) {
            var formData = thisForm.serialize();

            jQuery.post('/ajax/send.php', formData, function (data) {

                if (data) {
                    // reset form
                    thisForm[0].reset();
                    jQuery(modalClass).removeClass(activeClass);
                    jQuery(modalSuccess).addClass(activeClass);
                    setTimeout(function () {
                        jQuery(modalSuccess).removeClass(activeClass );
                        jQuery(layerOverflow).removeClass(activeClass);
                    }, 2000);
                }
            });
            return false;
        }
    });


    // end redy function
});
