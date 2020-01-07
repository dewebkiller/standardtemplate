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

});

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

$(document).ready(function() {
	
	setTimeout(function(){
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

$(document).ready(function () {

    // video controls
    $('#state').on('click', function () {
        var video = $('#my-video').get(0);
        var icons = $('#state > span');
        $('#overlay').toggleClass('fadev');
        if (video.paused) {
            video.play();
            icons.removeClass('fa-play').addClass('fa-pause');
        } else {
            video.pause();
            icons.removeClass('fa-pause').addClass('fa-play');
        }
    });
});

$('#my-video').backgroundVideo({
    $videoWrap: $('#video-wrap'),
    $outerWrap: $(window),
    $window: $(window),
    minimumVideoWidth: 400,
    parallax: true,
    parallaxOptions: {
        effect: 1.5
    },
    pauseVideoOnViewLoss: false
});

