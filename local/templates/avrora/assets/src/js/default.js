jQuery(document).ready(function () {
    "use strict";


    lasyLoad();
    mapInit();

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


//----------------------------------
//   Map
//---------------------------------------

function mapInit() {
    "use strict";

    var mapClass = jQuery('#map');

    if (mapClass.length) {
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                center: [54.944207, 73.353776],
                zoom: 15,
                controls: []
            }, {
                // searchControlProvider: 'yandex#search'
            });


            myMap.geoObjects
                .add(new ymaps.Placemark([54.944207, 73.353776], {
                    balloonContent: 'ул. Поворотникова, 6',
                    iconCaption: 'Наш офис'
                }, {
                    preset: 'islands#greenDotIconWithCaption'
                }));
            myMap.behaviors.disable('scrollZoom');
            myMap.behaviors.disable('multiTouch');
            myMap.behaviors.disable('drag');


        });
    }

}



