/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/baguettebox.js/dist/baguetteBox.min.js":
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;/*!
 * baguetteBox.js
 * @author  feimosi
 * @version 1.10.0
 * @url https://github.com/feimosi/baguetteBox.js
 */
!function(e,t){"use strict"; true?!(__WEBPACK_AMD_DEFINE_FACTORY__ = (t),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
				__WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)):"object"==typeof exports?module.exports=t():e.baguetteBox=t()}(this,function(){"use strict";var e,t,n,o,i,a='<svg width="44" height="60"><polyline points="30 10 10 30 30 50" stroke="rgba(255,255,255,0.5)" stroke-width="4"stroke-linecap="butt" fill="none" stroke-linejoin="round"/></svg>',s='<svg width="44" height="60"><polyline points="14 10 34 30 14 50" stroke="rgba(255,255,255,0.5)" stroke-width="4"stroke-linecap="butt" fill="none" stroke-linejoin="round"/></svg>',l='<svg width="30" height="30"><g stroke="rgb(160,160,160)" stroke-width="4"><line x1="5" y1="5" x2="25" y2="25"/><line x1="5" y1="25" x2="25" y2="5"/></g></svg>',r={},u={captions:!0,buttons:"auto",fullScreen:!1,noScrollbars:!1,bodyClass:"baguetteBox-open",titleTag:!1,async:!1,preload:2,animation:"slideIn",afterShow:null,afterHide:null,onChange:null,overlayBackgroundColor:"rgba(0,0,0,.8)"},c={},d=[],f=0,g=!1,p={},b=!1,m=/.+\.(gif|jpe?g|png|webp)/i,v={},h=[],y=null,w=function(e){-1!==e.target.id.indexOf("baguette-img")&&I()},k=function(e){e.stopPropagation?e.stopPropagation():e.cancelBubble=!0,q()},x=function(e){e.stopPropagation?e.stopPropagation():e.cancelBubble=!0,j()},C=function(e){e.stopPropagation?e.stopPropagation():e.cancelBubble=!0,I()},E=function(e){p.count++,p.count>1&&(p.multitouch=!0),p.startX=e.changedTouches[0].pageX,p.startY=e.changedTouches[0].pageY},B=function(e){if(!b&&!p.multitouch){e.preventDefault?e.preventDefault():e.returnValue=!1;var t=e.touches[0]||e.changedTouches[0];t.pageX-p.startX>40?(b=!0,q()):t.pageX-p.startX<-40?(b=!0,j()):p.startY-t.pageY>100&&I()}},T=function(){p.count--,p.count<=0&&(p.multitouch=!1),b=!1},N=function(){T()},L=function(t){"block"===e.style.display&&e.contains&&!e.contains(t.target)&&(t.stopPropagation(),H())};function A(e){if(v.hasOwnProperty(e)){var t=v[e].galleries;[].forEach.call(t,function(e){[].forEach.call(e,function(e){V(e.imageElement,"click",e.eventHandler)}),d===e&&(d=[])}),delete v[e]}}function P(e){switch(e.keyCode){case 37:q();break;case 39:j();break;case 27:I()}}function S(i,a){if(d!==i){for(d=i,function(i){i||(i={});for(var a in u)r[a]=u[a],"undefined"!=typeof i[a]&&(r[a]=i[a]);t.style.transition=t.style.webkitTransition="fadeIn"===r.animation?"opacity .4s ease":"slideIn"===r.animation?"":"none","auto"===r.buttons&&("ontouchstart"in window||1===d.length)&&(r.buttons=!1);n.style.display=o.style.display=r.buttons?"":"none";try{e.style.backgroundColor=r.overlayBackgroundColor}catch(s){}}(a);t.firstChild;)t.removeChild(t.firstChild);h.length=0;for(var s,l=[],c=[],f=0;f<i.length;f++)(s=W("div")).className="full-image",s.id="baguette-img-"+f,h.push(s),l.push("baguetteBox-figure-"+f),c.push("baguetteBox-figcaption-"+f),t.appendChild(h[f]);e.setAttribute("aria-labelledby",l.join(" ")),e.setAttribute("aria-describedby",c.join(" "))}}function F(t){r.noScrollbars&&(document.documentElement.style.overflowY="hidden",document.body.style.overflowY="scroll"),"block"!==e.style.display&&(D(document,"keydown",P),p={count:0,startX:null,startY:null},Y(f=t,function(){R(f),z(f)}),O(),e.style.display="block",r.fullScreen&&(e.requestFullscreen?e.requestFullscreen():e.webkitRequestFullscreen?e.webkitRequestFullscreen():e.mozRequestFullScreen&&e.mozRequestFullScreen()),setTimeout(function(){e.className="visible",r.bodyClass&&document.body.classList&&document.body.classList.add(r.bodyClass),r.afterShow&&r.afterShow()},50),r.onChange&&r.onChange(f,h.length),y=document.activeElement,H(),g=!0)}function H(){r.buttons?n.focus():i.focus()}function I(){r.noScrollbars&&(document.documentElement.style.overflowY="auto",document.body.style.overflowY="auto"),"none"!==e.style.display&&(V(document,"keydown",P),e.className="",setTimeout(function(){e.style.display="none",document.exitFullscreen?document.exitFullscreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitExitFullscreen&&document.webkitExitFullscreen(),r.bodyClass&&document.body.classList&&document.body.classList.remove(r.bodyClass),r.afterHide&&r.afterHide(),y&&y.focus(),g=!1},500))}function Y(e,t){var n=h[e],o=d[e];if(void 0!==n&&void 0!==o)if(n.getElementsByTagName("img")[0])t&&t();else{var i=o.imageElement,a=i.getElementsByTagName("img")[0],s="function"==typeof r.captions?r.captions.call(d,i):i.getAttribute("data-caption")||i.title,l=function(e){var t=e.href;if(e.dataset){var n=[];for(var o in e.dataset)"at-"!==o.substring(0,3)||isNaN(o.substring(3))||(n[o.replace("at-","")]=e.dataset[o]);for(var i=Object.keys(n).sort(function(e,t){return parseInt(e,10)<parseInt(t,10)?-1:1}),a=window.innerWidth*window.devicePixelRatio,s=0;s<i.length-1&&i[s]<a;)s++;t=n[i[s]]||t}return t}(i),u=W("figure");if(u.id="baguetteBox-figure-"+e,u.innerHTML='<div class="baguetteBox-spinner"><div class="baguetteBox-double-bounce1"></div><div class="baguetteBox-double-bounce2"></div></div>',r.captions&&s){var c=W("figcaption");c.id="baguetteBox-figcaption-"+e,c.innerHTML=s,u.appendChild(c)}n.appendChild(u);var f=W("img");f.onload=function(){var n=document.querySelector("#baguette-img-"+e+" .baguetteBox-spinner");u.removeChild(n),!r.async&&t&&t()},f.setAttribute("src",l),f.alt=a&&a.alt||"",r.titleTag&&s&&(f.title=s),u.appendChild(f),r.async&&t&&t()}}function j(){return X(f+1)}function q(){return X(f-1)}function X(e,t){return!g&&e>=0&&e<t.length?(S(t,r),F(e),!0):e<0?(r.animation&&M("left"),!1):e>=h.length?(r.animation&&M("right"),!1):(Y(f=e,function(){R(f),z(f)}),O(),r.onChange&&r.onChange(f,h.length),!0)}function M(e){t.className="bounce-from-"+e,setTimeout(function(){t.className=""},400)}function O(){var e=100*-f+"%";"fadeIn"===r.animation?(t.style.opacity=0,setTimeout(function(){c.transforms?t.style.transform=t.style.webkitTransform="translate3d("+e+",0,0)":t.style.left=e,t.style.opacity=1},400)):c.transforms?t.style.transform=t.style.webkitTransform="translate3d("+e+",0,0)":t.style.left=e}function R(e){e-f>=r.preload||Y(e+1,function(){R(e+1)})}function z(e){f-e>=r.preload||Y(e-1,function(){z(e-1)})}function D(e,t,n,o){e.addEventListener?e.addEventListener(t,n,o):e.attachEvent("on"+t,function(e){(e=e||window.event).target=e.target||e.srcElement,n(e)})}function V(e,t,n,o){e.removeEventListener?e.removeEventListener(t,n,o):e.detachEvent("on"+t,n)}function U(e){return document.getElementById(e)}function W(e){return document.createElement(e)}return[].forEach||(Array.prototype.forEach=function(e,t){for(var n=0;n<this.length;n++)e.call(t,this[n],n,this)}),[].filter||(Array.prototype.filter=function(e,t,n,o,i){for(n=this,o=[],i=0;i<n.length;i++)e.call(t,n[i],i,n)&&o.push(n[i]);return o}),{run:function(r,u){var d,f,g,p,b,h;return c.transforms="undefined"!=typeof(d=W("div")).style.perspective||"undefined"!=typeof d.style.webkitPerspective,c.svg=((f=W("div")).innerHTML="<svg/>","http://www.w3.org/2000/svg"===(f.firstChild&&f.firstChild.namespaceURI)),c.passiveEvents=function(){var e=!1;try{var t=Object.defineProperty({},"passive",{get:function(){e=!0}});window.addEventListener("test",null,t)}catch(n){}return e}(),function(){if(e=U("baguetteBox-overlay"))return t=U("baguetteBox-slider"),n=U("previous-button"),o=U("next-button"),void(i=U("close-button"));var r;(e=W("div")).setAttribute("role","dialog"),e.id="baguetteBox-overlay",document.getElementsByTagName("body")[0].appendChild(e),(t=W("div")).id="baguetteBox-slider",e.appendChild(t),(n=W("button")).setAttribute("type","button"),n.id="previous-button",n.setAttribute("aria-label","Previous"),n.innerHTML=c.svg?a:"&lt;",e.appendChild(n),(o=W("button")).setAttribute("type","button"),o.id="next-button",o.setAttribute("aria-label","Next"),o.innerHTML=c.svg?s:"&gt;",e.appendChild(o),(i=W("button")).setAttribute("type","button"),i.id="close-button",i.setAttribute("aria-label","Close"),i.innerHTML=c.svg?l:"&times;",e.appendChild(i),n.className=o.className=i.className="baguetteBox-button",r=c.passiveEvents?{passive:!0}:null,D(e,"click",w),D(n,"click",k),D(o,"click",x),D(i,"click",C),D(t,"contextmenu",N),D(e,"touchstart",E,r),D(e,"touchmove",B,r),D(e,"touchend",T),D(document,"focus",L,!0)}(),A(r),g=r,p=u,b=document.querySelectorAll(g),h={galleries:[],nodeList:b},v[g]=h,[].forEach.call(b,function(e){p&&p.filter&&(m=p.filter);var t=[];if(t="A"===e.tagName?[e]:e.getElementsByTagName("a"),0!==(t=[].filter.call(t,function(e){if(-1===e.className.indexOf(p&&p.ignoreClass))return m.test(e.href)})).length){var n=[];[].forEach.call(t,function(e,t){var o=function(e){e.preventDefault?e.preventDefault():e.returnValue=!1,S(n,p),F(t)},i={eventHandler:o,imageElement:e};D(e,"click",o),n.push(i)}),h.galleries.push(n)}}),h.galleries},show:X,showNext:j,showPrevious:q,hide:I,destroy:function(){var a;a=c.passiveEvents?{passive:!0}:null,V(e,"click",w),V(n,"click",k),V(o,"click",x),V(i,"click",C),V(t,"contextmenu",N),V(e,"touchstart",E,a),V(e,"touchmove",B,a),V(e,"touchend",T),V(document,"focus",L,!0),function(){for(var e in v)v.hasOwnProperty(e)&&A(e)}(),V(document,"keydown",P),document.getElementsByTagName("body")[0].removeChild(document.getElementById("baguetteBox-overlay")),v={},d=[],f=0}}});

