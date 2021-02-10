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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./resources/js/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/index.js":
/*!*******************************!*\
  !*** ./resources/js/index.js ***!
  \*******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/style.scss */ \"./resources/scss/style.scss\");\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_style_scss__WEBPACK_IMPORTED_MODULE_0__);\n\r\n\r\n\r\n\r\n// LOADER\r\nconst loader = document.querySelector('.spinner__container');\r\nconst html = document.querySelector('html');\r\n\r\nwindow.addEventListener('load', function() {\r\n  loader.parentElement.removeChild(loader);\r\n  html.style.overflowY = 'auto';\r\n})\r\n\r\n\r\nconst headerTitle = document.querySelector('.header__title');\r\nconst headerSubTitle = document.querySelector('.header__title-sub');\r\ndocument.addEventListener('DOMContentLoaded', () => {\r\n    headerTitle.classList.add('active');\r\n    headerSubTitle.classList.add('active');\r\n});\r\n\r\n// COOKIES\r\nclass MScookies {\r\n\tconstructor() {\r\n\t\tthis.WHCheckCookies();\r\n\t}\r\n\tWHCheckCookies() {\r\n\t\tif (this.WHReadCookie('cookies_accepted') != 'T') {\r\n\t\t\tvar message_container = document.createElement('div');\r\n      message_container.id = 'cookies-message-container';\r\n        var html_code = '<div id=\"cookies-message\" style=\"color: #000; padding: 10px 10px; font-size: 12px; line-height: 16px; display: flex; justify-content: space-between; align-items: center; position: fixed; bottom: 20px; right: 20px; background-color: #fff; width: 100%; max-width: 320px; font-family: sans-serif; z-index: 999; box-sizing: border-box; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);\">';\r\n        html_code += '<svg id=\"Capa_1\" style=\"fill:#FBE055\" enable-background=\"new 0 0 556.235 556.235\" height=\"30\" viewBox=\"0 0 556.235 556.235\" width=\"30\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m278.118 0c-153.6 0-278.118 124.518-278.118 278.118s124.518 278.118 278.118 278.118c8.144 0 16.158-.533 24.126-1.218-4.327-10.325-6.743-21.652-6.743-33.547 0-24.433 10.151-46.429 26.381-62.219-5.701-12.89-8.999-27.073-8.999-42.075 0-57.6 46.694-104.294 104.294-104.294 15.002 0 29.184 3.297 42.075 8.999 15.791-16.23 37.786-26.381 62.219-26.381 11.895 0 23.222 2.415 33.547 6.741.685-7.968 1.218-15.98 1.218-24.124-.001-153.6-124.519-278.118-278.118-278.118zm-191.206 278.118c-9.599 0-17.382-7.783-17.382-17.382 0-9.601 7.783-17.382 17.382-17.382s17.382 7.781 17.382 17.382c0 9.599-7.783 17.382-17.382 17.382zm86.911 139.058c-19.201 0-34.765-15.566-34.765-34.765 0-19.201 15.564-34.765 34.765-34.765s34.765 15.564 34.765 34.765c0 19.199-15.564 34.765-34.765 34.765zm34.765-243.353c-19.201 0-34.765-15.566-34.765-34.765 0-19.201 15.564-34.765 34.765-34.765s34.765 15.564 34.765 34.765c0 19.199-15.564 34.765-34.765 34.765zm52.147 139.059c-9.599 0-17.382-7.783-17.382-17.382 0-9.601 7.783-17.382 17.382-17.382s17.382 7.781 17.382 17.382c.001 9.599-7.782 17.382-17.382 17.382zm104.294-243.353c9.599 0 17.382 7.781 17.382 17.382 0 9.599-7.783 17.382-17.382 17.382s-17.382-7.783-17.382-17.382c0-9.601 7.783-17.382 17.382-17.382zm17.383 173.824c-19.201 0-34.765-15.566-34.765-34.765 0-19.201 15.564-34.765 34.765-34.765s34.765 15.564 34.765 34.765c-.001 19.199-15.565 34.765-34.765 34.765z\"/></svg>';\r\n        html_code += '<div class=\"cookie__message\" style=\"display: inline-block; width: 60%; margin: 0 2%; text-align: justify;\">Ta strona używa ciasteczek (cookies). ';\r\n        html_code += '<a href=\"' + privacylink + '\" style=\"color: #FBE055;\">Dowiedz się więcej</a></div>';\r\n        html_code += '<a href=\"#\" id=\"accept-cookies-checkbox\" name=\"accept-cookies\" style=\"padding: 4% 7%; color: #FFF; display: inline-block; margin-left: 1%; text-decoration: none; font-size: 16px; cursor: pointer;\">';\r\n        html_code += 'OK';\r\n        html_code += '</a>';\r\n        html_code += '</div>';\r\n\t\t\tmessage_container.innerHTML = html_code;\r\n\t\t\tdocument.body.appendChild(message_container);\r\n\t\t\tvar _self = this;\r\n\t\t\tdocument.getElementById('accept-cookies-checkbox').addEventListener('click', function (e) {\r\n\t\t\t\te.preventDefault();\r\n\t\t\t\t_self.WHCloseCookiesWindow();\r\n\t\t\t}, false);\r\n\t\t}\r\n\t}\r\n\tWHCloseCookiesWindow() {\r\n\t\tthis.WHCreateCookie('cookies_accepted', 'T', 365);\r\n\t\tdocument.getElementById('cookies-message-container').removeChild(document.getElementById('cookies-message'));\r\n\t}\r\n\tWHReadCookie(name) {\r\n\t\tvar nameEQ = name + \"=\";\r\n\t\tvar ca = document.cookie.split(';');\r\n\t\tfor (var i = 0; i < ca.length; i++) {\r\n\t\t\tvar c = ca[i];\r\n\t\t\twhile (c.charAt(0) == ' ') c = c.substring(1, c.length);\r\n\t\t\tif (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);\r\n\t\t}\r\n\t\treturn null;\r\n\t}\r\n\tWHCreateCookie(name, value, days) {\r\n\t\tvar date = new Date();\r\n\t\tdate.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));\r\n\t\tvar expires = \"; expires=\" + date.toGMTString();\r\n\t\tdocument.cookie = name + \"=\" + value + expires + \"; path=/\";\r\n\t}\r\n}\r\nwindow.onload = function () {var cookies = new MScookies();};\r\n\r\n\r\n\r\n// Burger menu\r\nconst menuBtn = document.querySelector('.menu-btn');\r\nconst menuTop = document.querySelector('.header__nav')\r\nlet menuOpen = false;\r\nmenuBtn.addEventListener('click', () => {\r\n    if(!menuOpen) {\r\n        menuBtn.classList.add('open');\r\n        menuTop.classList.add('active');\r\n        menuOpen = true;\r\n        if(window.innerWidth < 576) {\r\n            html.style.overflow = 'hidden';\r\n        }\r\n    } else {\r\n        menuBtn.classList.remove('open');\r\n        menuTop.classList.remove('active');\r\n        menuOpen = false;\r\n        html.style.overflowY = \"auto\";\r\n    }\r\n});\r\n\r\nconst menuBtnBurger = document.querySelector('.menu-btn__burger');\r\n\r\n\r\n\r\n// 404 PAGE\r\nif(document.body.classList.contains('error404')) {\r\n\r\nfunction randomNum()\r\n{\r\n    \"use strict\";\r\n    return Math.floor(Math.random() * 9)+1;\r\n}\r\n    let loop1,loop2,loop3,time=30, i=0, number, selector3 = document.querySelector('.thirdDigit'), \r\n        selector2 = document.querySelector('.secondDigit'),\r\n        selector1 = document.querySelector('.firstDigit');\r\n    loop3 = setInterval(function() {\r\n      \"use strict\";\r\n        if(i > 40)\r\n        {\r\n            clearInterval(loop3);\r\n            selector3.textContent = 4;\r\n        }else\r\n        {\r\n            selector3.textContent = randomNum();\r\n            i++;\r\n        }\r\n    }, time);\r\n    loop2 = setInterval(function() {\r\n      \"use strict\";\r\n        if(i > 80)\r\n        {\r\n            clearInterval(loop2);\r\n            selector2.textContent = 0;\r\n        }else\r\n        {\r\n            selector2.textContent = randomNum();\r\n            i++;\r\n        }\r\n    }, time);\r\n    loop1 = setInterval(function() {\r\n      \"use strict\";\r\n        if(i > 100)\r\n        {\r\n            clearInterval(loop1);\r\n            selector1.textContent = 4;\r\n        }else\r\n        {\r\n            selector1.textContent = randomNum();\r\n            i++;\r\n        }\r\n    }, time);\r\n\r\n}\r\n\r\n// CAMPAIN\r\nif(document.body.classList.contains('page-template-page-campaign')) {\r\n    const moreButtons  = document.querySelectorAll('.campaigns__item-btn');\r\n    moreButtons.forEach(moreButton => {\r\n        moreButton.addEventListener('click', function(e) {\r\n            this.classList.toggle('show')\r\n            const current = e.currentTarget;\r\n            const text = current.parentElement.querySelector('.campaigns__item-text');\r\n            text.classList.toggle('show');\r\n        })\r\n    })\r\n}\r\n\r\n\r\n// CONTACT\r\nif(document.body.classList.contains('page-template-page-contact-php')) {\r\n    const submitButton = document.querySelector('input[type=\"submit\"]');\r\n    const parrentEl =  document.querySelector('.contact__submit');\r\n    const submitAnimation = () => {\r\n        parrentEl.classList.add('active');\r\n        setTimeout(function() {\r\n            parrentEl.classList.remove('active'); \r\n        }, 1500)\r\n    }\r\n    submitButton.addEventListener('click', submitAnimation)\r\n}\r\n\r\n\r\n// ARROW UP\r\nconst scrollTop = () => {\r\n  if (document.body.scrollTop > 900 || document.documentElement.scrollTop > 900) {\r\n    arrowUp.style.cssText = \"opacity: 1; visibility: visible;\";\r\n  } else {\r\n    arrowUp.style.cssText = \"opacity: 0; visibility: hidden;\";\r\n  }\r\n}\r\n\r\nconst arrowUp = document.querySelector('.arrow__up');\r\narrowUp.addEventListener('click', function() {\r\n    document.body.scrollTop = 0;\r\n    document.documentElement.scrollTop = 0;\r\n})\r\n\r\nwindow.addEventListener('scroll', scrollTop)\r\n\r\n\r\n// EXPAND MENU\r\n\r\nconst menuExpandButton = document.querySelector('#menu-item-186')\r\nconst menuExpand = document.querySelector('.sub-menu')\r\n\r\nconst menuVisible = () => {\r\n    menuExpand.classList.toggle('active')\r\n    menuExpandButton.classList.toggle('active')\r\n}\r\n\r\nmenuExpandButton.addEventListener('click', menuVisible)\r\n\r\nwindow.addEventListener('mouseup', function(e){\r\n    if (e.target != menuExpand && e.target.parentNode != menuExpand){\r\n        menuExpand.classList.remove('active')\r\n        menuExpandButton.classList.remove('active')\r\n    }\r\n});\r\n\r\n\r\nif(document.body.classList.contains('single')) {\r\n    const singleContainer = document.querySelector('.single-page__inner');\r\n    singleContainer.scrollIntoView();\r\n}\n\n//# sourceURL=webpack:///./resources/js/index.js?");

/***/ }),

/***/ "./resources/scss/style.scss":
/*!***********************************!*\
  !*** ./resources/scss/style.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./resources/scss/style.scss?");

/***/ })

/******/ });