function getMobileOperatingSystem() {
    var e = navigator.userAgent || navigator.vendor || window.opera;
    return e.match(/iPad/i) || e.match(/iPhone/i) || e.match(/iPod/i) ? "iOS" : void 0
}
jQuery(window).ready(function() {
    function e() {
        return "ontouchstart" in window || navigator.MaxTouchPoints > 0 || navigator.msMaxTouchPoints > 0
    }
    e() && jQuery("body").addClass("touchon"), jQuery(window).width() > 1023 && (jQuery("#topmenu ul > li").not("#topmenu ul > li.mega-menu-item").hoverIntent(function() {
        jQuery(this).find(".sub-menu, ul.children").not(".sub-menu .sub-menu, ul.children ul.children").removeClass("").addClass("menushow")
    }, function() {
        jQuery(this).find(".sub-menu, ul.children").not(".sub-menu .sub-menu, ul.children ul.children").addClass("").delay(0).queue(function(e) {
            jQuery(this).removeClass("menushow"), e()
        })
    }), jQuery("#topmenu ul li ul li").not("#topmenu ul li.mega-menu-item ul.mega-sub-menu li").hoverIntent(function() {
        jQuery(this).find(".sub-menu, ul.children").removeClass("").addClass("menushow")
    }, function() {
        jQuery(this).find(".sub-menu, ul.children").addClass("").delay(0).queue(function(e) {
            jQuery(this).removeClass("menushow"), e()
        })
    }), jQuery("#topmenu ul li").not("#topmenu ul li.mega-menu-item, #topmenu ul li ul li").hover(function() {
        jQuery(this).addClass("menu_hover")
    }, function() {
        jQuery(this).removeClass("menu_hover")
    }), jQuery("#topmenu li").has("ul").addClass("zn_parent_menu"), jQuery(".zn_parent_menu > a").append('<span class="menu_arrow"><i class="fa-angle-down"></i></span>')), jQuery(".midrow_blocks_wrap").each(function(e, t) {
        jQuery(this).waitForImages(function() {
            jQuery(this).find(".midrow_block").matchHeight({
                property: "min-height"
            })
        })
    }), jQuery(".lay1").each(function(e, t) {
        for (var r = jQuery(this).find(".hentry"), i = 0; i < r.length; i += 3) r.slice(i, i + 3).wrapAll("<div class='ast_row'></div>");
        if (jQuery(window).width() < 1200) {
            var a = jQuery(this).find(".hentry").width();
            jQuery(this).find(".post_image").css({
                maxHeight: 66 * a / 100
            })
        }
    }), jQuery(".lay1 .postitle a:empty").closest("h2").addClass("no_title"), jQuery(".no_title").css({
        padding: "0"
    }), jQuery(".lay1 h2.postitle a").each(function() {
        jQuery(this).height() > 80 && jQuery(this).parent().parent().parent().addClass("lowreadmo")
    }), jQuery(".lts_layout1 .listing-item h2").each(function() {
        jQuery(this).outerHeight() > 76 && jQuery(this).parent().addClass("lowreadmo")
    }), jQuery(window).bind("scroll", function() {
        jQuery(this).scrollTop() > 800 ? jQuery(".to_top").fadeIn("slow") : jQuery(".to_top").fadeOut("fast")
    }), jQuery(".to_top").click(function() {
        return jQuery("html, body").animate({
            scrollTop: 0
        }, "slow"), !1
    }), jQuery(window).width() > 480 && (jQuery(".home #zn_nivo, .home #accordion").waitForImages(function() {
        var e = jQuery(".home #zn_nivo, .home #accordion").height();
        jQuery(".home #zn_nivo, .home #accordion").waypoint(function() {
            jQuery(".is-sticky .header").addClass("headcolor")
        }, {
            offset: "-" + e / 2 + "px"
        }), jQuery(".home #zn_nivo, .home #accordion").waypoint(function() {
            jQuery(".is-sticky .header").removeClass("headcolor")
        }, {
            offset: "-90px"
        })
    }), jQuery(".block_type2 .midrow_blocks .midrow_block").css({
        opacity: "0"
    }), jQuery(".block_type1 .midrow_blocks").waypoint(function() {
        jQuery(this).addClass("animated bounceIn")
    }, {
        offset: "90%"
    }), jQuery(".block_type2 .midrow_blocks .midrow_block").waypoint(function() {
        jQuery(this).addClass("animated fadeInUp")
    }, {
        offset: "90%"
    }), jQuery(".welcmblock .text_block_wrap").css({
        opacity: "0"
    }), jQuery(".welcmblock .text_block_wrap").waypoint(function() {
        jQuery(this).addClass("animated fadeIn")
    }, {
        offset: "90%"
    }), jQuery(".home .postsblck .center").css({
        opacity: "0"
    }), jQuery(".home .postsblck .center").waypoint(function() {
        jQuery(this).addClass("animated fadeInUp")
    }, {
        offset: "85%"
    }));
    var t = jQuery(".ast-next > a").attr("href");
    jQuery(".right_arro").attr("href", t);
    var t = jQuery(".ast-prev > a").attr("href");
    jQuery(".left_arro").attr("href", t), jQuery("#sidebar li").prepend('<i class="fa-angle-double-right"></i> '), jQuery("#sidebar .fa-angle-double-right").css({
        opacity: "0.5"
    });
    var r = jQuery("#simple-menu").html();
    jQuery("#simple-menu").sidr({
        name: "sidr-main",
        source: "#topmenu",
        side: "right"
    }), jQuery(".sidr").prepend("<div class='pad_menutitle'>" + r + "<span><i class='fa-times'></i></span></div>"), jQuery(".pad_menutitle span").click(function() {
        jQuery.sidr("close", "sidr-main")
    }), jQuery(window).width() < 1023 && 0 == jQuery("#topmenu:has(ul)").length && jQuery("#simple-menu").addClass("hide_mob_menu"), jQuery(window).width() < 480 && jQuery(".nivo-control").text(""), jQuery(function() {
        var e = 0,
            t = jQuery(".slider-wrapper .sldimg"),
            r = 100 / t.length,
            i = jQuery("#astbar");
        $progrssn = jQuery(".progrssn"), t.load(function() {
            e += r, $progrssn.css({
                bottom: e + "%"
            });
            var t = parseFloat(e).toFixed(0);
            i.text(t + "%")
        })
    }), jQuery(".slider-wrapper").waitForImages(function() {
        jQuery("#zn_nivo, .nivo-controlNav, #slide_acord, .nivoinner").css({
            display: "block"
        }), jQuery(".pbar_wrap").fadeOut()
    }), jQuery("#slidera").has("#stat_img").addClass("selected_stat"), jQuery("#slidera").has(".slide_wrap").addClass("selected_slide"), jQuery(window).width() < 1025 && jQuery(".dlthref").removeAttr("href"), jQuery("#sidebar .widget .widgettitle, .related_h3, h3#comments, #reply-title").after("<span class='widget_border' />"), jQuery(".comm_wrap").insertAfter(".comment-form-comment"), jQuery(".comm_wrap input").placeholder(), jQuery("body").has(".error_msg").addClass("error404"), jQuery(".nav-box.ast-prev, .nav-box.ast-next").not(":has(img)").addClass("navbox-noimg");
    var i = jQuery(window).height(),
        a = jQuery("#footer").height(),
        s = jQuery("#footer").position().top + a;
    i > s && jQuery("#footer").css("margin-top", 1 + (i - s) + "px"), jQuery(".lay1.optimposts, .lay4.optimposts").each(function(e, t) {
        jQuery(this).waitForImages(function() {
            jQuery(this).find(".type-product").matchHeight({
                property: "min-height"
            })
        })
    }), jQuery(".lay1.optimposts .type-product").each(function(e, t) {
        jQuery(window).width() >= 960 && jQuery(this).find(".button.add_to_cart_button").prependTo(jQuery(this).find(".imgwrap")), jQuery(this).find("span.price").prependTo(jQuery(this).find(".post_image "))
    })
}), jQuery(window).on("load scroll", function() {
    var e = jQuery(this).scrollTop(),
        t = jQuery(".header").height() + jQuery(".admin-bar #wpadminbar").height() + jQuery("#customizer_topbar").height();
    e ? (jQuery("body:not(.has_trans_header) .stat_bg img").css({
        top: "0px"
    }), jQuery("body:not(.has_trans_header) .stat_bg").css({
        "background-position-y": "0px"
    })) : (jQuery("body:not(.has_trans_header) .stat_bg img").css({
        top: t + "px"
    }), jQuery("body:not(.has_trans_header) .stat_bg").css({
        "background-position-y": t + "px"
    }))
});
var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
"iOS" == getMobileOperatingSystem() ? jQuery("body").addClass("is-ios") : jQuery("body").addClass("not-ios"), 1 == isSafari && jQuery("body").addClass("is_safari"), jQuery(window).load(function() {
    jQuery("#slider").nivoSlider()
});


jQuery(document).ready(function($){
	$('.logo h1 a, .logo h2 a').html(function(){	
	var text= $(this).text().split(' ');
	var last = text.pop();
	return text.join(" ") + (text.length > 0 ? ' <span>'+last+'</span>' : last);
	}); 
});