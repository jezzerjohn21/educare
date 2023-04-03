(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_layouts_AdminLayout_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Darkmode.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Darkmode.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************************************/
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  methods: {
    toggleDarkMode: function toggleDarkMode() {
      this.$store.commit('SET_DARK_MODE');
    }
  },
  computed: {
    darkMode: function darkMode() {
      return this.$store.getters.getMode;
    }
  },
  mounted: function mounted() {
    if (this.darkMode) {
      document.body.classList.add('theme-dark');
    } else {
      document.body.classList.remove('theme-dark');
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Dropdown.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Dropdown.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vue_clickaway__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-clickaway */ "./node_modules/vue-clickaway/dist/vue-clickaway.common.js");
//
//
//
//
//
//
//
//
//
//
//
//
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
  mixins: [vue_clickaway__WEBPACK_IMPORTED_MODULE_0__.mixin],
  props: {
    title: {
      type: String,
      required: true
    }
  },
  data: function data() {
    return {
      sidebarDropdown: false
    };
  },
  methods: {
    closeDropdown: function closeDropdown() {
      this.sidebarDropdown = false;
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Logout.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Logout.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************************************************/
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

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: {
    title: {
      type: Boolean,
      required: false,
      "default": true
    },
    linkClass: {
      type: String,
      required: false,
      "default": ''
    }
  },
  methods: _objectSpread(_objectSpread({}, (0,vuex__WEBPACK_IMPORTED_MODULE_0__.mapActions)({
    logoutAction: 'auth/logout'
  })), {}, {
    logout: function logout() {
      this.logoutAction();
    }
  })
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/SwitchLanguage.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/SwitchLanguage.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************************************/
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: 'SwitchLocale',
  data: function data() {
    return {
      langs: [],
      selectedLanguage: ''
    };
  },
  methods: {
    onChange: function onChange(event) {
      var locale = event.target.value;
      this.switchLocale(locale);
    },
    switchLocale: function switchLocale(locale) {
      if (this.$i18n.locale !== locale) {
        this.$i18n.locale = locale;
      }

      this.selectedLanguage = locale;
      localStorage.setItem('lang', locale);
    },
    loadLocaleMessages: function loadLocaleMessages() {
      var _this = this;

      var locales = __webpack_require__("./resources/js/locales sync recursive [A-Za-z0-9-_,\\s]+\\.json$/");

      locales.keys().forEach(function (key) {
        var matched = key.match(/([A-Za-z0-9-_]+)\./i);

        if (matched && matched.length > 1) {
          _this.langs.push(matched[1]);
        }
      });
    }
  },
  mounted: function mounted() {
    this.loadLocaleMessages();
    var code = localStorage.getItem('lang') || 'en';
    this.$i18n.locale = code;
    this.selectedLanguage = code;
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Footer.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Footer.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************************************/
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
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Navbar.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Navbar.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vue_clickaway__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-clickaway */ "./node_modules/vue-clickaway/dist/vue-clickaway.common.js");
/* harmony import */ var _Darkmode__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../Darkmode */ "./resources/js/components/Darkmode.vue");
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
/* harmony import */ var _Logout__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../Logout */ "./resources/js/components/Logout.vue");
/* harmony import */ var _SwitchLanguage_vue__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../SwitchLanguage.vue */ "./resources/js/components/SwitchLanguage.vue");
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





/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  mixins: [vue_clickaway__WEBPACK_IMPORTED_MODULE_0__.mixin],
  components: {
    Darkmode: _Darkmode__WEBPACK_IMPORTED_MODULE_1__.default,
    SwitchLanguage: _SwitchLanguage_vue__WEBPACK_IMPORTED_MODULE_3__.default,
    Logout: _Logout__WEBPACK_IMPORTED_MODULE_2__.default
  },
  data: function data() {
    var lang = localStorage.getItem('lang') || 'en';
    return {
      navDropDown: false,
      notification: false,
      lang: lang
    };
  },
  methods: _objectSpread(_objectSpread({
    away: function away() {
      this.navDropDown = false;
    },
    toggleNotification: function toggleNotification() {
      this.notification = !this.notification;
    },
    checkPermisssion: function checkPermisssion(name) {
      var permission = this.$store.getters['rolepermission/userHasPermission'](name);
      return permission;
    }
  }, (0,vuex__WEBPACK_IMPORTED_MODULE_4__.mapActions)({
    logoutAction: 'auth/logout'
  })), {}, {
    logout: function logout() {
      this.logoutAction();
    }
  }),
  computed: _objectSpread({}, (0,vuex__WEBPACK_IMPORTED_MODULE_4__.mapGetters)({
    authenticated: 'auth/authenticated',
    user: 'auth/user',
    setting: 'setting/setting'
  }))
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Sidebar.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Sidebar.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
/* harmony import */ var _partials_menus_admin_VerticalMenuItems_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../partials/menus/admin/VerticalMenuItems.vue */ "./resources/js/components/partials/menus/admin/VerticalMenuItems.vue");
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


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  components: {
    AppMenuItems: function AppMenuItems() {
      return Promise.resolve(/*! import() */).then(__webpack_require__.bind(__webpack_require__, /*! ./../partials/menus/admin/VerticalMenuItems.vue */ "./resources/js/components/partials/menus/admin/VerticalMenuItems.vue"));
    },
    StudentsMenuItems: function StudentsMenuItems() {
      return __webpack_require__.e(/*! import() */ "resources_js_components_partials_menus_students_VerticalMenuItems_vue").then(__webpack_require__.bind(__webpack_require__, /*! ./../partials/menus/students/VerticalMenuItems.vue */ "./resources/js/components/partials/menus/students/VerticalMenuItems.vue"));
    }
  },
  data: function data() {
    return {
      navToggler: false,
      sidebarDropdown: false,
      logo: '/images/logo/logo.png'
    };
  },
  computed: _objectSpread(_objectSpread({}, (0,vuex__WEBPACK_IMPORTED_MODULE_1__.mapGetters)({
    authenticated: 'auth/authenticated',
    user: 'auth/user',
    setting: 'setting/setting',
    darkMode: 'getMode'
  })), {}, {
    userPermissions: function userPermissions() {
      return this.$store.getters.getUserPermissions;
    },
    userType: function userType() {
      return this.user.role;
    }
  }),
  methods: _objectSpread(_objectSpread({}, (0,vuex__WEBPACK_IMPORTED_MODULE_1__.mapActions)({
    logoutAction: 'auth/logout'
  })), {}, {
    checkPermisssion: function checkPermisssion(name) {
      var permission = this.$store.getters['rolepermission/userHasPermission'](name);
      return permission;
    }
  }),
  mounted: function mounted() {
    this.$store.dispatch('setting/fetchSetting');
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
/* harmony import */ var _Logout_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../Logout.vue */ "./resources/js/components/Logout.vue");
/* harmony import */ var _Dropdown_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../Dropdown.vue */ "./resources/js/components/Dropdown.vue");
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  props: ['listClass'],
  components: {
    Dropdown: _Dropdown_vue__WEBPACK_IMPORTED_MODULE_1__.default,
    Logout: _Logout_vue__WEBPACK_IMPORTED_MODULE_0__.default
  },
  computed: _objectSpread({}, (0,vuex__WEBPACK_IMPORTED_MODULE_2__.mapGetters)({
    authenticated: 'auth/authenticated',
    user: 'auth/user',
    setting: 'setting/setting'
  })),
  methods: _objectSpread(_objectSpread({}, (0,vuex__WEBPACK_IMPORTED_MODULE_2__.mapActions)({
    logoutAction: 'auth/logout'
  })), {}, {
    checkPermisssion: function checkPermisssion(name) {
      var permission = this.$store.getters['rolepermission/userHasPermission'](name);
      return permission;
    },
    visitWebsite: function visitWebsite() {
      window.location.href = 'http://127.0.0.1:8000/';
    }
  })
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/partials/menus/admin/VerticalMenuItems.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/partials/menus/admin/VerticalMenuItems.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
/* harmony import */ var _Logout__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../Logout */ "./resources/js/components/Logout.vue");
/* harmony import */ var _Dropdown_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../Dropdown.vue */ "./resources/js/components/Dropdown.vue");
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
  props: ['listClass'],
  components: {
    Dropdown: _Dropdown_vue__WEBPACK_IMPORTED_MODULE_1__.default,
    Logout: _Logout__WEBPACK_IMPORTED_MODULE_0__.default
  },
  computed: _objectSpread({}, (0,vuex__WEBPACK_IMPORTED_MODULE_2__.mapGetters)({
    authenticated: 'auth/authenticated',
    user: 'auth/user',
    setting: 'setting/setting'
  })),
  methods: _objectSpread(_objectSpread({}, (0,vuex__WEBPACK_IMPORTED_MODULE_2__.mapActions)({
    logoutAction: 'auth/logout'
  })), {}, {
    checkPermisssion: function checkPermisssion(name) {
      var permission = this.$store.getters['rolepermission/userHasPermission'](name);
      return permission;
    },
    visitWebsite: function visitWebsite() {
      window.location.href = 'http://127.0.0.1:8000/';
    }
  })
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminHorizontalLayout.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminHorizontalLayout.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var vue_clickaway__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-clickaway */ "./node_modules/vue-clickaway/dist/vue-clickaway.common.js");
/* harmony import */ var vuex__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! vuex */ "./node_modules/vuex/dist/vuex.esm.js");
/* harmony import */ var _components_Darkmode_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/Darkmode.vue */ "./resources/js/components/Darkmode.vue");
/* harmony import */ var _components_partials_menus_admin_HorizontalAppMenuItems_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../components/partials/menus/admin/HorizontalAppMenuItems.vue */ "./resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue");
/* harmony import */ var _components_Logout_vue__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../components/Logout.vue */ "./resources/js/components/Logout.vue");
/* harmony import */ var _components_SwitchLanguage_vue__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../components/SwitchLanguage.vue */ "./resources/js/components/SwitchLanguage.vue");
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






/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  mixins: [vue_clickaway__WEBPACK_IMPORTED_MODULE_0__.mixin],
  data: function data() {
    return {
      logo: '/images/logo/logo.png',
      url: '/images/default.png',
      navDropDown: false,
      notification: false
    };
  },
  components: {
    HorizontalAppMenuItems: _components_partials_menus_admin_HorizontalAppMenuItems_vue__WEBPACK_IMPORTED_MODULE_2__.default,
    Darkmode: _components_Darkmode_vue__WEBPACK_IMPORTED_MODULE_1__.default,
    Logout: _components_Logout_vue__WEBPACK_IMPORTED_MODULE_3__.default,
    SwitchLanguage: _components_SwitchLanguage_vue__WEBPACK_IMPORTED_MODULE_4__.default
  },
  computed: _objectSpread({}, (0,vuex__WEBPACK_IMPORTED_MODULE_5__.mapGetters)({
    authenticated: 'auth/authenticated',
    user: 'auth/user',
    setting: 'setting/setting'
  })),
  methods: {
    toggleNotification: function toggleNotification() {
      this.notification = !this.notification;
    },
    checkPermisssion: function checkPermisssion(name) {
      var permission = this.$store.getters['rolepermission/userHasPermission'](name);
      return permission;
    },
    logout: function logout() {
      this.logoutAction();
    },
    away: function away() {
      this.navDropDown = false;
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminLayout.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminLayout.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _components_Loader_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/Loader.vue */ "./resources/js/components/Loader.vue");
/* harmony import */ var _AdminHorizontalLayout_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./AdminHorizontalLayout.vue */ "./resources/js/layouts/AdminHorizontalLayout.vue");
/* harmony import */ var _AdminVerticalLayout_vue__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./AdminVerticalLayout.vue */ "./resources/js/layouts/AdminVerticalLayout.vue");


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



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  components: {
    Loader: _components_Loader_vue__WEBPACK_IMPORTED_MODULE_1__.default,
    AdminVerticalLayout: _AdminVerticalLayout_vue__WEBPACK_IMPORTED_MODULE_3__.default,
    AdminHorizontalLayout: _AdminHorizontalLayout_vue__WEBPACK_IMPORTED_MODULE_2__.default
  },
  methods: {
    setfavicon: function setfavicon() {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        var favicon;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.next = 2;
                return _this.$store.dispatch('setting/fetchSetting');

              case 2:
                favicon = document.getElementById("favicon");

                if (favicon) {
                  favicon.setAttribute("href", _this.setting.favicon);
                }

              case 4:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    }
  },
  computed: {
    permissionLoaded: function permissionLoaded() {
      return this.$store.getters['rolepermission/getPermissionLoadingStatus'];
    },
    setting: function setting() {
      return this.$store.getters['setting/setting'];
    }
  },
  mounted: function mounted() {
    this.setfavicon();
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminVerticalLayout.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminVerticalLayout.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _components_layout_Footer_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/layout/Footer.vue */ "./resources/js/components/layout/Footer.vue");
/* harmony import */ var _components_layout_Navbar_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../components/layout/Navbar.vue */ "./resources/js/components/layout/Navbar.vue");
/* harmony import */ var _components_layout_Sidebar_vue__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../components/layout/Sidebar.vue */ "./resources/js/components/layout/Sidebar.vue");
/* harmony import */ var _components_Loader_vue__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../components/Loader.vue */ "./resources/js/components/Loader.vue");


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




