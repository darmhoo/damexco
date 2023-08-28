import{T as l,o as a,c as d,a as e,w as u,u as s,F as c,r as m,b as p,d as n,v as i,e as g,t as f}from"./app-d63880db.js";/* empty css            */const x={class:"container mx-auto"},b={class:"max-w-xl p-5 mx-auto my-10 bg-white rounded-md shadow-sm"},_=e("div",{class:"text-center"},[e("h1",{class:"my-3 text-3xl font-semibold text-gray-700"},"Login")],-1),h={key:0,class:"my-5"},v={class:"text-red-500 text-center"},y={class:"mb-6"},w=e("label",{for:"email",class:"block mb-2 text-sm text-gray-600"},"Email Address",-1),V={class:"mb-6"},k=e("label",{for:"phone",class:"text-sm text-gray-600"},"Password",-1),E=g('<div class="mb-2"><button type="submit" class="w-full px-2 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none"> Submit </button></div><a href="/forgot-password"><div class="text-center text-sm font-medium text-blue-500">Forgot password</div></a><a href="/register"><div class="text-center text-sm">Don&#39;t have an account? Create One</div></a>',3),L={__name:"Login",setup(S){const o=l({email:null,password:null});return(B,t)=>(a(),d("div",x,[e("div",b,[_,e("div",null,[e("form",{onSubmit:t[2]||(t[2]=u(r=>s(o).post("/login"),["prevent"]))},[s(o).hasErrors?(a(),d("div",h,[(a(!0),d(c,null,m(s(o).errors,r=>(a(),d("div",v,f(r),1))),256))])):p("",!0),e("div",y,[w,n(e("input",{"onUpdate:modelValue":t[0]||(t[0]=r=>s(o).email=r),type:"email",name:"email",placeholder:"you@email.com",required:"",class:"w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"},null,512),[[i,s(o).email]])]),e("div",V,[k,n(e("input",{"onUpdate:modelValue":t[1]||(t[1]=r=>s(o).password=r),type:"password",name:"password",placeholder:"Enter your password",required:"",class:"w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"},null,512),[[i,s(o).password]])]),E],32)])])]))}};export{L as default};
