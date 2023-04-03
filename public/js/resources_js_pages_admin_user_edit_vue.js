(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_pages_admin_user_edit_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/edit.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/edit.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************************************************/
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
//
//
//
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
  created: function created() {
    var _this = this;

    var hasPermission = this.$store.getters['rolepermission/userHasPermission']('user-edit');

    if (!hasPermission) {
      this.$router.push({
        name: '401'
      });
    }

    axios.get("/api/users/".concat(this.$route.params.userId)).then(function (response) {
      var user = response.data.user;
      _this.user = user;
      _this.userForm.name = user.name;
      _this.userForm.email = user.email;
      _this.userForm.role = user.roles[0].name;
    })["catch"](function (error) {});
  },
  data: function data() {
    return {
      user: {},
      userForm: new Form({
        name: '',
        email: '',
        image: '',
        password: '',
        role: '',
        _method: 'put'
      })
    };
  },
  methods: {
    userSave: function userSave() {
      var _this2 = this;

      if (this.userForm.role.value) {
        this.userForm.role = this.userForm.role.value;
      }

      this.userForm.post("/api/users/".concat(this.$route.params.userId)).then(function (response) {
        if (response.data.success) {
          _this2.userForm.reset(); // if role change then load permission


          if (_this2.user.roles[0].id !== _this2.userForm.role) {
            _this2.$store.dispatch('rolepermission/loadUserPermissions');
          }

          _this2.$router.push({
            name: 'user'
          });

          _this2.$toast.success({
            title: 'Success',
            message: response.data.message
          });
        }
      })["catch"](function (error) {
        console.log(error);
      });
    },
    onImageChange: function onImageChange(e) {
      var _this3 = this;

      var file = e.target.files[0];
      var reader = new FileReader();

      reader.onload = function () {
        _this3.userForm.image = reader.result;
      };

      reader.readAsDataURL(file);
    }
  },
  computed: {
    roles: function roles() {
      return this.$store.getters['role/roles'];
    }
  },
  mounted: function mounted() {
    this.$store.dispatch('role/fetchRoles');
  }
});

/***/ }),

/***/ "./resources/js/pages/admin/user/edit.vue":
/*!************************************************!*\
  !*** ./resources/js/pages/admin/user/edit.vue ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _edit_vue_vue_type_template_id_b7e13496___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./edit.vue?vue&type=template&id=b7e13496& */ "./resources/js/pages/admin/user/edit.vue?vue&type=template&id=b7e13496&");
/* harmony import */ var _edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./edit.vue?vue&type=script&lang=js& */ "./resources/js/pages/admin/user/edit.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _edit_vue_vue_type_template_id_b7e13496___WEBPACK_IMPORTED_MODULE_0__.render,
  _edit_vue_vue_type_template_id_b7e13496___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/admin/user/edit.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/pages/admin/user/edit.vue?vue&type=script&lang=js&":
