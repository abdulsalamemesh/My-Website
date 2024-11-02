import{o as a,c as L,w as s,a as o,r as b,T as _,d as $,e as d,b as l,f as y,g as n,u as i,F as w,h as C,n as A,t as x}from"./app.6e40ce75.js";import{_ as M}from"./ActionMessage.9bd5cec2.js";import{_ as U,a as z,b as h}from"./DialogModal.071082f1.js";import{_ as S}from"./Checkbox.b71576bf.js";import{_ as W}from"./DangerButton.dac07ef2.js";import{_ as E}from"./FormSection.de8e9a8e.js";import{_ as Y,a as q}from"./TextInput.78ecc0f1.js";import{_ as B}from"./InputLabel.5544bd58.js";import{_ as I}from"./PrimaryButton.59237356.js";import{_ as P}from"./SecondaryButton.e952bb1b.js";import{S as G}from"./SectionBorder.bc992d97.js";import"./SectionTitle.8bf02cbe.js";import"./_plugin-vue_export-helper.cdc0426e.js";const H={class:"bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4"},J={class:"sm:flex sm:items-start"},K={class:"mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left"},O={class:"text-lg"},Q={class:"mt-2"},R={class:"flex flex-row justify-end px-6 py-4 bg-gray-100 text-right"},X={__name:"ConfirmationModal",props:{show:{type:Boolean,default:!1},maxWidth:{type:String,default:"2xl"},closeable:{type:Boolean,default:!0}},emits:["close"],setup(m,{emit:T}){const r=T,u=()=>{r("close")};return(p,c)=>(a(),L(U,{show:m.show,"max-width":m.maxWidth,closeable:m.closeable,onClose:u},{default:s(()=>[o("div",H,[o("div",J,[c[0]||(c[0]=o("div",{class:"mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10"},[o("svg",{class:"h-6 w-6 text-red-600",stroke:"currentColor",fill:"none",viewBox:"0 0 24 24"},[o("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"})])],-1)),o("div",K,[o("h3",O,[b(p.$slots,"title")]),o("div",Q,[b(p.$slots,"content")])])])]),o("div",R,[b(p.$slots,"footer")])]),_:3},8,["show","max-width","closeable"]))}},Z={class:"col-span-6 sm:col-span-4"},ee={key:0,class:"col-span-6"},se={class:"mt-2 grid grid-cols-1 md:grid-cols-2 gap-4"},te={class:"flex items-center"},oe={class:"ml-2 text-sm text-gray-600"},le={key:0},ne={class:"mt-10 sm:mt-0"},ie={class:"space-y-6"},ae={class:"flex items-center"},re={key:0,class:"text-sm text-gray-400"},de=["onClick"],me=["onClick"],ue={key:0,class:"mt-4 bg-gray-100 px-4 py-2 rounded font-mono text-sm text-gray-500"},pe={class:"grid grid-cols-1 md:grid-cols-2 gap-4"},ce={class:"flex items-center"},fe={class:"ml-2 text-sm text-gray-600"},he={__name:"ApiTokenManager",props:{tokens:Array,availablePermissions:Array,defaultPermissions:Array},setup(m){const r=_({name:"",permissions:m.defaultPermissions}),u=_({permissions:[]}),p=_(),c=$(!1),v=$(null),k=$(null),F=()=>{r.post(route("api-tokens.store"),{preserveScroll:!0,onSuccess:()=>{c.value=!0,r.reset()}})},V=f=>{u.permissions=f.abilities,v.value=f},j=()=>{u.put(route("api-tokens.update",v.value),{preserveScroll:!0,preserveState:!0,onSuccess:()=>v.value=null})},D=f=>{k.value=f},N=()=>{p.delete(route("api-tokens.destroy",k.value),{preserveScroll:!0,preserveState:!0,onSuccess:()=>k.value=null})};return(f,e)=>(a(),d("div",null,[l(E,{onSubmitted:F},{title:s(()=>e[9]||(e[9]=[n(" Create API Token ")])),description:s(()=>e[10]||(e[10]=[n(" API tokens allow third-party services to authenticate with our application on your behalf. ")])),form:s(()=>[o("div",Z,[l(B,{for:"name",value:"Name"}),l(Y,{id:"name",modelValue:i(r).name,"onUpdate:modelValue":e[0]||(e[0]=t=>i(r).name=t),type:"text",class:"mt-1 block w-full",autofocus:""},null,8,["modelValue"]),l(q,{message:i(r).errors.name,class:"mt-2"},null,8,["message"])]),m.availablePermissions.length>0?(a(),d("div",ee,[l(B,{for:"permissions",value:"Permissions"}),o("div",se,[(a(!0),d(w,null,C(m.availablePermissions,t=>(a(),d("div",{key:t},[o("label",te,[l(S,{checked:i(r).permissions,"onUpdate:checked":e[1]||(e[1]=g=>i(r).permissions=g),value:t},null,8,["checked","value"]),o("span",oe,x(t),1)])]))),128))])])):y("",!0)]),actions:s(()=>[l(M,{on:i(r).recentlySuccessful,class:"mr-3"},{default:s(()=>e[11]||(e[11]=[n(" Created. ")])),_:1},8,["on"]),l(I,{class:A({"opacity-25":i(r).processing}),disabled:i(r).processing},{default:s(()=>e[12]||(e[12]=[n(" Create ")])),_:1},8,["class","disabled"])]),_:1}),m.tokens.length>0?(a(),d("div",le,[l(G),o("div",ne,[l(z,null,{title:s(()=>e[13]||(e[13]=[n(" Manage API Tokens ")])),description:s(()=>e[14]||(e[14]=[n(" You may delete any of your existing tokens if they are no longer needed. ")])),content:s(()=>[o("div",ie,[(a(!0),d(w,null,C(m.tokens,t=>(a(),d("div",{key:t.id,class:"flex items-center justify-between"},[o("div",null,x(t.name),1),o("div",ae,[t.last_used_ago?(a(),d("div",re," Last used "+x(t.last_used_ago),1)):y("",!0),m.availablePermissions.length>0?(a(),d("button",{key:1,class:"cursor-pointer ml-6 text-sm text-gray-400 underline",onClick:g=>V(t)}," Permissions ",8,de)):y("",!0),o("button",{class:"cursor-pointer ml-6 text-sm text-red-500",onClick:g=>D(t)}," Delete ",8,me)])]))),128))])]),_:1})])])):y("",!0),l(h,{show:c.value,onClose:e[3]||(e[3]=t=>c.value=!1)},{title:s(()=>e[15]||(e[15]=[n(" API Token ")])),content:s(()=>[e[16]||(e[16]=o("div",null," Please copy your new API token. For your security, it won't be shown again. ",-1)),f.$page.props.jetstream.flash.token?(a(),d("div",ue,x(f.$page.props.jetstream.flash.token),1)):y("",!0)]),footer:s(()=>[l(P,{onClick:e[2]||(e[2]=t=>c.value=!1)},{default:s(()=>e[17]||(e[17]=[n(" Close ")])),_:1})]),_:1},8,["show"]),l(h,{show:v.value!=null,onClose:e[6]||(e[6]=t=>v.value=null)},{title:s(()=>e[18]||(e[18]=[n(" API Token Permissions ")])),content:s(()=>[o("div",pe,[(a(!0),d(w,null,C(m.availablePermissions,t=>(a(),d("div",{key:t},[o("label",ce,[l(S,{checked:i(u).permissions,"onUpdate:checked":e[4]||(e[4]=g=>i(u).permissions=g),value:t},null,8,["checked","value"]),o("span",fe,x(t),1)])]))),128))])]),footer:s(()=>[l(P,{onClick:e[5]||(e[5]=t=>v.value=null)},{default:s(()=>e[19]||(e[19]=[n(" Cancel ")])),_:1}),l(I,{class:A(["ml-3",{"opacity-25":i(u).processing}]),disabled:i(u).processing,onClick:j},{default:s(()=>e[20]||(e[20]=[n(" Save ")])),_:1},8,["class","disabled"])]),_:1},8,["show"]),l(X,{show:k.value!=null,onClose:e[8]||(e[8]=t=>k.value=null)},{title:s(()=>e[21]||(e[21]=[n(" Delete API Token ")])),content:s(()=>e[22]||(e[22]=[n(" Are you sure you would like to delete this API token? ")])),footer:s(()=>[l(P,{onClick:e[7]||(e[7]=t=>k.value=null)},{default:s(()=>e[23]||(e[23]=[n(" Cancel ")])),_:1}),l(W,{class:A(["ml-3",{"opacity-25":i(p).processing}]),disabled:i(p).processing,onClick:N},{default:s(()=>e[24]||(e[24]=[n(" Delete ")])),_:1},8,["class","disabled"])]),_:1},8,["show"])]))}};export{he as default};