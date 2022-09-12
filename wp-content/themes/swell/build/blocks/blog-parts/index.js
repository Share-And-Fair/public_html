!function(){"use strict";var e={n:function(t){var r=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(r,{a:r}),r},d:function(t,r){for(var l in r)e.o(r,l)&&!e.o(t,l)&&Object.defineProperty(t,l,{enumerable:!0,get:r[l]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)}};!function(e,t,r){var l=window.wp.i18n,n=window.wp.blocks,a=window.wp.element,c=window.wp.components,o=window.wp.blockEditor,s=window.wp.serverSideRender,i=r.n(s);function u(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function p(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var l=Object.getOwnPropertySymbols(e);t&&(l=l.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,l)}return r}var w=function(e){var t=e.icon,r=e.size,l=void 0===r?24:r,n=function(e,t){if(null==e)return{};var r,l,n=function(e,t){if(null==e)return{};var r,l,n={},a=Object.keys(e);for(l=0;l<a.length;l++)r=a[l],t.indexOf(r)>=0||(n[r]=e[r]);return n}(e,t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);for(l=0;l<a.length;l++)r=a[l],t.indexOf(r)>=0||Object.prototype.propertyIsEnumerable.call(e,r)&&(n[r]=e[r])}return n}(e,["icon","size"]);return(0,a.cloneElement)(t,function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?p(Object(r),!0).forEach((function(t){u(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):p(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}({width:l,height:l},n))},b=window.wp.primitives,d=(0,a.createElement)(b.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,a.createElement)(b.Path,{d:"M20.1 5.1L16.9 2 6.2 12.7l-1.3 4.4 4.5-1.3L20.1 5.1zM4 20.8h8v-1.5H4v1.5z"})),v=window.wp.url,m=JSON.parse('{"u2":"loos/blog-parts"}'),f=[{attributes:{partsTitle:{type:"string",default:""},partsID:{type:"string",default:""}},save:({attributes:e})=>React.createElement("div",null,'[blog_parts id="'+e.partsID+'"]')}],h=React.createElement("svg",{viewBox:"0 0 56 56"},React.createElement("path",{d:"M51.8,46.2V9.8C51.8,8.3,50.5,7,49,7H7C5.5,7,4.2,8.3,4.2,9.8v36.4C4.2,47.7,5.5,49,7,49h42C50.5,49,51.8,47.7,51.8,46.2z M9.8,12.6h36.4v11.2H9.8V12.6z M12.6,15.4V21H21v-5.6H12.6z M23.8,15.4V21h8.4v-5.6H23.8z M35,15.4V21h8.4v-5.6H35z M11.2,29.4 c0.8,0,1.4,0.6,1.4,1.4c0,0.8-0.6,1.4-1.4,1.4s-1.4-0.6-1.4-1.4C9.8,30,10.4,29.4,11.2,29.4z M15.4,29.4h11.2v2.8H15.4V29.4z M32.2,29.4h14v14h-14V29.4z M11.2,35c0.8,0,1.4,0.6,1.4,1.4c0,0.8-0.6,1.4-1.4,1.4s-1.4-0.6-1.4-1.4C9.8,35.6,10.4,35,11.2,35z M15.4,35h11.2v2.8H15.4V35z M35,35v5.6h8.4V35H35z M11.2,40.6c0.8,0,1.4,0.6,1.4,1.4s-0.6,1.4-1.4,1.4S9.8,42.8,9.8,42 S10.4,40.6,11.2,40.6z M15.4,40.6h11.2v2.8H15.4V40.6z"}));const g=window.swellBlogParts||{},O=window.swellPartsUses||{},y=[{value:"all",label:"--- "+(0,l.__)("用途で絞り込む","swell")+" ---"}];y.push({value:"id-0",label:(0,l.__)("通常パーツ（用途の設定なし）","swell")});const E={"id-0":[],all:[]};Object.keys(O).forEach((e=>{const t=O[e];y.push({value:"id-"+e,label:t}),E["id-"+e]=[]})),Object.keys(g).forEach((e=>{const t=g[e],r=t.term_id||"0";E["id-"+r].push({value:e,label:t.title||""}),E.all.push({value:e,label:t.title||""})}));const _=(0,a.memo)((({partsID:e,setAttributes:t,selectedTerm:r,setSelectedTerm:n})=>(console.log(E,r),React.createElement("div",{className:"swl-block-selectArea"},React.createElement(c.SelectControl,{value:e,className:"-partlist",options:[{value:"",label:(0,l.__)("-- ブログパーツを選択 --","swell")},...E[r]],onChange:e=>{t({partsID:e})}}),React.createElement(c.SelectControl,{value:r,options:y,onChange:e=>{console.log("val",e),n(e),t({partsID:""})}})))));var j;(0,n.registerBlockType)(m.u2,{title:(0,l.__)("ブログパーツ","swell"),description:(0,l.__)("登録済みのブログパーツを呼び出すことができます。","swell"),icon:(j=h,{foreground:" #04384c",src:j}),edit:({attributes:e,setAttributes:t})=>{const{partsID:r}=e,n=g[r]?"id-"+(g[r].term_id||0):"all",[c,s]=(0,a.useState)(n),u=(0,o.useBlockProps)({className:"swell-block-blog-parts swl-block-hasPreview"});return React.createElement("div",u,React.createElement(_,{partsID:r,setAttributes:t,selectedTerm:c,setSelectedTerm:s}),React.createElement("div",{className:"swl-block-previewLabel"},React.createElement("span",null,"Preview"),r&&React.createElement("a",{href:(0,v.addQueryArgs)("post.php",{post:r,action:"edit"}),className:"__editLink",target:"_blank",rel:"noopener noreferrer"},React.createElement(w,{icon:d}),React.createElement("span",null,(0,l.__)("このブログパーツを編集する","swell")))),React.createElement("div",{className:"swl-block-previewArea"},r?React.createElement(i(),{block:"loos/blog-parts",attributes:e}):React.createElement("p",null,(0,l.__)("ブログパーツを選択してください。","swell"))))},save:()=>null,deprecated:f})}(0,0,e)}();