jQuery(document).ready(function($) {
    "use strict";

    //Revolution Slider Init
    if ($(".fullwidthbanner-container").length > 0) {
        RevolutionSliderInit();
    }
    if ($(".fullwidthsmallbanner-container").length > 0) {
        RevolutionSliderSmallInit();
    }
    if ($(".fullscreen-container").length > 0) {
        RevolutionFullScreenSliderInit();
    }

    //isotope
    masonryGrid();

    //Dropdown Main Navigation
    superfishInit();
    $(window).on("resize", function() {
        superfishInit();
        masonryGrid();
    });

    //Navigation
    $(".primary-nav .dropdown-hover .caret,.primary-nav .dropdown-submenu > a > .caret,.primary-nav .megamenu-title .caret").off("click").on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();
        var dropdown = $(this).closest(".dropdown, .dropdown-submenu");
        if (dropdown.hasClass("open")) {
            dropdown.removeClass("open");
        } else {
            dropdown.addClass("open");
        }
    });

    //Show or hide search box when click on the search icon
    $(document).on("click", ".navbar-search-button", function(e) {
        e.stopPropagation();
        e.preventDefault();
        if ($(".header-search-overlay").length) {
            $(".header-search-overlay").stop(true, true).removeClass("hide").css("opacity", 0).animate({
                "opacity": 1
            }, 600, "swing", function() {
                $(this).find(".searchinput").focus();
            });
        } else if ($(".search-form-wrap").length) {
            if ($(".search-form-wrap").hasClass("hide")) {
                $(".search-form-wrap").removeClass("hide").addClass("show");
                $(".search-form-wrap .searchinput").focus();
            }
        }
    });
    $("body").on("mousedown", $.proxy(function(e) {
        var element = $(e.target);
        if ($(".header-search-overlay").length) {
            if (!element.is(".header-search-overlay") && element.parents(".header-search-overlay").length === 0) {
                $(".header-search-overlay").removeClass("show").addClass("hide");
            }
        } else {
            if (!element.is(".search-form-wrap") && element.parents(".search-form-wrap").length === 0) {
                $(".search-form-wrap").removeClass("show").addClass("hide");
            }
        }
    }, this));
    $(document).on("click", ".header-search-overlay .close", function() {
        $(".header-search-overlay").stop(true, true).animate({
            "opacity": 0
        }, 600, "swing", function() {
            $(this).addClass("hide");
        });
    });

    //Shop mini cart
    $(document).on("mouseenter", ".navbar-minicart-nav", function() {
        window.clearTimeout($(this).data("timeout"));
        $(this).parent().find(".navbar-minicart .minicart").fadeIn(50);
    });
    $(document).on("mouseleave", ".navbar-minicart-nav", function() {
        var _this = $(this);
        var t = setTimeout(function() {
            _this.parent().find(".navbar-minicart .minicart").fadeOut(50);
        }, 400);
        $(this).data("timeout", t);
    });
    $(document).on("mouseenter", ".navbar-minicart-topbar", function() {
        window.clearTimeout($(this).data("timeout"));
        $(this).parent().find(".navbar-minicart .minicart").fadeIn(50);
    });
    $(document).on("mouseleave", ".navbar-minicart-topbar", function() {
        var _this = $(this);
        var t = setTimeout(function() {
            _this.parent().find(".navbar-minicart .minicart").fadeOut(50);
        }, 400);
        $(this).data("timeout", t);
    });

    //Off Canvas menu
    $(".navbar-toggle-fixed-btn,.navbar-toggle,.navbar-offcanvas-btn").on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();
        if ($("body").hasClass("open-offcanvas")) {
            $("body").removeClass("open-offcanvas").addClass("close-offcanvas");
            $(".navbar-toggle").removeClass("x");
        } else {
            $("body").removeClass("close-offcanvas").addClass("open-offcanvas");
            $(".navbar-toggle").addClass("x");
        }
    });

    $("body").on("mousedown", $.proxy(function(e) {
        var element = $(e.target);
        if ($(".offcanvas").length && $("body").hasClass("open-offcanvas")) {
            if (!element.is(".offcanvas") && element.parents(".offcanvas").length === 0 && !element.is(".navbar-toggle") && element.parents(".navbar-toggle").length === 0 && !element.is(".navbar-offcanvas-btn") && element.parents(".navbar-offcanvas-btn").length === 0) {
                $("body").removeClass("open-offcanvas");
                $(".navbar-toggle").removeClass("x");
            }
        }
    }, this));

    $(".offcanvas-nav .dropdown-hover .caret,.offcanvas-nav .dropdown-submenu > a > .caret,.offcanvas-nav .megamenu-title .caret").off("click").on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();
        var dropdown = $(this).closest(".dropdown, .dropdown-submenu");
        if (dropdown.hasClass("open")) {
            dropdown.removeClass("open");
        } else {
            dropdown.addClass("open");
        }
    });


    //Events on scroll
    $(window).scroll(function() {
        //go to top
        if ($(this).scrollTop() > 500) {
            $(".go-to-top").addClass("on");
        } else {
            $(".go-to-top").removeClass("on");
        }

        //sticky navbar
        if (getViewport().width > 992) {
            if ($(this).scrollTop() > 100) {
                $(".navbar-default").addClass("navbar-fixed-top");
                $(".navbar-default").addClass("fixed-transition");
                $(".header-container").addClass("header-navbar-fixed");
            } else {
                $(".navbar-default").removeClass("navbar-fixed-top");
                $(".navbar-default").removeClass("fixed-transition");
                $(".header-container").removeClass("header-navbar-fixed");
            }
        }
    });

    $("body").on("click", ".go-to-top", function() {
        $("html, body").animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    //Counter
    if ($(".counter").length > 0) {
        $(".counter").each(function(index) {
            var $this = $(this);
            var waypoint = $this.waypoint({
                handler: function(direction) {
                    $this.find(".counter-number:not(.counted)").countTo().addClass("counted");
                },
                offset: "90%"
            });
        });
    }

    //ProgressBar
    $(".group-progressbar").each(function() {
        var $this = $(this);
        var waypoint = $this.waypoint({
            handler: function(direction) {
                $this.find(".progressbar").progressbar({
                    display_text: "center"
                });
            },
            offset: "80%"
        });
    })

    //Hover Dir
    if ($(".grid-hover-dir").length > 0) {
        $(".grid-hover-dir > li ").hoverdir({
            hoverDelay: 75
        });
    }

    //Countdown Timer
    if ($(".pl-clock").length > 0) {
        $(".pl-clock").each(function() {
            var time = $(this).attr("data-time");
            $(this).countdown(time, function(event) {
                if ($(this).hasClass("short")) {
                    var $this = $(this).html(event.strftime("" + '<div class="countdown-item"><div class="countdown-item-value">%D</div><div class="countdown-item-label">Days</div></div>' + '<div class="countdown-item"><div class="countdown-item-value">%H</div><div class="countdown-item-label">Hours</div></div>' + '<div class="countdown-item"><div class="countdown-item-value">%M</div><div class="countdown-item-label">Minutes</div></div>' + '<div class="countdown-item"><div class="countdown-item-value">%S</div><div class="countdown-item-label">Secs</div></div>'));
                } else {
                    var $this = $(this).html(event.strftime('' + '<div class="countdown-item"><div class="countdown-item-label">Days</div><div class="countdown-item-value">%D</div></div>' + '<div class="countdown-item"><div class="countdown-item-label">Hours</div><div class="countdown-item-value">%H</div></div>' + '<div class="countdown-item"><div class="countdown-item-label">Minutes</div><div class="countdown-item-value">%M</div></div>' + '<div class="countdown-item"><div class="countdown-item-label">Seconds</div><div class="countdown-item-value">%S</div></div>'));
                }
            });
        });
    }

    //Typed Text
    if ($("#typed").length > 0) {
        $("#typed").typed({
            stringsElement: $("#typed-strings"),
            typeSpeed: 30,
            backDelay: 500,
            loop: false,
            contentType: "html", // or text
            loopCount: false,
            cursorChar: "_",
        });
    }

    //Pie Chart
    if ($(".piechart").length > 0) {
        $(".piechart").each(function() {
            var $this = $(this);
            var value = Number($this.data("value")) / 100;

            var option = {
                strokeWidth: 4,
                trailWidth: 4,
                duration: 1500,
                easing: "linear",
                text: {
                    value: "0%"
                },
                step: function(state, bar) {
                    bar.setText((bar.value() * 100).toFixed(0) + "%");
                }
            }

            var circle = new ProgressBar.Circle($(this)[0], option);

            $this.waypoint({
                handler: function(direction) {
                    circle.animate(value);
                },
                offset: "68%"
            });
        });
    }

    if ($(".piechart-big").length > 0) {
        $(".piechart-big").each(function() {
            var $this = $(this);
            var value = Number($this.data("value")) / 100;

            var option = {
                strokeWidth: 15,
                trailWidth: 15,
                duration: 1500,
                easing: "linear",
                text: {
                    value: "0%"
                },
                step: function(state, bar) {
                    bar.setText((bar.value() * 100).toFixed(0) + "%");
                }
            }

            var circle = new ProgressBar.Circle($(this)[0], option);

            $this.waypoint({
                handler: function(direction) {
                    circle.animate(value);
                },
                offset: "68%"
            });
        });
    }

    //Sitcky Sidebar
    if ($(".sticky-sidebar").length > 0) {
        $(".sticky-sidebar").Stickyfill();
    }

    //Onepage
    $(".onepage-nav a").on("click", function(e) {
        e.preventDefault();
        var link_anchor = $(this).attr("href");
        $("html,body").animate({
            scrollTop: $(link_anchor).offset().top - 20
        })
    });

    $(".mobile-onepage-nav a").on("click", function(e) {
        var link_anchor = $(this).attr("href");
        $("html,body").animate({
            scrollTop: $(link_anchor).offset().top - 20
        });
        $("body").removeClass("open-offcanvas");
        $(".navbar-toggle").removeClass("x");
    });

    $(".section").waypoint(function(direction) {
        var id = $(".onepage-nav a[href=#" + $(this).attr("id") + "]");
        id.parent(".menu-item").toggleClass("current-menu-item", direction === "down");
    }, {
        offset: "90%" // 
    }).waypoint(function(direction) {
        // Highlight element when bottom of related content
        // is 100px from the top - remove if less
        // TODO - make function for this
        var id = $(".onepage-nav a[href=#" + $(this).attr("id") + "]");
        id.parent(".menu-item").toggleClass("current-menu-item", direction === "up");
    }, {
        offset: function() {
            return -$(this).height() + 100;
        }
    });

    //Init CarouselFred
    carouselFred();

    //Rebuild carousel when changing tabs
    $('a[data-toggle="tab"]').on("shown.bs.tab", function(e) {
        $(".caroufredsel").trigger("destroy", true);
        carouselFred();
    });
});

