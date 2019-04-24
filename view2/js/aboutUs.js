/* 
 * @Author: Marte
 * @Date:   2016-05-08 15:46:14
 * @Last Modified by:   Marte
 * @Last Modified time: 2016-05-09 16:15:14
 */

$(document).ready(function() {
    var timer = null
    var num = 0


    $(".activityConter .box").fadeTo(0, 0.7)
    $(".activityConter .boxmain").fadeTo(0, 0.7)
    $('.activityConter li').hover(function() {
        $(this).children('.activityConter .box,p').stop().animate({ bottom: 5 }, 200);
        $(this).children('.activityConter .boxmain,.content').stop().animate({ bottom: 0 }, 200);
    }, function() {
        $(this).children('.activityConter .box,p').stop().animate({ bottom: -330 }, 200);
        $(this).children('.activityConter .boxmain,.content').stop().animate({ bottom: -330 }, 200);
    });

    $('.node li').click(function(event) {
        $('.node li').children().removeClass();
        $(this).children().addClass('current');
        var index = $(this).index();
        $('.aboutUsmain .activityConter').eq(index).show().siblings('.activityConter').hide();
    });

    function autoplay() {
        num -= 1
        if (num <= -2040) { num = 0 };
        $('.shijianContent').css('left', num);
    }
    timer = setInterval(autoplay, 30);

    $('.shijianContent li').hover(function() {
        clearInterval(timer)
    }, function() {
        clearInterval(timer)
        timer = setInterval(autoplay, 30)
    });
    // ====================
    function GetRequest() {
        var url = location.search; //获取url中"?"符后的字串
        var theRequest = new Object();
        if (url.indexOf("?") != -1) {
            var str = url.substr(1);
            strs = str.split("&");
            for (var i = 0; i < strs.length; i++) {
                theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
            }
        }
        return theRequest;
    }
    var Request = undefined;
    Request = GetRequest();
    var id = Request["id"];
    // alert(id)
    if (id == 1) {
        window.location.href = "#1";
    } else if (id == 2) {
        window.location.href = "#2";
    } else if (id == 3) {
        window.location.href = "#3";
    } else if (id == 4) {
        window.location.href = "#4";
    } else {
        console.log('0')

    };
});
