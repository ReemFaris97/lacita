$(document).ready(function () {

    $("#nav-icon1").click(function () {
        $(this).toggleClass("open")
    });

    (function($) {
        function mediaSize() {
            if (window.matchMedia("(max-width: 767px)").matches) {
                $(".icon_mob , #icon_close ").click(function () {
                    $(this).find("#nav-icon1").toggleClass("open"), 
                    $(this).parents(".dropdown.view_box").toggleClass("open_box"), 
                    $(this).parents(".view_box").find(".nav_mob").toggleClass("back-nav"),
                    $(this).parents(".view_box").find(".menu_mob").toggleClass("fixed-r"), 
                    $("body").toggleClass("body-mob")
                })
                $("#more_list, #icon_close2").click(function () {
                    $(".dropdown.view_box").toggleClass("open_box more_box"), 
                    $(".dropdown.view_box").find(".nav_mob").toggleClass("back-nav"),
                    $(".dropdown.view_box").find(".menu_mob").toggleClass("fixed-r custom_more"), 
                    $("body").toggleClass("body-mob"),
                    $(".navbar .col-xs-0").toggleClass("display-xs")
                })
                $("#new_list").click(function () {
                    $(this).parents(".sett_li").find(".menu_mob2").toggleClass("fixed-r"),
                    $(this).parents(".sett_li").find(".nav_mob2").toggleClass("back-nav"),
                    $(".icon_mob , #icon_close").parents(".view_box").find(".nav_mob,.menu_mob").toggleClass("fixed_height")
                })
            }
        }
    
        /* Call the function */
        mediaSize();
        /* Attach the function to the resize event listener */
        window.addEventListener("resize", mediaSize, false);
    })(jQuery);



    var o;
    jQuery(window).load(function () {
            $(".loader").fadeOut(500, function () {
                $(".gooey").fadeOut(500), $("body").css("overflow-y", "auto")
            })
        }), $(".navbar a, .header a, .footer a, .top-nav a").click(function (o) {
            $("html, body").animate({
                scrollTop: $($(this).attr("href")).offset().top
            }, 1e3), o.preventDefault()
        })  , o = $("#scroll-top"), $(window).scroll(function () {
            $(this).scrollTop() >= 500 ? o.show() : o.hide()
        }), $("#scroll-top").click(function () {
            $("html,body").animate({
                scrollTop: 0
            }, 600)
        });

        /** Fixed Navbar **/
    $(window).scroll(function () {
        var st = $(window).scrollTop();
        if (st > 40) {
            $(".navbar").addClass('fixd-navbar');

        } else {
            $(".navbar").removeClass('fixd-navbar');

        }
    });

    ///////////// Font awesome 5 on pseudo elements
    window.FontAwesomeConfig = {
    searchPseudoElements: true
  }
    ///////////// current year 
    document.getElementById("currentYear").innerHTML = new Date().getFullYear();
});
