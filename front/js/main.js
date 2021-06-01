$(document).ready(function (){
    $('.nav-menu .submenu').each(function (i, e) {
        el = $(e);

        el.children('a').append('<i class="fal fa-angle-down"></i>');
    });

    var headerHeight = $('.header').outerHeight() + 100;

    $(window).scroll(function () {

        var pos = $(this).scrollTop();

        if(pos > headerHeight) {
            $('.navigation').addClass('sticky');
        } else {
            $('.navigation').removeClass('sticky');
        }

    });

    $(window).trigger('scroll');
});