function superfishInit() {
    $(".primary-nav").superfish({
        anchorClass: ".dropdown", // selector within menu context to define the submenu element to be revealed
        hoverClass: "open", // the class applied to hovered list items
        pathClass: "overideThisToUse", // the class you have applied to list items that lead to the current page
        pathLevels: 1, // the number of levels of submenus that remain open or are restored using pathClass
        delay: 650, // the delay in milliseconds that the mouse can remain outside a submenu without it closing
        animation: {
            opacity: "show"
        }, // an object equivalent to first parameter of jQuery’s .animate() method. Used to animate the submenu open
        animationOut: {
            opacity: "hide"
        }, // an object equivalent to first parameter of jQuery’s .animate() method Used to animate the submenu closed
        speed: "fast", // speed of the opening animation. Equivalent to second parameter of jQuery’s .animate() method
        speedOut: "fast", // speed of the closing animation. Equivalent to second parameter of jQuery’s .animate() method
        cssArrows: true, // set to false if you want to remove the CSS-based arrow triangles
        disableHI: false, // set to true to disable hoverIntent detection
    });
}

function carouselFred(destroy) {
    destroy = destroy || false;
    var self = this;
    //related post carousel
    $(".caroufredsel").each(function() {
        var $this = $(this),
            $visible = 3,
            $height = "auto",
            $circular = false,
            $auto_play = false,
            $scroll_fx = "scroll",
            $duration = 2000,
            $items_height = "variable",
            $auto_pauseOnHover = "resume",
            $items_width = "100%",
            $infinite = false,
            $responsive = false,
            $scroll_item = 1,
            $easing = "swing",
            $scrollDuration = 600,
            $direction = "left";
        if ($this.hasClass("product-slider")) {
            $visible = {
                min: $(this).data("visible-min"),
                max: $(this).find("ul.products").data("columns")
            };
        } else {
            if ($(this).data("visible-min") && $(this).data("visible-max")) {
                $visible = {
                    min: $(this).data("visible-min"),
                    max: $(this).data("visible-max")
                };
            }
        }
        if ($(this).data("visible")) {
            $visible = $(this).data("visible");
        }
        if ($(this).data("height")) {
            $height = $(this).data("height");
        }
        if ($(this).data("direction")) {
            $direction = $(this).data("direction");
        }
        if ($(this).data("scrollduration")) {
            $scrollDuration = $(this).data("scrollduration");
        }
        if ($(this).data("speed")) {
            $duration = parseInt($(this).data("speed"), 10);
        }
        if ($(this).data("scroll-fx")) {
            $scroll_fx = $(this).data("scroll-fx");
        }
        if ($(this).data("circular")) {
            $circular = true;
        }
        if ($(this).data("infinite")) {
            $infinite = true;
        }
        if ($(this).data("responsive")) {
            $responsive = true;
        }
        if ($(this).data("autoplay")) {
            $auto_play = true;
        }
        if ($(this).data("scroll-item")) {
            $scroll_item = parseInt($(this).data("scroll-item"), 10);
        }
        if ($(this).data("easing")) {
            $easing = $(this).data("easing");
        }
        var carousel = $(this).children(".caroufredsel-wrap").children("ul.caroufredsel-items").length ? $(this).children(".caroufredsel-wrap").children("ul.caroufredsel-items") : $(this).children(".caroufredsel-wrap").find("ul");
        var carouselOptions = {
            responsive: $responsive,
            circular: $circular,
            infinite: $infinite,
            width: "100%",
            height: $height,
            direction: $direction,
            auto: {
                play: $auto_play,
                pauseOnHover: $auto_pauseOnHover
            },
            swipe: {
                onMouse: false,
                onTouch: true
            },
            scroll: {
                duration: $scrollDuration,
                mousewheel: true,
                fx: $scroll_fx,
                timeoutDuration: $duration,
                easing: $easing,
                wipe: true
            },
            items: {
                height: $items_height,
                visible: $visible
            }
        };
        if ($(this).data("direction") && $(this).data("direction") == "up") {
            carouselOptions.align = "top";
        }
        //console.log($(this).data("synchronise"))
        if ($this.data("synchronise")) {
            carouselOptions.synchronise = [$this.data("synchronise"), false];
            var synchronise = $this.data("synchronise");
            $(synchronise).find("li").each(function(i) {
                $(this).addClass("synchronise-index-" + i);
                $(this).on("click", function() {
                    carousel.trigger("slideTo", [i, 0, true]);
                    return false;
                });
            });
            carouselOptions.scroll.onBefore = function() {
                $(synchronise).find(".selected").removeClass("selected");
                var pos = $(this).triggerHandler("currentPosition");
                $(synchronise).find(".synchronise-index-" + pos).addClass("selected");
            };

        }

        if ($this.children(".caroufredsel-pagination").length) {
            carouselOptions.pagination = {
                container: $this.children(".caroufredsel-pagination")
            };
        }
        if ($(this).children(".caroufredsel-wrap").children(".caroufredsel-prev").length && $(this).children(".caroufredsel-wrap").children(".caroufredsel-next").length) {
            carouselOptions.prev = $(this).children(".caroufredsel-wrap").children(".caroufredsel-prev");
            carouselOptions.next = $(this).children(".caroufredsel-wrap").children(".caroufredsel-next");
        }

        if (destroy)
            carousel.trigger("destroy");

        carousel.carouFredSel(carouselOptions);
        $this.data("carouseloptions", carouselOptions);
        var $element = $this;
        if ($this.find("img").length == 0) $element = $("body");

        imagesLoaded($element, function() {
            carousel.carouFredSel(carouselOptions);
        });

        $this.css("opacity", "1");
    });
}

