import{y as u,l as d,A as l,o as i,e as p}from"./app.6e40ce75.js";const m=["value"],k={__name:"Checkbox",props:{checked:{type:[Array,Boolean],default:!1},value:{type:String,default:null}},emits:["update:checked"],setup(e,{emit:a}){const s=a,n=e,o=u({get(){return n.checked},set(t){s("update:checked",t)}});return(t,c)=>d((i(),p("input",{"onUpdate:modelValue":c[0]||(c[0]=r=>o.value=r),type:"checkbox",value:e.value,class:"rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"},null,8,m)),[[l,o.value]])}};export{k as _};
