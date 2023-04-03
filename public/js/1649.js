(self.webpackChunk=self.webpackChunk||[]).push([[1649],{1496:e=>{const t=e=>void 0===e,r=e=>Array.isArray(e),a=e=>e&&"number"==typeof e.size&&"string"==typeof e.type&&"function"==typeof e.slice,s=(e,n,o,i)=>((n=n||{}).indices=!t(n.indices)&&n.indices,n.nullsAsUndefineds=!t(n.nullsAsUndefineds)&&n.nullsAsUndefineds,n.booleansAsIntegers=!t(n.booleansAsIntegers)&&n.booleansAsIntegers,n.allowEmptyArrays=!t(n.allowEmptyArrays)&&n.allowEmptyArrays,o=o||new FormData,t(e)||(null===e?n.nullsAsUndefineds||o.append(i,""):(e=>"boolean"==typeof e)(e)?n.booleansAsIntegers?o.append(i,e?1:0):o.append(i,e):r(e)?e.length?e.forEach(((e,t)=>{const r=i+"["+(n.indices?t:"")+"]";s(e,n,o,r)})):n.allowEmptyArrays&&o.append(i+"[]",""):(e=>e instanceof Date)(e)?o.append(i,e.toISOString()):!(e=>e===Object(e))(e)||(e=>a(e)&&"string"==typeof e.name&&("object"==typeof e.lastModifiedDate||"number"==typeof e.lastModified))(e)||a(e)?o.append(i,e):Object.keys(e).forEach((t=>{const a=e[t];if(r(a))for(;t.length>2&&t.lastIndexOf("[]")===t.length-2;)t=t.substring(0,t.length-2);s(a,n,o,i?i+"["+t+"]":t)}))),o);e.exports={serialize:s}},1649:(e,t,r)=>{"use strict";r.r(t),r.d(t,{default:()=>d});var a=r(7757),s=r.n(a),n=r(1496);function o(e,t,r,a,s,n,o){try{var i=e[n](o),c=i.value}catch(e){return void r(e)}i.done?t(c):Promise.resolve(c).then(a,s)}function i(e){return function(){var t=this,r=arguments;return new Promise((function(a,s){var n=e.apply(t,r);function i(e){o(n,a,s,i,c,"next",e)}function c(e){o(n,a,s,i,c,"throw",e)}i(void 0)}))}}function c(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);t&&(a=a.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,a)}return r}function l(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}const m={data:function(){return{teacherForm:new Form({name:"",email:"",password:"",department_id:"",joining_date:"",phone:"",gender:"male",resume:"",joining_letter:""}),teacher:null}},computed:function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?c(Object(r),!0).forEach((function(t){l(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):c(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}({},(0,r(629).Se)({departments:"department/departments"})),methods:{handleJoiningLetterUpload:function(){this.teacherForm.joining_letter=this.$refs.joining_letter.files[0]},handleResumeUpload:function(){this.teacherForm.resume=this.$refs.resume.files[0]},updateTeacher:function(){var e=this;return i(s().mark((function t(){var r;return s().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,t.next=3,e.teacherForm.post("/api/teachers/".concat(e.teacher.id),{transformRequest:[function(e,t){return(0,n.serialize)(e)}]});case 3:r=t.sent,e.redirect("user-teacher"),e.$refs.joining_letter.value="",e.$refs.resume.value="",e.toastSuccess(r.data.message),t.next=13;break;case 10:t.prev=10,t.t0=t.catch(0),console.log(t.t0);case 13:case"end":return t.stop()}}),t,null,[[0,10]])})))()},getTeacher:function(){var e=this;return i(s().mark((function t(){var r,a;return s().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,r=e.$route.params.id,t.next=4,axios.get("/api/teachers/".concat(r));case 4:a=t.sent,e.teacher=a.data.data,Object.keys(e.teacherForm).forEach((function(t){e.teacher.hasOwnProperty(t)&&(e.teacherForm[t]=e.teacher[t]),e.teacher.user.hasOwnProperty(t)&&(e.teacherForm[t]=e.teacher.user[t])})),t.next=12;break;case 9:t.prev=9,t.t0=t.catch(0),404===t.t0.response.status?e.redirect("404"):e.toastError("Something went wrong while saving data");case 12:case"end":return t.stop()}}),t,null,[[0,9]])})))()}},mounted:function(){var e=this;return i(s().mark((function t(){return s().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return e.$route.params.id||e.redirect("404"),t.next=3,e.hasPermisssion("teacher-list");case 3:e.getTeacher(),e.$store.dispatch("department/fetchDepartments");case 5:case"end":return t.stop()}}),t)})))()}};const d=(0,r(1900).Z)(m,(function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",[r("div",{staticClass:"page-header d-print-none"},[r("div",{staticClass:"row align-items-center"},[r("div",{staticClass:"col"},[r("h2",{staticClass:"page-title"},[e._v(e._s(e.$route.meta.title))]),e._v(" "),r("h2",{staticClass:"page-pretitle"},[e._v(e._s(e.$t("teacher")))])])])]),e._v(" "),r("div",{staticClass:"card"},[r("div",{staticClass:"card"},[r("div",{staticClass:"card-header d-flex justify-content-between"},[r("h3",{staticClass:"card-title"},[e._v(e._s(e.$t("edit_teacher")))]),e._v(" "),r("Back",{attrs:{routeName:"user-teacher"}})],1),e._v(" "),r("div",{staticClass:"card-body border-bottom py-3"},[r("form",{attrs:{autocomplete:"off"},on:{submit:function(t){return t.preventDefault(),e.updateTeacher(t)}}},[r("div",{staticClass:"row justify-content-center"},[r("div",{staticClass:"col-md-6"},[r("div",{staticClass:"form-group row"},[r("div",{staticClass:"col-md-6 mb-3"},[r("label",{staticClass:"form-label",attrs:{for:"name"}},[e._v(e._s(e.$t("name"))+"\n                                    ")]),e._v(" "),r("base-input",{attrs:{form:e.teacherForm,field:"name"},model:{value:e.teacherForm.name,callback:function(t){e.$set(e.teacherForm,"name",t)},expression:"teacherForm.name"}})],1),e._v(" "),r("div",{staticClass:"col-md-6 mb-3"},[r("label",{staticClass:"form-label",attrs:{for:"email"}},[e._v(e._s(e.$t("email")))]),e._v(" "),r("base-input",{attrs:{form:e.teacherForm,field:"email"},model:{value:e.teacherForm.email,callback:function(t){e.$set(e.teacherForm,"email",t)},expression:"teacherForm.email"}})],1)]),e._v(" "),r("div",{staticClass:"form-group row"},[r("div",{staticClass:"col-md-6 mb-3"},[r("label",{staticClass:"form-label",attrs:{for:"email"}},[e._v(e._s(e.$t("change_password")))]),e._v(" "),r("base-input",{attrs:{form:e.teacherForm,field:"password",inputType:"password"},model:{value:e.teacherForm.password,callback:function(t){e.$set(e.teacherForm,"password",t)},expression:"teacherForm.password"}})],1),e._v(" "),r("div",{staticClass:"col-md-6 mb-3"},[r("label",{staticClass:"form-label",attrs:{for:"phone"}},[e._v(e._s(e.$t("phone"))+"\n                                    ")]),e._v(" "),r("base-input",{attrs:{form:e.teacherForm,field:"phone"},model:{value:e.teacherForm.phone,callback:function(t){e.$set(e.teacherForm,"phone",t)},expression:"teacherForm.phone"}})],1)]),e._v(" "),r("div",{staticClass:"form-group row"},[r("div",{staticClass:"col-md-6 mb-3"},[r("label",{staticClass:"form-label",attrs:{for:"gender"}},[e._v("\n                                        "+e._s(e.$t("department"))+"\n                                    ")]),e._v(" "),r("base-select",{attrs:{form:e.teacherForm,field:"department_id"},model:{value:e.teacherForm.department_id,callback:function(t){e.$set(e.teacherForm,"department_id",t)},expression:"teacherForm.department_id"}},[r("option",{staticClass:"d-none",attrs:{value:""}},[e._v("\n                                            "+e._s(e.$t("select_department"))+"\n                                        ")]),e._v(" "),e._l(e.departments,(function(t){return r("option",{key:t.id,domProps:{value:t.id,selected:t.id==e.teacherForm.department_id}},[e._v("\n                                            "+e._s(t.name)+"\n                                        ")])}))],2)],1),e._v(" "),r("div",{staticClass:"col-md-6 mb-3"},[r("label",{staticClass:"form-label",attrs:{for:"resume"}},[e._v("\n                                        "+e._s(e.$t("joining_date"))+"\n                                    ")]),e._v(" "),r("date-picker",{attrs:{format:"dd MMMM, yyyy","input-class":"form-control",placeholder:e.$t("select_date"),value:e.teacherForm.joining_date},on:{input:function(t){return e.setDate(t)}}}),e._v(" "),r("has-error",{attrs:{form:e.teacherForm,field:"joining_date"}})],1)]),e._v(" "),r("div",{staticClass:"form-group row"},[r("div",{staticClass:"col-md-6 mb-3"},[r("label",{staticClass:"form-label",attrs:{for:"joining_letter"}},[e._v("\n                                        "+e._s(e.$t("joining_letter"))+"\n                                    ")]),e._v(" "),r("input",{ref:"joining_letter",staticClass:"form-control",class:{"is-invalid":e.teacherForm.errors.has("joining_letter")},attrs:{type:"file"},on:{change:e.handleJoiningLetterUpload}}),e._v(" "),r("has-error",{attrs:{form:e.teacherForm,field:"joining_letter"}})],1),e._v(" "),r("div",{staticClass:"col-md-6 mb-3"},[r("label",{staticClass:"form-label",attrs:{for:"resume"}},[e._v("\n                                        "+e._s(e.$t("resume"))+"\n                                    ")]),e._v(" "),r("input",{ref:"resume",staticClass:"form-control",class:{"is-invalid":e.teacherForm.errors.has("resume")},attrs:{type:"file"},on:{change:e.handleResumeUpload}}),e._v(" "),r("has-error",{attrs:{form:e.teacherForm,field:"resume"}})],1)]),e._v(" "),r("div",{staticClass:"form-group mb-3 row"},[r("label",{staticClass:"form-label"},[e._v(e._s(e.$t("gender")))]),e._v(" "),r("div",[r("label",{staticClass:"form-check form-check-inline"},[r("input",{directives:[{name:"model",rawName:"v-model",value:e.teacherForm.gender,expression:"teacherForm.gender"}],staticClass:"form-check-input",attrs:{type:"radio",value:"male"},domProps:{checked:e._q(e.teacherForm.gender,"male")},on:{change:function(t){return e.$set(e.teacherForm,"gender","male")}}}),e._v(" "),r("span",{staticClass:"form-check-label"},[e._v(e._s(e.$t("male")))])]),e._v(" "),r("label",{staticClass:"form-check form-check-inline"},[r("input",{directives:[{name:"model",rawName:"v-model",value:e.teacherForm.gender,expression:"teacherForm.gender"}],staticClass:"form-check-input",attrs:{type:"radio",value:"female"},domProps:{checked:e._q(e.teacherForm.gender,"female")},on:{change:function(t){return e.$set(e.teacherForm,"gender","female")}}}),e._v(" "),r("span",{staticClass:"form-check-label"},[e._v(e._s(e.$t("female")))])])]),e._v(" "),r("has-error",{attrs:{form:e.teacherForm,field:"name"}})],1),e._v(" "),r("div",{staticClass:"form-footer text-center"},[r("base-button",{attrs:{loading:e.teacherForm.busy}},[e._v("\n                                    "+e._s(e.$t("save"))+"\n                                ")])],1)])])])])])])])}),[],!1,null,null,null).exports}}]);