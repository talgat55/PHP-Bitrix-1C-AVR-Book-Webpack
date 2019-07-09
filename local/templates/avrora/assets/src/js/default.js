jQuery(document).ready(function () {
    "use strict";


    lasyLoad();
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


