!function(){var e={247:function(e,t,l){"use strict";var a=window.wp.i18n,n=window.wp.element,s=window.wp.blocks,r=window.wp.blockEditor,c=window.wp.components,o="function"==typeof r.useInnerBlocksProps?r.useInnerBlocksProps:r.__experimentalUseInnerBlocksProps,i=JSON.parse('{"u2":"loos/step-item"}'),u=React.createElement("svg",{viewBox:"0 0 56 56"},React.createElement("rect",{x:"9.5",y:"36",width:"3",height:"8"}),React.createElement("rect",{x:"9.5",y:"12",width:"3",height:"8"}),React.createElement("path",{d:"M11,38C5.5,38,1,33.5,1,28s4.5-10,10-10s10,4.5,10,10S16.5,38,11,38z M11,22c-3.3,0-6,2.7-6,6c0,3.3,2.7,6,6,6 s6-2.7,6-6C17,24.7,14.3,22,11,22z"}),React.createElement("path",{d:"M50,40.5H28c-2.5,0-4.5-2-4.5-4.5V22c0-2.5,2-4.5,4.5-4.5h22c2.5,0,4.5,2,4.5,4.5v14 C54.5,38.5,52.5,40.5,50,40.5z M28,20.5c-0.8,0-1.5,0.7-1.5,1.5v14c0,0.8,0.7,1.5,1.5,1.5h22c0.8,0,1.5-0.7,1.5-1.5V22 c0-0.8-0.7-1.5-1.5-1.5H28z"})),m=l(184),p=l.n(m);const h=[["core/paragraph"]],d=(e,t,l)=>{let a="u-fz-l",n=`${_}__number`,s="__shape";const r={},c={};return"big"===e?t?r.color=t:n=p()(n,"u-col-main"):"small"===e?(a="u-fz-m",t?c.color=t:s=p()(s,"u-col-main"),l&&(c.background="currentColor")):t?r.backgroundColor=t:n=p()(n,"u-bg-main"),{ttlFz:a,numStyle:r,numClass:n,shapeStyle:c,shapeClass:s}},_="swell-block-step";var b;(0,s.registerBlockType)(i.u2,{title:(0,a.__)("ステップ項目","swell"),icon:(b=u,{foreground:" #04384c",src:b}),edit:({attributes:e,setAttributes:t})=>{const{title:l,numColor:s,stepClass:i,stepLabel:u,isHideLabel:m,isHideNum:p,isShapeFill:b,isPreview:C,theNum:v,theLabel:w}=e,{ttlFz:R,numStyle:E,numClass:f,shapeStyle:g,shapeClass:y}=(0,n.useMemo)((()=>d(i,s,b)),[i,s,b]),N="small"===i||C,k=m?"":w||u,x=(0,r.useBlockProps)({className:`${_}__item`}),S=o({className:`${_}__body swl-inner-blocks is-nested-inner swl-has-margin--s`},{template:h});return React.createElement(React.Fragment,null,React.createElement(r.InspectorControls,null,React.createElement(c.PanelBody,{title:(0,a.__)("STEPテキストの上書き設定","swell")},React.createElement(c.TextControl,{label:(0,a.sprintf)(
/* translators: %s STEPテキスト */
(0,a.__)("「%s」部分のテキスト","swell"),u),value:w,onChange:e=>{t({theLabel:e})}}),React.createElement(c.BaseControl,null,React.createElement(c.CheckboxControl,{label:(0,a.__)("テキストを非表示にする","swell"),checked:m,onChange:e=>t({isHideLabel:e})})),React.createElement(c.TextControl,{label:(0,a.__)("番号部分のテキスト","swell"),value:v,onChange:e=>{t({theNum:e})}}),React.createElement(c.BaseControl,null,React.createElement(c.CheckboxControl,{label:(0,a.__)("番号を非表示にする","swell"),checked:p,onChange:e=>t({isHideNum:e})}))),"small"===i&&React.createElement(c.PanelBody,{title:(0,a.__)("ステップ項目の設定","swell")},React.createElement(c.CheckboxControl,{label:(0,a.__)("シェイプを塗りつぶす","swell"),checked:b,onChange:e=>{t({isShapeFill:e})}})),React.createElement(r.PanelColorSettings,{title:(0,a.__)("ステップ番号のカラー設定","swell"),initialOpen:!0,colorSettings:[{value:s,label:(0,a.__)("色","swell"),onChange:e=>{t({numColor:e})}}]})),React.createElement("div",x,React.createElement("div",{className:f,style:E||null,"data-num":p?"":v||null,"data-hide":p&&m?"1":null},N?React.createElement("span",{className:y,role:"presentation",style:g}):null,k?React.createElement("span",{className:"__label"},k):null),React.createElement(r.RichText,{placeholder:(0,a.__)("タイトル","swell")+"...",className:`${_}__title ${R}`,tagName:"div",value:l,onChange:e=>t({title:e})}),React.createElement("div",S)))},save:({attributes:e})=>{const{title:t,numColor:l,stepClass:a,stepLabel:n,isShapeFill:s,isHideLabel:c,isHideNum:o,theNum:i,theLabel:u}=e,{ttlFz:m,numStyle:p,numClass:h,shapeStyle:b,shapeClass:C}=d(a,l,s),v=c?"":u||n,w=r.useBlockProps.save({className:`${_}__item`});return React.createElement("div",w,React.createElement("div",{className:h,style:p||null,"data-num":o?"":i||null,"data-hide":o&&c?"1":null},"small"===a?React.createElement("span",{className:C,role:"presentation",style:b}):null,v?React.createElement("span",{className:"__label"},v):null),!!t&&React.createElement("div",{className:`${_}__title ${m}`},React.createElement(r.RichText.Content,{value:t})),React.createElement("div",{className:`${_}__body`},React.createElement(r.InnerBlocks.Content,null)))}})},184:function(e,t){var l;!function(){"use strict";var a={}.hasOwnProperty;function n(){for(var e=[],t=0;t<arguments.length;t++){var l=arguments[t];if(l){var s=typeof l;if("string"===s||"number"===s)e.push(l);else if(Array.isArray(l)){if(l.length){var r=n.apply(null,l);r&&e.push(r)}}else if("object"===s)if(l.toString===Object.prototype.toString)for(var c in l)a.call(l,c)&&l[c]&&e.push(c);else e.push(l.toString())}}return e.join(" ")}e.exports?(n.default=n,e.exports=n):void 0===(l=function(){return n}.apply(t,[]))||(e.exports=l)}()}},t={};function l(a){var n=t[a];if(void 0!==n)return n.exports;var s=t[a]={exports:{}};return e[a](s,s.exports,l),s.exports}l.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return l.d(t,{a:t}),t},l.d=function(e,t){for(var a in t)l.o(t,a)&&!l.o(e,a)&&Object.defineProperty(e,a,{enumerable:!0,get:t[a]})},l.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},l(247)}();