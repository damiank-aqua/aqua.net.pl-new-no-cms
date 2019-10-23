$(function () {

    setActiveMenu();

    $('.content-back .object').hover(function() {

        $(this).children('img').removeClass('shop-shadow-out');

        $(this).children('img').addClass('shop-shadow-in');

    }, function() {

        $(this).children('img').removeClass('shop-shadow-in');

        $(this).children('img').addClass('shop-shadow-out');

    });

})