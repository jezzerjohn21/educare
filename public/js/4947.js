(self.webpackChunk=self.webpackChunk||[]).push([[4947],{3784:(t,e,n)=>{"use strict";n.d(e,{Z:()=>i});var a=n(3645),r=n.n(a)()((function(t){return t[1]}));r.push([t.id,"a.dark-mode-btn{border-radius:50%!important;background-color:transparent;overflow:hidden;height:25px;width:25px;box-sizing:border-box;font-size:20px}a.dark-mode-btn svg{color:#423f3f;height:20px;width:20px}body.theme-dark a.dark-mode-btn{background-color:transparent}body.theme-dark a.dark-mode-btn svg{color:#fff;height:30px;width:30px}",""]);const i=r},3595:(t,e,n)=>{"use strict";n.d(e,{Z:()=>i});var a=n(3645),r=n.n(a)()((function(t){return t[1]}));r.push([t.id,"@media (max-width:768px){.navbar-brand[data-v-1fd19b72]{width:110px}button[data-v-1fd19b72]{order:2}}",""]);const i=r},2829:(t,e,n)=>{"use strict";n.d(e,{Z:()=>i});var a=n(3645),r=n.n(a)()((function(t){return t[1]}));r.push([t.id,".notification-max-height[data-v-3966fa5f]{max-height:400px}.notification-min-width[data-v-3966fa5f]{min-width:400px}",""]);const i=r},963:(t,e,n)=>{"use strict";n.d(e,{Z:()=>i});var a=n(3645),r=n.n(a)()((function(t){return t[1]}));r.push([t.id,"select{width:150px;line-height:49px;height:38px;font-size:22px;outline:0;margin-bottom:15px}",""]);const i=r},5486:(t,e,n)=>{"use strict";n.d(e,{Z:()=>i});var a=n(3645),r=n.n(a)()((function(t){return t[1]}));r.push([t.id,"select{width:150px;line-height:49px;height:38px;font-size:22px;outline:0;margin-bottom:15px}",""]);const i=r},5463:(t,e,n)=>{"use strict";var a=n(538);a="default"in a?a.default:a;var r="2.2.2";/^2\./.test(a.version)||a.util.warn("VueClickaway 2.2.2 only supports Vue 2.x, and does not support Vue "+a.version);var i="_vue_clickaway_handler";function o(t,e,n){s(t);var a=n.context,r=e.value;if("function"==typeof r){var o=!1;setTimeout((function(){o=!0}),0),t[i]=function(e){var n=e.path||(e.composedPath?e.composedPath():void 0);if(o&&(n?n.indexOf(t)<0:!t.contains(e.target)))return r.call(a,e)},document.documentElement.addEventListener("click",t[i],!1)}}function s(t){document.documentElement.removeEventListener("click",t[i],!1),delete t[i]}var c={bind:o,update:function(t,e){e.value!==e.oldValue&&o(t,e)},unbind:s},l={directives:{onClickaway:c}};e.jB=l},1080:(t,e,n)=>{"use strict";n.d(e,{Z:()=>c});var a=n(629);function r(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);e&&(a=a.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,a)}return n}function i(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?r(Object(n),!0).forEach((function(e){o(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):r(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}function o(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}const s={props:{title:{type:Boolean,required:!1,default:!0},linkClass:{type:String,required:!1,default:""}},methods:i(i({},(0,a.nv)({logoutAction:"auth/logout"})),{},{logout:function(){this.logoutAction()}})};const c=(0,n(1900).Z)(s,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("a",{class:t.linkClass,attrs:{href:"javascript:void(0)"},on:{click:function(e){return e.preventDefault(),t.logout(e)}}},[t._t("default"),t._v(" "),t.title?n("span",[t._v(t._s(t.$t("logout")))]):t._e()],2)}),[],!1,null,null,null).exports},4947:(t,e,n)=>{"use strict";n.r(e),n.d(e,{default:()=>gt});var a=n(7757),r=n.n(a),i=n(9205),o=n(5463),s=n(629);const c={methods:{toggleDarkMode:function(){this.$store.commit("SET_DARK_MODE")}},computed:{darkMode:function(){return this.$store.getters.getMode}},mounted:function(){this.darkMode?document.body.classList.add("theme-dark"):document.body.classList.remove("theme-dark")}};var l=n(3379),u=n.n(l),d=n(3784),f={insert:"head",singleton:!1};u()(d.Z,f);d.Z.locals;var v=n(1900);const p=(0,v.Z)(c,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"nav-item dropdown d-none d-md-flex me-1"},[n("a",{staticClass:"dark-mode-btn nav-link px-0",attrs:{href:"javascript:void(0)"},on:{click:function(e){return e.preventDefault(),t.toggleDarkMode(e)}}},[t.darkMode?n("svg",{staticClass:"icon icon-tabler icon-tabler-brightness-down",attrs:{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24","stroke-width":"2",stroke:"currentColor",fill:"none","stroke-linecap":"round","stroke-linejoin":"round"}},[n("path",{attrs:{stroke:"none",d:"M0 0h24v24H0z",fill:"none"}}),t._v(" "),n("circle",{attrs:{cx:"12",cy:"12",r:"3"}}),t._v(" "),n("line",{attrs:{x1:"12",y1:"5",x2:"12",y2:"5.01"}}),t._v(" "),n("line",{attrs:{x1:"17",y1:"7",x2:"17",y2:"7.01"}}),t._v(" "),n("line",{attrs:{x1:"19",y1:"12",x2:"19",y2:"12.01"}}),t._v(" "),n("line",{attrs:{x1:"17",y1:"17",x2:"17",y2:"17.01"}}),t._v(" "),n("line",{attrs:{x1:"12",y1:"19",x2:"12",y2:"19.01"}}),t._v(" "),n("line",{attrs:{x1:"7",y1:"17",x2:"7",y2:"17.01"}}),t._v(" "),n("line",{attrs:{x1:"5",y1:"12",x2:"5",y2:"12.01"}}),t._v(" "),n("line",{attrs:{x1:"7",y1:"7",x2:"7",y2:"7.01"}})]):n("svg",{staticClass:"icon icon-tabler icon-tabler-moon",attrs:{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24","stroke-width":"2",stroke:"currentColor",fill:"none","stroke-linecap":"round","stroke-linejoin":"round"}},[n("path",{attrs:{stroke:"none",d:"M0 0h24v24H0z",fill:"none"}}),t._v(" "),n("path",{attrs:{d:"M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"}})])])])}),[],!1,null,null,null).exports;var g=n(1080);function m(t,e,n,a,r,i,o){try{var s=t[i](o),c=s.value}catch(t){return void n(t)}s.done?e(c):Promise.resolve(c).then(a,r)}function h(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);e&&(a=a.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,a)}return n}function b(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}const _={name:"SwitchLocale",data:function(){return{selectedLanguage:""}},computed:function(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?h(Object(n),!0).forEach((function(e){b(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):h(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}({},(0,s.Se)({langs:"getAllLocales"})),methods:{onChange:function(t){var e=t.target.value;this.switchLocale(e)},switchLocale:function(t){this.$i18n.locale!==t&&(this.$i18n.locale=t),this.selectedLanguage=t,localStorage.setItem("lang",t)}},mounted:function(){var t,e=this;return(t=r().mark((function t(){var n,a,i,o;return r().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,axios.get("/api/app/default");case 2:n=t.sent,a=n.data.language,i=localStorage.getItem("lang"),o=i||a,e.$i18n.locale=o,e.selectedLanguage=o;case 8:case"end":return t.stop()}}),t)})),function(){var e=this,n=arguments;return new Promise((function(a,r){var i=t.apply(e,n);function o(t){m(i,a,r,o,s,"next",t)}function s(t){m(i,a,r,o,s,"throw",t)}o(void 0)}))})()}};var w=n(5486),y={insert:"head",singleton:!1};u()(w.Z,y);w.Z.locals;const x=(0,v.Z)(_,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"btn-list me-1"},[t.langs?n("select",{staticClass:"form-select",on:{change:function(e){return t.onChange(e)}}},t._l(t.langs,(function(e,a){return n("option",{key:"lang-"+a,domProps:{value:a,selected:a==t.selectedLanguage}},[t._v("\n            "+t._s(a.toUpperCase())+"\n        ")])})),0):t._e()])}),[],!1,null,null,null).exports;const k={props:{notification:{type:Object,required:!0}},methods:{notificationDetails:function(t){this.markRead(t),this.$emit("close-notification"),this.$router.push({name:"notification-details",params:{id:t}})},markReadUnread:function(t){this.$store.dispatch("notification/markToggleNotification",t),this.notification.read_at?this.notification.read_at="":this.notification.read_at="Read"},markRead:function(t){this.$store.dispatch("notification/markReadNotification",t),this.notification.read_at="Read"}}};const C=(0,v.Z)(k,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"list-group-item cursor-pointer d-flex justify-content-between",style:{"background-color":t.notification.read_at?"":"#c9c9c9"}},[t.notification.data?n("div",{staticClass:"row align-items-center",on:{click:function(e){return t.notificationDetails(t.notification.id)}}},[n("div",{staticClass:"col-auto"},[n("span",{staticClass:"avatar",style:{"background-image":"url("+t.notification.data.sender.image+")"}})]),t._v(" "),n("div",{staticClass:"col text-truncate"},[n("span",{staticClass:"text-body d-block"},[t._v(t._s(t.notification.data.sender.name))]),t._v(" "),n("span",{staticClass:"d-block text-muted text-truncate mt-n1",domProps:{innerHTML:t._s(t.notification.data.subject)}}),t._v(" "),n("small",{staticClass:"text-muted text-secondary opacity-75"},[t._v(t._s(t.timeFromNow(t.notification.created_at)))])])]):t._e(),t._v(" "),n("a",{attrs:{href:"#"},on:{click:function(e){return t.markReadUnread(t.notification.id)}}},[t.notification.read_at?n("span",[t._v(t._s(t.$t("mark_as_unread")))]):n("span",[t._v(t._s(t.$t("mark_as_read")))])])])}),[],!1,null,null,null).exports;function O(t,e,n,a,r,i,o){try{var s=t[i](o),c=s.value}catch(t){return void n(t)}s.done?e(c):Promise.resolve(c).then(a,r)}function j(t){return function(){var e=this,n=arguments;return new Promise((function(a,r){var i=t.apply(e,n);function o(t){O(i,a,r,o,s,"next",t)}function s(t){O(i,a,r,o,s,"throw",t)}o(void 0)}))}}function P(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);e&&(a=a.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,a)}return n}function D(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}const S={mixins:[o.jB],components:{SingleNotification:C},data:function(){return{notification:!1}},mounted:function(){this.$store.dispatch("notification/fetchUnreadNotifications")},computed:function(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?P(Object(n),!0).forEach((function(e){D(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):P(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}({},(0,s.Se)({notifications:"notification/getNotifications",unread:"notification/getUnreadNotifications"})),methods:{openNotification:function(){var t=this;return j(r().mark((function e(){return r().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:t.notification?t.closeNotification():(t.notification=!0,t.$store.dispatch("notification/fetchNotifications"));case 1:case"end":return e.stop()}}),e)})))()},markallread:function(){var t=this;return j(r().mark((function e(){return r().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:t.notifications.length&&(t.$store.dispatch("notification/markAllReadNotifications"),t.$store.commit("notification/SET_NOTIFICATIONS_READ"));case 1:case"end":return e.stop()}}),e)})))()},closeNotification:function(){this.notification=!1},hideNotification:function(){this.notification=!1}}};var $=n(2829),E={insert:"head",singleton:!1};u()($.Z,E);$.Z.locals;const M=(0,v.Z)(S,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{directives:[{name:"on-clickaway",rawName:"v-on-clickaway",value:t.hideNotification,expression:"hideNotification"}],staticClass:"nav-item dropdown d-none d-md-flex me-3"},[n("a",{staticClass:"nav-link px-0 show me-2",attrs:{href:"#","data-bs-toggle":"dropdown",tabindex:"-1","aria-label":"Show notifications","aria-expanded":"true"},on:{click:t.openNotification}},[n("icon-bell",{attrs:{stroke:t.notification?"#206bc4":"currentColor"}}),t._v(" "),t.unread?n("span",{staticClass:"badge bg-red"},[t._v(t._s(t.unread))]):t._e()],1),t._v(" "),n("div",{staticClass:"dropdown-menu dropdown-menu-end dropdown-menu-card notification-min-width",class:{show:t.notification},attrs:{id:"notificationArea","data-bs-popper":"none"}},[n("div",{staticClass:"card"},[n("div",{staticClass:"card-header d-flex justify-content-between"},[n("h3",{staticClass:"card-title"},[t._v(t._s(t.$t("notifications")))]),t._v(" "),n("a",{staticClass:"text-underline",attrs:{href:"#"},on:{click:t.markallread}},[t._v(t._s(t.$t("mark_all_as_read")))])]),t._v(" "),t.notifications&&t.notifications.length?n("div",{staticClass:"list-group list-group-flush list-group-hoverable overflow-auto notification-max-height"},t._l(t.notifications,(function(t){return n("SingleNotification",{key:t.id,attrs:{notification:t},on:{"close-notification":function(e){t=!1}}})})),1):n("div",{staticClass:"text-center my-4"},[n("icon-big-bell"),t._v(" "),n("h3",{staticClass:"mt-3"},[t._v(t._s(t.$t("no_notifications_found"))+"!")])],1),t._v(" "),n("div",{staticClass:"card-footer text-center"},[n("router-link",{staticClass:"text-underline",attrs:{to:{name:"notifications"}}},[t._v("\n                    "+t._s(t.$t("view_all_notifications"))+"\n                ")])],1)])])])}),[],!1,null,"3966fa5f",null).exports;function Z(t,e,n,a,r,i,o){try{var s=t[i](o),c=s.value}catch(t){return void n(t)}s.done?e(c):Promise.resolve(c).then(a,r)}function A(t){return function(){var e=this,n=arguments;return new Promise((function(a,r){var i=t.apply(e,n);function o(t){Z(i,a,r,o,s,"next",t)}function s(t){Z(i,a,r,o,s,"throw",t)}o(void 0)}))}}const L={data:function(){return{sessionsYear:[],selectedSession:"",session:""}},created:function(){var t=this;return A(r().mark((function e(){var n;return r().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,axios.get("/api/sessions/year");case 2:n=e.sent,t.sessionsYear=n.data.sessions,t.session=n.data.selectedSession.default_session_id,t.selectedSession=n.data.selectedSession;case 6:case"end":return e.stop()}}),e)})))()},methods:{changeSession:function(){var t=this;return A(r().mark((function e(){var n;return r().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(!confirm("Are you sure you want to change academic year?")){e.next=8;break}return e.next=3,axios.put("/api/sessions/year/".concat(t.session));case 3:n=e.sent,t.toastSuccess(n.data.message),window.location.reload(),e.next=9;break;case 8:t.session=t.selectedSession.default_session_id;case 9:case"end":return e.stop()}}),e)})))()}}};var N=n(963),T={insert:"head",singleton:!1};u()(N.Z,T);N.Z.locals;const I=(0,v.Z)(L,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"btn-list me-1"},["Admin"==t.authenticateUser.original_role?n("select",{directives:[{name:"model",rawName:"v-model",value:t.session,expression:"session"}],staticClass:"form-select",on:{change:[function(e){var n=Array.prototype.filter.call(e.target.options,(function(t){return t.selected})).map((function(t){return"_value"in t?t._value:t.value}));t.session=e.target.multiple?n:n[0]},t.changeSession]}},t._l(t.sessionsYear,(function(e){return n("option",{key:e.id,domProps:{selected:e.id==t.session,value:e.id}},[t._v("\n           "+t._s(t.$t("session"))+": "+t._s(e.name)+"\n        ")])})),0):[t.selectedSession.session?n("button",{staticClass:"btn btn-transparent",attrs:{disabled:""}},[t._v("\n            "+t._s(t.$t("session"))+" : "+t._s(t.selectedSession.session.name)+"\n        ")]):t._e()]],2)}),[],!1,null,null,null).exports;function z(t,e,n,a,r,i,o){try{var s=t[i](o),c=s.value}catch(t){return void n(t)}s.done?e(c):Promise.resolve(c).then(a,r)}const R={data:function(){return{isMailConfigured:!1}},mounted:function(){var t,e=this;return(t=r().mark((function t(){var n;return r().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,axios.get("/api/setting/check-mail-setting");case 2:n=t.sent,e.isMailConfigured=n.data;case 4:case"end":return t.stop()}}),t)})),function(){var e=this,n=arguments;return new Promise((function(a,r){var i=t.apply(e,n);function o(t){z(i,a,r,o,s,"next",t)}function s(t){z(i,a,r,o,s,"throw",t)}o(void 0)}))})()}};const B=(0,v.Z)(R,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return t.isMailConfigured?t._e():n("div",{staticClass:"alert alert-danger my-1",attrs:{role:"alert"}},[n("h4",{staticClass:"alert-title"},[t._v("Please configuration mail setting")]),t._v(" "),n("div",{staticClass:"text-muted"},[t._v("You need to configure your mail setting to send mail. "),n("router-link",{attrs:{to:{name:"setting-admin-mail"}}},[t._v("Go to setting")])],1)])}),[],!1,null,null,null).exports;function H(t,e,n,a,r,i,o){try{var s=t[i](o),c=s.value}catch(t){return void n(t)}s.done?e(c):Promise.resolve(c).then(a,r)}function U(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);e&&(a=a.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,a)}return n}function Y(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?U(Object(n),!0).forEach((function(e){V(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):U(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}function V(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}const q={mixins:[o.jB],data:function(){return{logo:"/images/logo/logo.png",url:"/images/default.png",navDropDown:!1,notification:!1,isMailConfigured:!1}},components:{AdminHorizontalAppMenuItems:function(){return n.e(367).then(n.bind(n,367))},StudentHorizontalAppMenuItems:function(){return n.e(9918).then(n.bind(n,9918))},ParentHorizontalAppMenuItems:function(){return n.e(9925).then(n.bind(n,9925))},Darkmode:p,Logout:g.Z,SwitchLanguage:x,Notification:M,SessionYear:I,MailConfigureAlert:B},computed:Y(Y({},(0,s.Se)({authenticated:"auth/authenticated",user:"auth/user",setting:"setting/setting"})),{},{userType:function(){return this.user.role}}),methods:{logout:function(){this.logoutAction()},away:function(){this.navDropDown=!1}},created:function(){var t,e=this;return(t=r().mark((function t(){var n;return r().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,axios.get("/setting/check-mail-setting");case 2:n=t.sent,e.isMailConfigured=n.data;case 4:case"end":return t.stop()}}),t)})),function(){var e=this,n=arguments;return new Promise((function(a,r){var i=t.apply(e,n);function o(t){H(i,a,r,o,s,"next",t)}function s(t){H(i,a,r,o,s,"throw",t)}o(void 0)}))})()}};const F=(0,v.Z)(q,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("header",{staticClass:"navbar navbar-expand-md navbar-light d-print-none"},[n("div",{class:"boxed"==t.setting.layout?"container-xl":"container-fluid"},[t._m(0),t._v(" "),n("h1",{staticClass:"navbar-brand d-none-navbar-horizontal pe-0 pe-md-3"},[n("router-link",{attrs:{to:{name:"home"}}},[t.setting.logo?n("img",{staticClass:"navbar-brand-image",attrs:{src:t.setting.logo_url,alt:""}}):n("img",{staticClass:"navbar-brand-image",attrs:{src:t.logo,alt:""}})])],1),t._v(" "),n("div",{staticClass:"navbar-nav flex-row order-md-last"},[n("div",{staticClass:"nav-item d-none d-md-flex me-3 flex-row align-items-center"},[n("session-year"),t._v(" "),n("switch-language"),t._v(" "),n("darkmode"),t._v(" "),n("notification")],1),t._v(" "),n("div",{staticClass:"nav-item dropdown show",on:{click:function(e){e.preventDefault(),t.navDropDown=!t.navDropDown}}},[n("a",{staticClass:"nav-link d-flex lh-1 text-reset p-0",attrs:{href:"#","data-bs-toggle":"dropdown","aria-label":"Open user menu"}},[n("span",{staticClass:"avatar avatar-sm",style:{backgroundImage:"url("+t.user.image_url+")"}}),t._v(" "),n("div",{staticClass:"d-none d-xl-block ps-2"},[n("div",[t._v(" "+t._s(t.user.name))]),t._v(" "),n("div",{staticClass:"mt-1 small text-muted"},[t._v(t._s(t.user.role))])])]),t._v(" "),t.navDropDown?n("div",{directives:[{name:"on-clickaway",rawName:"v-on-clickaway",value:t.away,expression:"away"}],staticClass:"show dropdown-menu dropdown-menu-end dropdown-menu-arrow r-0"},[n("router-link",{staticClass:"dropdown-item",attrs:{to:{name:"user-profile"}}},[n("icon-user"),t._v(" \n                            "+t._s(t.$t("profile"))+"\n                        ")],1),t._v(" "),n("div",{staticClass:"dropdown-divider"}),t._v(" "),n("logout",{attrs:{linkClass:"dropdown-item"}},[n("icon-logout"),t._v(" \n                        ")],1)],1):t._e()])])])]),t._v(" "),n("div",{staticClass:"navbar-expand-md"},[n("div",{staticClass:"collapse navbar-collapse",attrs:{id:"navbar-menu"}},[n("div",{staticClass:"navbar navbar-light"},[n("div",{class:"boxed"==t.setting.layout?"container-xl":"container-fluid"},["admin"==t.userType||"staff"==t.userType?n("AdminHorizontalAppMenuItems"):t._e(),t._v(" "),"student"==t.userType?n("StudentHorizontalAppMenuItems"):t._e(),t._v(" "),"guardian"==t.userType?n("ParentHorizontalAppMenuItems"):t._e(),t._v(" "),n("div",{staticClass:"my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last"})],1)])])]),t._v(" "),n("div",{staticClass:"page-wrapper"},[n("div",{class:"boxed"==t.setting.layout?"container-xl":"container-fluid"},[n("div",{staticClass:"page-header d-print-none mt-"},[n("mail-configure-alert")],1),t._v(" "),n("vue-page-transition",{attrs:{name:"fade"}},[n("router-view")],1)],1)])])}),[function(){var t=this.$createElement,e=this._self._c||t;return e("button",{staticClass:"navbar-toggler",attrs:{type:"button","data-bs-toggle":"collapse","data-bs-target":"#navbar-menu"}},[e("span",{staticClass:"navbar-toggler-icon"})])}],!1,null,null,null).exports;const G={};const K=(0,v.Z)(G,(function(){var t=this,e=t.$createElement;t._self._c;return t._m(0)}),[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("footer",{staticClass:"footer footer-transparent d-print-none"},[n("div",{staticClass:"container"},[n("div",{staticClass:"row text-center align-items-center flex-row-reverse"},[n("div",{staticClass:"col-lg-auto ms-lg-auto"},[n("ul",{staticClass:"list-inline list-inline-dots mb-0"},[n("li",{staticClass:"list-inline-item"},[n("a",{staticClass:"link-secondary",attrs:{href:"#",target:"_blank",rel:"noopener"}},[t._v("Source code")])])])]),t._v(" "),n("div",{staticClass:"col-12 col-lg-auto mt-3 mt-lg-0"},[n("ul",{staticClass:"list-inline list-inline-dots mb-0"},[n("li",{staticClass:"list-inline-item"},[t._v("\n                        Copyright © 2021\n                        "),n("a",{staticClass:"link-secondary",attrs:{href:"#",target:"_blank"}},[t._v("AWL Zentrum")]),t._v(".\n                        All rights reserved.\n                    ")])])])])])])}],!1,null,null,null).exports;const W={props:{role:{type:String,required:!0}}};const J=(0,v.Z)(W,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"collapse navbar-collapse",attrs:{id:"navbar-menu"}},[n("div",[n("div",{staticClass:"badge bg-primary"},[t._v(t._s(t._f("capitalize")(t.role)))])])])}),[],!1,null,null,null).exports;function Q(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);e&&(a=a.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,a)}return n}function X(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?Q(Object(n),!0).forEach((function(e){tt(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):Q(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}function tt(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}const et={mixins:[o.jB],components:{Darkmode:p,SwitchLanguage:x,Notification:M,RoleBadge:J,SessionYear:I,Logout:g.Z},data:function(){return{navDropDown:!1,notification:!1,lang:localStorage.getItem("lang")||"en"}},methods:X(X({away:function(){this.navDropDown=!1}},(0,s.nv)({logoutAction:"auth/logout"})),{},{logout:function(){this.logoutAction()}}),computed:X({},(0,s.Se)({authenticated:"auth/authenticated",user:"auth/user",setting:"setting/setting",darkMode:"getMode"}))};const nt=(0,v.Z)(et,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("header",{staticClass:"navbar navbar-expand-md d-none d-lg-flex d-print-none",style:[t.darkMode?"":{"background-color":t.setting.navbar_bg,color:t.setting.navbar_text_color}]},[n("div",{staticClass:"container-fluid"},[t._m(0),t._v(" "),n("div",{staticClass:"navbar-nav flex-row order-md-last align-items-center"},[n("session-year"),t._v(" "),n("switch-language"),t._v(" "),n("darkmode"),t._v(" "),n("notification"),t._v(" "),n("div",{staticClass:"nav-item dropdown"},[n("a",{staticClass:"nav-link d-flex lh-1 text-reset p-0",class:{show:t.navDropDown},attrs:{href:"javascript:void(0)","data-bs-toggle":"dropdown","aria-label":"Open user menu"},on:{click:function(e){e.preventDefault(),t.navDropDown=!t.navDropDown}}},[n("span",{staticClass:"avatar avatar-sm",style:{backgroundImage:"url("+t.user.image_url+")"}}),t._v(" "),n("div",{staticClass:"d-none d-xl-block ps-2"},[n("div",[t._v(t._s(t.user.name))]),t._v(" "),n("div",{staticClass:"mt-1 small text-muted"},[t._v(t._s(t.user.email))])])]),t._v(" "),t.navDropDown?n("div",{directives:[{name:"on-clickaway",rawName:"v-on-clickaway",value:t.away,expression:"away"}],staticClass:"show dropdown-menu dropdown-menu-end dropdown-menu-arrow",attrs:{"data-bs-popper":"none"}},[n("router-link",{staticClass:"dropdown-item",attrs:{to:{name:"user-profile"}},nativeOn:{click:function(e){t.navDropDown=!1}}},[n("icon-user"),t._v(" \n                        "+t._s(t.$t("profile"))+"\n                    ")],1),t._v(" "),n("div",{staticClass:"dropdown-divider"}),t._v(" "),n("logout",{attrs:{linkClass:"dropdown-item"}},[n("icon-logout"),t._v(" \n                    ")],1)],1):t._e()])],1),t._v(" "),n("RoleBadge",{attrs:{role:t.user.original_role}})],1)])}),[function(){var t=this.$createElement,e=this._self._c||t;return e("button",{staticClass:"navbar-toggler",attrs:{type:"button","data-bs-toggle":"collapse","data-bs-target":"#navbar-menu"}},[e("span",{staticClass:"navbar-toggler-icon"})])}],!1,null,null,null).exports;function at(t,e){var n=Object.keys(t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);e&&(a=a.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),n.push.apply(n,a)}return n}function rt(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{};e%2?at(Object(n),!0).forEach((function(e){it(t,e,n[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(n)):at(Object(n)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(n,e))}))}return t}function it(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}const ot={components:{AppMenuItems:function(){return n.e(7919).then(n.bind(n,7919))},StudentsMenuItems:function(){return n.e(964).then(n.bind(n,964))},ParentsMenuItems:function(){return n.e(6056).then(n.bind(n,6056))}},data:function(){return{navToggler:!1,sidebarDropdown:!1,logo:"/images/logo/logo.png"}},computed:rt(rt({},(0,s.Se)({authenticated:"auth/authenticated",user:"auth/user",setting:"setting/setting",darkMode:"getMode"})),{},{userPermissions:function(){return this.$store.getters.getUserPermissions},userType:function(){return this.user.role}}),methods:rt({},(0,s.nv)({logoutAction:"auth/logout"})),mounted:function(){this.$store.dispatch("setting/fetchSetting")}};var st=n(3595),ct={insert:"head",singleton:!1};u()(st.Z,ct);st.Z.locals;const lt=(0,v.Z)(ot,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("aside",{staticClass:"navbar navbar-vertical navbar-expand-lg navbar-dark",style:{"background-color":t.setting.sidebar_bg}},[n("div",{staticClass:"container-fluid"},[n("button",{staticClass:"navbar-toggler",class:t.navToggler?"":"collapsed",attrs:{"aria-expanded":!!t.navToggler,type:"button","data-bs-toggle":"collapse","data-bs-target":"#navbar-menu"},on:{click:function(e){e.preventDefault(),t.navToggler=!t.navToggler}}},[n("span",{staticClass:"navbar-toggler-icon"})]),t._v(" "),n("div",{staticClass:"navbar-brand"},[n("a",{attrs:{href:"javascript:void(0)"},on:{click:function(e){return t.$router.push({name:"home"})}}},[!t.darkMode&&t.setting.logo?n("img",{attrs:{src:t.setting.logo_url,alt:""}}):t.darkMode&&t.setting.dark_logo?n("img",{attrs:{src:t.setting.dark_logo_url,alt:""}}):n("img",{attrs:{src:t.logo,alt:""}})])]),t._v(" "),n("div",{staticClass:"collapse navbar-collapse",class:{show:t.navToggler},attrs:{id:"navbar-menu"}},["admin"==t.userType||"staff"==t.userType?n("app-menu-items",{attrs:{listClass:"pt-lg-3"}}):t._e(),t._v(" "),"student"==t.userType?n("students-menu-items",{attrs:{listClass:"pt-lg-3"}}):t._e(),t._v(" "),"guardian"==t.userType?n("parents-menu-items",{attrs:{listClass:"pt-lg-3"}}):t._e()],1)])])}),[],!1,null,"1fd19b72",null).exports;function ut(t,e,n,a,r,i,o){try{var s=t[i](o),c=s.value}catch(t){return void n(t)}s.done?e(c):Promise.resolve(c).then(a,r)}const dt={components:{Loader:i.Z,Navbar:nt,Sidebar:lt,Footer:K,MailConfigureAlert:B},data:function(){return{message:"",isMailConfigured:!1}},methods:{setfavicon:function(){var t,e=this;return(t=r().mark((function t(){var n;return r().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,e.$store.dispatch("setting/fetchSetting");case 2:(n=document.getElementById("favicon"))&&n.setAttribute("href",e.setting.favicon_url);case 4:case"end":return t.stop()}}),t)})),function(){var e=this,n=arguments;return new Promise((function(a,r){var i=t.apply(e,n);function o(t){ut(i,a,r,o,s,"next",t)}function s(t){ut(i,a,r,o,s,"throw",t)}o(void 0)}))})()}},computed:{permissionLoaded:function(){return this.$store.getters["rolepermission/getPermissionLoadingStatus"]},setting:function(){return this.$store.getters["setting/setting"]}},mounted:function(){var t=this;setTimeout((function(){t.setfavicon()}),1e3)}};const ft=(0,v.Z)(dt,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[t.permissionLoaded?n("div",{staticClass:"page"},[n("sidebar"),t._v(" "),n("navbar"),t._v(" "),n("div",{staticClass:"content"},[n("mail-configure-alert"),t._v(" "),n("div",{class:"boxed"==t.setting.layout?"container-xl":"container-fluid"},[n("vue-page-transition",{attrs:{name:"fade"}},[n("router-view")],1)],1),t._v(" "),n("footer")],1)],1):t._e()])}),[],!1,null,null,null).exports;function vt(t,e,n,a,r,i,o){try{var s=t[i](o),c=s.value}catch(t){return void n(t)}s.done?e(c):Promise.resolve(c).then(a,r)}const pt={components:{Loader:i.Z,AdminVerticalLayout:ft,AdminHorizontalLayout:F},methods:{setfavicon:function(){var t,e=this;return(t=r().mark((function t(){var n;return r().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.next=2,e.$store.dispatch("setting/fetchSetting");case 2:(n=document.getElementById("favicon"))&&n.setAttribute("href",e.setting.favicon_url);case 4:case"end":return t.stop()}}),t)})),function(){var e=this,n=arguments;return new Promise((function(a,r){var i=t.apply(e,n);function o(t){vt(i,a,r,o,s,"next",t)}function s(t){vt(i,a,r,o,s,"throw",t)}o(void 0)}))})()}},computed:{permissionLoaded:function(){return this.$store.getters["rolepermission/getPermissionLoadingStatus"]},setting:function(){return this.$store.getters["setting/setting"]}},mounted:function(){var t=this;setTimeout((function(){t.setfavicon()}),1e3)}};const gt=(0,v.Z)(pt,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[t.permissionLoaded?n("div",["left"==t.setting.nav_position?n("admin-vertical-layout"):"top"==t.setting.nav_position?n("admin-horizontal-layout"):n("div",[n("h3",[t._v(t._s(t.$t("error"))+"!")]),t._v(" "),n("p",[t._v(t._s(t.$t("something_went_wrong"))+"! "+t._s(t.$t("app_layout_not_found"))+"!")])])],1):t._e()])}),[],!1,null,null,null).exports}}]);