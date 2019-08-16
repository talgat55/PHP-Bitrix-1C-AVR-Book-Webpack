/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./local/templates/avrora/assets/src/app.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./local/templates/avrora/assets/src/app.js":
/*!**************************************************!*\
  !*** ./local/templates/avrora/assets/src/app.js ***!
  \**************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _sass_style_sass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./sass/style.sass */ "./local/templates/avrora/assets/src/sass/style.sass");
/* harmony import */ var _sass_style_sass__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_sass_style_sass__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _js_default_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/default.js */ "./local/templates/avrora/assets/src/js/default.js");
/* harmony import */ var _js_default_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_default_js__WEBPACK_IMPORTED_MODULE_1__);



/***/ }),

/***/ "./local/templates/avrora/assets/src/js/default.js":
/*!*********************************************************!*\
  !*** ./local/templates/avrora/assets/src/js/default.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

jQuery(document).ready(function () {
  "use strict";

  lasyLoad();
  mapInit();
  changeLang();
  formHandler(); //  input mask phone

  if (jQuery('.phone-input').length) {
    jQuery('.phone-input').mask('+0(000) 000-0000');
  } // end redy function

});

window.onload = function () {// menuLoadFirstBlock();
}; //----------------------------------
//   Lasyload
//---------------------------------------


function lasyLoad() {
  "use strict";

  var lasyClass = jQuery('.lazy');

  if (lasyClass.length) {
    lasyClass.lazy({
      effect: "fadeIn",
      effectTime: 700
    });
  }
} //----------------------------------
//   Switch lang site
//---------------------------------------


function changeLang() {
  "use strict";

  var $redyUrlPart;
  var $redyUrlPartEnd;
  var clickClass = jQuery('.list-lang a');
  clickClass.click(function (e) {
    var $this = jQuery(this).attr('data-lang');

    if ($this != 'ru') {
      $redyUrlPart = $this;
    } else {
      $redyUrlPart = '';
    }

    if (window.location.pathname == '/' || window.location.pathname == '/ch/' || window.location.pathname == '/en/') {
      $redyUrlPartEnd = '';
    } else {
      $redyUrlPartEnd = '/' + window.location.pathname;
    } // window.location.href = window.location.origin + '/'+$redyUrlPart +$redyUrlPartEnd ;


    window.location.href = window.location.origin + '/' + $redyUrlPart;
    return false;
  });
} //----------------------------------
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
      }, {// searchControlProvider: 'yandex#search'
      });
      myMap.geoObjects.add(new ymaps.Placemark([54.944207, 73.353776], {
        balloonContent: 'ул. Поворотникова, 6',
        iconCaption: 'Наша Гостиница'
      }, {
        preset: 'islands#greenDotIconWithCaption'
      }));
      myMap.behaviors.disable('scrollZoom');
      myMap.behaviors.disable('multiTouch');
    });
  }
} //----------------------------------
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

/***/ }),

/***/ "./local/templates/avrora/assets/src/sass/style.sass":
/*!***********************************************************!*\
  !*** ./local/templates/avrora/assets/src/sass/style.sass ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })

/******/ });