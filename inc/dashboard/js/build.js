function _0xf212(_0xc07b1f, _0x19ee02) {
  const _0x2121c9 = _0x2121();
  return (
    (_0xf212 = function (_0xf212c1, _0x544d80) {
      _0xf212c1 = _0xf212c1 - 0x1c6;
      let _0x6d7e3 = _0x2121c9[_0xf212c1];
      return _0x6d7e3;
    }),
    _0xf212(_0xc07b1f, _0x19ee02)
  );
}
function _0x2121() {
  const _0x56efef = [
    "success",
    ".wpwheels-notice",
    "json",
    "wpwheels_activate_plugin",
    "installing",
    ".wpwheels-remove-notice",
    "ajax",
    "plugin_installed_text",
    "dismiss-type",
    "click",
    "installed",
    "394066yfiqeM",
    "16htTbaW",
    "notice_dismiss_nonce",
    "location",
    "hasClass",
    "249718CPxxly",
    "action",
    "wpwheels_dismiss_notice",
    "1316760eXbEic",
    "6xMqEGZ",
    "href",
    "addClass",
    "POST",
    ".wpwheels-recommended-plugins\x20.plugin-action\x20a",
    "130WzbgLG",
    "activating",
    "slug",
    "493353MonqAW",
    "children",
    "data",
    "preventDefault",
    "activated",
    "plugin_activated_text",
    "closest",
    "plugin_activate_nonce",
    "plugin_installing_text",
    "92385cgPibh",
    "fadeOut",
    "plugin_install_nonce",
    ".wpwheels-dashboard-wrapper\x20.starter-template-action\x20a",
    "catch",
    "removeClass",
    "then",
    "1068520XrUGba",
    "308676CPVard",
    "text",
    "wpwheels_install_plugin",
  ];
  _0x2121 = function () {
    return _0x56efef;
  };
  return _0x2121();
}
(function (_0x139744, _0x4f1462) {
  const _0x447798 = _0xf212,
    _0x166389 = _0x139744();
  while (!![]) {
    try {
      const _0x420dc8 =
        -parseInt(_0x447798(0x1e1)) / 0x1 +
        (parseInt(_0x447798(0x1c7)) / 0x2) *
          (-parseInt(_0x447798(0x1d0)) / 0x3) +
        -parseInt(_0x447798(0x1e9)) / 0x4 +
        -parseInt(_0x447798(0x1e8)) / 0x5 +
        parseInt(_0x447798(0x1cf)) / 0x6 +
        (parseInt(_0x447798(0x1cc)) / 0x7) *
          (parseInt(_0x447798(0x1c8)) / 0x8) +
        (-parseInt(_0x447798(0x1d8)) / 0x9) *
          (-parseInt(_0x447798(0x1d5)) / 0xa);
      if (_0x420dc8 === _0x4f1462) break;
      else _0x166389["push"](_0x166389["shift"]());
    } catch (_0x11ea19) {
      _0x166389["push"](_0x166389["shift"]());
    }
  }
})(_0x2121, 0x37339),
  (function (_0x2f8fac) {
    "use strict";
    _0x2f8fac(document)["ready"](function (_0x51cf7e) {
      const _0x4b5c0a = _0xf212;
      _0x51cf7e(_0x4b5c0a(0x1f1))["on"](_0x4b5c0a(0x1f5), function (_0x242299) {
        const _0x1e811b = _0x4b5c0a;
        _0x242299[_0x1e811b(0x1db)]();
        let _0x5c4fe6 = _0x51cf7e(this);
        _0x51cf7e["ajax"]({
          type: _0x1e811b(0x1d3),
          url: ajaxurl,
          dataType: _0x1e811b(0x1ee),
          data: {
            action: _0x1e811b(0x1ce),
            nonce: wpwheelsDashboard[_0x1e811b(0x1c9)],
            dismiss: _0x51cf7e(this)["data"]("dismiss"),
            dismiss_type: _0x51cf7e(this)[_0x1e811b(0x1da)](_0x1e811b(0x1f4)),
          },
          success: function () {
            const _0x438f67 = _0x1e811b;
            _0x5c4fe6[_0x438f67(0x1de)](_0x438f67(0x1ed))[_0x438f67(0x1e2)]();
          },
        });
      });
      let _0x9ebe69 = _0x51cf7e(_0x4b5c0a(0x1e4));
      if (_0x9ebe69) {
        let _0x1d3521 = _0x51cf7e(
            ".wpwheels-dashboard-wrapper\x20.starter-template-plugins-info"
          ),
          _0x273d9a = _0x1d3521[_0x4b5c0a(0x1d9)](),
          _0x167c1d = ![],
          _0x3e04a8;
        _0x9ebe69["on"](_0x4b5c0a(0x1f5), function (_0x360256) {
          const _0xba5370 = _0x4b5c0a;
          _0x360256[_0xba5370(0x1db)]();
          if (!![] === _0x167c1d) return;
          let _0x56503b = _0x51cf7e(this);
          (_0x3e04a8 = _0x56503b["attr"]("href")), _0x1c9ef2(_0x56503b);
        });
        async function _0x1c9ef2(_0x489d07) {
          const _0x4f00f9 = _0x4b5c0a;
          for (let _0x4e17b3 of _0x273d9a) {
            let _0x2a250f = _0x51cf7e(_0x4e17b3),
              _0x4d2ba6 = _0x2a250f[_0x4f00f9(0x1da)](_0x4f00f9(0x1cd));
            _0x4d2ba6 &&
              ((_0x167c1d = !![]),
              "wpwheels_activate_plugin" == _0x4d2ba6 &&
                (await _0x3be0fd(_0x2a250f, _0x489d07)),
              _0x4f00f9(0x1eb) == _0x4d2ba6 &&
                (await _0x2ea534(_0x2a250f, _0x489d07)));
          }
          (_0x167c1d = !![]),
            (window[_0x4f00f9(0x1ca)][_0x4f00f9(0x1d1)] = _0x3e04a8);
        }
      }
      let _0x5925d9 = _0x51cf7e(_0x4b5c0a(0x1d4));
      _0x5925d9 &&
        _0x5925d9["on"]("click", function (_0x779e8c) {
          const _0x12998e = _0x4b5c0a;
          _0x779e8c[_0x12998e(0x1db)]();
          let _0x3abd5e = _0x51cf7e(this),
            _0xd94be2 = _0x3abd5e[_0x12998e(0x1da)](_0x12998e(0x1cd));
          if (_0xd94be2) {
            if ("wpwheels_activate_plugin" == _0xd94be2) {
              if (
                _0x3abd5e[_0x12998e(0x1cb)](_0x12998e(0x1d6)) ||
                _0x3abd5e[_0x12998e(0x1cb)](_0x12998e(0x1dc))
              )
                return;
              _0x3be0fd(_0x3abd5e);
            }
            if (_0x12998e(0x1eb) == _0xd94be2) {
              if (
                _0x3abd5e[_0x12998e(0x1cb)](_0x12998e(0x1f0)) ||
                _0x3abd5e["hasClass"](_0x12998e(0x1c6))
              )
                return;
              _0x2ea534(_0x3abd5e);
            }
          }
        });
      function _0x3be0fd(_0x170230, _0x39bc87 = "") {
        const _0x3afa19 = _0x4b5c0a;
        return (
          !_0x39bc87 && (_0x39bc87 = _0x170230),
          _0x39bc87[_0x3afa19(0x1d2)](_0x3afa19(0x1d6)),
          _0x39bc87[_0x3afa19(0x1ea)](
            wpwheelsDashboard["plugin_activating_text"]
          ),
          new Promise((_0x5bcf5c, _0x3d953b) => {
            const _0x95d9c9 = _0x3afa19;
            _0x51cf7e[_0x95d9c9(0x1f2)]({
              type: _0x95d9c9(0x1d3),
              url: ajaxurl,
              data: {
                action: _0x95d9c9(0x1ef),
                nonce: wpwheelsDashboard[_0x95d9c9(0x1df)],
                path: _0x170230[_0x95d9c9(0x1da)]("path"),
              },
              success: function (_0x2df5b) {
                const _0xd9b5e1 = _0x95d9c9;
                _0x39bc87[_0xd9b5e1(0x1e6)](_0xd9b5e1(0x1d6)),
                  _0x2df5b[_0xd9b5e1(0x1ec)] &&
                    (_0x39bc87[_0xd9b5e1(0x1ea)](
                      wpwheelsDashboard[_0xd9b5e1(0x1dd)]
                    ),
                    _0x39bc87[_0xd9b5e1(0x1d2)](_0xd9b5e1(0x1dc))),
                  _0x5bcf5c();
              },
              error: function (_0x3900e3) {
                _0x3d953b(_0x3900e3);
              },
            });
          })
        );
      }
      function _0x2ea534(_0x209c29, _0x1a5f6b = "") {
        const _0x201dd1 = _0x4b5c0a;
        return (
          !_0x1a5f6b && (_0x1a5f6b = _0x209c29),
          _0x1a5f6b[_0x201dd1(0x1d2)]("installing"),
          _0x1a5f6b[_0x201dd1(0x1ea)](wpwheelsDashboard[_0x201dd1(0x1e0)]),
          new Promise((_0x3782b0, _0xb4a680) => {
            const _0x5ef20d = _0x201dd1;
            _0x51cf7e[_0x5ef20d(0x1f2)]({
              type: _0x5ef20d(0x1d3),
              url: ajaxurl,
              data: {
                action: "wpwheels_install_plugin",
                _ajax_nonce: wpwheelsDashboard[_0x5ef20d(0x1e3)],
                slug: _0x209c29[_0x5ef20d(0x1da)](_0x5ef20d(0x1d7)),
              },
              success: function (_0x389e10) {
                const _0x5940f4 = _0x5ef20d;
                _0x1a5f6b[_0x5940f4(0x1e6)]("installing"),
                  _0x389e10[_0x5940f4(0x1ec)] &&
                    (_0x1a5f6b[_0x5940f4(0x1ea)](
                      wpwheelsDashboard[_0x5940f4(0x1f3)]
                    ),
                    _0x1a5f6b[_0x5940f4(0x1d2)](_0x5940f4(0x1c6)),
                    _0x3be0fd(_0x209c29, _0x1a5f6b)
                      [_0x5940f4(0x1e7)](function () {
                        _0x3782b0();
                      })
                      [_0x5940f4(0x1e5)](function (_0x516a20) {
                        _0xb4a680(_0x516a20);
                      }));
              },
              error: function (_0x3a4ede) {
                _0xb4a680(_0x3a4ede);
              },
            });
          })
        );
      }
    });
  })(jQuery);
