(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_pages_admin_setting_admin_mail_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/mail.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/mail.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  data: function data() {
    return {
      form: new Form({
        type: '',
        host: '',
        port: '',
        username: '',
        password: '',
        encryption: '',
        from_name: '',
        from_address: ''
      }),
      testMailForm: new Form({
        email: ''
      })
    };
  },
  created: function created() {
    var _this = this;

    return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
      return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
        while (1) {
          switch (_context.prev = _context.next) {
            case 0:
              _this.loadData();

            case 1:
            case "end":
              return _context.stop();
          }
        }
      }, _callee);
    }))();
  },
  methods: {
    saveSetting: function saveSetting() {
      var _this2 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee2() {
        var _yield$_this2$form$pu, data;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.prev = 0;
                _context2.next = 3;
                return _this2.form.put('/api/setting/mail');

              case 3:
                _yield$_this2$form$pu = _context2.sent;
                data = _yield$_this2$form$pu.data;

                // success message
                _this2.$toast.success({
                  title: 'Success',
                  message: data.message
                });

                location.reload();
                _context2.next = 12;
                break;

              case 9:
                _context2.prev = 9;
                _context2.t0 = _context2["catch"](0);

                // error message
                _this2.$toast.error({
                  title: 'Sorry!',
                  message: 'Something went wrong!'
                });

              case 12:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, null, [[0, 9]]);
      }))();
    },
    testMailSend: function testMailSend() {
      var _this3 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee3() {
        var _yield$_this3$testMai, data;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                _context3.prev = 0;
                _context3.next = 3;
                return _this3.testMailForm.post('/api/setting/send-test-mail');

              case 3:
                _yield$_this3$testMai = _context3.sent;
                data = _yield$_this3$testMai.data;

                _this3.testMailForm.reset(); // success message


                _this3.$toast.success({
                  title: 'Success',
                  message: data.message
                });

                _context3.next = 12;
                break;

              case 9:
                _context3.prev = 9;
                _context3.t0 = _context3["catch"](0);

                // error message
                _this3.$toast.error({
                  title: 'Sorry!',
                  message: 'Something went wrong!'
                });

              case 12:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, null, [[0, 9]]);
      }))();
    },
    loadData: function loadData() {
      var _this4 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee4() {
        var _yield$axios$get, data;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee4$(_context4) {
          while (1) {
            switch (_context4.prev = _context4.next) {
              case 0:
                _context4.prev = 0;
                _context4.next = 3;
                return axios.get('/api/setting/mail');

              case 3:
                _yield$axios$get = _context4.sent;
                data = _yield$axios$get.data;

                _this4.form.fill(data);

                _context4.next = 11;
                break;

              case 8:
                _context4.prev = 8;
                _context4.t0 = _context4["catch"](0);

                // error message
                _this4.$toast.error({
                  title: 'Sorry!',
                  message: 'Something went wrong!'
                });

              case 11:
              case "end":
                return _context4.stop();
            }
          }
        }, _callee4, null, [[0, 8]]);
      }))();
    },
    reset: function reset() {
      var _this5 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee5() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee5$(_context5) {
          while (1) {
            switch (_context5.prev = _context5.next) {
              case 0:
                _this5.loadData();

              case 1:
              case "end":
                return _context5.stop();
            }
          }
        }, _callee5);
      }))();
    }
  }
});

/***/ }),

/***/ "./resources/js/pages/admin/setting/admin/mail.vue":
/*!*********************************************************!*\
  !*** ./resources/js/pages/admin/setting/admin/mail.vue ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _mail_vue_vue_type_template_id_6179cdbf___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./mail.vue?vue&type=template&id=6179cdbf& */ "./resources/js/pages/admin/setting/admin/mail.vue?vue&type=template&id=6179cdbf&");
/* harmony import */ var _mail_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./mail.vue?vue&type=script&lang=js& */ "./resources/js/pages/admin/setting/admin/mail.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _mail_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _mail_vue_vue_type_template_id_6179cdbf___WEBPACK_IMPORTED_MODULE_0__.render,
  _mail_vue_vue_type_template_id_6179cdbf___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/admin/setting/admin/mail.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/pages/admin/setting/admin/mail.vue?vue&type=script&lang=js&":
