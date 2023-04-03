(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_pages_admin_setting_admin_theme_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/theme.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/theme.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************************************************/
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
      typeForm: new Form({
        sidebar_bg: '',
        navbar_bg: '',
        sidebar_text_color: '',
        navbar_text_color: '',
        nav_position: '',
        layout: ''
      })
    };
  },
  watch: {
    'typeForm.sidebar_bg': function typeFormSidebar_bg(value) {
      console.log(1);
      this.typeForm.sidebar_bg = value;
    },
    'typeForm.navbar_bg': function typeFormNavbar_bg(value) {
      console.log(2);
      this.typeForm.navbar_bg = value;
    },
    'typeForm.sidebar_text_color': function typeFormSidebar_text_color(value) {
      console.log(3);
      this.typeForm.sidebar_text_color = value;
    },
    'typeForm.navbar_text_color': function typeFormNavbar_text_color(value) {
      console.log(4);
      this.typeForm.navbar_text_color = value;
    }
  },
  methods: {
    loadData: function loadData() {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        var _yield$axios$get, data, setting;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.prev = 0;
                _context.next = 3;
                return axios.get('/api/setting/layout');

              case 3:
                _yield$axios$get = _context.sent;
                data = _yield$axios$get.data;
                setting = data['setting'];
                _this.typeForm.sidebar_bg = setting.sidebar_bg;
                _this.typeForm.sidebar_text_color = setting.sidebar_text_color;
                _this.typeForm.navbar_bg = setting.navbar_bg;
                _this.typeForm.navbar_text_color = setting.navbar_text_color;
                _this.typeForm.nav_position = setting.nav_position;
                _this.typeForm.layout = setting.layout;
                _context.next = 17;
                break;

              case 14:
                _context.prev = 14;
                _context.t0 = _context["catch"](0);

                _this.$toast.error({
                  title: 'Sorry',
                  message: 'Something went wrong, please try again!'
                });

              case 17:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, null, [[0, 14]]);
      }))();
    },
    saveSetting: function saveSetting() {
      var _this2 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee2() {
        var _yield$_this2$typeFor, data;

        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.prev = 0;
                _context2.next = 3;
                return _this2.typeForm.put('/api/setting/layout');

              case 3:
                _yield$_this2$typeFor = _context2.sent;
                data = _yield$_this2$typeFor.data;

                // success message
                _this2.$toast.success({
                  title: 'Success',
                  message: data.message
                });

                setTimeout(function () {
                  _this2.$store.commit("setting/SET_ADMIN_SETTING", data['setting']);

                  location.reload();
                }, 500);
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
    }
  },
  computed: {
    setting: function setting() {
      return this.$store.getters['setting/setting'];
    }
  },
  created: function created() {
    this.loadData();
  }
});

/***/ }),

/***/ "./resources/js/pages/admin/setting/admin/theme.vue":
/*!**********************************************************!*\
  !*** ./resources/js/pages/admin/setting/admin/theme.vue ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _theme_vue_vue_type_template_id_386d1e1e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./theme.vue?vue&type=template&id=386d1e1e& */ "./resources/js/pages/admin/setting/admin/theme.vue?vue&type=template&id=386d1e1e&");
/* harmony import */ var _theme_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./theme.vue?vue&type=script&lang=js& */ "./resources/js/pages/admin/setting/admin/theme.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _theme_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _theme_vue_vue_type_template_id_386d1e1e___WEBPACK_IMPORTED_MODULE_0__.render,
  _theme_vue_vue_type_template_id_386d1e1e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/admin/setting/admin/theme.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/pages/admin/setting/admin/theme.vue?vue&type=script&lang=js&":
