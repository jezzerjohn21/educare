(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_pages_admin_user_teacher_edit_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/teacher/edit.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/teacher/edit.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var object_to_formdata__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! object-to-formdata */ "./node_modules/object-to-formdata/dist/index.module.js");
/* harmony import */ var object_to_formdata__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(object_to_formdata__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
      teacherForm: new Form({
        name: "",
        email: "",
        username: "",
        department_id: "",
        designation: "",
        joining_date: "",
        phone: "",
        gender: "",
        religion: "",
        bio: "",
        present_address: "",
        permanent_address: "",
        joining_letter: "",
        resume: "",
        other_document: ""
      }),
      teacher: null
    };
  },
  computed: _objectSpread({}, (0,vuex__WEBPACK_IMPORTED_MODULE_2__.mapGetters)({
    departments: 'department/departments'
  })),
  methods: {
    handleJoiningLetterUpload: function handleJoiningLetterUpload() {
      this.teacherForm.joining_letter = this.$refs.joining_letter.files[0];
    },
    handleResumeUpload: function handleResumeUpload() {
      this.teacherForm.resume = this.$refs.resume.files[0];
    },
    handleOtherDocumentUpload: function handleOtherDocumentUpload() {
      this.teacherForm.other_document = this.$refs.other_document.files[0];
    },
    updateTeacher: function updateTeacher() {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        var response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.prev = 0;
                _context.next = 3;
                return _this.teacherForm.post("/api/teachers/".concat(_this.teacher.id), {
                  transformRequest: [function (data, headers) {
                    return (0,object_to_formdata__WEBPACK_IMPORTED_MODULE_1__.serialize)(data);
                  }],
                  onUploadProgress: function onUploadProgress(e) {// Do whatever you want with the progress event
                    // console.log(e)
                  }
                });

              case 3:
                response = _context.sent;
                _this.$refs.joining_letter.value = '';
                _this.$refs.resume.value = '';
                _this.$refs.image.other_document = '';

                _this.toastSuccess(response.data.message);

                _context.next = 13;
                break;

              case 10:
                _context.prev = 10;
                _context.t0 = _context["catch"](0);
                console.log(_context.t0);

              case 13:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, null, [[0, 10]]);
      }))();
    },
    getTeacher: function getTeacher() {
      var _this2 = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee2() {
        var teacherId, response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                _context2.prev = 0;
                teacherId = _this2.$route.params.id;
                _context2.next = 4;
                return axios.get("/api/teachers/".concat(teacherId));

              case 4:
                response = _context2.sent;
                _this2.teacher = response.data.data;
                Object.keys(_this2.teacherForm).forEach(function (k) {
                  if (_this2.teacher.hasOwnProperty(k)) {
                    _this2.teacherForm[k] = _this2.teacher[k];
                  }

                  if (_this2.teacher.user.hasOwnProperty(k)) {
                    _this2.teacherForm[k] = _this2.teacher.user[k];
                  }
                });
                _context2.next = 13;
                break;

              case 9:
                _context2.prev = 9;
                _context2.t0 = _context2["catch"](0);
                console.log(_context2.t0);

                if (_context2.t0.response.status === 404) {
                  _this2.$router.push({
                    name: "404"
                  });
                }

              case 13:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, null, [[0, 9]]);
      }))();
    }
  },
  mounted: function mounted() {
    if (!this.$route.params.id) {
      this.$router.push({
        name: "404"
      });
    }

    this.getTeacher();
    this.$store.dispatch('department/fetchDepartments');
  }
});

/***/ }),

/***/ "./node_modules/object-to-formdata/dist/index.module.js":
/*!**************************************************************!*\
  !*** ./node_modules/object-to-formdata/dist/index.module.js ***!
  \**************************************************************/
