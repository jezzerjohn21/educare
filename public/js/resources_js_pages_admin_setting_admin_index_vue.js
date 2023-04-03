(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_pages_admin_setting_admin_index_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/index.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/index.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _components_ButtonLoading_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../../components/ButtonLoading.vue */ "./resources/js/components/ButtonLoading.vue");


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

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  components: {
    ButtonLoading: _components_ButtonLoading_vue__WEBPACK_IMPORTED_MODULE_1__.default
  },
  data: function data() {
    return {
      settingForm: new Form({
        name: '',
        email: '',
        address: '',
        phone: '',
        favicon: '',
        logo: '',
        dark_logo: ''
      }),
      preview_favicon: '',
      preview_logo: '',
      preview_dark_logo: ''
    };
  },
  methods: {
    onFavChange: function onFavChange(e) {
      var _this = this;

      var logo = e.target.files[0];
      var reader = new FileReader();

      reader.onload = function () {
        _this.settingForm.favicon = reader.result;
      };

      reader.readAsDataURL(logo);
    },
    onLogoChange: function onLogoChange(e) {
      var _this2 = this;

      var fav = e.target.files[0];
      var reader = new FileReader();

      reader.onload = function () {
        _this2.settingForm.logo = reader.result;
      };

      reader.readAsDataURL(fav);
    },
    onDarkLogoChange: function onDarkLogoChange(e) {
      var _this3 = this;

      var fav = e.target.files[0];
      var reader = new FileReader();

      reader.onload = function () {
        _this3.settingForm.dark_logo = reader.result;
      };

      reader.readAsDataURL(fav);
    },
    websiteSettingForm: function websiteSettingForm() {
      var _this4 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        var response, favicon;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.prev = 0;
                _context.next = 3;
                return _this4.settingForm.put('/api/setting');

              case 3:
                response = _context.sent;

                _this4.loadData();

                favicon = document.getElementById("favicon");
                favicon.setAttribute("href", _this4.settingForm.favicon); // success message

                _this4.$toast.success({
                  title: 'Success',
                  message: response.data.message
                });

                _context.next = 13;
                break;

              case 10:
                _context.prev = 10;
                _context.t0 = _context["catch"](0);

                // error message
                _this4.$toast.error({
                  title: 'Sorry',
                  message: _context.t0.data.message
                });

              case 13:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, null, [[0, 10]]);
      }))();
    },
    loadData: function loadData() {
      var _this5 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee2() {
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.next = 2;
                return _this5.$store.dispatch('setting/fetchSetting');

              case 2:
                _this5.settingForm.fill(_this5.setting);

                _this5.settingForm.logo = '';
                _this5.settingForm.favicon = '';
                _this5.settingForm.dark_logo = '';
                _this5.preview_favicon = _this5.setting.favicon;
                _this5.preview_logo = _this5.setting.logo;
                _this5.preview_dark_logo = _this5.setting.dark_logo;

              case 9:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2);
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

/***/ "./resources/js/components/ButtonLoading.vue":
/*!***************************************************!*\
  !*** ./resources/js/components/ButtonLoading.vue ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _ButtonLoading_vue_vue_type_template_id_08036c4f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ButtonLoading.vue?vue&type=template&id=08036c4f& */ "./resources/js/components/ButtonLoading.vue?vue&type=template&id=08036c4f&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");

var script = {}


/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__.default)(
  script,
  _ButtonLoading_vue_vue_type_template_id_08036c4f___WEBPACK_IMPORTED_MODULE_0__.render,
  _ButtonLoading_vue_vue_type_template_id_08036c4f___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/ButtonLoading.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/pages/admin/setting/admin/index.vue":
/*!**********************************************************!*\
  !*** ./resources/js/pages/admin/setting/admin/index.vue ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _index_vue_vue_type_template_id_9ac3110c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./index.vue?vue&type=template&id=9ac3110c& */ "./resources/js/pages/admin/setting/admin/index.vue?vue&type=template&id=9ac3110c&");
