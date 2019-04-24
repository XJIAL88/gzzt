/* 
 * @Author: Marte
 * @Date:   2016-05-12 12:22:45
 * @Last Modified by:   Marte
 * @Last Modified time: 2016-05-09 17:51:16
 */

$(document).ready(function() {
    var timer = null;
    var sx = 0

    $('.newsCenterMain ol li').hover(function() {
        $(this).addClass('current').siblings().removeClass();
        var index = $(this).index();
        $('.newsCenterMain ul').eq(index).show().siblings('ul').hide();
        sx = index;
    });

    // 自动模块
    function func() {
        sx++
        if (sx > 2) { sx = 0 }
        $('.newsCenterMain ol li').eq(sx).addClass('current').siblings().removeClass();
        $('.newsCenterMain ul').eq(sx).show().siblings('ul').hide();
    }
    timer = setInterval(func, 5000)
        // 清除模块
    $('.newsCenterMain').hover(function() {
        clearInterval(timer);
    }, function() {
        clearInterval(timer);
        timer = setInterval(func, 5000);
    });

    // 关于我们
    $('.aboutUsMain .mask').fadeTo(0, 0.9);
    $('.aboutUsMain div').hover(function() {
        $(this).children().stop().animate({ 'top': 0, 'left': 0 }, 500)
    }, function() {
        $(this).children().stop().animate({ 'top': 237, 'left': 237 }, 500)
    });
    // $('.aboutUsMain div').click(function(event) {
    //     window.location.href = "aboutUs.html";

    // });


    // 招贤纳士 
    $('.recruitmentMain ol li').click(function(event) {
        $(this).addClass('curr').siblings().removeClass()
        var index = $(this).index()

        $('.recruitmentMain ul').eq(index).show().siblings('ul').hide();
    });

    $('.recruitmentMain ul li').hover(function() {
        $(this).children('p').stop().slideDown(500)
        $(this).find('.more').children('.moreIcon').addClass('open')

    }, function() {
        $(this).children('p').stop().slideUp(500)
        $(this).find('.more').children('.moreIcon').removeClass('open')
    });

    // 惠生活
    $('.serviceHuishenghuo ul li').hover(function() {
        $(this).stop().animate({ top: -24 }, 500);
        $(this).css({ 'opacity': '1', 'box-shadow': '0 0 10px #ccc' });

    }, function() {
        $(this).stop().animate({ top: 0 }, 500)
        $(this).css('opacity', '0.5');
    });
});

// ================
$('.serviceYiqu ul li').hover(function() {
    $(this).css({
        'z-index': '3',
    });
}, function() {
    $(this).css('z-index', '0');
 
});

   $('.aboutUsMain div').eq(1).click(function(event) {
        window.location.href = "aboutUs.html?id=4"
    });
   $('.aboutUsMain div').eq(2).click(function(event) {
        window.location.href = "aboutUs.html?id=2"
    });
   $('.aboutUsMain div').eq(3).click(function(event) {
        window.location.href = "aboutUs.html?id=1"
    });
   $('.aboutUsMain div').eq(4).click(function(event) {
        window.location.href = "recruitment.html"
    });
      $('.aboutUsMain div').eq(5).click(function(event) {
        window.location.href = "aboutUs.html?id=3"
    });
