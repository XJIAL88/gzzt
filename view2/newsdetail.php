<!DOCTYPE html>
<html>
<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
<head>
    <meta charset="UTF-8" />
    <title>新闻详情</title>
</head>
<link rel="stylesheet" type="text/css" href="libs/swiper/css/swiper-3.3.1.min.css" />
<link rel="stylesheet" type="text/css" href="css/initial.css" />
<link rel="stylesheet" type="text/css" href="css/base.css" />
<link rel="stylesheet" type="text/css" href="css/aboutUs.css" />
<style>
   .news-class{ width: 1000px; height: 30px; line-height: 30px; text-align: left; }
    .news-class i,.news-class a{ display: inline-block; height: 30px; line-height: 30px; vertical-align: top; }
    .news-class a{  }
    .news-class a#slinka{ padding: 0 0 0 20px; }
    .news-class i{ color: #999; margin-left: 30px; margin-right: 30px }
    .news-class a:hover,.news-class a.curs{ color: #2174f6; }
    .banner {
        /*padding-top: 4px;*/
        height: 500px;
        width: 100%;
        margin-top: 4px;
        /*    background: url(../img/banner01.png) center no-repeat;*/
        box-sizing: border-box;
        overflow: hidden;
    }

    .iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }
    img{display:inline}
    .newsbox{width: 1000px;margin:0 auto;background: #ffffff; padding-bottom: 30px;}
    .newsbox-title{ text-align: center; margin-top: 30px ; margin-bottom;10px }
     .newsbox-title h2{ float:left;font-size:16px; color:#c6c6c6}
    .newsbox-content{ padding-left:20px; padding-right:20px; min-height:400px; overflow:auto}
    .dbfooter{text-align: center; margin:20px auto;width: 100%;}
    .dbfooter span:nth-last-of-type(0){ color: #7b7b7b}
    .dbfooter span:nth-last-of-type(1){ color: #7b7b7b}
    .news-sharetime{margin: 10px auto;width:100%;height:60px;line-height:28px; border-bottom:1px dashed  #a5a5a5}
    .news-sharetime .box{  margin:0 auto ;text-align:center }
    .zttime{color: #a5a5a5; font-size: 18px; }
    .bborder{ border-bottom:1px solid #c6c6c6 ;height:40px}
    .news-sharesd{ position:absolute;margin-left:800px; margin-top:-30px}
    .news-sharesd img{ margin-right:10px}
    .jt{ margin-top:8px; width:30px; height:1px ; background:#c6c6c6;
            transform:rotate(70deg);
           -ms-transform:rotate(70deg); 	/* IE 9 */
                                                      -moz-transform:rotate(70deg); 	/* Firefox */
                                                      -webkit-transform:rotate(70deg); /* Safari 和 Chrome */
                                                      -o-transform:rotate(70deg);
           }
</style>

<body ng-app="myApp" ng-controller="personCtrl">
    <!-- 导航 -->
      <nav class="nav" id="position01">
        <section class="warp">
            <div class="logo fl">
                <a href="index.html"><img src="img/logo.png" height="51" width="277" alt="" /></a>
            </div>
            <ul class="navTitle fl">
                <li style="padding:0;" class="subnav">
                    <h3 ><a href="index.html">首页</a></h3>
                </li>
                <li class="subnav">
                    <h3>产品服务</h3>
                    <ul class="menu">
                        <li><a href="huishenghuo.html">惠生活</a></li>
                        <li><a href="yiqushenghuo.html">益趣生活</a></li>
                        <li><a href="vLink.html">V'Link</a></li>
                        <li><a href="OLink.html">O'Link</a></li>
                    </ul>
                </li>
                <li class="subnav">
                    <h3>解决方案</h3>
                    <ul class="menu">
                        <li><a href="HSH_Solve.html">惠生活</a></li>
                        <li><a href="YQSH_Solve.html">益趣生活</a></li>
                    </ul>
                </li>
                <li class="subnav">
                    <a href="newsCenter.html"><h3>新闻中心</h3></a>

                </li>
                <li class="subnav">
                    <a href="recruitment.html"><h3>招贤纳士</h3></a>
                </li>
                <li class="subnav">
                    <h3><a href="aboutUs.html">关于我们</a></h3>
                    <!--                     <ul class="menu">
                        <li><a href="aboutUs.html">公司简介</a></li>
                        <li><a href="aboutUs.html">公司活动</a></li>
                        <li><a href="aboutUs.html">企业文化</a></li>
                        <li><a href="aboutUs.html">重大事件</a></li>
                        <li><a href="aboutUs.html">联系方式</a></li>
                    </ul> -->
                </li>
                <div id="switch_bottom" style="left: 300px"></div>
            </ul>
            <secton class="code fl">
                <div class="pic"></div>
            </secton>
        </section>
    </nav>
    <!-- banner -->

    <!-- 公司详情 -->
    <div class="newsbox" id="scroll">
        <div class="newsbox-title bborder" >
            <!--  <a href="newsCenter.html"><h2>新闻中心</h2></a><h2 class="jt"></h2><a href="newsCenter.html?tab=1"><h2 id="codetitle"></h2></a><h2 class="jt"></h2 ><h2>正文</h2>-->
             <div class="news-class">
                        <a  class="curs"  href="newsCenter.html">新闻中心<i>|</i></a><a id="codetitle"  href="newsCenter.html"><i>|</i></a><a>正文</a>
              </div>
       </div>
        <div style="clear:both"></div>
       <div class="newsbox-title">
           <h1></h1>
       </div>
       <div class="news-sharetime">



          <div class="box"><span class="zttime"></span>

          </div>
           <div class="news-sharesd">

          <div class="jiathis_style_24x24">
	      <a class="jiathis_button_qzone"></a>
	      <a class="jiathis_button_tsina"></a>
	      <a class="jiathis_button_weixin"></a>
	      <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
	      <a class="jiathis_counter_style"></a>
          </div>


             </div>


       </div>
        <div class="newsbox-content">

        </div>
        <div class="dbfooter">
            <a href="../prevnext.php?page=prev&code=<?php echo $_GET["code"] ?>&id=<?php echo $_GET["id"] ?>"><span><?php if(isset($_COOKIE["pageaction"])&&$_COOKIE["pageaction"]=="prev"){ echo "";}else{echo "上一篇";}  ?></span></a>
            <span> <?php if(isset($_COOKIE["pageaction"])&&$_COOKIE["pageaction"]){ echo "";}else{echo "&nbsp; &nbsp; &nbsp;";}  ?></span>
            <a href="../prevnext.php?page=next&code=<?php echo $_GET["code"] ?>&id=<?php echo $_GET["id"] ?>"><span><?php if(isset($_COOKIE["pageaction"])&&$_COOKIE["pageaction"]=="next"){ echo "";}else{echo "下一篇";}  ?></span></a>
        </div>
    </div>
    <!-- 页脚 -->
    <footer class="footer" >
        <ul>
            <li class="footerTop">
                <div class="wrap">
                    <div class="footerTitle">
                        <span>联系我们</span>
                        <span>CONTACT US</span>
                    </div>
                    <div class="footerconter">
                        <p>广州证通网络科技有限公司</p>
                        <p>
                            <span> ztwl@szzt.com.cn</span>
                            <span>020-31075948</span>
                            <span>地址 ：广东省广州市番禺区105国道大石段838号潮联大厦A1栋758-760室</span>
                        </p>
                        <p>
                            <span>511430</span><span> 020-31076048</span>
                        </p>
                    </div>
                    <div class="lineTop"></div>
                    <div class="lineDown"></div>
                    <div class="icon">
                        <ul style="display:none">
                            <li></li>
                            <li>
                            </li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="footerDown">
                <p>版权所有@2016 广州证通网络科技有限公司 All Right Reserved 粤ICP备16051686号-1</p>
               <p> 友情链接：<a href="http://www.baidu.com " target="_block">百度</a>丨<a href="http://www.szzt.com.cn" target="_block">证通电子</a>丨<a href="http://www.scsxy.com.cn" target="_block">惠生活</a></p>
            </li>
        </ul>
    </footer>


<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
<script src="libs/swiper/js/swiper-3.3.1.min.js" type="text/javascript"></script>
<script src="libs/wow/js/wow.min.js" type="text/javascript"></script>
<script src="js/base.js" type="text/javascript"></script>
<script src="js/aboutUs.js" type="text/javascript"></script>
<script>
window.onload = function() {
    var swiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 3000,
        speed: 1500,
        autoplayDisableOnInteraction: false

    });
}




//   var url = "../prevnext.php?page="+page+"&code="+code+"&id="+id;


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
    var tit = Request["title"];
    console.log(id);
    var url ="../selectapi.php?id="+id;


    $.ajax({
        type:"post",
        url:"../selectapi.php",
	async: false,
        data:{
            id:id,
        },
        dataType:"text",
        success:function(data){

            eval("data="+data+";");
            $(".newsbox-title h1").html(data.new[0].title);
             $(".zttime").html(data.new[0].time);

               $(".newsbox-content").append(data.new[0].content);



            switch (data.new[0].code){
case "0":  return $("#codetitle").html("未分类"+"<i>|</i>"); break;
case "1":  return $("#codetitle").html("最新动态"+"<i>|</i>"); break;
case "2":  return $("#codetitle").html("行业动态"+"<i>|</i>"); break;
case "3":  return $("#codetitle").html("公司新闻"+"<i>|</i>"); break;
default: $("#codetitle").html("全部新闻");
}

        },
        error:function(xhr){
            console.log(xhr)

        }
    })

 //console.log(tit);
//if(tit = true){
   // var jk =465;
  //  $("html, body").scrollTop(0).animate({scrollTop:jk },"fast");
// }


</script>
</body>

</html>

