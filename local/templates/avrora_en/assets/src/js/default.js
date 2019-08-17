jQuery(document).ready(function () {
    "use strict";


    lasyLoad();
    mapInit();
    changeLang();
    formHandler();
    mobileMenu();
        //  input mask phone
    if(jQuery('.phone-input').length){
        jQuery('.phone-input').mask('+0(000) 000-0000');
    }

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
//   Switch lang site
//---------------------------------------

function changeLang() {
    "use strict";
    var $redyUrlPart;
    var $redyUrlPartEnd;
    var clickClass = jQuery('.list-lang a');

    clickClass.click(function (e) {
        var $this = jQuery(this).attr('data-lang');
        if($this !='ru'){
            $redyUrlPart =  $this;
        }else{
            $redyUrlPart = '';
        }
        if(window.location.pathname == '/'  ||  window.location.pathname == '/ch/' || window.location.pathname == '/en/'){
            $redyUrlPartEnd = '';
        }else{
            $redyUrlPartEnd  =  '/'+window.location.pathname;
        }

        // window.location.href = window.location.origin + '/'+$redyUrlPart +$redyUrlPartEnd ;
        window.location.href = window.location.origin + '/'+$redyUrlPart ;
        return false;
    });
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
                controls: ['zoomControl']
            }, {
                // searchControlProvider: 'yandex#search'
            });


            myMap.geoObjects
                .add(new ymaps.Placemark([54.944207, 73.353776], {
                    balloonContent: 'ул. Поворотникова, 6',
                    iconCaption: 'Наша Гостиница'
                }, {
                    preset: 'islands#greenDotIconWithCaption'
                }));
            myMap.behaviors.disable('scrollZoom');
            myMap.behaviors.disable('multiTouch');


        });
    }

}


//----------------------------------
//   Form handler
//------------------------------------
function formHandler() {
    "use strict";
    var thisForm = jQuery('#feedback-form');
    var overlayLayer = jQuery('.layer-overflow');
    var modallayLayer = jQuery('.modal-success');
    var modalClass = jQuery('.modal-cutom');
    var activeClass = 'is-active';

    thisForm.submit(function () {

        if (!thisForm.parent().hasClass('search-page')) {
            var formData = thisForm.serialize();

            jQuery.post('/ajax/send.php', formData, function (data) {

                if (data) {
                    // reset form
                    thisForm[0].reset();
                    overlayLayer.addClass(activeClass);
                    modallayLayer.addClass(activeClass);
                    modalClass.removeClass(activeClass);
                    setTimeout(function () {
                        overlayLayer.removeClass(activeClass);
                        modallayLayer.removeClass(activeClass);

                    }, 2000);
                }
            });
            return false;
        }
    });
}


//----------------------------------
//   Mobile menu
//------------------------------------
function mobileMenu() {
    "use strict";
    var clickClass = jQuery('#mobile-toggle');
    var mobileBar = jQuery('.mobile-bar');
    var activeClass = 'is-active';

    clickClass.click(function (e) {
        jQuery(this).toggleClass(activeClass);
        mobileBar.toggleClass(activeClass);
    });
}


