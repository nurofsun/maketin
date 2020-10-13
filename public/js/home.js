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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/rupiaf.js/dist/scripts/rupiaf.common.js":
/*!**************************************************************!*\
  !*** ./node_modules/rupiaf.js/dist/scripts/rupiaf.common.js ***!
  \**************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Rupiaf; });
class Rupiaf {
    constructor(money) {
        this.money = money;
    }
    convert() {
        this.money = this.money.toString().replace(/\./g, '');
        let step = 3, sisa = this.money.length % step, counter = Math.floor(this.money.length / step);
        this.money = this.money.split('');
        if (sisa == 0) {
            if (counter != 1) {
                for (let i = 0; i < counter; i++) {
                    this.money.splice(this.money.length - (step++), 0, '.');
                    step += 3;
                }
                this.money = this.money.join('');
                return this.money.substring(1);
            }
            return this.money.join('');
        }
        else {
            for (let i = 0; i < counter; i++) {
                this.money.splice(this.money.length - (step++), 0, '.');
                step += 3;
            }
            return this.money.join('');
        }
    }
    clean() {
        this.money = this.money.replace(/\./g, '');
        return parseInt(this.money);
    }
}
//# sourceMappingURL=rupiaf.common.js.map

/***/ }),

/***/ "./resources/js/home.js":
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_rupiaf_js_dist_scripts_rupiaf_common_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../node_modules/rupiaf.js/dist/scripts/rupiaf.common.js */ "./node_modules/rupiaf.js/dist/scripts/rupiaf.common.js");


function getAmounts() {
  return new Promise(function (resolve, reject) {
    var amountElements = document.querySelectorAll('.amount');

    if (amountElements.length !== 0) {
      resolve(amountElements);
    }

    reject('Cannot find amount elements');
  });
}

getAmounts().then(function (elements) {
  elements.forEach(function (element) {
    element.textContent = new _node_modules_rupiaf_js_dist_scripts_rupiaf_common_js__WEBPACK_IMPORTED_MODULE_0__["default"](element.textContent).convert();
  });
});

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/home.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nur/Project/Website/maketin/resources/js/home.js */"./resources/js/home.js");


/***/ })

/******/ });