(self.AMP=self.AMP||[]).push({n:"amp-form",v:"1902081532110",f:(function(AMP,_){
var l,aa="function"==typeof Object.create?Object.create:function(a){function b(){}b.prototype=a;return new b},ba;if("function"==typeof Object.setPrototypeOf)ba=Object.setPrototypeOf;else{var ca;a:{var da={a:!0},ea={};try{ea.__proto__=da;ca=ea.a;break a}catch(a){}ca=!1}ba=ca?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}var fa=ba;
function n(a,b){a.prototype=aa(b.prototype);a.prototype.constructor=a;if(fa)fa(a,b);else for(var c in b)if("prototype"!=c)if(Object.defineProperties){var d=Object.getOwnPropertyDescriptor(b,c);d&&Object.defineProperty(a,c,d)}else a[c]=b[c];a.va=b.prototype};function ga(){var a,b;this.promise=new Promise(function(c,d){a=c;b=d});this.resolve=a;this.reject=b}function ha(a){return new Promise(function(b){b(a())})}function ia(){var a,b,c;this.Z=new Promise(function(a,d){b=a;c=d});this.ka=b;this.ia=c;this.R=0;if(a)for(var d=0;d<a.length;d++)this.add(a[d])}ia.prototype.add=function(a){var b=this,c=++this.R;Promise.resolve(a).then(function(a){b.R===c&&b.ka(a)},function(a){b.R===c&&b.ia(a)});return this.Z};
ia.prototype.then=function(a,b){return this.Z.then(a,b)};/*
 https://mths.be/cssescape v1.5.1 by @mathias | MIT license */
var ja=/(\0)|^(-)$|([\x01-\x1f\x7f]|^-?[0-9])|([\x80-\uffff0-9a-zA-Z_-]+)|[^]/g;function ka(a,b,c,d,e){return e?e:b?"\ufffd":d?a.slice(0,-1)+"\\"+a.slice(-1).charCodeAt(0).toString(16)+" ":"\\"+a};function la(a,b){b=void 0===b?"":b;try{return decodeURIComponent(a)}catch(c){return b}};var ma=/(?:^[#?]?|&)([^=&]+)(?:=([^&]*))?/g;var na=Object.prototype.toString;function oa(a){return a?Array.prototype.slice.call(a):[]}function pa(a){return"[object Object]"===na.call(a)};self.log=self.log||{user:null,dev:null,userForEmbed:null};var p=self.log;function q(){if(!p.user)throw Error("failed to call initLogConstructor");return p.user}function r(){if(p.dev)return p.dev;throw Error("failed to call initLogConstructor");}function t(a,b,c,d){q().assert(a,b,c,d,void 0,void 0,void 0,void 0,void 0,void 0,void 0)};var qa=Object.prototype.hasOwnProperty;function u(){var a,b=Object.create(null);a&&Object.assign(b,a);return b}function v(a){return a||{}}
function ra(a,b){var c=void 0===c?10:c;var d=[],e=[];e.push({t:a,s:b,d:0});for(a={};0<e.length;){b=e.shift();a.t=b.t;a.s=b.s;a.d=b.d;if(d.includes(a.s))throw Error("Source object has a circular reference.");d.push(a.s);a.t!==a.s&&(a.d>c?Object.assign(a.t,a.s):(Object.keys(a.s).forEach(function(a){return function(b){var c=a.s[b];if(qa.call(a.t,b)){var d=a.t[b];if(pa(c)&&pa(d)){e.push({t:d,s:c,d:a.d+1});return}}a.t[b]=c}}(a)),a={s:a.s,t:a.t,d:a.d}))}};function ta(a,b){return b.length>a.length?!1:0==a.lastIndexOf(b,0)};var w;function ua(a){var b="> [i-amphtml-rendered]";return b.split(",").map(function(b){return a+" "+b}).join(",")}function va(a,b){for(var c=[],d=a.parentElement;d;d=d.parentElement)b(d)&&c.push(d);return c}function wa(a){var b="fieldset";b=b.toUpperCase();return va(a,function(a){return a.tagName==b})}function x(a,b){for(var c=a.length,d=0;d<c;d++)b(a[d],d)};function xa(a,b){return a.hasAttribute("verify-xhr")?new ya(a,b):new za(a)}function y(a){this.h=a}y.prototype.onCommit=function(){Aa(this);return Ba(this)?this.ca():Promise.resolve({updatedElements:[],errors:[]})};y.prototype.ca=function(){return Promise.resolve({updatedElements:[],errors:[]})};
function Ba(a){a=a.h.elements;for(var b=0;b<a.length;b++){var c=a[b];if(!c.disabled)switch(c.type){case "select-multiple":case "select-one":c=c.options;for(var d=0;d<c.length;d++)if(c[d].selected!==c[d].defaultSelected)return!0;break;case "checkbox":case "radio":if(c.checked!==c.defaultChecked)return!0;break;default:if(c.value!==c.defaultValue)return!0}}return!1}function Aa(a){(a=a.h.elements)&&x(a,function(a){a.setCustomValidity("")})}function za(a){y.apply(this,arguments)}n(za,y);
function ya(a,b){this.h=a;this.L=b;this.I=null;this.Y=[]}n(ya,y);ya.prototype.ca=function(){var a=this,b=this.L().then(function(){return[]},function(a){return Ca(a)});return Da(this,b).then(function(b){return Ea(a,b)})};function Da(a,b){if(!a.I){a.I=new ia;var c=function(){return a.I=null};a.I.then(c,c)}return a.I.add(b)}
function Ea(a,b){function c(a){return b.every(function(b){return a.name!==b.name})}var d=[],e=a.Y;a.Y=b;for(var g=0;g<b.length;g++){var f=b[g],h=q().assertString(f.name,"Verification errors must have a name property");f=q().assertString(f.message,"Verification errors must have a message property");h=q().assertElement(a.h.querySelector('[name="'+h+'"]'),"Verification error name property must match a field name");h.checkValidity()&&(h.setCustomValidity(f),d.push(h))}var k=e.filter(c).map(function(b){return a.h.querySelector('[name="'+
b.name+'"]')});return{updatedElements:d.concat(k),errors:b}}function Ca(a){return(a=a.response)?a.json().then(function(a){return a.verifyErrors||[]},function(){return[]}):Promise.resolve([])};function Fa(){this.j=null}l=Fa.prototype;l.add=function(a){var b=this;this.j||(this.j=[]);this.j.push(a);return function(){b.remove(a)}};l.remove=function(a){this.j&&(a=this.j.indexOf(a),-1<a&&this.j.splice(a,1))};l.removeAll=function(){this.j&&(this.j.length=0)};l.fire=function(a){if(this.j)for(var b=this.j,c=0;c<b.length;c++)(0,b[c])(a)};l.getHandlerCount=function(){return this.j?this.j.length:0};function Ga(){this.X=new Fa}Ga.prototype.beforeSubmit=function(a){return this.X.add(a)};Ga.prototype.fire=function(a){this.X.fire(a)};function A(){var a=100;this.fa=a;this.P=this.W=0;this.K=Object.create(null)}A.prototype.has=function(a){return!!this.K[a]};A.prototype.get=function(a){var b=this.K[a];if(b)return b.access=++this.P,b.payload};A.prototype.put=function(a,b){this.has(a)||this.W++;this.K[a]={payload:b,access:this.P};if(!(this.W<=this.fa)){r().warn("lru-cache","Trimming LRU cache");a=this.K;var c=this.P+1,d;for(d in a){var e=a[d].access;if(e<c){c=e;var g=d}}void 0!==g&&(delete a[g],this.W--)}};var B=self.AMP_CONFIG||{},Ha={thirdParty:B.thirdPartyUrl||"https://3p.ampproject.net",thirdPartyFrameHost:B.thirdPartyFrameHost||"ampproject.net",thirdPartyFrameRegex:("string"==typeof B.thirdPartyFrameRegex?new RegExp(B.thirdPartyFrameRegex):B.thirdPartyFrameRegex)||/^d-\d+\.ampproject\.net$/,cdn:B.cdnUrl||"https://cdn.ampproject.org",cdnProxyRegex:("string"==typeof B.cdnProxyRegex?new RegExp(B.cdnProxyRegex):B.cdnProxyRegex)||/^https:\/\/([a-zA-Z0-9_-]+\.)?cdn\.ampproject\.org$/,localhostRegex:/^https?:\/\/localhost(:\d+)?$/,
errorReporting:B.errorReportingUrl||"https://amp-error-reporting.appspot.com/r",localDev:B.localDev||!1};var Ia=v({c:!0,v:!0,a:!0,ad:!0}),Ja,Ka,La=/[?&]amp_js[^&]*/,Ma=/[?&]amp_gsa[^&]*/,Na=/[?&]amp_r[^&]*/,Oa=/[?&]amp_kit[^&]*/,Pa=/[?&]usqp[^&]*/;
function C(a){var b;Ja||(Ja=self.document.createElement("a"),Ka=self.UrlCache||(self.UrlCache=new A));var c=b?null:Ka,d=Ja;if(c&&c.has(a))a=c.get(a);else{d.href=a;d.protocol||(d.href=d.href);var e={href:d.href,protocol:d.protocol,host:d.host,hostname:d.hostname,port:"0"==d.port?"":d.port,pathname:d.pathname,search:d.search,hash:d.hash,origin:null};"/"!==e.pathname[0]&&(e.pathname="/"+e.pathname);if("http:"==e.protocol&&80==e.port||"https:"==e.protocol&&443==e.port)e.port="",e.host=e.hostname;e.origin=
d.origin&&"null"!=d.origin?d.origin:"data:"!=e.protocol&&e.host?e.protocol+"//"+e.host:e.href;c&&c.put(a,e);a=e}return a}function Ra(a,b,c){if(!b)return a;var d=a.split("#",2),e=d[0].split("?",2),g=e[0]+(e[1]?c?"?"+b+"&"+e[1]:"?"+e[1]+"&"+b:"?"+b);return g+=d[1]?"#"+d[1]:""}
function Sa(a){var b=[],c;for(c in a){var d=a[c];if(null!=d)if(Array.isArray(d))for(var e=0;e<d.length;e++){var g=d[e];b.push(encodeURIComponent(c)+"="+encodeURIComponent(g))}else e=d,b.push(encodeURIComponent(c)+"="+encodeURIComponent(e))}return b.join("&")}
function Ta(a){"string"==typeof a&&(a=C(a));var b=a;"string"==typeof b&&(b=C(b));if(!Ha.cdnProxyRegex.test(b.origin))return a.href;b=a.pathname.split("/");t(Ia[b[1]],"Unknown path prefix in url %s",a.href);var c=b[2],d="s"==c?"https://"+decodeURIComponent(b[3]):"http://"+decodeURIComponent(c);t(0<d.indexOf("."),"Expected a . in origin %s",d);b.splice(1,"s"==c?3:2);b=d+b.join("/");var e;e=(e=a.search)&&"?"!=e?(e=e.replace(La,"").replace(Ma,"").replace(Na,"").replace(Oa,"").replace(Pa,"").replace(/^[?&]/,
""))?"?"+e:"":"";return b+e+(a.hash||"")};function D(a,b){var c,d=a.ownerDocument.defaultView,e=d!=(d.__AMP_TOP||d);if(e){if(Ua(d,b)){var g=E(d,b);if(g)return g}if(!c)return null}a=F(a);a=G(a);return Ua(a,b)?E(a,b):null}function H(a,b){a=a.__AMP_TOP||a;return E(a,b)}function I(a,b){var c=F(a);c=G(c);return E(c,b)}function Va(a,b){return Wa(G(a),b)}function F(a){return a.nodeType?H((a.ownerDocument||a).defaultView,"ampdoc").getAmpDoc(a):a}function G(a){a=F(a);return a.isSingleDoc()?a.win:a}
function E(a,b){Ua(a,b);var c=Xa(a);a=c[b];a.obj||(a.obj=new a.ctor(a.context),a.ctor=null,a.context=null,a.resolve&&a.resolve(a.obj));return a.obj}function Wa(a,b){var c=Xa(a)[b];if(c){if(c.promise)return c.promise;E(a,b);return c.promise=Promise.resolve(c.obj)}return null}function Xa(a){var b=a.services;b||(b=a.services={});return b}function Ua(a,b){a=a.services&&a.services[b];return!(!a||!a.ctor&&!a.obj)};function Ya(a,b,c){var d=Va(a,b);if(d)return d;var e=F(a);return e.whenBodyAvailable().then(function(){var a=e.win;var b=e.win.document.head;if(b){var d=[];b=b.querySelectorAll("script[custom-element]");for(var k=0;k<b.length;k++)d.push(b[k].getAttribute("custom-element"))}else d=[];a=d.includes(c)?H(a,"extensions").waitForExtension(a,c):Promise.resolve();return a}).then(function(){var d=e.win;if(d.ampExtendedElements&&d.ampExtendedElements[c]){d=G(a);var f=Wa(d,b);if(!f){var h=new ga;f=h.promise;
h=h.resolve;Xa(d)[b]={obj:null,promise:f,resolve:h,context:null,ctor:null}}d=f}else d=null;return d})};function J(a){var b=a.elements;a=a.ownerDocument;for(var c={},d=/^(?:input|select|textarea|button)$/i,e=/^(?:button|image|file|reset)$/i,g=/^(?:checkbox|radio)$/i,f={},h=0;h<b.length;f={name:f.name},h++){var k=b[h],m=k,z=m.checked;f.name=m.name;var X=m.multiple,Eb=m.options,Qa=m.tagName,sa=m.type;m=m.value;!f.name||Za(k)||!d.test(Qa)||e.test(sa)||g.test(sa)&&!z||(void 0===c[f.name]&&(c[f.name]=[]),X?x(Eb,function(a){return function(b){b.selected&&c[a.name].push(b.value)}}(f)):("submit"!=sa&&"BUTTON"!=
Qa||k==a.activeElement)&&c[f.name].push(m))}Object.keys(c).forEach(function(a){0==c[a].length&&delete c[a]});return c}function Za(a){if(a.disabled)return!0;a=wa(a);for(var b=0;b<a.length;b++)if(a[b].disabled)return!0;return!1};function $a(a,b){var c=H(a,"platform");return c.isIos()&&11==c.getMajorVersion()?new ab(b):FormData.prototype.entries&&FormData.prototype.delete?new K(b):new L(b)}function L(a){this.o=a?J(a):u()}L.prototype.append=function(a,b){var c=String(a);this.o[c]=this.o[c]||[];this.o[c].push(String(b))};L.prototype.delete=function(a){delete this.o[a]};
L.prototype.entries=function(){var a=this,b=[];Object.keys(this.o).forEach(function(c){a.o[c].forEach(function(a){return b.push([c,a])})});var c=0;return{next:function(){return c<b.length?{value:b[c++],done:!1}:{value:void 0,done:!0}}}};L.prototype.getFormData=function(){var a=this,b=new FormData;Object.keys(this.o).forEach(function(c){a.o[c].forEach(function(a){return b.append(c,a)})});return b};function K(a){this.w=new FormData(a)}K.prototype.append=function(a,b){this.w.append(a,b)};
K.prototype.delete=function(a){this.w.delete(a)};K.prototype.entries=function(){return this.w.entries()};K.prototype.getFormData=function(){return this.w};function ab(a){K.call(this,a);var b=this;a&&x(a.elements,function(a){"file"==a.type&&0==a.files.length&&(b.w.delete(a.name),b.w.append(a.name,new Blob([]),""))})}n(ab,K);ab.prototype.append=function(a,b,c){b&&"object"==typeof b&&""==b.name&&0==b.size?this.w.append(a,new Blob([]),c||""):this.w.append(a,b)};var bb=["GET","POST"];
function cb(a,b){t(pa(a),"Object expected: %s",a);var c="document"==b;if(!c)return new Response(a.body,a.init);var d=u(),e={status:200,statusText:"OK",getResponseHeader:function(a){return d[String(a).toLowerCase()]||null}};if(a.init){var g=a.init;Array.isArray(g.headers)&&g.headers.forEach(function(a){var b=a[0],c=a[1];d[String(b).toLowerCase()]=String(c)});g.status&&(e.status=parseInt(g.status,10));g.statusText&&(e.statusText=String(g.statusText))}return new Response(a.body?String(a.body):"",e)}
;function M(a,b){var c="amp-form";this.F=a;this.m=b;this.la=c}M.prototype.isSupported=function(){var a=this.F.ampdoc;return a.isSingleDoc()&&a.getRootNode().documentElement.hasAttribute("allow-viewer-render-template")?this.F.hasCapability("viewerRenderTemplate"):!1};M.prototype.fetchAndRenderTemplate=function(a,b,c,d){c=void 0===c?null:c;d=void 0===d?{}:d;var e;c||(e=this.m.maybeFindTemplate(a));return this.F.sendMessageAwaitResponse("viewerRenderTemplate",db(this,b,e,c,d))};
M.prototype.renderTemplate=function(a,b){if(this.isSupported()){t("string"===typeof b.html,"Server side html response must be defined");var c=this.m.findAndSetHtmlForTemplate(a,b.html)}else c=Array.isArray(b)?this.m.findAndRenderTemplateArray(a,b):this.m.findAndRenderTemplate(a,b);return c};
function db(a,b,c,d,e){e=void 0===e?{}:e;var g=v({type:a.la}),f="successTemplate",h=d&&d[f]?d[f]:c;h&&(g[f]={type:"amp-mustache",payload:h.innerHTML});var k="errorTemplate",m=d&&d[k]?d[k]:null;m&&(g[k]={type:"amp-mustache",payload:m.innerHTML});e&&Object.assign(g,e);a=b.xhrUrl;c=b.fetchOpt;b=Object.assign({},c);if((d=c.body)&&"function"==typeof d.getFormData){c=c.body;b.headers["Content-Type"]="multipart/form-data;charset=utf-8";c=c.entries();d=[];for(e=c.next();!e.done;e=c.next())d.push(e.value);
b.body=d}return v({originalRequest:{input:a,init:b},ampComponent:g})}M.prototype.verifySsrResponse=function(a,b,c){b=cb(b,c.fetchOpt.responseType);c=c.fetchOpt;(b=b.headers.get("AMP-Access-Control-Allow-Source-Origin"))?(a=C(Ta(a.location.href)).origin,t(b==a,"Returned AMP-Access-Control-Allow-Source-Origin is not equal to the current: "+b+(" vs "+a))):c.requireAmpResponseSourceOrigin&&t(!1,"Response must contain the AMP-Access-Control-Allow-Source-Origin header")};function eb(a,b,c,d){var e={detail:c};Object.assign(e,d);if("function"==typeof a.CustomEvent)return new a.CustomEvent(b,e);a=a.document.createEvent("CustomEvent");a.initCustomEvent(b,!!e.bubbles,!!e.cancelable,c);return a};var N,fb="Webkit webkit Moz moz ms O o".split(" ");function gb(a,b){void 0===b&&(b=a.hasAttribute("hidden"));b?a.removeAttribute("hidden"):a.setAttribute("hidden","")};function O(a,b){this.V=b;this.pa=I(a,"viewport");this.da=H(a.win,"vsync");this.T=null;this.S="";this.N=!1;this.C=a.win.document.createElement("div");gb(this.C,!1);this.C.classList.add("i-amphtml-validation-bubble");this.C.__BUBBLE_OBJ=this;a.getBody().appendChild(this.C)}O.prototype.isActiveOn=function(a){return this.N&&a==this.T};O.prototype.hide=function(){this.N&&(this.N=!1,this.T=null,this.S="",this.da.run({measure:void 0,mutate:hb},{bubbleElement:this.C}))};
O.prototype.show=function(a,b){if(!this.isActiveOn(a)||b!=this.S){this.N=!0;this.T=a;this.S=b;var c={message:b,targetElement:a,bubbleElement:this.C,viewport:this.pa,id:this.V};this.da.run({measure:ib,mutate:jb},c)}};function hb(a){a.bubbleElement.removeAttribute("aria-alert");a.bubbleElement.removeAttribute("role");for(var b=a.bubbleElement;b.firstChild;)b.removeChild(b.firstChild);gb(a.bubbleElement,!1)}function ib(a){a.targetRect=a.viewport.getLayoutRect(a.targetElement)}
function jb(a){for(var b=a.bubbleElement;b.firstChild;)b.removeChild(b.firstChild);var c=a.bubbleElement.ownerDocument.createElement("div");c.id="bubble-message-"+a.id;c.textContent=a.message;a.bubbleElement.setAttribute("aria-labeledby",c.id);a.bubbleElement.setAttribute("role","alert");a.bubbleElement.setAttribute("aria-live","assertive");a.bubbleElement.appendChild(c);gb(a.bubbleElement,!0);b=a.bubbleElement;a={top:a.targetRect.top-10+"px",left:a.targetRect.left+a.targetRect.width/2+"px"};for(var d in a){var e=
b,g=a[d];var f=e.style;var h=d;if(ta(h,"--"))f=h;else{N||(N=u());var k=N[h];if(!k){k=h;if(void 0===f[h]){var m=h.charAt(0).toUpperCase()+h.slice(1);b:{for(var z=0;z<fb.length;z++){var X=fb[z]+m;if(void 0!==f[X]){m=X;break b}}m=""}void 0!==f[m]&&(k=m)}N[h]=k}f=k}f&&(e.style[f]=g)}};var kb,lb,mb=0;function P(a){this.form=a;this.ampdoc=F(a);this.resources=I(a,"resources");this.root=this.ampdoc.getRootNode();this.M=null}l=P.prototype;l.report=function(){};l.onBlur=function(){};l.onInput=function(){};l.inputs=function(){return this.form.querySelectorAll("input,select,textarea")};
l.checkInputValidity=function(a){if("TEXTAREA"===a.tagName&&a.hasAttribute("pattern")&&(a.checkValidity()||"Please match the requested format."===a.validationMessage)){var b=a.getAttribute("pattern"),c=new RegExp("^"+b+"$","m"),d=c.test(a.value);a.setCustomValidity(d?"":"Please match the requested format.")}return a.checkValidity()};l.checkFormValidity=function(a){nb(this,a);return a.checkValidity()};l.reportFormValidity=function(a){nb(this,a);return a.reportValidity()};
function nb(a,b){b.querySelectorAll("textarea").forEach(function(b){return a.checkInputValidity(b)})}l.fireValidityEventIfNecessary=function(){var a=this.M;this.M=this.checkFormValidity(this.form);if(a!==this.M){var b=eb(this.form.ownerDocument.defaultView,this.M?"valid":"invalid",null,{bubbles:!0});this.form.dispatchEvent(b)}};function ob(a){P.apply(this,arguments)}n(ob,P);ob.prototype.report=function(){this.reportFormValidity(this.form);this.fireValidityEventIfNecessary()};
function Q(a){P.call(this,a);var b="i-amphtml-validation-bubble-"+mb++;this.H=new O(this.ampdoc,b)}n(Q,P);Q.prototype.report=function(){for(var a=this.inputs(),b=0;b<a.length;b++)if(!this.checkInputValidity(a[b])){a[b].focus();this.H.show(a[b],a[b].validationMessage);break}this.fireValidityEventIfNecessary()};Q.prototype.onBlur=function(a){"submit"!=a.target.type&&this.H.hide()};
Q.prototype.onInput=function(a){a=a.target;this.H.isActiveOn(a)&&(this.checkInputValidity(a)?(a.removeAttribute("aria-invalid"),this.H.hide()):(a.setAttribute("aria-invalid","true"),this.H.show(a,a.validationMessage)))};function R(a){P.call(this,a)}n(R,P);l=R.prototype;l.reportInput=function(a){var b=pb(a);b&&this.showValidationFor(a,b)};l.hideAllValidations=function(){for(var a=this.inputs(),b=0;b<a.length;b++)this.hideValidationFor(a[b])};
l.getValidationFor=function(a,b){if(!a.id)return null;"TEXTAREA"===a.tagName&&(b="patternMismatch");var c="__AMP_VALIDATION_"+b;c in a||(a[c]=this.root.querySelector("[visible-when-invalid="+b+"]"+("[validation-for="+a.id+"]")));return a[c]};
l.showValidationFor=function(a,b){var c=this.getValidationFor(a,b);c&&(c.textContent.trim()||(c.textContent=a.validationMessage),a.__AMP_VISIBLE_VALIDATION=c,this.resources.mutateElement(a,function(){return a.setAttribute("aria-invalid","true")}),this.resources.mutateElement(c,function(){return c.classList.add("visible")}))};
l.hideValidationFor=function(a){var b=this.getVisibleValidationFor(a);b&&(delete a.__AMP_VISIBLE_VALIDATION,this.resources.mutateElement(a,function(){return a.removeAttribute("aria-invalid")}),this.resources.mutateElement(b,function(){return b.classList.remove("visible")}))};l.getVisibleValidationFor=function(a){return a.__AMP_VISIBLE_VALIDATION};l.shouldValidateOnInteraction=function(){throw Error("Not Implemented");};
l.onInteraction=function(a){a=a.target;var b=!!a.checkValidity&&this.shouldValidateOnInteraction(a);this.hideValidationFor(a);b&&!this.checkInputValidity(a)&&this.reportInput(a)};l.onBlur=function(a){this.onInteraction(a)};l.onInput=function(a){this.onInteraction(a)};function qb(a){R.apply(this,arguments)}n(qb,R);qb.prototype.report=function(){this.hideAllValidations();for(var a=this.inputs(),b=0;b<a.length;b++)if(!this.checkInputValidity(a[b])){this.reportInput(a[b]);a[b].focus();break}this.fireValidityEventIfNecessary()};
qb.prototype.shouldValidateOnInteraction=function(a){return!!this.getVisibleValidationFor(a)};function S(a){R.apply(this,arguments)}n(S,R);S.prototype.report=function(){this.hideAllValidations();for(var a=null,b=this.inputs(),c=0;c<b.length;c++)this.checkInputValidity(b[c])||(a=a||b[c],this.reportInput(b[c]));a&&a.focus();this.fireValidityEventIfNecessary()};S.prototype.shouldValidateOnInteraction=function(a){return!!this.getVisibleValidationFor(a)};function rb(a){R.apply(this,arguments)}n(rb,R);
rb.prototype.shouldValidateOnInteraction=function(){return!0};rb.prototype.onInteraction=function(a){R.prototype.onInteraction.call(this,a);this.fireValidityEventIfNecessary()};function sb(a){S.apply(this,arguments)}n(sb,S);sb.prototype.shouldValidateOnInteraction=function(){return!0};sb.prototype.onInteraction=function(a){S.prototype.onInteraction.call(this,a);this.fireValidityEventIfNecessary()};
function tb(a){var b=a.getAttribute("custom-validation-reporting");switch(b){case "as-you-go":return new rb(a);case "show-all-on-submit":return new S(a);case "interact-and-submit":return new sb(a);case "show-first-on-submit":return new qb(a)}a.ownerDocument&&void 0===kb&&(kb=!!document.createElement("form").reportValidity);return kb?new ob(a):new Q(a)}
function pb(a){var b=["badInput"];for(c in a.validity)b.includes(c)||b.push(c);var c=b.filter(function(b){return!0===a.validity[b]});return c.length?c[0]:null};function ub(a){var b=a.ownerDocument.defaultView;b.FormProxy||(b.FormProxy=vb(b));var c=b.FormProxy,d=new c(a);"action"in d||wb(a,d);a.$p=d}
function vb(a){function b(a){this.h=a}var c=b.prototype,d=a.Object,e=d.prototype,g=[a.HTMLFormElement,a.EventTarget],f=g.reduce(function(a,b){for(b=b&&b.prototype;b&&b!==e&&!(0<=a.indexOf(b));)a.push(b),b=d.getPrototypeOf(b);return a},[]);f.forEach(function(b){var d={},g;for(g in b)if(d.property=a.Object.getOwnPropertyDescriptor(b,g),d.property&&g.toUpperCase()!=g&&!ta(g,"on")&&!e.hasOwnProperty.call(c,g)){if("function"==typeof d.property.value)d.method=d.property.value,c[g]=function(a){return function(){return a.method.apply(this.h,
arguments)}}(d);else{var f={};d.property.get&&(f.get=function(a){return function(){return a.property.get.call(this.h)}}(d));d.property.set&&(f.set=function(a){return function(b){return a.property.set.call(this.h,b)}}(d));a.Object.defineProperty(c,g,f)}d={method:d.method,property:d.property}}});return b}
function wb(a,b){var c=a.ownerDocument.defaultView.HTMLFormElement.prototype.cloneNode.call(a,!1),d={},e;for(e in c)if(d.name=e,!(d.name in b||d.name.toUpperCase()==d.name||ta(d.name,"on"))){d.desc=xb[d.name];var g=a[d.name];if(d.desc)if(d.desc.access==T){d.actual=void 0;if(g&&g.nodeType){var f=c=g,h=f.nextSibling;f=f.parentNode;f.removeChild(c);try{d.actual=a[d.name]}finally{f.insertBefore(c,h)}}else d.actual=g;Object.defineProperty(b,d.name,{get:function(a){return function(){return a.actual}}(d)})}else d.desc.access==
U&&(d.attr=d.desc.attr||d.name,Object.defineProperty(b,d.name,{get:function(c){return function(){var d=b.getAttribute(c.attr);return null==d&&void 0!==c.desc.def?c.desc.def:c.desc.type==yb?"true"===d:c.desc.type==zb?null!=d:c.desc.type==Ab?(d=d||"",D(a,"url").parse(d).href):d}}(d),set:function(a){return function(c){a.desc.type==zb&&(c=c?"":null);null!=c?b.setAttribute(a.attr,c):b.removeAttribute(a.attr)}}(d)}));else Object.defineProperty(b,d.name,{get:function(b){return function(){return a[b.name]}}(d),
set:function(b){return function(c){a[b.name]=c}}(d)});d={actual:d.actual,attr:d.attr,desc:d.desc,name:d.name}}}
var U=1,T=2,Ab=1,yb=2,zb=3,xb={acceptCharset:{access:U,attr:"accept-charset"},accessKey:{access:U,attr:"accesskey"},action:{access:U,type:Ab},attributes:{access:T},autocomplete:{access:U,def:"on"},children:{access:T},dataset:{access:T},dir:{access:U},draggable:{access:U,type:yb,def:!1},elements:{access:T},encoding:{access:T},enctype:{access:U},hidden:{access:U,type:zb,def:!1},id:{access:U,def:""},lang:{access:U},localName:{access:T},method:{access:U,def:"get"},name:{access:U},noValidate:{access:U,
attr:"novalidate",type:zb,def:!1},prefix:{access:T},spellcheck:{access:U},style:{access:T},target:{access:U,def:""},title:{access:U},translate:{access:U}};function Bb(a,b){var c='form.amp-form-submit-error [submit-error],form.amp-form-submit-success [submit-success],form.amp-form-submitting [submitting]{display:block}.i-amphtml-validation-bubble{-webkit-transform:translate(-50%,-100%);transform:translate(-50%,-100%);background-color:#fff;box-shadow:0 5px 15px 0 rgba(0,0,0,0.5);max-width:200px;position:absolute;display:block;box-sizing:border-box;padding:10px;border-radius:5px}.i-amphtml-validation-bubble:after{content:" ";position:absolute;bottom:-8px;left:30px;width:0;height:0;border-left:8px solid transparent;border-right:8px solid transparent;border-top:8px solid #fff}[visible-when-invalid]{color:red}\n/*# sourceURL=/extensions/amp-form/0.1/amp-form.css*/',
d=!1,e="amp-form",g=a.getHeadNode(),f=Cb(g,Db(g,c),d||!1,e||null);if(b){var h=a.getRootNode();if(Fb(h,f))b(f);else var k=setInterval(function(){Fb(h,f)&&(clearInterval(k),b(f))},4)}}
function Cb(a,b,c,d){var e=a.__AMP_CSS_SM;e||(e=a.__AMP_CSS_SM=u());var g=!c&&d&&"amp-custom"!=d&&"amp-keyframes"!=d,f=c?"amp-runtime":g?"amp-extension="+d:null;if(f){var h=Gb(a,e,f);if(h)return h.textContent!==b&&(h.textContent=b),h}var k=(a.ownerDocument||a).createElement("style");k.textContent=b;var m=null;c?k.setAttribute("amp-runtime",""):g?(k.setAttribute("amp-extension",d||""),m=Gb(a,e,"amp-runtime")):(d&&k.setAttribute(d,""),m=a.lastChild);b=m;a.insertBefore(k,b?b.nextSibling:a.firstChild);
f&&(e[f]=k);return k}function Gb(a,b,c){return b[c]?b[c]:(a=a.querySelector("style["+c+"]"))?b[c]=a:null}function Db(a,b){return(a=a.__AMP_CSS_TR)?a(b):b}function Fb(a,b){var c=a.styleSheets;for(a=0;a<c.length;a++){var d=c[a];if(d.ownerNode==b)return!0}return!1};function Hb(a,b,c){Ya(a,"amp-analytics-instrumentation","amp-analytics").then(function(d){d&&d.triggerEventForTarget(a,b,c)})};var Ib=["amp-selector"];
function Jb(a,b){var c=this;try{ub(a)}catch(g){r().error("amp-form","form proxy failed to install",g)}a.__AMP_FORM=this;this.V=b;this.l=a.ownerDocument.defaultView;this.na=H(this.l,"timer");this.ba=D(a,"url-replace");this.U=null;this.h=a;this.m=H(this.l,"templates");this.ta=H(this.l,"xhr");this.J=D(this.h,"action");this.$=I(this.h,"resources");this.F=I(this.h,"viewer");this.D=new M(this.F,this.m);this.A=(this.h.getAttribute("method")||"GET").toUpperCase();this.ma=this.h.getAttribute("target");this.G=
Kb(this,"action-xhr");this.sa=Kb(this,"verify-xhr");this.aa=!this.h.hasAttribute("novalidate");this.h.setAttribute("novalidate","");this.aa||this.h.setAttribute("amp-novalidate","");this.h.classList.add("i-amphtml-form");this.B="initial";b=this.h.elements;for(var d=0;d<b.length;d++){var e=b[d].name;t("__amp_source_origin"!=e&&"__amp_form_verify"!=e,"Illegal input name, %s found: %s",e,b[d])}this.O=tb(this.h);this.oa=xa(this.h,function(){return Lb(c)});this.J.installActionHandler(this.h,this.ea.bind(this),
100);Mb(this);Nb(this);this.ja=this.ra=null;this.ga=I(a,"form-submit-service")}function Kb(a,b){var c=a.h.getAttribute(b);if(c){var d=D(a.h,"url");d.assertHttpsUrl(c,a.h,b);t(!d.isProxyOrigin(c),"form %s should not be on AMP CDN: %s",b,a.h)}return c}l=Jb.prototype;
l.requestForFormFetch=function(a,b,c,d){var e="GET"==b||"HEAD"==b;if(e){Ob(this);var g=J(this.h);d&&d.forEach(function(a){delete g[a]});c&&ra(g,c);var f=Ra(a,Sa(g))}else{f=a;var h=$a(this.l,this.h);d&&d.forEach(function(a){h.delete(a)});for(var k in c)h.append(k,c[k])}return{xhrUrl:f,fetchOpt:v({body:h,method:b,credentials:"include",headers:v({Accept:"application/json"})})}};l.setXhrAction=function(a){this.G=a};
l.ea=function(a){var b=this;if("submit"==a.method)return Pb(this).then(function(){var c=a;return"submitting"!=b.B&&Qb(b)?Rb(b,c.trust,null):Promise.resolve(null)});"clear"===a.method&&Sb(this);return null};function Pb(a){if(a.U)return a.U;var b=a.h.querySelectorAll(Ib.join(",")),c=oa(b).map(function(a){return a.whenBuilt()});return a.U=Tb(a,c,2E3)}
function Mb(a){a.F.whenNextVisible().then(function(){var b=a.h.querySelector("[autofocus]");if(b)try{b.focus()}catch(c){}});a.h.addEventListener("submit",a.ha.bind(a),!0);a.h.addEventListener("blur",function(b){Ub(b.target);a.O.onBlur(b)},!0);a.D.isSupported()||a.h.addEventListener("change",function(b){a.oa.onCommit().then(function(c){var d=c.updatedElements,e=c.errors;d.forEach(Ub);a.O.onBlur(b);"verifying"===a.B&&(e.length?(V(a,"verify-error"),W(a,{verifyErrors:e}).then(function(){Y(a,"verify-error",
e)})):V(a,"initial"))})});a.h.addEventListener("input",function(b){Ub(b.target);a.O.onInput(b)})}function Nb(a){Ya(a.h,"inputmask","amp-inputmask").then(function(a){a&&a.install()})}function Vb(a,b){Wb(a,"Form analytics not supported");var c=v({}),d=J(a.h),e;for(e in d)Object.prototype.hasOwnProperty.call(d,e)&&(c["formFields["+e+"]"]=d[e].join(","));c.formId=a.h.id;Hb(a.h,b,c)}
function Sb(a){a.h.reset();V(a,"initial");a.h.classList.remove("user-valid");a.h.classList.remove("user-invalid");var b=a.h.querySelectorAll(".user-valid, .user-invalid");x(b,function(a){a.classList.remove("user-valid");a.classList.remove("user-invalid")});var c=a.h.querySelectorAll(".visible[validation-for]");x(c,function(a){a.classList.remove("visible")});Xb(a.h)}
l.ha=function(a){if("submitting"==this.B||!Qb(this))return a.stopImmediatePropagation(),a.preventDefault(),Promise.resolve(null);(this.G||"POST"==this.A)&&a.preventDefault();return Rb(this,100,a)};
function Rb(a,b,c){try{var d={form:a.h,actionXhrMutator:a.setXhrAction.bind(a)};a.ga.fire(d)}catch(k){r().error("amp-form","Form submit service failed: %s",k)}var e=Yb(a),g=a.h.getElementsByClassName("i-amphtml-async-input");if(!a.G&&"GET"==a.A){Wb(a,"Non-XHR GETs not supported.");Ob(a);if(0===g.length){for(d=0;d<e.length;d++)a.ba.expandInputValueSync(e[d]);var f=!c;Zb(a,f);return Promise.resolve()}c&&c.preventDefault()}V(a,"submitting");var h=[];h.push($b(a,e));x(g,function(b){h.push(ac(a,b))});
return Tb(a,h,1E4).then(function(){if(a.G)var c=bc(a,b);else"POST"==a.A?t(!1,"Only XHR based (via action-xhr attribute) submissions are supported for POST requests. %s",a.h):"GET"==a.A&&Zb(a,!0),c=Promise.resolve();return c},function(b){return cc(a,b)})}function Yb(a){return a.h.querySelectorAll('[type="hidden"][data-amp-replace]')}function cc(a,b){V(a,"submit-error");r().error("amp-form","Form submission failed: %s",b);var c=v({error:b.message});W(a,c).then(function(){Y(a,"submit-error",b)})}
function Lb(a){if("submitting"===a.B)return Promise.resolve();V(a,"verifying");Y(a,"verify",null);return $b(a,Yb(a)).then(function(){return dc(a)})}function bc(a,b){a.D.isSupported()?b=ec(a,b):(fc(a,b),b=a.L(a.G,a.A).then(function(b){return gc(a,b)},function(b){return hc(a,b)}));return b}
function ec(a,b){var c,d=J(a.h);return W(a,d).then(function(){a.J.trigger(a.h,"submit",null,b)}).then(function(){var b=c=a.requestForFormFetch(a.G,a.A),d=c.fetchOpt||{};var f=d.method;void 0===f?f="GET":(f=f.toUpperCase(),bb.includes(f));d.method=f;d.headers=d.headers||v({});b.fetchOpt=d;b=c;var h=a.l;f=c.xhrUrl;d=c.fetchOpt;!1===d.ampCors&&(d.requireAmpResponseSourceOrigin=!1);!0===d.requireAmpResponseSourceOrigin&&r().error("XHR","requireAmpResponseSourceOrigin is deprecated, use ampCors instead");
void 0===d.requireAmpResponseSourceOrigin&&(d.requireAmpResponseSourceOrigin=!0);h=h.origin||C(h.location.href).origin;f=C(f).origin;h==f&&(d.headers=d.headers||{},d.headers["AMP-Same-Origin"]="true");b.fetchOpt=d;b=c;d=c.xhrUrl;if(!1!==c.fetchOpt.ampCors){f=a.l;h=C(d).search;var k=Object.create(null);if(h)for(var m;m=ma.exec(h);){var z=la(m[1],m[1]);m=m[2]?la(m[2],m[2]):"";k[z]=m}t(!("__amp_source_origin"in k),"Source origin is not allowed in %s",d);f=C(Ta(f.location.href)).origin;f=encodeURIComponent("__amp_source_origin")+
"="+encodeURIComponent(f);d=Ra(d,f,void 0)}b.xhrUrl=d;return a.D.fetchAndRenderTemplate(a.h,c,ic(a))}).then(function(b){return jc(a,b,c)},function(b){return kc(a,b)})}function ic(a){var b=a.h.querySelector("div[submit-success]"),c=a.h.querySelector("div[submit-error]"),d,e;b&&(d=a.m.maybeFindTemplate(b));c&&(e=a.m.maybeFindTemplate(c));return{successTemplate:d,errorTemplate:e}}
function kc(a,b){V(a,"submit-error");q().error("amp-form","Form submission failed: %s",b);return ha(function(){W(a,b||{}).then(function(){Y(a,"submit-error",b)})})}function fc(a,b){Vb(a,"amp-form-submit");var c=J(a.h);W(a,c).then(function(){a.J.trigger(a.h,"submit",null,b)})}function $b(a,b){for(var c=[],d=0;d<b.length;d++)c.push(a.ba.expandInputValueAsync(b[d]));return Tb(a,c,100)}
function ac(a,b){return b.getImpl().then(function(a){return a.getValue()}).then(function(c){var d=b.getAttribute("name");d=a.h.querySelector("input[name="+String(d).replace(ja,ka)+"]");if(!d){d=v({name:b.getAttribute("name"),hidden:"true"});var e=a.l.document.createElement("input"),g;for(g in d)e.setAttribute(g,d[g]);d=e}d.setAttribute("value",c);a.h.appendChild(d)})}
function dc(a){var b=oa(a.h.querySelectorAll("["+"no-verify".replace(ja,ka)+"]")),c=b.map(function(a){return a.name||a.id}),d={};return a.L(a.sa,a.A,(d.__amp_form_verify=!0,d),c)}l.L=function(a,b,c,d){Wb(this,"XHRs should be proxied.");a=this.requestForFormFetch(a,b,c,d);return this.ta.fetch(a.xhrUrl,a.fetchOpt)};function jc(a,b,c){a.D.verifySsrResponse(a.l,b,c);return lc(a,ha(function(){return b}))}function gc(a,b){return lc(a,b.json()).then(function(){Vb(a,"amp-form-submit-success");mc(a,b)})}
function lc(a,b){return b.then(function(b){V(a,"submit-success");W(a,b||{}).then(function(){Y(a,"submit-success",b)})},function(a){q().error("amp-form","Failed to parse response JSON: %s",a)})}function hc(a,b){return(b&&b.response?b.response.json().catch(function(){return null}):Promise.resolve(null)).then(function(c){Vb(a,"amp-form-submit-error");V(a,"submit-error");W(a,c||{}).then(function(){Y(a,"submit-error",c)});mc(a,b.response);q().error("amp-form","Form submission failed: %s",b)})}
function Zb(a,b){Vb(a,"amp-form-submit");b&&a.h.submit();V(a,"initial")}function Wb(a,b){var c=a.D.isSupported();t(!1===c,"[amp-form]: viewerRenderTemplate | %s",b)}function Ob(a){var b=a.h.querySelectorAll("input[type=password],input[type=file]");t(0==b.length,"input[type=password] or input[type=file] may only appear in form[method=post]")}function Qb(a){void 0===lb&&(lb=!!a.l.document.createElement("input").checkValidity);if(lb){var b=nc(a.h);if(a.aa)return a.O.report(),b}return!0}
function mc(a,b){Wb(a,"Redirects not supported.");if(b&&b.headers){var c=b.headers.get("AMP-Redirect-To");if(c){t("_blank"!=a.ma,"Redirecting to target=_blank using AMP-Redirect-To is currently not supported, use target=_top instead. %s",a.h);try{var d=D(a.h,"url");d.assertAbsoluteHttpOrHttpsUrl(c);d.assertHttpsUrl(c,"AMP-Redirect-To","Url")}catch(e){t(!1,"The `AMP-Redirect-To` header value must be an absolute URL starting with https://. Found %s",c)}I(a.h,"navigation").navigateTo(a.l,c,"AMP-Redirect-To")}}}
function Y(a,b,c){c=eb(a.l,"amp-form."+b,v({response:c}));a.J.trigger(a.h,b,c,100)}function Tb(a,b,c){return Promise.race([Promise.all(b),a.na.promise(c)])}
function V(a,b){var c=a.B;a.h.classList.remove("amp-form-"+c);a.h.classList.add("amp-form-"+b);var d=a.h.querySelector("["+c+"]");if(d){if(null==w){var e=d.ownerDocument;try{var g=e.createElement("div"),f=e.createElement("div");g.appendChild(f);w=g.querySelector(":scope div")===f}catch(h){w=!1}}w?d=d.querySelector(ua(":scope")):(d.classList.add("i-amphtml-scoped"),e=ua(".i-amphtml-scoped"),e=d.querySelectorAll(e),d.classList.remove("i-amphtml-scoped"),d=void 0===e[0]?null:e[0]);d&&d.parentElement&&
d.parentElement.removeChild(d)}a.B=b}
function W(a,b){var c=a.h.querySelector("["+a.B+"]"),d=Promise.resolve();if(c){var e="rendered-message-"+a.V;c.setAttribute("role","alert");c.setAttribute("aria-labeledby",e);c.setAttribute("aria-live","assertive");a.m.hasTemplate(c)?d=a.D.renderTemplate(c,b).then(function(b){b.id=e;b.setAttribute("i-amphtml-rendered","");return a.$.mutateElement(c,function(){c.appendChild(b);var d=eb(a.l,"amp:dom-update",null,{bubbles:!0});c.dispatchEvent(d)})}):a.$.mutateElement(c,function(){})}return d}l.ua=function(){return this.ja};
l.wa=function(){return this.ra};function nc(a){x(a.querySelectorAll("input,select,textarea,fieldset"),function(a){return Z(a)});return Z(a)}function Xb(a){var b=document.createElement("input"),c={},d;for(d in b.validity){c.validityState=d;var e=a.querySelectorAll("."+String(c.validityState).replace(ja,ka));x(e,function(a){return function(b){b.classList.remove(a.validityState)}}(c));c={validityState:c.validityState}}}
function Z(a,b){b=void 0===b?!1:b;if(!a.checkValidity)return!0;var c=!1,d=a.classList.contains("user-valid")?"valid":a.classList.contains("user-invalid")?"invalid":"none",e=a.checkValidity();"valid"!=d&&e?(a.classList.add("user-valid"),a.classList.remove("user-invalid"),c="invalid"==d):"invalid"==d||e||(a.classList.add("user-invalid"),a.classList.remove("user-valid"),c=!0);if(a.validity)for(var g in a.validity)a.classList.toggle(g,a.validity[g]);if(b&&c){g=wa(a);for(var f=0;f<g.length;f++)Z(g[f]);
a.form&&Z(a.form)}return e}function Ub(a){Z(a,!0)}function oc(a){this.qa=pc(a).then(function(){return qc(a)})}oc.prototype.whenInitialized=function(){return this.qa};function pc(a){var b=new ga;Bb(a,b.resolve);return b.promise}function qc(a){return a.whenReady().then(function(){rc(a.getRootNode().querySelectorAll("form"));sc(a.getRootNode())})}function rc(a){a&&x(a,function(a,c){var b=a.__AMP_FORM||null;b||new Jb(a,"amp-form-"+c)})}
function sc(a){a.addEventListener("amp:dom-update",function(){rc(a.querySelectorAll("form"))})}(function(a){a.registerServiceForDoc("form-submit-service",Ga);a.registerServiceForDoc("amp-form",oc)})(self.AMP);
})});
//# sourceMappingURL=amp-form-0.1.js.map

