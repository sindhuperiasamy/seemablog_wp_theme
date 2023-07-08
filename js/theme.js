respUtils = window._4ORMAT.importResponsiveUtilities(); 
setAssetsWidth(), 
$("body").hasClass("gallery") && initGallery()

function setAssetsWidth(e) {
    var t = e || 30;
    $(".gallery .assets").find(".asset").each(function() {
        t += $(this).outerWidth(!0)
    }), $(".gallery .assets").width(2 * t), $(".gallery .assets").width(t)
}

function initGallery() {
    
    var e = respUtils.device();
    if (e || (enable_scrolling())) 
	{
    }
}

function enable_scrolling() {
    var e = function() {
        return "scrollingElement" in document ? document.scrollingElement : -1 !== navigator.userAgent.indexOf("WebKit") ? document.body : document.documentElement
    };
    $(".container").mousewheel(function(t, i, s, n) {
        var a = 0,
            o = 0;
        if (o = Math.abs(s) >= Math.abs(n) ? -s : n, a = 40 * o, !$(t.target).parents(".jspScrollable").length) return $(window).width() <= 1024 ? $("#content")[0].scrollLeft -= a : e().scrollLeft -= a, !1
    })
}
