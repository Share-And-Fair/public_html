!function(){"use strict";!function(){var e=window.wp.i18n,t=window.wp.element,l=window.wp.data,s=window.wp.blocks,a=window.wp.blockEditor,n="function"==typeof a.useInnerBlocksProps?a.useInnerBlocksProps:a.__experimentalUseInnerBlocksProps,c=React.createElement("svg",{viewBox:"0 0 56 56"},React.createElement("path",{d:"M15.5,28.1v-6.3C20.3,21.1,24,17,24,12c0-5.5-4.5-10-10-10S4,6.5,4,12c0,5,3.7,9.1,8.5,9.9v6.3 C7.7,28.9,4,33,4,38s3.7,9.1,8.5,9.9V54h3v-6.1C20.3,47.1,24,43,24,38S20.3,28.9,15.5,28.1z M8,12c0-3.3,2.7-6,6-6s6,2.7,6,6 s-2.7,6-6,6S8,15.3,8,12z M14,44c-3.3,0-6-2.7-6-6s2.7-6,6-6s6,2.7,6,6S17.3,44,14,44z"}),React.createElement("rect",{x:"37",y:"10",width:"8",height:"4"}),React.createElement("rect",{x:"37",y:"16",width:"8",height:"4"}),React.createElement("rect",{x:"37",y:"22",width:"8",height:"4"}),React.createElement("rect",{x:"37",y:"28",width:"8",height:"4"}),React.createElement("polygon",{points:"41,48 53,32 29,32 "})),r=window.wp.components;function o({attributes:t,setAttributes:l}){const{stepLabel:s,startNum:a,stepClass:n,numLayout:c,numShape:o}=t;return React.createElement(r.PanelBody,{title:(0,e.__)("ステップ設定","swell")},React.createElement(r.TextControl,{label:(0,e.__)("「STEP」の文字","swell"),value:s,onChange:e=>{l({stepLabel:e})}}),React.createElement(r.TextControl,{label:(0,e.__)("始まりの番号","swell"),value:a,type:"number",onChange:e=>{l({startNum:parseInt(e)})}}),"big"===n?React.createElement(r.BaseControl,null,React.createElement(r.BaseControl.VisualLabel,null,(0,e.__)("ステップ番号の並び","swell")),React.createElement(r.ButtonGroup,{className:"swl-btns--padSmall"},React.createElement(r.Button,{isPrimary:"vertical"===c,onClick:()=>{l({numLayout:"vertical"})}},(0,e.__)("縦並び","swell")),React.createElement(r.Button,{isPrimary:"horizontal"===c,onClick:()=>{l({numLayout:"horizontal"})}},(0,e.__)("横並び","swell")))):React.createElement(r.BaseControl,null,React.createElement(r.BaseControl.VisualLabel,null,(0,e.__)("ステップ番号の形","swell")),React.createElement(r.ButtonGroup,{className:"swl-btns--padSmall"},React.createElement(r.Button,{isPrimary:"circle"===o,onClick:()=>{l({numShape:"circle"})}},(0,e.__)("円形","swell")),React.createElement(r.Button,{isPrimary:"square"===o,onClick:()=>{l({numShape:"square"})}},(0,e.__)("四角形","swell")))))}const i=["loos/step-item"],u=[["loos/step-item"],["loos/step-item"]],m="swell-block-step";var p;(0,s.registerBlockType)("loos/step",{title:(0,e.__)("ステップ","swell"),description:(0,e.__)("ステップ形式で流れを説明できます。","swell"),icon:(p=c,{foreground:" #04384c",src:p}),styles:[{name:"default",label:(0,e.__)("デフォルト","swell"),isDefault:!0},{name:"big",label:(0,e.__)("ビッグ","swell")},{name:"small",label:(0,e.__)("スモール","swell")}],edit:({attributes:s,setAttributes:c,clientId:r})=>{const{stepLabel:p,stepClass:w,numShape:d,numLayout:b,startNum:E}=s,_=s.className||"";(0,t.useEffect)((()=>{-1!==_.indexOf("is-style-big")?c({stepClass:"big"}):-1!==_.indexOf("is-style-small")?c({stepClass:"small"}):c({stepClass:"default"})}),[_]);const R=(0,l.useSelect)((e=>e("core/block-editor").getBlocks(r)),[r]),{updateBlockAttributes:h}=(0,l.useDispatch)("core/block-editor");(0,t.useEffect)((()=>{R.forEach((e=>{h(e.clientId,{stepLabel:p,stepClass:w})}))}),[R,w,p]);const y=(0,a.useBlockProps)({className:`${m} swl-inner-blocks`,style:1<E?{counterReset:"step "+(E-1)}:null,"data-num-style":"big"===w?b:d}),B=n({},{allowedBlocks:i,template:u,templateLock:!1,renderAppender:a.InnerBlocks.ButtonBlockAppender});return React.createElement(React.Fragment,null,React.createElement(a.InspectorControls,null,React.createElement(o,{attributes:s,setAttributes:c})),React.createElement("div",y,React.createElement("div",{className:"swl-parentSelector"},(0,e.__)("親ブロックを選択","swell")),B.children))},save:({attributes:e})=>{const{startNum:t,stepClass:l,numLayout:s,numShape:n}=e,c=a.useBlockProps.save({className:m,style:1<t?{counterReset:"step "+(t-1)}:null,"data-num-style":"big"===l?s:n});return React.createElement("div",c,React.createElement(a.InnerBlocks.Content,null))}})}()}();