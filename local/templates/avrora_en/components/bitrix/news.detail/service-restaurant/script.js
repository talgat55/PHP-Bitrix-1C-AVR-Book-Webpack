
jQuery(document).ready(function () {
    "use strict";

    var activeClass = 'is-active';

    //  display modal  add review

    jQuery('.link-reserve').click(function (e) {
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
