(self.webpackChunk=self.webpackChunk||[]).push([[1739],{1739:(t,e,s)=>{"use strict";s.r(e),s.d(e,{default:()=>v});var r=s(7757),a=s.n(r),o=s(629),n=s(7484),i=s.n(n);function c(t,e,s,r,a,o,n){try{var i=t[o](n),c=i.value}catch(t){return void s(t)}i.done?e(c):Promise.resolve(c).then(r,a)}function l(t){return function(){var e=this,s=arguments;return new Promise((function(r,a){var o=t.apply(e,s);function n(t){c(o,r,a,n,i,"next",t)}function i(t){c(o,r,a,n,i,"throw",t)}n(void 0)}))}}function d(t,e){var s=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),s.push.apply(s,r)}return s}function u(t){for(var e=1;e<arguments.length;e++){var s=null!=arguments[e]?arguments[e]:{};e%2?d(Object(s),!0).forEach((function(e){f(t,e,s[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(s)):d(Object(s)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(s,e))}))}return t}function f(t,e,s){return e in t?Object.defineProperty(t,e,{value:s,enumerable:!0,configurable:!0,writable:!0}):t[e]=s,t}const m={data:function(){return{form:new Form({title:"",teacher_id:"",class_id:"",section_id:"",subject_id:"",start_date:"",end_date:"",description:""}),teachers:[],subjects:[],sections:[]}},computed:u(u({},(0,o.Se)({classes:"classs/classes"})),{},{submitButtonDisabled:function(){return""==this.form.title||""==this.form.teacher_id||""==this.form.class_id||""==this.form.section_id||""==this.form.subject_id||""==this.form.start_date||""==this.form.end_date||""==this.form.description}}),methods:{setStartDate:function(t){var e=i()(t).format("YYYY-MM-DD");this.form.start_date=e},setEndDate:function(t){var e=i()(t).format("YYYY-MM-DD");this.form.end_date=e},loadSubjectSection:function(){var t=this;return l(a().mark((function e(){return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:t.loadSections(),t.loadSubjects();case 2:case"end":return e.stop()}}),e)})))()},loadTeachers:function(){var t=this;return l(a().mark((function e(){var s;return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,axios.get("/api/homeworks/teachers");case 3:s=e.sent,t.teachers=s.data.teachers,e.next=10;break;case 7:e.prev=7,e.t0=e.catch(0),console.log(e.t0);case 10:case"end":return e.stop()}}),e,null,[[0,7]])})))()},loadSections:function(){var t=this;return l(a().mark((function e(){var s;return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,axios.get("/api/classes/".concat(t.form.class_id,"/sections"));case 3:s=e.sent,t.sections=s.data.sections,e.next=10;break;case 7:e.prev=7,e.t0=e.catch(0),console.log(e.t0);case 10:case"end":return e.stop()}}),e,null,[[0,7]])})))()},loadSubjects:function(){var t=this;return l(a().mark((function e(){var s;return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,axios.get("/api/classes/".concat(t.form.class_id,"/subjects"));case 3:s=e.sent,t.subjects=s.data.subjects,e.next=10;break;case 7:e.prev=7,e.t0=e.catch(0),console.log(e.t0);case 10:case"end":return e.stop()}}),e,null,[[0,7]])})))()},save:function(){var t=this;return l(a().mark((function e(){var s;return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,t.form.put("/api/homeworks/".concat(t.$route.params.id));case 3:s=e.sent,t.redirect("academic-homework"),t.toastSuccess(s.data.message),e.next=12;break;case 8:e.prev=8,e.t0=e.catch(0),t.toastError(),console.log(e.t0);case 12:case"end":return e.stop()}}),e,null,[[0,8]])})))()},loadEditData:function(){var t=this;return l(a().mark((function e(){var s;return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,axios.get("/api/homeworks/".concat(t.$route.params.id));case 2:s=e.sent,t.form.fill(s.data.data),t.loadSubjectSection();case 5:case"end":return e.stop()}}),e)})))()}},created:function(){this.hasPermisssion("homework-edit"),this.loadTeachers(),this.$store.dispatch("classs/fetchClasses"),this.loadEditData()}};const v=(0,s(1900).Z)(m,(function(){var t=this,e=t.$createElement,s=t._self._c||e;return s("div",[s("div",{staticClass:"page-header d-print-none"},[s("div",{staticClass:"row align-items-center"},[s("div",{staticClass:"col"},[s("h2",{staticClass:"page-title"},[t._v(t._s(t.$route.meta.title))]),t._v(" "),s("h2",{staticClass:"page-pretitle"},[t._v(t._s(t.$t("homework")))])])])]),t._v(" "),s("div",{staticClass:"row row-deck row-cards justify-content-center"},[s("div",{staticClass:"col-12"},[s("div",{staticClass:"card"},[s("div",{staticClass:"card-header d-flex justify-content-between align-items-center"},[s("h4",{staticClass:"card-title"},[t._v(t._s(t.$t("edit_homework")))]),t._v(" "),s("router-link",{staticClass:"btn btn-primary",attrs:{to:{name:"academic-homework"}}},[t._v(t._s(t.$t("back"))+"\n                    ")])],1),t._v(" "),s("div",{staticClass:"card-body"},[s("div",{staticClass:"row justify-content-center"},[s("div",{staticClass:"col-md-6"},[s("form",{attrs:{autocomplete:"off"},on:{submit:function(e){return e.preventDefault(),t.save(e)}}},[s("div",{staticClass:"form-group mb-3"},[s("base-label",{attrs:{title:t.$t("title"),required:!0}}),t._v(" "),s("base-input",{attrs:{form:t.form,field:"title"},model:{value:t.form.title,callback:function(e){t.$set(t.form,"title",e)},expression:"form.title"}})],1),t._v(" "),s("div",{staticClass:"form-group row"},[s("div",{staticClass:"col-md-6"},[s("base-label",{attrs:{title:t.$t("teacher"),required:!0}}),t._v(" "),s("base-select",{attrs:{form:t.form,field:"teacher_id"},model:{value:t.form.teacher_id,callback:function(e){t.$set(t.form,"teacher_id",e)},expression:"form.teacher_id"}},[s("option",{staticClass:"d-none",attrs:{value:""}},[t._v("\n                                                "+t._s(t.$t("select_teacher"))+"\n                                            ")]),t._v(" "),t._l(t.teachers,(function(e){return s("option",{key:e.id,domProps:{value:e.id,selected:e.id==t.form.teacher_id}},[t._v("\n                                                "+t._s(e.user.name)+"\n                                            ")])}))],2)],1),t._v(" "),s("div",{staticClass:"col-md-6"},[s("base-label",{attrs:{title:t.$t("class"),required:!0}}),t._v(" "),s("base-select",{attrs:{form:t.form,field:"class_id"},on:{change:t.loadSubjectSection},model:{value:t.form.class_id,callback:function(e){t.$set(t.form,"class_id",e)},expression:"form.class_id"}},[s("option",{staticClass:"d-none",attrs:{value:""}},[t._v("\n                                                "+t._s(t.$t("select_class"))+"\n                                            ")]),t._v(" "),t._l(t.classes,(function(e){return s("option",{key:e.id,domProps:{value:e.id,selected:e.id==t.form.class_id}},[t._v("\n                                                "+t._s(e.name)+"\n                                            ")])}))],2)],1)]),t._v(" "),s("div",{staticClass:"form-group row"},[s("div",{staticClass:"col-md-6"},[s("base-label",{attrs:{title:t.$t("section"),required:!0}}),t._v(" "),s("base-select",{attrs:{form:t.form,field:"section_id"},model:{value:t.form.section_id,callback:function(e){t.$set(t.form,"section_id",e)},expression:"form.section_id"}},[s("option",{staticClass:"d-none",attrs:{value:""}},[t._v("\n                                                "+t._s(t.$t("select_section"))+"\n                                            ")]),t._v(" "),t._l(t.sections,(function(e){return s("option",{key:e.id,domProps:{value:e.id,selected:e.id==t.form.section_id}},[t._v("\n                                                "+t._s(e.name)+"\n                                            ")])}))],2)],1),t._v(" "),s("div",{staticClass:"col-md-6"},[s("base-label",{attrs:{title:t.$t("subject"),required:!0}}),t._v(" "),s("base-select",{attrs:{form:t.form,field:"subject_id"},model:{value:t.form.subject_id,callback:function(e){t.$set(t.form,"subject_id",e)},expression:"form.subject_id"}},[s("option",{staticClass:"d-none",attrs:{value:""}},[t._v("\n                                                "+t._s(t.$t("select_subject"))+"\n                                            ")]),t._v(" "),t._l(t.subjects,(function(e){return s("option",{key:e.id,domProps:{value:e.id,selected:e.id==t.form.subject_id}},[t._v("\n                                                "+t._s(e.name)+"\n                                            ")])}))],2)],1)]),t._v(" "),s("div",{staticClass:"form-group row"},[s("div",{staticClass:"col-md-6 mb-3"},[s("base-label",{attrs:{title:t.$t("start_date"),required:!0}}),t._v(" "),s("div",[s("date-picker",{attrs:{format:"dd MMMM, yyyy","input-class":"form-control",placeholder:t.$t("select_date"),value:t.form.start_date},on:{input:function(e){return t.setStartDate(e)}}}),t._v(" "),s("has-error",{attrs:{form:t.form,field:"start_date"}})],1)],1),t._v(" "),s("div",{staticClass:"col-md-6 mb-3"},[s("base-label",{attrs:{title:t.$t("end_date"),required:!0}}),t._v(" "),s("div",[s("date-picker",{attrs:{format:"dd MMMM, yyyy","input-class":"form-control",placeholder:t.$t("select_date"),value:t.form.end_date},on:{input:function(e){return t.setEndDate(e)}}}),t._v(" "),s("has-error",{attrs:{form:t.form,field:"end_date"}})],1)],1)]),t._v(" "),s("div",{staticClass:"form-group mb-3"},[s("base-label",{attrs:{title:t.$t("description")}}),t._v(" "),s("base-textarea",{attrs:{rows:5,form:t.form,field:"description"},model:{value:t.form.description,callback:function(e){t.$set(t.form,"description",e)},expression:"form.description"}})],1),t._v(" "),s("div",{staticClass:"form-footer"},[s("button",{staticClass:"btn btn-primary",attrs:{type:"submit"}},[t._v("\n                                        "+t._s(t.$t("save"))+"\n                                    ")])])])])])])])])])])}),[],!1,null,null,null).exports}}]);