jQuery(function($) {
    'use strict';
    (function() {
        $(window).on('load', function() {

            /*
            =========================================================================================
            1. Spinner 
            =========================================================================================
            */
            $(".spinner_hol").fadeOut("slow");



            /*
            =========================================================================================
            2.PARALLAX
            =========================================================================================
            */

            parallaxInit();

            function parallaxInit() {
                
                $('.home-parallax').parallax("30%", 0.1);
                $('.testimonial-parallax').parallax("30%", 0.1);
                $('.twitter-parallax').parallax("30%", 0.1);
                /*add as necessary*/
            }
        });
    }());



    (function() {
        $(window).on('scroll', function() {

            /*
            =========================================================================================
            3. NAVBAR 
            =========================================================================================
            */
            if ($(window).scrollTop() > 80) {
                $(".navbar-nav>li>a,.navbar-brand").css({
                    'padding-top': '30px',
                    'padding-bottom': '30px'
                });
                $(".navbar-default").css({
                    'background-color': '#ffffff',
                    'border-bottom': '1px solid #e4e3e3'
                });
                $(".navbar-default").css({
                    'margin-top': '0px'
                });
                $("#logo").attr('height', 40);
            } else {
                $(".navbar-nav>li>a, .navbar-brand").css({
                    'padding-top': '60px',
                    'padding-bottom': '30px'
                });
                $(".navbar-default").css({
                    'background-color': 'rgba(59, 59, 59, 0)',
                    'border-bottom': '0px solid #ddd'
                });
                $("#logo").attr('height', 80);
            }
            $(".page").each(function() {
                var bb = $(this).attr("id");
                var hei = $(this).outerHeight();
                var grttop = $(this).offset().top - 80;
                if ($(window).scrollTop() > grttop - 1 && $(window).scrollTop() < grttop + hei - 1) {
                    var uu = $(".navbar-nav>li>a[href='#" + bb + "']").parent().addClass("active");
                } else {
                    var uu = $(".navbar-nav>li>a[href='#" + bb + "']").parent().removeClass("active");
                }
            });



            /*
            =========================================================================================
            4. PROGRESS BAR
            =========================================================================================
            */

            $(".prog_cint .tab-pane.fade .progress_cont").each(function() {
                var base = $(this);
                var windowHeight = $(window).height();
                var itemPos = base.offset().top;
                var scrollpos = $(window).scrollTop() + windowHeight - 100;
                if (itemPos <= scrollpos) {
                    var auptcoun = base.find(".progress-bar").attr("aria-valuenow");
                    base.find(".progress-bar").css({
                        "width": auptcoun + "%"
                    });
                    var str = base.find(".skill>span").text();
                    var res = str.replace("%", "");
                    if (res == 0) {
                        $({
                            countNumber: 0
                        }).animate({
                            countNumber: auptcoun
                        }, {
                            duration: 1500,
                            easing: 'linear',
                            step: function() {
                                base.find(".skill>span").text(Math.ceil(this.countNumber) + "%");
                            }
                        });
                    }
                }
            });
        });
    }());


    (function() {

        /*
        =========================================================================================
        5.NAV MENU FIX  
        =========================================================================================
        */
        $(".navbar-nav>li>a,  .buttonconvo").click(function() {
            $(this).parent().addClass("active");
            $(".navbar-nav li a").not(this).parent().removeClass("active");
            var TargetId = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(TargetId).offset().top - 50
            }, 1000, 'swing');
            return false;
        });



        /*
        =========================================================================================
        6. FIX HOME SCREEN HEIGHT  
        =========================================================================================
        */

        setInterval(function() {
                var widnowHeight = $(window).height();
                var sliderHeight = $(".carousel-inner>.item").height();
                var padTop = widnowHeight - sliderHeight;
                $(".carousel-inner>.item").css({
                    'padding-top': Math.round(padTop / 2) + 'px',
                    'padding-bottom': Math.round(padTop / 2) + 'px'
                });
            }, 10);


            $(".image_slider_src").each(function(){

            var imgurl = $(this).attr("src");

            $(this).parent().css({

            "background" : "url("+imgurl+")"

            });


            });


  

    }());
});



