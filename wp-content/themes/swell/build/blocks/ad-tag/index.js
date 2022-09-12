!function(){"use strict";var e={n:function(t){var l=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(l,{a:l}),l},d:function(t,l){for(var n in l)e.o(l,n)&&!e.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:l[n]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)}};!function(e,t,l){var n=window.wp.i18n,r=window.wp.element,a=window.wp.blocks,c=window.wp.blockEditor,o=window.wp.components,i=window.wp.serverSideRender,s=l.n(i);function u(e,t,l){return t in e?Object.defineProperty(e,t,{value:l,enumerable:!0,configurable:!0,writable:!0}):e[t]=l,e}function p(e,t){var l=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),l.push.apply(l,n)}return l}var w=function(e){var t=e.icon,l=e.size,n=void 0===l?24:l,a=function(e,t){if(null==e)return{};var l,n,r=function(e,t){if(null==e)return{};var l,n,r={},a=Object.keys(e);for(n=0;n<a.length;n++)l=a[n],t.indexOf(l)>=0||(r[l]=e[l]);return r}(e,t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);for(n=0;n<a.length;n++)l=a[n],t.indexOf(l)>=0||Object.prototype.propertyIsEnumerable.call(e,l)&&(r[l]=e[l])}return r}(e,["icon","size"]);return(0,r.cloneElement)(t,function(e){for(var t=1;t<arguments.length;t++){var l=null!=arguments[t]?arguments[t]:{};t%2?p(Object(l),!0).forEach((function(t){u(e,t,l[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(l)):p(Object(l)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(l,t))}))}return e}({width:n,height:n},a))},d=window.wp.primitives,v=(0,r.createElement)(d.SVG,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"},(0,r.createElement)(d.Path,{d:"M20.1 5.1L16.9 2 6.2 12.7l-1.3 4.4 4.5-1.3L20.1 5.1zM4 20.8h8v-1.5H4v1.5z"})),b=window.wp.url,f=[{attributes:{adID:{type:"string",default:""}},save:({attributes:e})=>React.createElement("div",null,'[ad_tag id="'+e.adID+'"]')}],m=React.createElement("svg",{viewBox:"0 0 56 56"},React.createElement("path",{d:"M56,17l-2.8,7.9v0c-1.5-0.5-2.9-0.4-4.3,0.2c-1.4,0.7-2.4,1.7-2.9,3.2s-0.4,2.9,0.2,4.3c0.7,1.4,1.7,2.4,3.2,2.9v0l-2.8,7.9 L4.4,28.3l2.8-7.8c1.5,0.5,2.9,0.4,4.3-0.2c1.4-0.6,2.4-1.7,2.9-3.2c0.5-1.5,0.4-2.9-0.2-4.3c-0.6-1.4-1.7-2.3-3.2-2.9l2.9-8L56,17z M42.1,32.9l3.8-10.5c0.3-0.9,0.3-1.8-0.1-2.7c-0.4-0.8-1.1-1.5-2-1.8l-21.1-7.6c-1.8-0.6-3.8,0.3-4.5,2.1l-3.8,10.5 c-0.7,1.8,0.3,3.8,2.1,4.5L37.6,35c0.4,0.1,0.8,0.2,1.2,0.2C40.3,35.2,41.6,34.3,42.1,32.9z M22.3,11.6l21,7.6 c0.5,0.2,1,0.6,1.2,1.1c0.2,0.5,0.3,1.1,0.1,1.6l-3.8,10.5c-0.4,1.1-1.6,1.7-2.7,1.3l-21-7.7c-1.1-0.4-1.7-1.6-1.3-2.7l3.8-10.5 c0.3-0.8,1.1-1.4,2-1.4C21.8,11.4,22.1,11.5,22.3,11.6z M41.4,45.6c1,0.8,2.1,1.1,3.4,1.1h0v8.4H0v-8.3c1.5,0,2.9-0.6,3.9-1.7 c1.1-1.1,1.7-2.4,1.7-3.9S5,38.4,3.9,37.3S1.5,35.6,0,35.6v-8.5h2.9l-0.8,2.2l8,2.9c-1.4,0.4-2.5,1.7-2.5,3.3v11.2 c0,1.9,1.6,3.5,3.5,3.5h22.4c1.9,0,3.5-1.6,3.5-3.5v-4.9l2.3,0.8C39.8,43.8,40.4,44.8,41.4,45.6z M9.1,46.7V35.5 c0-1.1,1-2.1,2.1-2.1h2.3l22.2,7.9v5.4c0,1.1-1,2.1-2.1,2.1H11.2C10.1,48.8,9.1,47.8,9.1,46.7z"}));const g=[{value:"",label:(0,n.__)("-- バナー型 --","swell")}],h=[{value:"",label:(0,n.__)("-- アフィリエイト型 --","swell")}],y=[{value:"",label:(0,n.__)("-- Amazon型 --","swell")}],O=[{value:"",label:(0,n.__)("-- ランキング型 --","swell")}],E=window.swellAdTags||{};Object.keys(E).forEach((function(e){const t=E[e];"normal"===t.type?g.push({value:e,label:t.title}):"affiliate"===t.type?h.push({value:e,label:t.title}):"amazon"===t.type?y.push({value:e,label:t.title}):"ranking"===t.type&&O.push({value:e,label:t.title})}));const _=(0,r.memo)((({adID:e,setAttributes:t})=>React.createElement("div",{className:"swl-block-selectArea"},React.createElement(o.SelectControl,{value:e,options:g,onChange:e=>{t({adID:e})}}),React.createElement(o.SelectControl,{value:e,options:h,onChange:e=>{t({adID:e})}}),React.createElement(o.SelectControl,{value:e,options:y,onChange:e=>{t({adID:e})}}),React.createElement(o.SelectControl,{value:e,options:O,onChange:e=>{t({adID:e})}}))));var j;(0,a.registerBlockType)("loos/ad-tag",{title:(0,n.__)("広告タグ","swell"),description:(0,n.__)("登録済みの広告タグを呼び出すことができます。","swell"),icon:(j=m,{foreground:" #04384c",src:j}),edit:({attributes:e,setAttributes:t})=>{const{adID:l}=e,r=(0,c.useBlockProps)({className:"swell-block-ad-tag swl-block-hasPreview"});return React.createElement("div",r,React.createElement(_,{adID:l,setAttributes:t}),React.createElement("div",{className:"swl-block-previewLabel"},React.createElement("span",null,"Preview"),l&&React.createElement("a",{href:(0,b.addQueryArgs)("post.php",{post:l,action:"edit"}),className:"__editLink",target:"_blank",rel:"noopener noreferrer"},React.createElement(w,{icon:v}),React.createElement("span",null,(0,n.__)("この広告タグを編集する","swell")))),React.createElement("div",{className:"swl-block-previewArea"},l?React.createElement(s(),{block:"loos/ad-tag",attributes:e}):React.createElement("p",null,(0,n.__)("広告タグを選択してください。","swell"))))},save:()=>null,deprecated:f})}(0,0,e)}();