/***/ }),

/***/ "./node_modules/blazy/blazy.js":
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;/*!
  hey, [be]Lazy.js - v1.8.2 - 2016.10.25
  A fast, small and dependency free lazy load script (https://github.com/dinbror/blazy)
  (c) Bjoern Klinggaard - @bklinggaard - http://dinbror.dk/blazy
*/
;
(function(root, blazy) {
    if (true) {
        // AMD. Register bLazy as an anonymous module
        !(__WEBPACK_AMD_DEFINE_FACTORY__ = (blazy),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
				__WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
    } else if (typeof exports === 'object') {
        // Node. Does not work with strict CommonJS, but
        // only CommonJS-like environments that support module.exports,
        // like Node.
        module.exports = blazy();
    } else {
        // Browser globals. Register bLazy on window
        root.Blazy = blazy();
    }
})(this, function() {
    'use strict';

    //private vars
    var _source, _viewport, _isRetina, _supportClosest, _attrSrc = 'src', _attrSrcset = 'srcset';

    // constructor
    return function Blazy(options) {
        //IE7- fallback for missing querySelectorAll support
        if (!document.querySelectorAll) {
            var s = document.createStyleSheet();
            document.querySelectorAll = function(r, c, i, j, a) {
                a = document.all, c = [], r = r.replace(/\[for\b/gi, '[htmlFor').split(',');
                for (i = r.length; i--;) {
                    s.addRule(r[i], 'k:v');
                    for (j = a.length; j--;) a[j].currentStyle.k && c.push(a[j]);
                    s.removeRule(0);
                }
                return c;
            };
        }

        //options and helper vars
        var scope = this;
        var util = scope._util = {};
        util.elements = [];
        util.destroyed = true;
        scope.options = options || {};
        scope.options.error = scope.options.error || false;
        scope.options.offset = scope.options.offset || 100;
        scope.options.root = scope.options.root || document;
        scope.options.success = scope.options.success || false;
        scope.options.selector = scope.options.selector || '.b-lazy';
        scope.options.separator = scope.options.separator || '|';
        scope.options.containerClass = scope.options.container;
        scope.options.container = scope.options.containerClass ? document.querySelectorAll(scope.options.containerClass) : false;
        scope.options.errorClass = scope.options.errorClass || 'b-error';
        scope.options.breakpoints = scope.options.breakpoints || false;
        scope.options.loadInvisible = scope.options.loadInvisible || false;
        scope.options.successClass = scope.options.successClass || 'b-loaded';
        scope.options.validateDelay = scope.options.validateDelay || 25;
        scope.options.saveViewportOffsetDelay = scope.options.saveViewportOffsetDelay || 50;
        scope.options.srcset = scope.options.srcset || 'data-srcset';
        scope.options.src = _source = scope.options.src || 'data-src';
        _supportClosest = Element.prototype.closest;
        _isRetina = window.devicePixelRatio > 1;
        _viewport = {};
        _viewport.top = 0 - scope.options.offset;
        _viewport.left = 0 - scope.options.offset;


        /* public functions
         ************************************/
        scope.revalidate = function() {
            initialize(scope);
        };
        scope.load = function(elements, force) {
            var opt = this.options;
            if (elements && elements.length === undefined) {
                loadElement(elements, force, opt);
            } else {
                each(elements, function(element) {
                    loadElement(element, force, opt);
                });
            }
        };
        scope.destroy = function() {            
            var util = scope._util;
            if (scope.options.container) {
                each(scope.options.container, function(object) {
                    unbindEvent(object, 'scroll', util.validateT);
                });
            }
            unbindEvent(window, 'scroll', util.validateT);
            unbindEvent(window, 'resize', util.validateT);
            unbindEvent(window, 'resize', util.saveViewportOffsetT);
            util.count = 0;
            util.elements.length = 0;
            util.destroyed = true;
        };

        //throttle, ensures that we don't call the functions too often
        util.validateT = throttle(function() {
            validate(scope);
        }, scope.options.validateDelay, scope);
        util.saveViewportOffsetT = throttle(function() {
            saveViewportOffset(scope.options.offset);
        }, scope.options.saveViewportOffsetDelay, scope);
        saveViewportOffset(scope.options.offset);

        //handle multi-served image src (obsolete)
        each(scope.options.breakpoints, function(object) {
            if (object.width >= window.screen.width) {
                _source = object.src;
                return false;
            }
        });

        // start lazy load
        setTimeout(function() {
            initialize(scope);
        }); // "dom ready" fix

    };


    /* Private helper functions
     ************************************/
    function initialize(self) {
        var util = self._util;
        // First we create an array of elements to lazy load
        util.elements = toArray(self.options);
        util.count = util.elements.length;
        // Then we bind resize and scroll events if not already binded
        if (util.destroyed) {
            util.destroyed = false;
            if (self.options.container) {
                each(self.options.container, function(object) {
                    bindEvent(object, 'scroll', util.validateT);
                });
            }
            bindEvent(window, 'resize', util.saveViewportOffsetT);
            bindEvent(window, 'resize', util.validateT);
            bindEvent(window, 'scroll', util.validateT);
        }
        // And finally, we start to lazy load.
        validate(self);
    }

    function validate(self) {
        var util = self._util;
        for (var i = 0; i < util.count; i++) {
            var element = util.elements[i];
            if (elementInView(element, self.options) || hasClass(element, self.options.successClass)) {
                self.load(element);
                util.elements.splice(i, 1);
                util.count--;
                i--;
            }
        }
        if (util.count === 0) {
            self.destroy();
        }
    }

    function elementInView(ele, options) {
        var rect = ele.getBoundingClientRect();

        if(options.container && _supportClosest){
            // Is element inside a container?
            var elementContainer = ele.closest(options.containerClass);
            if(elementContainer){
                var containerRect = elementContainer.getBoundingClientRect();
                // Is container in view?
                if(inView(containerRect, _viewport)){
                    var top = containerRect.top - options.offset;
                    var right = containerRect.right + options.offset;
                    var bottom = containerRect.bottom + options.offset;
                    var left = containerRect.left - options.offset;
                    var containerRectWithOffset = {
                        top: top > _viewport.top ? top : _viewport.top,
                        right: right < _viewport.right ? right : _viewport.right,
                        bottom: bottom < _viewport.bottom ? bottom : _viewport.bottom,
                        left: left > _viewport.left ? left : _viewport.left
                    };
                    // Is element in view of container?
                    return inView(rect, containerRectWithOffset);
                } else {
                    return false;
                }
            }
        }      
        return inView(rect, _viewport);
    }

    function inView(rect, viewport){
        // Intersection
        return rect.right >= viewport.left &&
               rect.bottom >= viewport.top && 
               rect.left <= viewport.right && 
               rect.top <= viewport.bottom;
    }

    function loadElement(ele, force, options) {
        // if element is visible, not loaded or forced
        if (!hasClass(ele, options.successClass) && (force || options.loadInvisible || (ele.offsetWidth > 0 && ele.offsetHeight > 0))) {
            var dataSrc = getAttr(ele, _source) || getAttr(ele, options.src); // fallback to default 'data-src'
            if (dataSrc) {
                var dataSrcSplitted = dataSrc.split(options.separator);
                var src = dataSrcSplitted[_isRetina && dataSrcSplitted.length > 1 ? 1 : 0];
                var srcset = getAttr(ele, options.srcset);
                var isImage = equal(ele, 'img');
                var parent = ele.parentNode;
                var isPicture = parent && equal(parent, 'picture');
                // Image or background image
                if (isImage || ele.src === undefined) {
                    var img = new Image();
                    // using EventListener instead of onerror and onload
                    // due to bug introduced in chrome v50 
                    // (https://productforums.google.com/forum/#!topic/chrome/p51Lk7vnP2o)
                    var onErrorHandler = function() {
                        if (options.error) options.error(ele, "invalid");
                        addClass(ele, options.errorClass);
                        unbindEvent(img, 'error', onErrorHandler);
                        unbindEvent(img, 'load', onLoadHandler);
                    };
                    var onLoadHandler = function() {
                        // Is element an image
                        if (isImage) {
                            if(!isPicture) {
                                handleSources(ele, src, srcset);
                            }
                        // or background-image
                        } else {
                            ele.style.backgroundImage = 'url("' + src + '")';
                        }
                        itemLoaded(ele, options);
                        unbindEvent(img, 'load', onLoadHandler);
                        unbindEvent(img, 'error', onErrorHandler);
                    };
                    
                    // Picture element
                    if (isPicture) {
                        img = ele; // Image tag inside picture element wont get preloaded
                        each(parent.getElementsByTagName('source'), function(source) {
                            handleSource(source, _attrSrcset, options.srcset);
                        });
                    }
                    bindEvent(img, 'error', onErrorHandler);
                    bindEvent(img, 'load', onLoadHandler);
                    handleSources(img, src, srcset); // Preload

                } else { // An item with src like iframe, unity games, simpel video etc
                    ele.src = src;
                    itemLoaded(ele, options);
                }
            } else {
                // video with child source
                if (equal(ele, 'video')) {
                    each(ele.getElementsByTagName('source'), function(source) {
                        handleSource(source, _attrSrc, options.src);
                    });
                    ele.load();
                    itemLoaded(ele, options);
                } else {
                    if (options.error) options.error(ele, "missing");
                    addClass(ele, options.errorClass);
                }
            }
        }
    }

    function itemLoaded(ele, options) {
        addClass(ele, options.successClass);
        if (options.success) options.success(ele);
        // cleanup markup, remove data source attributes
        removeAttr(ele, options.src);
        removeAttr(ele, options.srcset);
        each(options.breakpoints, function(object) {
            removeAttr(ele, object.src);
        });
    }

    function handleSource(ele, attr, dataAttr) {
        var dataSrc = getAttr(ele, dataAttr);
        if (dataSrc) {
            setAttr(ele, attr, dataSrc);
            removeAttr(ele, dataAttr);
        }
    }

    function handleSources(ele, src, srcset){
        if(srcset) {
            setAttr(ele, _attrSrcset, srcset); //srcset
        }
        ele.src = src; //src 
    }

    function setAttr(ele, attr, value){
        ele.setAttribute(attr, value);
    }

    function getAttr(ele, attr) {
        return ele.getAttribute(attr);
    }

    function removeAttr(ele, attr){
        ele.removeAttribute(attr); 
    }

    function equal(ele, str) {
        return ele.nodeName.toLowerCase() === str;
    }

    function hasClass(ele, className) {
        return (' ' + ele.className + ' ').indexOf(' ' + className + ' ') !== -1;
    }

    function addClass(ele, className) {
        if (!hasClass(ele, className)) {
            ele.className += ' ' + className;
        }
    }

    function toArray(options) {
        var array = [];
        var nodelist = (options.root).querySelectorAll(options.selector);
        for (var i = nodelist.length; i--; array.unshift(nodelist[i])) {}
        return array;
    }

    function saveViewportOffset(offset) {
        _viewport.bottom = (window.innerHeight || document.documentElement.clientHeight) + offset;
        _viewport.right = (window.innerWidth || document.documentElement.clientWidth) + offset;
    }

    function bindEvent(ele, type, fn) {
        if (ele.attachEvent) {
            ele.attachEvent && ele.attachEvent('on' + type, fn);
        } else {
            ele.addEventListener(type, fn, { capture: false, passive: true });
        }
    }

    function unbindEvent(ele, type, fn) {
        if (ele.detachEvent) {
            ele.detachEvent && ele.detachEvent('on' + type, fn);
        } else {
            ele.removeEventListener(type, fn, { capture: false, passive: true });
        }
    }

    function each(object, fn) {
        if (object && fn) {
            var l = object.length;
            for (var i = 0; i < l && fn(object[i], i) !== false; i++) {}
        }
    }

    function throttle(fn, minDelay, scope) {
        var lastCall = 0;
        return function() {
            var now = +new Date();
            if (now - lastCall < minDelay) {
                return;
            }
            lastCall = now;
            fn.apply(scope, arguments);
        };
    }
});


/***/ }),

