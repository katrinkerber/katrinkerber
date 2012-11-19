/*! fancyBox v2.1.1 fancyapps.com | fancyapps.com/fancybox/#license */
(function(v,q,f,r){var p=f(v),n=f(q),b=f.fancybox=function(){b.open.apply(this,arguments)},A=null,m=q.createTouch!==r,y=function(a){return a&&a.hasOwnProperty&&a instanceof f},t=function(a){return a&&"string"===f.type(a)},D=function(a){return t(a)&&0<a.indexOf("%")},k=function(a,d){var e=parseInt(a,10)||0;d&&D(a)&&(e*=b.getViewport()[d]/100);return Math.ceil(e)},w=function(a,b){return k(a,b)+"px"};f.extend(b,{version:"2.1.1",defaults:{padding:15,margin:20,width:800,height:600,minWidth:100,minHeight:100,
maxWidth:9999,maxHeight:9999,autoSize:!0,autoHeight:!1,autoWidth:!1,autoResize:!m,autoCenter:!m,fitToView:!0,aspectRatio:!1,topRatio:0.5,leftRatio:0.5,scrolling:"auto",wrapCSS:"",arrows:!0,closeBtn:!0,closeClick:!1,nextClick:!1,mouseWheel:!0,autoPlay:!1,playSpeed:3E3,preload:3,modal:!1,loop:!0,ajax:{dataType:"html",headers:{"X-fancyBox":!0}},iframe:{scrolling:"auto",preload:!0},swf:{wmode:"transparent",allowfullscreen:"true",allowscriptaccess:"always"},keys:{next:{13:"left",34:"up",39:"left",40:"up"},
prev:{8:"right",33:"down",37:"right",38:"down"},close:[27],play:[32],toggle:[70]},direction:{next:"left",prev:"right"},scrollOutside:!0,index:0,type:null,href:null,content:null,title:null,tpl:{wrap:'<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',image:'<img class="fancybox-image" src="{href}" alt="" />',iframe:'<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0"'+
(f.browser.msie?' allowtransparency="true"':"")+"></iframe>",error:'<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',closeBtn:'<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',next:'<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',prev:'<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'},openEffect:"fade",openSpeed:250,openEasing:"swing",
openOpacity:!0,openMethod:"zoomIn",closeEffect:"fade",closeSpeed:250,closeEasing:"swing",closeOpacity:!0,closeMethod:"zoomOut",nextEffect:"elastic",nextSpeed:250,nextEasing:"swing",nextMethod:"changeIn",prevEffect:"elastic",prevSpeed:250,prevEasing:"swing",prevMethod:"changeOut",helpers:{overlay:!0,title:!0},onCancel:f.noop,beforeLoad:f.noop,afterLoad:f.noop,beforeShow:f.noop,afterShow:f.noop,beforeChange:f.noop,beforeClose:f.noop,afterClose:f.noop},group:{},opts:{},previous:null,coming:null,current:null,
isActive:!1,isOpen:!1,isOpened:!1,wrap:null,skin:null,outer:null,inner:null,player:{timer:null,isActive:!1},ajaxLoad:null,imgPreload:null,transitions:{},helpers:{},open:function(a,d){if(a&&(f.isPlainObject(d)||(d={}),!1!==b.close(!0)))return f.isArray(a)||(a=y(a)?f(a).get():[a]),f.each(a,function(e,c){var j={},g,h,i,l,k;"object"===f.type(c)&&(c.nodeType&&(c=f(c)),y(c)?(j={href:c.data("fancybox-href")||c.attr("href"),title:c.data("fancybox-title")||c.attr("title"),isDom:!0,element:c},f.metadata&&f.extend(!0,
j,c.metadata())):j=c);g=d.href||j.href||(t(c)?c:null);h=d.title!==r?d.title:j.title||"";l=(i=d.content||j.content)?"html":d.type||j.type;!l&&j.isDom&&(l=c.data("fancybox-type"),l||(l=(l=c.prop("class").match(/fancybox\.(\w+)/))?l[1]:null));t(g)&&(l||(b.isImage(g)?l="image":b.isSWF(g)?l="swf":"#"===g.charAt(0)?l="inline":t(c)&&(l="html",i=c)),"ajax"===l&&(k=g.split(/\s+/,2),g=k.shift(),k=k.shift()));i||("inline"===l?g?i=f(t(g)?g.replace(/.*(?=#[^\s]+$)/,""):g):j.isDom&&(i=c):"html"===l?i=g:!l&&(!g&&
j.isDom)&&(l="inline",i=c));f.extend(j,{href:g,type:l,content:i,title:h,selector:k});a[e]=j}),b.opts=f.extend(!0,{},b.defaults,d),d.keys!==r&&(b.opts.keys=d.keys?f.extend({},b.defaults.keys,d.keys):!1),b.group=a,b._start(b.opts.index)},cancel:function(){var a=b.coming;a&&!1!==b.trigger("onCancel")&&(b.hideLoading(),b.ajaxLoad&&b.ajaxLoad.abort(),b.ajaxLoad=null,b.imgPreload&&(b.imgPreload.onload=b.imgPreload.onerror=null),a.wrap&&a.wrap.stop(!0).trigger("onReset").remove(),b.current||b.trigger("afterClose"),
b.coming=null)},close:function(a){b.cancel();!1!==b.trigger("beforeClose")&&(b.unbindEvents(),!b.isOpen||!0===a?(f(".fancybox-wrap").stop(!0).trigger("onReset").remove(),b._afterZoomOut()):(b.isOpen=b.isOpened=!1,b.isClosing=!0,f(".fancybox-item, .fancybox-nav").remove(),b.wrap.stop(!0,!0).removeClass("fancybox-opened"),"fixed"===b.wrap.css("position")&&b.wrap.css(b._getPosition(!0)),b.transitions[b.current.closeMethod]()))},play:function(a){var d=function(){clearTimeout(b.player.timer)},e=function(){d();
b.current&&b.player.isActive&&(b.player.timer=setTimeout(b.next,b.current.playSpeed))},c=function(){d();f("body").unbind(".player");b.player.isActive=!1;b.trigger("onPlayEnd")};if(!0===a||!b.player.isActive&&!1!==a){if(b.current&&(b.current.loop||b.current.index<b.group.length-1))b.player.isActive=!0,f("body").bind({"afterShow.player onUpdate.player":e,"onCancel.player beforeClose.player":c,"beforeLoad.player":d}),e(),b.trigger("onPlayStart")}else c()},next:function(a){var d=b.current;d&&(t(a)||(a=
d.direction.next),b.jumpto(d.index+1,a,"next"))},prev:function(a){var d=b.current;d&&(t(a)||(a=d.direction.prev),b.jumpto(d.index-1,a,"prev"))},jumpto:function(a,d,e){var c=b.current;c&&(a=k(a),b.direction=d||c.direction[a>=c.index?"next":"prev"],b.router=e||"jumpto",c.loop&&(0>a&&(a=c.group.length+a%c.group.length),a%=c.group.length),c.group[a]!==r&&(b.cancel(),b._start(a)))},reposition:function(a,d){var e;b.isOpen&&(e=b._getPosition(d),a&&"scroll"===a.type?(delete e.position,b.wrap.stop(!0,!0).animate(e,
200)):b.wrap.css(e))},update:function(a){var d=a&&a.type,e=!d||"orientationchange"===d;e&&(clearTimeout(A),A=null);if(b.isOpen&&!A){if(e||m)b.wrap.removeAttr("style").addClass("fancybox-tmp"),b.trigger("onUpdate");A=setTimeout(function(){var c=b.current;c&&(b.wrap.removeClass("fancybox-tmp"),"scroll"!==d&&b._setDimension(),"scroll"===d&&c.canShrink||b.reposition(a),b.trigger("onUpdate"),A=null)},m?500:e?20:300)}},toggle:function(a){b.isOpen&&(b.current.fitToView="boolean"===f.type(a)?a:!b.current.fitToView,
b.update())},hideLoading:function(){n.unbind("keypress.fb");f("#fancybox-loading").remove()},showLoading:function(){var a,d;b.hideLoading();n.bind("keypress.fb",function(a){if(27===(a.which||a.keyCode))a.preventDefault(),b.cancel()});a=f('<div id="fancybox-loading"><div></div></div>').click(b.cancel).appendTo("body");b.defaults.fixed||(d=b.getViewport(),a.css({position:"absolute",top:0.5*d.h+d.y,left:0.5*d.w+d.x}))},getViewport:function(){var a=b.current&&b.current.locked||!1,d={x:p.scrollLeft(),
y:p.scrollTop()};a?(d.w=a[0].clientWidth,d.h=a[0].clientHeight):(d.w=m&&v.innerWidth?v.innerWidth:p.width(),d.h=m&&v.innerHeight?v.innerHeight:p.height());return d},unbindEvents:function(){b.wrap&&y(b.wrap)&&b.wrap.unbind(".fb");n.unbind(".fb");p.unbind(".fb")},bindEvents:function(){var a=b.current,d;a&&(p.bind("orientationchange.fb"+(a.autoResize?" resize.fb":"")+(a.autoCenter&&!a.locked?" scroll.fb":""),b.update),(d=a.keys)&&n.bind("keydown.fb",function(e){var c=e.which||e.keyCode,j=e.target||e.srcElement;
!e.ctrlKey&&(!e.altKey&&!e.shiftKey&&!e.metaKey&&(!j||!j.type&&!f(j).is("[contenteditable]")))&&f.each(d,function(d,j){if(1<a.group.length&&j[c]!==r)return b[d](j[c]),e.preventDefault(),!1;if(-1<f.inArray(c,j))return b[d](),e.preventDefault(),!1})}),f.fn.mousewheel&&a.mouseWheel&&b.wrap.bind("mousewheel.fb",function(d,c,j,g){for(var h=f(d.target||null),i=!1;h.length&&!i&&!h.is(".fancybox-skin")&&!h.is(".fancybox-wrap");)i=h[0]&&!(h[0].style.overflow&&"hidden"===h[0].style.overflow)&&(h[0].clientWidth&&
h[0].scrollWidth>h[0].clientWidth||h[0].clientHeight&&h[0].scrollHeight>h[0].clientHeight),h=f(h).parent();if(0!==c&&!i&&1<b.group.length&&!a.canShrink){if(0<g||0<j)b.prev(0<g?"down":"left");else if(0>g||0>j)b.next(0>g?"up":"right");d.preventDefault()}}))},trigger:function(a,d){var e,c=d||b.coming||b.current;if(c){f.isFunction(c[a])&&(e=c[a].apply(c,Array.prototype.slice.call(arguments,1)));if(!1===e)return!1;"onCancel"===a&&!b.isOpened&&(b.isActive=!1);c.helpers&&f.each(c.helpers,function(d,e){e&&
(b.helpers[d]&&f.isFunction(b.helpers[d][a]))&&(e=f.extend(!0,{},b.helpers[d].defaults,e),b.helpers[d][a](e,c))});f.event.trigger(a+".fb")}},isImage:function(a){return t(a)&&a.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp)((\?|#).*)?$)/i)},isSWF:function(a){return t(a)&&a.match(/\.(swf)((\?|#).*)?$/i)},_start:function(a){var d={},e,c,a=k(a);e=b.group[a]||null;if(!e)return!1;d=f.extend(!0,{},b.opts,e);e=d.margin;c=d.padding;"number"===f.type(e)&&(d.margin=[e,e,e,e]);"number"===f.type(c)&&
(d.padding=[c,c,c,c]);d.modal&&f.extend(!0,d,{closeBtn:!1,closeClick:!1,nextClick:!1,arrows:!1,mouseWheel:!1,keys:null,helpers:{overlay:{closeClick:!1}}});d.autoSize&&(d.autoWidth=d.autoHeight=!0);"auto"===d.width&&(d.autoWidth=!0);"auto"===d.height&&(d.autoHeight=!0);d.group=b.group;d.index=a;b.coming=d;if(!1===b.trigger("beforeLoad"))b.coming=null;else{c=d.type;e=d.href;if(!c)return b.coming=null,b.current&&b.router&&"jumpto"!==b.router?(b.current.index=a,b[b.router](b.direction)):!1;b.isActive=
!0;if("image"===c||"swf"===c)d.autoHeight=d.autoWidth=!1,d.scrolling="visible";"image"===c&&(d.aspectRatio=!0);"iframe"===c&&m&&(d.scrolling="scroll");d.wrap=f(d.tpl.wrap).addClass("fancybox-"+(m?"mobile":"desktop")+" fancybox-type-"+c+" fancybox-tmp "+d.wrapCSS).appendTo(d.parent||"body");f.extend(d,{skin:f(".fancybox-skin",d.wrap),outer:f(".fancybox-outer",d.wrap),inner:f(".fancybox-inner",d.wrap)});f.each(["Top","Right","Bottom","Left"],function(a,b){d.skin.css("padding"+b,w(d.padding[a]))});b.trigger("onReady");
if("inline"===c||"html"===c){if(!d.content||!d.content.length)return b._error("content")}else if(!e)return b._error("href");"image"===c?b._loadImage():"ajax"===c?b._loadAjax():"iframe"===c?b._loadIframe():b._afterLoad()}},_error:function(a){f.extend(b.coming,{type:"html",autoWidth:!0,autoHeight:!0,minWidth:0,minHeight:0,scrolling:"no",hasError:a,content:b.coming.tpl.error});b._afterLoad()},_loadImage:function(){var a=b.imgPreload=new Image;a.onload=function(){this.onload=this.onerror=null;b.coming.width=
this.width;b.coming.height=this.height;b._afterLoad()};a.onerror=function(){this.onload=this.onerror=null;b._error("image")};a.src=b.coming.href;(a.complete===r||!a.complete)&&b.showLoading()},_loadAjax:function(){var a=b.coming;b.showLoading();b.ajaxLoad=f.ajax(f.extend({},a.ajax,{url:a.href,error:function(a,e){b.coming&&"abort"!==e?b._error("ajax",a):b.hideLoading()},success:function(d,e){"success"===e&&(a.content=d,b._afterLoad())}}))},_loadIframe:function(){var a=b.coming,d=f(a.tpl.iframe.replace(/\{rnd\}/g,
(new Date).getTime())).attr("scrolling",m?"auto":a.iframe.scrolling).attr("src",a.href);f(a.wrap).bind("onReset",function(){try{f(this).find("iframe").hide().attr("src","//about:blank").end().empty()}catch(a){}});a.iframe.preload&&(b.showLoading(),d.one("load",function(){f(this).data("ready",1);m||f(this).bind("load.fb",b.update);f(this).parents(".fancybox-wrap").width("100%").removeClass("fancybox-tmp").show();b._afterLoad()}));a.content=d.appendTo(a.inner);a.iframe.preload||b._afterLoad()},_preloadImages:function(){var a=
b.group,d=b.current,e=a.length,c=d.preload?Math.min(d.preload,e-1):0,f,g;for(g=1;g<=c;g+=1)f=a[(d.index+g)%e],"image"===f.type&&f.href&&((new Image).src=f.href)},_afterLoad:function(){var a=b.coming,d=b.current,e,c,j,g,h;b.hideLoading();if(a&&!1!==b.isActive)if(!1===b.trigger("afterLoad",a,d))a.wrap.stop(!0).trigger("onReset").remove(),b.coming=null;else{d&&(b.trigger("beforeChange",d),d.wrap.stop(!0).removeClass("fancybox-opened").find(".fancybox-item, .fancybox-nav").remove(),"fixed"===d.wrap.css("position")&&
d.wrap.css(b._getPosition(!0)));b.unbindEvents();e=a.content;c=a.type;j=a.scrolling;f.extend(b,{wrap:a.wrap,skin:a.skin,outer:a.outer,inner:a.inner,current:a,previous:d});g=a.href;switch(c){case "inline":case "ajax":case "html":a.selector?e=f("<div>").html(e).find(a.selector):y(e)&&(e.data("fancybox-placeholder")||e.data("fancybox-placeholder",f('<div class="fancybox-placeholder"></div>').insertAfter(e).hide()),e=e.show().detach(),a.wrap.bind("onReset",function(){f(this).find(e).length&&e.hide().replaceAll(e.data("fancybox-placeholder")).data("fancybox-placeholder",
!1)}));break;case "image":e=a.tpl.image.replace("{href}",g);break;case "swf":e='<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="'+g+'"></param>',h="",f.each(a.swf,function(a,b){e+='<param name="'+a+'" value="'+b+'"></param>';h+=" "+a+'="'+b+'"'}),e+='<embed src="'+g+'" type="application/x-shockwave-flash" width="100%" height="100%"'+h+"></embed></object>"}(!y(e)||!e.parent().is(a.inner))&&a.inner.append(e);b.trigger("beforeShow");
a.inner.css("overflow","yes"===j?"scroll":"no"===j?"hidden":j);b._setDimension();a.wrap.removeClass("fancybox-tmp");a.pos=f.extend({},a.dim,b._getPosition(!0));b.isOpen=!1;b.coming=null;b.bindEvents();if(b.isOpened){if(d.prevMethod)b.transitions[d.prevMethod]()}else f(".fancybox-wrap").not(a.wrap).stop(!0).trigger("onReset").remove();b.transitions[b.isOpened?a.nextMethod:a.openMethod]();b._preloadImages()}},_setDimension:function(){var a=b.getViewport(),d=0,e=!1,c=!1,e=b.wrap,j=b.skin,g=b.inner,h=
b.current,c=h.width,i=h.height,l=h.minWidth,u=h.minHeight,m=h.maxWidth,n=h.maxHeight,t=h.scrolling,r=h.scrollOutside?h.scrollbarWidth:0,x=h.margin,p=x[1]+x[3],q=x[0]+x[2],y,s,v,B,z,E,A,C,F;e.add(j).add(g).width("auto").height("auto");x=j.outerWidth(!0)-j.width();y=j.outerHeight(!0)-j.height();s=p+x;v=q+y;B=D(c)?(a.w-s)*k(c)/100:c;z=D(i)?(a.h-v)*k(i)/100:i;if("iframe"===h.type){if(F=h.content,h.autoHeight&&1===F.data("ready"))try{F[0].contentWindow.document.location&&(g.width(B).height(9999),E=F.contents().find("body"),
r&&E.css("overflow-x","hidden"),z=E.height())}catch(G){}}else if(h.autoWidth||h.autoHeight)g.addClass("fancybox-tmp"),h.autoWidth||g.width(B),h.autoHeight||g.height(z),h.autoWidth&&(B=g.width()),h.autoHeight&&(z=g.height()),g.removeClass("fancybox-tmp");c=k(B);i=k(z);C=B/z;l=k(D(l)?k(l,"w")-s:l);m=k(D(m)?k(m,"w")-s:m);u=k(D(u)?k(u,"h")-v:u);n=k(D(n)?k(n,"h")-v:n);E=m;A=n;p=a.w-p;q=a.h-q;h.aspectRatio?(c>m&&(c=m,i=c/C),i>n&&(i=n,c=i*C),c<l&&(c=l,i=c/C),i<u&&(i=u,c=i*C)):(c=Math.max(l,Math.min(c,m)),
i=Math.max(u,Math.min(i,n)));if(h.fitToView)if(m=Math.min(a.w-s,m),n=Math.min(a.h-v,n),g.width(k(c)).height(k(i)),e.width(k(c+x)),a=e.width(),s=e.height(),h.aspectRatio)for(;(a>p||s>q)&&(c>l&&i>u)&&!(19<d++);)i=Math.max(u,Math.min(n,i-10)),c=i*C,c<l&&(c=l,i=c/C),c>m&&(c=m,i=c/C),g.width(k(c)).height(k(i)),e.width(k(c+x)),a=e.width(),s=e.height();else c=Math.max(l,Math.min(c,c-(a-p))),i=Math.max(u,Math.min(i,i-(s-q)));r&&("auto"===t&&i<z&&c+x+r<p)&&(c+=r);g.width(k(c)).height(k(i));e.width(k(c+x));
a=e.width();s=e.height();e=(a>p||s>q)&&c>l&&i>u;c=h.aspectRatio?c<E&&i<A&&c<B&&i<z:(c<E||i<A)&&(c<B||i<z);f.extend(h,{dim:{width:w(a),height:w(s)},origWidth:B,origHeight:z,canShrink:e,canExpand:c,wPadding:x,hPadding:y,wrapSpace:s-j.outerHeight(!0),skinSpace:j.height()-i});!F&&(h.autoHeight&&i>u&&i<n&&!c)&&g.height("auto")},_getPosition:function(a){var d=b.current,e=b.getViewport(),c=d.margin,f=b.wrap.width()+c[1]+c[3],g=b.wrap.height()+c[0]+c[2],c={position:"absolute",top:c[0],left:c[3]};d.autoCenter&&
d.fixed&&!a&&g<=e.h&&f<=e.w?c.position="fixed":d.locked||(c.top+=e.y,c.left+=e.x);c.top=w(Math.max(c.top,c.top+(e.h-g)*d.topRatio));c.left=w(Math.max(c.left,c.left+(e.w-f)*d.leftRatio));return c},_afterZoomIn:function(){var a=b.current;a&&(b.isOpen=b.isOpened=!0,b.wrap.addClass("fancybox-opened").css("overflow","visible"),b.reposition(),(a.closeClick||a.nextClick)&&b.inner.css("cursor","pointer").bind("click.fb",function(d){if(!f(d.target).is("a")&&!f(d.target).parent().is("a"))b[a.closeClick?"close":
"next"]()}),a.closeBtn&&f(a.tpl.closeBtn).appendTo(b.skin).bind("click.fb",b.close),a.arrows&&1<b.group.length&&((a.loop||0<a.index)&&f(a.tpl.prev).appendTo(b.outer).bind("click.fb",b.prev),(a.loop||a.index<b.group.length-1)&&f(a.tpl.next).appendTo(b.outer).bind("click.fb",b.next)),b.trigger("afterShow"),!a.loop&&a.index===a.group.length-1?b.play(!1):b.opts.autoPlay&&!b.player.isActive&&(b.opts.autoPlay=!1,b.play()))},_afterZoomOut:function(){var a=b.current;f(".fancybox-wrap").stop(!0).trigger("onReset").remove();
f.extend(b,{group:{},opts:{},router:!1,current:null,isActive:!1,isOpened:!1,isOpen:!1,isClosing:!1,wrap:null,skin:null,outer:null,inner:null});b.trigger("afterClose",a)}});b.transitions={getOrigPosition:function(){var a=b.current,d=a.element,e=a.orig,c={},f=50,g=50,h=a.hPadding,i=a.wPadding,l=b.getViewport();!e&&(a.isDom&&d.is(":visible"))&&(e=d.find("img:first"),e.length||(e=d));y(e)?(c=e.offset(),e.is("img")&&(f=e.outerWidth(),g=e.outerHeight())):(c.top=l.y+(l.h-g)*a.topRatio,c.left=l.x+(l.w-f)*
a.leftRatio);a.locked&&(c.top-=l.y,c.left-=l.x);return c={top:w(c.top-h*a.topRatio),left:w(c.left-i*a.leftRatio),width:w(f+i),height:w(g+h)}},step:function(a,d){var e,c,f=d.prop;c=b.current;var g=c.wrapSpace,h=c.skinSpace;if("width"===f||"height"===f)e=d.end===d.start?1:(a-d.start)/(d.end-d.start),b.isClosing&&(e=1-e),c="width"===f?c.wPadding:c.hPadding,c=a-c,b.skin[f](k("width"===f?c:c-g*e)),b.inner[f](k("width"===f?c:c-g*e-h*e))},zoomIn:function(){var a=b.current,d=a.pos,e=a.openEffect,c="elastic"===
e,j=f.extend({opacity:1},d);delete j.position;c?(d=this.getOrigPosition(),a.openOpacity&&(d.opacity=0.1)):"fade"===e&&(d.opacity=0.1);b.wrap.css(d).animate(j,{duration:"none"===e?0:a.openSpeed,easing:a.openEasing,step:c?this.step:null,complete:b._afterZoomIn})},zoomOut:function(){var a=b.current,d=a.closeEffect,e="elastic"===d,c={opacity:0.1};e&&(c=this.getOrigPosition(),a.closeOpacity&&(c.opacity=0.1));b.wrap.animate(c,{duration:"none"===d?0:a.closeSpeed,easing:a.closeEasing,step:e?this.step:null,
complete:b._afterZoomOut})},changeIn:function(){var a=b.current,d=a.nextEffect,e=a.pos,c={opacity:1},f=b.direction,g;e.opacity=0.1;"elastic"===d&&(g="down"===f||"up"===f?"top":"left","down"===f||"right"===f?(e[g]=w(k(e[g])-200),c[g]="+=200px"):(e[g]=w(k(e[g])+200),c[g]="-=200px"));"none"===d?b._afterZoomIn():b.wrap.css(e).animate(c,{duration:a.nextSpeed,easing:a.nextEasing,complete:b._afterZoomIn})},changeOut:function(){var a=b.previous,d=a.prevEffect,e={opacity:0.1},c=b.direction;"elastic"===d&&
(e["down"===c||"up"===c?"top":"left"]=("up"===c||"left"===c?"-":"+")+"=200px");a.wrap.animate(e,{duration:"none"===d?0:a.prevSpeed,easing:a.prevEasing,complete:function(){f(this).trigger("onReset").remove()}})}};b.helpers.overlay={defaults:{closeClick:!0,speedOut:200,showEarly:!0,css:{},locked:!0},overlay:null,update:function(){var a="100%",b;this.overlay.width(a).height("100%");f.browser.msie?(b=Math.max(q.documentElement.offsetWidth,q.body.offsetWidth),n.width()>b&&(a=n.width())):n.width()>p.width()&&
(a=n.width());this.overlay.width(a).height(n.height())},onReady:function(a,b){f(".fancybox-overlay").stop(!0,!0);this.overlay||f.extend(this,{overlay:f('<div class="fancybox-overlay"></div>').appendTo(b.parent||"body"),margin:n.height()>p.height()||"scroll"===f("body").css("overflow-y")?f("body").css("margin-right"):!1,el:q.all&&!q.querySelector?f("html"):f("body")});b.fixed&&!m&&(this.overlay.addClass("fancybox-overlay-fixed"),b.autoCenter&&a.locked&&(b.locked=this.overlay.append(b.wrap)));!0===
a.showEarly&&this.beforeShow.apply(this,arguments)},beforeShow:function(a,d){var e=this.overlay.unbind(".fb").width("auto").height("auto").css(a.css);a.closeClick&&e.bind("click.fb",function(a){f(a.target).hasClass("fancybox-overlay")&&b.close()});d.fixed&&!m?d.locked&&(this.el.addClass("fancybox-lock"),!1!==this.margin&&f("body").css("margin-right",k(this.margin)+d.scrollbarWidth)):this.update();e.show()},onUpdate:function(a,b){(!b.fixed||m)&&this.update()},afterClose:function(a){var d=this,a=a.speedOut||
0;d.overlay&&!b.isActive&&d.overlay.fadeOut(a||0,function(){f("body").css("margin-right",d.margin);d.el.removeClass("fancybox-lock");d.overlay.remove();d.overlay=null})}};b.helpers.title={defaults:{type:"float",position:"bottom"},beforeShow:function(a){var d=b.current,e=d.title,c=a.type;f.isFunction(e)&&(e=e.call(d.element,d));if(t(e)&&""!==f.trim(e)){d=f('<div class="fancybox-title fancybox-title-'+c+'-wrap">'+e+"</div>");switch(c){case "inside":c=b.skin;break;case "outside":c=b.wrap;break;case "over":c=
b.inner;break;default:c=b.skin,d.appendTo("body"),f.browser.msie&&d.width(d.width()),d.wrapInner('<span class="child"></span>'),b.current.margin[2]+=Math.abs(k(d.css("margin-bottom")))}d["top"===a.position?"prependTo":"appendTo"](c)}}};f.fn.fancybox=function(a){var d,e=f(this),c=this.selector||"",j=function(g){var h=f(this).blur(),i=d,j,k;!g.ctrlKey&&(!g.altKey&&!g.shiftKey&&!g.metaKey)&&!h.is(".fancybox-wrap")&&(j=a.groupAttr||"data-fancybox-group",k=h.attr(j),k||(j="rel",k=h.get(0)[j]),k&&(""!==
k&&"nofollow"!==k)&&(h=c.length?f(c):e,h=h.filter("["+j+'="'+k+'"]'),i=h.index(this)),a.index=i,!1!==b.open(h,a)&&g.preventDefault())},a=a||{};d=a.index||0;!c||!1===a.live?e.unbind("click.fb-start").bind("click.fb-start",j):n.undelegate(c,"click.fb-start").delegate(c+":not('.fancybox-item, .fancybox-nav')","click.fb-start",j);return this};n.ready(function(){f.scrollbarWidth===r&&(f.scrollbarWidth=function(){var a=f('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo("body"),
b=a.children(),b=b.innerWidth()-b.height(99).innerWidth();a.remove();return b});if(f.support.fixedPosition===r){var a=f.support,d=f('<div style="position:fixed;top:20px;"></div>').appendTo("body"),e=20===d[0].offsetTop||15===d[0].offsetTop;d.remove();a.fixedPosition=e}f.extend(b.defaults,{scrollbarWidth:f.scrollbarWidth(),fixed:f.support.fixedPosition,parent:f("body")})})})(window,document,jQuery);
 

 /*!
 * Buttons helper for fancyBox
 * version: 1.0.5 (Mon, 15 Oct 2012)
 * @requires fancyBox v2.0 or later
 *
 * Usage:
 *     $(".fancybox").fancybox({
 *         helpers : {
 *             buttons: {
 *                 position : 'top'
 *             }
 *         }
 *     });
 *
 */
(function ($) {
  //Shortcut for fancyBox object
  var F = $.fancybox;

  //Add helper object
  F.helpers.buttons = {
    defaults : {
      skipSingle : false, // disables if gallery contains single image
      position   : 'top', // 'top' or 'bottom'
      tpl        : '<div id="fancybox-buttons"><ul><li><a class="btnPrev" title="Previous" href="javascript:;"></a></li><li><a class="btnPlay" title="Start slideshow" href="javascript:;"></a></li><li><a class="btnNext" title="Next" href="javascript:;"></a></li><li><a class="btnToggle" title="Toggle size" href="javascript:;"></a></li><li><a class="btnClose" title="Close" href="javascript:jQuery.fancybox.close();"></a></li></ul></div>'
    },

    list : null,
    buttons: null,

    beforeLoad: function (opts, obj) {
      //Remove self if gallery do not have at least two items

      if (opts.skipSingle && obj.group.length < 2) {
        obj.helpers.buttons = false;
        obj.closeBtn = true;

        return;
      }

      //Increase top margin to give space for buttons
      obj.margin[ opts.position === 'bottom' ? 2 : 0 ] += 30;
    },

    onPlayStart: function () {
      if (this.buttons) {
        this.buttons.play.attr('title', 'Pause slideshow').addClass('btnPlayOn');
      }
    },

    onPlayEnd: function () {
      if (this.buttons) {
        this.buttons.play.attr('title', 'Start slideshow').removeClass('btnPlayOn');
      }
    },

    afterShow: function (opts, obj) {
      var buttons = this.buttons;

      if (!buttons) {
        this.list = $(opts.tpl).addClass(opts.position).appendTo('body');

        buttons = {
          prev   : this.list.find('.btnPrev').click( F.prev ),
          next   : this.list.find('.btnNext').click( F.next ),
          play   : this.list.find('.btnPlay').click( F.play ),
          toggle : this.list.find('.btnToggle').click( F.toggle )
        }
      }

      //Prev
      if (obj.index > 0 || obj.loop) {
        buttons.prev.removeClass('btnDisabled');
      } else {
        buttons.prev.addClass('btnDisabled');
      }

      //Next / Play
      if (obj.loop || obj.index < obj.group.length - 1) {
        buttons.next.removeClass('btnDisabled');
        buttons.play.removeClass('btnDisabled');

      } else {
        buttons.next.addClass('btnDisabled');
        buttons.play.addClass('btnDisabled');
      }

      this.buttons = buttons;

      this.onUpdate(opts, obj);
    },

    onUpdate: function (opts, obj) {
      var toggle;

      if (!this.buttons) {
        return;
      }

      toggle = this.buttons.toggle.removeClass('btnDisabled btnToggleOn');

      //Size toggle button
      if (obj.canShrink) {
        toggle.addClass('btnToggleOn');

      } else if (!obj.canExpand) {
        toggle.addClass('btnDisabled');
      }
    },

    beforeClose: function () {
      if (this.list) {
        this.list.remove();
      }

      this.list    = null;
      this.buttons = null;
    }
  };

}(jQuery));