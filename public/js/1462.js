(self.webpackChunk=self.webpackChunk||[]).push([[1462],{5277:(t,e,s)=>{"use strict";s.d(e,{Z:()=>r});var a=s(3645),n=s.n(a)()((function(t){return t[1]}));n.push([t.id,".text-align-center[data-v-4537e1c2]{text-align:center}.result span.no-result[data-v-4537e1c2]{color:red}.fail[data-v-4537e1c2],.pass[data-v-4537e1c2]{padding:5px}.pass[data-v-4537e1c2]{background-color:green;color:#fff}.fail[data-v-4537e1c2]{background-color:red;color:#fff}",""]);const r=n},1462:(t,e,s)=>{"use strict";s.r(e),s.d(e,{default:()=>_});var a=s(7757),n=s.n(a);function r(t,e){var s=Object.keys(t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);e&&(a=a.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),s.push.apply(s,a)}return s}function c(t,e,s){return e in t?Object.defineProperty(t,e,{value:s,enumerable:!0,configurable:!0,writable:!0}):t[e]=s,t}function i(t,e,s,a,n,r,c){try{var i=t[r](c),o=i.value}catch(t){return void s(t)}i.done?e(o):Promise.resolve(o).then(a,n)}function o(t){return function(){var e=this,s=arguments;return new Promise((function(a,n){var r=t.apply(e,s);function c(t){i(r,a,n,c,o,"next",t)}function o(t){i(r,a,n,c,o,"throw",t)}c(void 0)}))}}const l={data:function(){return{disabledDates:{from:new Date(Date.now()+864e4)},searchForm:new Form({exam_id:""}),subjects:[],students:[],subjectmarks:[],finalResult:{},url:"/images/default.png"}},methods:{getExamResults:function(){var t=this;return o(n().mark((function e(){var s;return n().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,t.searchForm.post("/api/student/exam-results");case 3:s=e.sent,t.students=s.data.students,t.subjects=s.data.subjects,t.subjectmarks=s.data.students[0].marks,t.finalResult=s.data.students[0].final_results,e.next=14;break;case 10:e.prev=10,e.t0=e.catch(0),t.toastError(e.t0.response.data.message),console.log(e.t0);case 14:case"end":return e.stop()}}),e,null,[[0,10]])})))()},getResult:function(t,e){var s=e.subjects[t.id];return 0==s.entry?s.results:s.results.grade},setPointGrade:function(t){return t.point?0==t.point?'<span>\n                    <b class="text-danger">'.concat(t.point,"</b>"," / ",'<b class="text-danger">').concat(t.grade,"</b>\n                </span>"):"<span>\n                    <b>".concat(t.point,"</b>"," / ","<b>").concat(t.grade,"</b>\n                </span>"):0==t.point?"<span>\n                    <b>".concat(t.point,"</b>"," / ","<b>").concat(t.grade,"</b>\n                </span>"):'<span class="text-danger">(Marks did\'nt entry)</span>'},setMarks:function(t){return this.subjectmarks&&this.subjectmarks.length?this.subjectmarks.find((function(e){return e.subject_id==t})).mark:'<span class="text-danger">(Marks did\'nt entry)</span>'}},computed:function(t){for(var e=1;e<arguments.length;e++){var s=null!=arguments[e]?arguments[e]:{};e%2?r(Object(s),!0).forEach((function(e){c(t,e,s[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(s)):r(Object(s)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(s,e))}))}return t}({},(0,s(629).Se)({exams:"exam/examList",user:"auth/user"})),created:function(){var t=this;return o(n().mark((function e(){return n().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return"Student"!=t.authenticateUser.original_role&&t.redirect("401"),e.next=3,t.$store.dispatch("exam/fetchExamsList");case 3:case"end":return e.stop()}}),e)})))()},mounted:function(){this.exams.length&&(this.searchForm.exam_id=this.exams[0].id,this.getExamResults())}};var u=s(3379),d=s.n(u),v=s(5277),p={insert:"head",singleton:!1};d()(v.Z,p);v.Z.locals;const _=(0,s(1900).Z)(l,(function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("div",{staticClass:"page-header d-print-none"},[s("div",{staticClass:"row align-items-center"},[s("div",{staticClass:"col"},[s("h2",{staticClass:"page-title"},[t._v(t._s(t.$route.meta.title))]),t._v(" "),s("h2",{staticClass:"page-pretitle"},[t._v(t._s(t.$t("exam")))])])])]),t._v(" "),s("div",{staticClass:"row justify-content-center"},[s("div",{staticClass:"col-12"},[s("div",{staticClass:"row justify-content-center"},[s("div",{staticClass:"col-md-3 col-sm-4 col-5"},[s("select",{directives:[{name:"model",rawName:"v-model",value:t.searchForm.exam_id,expression:"searchForm.exam_id"}],staticClass:"form-control text-center",class:{"is-invalid":t.searchForm.errors.has("exam_id")},on:{change:function(e){var s=Array.prototype.filter.call(e.target.options,(function(t){return t.selected})).map((function(t){return"_value"in t?t._value:t.value}));t.$set(t.searchForm,"exam_id",e.target.multiple?s:s[0])}}},[s("option",{attrs:{value:"",disabled:""}},[t._v(t._s(t.$t("select_exam")))]),t._v(" "),t._l(t.exams,(function(e){return s("option",{key:e.id,domProps:{value:e.id}},[t._v("\n                            "+t._s(e.name)+"\n                        ")])}))],2),t._v(" "),s("has-error",{attrs:{form:t.searchForm,field:"class_id"}})],1),t._v(" "),s("div",{staticClass:"col-md-3 col-sm-4 col-7"},[s("button",{staticClass:"btn btn-primary btn-outline",on:{click:function(e){return e.preventDefault(),t.getExamResults(e)}}},[t._v("\n                        "+t._s(t.$t("get_exam_results"))+"\n                    ")])])])]),t._v(" "),t.students.length?s("div",{staticClass:"col-12"},[s("div",{staticClass:"card mt-3"},[s("div",{staticClass:"card-header"},[s("div",{staticClass:"card-title"},[t._v(t._s(t.$t("results")))])]),t._v(" "),s("div",{staticClass:"card-body"},[[s("table",{staticClass:"table table-hover "},[s("thead",[s("tr",[s("th",[t._v(t._s(t.$t("subject")))]),t._v(" "),s("th",[t._v(t._s(t.$t("marks")))]),t._v(" "),s("th",[t._v(t._s(t.$t("grade"))+" / "+t._s(t.$t("gpa")))]),t._v(" "),s("th",[t._v(t._s(t.$t("status")))])])]),t._v(" "),s("tbody",t._l(t.subjects,(function(e,a){return s("tr",{key:a},[s("td",[t._v(t._s(e.name))]),t._v(" "),s("td",[s("span",{domProps:{innerHTML:t._s(t.setMarks(e.id))}}),t._v(" "),t.subjectmarks&&t.subjectmarks.length?s("span",[t._v("\n                                            "+t._s(t.$t("out_of"))+" "+t._s(e.total_marks)+"\n                                        ")]):t._e()]),t._v(" "),t.students[0]?s("td",{domProps:{innerHTML:t._s(t.setPointGrade(t.students[0].subjects[e.id].results))}}):t._e(),t._v(" "),t.students[0]?s("td",[t.students[0].subjects[e.id].pass?s("span",{staticClass:"pass"},[t._v("\n                                            "+t._s(t.$t("passed"))+"\n                                        ")]):s("span",{staticClass:"fail"},[t._v("\n                                            "+t._s(t.$t("failed"))+"\n                                        ")])]):t._e()])})),0)]),t._v(" "),s("div",[s("div",{staticClass:"row justify-content-end"},[s("div",{staticClass:"col-md-3"},[s("h2",[t._v(t._s(t.$t("gpa"))+": "+t._s(t.finalResult.gpa))])]),t._v(" "),s("div",{staticClass:"col-md-3"},[s("h1",[t.finalResult.pass?s("span",{staticClass:"text-success"},[t._v(t._s(t.$t("passed")))]):s("span",{staticClass:"text-danger"},[t._v(t._s(t.$t("failed")))])])])])])]],2)])]):[s("NotFound",{attrs:{word:"results"}})]],2)])}),[],!1,null,"4537e1c2",null).exports}}]);