/***/ "./resources/assets/js/app.js":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_baguettebox_js__ = __webpack_require__("./node_modules/baguettebox.js/dist/baguetteBox.min.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_baguettebox_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_baguettebox_js__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_blazy__ = __webpack_require__("./node_modules/blazy/blazy.js");
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1_blazy___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1_blazy__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__images__ = __webpack_require__("./resources/assets/js/images/index.js");
/**
 * Vanilla JavaScript window.onload event.
 */




window.addEventListener('load', __WEBPACK_IMPORTED_MODULE_2__images__["default"]);

window.addEventListener('load', function () {
    __WEBPACK_IMPORTED_MODULE_0_baguettebox_js___default.a.run('.gallery');

    var blazy = new __WEBPACK_IMPORTED_MODULE_1_blazy___default.a();

    __webpack_require__("./resources/assets/js/images/index.js");

    __webpack_require__("./resources/assets/js/scripts/trigger.js");
});

/***/ }),

/***/ "./resources/assets/js/images/index.js":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

var $$ = function $$(selectors) {
    return [].concat(_toConsumableArray(document.querySelectorAll(selectors)));
};

function setImageSizes(image) {
    // Take object-fit into account: size needed can be bigger when image is clipped on it's sides
    var imageWidthRatio = image.naturalWidth / image.naturalHeight;

    var width = Math.max(image.getBoundingClientRect().width, image.getBoundingClientRect().height * imageWidthRatio);

    image.setAttribute('sizes', width + 'px');
}

