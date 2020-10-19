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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
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

/***/ "./resources/js/payment.js":
/*!*********************************!*\
  !*** ./resources/js/payment.js ***!
  \*********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_rupiaf_js_dist_scripts_rupiaf_common__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../node_modules/rupiaf.js/dist/scripts/rupiaf.common */ "./node_modules/rupiaf.js/dist/scripts/rupiaf.common.js");


function convertTablePaymentAmount() {
  return new Promise(function (resolve, reject) {
    var columnAmounts = document.querySelectorAll('#payments .amount');

    if (columnAmounts) {
      resolve(columnAmounts);
    }

    reject(new Error('Cannot find column amount.'));
  });
}

convertTablePaymentAmount().then(function (elements) {
  elements.forEach(function (element) {
    var rupiah = new _node_modules_rupiaf_js_dist_scripts_rupiaf_common__WEBPACK_IMPORTED_MODULE_0__["default"](element.textContent);
    element.textContent = rupiah.convert();
  });
})["catch"](function (error) {
  return console.log(error);
});

function convertInputAmountField(element) {
  return new Promise(function (resolve, reject) {
    var field = document.querySelector(element);

    if (field) {
      resolve(field);
    }

    reject(new Error('Cannot find field amount.'));
  });
}

convertInputAmountField('.amount-input').then(function (element) {
  element.value = new _node_modules_rupiaf_js_dist_scripts_rupiaf_common__WEBPACK_IMPORTED_MODULE_0__["default"](element.value).convert();
  element.addEventListener('keyup', function (event) {
    var rupiah = new _node_modules_rupiaf_js_dist_scripts_rupiaf_common__WEBPACK_IMPORTED_MODULE_0__["default"](event.target.value);
    event.target.value = rupiah.convert();
  });
})["catch"](function (err) {
  console.log(err);
});

function convertToNumberAmountField(formElement, inputElement) {
  return new Promise(function (resolve, reject) {
    var formPayment = document.querySelector(formElement);
    var amountInput = document.querySelector(inputElement);

    if (formPayment && amountInput) {
      resolve({
        formPayment: formPayment,
        amountInput: amountInput
      });
    }

    reject(new Error('Cannot find form element.'));
  });
}

convertToNumberAmountField('#newPaymentModal', '.amount-input').then(function (element) {
  element.formPayment.addEventListener('submit', function () {
    element.amountInput.value = new _node_modules_rupiaf_js_dist_scripts_rupiaf_common__WEBPACK_IMPORTED_MODULE_0__["default"](element.amountInput.value).clean();
  });
})["catch"](function (err) {
  return console.log(err);
});
var editPaymentModals = document.querySelectorAll('.edit-payment-modal');

for (var indexEditPaymentModal = 1; indexEditPaymentModal <= editPaymentModals.length; indexEditPaymentModal++) {
  convertInputAmountField(".edit-amount-input-".concat(indexEditPaymentModal)).then(function (element) {
    element.value = new _node_modules_rupiaf_js_dist_scripts_rupiaf_common__WEBPACK_IMPORTED_MODULE_0__["default"](element.value).convert();
    element.addEventListener('keyup', function (event) {
      var rupiah = new _node_modules_rupiaf_js_dist_scripts_rupiaf_common__WEBPACK_IMPORTED_MODULE_0__["default"](event.target.value);
      event.target.value = rupiah.convert();
    });
  })["catch"](function (err) {
    console.log(err);
  });
  convertToNumberAmountField("#editPaymentModal-".concat(indexEditPaymentModal), ".edit-amount-input-".concat(indexEditPaymentModal)).then(function (element) {
    element.formPayment.addEventListener('submit', function () {
      element.amountInput.value = new _node_modules_rupiaf_js_dist_scripts_rupiaf_common__WEBPACK_IMPORTED_MODULE_0__["default"](element.amountInput.value).clean();
    });
  })["catch"](function (err) {
    return console.log(err);
  });
}

/***/ }),

/***/ 2:
/*!***************************************!*\
  !*** multi ./resources/js/payment.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nur/Project/Website/maketin/resources/js/payment.js */"./resources/js/payment.js");


/***/ })

/******/ });