/***/ ((module) => {

const isUndefined = (value) => value === undefined;

const isNull = (value) => value === null;

const isBoolean = (value) => typeof value === 'boolean';

const isObject = (value) => value === Object(value);

const isArray = (value) => Array.isArray(value);

const isDate = (value) => value instanceof Date;

const isBlob = (value) =>
  value &&
  typeof value.size === 'number' &&
  typeof value.type === 'string' &&
  typeof value.slice === 'function';

const isFile = (value) =>
  isBlob(value) &&
  typeof value.name === 'string' &&
  (typeof value.lastModifiedDate === 'object' ||
    typeof value.lastModified === 'number');

const serialize = (obj, cfg, fd, pre) => {
  cfg = cfg || {};

  cfg.indices = isUndefined(cfg.indices) ? false : cfg.indices;

  cfg.nullsAsUndefineds = isUndefined(cfg.nullsAsUndefineds)
    ? false
    : cfg.nullsAsUndefineds;

  cfg.booleansAsIntegers = isUndefined(cfg.booleansAsIntegers)
    ? false
    : cfg.booleansAsIntegers;

  cfg.allowEmptyArrays = isUndefined(cfg.allowEmptyArrays)
    ? false
    : cfg.allowEmptyArrays;

  fd = fd || new FormData();

  if (isUndefined(obj)) {
    return fd;
  } else if (isNull(obj)) {
    if (!cfg.nullsAsUndefineds) {
      fd.append(pre, '');
    }
  } else if (isBoolean(obj)) {
    if (cfg.booleansAsIntegers) {
      fd.append(pre, obj ? 1 : 0);
    } else {
      fd.append(pre, obj);
    }
  } else if (isArray(obj)) {
    if (obj.length) {
      obj.forEach((value, index) => {
        const key = pre + '[' + (cfg.indices ? index : '') + ']';

        serialize(value, cfg, fd, key);
      });
    } else if (cfg.allowEmptyArrays) {
      fd.append(pre + '[]', '');
    }
  } else if (isDate(obj)) {
    fd.append(pre, obj.toISOString());
  } else if (isObject(obj) && !isFile(obj) && !isBlob(obj)) {
    Object.keys(obj).forEach((prop) => {
      const value = obj[prop];

      if (isArray(value)) {
        while (prop.length > 2 && prop.lastIndexOf('[]') === prop.length - 2) {
          prop = prop.substring(0, prop.length - 2);
        }
      }

      const key = pre ? pre + '[' + prop + ']' : prop;

      serialize(value, cfg, fd, key);
    });
  } else {
    fd.append(pre, obj);
  }

  return fd;
};

module.exports = {
  serialize,
};


/***/ }),

/***/ "./resources/js/pages/admin/user/teacher/edit.vue":
/*!********************************************************!*\
  !*** ./resources/js/pages/admin/user/teacher/edit.vue ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _edit_vue_vue_type_template_id_879b137c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./edit.vue?vue&type=template&id=879b137c& */ "./resources/js/pages/admin/user/teacher/edit.vue?vue&type=template&id=879b137c&");
/* harmony import */ var _edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./edit.vue?vue&type=script&lang=js& */ "./resources/js/pages/admin/user/teacher/edit.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _edit_vue_vue_type_template_id_879b137c___WEBPACK_IMPORTED_MODULE_0__.render,
  _edit_vue_vue_type_template_id_879b137c___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/admin/user/teacher/edit.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/pages/admin/user/teacher/edit.vue?vue&type=script&lang=js&":