/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  components: {
    Loader: _components_Loader_vue__WEBPACK_IMPORTED_MODULE_4__.default,
    Navbar: _components_layout_Navbar_vue__WEBPACK_IMPORTED_MODULE_2__.default,
    Sidebar: _components_layout_Sidebar_vue__WEBPACK_IMPORTED_MODULE_3__.default,
    Footer: _components_layout_Footer_vue__WEBPACK_IMPORTED_MODULE_1__.default
  },
  data: function data() {
    return {
      message: ''
    };
  },
  methods: {
    setfavicon: function setfavicon() {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        var favicon;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                _context.next = 2;
                return _this.$store.dispatch('setting/fetchSetting');

              case 2:
                favicon = document.getElementById("favicon");

                if (favicon) {
                  favicon.setAttribute("href", _this.setting.favicon);
                }

              case 4:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    }
  },
  computed: {
    permissionLoaded: function permissionLoaded() {
      return this.$store.getters['rolepermission/getPermissionLoadingStatus'];
    },
    setting: function setting() {
      return this.$store.getters['setting/setting'];
    }
  },
  mounted: function mounted() {
    this.setfavicon();
  }
});

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Darkmode.vue?vue&type=style&index=0&lang=scss&":
/*!******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Darkmode.vue?vue&type=style&index=0&lang=scss& ***!
  \******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "a.dark-mode-btn {\n  border-radius: 50% !important;\n  background-color: transparent;\n  overflow: hidden;\n  height: 25px;\n  width: 25px;\n  box-sizing: border-box;\n  font-size: 20px;\n}\na.dark-mode-btn svg {\n  color: #423f3f;\n  height: 20px;\n  width: 20px;\n}\nbody.theme-dark a.dark-mode-btn {\n  background-color: transparent;\n}\nbody.theme-dark a.dark-mode-btn svg {\n  color: white;\n  height: 30px;\n  width: 30px;\n}", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Dropdown.vue?vue&type=style&index=0&id=ef782e08&lang=scss&scoped=true&":
/*!******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Dropdown.vue?vue&type=style&index=0&id=ef782e08&lang=scss&scoped=true& ***!
  \******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, ".nav-item.dropdown .nav-link[data-v-ef782e08]::after {\n  transition: all 0.3s linear;\n}\n.nav-item.dropdown.active .nav-link[data-v-ef782e08]::after {\n  transform: rotate(135deg);\n}", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminLayout.vue?vue&type=style&index=0&lang=scss&":
/*!******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminLayout.vue?vue&type=style&index=0&lang=scss& ***!
  \******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_min_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! -!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../assets/css/tabler.min.css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/tabler.min.css");
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_flags_min_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! -!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../assets/css/tabler-flags.min.css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/tabler-flags.min.css");
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_payments_min_css__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! -!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../assets/css/tabler-payments.min.css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/tabler-payments.min.css");
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_vendors_min_css__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! -!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../assets/css/tabler-vendors.min.css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/tabler-vendors.min.css");
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_demo_min_css__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! -!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../assets/css/demo.min.css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/demo.min.css");
// Imports






var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
___CSS_LOADER_EXPORT___.i(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_min_css__WEBPACK_IMPORTED_MODULE_1__.default);
___CSS_LOADER_EXPORT___.i(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_flags_min_css__WEBPACK_IMPORTED_MODULE_2__.default);
___CSS_LOADER_EXPORT___.i(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_payments_min_css__WEBPACK_IMPORTED_MODULE_3__.default);
___CSS_LOADER_EXPORT___.i(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_vendors_min_css__WEBPACK_IMPORTED_MODULE_4__.default);
___CSS_LOADER_EXPORT___.i(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_demo_min_css__WEBPACK_IMPORTED_MODULE_5__.default);
// Module
___CSS_LOADER_EXPORT___.push([module.id, "", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminVerticalLayout.vue?vue&type=style&index=0&lang=scss&":
/*!**************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminVerticalLayout.vue?vue&type=style&index=0&lang=scss& ***!
  \**************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_min_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! -!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../assets/css/tabler.min.css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/tabler.min.css");
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_flags_min_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! -!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../assets/css/tabler-flags.min.css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/tabler-flags.min.css");
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_payments_min_css__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! -!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../assets/css/tabler-payments.min.css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/tabler-payments.min.css");
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_vendors_min_css__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! -!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../assets/css/tabler-vendors.min.css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/tabler-vendors.min.css");
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_demo_min_css__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! -!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../assets/css/demo.min.css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/demo.min.css");
// Imports






var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
___CSS_LOADER_EXPORT___.i(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_min_css__WEBPACK_IMPORTED_MODULE_1__.default);
___CSS_LOADER_EXPORT___.i(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_flags_min_css__WEBPACK_IMPORTED_MODULE_2__.default);
___CSS_LOADER_EXPORT___.i(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_payments_min_css__WEBPACK_IMPORTED_MODULE_3__.default);
___CSS_LOADER_EXPORT___.i(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_tabler_vendors_min_css__WEBPACK_IMPORTED_MODULE_4__.default);
___CSS_LOADER_EXPORT___.i(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_assets_css_demo_min_css__WEBPACK_IMPORTED_MODULE_5__.default);
// Module
___CSS_LOADER_EXPORT___.push([module.id, "", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/demo.min.css":
/*!*************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/demo.min.css ***!
  \*************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "/*!\n* Tabler v1.0.0-beta (https://tabler.io)\n* @version 1.0.0-beta\n* @link https://tabler.io\n* Copyright 2018-2021 The Tabler Authors\n* Copyright 2018-2021 codecalm.net Paweł Kuna\n* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)\n*/\n.highlight pre,pre.highlight{max-height:30rem;margin:1.5rem 0;overflow:auto;font-size:85.7142857%;border-radius:4px}.highlight pre::-webkit-scrollbar,pre.highlight::-webkit-scrollbar{width:6px;height:6px;-webkit-transition:.3s background;transition:.3s background}.highlight pre::-webkit-scrollbar-thumb,pre.highlight::-webkit-scrollbar-thumb{border-radius:5px;background:#a0a6ae}.highlight pre::-webkit-scrollbar-track,pre.highlight::-webkit-scrollbar-track{background:#e7eaef}.highlight pre::-webkit-scrollbar-corner,pre.highlight::-webkit-scrollbar-corner{background:0 0}.highlight pre:hover::-webkit-scrollbar-thumb,pre.highlight:hover::-webkit-scrollbar-thumb{background:#a0a6ae}.highlight{margin:0}.highlight code>*{margin:0!important;padding:0!important}.highlight .dl{color:#4070a0}.highlight .c{color:#727272}.highlight .c1{color:#727272}.highlight .ch{font-style:italic;color:#60a0b0}.highlight .cm{color:#727272}.highlight .cp{color:#008085}.highlight .cpf{color:#007020}.highlight .cs{color:#727272}.highlight .gd{background-color:#fcc;border:1px solid #c00}.highlight .ge{font-style:italic}.highlight .gh{color:#030}.highlight .gi{background-color:#cfc;border:1px solid #0c0}.highlight .gl{text-decoration:underline}.highlight .go{color:#aaa}.highlight .gp{color:#009}.highlight .gr{color:red}.highlight .gs{font-weight:700}.highlight .gt{color:#9c6}.highlight .gu{color:#030}.highlight .il{color:#c24f19}.highlight .k{color:#069}.highlight .kc{color:#069}.highlight .kd{color:#069}.highlight .kn{color:#069}.highlight .kp{color:#069}.highlight .kr{color:#069}.highlight .kt{color:#078}.highlight .m{color:#c24f19}.highlight .mf{color:#c24f19}.highlight .mb{color:#40a070}.highlight .mh{color:#c24f19}.highlight .mi{color:#c24f19}.highlight .mo{color:#c24f19}.highlight .na{color:#006ee0}.highlight .nb{color:#366}.highlight .nc{color:#168174}.highlight .nd{color:#6b62de}.highlight .ne{color:#c00}.highlight .nf{color:#b715f4}.highlight .ni{color:#727272}.highlight .nl{color:#6b62de}.highlight .nn{color:#007ca5}.highlight .no{color:#360}.highlight .nt{color:#2f6f9f}.highlight .nv{color:#033}.highlight .o{color:#555}.highlight .ow{color:#000}.highlight .s{color:#d73038}.highlight .s1{color:#c30}.highlight .s2{color:#c30}.highlight .sa{color:#4070a0}.highlight .sb{color:#c30}.highlight .sc{color:#c30}.highlight .sd{font-style:italic;color:#c30}.highlight .se{color:#c30}.highlight .sh{color:#c30}.highlight .si{color:#a00}.highlight .sr{color:#337e7e}.highlight .ss{color:#fc3}.highlight .sx{color:#c30}.highlight .w{color:#bbb}.highlight .language-bash::before,.highlight .language-sh::before{color:#009;content:\"$ \";-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.highlight .language-bash .m,.highlight .language-sh .m{color:inherit}.highlight .language-powershell::before{color:#009;content:\"PM> \";-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.example{padding:2rem;margin:2rem 0;border:1px solid #e6e8e9;border-radius:3px 3px 0 0;position:relative;min-height:12rem;display:flex;align-items:center;overflow-x:auto}.example-centered{justify-content:center}.example-centered .example-content{flex:0 auto}.example-content{font-size:.875rem;line-height:1.4285714;color:#232e3c;flex:1;max-width:100%}.example-content .page-header{margin-bottom:0}.example-bg{background:#f4f6fa}.example-code{margin:2rem 0;border:1px solid #e6e8e9;border-top:none}.example-code pre{margin:0;border:0;border-radius:0 0 3px 3px}.example+.example-code{margin-top:-2rem}.example-column{margin:0 auto}.example-column>.card:last-of-type{margin-bottom:0}.example-column-1{max-width:26rem}.example-column-2{max-width:52rem}.example-modal-backdrop{background:#232e3c;opacity:.24;position:absolute;width:100%;left:0;top:0;height:100%;border-radius:2px 2px 0 0}@media not print{.theme-dark .example-code{border:1px solid #e6e8e9;border-top:none}}@media not print and (prefers-color-scheme:dark){.theme-dark-auto .example-code{border:1px solid #e6e8e9;border-top:none}}.card-sponsor{background:#dbe7f6 no-repeat center/100% 100%;border-color:#548ed2;min-height:316px}body.no-transitions *{transition:none!important}.dropdown-menu-demo{display:inline-block;width:100%;position:relative;top:0;margin-bottom:1rem}.demo-icon-preview{position:-webkit-sticky;position:sticky;top:0}.demo-icon-preview i,.demo-icon-preview svg{width:15rem;height:15rem;font-size:15rem;stroke-width:1.5;margin:0 auto;display:block}@media (max-width:575.98px){.demo-icon-preview i,.demo-icon-preview svg{width:10rem;height:10rem;font-size:10rem}}.demo-icon-preview-icon pre{margin:0;-webkit-user-select:all;-moz-user-select:all;user-select:all}.demo-dividers>p{opacity:.2;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.demo-icons-list{display:flex;flex-wrap:wrap;padding:0;margin:0 -2px -1px 0;list-style:none}.demo-icons-list>*{flex:1 0 7rem}.demo-icons-list-wrap{overflow:hidden}.demo-icons-list-item{display:flex;flex-direction:column;align-items:center;justify-content:center;height:7rem;text-align:center;padding:.5rem;border-right:1px solid #e6e8e9;border-bottom:1px solid #e6e8e9;color:inherit;cursor:pointer}.demo-icons-list-item .icon{width:1.5rem;height:1.5rem;font-size:1.5rem}.demo-icons-list-item:hover{text-decoration:none}", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/tabler-flags.min.css":
/*!*********************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/tabler-flags.min.css ***!
  \*********************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "/*!\n* Tabler v1.0.0-beta (https://tabler.io)\n* @version 1.0.0-beta\n* @link https://tabler.io\n* Copyright 2018-2021 The Tabler Authors\n* Copyright 2018-2021 codecalm.net Paweł Kuna\n* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)\n*/\n.flag{position:relative;display:inline-block;width:1.33333em;height:1em;vertical-align:-3px;background-repeat:no-repeat;background-position:center;background-size:cover;border:1px solid #e6e8e9;border-radius:3px}.flag-country-ad{background-image:url(../img/flags/ad.svg)}.flag-country-ae{background-image:url(../img/flags/ae.svg)}.flag-country-af{background-image:url(../img/flags/af.svg)}.flag-country-ag{background-image:url(../img/flags/ag.svg)}.flag-country-ai{background-image:url(../img/flags/ai.svg)}.flag-country-al{background-image:url(../img/flags/al.svg)}.flag-country-am{background-image:url(../img/flags/am.svg)}.flag-country-ao{background-image:url(../img/flags/ao.svg)}.flag-country-aq{background-image:url(../img/flags/aq.svg)}.flag-country-ar{background-image:url(../img/flags/ar.svg)}.flag-country-as{background-image:url(../img/flags/as.svg)}.flag-country-at{background-image:url(../img/flags/at.svg)}.flag-country-au{background-image:url(../img/flags/au.svg)}.flag-country-aw{background-image:url(../img/flags/aw.svg)}.flag-country-ax{background-image:url(../img/flags/ax.svg)}.flag-country-az{background-image:url(../img/flags/az.svg)}.flag-country-ba{background-image:url(../img/flags/ba.svg)}.flag-country-bb{background-image:url(../img/flags/bb.svg)}.flag-country-bd{background-image:url(../img/flags/bd.svg)}.flag-country-be{background-image:url(../img/flags/be.svg)}.flag-country-bf{background-image:url(../img/flags/bf.svg)}.flag-country-bg{background-image:url(../img/flags/bg.svg)}.flag-country-bh{background-image:url(../img/flags/bh.svg)}.flag-country-bi{background-image:url(../img/flags/bi.svg)}.flag-country-bj{background-image:url(../img/flags/bj.svg)}.flag-country-bl{background-image:url(../img/flags/bl.svg)}.flag-country-bm{background-image:url(../img/flags/bm.svg)}.flag-country-bn{background-image:url(../img/flags/bn.svg)}.flag-country-bo{background-image:url(../img/flags/bo.svg)}.flag-country-bq{background-image:url(../img/flags/bq.svg)}.flag-country-br{background-image:url(../img/flags/br.svg)}.flag-country-bs{background-image:url(../img/flags/bs.svg)}.flag-country-bt{background-image:url(../img/flags/bt.svg)}.flag-country-bv{background-image:url(../img/flags/bv.svg)}.flag-country-bw{background-image:url(../img/flags/bw.svg)}.flag-country-by{background-image:url(../img/flags/by.svg)}.flag-country-bz{background-image:url(../img/flags/bz.svg)}.flag-country-ca{background-image:url(../img/flags/ca.svg)}.flag-country-cc{background-image:url(../img/flags/cc.svg)}.flag-country-cd{background-image:url(../img/flags/cd.svg)}.flag-country-cf{background-image:url(../img/flags/cf.svg)}.flag-country-cg{background-image:url(../img/flags/cg.svg)}.flag-country-ch{background-image:url(../img/flags/ch.svg)}.flag-country-ci{background-image:url(../img/flags/ci.svg)}.flag-country-ck{background-image:url(../img/flags/ck.svg)}.flag-country-cl{background-image:url(../img/flags/cl.svg)}.flag-country-cm{background-image:url(../img/flags/cm.svg)}.flag-country-cn{background-image:url(../img/flags/cn.svg)}.flag-country-co{background-image:url(../img/flags/co.svg)}.flag-country-cr{background-image:url(../img/flags/cr.svg)}.flag-country-cu{background-image:url(../img/flags/cu.svg)}.flag-country-cv{background-image:url(../img/flags/cv.svg)}.flag-country-cw{background-image:url(../img/flags/cw.svg)}.flag-country-cx{background-image:url(../img/flags/cx.svg)}.flag-country-cy{background-image:url(../img/flags/cy.svg)}.flag-country-cz{background-image:url(../img/flags/cz.svg)}.flag-country-de{background-image:url(../img/flags/de.svg)}.flag-country-dj{background-image:url(../img/flags/dj.svg)}.flag-country-dk{background-image:url(../img/flags/dk.svg)}.flag-country-dm{background-image:url(../img/flags/dm.svg)}.flag-country-do{background-image:url(../img/flags/do.svg)}.flag-country-dz{background-image:url(../img/flags/dz.svg)}.flag-country-ec{background-image:url(../img/flags/ec.svg)}.flag-country-ee{background-image:url(../img/flags/ee.svg)}.flag-country-eg{background-image:url(../img/flags/eg.svg)}.flag-country-eh{background-image:url(../img/flags/eh.svg)}.flag-country-er{background-image:url(../img/flags/er.svg)}.flag-country-es{background-image:url(../img/flags/es.svg)}.flag-country-et{background-image:url(../img/flags/et.svg)}.flag-country-fi{background-image:url(../img/flags/fi.svg)}.flag-country-fj{background-image:url(../img/flags/fj.svg)}.flag-country-fk{background-image:url(../img/flags/fk.svg)}.flag-country-fm{background-image:url(../img/flags/fm.svg)}.flag-country-fo{background-image:url(../img/flags/fo.svg)}.flag-country-fr{background-image:url(../img/flags/fr.svg)}.flag-country-ga{background-image:url(../img/flags/ga.svg)}.flag-country-gb{background-image:url(../img/flags/gb.svg)}.flag-country-gd{background-image:url(../img/flags/gd.svg)}.flag-country-ge{background-image:url(../img/flags/ge.svg)}.flag-country-gf{background-image:url(../img/flags/gf.svg)}.flag-country-gg{background-image:url(../img/flags/gg.svg)}.flag-country-gh{background-image:url(../img/flags/gh.svg)}.flag-country-gi{background-image:url(../img/flags/gi.svg)}.flag-country-gl{background-image:url(../img/flags/gl.svg)}.flag-country-gm{background-image:url(../img/flags/gm.svg)}.flag-country-gn{background-image:url(../img/flags/gn.svg)}.flag-country-gp{background-image:url(../img/flags/gp.svg)}.flag-country-gq{background-image:url(../img/flags/gq.svg)}.flag-country-gr{background-image:url(../img/flags/gr.svg)}.flag-country-gs{background-image:url(../img/flags/gs.svg)}.flag-country-gt{background-image:url(../img/flags/gt.svg)}.flag-country-gu{background-image:url(../img/flags/gu.svg)}.flag-country-gw{background-image:url(../img/flags/gw.svg)}.flag-country-gy{background-image:url(../img/flags/gy.svg)}.flag-country-hk{background-image:url(../img/flags/hk.svg)}.flag-country-hm{background-image:url(../img/flags/hm.svg)}.flag-country-hn{background-image:url(../img/flags/hn.svg)}.flag-country-hr{background-image:url(../img/flags/hr.svg)}.flag-country-ht{background-image:url(../img/flags/ht.svg)}.flag-country-hu{background-image:url(../img/flags/hu.svg)}.flag-country-id{background-image:url(../img/flags/id.svg)}.flag-country-ie{background-image:url(../img/flags/ie.svg)}.flag-country-il{background-image:url(../img/flags/il.svg)}.flag-country-im{background-image:url(../img/flags/im.svg)}.flag-country-in{background-image:url(../img/flags/in.svg)}.flag-country-io{background-image:url(../img/flags/io.svg)}.flag-country-iq{background-image:url(../img/flags/iq.svg)}.flag-country-ir{background-image:url(../img/flags/ir.svg)}.flag-country-is{background-image:url(../img/flags/is.svg)}.flag-country-it{background-image:url(../img/flags/it.svg)}.flag-country-je{background-image:url(../img/flags/je.svg)}.flag-country-jm{background-image:url(../img/flags/jm.svg)}.flag-country-jo{background-image:url(../img/flags/jo.svg)}.flag-country-jp{background-image:url(../img/flags/jp.svg)}.flag-country-ke{background-image:url(../img/flags/ke.svg)}.flag-country-kg{background-image:url(../img/flags/kg.svg)}.flag-country-kh{background-image:url(../img/flags/kh.svg)}.flag-country-ki{background-image:url(../img/flags/ki.svg)}.flag-country-km{background-image:url(../img/flags/km.svg)}.flag-country-kn{background-image:url(../img/flags/kn.svg)}.flag-country-kp{background-image:url(../img/flags/kp.svg)}.flag-country-kr{background-image:url(../img/flags/kr.svg)}.flag-country-kw{background-image:url(../img/flags/kw.svg)}.flag-country-ky{background-image:url(../img/flags/ky.svg)}.flag-country-kz{background-image:url(../img/flags/kz.svg)}.flag-country-la{background-image:url(../img/flags/la.svg)}.flag-country-lb{background-image:url(../img/flags/lb.svg)}.flag-country-lc{background-image:url(../img/flags/lc.svg)}.flag-country-li{background-image:url(../img/flags/li.svg)}.flag-country-lk{background-image:url(../img/flags/lk.svg)}.flag-country-lr{background-image:url(../img/flags/lr.svg)}.flag-country-ls{background-image:url(../img/flags/ls.svg)}.flag-country-lt{background-image:url(../img/flags/lt.svg)}.flag-country-lu{background-image:url(../img/flags/lu.svg)}.flag-country-lv{background-image:url(../img/flags/lv.svg)}.flag-country-ly{background-image:url(../img/flags/ly.svg)}.flag-country-ma{background-image:url(../img/flags/ma.svg)}.flag-country-mc{background-image:url(../img/flags/mc.svg)}.flag-country-md{background-image:url(../img/flags/md.svg)}.flag-country-me{background-image:url(../img/flags/me.svg)}.flag-country-mf{background-image:url(../img/flags/mf.svg)}.flag-country-mg{background-image:url(../img/flags/mg.svg)}.flag-country-mh{background-image:url(../img/flags/mh.svg)}.flag-country-mk{background-image:url(../img/flags/mk.svg)}.flag-country-ml{background-image:url(../img/flags/ml.svg)}.flag-country-mm{background-image:url(../img/flags/mm.svg)}.flag-country-mn{background-image:url(../img/flags/mn.svg)}.flag-country-mo{background-image:url(../img/flags/mo.svg)}.flag-country-mp{background-image:url(../img/flags/mp.svg)}.flag-country-mq{background-image:url(../img/flags/mq.svg)}.flag-country-mr{background-image:url(../img/flags/mr.svg)}.flag-country-ms{background-image:url(../img/flags/ms.svg)}.flag-country-mt{background-image:url(../img/flags/mt.svg)}.flag-country-mu{background-image:url(../img/flags/mu.svg)}.flag-country-mv{background-image:url(../img/flags/mv.svg)}.flag-country-mw{background-image:url(../img/flags/mw.svg)}.flag-country-mx{background-image:url(../img/flags/mx.svg)}.flag-country-my{background-image:url(../img/flags/my.svg)}.flag-country-mz{background-image:url(../img/flags/mz.svg)}.flag-country-na{background-image:url(../img/flags/na.svg)}.flag-country-nc{background-image:url(../img/flags/nc.svg)}.flag-country-ne{background-image:url(../img/flags/ne.svg)}.flag-country-nf{background-image:url(../img/flags/nf.svg)}.flag-country-ng{background-image:url(../img/flags/ng.svg)}.flag-country-ni{background-image:url(../img/flags/ni.svg)}.flag-country-nl{background-image:url(../img/flags/nl.svg)}.flag-country-no{background-image:url(../img/flags/no.svg)}.flag-country-np{background-image:url(../img/flags/np.svg)}.flag-country-nr{background-image:url(../img/flags/nr.svg)}.flag-country-nu{background-image:url(../img/flags/nu.svg)}.flag-country-nz{background-image:url(../img/flags/nz.svg)}.flag-country-om{background-image:url(../img/flags/om.svg)}.flag-country-pa{background-image:url(../img/flags/pa.svg)}.flag-country-pe{background-image:url(../img/flags/pe.svg)}.flag-country-pf{background-image:url(../img/flags/pf.svg)}.flag-country-pg{background-image:url(../img/flags/pg.svg)}.flag-country-ph{background-image:url(../img/flags/ph.svg)}.flag-country-pk{background-image:url(../img/flags/pk.svg)}.flag-country-pl{background-image:url(../img/flags/pl.svg)}.flag-country-pm{background-image:url(../img/flags/pm.svg)}.flag-country-pn{background-image:url(../img/flags/pn.svg)}.flag-country-pr{background-image:url(../img/flags/pr.svg)}.flag-country-ps{background-image:url(../img/flags/ps.svg)}.flag-country-pt{background-image:url(../img/flags/pt.svg)}.flag-country-pw{background-image:url(../img/flags/pw.svg)}.flag-country-py{background-image:url(../img/flags/py.svg)}.flag-country-qa{background-image:url(../img/flags/qa.svg)}.flag-country-re{background-image:url(../img/flags/re.svg)}.flag-country-ro{background-image:url(../img/flags/ro.svg)}.flag-country-rs{background-image:url(../img/flags/rs.svg)}.flag-country-ru{background-image:url(../img/flags/ru.svg)}.flag-country-rw{background-image:url(../img/flags/rw.svg)}.flag-country-sa{background-image:url(../img/flags/sa.svg)}.flag-country-sb{background-image:url(../img/flags/sb.svg)}.flag-country-sc{background-image:url(../img/flags/sc.svg)}.flag-country-sd{background-image:url(../img/flags/sd.svg)}.flag-country-se{background-image:url(../img/flags/se.svg)}.flag-country-sg{background-image:url(../img/flags/sg.svg)}.flag-country-sh{background-image:url(../img/flags/sh.svg)}.flag-country-si{background-image:url(../img/flags/si.svg)}.flag-country-sj{background-image:url(../img/flags/sj.svg)}.flag-country-sk{background-image:url(../img/flags/sk.svg)}.flag-country-sl{background-image:url(../img/flags/sl.svg)}.flag-country-sm{background-image:url(../img/flags/sm.svg)}.flag-country-sn{background-image:url(../img/flags/sn.svg)}.flag-country-so{background-image:url(../img/flags/so.svg)}.flag-country-sr{background-image:url(../img/flags/sr.svg)}.flag-country-ss{background-image:url(../img/flags/ss.svg)}.flag-country-st{background-image:url(../img/flags/st.svg)}.flag-country-sv{background-image:url(../img/flags/sv.svg)}.flag-country-sx{background-image:url(../img/flags/sx.svg)}.flag-country-sy{background-image:url(../img/flags/sy.svg)}.flag-country-sz{background-image:url(../img/flags/sz.svg)}.flag-country-tc{background-image:url(../img/flags/tc.svg)}.flag-country-td{background-image:url(../img/flags/td.svg)}.flag-country-tf{background-image:url(../img/flags/tf.svg)}.flag-country-tg{background-image:url(../img/flags/tg.svg)}.flag-country-th{background-image:url(../img/flags/th.svg)}.flag-country-tj{background-image:url(../img/flags/tj.svg)}.flag-country-tk{background-image:url(../img/flags/tk.svg)}.flag-country-tl{background-image:url(../img/flags/tl.svg)}.flag-country-tm{background-image:url(../img/flags/tm.svg)}.flag-country-tn{background-image:url(../img/flags/tn.svg)}.flag-country-to{background-image:url(../img/flags/to.svg)}.flag-country-tr{background-image:url(../img/flags/tr.svg)}.flag-country-tt{background-image:url(../img/flags/tt.svg)}.flag-country-tv{background-image:url(../img/flags/tv.svg)}.flag-country-tw{background-image:url(../img/flags/tw.svg)}.flag-country-tz{background-image:url(../img/flags/tz.svg)}.flag-country-ua{background-image:url(../img/flags/ua.svg)}.flag-country-ug{background-image:url(../img/flags/ug.svg)}.flag-country-um{background-image:url(../img/flags/um.svg)}.flag-country-us{background-image:url(../img/flags/us.svg)}.flag-country-uy{background-image:url(../img/flags/uy.svg)}.flag-country-uz{background-image:url(../img/flags/uz.svg)}.flag-country-va{background-image:url(../img/flags/va.svg)}.flag-country-vc{background-image:url(../img/flags/vc.svg)}.flag-country-ve{background-image:url(../img/flags/ve.svg)}.flag-country-vg{background-image:url(../img/flags/vg.svg)}.flag-country-vi{background-image:url(../img/flags/vi.svg)}.flag-country-vn{background-image:url(../img/flags/vn.svg)}.flag-country-vu{background-image:url(../img/flags/vu.svg)}.flag-country-wf{background-image:url(../img/flags/wf.svg)}.flag-country-ws{background-image:url(../img/flags/ws.svg)}.flag-country-ye{background-image:url(../img/flags/ye.svg)}.flag-country-yt{background-image:url(../img/flags/yt.svg)}.flag-country-za{background-image:url(../img/flags/za.svg)}.flag-country-zm{background-image:url(../img/flags/zm.svg)}.flag-country-zw{background-image:url(../img/flags/zw.svg)}.flag-country-es-ct{background-image:url(../img/flags/es-ct.svg)}.flag-country-eu{background-image:url(../img/flags/eu.svg)}.flag-country-gb-eng{background-image:url(../img/flags/gb-eng.svg)}.flag-country-gb-nir{background-image:url(../img/flags/gb-nir.svg)}.flag-country-gb-sct{background-image:url(../img/flags/gb-sct.svg)}.flag-country-gb-wls{background-image:url(../img/flags/gb-wls.svg)}.flag-country-un{background-image:url(../img/flags/un.svg)}.flag-xs{width:1.25rem;height:.9375rem}.flag-sm{width:2rem;height:1.5rem}.flag-md{width:3.75rem;height:2.8125rem}.flag-lg{width:5rem;height:3.75rem}.flag-xl{width:7rem;height:5.25rem}", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/tabler-payments.min.css":
/*!************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./resources/js/assets/css/tabler-payments.min.css ***!
  \************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "/*!\n* Tabler v1.0.0-beta (https://tabler.io)\n* @version 1.0.0-beta\n* @link https://tabler.io\n* Copyright 2018-2021 The Tabler Authors\n* Copyright 2018-2021 codecalm.net Paweł Kuna\n* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)\n*/\n.payment{width:3.33332rem;height:2rem;display:inline-block;background:no-repeat center/100% 100%;vertical-align:bottom;font-style:normal;box-shadow:0 0 1px 1px rgba(0,0,0,.1);border-radius:2px}.payment-provider-2checkout{background-image:url(../img/payments/2checkout.svg)}.payment-provider-2checkout-dark{background-image:url(../img/payments/2checkout-dark.svg)}.payment-provider-alipay{background-image:url(../img/payments/alipay.svg)}.payment-provider-alipay-dark{background-image:url(../img/payments/alipay-dark.svg)}.payment-provider-amazon{background-image:url(../img/payments/amazon.svg)}.payment-provider-amazon-dark{background-image:url(../img/payments/amazon-dark.svg)}.payment-provider-americanexpress{background-image:url(../img/payments/americanexpress.svg)}.payment-provider-americanexpress-dark{background-image:url(../img/payments/americanexpress-dark.svg)}.payment-provider-applepay{background-image:url(../img/payments/applepay.svg)}.payment-provider-applepay-dark{background-image:url(../img/payments/applepay-dark.svg)}.payment-provider-bancontact{background-image:url(../img/payments/bancontact.svg)}.payment-provider-bancontact-dark{background-image:url(../img/payments/bancontact-dark.svg)}.payment-provider-bitcoin{background-image:url(../img/payments/bitcoin.svg)}.payment-provider-bitcoin-dark{background-image:url(../img/payments/bitcoin-dark.svg)}.payment-provider-bitpay{background-image:url(../img/payments/bitpay.svg)}.payment-provider-bitpay-dark{background-image:url(../img/payments/bitpay-dark.svg)}.payment-provider-blik{background-image:url(../img/payments/blik.svg)}.payment-provider-blik-dark{background-image:url(../img/payments/blik-dark.svg)}.payment-provider-cirrus{background-image:url(../img/payments/cirrus.svg)}.payment-provider-cirrus-dark{background-image:url(../img/payments/cirrus-dark.svg)}.payment-provider-clickandbuy{background-image:url(../img/payments/clickandbuy.svg)}.payment-provider-clickandbuy-dark{background-image:url(../img/payments/clickandbuy-dark.svg)}.payment-provider-coinkite{background-image:url(../img/payments/coinkite.svg)}.payment-provider-coinkite-dark{background-image:url(../img/payments/coinkite-dark.svg)}.payment-provider-dinersclub{background-image:url(../img/payments/dinersclub.svg)}.payment-provider-dinersclub-dark{background-image:url(../img/payments/dinersclub-dark.svg)}.payment-provider-directdebit{background-image:url(../img/payments/directdebit.svg)}.payment-provider-directdebit-dark{background-image:url(../img/payments/directdebit-dark.svg)}.payment-provider-discover{background-image:url(../img/payments/discover.svg)}.payment-provider-discover-dark{background-image:url(../img/payments/discover-dark.svg)}.payment-provider-dotpay{background-image:url(../img/payments/dotpay.svg)}.payment-provider-dotpay-dark{background-image:url(../img/payments/dotpay-dark.svg)}.payment-provider-dwolla{background-image:url(../img/payments/dwolla.svg)}.payment-provider-dwolla-dark{background-image:url(../img/payments/dwolla-dark.svg)}.payment-provider-ebay{background-image:url(../img/payments/ebay.svg)}.payment-provider-ebay-dark{background-image:url(../img/payments/ebay-dark.svg)}.payment-provider-eway{background-image:url(../img/payments/eway.svg)}.payment-provider-eway-dark{background-image:url(../img/payments/eway-dark.svg)}.payment-provider-giropay{background-image:url(../img/payments/giropay.svg)}.payment-provider-giropay-dark{background-image:url(../img/payments/giropay-dark.svg)}.payment-provider-googlewallet{background-image:url(../img/payments/googlewallet.svg)}.payment-provider-googlewallet-dark{background-image:url(../img/payments/googlewallet-dark.svg)}.payment-provider-ingenico{background-image:url(../img/payments/ingenico.svg)}.payment-provider-ingenico-dark{background-image:url(../img/payments/ingenico-dark.svg)}.payment-provider-jcb{background-image:url(../img/payments/jcb.svg)}.payment-provider-jcb-dark{background-image:url(../img/payments/jcb-dark.svg)}.payment-provider-klarna{background-image:url(../img/payments/klarna.svg)}.payment-provider-klarna-dark{background-image:url(../img/payments/klarna-dark.svg)}.payment-provider-laser{background-image:url(../img/payments/laser.svg)}.payment-provider-laser-dark{background-image:url(../img/payments/laser-dark.svg)}.payment-provider-maestro{background-image:url(../img/payments/maestro.svg)}.payment-provider-maestro-dark{background-image:url(../img/payments/maestro-dark.svg)}.payment-provider-mastercard{background-image:url(../img/payments/mastercard.svg)}.payment-provider-mastercard-dark{background-image:url(../img/payments/mastercard-dark.svg)}.payment-provider-mir{background-image:url(../img/payments/mir.svg)}.payment-provider-mir-dark{background-image:url(../img/payments/mir-dark.svg)}.payment-provider-monero{background-image:url(../img/payments/monero.svg)}.payment-provider-monero-dark{background-image:url(../img/payments/monero-dark.svg)}.payment-provider-neteller{background-image:url(../img/payments/neteller.svg)}.payment-provider-neteller-dark{background-image:url(../img/payments/neteller-dark.svg)}.payment-provider-ogone{background-image:url(../img/payments/ogone.svg)}.payment-provider-ogone-dark{background-image:url(../img/payments/ogone-dark.svg)}.payment-provider-okpay{background-image:url(../img/payments/okpay.svg)}.payment-provider-okpay-dark{background-image:url(../img/payments/okpay-dark.svg)}.payment-provider-paybox{background-image:url(../img/payments/paybox.svg)}.payment-provider-paybox-dark{background-image:url(../img/payments/paybox-dark.svg)}.payment-provider-paymill{background-image:url(../img/payments/paymill.svg)}.payment-provider-paymill-dark{background-image:url(../img/payments/paymill-dark.svg)}.payment-provider-payone{background-image:url(../img/payments/payone.svg)}.payment-provider-payone-dark{background-image:url(../img/payments/payone-dark.svg)}.payment-provider-payoneer{background-image:url(../img/payments/payoneer.svg)}.payment-provider-payoneer-dark{background-image:url(../img/payments/payoneer-dark.svg)}.payment-provider-paypal{background-image:url(../img/payments/paypal.svg)}.payment-provider-paypal-dark{background-image:url(../img/payments/paypal-dark.svg)}.payment-provider-paysafecard{background-image:url(../img/payments/paysafecard.svg)}.payment-provider-paysafecard-dark{background-image:url(../img/payments/paysafecard-dark.svg)}.payment-provider-payu{background-image:url(../img/payments/payu.svg)}.payment-provider-payu-dark{background-image:url(../img/payments/payu-dark.svg)}.payment-provider-payza{background-image:url(../img/payments/payza.svg)}.payment-provider-payza-dark{background-image:url(../img/payments/payza-dark.svg)}.payment-provider-przelewy24{background-image:url(../img/payments/przelewy24.svg)}.payment-provider-przelewy24-dark{background-image:url(../img/payments/przelewy24-dark.svg)}.payment-provider-ripple{background-image:url(../img/payments/ripple.svg)}.payment-provider-ripple-dark{background-image:url(../img/payments/ripple-dark.svg)}.payment-provider-sage{background-image:url(../img/payments/sage.svg)}.payment-provider-sage-dark{background-image:url(../img/payments/sage-dark.svg)}.payment-provider-sepa{background-image:url(../img/payments/sepa.svg)}.payment-provider-sepa-dark{background-image:url(../img/payments/sepa-dark.svg)}.payment-provider-shopify{background-image:url(../img/payments/shopify.svg)}.payment-provider-shopify-dark{background-image:url(../img/payments/shopify-dark.svg)}.payment-provider-skrill{background-image:url(../img/payments/skrill.svg)}.payment-provider-skrill-dark{background-image:url(../img/payments/skrill-dark.svg)}.payment-provider-solo{background-image:url(../img/payments/solo.svg)}.payment-provider-solo-dark{background-image:url(../img/payments/solo-dark.svg)}.payment-provider-square{background-image:url(../img/payments/square.svg)}.payment-provider-square-dark{background-image:url(../img/payments/square-dark.svg)}.payment-provider-stripe{background-image:url(../img/payments/stripe.svg)}.payment-provider-stripe-dark{background-image:url(../img/payments/stripe-dark.svg)}.payment-provider-switch{background-image:url(../img/payments/switch.svg)}.payment-provider-switch-dark{background-image:url(../img/payments/switch-dark.svg)}.payment-provider-tpay{background-image:url(../img/payments/tpay.svg)}.payment-provider-tpay-dark{background-image:url(../img/payments/tpay-dark.svg)}.payment-provider-ukash{background-image:url(../img/payments/ukash.svg)}.payment-provider-ukash-dark{background-image:url(../img/payments/ukash-dark.svg)}.payment-provider-unionpay{background-image:url(../img/payments/unionpay.svg)}.payment-provider-unionpay-dark{background-image:url(../img/payments/unionpay-dark.svg)}.payment-provider-verifone{background-image:url(../img/payments/verifone.svg)}.payment-provider-verifone-dark{background-image:url(../img/payments/verifone-dark.svg)}.payment-provider-verisign{background-image:url(../img/payments/verisign.svg)}.payment-provider-verisign-dark{background-image:url(../img/payments/verisign-dark.svg)}.payment-provider-visa{background-image:url(../img/payments/visa.svg)}.payment-provider-visa-dark{background-image:url(../img/payments/visa-dark.svg)}.payment-provider-webmoney{background-image:url(../img/payments/webmoney.svg)}.payment-provider-webmoney-dark{background-image:url(../img/payments/webmoney-dark.svg)}.payment-provider-westernunion{background-image:url(../img/payments/westernunion.svg)}.payment-provider-westernunion-dark{background-image:url(../img/payments/westernunion-dark.svg)}.payment-provider-worldpay{background-image:url(../img/payments/worldpay.svg)}.payment-provider-worldpay-dark{background-image:url(../img/payments/worldpay-dark.svg)}.payment-xs{width:2.083325rem;height:1.25rem}.payment-sm{width:3.33332rem;height:2rem}.payment-md{width:6.249975rem;height:3.75rem}.payment-lg{width:8.3333rem;height:5rem}.payment-xl{width:11.66662rem;height:7rem}", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/SwitchLanguage.vue?vue&type=style&index=0&lang=css&":
/*!*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/SwitchLanguage.vue?vue&type=style&index=0&lang=css& ***!
  \*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "\nselect {\n    width: 150px;\n    line-height: 49px;\n    height: 38px;\n    font-size: 22px;\n    outline: 0;\n    margin-bottom: 15px;\n}\n", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Darkmode.vue?vue&type=style&index=0&lang=scss&":
/*!**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Darkmode.vue?vue&type=style&index=0&lang=scss& ***!
  \**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_Darkmode_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!../../../node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Darkmode.vue?vue&type=style&index=0&lang=scss& */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Darkmode.vue?vue&type=style&index=0&lang=scss&");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_Darkmode_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_1__.default, options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_Darkmode_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_1__.default.locals || {});

/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Dropdown.vue?vue&type=style&index=0&id=ef782e08&lang=scss&scoped=true&":
/*!**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Dropdown.vue?vue&type=style&index=0&id=ef782e08&lang=scss&scoped=true& ***!
  \**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_Dropdown_vue_vue_type_style_index_0_id_ef782e08_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!../../../node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Dropdown.vue?vue&type=style&index=0&id=ef782e08&lang=scss&scoped=true& */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Dropdown.vue?vue&type=style&index=0&id=ef782e08&lang=scss&scoped=true&");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_Dropdown_vue_vue_type_style_index_0_id_ef782e08_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_1__.default, options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_Dropdown_vue_vue_type_style_index_0_id_ef782e08_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_1__.default.locals || {});

/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminLayout.vue?vue&type=style&index=0&lang=scss&":
/*!**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminLayout.vue?vue&type=style&index=0&lang=scss& ***!
  \**********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminLayout_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!../../../node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AdminLayout.vue?vue&type=style&index=0&lang=scss& */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminLayout.vue?vue&type=style&index=0&lang=scss&");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminLayout_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_1__.default, options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminLayout_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_1__.default.locals || {});

/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminVerticalLayout.vue?vue&type=style&index=0&lang=scss&":
/*!******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminVerticalLayout.vue?vue&type=style&index=0&lang=scss& ***!
  \******************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminVerticalLayout_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!../../../node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AdminVerticalLayout.vue?vue&type=style&index=0&lang=scss& */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminVerticalLayout.vue?vue&type=style&index=0&lang=scss&");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminVerticalLayout_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_1__.default, options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminVerticalLayout_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_1__.default.locals || {});

/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/SwitchLanguage.vue?vue&type=style&index=0&lang=css&":
/*!*********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/SwitchLanguage.vue?vue&type=style&index=0&lang=css& ***!
  \*********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_SwitchLanguage_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./SwitchLanguage.vue?vue&type=style&index=0&lang=css& */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/SwitchLanguage.vue?vue&type=style&index=0&lang=css&");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_SwitchLanguage_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_1__.default, options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_SwitchLanguage_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_1__.default.locals || {});

/***/ }),

