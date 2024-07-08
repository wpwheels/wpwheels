/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/admin/notice.js":
/*!*****************************!*\
  !*** ./src/admin/notice.js ***!
  \*****************************/
/***/ (function() {

function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return e; }; var t, e = {}, r = Object.prototype, n = r.hasOwnProperty, o = Object.defineProperty || function (t, e, r) { t[e] = r.value; }, i = "function" == typeof Symbol ? Symbol : {}, a = i.iterator || "@@iterator", c = i.asyncIterator || "@@asyncIterator", u = i.toStringTag || "@@toStringTag"; function define(t, e, r) { return Object.defineProperty(t, e, { value: r, enumerable: !0, configurable: !0, writable: !0 }), t[e]; } try { define({}, ""); } catch (t) { define = function define(t, e, r) { return t[e] = r; }; } function wrap(t, e, r, n) { var i = e && e.prototype instanceof Generator ? e : Generator, a = Object.create(i.prototype), c = new Context(n || []); return o(a, "_invoke", { value: makeInvokeMethod(t, r, c) }), a; } function tryCatch(t, e, r) { try { return { type: "normal", arg: t.call(e, r) }; } catch (t) { return { type: "throw", arg: t }; } } e.wrap = wrap; var h = "suspendedStart", l = "suspendedYield", f = "executing", s = "completed", y = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var p = {}; define(p, a, function () { return this; }); var d = Object.getPrototypeOf, v = d && d(d(values([]))); v && v !== r && n.call(v, a) && (p = v); var g = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(p); function defineIteratorMethods(t) { ["next", "throw", "return"].forEach(function (e) { define(t, e, function (t) { return this._invoke(e, t); }); }); } function AsyncIterator(t, e) { function invoke(r, o, i, a) { var c = tryCatch(t[r], t, o); if ("throw" !== c.type) { var u = c.arg, h = u.value; return h && "object" == _typeof(h) && n.call(h, "__await") ? e.resolve(h.__await).then(function (t) { invoke("next", t, i, a); }, function (t) { invoke("throw", t, i, a); }) : e.resolve(h).then(function (t) { u.value = t, i(u); }, function (t) { return invoke("throw", t, i, a); }); } a(c.arg); } var r; o(this, "_invoke", { value: function value(t, n) { function callInvokeWithMethodAndArg() { return new e(function (e, r) { invoke(t, n, e, r); }); } return r = r ? r.then(callInvokeWithMethodAndArg, callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg(); } }); } function makeInvokeMethod(e, r, n) { var o = h; return function (i, a) { if (o === f) throw Error("Generator is already running"); if (o === s) { if ("throw" === i) throw a; return { value: t, done: !0 }; } for (n.method = i, n.arg = a;;) { var c = n.delegate; if (c) { var u = maybeInvokeDelegate(c, n); if (u) { if (u === y) continue; return u; } } if ("next" === n.method) n.sent = n._sent = n.arg;else if ("throw" === n.method) { if (o === h) throw o = s, n.arg; n.dispatchException(n.arg); } else "return" === n.method && n.abrupt("return", n.arg); o = f; var p = tryCatch(e, r, n); if ("normal" === p.type) { if (o = n.done ? s : l, p.arg === y) continue; return { value: p.arg, done: n.done }; } "throw" === p.type && (o = s, n.method = "throw", n.arg = p.arg); } }; } function maybeInvokeDelegate(e, r) { var n = r.method, o = e.iterator[n]; if (o === t) return r.delegate = null, "throw" === n && e.iterator.return && (r.method = "return", r.arg = t, maybeInvokeDelegate(e, r), "throw" === r.method) || "return" !== n && (r.method = "throw", r.arg = new TypeError("The iterator does not provide a '" + n + "' method")), y; var i = tryCatch(o, e.iterator, r.arg); if ("throw" === i.type) return r.method = "throw", r.arg = i.arg, r.delegate = null, y; var a = i.arg; return a ? a.done ? (r[e.resultName] = a.value, r.next = e.nextLoc, "return" !== r.method && (r.method = "next", r.arg = t), r.delegate = null, y) : a : (r.method = "throw", r.arg = new TypeError("iterator result is not an object"), r.delegate = null, y); } function pushTryEntry(t) { var e = { tryLoc: t[0] }; 1 in t && (e.catchLoc = t[1]), 2 in t && (e.finallyLoc = t[2], e.afterLoc = t[3]), this.tryEntries.push(e); } function resetTryEntry(t) { var e = t.completion || {}; e.type = "normal", delete e.arg, t.completion = e; } function Context(t) { this.tryEntries = [{ tryLoc: "root" }], t.forEach(pushTryEntry, this), this.reset(!0); } function values(e) { if (e || "" === e) { var r = e[a]; if (r) return r.call(e); if ("function" == typeof e.next) return e; if (!isNaN(e.length)) { var o = -1, i = function next() { for (; ++o < e.length;) if (n.call(e, o)) return next.value = e[o], next.done = !1, next; return next.value = t, next.done = !0, next; }; return i.next = i; } } throw new TypeError(_typeof(e) + " is not iterable"); } return GeneratorFunction.prototype = GeneratorFunctionPrototype, o(g, "constructor", { value: GeneratorFunctionPrototype, configurable: !0 }), o(GeneratorFunctionPrototype, "constructor", { value: GeneratorFunction, configurable: !0 }), GeneratorFunction.displayName = define(GeneratorFunctionPrototype, u, "GeneratorFunction"), e.isGeneratorFunction = function (t) { var e = "function" == typeof t && t.constructor; return !!e && (e === GeneratorFunction || "GeneratorFunction" === (e.displayName || e.name)); }, e.mark = function (t) { return Object.setPrototypeOf ? Object.setPrototypeOf(t, GeneratorFunctionPrototype) : (t.__proto__ = GeneratorFunctionPrototype, define(t, u, "GeneratorFunction")), t.prototype = Object.create(g), t; }, e.awrap = function (t) { return { __await: t }; }, defineIteratorMethods(AsyncIterator.prototype), define(AsyncIterator.prototype, c, function () { return this; }), e.AsyncIterator = AsyncIterator, e.async = function (t, r, n, o, i) { void 0 === i && (i = Promise); var a = new AsyncIterator(wrap(t, r, n, o), i); return e.isGeneratorFunction(r) ? a : a.next().then(function (t) { return t.done ? t.value : a.next(); }); }, defineIteratorMethods(g), define(g, u, "Generator"), define(g, a, function () { return this; }), define(g, "toString", function () { return "[object Generator]"; }), e.keys = function (t) { var e = Object(t), r = []; for (var n in e) r.push(n); return r.reverse(), function next() { for (; r.length;) { var t = r.pop(); if (t in e) return next.value = t, next.done = !1, next; } return next.done = !0, next; }; }, e.values = values, Context.prototype = { constructor: Context, reset: function reset(e) { if (this.prev = 0, this.next = 0, this.sent = this._sent = t, this.done = !1, this.delegate = null, this.method = "next", this.arg = t, this.tryEntries.forEach(resetTryEntry), !e) for (var r in this) "t" === r.charAt(0) && n.call(this, r) && !isNaN(+r.slice(1)) && (this[r] = t); }, stop: function stop() { this.done = !0; var t = this.tryEntries[0].completion; if ("throw" === t.type) throw t.arg; return this.rval; }, dispatchException: function dispatchException(e) { if (this.done) throw e; var r = this; function handle(n, o) { return a.type = "throw", a.arg = e, r.next = n, o && (r.method = "next", r.arg = t), !!o; } for (var o = this.tryEntries.length - 1; o >= 0; --o) { var i = this.tryEntries[o], a = i.completion; if ("root" === i.tryLoc) return handle("end"); if (i.tryLoc <= this.prev) { var c = n.call(i, "catchLoc"), u = n.call(i, "finallyLoc"); if (c && u) { if (this.prev < i.catchLoc) return handle(i.catchLoc, !0); if (this.prev < i.finallyLoc) return handle(i.finallyLoc); } else if (c) { if (this.prev < i.catchLoc) return handle(i.catchLoc, !0); } else { if (!u) throw Error("try statement without catch or finally"); if (this.prev < i.finallyLoc) return handle(i.finallyLoc); } } } }, abrupt: function abrupt(t, e) { for (var r = this.tryEntries.length - 1; r >= 0; --r) { var o = this.tryEntries[r]; if (o.tryLoc <= this.prev && n.call(o, "finallyLoc") && this.prev < o.finallyLoc) { var i = o; break; } } i && ("break" === t || "continue" === t) && i.tryLoc <= e && e <= i.finallyLoc && (i = null); var a = i ? i.completion : {}; return a.type = t, a.arg = e, i ? (this.method = "next", this.next = i.finallyLoc, y) : this.complete(a); }, complete: function complete(t, e) { if ("throw" === t.type) throw t.arg; return "break" === t.type || "continue" === t.type ? this.next = t.arg : "return" === t.type ? (this.rval = this.arg = t.arg, this.method = "return", this.next = "end") : "normal" === t.type && e && (this.next = e), y; }, finish: function finish(t) { for (var e = this.tryEntries.length - 1; e >= 0; --e) { var r = this.tryEntries[e]; if (r.finallyLoc === t) return this.complete(r.completion, r.afterLoc), resetTryEntry(r), y; } }, catch: function _catch(t) { for (var e = this.tryEntries.length - 1; e >= 0; --e) { var r = this.tryEntries[e]; if (r.tryLoc === t) { var n = r.completion; if ("throw" === n.type) { var o = n.arg; resetTryEntry(r); } return o; } } throw Error("illegal catch attempt"); }, delegateYield: function delegateYield(e, r, n) { return this.delegate = { iterator: values(e), resultName: r, nextLoc: n }, "next" === this.method && (this.arg = t), y; } }, e; }
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }
function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }
function _0xf212(_0xc07b1f, _0x19ee02) {
  var _0x2121c9 = _0x2121();
  return _0xf212 = function _0xf212(_0xf212c1, _0x544d80) {
    _0xf212c1 = _0xf212c1 - 0x1c6;
    var _0x6d7e3 = _0x2121c9[_0xf212c1];
    return _0x6d7e3;
  }, _0xf212(_0xc07b1f, _0x19ee02);
}
function _0x2121() {
  var _0x56efef = ["success", ".wpwheels-notice", "json", "wpwheels_activate_plugin", "installing", ".wpwheels-remove-notice", "ajax", "plugin_installed_text", "dismiss-type", "click", "installed", "394066yfiqeM", "16htTbaW", "notice_dismiss_nonce", "location", "hasClass", "249718CPxxly", "action", "wpwheels_dismiss_notice", "1316760eXbEic", "6xMqEGZ", "href", "addClass", "POST", ".wpwheels-recommended-plugins\x20.plugin-action\x20a", "130WzbgLG", "activating", "slug", "493353MonqAW", "children", "data", "preventDefault", "activated", "plugin_activated_text", "closest", "plugin_activate_nonce", "plugin_installing_text", "92385cgPibh", "fadeOut", "plugin_install_nonce", ".wpwheels-dashboard-wrapper\x20.starter-template-action\x20a", "catch", "removeClass", "then", "1068520XrUGba", "308676CPVard", "text", "wpwheels_install_plugin"];
  _0x2121 = function _0x2121() {
    return _0x56efef;
  };
  return _0x2121();
}
(function (_0x139744, _0x4f1462) {
  var _0x447798 = _0xf212,
    _0x166389 = _0x139744();
  while (!![]) {
    try {
      var _0x420dc8 = -parseInt(_0x447798(0x1e1)) / 0x1 + parseInt(_0x447798(0x1c7)) / 0x2 * (-parseInt(_0x447798(0x1d0)) / 0x3) + -parseInt(_0x447798(0x1e9)) / 0x4 + -parseInt(_0x447798(0x1e8)) / 0x5 + parseInt(_0x447798(0x1cf)) / 0x6 + parseInt(_0x447798(0x1cc)) / 0x7 * (parseInt(_0x447798(0x1c8)) / 0x8) + -parseInt(_0x447798(0x1d8)) / 0x9 * (-parseInt(_0x447798(0x1d5)) / 0xa);
      if (_0x420dc8 === _0x4f1462) break;else _0x166389["push"](_0x166389["shift"]());
    } catch (_0x11ea19) {
      _0x166389["push"](_0x166389["shift"]());
    }
  }
})(_0x2121, 0x37339), function (_0x2f8fac) {
  "use strict";

  _0x2f8fac(document)["ready"](function (_0x51cf7e) {
    var _0x4b5c0a = _0xf212;
    _0x51cf7e(_0x4b5c0a(0x1f1))["on"](_0x4b5c0a(0x1f5), function (_0x242299) {
      var _0x1e811b = _0x4b5c0a;
      _0x242299[_0x1e811b(0x1db)]();
      var _0x5c4fe6 = _0x51cf7e(this);
      _0x51cf7e["ajax"]({
        type: _0x1e811b(0x1d3),
        url: ajaxurl,
        dataType: _0x1e811b(0x1ee),
        data: {
          action: _0x1e811b(0x1ce),
          nonce: wpwheelsDashboard[_0x1e811b(0x1c9)],
          dismiss: _0x51cf7e(this)["data"]("dismiss"),
          dismiss_type: _0x51cf7e(this)[_0x1e811b(0x1da)](_0x1e811b(0x1f4))
        },
        success: function success() {
          var _0x438f67 = _0x1e811b;
          _0x5c4fe6[_0x438f67(0x1de)](_0x438f67(0x1ed))[_0x438f67(0x1e2)]();
        }
      });
    });
    var _0x9ebe69 = _0x51cf7e(_0x4b5c0a(0x1e4));
    if (_0x9ebe69) {
      var _0x1d3521 = _0x51cf7e(".wpwheels-dashboard-wrapper\x20.starter-template-plugins-info"),
        _0x273d9a = _0x1d3521[_0x4b5c0a(0x1d9)](),
        _0x167c1d = ![],
        _0x3e04a8;
      _0x9ebe69["on"](_0x4b5c0a(0x1f5), function (_0x360256) {
        var _0xba5370 = _0x4b5c0a;
        _0x360256[_0xba5370(0x1db)]();
        if (!![] === _0x167c1d) return;
        var _0x56503b = _0x51cf7e(this);
        _0x3e04a8 = _0x56503b["attr"]("href"), _0x1c9ef2(_0x56503b);
      });
      function _0x1c9ef2(_x) {
        return _0x1c9ef.apply(this, arguments);
      }
      function _0x1c9ef() {
        _0x1c9ef = _asyncToGenerator( /*#__PURE__*/_regeneratorRuntime().mark(function _callee(_0x489d07) {
          var _0x4f00f9, _iterator, _step, _0x4e17b3, _0x2a250f, _0x4d2ba6;
          return _regeneratorRuntime().wrap(function _callee$(_context) {
            while (1) switch (_context.prev = _context.next) {
              case 0:
                _0x4f00f9 = _0x4b5c0a;
                _iterator = _createForOfIteratorHelper(_0x273d9a);
                _context.prev = 2;
                _iterator.s();
              case 4:
                if ((_step = _iterator.n()).done) {
                  _context.next = 20;
                  break;
                }
                _0x4e17b3 = _step.value;
                _0x2a250f = _0x51cf7e(_0x4e17b3), _0x4d2ba6 = _0x2a250f[_0x4f00f9(0x1da)](_0x4f00f9(0x1cd));
                _context.t0 = _0x4d2ba6;
                if (!_context.t0) {
                  _context.next = 18;
                  break;
                }
                _0x167c1d = !![];
                _context.t1 = "wpwheels_activate_plugin" == _0x4d2ba6;
                if (!_context.t1) {
                  _context.next = 14;
                  break;
                }
                _context.next = 14;
                return _0x3be0fd(_0x2a250f, _0x489d07);
              case 14:
                _context.t2 = _0x4f00f9(0x1eb) == _0x4d2ba6;
                if (!_context.t2) {
                  _context.next = 18;
                  break;
                }
                _context.next = 18;
                return _0x2ea534(_0x2a250f, _0x489d07);
              case 18:
                _context.next = 4;
                break;
              case 20:
                _context.next = 25;
                break;
              case 22:
                _context.prev = 22;
                _context.t3 = _context["catch"](2);
                _iterator.e(_context.t3);
              case 25:
                _context.prev = 25;
                _iterator.f();
                return _context.finish(25);
              case 28:
                _0x167c1d = !![], window[_0x4f00f9(0x1ca)][_0x4f00f9(0x1d1)] = _0x3e04a8;
              case 29:
              case "end":
                return _context.stop();
            }
          }, _callee, null, [[2, 22, 25, 28]]);
        }));
        return _0x1c9ef.apply(this, arguments);
      }
    }
    var _0x5925d9 = _0x51cf7e(_0x4b5c0a(0x1d4));
    _0x5925d9 && _0x5925d9["on"]("click", function (_0x779e8c) {
      var _0x12998e = _0x4b5c0a;
      _0x779e8c[_0x12998e(0x1db)]();
      var _0x3abd5e = _0x51cf7e(this),
        _0xd94be2 = _0x3abd5e[_0x12998e(0x1da)](_0x12998e(0x1cd));
      if (_0xd94be2) {
        if ("wpwheels_activate_plugin" == _0xd94be2) {
          if (_0x3abd5e[_0x12998e(0x1cb)](_0x12998e(0x1d6)) || _0x3abd5e[_0x12998e(0x1cb)](_0x12998e(0x1dc))) return;
          _0x3be0fd(_0x3abd5e);
        }
        if (_0x12998e(0x1eb) == _0xd94be2) {
          if (_0x3abd5e[_0x12998e(0x1cb)](_0x12998e(0x1f0)) || _0x3abd5e["hasClass"](_0x12998e(0x1c6))) return;
          _0x2ea534(_0x3abd5e);
        }
      }
    });
    function _0x3be0fd(_0x170230) {
      var _0x39bc87 = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "";
      var _0x3afa19 = _0x4b5c0a;
      return !_0x39bc87 && (_0x39bc87 = _0x170230), _0x39bc87[_0x3afa19(0x1d2)](_0x3afa19(0x1d6)), _0x39bc87[_0x3afa19(0x1ea)](wpwheelsDashboard["plugin_activating_text"]), new Promise(function (_0x5bcf5c, _0x3d953b) {
        var _0x95d9c9 = _0x3afa19;
        _0x51cf7e[_0x95d9c9(0x1f2)]({
          type: _0x95d9c9(0x1d3),
          url: ajaxurl,
          data: {
            action: _0x95d9c9(0x1ef),
            nonce: wpwheelsDashboard[_0x95d9c9(0x1df)],
            path: _0x170230[_0x95d9c9(0x1da)]("path")
          },
          success: function success(_0x2df5b) {
            var _0xd9b5e1 = _0x95d9c9;
            _0x39bc87[_0xd9b5e1(0x1e6)](_0xd9b5e1(0x1d6)), _0x2df5b[_0xd9b5e1(0x1ec)] && (_0x39bc87[_0xd9b5e1(0x1ea)](wpwheelsDashboard[_0xd9b5e1(0x1dd)]), _0x39bc87[_0xd9b5e1(0x1d2)](_0xd9b5e1(0x1dc))), _0x5bcf5c();
          },
          error: function error(_0x3900e3) {
            _0x3d953b(_0x3900e3);
          }
        });
      });
    }
    function _0x2ea534(_0x209c29) {
      var _0x1a5f6b = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : "";
      var _0x201dd1 = _0x4b5c0a;
      return !_0x1a5f6b && (_0x1a5f6b = _0x209c29), _0x1a5f6b[_0x201dd1(0x1d2)]("installing"), _0x1a5f6b[_0x201dd1(0x1ea)](wpwheelsDashboard[_0x201dd1(0x1e0)]), new Promise(function (_0x3782b0, _0xb4a680) {
        var _0x5ef20d = _0x201dd1;
        _0x51cf7e[_0x5ef20d(0x1f2)]({
          type: _0x5ef20d(0x1d3),
          url: ajaxurl,
          data: {
            action: "wpwheels_install_plugin",
            _ajax_nonce: wpwheelsDashboard[_0x5ef20d(0x1e3)],
            slug: _0x209c29[_0x5ef20d(0x1da)](_0x5ef20d(0x1d7))
          },
          success: function success(_0x389e10) {
            var _0x5940f4 = _0x5ef20d;
            _0x1a5f6b[_0x5940f4(0x1e6)]("installing"), _0x389e10[_0x5940f4(0x1ec)] && (_0x1a5f6b[_0x5940f4(0x1ea)](wpwheelsDashboard[_0x5940f4(0x1f3)]), _0x1a5f6b[_0x5940f4(0x1d2)](_0x5940f4(0x1c6)), _0x3be0fd(_0x209c29, _0x1a5f6b)[_0x5940f4(0x1e7)](function () {
              _0x3782b0();
            })[_0x5940f4(0x1e5)](function (_0x516a20) {
              _0xb4a680(_0x516a20);
            }));
          },
          error: function error(_0x3a4ede) {
            _0xb4a680(_0x3a4ede);
          }
        });
      });
    }
  });
}(jQuery);

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