function masonryGrid() {
    $('[data-layout="masonry"]').each(function() {
        var $this = $(this),
            container = $this.find(".masonry-wrap"),
            itemColumn = $this.data("masonry-column"),
            itemWidth,
            container_width = container.width();
        if (getViewport().width > 992) {
            itemWidth = container_width / itemColumn;
        } else if (getViewport().width <= 992 && getViewport().width >= 768) {
            itemWidth = container_width / 2;
        } else {
            itemWidth = container_width / 1;
        }
        container.isotope({
            layoutMode: "masonry",
            itemSelector: ".masonry-item",
            transitionDuration: "0.8s",
            getSortData: {
                title: function(el) {
                    return $(el).data("title");
                },
                date: function(el) {
                    return parseInt($(el).data("date"), 10);
                }
            },
            masonry: {
                gutter: 0,
                columnWidth: itemWidth
            }
        }).isotope("layout");

        imagesLoaded($this, function() {
            container.isotope("layout");
        });

        var filter = $this.find(".masonry-filter ul a");
        filter.on("click", function(e) {
            e.stopPropagation();
            e.preventDefault();

            var $this = $(this);
            // don't proceed if already selected
            if ($this.hasClass("selected")) {
                return false;
            }

            var filters = $this.closest("ul");
            filters.find(".selected").removeClass("selected");
            $this.addClass("selected");
            $this.closest(".masonry-filter").find(".filter-heaeding h3").text($this.text());
            var options = {
                    layoutMode: "masonry",
                    transitionDuration: "0.8s",
                    getSortData: {
                        title: function(el) {
                            return $(el).data("title");
                        },
                        date: function(el) {
                            return parseInt($(el).data("date"), 10);
                        }
                    }
                },
                key = filters.attr("data-filter-key"),
                value = $this.attr("data-filter-value");

            value = value === "false" ? false : value;
            options[key] = value;
            container.isotope(options);
            var wrap = $this.closest('[data-layout="masonry"]');
        });
        $('[data-masonry-toogle="selected"]').trigger("click");

        $this.find(".filter-btn").on("click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            if ($(this).hasClass("current")) {
                $(this).removeClass("current");
                $(this).closest(".filter-action").find("ul li").hide("slow");
            } else {
                $(this).addClass("current");
                $(this).closest(".filter-action").find("ul li").show("slow");
            }
        });
    });
}

