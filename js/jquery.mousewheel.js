! function(e) {
    function n(n) {
        var t = n || window.event,
            i = [].slice.call(arguments, 1),
            l = 0,
            s = 0,
            o = 0;
        return n = e.event.fix(t), n.type = "mousewheel", t.wheelDelta && (l = t.wheelDelta / 120), t.detail && (l = -t.detail / 3), o = l, t.axis !== undefined && t.axis === t.HORIZONTAL_AXIS && (o = 0, s = -1 * l), t.wheelDeltaY !== undefined && (o = t.wheelDeltaY / 120), t.wheelDeltaX !== undefined && (s = -1 * t.wheelDeltaX / 120), i.unshift(n, l, s, o), (e.event.dispatch || e.event.handle).apply(this, i)
    }
    var t = ["DOMMouseScroll", "mousewheel"];
    if (e.event.fixHooks)
        for (var i = t.length; i;) e.event.fixHooks[t[--i]] = e.event.mouseHooks;
    e.event.special.mousewheel = {
        setup: function() {
            if (this.addEventListener)
                for (var e = t.length; e;) this.addEventListener(t[--e], n, !1);
            else this.onmousewheel = n
        },
        teardown: function() {
            if (this.removeEventListener)
                for (var e = t.length; e;) this.removeEventListener(t[--e], n, !1);
            else this.onmousewheel = null
        }
    }, e.fn.extend({
        mousewheel: function(e) {
            return e ? this.bind("mousewheel", e) : this.trigger("mousewheel")
        },
        unmousewheel: function(e) {
            return this.unbind("mousewheel", e)
        }
    })
}(jQuery);