/*!*********************************************************************************!*\
  !*** ./resources/js/pages/admin/user/teacher/edit.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./edit.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/teacher/edit.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/pages/admin/user/teacher/edit.vue?vue&type=template&id=879b137c&":
/*!***************************************************************************************!*\
  !*** ./resources/js/pages/admin/user/teacher/edit.vue?vue&type=template&id=879b137c& ***!
  \***************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_template_id_879b137c___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_template_id_879b137c___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_template_id_879b137c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./edit.vue?vue&type=template&id=879b137c& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/teacher/edit.vue?vue&type=template&id=879b137c&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/teacher/edit.vue?vue&type=template&id=879b137c&":
/*!******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/teacher/edit.vue?vue&type=template&id=879b137c& ***!
  \******************************************************************************************************************************************************************************************************************************/
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
          _c(
            "div",
            { staticClass: "d-flex" },
            [
              _c(
                "router-link",
                {
                  staticClass: "btn btn-danger btn-outline",
                  attrs: { to: { name: "user-teacher" } }
                },
                [
                  _c("icon-left-arrow"),
                  _vm._v(
                    "\n            " + _vm._s(_vm.$t("Back")) + "\n          "
                  )
                ],
                1
              )
            ],
            1
          )
        ])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "card" }, [
      _c("div", { staticClass: "card" }, [
        _c("div", { staticClass: "card-body border-bottom py-3" }, [
          _c(
            "form",
            {
              attrs: { autocomplete: "off" },
              on: {
                submit: function($event) {
                  $event.preventDefault()
                  return _vm.updateTeacher($event)
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
                      [_vm._v(_vm._s(_vm.$t("name")) + "\n                ")]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("base-input", {
                          attrs: { form: _vm.teacherForm, field: "name" },
                          model: {
                            value: _vm.teacherForm.name,
                            callback: function($$v) {
                              _vm.$set(_vm.teacherForm, "name", $$v)
                            },
                            expression: "teacherForm.name"
                          }
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
                      [_vm._v(_vm._s(_vm.$t("Email")))]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("base-input", {
                          attrs: { form: _vm.teacherForm, field: "email" },
                          model: {
                            value: _vm.teacherForm.email,
                            callback: function($$v) {
                              _vm.$set(_vm.teacherForm, "email", $$v)
                            },
                            expression: "teacherForm.email"
                          }
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
                        attrs: { for: "username" }
                      },
                      [
                        _vm._v(
                          _vm._s(_vm.$t("Username")) + "\n                "
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("base-input", {
                          attrs: { form: _vm.teacherForm, field: "username" },
                          model: {
                            value: _vm.teacherForm.username,
                            callback: function($$v) {
                              _vm.$set(_vm.teacherForm, "username", $$v)
                            },
                            expression: "teacherForm.username"
                          }
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
                      [_vm._v(_vm._s(_vm.$t("Phone")) + "\n                ")]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("base-input", {
                          attrs: { form: _vm.teacherForm, field: "phone" },
                          model: {
                            value: _vm.teacherForm.phone,
                            callback: function($$v) {
                              _vm.$set(_vm.teacherForm, "phone", $$v)
                            },
                            expression: "teacherForm.phone"
                          }
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
                        attrs: { for: "gender" }
                      },
                      [
                        _vm._v(
                          "\n                  " +
                            _vm._s(_vm.$t("Gender")) +
                            "\n                "
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c(
                          "base-select",
                          {
                            attrs: { form: _vm.teacherForm, field: "gender" },
                            model: {
                              value: _vm.teacherForm.gender,
                              callback: function($$v) {
                                _vm.$set(_vm.teacherForm, "gender", $$v)
                              },
                              expression: "teacherForm.gender"
                            }
                          },
                          [
                            _c("option", { attrs: { value: "male" } }, [
                              _vm._v("Male")
                            ]),
                            _vm._v(" "),
                            _c(
                              "option",
                              {
                                attrs: { value: "female" },
                                domProps: {
                                  selected: _vm.teacherForm.gender == "female"
                                }
                              },
                              [_vm._v("Female")]
                            )
                          ]
                        )
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
                        attrs: { for: "designation" }
                      },
                      [
                        _vm._v(
                          _vm._s(_vm.$t("Designation")) + "\n                "
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("base-input", {
                          attrs: {
                            form: _vm.teacherForm,
                            field: "designation"
                          },
                          model: {
                            value: _vm.teacherForm.designation,
                            callback: function($$v) {
                              _vm.$set(_vm.teacherForm, "designation", $$v)
                            },
                            expression: "teacherForm.designation"
                          }
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
                        attrs: { for: "gender" }
                      },
                      [
                        _vm._v(
                          "\n                  " +
                            _vm._s(_vm.$t("Department")) +
                            "\n                "
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c(
                          "base-select",
                          {
                            attrs: {
                              form: _vm.teacherForm,
                              field: "department_id"
                            },
                            model: {
                              value: _vm.teacherForm.department_id,
                              callback: function($$v) {
                                _vm.$set(_vm.teacherForm, "department_id", $$v)
                              },
                              expression: "teacherForm.department_id"
                            }
                          },
                          [
                            _c(
                              "option",
                              {
                                attrs: { value: "", disabled: "", selected: "" }
                              },
                              [_vm._v("Select Department")]
                            ),
                            _vm._v(" "),
                            _vm._l(_vm.departments, function(department) {
                              return _c(
                                "option",
                                {
                                  key: department.id,
                                  domProps: {
                                    value: department.id,
                                    selected:
                                      department.id ==
                                      _vm.teacherForm.department_id
                                  }
                                },
                                [_vm._v(_vm._s(department.name))]
                              )
                            })
                          ],
                          2
                        )
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
                        attrs: { for: "joining_date" }
                      },
                      [
                        _vm._v(
                          _vm._s(_vm.$t("Joining Date")) + "\n                "
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("base-input", {
                          attrs: {
                            form: _vm.teacherForm,
                            field: "joining_date",
                            inputType: "date"
                          },
                          model: {
                            value: _vm.teacherForm.joining_date,
                            callback: function($$v) {
                              _vm.$set(_vm.teacherForm, "joining_date", $$v)
                            },
                            expression: "teacherForm.joining_date"
                          }
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
                        attrs: { for: "religion" }
                      },
                      [
                        _vm._v(
                          "\n                  " +
                            _vm._s(_vm.$t("Religion")) +
                            "\n                "
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c(
                          "base-select",
                          {
                            attrs: { form: _vm.teacherForm, field: "religion" },
                            model: {
                              value: _vm.teacherForm.religion,
                              callback: function($$v) {
                                _vm.$set(_vm.teacherForm, "religion", $$v)
                              },
                              expression: "teacherForm.religion"
                            }
                          },
                          [
                            _c(
                              "option",
                              {
                                attrs: { value: "muslim" },
                                domProps: {
                                  selected: _vm.teacherForm.gender == "muslim"
                                }
                              },
                              [_vm._v("Muslim")]
                            ),
                            _vm._v(" "),
                            _c(
                              "option",
                              {
                                attrs: { value: "hindu" },
                                domProps: {
                                  selected: _vm.teacherForm.gender == "hindu"
                                }
                              },
                              [_vm._v("Hindu")]
                            ),
                            _vm._v(" "),
                            _c(
                              "option",
                              {
                                attrs: { value: "christian" },
                                domProps: {
                                  selected:
                                    _vm.teacherForm.gender == "christian"
                                }
                              },
                              [_vm._v("Christian")]
                            ),
                            _vm._v(" "),
                            _c(
                              "option",
                              {
                                attrs: { value: "buddha" },
                                domProps: {
                                  selected: _vm.teacherForm.gender == "buddha"
                                }
                              },
                              [_vm._v("Buddha")]
                            )
                          ]
                        )
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
                        attrs: { for: "bio" }
                      },
                      [
                        _vm._v(
                          "\n                  " +
                            _vm._s(_vm.$t("Bio")) +
                            "\n                "
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("base-textarea", {
                          attrs: { form: _vm.teacherForm, field: "bio" },
                          model: {
                            value: _vm.teacherForm.bio,
                            callback: function($$v) {
                              _vm.$set(_vm.teacherForm, "bio", $$v)
                            },
                            expression: "teacherForm.bio"
                          }
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
                        attrs: { for: "present_address" }
                      },
                      [
                        _vm._v(
                          "\n                  " +
                            _vm._s(_vm.$t("Present Address")) +
                            "\n                "
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("base-textarea", {
                          attrs: {
                            form: _vm.teacherForm,
                            field: "present_address"
                          },
                          model: {
                            value: _vm.teacherForm.present_address,
                            callback: function($$v) {
                              _vm.$set(_vm.teacherForm, "present_address", $$v)
                            },
                            expression: "teacherForm.present_address"
                          }
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
                        attrs: { for: "permanent_address" }
                      },
                      [
                        _vm._v(
                          "\n                  " +
                            _vm._s(_vm.$t("Permanent Address")) +
                            "\n                "
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("base-textarea", {
                          attrs: {
                            form: _vm.teacherForm,
                            field: "permanent_address"
                          },
                          model: {
                            value: _vm.teacherForm.permanent_address,
                            callback: function($$v) {
                              _vm.$set(
                                _vm.teacherForm,
                                "permanent_address",
                                $$v
                              )
                            },
                            expression: "teacherForm.permanent_address"
                          }
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
                        attrs: { for: "joining_letter" }
                      },
                      [
                        _vm._v(
                          "\n                  " +
                            _vm._s(_vm.$t("Joining Letter")) +
                            "\n                "
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("input", {
                          ref: "joining_letter",
                          staticClass: "form-control",
                          class: {
                            "is-invalid": _vm.teacherForm.errors.has(
                              "joining_letter"
                            )
                          },
                          attrs: { type: "file" },
                          on: { change: _vm.handleJoiningLetterUpload }
                        }),
                        _vm._v(" "),
                        _c("has-error", {
                          attrs: {
                            form: _vm.teacherForm,
                            field: "joining_letter"
                          }
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
                        attrs: { for: "resume" }
                      },
                      [
                        _vm._v(
                          "\n                  " +
                            _vm._s(_vm.$t("Resume")) +
                            "\n                "
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("input", {
                          ref: "resume",
                          staticClass: "form-control",
                          class: {
                            "is-invalid": _vm.teacherForm.errors.has("resume")
                          },
                          attrs: { type: "file" },
                          on: { change: _vm.handleResumeUpload }
                        }),
                        _vm._v(" "),
                        _c("has-error", {
                          attrs: { form: _vm.teacherForm, field: "resume" }
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
                        attrs: { for: "other_document" }
                      },
                      [
                        _vm._v(
                          "\n                  " +
                            _vm._s(_vm.$t("Other Document")) +
                            "\n                "
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "col" },
                      [
                        _c("input", {
                          ref: "other_document",
                          staticClass: "form-control",
                          class: {
                            "is-invalid": _vm.teacherForm.errors.has(
                              "other_document"
                            )
                          },
                          attrs: { type: "file" },
                          on: { change: _vm.handleOtherDocumentUpload }
                        }),
                        _vm._v(" "),
                        _c("has-error", {
                          attrs: {
                            form: _vm.teacherForm,
                            field: "other_document"
                          }
                        })
                      ],
                      1
                    )
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group mb-3 row" }, [
                    _c(
                      "div",
                      { staticClass: "col-9 offset-3" },
                      [
                        _c(
                          "base-button",
                          { attrs: { loading: _vm.teacherForm.busy } },
                          [_vm._v("Update")]
                        )
                      ],
                      1
                    )
                  ])
                ])
              ])
            ]
          )
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col" }, [
      _c("h2", { staticClass: "page-title" }, [_vm._v("Edit Student")]),
      _vm._v(" "),
      _c("h2", { staticClass: "page-pretitle" }, [_vm._v("Admin Setting")])
    ])
  }
]
render._withStripped = true



/***/ })

}]);