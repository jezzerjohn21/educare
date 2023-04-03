(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_pages_admin_user_profile_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/profile.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/profile.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
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
 // import dayjs from 'dayjs';

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  created: function created() {
    var hasPermission = this.$store.getters['rolepermission/userHasPermission']('profile-show');

    if (!hasPermission) {
      this.$router.push({
        name: '401'
      });
    }
  },
  data: function data() {
    return {
      profileForm: new Form({
        name: '',
        email: '',
        image: ''
      }),
      passwordForm: new Form({
        oldPassword: '',
        newPassword: ''
      })
    };
  },
  methods: {
    profileUpdate: function profileUpdate() {
      var _this = this;

      this.profileForm.post("/api/user/profile/update/".concat(this.user.id)).then(function (response) {
        if (response.data.success) {
          _this.$store.dispatch('auth/authUser');

          _this.$toast.success({
            title: 'Success',
            message: response.data.message
          });
        }
      });
    },
    passwordUpdate: function passwordUpdate() {
      var _this2 = this;

      this.passwordForm.put("/api/user/password/update/".concat(this.user.id)).then(function (response) {
        var responseType = response.data.success;

        if (responseType) {
          _this2.passwordForm.reset();

          _this2.$store.dispatch('auth/authUser');

          _this2.$toast.success({
            title: 'Success',
            message: response.data.message
          });
        } else {
          _this2.$toast.error({
            title: 'Warning',
            message: response.data.message
          });
        }
      });
    },
    onImageChange: function onImageChange(e) {
      var _this3 = this;

      var file = e.target.files[0];
      var reader = new FileReader();

      reader.onload = function () {
        _this3.profileForm.image = reader.result;
      };

      reader.readAsDataURL(file);
    }
  },
  computed: _objectSpread({}, (0,vuex__WEBPACK_IMPORTED_MODULE_0__.mapGetters)({
    authenticated: 'auth/authenticated',
    user: 'auth/user'
  })),
  mounted: function mounted() {
    this.profileForm.name = this.user.name;
    this.profileForm.email = this.user.email;
  }
});

/***/ }),

/***/ "./resources/js/pages/admin/user/profile.vue":
/*!***************************************************!*\
  !*** ./resources/js/pages/admin/user/profile.vue ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _profile_vue_vue_type_template_id_f0156e64___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./profile.vue?vue&type=template&id=f0156e64& */ "./resources/js/pages/admin/user/profile.vue?vue&type=template&id=f0156e64&");
/* harmony import */ var _profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./profile.vue?vue&type=script&lang=js& */ "./resources/js/pages/admin/user/profile.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _profile_vue_vue_type_template_id_f0156e64___WEBPACK_IMPORTED_MODULE_0__.render,
  _profile_vue_vue_type_template_id_f0156e64___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/admin/user/profile.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/pages/admin/user/profile.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/pages/admin/user/profile.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./profile.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/profile.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/pages/admin/user/profile.vue?vue&type=template&id=f0156e64&":
