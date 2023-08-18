!function(e,t,n,r){function i(e,t){return typeof e===t}function o(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):S?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function s(){var e=n.body;return e||(e=o(S?"svg":"body"),e.fake=!0),e}function a(e,t,r,i){var a,l,u,f,c="modernizr",d=o("div"),p=s();if(parseInt(r,10))for(;r--;)u=o("div"),u.id=i?i[r]:c+(r+1),d.appendChild(u);return a=o("style"),a.type="text/css",a.id="s"+c,(p.fake?p:d).appendChild(a),p.appendChild(d),a.styleSheet?a.styleSheet.cssText=e:a.appendChild(n.createTextNode(e)),d.id=c,p.fake&&(p.style.background="",p.style.overflow="hidden",f=w.style.overflow,w.style.overflow="hidden",w.appendChild(p)),l=t(d,e),p.fake?(p.parentNode.removeChild(p),w.style.overflow=f,w.offsetHeight):d.parentNode.removeChild(d),!!l}function l(e,n,r){var i;if("getComputedStyle"in t){i=getComputedStyle.call(t,e,n);var o=t.console;if(null!==i)r&&(i=i.getPropertyValue(r));else if(o){var s=o.error?"error":"log";o[s].call(o,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}}else i=!n&&e.currentStyle&&e.currentStyle[r];return i}function u(e,t){return!!~(""+e).indexOf(t)}function f(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function c(e,n){var i=e.length;if("CSS"in t&&"supports"in t.CSS){for(;i--;)if(t.CSS.supports(f(e[i]),n))return!0;return!1}if("CSSSupportsRule"in t){for(var o=[];i--;)o.push("("+f(e[i])+":"+n+")");return o=o.join(" or "),a("@supports ("+o+") { #modernizr { position: absolute; } }",function(e){return"absolute"===l(e,null,"position")})}return r}function d(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function p(e,t,n,s){function a(){f&&(delete E.style,delete E.modElem)}if(s=!i(s,"undefined")&&s,!i(n,"undefined")){var l=c(e,n);if(!i(l,"undefined"))return l}for(var f,p,m,h,v,y=["modernizr","tspan","samp"];!E.style&&y.length;)f=!0,E.modElem=o(y.shift()),E.style=E.modElem.style;for(m=e.length,p=0;p<m;p++)if(h=e[p],v=E.style[h],u(h,"-")&&(h=d(h)),E.style[h]!==r){if(s||i(n,"undefined"))return a(),"pfx"!==t||h;try{E.style[h]=n}catch(e){}if(E.style[h]!==v)return a(),"pfx"!==t||h}return a(),!1}function m(e,t){return function(){return e.apply(t,arguments)}}function h(e,t,n){var r;for(var o in e)if(e[o]in t)return!1===n?e[o]:(r=t[e[o]],i(r,"function")?m(r,n||t):r);return!1}function v(e,t,n,r,o){var s=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+z.join(s+" ")+s).split(" ");return i(t,"string")||i(t,"undefined")?p(a,t,r,o):(a=(e+" "+P.join(s+" ")+s).split(" "),h(a,t,n))}var y=[],g={_version:"3.11.3",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){y.push({name:e,fn:t,options:n})},addAsyncTest:function(e){y.push({name:null,fn:e})}},C=function(){};C.prototype=g,C=new C;var b=[],w=n.documentElement,S="svg"===w.nodeName.toLowerCase(),x=o("input");!function(){for(var e,t,i,o=["search","tel","url","email","datetime","date","month","week","time","datetime-local","number","range","color"],s=0;s<o.length;s++)x.setAttribute("type",e=o[s]),i="text"!==x.type&&"style"in x,i&&(x.value="1)",x.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(e)&&x.style.WebkitAppearance!==r?(w.appendChild(x),t=n.defaultView,i=t.getComputedStyle&&"textfield"!==t.getComputedStyle(x,null).WebkitAppearance&&0!==x.offsetHeight,w.removeChild(x)):/^(search|tel)$/.test(e)||(i=/^(url|email)$/.test(e)?x.checkValidity&&!1===x.checkValidity():"1)"!==x.value)),C.addTest("inputtypes."+e,!!i)}();var T=g._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];g._prefixes=T;var _=function(){var e=t.matchMedia||t.msMatchMedia;return e?function(t){var n=e(t);return n&&n.matches||!1}:function(e){var t=!1;return a("@media "+e+" { #modernizr { position: absolute; } }",function(e){t="absolute"===l(e,null,"position")}),t}}();g.mq=_,C.addTest("touchevents",function(){if("ontouchstart"in t||t.TouchEvent||t.DocumentTouch&&n instanceof DocumentTouch)return!0;var e=["(",T.join("touch-enabled),("),"heartz",")"].join("");return _(e)});var k="Moz O ms Webkit",z=g._config.usePrefixes?k.split(" "):[];g._cssomPrefixes=z;var j={elem:o("modernizr")};C._q.push(function(){delete j.elem});var E={style:j.elem.style};C._q.unshift(function(){delete E.style});var P=g._config.usePrefixes?k.toLowerCase().split(" "):[];g._domPrefixes=P,g.testAllProps=v;var L=function(e){var n,i=T.length,o=t.CSSRule;if(void 0===o)return r;if(!e)return!1;if(e=e.replace(/^@/,""),(n=e.replace(/-/g,"_").toUpperCase()+"_RULE")in o)return"@"+e;for(var s=0;s<i;s++){var a=T[s];if(a.toUpperCase()+"_"+n in o)return"@-"+a.toLowerCase()+"-"+e}return!1};g.atRule=L;var A=g.prefixed=function(e,t,n){return 0===e.indexOf("@")?L(e):(-1!==e.indexOf("-")&&(e=d(e)),t?v(e,t,n):v(e,"pfx"))};C.addTest("objectfit",!!A("objectFit"),{aliases:["object-fit"]});var N=g.testStyles=a;C.addTest("details",function(){var e,t=o("details");return"open"in t&&(N("#modernizr details{display:block}",function(n){n.appendChild(t),t.innerHTML="<summary>a</summary>b",e=t.offsetHeight,t.open=!0,e=e!==t.offsetHeight}),e)}),C.addTest("picture","HTMLPictureElement"in t),C.addTest("srcset","srcset"in o("img")),function(){var e,t,n,r,o,s,a;for(var l in y)if(y.hasOwnProperty(l)){if(e=[],t=y[l],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(r=i(t.fn,"function")?t.fn():t.fn,o=0;o<e.length;o++)s=e[o],a=s.split("."),1===a.length?C[a[0]]=r:(C[a[0]]&&(!C[a[0]]||C[a[0]]instanceof Boolean)||(C[a[0]]=new Boolean(C[a[0]])),C[a[0]][a[1]]=r),b.push((r?"":"no-")+a.join("-"))}}(),function(e){var t=w.className,n=C._config.classPrefix||"";if(S&&(t=t.baseVal),C._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}C._config.enableClasses&&(e.length>0&&(t+=" "+n+e.join(" "+n)),S?w.className.baseVal=t:w.className=t)}(b),delete g.addTest,delete g.addAsyncTest;for(var M=0;M<C._q.length;M++)C._q[M]();e.Modernizr=C}(window,window,document);