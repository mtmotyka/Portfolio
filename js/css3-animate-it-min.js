!function(a){var e,t=[],r=!1,i=!1,n={interval:250,force_process:!1},d=a(window);function o(){i=!1;for(var r=0;r<t.length;r++){var n=a(t[r]).filter((function(){return a(this).is(":appeared")}));if(n.trigger("appear",[n]),e){var d=e.not(n);d.trigger("disappear",[d])}e=n}}a.expr[":"].appeared=function(e){var t=a(e);if(!t.is(":visible"))return!1;var r=d.scrollLeft(),i=d.scrollTop(),n=t.offset(),o=n.left,s=n.top;return s+t.height()>=i&&s-(t.data("appear-top-offset")||0)<=i+d.height()&&o+t.width()>=r&&o-(t.data("appear-left-offset")||0)<=r+d.width()},a.fn.extend({appear:function(e){var d=a.extend({},n,e||{}),s=this.selector||this;if(!r){var u=function(){i||(i=!0,setTimeout(o,d.interval))};a(window).scroll(u).resize(u),r=!0}return d.force_process&&setTimeout(o,d.interval),t.push(s),a(s)}}),a.extend({force_appear:function(){return!!r&&(o(),!0)}})}(jQuery),
/*!
 * jQuery doTimeout: Like setTimeout, but better! - v1.0 - 3/3/2010
 * http://benalman.com/projects/jquery-dotimeout-plugin/
 *
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
function(a){var e={},t=Array.prototype.slice;function r(r){var i,n=this,d={},o=r?a.fn:a,s=arguments,u=4,l=s[1],f=s[2],y=s[3];function c(){r?i.removeData(r):l&&delete e[l]}function p(){d.id=setTimeout((function(){d.fn()}),f)}if("string"!=typeof l&&(u--,l=r=0,f=s[1],y=s[2]),r?(i=n.eq(0)).data(r,d=i.data(r)||{}):l&&(d=e[l]||(e[l]={})),d.id&&clearTimeout(d.id),delete d.id,y)d.fn=function(a){"string"==typeof y&&(y=o[y]),!0!==y.apply(n,t.call(s,u))||a?c():p()},p();else{if(d.fn)return void 0===f?c():d.fn(!1===f),!0;c()}}a.doTimeout=function(){return r.apply(window,[0].concat(t.call(arguments)))},a.fn.doTimeout=function(){var a=t.call(arguments),e=r.apply(this,["doTimeout"+a[0]].concat(a));return"number"==typeof a[0]||"number"==typeof a[1]?this:e}}(jQuery),jQuery(".animatedParent").appear(),jQuery(".animatedClick").click((function(){var a=jQuery(this).attr("data-target");if(null!=jQuery(this).attr("data-sequence")){var e=jQuery("."+a+":first").attr("data-id"),t=jQuery("."+a+":last").attr("data-id"),r=e;jQuery("."+a+"[data-id="+r+"]").hasClass("go")?(jQuery("."+a+"[data-id="+r+"]").addClass("goAway"),jQuery("."+a+"[data-id="+r+"]").removeClass("go")):(jQuery("."+a+"[data-id="+r+"]").addClass("go"),jQuery("."+a+"[data-id="+r+"]").removeClass("goAway")),r++,delay=Number(jQuery(this).attr("data-sequence")),jQuery.doTimeout(delay,(function(){if(console.log(t),jQuery("."+a+"[data-id="+r+"]").hasClass("go")?(jQuery("."+a+"[data-id="+r+"]").addClass("goAway"),jQuery("."+a+"[data-id="+r+"]").removeClass("go")):(jQuery("."+a+"[data-id="+r+"]").addClass("go"),jQuery("."+a+"[data-id="+r+"]").removeClass("goAway")),++r<=t)return!0}))}else jQuery("."+a).hasClass("go")?(jQuery("."+a).addClass("goAway"),jQuery("."+a).removeClass("go")):(jQuery("."+a).addClass("go"),jQuery("."+a).removeClass("goAway"))})),jQuery(document.body).on("appear",".animatedParent",(function(a,e){var t=jQuery(this).find(".animated"),r=jQuery(this);if(null!=r.attr("data-sequence")){var i=jQuery(this).find(".animated:first").attr("data-id"),n=jQuery(this).find(".animated:last").attr("data-id");jQuery(r).find(".animated[data-id="+i+"]").addClass("go"),i++,delay=Number(r.attr("data-sequence")),jQuery.doTimeout(delay,(function(){if(jQuery(r).find(".animated[data-id="+i+"]").addClass("go"),++i<=n)return!0}))}else t.addClass("go")})),jQuery(document.body).on("disappear",".animatedParent",(function(a,e){jQuery(this).hasClass("animateOnce")||jQuery(this).find(".animated").removeClass("go")})),jQuery(window).on("load",(function(){jQuery.force_appear()}));