/***/ "./node_modules/vue-clickaway/dist/vue-clickaway.common.js":
/*!*****************************************************************!*\
  !*** ./node_modules/vue-clickaway/dist/vue-clickaway.common.js ***!
  \*****************************************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

"use strict";


var Vue = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm.js");
Vue = 'default' in Vue ? Vue['default'] : Vue;

var version = '2.2.2';

var compatible = (/^2\./).test(Vue.version);
if (!compatible) {
  Vue.util.warn('VueClickaway ' + version + ' only supports Vue 2.x, and does not support Vue ' + Vue.version);
}



// @SECTION: implementation

var HANDLER = '_vue_clickaway_handler';

function bind(el, binding, vnode) {
  unbind(el);

  var vm = vnode.context;

  var callback = binding.value;
  if (typeof callback !== 'function') {
    if (true) {
      Vue.util.warn(
        'v-' + binding.name + '="' +
        binding.expression + '" expects a function value, ' +
        'got ' + callback
      );
    }
    return;
  }

  // @NOTE: Vue binds directives in microtasks, while UI events are dispatched
  //        in macrotasks. This causes the listener to be set up before
  //        the "origin" click event (the event that lead to the binding of
  //        the directive) arrives at the document root. To work around that,
  //        we ignore events until the end of the "initial" macrotask.
  // @REFERENCE: https://jakearchibald.com/2015/tasks-microtasks-queues-and-schedules/
  // @REFERENCE: https://github.com/simplesmiler/vue-clickaway/issues/8
  var initialMacrotaskEnded = false;
  setTimeout(function() {
    initialMacrotaskEnded = true;
  }, 0);

  el[HANDLER] = function(ev) {
    // @NOTE: this test used to be just `el.containts`, but working with path is better,
    //        because it tests whether the element was there at the time of
    //        the click, not whether it is there now, that the event has arrived
    //        to the top.
    // @NOTE: `.path` is non-standard, the standard way is `.composedPath()`
    var path = ev.path || (ev.composedPath ? ev.composedPath() : undefined);
    if (initialMacrotaskEnded && (path ? path.indexOf(el) < 0 : !el.contains(ev.target))) {
      return callback.call(vm, ev);
    }
  };

  document.documentElement.addEventListener('click', el[HANDLER], false);
}

function unbind(el) {
  document.documentElement.removeEventListener('click', el[HANDLER], false);
  delete el[HANDLER];
}

var directive = {
  bind: bind,
  update: function(el, binding) {
    if (binding.value === binding.oldValue) return;
    bind(el, binding);
  },
  unbind: unbind,
};

var mixin = {
  directives: { onClickaway: directive },
};

exports.version = version;
exports.directive = directive;
exports.mixin = mixin;

/***/ }),

