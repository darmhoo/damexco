import{T as n,o as a,c as i,a as e,w as d,u as t,F as l,r as m,b as c,d as u,v as p,t as _}from"./app-d63880db.js";/* empty css            */const f={class:"container mx-auto"},x={class:"max-w-xl p-5 mx-auto my-10 bg-white rounded-md shadow-sm"},g=e("div",{class:"text-center"},[e("h1",{class:"my-3 text-3xl font-semibold text-gray-700"},"Reset Password")],-1),b={key:0,class:"my-5"},h={class:"text-red-500 text-center"},y={class:"mb-6"},v=e("label",{for:"email",class:"block mb-2 text-sm text-gray-600"},"Email Address",-1),w=e("div",{class:"mb-2"},[e("button",{type:"submit",class:"w-full px-2 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none"}," Reset ")],-1),V={__name:"ForgotPassword",setup(k){const s=n({email:null});return(B,o)=>(a(),i("div",f,[e("div",x,[g,e("div",null,[e("form",{onSubmit:o[1]||(o[1]=d(r=>t(s).post("/forgot-password"),["prevent"]))},[t(s).hasErrors?(a(),i("div",b,[(a(!0),i(l,null,m(t(s).errors,r=>(a(),i("div",h,_(r),1))),256))])):c("",!0),e("div",y,[v,u(e("input",{"onUpdate:modelValue":o[0]||(o[0]=r=>t(s).email=r),type:"email",name:"email",placeholder:"you@email.com",required:"",class:"w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"},null,512),[[p,t(s).email]])]),w],32)])])]))}};export{V as default};