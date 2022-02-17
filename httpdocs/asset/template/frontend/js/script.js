//submenu ==================================
$(document).on('mouseenter', '.top-menu-list', function() {
    $(this).find('ul').show();
});

$(document).on('mouseleave', '.top-menu-list .sub-menu', function() {
    $(this).find('ul').hide();
});
//==========================================

//hero menu =================================
$(function() {
    //side menu
    $('body').addClass('js');
    $('.hamburger').click(function() {
        show_side_menu();
    });

    //set hero height
    $(".hero").height($(window).height());
    window.addEventListener('resize', setWindowSize);

    function setWindowSize() {
        $(".hero").height($(window).height());
    }

    //hide hero on click overlay-hero
    $(".overlay-hero").click(function() {
        show_side_menu();
    });

    function show_side_menu() {
        $('.hamburger').toggleClass('is-active');
        $('#site-nav').toggleClass('is-active');
        $('#masthead').toggleClass('is-active');
        if ($('.hero').is(":hidden")) {
            $('.hero').show();
            $(".hero").fadeIn();
            $('.overlay-hero').fadeIn();
        } else {
            $('.hero').hide();
            $('.overlay-hero').fadeOut();
        }
        return false;
    }
});
//================================================

//Show icon menu  ============================
$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 50 || $(window).width() <= 960) {
        $('.top-icons-button.icon-menu').fadeIn();
    } else {
        $('.top-icons-button.icon-menu').fadeOut();
    }
    if (y > 50) {
        $('.main-menu').fadeOut();
    } else {
        $('.main-menu').fadeIn();
    }
});
//================================================


//Show loading image ============================
$(document).ready(function() {
    $("a").click(function() {
        if (!$(this).attr('href').includes("javascript") && !$(this).attr('href').includes("#") && $(this).attr('target') != "_blank")
            $(".loading").show();
    });
});

var interval = setInterval(function() {
    if (document.readyState === 'complete') {
        clearInterval(interval);
        $(".loading").hide();
    }
}, 100);
//================================================

//Show overlay card image ============================

//submenu ==================================
$(document).on('mouseenter', '.card-image', function() {
    $(this).find('.card-image-overlay').fadeIn();
});

$(document).on('mouseleave', '.card-image', function() {
    $(this).find('.card-image-overlay').fadeOut();
});
//==========================================

//Show more description ==================================
$(function() {
    $(".btnMoreDescription").click(function() {
        $('.descriptionLess').hide();
        $('.btnMoreDescription').hide();
        $('.descriptionMore').show();
    });
});