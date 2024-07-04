/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/admin/notice.js":
/*!*****************************!*\
  !*** ./src/admin/notice.js ***!
  \*****************************/
/***/ (function() {

/**
 * File notice.js.
 */
(function ($) {
  var wpwheels_notification = {
    isLoading: false,
    init: function init() {
      if ($(".blockwheels-plugin-inner").length) {
        this.render_actions();
        $(document).on("click", ".blockwheels-plugin-inner .notice-dismiss", this.dismiss_notice);
        $(document).on("click", ".blockwheels-plugin-inner .notice-actions button", this.main_action);
      }
    },
    render_actions: function render_actions() {
      $.ajax({
        type: "post",
        url: ajaxurl,
        data: {
          action: "wpwheels_check_notice_actions"
        },
        success: function success(response) {
          if (response.data != "") {
            $(".wpwheels-notification-content .content-text-column").append(response.data);
          }
        },
        complete: function complete() {}
      });
    },
    dismiss_notice: function dismiss_notice(evt) {
      $(evt.target).closest(".notice-blockwheels-plugin").remove();
      $.ajax(ajaxurl, {
        type: "POST",
        data: {
          action: "wpwheels_dismissed_notice"
        }
      });
    },
    main_action: function main_action(evt) {
      wpwheels_notification.isLoading = true;
      var $el = $(evt.target);
      $el.prop("disabled", "disabled");
      if ($el.data("action") == "activate") {
        $(evt.target).text(wpwheels_notice_i18n.activating);
      } else if ($el.data("action") == "install_activate") {
        $(evt.target).text(wpwheels_notice_i18n.installing_activating);
      }
      $(evt.target).append('<i className="dashicons dashicons-update" />');
      $.ajax({
        type: "post",
        url: ajaxurl,
        data: {
          action: "wpwheels_notice_button_click"
        },
        success: function success(response) {
          if (response.success) {
            if (response.data.status === "active") {
              location.assign(response.data.pluginUrl);
            }
          }
          wpwheels_notification.isLoading = false;
        },
        complete: function complete() {}
      });
    }
  };
  wpwheels_notification.init();
})(jQuery);

/***/ }),

/***/ "./src/admin/index.css":
/*!*****************************!*\
  !*** ./src/admin/index.css ***!
  \*****************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
!function() {
"use strict";
/*!****************************!*\
  !*** ./src/admin/index.js ***!
  \****************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _index_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./index.css */ "./src/admin/index.css");
/* harmony import */ var _notice__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./notice */ "./src/admin/notice.js");
/* harmony import */ var _notice__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_notice__WEBPACK_IMPORTED_MODULE_1__);
// Styles


// Scripts

}();
/******/ })()
;
//# sourceMappingURL=index.js.map