/*!**********************************************************************************!*\
  !*** ./resources/js/pages/admin/setting/admin/mail.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_mail_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./mail.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/mail.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_mail_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/pages/admin/setting/admin/mail.vue?vue&type=template&id=6179cdbf&":
/*!****************************************************************************************!*\
  !*** ./resources/js/pages/admin/setting/admin/mail.vue?vue&type=template&id=6179cdbf& ***!
  \****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_mail_vue_vue_type_template_id_6179cdbf___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_mail_vue_vue_type_template_id_6179cdbf___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_mail_vue_vue_type_template_id_6179cdbf___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./mail.vue?vue&type=template&id=6179cdbf& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/mail.vue?vue&type=template&id=6179cdbf&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/mail.vue?vue&type=template&id=6179cdbf&":
/*!*******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/mail.vue?vue&type=template&id=6179cdbf& ***!
  \*******************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "tab-pane active show", attrs: { id: "website" } },
    [
      _c("div", { staticClass: "card" }, [
        _c("div", { staticClass: "card-body border-bottom py-3" }, [
          _c(
            "form",
            {
              attrs: { autocomplete: "off" },
              on: {
                submit: function($event) {
                  $event.preventDefault()
                  return _vm.saveSetting($event)
                }
              }
            },
            [
              _c("div", { staticClass: "row justify-content-center" }, [
                _c("div", { staticClass: "col-12 col-md-6 col-xxl-5" }, [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("div", { staticClass: "form-floating mb-3" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: {
                          disabled: "",
                          type: "text",
                          value: "SMTP",
                          autocomplete: "off",
                          placeholder: ""
                        }
                      }),
                      _vm._v(" "),
                      _c("label", { attrs: { for: "floating-input" } }, [
                        _vm._v(_vm._s(_vm.$t("mail_type")))
                      ])
                    ]),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "form-floating mb-3" },
                      [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.form.host,
                              expression: "form.host"
                            }
                          ],
                          staticClass: "form-control",
                          class: { "is-invalid": _vm.form.errors.has("host") },
                          attrs: {
                            type: "text",
                            autocomplete: "off",
                            placeholder: "Host"
                          },
                          domProps: { value: _vm.form.host },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(_vm.form, "host", $event.target.value)
                            }
                          }
                        }),
                        _vm._v(" "),
                        _c("label", { attrs: { for: "floating-input" } }, [
                          _vm._v(_vm._s(_vm.$t("mail_host")))
                        ]),
                        _vm._v(" "),
                        _c("has-error", {
                          attrs: { form: _vm.form, field: "host" }
                        })
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "form-floating mb-3" },
                      [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.form.port,
                              expression: "form.port"
                            }
                          ],
                          staticClass: "form-control",
                          class: { "is-invalid": _vm.form.errors.has("port") },
                          attrs: {
                            type: "number",
                            autocomplete: "off",
                            placeholder: "Port"
                          },
                          domProps: { value: _vm.form.port },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(_vm.form, "port", $event.target.value)
                            }
                          }
                        }),
                        _vm._v(" "),
                        _c("label", { attrs: { for: "floating-input" } }, [
                          _vm._v(" " + _vm._s(_vm.$t("mail_port")))
                        ]),
                        _vm._v(" "),
                        _c("has-error", {
                          attrs: { form: _vm.form, field: "port" }
                        })
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "form-floating mb-3" },
                      [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.form.encryption,
                              expression: "form.encryption"
                            }
                          ],
                          staticClass: "form-control",
                          class: {
                            "is-invalid": _vm.form.errors.has("encryption")
                          },
                          attrs: {
                            type: "text",
                            autocomplete: "off",
                            placeholder: "Encryption"
                          },
                          domProps: { value: _vm.form.encryption },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.form,
                                "encryption",
                                $event.target.value
                              )
                            }
                          }
                        }),
                        _vm._v(" "),
                        _c("label", { attrs: { for: "floating-input" } }, [
                          _vm._v(" " + _vm._s(_vm.$t("mail_encryption")))
                        ]),
                        _vm._v(" "),
                        _c("has-error", {
                          attrs: { form: _vm.form, field: "encryption" }
                        })
                      ],
                      1
                    )
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-12 col-md-6 col-xxl-5" }, [
                  _c("div", { staticClass: "form-floating mb-3" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.form.username,
                          expression: "form.username"
                        }
                      ],
                      staticClass: "form-control",
                      attrs: {
                        type: "text",
                        autocomplete: "off",
                        placeholder: "Username"
                      },
                      domProps: { value: _vm.form.username },
                      on: {
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.$set(_vm.form, "username", $event.target.value)
                        }
                      }
                    }),
                    _vm._v(" "),
                    _c("label", { attrs: { for: "floating-input" } }, [
                      _vm._v(_vm._s(_vm.$t("mail_username")))
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-floating mb-3" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.form.password,
                          expression: "form.password"
                        }
                      ],
                      staticClass: "form-control",
                      attrs: {
                        type: "text",
                        autocomplete: "off",
                        placeholder: "Password"
                      },
                      domProps: { value: _vm.form.password },
                      on: {
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.$set(_vm.form, "password", $event.target.value)
                        }
                      }
                    }),
                    _vm._v(" "),
                    _c("label", { attrs: { for: "floating-input" } }, [
                      _vm._v(_vm._s(_vm.$t("mail_password")))
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "form-floating mb-3" },
                    [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.form.from_name,
                            expression: "form.from_name"
                          }
                        ],
                        staticClass: "form-control",
                        class: {
                          "is-invalid": _vm.form.errors.has("from_name")
                        },
                        attrs: {
                          type: "text",
                          autocomplete: "off",
                          placeholder: "From name"
                        },
                        domProps: { value: _vm.form.from_name },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(_vm.form, "from_name", $event.target.value)
                          }
                        }
                      }),
                      _vm._v(" "),
                      _c("label", { attrs: { for: "floating-input" } }, [
                        _vm._v(_vm._s(_vm.$t("mail_from_name")))
                      ]),
                      _vm._v(" "),
                      _c("has-error", {
                        attrs: { form: _vm.form, field: "from_name" }
                      })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "form-floating mb-3" },
                    [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.form.from_address,
                            expression: "form.from_address"
                          }
                        ],
                        staticClass: "form-control",
                        class: {
                          "is-invalid": _vm.form.errors.has("from_address")
                        },
                        attrs: {
                          type: "email",
                          autocomplete: "off",
                          placeholder: "From address"
                        },
                        domProps: { value: _vm.form.from_address },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(
                              _vm.form,
                              "from_address",
                              $event.target.value
                            )
                          }
                        }
                      }),
                      _vm._v(" "),
                      _c("label", { attrs: { for: "floating-input" } }, [
                        _vm._v(_vm._s(_vm.$t("mail_from_email")))
                      ]),
                      _vm._v(" "),
                      _c("has-error", {
                        attrs: { form: _vm.form, field: "from_address" }
                      })
                    ],
                    1
                  )
                ]),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "col-12 col-md-8 col-xxl-6 text-center" },
                  [
                    _c(
                      "button",
                      {
                        staticClass: "btn btn-primary mt-3",
                        staticStyle: { width: "200px", height: "50px" }
                      },
                      [
                        _c(
                          "svg",
                          {
                            staticClass: "icon icon-tabler icon-tabler-check",
                            attrs: {
                              xmlns: "http://www.w3.org/2000/svg",
                              width: "24",
                              height: "24",
                              viewBox: "0 0 24 24",
                              "stroke-width": "2",
                              stroke: "currentColor",
                              fill: "none",
                              "stroke-linecap": "round",
                              "stroke-linejoin": "round"
                            }
                          },
                          [
                            _c("path", {
                              attrs: {
                                stroke: "none",
                                d: "M0 0h24v24H0z",
                                fill: "none"
                              }
                            }),
                            _vm._v(" "),
                            _c("path", { attrs: { d: "M5 12l5 5l10 -10" } })
                          ]
                        ),
                        _vm._v(
                          "\n                            " +
                            _vm._s(_vm.$t("save")) +
                            "\n                        "
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "button",
                      {
                        staticClass: "btn btn-secondary mt-3",
                        staticStyle: { width: "200px", height: "50px" },
                        attrs: { type: "button" },
                        on: { click: _vm.reset }
                      },
                      [
                        _c(
                          "svg",
                          {
                            staticClass: "icon icon-tabler icon-tabler-refresh",
                            attrs: {
                              xmlns: "http://www.w3.org/2000/svg",
                              width: "24",
                              height: "24",
                              viewBox: "0 0 24 24",
                              "stroke-width": "2",
                              stroke: "currentColor",
                              fill: "none",
                              "stroke-linecap": "round",
                              "stroke-linejoin": "round"
                            }
                          },
                          [
                            _c("path", {
                              attrs: {
                                stroke: "none",
                                d: "M0 0h24v24H0z",
                                fill: "none"
                              }
                            }),
                            _vm._v(" "),
                            _c("path", {
                              attrs: {
                                d: "M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"
                              }
                            }),
                            _vm._v(" "),
                            _c("path", {
                              attrs: {
                                d: "M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"
                              }
                            })
                          ]
                        ),
                        _vm._v(
                          "\n                            " +
                            _vm._s(_vm.$t("reset")) +
                            "\n                        "
                        )
                      ]
                    )
                  ]
                )
              ])
            ]
          )
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "card mt-3" }, [
        _c("div", { staticClass: "card-header" }, [
          _c("h3", { staticClass: "card-title" }, [
            _vm._v(" " + _vm._s(_vm.$t("send_test_mail")))
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "card-body" }, [
          _c(
            "form",
            {
              attrs: { autocomplete: "off" },
              on: {
                submit: function($event) {
                  $event.preventDefault()
                  return _vm.testMailSend($event)
                }
              }
            },
            [
              _c("div", { staticClass: "row justify-content-center" }, [
                _c(
                  "div",
                  { staticClass: "col-xxl-5 col-xl-7 col-md-6 col-12" },
                  [
                    _c(
                      "div",
                      { staticClass: "form-floating mb-3" },
                      [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.testMailForm.email,
                              expression: "testMailForm.email"
                            }
                          ],
                          staticClass: "form-control",
                          class: {
                            "is-invalid": _vm.testMailForm.errors.has("email")
                          },
                          attrs: {
                            placeholder: "Test email",
                            type: "email",
                            autocomplete: "off"
                          },
                          domProps: { value: _vm.testMailForm.email },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.testMailForm,
                                "email",
                                $event.target.value
                              )
                            }
                          }
                        }),
                        _vm._v(" "),
                        _c("label", { attrs: { for: "floating-input" } }, [
                          _vm._v(_vm._s(_vm.$t("email")))
                        ]),
                        _vm._v(" "),
                        _c("has-error", {
                          attrs: { form: _vm.testMailForm, field: "email" }
                        })
                      ],
                      1
                    )
                  ]
                ),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "col-xxl-3 col-xl-5 col-md-6 col-12" },
                  [
                    _vm.testMailForm.busy
                      ? _c(
                          "button",
                          {
                            staticClass: "btn btn-primary",
                            staticStyle: { width: "200px", height: "58px" },
                            attrs: { type: "button" }
                          },
                          [
                            _vm._v(
                              "\n                             " +
                                _vm._s(_vm.$t("sending")) +
                                "...\n                        "
                            )
                          ]
                        )
                      : _c(
                          "button",
                          {
                            staticClass: "btn btn-primary",
                            staticStyle: { width: "200px", height: "58px" },
                            attrs: { type: "submit" }
                          },
                          [
                            _c(
                              "svg",
                              {
                                staticClass:
                                  "icon icon-tabler icon-tabler-send",
                                attrs: {
                                  xmlns: "http://www.w3.org/2000/svg",
                                  width: "24",
                                  height: "24",
                                  viewBox: "0 0 24 24",
                                  "stroke-width": "2",
                                  stroke: "currentColor",
                                  fill: "none",
                                  "stroke-linecap": "round",
                                  "stroke-linejoin": "round"
                                }
                              },
                              [
                                _c("path", {
                                  attrs: {
                                    stroke: "none",
                                    d: "M0 0h24v24H0z",
                                    fill: "none"
                                  }
                                }),
                                _vm._v(" "),
                                _c("line", {
                                  attrs: {
                                    x1: "10",
                                    y1: "14",
                                    x2: "21",
                                    y2: "3"
                                  }
                                }),
                                _vm._v(" "),
                                _c("path", {
                                  attrs: {
                                    d:
                                      "M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5"
                                  }
                                })
                              ]
                            ),
                            _vm._v(
                              "\n                            " +
                                _vm._s(_vm.$t("send")) +
                                "\n                        "
                            )
                          ]
                        )
                  ]
                )
              ])
            ]
          )
        ])
      ])
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);