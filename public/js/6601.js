(self.webpackChunk=self.webpackChunk||[]).push([[6601],{6601:(t,s,e)=>{"use strict";e.r(s),e.d(s,{default:()=>o});var a=e(7757),n=e.n(a);function c(t,s,e,a,n,c,r){try{var i=t[c](r),o=i.value}catch(t){return void e(t)}i.done?s(o):Promise.resolve(o).then(a,n)}function r(t){return function(){var s=this,e=arguments;return new Promise((function(a,n){var r=t.apply(s,e);function i(t){c(r,a,n,i,o,"next",t)}function o(t){c(r,a,n,i,o,"throw",t)}i(void 0)}))}}const i={data:function(){return{subjects:[]}},methods:{getClassSubjects:function(){var t=this;return r(n().mark((function s(){var e;return n().wrap((function(s){for(;;)switch(s.prev=s.next){case 0:return s.next=2,axios.get("/api/student/subjects");case 2:e=s.sent,t.subjects=e.data;case 4:case"end":return s.stop()}}),s)})))()}},created:function(){var t=this;return r(n().mark((function s(){return n().wrap((function(s){for(;;)switch(s.prev=s.next){case 0:return"Student"!=t.authenticateUser.original_role&&t.redirect("401"),s.next=3,t.getClassSubjects();case 3:case"end":return s.stop()}}),s)})))()}};const o=(0,e(1900).Z)(i,(function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",[e("div",{staticClass:"page-header d-print-none"},[e("div",{staticClass:"row align-items-center"},[e("div",{staticClass:"col"},[e("h2",{staticClass:"page-title"},[t._v(t._s(t.$route.meta.title))]),t._v(" "),e("h2",{staticClass:"page-pretitle"},[t._v(t._s(t.$t("academic")))])])])]),t._v(" "),e("div",{staticClass:"row row-cards"},[t.subjects&&t.subjects.length?t._l(t.subjects,(function(s){return e("div",{key:s.id,staticClass:"col-md-4 col-sm-6 col-12"},[e("div",{staticClass:"card "},[e("div",{staticClass:"card-img-top img-responsive img-responsive-16by9",style:{backgroundImage:"url("+s.image_url+")"}}),t._v(" "),e("div",{staticClass:"card-body"},[e("div",{staticClass:" d-flex justify-content-between"},[e("h2",{staticClass:"font-weight-bold mb-0 pb-0"},[t._v(t._s(s.name)+" "),e("span",{directives:[{name:"tooltip",rawName:"v-tooltip",value:"Subject Code",expression:"'Subject Code'"}]},[t._v("("+t._s(s.code)+")")])])]),t._v(" "),e("dl",{staticClass:"row"},[e("dt",{staticClass:"col-5"},[t._v(t._s(t.$t("type"))+":")]),t._v(" "),e("dd",{staticClass:"col-7"},[t._v(t._s(t._f("capitalize")(s.type)))]),t._v(" "),e("dt",{staticClass:"col-5"},[t._v(t._s(t.$t("pass_marks"))+":")]),t._v(" "),e("dd",{staticClass:"col-7"},[t._v(t._s(s.pass_marks)+" "+t._s(t.$t("out_of"))+" "+t._s(s.total_marks)+"\n                            ")])])])])])})):e("div",{staticClass:"d-flex justify-content-center py-3"},[e("NotFound",{attrs:{word:"subject"}})],1)],2)])}),[],!1,null,null,null).exports}}]);