(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_pages_admin_role_edit_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/role/edit.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/role/edit.vue?vue&type=script&lang=js& ***!
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
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  created: function created() {
    var _this = this;

    var hasPermission = this.$store.getters['rolepermission/userHasPermission']('role-edit');

    if (!hasPermission) {
      this.$router.push({
        name: '401'
      });
    }

    axios.get("/api/roles/".concat(this.$route.params.roleId, "/edit")).then(function (response) {
      var role = response.data.role;
      _this.roleForm.name = role.name;

      if (role.permissions && role.permissions.length) {
        role.permissions.forEach(function (element) {
          _this.roleForm.permission.push(element.id);
        });
      }
    })["catch"](function (error) {
      console.log(error);
    });
  },
  data: function data() {
    return {
      roleForm: new Form({
        name: '',
        permission: []
      })
    };
  },
  methods: {
    roleSave: function roleSave() {
      var _this2 = this;

      this.roleForm.put("/api/roles/".concat(this.$route.params.roleId)).then(function (response) {
        if (response.data.success) {
          _this2.roleForm.reset();

          _this2.$router.push({
            name: 'role'
          }); // update the permissions


          _this2.$store.dispatch('rolepermission/loadUserPermissions');

          _this2.$toast.success({
            title: 'Success!',
            message: response.data.message
          });
        }
      })["catch"](function (error) {
        _this2.$toast.error({
          title: 'Error!',
          message: 'Something went wrong'
        });
      });
    },
    checkAllPermission: function checkAllPermission(event) {
      if (event.target.checked) {
        this.roleForm.permission = [];

        for (var permission in this.permissions) {
          this.roleForm.permission.push(this.permissions[permission].id.toString());
        }
      } else {
        this.roleForm.permission = [];
      }
    }
  },
  computed: {
    permissions: function permissions() {
      return this.$store.getters['permission/permissions'];
    }
  },
  mounted: function mounted() {
    this.$store.dispatch('permission/fetchPermissions');
  }
});

/***/ }),

/***/ "./resources/js/pages/admin/role/edit.vue":
/*!************************************************!*\
  !*** ./resources/js/pages/admin/role/edit.vue ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _edit_vue_vue_type_template_id_6445e16a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./edit.vue?vue&type=template&id=6445e16a& */ "./resources/js/pages/admin/role/edit.vue?vue&type=template&id=6445e16a&");
/* harmony import */ var _edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./edit.vue?vue&type=script&lang=js& */ "./resources/js/pages/admin/role/edit.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _edit_vue_vue_type_template_id_6445e16a___WEBPACK_IMPORTED_MODULE_0__.render,
  _edit_vue_vue_type_template_id_6445e16a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/pages/admin/role/edit.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/pages/admin/role/edit.vue?vue&type=script&lang=js&":