/*!***********************************************************************************!*\
  !*** ./resources/js/pages/admin/setting/admin/theme.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_theme_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./theme.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/theme.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_theme_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/pages/admin/setting/admin/theme.vue?vue&type=template&id=386d1e1e&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/pages/admin/setting/admin/theme.vue?vue&type=template&id=386d1e1e& ***!
  \*****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_theme_vue_vue_type_template_id_386d1e1e___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_theme_vue_vue_type_template_id_386d1e1e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_theme_vue_vue_type_template_id_386d1e1e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./theme.vue?vue&type=template&id=386d1e1e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/theme.vue?vue&type=template&id=386d1e1e&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/theme.vue?vue&type=template&id=386d1e1e&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/theme.vue?vue&type=template&id=386d1e1e& ***!
  \********************************************************************************************************************************************************************************************************************************/
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
          _c("div", { staticClass: "row justify-content-center" }, [
            _c("div", { staticClass: "col-12 col-xl-10 col-xxl-8" }, [
              _c(
                "form",
                {
                  on: {
                    submit: function($event) {
                      $event.preventDefault()
                      return _vm.saveSetting($event)
                    }
                  }
                },
                [
                  _c("div", { staticClass: "mb-3" }, [
                    _c("div", { staticClass: "col" }, [
                      _c("div", { staticClass: "row" }, [
                        _c("div", { staticClass: "col-12 col-sm-6 mb-2" }, [
                          _c(
                            "label",
                            { staticClass: "form-label col-form-label" },
                            [_vm._v("Sidebar Background Color")]
                          ),
                          _vm._v(" "),
                          _c("input", {
                            directives: [
                              {
                                name: "model",
                                rawName: "v-model",
                                value: _vm.typeForm.sidebar_bg,
                                expression: "typeForm.sidebar_bg"
                              }
                            ],
                            staticClass: "form-control form-control-color",
                            attrs: {
                              type: "color",
                              title: "Choose your color"
                            },
                            domProps: { value: _vm.typeForm.sidebar_bg },
                            on: {
                              input: function($event) {
                                if ($event.target.composing) {
                                  return
                                }
                                _vm.$set(
                                  _vm.typeForm,
                                  "sidebar_bg",
                                  $event.target.value
                                )
                              }
                            }
                          })
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "col-12 col-sm-6 mb-2" }, [
                          _c(
                            "label",
                            { staticClass: "form-label col-form-label" },
                            [_vm._v("Navigation Background Color")]
                          ),
                          _vm._v(" "),
                          _c("input", {
                            directives: [
                              {
                                name: "model",
                                rawName: "v-model",
                                value: _vm.typeForm.navbar_bg,
                                expression: "typeForm.navbar_bg"
                              }
                            ],
                            staticClass: "form-control form-control-color",
                            attrs: {
                              type: "color",
                              title: "Choose your color"
                            },
                            domProps: { value: _vm.typeForm.navbar_bg },
                            on: {
                              input: function($event) {
                                if ($event.target.composing) {
                                  return
                                }
                                _vm.$set(
                                  _vm.typeForm,
                                  "navbar_bg",
                                  $event.target.value
                                )
                              }
                            }
                          })
                        ])
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "row" }, [
                        _c("div", { staticClass: "col-12 col-sm-6 mb-2" }, [
                          _c(
                            "label",
                            { staticClass: "form-label col-form-label" },
                            [_vm._v("Sidebar Text Color")]
                          ),
                          _vm._v(" "),
                          _c("input", {
                            directives: [
                              {
                                name: "model",
                                rawName: "v-model",
                                value: _vm.typeForm.sidebar_text_color,
                                expression: "typeForm.sidebar_text_color"
                              }
                            ],
                            staticClass: "form-control form-control-color",
                            attrs: {
                              type: "color",
                              title: "Choose your color",
                              name: "sidebar_bg"
                            },
                            domProps: {
                              value: _vm.typeForm.sidebar_text_color
                            },
                            on: {
                              input: function($event) {
                                if ($event.target.composing) {
                                  return
                                }
                                _vm.$set(
                                  _vm.typeForm,
                                  "sidebar_text_color",
                                  $event.target.value
                                )
                              }
                            }
                          })
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "col-12 col-sm-6 mb-2" }, [
                          _c(
                            "label",
                            { staticClass: "form-label col-form-label" },
                            [_vm._v("Navigation Text Color")]
                          ),
                          _vm._v(" "),
                          _c("input", {
                            directives: [
                              {
                                name: "model",
                                rawName: "v-model",
                                value: _vm.typeForm.navbar_text_color,
                                expression: "typeForm.navbar_text_color"
                              }
                            ],
                            staticClass: "form-control form-control-color",
                            attrs: {
                              type: "color",
                              title: "Choose your color"
                            },
                            domProps: { value: _vm.typeForm.navbar_text_color },
                            on: {
                              input: function($event) {
                                if ($event.target.composing) {
                                  return
                                }
                                _vm.$set(
                                  _vm.typeForm,
                                  "navbar_text_color",
                                  $event.target.value
                                )
                              }
                            }
                          })
                        ])
                      ])
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "mb-3" }, [
                    _c("label", { staticClass: "form-label col-form-label" }, [
                      _vm._v(_vm._s(_vm.$t("navbar_position")))
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col" }, [
                      _c("div", { staticClass: "row" }, [
                        _c(
                          "div",
                          { staticClass: "col-12 col-sm-6 mb-2" },
                          [
                            _c(
                              "label",
                              {
                                staticClass: "form-selectgroup-item flex-fill"
                              },
                              [
                                _c("input", {
                                  directives: [
                                    {
                                      name: "model",
                                      rawName: "v-model",
                                      value: _vm.typeForm.nav_position,
                                      expression: "typeForm.nav_position"
                                    }
                                  ],
                                  staticClass: "form-selectgroup-input",
                                  class: {
                                    "is-invalid": _vm.typeForm.errors.has(
                                      "nav_position"
                                    )
                                  },
                                  attrs: {
                                    type: "radio",
                                    name: "nav_position",
                                    value: "left"
                                  },
                                  domProps: {
                                    checked: _vm._q(
                                      _vm.typeForm.nav_position,
                                      "left"
                                    )
                                  },
                                  on: {
                                    change: function($event) {
                                      return _vm.$set(
                                        _vm.typeForm,
                                        "nav_position",
                                        "left"
                                      )
                                    }
                                  }
                                }),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  {
                                    staticClass:
                                      "form-selectgroup-label d-flex align-items-center p-3"
                                  },
                                  [
                                    _vm._m(0),
                                    _vm._v(" "),
                                    _c("div", [
                                      _vm._v(
                                        "\n                                                    " +
                                          _vm._s(
                                            _vm.$t("left") +
                                              " " +
                                              _vm.$t("navbar")
                                          ) +
                                          "\n                                                "
                                      )
                                    ])
                                  ]
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c("has-error", {
                              staticClass: "d-block",
                              attrs: {
                                form: _vm.typeForm,
                                field: "nav_position"
                              }
                            })
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "col-12 col-sm-6 mb-2" },
                          [
                            _c(
                              "label",
                              {
                                staticClass: "form-selectgroup-item flex-fill"
                              },
                              [
                                _c("input", {
                                  directives: [
                                    {
                                      name: "model",
                                      rawName: "v-model",
                                      value: _vm.typeForm.nav_position,
                                      expression: "typeForm.nav_position"
                                    }
                                  ],
                                  staticClass: "form-selectgroup-input",
                                  class: {
                                    "is-invalid": _vm.typeForm.errors.has(
                                      "nav_position"
                                    )
                                  },
                                  attrs: {
                                    type: "radio",
                                    name: "nav_position",
                                    value: "top"
                                  },
                                  domProps: {
                                    checked: _vm._q(
                                      _vm.typeForm.nav_position,
                                      "top"
                                    )
                                  },
                                  on: {
                                    change: function($event) {
                                      return _vm.$set(
                                        _vm.typeForm,
                                        "nav_position",
                                        "top"
                                      )
                                    }
                                  }
                                }),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  {
                                    staticClass:
                                      "form-selectgroup-label d-flex align-items-center p-3"
                                  },
                                  [
                                    _vm._m(1),
                                    _vm._v(" "),
                                    _c("div", [
                                      _vm._v(
                                        "\n                                                    " +
                                          _vm._s(
                                            _vm.$t("top") +
                                              " " +
                                              _vm.$t("navbar")
                                          ) +
                                          "\n                                                "
                                      )
                                    ])
                                  ]
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c("has-error", {
                              staticClass: "d-block",
                              attrs: {
                                form: _vm.typeForm,
                                field: "nav_position"
                              }
                            })
                          ],
                          1
                        )
                      ])
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "mb-3" }, [
                    _c("label", { staticClass: "form-label col-form-label" }, [
                      _vm._v(_vm._s(_vm.$t("app") + " " + _vm.$t("layout")))
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col" }, [
                      _c("div", { staticClass: "row" }, [
                        _c(
                          "div",
                          { staticClass: "col-12 col-sm-6 mb-2" },
                          [
                            _c(
                              "label",
                              {
                                staticClass: "form-selectgroup-item flex-fill"
                              },
                              [
                                _c("input", {
                                  directives: [
                                    {
                                      name: "model",
                                      rawName: "v-model",
                                      value: _vm.typeForm.layout,
                                      expression: "typeForm.layout"
                                    }
                                  ],
                                  staticClass: "form-selectgroup-input",
                                  class: {
                                    "is-invalid": _vm.typeForm.errors.has(
                                      "layout"
                                    )
                                  },
                                  attrs: {
                                    type: "radio",
                                    name: "layout",
                                    value: "boxed"
                                  },
                                  domProps: {
                                    checked: _vm._q(
                                      _vm.typeForm.layout,
                                      "boxed"
                                    )
                                  },
                                  on: {
                                    change: function($event) {
                                      return _vm.$set(
                                        _vm.typeForm,
                                        "layout",
                                        "boxed"
                                      )
                                    }
                                  }
                                }),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  {
                                    staticClass:
                                      "form-selectgroup-label d-flex align-items-center p-3"
                                  },
                                  [
                                    _vm._m(2),
                                    _vm._v(" "),
                                    _c("div", [
                                      _vm._v(
                                        "\n                                                    " +
                                          _vm._s(
                                            _vm.$t("boxed") +
                                              " " +
                                              _vm.$t("layout")
                                          ) +
                                          "\n                                                "
                                      )
                                    ])
                                  ]
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c("has-error", {
                              staticClass: "d-block",
                              attrs: { form: _vm.typeForm, field: "layout" }
                            })
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "col-12 col-sm-6 mb-2" },
                          [
                            _c(
                              "label",
                              {
                                staticClass: "form-selectgroup-item flex-fill"
                              },
                              [
                                _c("input", {
                                  directives: [
                                    {
                                      name: "model",
                                      rawName: "v-model",
                                      value: _vm.typeForm.layout,
                                      expression: "typeForm.layout"
                                    }
                                  ],
                                  staticClass: "form-selectgroup-input",
                                  class: {
                                    "is-invalid": _vm.typeForm.errors.has(
                                      "layout"
                                    )
                                  },
                                  attrs: {
                                    type: "radio",
                                    name: "layout",
                                    value: "full-width"
                                  },
                                  domProps: {
                                    checked: _vm._q(
                                      _vm.typeForm.layout,
                                      "full-width"
                                    )
                                  },
                                  on: {
                                    change: function($event) {
                                      return _vm.$set(
                                        _vm.typeForm,
                                        "layout",
                                        "full-width"
                                      )
                                    }
                                  }
                                }),
                                _vm._v(" "),
                                _c(
                                  "div",
                                  {
                                    staticClass:
                                      "form-selectgroup-label d-flex align-items-center p-3"
                                  },
                                  [
                                    _vm._m(3),
                                    _vm._v(" "),
                                    _c("div", [
                                      _vm._v(
                                        "\n                                                    " +
                                          _vm._s(
                                            _vm.$t("full_width") +
                                              " " +
                                              _vm.$t("layout")
                                          ) +
                                          "\n                                                "
                                      )
                                    ])
                                  ]
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c("has-error", {
                              staticClass: "d-block",
                              attrs: { form: _vm.typeForm, field: "layout" }
                            })
                          ],
                          1
                        )
                      ])
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "row justify-content-center" }, [
                    _c("div", { staticClass: "col-4 text-center" }, [
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-primary mt-3",
                          staticStyle: { width: "200px", height: "50px" },
                          attrs: { type: "submit" }
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
                            "\n                                    " +
                              _vm._s(_vm.$t("save")) +
                              "\n                                "
                          )
                        ]
                      )
                    ])
                  ])
                ]
              )
            ])
          ])
        ])
      ])
    ]
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "me-3" }, [
      _c("span", { staticClass: "form-selectgroup-check" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "me-3" }, [
      _c("span", { staticClass: "form-selectgroup-check" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "me-3" }, [
      _c("span", { staticClass: "form-selectgroup-check" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "me-3" }, [
      _c("span", { staticClass: "form-selectgroup-check" })
    ])
  }
]
render._withStripped = true



/***/ })

}]);