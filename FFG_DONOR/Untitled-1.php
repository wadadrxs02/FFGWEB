<!DOCTYPE html>
<html>

<head>
    <script>
        window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam.nr-data.net",
            "errorBeacon": "bam.nr-data.net",
            "licenseKey": "acc684c8ba",
            "applicationID": "109249773",
            "transactionName": "IltXRBYKCV4HRxsXB05EWEkJAAtGPVNbE1kSG1tZCAkWHQxQQw==",
            "queueTime": 4,
            "applicationTime": 25,
            "agent": ""
        }
    </script>
    <script>
        (window.NREUM || (NREUM = {})).loader_config = {
            licenseKey: "acc684c8ba",
            applicationID: "109249773"
        };
        window.NREUM || (NREUM = {}), __nr_require = function(e, n, t) {
            function r(t) {
                if (!n[t]) {
                    var i = n[t] = {
                        exports: {}
                    };
                    e[t][0].call(i.exports, function(n) {
                        var i = e[t][1][n];
                        return r(i || n)
                    }, i, i.exports)
                }
                return n[t].exports
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var i = 0; i < t.length; i++) r(t[i]);
            return r
        }({
            1: [function(e, n, t) {
                function r() {}

                function i(e, n, t) {
                    return function() {
                        return o(e, [u.now()].concat(f(arguments)), n ? null : this, t), n ? void 0 : this
                    }
                }
                var o = e("handle"),
                    a = e(4),
                    f = e(5),
                    c = e("ee").get("tracer"),
                    u = e("loader"),
                    s = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = s);
                var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    l = "api-",
                    d = l + "ixn-";
                a(p, function(e, n) {
                    s[n] = i(l + n, !0, "api")
                }), s.addPageAction = i(l + "addPageAction", !0), s.setCurrentRouteName = i(l + "routeName", !0), n.exports = newrelic, s.interaction = function() {
                    return (new r).get()
                };
                var m = r.prototype = {
                    createTracer: function(e, n) {
                        var t = {},
                            r = this,
                            i = "function" == typeof n;
                        return o(d + "tracer", [u.now(), e, t], r),
                            function() {
                                if (c.emit((i ? "" : "no-") + "fn-start", [u.now(), r, i], t), i) try {
                                    return n.apply(this, arguments)
                                } catch (e) {
                                    throw c.emit("fn-err", [arguments, this, e], t), e
                                } finally {
                                    c.emit("fn-end", [u.now()], t)
                                }
                            }
                    }
                };
                a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(e, n) {
                    m[n] = i(d + n)
                }), newrelic.noticeError = function(e, n) {
                    "string" == typeof e && (e = new Error(e)), o("err", [e, u.now(), !1, n])
                }
            }, {}],
            2: [function(e, n, t) {
                function r(e, n) {
                    var t = e.getEntries();
                    t.forEach(function(e) {
                        "first-paint" === e.name ? c("timing", ["fp", Math.floor(e.startTime)]) : "first-contentful-paint" === e.name && c("timing", ["fcp", Math.floor(e.startTime)])
                    })
                }

                function i(e, n) {
                    var t = e.getEntries();
                    t.length > 0 && c("lcp", [t[t.length - 1]])
                }

                function o(e) {
                    if (e instanceof s && !l) {
                        var n, t = Math.round(e.timeStamp);
                        n = t > 1e12 ? Date.now() - t : u.now() - t, l = !0, c("timing", ["fi", t, {
                            type: e.type,
                            fid: n
                        }])
                    }
                }
                if (!("init" in NREUM && "page_view_timing" in NREUM.init && "enabled" in NREUM.init.page_view_timing && NREUM.init.page_view_timing.enabled === !1)) {
                    var a, f, c = e("handle"),
                        u = e("loader"),
                        s = NREUM.o.EV;
                    if ("PerformanceObserver" in window && "function" == typeof window.PerformanceObserver) {
                        a = new PerformanceObserver(r), f = new PerformanceObserver(i);
                        try {
                            a.observe({
                                entryTypes: ["paint"]
                            }), f.observe({
                                entryTypes: ["largest-contentful-paint"]
                            })
                        } catch (p) {}
                    }
                    if ("addEventListener" in document) {
                        var l = !1,
                            d = ["click", "keydown", "mousedown", "pointerdown", "touchstart"];
                        d.forEach(function(e) {
                            document.addEventListener(e, o, !1)
                        })
                    }
                }
            }, {}],
            3: [function(e, n, t) {
                function r(e, n) {
                    if (!i) return !1;
                    if (e !== i) return !1;
                    if (!n) return !0;
                    if (!o) return !1;
                    for (var t = o.split("."), r = n.split("."), a = 0; a < r.length; a++)
                        if (r[a] !== t[a]) return !1;
                    return !0
                }
                var i = null,
                    o = null,
                    a = /Version\/(\S+)\s+Safari/;
                if (navigator.userAgent) {
                    var f = navigator.userAgent,
                        c = f.match(a);
                    c && f.indexOf("Chrome") === -1 && f.indexOf("Chromium") === -1 && (i = "Safari", o = c[1])
                }
                n.exports = {
                    agent: i,
                    version: o,
                    match: r
                }
            }, {}],
            4: [function(e, n, t) {
                function r(e, n) {
                    var t = [],
                        r = "",
                        o = 0;
                    for (r in e) i.call(e, r) && (t[o] = n(r, e[r]), o += 1);
                    return t
                }
                var i = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}],
            5: [function(e, n, t) {
                function r(e, n, t) {
                    n || (n = 0), "undefined" == typeof t && (t = e ? e.length : 0);
                    for (var r = -1, i = t - n || 0, o = Array(i < 0 ? 0 : i); ++r < i;) o[r] = e[n + r];
                    return o
                }
                n.exports = r
            }, {}],
            6: [function(e, n, t) {
                n.exports = {
                    exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
                }
            }, {}],
            ee: [function(e, n, t) {
                function r() {}

                function i(e) {
                    function n(e) {
                        return e && e instanceof r ? e : e ? c(e, f, o) : o()
                    }

                    function t(t, r, i, o) {
                        if (!l.aborted || o) {
                            e && e(t, r, i);
                            for (var a = n(i), f = v(t), c = f.length, u = 0; u < c; u++) f[u].apply(a, r);
                            var p = s[y[t]];
                            return p && p.push([b, t, r, a]), a
                        }
                    }

                    function d(e, n) {
                        h[e] = v(e).concat(n)
                    }

                    function m(e, n) {
                        var t = h[e];
                        if (t)
                            for (var r = 0; r < t.length; r++) t[r] === n && t.splice(r, 1)
                    }

                    function v(e) {
                        return h[e] || []
                    }

                    function g(e) {
                        return p[e] = p[e] || i(t)
                    }

                    function w(e, n) {
                        u(e, function(e, t) {
                            n = n || "feature", y[t] = n, n in s || (s[n] = [])
                        })
                    }
                    var h = {},
                        y = {},
                        b = {
                            on: d,
                            addEventListener: d,
                            removeEventListener: m,
                            emit: t,
                            get: g,
                            listeners: v,
                            context: n,
                            buffer: w,
                            abort: a,
                            aborted: !1
                        };
                    return b
                }

                function o() {
                    return new r
                }

                function a() {
                    (s.api || s.feature) && (l.aborted = !0, s = l.backlog = {})
                }
                var f = "nr@context",
                    c = e("gos"),
                    u = e(4),
                    s = {},
                    p = {},
                    l = n.exports = i();
                l.backlog = s
            }, {}],
            gos: [function(e, n, t) {
                function r(e, n, t) {
                    if (i.call(e, n)) return e[n];
                    var r = t();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(e, n, {
                            value: r,
                            writable: !0,
                            enumerable: !1
                        }), r
                    } catch (o) {}
                    return e[n] = r, r
                }
                var i = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}],
            handle: [function(e, n, t) {
                function r(e, n, t, r) {
                    i.buffer([e], r), i.emit(e, n, t)
                }
                var i = e("ee").get("handle");
                n.exports = r, r.ee = i
            }, {}],
            id: [function(e, n, t) {
                function r(e) {
                    var n = typeof e;
                    return !e || "object" !== n && "function" !== n ? -1 : e === window ? 0 : a(e, o, function() {
                        return i++
                    })
                }
                var i = 1,
                    o = "nr@id",
                    a = e("gos");
                n.exports = r
            }, {}],
            loader: [function(e, n, t) {
                function r() {
                    if (!x++) {
                        var e = E.info = NREUM.info,
                            n = d.getElementsByTagName("script")[0];
                        if (setTimeout(s.abort, 3e4), !(e && e.licenseKey && e.applicationID && n)) return s.abort();
                        u(y, function(n, t) {
                            e[n] || (e[n] = t)
                        }), c("mark", ["onload", a() + E.offset], null, "api");
                        var t = d.createElement("script");
                        t.src = "https://" + e.agent, n.parentNode.insertBefore(t, n)
                    }
                }

                function i() {
                    "complete" === d.readyState && o()
                }

                function o() {
                    c("mark", ["domContent", a() + E.offset], null, "api")
                }

                function a() {
                    return O.exists && performance.now ? Math.round(performance.now()) : (f = Math.max((new Date).getTime(), f)) - E.offset
                }
                var f = (new Date).getTime(),
                    c = e("handle"),
                    u = e(4),
                    s = e("ee"),
                    p = e(3),
                    l = window,
                    d = l.document,
                    m = "addEventListener",
                    v = "attachEvent",
                    g = l.XMLHttpRequest,
                    w = g && g.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    SI: l.setImmediate,
                    CT: clearTimeout,
                    XHR: g,
                    REQ: l.Request,
                    EV: l.Event,
                    PR: l.Promise,
                    MO: l.MutationObserver
                };
                var h = "" + location,
                    y = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-1167.min.js"
                    },
                    b = g && w && w[m] && !/CriOS/.test(navigator.userAgent),
                    E = n.exports = {
                        offset: f,
                        now: a,
                        origin: h,
                        features: {},
                        xhrWrappable: b,
                        userAgent: p
                    };
                e(1), e(2), d[m] ? (d[m]("DOMContentLoaded", o, !1), l[m]("load", r, !1)) : (d[v]("onreadystatechange", i), l[v]("onload", r)), c("mark", ["firstbyte", f], null, "api");
                var x = 0,
                    O = e(6)
            }, {}],
            "wrap-function": [function(e, n, t) {
                function r(e) {
                    return !(e && e instanceof Function && e.apply && !e[a])
                }
                var i = e("ee"),
                    o = e(5),
                    a = "nr@original",
                    f = Object.prototype.hasOwnProperty,
                    c = !1;
                n.exports = function(e, n) {
                    function t(e, n, t, i) {
                        function nrWrapper() {
                            var r, a, f, c;
                            try {
                                a = this, r = o(arguments), f = "function" == typeof t ? t(r, a) : t || {}
                            } catch (u) {
                                l([u, "", [r, a, i], f])
                            }
                            s(n + "start", [r, a, i], f);
                            try {
                                return c = e.apply(a, r)
                            } catch (p) {
                                throw s(n + "err", [r, a, p], f), p
                            } finally {
                                s(n + "end", [r, a, c], f)
                            }
                        }
                        return r(e) ? e : (n || (n = ""), nrWrapper[a] = e, p(e, nrWrapper), nrWrapper)
                    }

                    function u(e, n, i, o) {
                        i || (i = "");
                        var a, f, c, u = "-" === i.charAt(0);
                        for (c = 0; c < n.length; c++) f = n[c], a = e[f], r(a) || (e[f] = t(a, u ? f + i : i, o, f))
                    }

                    function s(t, r, i) {
                        if (!c || n) {
                            var o = c;
                            c = !0;
                            try {
                                e.emit(t, r, i, n)
                            } catch (a) {
                                l([a, t, r, i])
                            }
                            c = o
                        }
                    }

                    function p(e, n) {
                        if (Object.defineProperty && Object.keys) try {
                            var t = Object.keys(e);
                            return t.forEach(function(t) {
                                Object.defineProperty(n, t, {
                                    get: function() {
                                        return e[t]
                                    },
                                    set: function(n) {
                                        return e[t] = n, n
                                    }
                                })
                            }), n
                        } catch (r) {
                            l([r])
                        }
                        for (var i in e) f.call(e, i) && (n[i] = e[i]);
                        return n
                    }

                    function l(n) {
                        try {
                            e.emit("internal-error", n)
                        } catch (t) {}
                    }
                    return e || (e = i), t.inPlace = u, t.flag = a, t
                }
            }, {}]
        }, {}, ["loader"]);
    </script>
    <title>Billplz | Fair payment software</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="stylesheet" media="all" href="https://cdn00.billplz.com/assets/application-4e2dab772d83b9ef7f01d91d25789f6da793cbb4a2b31883fd73846c6fb788a8.css" />
    <link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" />
    <script src="https://cdn02.billplz.com/assets/application-6d0969ae742da44fd37e7b204f536ad53ce8c31a1e5a3d29016ce264bc46e2d4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webshim/1.15.10/minified/polyfiller.js"></script>
    <script async="true" data-ad-client="ca-pub-7779344584425981" src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        webshim.activeLang('en');
        webshims.polyfill('forms');
        webshims.cfg.no$Switch = true;
    </script>
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="Tf1pVey5PuG61p4lkpYfEmi6tn/O8E5C8wtomzcHGMj9E8gfbX68S3VlnUKwf3285PuwBw9yakLN/XJS1nUl5Q==" />
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn02.billplz.com/assets/favicon-44dc485d1106ae90ab81a20515693e11e2afc95b8d91f1e1bb3fc5d8918c99be.png" />
    <meta property="og:title" content="ML STUDIOS | Payment Form powered by Billplz.com ">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Donate Online via Internet Banking">
    <meta property="og:image" content="https://billplz-production.s3.amazonaws.com/uploads/open_collection/photo/101669/facebook_310fd658c5ed5c2fd7a95be2531d558c-28061740_147782479223976_2966575593170596467_o.jpg">
