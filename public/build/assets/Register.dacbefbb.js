import{T as _,e as f,b as e,u as a,w as l,F as g,o as p,Z as w,a as r,g as d,f as v,j as y,n as V,k}from"./app.6e40ce75.js";import{A as h}from"./AuthenticationCard.34a62942.js";import{_ as x}from"./AuthenticationCardLogo.f64e09e1.js";import{_ as b}from"./Checkbox.b71576bf.js";import{_ as u,a as m}from"./TextInput.78ecc0f1.js";import{_ as i}from"./InputLabel.5544bd58.js";import{_ as $}from"./PrimaryButton.59237356.js";import"./_plugin-vue_export-helper.cdc0426e.js";const P={class:"mt-4"},q={class:"mt-4"},C={class:"mt-4"},N={key:0,class:"mt-4"},U={class:"flex items-center"},A={class:"ml-2"},F=["href"],T=["href"],j={class:"flex items-center justify-end mt-4"},G={__name:"Register",setup(B){const s=_({name:"",email:"",password:"",password_confirmation:"",terms:!1}),c=()=>{s.post(route("register"),{onFinish:()=>s.reset("password","password_confirmation")})};return(n,o)=>(p(),f(g,null,[e(a(w),{title:"Register"}),e(h,null,{logo:l(()=>[e(x)]),default:l(()=>[r("form",{onSubmit:k(c,["prevent"])},[r("div",null,[e(i,{for:"name",value:"Name"}),e(u,{id:"name",modelValue:a(s).name,"onUpdate:modelValue":o[0]||(o[0]=t=>a(s).name=t),type:"text",class:"mt-1 block w-full",required:"",autofocus:"",autocomplete:"name"},null,8,["modelValue"]),e(m,{class:"mt-2",message:a(s).errors.name},null,8,["message"])]),r("div",P,[e(i,{for:"email",value:"Email"}),e(u,{id:"email",modelValue:a(s).email,"onUpdate:modelValue":o[1]||(o[1]=t=>a(s).email=t),type:"email",class:"mt-1 block w-full",required:""},null,8,["modelValue"]),e(m,{class:"mt-2",message:a(s).errors.email},null,8,["message"])]),r("div",q,[e(i,{for:"password",value:"Password"}),e(u,{id:"password",modelValue:a(s).password,"onUpdate:modelValue":o[2]||(o[2]=t=>a(s).password=t),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"]),e(m,{class:"mt-2",message:a(s).errors.password},null,8,["message"])]),r("div",C,[e(i,{for:"password_confirmation",value:"Confirm Password"}),e(u,{id:"password_confirmation",modelValue:a(s).password_confirmation,"onUpdate:modelValue":o[3]||(o[3]=t=>a(s).password_confirmation=t),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"]),e(m,{class:"mt-2",message:a(s).errors.password_confirmation},null,8,["message"])]),n.$page.props.jetstream.hasTermsAndPrivacyPolicyFeature?(p(),f("div",N,[e(i,{for:"terms"},{default:l(()=>[r("div",U,[e(b,{id:"terms",checked:a(s).terms,"onUpdate:checked":o[4]||(o[4]=t=>a(s).terms=t),name:"terms",required:""},null,8,["checked"]),r("div",A,[o[5]||(o[5]=d(" I agree to the ")),r("a",{target:"_blank",href:n.route("terms.show"),class:"underline text-sm text-gray-600 hover:text-gray-900"},"Terms of Service",8,F),o[6]||(o[6]=d(" and ")),r("a",{target:"_blank",href:n.route("policy.show"),class:"underline text-sm text-gray-600 hover:text-gray-900"},"Privacy Policy",8,T)])]),e(m,{class:"mt-2",message:a(s).errors.terms},null,8,["message"])]),_:1})])):v("",!0),r("div",j,[e(a(y),{href:n.route("login"),class:"underline text-sm text-gray-600 hover:text-gray-900"},{default:l(()=>o[7]||(o[7]=[d(" Already registered? ")])),_:1},8,["href"]),e($,{class:V(["ml-4",{"opacity-25":a(s).processing}]),disabled:a(s).processing},{default:l(()=>o[8]||(o[8]=[d(" Register ")])),_:1},8,["class","disabled"])])],32)]),_:1})],64))}};export{G as default};
