import{q as r,o as a,e as m,b as e,g as c,M as l,a as t,w as i,r as n}from"./app.18c02a36.js";import f from"./TestTerminal.b57d57c9.js";import _ from"./SideNav.b1e37e09.js";import u from"./Footer.39935910.js";import d from"./Main.0720dce8.js";import p from"./MainNav.2114f937.js";import{c as x}from"./store.cc65cff0.js";const h={class:"font-custom"},w={class:"md:h-screen max-h-screen md:w-screen bg-primary-bg font-custom text-sm flex flex-col"},$={class:"grow flex flex-col md:flex-row overflow-y-auto"},E={__name:"SimpleLayout",props:{title:{type:String,default:"Abdulsalam Emesh"}},setup(o){return r(()=>{route().current()!=="empty"&&x(route().current())}),(s,g)=>(a(),m("div",h,[e(c(l),{title:o.title},null,8,["title"]),t("div",w,[t("div",$,[e(_),e(p),e(d,null,{default:i(()=>[n(s.$slots,"default")]),_:3})]),e(f),e(u)])]))}};export{E as _};