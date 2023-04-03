(self.webpackChunk=self.webpackChunk||[]).push([[5851,549],{549:(t,e,s)=>{"use strict";s.r(e),s.d(e,{default:()=>r});const n={data:function(){return{notFound:"/images/not-found.svg"}},props:{word:{type:String,default:"user",required:!1},route:{type:String,required:!1},btnShow:{type:Boolean,required:!1,default:!0}}};const r=(0,s(1900).Z)(n,(function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"empty"},[s("div",{staticClass:"empty-img"},[s("img",{attrs:{src:t.notFound,height:"128",alt:"not found"}})]),t._v(" "),s("p",{staticClass:"empty-title"},[t._v(t._s(t.$t("no_results_found")))]),t._v(" "),s("p",{staticClass:"empty-subtitle text-muted"},[t._v("\n        "+t._s(t.$t("there_is_no"))+" "+t._s(t.word)+" "+t._s(t.$t("found_in_this_page"))+".\n    ")]),t._v(" "),t.route&&t.btnShow?s("div",{staticClass:"empty-action"},[s("router-link",{staticClass:"btn btn-primary",attrs:{to:{name:t.route}}},[s("svg",{staticClass:"icon",attrs:{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24","stroke-width":"2",stroke:"currentColor",fill:"none","stroke-linecap":"round","stroke-linejoin":"round"}},[s("path",{attrs:{stroke:"none",d:"M0 0h24v24H0z",fill:"none"}}),t._v(" "),s("line",{attrs:{x1:"12",y1:"5",x2:"12",y2:"19"}}),t._v(" "),s("line",{attrs:{x1:"5",y1:"12",x2:"19",y2:"12"}})]),t._v("\n            "+t._s(t.$t("add_your_first"))+" "+t._s(t.word)+"\n        ")])],1):t._e()])}),[],!1,null,null,null).exports},5851:(t,e,s)=>{"use strict";s.r(e),s.d(e,{default:()=>v});var n=s(7757),r=s.n(n),a=s(549),i=s(629);function o(t,e){var s=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),s.push.apply(s,n)}return s}function c(t){for(var e=1;e<arguments.length;e++){var s=null!=arguments[e]?arguments[e]:{};e%2?o(Object(s),!0).forEach((function(e){l(t,e,s[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(s)):o(Object(s)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(s,e))}))}return t}function l(t,e,s){return e in t?Object.defineProperty(t,e,{value:s,enumerable:!0,configurable:!0,writable:!0}):t[e]=s,t}function d(t,e,s,n,r,a,i){try{var o=t[a](i),c=o.value}catch(t){return void s(t)}o.done?e(c):Promise.resolve(c).then(n,r)}function u(t){return function(){var e=this,s=arguments;return new Promise((function(n,r){var a=t.apply(e,s);function i(t){d(a,n,r,i,o,"next",t)}function o(t){d(a,n,r,i,o,"throw",t)}i(void 0)}))}}const _={components:{NotFound:a.default},data:function(){return{disabledDates:{from:new Date(Date.now()+864e4)},searchForm:new Form({class_id:"",section_id:""}),sections:[],students:[],url:"/images/default.png"}},methods:{getStudents:function(){var t=this;return u(r().mark((function e(){var s;return r().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,t.searchForm.post("/api/reports/students");case 2:s=e.sent,t.students=s.data.data;case 4:case"end":return e.stop()}}),e)})))()},getSections:function(){var t=this;return u(r().mark((function e(){var s;return r().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,axios.get("/api/classes/".concat(t.searchForm.class_id,"/sections"));case 2:s=e.sent,t.sections=s.data.sections;case 4:case"end":return e.stop()}}),e)})))()}},computed:c(c({},(0,i.Se)({sessions:"session/sessions",classes:"classs/classes"})),{},{emptyData:function(){return this.students.length},searchButtonDisabled:function(){return""==this.searchForm.class_id||""==this.searchForm.section_id}}),created:function(){var t=this;return u(r().mark((function e(){return r().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,t.hasPermisssion("student-report");case 2:t.$store.dispatch("session/fetchSessions"),t.$store.dispatch("classs/fetchClasses");case 4:case"end":return e.stop()}}),e)})))()}};const v=(0,s(1900).Z)(_,(function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("div",{staticClass:"page-header d-print-none"},[s("div",{staticClass:"row align-items-center"},[s("div",{staticClass:"col"},[s("h2",{staticClass:"page-title"},[t._v(t._s(t.$route.meta.title))]),t._v(" "),s("h2",{staticClass:"page-pretitle"},[t._v(t._s(t.$t("student")))])])])]),t._v(" "),s("div",{staticClass:"row justify-content-center"},[s("div",{staticClass:"col-12"},[s("div",{staticClass:"row justify-content-center"},[s("div",{staticClass:"col-md-3 col-xl-2"},[s("select",{directives:[{name:"model",rawName:"v-model",value:t.searchForm.class_id,expression:"searchForm.class_id"}],staticClass:"form-control",class:{"is-invalid":t.searchForm.errors.has("class_id")},on:{change:[function(e){var s=Array.prototype.filter.call(e.target.options,(function(t){return t.selected})).map((function(t){return"_value"in t?t._value:t.value}));t.$set(t.searchForm,"class_id",e.target.multiple?s:s[0])},t.getSections]}},[s("option",{staticClass:"d-none",attrs:{value:""}},[t._v(t._s(t.$t("select_class")))]),t._v(" "),t._l(t.classes,(function(e){return s("option",{key:e.id,domProps:{value:e.id}},[t._v("\n                            "+t._s(e.name)+"\n                        ")])}))],2),t._v(" "),s("has-error",{attrs:{form:t.searchForm,field:"class_id"}})],1),t._v(" "),t.searchForm.class_id?s("div",{staticClass:"col-md-3 col-xl-2"},[s("select",{directives:[{name:"model",rawName:"v-model",value:t.searchForm.section_id,expression:"searchForm.section_id"}],staticClass:"form-control",class:{"is-invalid":t.searchForm.errors.has("section_id")},on:{change:function(e){var s=Array.prototype.filter.call(e.target.options,(function(t){return t.selected})).map((function(t){return"_value"in t?t._value:t.value}));t.$set(t.searchForm,"section_id",e.target.multiple?s:s[0])}}},[t.sections&&t.sections.length?s("option",{staticClass:"d-none",attrs:{selected:"",value:""}},[t._v("\n                            "+t._s(t.$t("select_section"))+"\n                        ")]):s("option",{staticClass:"d-none",attrs:{selected:"",value:""}},[t._v("\n                            "+t._s(t.$t("no_section_found"))+"\n                        ")]),t._v(" "),t.sections&&t.sections.length?t._l(t.sections,(function(e){return s("option",{key:e.id,domProps:{value:e.id}},[t._v("\n                                "+t._s(e.name)+"\n                            ")])})):t._e()],2),t._v(" "),s("has-error",{attrs:{form:t.searchForm,field:"section_id"}})],1):t._e(),t._v(" "),t.searchForm.class_id&&t.searchForm.section_id?s("div",{staticClass:"col-md-3 col-xl-2"},[s("button",{staticClass:"btn btn-primary btn-outline",attrs:{disabled:t.searchButtonDisabled},on:{click:t.getStudents}},[t._v("\n                        "+t._s(t.$t("get_student_list"))+"\n                    ")])]):t._e()])]),t._v(" "),t.students&&t.students.length?s("div",{staticClass:"col-12 mt-3"},[s("form",{on:{submit:function(e){return e.preventDefault(),t.saveAttendance(e)}}},[s("div",{staticClass:"card"},[s("div",{staticClass:"card-header"},[s("div",{staticClass:"card-title"},[t._v(t._s(t.$t("students")))])]),t._v(" "),s("div",{staticClass:"card-body table-responsive"},[s("table",{staticClass:"table table-vcenter text-nowrap datatable"},[s("thead",[s("tr",[s("th",[t._v(t._s(t.$t("image")))]),t._v(" "),s("th",[t._v(t._s(t.$t("name")))]),t._v(" "),s("th",[t._v(t._s(t.$t("roll_number")))]),t._v(" "),s("th",[t._v(t._s(t.$t("gender")))]),t._v(" "),s("th",[t._v(t._s(t.$t("date_of_birth")))]),t._v(" "),s("th",[t._v(t._s(t.$t("blood_group")))]),t._v(" "),s("th",[t._v(t._s(t.$t("admission_date")))]),t._v(" "),s("th",[t._v(t._s(t.$t("parent_name")))]),t._v(" "),s("th",[t._v(t._s(t.$t("parent_phone")))]),t._v(" "),s("th",[t._v(t._s(t.$t("action")))])])]),t._v(" "),s("tbody",t._l(t.students,(function(e){return s("tr",{key:e.id},[s("td",[s("img",{staticClass:"img-fluid mx-h-50 mx-w-50 rounded",attrs:{src:t.url,alt:"image",height:"80px",width:"80px"}})]),t._v(" "),s("td",[s("router-link",{attrs:{to:{name:"user-student-view",params:{id:e.id}}}},[t._v("\n                                            "+t._s(e.user.name)+"\n                                        ")])],1),t._v(" "),s("td",[t._v("\n                                        "+t._s(e.roll_no)+"\n                                    ")]),t._v(" "),s("td",[t._v("\n                                        "+t._s(t._f("capitalize")(e.gender))+"\n                                    ")]),t._v(" "),s("td",[t._v("\n                                        "+t._s(e.date_of_birth)+"\n                                    ")]),t._v(" "),s("td",[t._v("\n                                        "+t._s(e.blood_group)+"\n                                    ")]),t._v(" "),s("td",[t._v("\n                                        "+t._s(e.admission_date)+"\n                                    ")]),t._v(" "),s("td",[t._v("\n                                        "+t._s(e.guardian.user.name)+"\n                                    ")]),t._v(" "),s("td",[t._v("\n                                        "+t._s(e.guardian.phone)+"\n                                    ")]),t._v(" "),s("td",[s("router-link",{attrs:{to:{name:"user-student-view",params:{id:e.id}},href:"#"}},[t._v(t._s(t.$t("view_details")))])],1)])})),0)])])])])]):s("div",{staticClass:"d-flex justify-content-center py-3"},[s("NotFound",{attrs:{word:"student"}})],1)])])}),[],!1,null,null,null).exports}}]);