!function(a){a(document).ready(function(){function e(t,e,i){var n=new Date;n.setTime(n.getTime()+24*i*60*60*1e3);var o="expires="+n.toGMTString();document.cookie=t+"="+e+";"+o+";path=/"}function i(t){for(var e=t+"=",i=document.cookie.split(";"),n=0;n<i.length;n++){for(var o=i[n];" "==o.charAt(0);)o=o.substring(1);if(0==o.indexOf(e))return o.substring(e.length,o.length)}return""}function t(){var t=i("ciasteczko");""!=t?a("#mainBelt").css("bottom","-60px"):(a("#mainBelt").css("bottom","0"),a("#cookieBtn").click(function(){e("ciasteczko",t="1",30),a("#mainBelt").animate({bottom:"-60px"},500)}))}a(window).scroll(function(){var t;1<=a(window).scrollTop()?a("header").addClass("shrink"):a("header").removeClass("shrink")}),a("body").scrollspy({target:"#navSpy"}),a(".hamburger").click(function(){a(this).toggleClass("is-active"),a("header nav").toggleClass("open"),a("body").toggleClass("appleFix")}),a("img.svg").each(function(){var i=a(this),n=i.attr("id"),o=i.attr("class"),t=i.attr("src");a.get(t,function(t){var e=a(t).find("svg");void 0!==n&&(e=e.attr("id",n)),void 0!==o&&(e=e.attr("class",o+" replaced-svg")),!(e=e.removeAttr("xmlns:a")).attr("viewBox")&&e.attr("height")&&e.attr("width")&&e.attr("viewBox","0 0 "+e.attr("height")+" "+e.attr("width")),i.replaceWith(e)},"xml")}),a(function(){a('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")===this.pathname.replace(/^\//,"")&&location.hostname===this.hostname){var t=a(this.hash);if((t=t.length?t:a("[name="+this.hash.slice(1)+"]")).length)return a("html, body").animate({scrollTop:t.offset().top},750),!1}})}),a(".wpcf7 br").remove(),a(".wpcf7 .moreBtn").click(function(){a(this).next().toggleClass("open")}),t(),a("#cookieBtn").click(function(){t()})})}(jQuery);