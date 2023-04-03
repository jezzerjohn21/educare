(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_pages_admin_user_student_view_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/student/view.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/student/view.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************************************************************/
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      student: null
    };
  },
  computed: {},
  methods: {
    getStudent: function getStudent() {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        var studentId, response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.prev = 0;
                studentId = _this.$route.params.id;
                _context.next = 4;
                return axios.get("/api/students/".concat(studentId));

              case 4:
                response = _context.sent;
                _this.student = response.data.data;
                _context.next = 11;
                break;

              case 8:
                _context.prev = 8;
                _context.t0 = _context["catch"](0);
                console.log(_context.t0);

              case 11:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, null, [[0, 8]]);
      }))();
    },
    goBack: function goBack() {
      this.$router.back(-1);
    }
  },
  created: function created() {
    if (!this.$route.params.id) {
      this.$router.push({
        name: "404"
      });
    }

    this.getStudent();
  }
});

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/student/view.vue?vue&type=style&index=0&id=b0b649b8&lang=scss&scoped=true&":
/*!****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/student/view.vue?vue&type=style&index=0&id=b0b649b8&lang=scss&scoped=true& ***!
  \****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, ".style-chooser .vs__search[data-v-b0b649b8]::-moz-placeholder {\n  color: #9a9b9a;\n}\n.style-chooser .vs__search[data-v-b0b649b8]:-ms-input-placeholder {\n  color: #9a9b9a;\n}\n.style-chooser .vs__search[data-v-b0b649b8]::placeholder {\n  color: #9a9b9a;\n}", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/student/view.vue?vue&type=style&index=0&id=b0b649b8&lang=scss&scoped=true&":
/*!********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/student/view.vue?vue&type=style&index=0&id=b0b649b8&lang=scss&scoped=true& ***!
  \********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_view_vue_vue_type_style_index_0_id_b0b649b8_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!../../../../../../node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./view.vue?vue&type=style&index=0&id=b0b649b8&lang=scss&scoped=true& */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/student/view.vue?vue&type=style&index=0&id=b0b649b8&lang=scss&scoped=true&");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_view_vue_vue_type_style_index_0_id_b0b649b8_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_1__.default, options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_view_vue_vue_type_style_index_0_id_b0b649b8_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_1__.default.locals || {});

/***/ }),

/***/ "./resources/js/pages/admin/user/student/view.vue":
/*!********************************************************!*\
  !*** ./resources/js/pages/admin/user/student/view.vue ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _view_vue_vue_type_template_id_b0b649b8_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./view.vue?vue&type=template&id=b0b649b8&scoped=true& */ "./resources/js/pages/admin/user/student/view.vue?vue&type=template&id=b0b649b8&scoped=true&");
/* harmony import */ var _view_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./view.vue?vue&type=script&lang=js& */ "./resources/js/pages/admin/user/student/view.vue?vue&type=script&lang=js&");
/* harmony import */ var _view_vue_vue_type_style_index_0_id_b0b649b8_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./view.vue?vue&type=style&index=0&id=b0b649b8&lang=scss&scoped=true& */ "./resources/js/pages/admin/user/student/view.vue?vue&type=style&index=0&id=b0b649b8&lang=scss&scoped=true&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__.default)(
  _view_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _view_vue_vue_type_template_id_b0b649b8_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _view_vue_vue_type_template_id_b0b649b8_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "b0b649b8",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/admin/user/student/view.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/pages/admin/user/student/view.vue?vue&type=script&lang=js&":
/*!*********************************************************************************!*\
  !*** ./resources/js/pages/admin/user/student/view.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_view_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./view.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/student/view.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_view_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/pages/admin/user/student/view.vue?vue&type=style&index=0&id=b0b649b8&lang=scss&scoped=true&":
/*!******************************************************************************************************************!*\
  !*** ./resources/js/pages/admin/user/student/view.vue?vue&type=style&index=0&id=b0b649b8&lang=scss&scoped=true& ***!
  \******************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_view_vue_vue_type_style_index_0_id_b0b649b8_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/style-loader/dist/cjs.js!../../../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../../../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!../../../../../../node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./view.vue?vue&type=style&index=0&id=b0b649b8&lang=scss&scoped=true& */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/student/view.vue?vue&type=style&index=0&id=b0b649b8&lang=scss&scoped=true&");


