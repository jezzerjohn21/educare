(self.webpackChunk=self.webpackChunk||[]).push([[7917],{8008:(t,e,s)=>{"use strict";s.d(e,{Z:()=>n});var a=s(3645),r=s.n(a)()((function(t){return t[1]}));r.push([t.id,".text-align-center[data-v-e0ceb47e]{text-align:center}.result span.no-result[data-v-e0ceb47e]{color:red}.fail[data-v-e0ceb47e],.pass[data-v-e0ceb47e]{padding:5px}.pass[data-v-e0ceb47e]{background-color:green;color:#fff}.fail[data-v-e0ceb47e]{background-color:red;color:#fff}.text-right[data-v-e0ceb47e]{text-align:right}",""]);const n=r},7917:(t,e,s)=>{"use strict";s.r(e),s.d(e,{default:()=>p});var a=s(7757),r=s.n(a);function n(t,e){var s=Object.keys(t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(t);e&&(a=a.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),s.push.apply(s,a)}return s}function i(t,e,s){return e in t?Object.defineProperty(t,e,{value:s,enumerable:!0,configurable:!0,writable:!0}):t[e]=s,t}function c(t,e,s,a,r,n,i){try{var c=t[n](i),o=c.value}catch(t){return void s(t)}c.done?e(o):Promise.resolve(o).then(a,r)}function o(t){return function(){var e=this,s=arguments;return new Promise((function(a,r){var n=t.apply(e,s);function i(t){c(n,a,r,i,o,"next",t)}function o(t){c(n,a,r,i,o,"throw",t)}i(void 0)}))}}const l={data:function(){return{disabledDates:{from:new Date(Date.now()+864e4)},searchForm:new Form({exam_id:"",student_id:""}),subjects:[],students:[],subjectmarks:[],finalResult:{},url:"/images/default.png"}},methods:{getExamResults:function(){var t=this;return o(r().mark((function e(){var s;return r().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,t.searchForm.post("/api/parent/exam-results");case 3:s=e.sent,t.students=s.data.students,t.subjects=s.data.subjects,t.subjectmarks=s.data.students[0].marks,t.finalResult=s.data.students[0].final_results,e.next=14;break;case 10:e.prev=10,e.t0=e.catch(0),t.toastError(e.t0.response.data.message),console.log(e.t0);case 14:case"end":return e.stop()}}),e,null,[[0,10]])})))()},getResult:function(t,e){var s=e.subjects[t.id];return 0==s.entry?s.results:s.results.grade},setPointGrade:function(t){return t.point?0==t.point?'<span>\n                    <b class="text-danger">'.concat(t.point,"</b>"," / ",'<b class="text-danger">').concat(t.grade,"</b>\n                </span>"):"<span>\n                    <b>".concat(t.point,"</b>"," / ","<b>").concat(t.grade,"</b>\n                </span>"):0==t.point?"<span>\n                            <b>".concat(t.point,"</b>"," / ","<b>").concat(t.grade,"</b>\n                        </span>"):'<span class="text-danger">(Marks did\'nt entry)</span>'},setMarks:function(t){return this.subjectmarks&&this.subjectmarks.length?this.subjectmarks.find((function(e){return e.subject_id==t})).mark:'<span class="text-danger">(Marks did\'nt entry)</span>'}},computed:function(t){for(var e=1;e<arguments.length;e++){var s=null!=arguments[e]?arguments[e]:{};e%2?n(Object(s),!0).forEach((function(e){i(t,e,s[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(s)):n(Object(s)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(s,e))}))}return t}({},(0,s(629).Se)({exams:"exam/examList",childs:"parent/getChilds"})),created:function(){var t=this;return o(r().mark((function e(){return r().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return"Guardian"!=t.authenticateUser.original_role&&t.redirect("401"),e.next=3,t.$store.dispatch("exam/fetchExamsList");case 3:return e.next=5,t.$store.dispatch("parent/fetchChilds");case 5:case"end":return e.stop()}}),e)})))()},mounted:function(){this.exams.length&&(this.searchForm.exam_id=this.exams[0].id,this.searchForm.student_id=this.childs[0].student_id,this.getExamResults())}};var d=s(3379),u=s.n(d),v=s(8008),_={insert:"head",singleton:!1};u()(v.Z,_);v.Z.locals;const p=(0,s(1900).Z)(l,(function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("div",{staticClass:"page-header d-print-none"},[s("div",{staticClass:"row align-items-center"},[s("div",{staticClass:"col"},[s("h2",{staticClass:"page-title"},[t._v(t._s(t.$route.meta.title))]),t._v(" "),s("h2",{staticClass:"page-pretitle"},[t._v(t._s(t.$t("exam")))])])])]),t._v(" "),s("div",{staticClass:"row justify-content-center"},[s("div",{staticClass:"col-12"},[s("div",{staticClass:"row justify-content-center"},[s("div",{staticClass:"col-6 col-sm-2"},[s("select",{directives:[{name:"model",rawName:"v-model",value:t.searchForm.student_id,expression:"searchForm.student_id"}],staticClass:"form-control text-center",class:{"is-invalid":t.searchForm.errors.has("student_id")},on:{change:function(e){var s=Array.prototype.filter.call(e.target.options,(function(t){return t.selected})).map((function(t){return"_value"in t?t._value:t.value}));t.$set(t.searchForm,"student_id",e.target.multiple?s:s[0])}}},[s("option",{staticClass:"d-none",attrs:{value:"",selected:""}},[t._v(t._s(t.$t("select_child")))]),t._v(" "),t._l(t.childs,(function(e){return s("option",{key:e.id,domProps:{value:e.student_id}},[t._v("\n                            "+t._s(e.name)+"\n                        ")])}))],2),t._v(" "),s("has-error",{attrs:{form:t.searchForm,field:"student_id"}})],1),t._v(" "),t.searchForm.student_id?s("div",{staticClass:"col-6 col-sm-3"},[s("select",{directives:[{name:"model",rawName:"v-model",value:t.searchForm.exam_id,expression:"searchForm.exam_id"}],staticClass:"form-control text-center",class:{"is-invalid":t.searchForm.errors.has("exam_id")},on:{change:function(e){var s=Array.prototype.filter.call(e.target.options,(function(t){return t.selected})).map((function(t){return"_value"in t?t._value:t.value}));t.$set(t.searchForm,"exam_id",e.target.multiple?s:s[0])}}},[s("option",{attrs:{value:"",disabled:""}},[t._v(t._s(t.$t("select_exam")))]),t._v(" "),t._l(t.exams,(function(e){return s("option",{key:e.id,domProps:{value:e.id}},[t._v("\n                            "+t._s(e.name)+"\n                        ")])}))],2),t._v(" "),s("has-error",{attrs:{form:t.searchForm,field:"class_id"}})],1):t._e(),t._v(" "),t.searchForm.student_id&&t.searchForm.exam_id?s("div",{staticClass:"col-5 col-sm-2"},[s("button",{staticClass:"btn btn-primary btn-outline",on:{click:function(e){return e.preventDefault(),t.getExamResults(e)}}},[t._v("\n                        "+t._s(t.$t("get_exam_results"))+"\n                    ")])]):t._e()])]),t._v(" "),t.students.length?s("div",{staticClass:"col-12"},[s("div",{staticClass:"card mt-3"},[s("div",{staticClass:"card-header"},[s("div",{staticClass:"card-title"},[t._v(t._s(t.$t("results")))])]),t._v(" "),s("div",{staticClass:"card-body"},[[s("table",{staticClass:"table table-hover "},[s("thead",[s("tr",[s("th",[t._v(t._s(t.$t("subject")))]),t._v(" "),s("th",[t._v(t._s(t.$t("marks")))]),t._v(" "),s("th",[t._v(t._s(t.$t("point"))+" / "+t._s(t.$t("grade")))]),t._v(" "),s("th",[t._v(t._s(t.$t("status")))])])]),t._v(" "),s("tbody",t._l(t.subjects,(function(e,a){return s("tr",{key:a},[s("td",[t._v(t._s(e.name))]),t._v(" "),s("td",[s("span",{domProps:{innerHTML:t._s(t.setMarks(e.id))}}),t._v(" "),t.subjectmarks&&t.subjectmarks.length?s("span",[t._v("\n                                            "+t._s(t.$t("out_of"))+" "+t._s(e.total_marks)+"\n                                        ")]):t._e()]),t._v(" "),t.students[0]?s("td",{domProps:{innerHTML:t._s(t.setPointGrade(t.students[0].subjects[e.id].results))}}):t._e(),t._v(" "),t.students[0]?s("td",[t.students[0].subjects[e.id].pass?s("span",{staticClass:"pass"},[t._v("\n                                            "+t._s(t.$t("passed"))+"\n                                        ")]):s("span",{staticClass:"fail"},[t._v("\n                                            "+t._s(t.$t("failed"))+"\n                                        ")])]):t._e()])})),0),t._v(" "),s("tfoot",[s("tr",[s("td",{staticClass:"text-right",attrs:{colspan:"3"}},[s("h2",{staticClass:"font-weight-bold"},[t._v(t._s(t.$t("gpa"))+":")])]),t._v(" "),s("td",[s("h3",[t._v(t._s(t.finalResult.gpa))])])]),t._v(" "),s("tr",[s("td",{staticClass:"text-right",attrs:{colspan:"3"}},[s("h2",{staticClass:"font-weight-bold"},[t._v(t._s(t.$t("result"))+":")])]),t._v(" "),s("td",[s("h3",[t.finalResult.pass?s("span",{staticClass:"text-success"},[t._v(t._s(t.$t("passed")))]):s("span",{staticClass:"text-danger"},[t._v(t._s(t.$t("failed")))])])])])])])]],2)])]):[s("NotFound",{attrs:{word:"results"}})]],2)])}),[],!1,null,"e0ceb47e",null).exports}}]);