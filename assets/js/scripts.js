/* ----------------------------------------------------------------------------------------
* Author            : Shahidul Islam
* Author Web        : www.shahidul.net
* ---------------------------------------------------------------------------------------- */
(function ($) {
    "use strict";

    /* scrollspy and top scroll script */
    $(document).ready(function(){
      // Add scrollspy to <body>
      $('body').scrollspy({target: "#topNav", offset: 75});   
        $('#topNav ul li a, .banner_btton a, .navbar-header a.navbar-brand').on('click', function(){
            var id = $(this).attr('href');
            var h = parseFloat($(id).offset().top);
            $('body,html').stop().animate({
                scrollTop: h - 65
            }, 800);

            return false;
        });
    });

    //Hamburger menu toggle
    $('#topNav ul li a').on('click', function(){
        // check if window is small enough so dropdown is created
        var toggle = $(".navbar-toggle").is(":visible");
        if (toggle) {
          $(".navbar-collapse").collapse('hide');
        }

    });


    // Active Preloader Js
    var preLoader = $(window);
    preLoader.on("load", function () {
        var preloader = jQuery('.preloader');
        var spinnerTime = jQuery('.spinner');
        preloader.fadeOut();
        spinnerTime.delay(400).fadeOut('slow');
    });

    // Menu Header Sticky Active js
      $(window).on('scroll',function() {    
       var scroll = $(window).scrollTop();
       if (scroll < 100) {
        $(".navbar").removeClass("sticky");
       }else{
        $(".navbar").addClass("sticky");
       }
    });


    // Typed Subtitle Active js
    $('.typed-title').typed({
        stringsElement: $('.typing-title'),
        backDelay: 2000,
        typeSpeed: 0,
        loop: true
    });
    
    
    // Skills Progress Active js
    $(window).on("scroll", function() {
        var bar = $("#skills .progress-bar"),
                barPos, 
                windowBtm = $(window).scrollTop() + $(window).height();
        bar.each(function () {
            barPos = $(this).offset().top;
            if(barPos <= windowBtm - 50) {
                $(this).css("width", function() {
                    return $(this).attr("data-width");
                });
                $(this).children(".percent").css({
                    '-webkit-transform': 'scale(1)',
                    '-moz-transform': 'scale(1)',
                    '-ms-transform': 'scale(1)',
                    '-o-transform': 'scale(1)',
                    'transform': 'scale(1)'
                });
            }
        });
    });


    // Isotop Active js
    var $grid = $(".grid").isotope({
        itemSelector: ".grid-item",
        layoutMode: "masonry"
    });

    // Window Load Active js
    var $window = $(window);
    $window.load(function(){
        $grid.isotope({ filter: "*" });
    });

    // Filter Item Active js
    var $portfolio_cat=$(".portfolio_cat ul li ");
        $portfolio_cat.on('click', function (e) { 
    
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        }); 
        
        $portfolio_cat.removeClass("active_cat"); 
        $(this).addClass("active_cat");
        e.preventDefault();
    }); 

   
    //Parallax effects active js
    $(document).ready(function(){
            $('.parallax').parallax("50%", 0.4);
            $('.parallax1').parallax("50%", 0.4);
            $('.parallax2').parallax("50%", 0.4);
            $('.parallax3').parallax("50%", 0.4);

    });


    //  scroll Top Active js
    $(window).on('scroll',function() {  
        if($(this).scrollTop() > 300){
            $("#to-top").fadeIn();
        }else{
            $("#to-top").fadeOut();
        }
    });


    // scrollTop Active js
    $('#to-top').on('click', function(){
        $("html, body").animate({scrollTop:0}, 500);
        return false;
    });


     // counterUp Active js
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 10,
            time: 3000
        });
    });
    
    // Wow Active js
    new WOW().init();

 
    /*
     * ----------------------------------------------------------------------------------------
     *  MAGNIFIC POPUP JS
     * ----------------------------------------------------------------------------------------
     */

    var fancypopup = function () {
        $('.popup_fancy').magnificPopup({
            type: 'image',
            removalDelay: 300,
            mainClass: 'mfp-with-zoom',
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true, // By default it's false, so don't forget to enable it

                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function

                // The "opener" function should return the element from which popup will be zoomed in
                // and to which popup will be scaled down
                // By defailt it looks for an image tag:
                opener: function (openerElement) {
                    // openerElement is the element on which popup was initialized, in this case its <a> tag
                    // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
    };
    // Call the functions 
    fancypopup();


    // Headline Animate js
    jQuery(document).ready(function($) {
        $('.animate-rotate-1').animatedHeadline({
            animationType: 'rotate-1'
        });

        $('.animate-slide').animatedHeadline({
            animationType: 'slide'
        });
    });

// Smooth scroll for in page links - http://wibblystuff.blogspot.in/2014/04/in-page-smooth-scroll-using-css3.html
// Improvements from - https://codepen.io/kayhadrin/pen/KbalA

$(function() {
    var $window = $(window), $document = $(document),
        transitionSupported = typeof document.body.style.transitionProperty === "string", // detect CSS transition support
        scrollTime = 1; // scroll time in seconds

    $(document).on("click", "a[href*=#]:not([href=#])", function(e) {
        var target, avail, scroll, deltaScroll;
    
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            target = $(this.hash);
            target = target.length ? target : $("[id=" + this.hash.slice(1) + "]");

            if (target.length) {
                avail = $document.height() - $window.height();

                if (avail > 0) {
                    scroll = target.offset().top;
          
                    if (scroll > avail) {
                        scroll = avail;
                    }
                } else {
                    scroll = 0;
                }

                deltaScroll = $window.scrollTop() - scroll;

                // if we don't have to scroll because we're already at the right scrolling level,
                if (!deltaScroll) {
                    return; // do nothing
                }

                e.preventDefault();
                
                if (transitionSupported) {
                    $("html").css({
                        "margin-top": deltaScroll + "px",
                        "transition": scrollTime + "s ease-in-out"
                    }).data("transitioning", scroll);
                } else {
                    $("html, body").stop(true, true) // stop potential other jQuery animation (assuming we're the only one doing it)
                    .animate({
                        scrollTop: scroll + "px"
                    }, scrollTime * 1000);
                    
                    return;
                }
            }
        }
    });

    if (transitionSupported) {
        $("html").on("transitionend webkitTransitionEnd msTransitionEnd oTransitionEnd", function(e) {
            var $this = $(this),
                scroll = $this.data("transitioning");
            
            if (e.target === e.currentTarget && scroll) {
                $this.removeAttr("style").removeData("transitioning");
                
                $("html, body").scrollTop(scroll);
            }
        });
    }
});


})(jQuery);


