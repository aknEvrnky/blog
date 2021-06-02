$(document).ready(function (){
    $('.navigation .nav-menu .submenu').each(function (i, e) {
        el = $(e);

        el.children('a').append('<i class="fal fa-angle-down"></i>');
    });

    $('.mobile-hamburger .nav-menu .submenu').each(function (i, e) {
        el = $(e);

        el.append('<button class="submenu-toggler"><i class="fal fa-angle-down"></i></button>');
    });

    $('.mobile-hamburger .nav-menu').on('click','.submenu-toggler', function () {

        var el = $(this);

        el.closest('.submenu').next('.dropmenu').slideToggle();

    });

    $('.goSearch').click(function () {

        $('html,body').animate({
            scrollTop: $('body').position().top += 300
        }, 300);

        setTimeout(function(){ $('#s').focus(); }, 500);


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


    $('.share .copy').on('click', function() {
        console.log('copied');
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($('#link').val()).select();
        document.execCommand("copy");
        $temp.remove();

    });



});