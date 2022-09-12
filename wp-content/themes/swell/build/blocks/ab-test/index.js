!function(){var e={980:function(e,t,a){"use strict";var l=window.wp.i18n,c=window.wp.element,n=window.wp.blocks,r=window.wp.blockEditor,s=window.wp.components,o="function"==typeof r.useInnerBlocksProps?r.useInnerBlocksProps:r.__experimentalUseInnerBlocksProps,i=JSON.parse('{"u2":"loos/ab-test"}'),u=React.createElement("svg",{viewBox:"0 0 56 56"},React.createElement("path",{d:"M16.9,19.3h-2.5L6.7,36.7H10l1.7-4h7.5l1.7,4h3.3L16.9,19.3z M18.1,29.8h-5.2l2.6-6.3L18.1,29.8z"}),React.createElement("path",{d:"M42.2,26.2c0.4-0.1,0.7-0.2,1-0.3c0.3-0.2,0.5-0.4,0.7-0.6c0.2-0.3,0.2-0.6,0.2-1.1c0-0.4-0.1-0.7-0.2-1 c-0.2-0.2-0.4-0.4-0.6-0.6c-0.3-0.2-0.6-0.3-1-0.3c-0.4-0.1-0.8-0.1-1.2-0.1h-2.4v4.1h2.2C41.3,26.3,41.7,26.2,42.2,26.2z"}),React.createElement("path",{d:"M43.9,29.6c-0.3-0.2-0.7-0.3-1.1-0.4c-0.4-0.1-0.9-0.1-1.3-0.1h-2.8v4.8h2.8c0.4,0,0.9,0,1.3-0.1 c0.4-0.1,0.8-0.2,1.1-0.4c0.3-0.2,0.6-0.4,0.7-0.7c0.2-0.3,0.3-0.6,0.3-1.1c0-0.5-0.1-0.9-0.3-1.2C44.5,30,44.2,29.8,43.9,29.6z"}),React.createElement("path",{d:"M33,8h-1H2v40h24h1h27V8H33z M25.3,46H4V10h26.7L25.3,46z M47.3,34.1c-0.4,0.7-1,1.2-1.6,1.6 c-0.7,0.4-1.4,0.6-2.2,0.8c-0.8,0.1-1.6,0.2-2.4,0.2h-5.4V19.3h5.5c0.7,0,1.4,0.1,2.1,0.2c0.7,0.2,1.3,0.4,1.9,0.7 c0.6,0.4,1,0.8,1.4,1.4c0.4,0.6,0.5,1.3,0.5,2.2c0,1.1-0.3,2-0.9,2.7c-0.3,0.3-0.6,0.6-1,0.9c0.1,0,0.2,0.1,0.2,0.1 c0.5,0.2,0.9,0.6,1.3,1c0.4,0.4,0.7,0.9,0.9,1.4c0.2,0.5,0.3,1.1,0.3,1.7C48,32.6,47.8,33.4,47.3,34.1z"})),p=a(184),m=a.n(p),b=(0,c.memo)((e=>{const{tabs:t,state:a,setState:l,className:c}=e;return React.createElement("div",{className:m()("swl-tabControl",c)},t.map((e=>React.createElement(s.Button,{isSecondary:a!==e.key,isPrimary:a===e.key,onClick:()=>{l(e.key)},key:`tabkey_${e.key}`},e.label))))}));const w=["loos/ab-test-a","loos/ab-test-b"],R=[["loos/ab-test-a"],["loos/ab-test-b"]];var d;(0,n.registerBlockType)(i.u2,{title:(0,l.__)("ABテスト","swell"),description:(0,l.__)("2つのブロックをランダムに表示します。","swell"),icon:(d=u,{foreground:" #04384c",src:d}),edit:({attributes:e,setAttributes:t})=>{const{rate:a}=e,[n,i]=(0,c.useState)("tab-a"),u=(0,r.useBlockProps)({className:m()("swell-block-abTest",n,"swl-inner-blocks")}),p=o({},{allowedBlocks:w,template:R,templateLock:!0}),d=void 0===a?50:a,f=100-d;return React.createElement(React.Fragment,null,React.createElement("div",u,React.createElement(r.InspectorControls,null,React.createElement(s.PanelBody,{title:(0,l.__)("設定","swell")},React.createElement(s.Flex,{className:"swl-control--abRate"},React.createElement(s.FlexItem,null,React.createElement("span",{className:"__abLabel -A"},"A"),React.createElement("br",null),React.createElement("span",{className:"__abRate"},d,"%")),React.createElement(s.FlexBlock,null,React.createElement(s.RangeControl,{allowReset:!0,label:(0,l.__)("表示比率","swell"),value:d,onChange:e=>{t(50===e?{rate:void 0}:{rate:e})},min:0,max:100})),React.createElement(s.FlexItem,null,React.createElement("span",{className:"__abLabel -B"},"B"),React.createElement("br",null),React.createElement("span",{className:"__abRate"},f,"%"))))),React.createElement(b,{className:"-ab-test",tabs:[{key:"tab-a",label:(0,l.__)("Aブロック","swell")+` (${d}%)`},{key:"tab-b",label:(0,l.__)("Bブロック","swell")+` (${f}%)`}],state:n,setState:i}),p.children))},save:()=>React.createElement(r.InnerBlocks.Content,null)})},184:function(e,t){var a;!function(){"use strict";var l={}.hasOwnProperty;function c(){for(var e=[],t=0;t<arguments.length;t++){var a=arguments[t];if(a){var n=typeof a;if("string"===n||"number"===n)e.push(a);else if(Array.isArray(a)){if(a.length){var r=c.apply(null,a);r&&e.push(r)}}else if("object"===n)if(a.toString===Object.prototype.toString)for(var s in a)l.call(a,s)&&a[s]&&e.push(s);else e.push(a.toString())}}return e.join(" ")}e.exports?(c.default=c,e.exports=c):void 0===(a=function(){return c}.apply(t,[]))||(e.exports=a)}()}},t={};function a(l){var c=t[l];if(void 0!==c)return c.exports;var n=t[l]={exports:{}};return e[l](n,n.exports,a),n.exports}a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,{a:t}),t},a.d=function(e,t){for(var l in t)a.o(t,l)&&!a.o(e,l)&&Object.defineProperty(e,l,{enumerable:!0,get:t[l]})},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a(980)}();