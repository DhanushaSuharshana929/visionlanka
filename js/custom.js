//$(document).ready(function () {
//
//window.onscroll = function() {scrollFunction()};
//
//function scrollFunction() {
//  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
//    document.getElementById("navbar").style.padding = "30px 10px";
//    document.getElementById("logo").style.fontSize = "25px";
//  } else {
//    document.getElementById("navbar").style.padding = "80px 10px";
//    document.getElementById("logo").style.fontSize = "35px";
//  }
//}
//});
$(document).ready(function () {
    "use strict";
    /*
     ============================================================
     Page Loader Javascript
     ============================================================
     */



    /*
     ============================================================
     Main Banner Javascript
     ============================================================
     */
    if ($('.slider').length) {
        $('.slider').on('init', function (e, slick) {
            var $firstAnimatingElements = $('.slick-slide:first-child').find('[data-animation]');
            doAnimations($firstAnimatingElements);
        });
        $('.slider').on('beforeChange', function (e, slick, currentSlide, nextSlide) {
            var $animatingElements = $('.slick-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
            doAnimations($animatingElements);
        });
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            dots: false,
            fade: true
        });
    }
});
(function ($) {

    "use strict"


    /* ## Document Scroll - Window Scroll */
    $(document).scroll(function ()
    {
        var scroll = $(window).scrollTop();
        var height = 200;
 

        /*** set sticky menu ***/
        if (scroll >= height)
        {
            $('.header-main').addClass("navbar-fixed-top animated fadeInDown").delay(2000).fadeIn();
        } else if (scroll <= height)
        {
            $('.header-main').removeClass("navbar-fixed-top animated fadeInDown");
        } else
        {
            $('.header-main').removeClass("navbar-fixed-top animated fadeInDown");
        } // set sticky menu - end		

        if ($(this).scrollTop() >= 50)
        {
            // If page is scrolled more than 50px
            $('#back-to-top').fadeIn(500);    // Fade in the arrow
        } else
        {
            $('#back-to-top').fadeOut(500);   // Else fade out the arrow
        }
    });

})(jQuery);



function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}
;


$('.translation-links a').click(function () {
    var lang = $(this).data('lang');
    var $frame = $('.goog-te-menu-frame:first');
    if (!$frame.size()) {
        alert("Error: Could not find Google translate frame.");
        return false;
    }
    $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
    return false;
}

);

$(window).load(function () {
    // Animate loader off screen
    $(".preloader").fadeOut(500);
    ;
});