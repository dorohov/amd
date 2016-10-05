'use strict';


window.onerror = function(error, url, lineNumber, column, errorObj) {
	console.log('Error FECSS: ' + url + ':' + lineNumber + ':' + column + ': ' + JSON.stringify(error) + '\n' + JSON.stringify(errorObj));
	return;
}


function fecss_ScreenJS(){var e=this;e.screen={w:0,h:0,type:"xs",orientation:"portrait"},e.__resizefunctions={xs:{"default":[],portrait:[],landscape:[]},sm:{"default":[],portrait:[],landscape:[]},md:{"default":[],portrait:[],landscape:[]},lg:{"default":[],portrait:[],landscape:[]}},e.isXS=function(){return e.screen.w<768},e.isSM=function(){return e.screen.w<992&&e.screen.w>767},e.isMD=function(){return e.screen.w<1200&&e.screen.w>991},e.isLG=function(){return e.screen.w>1199},e.screenIs=function(){var n="noname";return e.isXS()?n="xs":e.isSM()?n="sm":e.isMD()?n="md":e.isLG()&&(n="lg"),n},e.isPortrait=function(){return e.screen.h>e.screen.w},e.isLandscape=function(){return e.screen.w>e.screen.h},e.orientationIs=function(){var n="noname";return e.isPortrait()?n="portrait":e.isLandscape()&&(n="landscape"),n},e.is=function(n){return n==e.screenIs()||n==e.orientationIs()},e.onResize=function(n,r){if(n.type){var t=e.__resizefunctions[n.type];n.orientation?t[n.orientation].push(r):t["default"].push(r)}},e.resizeCall=function(n){if(n.type){if(e.__resizefunctions[n.type]["default"])for(var r=0;r<e.__resizefunctions[n.type]["default"].length;r++){var t=e.__resizefunctions[n.type]["default"][r];t(n)}if(e.__resizefunctions[n.type][n.orientation])for(var r=0;r<e.__resizefunctions[n.type][n.orientation].length;r++){var t=e.__resizefunctions[n.type][n.orientation][r];t(n)}}},e.setScreen=function(){return e.screen.w=$(window).outerWidth(!0),e.screen.h=$(window).outerHeight(!0),e.screen.type=e.screenIs(),e.screen.orientation=e.orientationIs(),e.resizeCall(e.screen),console.log(e.screen),e.screen}}var screenJS=new fecss_ScreenJS;$(window).on("resize",function(){screenJS.setScreen()}),function(e){var n=jQuery.fn.addClass,r=jQuery.fn.removeClass,t=jQuery.fn.toggleClass;e.fn.addClass=function(){var r=n.apply(this,arguments);return e(this).trigger("changeClass",["add"]),r},e.fn.removeClass=function(){var n=r.apply(this,arguments);return e(this).trigger("changeClass",["remove"]),n},e.fn.toggleClass=function(){var n=t.apply(this,arguments);return e(this).trigger("changeClass",["toggle"]),n}}(jQuery);



