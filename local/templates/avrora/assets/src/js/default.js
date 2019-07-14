jQuery(document).ready(function () {
    "use strict";


    lasyLoad();


    //  close links
    jQuery('a').click(function(e) {

        return false;

    });


    // end redy function
});


window.onload = function () {
    // menuLoadFirstBlock();
};


//----------------------------------
//   Lasyload
//---------------------------------------

function lasyLoad() {
    "use strict";

    var lasyClass = jQuery('.lazy');

    if (lasyClass.length) {
        lasyClass.lazy({
            effect: "fadeIn",
            effectTime: 700,
        });
    }

}