function RevolutionSliderInit() {
    if ($("#rev_slider").length > 0) {
        $("#rev_slider").show().revolution({
            sliderType: "standard",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                mouseScrollReverse: "default",
                onHoverStop: "on",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 50,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style: "custom",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: true,
                    hide_onmobile: false,
                    style: "custom",
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: ''
                }
            },
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: 1170,
            gridheight: 700,
            lazyType: "smart",
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                type: "mouse",
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    }
}

function RevolutionSliderSmallInit() {
    if ($("#rev_slider").length > 0) {
        $("#rev_slider").show().revolution({
            sliderType: "standard",
            sliderLayout: "fullwidth",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                mouseScrollReverse: "default",
                onHoverStop: "on",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 50,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style: "custom",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: true,
                    hide_onmobile: false,
                    style: "custom",
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: ''
                }
            },
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: 1170,
            gridheight: 505,
            lazyType: "smart",
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                type: "mouse",
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    }
}

function RevolutionFullScreenSliderInit() {
    if ($("#rev_slider").length > 0) {
        $("#rev_slider").show().revolution({
            sliderType: "standard",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                mouseScrollReverse: "default",
                onHoverStop: "on",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 50,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style: "custom",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: true,
                    hide_onmobile: false,
                    style: "custom",
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: ''
                }
            },
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: 1170,
            gridheight: 700,
            lazyType: "smart",
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                type: "mouse",
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    }
}

function getViewport() {
    var e = window,
        a = "inner";
    if (!("innerWidth" in window)) {
        a = "client";
        e = document.documentElement || document.body;
    }
    return {
        width: e[a + "Width"],
        height: e[a + "Height"]
    };
}
