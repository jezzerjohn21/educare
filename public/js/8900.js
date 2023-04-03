(self.webpackChunk=self.webpackChunk||[]).push([[8900],{1496:t=>{const e=t=>void 0===t,s=t=>Array.isArray(t),r=t=>t&&"number"==typeof t.size&&"string"==typeof t.type&&"function"==typeof t.slice,a=(t,n,i,o)=>((n=n||{}).indices=!e(n.indices)&&n.indices,n.nullsAsUndefineds=!e(n.nullsAsUndefineds)&&n.nullsAsUndefineds,n.booleansAsIntegers=!e(n.booleansAsIntegers)&&n.booleansAsIntegers,n.allowEmptyArrays=!e(n.allowEmptyArrays)&&n.allowEmptyArrays,i=i||new FormData,e(t)||(null===t?n.nullsAsUndefineds||i.append(o,""):(t=>"boolean"==typeof t)(t)?n.booleansAsIntegers?i.append(o,t?1:0):i.append(o,t):s(t)?t.length?t.forEach(((t,e)=>{const s=o+"["+(n.indices?e:"")+"]";a(t,n,i,s)})):n.allowEmptyArrays&&i.append(o+"[]",""):(t=>t instanceof Date)(t)?i.append(o,t.toISOString()):!(t=>t===Object(t))(t)||(t=>r(t)&&"string"==typeof t.name&&("object"==typeof t.lastModifiedDate||"number"==typeof t.lastModified))(t)||r(t)?i.append(o,t):Object.keys(t).forEach((e=>{const r=t[e];if(s(r))for(;e.length>2&&e.lastIndexOf("[]")===e.length-2;)e=e.substring(0,e.length-2);a(r,n,i,o?o+"["+e+"]":e)}))),i);t.exports={serialize:a}},8900:(t,e,s)=>{"use strict";s.r(e),s.d(e,{default:()=>m});var r=s(7757),a=s.n(r),n=s(629),i=s(1496);function o(t,e,s,r,a,n,i){try{var o=t[n](i),c=o.value}catch(t){return void s(t)}o.done?e(c):Promise.resolve(c).then(r,a)}function c(t){return function(){var e=this,s=arguments;return new Promise((function(r,a){var n=t.apply(e,s);function i(t){o(n,r,a,i,c,"next",t)}function c(t){o(n,r,a,i,c,"throw",t)}i(void 0)}))}}function l(t,e){var s=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),s.push.apply(s,r)}return s}function u(t){for(var e=1;e<arguments.length;e++){var s=null!=arguments[e]?arguments[e]:{};e%2?l(Object(s),!0).forEach((function(e){d(t,e,s[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(s)):l(Object(s)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(s,e))}))}return t}function d(t,e,s){return e in t?Object.defineProperty(t,e,{value:s,enumerable:!0,configurable:!0,writable:!0}):t[e]=s,t}const f={computed:u(u({},(0,n.Se)({classes:"classs/classes",exams:"exam/examList"})),{},{submitButtonDisabled:function(){return""==this.form.class_id||""==this.form.exam_id||""==this.form.subject_id||""==this.form.attachment}}),data:function(){return{searchForm:new Form({class_id:""}),subjects:[],routines:[],classes_exam_terms:[],form:new Form({exam_id:"",class_id:"",subject_id:"",attachment:""})}},methods:{getTerms:function(){var t=this;return c(a().mark((function e(){var s;return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,axios.get("/api/syllabuses/".concat(t.searchForm.class_id,"/get-class-exams"));case 3:s=e.sent,t.classes_exam_terms=s.data.terms,e.next=10;break;case 7:e.prev=7,e.t0=e.catch(0),console.log(e.t0.response.data.errors);case 10:case"end":return e.stop()}}),e,null,[[0,7]])})))()},onAttachmentChange:function(t){var e=t.target.files[0];this.form.attachment=e},loadSubjects:function(){var t=this;return c(a().mark((function e(){var s;return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,axios.get("/api/classes/".concat(t.form.class_id,"/subjects"));case 3:s=e.sent,t.subjects=s.data.subjects,e.next=10;break;case 7:e.prev=7,e.t0=e.catch(0),console.log(e.t0);case 10:case"end":return e.stop()}}),e,null,[[0,7]])})))()},save:function(){var t=this;return c(a().mark((function e(){var s,r;return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(t.isEditMode){e.next=15;break}return e.prev=1,e.next=4,t.form.post("/api/syllabuses",{transformRequest:[function(t,e){return(0,i.serialize)(t)}]});case 4:s=e.sent,t.reset(),t.toastSuccess(s.data.message),e.next=13;break;case 9:e.prev=9,e.t0=e.catch(1),t.toastError(),console.log(e.t0);case 13:e.next=27;break;case 15:return e.prev=15,e.next=18,t.form.put("/api/update-class-routines/".concat(t.selectedId));case 18:r=e.sent,t.reset(),t.toastSuccess(r.data.message),e.next=27;break;case 23:e.prev=23,e.t1=e.catch(15),console.log(e.t1),t.toastError();case 27:case"end":return e.stop()}}),e,null,[[1,9],[15,23]])})))()},reset:function(){this.form.reset(),this.form.clear()},dataExistsChecking:function(){var t=this;return c(a().mark((function e(){return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:t.classes.length||(t.toastWarning("Please create class first"),t.redirect("academic-class")),t.exams.length||(t.toastWarning("Please create exam first"),t.redirect("exam"));case 2:case"end":return e.stop()}}),e)})))()}},created:function(){var t=this;return c(a().mark((function e(){return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,t.$store.dispatch("classs/fetchClasses");case 2:return e.next=4,t.$store.dispatch("exam/fetchExamsList");case 4:return e.next=6,t.dataExistsChecking();case 6:case"end":return e.stop()}}),e)})))()}};const m=(0,s(1900).Z)(f,(function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("div",{staticClass:"page-header d-print-none"},[s("div",{staticClass:"row align-items-center"},[s("div",{staticClass:"col"},[s("h2",{staticClass:"page-title"},[t._v(t._s(t.$route.meta.title))]),t._v(" "),s("h2",{staticClass:"page-pretitle"},[t._v(t._s(t.$t("class_syllabus")))])])])]),t._v(" "),s("div",{staticClass:"row row-deck row-cards justify-content-center"},[s("div",{staticClass:"col-12"},[s("div",{staticClass:"card"},[s("div",{staticClass:"card-header d-flex justify-content-between align-items-center"},[s("h4",{staticClass:"card-title"},[t._v(t._s(t.$t("syllabus_create")))]),t._v(" "),s("router-link",{staticClass:"btn btn-primary",attrs:{to:{name:"academic-syllabus-index"}}},[t._v(t._s(t.$t("back"))+"\n                    ")])],1),t._v(" "),s("div",{staticClass:"card-body"},[s("div",{staticClass:"row justify-content-center"},[s("div",{staticClass:"col-md-6"},[s("form",{attrs:{autocomplete:"off"},on:{submit:function(e){return e.preventDefault(),t.save(e)}}},[s("div",{staticClass:"form-group mb-3"},[s("label",{staticClass:"form-label",attrs:{for:"term_id"}},[t._v(t._s(t.$t("exam_term")))]),t._v(" "),s("div",[s("select",{directives:[{name:"model",rawName:"v-model",value:t.form.exam_id,expression:"form.exam_id"}],staticClass:"form-control",class:{"is-invalid":t.form.errors.has("class_id")},attrs:{id:"term_id"},on:{change:function(e){var s=Array.prototype.filter.call(e.target.options,(function(t){return t.selected})).map((function(t){return"_value"in t?t._value:t.value}));t.$set(t.form,"exam_id",e.target.multiple?s:s[0])}}},[s("option",{attrs:{value:"",disabled:""}},[t._v("\n                                                "+t._s(t.$t("select_exam_term"))+"\n                                            ")]),t._v(" "),t._l(t.exams,(function(e){return s("option",{key:e.id,domProps:{value:e.id}},[t._v("\n                                                "+t._s(e.name)+"\n                                            ")])}))],2),t._v(" "),s("has-error",{attrs:{form:t.form,field:"exam_id"}})],1)]),t._v(" "),s("div",{staticClass:"form-group mb-3"},[s("label",{staticClass:"form-label",attrs:{for:"term_id"}},[t._v(t._s(t.$t("class")))]),t._v(" "),s("div",[s("select",{directives:[{name:"model",rawName:"v-model",value:t.form.class_id,expression:"form.class_id"}],staticClass:"form-control",class:{"is-invalid":t.form.errors.has("class_id")},attrs:{id:"class_id"},on:{change:[function(e){var s=Array.prototype.filter.call(e.target.options,(function(t){return t.selected})).map((function(t){return"_value"in t?t._value:t.value}));t.$set(t.form,"class_id",e.target.multiple?s:s[0])},t.loadSubjects]}},[s("option",{attrs:{value:"",disabled:""}},[t._v("\n                                                "+t._s(t.$t("select_class"))+"\n                                            ")]),t._v(" "),t._l(t.classes,(function(e){return s("option",{key:e.id,domProps:{value:e.id}},[t._v("\n                                                "+t._s(e.name)+"\n                                            ")])}))],2),t._v(" "),s("has-error",{attrs:{form:t.form,field:"class_id"}})],1)]),t._v(" "),s("div",{staticClass:"form-group mb-3"},[s("label",{staticClass:"form-label",attrs:{for:"term_id"}},[t._v(t._s(t.$t("subject")))]),t._v(" "),s("div",[s("select",{directives:[{name:"model",rawName:"v-model",value:t.form.subject_id,expression:"form.subject_id"}],staticClass:"form-control",class:{"is-invalid":t.form.errors.has("subject_id")},attrs:{id:"subject_id"},on:{change:function(e){var s=Array.prototype.filter.call(e.target.options,(function(t){return t.selected})).map((function(t){return"_value"in t?t._value:t.value}));t.$set(t.form,"subject_id",e.target.multiple?s:s[0])}}},[s("option",{attrs:{value:"",disabled:""}},[t._v("\n                                                "+t._s(t.$t("select_subject"))+"\n                                            ")]),t._v(" "),t._l(t.subjects,(function(e){return s("option",{key:e.id,domProps:{value:e.id}},[t._v("\n                                                "+t._s(e.name)+"\n                                            ")])}))],2),t._v(" "),s("has-error",{attrs:{form:t.form,field:"subject_id"}})],1)]),t._v(" "),s("div",{staticClass:"form-group mb-3"},[s("label",{staticClass:"form-label",attrs:{for:"term_id"}},[t._v(t._s(t.$t("attachment_file")))]),t._v(" "),s("div",[s("input",{staticClass:"form-control",class:{"is-invalid":t.form.errors.has("attachment")},attrs:{id:"attachment_id",type:"file"},on:{change:t.onAttachmentChange}}),t._v(" "),s("has-error",{attrs:{form:t.form,field:"subject_id"}})],1)]),t._v(" "),s("div",{staticClass:"form-footer"},[s("button",{staticClass:"btn btn-primary",attrs:{disabled:t.submitButtonDisabled||t.form.busy,type:"submit"}},[t._v("\n                                        "+t._s(t.$t("save"))+"\n                                    ")])])])])])])])])])])}),[],!1,null,null,null).exports}}]);