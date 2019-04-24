
$('.news-class a').click(function() {
    $(this).siblings().removeClass("curs");
    $(this).addClass("curs");
    var num = $(this).index();
    console.log(num);
    $(".sub-news-main").eq(num).show();
    $(".sub-news-main").eq(num).siblings(".sub-news-main").hide();
});