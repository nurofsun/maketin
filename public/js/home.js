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

/***/ "./node_modules/rupiafjs/src/js/rupiaf.amd.js":
/*!****************************************************!*\
  !*** ./node_modules/rupiafjs/src/js/rupiaf.amd.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Rupiaf; });
class Rupiaf {
    constructor(number) {
        this.number = number;
    }
    convert() {
        this.number = this.number.toString().replace(/\./g, '');
        let step = 3,
            sisa = this.number.length % step,
            counter = Math.floor(this.number.length / step);
        this.number = this.number.split('');
        if (sisa == 0) {
            if (counter != 1) {
                for (let i=0; i < counter; i++) {
                    this.number.splice(this.number.length - (step++),0,'.')
                    step += 3;
                }
                this.number = this.number.join('');
                return this.number.substring(1)
            }
            return this.number.join('');
        } else {
            for (let i=0; i < counter; i++) {
                this.number.splice(this.number.length - (step++),0,'.')
                step += 3;
            }
        return this.number.join('');
        }
    }
    clean() {
        this.number = this.number.replace(/\./g,'');
        return parseInt(this.number)
    }
}



/***/ }),

/***/ "./resources/js/home.js":
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var rupiafjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! rupiafjs */ "./node_modules/rupiafjs/src/js/rupiaf.amd.js");


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
    element.textContent = new rupiafjs__WEBPACK_IMPORTED_MODULE_0__["default"](element.textContent).convert();
  });
});

function getAllMonthPaymentHistory() {
  return new Promise(function (resolve, reject) {
    if (window.allMonthPaymentHistory) {
      resolve(window.allMonthPaymentHistory);
    }

    reject(new Error('Cannot find payment history'));
  });
}

function statisticYearlyChart() {
  getAllMonthPaymentHistory().then(function (data) {
    var chartContainer = d3.select('#payment-chart');
    var height = 300;
    var width = document.querySelector('#payment-chart').clientWidth;
    var margin = {
      top: 10,
      right: 0,
      bottom: 20,
      left: 50
    };
    var x = d3.scaleBand().domain(data.map(function (d) {
      return d.month;
    })).rangeRound([margin.left, width]).padding(0.1);
    var y = d3.scaleLinear().domain([0, d3.max(data, function (d) {
      return parseInt(d.amount);
    })]).range([height - margin.bottom, margin.top]);
    var chart = chartContainer.append('svg').attr('height', height).attr('width', x.range()[1]);
    var bar = chart.selectAll('g').data(data).join('g').attr('transform', function (d) {
      return "translate(".concat(x(d.month), ", 0)");
    });
    bar.append('rect').attr('fill', '#00CE14').attr('y', function (d) {
      return y(d.amount);
    }).attr('height', function (d) {
      return y(0) - y(d.amount);
    }).attr('width', x.bandwidth());
    chart.append("g").attr("transform", "translate(0,".concat(height - margin.bottom, ")")).call(d3.axisBottom(x));
    chart.append("g").attr("transform", "translate(".concat(margin.left, ",0)")).call(d3.axisLeft(y));
  })["catch"](function (err) {
    return console.log(err);
  });
}

statisticYearlyChart();

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/home.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/nur/Project/Web/maketin/resources/js/home.js */"./resources/js/home.js");


/***/ })

/******/ });