/***/ "./resources/js/components/Darkmode.vue":
/*!**********************************************!*\
  !*** ./resources/js/components/Darkmode.vue ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Darkmode_vue_vue_type_template_id_2299df04___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Darkmode.vue?vue&type=template&id=2299df04& */ "./resources/js/components/Darkmode.vue?vue&type=template&id=2299df04&");
/* harmony import */ var _Darkmode_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Darkmode.vue?vue&type=script&lang=js& */ "./resources/js/components/Darkmode.vue?vue&type=script&lang=js&");
/* harmony import */ var _Darkmode_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Darkmode.vue?vue&type=style&index=0&lang=scss& */ "./resources/js/components/Darkmode.vue?vue&type=style&index=0&lang=scss&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__.default)(
  _Darkmode_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _Darkmode_vue_vue_type_template_id_2299df04___WEBPACK_IMPORTED_MODULE_0__.render,
  _Darkmode_vue_vue_type_template_id_2299df04___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Darkmode.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/Dropdown.vue":
/*!**********************************************!*\
  !*** ./resources/js/components/Dropdown.vue ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Dropdown_vue_vue_type_template_id_ef782e08_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Dropdown.vue?vue&type=template&id=ef782e08&scoped=true& */ "./resources/js/components/Dropdown.vue?vue&type=template&id=ef782e08&scoped=true&");
/* harmony import */ var _Dropdown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Dropdown.vue?vue&type=script&lang=js& */ "./resources/js/components/Dropdown.vue?vue&type=script&lang=js&");
/* harmony import */ var _Dropdown_vue_vue_type_style_index_0_id_ef782e08_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Dropdown.vue?vue&type=style&index=0&id=ef782e08&lang=scss&scoped=true& */ "./resources/js/components/Dropdown.vue?vue&type=style&index=0&id=ef782e08&lang=scss&scoped=true&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__.default)(
  _Dropdown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _Dropdown_vue_vue_type_template_id_ef782e08_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render,
  _Dropdown_vue_vue_type_template_id_ef782e08_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  "ef782e08",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Dropdown.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/Loader.vue":
/*!********************************************!*\
  !*** ./resources/js/components/Loader.vue ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Loader_vue_vue_type_template_id_e79ec684___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Loader.vue?vue&type=template&id=e79ec684& */ "./resources/js/components/Loader.vue?vue&type=template&id=e79ec684&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");

var script = {}


/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__.default)(
  script,
  _Loader_vue_vue_type_template_id_e79ec684___WEBPACK_IMPORTED_MODULE_0__.render,
  _Loader_vue_vue_type_template_id_e79ec684___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Loader.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/Logout.vue":
/*!********************************************!*\
  !*** ./resources/js/components/Logout.vue ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Logout_vue_vue_type_template_id_5cc5eeb5___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Logout.vue?vue&type=template&id=5cc5eeb5& */ "./resources/js/components/Logout.vue?vue&type=template&id=5cc5eeb5&");
/* harmony import */ var _Logout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Logout.vue?vue&type=script&lang=js& */ "./resources/js/components/Logout.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _Logout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _Logout_vue_vue_type_template_id_5cc5eeb5___WEBPACK_IMPORTED_MODULE_0__.render,
  _Logout_vue_vue_type_template_id_5cc5eeb5___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Logout.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/SwitchLanguage.vue":
/*!****************************************************!*\
  !*** ./resources/js/components/SwitchLanguage.vue ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _SwitchLanguage_vue_vue_type_template_id_0b092052___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./SwitchLanguage.vue?vue&type=template&id=0b092052& */ "./resources/js/components/SwitchLanguage.vue?vue&type=template&id=0b092052&");
/* harmony import */ var _SwitchLanguage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./SwitchLanguage.vue?vue&type=script&lang=js& */ "./resources/js/components/SwitchLanguage.vue?vue&type=script&lang=js&");
/* harmony import */ var _SwitchLanguage_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./SwitchLanguage.vue?vue&type=style&index=0&lang=css& */ "./resources/js/components/SwitchLanguage.vue?vue&type=style&index=0&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__.default)(
  _SwitchLanguage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _SwitchLanguage_vue_vue_type_template_id_0b092052___WEBPACK_IMPORTED_MODULE_0__.render,
  _SwitchLanguage_vue_vue_type_template_id_0b092052___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/SwitchLanguage.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/layout/Footer.vue":
/*!***************************************************!*\
  !*** ./resources/js/components/layout/Footer.vue ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Footer_vue_vue_type_template_id_e4df7ff6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Footer.vue?vue&type=template&id=e4df7ff6& */ "./resources/js/components/layout/Footer.vue?vue&type=template&id=e4df7ff6&");
/* harmony import */ var _Footer_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Footer.vue?vue&type=script&lang=js& */ "./resources/js/components/layout/Footer.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _Footer_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _Footer_vue_vue_type_template_id_e4df7ff6___WEBPACK_IMPORTED_MODULE_0__.render,
  _Footer_vue_vue_type_template_id_e4df7ff6___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/layout/Footer.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/layout/Navbar.vue":
/*!***************************************************!*\
  !*** ./resources/js/components/layout/Navbar.vue ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Navbar_vue_vue_type_template_id_2c4263fa___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Navbar.vue?vue&type=template&id=2c4263fa& */ "./resources/js/components/layout/Navbar.vue?vue&type=template&id=2c4263fa&");
/* harmony import */ var _Navbar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Navbar.vue?vue&type=script&lang=js& */ "./resources/js/components/layout/Navbar.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _Navbar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _Navbar_vue_vue_type_template_id_2c4263fa___WEBPACK_IMPORTED_MODULE_0__.render,
  _Navbar_vue_vue_type_template_id_2c4263fa___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/layout/Navbar.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/layout/Sidebar.vue":
/*!****************************************************!*\
  !*** ./resources/js/components/layout/Sidebar.vue ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Sidebar_vue_vue_type_template_id_65bb863c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Sidebar.vue?vue&type=template&id=65bb863c& */ "./resources/js/components/layout/Sidebar.vue?vue&type=template&id=65bb863c&");
