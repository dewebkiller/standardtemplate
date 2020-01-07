$(document).ready(function () {
//Hover Menu Dropdown in Bootstrap
    jQuery('ul.navbar-nav li.dropdown').hover(function () {
        jQuery(this).find('.dropdown-menu').stop(true, true).show();
        jQuery(this).addClass('open');
    }, function () {
        jQuery(this).find('.dropdown-menu').stop(true, true).hide();
        jQuery(this).removeClass('open');
    });
// Scroll to top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    $(".slide-toggle").click(function () {
        $(".box").animate({
            width: "toggle"
        });
    });
    $(".fancybox").fancybox();
});
if ($(window).width() <= 991) {
    $(".wow").removeClass("wow");
}
$(window).load(function () {
    var wow = new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: off,
        live: true
    });
    wow.init();
});

// Repeat demo content
var $body = $('body');
var $box = $('.box');
for (var i = 0; i < 20; i++) {
    $box.clone().appendTo($body);
}

// Helper function for add element box list in WOW
WOW.prototype.addBox = function (element) {
    this.boxes.push(element);
};
// Init WOW.js and get instance
var wow = new WOW();
wow.init();
// Attach scrollSpy to .wow elements for detect view exit events,
// then reset elements and add again for animation
$('.wow').on('scrollSpy:exit', function () {
    $(this).css({
        'visibility': 'hidden',
        'animation-name': 'none'
    }).removeClass('animated');
    wow.addBox(this);
}).scrollSpy();
// Banner
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    dots: false,
    autoplay: true,
    video: true,
    lazyLoad: true,
    center: true,
    videoHeight: 450,
    videoWidth: 100 + '%',
    navText: ["<span class='icon icon-arrow-left7 hvr-forward'></span>", "<span class='icon icon-arrow-right7 hvr-backward'></span>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

$(document).ready(function () {

    setTimeout(function () {
        $('body').addClass('loaded');
        //$('h1').css('color','#222222');
    }, 3000);

});
$('body').toggleClass('loaded');

// Fixed menu
$("header").waypoint(function () {
    $(".btm-header").toggleClass("navbar-fixed-top animated fadeInDown");
    $(".btm-header.js-toggleClass").toggleClass("js-toggleClass");
    return false;
}, {offset: '-0.1px'});
