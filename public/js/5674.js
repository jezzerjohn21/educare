(self.webpackChunk=self.webpackChunk||[]).push([[5674,549],{549:(t,e,s)=>{"use strict";s.r(e),s.d(e,{default:()=>n});const a={data:function(){return{notFound:"/images/not-found.svg"}},props:{word:{type:String,default:"user",required:!1},route:{type:String,required:!1},btnShow:{type:Boolean,required:!1,default:!0}}};const n=(0,s(1900).Z)(a,(function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",{staticClass:"empty"},[s("div",{staticClass:"empty-img"},[s("img",{attrs:{src:t.notFound,height:"128",alt:"not found"}})]),t._v(" "),s("p",{staticClass:"empty-title"},[t._v(t._s(t.$t("no_results_found")))]),t._v(" "),s("p",{staticClass:"empty-subtitle text-muted"},[t._v("\n        "+t._s(t.$t("there_is_no"))+" "+t._s(t.word)+" "+t._s(t.$t("found_in_this_page"))+".\n    ")]),t._v(" "),t.route&&t.btnShow?s("div",{staticClass:"empty-action"},[s("router-link",{staticClass:"btn btn-primary",attrs:{to:{name:t.route}}},[s("svg",{staticClass:"icon",attrs:{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24","stroke-width":"2",stroke:"currentColor",fill:"none","stroke-linecap":"round","stroke-linejoin":"round"}},[s("path",{attrs:{stroke:"none",d:"M0 0h24v24H0z",fill:"none"}}),t._v(" "),s("line",{attrs:{x1:"12",y1:"5",x2:"12",y2:"19"}}),t._v(" "),s("line",{attrs:{x1:"5",y1:"12",x2:"19",y2:"12"}})]),t._v("\n            "+t._s(t.$t("add_your_first"))+" "+t._s(t.word)+"\n        ")])],1):t._e()])}),[],!1,null,null,null).exports},5674:(t,e,s)=>{"use strict";s.r(e),s.d(e,{default:()=>f});var a=s(7757),n=s.n(a),r=s(7484),c=s.n(r),o=s(549),i=s(629);function l(t,e){var s=Object.keys(t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);e&&(a=a.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),s.push.apply(s,a)}return s}function d(t){for(var e=1;e<arguments.length;e++){var s=null!=arguments[e]?arguments[e]:{};e%2?l(Object(s),!0).forEach((function(e){u(t,e,s[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(s)):l(Object(s)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(s,e))}))}return t}function u(t,e,s){return e in t?Object.defineProperty(t,e,{value:s,enumerable:!0,configurable:!0,writable:!0}):t[e]=s,t}function _(t,e,s,a,n,r,c){try{var o=t[r](c),i=o.value}catch(t){return void s(t)}o.done?e(i):Promise.resolve(i).then(a,n)}function m(t){return function(){var e=this,s=arguments;return new Promise((function(a,n){var r=t.apply(e,s);function c(t){_(r,a,n,c,o,"next",t)}function o(t){_(r,a,n,c,o,"throw",t)}c(void 0)}))}}const v={components:{NotFound:o.default},data:function(){return{disabledDates:{from:new Date(Date.now()+864e4)},searchForm:new Form({date:"",class_id:"",section_id:""}),sections:[],students:[],attendance_form:[],last_days_attendaces:[],attendance_errors:[],attendences_load:!1,url:"/images/default.png"}},methods:{getStudents:function(){var t=this;return m(n().mark((function e(){var s;return n().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t.students=[],t.attendance_form=[],t.attendance_errors=[],t.attendences_load=!1,e.prev=4,e.next=7,t.searchForm.post("/api/attendance/get-students");case 7:s=e.sent,t.students=s.data.students,t.last_days_attendaces=s.data.lastdays_attendace,t.generateAttendance(),e.next=17;break;case 13:e.prev=13,e.t0=e.catch(4),t.toastError(e.t0.response.data.message),console.log(e.t0);case 17:case"end":return e.stop()}}),e,null,[[4,13]])})))()},setDate:function(t){var e=c()(t).format("YYYY-MM-DD");this.searchForm.date=e},saveAttendance:function(){var t=this;return m(n().mark((function e(){var s,a;return n().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,s=t.students.map((function(e,s){return{student_id:e.id,status:t.attendance_form[s],class_id:t.searchForm.class_id,section_id:t.searchForm.section_id,date:t.searchForm.date}})),e.next=4,axios.put("/api/attendance/student",{student_data:s});case 4:a=e.sent,t.toastSuccess(a.data.message),e.next=13;break;case 8:e.prev=8,e.t0=e.catch(0),t.toastError(e.t0.response.data.message),422==e.t0.response.status&&(t.attendance_errors=e.t0.response.data.errors),console.log(e.t0);case 13:case"end":return e.stop()}}),e,null,[[0,8]])})))()},getClass:function(){var t=this;return m(n().mark((function e(){return n().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:t.$store.dispatch("classs/fetchClasses");case 1:case"end":return e.stop()}}),e)})))()},getSections:function(){var t=this;return m(n().mark((function e(){var s;return n().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,axios.get("/api/classes/".concat(t.searchForm.class_id,"/sections"));case 2:s=e.sent,t.sections=s.data.sections;case 4:case"end":return e.stop()}}),e)})))()},generateAttendance:function(){var t=this;this.students.forEach((function(e,s){t.attendance_form[s]=e.attendances.status})),this.attendences_load=!0}},computed:d(d({},(0,i.Se)({classes:"classs/classes"})),{},{disableSearchButton:function(){return""==this.searchForm.date||""==this.searchForm.class_id||""==this.searchForm.section_id}}),mounted:function(){var t=this;return m(n().mark((function e(){return n().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:t.hasPermisssion("student-attendance-list"),t.$store.dispatch("classs/fetchClasses"),t.searchForm.date=c()().format("YYYY-MM-DD");case 3:case"end":return e.stop()}}),e)})))()}};const f=(0,s(1900).Z)(v,(function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("div",{staticClass:"page-header d-print-none"},[s("div",{staticClass:"row align-items-center"},[s("div",{staticClass:"col"},[s("h2",{staticClass:"page-title"},[t._v(t._s(t.$route.meta.title))]),t._v(" "),s("h2",{staticClass:"page-pretitle"},[t._v(t._s(t.$t("attendance")))])])])]),t._v(" "),s("div",{staticClass:"row justify-content-center"},[s("div",{staticClass:"col-12"},[s("div",{staticClass:"row justify-content-center"},[s("div",{staticClass:"col-sm-12 col-md-3 col-lg-2 mb-3"},[s("date-picker",{attrs:{disabledDates:t.disabledDates,format:"dd MMMM, yyyy","input-class":"form-control",placeholder:t.$t("select_date"),value:t.searchForm.date},on:{input:function(e){return t.setDate(e)}}}),t._v(" "),s("has-error",{staticClass:"d-block",attrs:{form:t.searchForm,field:"date"}})],1),t._v(" "),t.searchForm.date?s("div",{staticClass:"col-sm-12 col-md-3 col-lg-2 mb-3"},[s("select",{directives:[{name:"model",rawName:"v-model",value:t.searchForm.class_id,expression:"searchForm.class_id"}],staticClass:"form-control",class:{"is-invalid":t.searchForm.errors.has("class_id")},on:{change:[function(e){var s=Array.prototype.filter.call(e.target.options,(function(t){return t.selected})).map((function(t){return"_value"in t?t._value:t.value}));t.$set(t.searchForm,"class_id",e.target.multiple?s:s[0])},t.getSections]}},[s("option",{staticClass:"d-none",attrs:{value:""}},[t._v(t._s(t.$t("select_class")))]),t._v(" "),t._l(t.classes,(function(e){return s("option",{key:e.id,domProps:{value:e.id}},[t._v("\n                            "+t._s(e.name)+"\n                        ")])}))],2),t._v(" "),s("has-error",{attrs:{form:t.searchForm,field:"class_id"}})],1):t._e(),t._v(" "),t.searchForm.date&&t.searchForm.class_id?s("div",{staticClass:"col-sm-12 col-md-3 col-lg-2 mb-3"},[s("select",{directives:[{name:"model",rawName:"v-model",value:t.searchForm.section_id,expression:"searchForm.section_id"}],staticClass:"form-control",class:{"is-invalid":t.searchForm.errors.has("section_id")},on:{change:function(e){var s=Array.prototype.filter.call(e.target.options,(function(t){return t.selected})).map((function(t){return"_value"in t?t._value:t.value}));t.$set(t.searchForm,"section_id",e.target.multiple?s:s[0])}}},[t.sections&&t.sections.length?s("option",{staticClass:"d-none",attrs:{selected:"",value:"",disabled:""}},[t._v("\n                            "+t._s(t.$t("select_section"))+"\n                        ")]):s("option",{staticClass:"d-none",attrs:{selected:"",value:""}},[t._v("\n                            "+t._s(t.$t("no_section_found"))+"\n                        ")]),t._v(" "),t.sections&&t.sections.length?t._l(t.sections,(function(e){return s("option",{key:e.id,domProps:{value:e.id}},[t._v("\n                                "+t._s(e.name)+"\n                            ")])})):t._e()],2),t._v(" "),s("has-error",{attrs:{form:t.searchForm,field:"section_id"}})],1):t._e(),t._v(" "),t.searchForm.date&&t.searchForm.class_id&&t.searchForm.section_id?s("div",{staticClass:"col-sm-12 col-md-3 col-lg-2 mb-3"},[s("button",{staticClass:"btn btn-primary btn-outline",attrs:{disabled:t.disableSearchButton},on:{click:t.getStudents}},[t._v("\n                        "+t._s(t.$t("get_student_list"))+"\n                    ")])]):t._e()])]),t._v(" "),t.students.length&&t.attendences_load?s("div",{staticClass:"col-12 mt-3"},[s("form",{on:{submit:function(e){return e.preventDefault(),t.saveAttendance(e)}}},[s("div",{staticClass:"card"},[s("div",{staticClass:"card-header"},[s("div",{staticClass:"card-title"},[t._v(t._s(t.$t("attendance")))])]),t._v(" "),s("div",{staticClass:"card-body p-0 table-responsive"},[s("table",{staticClass:"table table-vcenter"},[s("thead",[s("tr",[s("th",[t._v(t._s(t.$t("image")))]),t._v(" "),s("th",[t._v(t._s(t.$t("name")))]),t._v(" "),s("th",[t._v(t._s(t.$t("roll_number")))]),t._v(" "),s("th",[t._v(t._s(t.$t("status")))]),t._v(" "),s("th",[t._v(t._s(t.$t("previous_7_days_status")))])])]),t._v(" "),s("tbody",t._l(t.students,(function(e,a){return s("tr",{key:e.id},[s("td",[s("img",{staticClass:"img-fluid mx-h-50 mx-w-50 rounded",attrs:{src:e.user.image_url,alt:"",height:"50px",width:"50px"}})]),t._v(" "),s("td",[t._v("\n                                        "+t._s(e.user.name)+"\n                                    ")]),t._v(" "),s("td",[t._v("\n                                        "+t._s(e.roll_no)+"\n                                    ")]),t._v(" "),s("td",[s("div",{staticClass:"mb-3"},[s("div",[s("label",{staticClass:"form-check form-check-inline"},[s("input",{directives:[{name:"model",rawName:"v-model",value:t.attendance_form[a],expression:"attendance_form[index]"}],staticClass:"form-check-input",attrs:{type:"radio"},domProps:{value:!0,checked:t._q(t.attendance_form[a],!0)},on:{change:function(e){return t.$set(t.attendance_form,a,!0)}}}),t._v(" "),s("span",{staticClass:"form-check-label"},[t._v(t._s(t.$t("present")))])]),t._v(" "),s("label",{staticClass:"form-check form-check-inline"},[s("input",{directives:[{name:"model",rawName:"v-model",value:t.attendance_form[a],expression:"attendance_form[index]"}],staticClass:"form-check-input",attrs:{type:"radio"},domProps:{value:!1,checked:t._q(t.attendance_form[a],!1)},on:{change:function(e){return t.$set(t.attendance_form,a,!1)}}}),t._v(" "),s("span",{staticClass:"form-check-label"},[t._v(t._s(t.$t("absent")))])])])])]),t._v(" "),s("td",[s("div",{staticClass:"d-flex items-center"},t._l(t.last_days_attendaces[0],(function(e,a){return s("div",{key:a,staticClass:"\n                        d-flex\n                        flex-column\n                        align-items-center\n                        justify-content-center\n                        mx-2\n                      "},[s("span",[t._v(t._s(t.formateDate(e.date,"DD")))]),t._v(" "),s("span",{staticClass:"d-inline-block"},[e.status?s("icon-check",{attrs:{stroke:"#2A8737"}}):s("icon-cross",{attrs:{stroke:"#F23D4E"}})],1)])})),0)])])})),0)])]),t._v(" "),s("div",{staticClass:"card-footer"},[s("button",{staticClass:"btn btn-primary text-center",attrs:{type:"submit"}},[t._v("\n                            "+t._s(t.$t("save_all"))+"\n                        ")])])])])]):s("div",{staticClass:"d-flex justify-content-center py-3"},[s("NotFound",{attrs:{word:"student"}})],1)])])}),[],!1,null,null,null).exports}}]);