/* harmony import */ var _Sidebar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Sidebar.vue?vue&type=script&lang=js& */ "./resources/js/components/layout/Sidebar.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _Sidebar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _Sidebar_vue_vue_type_template_id_65bb863c___WEBPACK_IMPORTED_MODULE_0__.render,
  _Sidebar_vue_vue_type_template_id_65bb863c___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/layout/Sidebar.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _HorizontalAppMenuItems_vue_vue_type_template_id_4443b401___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./HorizontalAppMenuItems.vue?vue&type=template&id=4443b401& */ "./resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue?vue&type=template&id=4443b401&");
/* harmony import */ var _HorizontalAppMenuItems_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./HorizontalAppMenuItems.vue?vue&type=script&lang=js& */ "./resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _HorizontalAppMenuItems_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _HorizontalAppMenuItems_vue_vue_type_template_id_4443b401___WEBPACK_IMPORTED_MODULE_0__.render,
  _HorizontalAppMenuItems_vue_vue_type_template_id_4443b401___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/partials/menus/admin/VerticalMenuItems.vue":
/*!****************************************************************************!*\
  !*** ./resources/js/components/partials/menus/admin/VerticalMenuItems.vue ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _VerticalMenuItems_vue_vue_type_template_id_7e688c1e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./VerticalMenuItems.vue?vue&type=template&id=7e688c1e& */ "./resources/js/components/partials/menus/admin/VerticalMenuItems.vue?vue&type=template&id=7e688c1e&");
/* harmony import */ var _VerticalMenuItems_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./VerticalMenuItems.vue?vue&type=script&lang=js& */ "./resources/js/components/partials/menus/admin/VerticalMenuItems.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _VerticalMenuItems_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _VerticalMenuItems_vue_vue_type_template_id_7e688c1e___WEBPACK_IMPORTED_MODULE_0__.render,
  _VerticalMenuItems_vue_vue_type_template_id_7e688c1e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/partials/menus/admin/VerticalMenuItems.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/layouts/AdminHorizontalLayout.vue":
/*!********************************************************!*\
  !*** ./resources/js/layouts/AdminHorizontalLayout.vue ***!
  \********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _AdminHorizontalLayout_vue_vue_type_template_id_3e22d4ae___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AdminHorizontalLayout.vue?vue&type=template&id=3e22d4ae& */ "./resources/js/layouts/AdminHorizontalLayout.vue?vue&type=template&id=3e22d4ae&");
/* harmony import */ var _AdminHorizontalLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AdminHorizontalLayout.vue?vue&type=script&lang=js& */ "./resources/js/layouts/AdminHorizontalLayout.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _AdminHorizontalLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _AdminHorizontalLayout_vue_vue_type_template_id_3e22d4ae___WEBPACK_IMPORTED_MODULE_0__.render,
  _AdminHorizontalLayout_vue_vue_type_template_id_3e22d4ae___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/layouts/AdminHorizontalLayout.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/layouts/AdminLayout.vue":
/*!**********************************************!*\
  !*** ./resources/js/layouts/AdminLayout.vue ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _AdminLayout_vue_vue_type_template_id_bafdabb6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AdminLayout.vue?vue&type=template&id=bafdabb6& */ "./resources/js/layouts/AdminLayout.vue?vue&type=template&id=bafdabb6&");
/* harmony import */ var _AdminLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AdminLayout.vue?vue&type=script&lang=js& */ "./resources/js/layouts/AdminLayout.vue?vue&type=script&lang=js&");
/* harmony import */ var _AdminLayout_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./AdminLayout.vue?vue&type=style&index=0&lang=scss& */ "./resources/js/layouts/AdminLayout.vue?vue&type=style&index=0&lang=scss&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__.default)(
  _AdminLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _AdminLayout_vue_vue_type_template_id_bafdabb6___WEBPACK_IMPORTED_MODULE_0__.render,
  _AdminLayout_vue_vue_type_template_id_bafdabb6___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/layouts/AdminLayout.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/layouts/AdminVerticalLayout.vue":
/*!******************************************************!*\
  !*** ./resources/js/layouts/AdminVerticalLayout.vue ***!
  \******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _AdminVerticalLayout_vue_vue_type_template_id_712aff3b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AdminVerticalLayout.vue?vue&type=template&id=712aff3b& */ "./resources/js/layouts/AdminVerticalLayout.vue?vue&type=template&id=712aff3b&");
/* harmony import */ var _AdminVerticalLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AdminVerticalLayout.vue?vue&type=script&lang=js& */ "./resources/js/layouts/AdminVerticalLayout.vue?vue&type=script&lang=js&");
/* harmony import */ var _AdminVerticalLayout_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./AdminVerticalLayout.vue?vue&type=style&index=0&lang=scss& */ "./resources/js/layouts/AdminVerticalLayout.vue?vue&type=style&index=0&lang=scss&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");



;


/* normalize component */

var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__.default)(
  _AdminVerticalLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _AdminVerticalLayout_vue_vue_type_template_id_712aff3b___WEBPACK_IMPORTED_MODULE_0__.render,
  _AdminVerticalLayout_vue_vue_type_template_id_712aff3b___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/layouts/AdminVerticalLayout.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/Darkmode.vue?vue&type=script&lang=js&":
/*!***********************************************************************!*\
  !*** ./resources/js/components/Darkmode.vue?vue&type=script&lang=js& ***!
  \***********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Darkmode_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Darkmode.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Darkmode.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Darkmode_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/Dropdown.vue?vue&type=script&lang=js&":
/*!***********************************************************************!*\
  !*** ./resources/js/components/Dropdown.vue?vue&type=script&lang=js& ***!
  \***********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Dropdown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Dropdown.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Dropdown.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Dropdown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/Logout.vue?vue&type=script&lang=js&":
/*!*********************************************************************!*\
  !*** ./resources/js/components/Logout.vue?vue&type=script&lang=js& ***!
  \*********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Logout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Logout.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Logout.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Logout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/SwitchLanguage.vue?vue&type=script&lang=js&":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/SwitchLanguage.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SwitchLanguage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./SwitchLanguage.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/SwitchLanguage.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SwitchLanguage_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/layout/Footer.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/layout/Footer.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Footer_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Footer.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Footer.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Footer_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/layout/Navbar.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/layout/Navbar.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Navbar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Navbar.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Navbar.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Navbar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/layout/Sidebar.vue?vue&type=script&lang=js&":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/layout/Sidebar.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Sidebar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Sidebar.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Sidebar.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Sidebar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************!*\
  !*** ./resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_HorizontalAppMenuItems_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./HorizontalAppMenuItems.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_HorizontalAppMenuItems_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/partials/menus/admin/VerticalMenuItems.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************!*\
  !*** ./resources/js/components/partials/menus/admin/VerticalMenuItems.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_VerticalMenuItems_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./VerticalMenuItems.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/partials/menus/admin/VerticalMenuItems.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_VerticalMenuItems_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/layouts/AdminHorizontalLayout.vue?vue&type=script&lang=js&":
/*!*********************************************************************************!*\
  !*** ./resources/js/layouts/AdminHorizontalLayout.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminHorizontalLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AdminHorizontalLayout.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminHorizontalLayout.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminHorizontalLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/layouts/AdminLayout.vue?vue&type=script&lang=js&":
/*!***********************************************************************!*\
  !*** ./resources/js/layouts/AdminLayout.vue?vue&type=script&lang=js& ***!
  \***********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AdminLayout.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminLayout.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/layouts/AdminVerticalLayout.vue?vue&type=script&lang=js&":
/*!*******************************************************************************!*\
  !*** ./resources/js/layouts/AdminVerticalLayout.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminVerticalLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AdminVerticalLayout.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminVerticalLayout.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminVerticalLayout_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/Darkmode.vue?vue&type=style&index=0&lang=scss&":
/*!********************************************************************************!*\
  !*** ./resources/js/components/Darkmode.vue?vue&type=style&index=0&lang=scss& ***!
  \********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_Darkmode_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/style-loader/dist/cjs.js!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!../../../node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Darkmode.vue?vue&type=style&index=0&lang=scss& */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Darkmode.vue?vue&type=style&index=0&lang=scss&");


/***/ }),

/***/ "./resources/js/components/Dropdown.vue?vue&type=style&index=0&id=ef782e08&lang=scss&scoped=true&":
/*!********************************************************************************************************!*\
  !*** ./resources/js/components/Dropdown.vue?vue&type=style&index=0&id=ef782e08&lang=scss&scoped=true& ***!
  \********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_Dropdown_vue_vue_type_style_index_0_id_ef782e08_lang_scss_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/style-loader/dist/cjs.js!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!../../../node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Dropdown.vue?vue&type=style&index=0&id=ef782e08&lang=scss&scoped=true& */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Dropdown.vue?vue&type=style&index=0&id=ef782e08&lang=scss&scoped=true&");


/***/ }),

/***/ "./resources/js/layouts/AdminLayout.vue?vue&type=style&index=0&lang=scss&":
/*!********************************************************************************!*\
  !*** ./resources/js/layouts/AdminLayout.vue?vue&type=style&index=0&lang=scss& ***!
  \********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminLayout_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/style-loader/dist/cjs.js!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!../../../node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AdminLayout.vue?vue&type=style&index=0&lang=scss& */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminLayout.vue?vue&type=style&index=0&lang=scss&");


/***/ }),

/***/ "./resources/js/layouts/AdminVerticalLayout.vue?vue&type=style&index=0&lang=scss&":
/*!****************************************************************************************!*\
  !*** ./resources/js/layouts/AdminVerticalLayout.vue?vue&type=style&index=0&lang=scss& ***!
  \****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_2_node_modules_sass_loader_dist_cjs_js_clonedRuleSet_12_0_rules_0_use_3_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminVerticalLayout_vue_vue_type_style_index_0_lang_scss___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/style-loader/dist/cjs.js!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!../../../node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AdminVerticalLayout.vue?vue&type=style&index=0&lang=scss& */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[2]!./node_modules/sass-loader/dist/cjs.js??clonedRuleSet-12[0].rules[0].use[3]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminVerticalLayout.vue?vue&type=style&index=0&lang=scss&");


/***/ }),

/***/ "./resources/js/components/SwitchLanguage.vue?vue&type=style&index=0&lang=css&":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/SwitchLanguage.vue?vue&type=style&index=0&lang=css& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_9_0_rules_0_use_2_node_modules_vue_loader_lib_index_js_vue_loader_options_SwitchLanguage_vue_vue_type_style_index_0_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/style-loader/dist/cjs.js!../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./SwitchLanguage.vue?vue&type=style&index=0&lang=css& */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[1]!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-9[0].rules[0].use[2]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/SwitchLanguage.vue?vue&type=style&index=0&lang=css&");


/***/ }),

/***/ "./resources/js/components/Darkmode.vue?vue&type=template&id=2299df04&":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/Darkmode.vue?vue&type=template&id=2299df04& ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Darkmode_vue_vue_type_template_id_2299df04___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Darkmode_vue_vue_type_template_id_2299df04___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Darkmode_vue_vue_type_template_id_2299df04___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Darkmode.vue?vue&type=template&id=2299df04& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Darkmode.vue?vue&type=template&id=2299df04&");


/***/ }),

/***/ "./resources/js/components/Dropdown.vue?vue&type=template&id=ef782e08&scoped=true&":
/*!*****************************************************************************************!*\
  !*** ./resources/js/components/Dropdown.vue?vue&type=template&id=ef782e08&scoped=true& ***!
  \*****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Dropdown_vue_vue_type_template_id_ef782e08_scoped_true___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Dropdown_vue_vue_type_template_id_ef782e08_scoped_true___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Dropdown_vue_vue_type_template_id_ef782e08_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Dropdown.vue?vue&type=template&id=ef782e08&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Dropdown.vue?vue&type=template&id=ef782e08&scoped=true&");


/***/ }),

/***/ "./resources/js/components/Loader.vue?vue&type=template&id=e79ec684&":
/*!***************************************************************************!*\
  !*** ./resources/js/components/Loader.vue?vue&type=template&id=e79ec684& ***!
  \***************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Loader_vue_vue_type_template_id_e79ec684___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Loader_vue_vue_type_template_id_e79ec684___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Loader_vue_vue_type_template_id_e79ec684___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Loader.vue?vue&type=template&id=e79ec684& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Loader.vue?vue&type=template&id=e79ec684&");


/***/ }),

/***/ "./resources/js/components/Logout.vue?vue&type=template&id=5cc5eeb5&":
/*!***************************************************************************!*\
  !*** ./resources/js/components/Logout.vue?vue&type=template&id=5cc5eeb5& ***!
  \***************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Logout_vue_vue_type_template_id_5cc5eeb5___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Logout_vue_vue_type_template_id_5cc5eeb5___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Logout_vue_vue_type_template_id_5cc5eeb5___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Logout.vue?vue&type=template&id=5cc5eeb5& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Logout.vue?vue&type=template&id=5cc5eeb5&");


/***/ }),

/***/ "./resources/js/components/SwitchLanguage.vue?vue&type=template&id=0b092052&":
/*!***********************************************************************************!*\
  !*** ./resources/js/components/SwitchLanguage.vue?vue&type=template&id=0b092052& ***!
  \***********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SwitchLanguage_vue_vue_type_template_id_0b092052___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SwitchLanguage_vue_vue_type_template_id_0b092052___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SwitchLanguage_vue_vue_type_template_id_0b092052___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./SwitchLanguage.vue?vue&type=template&id=0b092052& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/SwitchLanguage.vue?vue&type=template&id=0b092052&");


/***/ }),

/***/ "./resources/js/components/layout/Footer.vue?vue&type=template&id=e4df7ff6&":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/layout/Footer.vue?vue&type=template&id=e4df7ff6& ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Footer_vue_vue_type_template_id_e4df7ff6___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Footer_vue_vue_type_template_id_e4df7ff6___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Footer_vue_vue_type_template_id_e4df7ff6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Footer.vue?vue&type=template&id=e4df7ff6& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Footer.vue?vue&type=template&id=e4df7ff6&");


/***/ }),

/***/ "./resources/js/components/layout/Navbar.vue?vue&type=template&id=2c4263fa&":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/layout/Navbar.vue?vue&type=template&id=2c4263fa& ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Navbar_vue_vue_type_template_id_2c4263fa___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Navbar_vue_vue_type_template_id_2c4263fa___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Navbar_vue_vue_type_template_id_2c4263fa___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Navbar.vue?vue&type=template&id=2c4263fa& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Navbar.vue?vue&type=template&id=2c4263fa&");


/***/ }),

/***/ "./resources/js/components/layout/Sidebar.vue?vue&type=template&id=65bb863c&":
/*!***********************************************************************************!*\
  !*** ./resources/js/components/layout/Sidebar.vue?vue&type=template&id=65bb863c& ***!
  \***********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Sidebar_vue_vue_type_template_id_65bb863c___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Sidebar_vue_vue_type_template_id_65bb863c___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Sidebar_vue_vue_type_template_id_65bb863c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Sidebar.vue?vue&type=template&id=65bb863c& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Sidebar.vue?vue&type=template&id=65bb863c&");


/***/ }),

/***/ "./resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue?vue&type=template&id=4443b401&":
/*!****************************************************************************************************************!*\
  !*** ./resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue?vue&type=template&id=4443b401& ***!
  \****************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_HorizontalAppMenuItems_vue_vue_type_template_id_4443b401___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_HorizontalAppMenuItems_vue_vue_type_template_id_4443b401___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_HorizontalAppMenuItems_vue_vue_type_template_id_4443b401___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./HorizontalAppMenuItems.vue?vue&type=template&id=4443b401& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue?vue&type=template&id=4443b401&");


/***/ }),

/***/ "./resources/js/components/partials/menus/admin/VerticalMenuItems.vue?vue&type=template&id=7e688c1e&":
/*!***********************************************************************************************************!*\
  !*** ./resources/js/components/partials/menus/admin/VerticalMenuItems.vue?vue&type=template&id=7e688c1e& ***!
  \***********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_VerticalMenuItems_vue_vue_type_template_id_7e688c1e___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_VerticalMenuItems_vue_vue_type_template_id_7e688c1e___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_VerticalMenuItems_vue_vue_type_template_id_7e688c1e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./VerticalMenuItems.vue?vue&type=template&id=7e688c1e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/partials/menus/admin/VerticalMenuItems.vue?vue&type=template&id=7e688c1e&");


/***/ }),