function prepareForPrint() {
    $$('[srcset][sizes="1px"]').forEach(function (image) {
        setImageSizes(image);
    });
}

/* harmony default export */ __webpack_exports__["default"] = (function () {
    $$('[srcset][sizes="1px"]').forEach(function (image) {
        setImageSizes(image);
    });
    $$('[data-srcset][sizes="1px"]').forEach(function (image) {
        setImageSizes(image);
    });

    var resizeTimer = void 0;

    window.addEventListener('resize', function () {
        window.clearTimeout(resizeTimer);

        resizeTimer = window.setTimeout(function () {
            $$('[srcset]:not([sizes="1px"])').forEach(function (image) {
                setImageSizes(image);
            });
        }, 250);
    });

    /* Try to load images on print for Webkit and others */

    window.matchMedia('print').addListener(function (mql) {
        if (mql.matches) {
            prepareForPrint();
        }
    });

    window.addEventListener('beforeprint', function () {
        prepareForPrint();
    });
});

/***/ }),

/***/ "./resources/assets/js/scripts/trigger.js":
/***/ (function(module, exports) {

var triggers = document.querySelectorAll('.js-trigger');

var _loop = function _loop(i) {
    // console.log('Trigger found:', triggers[i]);
    triggers[i].addEventListener('click', function (event) {
        event.preventDefault();
        openElement(triggers[i]);
    });
};

for (var i = 0; i < triggers.length; i++) {
    _loop(i);
}

function openElement(trigger) {
    var selector = trigger.dataset.element;
    // console.log(selector, event);
    var element = document.querySelector('.' + selector);
    if (!element) {
        return;
    }

    if (element.classList.contains(selector + '--open')) {
        // console.log('Element found with class:', element);
        element.classList.remove(selector + '--open');
        document.body.classList.remove('trigger--open');
    } else {
        // console.log('Element found without class:', element);
        element.classList.add(selector + '--open');
        document.body.classList.add('trigger--open');
    }
}

/***/ }),

/***/ "./resources/assets/sass/admin.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/sass/app.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__("./resources/assets/js/app.js");
__webpack_require__("./resources/assets/sass/app.scss");
module.exports = __webpack_require__("./resources/assets/sass/admin.scss");


/***/ })

/******/ });