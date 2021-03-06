/*!
 * Template Functions
*/
!
function(e) {
    "use strict";
    e(window).on("load",
    function() {
        e("div").is(".page-loader") && e(".page-loader").delay(500).fadeOut(800)
    }),
    e(document).ready(function() {
        function t() {
            var e = document.createElement("p");
            e.style.width = "100%",
            e.style.height = "200px";
            var t = document.createElement("div");
            t.style.position = "absolute",
            t.style.top = "0px",
            t.style.left = "0px",
            t.style.visibility = "hidden",
            t.style.width = "200px",
            t.style.height = "150px",
            t.style.overflow = "hidden",
            t.appendChild(e),
            document.body.appendChild(t);
            var a = e.offsetWidth;
            t.style.overflow = "scroll";
            var i = e.offsetWidth;
            return a == i && (i = t.clientWidth),
            document.body.removeChild(t),
            a - i
        }
        var a = e(".header"),
        i = e(".onepage-nav"),
        s = e(".parallax"),
        o = e(".row-post-masonry"),
        n = e("[data-background], .slides-container li"),
        r = e(".module-cover-slides"),
        l = e("[data-mY]"),
        c = e(".progress-item"),
        d = e(".counter-timer"),
        p = e(".chart"),
        u = e(".twitter-feed"),
        h = e(".sticky-sidebar"),
        f = e(".map"),
        m = e(".smoothscroll"),
        g = e(".play-button"),
        v = e(".gallery-group"),
        y = e(".gallery"),
        w = e(".shop-single-item-popup"),
        b = e(".portfolio-carousel"),
        T = e(".shop-carousel"),
        C = e(".clients-carousel"),
        x = e(".review-slides"),
        k = e(".review-carousel"),
        P = e(".image-slider"),
        S = e("#contact-form");
        e(document).on("click", ".inner-navigation.show",
        function(t) {
            e(t.target).is("span") && !e(t.target).parent().parent().hasClass("menu-item-has-children") && e(this).collapse("hide")
        }),
        e("a", i).filter(function() {
            e(this).is(':not([href^="#"])') && e(this).addClass("external")
        }),
        i.singlePageNav({
            filter: ":not(.external)",
            currentClass: "active",
            offset: "58"
        }),
        e(window).scroll(function() {
            var t = e(window).scrollTop();
            t >= 5 ? (a.addClass("header-small"), a.addClass("header-shadow")) : (a.removeClass("header-small"), a.removeClass("header-shadow"))
        }).scroll(),
        r.each(function() {
            e(this).superslides(e.extend({
                play: 1e4,
                animation: "slide",
                animation_speed: 800,
                pagination: !0,
                scrollable: !0
            },
            e(this).data("module-cover-slides-options")))
        }),
        n.each(function() {
            1 == e(this).attr("data-gradient") ? (e(this).append('<div class="overlay-background overlay-gradient"></div>'), e(this).find(".overlay-background").css("opacity", e(this).attr("data-overlay"))) : e(this).attr("data-overlay") > 0 && (e(this).append('<div class="overlay-background"></div>'), e(this).find(".overlay-background").css("opacity", e(this).attr("data-overlay")))
        }),
        n.each(function() {
            e(this).css("background-image", "url(" + e(this).attr("data-background") + ")")
        }),
        l.each(function() {
            e(this).css("margin-top", e(this).attr("data-mY"))
        }),
        e(".off-canvas-open, .off-canvas-close").on("click",
        function() {
            return e("body").toggleClass("off-canvas-sidebar-open"),
            !1
        }).resize(),
        e(document).on("click",
        function(t) {
            var a = e(".off-canvas-sidebar");
            a.is(t.target) || 0 !== a.has(t.target).length || e("body").removeClass("off-canvas-sidebar-open")
        }).resize(),
        e(".off-canvas-sidebar-wrapper").css("margin-right", "-" + t() + "px"),
        e(window).on("resize",
        function() {
            var t = Math.max(e(window).width(), window.innerWidth);
            t <= 991 && e("body").removeClass("off-canvas-sidebar-open")
        });
        var z = e(".filters"),
        E = e(".row-portfolio");
        e("a", z).on("click",
        function() {
            var t = e(this).attr("data-filter");
            return e(".current", z).removeClass("current"),
            e(this).addClass("current"),
            E.isotope({
                filter: t
            }),
            !1
        }),
        e(window).on("resize",
        function() {
            E.imagesLoaded(function() {
                E.isotope({
                    layoutMode: "masonry",
                    itemSelector: ".portfolio-item",
                    transitionDuration: "0.4s",
                    masonry: {
                        columnWidth: ".grid-sizer"
                    }
                })
            })
        }),
        e(window).on("resize",
        function() {
            setTimeout(function() {
                o.isotope({
                    layoutMode: "masonry",
                    transitionDuration: "0.5s"
                })
            },
            1e3)
        }).resize(),
        P.each(function() {
            e(this).owlCarousel(e.extend({
                dots: 1,
                nav: 1,
                center: 1,
                items: 1,
                loop: 1,
                autoHeight: 0,
                margin: 0,
                navText: ['<span class="ti-arrow-left"></span>', '<span class="ti-arrow-right"></span>']
            },
            e(this).data("carousel-options")))
        }),
        x.each(function() {
            e(this).owlCarousel(e.extend({
                autoplay: 5e3,
                nav: 1,
                items: 1,
                loop: 1,
                navText: ['<span class="ti-arrow-left"></span>', '<span class="ti-arrow-right"></span>']
            },
            e(this).data("carousel-options")))
        }),
        k.each(function() {
            e(this).owlCarousel(e.extend({
                nav: 0,
                dots: 1,
                autoplay: 1,
                items: 1,
                loop: 1,
                margin: 30,
                responsive: {
                    768 : {
                        items: 2
                    },
                    1025 : {
                        items: 3
                    }
                },
                navText: ['<span class="ti-angle-left"></span>', '<span class="ti-angle-right"></span>']
            },
            e(this).data("carousel-options")))
        }),
        C.each(function() {
            e(this).owlCarousel(e.extend({
                nav: 0,
                dots: 1,
                autoplay: 1,
                items: 2,
                loop: 1,
                responsive: {
                    768 : {
                        items: 4
                    }
                },
                navText: ['<span class="ti-arrow-left"></span>', '<span class="ti-arrow-right"></span>']
            },
            e(this).data("carousel-options")))
        }),
        T.each(function() {
            e(this).owlCarousel(e.extend({
                nav: 0,
                dots: 1,
                autoplay: 1,
                items: 1,
                loop: 1,
                margin: 30,
                responsive: {
                    768 : {
                        items: 2
                    },
                    1025 : {
                        items: 4
                    }
                },
                navText: ['<span class="ti-angle-left"></span>', '<span class="ti-angle-right"></span>']
            },
            e(this).data("carousel-options")))
        }),
        b.each(function() {
            e(this).owlCarousel(e.extend({
                nav: 1,
                dots: 0,
                autoplay: 1,
                items: 1,
                loop: 1,
                margin: 30,
                responsive: {
                    768 : {
                        items: 2
                    },
                    1025 : {
                        items: 4
                    }
                },
                navText: ['<span class="ti-angle-left"></span>', '<span class="ti-angle-right"></span>']
            },
            e(this).data("carousel-options")))
        }),
        g.magnificPopup({
            type: "iframe"
        }),
        y.magnificPopup({
            type: "image",
            gallery: {
                enabled: !0,
                navigateByImgClick: !0,
                preload: [0, 1]
            },
            image: {
                titleSrc: "title",
                tError: "The image could not be loaded."
            }
        }),
        v.each(function() {
            e(this).magnificPopup({
                delegate: "a",
                type: "image",
                gallery: {
                    enabled: !0,
                    navigateByImgClick: !0,
                    preload: [0, 1]
                },
                image: {
                    titleSrc: "title",
                    tError: "The image could not be loaded."
                }
            })
        }),
        w.magnificPopup({
            type: "image",
            gallery: {
                enabled: !0,
                navigateByImgClick: !0,
                preload: [0, 1]
            },
            image: {
                titleSrc: "title",
                tError: "The image could not be loaded."
            }
        }),
        c.each(function() {
            e(this).appear(function() {
                var t = e(this).find(".progress-bar").attr("aria-valuenow");
                e(this).find(".progress-bar").animate({
                    width: t + "%"
                }),
                e(this).find(".progress-number").countTo({
                    from: 0,
                    to: t,
                    speed: 900,
                    refreshInterval: 30
                })
            })
        }),
        d.each(function() {
            e(this).appear(function() {
                var t = e(this).find("strong").attr("data-to");
                e(this).countTo({
                    from: 0,
                    to: t,
                    speed: 1500,
                    refreshInterval: 10,
                    formatter: function(e, t) {
                        return e = e.toFixed(t.decimals),
                        e = e.replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                    }
                })
            })
        }),
        p.each(function() {
            e(this).appear(function() {
                e(this).easyPieChart(e.extend({
                    barColor: "#000000",
                    trackColor: "#eeeeee",
                    scaleColor: !1,
                    lineCap: "round",
                    lineWidth: 3,
                    size: 150
                },
                e(this).data("chart-options")))
            })
        }),
        u.each(function(t) {
            e(this).attr("id", "twitter-" + t);
            var a = e(this).data("twitter"),
            i = e(this).data("number"),
            s = {
                profile: {
                    screenName: "" + a
                },
                domId: "twitter-" + t,
                maxTweets: i,
                enableLinks: !0,
                showPermalinks: !1
            };
            twitterFetcher.fetch(s)
        }),
        h.imagesLoaded(function() {
            h.stick_in_parent({
                offset_top: 80,
                recalc_every: 1
            }).on("sticky_kit:bottom",
            function(t) {
                e(this).parent().css("position", "relative")
            }).on("sticky_kit:unbottom",
            function(t) {
                e(this).parent().css("position", "relative")
            }).scroll()
        }),
        e(function() {
            e('[data-toggle="tooltip"]').tooltip()
        }),
        e("body").fitVids(),
        S.find("input,textarea").jqBootstrapValidation({
            preventSubmit: !0,
            submitError: function(e, t, a) {},
            submitSuccess: function(t, a) {
                a.preventDefault();
                var i = e("submit", S),
                s = e("#contact-response"),
                o = e('[name="name"]', S).val(),
                n = e('[name="email"]', S).val(),
                r = e('[name="subject"]', S).val(),
                l = e('[name="message"]', S).val();
                e.ajax({
                    type: "POST",
                    url: "assets/php/contact.php",
                    dataType: "json",
                    data: {
                        name: o,
                        email: n,
                        subject: r,
                        message: l
                    },
                    cache: !1,
                    beforeSend: function(e) {
                        i.empty(),
                        i.append('<i class="fa fa-cog fa-spin"></i> Wait...')
                    },
                    success: function(e) {
                        1 == e.sendstatus ? (s.html(e.message), t.fadeOut(500)) : s.html(e.message)
                    }
                })
            }
        }),
/*
        f.each(function() {
            var t = /\[[^(\]\[)]*\]/g,
            a = e(this),
            i = Math.max(e(window).width(), window.innerWidth) > 736,
            s = !!a.data("street-view");
            if (a.length > 0) {
                var o, n = a[0].getAttribute("data-addresses").match(t),
                r = a[0].getAttribute("data-info").match(t),
                l = a.data("icon"),
                c = a.data("zoom"),
                d = [];
                n.forEach(function(e, t) {
                    var a = "{";
                    if (a += '"latLng":' + e, 0 == t && (o = JSON.parse(e)), r[t]) {
                        var i = r[t].replace(/\[|\]/g, "");
                        a += ', "data":"' + i + '"'
                    }
                    a += "}",
                    d.push(JSON.parse(a))
                });
                var p = {
                    scrollwheel: !1,
                    styles: [{
                        featureType: "administrative",
                        elementType: "labels.text.fill",
                        stylers: [{
                            color: "#444444"
                        }]
                    },
                    {
                        featureType: "landscape",
                        elementType: "all",
                        stylers: [{
                            color: "#f2f2f2"
                        }]
                    },
                    {
                        featureType: "poi",
                        elementType: "all",
                        stylers: [{
                            visibility: "off"
                        }]
                    },
                    {
                        featureType: "road",
                        elementType: "all",
                        stylers: [{
                            saturation: -100
                        },
                        {
                            lightness: 45
                        }]
                    },
                    {
                        featureType: "road.highway",
                        elementType: "all",
                        stylers: [{
                            visibility: "simplified"
                        }]
                    },
                    {
                        featureType: "road.arterial",
                        elementType: "labels.icon",
                        stylers: [{
                            visibility: "off"
                        }]
                    },
                    {
                        featureType: "transit",
                        elementType: "all",
                        stylers: [{
                            visibility: "off"
                        }]
                    },
                    {
                        featureType: "water",
                        elementType: "all",
                        stylers: [{
                            color: "#46bcec"
                        },
                        {
                            visibility: "on"
                        }]
                    }]
                };
                p.center = o,
                p.zoom = c,
                p.draggable = i;
                var u = {
                    icon: l
                },
                h = {
                    map: {
                        options: p
                    },
                    streetviewpanorama: {
                        options: {
                            container: e(this),
                            opts: {
                                visible: s,
                                position: o,
                                enableCloseButton: !0,
                                scrollwheel: !1
                            }
                        }
                    },
                    marker: {
                        values: d,
                        options: u,
                        events: {
                            click: function(t, a, i) {
                                if (i.data) {
                                    var s = e(this).gmap3("get"),
                                    o = e(this).gmap3({
                                        get: {
                                            name: "infowindow"
                                        }
                                    });
                                    o ? (o.open(s, t), o.setContent(i.data)) : e(this).gmap3({
                                        infowindow: {
                                            anchor: t,
                                            options: {
                                                content: i.data
                                            }
                                        }
                                    })
                                }
                            }
                        }
                    }
                };
                a.gmap3(h)
            }
        }),
*/
        m.on("click",
        function(t) {
            var a = this.hash,
            i = e(a);
            e("html, body").stop().animate({
                scrollTop: i.offset().top - 58
            },
            600, "swing"),
            t.preventDefault()
        }),
        e(window).scroll(function() {
            e(this).scrollTop() > 100 ? e(".scroll-top").addClass("scroll-top-visible") : e(".scroll-top").removeClass("scroll-top-visible")
        }),
        e('a[href="#top"]').on("click",
        function() {
            return e("html, body").animate({
                scrollTop: 0
            },
            "slow"),
            !1
        });
        var W = /MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent) || /MSIE 10/i.test(navigator.userAgent) || /Edge\/\d+/.test(navigator.userAgent);
        if (1 == W) var A = 1;
        else var A = .4;
        var B = /Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/g.test(navigator.userAgent || navigator.vendor || window.opera);
        B || s.jarallax({
            speed: A
        })
    })
} (jQuery);