/***/ "./resources/js/layouts/AdminHorizontalLayout.vue?vue&type=template&id=3e22d4ae&":
/*!***************************************************************************************!*\
  !*** ./resources/js/layouts/AdminHorizontalLayout.vue?vue&type=template&id=3e22d4ae& ***!
  \***************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminHorizontalLayout_vue_vue_type_template_id_3e22d4ae___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminHorizontalLayout_vue_vue_type_template_id_3e22d4ae___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminHorizontalLayout_vue_vue_type_template_id_3e22d4ae___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AdminHorizontalLayout.vue?vue&type=template&id=3e22d4ae& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminHorizontalLayout.vue?vue&type=template&id=3e22d4ae&");


/***/ }),

/***/ "./resources/js/layouts/AdminLayout.vue?vue&type=template&id=bafdabb6&":
/*!*****************************************************************************!*\
  !*** ./resources/js/layouts/AdminLayout.vue?vue&type=template&id=bafdabb6& ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminLayout_vue_vue_type_template_id_bafdabb6___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminLayout_vue_vue_type_template_id_bafdabb6___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminLayout_vue_vue_type_template_id_bafdabb6___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AdminLayout.vue?vue&type=template&id=bafdabb6& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminLayout.vue?vue&type=template&id=bafdabb6&");


/***/ }),