/***/ }),

/***/ "./resources/js/pages/admin/user/student/view.vue?vue&type=template&id=b0b649b8&scoped=true&":
/*!***************************************************************************************************!*\
  !*** ./resources/js/pages/admin/user/student/view.vue?vue&type=template&id=b0b649b8&scoped=true& ***!
  \***************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_view_vue_vue_type_template_id_b0b649b8_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_view_vue_vue_type_template_id_b0b649b8_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_view_vue_vue_type_template_id_b0b649b8_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./view.vue?vue&type=template&id=b0b649b8&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/student/view.vue?vue&type=template&id=b0b649b8&scoped=true&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/student/view.vue?vue&type=template&id=b0b649b8&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/student/view.vue?vue&type=template&id=b0b649b8&scoped=true& ***!
  \******************************************************************************************************************************************************************************************************************************************/
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
  return _c("div", [
    _c("div", { staticClass: "page-header d-print-none" }, [
      _c("div", { staticClass: "row align-items-center" }, [
        _vm._m(0),
        _vm._v(" "),
        _c("div", { staticClass: "col-auto ms-auto d-print-none" }, [
          _c("div", { staticClass: "d-flex" }, [
            _c(
              "a",
              {
                staticClass: "btn btn-danger btn-outline",
                attrs: { href: "#" },
                on: {
                  click: function($event) {
                    $event.preventDefault()
                    return _vm.goBack($event)
                  }
                }
              },
              [
                _c("icon-left-arrow"),
                _vm._v(
                  "\n              " + _vm._s(_vm.$t("Back")) + "\n          "
                )
              ],
              1
            )
          ])
        ])
      ])
    ]),
    _vm._v(" "),
    _vm.student
      ? _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card" }, [
            _c("div", { staticClass: "card-body border-bottom py-3" }, [
              _c("div", { staticClass: "row" }, [
                _c("div", { staticClass: "col-md-6" }, [
                  _vm._m(1),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Photo")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("img", {
                        staticClass: "avatar avatar-xl avatar-rounded",
                        staticStyle: { "border-radius": "10px" },
                        attrs: { src: _vm.student.user.image_url, alt: "image" }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Name")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.user.name }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Email")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.user.email }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Username")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.user.username }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Roll No")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.roll_no }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Phone")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.phone }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Admission Date")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.admission_date }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Present Address")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("textarea", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.present_address }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Permament Address")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("textarea", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.permanent_address }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Gender")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.gender }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Date Of Birth")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.date_of_birth }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Blood Group")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.blood_group }
                      })
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-6" }, [
                  _vm._m(2),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Photo")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("img", {
                        staticClass: "avatar avatar-xl avatar-rounded",
                        staticStyle: { "border-radius": "10px" },
                        attrs: {
                          src: _vm.student.guardian.user.image_url,
                          alt: "image"
                        }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Name")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.guardian.user.name }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Email")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.guardian.user.email }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Username")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.guardian.user.username }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Occupation")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.guardian.occupation }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Phone")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.phone }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("National Id")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("input", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: { value: _vm.student.guardian.national_id }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Present Address")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("textarea", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: {
                          value: _vm.student.guardian.present_address
                        }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "label",
                      { staticClass: "form-label col-3 col-form-label" },
                      [_vm._v("Permament Address")]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("textarea", {
                        staticClass: "form-control",
                        attrs: { type: "email", readonly: "", disabled: "" },
                        domProps: {
                          value: _vm.student.guardian.permanent_address
                        }
                      })
                    ])
                  ])
                ])
              ])
            ])
          ])
        ])
      : _vm._e()
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-8" }, [
      _c("h2", { staticClass: "page-title" }, [_vm._v("View Student")]),
      _vm._v(" "),
      _c("h2", { staticClass: "page-pretitle" }, [_vm._v("Setting")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "card-header mb-3" }, [
      _c("h2", { staticClass: "card-heading" }, [_vm._v("Student Information")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "card-header mb-3" }, [
      _c("h2", { staticClass: "card-heading" }, [
        _vm._v("Guardian Information")
      ])
    ])
  }
]
render._withStripped = true



/***/ })

}]);