</head>

<body class="bills new" id="page-bills">
    <div class="flash-message"></div>
    <div class="content-column">
        <div class="open-item page-form" id="pageOpenPreview-sectionPreview">
            <form class="new_open_bill" id="new_open_bill" action="/payment_forms/mlstudiosmy/bills" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="WwamS88dXrdHaOXp1vMgZqb25YHG0CBvznm7gU2rZ+x9ChB0lt41YDup/3rRA/YRMXbUHK5bt0lSUbNNlIsXCg==" />
                <div class="container">
                    <div class="row">
                        <div class="bar-open-logo">
                            <ul>
                                <li><img class="" src="https://billplz-production.s3.amazonaws.com/uploads/company/logo/22092/avatar_a0b53d99774dfb3b3abc5b5d55358e25-Black_20Logo_20_square_.jpg" /></li>
                                <li>
                                    <p><span class="company-name">MATLUTHFI STUDIOS SDN BHD</span><span class="company-number">(1253159V)</span><span class="company-others">+60183763200<span class="pipe"></span>mlstudiosmy@gmail.com</span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="open-content">
                            <div class="row">
                                <div class="col-sm-6 open-item-image"><img src="https://billplz-production.s3.amazonaws.com/uploads/open_collection/photo/101669/retina_310fd658c5ed5c2fd7a95be2531d558c-28061740_147782479223976_2966575593170596467_o.jpg" /></div>
                                <div class="col-sm-6 open-item-content">
                                    <div class="open-item-info">
                                        <p class="open-item-title">ML STUDIOS</p>
                                        <div class="open-item-description">
                                            <p>Donate Online via Internet Banking</p>
                                        </div>
                                    </div>
                                    <div class="open-item-customer-info row">
                                        <div class="input-full form-group-vertical"><input class="form-control" required="required" placeholder="Name" type="text" name="open_bill[column_three]" id="open_bill_column_three" />
                                            <div class="inline-input">
                                                <div class="col-xs-6"><input class="form-control" placeholder="Email" type="email" name="open_bill[identifier]" id="open_bill_identifier" /></div>
                                                <div class="col-xs-6"><input class="form-control" placeholder="Mobile Number" data-type="tel" type="text" name="open_bill[column_two]" id="open_bill_column_two" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="open-item-amount row">
                                        <div class="open-item-price">
                                            <div class="input-group"><span class="input-group-addon">RM</span><input class="bound form-control text-right input-price" 
                                            placeholder="0.00" data-type="currency" required="required" type="text" name="open_bill[items_attributes][0][price]" id="open_bill_items_attributes_0_price" /></div>
                                        </div>
                                        <div class="open-cta">
                                            <div class="clearfix">
                                                <div class="open-input-btn"><input type="submit" name="commit" value="Pay" class="btn btn-default-line btn-block" data-disable-with="Pay" /></div>
                                                <div class="open-input-qty"><label class="label-open-item">Quantity:</label>
                                                    <div class="input-group"><input class="border-grey bound form-control text-right qty-ctl" 
                                                    placeholder="Qty" data-type="quantity" required="required" type="number" value="1" name="open_bill[items_attributes][0][quantity]" id="open_bill_items_attributes_0_quantity" /></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bar-open-footer"></div>
                </div>
            </form>
        </div>
        <script>
            $(document).on('ready page:load', function() {
                $('.qty-ctl').inputCtl({
                    minVal: 1,
                    maxVal: 1000,
                    step: 1
                });
                $("#open_bill_column_two").intlTelInput({
                    nationalMode: false,
                    preferredCountries: ['my', 'sg'],
                    initialCountry: 'my'
                });
            })
        </script>
        <div class="modal fade" id="modal-ajaxified" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content"></div>
            </div>
        </div>
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-43130968-1', 'billplz.com');
            ga('send', 'pageview');
        </script>
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1313809638800777');
            fbq('track', 'PageView');
        </script><noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1313809638800777&ev=PageView&noscript=1" /></noscript>
    </div>
</body>

</html>