/*!*************************************************************************!*\
  !*** ./resources/js/pages/admin/user/edit.vue?vue&type=script&lang=js& ***!
  \*************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./edit.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/edit.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/pages/admin/user/edit.vue?vue&type=template&id=b7e13496&":
/*!*******************************************************************************!*\
  !*** ./resources/js/pages/admin/user/edit.vue?vue&type=template&id=b7e13496& ***!
  \*******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_template_id_b7e13496___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_template_id_b7e13496___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_template_id_b7e13496___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./edit.vue?vue&type=template&id=b7e13496& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/edit.vue?vue&type=template&id=b7e13496&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/edit.vue?vue&type=template&id=b7e13496&":
/*!**********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/user/edit.vue?vue&type=template&id=b7e13496& ***!
  \**********************************************************************************************************************************************************************************************************************/
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
    _c(
      "div",
      { staticClass: "row row-deck row-cards justify-content-center" },
      [
        _c("div", { staticClass: "col-12" }, [
          _c("div", { staticClass: "card" }, [
            _c(
              "div",
              {
                staticClass:
                  "card-header d-flex justify-content-between align-items-center"
              },
              [
                _c("h4", { staticClass: "card-title" }, [
                  _vm._v(_vm._s(_vm.$t("edit_user")))
                ]),
                _vm._v(" "),
                _c(
                  "router-link",
                  {
                    staticClass: "btn btn-primary",
                    attrs: { to: { name: "user" } }
                  },
                  [_vm._v(_vm._s(_vm.$t("back")))]
                )
              ],
              1
            ),
            _vm._v(" "),
            _c("div", { staticClass: "card-body border-bottom py-3" }, [
              _c("div", { staticClass: "row" }, [
                _c("div", { staticClass: "col-8 offset-2" }, [
                  _c(
                    "form",
                    {
                      attrs: { enctype: "multipart/form-data" },
                      on: {
                        submit: function($event) {
                          $event.preventDefault()
                          return _vm.userSave($event)
                        }
                      }
                    },
                    [
                      _c("div", { staticClass: "form-group mb-3 " }, [
                        _c("label", { staticClass: "form-label" }, [
                          _vm._v(_vm._s(_vm.$t("name")))
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          [
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.userForm.name,
                                  expression: "userForm.name"
                                }
                              ],
                              staticClass: "form-control",
                              class: {
                                "is-invalid": _vm.userForm.errors.has("name")
                              },
                              attrs: {
                                type: "text",
                                placeholder: _vm.$t("name")
                              },
                              domProps: { value: _vm.userForm.name },
                              on: {
                                input: function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.userForm,
                                    "name",
                                    $event.target.value
                                  )
                                }
                              }
                            }),
                            _vm._v(" "),
                            _c("has-error", {
                              attrs: { form: _vm.userForm, field: "name" }
                            })
                          ],
                          1
                        )
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "form-group mb-3 " }, [
                        _c("label", { staticClass: "form-label" }, [
                          _vm._v(_vm._s(_vm.$t("email")))
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          [
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.userForm.email,
                                  expression: "userForm.email"
                                }
                              ],
                              staticClass: "form-control",
                              class: {
                                "is-invalid": _vm.userForm.errors.has("email")
                              },
                              attrs: {
                                type: "email",
                                placeholder: _vm.$t("email")
                              },
                              domProps: { value: _vm.userForm.email },
                              on: {
                                input: function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.userForm,
                                    "email",
                                    $event.target.value
                                  )
                                }
                              }
                            }),
                            _vm._v(" "),
                            _c("has-error", {
                              attrs: { form: _vm.userForm, field: "email" }
                            })
                          ],
                          1
                        )
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "form-group mb-3 " }, [
                        _c("label", { staticClass: "form-label" }, [
                          _vm._v(_vm._s(_vm.$t("new_image")))
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          [
                            _c("input", {
                              staticClass: "form-control",
                              class: {
                                "is-invalid": _vm.userForm.errors.has("image")
                              },
                              attrs: { type: "file" },
                              on: { change: _vm.onImageChange }
                            }),
                            _vm._v(" "),
                            _c("has-error", {
                              attrs: { form: _vm.userForm, field: "image" }
                            })
                          ],
                          1
                        )
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "form-group mb-3 " }, [
                        _c("label", { staticClass: "form-label" }, [
                          _vm._v(_vm._s(_vm.$t("password")))
                        ]),
                        _vm._v(" "),
                        _c(
                          "div",
                          [
                            _c("input", {
                              directives: [
                                {
                                  name: "model",
                                  rawName: "v-model",
                                  value: _vm.userForm.password,
                                  expression: "userForm.password"
                                }
                              ],
                              staticClass: "form-control",
                              class: {
                                "is-invalid": _vm.userForm.errors.has(
                                  "password"
                                )
                              },
                              attrs: {
                                type: "password",
                                placeholder: _vm.$t("password")
                              },
                              domProps: { value: _vm.userForm.password },
                              on: {
                                input: function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.userForm,
                                    "password",
                                    $event.target.value
                                  )
                                }
                              }
                            }),
                            _vm._v(" "),
                            _c("has-error", {
                              attrs: { form: _vm.userForm, field: "password" }
                            })
                          ],
                          1
                        )
                      ]),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "form-group mb-3 " },
                        [
                          _c("label", { staticClass: "form-label" }, [
                            _vm._v(_vm._s(_vm.$t("role")))
                          ]),
                          _vm._v(" "),
                          _c("v-select", {
                            class: {
                              "is-invalid": _vm.userForm.errors.has("role")
                            },
                            attrs: {
                              options: _vm.roles.data.map(function(role) {
                                return { label: role.name, value: role.id }
                              })
                            },
                            model: {
                              value: _vm.userForm.role,
                              callback: function($$v) {
                                _vm.$set(_vm.userForm, "role", $$v)
                              },
                              expression: "userForm.role"
                            }
                          }),
                          _vm._v(" "),
                          _c("has-error", {
                            attrs: { form: _vm.userForm, field: "role" }
                          })
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c("div", { staticClass: "form-footer" }, [
                        _c(
                          "button",
                          {
                            staticClass: "btn btn-primary",
                            attrs: {
                              disabled: _vm.userForm.busy,
                              type: "submit"
                            }
                          },
                          [_vm._v(_vm._s(_vm.$t("update_user")))]
                        )
                      ])
                    ]
                  )
                ])
              ])
            ])
          ])
        ])
      ]
    )
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);