/*!**********************************************************************************!*\
  !*** ./resources/js/pages/admin/user/profile.vue?vue&type=template&id=f0156e64& ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_template_id_f0156e64___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_template_id_f0156e64___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_profile_vue_vue_type_template_id_f0156e64___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./profile.vue?vue&type=template&id=f0156e64& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/profile.vue?vue&type=template&id=f0156e64&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/profile.vue?vue&type=template&id=f0156e64&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/profile.vue?vue&type=template&id=f0156e64& ***!
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
  return _c("div", { staticClass: "row" }, [
    _c("div", { staticClass: "col-4" }, [
      _c("div", { staticClass: "card" }, [
        _c("div", { staticClass: "card-body p-4 text-center" }, [
          _c("span", {
            staticClass: "avatar avatar-xl mb-3 avatar-rounded",
            style: { backgroundImage: "url(" + _vm.user.image + ")" }
          }),
          _vm._v(" "),
          _c("h2", { staticClass: "m-0 mb-1" }, [
            _c("a", { attrs: { href: "#" } }, [_vm._v(_vm._s(_vm.user.name))])
          ]),
          _vm._v(" "),
          _c("h3", { staticClass: "m-0 mb-1" }, [
            _c("a", { attrs: { href: "#" } }, [_vm._v(_vm._s(_vm.user.email))])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "badge badge-primary" }, [
            _vm._v(_vm._s(_vm.formateDate(_vm.user.created_at)))
          ])
        ])
      ])
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "col-8" }, [
      _c("div", { staticClass: "card" }, [
        _c("div", { staticClass: "card-header" }, [
          _c("h3", { staticClass: "card-title" }, [
            _vm._v(_vm._s(_vm.$t("profile_settings")))
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "card-body" }, [
          _c(
            "form",
            {
              on: {
                submit: function($event) {
                  $event.preventDefault()
                  return _vm.profileUpdate($event)
                }
              }
            },
            [
              _c("div", { staticClass: "form-group mb-3 row" }, [
                _c(
                  "label",
                  { staticClass: "form-label col-3 col-form-label" },
                  [_vm._v(_vm._s(_vm.$t("name")))]
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
                          value: _vm.profileForm.name,
                          expression: "profileForm.name"
                        }
                      ],
                      staticClass: "form-control",
                      class: {
                        "is-invalid": _vm.profileForm.errors.has("name")
                      },
                      attrs: { type: "text", placeholder: "Enter Name" },
                      domProps: { value: _vm.profileForm.name },
                      on: {
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.$set(_vm.profileForm, "name", $event.target.value)
                        }
                      }
                    }),
                    _vm._v(" "),
                    _c("has-error", {
                      attrs: { form: _vm.profileForm, field: "name" }
                    })
                  ],
                  1
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3 row" }, [
                _c(
                  "label",
                  { staticClass: "form-label col-3 col-form-label" },
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
                          value: _vm.profileForm.email,
                          expression: "profileForm.email"
                        }
                      ],
                      staticClass: "form-control",
                      class: {
                        "is-invalid": _vm.profileForm.errors.has("email")
                      },
                      attrs: { type: "email", placeholder: "Enter Email" },
                      domProps: { value: _vm.profileForm.email },
                      on: {
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.$set(
                            _vm.profileForm,
                            "email",
                            $event.target.value
                          )
                        }
                      }
                    }),
                    _vm._v(" "),
                    _c("has-error", {
                      attrs: { form: _vm.profileForm, field: "email" }
                    })
                  ],
                  1
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3 row" }, [
                _c(
                  "label",
                  { staticClass: "form-label col-3 col-form-label" },
                  [_vm._v(_vm._s(_vm.$t("image")))]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "col" }, [
                  _c("input", {
                    staticClass: "form-control",
                    class: {
                      "is-invalid": _vm.profileForm.errors.has("image")
                    },
                    attrs: { type: "file" },
                    on: { change: _vm.onImageChange }
                  })
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-footer" }, [
                _c(
                  "button",
                  {
                    staticClass: "btn btn-primary",
                    attrs: { disabled: _vm.profileForm.busy, type: "submit" }
                  },
                  [_vm._v(_vm._s(_vm.$t("update_profile")))]
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
            _vm._v(_vm._s(_vm.$t("change_password")))
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "card-body" }, [
          _c(
            "form",
            {
              on: {
                submit: function($event) {
                  $event.preventDefault()
                  return _vm.passwordUpdate($event)
                }
              }
            },
            [
              _c("div", { staticClass: "form-group mb-3 row" }, [
                _c(
                  "label",
                  { staticClass: "form-label col-3 col-form-label" },
                  [_vm._v(_vm._s(_vm.$t("current_password")))]
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
                          value: _vm.passwordForm.oldPassword,
                          expression: "passwordForm.oldPassword"
                        }
                      ],
                      staticClass: "form-control",
                      class: {
                        "is-invalid": _vm.passwordForm.errors.has("oldPassword")
                      },
                      attrs: {
                        type: "password",
                        placeholder: "Current Password"
                      },
                      domProps: { value: _vm.passwordForm.oldPassword },
                      on: {
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.$set(
                            _vm.passwordForm,
                            "oldPassword",
                            $event.target.value
                          )
                        }
                      }
                    }),
                    _vm._v(" "),
                    _c("has-error", {
                      attrs: { form: _vm.passwordForm, field: "oldPassword" }
                    })
                  ],
                  1
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-group mb-3 row" }, [
                _c(
                  "label",
                  { staticClass: "form-label col-3 col-form-label" },
                  [_vm._v(_vm._s(_vm.$t("new_password")))]
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
                          value: _vm.passwordForm.newPassword,
                          expression: "passwordForm.newPassword"
                        }
                      ],
                      staticClass: "form-control",
                      class: {
                        "is-invalid": _vm.passwordForm.errors.has("newPassword")
                      },
                      attrs: { type: "password", placeholder: "New Password" },
                      domProps: { value: _vm.passwordForm.newPassword },
                      on: {
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.$set(
                            _vm.passwordForm,
                            "newPassword",
                            $event.target.value
                          )
                        }
                      }
                    }),
                    _vm._v(" "),
                    _c("has-error", {
                      attrs: { form: _vm.passwordForm, field: "newPassword" }
                    })
                  ],
                  1
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "form-footer" }, [
                _c(
                  "button",
                  {
                    staticClass: "btn btn-primary",
                    attrs: { disabled: _vm.passwordForm.busy, type: "submit" }
                  },
                  [_vm._v(_vm._s(_vm.$t("update_password")))]
                )
              ])
            ]
          )
        ])
      ])
    ])
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);