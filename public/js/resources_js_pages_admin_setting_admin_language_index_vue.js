(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_pages_admin_setting_admin_language_index_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/language/index.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/language/index.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      loading: false,
      languageList: []
    };
  },
  methods: {
    loadLocaleMessages: function loadLocaleMessages() {
      var _this = this;

      var locales = __webpack_require__("./resources/js/locales sync recursive [A-Za-z0-9-_,\\s]+\\.json$/");

      locales.keys().forEach(function (key) {
        var matched = key.match(/([A-Za-z0-9-_]+)\./i);

        if (matched && matched.length > 1) {
          _this.languageList.push(matched[1]);
        }
      });
    }
  },
  mounted: function mounted() {
    this.loadLocaleMessages();
  }
});

/***/ }),

/***/ "./resources/js/pages/admin/setting/admin/language/index.vue":
/*!*******************************************************************!*\
  !*** ./resources/js/pages/admin/setting/admin/language/index.vue ***!
  \*******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _index_vue_vue_type_template_id_0b528963___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./index.vue?vue&type=template&id=0b528963& */ "./resources/js/pages/admin/setting/admin/language/index.vue?vue&type=template&id=0b528963&");
/* harmony import */ var _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./index.vue?vue&type=script&lang=js& */ "./resources/js/pages/admin/setting/admin/language/index.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _index_vue_vue_type_template_id_0b528963___WEBPACK_IMPORTED_MODULE_0__.render,
  _index_vue_vue_type_template_id_0b528963___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/admin/setting/admin/language/index.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/pages/admin/setting/admin/language/index.vue?vue&type=script&lang=js&":
/*!********************************************************************************************!*\
  !*** ./resources/js/pages/admin/setting/admin/language/index.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./index.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/language/index.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/pages/admin/setting/admin/language/index.vue?vue&type=template&id=0b528963&":
/*!**************************************************************************************************!*\
  !*** ./resources/js/pages/admin/setting/admin/language/index.vue?vue&type=template&id=0b528963& ***!
  \**************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_0b528963___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_0b528963___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_0b528963___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./index.vue?vue&type=template&id=0b528963& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/language/index.vue?vue&type=template&id=0b528963&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/language/index.vue?vue&type=template&id=0b528963&":
/*!*****************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/setting/admin/language/index.vue?vue&type=template&id=0b528963& ***!
  \*****************************************************************************************************************************************************************************************************************************************/
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
  return _c("div", { staticClass: "card" }, [
    _c(
      "div",
      {
        staticClass:
          "card-header d-flex justify-content-between align-items-center"
      },
      [
        _c("h4", { staticClass: "card-title" }, [
          _vm._v(_vm._s(_vm.$t("language") + " " + _vm.$t("list")))
        ]),
        _vm._v(" "),
        _c(
          "div",
          [
            _c(
              "router-link",
              {
                staticClass: "btn btn-primary",
                attrs: { to: { name: "setting-language-add" } }
              },
              [_vm._v(_vm._s(_vm.$t("add") + " " + _vm.$t("language")))]
            )
          ],
          1
        )
      ]
    ),
    _vm._v(" "),
    _c(
      "div",
      { staticClass: "card-body border-bottom py-3" },
      [
        _vm.loading ? _c("loader") : _vm._e(),
        _vm._v(" "),
        _c("div", { staticClass: "table-responsive" }, [
          _c("table", { staticClass: "table table-vcenter card-table" }, [
            _c("thead", [
              _c("tr", [
                _c("th", [_vm._v(_vm._s(_vm.$t("name")))]),
                _vm._v(" "),
                _c("th", [
                  _vm._v(_vm._s(_vm.$t("language") + " " + _vm.$t("name")))
                ]),
                _vm._v(" "),
                _c("th", { staticClass: "w-1" })
              ])
            ]),
            _vm._v(" "),
            _c(
              "tbody",
              _vm._l(_vm.languageList, function(language, index) {
                return _c("tr", { key: language }, [
                  _c("td", [_vm._v(" " + _vm._s(index + 1) + " ")]),
                  _vm._v(" "),
                  _c("td", { staticClass: "text-muted" }, [
                    _vm._v(
                      "\n                            " +
                        _vm._s(language) +
                        "\n                        "
                    )
                  ]),
                  _vm._v(" "),
                  _c(
                    "td",
                    [
                      _c(
                        "router-link",
                        {
                          staticClass: "btn btn-info text-center",
                          attrs: {
                            to: {
                              name: "setting-language-edit",
                              params: { slug: language }
                            }
                          }
                        },
                        [
                          _c(
                            "svg",
                            {
                              staticClass:
                                "icon icon-tabler icon-tabler-edit m-0",
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
                                  d:
                                    "M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3"
                                }
                              }),
                              _vm._v(" "),
                              _c("path", {
                                attrs: {
                                  d:
                                    "M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3"
                                }
                              }),
                              _vm._v(" "),
                              _c("line", {
                                attrs: { x1: "16", y1: "5", x2: "19", y2: "8" }
                              })
                            ]
                          )
                        ]
                      )
                    ],
                    1
                  )
                ])
              }),
              0
            )
          ])
        ])
      ],
      1
    )
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);