/* harmony import */ var _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./index.vue?vue&type=script&lang=js& */ "./resources/js/pages/admin/setting/admin/index.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _index_vue_vue_type_template_id_9ac3110c___WEBPACK_IMPORTED_MODULE_0__.render,
  _index_vue_vue_type_template_id_9ac3110c___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/admin/setting/admin/index.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/pages/admin/setting/admin/index.vue?vue&type=script&lang=js&":
/*!***********************************************************************************!*\
  !*** ./resources/js/pages/admin/setting/admin/index.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./index.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/index.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/ButtonLoading.vue?vue&type=template&id=08036c4f&":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/ButtonLoading.vue?vue&type=template&id=08036c4f& ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ButtonLoading_vue_vue_type_template_id_08036c4f___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ButtonLoading_vue_vue_type_template_id_08036c4f___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_ButtonLoading_vue_vue_type_template_id_08036c4f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./ButtonLoading.vue?vue&type=template&id=08036c4f& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/ButtonLoading.vue?vue&type=template&id=08036c4f&");


/***/ }),

/***/ "./resources/js/pages/admin/setting/admin/index.vue?vue&type=template&id=9ac3110c&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/pages/admin/setting/admin/index.vue?vue&type=template&id=9ac3110c& ***!
  \*****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_9ac3110c___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_9ac3110c___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_9ac3110c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./index.vue?vue&type=template&id=9ac3110c& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/index.vue?vue&type=template&id=9ac3110c&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/ButtonLoading.vue?vue&type=template&id=08036c4f&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/ButtonLoading.vue?vue&type=template&id=08036c4f& ***!
  \*************************************************************************************************************************************************************************************************************************/
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
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "input-icon d-inline-block" }, [
      _c("span", { staticClass: "input-icon-addon" }, [
        _c("div", {
          staticClass: "spinner-border spinner-border-sm text-light mr-3",
          attrs: { role: "status" }
        })
      ]),
      _vm._v(" "),
      _c("input", {
        staticClass: "btn btn-primary",
        staticStyle: { "padding-left": "30px" },
        attrs: { type: "button", value: "Processing..." }
      })
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/index.vue?vue&type=template&id=9ac3110c&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/index.vue?vue&type=template&id=9ac3110c& ***!
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
          _c(
            "form",
            {
              attrs: { autocomplete: "off" },
              on: {
                submit: function($event) {
                  $event.preventDefault()
                  return _vm.websiteSettingForm($event)
                }
              }
            },
            [
              _c("div", { staticClass: "row justify-content-center" }, [
                _c("div", { staticClass: "col-6" }, [
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      {
                        staticClass: "form-label col-3 col-form-label",
                        attrs: { for: "name" }
                      },
                      [
                        _vm._v(
                          _vm._s(_vm.$t("app") + " " + _vm.$t("name")) + "\n"
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.settingForm.name,
                              expression: "settingForm.name"
                            }
                          ],
                          staticClass: "form-control",
                          class: {
                            "is-invalid": _vm.settingForm.errors.has("name")
                          },
                          attrs: {
                            type: "text",
                            placeholder: "Name",
                            id: "name"
                          },
                          domProps: { value: _vm.settingForm.name },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.settingForm,
                                "name",
                                $event.target.value
                              )
                            }
                          }
                        }),
                        _vm._v(" "),
                        _c("has-error", {
                          attrs: { form: _vm.settingForm, field: "name" }
                        })
                      ],
                      1
                    )
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      {
                        staticClass: "form-label col-3 col-form-label",
                        attrs: { for: "email" }
                      },
                      [_vm._v(_vm._s(_vm.$t("email")))]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.settingForm.email,
                              expression: "settingForm.email"
                            }
                          ],
                          staticClass: "form-control",
                          class: {
                            "is-invalid": _vm.settingForm.errors.has("email")
                          },
                          attrs: {
                            type: "text",
                            placeholder: "Email",
                            id: "email"
                          },
                          domProps: { value: _vm.settingForm.email },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.settingForm,
                                "email",
                                $event.target.value
                              )
                            }
                          }
                        }),
                        _vm._v(" "),
                        _c("has-error", {
                          attrs: { form: _vm.settingForm, field: "email" }
                        })
                      ],
                      1
                    )
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      {
                        staticClass: "form-label col-3 col-form-label",
                        attrs: { for: "phone" }
                      },
                      [_vm._v(" " + _vm._s(_vm.$t("phone")) + " ")]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("input", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.settingForm.phone,
                              expression: "settingForm.phone"
                            }
                          ],
                          staticClass: "form-control",
                          class: {
                            "is-invalid": _vm.settingForm.errors.has("phone")
                          },
                          attrs: {
                            type: "text",
                            placeholder: "Phone",
                            id: "phone"
                          },
                          domProps: { value: _vm.settingForm.phone },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.settingForm,
                                "phone",
                                $event.target.value
                              )
                            }
                          }
                        }),
                        _vm._v(" "),
                        _c("has-error", {
                          attrs: { form: _vm.settingForm, field: "phone" }
                        })
                      ],
                      1
                    )
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      {
                        staticClass: "form-label col-3 col-form-label",
                        attrs: { for: "email" }
                      },
                      [_vm._v(_vm._s(_vm.$t("address")))]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("textarea", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.settingForm.address,
                              expression: "settingForm.address"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: { rows: "8" },
                          domProps: { value: _vm.settingForm.address },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.$set(
                                _vm.settingForm,
                                "address",
                                $event.target.value
                              )
                            }
                          }
                        }),
                        _vm._v(" "),
                        _c("has-error", {
                          attrs: { form: _vm.settingForm, field: "address" }
                        })
                      ],
                      1
                    )
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "ml-5 col-4" }, [
                  _c("div", { staticClass: "form-group row" }, [
                    _c(
                      "label",
                      {
                        staticClass: "form-label col-3 col-form-label",
                        attrs: { for: "name" }
                      },
                      [_vm._v(_vm._s(_vm.$t("favicon")))]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col" }, [
                      _c("img", {
                        staticClass: "mb-3",
                        staticStyle: {
                          border: "1px solid #adb5bd",
                          margin: "0 auto",
                          padding: "3px"
                        },
                        attrs: {
                          width: "32px",
                          height: "32px",
                          src: _vm.preview_favicon,
                          alt: "image"
                        }
                      }),
                      _c("br"),
                      _vm._v(" "),
                      _c("input", {
                        attrs: { type: "file" },
                        on: { change: _vm.onFavChange }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group my-4 row" }, [
                    _c(
                      "label",
                      {
                        staticClass: "form-label col-3 col-form-label",
                        attrs: { for: "name" }
                      },
                      [_vm._v(_vm._s(_vm.$t("logo")))]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col" }, [
                      _c("img", {
                        staticClass: "mb-3",
                        staticStyle: {
                          border: "1px solid #adb5bd",
                          margin: "0 auto",
                          padding: "3px"
                        },
                        attrs: {
                          width: "200px",
                          height: "50px",
                          src: _vm.preview_logo,
                          alt: "image"
                        }
                      }),
                      _c("br"),
                      _vm._v(" "),
                      _c("input", {
                        attrs: { type: "file" },
                        on: { change: _vm.onLogoChange }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      {
                        staticClass: "form-label col-3 col-form-label",
                        attrs: { for: "name" }
                      },
                      [
                        _vm._v(
                          _vm._s(_vm.$t("dark_mode") + " " + _vm.$t("logo"))
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col" }, [
                      _c("img", {
                        staticClass: "mb-3",
                        staticStyle: {
                          border: "1px solid #adb5bd",
                          margin: "0 auto",
                          padding: "3px"
                        },
                        attrs: {
                          width: "200px",
                          height: "50px",
                          src: _vm.preview_dark_logo,
                          alt: "image"
                        }
                      }),
                      _c("br"),
                      _vm._v(" "),
                      _c("input", {
                        attrs: { type: "file" },
                        on: { change: _vm.onDarkLogoChange }
                      })
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "col-4 text-center" },
                  [
                    _vm.settingForm.busy
                      ? _c("button-loading")
                      : _c(
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
                                staticClass:
                                  "icon icon-tabler icon-tabler-check",
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
                        )
                  ],
                  1
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