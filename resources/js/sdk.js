
<!-- saved from url=(0035)https://www.ordertracker.com/sdk.js -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body>// Zoid JS
!function(n,e){"object"==typeof exports&amp;&amp;"object"==typeof module?module.exports=e():"function"==typeof define&amp;&amp;define.amd?define("zoid",[],e):"object"==typeof exports?exports.zoid=e():n.zoid=e()}("undefined"!=typeof self?self:this,(function(){return function(n){var e={};function r(t){if(e[t])return e[t].exports;var o=e[t]={i:t,l:!1,exports:{}};return n[t].call(o.exports,o,o.exports,r),o.l=!0,o.exports}return r.m=n,r.c=e,r.d=function(n,e,t){r.o(n,e)||Object.defineProperty(n,e,{enumerable:!0,get:t})},r.r=function(n){"undefined"!=typeof Symbol&amp;&amp;Symbol.toStringTag&amp;&amp;Object.defineProperty(n,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(n,"__esModule",{value:!0})},r.t=function(n,e){if(1&amp;e&amp;&amp;(n=r(n)),8&amp;e)return n;if(4&amp;e&amp;&amp;"object"==typeof n&amp;&amp;n&amp;&amp;n.__esModule)return n;var t=Object.create(null);if(r.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:n}),2&amp;e&amp;&amp;"string"!=typeof n)for(var o in n)r.d(t,o,function(e){return n[e]}.bind(null,o));return t},r.n=function(n){var e=n&amp;&amp;n.__esModule?function(){return n.default}:function(){return n};return r.d(e,"a",e),e},r.o=function(n,e){return{}.hasOwnProperty.call(n,e)},r.p="",r(r.s=0)}([function(n,e,r){"use strict";function t(n,e){return(t=Object.setPrototypeOf||function(n,e){return n.__proto__=e,n})(n,e)}function o(n,e){n.prototype=Object.create(e.prototype),n.prototype.constructor=n,t(n,e)}function i(){return(i=Object.assign||function(n){for(var e=1;e<arguments.length;e++){var r="arguments[e];for(var" t="" in="" r)({}).hasownproperty.call(r,t)&&(n[t]="r[t])}return" n}).apply(this,arguments)}function="" a(n){try{if(!n)return!1;if("undefined"!="typeof" promise&&n="" instanceof="" promise)return!0;if("undefined"!="typeof" window&&"function"="=typeof" window.window&&n="" window.window)return!1;if("undefined"!="typeof" window.constructor&&n="" window.constructor)return!1;var="" e="{}.toString;if(e){var" window]"="==r||&quot;[object" global]"="==r||&quot;[object" domwindow]"="==r)return!1}if(&quot;function&quot;==typeof" n.then)return!0}catch(n){return!1}return!1}r.r(e),r.d(e,"popupopenerror",(function(){return="" rn})),r.d(e,"create",(function(){return="" at})),r.d(e,"destroy",(function(){return="" dt})),r.d(e,"destroycomponents",(function(){return="" ut})),r.d(e,"destroyall",(function(){return="" ct})),r.d(e,"prop_type",(function(){return="" fr})),r.d(e,"prop_serialization",(function(){return="" mr})),r.d(e,"context",(function(){return="" ur})),r.d(e,"event",(function(){return="" lr}));var="" u,c="[],d=[],f=0;function" s(){if(!f&&u){var="" n="u;u=null,n.resolve()}}function" l(){f+="1}function" w(){f-="1,s()}var" h="function(){function" n(n){var="" 0,this.rejected="void" 0,this.errorhandled="void" 0,this.value="void" 0,this.error="void" 0,this.handlers="void" 0,this.dispatching="void" 0,this.stack="void" 0,this.resolved="!1,this.rejected=!1,this.errorHandled=!1,this.handlers=[],n){var" r,t,o="!1,i=!1,a=!1;l();try{n((function(n){a?e.resolve(n):(o=!0,r=n)}),(function(n){a?e.reject(n):(i=!0,t=n)}))}catch(n){return" w(),void="" this.reject(n)}w(),a="!0,o?this.resolve(r):i&amp;&amp;this.reject(t)}}var" e.resolve="function(n){if(this.resolved||this.rejected)return" this;if(a(n))throw="" new="" error("can="" not="" resolve="" promise="" with="" another="" promise");return="" this.resolved="!0,this.value=n,this.dispatch(),this},e.reject=function(n){var" reject="" promise");if(!n){var="" n.tostring?n.tostring():{}.tostring.call(n);n="new" error("expected="" to="" be="" called="" error,="" got="" "+r)}return="" this.rejected="!0,this.error=n,this.errorHandled||setTimeout((function(){e.errorHandled||function(n,e){if(-1===c.indexOf(n)){c.push(n),setTimeout((function(){throw" n}),1);for(var="" this.errorhandled="!0,this.reject(n),this},e.dispatch=function(){var" o="function(n,e){return" n.then((function(n){e.resolve(n)}),(function(n){e.reject(n)}))},i="0;i&lt;t.length;i++){var" u="t[i],c=u.onSuccess,d=u.onError,f=u.promise,s=void" 0;if(e)try{s="c?c(this.value):this.value}catch(n){f.reject(n);continue}else" if(r){if(!d){f.reject(this.error);continue}try{s="d(this.error)}catch(n){f.reject(n);continue}}if(s" n&&(s.resolved||s.rejected)){var="" a(s)?s="" n&&(s.resolved||s.rejected)?s.resolved?f.resolve(s.value):f.reject(s.error):o(s,f):f.resolve(s)}t.length="0,this.dispatching=!1,w()}},e.then=function(e,r){if(e&amp;&amp;&quot;function&quot;!=typeof" e&&!e.call)throw="" error("promise.then="" expected="" a="" function="" for="" success="" handler");if(r&&"function"!="typeof" r&&!r.call)throw="" error="" handler");var="" n;return="" this.handlers.push({promise:t,onsuccess:e,onerror:r}),this.errorhandled="!0,this.dispatch(),t},e.catch=function(n){return" this.then(void="" 0,n)},e.finally="function(e){if(e&amp;&amp;&quot;function&quot;!=typeof" error("promise.finally="" function");return="" this.then((function(r){return="" n.try(e).then((function(){return="" r}))}),(function(r){return="" n.try(e).then((function(){throw="" r}))}))},e.timeout="function(n,e){var" this;var="" error("promise="" timed="" out="" after="" "+n+"ms"))}),n);return="" this.then((function(n){return="" cleartimeout(t),n}))},e.topromise="function(){if(&quot;undefined&quot;==typeof" promise)throw="" typeerror("could="" find="" promise.resolve(this)},e.lazy="function(){return" n?e:a(e)?new="" n((function(n,r){return="" e.then(n,r)})):(new="" n).resolve(e)},n.reject="function(e){return(new" n).reject(e)},n.asyncreject="function(e){return(new" n).asyncreject(e)},n.all="function(e){var" n,t="e.length,o=[].slice();if(!t)return" r.resolve(o),r;for(var="" i="function(n,e,i){return" e.then((function(e){o[n]="e,0==(t-=1)&amp;&amp;r.resolve(o)}),(function(n){i.reject(n)}))},u=0;u&lt;e.length;u++){var" c="e[u];if(c" n){if(c.resolved){o[u]="c.value,t-=1;continue}}else" if(!a(c)){o[u]="c,t-=1;continue}i(u,n.resolve(c),r)}return" 0="==t&amp;&amp;r.resolve(o),r},n.hash=function(e){var" e)o(i);return="" n.all(t).then((function(){return="" r}))},n.map="function(e,r){return" n.all(e.map(r))},n.onpossiblyunhandledexception="function(n){return" function(n){return="" d.push(n),{cancel:function(){d.splice(d.indexof(n),1)}}}(n)},n.try="function(e,r,t){if(e&amp;&amp;&quot;function&quot;!=typeof" error("promise.try="" function");var="" o;l();try{o="e.apply(r,t||[])}catch(e){return" w(),n.reject(e)}return="" w(),n.resolve(o)},n.delay="function(e){return" n((function(n){settimeout(n,e)}))},n.ispromise="function(e){return!!(e&amp;&amp;e" n)||a(e)},n.flush="function(){return" n,s(),e;var="" e},n}();function="" p(n){return"[object="" regexp]"="=={}.toString.call(n)}var" v="Call was rejected by callee.\r\n" ;function="" m(n){return="" void="" y(n){if(void="" e}return="" m(n)}function="" g(n){return="" b(n){if(void="" n.parent}catch(n){}}function="" e(n){if(void="" n.opener}catch(n){}}function="" _(n){try{return!0}catch(n){}return!1}function="" x(n){void="" read="" window="" location");var="" protocol");if("file:"="==r)return&quot;file://&quot;;if(&quot;about:&quot;===r){var" t&&_()?x(t):"about:="" "}var="" host");return="" r+"="" "+o}function="" p(n){void="" e&&n.mockdomain&&0="==n.mockDomain.indexOf(&quot;mock:&quot;)?n.mockDomain:e}function" o(n){if(!function(n){try{if(n="==window)return!0}catch(n){}try{var" c(n){if(!o(n))throw="" same="" domain");return="" n}function="" w(n,e){if(!n||!e)return!1;var="" r?r="==n:-1!==function(n){var" e}(e).indexof(n)}function="" s(n){var="" e,r,t="[];try{e=n.frames}catch(r){e=n}try{r=e.length}catch(n){}if(0===r)return" t;if(r){for(var="" 0;try{i="e[o]}catch(n){continue}t.push(i)}return" t}for(var="" 0;try{u="e[a]}catch(n){return" t}if(!u)return="" t;t.push(u)}return="" t}function="" d(n){for(var="" e}function="" n(n){void="" n.top}catch(n){}if(b(n)="==n)return" n;try{if(w(window,n)&&window.top)return="" window.top}catch(n){}try{if(w(n,window)&&window.top)return="" window.top}catch(n){}for(var="" t.top}catch(n){}if(b(t)="==t)return" t}}function="" j(n){var="" determine="" top="" window");var="" t(n,e){void="" r}catch(n){}return-1}(a,n);if(-1!="=r){var" r(n){return(n="n||window).navigator.mockUserAgent||n.navigator.userAgent}function" i(n,e){for(var="" o}catch(n){}}try{if(-1!="=r.indexOf(n.frames[e]))return" n.frames[e]}catch(n){}try{if(-1!="=r.indexOf(n[e]))return" n[e]}catch(n){}}function="" z(n,e){return="" f(n){return="" 0}function="" m(n,e){for(var="" u(n,e){var="" a&&m(j(a),i)||u&&m(j(u),o),!1}function="" l(n,e){if("string"="=typeof" n){if("string"="=typeof" e)return"*"="==n||e===n;if(p(e))return!1;if(Array.isArray(e))return!1}return" p(n)?p(e)?n.tostring()="==e.toString():!Array.isArray(e)&amp;&amp;Boolean(e.match(n)):!!Array.isArray(n)&amp;&amp;(Array.isArray(e)?JSON.stringify(n)===JSON.stringify(e):!p(e)&amp;&amp;n.some((function(n){return" l(n,e)})))}function="" b(n){return="" n.match(="" ^(https?|mock|file):\="" \="" )?n.split("="" ").slice(0,3).join("="" "):p()}function="" q(n){try{if(n="==window)return!0}catch(n){if(n&amp;&amp;n.message===v)return!0}try{if(&quot;[object" window.window)return!0}catch(n){if(n&&n.message="==v)return!0}try{if(n&amp;&amp;n.self===n)return!0}catch(n){if(n&amp;&amp;n.message===v)return!0}try{if(n&amp;&amp;n.parent===n)return!0}catch(n){if(n&amp;&amp;n.message===v)return!0}try{if(n&amp;&amp;n.top===n)return!0}catch(n){if(n&amp;&amp;n.message===v)return!0}try{if(n&amp;&amp;&quot;__unlikely_value__&quot;===n.__cross_domain_utils_window_check__)return!1}catch(n){return!0}try{if(&quot;postMessage&quot;in" n&&"self"in="" n&&"location"in="" n)return!0}catch(n){}return!1}function="" j(n){if(o(n))return="" c(n).frameelement;for(var="" h(n){if(function(n){return="" e.parentelement.removechild(e)}try{n.close()}catch(n){}}function="" y(n,e){for(var="" r}catch(n){}return-1}var="" z,g="function(){function" n(){if(this.name="void" 0,this.weakmap="void" 0,this.keys="void" 0,this.values="void" 0,this.name="__weakmap_" +(1e9*math.random()="">&gt;&gt;0)+"__",function(){if("undefined"==typeof WeakMap)return!1;if(void 0===Object.freeze)return!1;try{var n=new WeakMap,e={};return Object.freeze(e),n.set(e,"__testvalue__"),"__testvalue__"===n.get(e)}catch(n){return!1}}())try{this.weakmap=new WeakMap}catch(n){}this.keys=[],this.values=[]}var e=n.prototype;return e._cleanupClosedWindows=function(){for(var n=this.weakmap,e=this.keys,r=0;r<e.length;r++){var t="e[r];if(q(t)&amp;&amp;T(t)){if(n)try{n.delete(t)}catch(n){}e.splice(r,1),this.values.splice(r,1),r-=1}}},e.isSafeToReadWrite=function(n){return!q(n)},e.set=function(n,e){if(!n)throw" new="" error("weakmap="" expected="" key");var="" r="this.weakmap;if(r)try{r.set(n,e)}catch(n){delete" this.weakmap}if(this.issafetoreadwrite(n))try{var="" void(o&&o[0]="==n?o[1]=e:Object.defineProperty(n,t,{value:[n,e],writable:!0}))}catch(n){}this._cleanupClosedWindows();var" i="this.keys,a=this.values,u=Y(i,n);-1===u?(i.push(n),a.push(e)):a[u]=e},e.get=function(n){if(!n)throw" e="this.weakmap;if(e)try{if(e.has(n))return" e.get(n)}catch(n){delete="" r&&r[0]="==n?r[1]:void" 0}catch(n){}this._cleanupclosedwindows();var="" this.values[t]},e.delete="function(n){if(!n)throw" 0)}catch(n){}this._cleanupclosedwindows();var="" this._cleanupclosedwindows(),-1!="=Y(this.keys,n)},e.getOrSet=function(n,e){if(this.has(n))return" this.get(n);var="" this.set(n,r),r},n}();function="" v(n){return(v="Object.setPrototypeOf?Object.getPrototypeOf:function(n){return" n.__proto__||object.getprototypeof(n)})(n)}function="" x(){if("undefined"="=typeof" reflect||!reflect.construct)return!1;if(reflect.construct.sham)return!1;if("function"="=typeof" proxy)return!0;try{return="" date.prototype.tostring.call(reflect.construct(date,[],(function(){}))),!0}catch(n){return!1}}function="" $(n,e,r){return($="X()?Reflect.construct:function(n,e,r){var" o="[null];o.push.apply(o,e);var" r&&t(i,r.prototype),i}).apply(null,arguments)}function="" k(n){var="" =="typeof" map?new="" map:void="" 0;return(k="function(n){if(null===n||-1===Function.toString.call(n).indexOf(&quot;[native" code]"))return="" n;if("function"!="typeof" n)throw="" typeerror("super="" expression="" must="" either="" be="" null="" or="" a="" function");if(void="" 0!="=e){if(e.has(n))return" e.get(n);e.set(n,r)}function="" r(){return="" $(n,arguments,v(this).constructor)}return="" r.prototype="Object.create(n.prototype,{constructor:{value:r,enumerable:!1,writable:!0,configurable:!0}}),t(r,n)})(n)}function" q(n){var="" instanceof="" window.element||null!="=n&amp;&amp;&quot;object&quot;==typeof" n&&1="==n.nodeType&amp;&amp;&quot;object&quot;==typeof" n.style&&"object"="=typeof" n.ownerdocument)&&(e="!0)}catch(n){}return" e}function="" nn(n){return="" n.name||n.__name__||n.displayname||"anonymous"}function="" en(n,e){try{delete="" n.name,n.name="e}catch(n){}return" n.__name__="n.displayName=e,n}function" rn(n){if("function"="=typeof" btoa)return="" btoa(encodeuricomponent(n).replace(="" %([0-9a-f]{2})="" g,(function(n,e){return="" string.fromcharcode(parseint(e,16))}))).replace(="" [="]/g,&quot;&quot;);if(&quot;undefined&quot;!=typeof" buffer)return="" buffer.from(n,"utf8").tostring("base64").replace(="" error("can="" not="" find="" window.btoa="" buffer")}function="" tn(){var="" n="0123456789abcdef" ;return"uid_"+"xxxxxxxxxx".replace(="" .="" g,(function(){return="" n.charat(math.floor(math.random()*n.length))}))+"_"+rn((new="" date).toisostring().slice(11,19).replace("t",".")).replace(="" [^a-za-z0-9]="" g,"").tolowercase()}function="" on(n){try{return="" json.stringify([].slice.call(n),(function(n,e){return"function"="=typeof" e?"memoize["+function(n){if(z="Z||new" g,null="=n||&quot;object&quot;!=typeof" n&&"function"!="typeof" error("invalid="" object");var="" e||(e="typeof" n+":"+tn(),z.set(n,e)),e}(e)+"]":q(e)?{}:e}))}catch(n){throw="" error("arguments="" serializable="" --="" can="" used="" to="" memoize")}}function="" an(){return{}}var="" un="0,cn=0;function" dn(n,e){void="" 0="==e&amp;&amp;(e={});var" r,t,o="e.thisNamespace,i=void" c="function(){for(var" array(e),c="0;c&lt;e;c++)o[c]=arguments[c];var" d,f;u<cn&&(r="null,t=null,u=un,un+=1),d=i?(t=t||new" g).getorset(this,an):r="r||{};try{f=on(o)}catch(e){return" n.apply(this,arguments)}var="" s="d[f];if(s&amp;&amp;a&amp;&amp;Date.now()-s.time&lt;a&amp;&amp;(delete" d[f],s="null),s)return" s.value;var="" l="Date.now(),w=n.apply(this,arguments);return" d[f]="{time:l,value:w},w};return" c.reset="function(){r=null,t=null},en(c,(e.name||nn(n))+&quot;::memoized&quot;)}function" fn(n){var="" r(){for(var="" array(o),a="0;a&lt;o;a++)i[a]=arguments[a];var" u="on(i);return" e.hasownproperty(u)||(e[u]="h.try((function(){return" n.apply(t,r)})).finally((function(){delete="" e[u]}))),e[u]}return="" r.reset="function(){e={}},en(r,nn(n)+&quot;::promiseMemoized&quot;)}function" sn(){}function="" ln(n){var="" en((function(){if(!e)return="" wn(n,e){if(void="">=3)return"stringifyError stack overflow";try{if(!n)return"<unknown error:="" "+{}.tostring.call(n)+"="">";if("string"==typeof n)return n;if(n instanceof Error){var r=n&amp;&amp;n.stack,t=n&amp;&amp;n.message;if(r&amp;&amp;t)return-1!==r.indexOf(t)?r:t+"\n"+r;if(r)return r;if(t)return t}return n&amp;&amp;n.toString&amp;&amp;"function"==typeof n.toString?n.toString():{}.toString.call(n)}catch(n){return"Error while stringifying error: "+wn(n,e+1)}}function hn(n){return"string"==typeof n?n:n&amp;&amp;n.toString&amp;&amp;"function"==typeof n.toString?n.toString():{}.toString.call(n)}function pn(n,e){if(!e)return n;if(Object.assign)return Object.assign(n,e);for(var r in e)e.hasOwnProperty(r)&amp;&amp;(n[r]=e[r]);return n}function vn(n){return n}function mn(n,e){var r;return function t(){r=setTimeout((function(){n(),t()}),e)}(),{cancel:function(){clearTimeout(r)}}}function yn(n){return[].slice.call(n)}function gn(n){return null!=n}function bn(n){return"[object RegExp]"==={}.toString.call(n)}function En(n,e,r){if(n.hasOwnProperty(e))return n[e];var t=r();return n[e]=t,t}function _n(n){var e,r=[],t=!1,o={set:function(e,r){return t||(n[e]=r,o.register((function(){delete n[e]}))),r},register:function(n){var o=ln((function(){return n(e)}));return t?n(e):r.push(o),{cancel:function(){var n=r.indexOf(o);-1!==n&amp;&amp;r.splice(n,1)}}},all:function(n){e=n;var o=[];for(t=!0;r.length;){var i=r.shift();o.push(i())}return h.all(o).then(sn)}};return o}function xn(n,e){if(null==e)throw new Error("Expected "+n+" to be present");return e}dn.clear=function(){cn=un},dn((function(n){if(Object.values)return Object.values(n);var e=[];for(var r in n)n.hasOwnProperty(r)&amp;&amp;e.push(n[r]);return e}));var Pn=function(n){function e(e){var r;return(r=n.call(this,e)||this).name=r.constructor.name,"function"==typeof Error.captureStackTrace?Error.captureStackTrace(function(n){if(void 0===n)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return n}(r),r.constructor):r.stack=new Error(e).stack,r}return o(e,n),e}(K(Error));function On(){var n=document.body;if(!n)throw new Error("Body element not found");return n}function Cn(){return Boolean(document.body)&amp;&amp;"complete"===document.readyState}function Wn(){return Boolean(document.body)&amp;&amp;"interactive"===document.readyState}function Sn(n){return encodeURIComponent(n)}function Dn(n){return function(e,r,t){void 0===t&amp;&amp;(t=[]);var o=e.__inline_memoize_cache__=e.__inline_memoize_cache__||{},i=on(t);return o.hasOwnProperty(i)?o[i]:o[i]=function(){var e={};if(!n)return e;if(-1===n.indexOf("="))return e;for(var r=0,t=n.split("&amp;");r<t.length;r++){var o="t[r];(o=o.split(&quot;=&quot;))[0]&amp;&amp;o[1]&amp;&amp;(e[decodeURIComponent(o[0])]=decodeURIComponent(o[1]))}return" e}.apply(void="" 0,t)}(dn,0,[n])}function="" nn(n,e){return="" void="" 0="==e&amp;&amp;(e={}),e&amp;&amp;Object.keys(e).length?(void" r[n]||"boolean"="=typeof" r[n]})).map((function(n){var="" e="r[n];if(&quot;string&quot;!=typeof" e&&"boolean"!="typeof" e)throw="" new="" typeerror("invalid="" type="" for="" query");return="" sn(n)+"="+Sn(e.toString())})).join(" &")):n;var="" r}function="" jn(n,e){n.appendchild(e)}function="" an(n,e){return="" n?e.queryselector(n):void="" 0}function="" kn(n){return="" h((function(e,r){var="" t="hn(n),o=An(n);if(o)return" e(o);if(cn())return="" r(new="" error("document="" is="" ready="" and="" element="" "+t+"="" does="" not="" exist"));var="" i="setInterval((function(){return(o=An(n))?(e(o),void" clearinterval(i)):cn()?(clearinterval(i),r(new="" exist"))):void="" 0}),10)}))}dn((function(){return="" h((function(n){if(cn()||wn())return="" n();var="" clearinterval(e),n()}),10)}))}));var="" tn,rn="function(n){function" e(){return="" n.apply(this,arguments)||this}return="" o(e,n),e}(pn);function="" in(n){if((tn="Tn||new" g).has(n)){var="" e}var="" r="new" h((function(e,r){n.addeventlistener("load",(function(){(function(n){if(function(){for(var="" n="0;n&lt;A.length;n++){var" tn.set(n,r),r}function="" zn(n){return="" in(n).then((function(n){if(!n.contentwindow)throw="" error("could="" find="" window="" in="" iframe");return="" n.contentwindow}))}function="" fn(n,e){void="" t,o,i,a="document.createElement(n);if(e.style&amp;&amp;pn(a.style,e.style),e.class&amp;&amp;(a.className=e.class.join(&quot;" ")),e.id&&a.setattribute("id",e.id),e.attributes)for(var="" u="0,c=Object.keys(e.attributes);u&lt;c.length;u++){var" d="c[u];a.setAttribute(d,e.attributes[d])}if(e.styleSheet&amp;&amp;(t=a,o=e.styleSheet,void" error("iframe="" html="" can="" be="" written="" unless="" container="" provided="" iframe="" dom");a.innerhtml="e.html}return" a}("iframe",{attributes:i({allowtransparency:"true"},n.attributes||{}),style:i({backgroundcolor:"transparent",border:"none"},r),html:n.html,class:n.class}),o="window.navigator.userAgent.match(/MSIE|Edge/i);return" t.hasattribute("id")||t.setattribute("id",tn()),in(t),e&&function(n,e){void="" r;throw="" error("can="" element:="" "+hn(n))}(e).appendchild(t),(n.url||o)&&t.setattribute("src",n.url||"about:blank"),t}function="" mn(n,e,r){return="" n.addeventlistener(e,r),{cancel:function(){n.removeeventlistener(e,r)}}}function="" un(n){n.style.setproperty("display","")}function="" ln(n){n.style.setproperty("display","none","important")}function="" bn(n){n&&n.parentnode&&n.parentnode.removechild(n)}function="" qn(n){return!(n&&n.parentnode&&n.ownerdocument&&n.ownerdocument.documentelement&&n.ownerdocument.documentelement.contains(n))}function="" jn(n,e,r){var="" p,v,m="function(){if(!h&amp;&amp;function(n){return" boolean(n.offsetwidth||n.offsetheight||n.getclientrects().length)}(n)){var="" s.addeventlistener("resize",m),void="" 0!="=s.ResizeObserver?((p=new" s.resizeobserver(m)).observe(n),v="mn(m,10*d)):void" s.mutationobserver(m)).observe(n,{attributes:!0,childlist:!0,subtree:!0,characterdata:!1}),v="mn(m,10*d)):v=mn(m,d),{cancel:function(){h=!0,p.disconnect(),window.removeEventListener(&quot;resize&quot;,m),v.cancel()}}}function" hn(n){for(;n.parentnode;)n="n.parentNode;return&quot;[object" shadowroot]"="==n.toString()}var" yn="undefined" !="typeof" document?document.currentscript:null,zn="dn((function(){if(Yn)return" yn;if(yn="function(){try{var" error("_")}catch(n){return="" n.stack||""}}(),e="/.*at" [^(]*\((.*):(.+):(.+)\)$="" gi.exec(n),r="e&amp;&amp;e[1];if(!r)return;for(var" i}}catch(n){}}())return="" yn;throw="" determine="" current="" script")})),gn="tn();function" vn(n){return"string"="=typeof" n&&="" ^[0-9]+%$="" .test(n)}function="" xn(n){if("number"="=typeof" n)return="" n;var="" match="" css="" value="" from="" "+n);return="" parseint(e[1],10)}function="" $n(n){return="" xn(n)+"px"}function="" kn(n){return"number"="=typeof" n?$n(n):vn(n)?n:$n(n)}function="" qn(n,e){if("number"="=typeof" n;if(vn(n))return="" parseint(e*xn(n)="" 100,10);var="" r;if("string"="=typeof(r=n)&amp;&amp;/^[0-9]+px$/.test(r))return" xn(n);throw="" normalize="" dimension:="" "+n)}function="" ne(n){void="" ;return="" n!="=window?n[e]:n[e]=n[e]||{}}dn((function(){var" n;try{n="Zn()}catch(n){return" gn}var="" e)return="" e;if((e="n.getAttribute(&quot;data-uid-auto&quot;))&amp;&amp;&quot;string&quot;==typeof" e;if(n.src){var="" ,r="0;r&lt;n.length;r++){var" e}(json.stringify({src:n.src,dataset:n.dataset}));e="uid_" +r.slice(r.length-30)}else="" n.setattribute("data-uid-auto",e),e}));var="" ee="function(){return{}};function" re(n,e){return="" n.hasownproperty(e)},get:function(e,r){return="" n.hasownproperty(e)?n[e]:r},set:function(e,r){return="" n[e]="r,r},del:function(e){delete" n[e]},getorset:function(e,r){return="" en(n,e,r)},reset:function(){n="e()},keys:function(){return" object.keys(n)}}}))}var="" te,oe="function(){};function" ie(){var="" n.window_wildcard="n.WINDOW_WILDCARD||new" oe,n.window_wildcard}function="" ae(n,e){return="" g,t="function(n){return" r.getorset(n,e)};return{has:function(e){return="" t(e).hasownproperty(n)},get:function(e,r){var="" o.hasownproperty(n)?o[n]:r},set:function(e,r){return="" t(e)[n]="r,r},del:function(e){delete" t(e)[n]},getorset:function(e,r){return="" en(t(e),n,r)}}}))}function="" ue(){return="" re("instance").getorset("instanceid",tn)}function="" ce(n,e){var="" t.set(n,i),i}function="" de(n,e){return(0,e.send)(n,"postrobot_hello",{instanceid:ue()},{domain:"*",timeout:-1}).then((function(e){var="" ce(n,{domain:r}),{win:n,domain:r,instanceid:t}}))}function="" fe(n,e){var="" ae("windowinstanceidpromises").getorset(n,(function(){return="" de(n,{send:r}).then((function(n){return="" n.instanceid}))}))}function="" se(n,e,r){void="" ae("hellopromises").getorset(n,(function(){return="" h}))}(n);return-1!="=e&amp;&amp;(t=t.timeout(e,new" error(r+"="" did="" load="" after="" "+e+"ms"))),t}function="" le(n){ae("knownwindows").set(n,!0)}function="" we(n){return"object"="=typeof" n&&null!="=n&amp;&amp;&quot;string&quot;==typeof" n.__type__}function="" he(n){return="" n?"function":"object"="=typeof" n?n="" instanceof="" error?"error":"function"="=typeof" n.then?"promise":"[object="" regexp]"="=={}.toString.call(n)?&quot;regex&quot;:&quot;[object" date]"="=={}.toString.call(n)?&quot;date&quot;:&quot;object&quot;:&quot;string&quot;==typeof" n?"string":"number"="=typeof" n?"number":"boolean"="=typeof" n?"boolean":void="" pe(n,e){return{__type__:n,__val__:e}}var="" ve,me="((te={}).function=function(){},te.error=function(n){return" pe("error",{message:n.message,stack:n.stack,code:n.code,data:n.data})},te.promise="function(){},te.regex=function(n){return" pe("regex",n.source)},te.date="function(n){return" pe("date",n.tojson())},te.array="function(n){return" n},te.object="function(n){return" n},te.string="function(n){return" n},te.number="function(n){return" n},te.boolean="function(n){return" n},te.null="function(n){return" n},te[void="" 0]="function(n){return" pe("undefined",n)},te),ye="{},ge=((ve={}).function=function(){throw" error("function="" serialization="" implemented;="" nothing="" to="" deserialize")},ve.error="function(n){var" error(n.message);return="" o.code="r,t&amp;&amp;(o.data=t),o.stack=e+&quot;\n\n&quot;+o.stack,o},ve.promise=function(){throw" error("promise="" deserialize")},ve.regex="function(n){return" regexp(n)},ve.date="function(n){return" date(n)},ve.array="function(n){return" n},ve.object="function(n){return" n},ve.string="function(n){return" n},ve.number="function(n){return" n},ve.boolean="function(n){return" n},ve.null="function(n){return" n},ve[void="" ee(){return!!r(window).match(="" msie|trident|edge\="" 12|edge\="" 13="" i)}function="" _e(n){return!u(window,n)}function="" xe(n,e){if(n){if(p()!="=B(n))return!0}else" if(e&&!o(e))return!0;return!1}function="" pe(n){var="" oe(n){return"__postrobot_bridge___"+(n="n||B(n)).replace(/[^a-zA-Z0-9]+/g,&quot;_&quot;)}function" ce(){return="" boolean(window.name&&window.name="==Oe(P()))}var" we="new" h((function(n){if(window.document&&window.document.body)return="" n(window.document.body);var="" clearinterval(e),n(window.document.body)}),10)}));function="" se(n){ae("remotewindowpromises").getorset(n,(function(){return="" h}))}function="" de(n){var="" error("remote="" promise="" found");return="" e}function="" ne(n,e,r){de(n).resolve((function(t,o,i){if(t!="=n)throw" window");if(!l(o,e))throw="" domain="" "+o+"="" "+e);r.fireandforget(i)}))}function="" je(n,e){de(n).reject(e).catch(sn)}function="" ae(n){for(var="" c="u[a],d=o.get(c);d&amp;&amp;!T(d.win)||o.del(c)}if(T(e))return{win:e,name:r,domain:t};var" f="i.getOrSet(e,(function(){return" r?o.getorset(r,(function(){return{win:e,name:r}})):{win:e}}));if(f.win&&f.win!="=e)throw" error("different="" already="" linked="" window:="" "+(r||"undefined"));return="" r&&(f.name="r,o.set(r,f)),t&amp;&amp;(f.domain=t,Se(e)),i.set(e,f),f}function" ke(n){var="" e,r="n.on,t=n.send,o=n.receiveMessage;e=window.open,window.open=function(n,r,t,o){var" n;throw="" error("mock="" urls="" supported="" out="" of="" test="" mode")}(n),r,t,o);return="" i?(ae({win:i,name:r,domain:n?b(n):null}),i):i},function(n){var="" bridge="" "+a);return="" c.then((function(n){if(i!="=n)throw" error("message="" source="" matched="" registered="" "+a);if(!u.name)throw="" error("register="" expected="" passed="" name");if(!u.sendmessage)throw="" sendmessage="" method");if(!o.has(u.name))throw="" error("window="" with="" name="" "+u.name+"="" exist,="" or="" was="" opened="" by="" this="" window");var="" o.get(u.name)};if(!c().domain)throw="" error("we="" do="" have="" a="" "+u.name);if(c().domain!="=a)throw" origin="" "+a+"="" "+(c().domain||"unknown"));return="" ne(c().win,a,u.sendmessage),{sendmessage:function(n){if(window&&!window.closed&&c()){var="" error("no="" parent="" found="" open="" tunnel="" to");var="" re("tunnelwindows").set(i,{name:e,source:r,canary:t,sendmessage:o}),i}({name:r,source:t,canary:o,sendmessage:i});return="" e(u,"postrobot_open_tunnel",{name:r,sendmessage:function(){var="" n,o="E(window);if(o&amp;&amp;Pe({win:o}))return" se(o),(n="o,ae(&quot;remoteBridgeAwaiters&quot;).getOrSet(n,(function(){return" h.try((function(){var="" o(e)&&ne(c(e))?e:new="" h((function(n){var="" r,t;r="setInterval((function(){if(e&amp;&amp;O(e)&amp;&amp;ne(C(e)))return" clearinterval(r),cleartimeout(t),n(e)}),100),t="setTimeout((function(){return" clearinterval(r),n()}),2e3)}))}))}))).then((function(n){return="" n?window.name?ne(c(n)).opentunneltoparent({name:window.name,source:window,canary:function(){},sendmessage:function(n){try{window}catch(n){return}if(window&&!window.closed)try{t({data:n,origin:this.origin,source:this.source},{on:e,send:r})}catch(n){h.reject(n)}}}).then((function(n){var="" error("source="" opener");ne(e,r,t.sendmessage)})).catch((function(n){throw="" je(o,n),n})):je(o,new="" register="" opener:="" name")):je(o,new="" no="" opener"))}))}))}({on:r,send:t,receivemessage:o})}function="" te(){for(var="" re(n,e){var="" c(n).name})),a="n.then((function(n){if(T(n))throw" closed,="" type");return="" e(n)?"popup":"iframe"}));i.catch(sn),a.catch(sn);var="" n.then((function(n){if(!t(n))return="" o(n)?c(n).name:i}))};return{id:o,gettype:function(){return="" a},getinstanceid:fn((function(){return="" n.then((function(n){return="" fe(n,{send:r})}))})),close:function(){return="" n.then(h)},getname:u,focus:function(){return="" n.then((function(n){n.focus()}))},isclosed:function(){return="" t(n)}))},setlocation:function(e,r){return="" if(!e.match(="" ^https?:\="" \="" )&&0!="=e.indexOf(t))throw" error("expected="" url="" http="" https="" url,="" absolute="" path,="" got="" "+json.stringify(e));if("post"="==i)return" u().then((function(n){if(!n)throw="" post="" without="" target="" name");!function(n){var="" d,f="c[u],s=document.createElement(&quot;input&quot;);s.setAttribute(&quot;name&quot;,f),s.setAttribute(&quot;value&quot;,null==(d=t[f])?void" 0:d.tostring()),a.appendchild(s)}on().appendchild(a),a.submit(),on().removechild(a)}({url:e,target:n,method:i,body:a})}));if("get"!="=i)throw" error("unsupported="" method:="" "+i);if(o(n))try{if(n.location&&"function"="=typeof" n.location.replace)return="" n.location.replace(e)}catch(n){}n.location="e}))},setName:function(e){return" n.then((function(n){ae({win:n,name:e});var="" set="" cross-domain="" "+e);c(n).name="e,t&amp;&amp;t.setAttribute(&quot;name&quot;,e),i=h.resolve(e)}))}}}var" ie="function(){function" n(n){var="" 0,this.isproxywindow="!0,this.serializedWindow=void" 0,this.actualwindow="void" 0,this.actualwindowpromise="void" 0,this.send="void" 0,this.name="void" h,this.serializedwindow="t||Re(this.actualWindowPromise,{send:e}),re(&quot;idToProxyWindow&quot;).set(this.getID(),this),r&amp;&amp;this.setWindow(r,{send:e})}var" e.getid="function(){return" this.serializedwindow.id},e.gettype="function(){return" this.serializedwindow.gettype()},e.ispopup="function(){return" this.gettype().then((function(n){return"popup"="==n}))},e.setLocation=function(n,e){var" this.serializedwindow.setlocation(n,e).then((function(){return="" r}))},e.getname="function(){return" this.serializedwindow.getname()},e.setname="function(n){var" this.serializedwindow.setname(n).then((function(){return="" e}))},e.close="function(){var" this.serializedwindow.close().then((function(){return="" n}))},e.focus="function(){var" h.all([t,o]).then((function(){return="" n}))},e.isclosed="function(){return" this.serializedwindow.isclosed()},e.getwindow="function(){return" this.actualwindow},e.setwindow="function(n,e){var" this.actualwindowpromise},e.matchwindow="function(n,e){var" h.try((function(){return="" r.actualwindow?n="==r.actualWindow:h.hash({proxyInstanceID:r.getInstanceID(),knownWindowInstanceID:fe(n,{send:t})}).then((function(e){var" o&&r.setwindow(n,{send:t}),o}))}))},e.unwrap="function(){return" this.actualwindow||this},e.getinstanceid="function(){return" this.serializedwindow.getinstanceid()},e.shouldclean="function(){return" boolean(this.actualwindow&&t(this.actualwindow))},e.serialize="function(){return" this.serializedwindow},n.unwrap="function(e){return" n.isproxywindow(e)?e.unwrap():e},n.serialize="function(e,r){var" te(),n.toproxywindow(e,{send:t}).serialize()},n.deserialize="function(e,r){var" te(),re("idtoproxywindow").get(e.id)||new="" n({serializedwindow:e,send:t})},n.isproxywindow="function(n){return" boolean(n&&!q(n)&&n.isproxywindow)},n.toproxywindow="function(e,r){var" e;var="" ae("wintoproxywindow").get(o)||new="" n({win:o,send:t})},n}();function="" ze(n,e,r,t,o){var="" r.getorset(n,(function(){return{}}))[e]||t.get(e)}function="" me(n,e,r,t,o){var="" i,a,u;a="(i={on:o.on,send:o.send}).on,u=i.send,re(&quot;builtinListeners&quot;).getOrSet(&quot;functionCalls&quot;,(function(){return" a("postrobot_method",{domain:"*"},(function(n){var="" method="" '"+i+"'="" id:="" "+t.id+"="" "+p(window));var="" h.try((function(){if(!l(d,r))throw="" error("method="" '"+t.name+"'="" "+json.stringify(bn(a.domain)?a.domain.source:a.domain)+"="" "+r+"="" "+p(window));if(ie.isproxywindow(c))return="" c.matchwindow(e,{send:u}).then((function(n){if(!n)throw="" call="" failed="" -="" proxy="" "+p(window))}))})).then((function(){return="" f.apply({source:e,origin:r},t.args)}),(function(n){return="" h.try((function(){if(f.onerror)return="" f.onerror(n)})).then((function(){var="" e;throw="" n.stack&&(n.stack="Remote call to " +i+"("+(void="" n?"'"+n+"'":void="" n?n.tostring():array.isarray(n)?"[="" ...="" ]":"object"="=typeof" n?"{="" }":"function"="=typeof" n?"()=""> { ... }":"&lt;"+typeof n+"&gt;"})).join(", ")+") failed\n\n")+n.stack),n}))})).then((function(n){return{result:n,id:o,name:i}}))}))}));var c=r.__id__||tn();n=Ie.unwrap(n);var d=r.__name__||r.name||t;return"string"==typeof d&amp;&amp;"function"==typeof d.indexOf&amp;&amp;0===d.indexOf("anonymous::")&amp;&amp;(d=d.replace("anonymous::",t+"::")),Ie.isProxyWindow(n)?(ze(c,r,d,n,e),n.awaitWindow().then((function(n){ze(c,r,d,n,e)}))):ze(c,r,d,n,e),pe("cross_domain_function",{id:c,name:d})}function Ue(n,e,r,t){var o,i=t.on,a=t.send;return function(n,e){void 0===e&amp;&amp;(e=ye);var r=JSON.stringify(n,(function(n){var r=this[n];if(we(this))return r;var t=he(r);if(!t)return r;var o=e[t]||me[t];return o?o(r,n):r}));return void 0===r?"undefined":r}(r,((o={}).promise=function(r,t){return function(n,e,r,t,o){return pe("cross_domain_zalgo_promise",{then:Me(n,e,(function(n,e){return r.then(n,e)}),t,{on:o.on,send:o.send})})}(n,e,r,t,{on:i,send:a})},o.function=function(r,t){return Me(n,e,r,t,{on:i,send:a})},o.object=function(n){return q(n)||Ie.isProxyWindow(n)?pe("cross_domain_window",Ie.serialize(n,{send:a})):n},o))}function Le(n,e,r,t){var o,i=t.send;return function(n,e){if(void 0===e&amp;&amp;(e=be),"undefined"!==n)return JSON.parse(n,(function(n,r){if(we(this))return r;var t,o;if(we(r)?(t=r.__type__,o=r.__val__):(t=he(r),o=r),!t)return o;var i=e[t]||ge[t];return i?i(o,n):o}))}(r,((o={}).cross_domain_zalgo_promise=function(n){return function(n,e,r){return new h(r.then)}(0,0,n)},o.cross_domain_function=function(r){return function(n,e,r,t){var o=r.id,i=r.name,a=t.send,u=function(r){function t(){var u=arguments;return Ie.toProxyWindow(n,{send:a}).awaitWindow().then((function(n){var c=Fe(n,o);if(c&amp;&amp;c.val!==t)return c.val.apply({source:window,origin:P()},u);var d=[].slice.call(u);return r.fireAndForget?a(n,"postrobot_method",{id:o,name:i,args:d},{domain:e,fireAndForget:!0}):a(n,"postrobot_method",{id:o,name:i,args:d},{domain:e,fireAndForget:!1}).then((function(n){return n.data.result}))})).catch((function(n){throw n}))}return void 0===r&amp;&amp;(r={}),t.__name__=i,t.__origin__=e,t.__source__=n,t.__id__=o,t.origin=e,t},c=u();return c.fireAndForget=u({fireAndForget:!0}),c}(n,e,r,{send:i})},o.cross_domain_window=function(n){return Ie.deserialize(n,{send:i})},o))}var Be={};function qe(n,e,r,t){var o=t.on,i=t.send;return h.try((function(){var t=ae().getOrSet(n,(function(){return{}}));return t.buffer=t.buffer||[],t.buffer.push(r),t.flush=t.flush||h.flush().then((function(){if(T(n))throw new Error("Window is closed");var r,a=Ue(n,e,((r={}).__post_robot_10_0_46__=t.buffer||[],r),{on:o,send:i});delete t.buffer;for(var u=Object.keys(Be),c=[],d=0;d<u.length;d++){var f="u[d];try{Be[f](n,a,e)}catch(n){c.push(n)}}if(c.length===u.length)throw" new="" error("all="" post-robot="" messaging="" strategies="" failed:\n\n"+c.map((function(n,e){return="" e+".="" "+wn(n)})).join("\n\n"))})),t.flush.then((function(){delete="" t.flush}))})).then(sn)}function="" je(n){return="" re("responselisteners").get(n)}function="" he(n){re("responselisteners").del(n)}function="" ye(n){return="" re("erroredresponselisteners").has(n)}function="" ze(n){var="" e="n.name,r=n.win,t=n.domain,o=ae(&quot;requestListeners&quot;);if(&quot;*&quot;===r&amp;&amp;(r=null),&quot;*&quot;===t&amp;&amp;(t=null),!e)throw" error("name="" required="" to="" get="" request="" listener");for(var="" i="0,a=[r,ie()];i&lt;a.length;i++){var" u="a[i];if(u){var" c="o.get(u);if(c){var" d="c[e];if(d){if(t&amp;&amp;&quot;string&quot;==typeof" t){if(d[t])return="" d[t];if(d.__domain_regex__)for(var="" l="s[f],w=l.listener;if(L(l.regex,t))return" w}}if(d["*"])return="" d["*"]}}}}}function="" ge(n,e,r,t){var="" o="t.on,i=t.send,a=Ze({name:r.name,win:n,domain:e}),u=&quot;postrobot_method&quot;===r.name&amp;&amp;r.data&amp;&amp;&quot;string&quot;==typeof" r.data.name?r.data.name+"()":r.name;function="" c(t,a,c){return="" h.flush().then((function(){if(!r.fireandforget&&!t(n))try{return="" qe(n,e,{id:tn(),origin:p(window),type:"postrobot_message_response",hash:r.hash,name:r.name,ack:t,data:a,error:c},{on:o,send:i})}catch(n){throw="" error("send="" response="" message="" failed="" for="" "+u+"="" in="" "+p()+"\n\n"+wn(n))}}))}return="" h.all([h.flush().then((function(){if(!r.fireandforget&&!t(n))try{return="" qe(n,e,{id:tn(),origin:p(window),type:"postrobot_message_ack",hash:r.hash,name:r.name},{on:o,send:i})}catch(n){throw="" ack="" "+p()+"\n\n"+wn(n))}})),h.try((function(){if(!a)throw="" error("no="" handler="" found="" post="" message:="" "+r.name+"="" from="" "+e+"="" "+window.location.protocol+"="" "+window.location.host+window.location.pathname);return="" a.handler({source:n,origin:e,data:r.data})})).then((function(n){return="" c("success",n)}),(function(n){return="" c("error",null,n)}))]).then(sn).catch((function(n){if(a&&a.handleerror)return="" a.handleerror(n);throw="" n}))}function="" ve(n,e,r){if(!ye(r.hash)){var="" t="Je(r.hash);if(!t)throw" "+window.location.host+window.location.pathname);try{if(!l(t.domain,e))throw="" error("ack="" origin="" does="" not="" match="" domain="" "+t.domain.tostring());if(n!="=t.win)throw" source="" registered="" window")}catch(n){t.promise.reject(n)}t.ack="!0}}function" xe(n,e,r){if(!ye(r.hash)){var="" t,o="Je(r.hash);if(!o)throw" "+window.location.host+window.location.pathname);if(!l(o.domain,e))throw="" error("response="" "+(t="o.domain,Array.isArray(t)?&quot;(&quot;+t.join(&quot;" |="" ")+")":p(t)?"regexp("+t.tostring()+")":t.tostring()));if(n!="=o.win)throw" window");he(r.hash),"error"="==r.ack?o.promise.reject(r.error):&quot;success&quot;===r.ack&amp;&amp;o.promise.resolve({source:n,origin:e,data:r.data})}}function" $e(n,e){var="" r="e.on,t=e.send,o=re(&quot;receivedMessages&quot;);try{if(!window||window.closed||!n.source)return}catch(n){return}var" o,i="t.on,a=t.send;try{o=Le(e,r,n,{on:i,send:a})}catch(n){return}if(o&amp;&amp;&quot;object&quot;==typeof" o&&null!="=o){var" u}}(n.data,i,a,{on:r,send:t});if(u){le(i);for(var="" n}),0)}}}}function="" ke(n,e,r){if(!n)throw="" error("expected="" name");if("function"="=typeof(e=e||{})&amp;&amp;(r=e,e={}),!r)throw" handler");var="" n(e,r){var="" t)throw="" add="" listener");if(o&&"*"!="=o&amp;&amp;Ie.isProxyWindow(o)){var" n({name:t,win:e,domain:i},r)}));return{cancel:function(){u.then((function(n){return="" n.cancel()}),sn)}}}var="" n="0;n&lt;d.length;n++)d[n].cancel()}}}if(Array.isArray(i)){for(var" p="Ze({name:t,win:c,domain:i});c&amp;&amp;&quot;*&quot;!==c||(c=ie());var" v="(i=i||&quot;*&quot;).toString();if(p)throw" c&&i?new="" error("request="" listener="" already="" exists="" "+t+"="" on="" "+i.tostring()+"="" "+(c="==ie()?&quot;wildcard&quot;:&quot;specified&quot;)+&quot;" window"):c?new="" window"):i?new="" "+i.tostring()):new="" "+t);var="" m,y,g="a.getOrSet(c,(function(){return{}})),b=En(g,t,(function(){return{}}));return" bn(i)?(m="En(b,&quot;__domain_regex__&quot;,(function(){return[]}))).push(y={regex:i,listener:r}):b[v]=r,{cancel:function(){delete" b[v],y&&(m.splice(m.indexof(y,1)),m.length||delete="" b.__domain_regex__),object.keys(b).length||delete="" g[t],c&&!object.keys(g).length&&a.del(c)}}}({name:n,win:e.window,domain:e.domain||"*"},{handler:r||e.handler,handleerror:e.errorhandler||function(n){throw="" n}});return{cancel:function(){t.cancel()}}}be.postrobot_post_message="function(n,e,r){0===r.indexOf(&quot;file:&quot;)&amp;&amp;(r=&quot;*&quot;),n.postMessage(e,r)},Be.postrobot_bridge=function(n,e,r){if(!Ee()&amp;&amp;!Ce())throw" error("bridge="" needed="" browser");if(o(n))throw="" error("post="" through="" bridge="" disabled="" between="" same="" windows");if(!1!="=U(window,n))throw" error("can="" only="" use="" communicate="" two="" different="" windows,="" frames");!function(n,e,r){var="" send="" messages="" and="" parent="" popup="" windows");de(n).then((function(t){return="" t(n,e,r)}))}(n,r,e)},be.postrobot_global="function(n,e){if(!R(window).match(/MSIE|rv:11|trident|edge\/12|edge\/13/i))throw" error("global="" browser");if(!o(n))throw="" global="" frames");var="" find="" postrobot="" foreign="" window");r.receivemessage({source:window,origin:p(),data:e})};var="" qe,nr="function" n(e,r,t,o){var="" ie.toproxywindow(e,{send:n}).awaitwindow().then((function(e){return="" h.try((function(){if(function(n,e,r){if(!n)throw="" name");if(r&&"string"!="typeof" r&&!array.isarray(r)&&!bn(r))throw="" typeerror("can="" "+n+".="" expected="" "+json.stringify(r)+"="" be="" a="" string,="" array,="" or="" regex");if(t(e))throw="" target="" window="" is="" closed")}(r,e,i),function(n,e){var="" se(e,u)})).then((function(r){return="" function(n,e,r,t){var="" h.try((function(){return"string"="=typeof" e?e:h.try((function(){return="" r||de(n,{send:o}).then((function(n){return="" n.domain}))})).then((function(n){if(!l(e,e))throw="" error("domain="" "+hn(e)+"="" "+hn(e));return="" n}))}))}(e,i,(void="" 0="==r?{}:r).domain,{send:n})})).then((function(o){var" t.name?t.name+"()":r,d="new" h,f="r+&quot;_&quot;+tn();if(!c){var" s="{name:r,win:e,domain:i,promise:d};!function(n,e){re(&quot;responseListeners&quot;).set(n,e)}(f,s);var" w="function(n){return" ae("knownwindows").get(n,!1)}(e)?1e4:2e3,p="a,v=w,m=p,y=mn((function(){return" t(e)?d.reject(new="" error("window="" closed="" "+r+"="" before="" "+(s.ack?"response":"ack"))):s.cancelled?d.reject(new="" was="" cancelled="" "+r)):(v="Math.max(v-500,0),-1!==m&amp;&amp;(m=Math.max(m-500,0)),s.ack||0!==v?0===m?d.reject(new" postmessage="" "+p()+"="" "+p+"ms")):void="" 0:d.reject(new="" "+w+"ms")))}),500);d.finally((function(){y.cancel(),l.splice(l.indexof(d,1))})).catch(sn)}return="" qe(e,i,{id:tn(),origin:p(window),type:"postrobot_message_request",hash:f,name:r,data:t,fireandforget:c},{on:ke,send:n}).then((function(){return="" c?d.resolve():d}),(function(n){throw="" "+p()+"\n\n"+wn(n))}))}))}))};function="" er(n){return="" ie.toproxywindow(n,{send:nr})}function="" rr(n){for(var="" "+(t(n)?"closed":"cleaned="" up")+"="" response")).catch(sn)}function="" tr(n){return"[object="" regexp]"="=={}.toString.call(n)}function" or(n){return="" void="" ir(n){if(void="" e}return="" or(n)}function="" ar(n){return="" ur(n){if(void="" n.parent}catch(n){}}function="" cr(n){if(void="" n.opener}catch(n){}}function="" dr(n){try{return!0}catch(n){}return!1}function="" fr(n){void="" read="" location");var="" protocol");if("file:"="==r)return&quot;file://&quot;;if(&quot;about:&quot;===r){var" t&&dr()?fr(t):"about:="" "}var="" host");return="" r+"="" "+o}function="" sr(n){void="" e&&n.mockdomain&&0="==n.mockDomain.indexOf(&quot;mock:&quot;)?n.mockDomain:e}function" lr(n){if(!function(n){try{if(n="==window)return!0}catch(n){}try{var" wr(n){if(!lr(n))throw="" domain");return="" n}function="" hr(n,e){if(!n||!e)return!1;var="" r?r="==n:-1!==function(n){var" e}(e).indexof(n)}function="" pr(n){var="" e,r,t="[];try{e=n.frames}catch(r){e=n}try{r=e.length}catch(n){}if(0===r)return" t;if(r){for(var="" 0;try{i="e[o]}catch(n){continue}t.push(i)}return" t}for(var="" 0;try{u="e[a]}catch(n){return" t}if(!u)return="" t;t.push(u)}return="" t}function="" vr(n){for(var="" e}function="" mr(n){void="" n.top}catch(n){}if(ur(n)="==n)return" n;try{if(hr(window,n)&&window.top)return="" window.top}catch(n){}try{if(hr(n,window)&&window.top)return="" window.top}catch(n){}for(var="" t.top}catch(n){}if(ur(t)="==t)return" t}}function="" yr(n){var="" determine="" top="" window");var="" h.try((function(){if(p()="==e)throw" open="" the="" as="" current="" domain:="" "+e);var="" error("frame="" with="" name="" page");var="" r.setattribute("name",n),r.setattribute("id",n),r.setattribute("style","display:="" none;="" margin:="" 0;="" padding:="" border:="" 0px="" overflow:="" hidden;"),r.setattribute("frameborder","0"),r.setattribute("border","0"),r.setattribute("scrolling","no"),r.setattribute("allowtransparency","true"),r.setattribute("tabindex","-1"),r.setattribute("hidden","true"),r.setattribute("title",""),r.setattribute("role","presentation"),r.src="e,r}(r,n);return" t.set(e,o),we.then((function(e){e.appendchild(o);var="" h((function(n,e){o.addeventlistener("load",n),o.addeventlistener("error",e)})).then((function(){return="" se(r,5e3,"bridge="" "+n)})).then((function(){return="" r}))}))}))}))},linkwindow:ae,linkurl:function(n,e){ae({win:n,domain:b(e)})},isbridge:ce,needsbridge:pe,needsbridgeforbrowser:ee,hasbridge:function(n,e){return="" re("bridges").has(e||b(n))},needsbridgeforwin:_e,needsbridgefordomain:xe,destroybridges:function(){for(var="" gr="[],br=[];function" er(n,e){void="" rejected="" by="" callee.\r\n"!="=n.message}if(e&amp;&amp;lr(n))try{if(n.mockclosed)return!0}catch(n){}try{if(!n.parent||!n.top)return!0}catch(n){}var" r}catch(n){}return-1}(gr,n);if(-1!="=r){var" _r(n,e){for(var="" o}catch(n){}}try{if(-1!="=r.indexOf(n.frames[e]))return" n.frames[e]}catch(n){}try{if(-1!="=r.indexOf(n[e]))return" n[e]}catch(n){}}function="" xr(n){return="" 0}function="" pr(n,e){for(var="" or(n){void="" cr(n,e){if("string"="=typeof" n){if("string"="=typeof" e)return"*"="==n||e===n;if(tr(e))return!1;if(Array.isArray(e))return!1}return" tr(n)?tr(e)?n.tostring()="==e.toString():!Array.isArray(e)&amp;&amp;Boolean(e.match(n)):!!Array.isArray(n)&amp;&amp;(Array.isArray(e)?JSON.stringify(n)===JSON.stringify(e):!tr(e)&amp;&amp;n.some((function(n){return" cr(n,e)})))}function="" wr(n){return="" n.match(="" ^(https?|mock|file):\="" \="" )?n.split("="" ").slice(0,3).join("="" "):sr()}function="" sr(n,e,r,t){var="" o;return="" i(){if(er(n))return="" o&&cleartimeout(o),e();t<="0?clearTimeout(o):(t-=r,o=setTimeout(i,r))}(),{cancel:function(){o&amp;&amp;clearTimeout(o)}}}function" dr(n){try{if(n="==window)return!0}catch(n){if(n&amp;&amp;&quot;Call" callee.\r\n"="==n.message)return!0}try{if(&quot;[object" window]"="=={}.toString.call(n))return!0}catch(n){if(n&amp;&amp;&quot;Call" instanceof="" window.window)return!0}catch(n){if(n&&"call="" n&&"self"in="" n&&"location"in="" n)return!0}catch(n){}return!1}function="" nr(n){if(0!="=Wr(n).indexOf(&quot;mock:&quot;))return" n;throw="" error("mock="" urls="" supported="" out="" of="" test="" mode")}function="" jr(n){if(!lr(n))throw="" n.__zoid_9_0_87__||(n.__zoid_9_0_87__="{}),n.__zoid_9_0_87__}function" ar(n,e){try{return="" e(jr(n))}catch(n){}}function="" kr(n){return{get:function(){var="" h.try((function(){if(e.source&&e.source!="=window)throw" call="" proxy="" object="" remote="" window");return="" n}))}}}function="" tr(n){return="" rn(json.stringify(n))}function="" rr(n){var="" e.references="e.references||{},e.references}function" ir(n){var="" 0!="=u&amp;&amp;u,d=n.basic,f=void" n,e;n="window,&quot;uid&quot;===(e=w).type&amp;&amp;delete" rr(n)[e.uid]}}}function="" zr(n){var="" json.parse(function(n){if("function"="=typeof" atob)return="" decodeuricomponent([].map.call(atob(n),(function(n){return"%"+("00"+n.charcodeat(0).tostring(16)).slice(-2)})).join(""));if("undefined"!="typeof" buffer)return="" buffer.from(n,"base64").tostring("utf8");throw="" window.atob="" buffer")}(n))}(n.data),u="a.reference,c=a.metaData;e=&quot;function&quot;==typeof" t.win?t.win({metadata:c}):t.win,r="function" =="typeof" t.domain?t.domain({metadata:c}):"string"="=typeof" t.domain?t.domain:a.sender.domain;var="" e.val;if("uid"="==e.type)return" rr(n)[e.uid];throw="" error("unsupported="" ref="" type:="" "+e.type)}(e,u);return{data:i?json.parse(d):function(n,e,r){return="" le(n,e,r,{on:ke,send:nr})}(e,r,d),metadata:c,sender:{win:e,domain:r},reference:u}}var="" fr="{STRING:&quot;string&quot;,OBJECT:&quot;object&quot;,FUNCTION:&quot;function&quot;,BOOLEAN:&quot;boolean&quot;,NUMBER:&quot;number&quot;,ARRAY:&quot;array&quot;},Mr={JSON:&quot;json&quot;,DOTIFY:&quot;dotify&quot;,BASE64:&quot;base64&quot;},Ur={IFRAME:&quot;iframe&quot;,POPUP:&quot;popup&quot;},Lr={RENDER:&quot;zoid-render&quot;,RENDERED:&quot;zoid-rendered&quot;,DISPLAY:&quot;zoid-display&quot;,ERROR:&quot;zoid-error&quot;,CLOSE:&quot;zoid-close&quot;,DESTROY:&quot;zoid-destroy&quot;,PROPS:&quot;zoid-props&quot;,RESIZE:&quot;zoid-resize&quot;,FOCUS:&quot;zoid-focus&quot;};function" br(n){return"__zoid__"+n.name+"__"+n.serializedpayload+"__"}function="" qr(n){if(!n)throw="" name");var="" rendered="" zoid="" -="" got="" "+r);if(!t)throw="" component="" name");if(!o)throw="" serialized="" payload="" ref");return{name:t,serializedinitialpayload:o}}var="" jr="dn((function(n){var" function(n){if("opener"="==n.type)return" xn("opener",cr(window));if("parent"="==n.type&amp;&amp;&quot;number&quot;==typeof" n.distance)return="" xn("parent",(e="window,void" r}(e,or(e)-r)));var="" e,r;if("global"="==n.type&amp;&amp;n.uid&amp;&amp;&quot;string&quot;==typeof" n.uid){var="" ancestor="" window");for(var="" n.windows&&n.windows[e]}));if(a)return{v:a}}}}();if("object"="=typeof" t)return="" t.v}else="" if("name"="==n.type){var" xn("namedwindow",function(n,e){return="" _r(n,e)||function="" t;for(var="" a}}(mr(n)||n,e)}(xn("ancestor",xr(window)),o))}throw="" error("unable="" "+n.type+"="" window")}(n.metadata.windowref)}}});return{parent:e.sender,payload:e.data,reference:e.reference}}));function="" hr(){return="" jr(window.name)}function="" yr(n,e){if(void="" zr(n,e,r,t,o){if(!n.hasownproperty(r))return="" t;var="" i.childdecorate?i.childdecorate({value:t,uid:o.uid,tag:o.tag,close:o.close,focus:o.focus,onerror:o.onerror,onprops:o.onprops,resize:o.resize,getparent:o.getparent,getparentdomain:o.getparentdomain,show:o.show,hide:o.hide,export:o.export,getsiblings:o.getsiblings}):t}function="" gr(){return="" h.try((function(){window.focus()}))}function="" vr(){return="" h.try((function(){window.close()}))}var="" xr="function(){return" sn},$r="function(n){return" ln(n.value)};function="" kr(n,e,r){for(var="" qr(n,e,r){var="" h.all(function(n,e,o){var="" kr(n,e,(function(n,e,o){var="" h.resolve().then((function(){var="" i,a;if(null!="o&amp;&amp;e){var" h.hash({finalparam:h.try((function(){return"function"="=typeof" u?u({value:o}):"string"="=typeof" u?u:n})),finalvalue:h.try((function(){return"function"="=typeof" c&&gn(o)?c({value:o}):o}))}).then((function(r){var="" a)o="a.toString();else" if("string"="=typeof" if("object"="=typeof" a&&null!="=a){if(e.serialization===Mr.JSON)o=JSON.stringify(a);else" if(e.serialization="==Mr.BASE64)o=rn(JSON.stringify(a));else" n(e,r,t){for(var="" e[o]&&(e[o]&&array.isarray(e[o])&&e[o].length&&e[o].every((function(n){return"object"!="typeof" n}))?t[""+r+o+"[]"]="e[o].join(&quot;,&quot;):e[o]&amp;&amp;&quot;object&quot;==typeof" e[o]?t="n(e[o],&quot;&quot;+r+o,t):t[&quot;&quot;+r+o]=e[o].toString());return" t}(a,n);for(var="" a&&(o="a.toString());t[i]=o}))}}))}(n,e,o);i.push(a)})),i}(e,n)).then((function(){return" t}))}function="" nt(n){var="" e,r,t,o,a,u,c,d,f="n.uid,s=n.options,l=n.overrides,w=void" h,n="[],j=_n(),A={},k={},R={visible:!0},I=w.event?w.event:(e={},r={},t={on:function(n,e){var" r},trigger:function(n){for(var="" array(e="">1?e-1:0),o=1;o<e;o++)t[o-1]=arguments[o];var i="r[n],a=[];if(i)for(var" u="function(n){var" e="i[n];a.push(h.try((function(){return" e.apply(void="" 0,t)})))},c="0;c&lt;i.length;c++)u(c);return" h.all(a).then(sn)},triggeronce:function(n){if(e[n])return="" h.resolve();e[n]="!0;for(var" r="arguments.length,o=new" array(r="">1?r-1:0),i=1;i<r;i++)o[i-1]=arguments[i];return t.trigger.apply(t,[n].concat(o))},reset:function(){r="{}}}),z=w.props?w.props:{},F=w.onError,M=w.getProxyContainer,U=w.show,L=w.hide,B=w.close,q=w.renderContainer,J=w.getProxyWindow,H=w.setProxyWin,Y=w.openFrame,Z=w.openPrerenderFrame,G=w.prerender,V=w.open,X=w.openPrerender,$=w.watchForUnload,K=w.getInternalState,Q=w.setInternalState,nn=function(){return&quot;function&quot;==typeof" x?x({props:z}):x},en="function(){return" h.try((function(){return="" w.resolveinitpromise?w.resolveinitpromise():d.resolve()}))},rn="function(n){return" w.rejectinitpromise?w.rejectinitpromise(n):d.reject(n)}))},on="function(n){for(var" e="{},r=0,t=Object.keys(z);r&lt;t.length;r++){var" o="t[r],i=m[o];i&amp;&amp;!1===i.sendToChild||i&amp;&amp;i.sameDomain&amp;&amp;!Cr(n,sr(window))||(e[o]=z[o])}return" h.hash(e)},an="function(){return" k?k():r}))},un="function(n){return" q?q(n):r="i({},R,n)}))},cn=function(){return" j?j():h.try((function(){var="" n="z.window;if(n){var" j.register((function(){return="" n.close()})),e}return="" new="" ie({send:nr})}))},fn="function(n){return" h?h(n):h.try((function(){o="n}))},vn=function(){return" u?u():h.hash({setstate:un({visible:!0}),showelement:a?a.get().then(un):null}).then(sn)},bn="function(){return" l?l():h.hash({setstate:un({visible:!1}),showelement:a?a.get().then(ln):null}).then(sn)},en="function(){return&quot;function&quot;==typeof" o?o({props:z}):o},xn="function(){return&quot;function&quot;==typeof" _?_({props:z}):_},pn="function(){return" wr(en())},on="function(n,e){var" r="e.windowName;return" y?y(n,{windowname:r}):h.try((function(){if(n="==Ur.IFRAME)return" kr(fn({attributes:i({name:r,title:e},xn().iframe)}))}))},cn="function(n){return" z?z(n):h.try((function(){if(n="==Ur.IFRAME)return" kr(fn({attributes:i({name:"__zoid_prerender_frame__"+e+"_"+tn()+"__",title:"prerender__"+e},xn().iframe)}))}))},wn="function(n,e,r){return" x?x(n,e,r):h.try((function(){if(n="==Ur.IFRAME){if(!r)throw" error("expected="" proxy="" frame="" to="" be="" passed");return="" r.get().then((function(n){return="" bn(n)})),zn(n).then((function(n){return="" wr(n)})).then((function(n){return="" er(n)}))}))}if(n="==Ur.POPUP)return" e;throw="" error("no="" render="" context="" available="" for="" "+n)}))},sn="function(){return" h.try((function(){if(o)return="" h.all([i.trigger(lr.focus),o.focus()]).then(sn)}))},dn="function(n,e,r,t){if(e===sr(window))return{type:&quot;global&quot;,uid:(o=jr(window),o.windows=o.windows||{},o.windows[f]=window,j.register((function(){delete" o.windows[f]})),f)};var="" o;if(n!="=window)throw" error("can="" not="" construct="" cross-domain="" window="" reference="" different="" target="" window");if(z.window){var="" i="t.getWindow();if(!i)throw" lazy="" prop");if(xr(i)!="=window)throw" prop="" with="" ancestor")}if(r="==Ur.POPUP)return{type:&quot;opener&quot;};if(r===Ur.IFRAME)return{type:&quot;parent&quot;,distance:Or(window)};throw" child")},tn="function(n,e){return" h.try((function(){c="n,u=e,en(),j.register((function(){return" e.close.fireandforget().catch(sn)}))}))},in="function(n){var" h.try((function(){i.trigger(lr.resize,{width:e,height:r})}))},yn="function(n){return" i.trigger(lr.destroy)})).catch(sn).then((function(){return="" j.all(n)})).then((function(){d.asyncreject(n||new="" error("component="" destroyed"))}))},zn="dn((function(n){return" h.try((function(){if(b){if(er(b.__source__))return;return="" b()}return="" i.trigger(lr.close)})).then((function(){return="" yn(n||new="" closed"))}))}))})),gn="function(n,e){var" v?v(n,{proxywin:r,proxyframe:t,windowname:o}):h.try((function(){if(n="==Ur.IFRAME){if(!t)throw" t.get().then((function(n){return="" zn(n).then((function(e){return="" bn(n)})),j.register((function(){return="" rr(e)})),e}))}))}if(n="==Ur.POPUP){var" 0="==r?&quot;300px&quot;:r,u=e.height,c=void" d="function(n,e){var" e.closeonunload,delete="" e.name,u&&c&&(e="i({top:d,left:f,width:u,height:c,status:1,toolbar:0,menubar:0,resizable:1,scrollbars:1},e));var" s,l,w="Object.keys(e).map((function(n){if(null!=e[n])return" n+"="+hn(e[n])})).filter(Boolean).join(" ,");try{s="window.open(&quot;&quot;,a,w)}catch(l){throw" rn("can="" open="" popup="" -="" "+(l.stack||l.message))}if(t(s))throw="" blocked");return="" t&&window.addeventlistener("unload",(function(){return="" s.close()})),s}(0,i({name:o,width:a,height:c},xn().popup));return="" function(n){if(function(n){return="" void="" wr(n).frameelement;for(var="" t="r[e];if(t&amp;&amp;t.contentWindow&amp;&amp;t.contentWindow===n)return" t}}(n);if(e&&e.parentelement)return="" e.parentelement.removechild(e)}try{n.close()}catch(n){}}(d)})),j.register((function(){return="" rr(d)})),d}throw="" "+n)})).then((function(n){return="" r.setwindow(n,{send:nr}),r.setname(o).then((function(){return="" r}))}))},vn="function(){return" h.try((function(){var="" error("window="" navigated="" away"))}))),e="Sr(v,Yn,3e3);if(j.register(e.cancel),j.register(n.cancel),$)return" $()}))},xn="function(n){var" n.isclosed().then((function(r){return="" r?(e="!0,Zn(new" error("detected="" component="" close"))):h.delay(200).then((function(){return="" n.isclosed()})).then((function(n){if(n)return="" close"))}))})).then((function(){return="" e}))},$n="function(n){return" f?f(n):h.try((function(){if(-1="==N.indexOf(n))return" n.push(n),d.asyncreject(n),i.trigger(lr.error,n)}))},kn="new" h,ne="function(n){return" h.try((function(){kn.resolve(n)}))};tn.onerror="$n;var" ee="function(n,e){return" n({uid:f,container:e.container,context:e.context,doc:e.doc,frame:e.frame,prerenderframe:e.prerenderframe,focus:sn,close:zn,state:a,props:z,tag:b,dimensions:nn(),event:i})},re="function(n,e){var" g?g(n,{context:r}):h.try((function(){if(g){var="" prerender="" template="" have="" been="" created="" document="" from="" child="" window");!function(n,e){var="" element="" html,="" got="" "+r);for(var="" a="0,u=yn(e.children);a&lt;u.length;a++)t.appendChild(u[a])}(e,o);var" 0!="=i&amp;&amp;i,u=P.height,c=void" s="Jn(f,(function(n){In({width:a?n.width:void" 0,height:c?n.height:void="" 0})}),{width:a,height:c,win:e});i.on(lr.rendered,s.cancel)}}}}}))},te="function(n,e){var" q?q(n,{proxyframe:r,proxyprerenderframe:t,context:o,rerender:i}):h.hash({container:n.get(),frame:r?r.get():null,prerenderframe:t?t.get():null,internalstate:an()}).then((function(n){var="" u="function(n,e){e=ln(e);var" r,t,o,i="!1,a=[],u=function(){i=!0;for(var" c(),{cancel:u};if(window.mutationobserver)for(var="" f="new" window.mutationobserver((function(){qn(n)&&c()}));f.observe(d,{childlist:!0}),a.push(f),d="d.parentElement}return(t=document.createElement(&quot;iframe&quot;)).setAttribute(&quot;name&quot;,&quot;__detect_close_&quot;+tn()+&quot;__&quot;),t.style.display=&quot;none&quot;,zn(t).then((function(n){(o=C(n)).addEventListener(&quot;unload&quot;,c)})),n.appendChild(t),r=mn((function(){qn(n)&amp;&amp;c()}),1e3),{cancel:u}}(t,(function(){var" container="" removed="" dom");return="" h.delay(1).then((function(){if(!qn(t))return="" j.all(n),i().then(en,rn);zn(n)}))}));return="" u.cancel()})),j.register((function(){return="" bn(t)})),a="kr(t)}}))},oe=function(){return{state:A,event:I,close:Zn,focus:Sn,resize:In,onError:$n,updateProps:ae,show:vn,hide:bn}},ie=function(n){void" s?l:(s="!0,function(){if(!t)return" l;var="" l!="=t.type)throw" typeerror("prop="" is="" of="" type="" "+t.type+":="" "+n)}else="" if(!1!="=t.required&amp;&amp;!gn(r[n]))throw" error('expected="" "'+n+'"="" defined');return="" gn(l)&&t.decorate&&(l="t.decorate({value:l,props:e,state:i,close:a,focus:u,event:c,onError:d,container:o})),l}())}})})),Kr(e,n,sn)}(m,z,k,r,e)},ae=function(n){return" ie(n),d.then((function(){var="" on(c).then((function(r){return="" n.updateprops(r).catch((function(n){return="" xn(e).then((function(e){if(!e)throw="" n}))}))}))}))},ue="function(n){return" m?m(n):h.try((function(){return="" kn(n)})).then((function(n){return="" hn(n)&&(n="function" n(e){var="" n}(n);if(e&&e.host)return="" e.host}(e);if(!r)throw="" error("element="" in="" shadow="" dom");var="" +tn(),o="document.createElement(&quot;slot&quot;);o.setAttribute(&quot;name&quot;,t),e.appendChild(o);var" i.setattribute("slot",t),r.appendchild(i),hn(r)?n(i):i}(n)),d="n,kr(n)}))};return{init:function(){I.on(Lr.RENDER,(function(){return" z.onrender()})),i.on(lr.display,(function(){return="" z.ondisplay()})),i.on(lr.rendered,(function(){return="" z.onrendered()})),i.on(lr.close,(function(){return="" z.onclose()})),i.on(lr.destroy,(function(){return="" z.ondestroy()})),i.on(lr.resize,(function(){return="" z.onresize()})),i.on(lr.focus,(function(){return="" z.onfocus()})),i.on(lr.props,(function(n){return="" z.onprops(n)})),i.on(lr.error,(function(n){return="" z&&z.onerror?z.onerror(n):rn(n).then((function(){settimeout((function(){throw="" n}),1)}))})),j.register(i.reset)},render:function(n){var="" a&&pr(yr(a),i)||u&&pr(yr(u),o),!1}(window,n))throw="" only="" renderto="" an="" adjacent="" frame");var="" remotely="" "+e.tostring()+"="" can="" "+t);if(r&&"string"!="typeof" r)throw="" error("container="" passed="" must="" string="" selector,="" "+typeof="" r+"="" }")}}(e,a,r);var="" function(n,e){for(var="" j.register((function(n){if(!er(e))return="" r.destroy(n)})),r.getdelegateoverrides()})).catch((function(n){throw="" error("unable="" delegate="" rendering.="" possibly="" the="" loaded="" window.\n\n"+wn(n))}));return="" m="function(){for(var" array(n),r="0;r&lt;n;r++)e[r]=arguments[r];return" u.then((function(n){return="" n.getproxycontainer.apply(n,e)}))},q="function(){for(var" n.rendercontainer.apply(n,e)}))},u="function(){for(var" n.show.apply(n,e)}))},l="function(){for(var" n.hide.apply(n,e)}))},$="function(){for(var" n.watchforunload.apply(n,e)}))},n="==Ur.IFRAME?(J=function(){for(var" n.getproxywindow.apply(n,e)}))},y="function(){for(var" n.openframe.apply(n,e)}))},z="function(){for(var" n.openprerenderframe.apply(n,e)}))},g="function(){for(var" n.prerender.apply(n,e)}))},v="function(){for(var" n.open.apply(n,e)}))},x="function(){for(var" n.openprerender.apply(n,e)}))}):n="==Ur.POPUP&amp;&amp;(H=function(){for(var" n.setproxywin.apply(n,e)}))}),u}(t,e)})),c="z.window,d=Vn(),l=Qr(m,z,&quot;post&quot;),w=I.trigger(Lr.RENDER),p=ue(r),v=cn(),y=p.then((function(){return" ie()})),g="y.then((function(){return" qr(m,z,"get").then((function(n){return="" function(n,e){var="" r,t,o="e.query||{},i=e.hash||{},a=n.split(&quot;#&quot;);t=a[1];var" c="Nn(u[1],o),d=Nn(t,i);return" c&&(r="r+&quot;?&quot;+c),d&amp;&amp;(r=r+&quot;#&quot;+d),r}(Nr(En()),{query:n})}))})),_=v.then((function(r){return" function(n){var="" on(e.initialchilddomain).then((function(n){return{uid:f,context:o,tag:b,childdomainmatch:t,version:"9_0_87",props:n,exports:(e="r,{init:function(n){return" tn(this.origin,n)},close:zn,checkclose:function(){return="" xn(e)},resize:in,onerror:$n,show:vn,hide:bn,export:ne})};var="" e}))}({proxywin:r,initialchilddomain:t,childdomainmatch:o,context:u}).then((function(n){var="" j.register(e.cleanreference),i}))}({proxywin:(o="{proxyWin:r,initialChildDomain:n,childDomainMatch:a,target:e,context:t}).proxyWin,initialChildDomain:o.initialChildDomain,childDomainMatch:o.childDomainMatch,target:o.target,context:o.context}).then((function(n){return" br({name:e,serializedpayload:n})}));var="" o})),x="_.then((function(n){return" on(t,{windowname:n})})),p="Cn(t),O=h.hash({proxyContainer:p,proxyFrame:x,proxyPrerenderFrame:P}).then((function(n){return" te(n.proxycontainer,{context:t,proxyframe:n.proxyframe,proxyprerenderframe:n.proxyprerenderframe,rerender:i})})).then((function(n){return="" n})),c="h.hash({windowName:_,proxyFrame:x,proxyWin:v}).then((function(n){var" c?e:gn(t,{windowname:n.windowname,proxywin:e,proxyframe:n.proxyframe})})),s="h.hash({proxyWin:C,proxyPrerenderFrame:P}).then((function(n){return" wn(t,n.proxywin,n.proxyprerenderframe)})),n="C.then((function(n){return" re(n.proxyprerenderwin,{context:t})})),k="h.hash({proxyWin:C,windowName:_}).then((function(n){if(c)return" n.proxywin.setname(n.windowname)})),t="h.hash({body:l}).then((function(n){return" s.method?s.method:object.keys(n.body).length?"post":"get"})),r="h.hash({proxyWin:C,windowUrl:g,body:l,method:T,windowName:k,prerender:A}).then((function(n){return" n.proxywin.setlocation(n.windowurl,{method:n.method,body:n.body})})),f="C.then((function(n){!function" n(e,r){var="" j.register((function(){t="!0})),h.delay(2e3).then((function(){return" e.isclosed()})).then((function(o){if(!t)return="" o?zn(new="" "+r+"="" close")):n(e,r)}))}(n,t)})),b="h.hash({container:O,prerender:A}).then((function(){return" i.trigger(lr.display)})),k="C.then((function(e){return" function(n,e,r){return="" n.awaitwindow()})).then((function(n){if(qe&&qe.needsbridge({win:n,domain:e})&&!qe.hasbridge(e,e)){var="" =="typeof" s.bridgeurl?s.bridgeurl({props:z}):s.bridgeurl;if(!t)throw="" error("bridge="" needed="" "+r);var="" qe.linkurl(n,e),qe.openbridge(nr(t),o)}}))}(e,n,t)})),q="R.then((function(){return" d.timeout(n,new="" error("loading="" timed="" out="" after="" "+n+"="" milliseconds"))}))})),nn="D.then((function(){return" i.trigger(lr.rendered)}));return="" h.hash({initpromise:d,buildurlpromise:g,onrenderpromise:w,getproxycontainerpromise:p,openframepromise:x,openprerenderframepromise:p,rendercontainerpromise:o,openpromise:c,openprerenderpromise:s,setstatepromise:n,prerenderpromise:a,loadurlpromise:r,buildwindownamepromise:_,setwindownamepromise:k,watchforclosepromise:f,ondisplaypromise:b,openbridgepromise:k,runtimeoutpromise:q,onrenderedpromise:nn,delegatepromise:u,watchforunloadpromise:d,finalsetpropspromise:y})})).catch((function(n){return="" h.all([$n(n),yn(n)]).then((function(){throw="" n}),(function(){throw="" n}))})).then(sn)},destroy:yn,getprops:function(){return="" z},setprops:ie,export:ne,gethelpers:oe,getdelegateoverrides:function(){return="" h.try((function(){return{getproxycontainer:ue,show:vn,hide:bn,rendercontainer:te,getproxywindow:cn,watchforunload:vn,openframe:on,openprerenderframe:cn,prerender:re,open:gn,openprerender:wn,setproxywin:fn}}))},getexports:function(){return="" s({getexports:function(){return="" kn}})}}}function="" et(n){var="" i.cspnonce&&s.setattribute("nonce",i.cspnonce),s.appendchild(o.createtextnode("\n="" #"+e+"="" {\n="" display:="" inline-block;\n="" position:="" relative;\n="" width:="" "+c+";\n="" height:="" "+d+";\n="" }\n\n=""> iframe {\n                display: inline-block;\n                position: absolute;\n                width: 100%;\n                height: 100%;\n                top: 0;\n                left: 0;\n                transition: opacity .2s ease-in-out;\n            }\n\n            #"+e+" &gt; iframe.zoid-invisible {\n                opacity: 0;\n            }\n\n            #"+e+" &gt; iframe.zoid-visible {\n                opacity: 1;\n        }\n        ")),f.appendChild(r),f.appendChild(t),f.appendChild(s),t.classList.add("zoid-visible"),r.classList.add("zoid-invisible"),a.on(Lr.RENDERED,(function(){t.classList.remove("zoid-visible"),t.classList.add("zoid-invisible"),r.classList.remove("zoid-invisible"),r.classList.add("zoid-visible"),setTimeout((function(){Bn(t)}),1)})),a.on(Lr.RESIZE,(function(n){var e=n.width,r=n.height;"number"==typeof e&amp;&amp;(f.style.width=Kn(e)),"number"==typeof r&amp;&amp;(f.style.height=Kn(r))})),f}}function rt(n){var e=n.doc,r=n.props,t=e.createElement("html"),o=e.createElement("body"),i=e.createElement("style"),a=e.createElement("div");return a.classList.add("spinner"),r.cspNonce&amp;&amp;i.setAttribute("nonce",r.cspNonce),t.appendChild(o),o.appendChild(a),o.appendChild(i),i.appendChild(e.createTextNode("\n            html, body {\n                width: 100%;\n                height: 100%;\n            }\n\n            .spinner {\n                position: fixed;\n                max-height: 60vmin;\n                max-width: 60vmin;\n                height: 40px;\n                width: 40px;\n                top: 50%;\n                left: 50%;\n                box-sizing: border-box;\n                border: 3px solid rgba(0, 0, 0, .2);\n                border-top-color: rgba(33, 128, 192, 0.8);\n                border-radius: 100%;\n                animation: rotation .7s infinite linear;\n            }\n\n            @keyframes rotation {\n                from {\n                    transform: translateX(-50%) translateY(-50%) rotate(0deg);\n                }\n                to {\n                    transform: translateX(-50%) translateY(-50%) rotate(359deg);\n                }\n            }\n        ")),t}var tt=_n(),ot=_n();function it(n){var e,r,t=function(n){var e=n.tag,r=n.url,t=n.domain,o=n.bridgeUrl,a=n.props,u=void 0===a?{}:a,c=n.dimensions,d=void 0===c?{}:c,f=n.autoResize,s=void 0===f?{}:f,l=n.allowedParentDomains,w=void 0===l?"*":l,h=n.attributes,p=void 0===h?{}:h,v=n.defaultContext,m=void 0===v?Ur.IFRAME:v,y=n.containerTemplate,g=void 0===y?et:y,b=n.prerenderTemplate,E=void 0===b?rt:b,_=n.validate,x=n.eligible,P=void 0===x?function(){return{eligible:!0}}:x,O=n.logger,C=void 0===O?{info:sn}:O,W=n.exports,S=void 0===W?sn:W,D=n.method,N=n.children,j=void 0===N?function(){return{}}:N,A=e.replace(/-/g,"_"),k=i({},{window:{type:Fr.OBJECT,sendToChild:!1,required:!1,allowDelegate:!0,validate:function(n){var e=n.value;if(!Dr(e)&amp;&amp;!Ie.isProxyWindow(e))throw new Error("Expected Window or ProxyWindow");if(Dr(e)){if(Er(e))throw new Error("Window is closed");if(!lr(e))throw new Error("Window is not same domain")}},decorate:function(n){return er(n.value)}},timeout:{type:Fr.NUMBER,required:!1,sendToChild:!1},cspNonce:{type:Fr.STRING,required:!1},onDisplay:{type:Fr.FUNCTION,required:!1,sendToChild:!1,allowDelegate:!0,default:Xr,decorate:$r},onRendered:{type:Fr.FUNCTION,required:!1,sendToChild:!1,default:Xr,decorate:$r},onRender:{type:Fr.FUNCTION,required:!1,sendToChild:!1,default:Xr,decorate:$r},onClose:{type:Fr.FUNCTION,required:!1,sendToChild:!1,allowDelegate:!0,default:Xr,decorate:$r},onDestroy:{type:Fr.FUNCTION,required:!1,sendToChild:!1,allowDelegate:!0,default:Xr,decorate:$r},onResize:{type:Fr.FUNCTION,required:!1,sendToChild:!1,allowDelegate:!0,default:Xr},onFocus:{type:Fr.FUNCTION,required:!1,sendToChild:!1,allowDelegate:!0,default:Xr},close:{type:Fr.FUNCTION,required:!1,sendToChild:!1,childDecorate:function(n){return n.close}},focus:{type:Fr.FUNCTION,required:!1,sendToChild:!1,childDecorate:function(n){return n.focus}},resize:{type:Fr.FUNCTION,required:!1,sendToChild:!1,childDecorate:function(n){return n.resize}},uid:{type:Fr.STRING,required:!1,sendToChild:!1,childDecorate:function(n){return n.uid}},tag:{type:Fr.STRING,required:!1,sendToChild:!1,childDecorate:function(n){return n.tag}},getParent:{type:Fr.FUNCTION,required:!1,sendToChild:!1,childDecorate:function(n){return n.getParent}},getParentDomain:{type:Fr.FUNCTION,required:!1,sendToChild:!1,childDecorate:function(n){return n.getParentDomain}},show:{type:Fr.FUNCTION,required:!1,sendToChild:!1,childDecorate:function(n){return n.show}},hide:{type:Fr.FUNCTION,required:!1,sendToChild:!1,childDecorate:function(n){return n.hide}},export:{type:Fr.FUNCTION,required:!1,sendToChild:!1,childDecorate:function(n){return n.export}},onError:{type:Fr.FUNCTION,required:!1,sendToChild:!1,childDecorate:function(n){return n.onError}},onProps:{type:Fr.FUNCTION,required:!1,sendToChild:!1,childDecorate:function(n){return n.onProps}},getSiblings:{type:Fr.FUNCTION,required:!1,sendToChild:!1,childDecorate:function(n){return n.getSiblings}}},u);if(!g)throw new Error("Container template required");return{name:A,tag:e,url:r,domain:t,bridgeUrl:o,method:D,propsDef:k,dimensions:d,autoResize:s,allowedParentDomains:w,attributes:p,defaultContext:m,containerTemplate:g,prerenderTemplate:E,validate:_,logger:C,eligible:P,children:j,exports:"function"==typeof S?S:function(n){for(var e=n.getExports,r={},t=function(n,t){var o=t[n],i=S[o].type,a=e().then((function(n){return n[o]}));r[o]=i===Fr.FUNCTION?function(){for(var n=arguments.length,e=new Array(n),r=0;r<n;r++)e[r]=arguments[r];return a.then((function(n){return="" n.apply(void="" 0,e)}))}:a},o="0,i=Object.keys(S);o&lt;i.length;o++)t(o,i);return" r}}}(n),o="t.name,a=t.tag,u=t.defaultContext,c=t.eligible,d=t.children,f=jr(window),s=[],l=function(){if(function(n){try{return" qr(window.name).name="==n}catch(n){}return!1}(o)){var" n="Hr().payload;if(n.tag===a&amp;&amp;Cr(n.childDomainMatch,sr()))return!0}return!1},w=dn((function(){if(l()){if(window.xprops)throw" delete="" f.components[a],new="" error("can="" not="" register="" "+o+"="" as="" child="" -="" already="" registered");var="" e,r="n.tag,t=n.propsDef,o=n.autoResize,i=n.allowedParentDomains,a=[],u=Hr(),c=u.parent,d=u.payload,f=c.win,s=c.domain,l=new" h,w="d.version,p=d.uid,v=d.exports,m=d.context,y=d.props;if(&quot;9_0_87&quot;!==w)throw" new="" error("parent="" window="" has="" zoid="" version="" "+w+",="" 9_0_87");var="" g="v.show,b=v.hide,E=v.close,_=v.onError,x=v.checkClose,P=v.export,O=v.resize,C=v.init,W=function(){return" f},s="function(){return" s},d="function(n){return" a.push(n),{cancel:function(){a.splice(a.indexof(n),1)}}},n="function(n){return" o.fireandforget({width:n.width,height:n.height})},j="function(n){return" l.resolve(n),p(n)},a="function(n){var" t="(void" 0="==n?{}:n).anyParent,o=[],i=e.parent;if(void" error("no="" parent="" found="" for="" "+r+"="" child");for(var="" a="0,u=yr(window);a&lt;u.length;a++){var" c="u[a];if(lr(c)){var" d="wr(c).xprops;if(d&amp;&amp;W()===d.getParent()){var" f="d.parent;if(t||!i||f&amp;&amp;f.uid===i.uid){var" s="Ar(c,(function(n){return" n.exports}));o.push({props:d,exports:s})}}}}return="" o},k="function(n,o,i){void" u="function(n,e,r,t,o,i){void" l="0,w=Object.keys(e);l&lt;w.length;l++){var" h="w[l];r.hasOwnProperty(h)||(a[h]=Zr(e,0,h,void" 0,o))}return="" a}(f,t,n,o,{tag:r,show:g,hide:b,close:e,focus:gr,onerror:_,resize:n,getsiblings:a,onprops:d,getparent:w,getparentdomain:s,uid:p,export:j},i);e?pn(e,u):e="u;for(var" h.try((function(){return="" k(n,s,!0)}))};return{init:function(){return="" lr(f)&&function(n){var="" e="n.componentName,r=n.parentComponentWindow,t=zr({data:qr(window.name).serializedInitialPayload,sender:{win:r},basic:!0}),o=t.sender;if(&quot;uid&quot;===t.reference.type||&quot;global&quot;===t.metaData.windowRef.type){var" i="Ir({data:t.data,metaData:{windowRef:Yr(r)},sender:{domain:o.domain},receiver:{win:window,domain:sr()},basic:!0});window.name=Br({name:e,serializedPayload:i.serializedData})}}({componentName:n.name,parentComponentWindow:f}),jr(window).exports=n.exports({getExports:function(){return" l}}),function(n,e){if(!cr(n,e))throw="" be="" rendered="" by="" domain:="" "+e)}(i,s),le(f),window.addeventlistener("beforeunload",(function(){x.fireandforget()})),window.addeventlistener("unload",(function(){x.fireandforget()})),sr(f,(function(){vr()})),c({updateprops:t,close:vr})})).then((function(){return(n="o.width,e=void" 0!="=n&amp;&amp;n,r=o.height,t=void" 0,height:r?n.height:void="" 0})}),{width:e,height:r})}));var="" n,e,r,t,i})).catch((function(n){_(n)}))},getprops:function(){return="" e||(k(y,s),e)}}}(t);return="" n.init(),n}}));if(w(),e="Ke(&quot;zoid_allow_delegate_&quot;+o,(function(){return!0})),r=Ke(&quot;zoid_delegate_&quot;+o,(function(n){var" multiple="" components="" with="" the="" same="" tag:="" "+a);return="" f.components[a]="!0,{init:function" n(e){var="" r,f="zoid-" +a+"-"+tn(),l="e||{},w=c({props:l}),p=w.eligible,v=w.reason,m=l.onDestroy;l.onDestroy=function(){if(r&amp;&amp;p&amp;&amp;s.splice(s.indexOf(r),1),m)return" m.apply(void="" 0,arguments)};var="" y="nt({uid:f,options:t});y.init(),p?y.setProps(l):l.onDestroy&amp;&amp;l.onDestroy(),tt.register((function(n){return" y.destroy(n||new="" error("zoid="" destroyed="" all="" components"))}));var="" r="(void" n((void="" h.try((function(){if(!p){var="" error(v||o+"="" component="" is="" eligible");return="" y.destroy(e).then((function(){throw="" e}))}if(!dr(n))throw="" error("must="" pass="" to="" renderto");return="" function(n,e){return="" h.try((function(){if(n.window)return="" er(n.window).gettype();if(e){if(e!="=Ur.IFRAME&amp;&amp;e!==Ur.POPUP)throw" error("unrecognized="" context:="" "+e);return="" e}return="" u}))}(l,t)})).then((function(o){if(e="function(n,e){if(e){if(&quot;string&quot;!=typeof" e&&!q(e))throw="" typeerror("expected="" string="" or="" element="" selector="" passed");return="" e}if(n="==Ur.POPUP)return&quot;body&quot;;throw" error("expected="" passed="" render="" iframe")}(o,e),n!="=window&amp;&amp;&quot;string&quot;!=typeof" e)throw="" when="" rendering="" another="" window");return="" y.render({target:n,container:e,context:o,rerender:function(){var="" o="g();return" pn(r,o),o.renderto(n,e,t)}})})).catch((function(n){return="" y.destroy(n).then((function(){throw="" n}))}))};return="" a(r)}},t="0,o=Object.keys(n);t&lt;o.length;t++)r(t,o);return" e}(),{iseligible:function(){return="" p},clone:g,render:function(n,e){return="" b(window,n,e)},renderto:function(n,e,r){return="" b(n,e,r)}}),p&&s.push(r),r},instances:s,driver:function(n,e){throw="" error("driver="" support="" enabled")},ischild:l,canrenderto:function(n){return="" nr(n,"zoid_allow_delegate_"+o).then((function(n){return="" n.data})).catch((function(){return!1}))},registerchild:w}}var="" at="function(n){var" e,r,t,o;ne().initialized||(ne().initialized="!0,r=(e={on:Ke,send:nr}).on,t=e.send,(o=ne()).receiveMessage=o.receiveMessage||function(n){return" $e(n,{on:r,send:t})},function(n){var="" mn(window,"message",(function(n){!function(n,e){var="" error("post="" message="" did="" have="" origin="" domain");$e({source:e,origin:o,data:i},{on:r,send:t})}}))}(n,{on:e,send:r})}))}))}({on:ke,send:nr}),ke({on:ke,send:nr,receivemessage:$e}),function(n){var="" ce(n.source,{domain:n.origin}),{instanceid:ue()}})),t="F();return" t&&de(t,{send:r}).catch((function(n){})),n}))}({on:ke,send:nr}));var="" i.init(n)};a.driver="function(n,e){return" i.driver(n,e)},a.ischild="function(){return" i.ischild()},a.canrenderto="function(n){return" i.canrenderto(n)},a.instances="i.instances;var" u&&(window.xprops="a.xprops=u.getProps()),a};function" ut(n){qe&&qe.destroybridges();var="" tt="_n(),e}var" ct="ut;function" dt(n){return="" ct(),delete="" window.__zoid_9_0_87__,function(){for(var="" window.__post_robot_10_0_46__,ot.all(n);var="" e}}])}));="" js="" function="" get="" brighter="" darker="" color="" from="" hex="" code="" const="" psbc="(r,$,e,l)=">{let _,t,n,g,i,b,p,u=Math.round,a="string"==typeof e;return"number"!=typeof r||r&lt;-1||r&gt;1||"string"!=typeof $||"r"!=$[0]&amp;&amp;"#"!=$[0]||e&amp;&amp;!a?null:(p=$.length&gt;9,p=a?e.length&gt;9||"c"==e&amp;&amp;!p:p,i=pSBC.pSBCr($),g=r&lt;0,b=e&amp;&amp;"c"!=e?pSBC.pSBCr(e):g?{r:0,g:0,b:0,a:-1}:{r:255,g:255,b:255,a:-1},g=1-(r=g?-1*r:r),i&amp;&amp;b)?(l?(_=u(g*i.r+r*b.r),t=u(g*i.g+r*b.g),n=u(g*i.b+r*b.b)):(_=u((g*i.r**2+r*b.r**2)**.5),t=u((g*i.g**2+r*b.g**2)**.5),n=u((g*i.b**2+r*b.b**2)**.5)),a=i.a,b=b.a,a=(i=a&gt;=0||b&gt;=0)?a&lt;0?b:b&lt;0?a:a*g+b*r:0,p)?"rgb"+(i?"a(":"(")+_+","+t+","+n+(i?","+u(1e3*a)/1e3:"")+")":"#"+(4294967296+16777216*_+65536*t+256*n+(i?u(255*a):0)).toString(16).slice(1,i?void 0:-2):null};pSBC.pSBCr=r=&gt;{let $=parseInt,e=r.length,l={};if(e&gt;9){let[_,t,n,g]=r=r.split(",");if((e=r.length)&lt;3||e&gt;4)return null;l.r=$("a"==_[3]?_.slice(5):_.slice(4)),l.g=$(t),l.b=$(n),l.a=g?parseFloat(g):-1}else{if(8==e||6==e||e&lt;4)return null;e&lt;6&amp;&amp;(r="#"+r[1]+r[1]+r[2]+r[2]+r[3]+r[3]+(e&gt;4?r[4]+r[4]:"")),r=$(r.slice(1),16),9==e||5==e?(l.r=r&gt;&gt;24&amp;255,l.g=r&gt;&gt;16&amp;255,l.b=r&gt;&gt;8&amp;255,l.a=Math.round((255&amp;r)/.255)/1e3):(l.r=r&gt;&gt;16,l.g=r&gt;&gt;8&amp;255,l.b=255&amp;r,l.a=-1)}return l};

var frontEndpoint = 'www.ordertracker.com'
var apiEndpoint = 'api.ordertracker.com'

var ordertrackerProperties = {
	id: {
	    type: 'string',
	    required: false
	},
    language: {
        type: 'string',
        required: false
    },
    size: {
        type: 'string',
        required: false
    },
    theme: {
        type: 'string',
        required: false
    },
    shape: {
        type: 'string',
        required: false
    },
    font: {
        type: 'string',
        required: false
    },
    trackingNumber: {
        type: 'string',
        required: false
    },
    buttonIcon: {
        type: 'string',
        required: false
    },
    buttonLabel: {
        type: 'string',
        required: false
    },
    buttonColor: {
        type: 'string',
        required: false
    },
    buttonLabelColor: {
        type: 'string',
        required: false
    },
    inputPlaceholder: {
        type: 'string',
        required: false
    },
    inputColor: {
        type: 'string',
        required: false
    },
    inputBorder: {
        type: 'string',
        required: false
    },
    trackingPrimaryColor: {
        type: 'string',
        required: false
    },
    trackingSecondaryColor: {
        type: 'string',
        required: false
    },
    trackingBarColor: {
        type: 'string',
        required: false
    },
    showCouriersDetails: {
    	type: 'string',
        required: false
    },
    showTrackingDetails: {
    	type: 'string',
        required: false
    },
    showCustomClearanceDetails: {
    	type: 'string',
        required: false
    },
    deliveryForecast: {
    	type: 'string',
        required: false
    },
    showFailoverEvent: {
    	type: 'string',
        required: false
    },
    courierLabel: {
        type: 'string',
        required: false
    },
    shipmentOriginCountry: {
        type: 'string',
        required: false
    },
    customSemantics: {
        type: 'object',
        required: false
    },
    customEvents: {
        type: 'array',
        required: false
    },
    customCss: {
        type: 'string',
        required: false
    },
    shopifyPageTitle: {
        type: 'string',
        required: false
    },
    shopifyTopMargin: {
        type: 'string',
        required: false
    },
    shopifyBottomMargin: {
        type: 'string',
        required: false
    }
}

var Ordertracker = zoid.create({
    tag: 'ordertracker',
    url: 'https://' + frontEndpoint + '/embed',
    dimensions: {
        width: '100%'
    },
    autoResize: {
        height: true
    },
    props: ordertrackerProperties
})

if (window &amp;&amp; window.xprops) {
	var loadingIcon
	var widgetOptions = {}
	var widgetErrors = []
	var widgetConstants = {}

	var getStrings = function(lang, shopify) {
	    var strings

	    switch (lang) {
	        case 'DE':
	            strings = shopify ? {
	                buttonLabel: 'Meine Bestellung verfolgen',
	                buttonLabelShort: 'Verfolgen',
	                inputPlaceholder: 'E-Mail, Bestell- oder Sendungsnummer...',
	                inputPlaceholderShort: 'Sendungsnummer...',
	                courierNamePlaceholder: 'Vorfall',
	                deliveryForecastPlaceholder: 'Die Lieferung wird in OT_VAR_1 Tagen erwartet',
	                humanDateFormat: 'OT_VAR_2. OT_VAR_1 OT_VAR_3',
	                humanMonths: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez']
	            } : {
	                buttonLabel: 'Mein Paket verfolgen',
	                buttonLabelShort: 'Verfolgen',
	                inputPlaceholder: 'Sendungsnummer...',
	                inputPlaceholderShort: 'Sendungsnummer...',
	                courierNamePlaceholder: 'Vorfall',
	                deliveryForecastPlaceholder: 'Die Lieferung wird in OT_VAR_1 Tagen erwartet',
	                humanDateFormat: 'OT_VAR_2. OT_VAR_1 OT_VAR_3',
	                humanMonths: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez']
	            }
	        break
	        case 'FR':
	            strings = shopify ? {
	                buttonLabel: 'Suivre ma commande',
	                buttonLabelShort: 'Suivre',
	                inputPlaceholder: 'E-mail, numéro de commande ou de suivi...',
	                inputPlaceholderShort: 'Numéro de suivi...',
	                courierNamePlaceholder: 'Évènement',
	                deliveryForecastPlaceholder: 'La livraison est prévue dans OT_VAR_1 jours',
	                humanDateFormat: 'OT_VAR_2 OT_VAR_1. OT_VAR_3',
	                humanMonths: ['jan', 'fev', 'mar', 'avr', 'mai', 'juin', 'juil', 'aout', 'sep', 'oct', 'nov', 'dec']
	            } : {
	                buttonLabel: 'Suivre mon colis',
	                buttonLabelShort: 'Suivre',
	                inputPlaceholder: 'Numéro de suivi...',
	                inputPlaceholderShort: 'Numéro de suivi...',
	                courierNamePlaceholder: 'Évènement',
	                deliveryForecastPlaceholder: 'La livraison est prévue dans OT_VAR_1 jours',
	                humanDateFormat: 'OT_VAR_2 OT_VAR_1. OT_VAR_3',
	                humanMonths: ['jan', 'fev', 'mar', 'avr', 'mai', 'juin', 'juil', 'aout', 'sep', 'oct', 'nov', 'dec']
	            }
	        break
	        case 'PT':
	            strings = shopify ? {
	                buttonLabel: 'Rastrear meu pedido',
	                buttonLabelShort: 'Rastrear',
	                inputPlaceholder: 'E-mail, pedido ou número de rastreamento...',
	                inputPlaceholderShort: 'Numero de rastreio...',
	                courierNamePlaceholder: 'Evento',
	                deliveryForecastPlaceholder: 'A entrega é esperada em OT_VAR_1 dias',
	                humanDateFormat: 'OT_VAR_2 de OT_VAR_1 de OT_VAR_3',
	                humanMonths: ['jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez']
	            } : {
	                buttonLabel: 'Rastrear meu pacote',
	                buttonLabelShort: 'Rastrear',
	                inputPlaceholder: 'Numero de rastreio...',
	                inputPlaceholderShort: 'Numero de rastreio...',
	                courierNamePlaceholder: 'Evento',
	                deliveryForecastPlaceholder: 'A entrega é esperada em OT_VAR_1 dias',
	                humanDateFormat: 'OT_VAR_2 de OT_VAR_1 de OT_VAR_3',
	                humanMonths: ['jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez']
	            }
	        break
	        case 'IT':
	            strings = shopify ? {
	                buttonLabel: 'Traccia il mio ordine',
	                buttonLabelShort: 'Traccia',
	                inputPlaceholder: 'E-mail, ordine o numero di tracciamento...',
	                inputPlaceholderShort: 'Numero di tracciamento...',
	                courierNamePlaceholder: 'Evento',
	                deliveryForecastPlaceholder: 'La consegna è prevista in OT_VAR_1 giorni',
	                humanDateFormat: 'OT_VAR_2 OT_VAR_1 OT_VAR_3',
	                humanMonths: ['gen', 'feb', 'mar', 'apr', 'mag', 'giu', 'lug', 'ago', 'set', 'ott', 'nov', 'dic']
	            } : {
	                buttonLabel: 'Traccia il mio pacco',
	                buttonLabelShort: 'Traccia',
	                inputPlaceholder: 'Numero di tracciamento...',
	                inputPlaceholderShort: 'Numero di tracciamento...',
	                courierNamePlaceholder: 'Evento',
	                deliveryForecastPlaceholder: 'La consegna è prevista in OT_VAR_1 giorni',
	                humanDateFormat: 'OT_VAR_2 OT_VAR_1 OT_VAR_3',
	                humanMonths: ['gen', 'feb', 'mar', 'apr', 'mag', 'giu', 'lug', 'ago', 'set', 'ott', 'nov', 'dic']
	            }
	        break
	        case 'ES':
	            strings = shopify ? {
	                buttonLabel: 'Rastrear mi pedido',
	                buttonLabelShort: 'Rastrear',
	                inputPlaceholder: 'E-mail, pedido o número de seguimiento...',
	                inputPlaceholderShort: 'Número de rastreo...',
	                courierNamePlaceholder: 'Evento',
	                deliveryForecastPlaceholder: 'La entrega se espera en OT_VAR_1 días',
	                humanDateFormat: 'OT_VAR_2 de OT_VAR_1. de OT_VAR_3',
	                humanMonths: ['ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic']
	            } : {
	                buttonLabel: 'Rastrear mi paquete',
	                buttonLabelShort: 'Rastrear',
	                inputPlaceholder: 'Número de rastreo...',
	                inputPlaceholderShort: 'Número de rastreo...',
	                courierNamePlaceholder: 'Evento',
	                deliveryForecastPlaceholder: 'La entrega se espera en OT_VAR_1 días',
	                humanDateFormat: 'OT_VAR_2 de OT_VAR_1. de OT_VAR_3',
	                humanMonths: ['ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic']
	            }
	        break
	        case 'TR':
	            strings = shopify ? {
	                buttonLabel: 'Benim siparişimi takip et',
	                buttonLabelShort: 'Izlemek',
	                inputPlaceholder: 'E-posta, sipariş veya takip numarası...',
	                inputPlaceholderShort: 'Takip numarası...',
	                courierNamePlaceholder: 'Etkinlik',
	                deliveryForecastPlaceholder: 'Teslimatın OT_VAR_1 gün içinde yapılması bekleniyor',
	                humanDateFormat: 'OT_VAR_2 OT_VAR_1 OT_VAR_3',
	                humanMonths: ['oca', 'şub', 'mar', 'nis', 'may', 'haz', 'tem', 'ağu', 'eyl', 'eki', 'kas', 'ara']
	            } : {
	                buttonLabel: 'Paketimi takip et',
	                buttonLabelShort: 'Izlemek',
	                inputPlaceholder: 'Takip numarası...',
	                inputPlaceholderShort: 'Takip numarası...',
	                courierNamePlaceholder: 'Etkinlik',
	                deliveryForecastPlaceholder: 'Teslimatın OT_VAR_1 gün içinde yapılması bekleniyor',
	                humanDateFormat: 'OT_VAR_2 OT_VAR_1 OT_VAR_3',
	                humanMonths: ['oca', 'şub', 'mar', 'nis', 'may', 'haz', 'tem', 'ağu', 'eyl', 'eki', 'kas', 'ara']
	            }
	        break
	        case 'NL':
	            strings = shopify ? {
	                buttonLabel: 'Volg mijn bestelling',
	                buttonLabelShort: 'Volg',
	                inputPlaceholder: 'E-mail, bestel- of volgnummer...',
	                inputPlaceholderShort: 'Volg nummer...',
	                courierNamePlaceholder: 'Evenement',
	                deliveryForecastPlaceholder: 'Levering wordt verwacht in OT_VAR_1 dagen',
	                humanDateFormat: 'OT_VAR_2 OT_VAR_1. OT_VAR_3',
	                humanMonths: ['jan', 'feb', 'maa', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec']
	            } : {
	                buttonLabel: 'Volg mijn pakket',
	                buttonLabelShort: 'Volg',
	                inputPlaceholder: 'Volg nummer...',
	                inputPlaceholderShort: 'Volg nummer...',
	                courierNamePlaceholder: 'Evenement',
	                deliveryForecastPlaceholder: 'Levering wordt verwacht in OT_VAR_1 dagen',
	                humanDateFormat: 'OT_VAR_2 OT_VAR_1. OT_VAR_3',
	                humanMonths: ['jan', 'feb', 'maa', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec']
	            }
	        break
	        case 'PL':
	            strings = shopify ? {
	                buttonLabel: 'Śledź moją zamówienie',
	                buttonLabelShort: 'Śledź',
	                inputPlaceholder: 'E-mail, numer zamówienia lub śledzenia...',
	                inputPlaceholderShort: 'Numer przesyłki...',
	                courierNamePlaceholder: 'Wydarzenie',
	                deliveryForecastPlaceholder: 'Dostawa jest oczekiwana w ciągu OT_VAR_1 dni',
	                humanDateFormat: 'OT_VAR_2 OT_VAR_1 OT_VAR_3',
	                humanMonths: ['sty', 'lut', 'mar', 'kwi', 'maj', 'cze', 'lip', 'sie', 'wrz', 'paz', 'lis', 'gru']
	            } : {
	                buttonLabel: 'Śledź moją paczkę',
	                buttonLabelShort: 'Śledź',
	                inputPlaceholder: 'Numer przesyłki...',
	                inputPlaceholderShort: 'Numer przesyłki...',
	                courierNamePlaceholder: 'Wydarzenie',
	                deliveryForecastPlaceholder: 'Dostawa jest oczekiwana w ciągu OT_VAR_1 dni',
	                humanDateFormat: 'OT_VAR_2 OT_VAR_1 OT_VAR_3',
	                humanMonths: ['sty', 'lut', 'mar', 'kwi', 'maj', 'cze', 'lip', 'sie', 'wrz', 'paz', 'lis', 'gru']
	            }
	        break
	        case 'ZH_CN':
	            strings = shopify ? {
	                buttonLabel: '追踪我的订单',
	                buttonLabelShort: '追踪',
	                inputPlaceholder: '电子邮件、订单号或跟踪号...',
	                inputPlaceholderShort: '追踪号码...',
	                courierNamePlaceholder: '事件',
	                deliveryForecastPlaceholder: '预计 OT_VAR_1 天内交货',
	                humanDateFormat: 'OT_VAR_1 OT_VAR_2, OT_VAR_3',
	                humanMonths: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	            } : {
	                buttonLabel: '追踪我的包裹',
	                buttonLabelShort: '追踪',
	                inputPlaceholder: '追踪号码...',
	                inputPlaceholderShort: '追踪号码...',
	                courierNamePlaceholder: '事件',
	                deliveryForecastPlaceholder: '预计 OT_VAR_1 天内交货',
	                humanDateFormat: 'OT_VAR_1 OT_VAR_2, OT_VAR_3',
	                humanMonths: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	            }
	        break
	        case 'ZH_HK':
	            strings = shopify ? {
	                buttonLabel: '追踪我的訂單',
	                buttonLabelShort: '追踪',
	                inputPlaceholder: '電子郵件、訂單號或跟踪號...',
	                inputPlaceholderShort: '追踪號碼...',
	                courierNamePlaceholder: '事件',
	                deliveryForecastPlaceholder: '預計 OT_VAR_1 天內交貨',
	                humanDateFormat: 'OT_VAR_1 OT_VAR_2, OT_VAR_3',
	                humanMonths: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	            } : {
	                buttonLabel: '追踪我的包裹',
	                buttonLabelShort: '追踪',
	                inputPlaceholder: '追踪號碼...',
	                inputPlaceholderShort: '追踪號碼...',
	                courierNamePlaceholder: '事件',
	                deliveryForecastPlaceholder: '預計 OT_VAR_1 天內交貨',
	                humanDateFormat: 'OT_VAR_1 OT_VAR_2, OT_VAR_3',
	                humanMonths: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	            }
	        break
	        case 'JA':
	            strings = shopify ? {
	                buttonLabel: '私の注文を追跡する',
	                buttonLabelShort: '追跡',
	                inputPlaceholder: 'メール、注文番号、追跡番号...',
	                inputPlaceholderShort: '追跡番号...',
	                courierNamePlaceholder: 'イベント',
	                deliveryForecastPlaceholder: 'OT_VAR_1日後に配達予定です',
	                humanDateFormat: 'OT_VAR_1 OT_VAR_2, OT_VAR_3',
	                humanMonths: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	            } : {
	                buttonLabel: '私のパッケージを追跡する',
	                buttonLabelShort: '追跡',
	                inputPlaceholder: '追跡番号...',
	                inputPlaceholderShort: '追跡番号...',
	                courierNamePlaceholder: 'イベント',
	                deliveryForecastPlaceholder: 'OT_VAR_1日後に配達予定です',
	                humanDateFormat: 'OT_VAR_1 OT_VAR_2, OT_VAR_3',
	                humanMonths: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	            }
	        break
	        case 'KO':
	            strings = shopify ? {
	                buttonLabel: '내 주문을 추적',
	                buttonLabelShort: '길',
	                inputPlaceholder: '이메일, 주문 번호 또는 추적 번호...',
	                inputPlaceholderShort: '추적 번호...',
	                courierNamePlaceholder: '이벤트',
	                deliveryForecastPlaceholder: '배송은 OT_VAR_1일 예상',
	                humanDateFormat: 'OT_VAR_1 OT_VAR_2, OT_VAR_3',
	                humanMonths: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	            } : {
	                buttonLabel: '내 패키지 추적',
	                buttonLabelShort: '길',
	                inputPlaceholder: '추적 번호...',
	                inputPlaceholderShort: '추적 번호...',
	                courierNamePlaceholder: '이벤트',
	                deliveryForecastPlaceholder: '배송은 OT_VAR_1일 예상',
	                humanDateFormat: 'OT_VAR_1 OT_VAR_2, OT_VAR_3',
	                humanMonths: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	            }
	        break
	        case 'RU':
	            strings = shopify ? {
	                buttonLabel: 'отслеживать свой заказ',
	                buttonLabelShort: 'Отследить',
	                inputPlaceholder: 'Эл. почта, номер заказа или отслеживания...',
	                inputPlaceholderShort: 'Номер отслеживания...',
	                courierNamePlaceholder: 'Мероприятие',
	                deliveryForecastPlaceholder: 'Доставĸа ожидается через OT_VAR_1 дня',
	                humanDateFormat: 'OT_VAR_2 OT_VAR_1. OT_VAR_3 г.',
	                humanMonths: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек']
	            } : {
	                buttonLabel: 'Отследить мою посылку',
	                buttonLabelShort: 'Отследить',
	                inputPlaceholder: 'Номер отслеживания...',
	                inputPlaceholderShort: 'Номер отслеживания...',
	                courierNamePlaceholder: 'Мероприятие',
	                deliveryForecastPlaceholder: 'Доставĸа ожидается через OT_VAR_1 дня',
	                humanDateFormat: 'OT_VAR_2 OT_VAR_1. OT_VAR_3 г.',
	                humanMonths: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек']
	            }
	        break
	        default:
	            strings = shopify ? {
	                buttonLabel: 'Track my order',
	                buttonLabelShort: 'Track',
	                inputPlaceholder: 'Email, Order or Tracking number...',
	                inputPlaceholderShort: 'Tracking number...',
	                courierNamePlaceholder: 'Event',
	                deliveryForecastPlaceholder: 'Delivery is expected in OT_VAR_1 days',
	                humanDateFormat: 'OT_VAR_1 OT_VAR_2, OT_VAR_3',
	                humanMonths: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	            } : {
	                buttonLabel: 'Track my package',
	                buttonLabelShort: 'Track',
	                inputPlaceholder: 'Tracking number...',
	                inputPlaceholderShort: 'Tracking number...',
	                courierNamePlaceholder: 'Event',
	                deliveryForecastPlaceholder: 'Delivery is expected in OT_VAR_1 days',
	                humanDateFormat: 'OT_VAR_1 OT_VAR_2, OT_VAR_3',
	                humanMonths: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
	            }
	    }

	    return strings
	}

	var getLanguage = function() {
		var lang = widgetOptions.language
	    var availableLanguages = ['EN', 'DE', 'FR', 'PT', 'IT', 'ES', 'TR', 'NL', 'PL', 'ZH_CN', 'ZH_HK', 'JA', 'KO', 'RU']

	    if (lang &amp;&amp; availableLanguages.includes(lang.split('-').join('_').toUpperCase())) {
	        lang = lang.split('-').join('_').toUpperCase()
	    } else {
	        var lang = navigator.language || navigator.userLanguage

	        lang = typeof lang === 'string' || lang instanceof String ? lang.toUpperCase() : false

	        if (lang) {
	            if (lang === 'ZH-CN' || lang === 'ZH-HK') {
	                lang = lang.split('-').join('_')
	            } else {
	                lang = lang.substring(0, 2)
	            }
	        }
	    }

	    lang = availableLanguages.includes(lang) ? lang : 'EN'

	    return lang
	}

	var getDomain = function() {
		try {
		    domain = new URL(window.xprops.getParentDomain()).hostname
		} catch(e) {
			domain = window.xprops.getParentDomain()
		}

	    return domain
	}

	var validString = function(str) {
	    return str &amp;&amp; typeof str === 'string' || str instanceof String &amp;&amp; str.split(' ').join('').length
	}

	var validNumber = function(str, shopify) {
	    return shopify ? 
	    	   str &amp;&amp; str.split(' ').join('').length : 
	    	   str &amp;&amp; str.match(/^[a-zA-Z0-9-_]+$/i) &amp;&amp; /\d/.test(str) &amp;&amp; 
	    	   str.length &gt; 4 &amp;&amp; str.length &lt; 51 &amp;&amp; /^[0-9a-zA-Z]/.test(str) &amp;&amp; /[0-9a-zA-Z]$/.test(str)
	}

	var humanDate = function(str) {
	    var date = str ? new Date(str) : new Date()
	    var dateArray = [
	        date.getDate(),
	        date.getMonth()+1,
	        date.getHours(),
	        date.getMinutes()
	    ]

	    for (var i = 0; i &lt; dateArray.length; i++) {
	        dateArray[i] = dateArray[i] &lt; 10 ? '0' + dateArray[i] : dateArray[i]
	    }

	    return { day: dateArray[0] + '/' + dateArray[1] + '/' + date.getFullYear(), time: dateArray[2] + ':' + dateArray[3] }
	}

	var formsAnimation = function() {
	    var v = document.querySelectorAll('.fld &gt; input')
	    var reset = function() {
	        v.forEach(function(p) {
	            if (!p.value) {
	                p.closest('.fld').classList.remove('active', 'focus')
	            } else {
	                p.closest('.fld').classList.remove('focus')
	            }
	        })
	    }

	    v.forEach(function(p) {
	        p.addEventListener('focusin', function(e) {
	            reset()
	            this.closest('.fld').classList.add('active', 'focus')
	        })

	        p.addEventListener('focusout', function(e) {
	            reset()
	        })
	    })
	}

	var throwErrors = function(errors) {
		errors = Array.isArray(errors) ? errors : [errors]

	    document.querySelectorAll('.active').forEach(function(el) {
	    	el.classList.remove('active')
	    })

	    document.getElementById('widget-error').classList.add('active')
	    document.querySelector('#widget-error h1').innerHTML = '<img alt="logo" src="./sdk_files/logo.svg"><strong>' + errors.join('<br><br>') + '</strong><span>info@ordertracker.com for more info</span>'
	}

	var getFont = function() {
	    var font = validString(widgetOptions.font) ? widgetOptions.font : 'Roboto'

	    return font
	}

	var getButtonIconClass = function() {
	    var icon = [
	    	'search',
	    	'link',
	    	'chevron-right',
	    	'long-arrow-right',
	    	'check',
	    	'check-circle',
	    	'eye',
	    	'sync',
	    	'copy',
	    	'globe',
	    	'map-marker-alt'
	    ].includes(widgetOptions.buttonIcon) ? 'fa-' + widgetOptions.buttonIcon : 'fa-map-marker-alt'

	    return icon
	}

	var track = function(number, callback) {
		var lang = widgetOptions.language &amp;&amp; widgetOptions.language.toUpperCase() === 'ORIGINAL' ? false : getLanguage()

		ajax({ 
			method: 'POST', 
			url: '//' + apiEndpoint + '/public/widget-track',
			body: {
				id: window.xprops.id,
				number: number,
				lang: lang,
				domain: getDomain()
			}
		}, function(data, status, error) {
			if (callback) {
				callback(data, status, error)
			}
		})
	}

	var ajax = function(data, cb) {
	    var req = new XMLHttpRequest()

	    req.onreadystatechange = function() {
	        if (req.readyState == 4) {
	            var res = req.response

	            if (typeof res === 'string' || res instanceof String) {
	                try {
	                    res = JSON.parse(res)
	                } catch(e) { }
	            }

	            if (req.status == 200) {
	                cb(res, req.status, null)
	            } else {
	                res = res.error &amp;&amp; res.error.message ? res.error.message : res

	                console.log(res)

	                cb(null, req.status, res)
	            }
	        }
	    }

	    req.open(data.method, data.url, true)
	    req.setRequestHeader('Content-Type', 'application/json')

	    if (data.body) {
	        req.send(JSON.stringify(data.body))
	    } else {
	        req.send()
	    }
	}

	var loadData = function(args, languageStrings) {
		if (!args.ctn.classList.contains('loading-data')) {
			var lang = widgetOptions.language &amp;&amp; widgetOptions.language.toUpperCase() === 'ORIGINAL' ? false : getLanguage()
			var tmpBtnHtml = args.button ? args.button.innerHTML : null
			var tBlock = document.querySelector('#widget #tracking-results')
			var sBlock = document.querySelector('#widget .status-block')
			var sLabel = document.querySelector('#widget .status-label')
			var ssLabel = document.querySelector('#widget .status-sublabel')
			var sProgress = document.querySelector('#widget .status-progress')
			var stepsBlock = document.querySelector('#widget [data-steps]')
			var delivered

			tBlock.classList.remove('active')
			sBlock.classList.remove('delivered')
			sBlock.classList.remove('shipped')
			sBlock.classList.remove('unknown')
			sProgress.style.width = '100%'

			args.ctn.classList.add('loading-data')

			if (args.button) {
				args.button.innerHTML = loadingIcon
			}

			track(args.number, function(data, status, error) {
				if (data) {
					var stepData = ''
					var customRegexes = args.customSemantics &amp;&amp; args.customSemantics.regexes ? args.customSemantics.regexes : []
					var customStatuses = args.customSemantics &amp;&amp; args.customSemantics.statuses ? args.customSemantics.statuses : {}

					if (data.status === 'unknown') {
						if (data.shopifyOrderExists || args.showFailoverEvent) {
							var customLabels = args.customSemantics &amp;&amp; args.customSemantics.labels &amp;&amp; args.customSemantics.labels.ecommerce ? args.customSemantics.labels.ecommerce : {}

							data.statusLabel = customLabels.label ? customLabels.label : data.ecommerceUnknownLabel
							data.statusSubLabel = customLabels.sublabel ? customLabels.sublabel : data.ecommerceUnknownSubLabel
							data.unknownMeaning = customLabels.meaning ? customLabels.meaning : data.ecommerceUnknownMeaning
							data.unknownLine = customLabels.line ? customLabels.line : data.ecommerceUnknownLine
							data.statusPlaceholder = customLabels.placeholder ? customLabels.placeholder : data.ecommerceUnknownPlaceholder
						} else {
							var customLabels = args.customSemantics &amp;&amp; args.customSemantics.labels &amp;&amp; args.customSemantics.labels.unknown ? args.customSemantics.labels.unknown : {}

							data.statusLabel = customLabels.label ? customLabels.label : data.statusLabel
							data.statusSubLabel = customLabels.sublabel ? customLabels.sublabel : data.statusSubLabel
							data.unknownMeaning = customLabels.meaning ? customLabels.meaning : data.unknownMeaning
							data.unknownLine = customLabels.line ? customLabels.line : data.unknownLine
							data.statusPlaceholder = customLabels.placeholder ? customLabels.placeholder : data.statusPlaceholder
						}
					} else {
						var customLabels = args.customSemantics &amp;&amp; args.customSemantics.labels &amp;&amp; args.customSemantics.labels[data.status] ? args.customSemantics.labels[data.status] : {}

						data.statusLabel = customLabels.label ? customLabels.label : data.statusLabel
						data.statusSubLabel = customLabels.sublabel ? customLabels.sublabel : data.statusSubLabel
					}

					sBlock.classList.add(data.status)
					sLabel.innerHTML = data.statusLabel
					ssLabel.innerHTML = data.statusSubLabel
					sProgress.style.width = data.statusProgressPercentage + '%'

					if (data.steps &amp;&amp; args.customEvents) {
						args.customEvents.forEach(function(ev) {
							var evDate = !isNaN(parseInt(ev.after)) &amp;&amp; data.shopifyOrderDate ? new Date(data.shopifyOrderDate) : null

							evDate = evDate &amp;&amp; data.steps.length ? new Date(data.steps[data.steps.length-1].time) : evDate

							if (evDate &amp;&amp; ev.sentence &amp;&amp; (typeof ev.sentence === 'string' || ev.sentence instanceof String) &amp;&amp; ev.sentence.split(' ').join('').length) {
								if (parseInt(ev.after) === 0) {
									evDate.setMinutes(evDate.getMinutes()+1)
								} else {
									evDate.setDate(evDate.getDate()+parseInt(ev.after))
								}

								if (new Date(evDate).getTime() &lt;= new Date().getTime()) {
									data.steps.push({
										courier: { 
											name: languageStrings.courierNamePlaceholder.toUpperCase(),
											slug: 'unknown-1'
										},
										humanReadableTime: languageStrings.humanDateFormat.split('OT_VAR_1').join(languageStrings.humanMonths[evDate.getUTCMonth()]).split('OT_VAR_2').join(evDate.getUTCDate()).split('OT_VAR_3').join(evDate.getUTCFullYear()),
										lines: [],
										meaning: ev.sentence.trim(),
										semanticStatus: 'IN_TRANSIT',
										time: evDate.toISOString()
									})
								}
							}
						})

						data.steps = data.steps.sort(function(a, b) {
						    return new Date(b.time) - new Date(a.time)
						})
					}

					if (data.steps &amp;&amp; data.steps.length) {
						var oneTo120 = []

						for (var i = 1; i &lt;= 120; i++) {
							oneTo120.push(i)
							oneTo120.push(i.toString())
						}
						
						if (oneTo120.includes(args.deliveryForecast) &amp;&amp; data.status === 'shipped') {
							var forecast = parseInt(parseInt(args.deliveryForecast)-data.daysInTransit)

							forecast = forecast &gt; 0 ? forecast : 1

							ssLabel.innerHTML = languageStrings.deliveryForecastPlaceholder.split('OT_VAR_1').join(forecast)
						}

						var noslug = 1

						data.couriers.forEach(function(courier) {
						    if (!courier.slug) {
						        courier.slug = 'unknown-' + noslug

						        noslug = noslug === 4 ? 1 : (noslug+1)
						    }                  
						})

						data.steps.forEach(function(step, i) {
						    data.couriers.forEach(function(courier) {
						        if (step.courier.name === courier.name) {
						            step.courier.slug = courier.slug
						        }
						    })

						    if (!args.showCustomClearanceDetails &amp;&amp; (step.semanticStatus === 'IN_CUSTOMS' || step.semanticStatus === 'IN_DESTINATION_DISTRICT')) {
						    	step.meaning = widgetConstants.statusPlaceholder[lang] ? widgetConstants.statusPlaceholder[lang] : widgetConstants.statusPlaceholder['EN']
						    }

						    if (customStatuses[step.semanticStatus.toLowerCase().split('_').join('')]) {
						    	step.meaning = customStatuses[step.semanticStatus.toLowerCase().split('_').join('')]
						    }

						    var meaning = '<span class="step-meaning">' + step.meaning + '</span>'
						    var lines = []

						    step.lines.forEach(function(line) {
						    	var excludeLine = false

						    	if (args.showTrackingDetails === 'noasian') {
						    		widgetConstants.asianRegexes.true.forEach(function(regex) {
						    			if (new RegExp(regex, 'i').test(line)) {
						    				excludeLine = true
						    			}
						    		})
						    	}

						    	if (!args.showCustomClearanceDetails &amp;&amp; (step.semanticStatus === 'IN_CUSTOMS' || step.semanticStatus === 'IN_DESTINATION_DISTRICT')) {
						    		widgetConstants.customsRegexes.true.forEach(function(regex) {
						    			if (new RegExp(regex, 'i').test(line)) {
						    				excludeLine = true
						    			}
						    		})
						    	}

						    	if (!excludeLine) {
						    		var replace = null

						    		customRegexes.forEach(function(regex) {
						    			if (new RegExp(regex.search, 'i').test(line)) {
						    				replace = regex.replace
						    			}
						    		})

						    		if (replace) {
						    			lines.push('<sub class="step-line">' + replace + '</sub>')
						    		} else {
						    			lines.push('<sub class="step-line">' + line + '</sub>')
						    		}
						    	}
						    })

						    if (i === (data.steps.length-1) &amp;&amp; args.shipmentOriginCountry) {
						    	lines = ['<sub class="step-line">' + args.shipmentOriginCountry + '</sub>']
						    }

						    var sday = step.humanReadableTime
						    var stime = humanDate(step.time).time
						    var extendStepBtn = lines.length &gt; 2  ? '<img class="extend-step-btn" src="./sdk_files/expand.svg">' : ''
						    var extendStepClass = lines.length &gt; 2  ? 'extendable-step' : ''
						    var elClasses = []
						    var displayedCourierName = step.courier.name

						    if (args.showCouriersDetails === 'none' || (args.showCouriersDetails === 'noasian' &amp;&amp; widgetConstants.asianCouriers.includes(step.courier.name))) {
						    	step.courier.slug = 'unknown-1'

						    	displayedCourierName = languageStrings.courierNamePlaceholder.toUpperCase()
						    }

						    if (args.showTrackingDetails === 'none') {
						    	extendStepBtn = ''
						    	extendStepClass = ''

						    	elClasses.push('hide-details')
						    }

						    if (extendStepClass.length) {
						    	elClasses.push(extendStepClass)
						    }

						    stepData += '<li class="&#39; + elClasses.join(&#39; &#39;) + &#39;"><div class="r load"><div><address><span class="courier-name"><span>' + displayedCourierName + '</span></span><span class="courier-time">' + sday + ' ' + stime + '</span>' + meaning + lines.join('') + extendStepBtn + '</address></div><div class="courier-img"><span><img src="./sdk_files/&#39; + step.courier.slug + &#39;.png" alt="&#39; + displayedCourierName + &#39;"></span></div></div></li>'
						})
					} else {
						var sday = data.todayHumanReadableTime
						var stime = humanDate().time

						stepData = '<li><div class="r load"><div><address><span class="courier-name"><span>' + data.statusPlaceholder + '</span></span><span class="courier-time">' + sday + ' ' + stime + '</span><span class="step-meaning">' + data.unknownMeaning + '</span><sub class="step-line">' + data.unknownLine + '</sub></address></div><div class="courier-img"><span><img src="./sdk_files/unknown-2.png" alt="&#39; + data.statusPlaceholder + &#39;"></span></div></div></li>'
					}

					stepsBlock.innerHTML = stepData

					var extSteps = document.querySelectorAll('.extendable-step')

					extSteps.forEach(function(p2) {
					    p2.addEventListener('click', function(e) {
					        if (p2.classList.contains('active')) {
					            p2.classList.remove('active')
					        } else {
					            p2.classList.add('active')
					        }
					    })
					})

					tBlock.classList.add('active')
				} else if (validString(error)) {
					throwErrors(error)
				} else {
					throwErrors('An unknown error occurred, please reload the page. If the problem persists contact-us at: info@ordertracker.com')
				}

				loading = false

				if (args.button) {
					args.button.innerHTML = tmpBtnHtml
				}
				
				if (args.trackingPrimaryColor) {
					var sStep = document.querySelectorAll('#widget .step-meaning')

					if (sLabel) {
						sLabel.style.color = args.trackingPrimaryColor
					}

					if (ssLabel) {
						ssLabel.style.color = args.trackingPrimaryColor
					}

					if (sStep) {
						sStep.forEach(function(el) {
							el.style.color = args.trackingPrimaryColor
						})
					}
				}

				if (args.trackingSecondaryColor) {
					var sLine = document.querySelectorAll('#widget .step-line')
					var sDate = document.querySelectorAll('#widget .courier-time')
					var sCourier = document.querySelectorAll('#widget .courier-name span')

					if (sLine) {
						sLine.forEach(function(el) {
							el.style.color = args.trackingSecondaryColor
						})
					}

					if (sDate) {
						sDate.forEach(function(el) {
							el.style.color = args.trackingSecondaryColor
						})
					}

					if (sCourier) {
						sCourier.forEach(function(el) {
							el.style.color = args.trackingSecondaryColor

							if (args.theme !== 'dark') {
								el.style.background = pSBC(0.9, args.trackingSecondaryColor) // 90% lighter
							}
						})
					}
				}

				if (args.trackingBarColor) {
					var sProgressDot = document.querySelector('#widget .status-progress span')

					if (sProgress) {
						sProgress.style.background = pSBC(0.7, args.trackingBarColor) // 80% lighter
					}

					if (sProgressDot) {
						sProgressDot.style.background = args.trackingBarColor
					}
				}

				if (args.courierLabel) {
					var sCourier = document.querySelectorAll('#widget .courier-name span')
					var sCourierImg = document.querySelectorAll('#widget .courier-img img')

					sCourier.forEach(function(el) {
						el.innerHTML = args.courierLabel
					})

					sCourierImg.forEach(function(el) {
						el.setAttribute('src', '/app/template/img/couriers/unknown-1.png')
					})
				}

				args.ctn.classList.remove('loading-data')
				document.querySelector('#widget .loading-block').classList.add('inactive')
			})
		}
	}

	var configId = window.xprops.id ? window.xprops.id : getDomain()

	ajax({
		method: 'GET', 
		url: '/app/template/dashboard/img/loading.svg'
	}, function(data, status, error) {
		if (!error) {
			loadingIcon = data
		}

		ajax({
			method: 'GET', 
			url: '//' + apiEndpoint + '/public/widget-configuration?id=' + configId
		}, function(data, status, error) {
			if (validString(error)) {
				widgetErrors.push(error)
			} else if (error &amp;&amp; !validString(error)) {
				widgetErrors.push('An unknown error occurred, please reload the page. If the problem persists contact-us at: info@ordertracker.com')
			}

			if (widgetErrors.length) {
				throwErrors(widgetErrors)
			} else {
				if (data.ok) {
					Object.keys(ordertrackerProperties).forEach(function(key) {
						if (window.xprops[key]) {
							widgetOptions[key] = window.xprops[key]
						}
					})
				} else {
					widgetOptions = data

					if (window.xprops.trackingNumber) {
						widgetOptions.trackingNumber = window.xprops.trackingNumber
					}
				}

				formsAnimation()

				ajax({
					method: 'GET', 
					url: '//' + apiEndpoint + '/public/widget-constants'
				}, function(data, status, error) {
					widgetConstants = data

					var size = validString(widgetOptions.size) &amp;&amp; ['large', 'medium', 'small'].includes(widgetOptions.size.toLowerCase()) ? widgetOptions.size.toLowerCase() : 'large'
					var language = getLanguage()
					var languageStrings = getStrings(language, widgetOptions.shopify)
					var theme = validString(widgetOptions.theme) &amp;&amp; widgetOptions.theme.toLowerCase() === 'dark' ? 'dark' : 'light'
					var shape = validString(widgetOptions.shape) &amp;&amp; widgetOptions.shape.toLowerCase() === 'geometric' ? 'geometric' : 'rounded'
					var buttonColor = validString(widgetOptions.buttonColor) &amp;&amp; /^#[0-9a-zA-Z]+$/.test(widgetOptions.buttonColor) ? widgetOptions.buttonColor : null
					var buttonLabelColor = validString(widgetOptions.buttonLabelColor) &amp;&amp; /^#[0-9a-zA-Z]+$/.test(widgetOptions.buttonLabelColor) ? widgetOptions.buttonLabelColor : null
					var inputColor = validString(widgetOptions.inputColor) &amp;&amp; /^#[0-9a-zA-Z]+$/.test(widgetOptions.inputColor) ? widgetOptions.inputColor : null
					var inputBorder = validString(widgetOptions.inputBorder) &amp;&amp; widgetOptions.inputBorder.toLowerCase() === 'thin' ? 'thin' : 'thick'
					var trackingPrimaryColor = validString(widgetOptions.trackingPrimaryColor) &amp;&amp; /^#[0-9a-zA-Z]+$/.test(widgetOptions.trackingPrimaryColor) ? widgetOptions.trackingPrimaryColor : null
					var trackingSecondaryColor = validString(widgetOptions.trackingSecondaryColor) &amp;&amp; /^#[0-9a-zA-Z]+$/.test(widgetOptions.trackingSecondaryColor) ? widgetOptions.trackingSecondaryColor : null
					var trackingBarColor = validString(widgetOptions.trackingBarColor) &amp;&amp; /^#[0-9a-zA-Z]+$/.test(widgetOptions.trackingBarColor) ? widgetOptions.trackingBarColor : null
					var deliveryForecastClass = widgetOptions.deliveryForecast === false || widgetOptions.deliveryForecast === 'false' ? 'hide-estimation' : 'show-estimation'
					var showFailoverEvent = widgetOptions.showFailoverEvent === true &amp;&amp; widgetOptions.showFailoverEvent === 'true'
					var showCustomClearanceDetails = widgetOptions.showCustomClearanceDetails !== false &amp;&amp; widgetOptions.showCustomClearanceDetails !== 'false'
					var displayForm = widgetOptions.trackingNumber ? 'hide-form' : 'show-form'
					var customCss = widgetOptions.customCss ? widgetOptions.customCss : null
					var ctn = document.getElementById('widget')
					var fontAsset = document.createElement('link')
							
					fontAsset.setAttribute('rel', 'stylesheet')
					fontAsset.setAttribute('type', 'text/css')
					fontAsset.setAttribute('href', 'https://fonts.googleapis.com/css?family=' + getFont().split(' ').join('+'))
					document.querySelector('head').appendChild(fontAsset)
					document.querySelector('html').style.fontFamily = '"' + getFont() + '", "serif"'
					document.querySelector('body').style.fontFamily = '"' + getFont() + '", "serif"'

					var form = document.querySelector('#widget form')
					var fieldset = document.querySelector('#widget fieldset')
					var input = document.querySelector('#widget input')
					var inputLabel = document.querySelector('#widget label')
					var button = document.querySelector('#widget a')
					var buttonLabel = widgetOptions.buttonLabel || languageStrings.buttonLabelShort
					var inputPlaceholder = window.innerWidth &lt; 550 ? languageStrings.inputPlaceholderShort : languageStrings.inputPlaceholder

					var warnWrongNumber = function() {
						fieldset.classList.add('wrong')
						setTimeout(function() {
							fieldset.classList.remove('wrong')
						}, 750)
					}

					if (widgetOptions.trackingNumber) {
						loadData({
							ctn: ctn, 
							number: widgetOptions.trackingNumber, 
							button: button, 
							showCouriersDetails: widgetOptions.showCouriersDetails, 
							showTrackingDetails: widgetOptions.showTrackingDetails,
							showFailoverEvent: showFailoverEvent,
					    	showCustomClearanceDetails: showCustomClearanceDetails,
					    	trackingPrimaryColor: trackingPrimaryColor,
					    	trackingSecondaryColor: trackingSecondaryColor,
					    	trackingBarColor: trackingBarColor,
					    	theme: theme,
					    	deliveryForecast: widgetOptions.deliveryForecast,
					    	courierLabel: widgetOptions.courierLabel,
					    	shipmentOriginCountry: widgetOptions.shipmentOriginCountry,
					    	customSemantics: widgetOptions.customSemantics,
					    	customEvents: widgetOptions.customEvents
						}, languageStrings)
					}

					form.addEventListener('submit', function(e) {
						e.preventDefault()
					})

					input.addEventListener('keyup', function(e) {
					    var number = input.value.trim().toUpperCase()

					    fieldset.classList.remove('wrong')

					    if (e.keyCode == '13') {
					    	e.preventDefault()

						    if (validNumber(number, widgetOptions.shopify)) {
						    	loadData({ 
						    		ctn: ctn, 
						    		number: number, 
						    		button: button, 
						    		showCouriersDetails: widgetOptions.showCouriersDetails, 
						    		showTrackingDetails: widgetOptions.showTrackingDetails,
						    		showFailoverEvent: showFailoverEvent,
					    			showCustomClearanceDetails: showCustomClearanceDetails,
					    			trackingPrimaryColor: trackingPrimaryColor,
					    			trackingSecondaryColor: trackingSecondaryColor,
					    			trackingBarColor: trackingBarColor,
					    			theme: theme,
					    			deliveryForecast: widgetOptions.deliveryForecast,
					    			courierLabel: widgetOptions.courierLabel,
					    			shipmentOriginCountry: widgetOptions.shipmentOriginCountry,
					    			customSemantics: widgetOptions.customSemantics,
					    			customEvents: widgetOptions.customEvents
						    	}, languageStrings)
						    } else {
						    	warnWrongNumber()
						    }
						}
					})

					button.addEventListener('click', function(e) {
					    e.preventDefault()
					    fieldset.classList.remove('wrong')

					    var number = input.value.trim().toUpperCase()

					    if (validNumber(number, widgetOptions.shopify)) {
					    	loadData({ 
					    		ctn: ctn, 
					    		number: number, 
					    		button: button, 
					    		showCouriersDetails: widgetOptions.showCouriersDetails, 
					    		showTrackingDetails: widgetOptions.showTrackingDetails,
					    		showFailoverEvent: showFailoverEvent,
					    		showCustomClearanceDetails: showCustomClearanceDetails,
					    		trackingPrimaryColor: trackingPrimaryColor,
					    		trackingSecondaryColor: trackingSecondaryColor,
					    		trackingBarColor: trackingBarColor,
					    		theme: theme,
					    		deliveryForecast: widgetOptions.deliveryForecast,
					    		courierLabel: widgetOptions.courierLabel,
					    		shipmentOriginCountry: widgetOptions.shipmentOriginCountry,
					    		customSemantics: widgetOptions.customSemantics,
					    		customEvents: widgetOptions.customEvents
					    	}, languageStrings)
					    } else {
					    	warnWrongNumber()
					    }
					})

					fieldset.classList.add(inputBorder)
					inputLabel.innerHTML = widgetOptions.inputPlaceholder || inputPlaceholder
					button.innerHTML = '<span class="btn-ctn"><i class="fal &#39; + getButtonIconClass() + &#39;"></i><span>' + buttonLabel + '</span></span>'

					if (buttonColor) {
					    button.style.background = buttonColor
					}

					if (buttonLabelColor) {
					    button.style.color = buttonLabelColor
					    loadingIcon = loadingIcon.split('OT_VAR_1').join(buttonLabelColor)
					} else {
					    loadingIcon = loadingIcon.split('OT_VAR_1').join('#ffffff')
					}

					if (inputColor) {
					    fieldset.style.borderColor = inputColor
					    inputLabel.style.color = inputColor
					}

					if (customCss) {
						var style = document.createElement('style')

						style.innerHTML = customCss

						document.getElementsByTagName('head')[0].appendChild(style)
					}

					ctn.classList.add('active', size, theme, shape, deliveryForecastClass, displayForm)
				})
			}
		})
	})
}</n;r++)e[r]=arguments[r];return></r;i++)o[i-1]=arguments[i];return></e;o++)t[o-1]=arguments[o];var></u.length;d++){var></t.length;r++){var></unknown></e.length;r++){var></arguments.length;e++){var><scribe-shadow id="crxjs-ext" style="position: fixed; width: 0px; height: 0px; top: 0px; left: 0px; z-index: 2147483647; overflow: visible;"><template shadowrootmode="open"><div id="root-scribe-elem" style="position: fixed; width: 0px; height: 0px; top: 0px; left: 0px; overflow: visible; color: rgb(15, 23, 42);"></div><link rel="stylesheet" href="chrome-extension://okfkdaglfjjjfefdcppliegebpoegaii/assets/style.css"></template></scribe-shadow></body></html>