/*!*************************************************************************!*\
  !*** ./resources/js/pages/admin/role/edit.vue?vue&type=script&lang=js& ***!
  \*************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./edit.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/role/edit.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/pages/admin/role/edit.vue?vue&type=template&id=6445e16a&":
/*!*******************************************************************************!*\
  !*** ./resources/js/pages/admin/role/edit.vue?vue&type=template&id=6445e16a& ***!
  \*******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_template_id_6445e16a___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_template_id_6445e16a___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_edit_vue_vue_type_template_id_6445e16a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./edit.vue?vue&type=template&id=6445e16a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/role/edit.vue?vue&type=template&id=6445e16a&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/role/edit.vue?vue&type=template&id=6445e16a&":
/*!**********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/admin/role/edit.vue?vue&type=template&id=6445e16a& ***!
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
                  _vm._v(_vm._s(_vm.$t("edit") + " " + _vm.$t("role")))
                ]),
                _vm._v(" "),
                _c(
                  "router-link",
                  {
                    staticClass: "btn btn-primary",
                    attrs: { to: { name: "role" } }
                  },
                  [_vm._v(_vm._s(_vm.$t("back")))]
                )
              ],
              1
            ),
            _vm._v(" "),
            _c("div", { staticClass: "card-body border-bottom py-3" }, [
              _c(
                "form",
                {
                  attrs: { autocomplete: "off" },
                  on: {
                    submit: function($event) {
                      $event.preventDefault()
                      return _vm.roleSave($event)
                    }
                  }
                },
                [
                  _c("div", { staticClass: "row" }, [
                    _c("div", { staticClass: "col-4" }, [
                      _c("div", { staticClass: "form-group mb-3 " }, [
                        _c("label", { staticClass: "form-label" }, [
                          _vm._v(_vm._s(_vm.$t("role")))
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
                                  value: _vm.roleForm.name,
                                  expression: "roleForm.name"
                                }
                              ],
                              staticClass: "form-control",
                              class: {
                                "is-invalid": _vm.roleForm.errors.has("name")
                              },
                              attrs: {
                                type: "text",
                                placeholder: "Enter Role Name",
                                autocomplete: "off"
                              },
                              domProps: { value: _vm.roleForm.name },
                              on: {
                                input: function($event) {
                                  if ($event.target.composing) {
                                    return
                                  }
                                  _vm.$set(
                                    _vm.roleForm,
                                    "name",
                                    $event.target.value
                                  )
                                }
                              }
                            }),
                            _vm._v(" "),
                            _c("has-error", {
                              attrs: { form: _vm.roleForm, field: "name" }
                            })
                          ],
                          1
                        )
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "form-group mb-3 " }, [
                        _c(
                          "button",
                          {
                            staticClass: "btn btn-primary",
                            attrs: {
                              disabled: _vm.roleForm.busy,
                              type: "submit"
                            }
                          },
                          [_vm._v(_vm._s(_vm.$t("update_role")))]
                        )
                      ])
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-8" }, [
                      _c("div", { staticClass: "form-group" }, [
                        _c("label", { staticClass: "form-label" }, [
                          _vm._v(_vm._s(_vm.$t("permission")))
                        ]),
                        _vm._v(" "),
                        _c("br"),
                        _vm._v(" "),
                        _c("div", { staticClass: "row" }, [
                          _c("div", { staticClass: "col-3" }, [
                            _c("div", { staticClass: "d-inline-block" }, [
                              _c("div", [
                                _c(
                                  "label",
                                  { staticClass: "form-check" },
                                  [
                                    _c("input", {
                                      staticClass: "form-check-input",
                                      attrs: { type: "checkbox" },
                                      on: {
                                        change: function($event) {
                                          return _vm.checkAllPermission($event)
                                        }
                                      }
                                    }),
                                    _vm._v(" "),
                                    _c(
                                      "span",
                                      { staticClass: "form-check-label" },
                                      [_vm._v(_vm._s(_vm.$t("all_permission")))]
                                    ),
                                    _vm._v(" "),
                                    _c("has-error", {
                                      staticClass: "d-block",
                                      attrs: {
                                        form: _vm.roleForm,
                                        field: "permission"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ])
                            ])
                          ])
                        ]),
                        _vm._v(" "),
                        _c("br"),
                        _vm._v(" "),
                        _c(
                          "div",
                          { staticClass: "row" },
                          _vm._l(_vm.permissions, function(permission, index) {
                            return _c(
                              "div",
                              { key: index, staticClass: "col-3" },
                              [
                                _c(
                                  "div",
                                  { staticClass: "d-inline-block mt-1 m-3" },
                                  [
                                    _c("div", [
                                      _c(
                                        "label",
                                        { staticClass: "form-check" },
                                        [
                                          _c("input", {
                                            directives: [
                                              {
                                                name: "model",
                                                rawName: "v-model",
                                                value: _vm.roleForm.permission,
                                                expression:
                                                  "roleForm.permission"
                                              }
                                            ],
                                            staticClass: "form-check-input",
                                            attrs: { type: "checkbox" },
                                            domProps: {
                                              value: permission.id,
                                              checked: Array.isArray(
                                                _vm.roleForm.permission
                                              )
                                                ? _vm._i(
                                                    _vm.roleForm.permission,
                                                    permission.id
                                                  ) > -1
                                                : _vm.roleForm.permission
                                            },
                                            on: {
                                              change: function($event) {
                                                var $$a =
                                                    _vm.roleForm.permission,
                                                  $$el = $event.target,
                                                  $$c = $$el.checked
                                                    ? true
                                                    : false
                                                if (Array.isArray($$a)) {
                                                  var $$v = permission.id,
                                                    $$i = _vm._i($$a, $$v)
                                                  if ($$el.checked) {
                                                    $$i < 0 &&
                                                      _vm.$set(
                                                        _vm.roleForm,
                                                        "permission",
                                                        $$a.concat([$$v])
                                                      )
                                                  } else {
                                                    $$i > -1 &&
                                                      _vm.$set(
                                                        _vm.roleForm,
                                                        "permission",
                                                        $$a
                                                          .slice(0, $$i)
                                                          .concat(
                                                            $$a.slice($$i + 1)
                                                          )
                                                      )
                                                  }
                                                } else {
                                                  _vm.$set(
                                                    _vm.roleForm,
                                                    "permission",
                                                    $$c
                                                  )
                                                }
                                              }
                                            }
                                          }),
                                          _vm._v(" "),
                                          _c(
                                            "span",
                                            { staticClass: "form-check-label" },
                                            [_vm._v(_vm._s(permission.name))]
                                          )
                                        ]
                                      )
                                    ])
                                  ]
                                )
                              ]
                            )
                          }),
                          0
                        )
                      ])
                    ])
                  ])
                ]
              )
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