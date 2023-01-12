import{_ as o}from"./SimpleLayout.d2399be8.js";import{a as c,b as a,r as i}from"./store.2d445ae9.js";import{q as r,N as d,o as p,c as n,w as x,a as e,n as l,i as t}from"./app.830d4f9c.js";import"./TestTerminal.9c4c078e.js";import"./PHPUnit.921ffd55.js";import"./Run.666fcd32.js";import"./ChevronRight.e37a6a0e.js";import"./SideNav.9df72b19.js";import"./Folder.e05aa71b.js";import"./Footer.8b06fd37.js";import"./Main.5c44eeb6.js";import"./MainNav.b6b5aba4.js";const h={class:"pl-1 py-1 grow leading-5 overflow-x-hidden overflow-y-scroll custom-scrollbar scroll-js",id:"count"},_=e("div",{class:"flex flex-wrap"},[e("p",{class:"text-code-fire"},"<?php")],-1),u=e("br",null,null,-1),f=e("div",{class:"flex flex-wrap"},[e("p",{class:"text-code-fire"},"use\xA0"),e("p",{class:"text-code-white"},"Illuminate\\Contracts\\Http\\Kernel"),e("p",{class:"text-code-fire"},";")],-1),w=e("div",{class:"flex flex-wrap"},[e("p",{class:"text-code-fire"},"use\xA0"),e("p",{class:"text-code-white"},"Illuminate\\Http\\Request"),e("p",{class:"text-code-fire"},";")],-1),m=e("br",null,null,-1),b=e("div",{class:"flex flex-wrap"},[e("p",{class:"text-code-white"},"define("),e("p",{class:"text-code-green"},"'LARAVEL_START'"),e("p",{class:"text-code-fire"},",\xA0"),e("p",{class:"text-code-white"},"microtime("),e("p",{class:"text-code-fire"},"true"),e("p",{class:"text-code-white"},"))"),e("p",{class:"text-code-fire"},";")],-1),v=e("br",null,null,-1),g=e("div",{class:"flex flex-wrap"},[e("p",{class:"text-muted-gray"},[t(" /* "),e("br"),t(" |-------------------------------------------------------------------------- "),e("br"),t(" | Check If The Application Is Under Maintenance "),e("br"),t(" |-------------------------------------------------------------------------- "),e("br"),t(" | "),e("br"),t(' | If the application is in maintenance / demo mode via the "down" command '),e("br"),t(" | we will load this file so that any pre-rendered content can be shown "),e("br"),t(" | instead of starting the framework, which could cause an exception. "),e("br"),t(" | "),e("br"),t(" */ "),e("br")])],-1),k=e("br",null,null,-1),$=e("div",{class:"flex flex-wrap"},[e("p",{class:"text-code-fire"},"if\xA0"),e("p",{class:"text-code-white"},"(file_exists("),e("p",{class:"text-code-purple"},"$maintenance\xA0"),e("p",{class:"text-code-white"},"=\xA0"),e("p",{class:"text-code-purple"},"__DIR__"),e("p",{class:"text-code-white"},"."),e("p",{class:"text-code-green"},"'/../storage/framework/maintenance.php'"),e("p",{class:"text-code-white"},")) {")],-1),y=e("p",{class:"text-code-fire"},"require\xA0",-1),R=e("p",{class:"text-code-purple"},"$maintenance",-1),q=e("p",{class:"text-code-fire"},";",-1),I=[y,R,q],T=e("div",{class:"flex flex-wrap"},[e("p",{class:"text-code-white"},"}")],-1),A=e("br",null,null,-1),C=e("div",{class:"flex flex-wrap"},[e("p",{class:"text-muted-gray"},[t(" /* "),e("br"),t(" |-------------------------------------------------------------------------- "),e("br"),t(" | Register The Auto Loader "),e("br"),t(" |-------------------------------------------------------------------------- "),e("br"),t(" | "),e("br"),t(" | Composer provides a convenient, automatically generated class loader for "),e("br"),t(" | this application. We just need to utilize it! We'll simply require it br "),e("br"),t(" | into the script here so we don't need to manually load our classes. "),e("br"),t(" | "),e("br"),t(" */ "),e("br")])],-1),L=e("br",null,null,-1),B=e("div",{class:"flex flex-wrap"},[e("p",{class:"text-code-fire"},"require\xA0"),e("p",{class:"text-code-purple"},"__DIR__"),e("p",{class:"text-code-white"},"."),e("p",{class:"text-code-green"},"'/../vendor/autoload.php'"),e("p",{class:"text-code-fire"},";")],-1),W=e("br",null,null,-1),j=e("div",{class:"flex flex-wrap"},[e("p",{class:"text-muted-gray"},[t(" /* "),e("br"),t(" |-------------------------------------------------------------------------- "),e("br"),t(" | Run The Application "),e("br"),t(" |-------------------------------------------------------------------------- "),e("br"),t(" | "),e("br"),t(" | Once we have the application, we can handle the incoming request using "),e("br"),t(" | the application's HTTP kernel. Then, we will send the response back "),e("br"),t(" | to this client's browser, allowing them to enjoy our application. "),e("br"),t(" | "),e("br"),t(" */ "),e("br")])],-1),D=e("br",null,null,-1),H=e("div",{class:"flex flex-wrap"},[e("p",{class:"text-code-purple"},"$app"),e("p",{class:"text-code-white"},"\xA0=\xA0"),e("p",{class:"text-code-fire"},"require_once\xA0"),e("p",{class:"text-code-purple"},"__DIR__"),e("p",{class:"text-code-white"},"."),e("p",{class:"text-code-green"},"'/../bootstrap/app.php'"),e("p",{class:"text-code-fire"},";")],-1),N=e("br",null,null,-1),V=e("div",{class:"flex flex-wrap"},[e("p",{class:"text-code-purple"},"$kernel"),e("p",{class:"text-code-white"},"\xA0=\xA0"),e("p",{class:"text-code-purple"},"$kernel"),e("p",{class:"text-code-white"},"->"),e("p",{class:"text-code-gold"},"make"),e("p",{class:"text-code-white"},"(Kernel:"),e("p",{class:"text-code-fire"},"class"),e("p",{class:"text-code-white"},")"),e("p",{class:"text-code-fire"},";")],-1),z=e("br",null,null,-1),E=e("div",{class:"flex flex-wrap"},[e("p",{class:"text-code-purple"},"$response"),e("p",{class:"text-code-white"},"\xA0=\xA0"),e("p",{class:"text-code-purple"},"$kernel"),e("p",{class:"text-code-white"},"->"),e("p",{class:"text-code-gold"},"handle"),e("p",{class:"text-code-white"},"(")],-1),F=e("p",{class:"text-code-purple"},"$request",-1),K=e("p",{class:"text-code-white"},"\xA0=\xA0",-1),M=e("p",{class:"text-code-white"},"Request::",-1),S=e("p",{class:"text-code-white"},"->",-1),U=e("p",{class:"text-code-gold"},"handle",-1),O=e("p",{class:"text-code-white"},"()",-1),P=[F,K,M,S,U,O],G=e("div",{class:"flex flex-wrap"},[e("p",{class:"text-code-white"},")->"),e("p",{class:"text-code-gold"},"handle"),e("p",{class:"text-code-white"},"()"),e("p",{class:"text-code-fire"},";")],-1),J=e("br",null,null,-1),Q=e("div",{class:"flex flex-wrap"},[e("p",{class:"text-code-purple"},"$kernel"),e("p",{class:"text-code-white"},"->"),e("p",{class:"text-code-gold"},"terminate"),e("p",{class:"text-code-white"},"("),e("p",{class:"text-code-purple"},"$request"),e("p",{class:"text-code-fire"},",\xA0"),e("p",{class:"text-code-purple"},"$response"),e("p",{class:"text-code-white"},")"),e("p",{class:"text-code-fire"},";")],-1),ne={__name:"Index",setup(X){return r(()=>{c(),a(100,57)}),d(()=>{i()}),(s,Y)=>(p(),n(o,{title:"Abdulsalam Emesh"},{default:x(()=>[e("div",h,[_,u,f,w,m,b,v,g,k,$,e("div",{class:l(["flex flex-wrap",s.paddingLevel(1)])},I,2),T,A,C,L,B,W,j,D,H,N,V,z,E,e("div",{class:l(["flex flex-wrap",s.paddingLevel(1)])},P,2),G,J,Q])]),_:1}))}};export{ne as default};