$(function() {
	
	/*
	Создание триггеров на элементы, в основном, на body
	*/
	$(document.body).on("fecss.default",null,{},function(e){console.log("body trigger:fecss.default")}),$(document.body).on("fecss.init",null,{},function(e){console.log("body trigger:fecss.init");var o=(new Date).getTime();$(document.body).attr("data-created_at",o),$(document.body).trigger("fecss.nedb.visit.insert",[{href:window.location.href,referrer:document.referrer}])}),$(document.body).on("fecss.window.unload",null,{},function(e,o){console.log("body trigger:fecss.window.unload: "+JSON.stringify(o))}),$(document.body).on("fecss.ajax.success",null,{},function(e){console.log("body trigger:fecss.ajax.success")}),$(document.body).on("fecss.keydown",null,{},function(e,o){console.log("body trigger:fecss.keydown: "+JSON.stringify(o))}),$(document.body).on("DOMSubtreeModified",null,{},function(e,o){}),$(document.body).on("wheel mousewheel DOMMouseScroll MozMousePixelScroll",function(e){-e.originalEvent.deltaY||e.originalEvent.detail||e.originalEvent.wheelDelta});
$(document.body).on("click.fecss.page-loader.close-loader",".page-loader .close-loader",{},function(e){e.preventDefault(),console.log("body trigger:click.fecss.page-loader.close-loader"),$(".page-loader").removeClass("active")});
	
	
	/*
	Событие смены класса body
	*/
	$(document.body).on('changeClass', null, {} ,function(event, event_action){
		// event_action = add || remove || toggle
		
		$(function(){console.log("body trigger:changeClass action:"+event_action)});
	});
	
	
	/*
	События смены класса у любого элемента
	*/
		
	
	
	/*
	Основная логика сайта
	*/
	$(function(){var e="noname-browser",o=navigator.userAgent.toLowerCase();-1!=o.indexOf("msie")&&(e="msie"),-1!=o.indexOf("trident")&&(e="msie"),-1!=o.indexOf("konqueror")&&(e="konqueror"),-1!=o.indexOf("firefox")&&(e="firefox"),-1!=o.indexOf("safari")&&(e="safari"),-1!=o.indexOf("chrome")&&(e="chrome"),-1!=o.indexOf("chromium")&&(e="chromium"),-1!=o.indexOf("opera")&&(e="opera"),-1!=o.indexOf("yabrowser")&&(e="yabrowser"),$("html").eq(0).addClass(e)}),$(function(){$(document.body).on("keydown",function(e){e.stopPropagation(),$(document.body).trigger("fecss.keydown",[{alt:e.altKey,ctrl:e.ctrlKey,shift:e.shiftKey,meta:e.metaKey,key:e.which,liter:String.fromCharCode(e.which)}])})}),$(function(){moment.locale(window.navigator.userLanguage||window.navigator.language)});
$(".page-loader .close-loader").on("click",function(e){e.preventDefault(),$(".page-loader").removeClass("active")}),$(document.body).on("click.fecss",".page-loader.active ._czr__preloader-process-container ._czr__preloader-process-level",function(e){e.preventDefault(),$(".page-loader").data("window-can-close-it",!0).data("counter-can-close-it",!0).trigger("fecss.can-close-it")}),$(document.body).on("fecss.can-close-it",".page-loader",function(e){e.preventDefault(),$(this).data("counter-can-close-it")&&$(this).data("window-can-close-it")&&$(this).removeClass("active")}),$(window).load(function(e){$(".page-loader").data("window-can-close-it",!0).trigger("fecss.can-close-it"),$(".page-loader ._czr__preloader-process-container ._czr__preloader-process-level").data("fast-page-loading",!0)}),$(function(){var e=$(".page-loader.active"),a=$("._czr__preloader-process-container ._czr__preloader-process-level",e).eq(0);if(a.size()){var o=0;a.css({width:o+"%"}).attr("data-pos",o);var t=setInterval(function(){var e=Math.random();if(e>.5&&100>o){o++,$("._azbn__preloader-percent").text(o),a.data("fast-page-loading")&&(o+=6);a.css({width:o+"%"}).attr("data-pos",o)}else o>99&&(clearInterval(t),$(".page-loader").data("counter-can-close-it",!0).trigger("fecss.can-close-it"))},99)}});
$("img").addClass("img-responsive"),$(".text-block ul").addClass("ul-site");var url=window.location.pathname;$('.navbar-nav a[href="'+url+'"]').parent().addClass("active"),$('._fs__navbar a[href="'+url+'"]').parent().addClass("active"),$('.tabs-site a[href="'+url+'"]').parent().addClass("active"),$('.services-dropdown .dropdown-menu a[href="'+url+'"]').parent().addClass("active"),"/"!=url&&$('<li><a href="/">Главная</a></li>').prependTo($(".navbar-nav")),$(".text-block table").addClass("table table-bordered"),$("._sppc__item").hover(function(){$(this).addClass("active")},function(){$(this).removeClass("active")}),$("iframe").removeAttr("frameborder"),$("#getModal").click(function(){return $("#modal-enter").modal("hide"),setTimeout(function(){$("#modal-pass").modal("show")},500),!1}),$("._apc__slider").owlCarousel({margin:35,navText:[],nav:!0,dots:!1,responsive:{0:{items:1},400:{items:2},768:{items:3},1600:{items:4}}}),$(".gal-site").owlCarousel({margin:0,loop:!0,items:1,dots:!0,navText:[],autoplay:!0,autoplayTimeout:1e4,responsive:{0:{nav:!1},768:{nav:!0}}}),$(".fancybox").fancybox(),$(".fancybox-buttons").fancybox({openEffect:"none",closeEffect:"none",prevEffect:"none",nextEffect:"none",closeBtn:!1,helpers:{title:{type:"inside"},buttons:{}},afterLoad:function(){this.title=this.title}}),$("#index-svg path").hover(function(){$(this).addClass("active")},function(){$(this).removeClass("active")});

$(".news-item").hover(function(){$(this).addClass("active")},function(){$(this).removeClass("active")});
$(".partners-item").hover(function(){$(this).addClass("active")},function(){$(this).removeClass("active")});
	
	
	/*
	Событие смены размера экрана, генерация этого события
	*/
	$(window).on('resize',function(event){
		$(function(){var s={xs:{min:0,max:768},sm:{min:767,max:992},md:{min:991,max:1200},lg:{min:1199,max:1e4}},w={xs:{min:0,max:361},sm:{min:360,max:769},md:{min:768,max:961},lg:{min:960,max:1e4}},i="window-width",d="window-height",h=$(window).outerWidth(!0),m=$(window).outerHeight(!0),a=$("html body").eq(0);h<s.xs.max&&(a.hasClass("window-width-sm")&&a.removeClass("window-width-sm"),a.hasClass("window-width-md")&&a.removeClass("window-width-md"),a.hasClass("window-width-lg")&&a.removeClass("window-width-lg"),i="window-width-xs"),h>s.sm.min&&h<s.sm.max&&(a.hasClass("window-width-xs")&&a.removeClass("window-width-xs"),a.hasClass("window-width-md")&&a.removeClass("window-width-md"),a.hasClass("window-width-lg")&&a.removeClass("window-width-lg"),i="window-width-sm"),h>s.md.min&&h<s.md.max&&(a.hasClass("window-width-xs")&&a.removeClass("window-width-xs"),a.hasClass("window-width-sm")&&a.removeClass("window-width-sm"),a.hasClass("window-width-lg")&&a.removeClass("window-width-lg"),i="window-width-md"),h>s.lg.min&&(a.hasClass("window-width-xs")&&a.removeClass("window-width-xs"),a.hasClass("window-width-sm")&&a.removeClass("window-width-sm"),a.hasClass("window-width-md")&&a.removeClass("window-width-md"),i="window-width-lg"),m<w.xs.max&&(a.hasClass("window-height-sm")&&a.removeClass("window-height-sm"),a.hasClass("window-height-md")&&a.removeClass("window-height-md"),a.hasClass("window-height-lg")&&a.removeClass("window-height-lg"),d="window-height-xs"),m>w.sm.min&&m<w.sm.max&&(a.hasClass("window-height-xs")&&a.removeClass("window-height-xs"),a.hasClass("window-height-md")&&a.removeClass("window-height-md"),a.hasClass("window-height-lg")&&a.removeClass("window-height-lg"),d="window-height-sm"),m>w.md.min&&m<w.md.max&&(a.hasClass("window-height-xs")&&a.removeClass("window-height-xs"),a.hasClass("window-height-sm")&&a.removeClass("window-height-sm"),a.hasClass("window-height-lg")&&a.removeClass("window-height-lg"),d="window-height-md"),m>w.lg.min&&(a.hasClass("window-height-xs")&&a.removeClass("window-height-xs"),a.hasClass("window-height-sm")&&a.removeClass("window-height-sm"),a.hasClass("window-height-md")&&a.removeClass("window-height-md"),d="window-height-lg"),$("html body").eq(0).addClass(i).addClass(d)});
var h_window=$(window).height(),w_window=$(window).width(),h_navbar=$(".navbar-site").outerHeight(!0),h_navbar_header=$(".navbar-header").outerHeight(!0),h_navbar_fixed=$(".navbar-fixed-top").outerHeight(!0),h_header=$(".header-site").outerHeight(!0),h_footer=$(".footer-site").outerHeight(!0),h_resize=h_window-h_navbar-h_footer,h_resize_map=h_window-h_header-50,h_resize_xs=h_window;(device.mobile()||device.tablet())&&($(".navbar").addClass("navbar-fixed-top"),$(".director-text").appendTo(".director-block ._inner")),device.mobile()?$(".content-site.second").removeAttr("style"):$(".content-site.second").css("min-height",h_resize),$("nav.navbar-fixed-top").autoHidingNavbar();
	}).trigger('resize');
	
	
	/*
	Событие скроллинга экрана, генерация этого события
	*/
	$(window).on('scroll',function(event){
		$(function(){var a=$(document).scrollTop(),o=$(".go-to-top");o.hasClass("active")?200>a&&o.removeClass("active"):a>200&&o.addClass("active")});
	}).trigger('scroll');
	
	
	/*
	Событие ухода со страницы
	*/
	window.onbeforeunload = function(event) {
		//alert(event.target.URL);
		$('body').trigger('fecss.window.unload', [event]);
		return;//return false;
	}
	
	
	/*
	Событие инициализации fecss
	*/
	$(document.body).trigger('fecss.init');
	
	
});