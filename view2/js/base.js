/* 
 * @Author: Marte
 * @Date:   2016-05-05 16:26:09
 * @Last Modified by:   Marte
 * @Last Modified time: 2016-05-09 17:53:29
 */

$(document).ready(function() {
    // 导航
    // var fuTop = $('.box .fugai').offset().top
    var navTop = $('.nav').offset().top
        // alert(navTop)
    var wH = $('.navTitle li').width()

    // 导航滚动定位
    $(window).scroll(function(event) {
        var winTop = $(window).scrollTop();
        if (winTop > navTop) {
            $('.nav').css({
                // 'height':80,
                'background': 'rgba(255, 255, 255, 0.9)',
                'position': 'fixed',
                'top': 0,
                'left': 0,
                'z-index': 99,
                'box-shadow':' 0px 0px 5px rgba(0, 0, 0, 0.3)'
            });
        } else {
            $('.nav').css({
                'background': 'white',
                'position': 'static',
                'box-shadow':' 0px 0px 0px white'
            });
        };
    });

    // 导航下滑滚动位置
    $('.navTitle li').click(function(event) {
            var index = $(this).index();
            var dynamic = index * wH

            $('.navTitle li').children('h3').removeClass()
            $(this).children('h3').addClass('current');
            $(this).siblings('#switch_bottom').stop().animate({ 'left': dynamic }, 300);
        })
        .mouseenter(function() {
            // var index = $(this).index();
            // var dynamic = index * wH
            // $('#switch_bottom').stop().animate({ 'left': dynamic}, 300);
            $(this).children('ul').stop().slideDown(300);
            // $(this).children('menu').addClass('class_name');
            $(this).children('ul').css('box-shadow', '0px 0px 3px rgba(0,0,0,0.2)');
        })
        .mouseleave(function(event) {
            // $('.navTitle li').stop().animate({ 'left': 0 }, 300);
            $(this).children('ul').stop().slideUp(300);
        });

    // 导航鼠标移上二维码显示
    $('.nav .code').hover(function() {
        $('.code .pic').stop().fadeToggle(300);
    });

    // ========
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
        new WOW().init();
    };

// ===========
    // $(window).scroll(function(event) {
    //     var winTop = $(window).scrollTop();
    //     if (winTop > fuTop) {
    //         $('.box .gugai').css({
    //             // 'height':80,
    //             'background': 'rgba(255, 255, 255, 0.9)',
    //             'position': 'fixed',
    //             'top': 0,
    //             'left': 0,
    //             'z-index': 99
    //         });
    //     } else {
    //         $('.box .gugai').css({
    //             'background': 'white',
    //             'position': 'static'
    //         });
    //     };
    // });


});