/***/ "./resources/js/layouts/AdminVerticalLayout.vue?vue&type=template&id=712aff3b&":
/*!*************************************************************************************!*\
  !*** ./resources/js/layouts/AdminVerticalLayout.vue?vue&type=template&id=712aff3b& ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminVerticalLayout_vue_vue_type_template_id_712aff3b___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminVerticalLayout_vue_vue_type_template_id_712aff3b___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AdminVerticalLayout_vue_vue_type_template_id_712aff3b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./AdminVerticalLayout.vue?vue&type=template&id=712aff3b& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminVerticalLayout.vue?vue&type=template&id=712aff3b&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Darkmode.vue?vue&type=template&id=2299df04&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Darkmode.vue?vue&type=template&id=2299df04& ***!
  \********************************************************************************************************************************************************************************************************************/
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
    "a",
    {
      staticClass: "dark-mode-btn nav-link px-0",
      attrs: { href: "javascript:void(0)" },
      on: {
        click: function($event) {
          $event.preventDefault()
          return _vm.toggleDarkMode($event)
        }
      }
    },
    [
      _vm.darkMode
        ? _c(
            "svg",
            {
              staticClass: "icon icon-tabler icon-tabler-brightness-down",
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
                attrs: { stroke: "none", d: "M0 0h24v24H0z", fill: "none" }
              }),
              _vm._v(" "),
              _c("circle", { attrs: { cx: "12", cy: "12", r: "3" } }),
              _vm._v(" "),
              _c("line", {
                attrs: { x1: "12", y1: "5", x2: "12", y2: "5.01" }
              }),
              _vm._v(" "),
              _c("line", {
                attrs: { x1: "17", y1: "7", x2: "17", y2: "7.01" }
              }),
              _vm._v(" "),
              _c("line", {
                attrs: { x1: "19", y1: "12", x2: "19", y2: "12.01" }
              }),
              _vm._v(" "),
              _c("line", {
                attrs: { x1: "17", y1: "17", x2: "17", y2: "17.01" }
              }),
              _vm._v(" "),
              _c("line", {
                attrs: { x1: "12", y1: "19", x2: "12", y2: "19.01" }
              }),
              _vm._v(" "),
              _c("line", {
                attrs: { x1: "7", y1: "17", x2: "7", y2: "17.01" }
              }),
              _vm._v(" "),
              _c("line", {
                attrs: { x1: "5", y1: "12", x2: "5", y2: "12.01" }
              }),
              _vm._v(" "),
              _c("line", { attrs: { x1: "7", y1: "7", x2: "7", y2: "7.01" } })
            ]
          )
        : _c(
            "svg",
            {
              staticClass: "icon icon-tabler icon-tabler-moon",
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
                attrs: { stroke: "none", d: "M0 0h24v24H0z", fill: "none" }
              }),
              _vm._v(" "),
              _c("path", {
                attrs: {
                  d:
                    "M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"
                }
              })
            ]
          )
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Dropdown.vue?vue&type=template&id=ef782e08&scoped=true&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Dropdown.vue?vue&type=template&id=ef782e08&scoped=true& ***!
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
    "li",
    {
      directives: [
        {
          name: "on-clickaway",
          rawName: "v-on-clickaway",
          value: _vm.closeDropdown,
          expression: "closeDropdown"
        }
      ],
      staticClass: "nav-item dropdown",
      class: _vm.sidebarDropdown ? "active" : ""
    },
    [
      _c(
        "a",
        {
          staticClass: "nav-link dropdown-toggle",
          class: { show: _vm.sidebarDropdown },
          attrs: {
            href: "javascript:void(0)",
            "data-bs-toggle": "dropdown",
            role: "button",
            "aria-expanded": "false"
          },
          on: {
            click: function($event) {
              $event.preventDefault()
              _vm.sidebarDropdown = !_vm.sidebarDropdown
            }
          }
        },
        [
          _c(
            "span",
            { staticClass: "nav-link-icon d-md-none d-lg-inline-block" },
            [_vm._t("icon")],
            2
          ),
          _vm._v(" "),
          _c("span", { staticClass: "nav-link-title" }, [
            _vm._v("\n            " + _vm._s(_vm.$t(_vm.title)) + "\n        ")
          ])
        ]
      ),
      _vm._v(" "),
      _c(
        "div",
        { staticClass: "dropdown-menu", class: { show: _vm.sidebarDropdown } },
        [
          _c("div", { staticClass: "dropdown-menu-columns" }, [
            _c(
              "div",
              { staticClass: "dropdown-menu-column" },
              [_vm._t("default")],
              2
            )
          ])
        ]
      )
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Loader.vue?vue&type=template&id=e79ec684&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Loader.vue?vue&type=template&id=e79ec684& ***!
  \******************************************************************************************************************************************************************************************************************/
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
    return _c(
      "div",
      {
        staticStyle: {
          height: "50px",
          width: "100%",
          display: "flex",
          "justify-content": "center",
          "align-items": "center"
        }
      },
      [
        _c(
          "span",
          {
            staticClass: "input-icon-addon text-center",
            staticStyle: { display: "contents" }
          },
          [
            _c("div", {
              staticClass: "spinner-border spinner-border-sm text-dark mr-3",
              staticStyle: {
                width: "30px",
                height: "30px",
                "border-width": "2px"
              },
              attrs: { role: "status" }
            })
          ]
        )
      ]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Logout.vue?vue&type=template&id=5cc5eeb5&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Logout.vue?vue&type=template&id=5cc5eeb5& ***!
  \******************************************************************************************************************************************************************************************************************/
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
    "a",
    {
      class: _vm.linkClass,
      attrs: { href: "javascript:void(0)" },
      on: {
        click: function($event) {
          $event.preventDefault()
          return _vm.logout($event)
        }
      }
    },
    [
      _vm._t("default"),
      _vm._v(" "),
      _vm.title ? _c("span", [_vm._v(_vm._s(_vm.$t("logout")))]) : _vm._e()
    ],
    2
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/SwitchLanguage.vue?vue&type=template&id=0b092052&":
/*!**************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/SwitchLanguage.vue?vue&type=template&id=0b092052& ***!
  \**************************************************************************************************************************************************************************************************************************/
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
    "select",
    {
      staticClass: "form-select",
      on: {
        change: function($event) {
          return _vm.onChange($event)
        }
      }
    },
    _vm._l(_vm.langs, function(lang, i) {
      return _c(
        "option",
        {
          key: "lang-" + i,
          domProps: { value: lang, selected: lang == _vm.selectedLanguage }
        },
        [_vm._v("\n        " + _vm._s(lang.toUpperCase()) + "\n    ")]
      )
    }),
    0
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Footer.vue?vue&type=template&id=e4df7ff6&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Footer.vue?vue&type=template&id=e4df7ff6& ***!
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
    return _c(
      "footer",
      { staticClass: "footer footer-transparent d-print-none" },
      [
        _c("div", { staticClass: "container" }, [
          _c(
            "div",
            {
              staticClass: "row text-center align-items-center flex-row-reverse"
            },
            [
              _c("div", { staticClass: "col-lg-auto ms-lg-auto" }, [
                _c("ul", { staticClass: "list-inline list-inline-dots mb-0" }, [
                  _c("li", { staticClass: "list-inline-item" }, [
                    _c(
                      "a",
                      {
                        staticClass: "link-secondary",
                        attrs: { href: "#", target: "_blank", rel: "noopener" }
                      },
                      [_vm._v("Source code")]
                    )
                  ])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "col-12 col-lg-auto mt-3 mt-lg-0" }, [
                _c("ul", { staticClass: "list-inline list-inline-dots mb-0" }, [
                  _c("li", { staticClass: "list-inline-item" }, [
                    _vm._v(
                      "\n                        Copyright © 2021\n                        "
                    ),
                    _c(
                      "a",
                      {
                        staticClass: "link-secondary",
                        attrs: { href: "#", target: "_blank" }
                      },
                      [_vm._v("AWL Zentrum")]
                    ),
                    _vm._v(
                      ".\n                        All rights reserved.\n                    "
                    )
                  ])
                ])
              ])
            ]
          )
        ])
      ]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Navbar.vue?vue&type=template&id=2c4263fa&":
/*!*************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Navbar.vue?vue&type=template&id=2c4263fa& ***!
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
  return _c(
    "header",
    {
      staticClass: "navbar navbar-expand-md d-none d-lg-flex d-print-none",
      style: {
        "background-color": _vm.setting.navbar_bg,
        color: _vm.setting.navbar_text_color
      }
    },
    [
      _c("div", { staticClass: "container-fluid" }, [
        _vm._m(0),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "navbar-nav flex-row order-md-last align-items-center"
          },
          [
            _c(
              "div",
              { staticClass: "btn-list me-1" },
              [_c("switch-language")],
              1
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "nav-item dropdown d-none d-md-flex me-3" },
              [_c("darkmode")],
              1
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "nav-item dropdown d-none d-md-flex me-3" },
              [
                _c(
                  "a",
                  {
                    staticClass: "nav-link px-0 show me-2",
                    attrs: {
                      href: "#",
                      "data-bs-toggle": "dropdown",
                      tabindex: "-1",
                      "aria-label": "Show notifications",
                      "aria-expanded": "true"
                    },
                    on: { click: _vm.toggleNotification }
                  },
                  [
                    _c(
                      "svg",
                      {
                        staticClass: "icon",
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
                              "M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"
                          }
                        }),
                        _vm._v(" "),
                        _c("path", { attrs: { d: "M9 17v1a3 3 0 0 0 6 0v-1" } })
                      ]
                    ),
                    _vm._v(" "),
                    _c("span", { staticClass: "badge bg-red" })
                  ]
                ),
                _vm._v(" "),
                _c(
                  "div",
                  {
                    staticClass:
                      "dropdown-menu dropdown-menu-end dropdown-menu-card",
                    class: { show: _vm.notification },
                    attrs: { "data-bs-popper": "none" }
                  },
                  [_vm._m(1)]
                )
              ]
            ),
            _vm._v(" "),
            _c("div", { staticClass: "nav-item dropdown" }, [
              _c(
                "a",
                {
                  staticClass: "nav-link d-flex lh-1 text-reset p-0",
                  class: { show: _vm.navDropDown },
                  attrs: {
                    href: "javascript:void(0)",
                    "data-bs-toggle": "dropdown",
                    "aria-label": "Open user menu"
                  },
                  on: {
                    click: function($event) {
                      $event.preventDefault()
                      _vm.navDropDown = !_vm.navDropDown
                    }
                  }
                },
                [
                  _c("span", {
                    staticClass: "avatar avatar-sm",
                    style: { backgroundImage: "url(" + _vm.user.image + ")" }
                  }),
                  _vm._v(" "),
                  _c("div", { staticClass: "d-none d-xl-block ps-2" }, [
                    _c("div", [_vm._v(_vm._s(_vm.user.name))]),
                    _vm._v(" "),
                    _c("div", { staticClass: "mt-1 small text-muted" }, [
                      _vm._v(_vm._s(_vm.user.email))
                    ])
                  ])
                ]
              ),
              _vm._v(" "),
              _vm.navDropDown
                ? _c(
                    "div",
                    {
                      directives: [
                        {
                          name: "on-clickaway",
                          rawName: "v-on-clickaway",
                          value: _vm.away,
                          expression: "away"
                        }
                      ],
                      staticClass:
                        "show dropdown-menu dropdown-menu-end dropdown-menu-arrow",
                      attrs: { "data-bs-popper": "none" }
                    },
                    [
                      _vm.checkPermisssion("profile-show")
                        ? _c(
                            "router-link",
                            {
                              staticClass: "dropdown-item",
                              attrs: { to: { name: "user-profile" } },
                              nativeOn: {
                                click: function($event) {
                                  _vm.navDropDown = false
                                }
                              }
                            },
                            [
                              _c(
                                "svg",
                                {
                                  staticClass:
                                    "icon icon-tabler icon-tabler-user",
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
                                  _c("circle", {
                                    attrs: { cx: "12", cy: "7", r: "4" }
                                  }),
                                  _vm._v(" "),
                                  _c("path", {
                                    attrs: {
                                      d:
                                        "M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"
                                    }
                                  })
                                ]
                              ),
                              _vm._v(
                                " \n                        " +
                                  _vm._s(_vm.$t("profile")) +
                                  "\n                    "
                              )
                            ]
                          )
                        : _vm._e(),
                      _vm._v(" "),
                      _vm.checkPermisssion("profile-show")
                        ? _c("div", { staticClass: "dropdown-divider" })
                        : _vm._e(),
                      _vm._v(" "),
                      _c("logout", { attrs: { linkClass: "dropdown-item" } }, [
                        _c(
                          "svg",
                          {
                            staticClass: "icon icon-tabler icon-tabler-logout",
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
                                  "M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"
                              }
                            }),
                            _vm._v(" "),
                            _c("path", {
                              attrs: { d: "M7 12h14l-3 -3m0 6l3 -3" }
                            })
                          ]
                        ),
                        _vm._v(" \n                    ")
                      ])
                    ],
                    1
                  )
                : _vm._e()
            ])
          ]
        ),
        _vm._v(" "),
        _vm._m(2)
      ])
    ]
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "button",
      {
        staticClass: "navbar-toggler",
        attrs: {
          type: "button",
          "data-bs-toggle": "collapse",
          "data-bs-target": "#navbar-menu"
        }
      },
      [_c("span", { staticClass: "navbar-toggler-icon" })]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "card" }, [
      _c("div", { staticClass: "card-body" }, [
        _vm._v(
          "\n                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur\n                            exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet\n                            debitis et magni maxime necessitatibus ullam.\n                        "
        )
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      { staticClass: "collapse navbar-collapse", attrs: { id: "navbar-menu" } },
      [
        _c("div", [
          _c("div", { staticClass: "badge bg-primary" }, [_vm._v("Role")])
        ])
      ]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Sidebar.vue?vue&type=template&id=65bb863c&":
/*!**************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/layout/Sidebar.vue?vue&type=template&id=65bb863c& ***!
  \**************************************************************************************************************************************************************************************************************************/
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
    "aside",
    {
      staticClass: "navbar navbar-vertical navbar-expand-lg navbar-dark",
      style: { "background-color": _vm.setting.sidebar_bg }
    },
    [
      _c("div", { staticClass: "container-fluid" }, [
        _c(
          "button",
          {
            staticClass: "navbar-toggler",
            class: _vm.navToggler ? "" : "collapsed",
            attrs: {
              "aria-expanded": _vm.navToggler ? true : false,
              type: "button",
              "data-bs-toggle": "collapse",
              "data-bs-target": "#navbar-menu"
            },
            on: {
              click: function($event) {
                $event.preventDefault()
                _vm.navToggler = !_vm.navToggler
              }
            }
          },
          [_c("span", { staticClass: "navbar-toggler-icon" })]
        ),
        _vm._v(" "),
        _c("h1", { staticClass: "navbar-brand" }, [
          _c(
            "a",
            {
              attrs: { href: "javascript:void(0)" },
              on: {
                click: function($event) {
                  return _vm.$router.push({ name: "home" })
                }
              }
            },
            [
              _c("div", { attrs: { width: "110", height: "32" } }, [
                !_vm.darkMode && _vm.setting.logo
                  ? _c("img", { attrs: { src: _vm.setting.logo, alt: "" } })
                  : _vm.darkMode && _vm.setting.dark_logo
                  ? _c("img", {
                      attrs: { src: _vm.setting.dark_logo, alt: "" }
                    })
                  : _c("img", { attrs: { src: _vm.logo, alt: "" } })
              ])
            ]
          )
        ]),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "collapse navbar-collapse",
            class: { show: _vm.navToggler },
            attrs: { id: "navbar-menu" }
          },
          [
            _vm.userType == "admin" || _vm.userType == "staff"
              ? _c("app-menu-items", { attrs: { listClass: "pt-lg-3" } })
              : _vm._e(),
            _vm._v(" "),
            _vm.userType == "admin" || _vm.userType == "student"
              ? _c("students-menu-items", { attrs: { listClass: "pt-lg-3" } })
              : _vm._e()
          ],
          1
        )
      ])
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue?vue&type=template&id=4443b401&":
/*!*******************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/partials/menus/admin/HorizontalAppMenuItems.vue?vue&type=template&id=4443b401& ***!
  \*******************************************************************************************************************************************************************************************************************************************************/
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
    "ul",
    { staticClass: "navbar-nav", class: _vm.listClass },
    [
      _c(
        "li",
        { staticClass: "nav-item" },
        [
          _vm.checkPermisssion("dashboard")
            ? _c(
                "router-link",
                { staticClass: "nav-link", attrs: { to: { name: "home" } } },
                [
                  _c(
                    "span",
                    {
                      staticClass: "nav-link-icon d-md-none d-lg-inline-block"
                    },
                    [
                      _c(
                        "svg",
                        {
                          staticClass: "icon",
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
                          _c("polyline", {
                            attrs: { points: "5 12 3 12 12 3 21 12 19 12" }
                          }),
                          _vm._v(" "),
                          _c("path", {
                            attrs: {
                              d: "M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"
                            }
                          }),
                          _vm._v(" "),
                          _c("path", {
                            attrs: {
                              d: "M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"
                            }
                          })
                        ]
                      )
                    ]
                  ),
                  _vm._v(" "),
                  _c("span", { staticClass: "nav-link-title" }, [
                    _vm._v(
                      "\n                " +
                        _vm._s(_vm.$t("dashboard")) +
                        "\n            "
                    )
                  ])
                ]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: "Dropdown" },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon",
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
                      _c("polyline", {
                        attrs: {
                          points: "12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
                        }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "20", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "12", y2: "21" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "4", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "16", y1: "5.25", x2: "8", y2: "9.75" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _c(
            "router-link",
            { staticClass: "dropdown-item", attrs: { to: { name: "page" } } },
            [_vm._v("\n            Demo Page\n        ")]
          ),
          _vm._v(" "),
          _c(
            "router-link",
            { staticClass: "dropdown-item", attrs: { to: { name: "page2" } } },
            [_vm._v("\n            Demo Page 2\n        ")]
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: "Attendence" },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon",
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
                      _c("polyline", {
                        attrs: {
                          points: "12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
                        }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "20", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "12", y2: "21" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "4", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "16", y1: "5.25", x2: "8", y2: "9.75" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _vm.checkPermisssion("student-attendance-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "attendence-student" } }
                },
                [_vm._v("\n            Student Attandance\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("teacher-attendance-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "attendence-teacher" } }
                },
                [_vm._v("\n            Teacher Attandance\n        ")]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: "Academic" },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon icon-tabler icon-tabler-book",
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
                        attrs: { d: "M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" }
                      }),
                      _vm._v(" "),
                      _c("path", {
                        attrs: { d: "M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "3", y1: "6", x2: "3", y2: "19" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "6", x2: "12", y2: "19" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "21", y1: "6", x2: "21", y2: "19" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _vm.checkPermisssion("session-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "academic-session" } }
                },
                [_vm._v("\n            Session\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("department-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "department" } }
                },
                [_vm._v("\n            Department\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("class-routine-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "academic-routine" } }
                },
                [_vm._v("\n            Routine\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("class-room-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "academic-classroom" } }
                },
                [_vm._v("\n            Class Room\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("class-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "academic-class" } }
                },
                [_vm._v("\n            Class\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("section-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "academic-section" } }
                },
                [_vm._v("\n            Section\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("subject-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "academic-subject" } }
                },
                [_vm._v("\n            Subject\n        ")]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: _vm.$t("users") },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon",
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
                      _c("polyline", {
                        attrs: {
                          points: "12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
                        }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "20", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "12", y2: "21" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "4", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "16", y1: "5.25", x2: "8", y2: "9.75" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _c(
            "router-link",
            { staticClass: "dropdown-item", attrs: { to: { name: "user" } } },
            [_vm._v("\n            Admin\n        ")]
          ),
          _vm._v(" "),
          _vm.checkPermisssion("student-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "user-student" } }
                },
                [_vm._v("\n           Student\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("guardian-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "user-guardian" } }
                },
                [_vm._v("\n           Guardian\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("teacher-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "user-teacher" } }
                },
                [_vm._v("\n            Teacher\n        ")]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: _vm.$t("Exam") },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon",
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
                      _c("polyline", {
                        attrs: {
                          points: "12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
                        }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "20", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "12", y2: "21" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "4", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "16", y1: "5.25", x2: "8", y2: "9.75" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _vm.checkPermisssion("exam-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "exam" } }
                },
                [_vm._v("\n            Exam List\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("term-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "exam-term" } }
                },
                [_vm._v("\n            Term\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("exam-schedule-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "exam-schedule" } }
                },
                [_vm._v("\n            Schedule\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("exam-mark-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "exam-mark" } }
                },
                [_vm._v("\n            Mark\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("exam-result-rule-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "exam-result-rule" } }
                },
                [_vm._v("\n            Result Rule\n        ")]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: _vm.$t("Report") },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon",
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
                      _c("polyline", {
                        attrs: {
                          points: "12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
                        }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "20", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "12", y2: "21" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "4", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "16", y1: "5.25", x2: "8", y2: "9.75" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _vm.checkPermisssion("student-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-student" } }
                },
                [_vm._v("\n            Student\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("class-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-class" } }
                },
                [_vm._v("\n            Class\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("class-routine-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-class-routine" } }
                },
                [_vm._v("\n            Class Routine\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("teacher-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-teacher" } }
                },
                [_vm._v("\n            Teacher\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("student-attendance-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-student-attendance" } }
                },
                [_vm._v("\n            Student Attendance\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("teacher-attendance-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-teacher-attendance" } }
                },
                [_vm._v("\n            Teacher Attendance\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("exam-routine-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-exam-routine" } }
                },
                [_vm._v("\n            Exam Routine\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("exam-result-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-exam-result" } }
                },
                [_vm._v("\n            Exam Result\n        ")]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: _vm.$t("Message") },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon",
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
                      _c("polyline", {
                        attrs: {
                          points: "12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
                        }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "20", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "12", y2: "21" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "4", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "16", y1: "5.25", x2: "8", y2: "9.75" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _vm.checkPermisssion("message-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "message" } }
                },
                [_vm._v("\n            Message\n        ")]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: _vm.$t("Announcement") },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon",
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
                      _c("polyline", {
                        attrs: {
                          points: "12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
                        }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "20", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "12", y2: "21" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "4", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "16", y1: "5.25", x2: "8", y2: "9.75" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _vm.checkPermisssion("event-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "event" } }
                },
                [_vm._v("\n            Event\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("calendar-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "calendar" } }
                },
                [_vm._v("\n            Calendar\n        ")]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _vm.checkPermisssion("user-list")
        ? _c(
            "li",
            { staticClass: "nav-item" },
            [
              _c(
                "router-link",
                { staticClass: "nav-link", attrs: { to: { name: "user" } } },
                [
                  _c(
                    "svg",
                    {
                      staticClass:
                        "nav-link-icon d-md-none d-lg-inline-block icon icon-tabler icon-tabler-users",
                      attrs: {
                        xmlns: "http://www.w3.org/2000/svg",
                        width: "24",
                        height: "24",
                        viewBox: "0 0 24 24",
                        "stroke-width": "1.5",
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
                      _c("circle", { attrs: { cx: "9", cy: "7", r: "4" } }),
                      _vm._v(" "),
                      _c("path", {
                        attrs: {
                          d: "M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"
                        }
                      }),
                      _vm._v(" "),
                      _c("path", { attrs: { d: "M16 3.13a4 4 0 0 1 0 7.75" } }),
                      _vm._v(" "),
                      _c("path", {
                        attrs: { d: "M21 21v-2a4 4 0 0 0 -3 -3.85" }
                      })
                    ]
                  ),
                  _vm._v(" "),
                  _c("span", { staticClass: "nav-link-title" }, [
                    _vm._v(
                      "\n                " +
                        _vm._s(_vm.$t("users")) +
                        "\n            "
                    )
                  ])
                ]
              )
            ],
            1
          )
        : _vm._e(),
      _vm._v(" "),
      _vm.checkPermisssion("role-list")
        ? _c(
            "li",
            { staticClass: "nav-item" },
            [
              _c(
                "router-link",
                { staticClass: "nav-link", attrs: { to: { name: "role" } } },
                [
                  _c(
                    "span",
                    {
                      staticClass: "nav-link-icon d-md-none d-lg-inline-block"
                    },
                    [
                      _c(
                        "svg",
                        {
                          staticClass: "icon icon-tabler icon-tabler-lock",
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
                          _c("rect", {
                            attrs: {
                              x: "5",
                              y: "11",
                              width: "14",
                              height: "10",
                              rx: "2"
                            }
                          }),
                          _vm._v(" "),
                          _c("circle", {
                            attrs: { cx: "12", cy: "16", r: "1" }
                          }),
                          _vm._v(" "),
                          _c("path", {
                            attrs: { d: "M8 11v-4a4 4 0 0 1 8 0v4" }
                          })
                        ]
                      )
                    ]
                  ),
                  _vm._v(" "),
                  _c("span", { staticClass: "nav-link-title" }, [
                    _vm._v(
                      "\n                " +
                        _vm._s(_vm.$t("roles")) +
                        "\n            "
                    )
                  ])
                ]
              )
            ],
            1
          )
        : _vm._e(),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: _vm.$t("setting") },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon icon-tabler icon-tabler-settings",
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
                            "M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"
                        }
                      }),
                      _vm._v(" "),
                      _c("circle", { attrs: { cx: "12", cy: "12", r: "3" } })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _c(
            "router-link",
            {
              staticClass: "dropdown-item",
              attrs: { to: { name: "setting-admin" } }
            },
            [
              _vm._v(
                "\n            " +
                  _vm._s(_vm.$t("admin_setting")) +
                  "\n        "
              )
            ]
          ),
          _vm._v(" "),
          _c(
            "router-link",
            {
              staticClass: "dropdown-item",
              attrs: { to: { name: "setting-website" } }
            },
            [
              _vm._v(
                "\n            " +
                  _vm._s(_vm.$t("website_setting")) +
                  "\n        "
              )
            ]
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "li",
        { staticClass: "nav-item" },
        [
          _c("logout", { attrs: { linkClass: "nav-link", title: false } }, [
            _c(
              "span",
              { staticClass: "nav-link-icon d-md-none d-lg-inline-block" },
              [
                _c(
                  "svg",
                  {
                    staticClass: "icon icon-tabler icon-tabler-logout",
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
                          "M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", { attrs: { d: "M7 12h14l-3 -3m0 6l3 -3" } })
                  ]
                )
              ]
            ),
            _vm._v(" "),
            _c("span", { staticClass: "nav-link-title" }, [
              _vm._v(
                "\n                " +
                  _vm._s(_vm.$t("logout")) +
                  "\n            "
              )
            ])
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c("li", { staticClass: "nav-item" }, [
        _c(
          "button",
          { staticClass: "btn btn-primary", on: { click: _vm.visitWebsite } },
          [
            _c("span", { staticClass: "nav-link-title" }, [
              _vm._v(
                "\n                " +
                  _vm._s(_vm.$t("visit_website")) +
                  "\n            "
              )
            ])
          ]
        )
      ])
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/partials/menus/admin/VerticalMenuItems.vue?vue&type=template&id=7e688c1e&":
/*!**************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/partials/menus/admin/VerticalMenuItems.vue?vue&type=template&id=7e688c1e& ***!
  \**************************************************************************************************************************************************************************************************************************************************/
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
    "ul",
    { staticClass: "navbar-nav", class: _vm.listClass },
    [
      _c(
        "li",
        { staticClass: "nav-item" },
        [
          _vm.checkPermisssion("dashboard")
            ? _c(
                "router-link",
                { staticClass: "nav-link", attrs: { to: { name: "home" } } },
                [
                  _c(
                    "span",
                    {
                      staticClass: "nav-link-icon d-md-none d-lg-inline-block"
                    },
                    [
                      _c(
                        "svg",
                        {
                          staticClass: "icon",
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
                          _c("polyline", {
                            attrs: { points: "5 12 3 12 12 3 21 12 19 12" }
                          }),
                          _vm._v(" "),
                          _c("path", {
                            attrs: {
                              d: "M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"
                            }
                          }),
                          _vm._v(" "),
                          _c("path", {
                            attrs: {
                              d: "M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"
                            }
                          })
                        ]
                      )
                    ]
                  ),
                  _vm._v(" "),
                  _c("span", { staticClass: "nav-link-title" }, [
                    _vm._v(
                      "\n                " +
                        _vm._s(_vm.$t("dashboard")) +
                        "\n            "
                    )
                  ])
                ]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: "Attendence" },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon",
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
                      _c("polyline", {
                        attrs: {
                          points: "12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
                        }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "20", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "12", y2: "21" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "4", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "16", y1: "5.25", x2: "8", y2: "9.75" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _vm.checkPermisssion("student-attendance-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "attendence-student" } }
                },
                [_vm._v("\n            Student Attandance\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("teacher-attendance-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "attendence-teacher" } }
                },
                [_vm._v("\n            Teacher Attandance\n        ")]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: "Academic" },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon icon-tabler icon-tabler-book",
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
                        attrs: { d: "M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" }
                      }),
                      _vm._v(" "),
                      _c("path", {
                        attrs: { d: "M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "3", y1: "6", x2: "3", y2: "19" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "6", x2: "12", y2: "19" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "21", y1: "6", x2: "21", y2: "19" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _vm.checkPermisssion("session-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "academic-session" } }
                },
                [_vm._v("\n            Session\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("department-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "department" } }
                },
                [_vm._v("\n            Department\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("class-routine-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "academic-routine" } }
                },
                [_vm._v("\n            Routine\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("class-room-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "academic-classroom" } }
                },
                [_vm._v("\n            Class Room\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("class-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "academic-class" } }
                },
                [_vm._v("\n            Class\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("section-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "academic-section" } }
                },
                [_vm._v("\n            Section\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("subject-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "academic-subject" } }
                },
                [_vm._v("\n            Subject\n        ")]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: _vm.$t("users") },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon",
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
                      _c("polyline", {
                        attrs: {
                          points: "12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
                        }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "20", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "12", y2: "21" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "4", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "16", y1: "5.25", x2: "8", y2: "9.75" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _c(
            "router-link",
            { staticClass: "dropdown-item", attrs: { to: { name: "user" } } },
            [_vm._v("\n            Admin\n        ")]
          ),
          _vm._v(" "),
          _vm.checkPermisssion("student-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "user-student" } }
                },
                [_vm._v("\n           Student\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("guardian-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "user-guardian" } }
                },
                [_vm._v("\n           Guardian\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("staff-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "user-teacher" } }
                },
                [_vm._v("\n            Teacher\n        ")]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: _vm.$t("Exam") },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon",
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
                      _c("polyline", {
                        attrs: {
                          points: "12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
                        }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "20", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "12", y2: "21" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "4", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "16", y1: "5.25", x2: "8", y2: "9.75" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _vm.checkPermisssion("exam-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "exam" } }
                },
                [_vm._v("\n            Exam List\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("exam-term-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "exam-term" } }
                },
                [_vm._v("\n            Term\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("exam-schedule-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "exam-schedule" } }
                },
                [_vm._v("\n            Schedule\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("exam-mark-create")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "exam-mark" } }
                },
                [_vm._v("\n            Mark\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("exam-result-rule-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "exam-result-rule" } }
                },
                [_vm._v("\n            Result Rule\n        ")]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: _vm.$t("Report") },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon",
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
                      _c("polyline", {
                        attrs: {
                          points: "12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
                        }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "20", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "12", y2: "21" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "4", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "16", y1: "5.25", x2: "8", y2: "9.75" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _vm.checkPermisssion("student-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-student" } }
                },
                [_vm._v("\n            Student\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("class-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-class" } }
                },
                [_vm._v("\n            Class\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("class-routine-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-class-routine" } }
                },
                [_vm._v("\n            Class Routine\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("teacher-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-teacher" } }
                },
                [_vm._v("\n            Teacher\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("student-attendance-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-student-attendance" } }
                },
                [_vm._v("\n            Student Attendance\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("teacher-attendance-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-teacher-attendance" } }
                },
                [_vm._v("\n            Teacher Attendance\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("exam-routine-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-exam-routine" } }
                },
                [_vm._v("\n            Exam Routine\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("exam-result-report")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "report-exam-result" } }
                },
                [_vm._v("\n            Exam Result\n        ")]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: _vm.$t("Message") },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon",
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
                      _c("polyline", {
                        attrs: {
                          points: "12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
                        }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "20", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "12", y2: "21" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "4", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "16", y1: "5.25", x2: "8", y2: "9.75" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _vm.checkPermisssion("message-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "message" } }
                },
                [_vm._v("\n            Message\n        ")]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: _vm.$t("Announcement") },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon",
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
                      _c("polyline", {
                        attrs: {
                          points: "12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
                        }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "20", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "12", y2: "21" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "4", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "16", y1: "5.25", x2: "8", y2: "9.75" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _vm.checkPermisssion("event-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "event" } }
                },
                [_vm._v("\n            Event\n        ")]
              )
            : _vm._e(),
          _vm._v(" "),
          _vm.checkPermisssion("calendar-list")
            ? _c(
                "router-link",
                {
                  staticClass: "dropdown-item",
                  attrs: { to: { name: "calendar" } }
                },
                [_vm._v("\n            Calendar\n        ")]
              )
            : _vm._e()
        ],
        1
      ),
      _vm._v(" "),
      _vm.checkPermisssion("role-list")
        ? _c(
            "li",
            { staticClass: "nav-item" },
            [
              _c(
                "router-link",
                { staticClass: "nav-link", attrs: { to: { name: "role" } } },
                [
                  _c(
                    "span",
                    {
                      staticClass: "nav-link-icon d-md-none d-lg-inline-block"
                    },
                    [
                      _c(
                        "svg",
                        {
                          staticClass: "icon icon-tabler icon-tabler-lock",
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
                          _c("rect", {
                            attrs: {
                              x: "5",
                              y: "11",
                              width: "14",
                              height: "10",
                              rx: "2"
                            }
                          }),
                          _vm._v(" "),
                          _c("circle", {
                            attrs: { cx: "12", cy: "16", r: "1" }
                          }),
                          _vm._v(" "),
                          _c("path", {
                            attrs: { d: "M8 11v-4a4 4 0 0 1 8 0v4" }
                          })
                        ]
                      )
                    ]
                  ),
                  _vm._v(" "),
                  _c("span", { staticClass: "nav-link-title" }, [
                    _vm._v(
                      "\n                " +
                        _vm._s(_vm.$t("roles")) +
                        "\n            "
                    )
                  ])
                ]
              )
            ],
            1
          )
        : _vm._e(),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: _vm.$t("setting") },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon icon-tabler icon-tabler-settings",
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
                            "M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"
                        }
                      }),
                      _vm._v(" "),
                      _c("circle", { attrs: { cx: "12", cy: "12", r: "3" } })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _c(
            "router-link",
            {
              staticClass: "dropdown-item",
              attrs: { to: { name: "setting-admin" } }
            },
            [
              _vm._v(
                "\n            " +
                  _vm._s(_vm.$t("admin_setting")) +
                  "\n        "
              )
            ]
          ),
          _vm._v(" "),
          _c(
            "router-link",
            {
              staticClass: "dropdown-item",
              attrs: { to: { name: "setting-website" } }
            },
            [
              _vm._v(
                "\n            " +
                  _vm._s(_vm.$t("website_setting")) +
                  "\n        "
              )
            ]
          )
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "li",
        { staticClass: "nav-item" },
        [
          _c("logout", { attrs: { linkClass: "nav-link", title: false } }, [
            _c(
              "span",
              { staticClass: "nav-link-icon d-md-none d-lg-inline-block" },
              [
                _c(
                  "svg",
                  {
                    staticClass: "icon icon-tabler icon-tabler-logout",
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
                          "M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"
                      }
                    }),
                    _vm._v(" "),
                    _c("path", { attrs: { d: "M7 12h14l-3 -3m0 6l3 -3" } })
                  ]
                )
              ]
            ),
            _vm._v(" "),
            _c("span", { staticClass: "nav-link-title" }, [
              _vm._v(
                "\n                " +
                  _vm._s(_vm.$t("logout")) +
                  "\n            "
              )
            ])
          ])
        ],
        1
      ),
      _vm._v(" "),
      _c(
        "dropdown",
        {
          attrs: { title: "Dropdown" },
          scopedSlots: _vm._u([
            {
              key: "icon",
              fn: function() {
                return [
                  _c(
                    "svg",
                    {
                      staticClass: "icon",
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
                      _c("polyline", {
                        attrs: {
                          points: "12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"
                        }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "20", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "12", y2: "21" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "12", y1: "12", x2: "4", y2: "7.5" }
                      }),
                      _vm._v(" "),
                      _c("line", {
                        attrs: { x1: "16", y1: "5.25", x2: "8", y2: "9.75" }
                      })
                    ]
                  )
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _c(
            "router-link",
            { staticClass: "dropdown-item", attrs: { to: { name: "page" } } },
            [_vm._v("\n            Demo Page\n        ")]
          ),
          _vm._v(" "),
          _c(
            "router-link",
            { staticClass: "dropdown-item", attrs: { to: { name: "page2" } } },
            [_vm._v("\n            Demo Page 2\n        ")]
          )
        ],
        1
      ),
      _vm._v(" "),
      _c("li", { staticClass: "text-center mt-3" }, [
        _c(
          "a",
          {
            staticClass: "btn btn-primary",
            attrs: { href: "javascript:void(0)" },
            on: { click: _vm.visitWebsite }
          },
          [
            _vm._v(
              "\n            " + _vm._s(_vm.$t("visit_website")) + "\n        "
            )
          ]
        )
      ])
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminHorizontalLayout.vue?vue&type=template&id=3e22d4ae&":
/*!******************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminHorizontalLayout.vue?vue&type=template&id=3e22d4ae& ***!
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
    _c(
      "header",
      { staticClass: "navbar navbar-expand-md navbar-light d-print-none" },
      [
        _c(
          "div",
          {
            class:
              _vm.setting.layout == "boxed" ? "container-xl" : "container-fluid"
          },
          [
            _vm._m(0),
            _vm._v(" "),
            _c(
              "h1",
              {
                staticClass:
                  "navbar-brand d-none-navbar-horizontal pe-0 pe-md-3"
              },
              [
                _c("router-link", { attrs: { to: { name: "home" } } }, [
                  _vm.setting.logo
                    ? _c("img", {
                        staticClass: "navbar-brand-image",
                        attrs: { src: _vm.setting.logo, alt: "" }
                      })
                    : _c("img", {
                        staticClass: "navbar-brand-image",
                        attrs: { src: _vm.logo, alt: "" }
                      })
                ])
              ],
              1
            ),
            _vm._v(" "),
            _c("div", { staticClass: "navbar-nav flex-row order-md-last" }, [
              _c(
                "div",
                {
                  staticClass:
                    "nav-item d-none d-md-flex me-3 flex-row align-items-center"
                },
                [
                  _c(
                    "div",
                    { staticClass: "btn-list me-2" },
                    [_c("switch-language")],
                    1
                  ),
                  _vm._v(" "),
                  _c("darkmode"),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "nav-item dropdown d-none d-md-flex" },
                    [
                      _c(
                        "a",
                        {
                          staticClass: "nav-link px-0 show me-2",
                          attrs: {
                            href: "#",
                            "data-bs-toggle": "dropdown",
                            tabindex: "-1",
                            "aria-label": "Show notifications",
                            "aria-expanded": "true"
                          },
                          on: { click: _vm.toggleNotification }
                        },
                        [
                          _c(
                            "svg",
                            {
                              staticClass: "icon",
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
                                    "M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"
                                }
                              }),
                              _vm._v(" "),
                              _c("path", {
                                attrs: { d: "M9 17v1a3 3 0 0 0 6 0v-1" }
                              })
                            ]
                          ),
                          _vm._v(" "),
                          _c("span", { staticClass: "badge bg-red" })
                        ]
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass:
                            "dropdown-menu dropdown-menu-end dropdown-menu-card",
                          class: { show: _vm.notification },
                          attrs: { "data-bs-popper": "none" }
                        },
                        [_vm._m(1)]
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "div",
                {
                  staticClass: "nav-item dropdown show",
                  on: {
                    click: function($event) {
                      $event.preventDefault()
                      _vm.navDropDown = !_vm.navDropDown
                    }
                  }
                },
                [
                  _c(
                    "a",
                    {
                      staticClass: "nav-link d-flex lh-1 text-reset p-0",
                      attrs: {
                        href: "#",
                        "data-bs-toggle": "dropdown",
                        "aria-label": "Open user menu"
                      }
                    },
                    [
                      _vm.user.image
                        ? _c("span", {
                            staticClass: "avatar avatar-sm",
                            style: {
                              backgroundImage: "url(" + _vm.user.image + ")"
                            }
                          })
                        : _c("span", {
                            staticClass: "avatar avatar-sm",
                            style: { backgroundImage: "url(" + _vm.url + ")" }
                          }),
                      _vm._v(" "),
                      _c("div", { staticClass: "d-none d-xl-block ps-2" }, [
                        _c("div", [_vm._v(" " + _vm._s(_vm.user.name))]),
                        _vm._v(" "),
                        _c("div", { staticClass: "mt-1 small text-muted" }, [
                          _vm._v(_vm._s(_vm.user.role))
                        ])
                      ])
                    ]
                  ),
                  _vm._v(" "),
                  _vm.navDropDown
                    ? _c(
                        "div",
                        {
                          directives: [
                            {
                              name: "on-clickaway",
                              rawName: "v-on-clickaway",
                              value: _vm.away,
                              expression: "away"
                            }
                          ],
                          staticClass:
                            "show dropdown-menu dropdown-menu-end dropdown-menu-arrow",
                          staticStyle: { right: "0" }
                        },
                        [
                          _vm.checkPermisssion("profile-show")
                            ? _c(
                                "router-link",
                                {
                                  staticClass: "dropdown-item",
                                  attrs: { to: { name: "user-profile" } }
                                },
                                [
                                  _c(
                                    "svg",
                                    {
                                      staticClass:
                                        "icon icon-tabler icon-tabler-user",
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
                                      _c("circle", {
                                        attrs: { cx: "12", cy: "7", r: "4" }
                                      }),
                                      _vm._v(" "),
                                      _c("path", {
                                        attrs: {
                                          d:
                                            "M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"
                                        }
                                      })
                                    ]
                                  ),
                                  _vm._v(
                                    " \n                            " +
                                      _vm._s(_vm.$t("profile")) +
                                      "\n                        "
                                  )
                                ]
                              )
                            : _vm._e(),
                          _vm._v(" "),
                          _vm.checkPermisssion("profile-show")
                            ? _c("div", { staticClass: "dropdown-divider" })
                            : _vm._e(),
                          _vm._v(" "),
                          _c(
                            "logout",
                            { attrs: { linkClass: "dropdown-item" } },
                            [
                              _c(
                                "svg",
                                {
                                  staticClass:
                                    "icon icon-tabler icon-tabler-logout",
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
                                        "M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"
                                    }
                                  }),
                                  _vm._v(" "),
                                  _c("path", {
                                    attrs: { d: "M7 12h14l-3 -3m0 6l3 -3" }
                                  })
                                ]
                              ),
                              _vm._v(" \n                        ")
                            ]
                          )
                        ],
                        1
                      )
                    : _vm._e()
                ]
              )
            ])
          ]
        )
      ]
    ),
    _vm._v(" "),
    _c("div", { staticClass: "navbar-expand-md" }, [
      _c(
        "div",
        {
          staticClass: "collapse navbar-collapse",
          attrs: { id: "navbar-menu" }
        },
        [
          _c("div", { staticClass: "navbar navbar-light" }, [
            _c(
              "div",
              {
                class:
                  _vm.setting.layout == "boxed"
                    ? "container-xl"
                    : "container-fluid"
              },
              [
                _c("horizontal-app-menu-items"),
                _vm._v(" "),
                _c("div", {
                  staticClass:
                    "my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last"
                })
              ],
              1
            )
          ])
        ]
      )
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "page-wrapper" }, [
      _c(
        "div",
        {
          class:
            _vm.setting.layout == "boxed" ? "container-xl" : "container-fluid"
        },
        [
          _c("div", { staticClass: "page-header d-print-none mt-" }),
          _vm._v(" "),
          _c(
            "vue-page-transition",
            { attrs: { name: "fade" } },
            [_c("router-view")],
            1
          )
        ],
        1
      )
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "button",
      {
        staticClass: "navbar-toggler",
        attrs: {
          type: "button",
          "data-bs-toggle": "collapse",
          "data-bs-target": "#navbar-menu"
        }
      },
      [_c("span", { staticClass: "navbar-toggler-icon" })]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "card" }, [
      _c("div", { staticClass: "card-body" }, [
        _vm._v(
          "\n                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet\n                                    consectetur\n                                    exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae\n                                    sapiente. Amet\n                                    debitis et magni maxime necessitatibus ullam.\n                                "
        )
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminLayout.vue?vue&type=template&id=bafdabb6&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminLayout.vue?vue&type=template&id=bafdabb6& ***!
  \********************************************************************************************************************************************************************************************************************/
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
    _vm.permissionLoaded
      ? _c(
          "div",
          [
            _vm.setting.nav_position == "left"
              ? _c("admin-vertical-layout")
              : _vm.setting.nav_position == "top"
              ? _c("admin-horizontal-layout")
              : _c("div", [
                  _c("h3", [_vm._v("Error!")]),
                  _vm._v(" "),
                  _c("p", [
                    _vm._v("Something went wrong! App layout not found!")
                  ])
                ])
          ],
          1
        )
      : _vm._e()
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminVerticalLayout.vue?vue&type=template&id=712aff3b&":
/*!****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/layouts/AdminVerticalLayout.vue?vue&type=template&id=712aff3b& ***!
  \****************************************************************************************************************************************************************************************************************************/
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
    _vm.permissionLoaded
      ? _c(
          "div",
          { staticClass: "page" },
          [
            _c("sidebar"),
            _vm._v(" "),
            _c("navbar"),
            _vm._v(" "),
            _c("div", { staticClass: "content" }, [
              _c(
                "div",
                {
                  class:
                    _vm.setting.layout == "boxed"
                      ? "container-xl"
                      : "container-fluid"
                },
                [
                  _c(
                    "vue-page-transition",
                    { attrs: { name: "fade-in-right" } },
                    [_c("router-view")],
                    1
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c("footer")
            ])
          ],
          1
        )
      : _c(
          "div",
          {
            staticStyle: {
              "min-height": "100vh",
              display: "flex",
              "justify-content": "center",
              "align-items": "center"
            }
          },
          [_vm._m(0)]
        )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "text-center" }, [
      _c(
        "span",
        {
          staticClass: "input-icon-addon text-center",
          staticStyle: { display: "contents" }
        },
        [
          _c("div", {
            staticClass: "spinner-border spinner-border-sm text-dark mr-3",
            staticStyle: {
              width: "30px",
              height: "30px",
              "border-width": "2px"
            },
            attrs: { role: "status" }
          })
        ]
      ),
      _vm._v(" "),
      _c("h4", { staticClass: "mt-3" }, [_vm._v("Loading...")])
    ])
  }
]
render._withStripped = true



/***/ })

}]);