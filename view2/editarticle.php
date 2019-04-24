<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <?php
 require_once("../islogin.php");
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>DouPHP 管理中心 - 添加文章 </title>
<meta name="Copyright" content="Douco Design." />
<link href="css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
 <script type="text/javascript" charset="utf-8" src="../utf8-php/ueditor.config.js"></script>
 <script type="text/javascript" charset="utf-8" src="../utf8-php/ueditor.all.min.js"> </script>
 <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
 <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
 <script type="text/javascript" charset="utf-8" src="../utf8-php/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<div id="dcWrap">
 <div id="dcHead">
 <div id="head">
  <div class="logo"><a href="index.html"><img src="images/dclogo.gif" alt="logo"></a></div>
  <div class="nav">
   <ul>
    <li class="M"><a href="JavaScript:void(0);" class="topAdd">新建</a>
     <div class="drop mTopad"><a href="product.php?rec=add">商品</a> <a href="article.php?rec=add">文章</a> <a href="nav.php?rec=add">自定义导航</a> <a href="show.html">首页幻灯</a> <a href="page.php?rec=add">单页面</a> <a href="manager.php?rec=add">管理员</a> <a href="link.html"></a> </div>
    </li>
    <li><a href="../index.php" target="_blank">查看站点</a></li>
    <li><a href="index.php?rec=clear_cache">清除缓存</a></li>
    <li><a href="http://help.douco.com" target="_blank">帮助</a></li>
    <li class="noRight"><a href="module.html">DouPHP+</a></li>
   </ul>
   <ul class="navRight">
    <li class="M noLeft"><a href="JavaScript:void(0);">您好，admin</a>
     <div class="drop mUser">
      <a href="manager.php?rec=edit&id=1">编辑我的个人资料</a>
      <a href="manager.php?rec=cloud_account">设置云账户</a>
     </div>
    </li>
    <li class="noRight"><a href="../Signout.php">退出</a></li>
   </ul>
  </div>
 </div>
</div>
<!-- dcHead 结束 --> <div id="dcLeft"><div id="menu">
 <ul class="top">
  <li><a href="index.php"><i class="home"></i><em>管理首页</em></a></li>
 </ul>
  <ul>
  <li><a href="article_category.php"><i class="articleCat"></i><em>文章分类</em></a></li>
  <li class="cur"><a href="article.php?page=<?php if(@$_GET["page"]){echo $_GET["page"];}else{echo "0";}?>"><i class="article"></i><em>文章列表</em></a></li>
 </ul>
   <ul class="bot">
  <li><a href="manager.php"><i class="manager"></i><em>网站管理员</em></a></li>
  <li><a href="manager_log.php"><i class="managerLog"></i><em>操作记录</em></a></li>
 </ul>
</div></div>
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">SZZTNEW 管理中心<b>></b><strong>编辑文章</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="article.php?page=<?php if(@$_GET["page"]){echo $_GET["page"];}else{echo "0";}?>" class="actionBtn">文章列表</a>添加文章</h3>
<!--    <form action="" method="post" enctype="multipart/form-data">-->
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right">文章名称</td>
       <td>
        <input type="text" name="title"  size="80" class="inpMain" id="title" />
       </td>
      </tr>
      <tr>
       <td align="right">文章分类</td>
       <td>
        <select name="cat_id" class="feilei" id="selectbtn">
<!--         <option value="0">未分类</option>-->
<!--                           <option value="1"> 最新动态</option>-->
<!--                           <option value="2"> 行业动态</option>-->
<!--                           <option value="3"> 行业新闻</option>-->
        </select>
       </td>
      </tr>
            <tr>
       <td align="right" valign="top">文章描述</td>
       <td>
       
        <!-- /KindEditor -->
<!--        <textarea id="content" name="content" style="width:780px;height:400px;" class="textArea"></textarea>-->
        <script id="editor" type="text/plain" style="width:1024px;height:500px;"></script>
       </td>
      </tr>
      <tr>
       <td align="right">缩略图</td>
       <td>

        <form action="../upload/doAction3.php?id=<?php echo $_GET["id"] ?>" name="form" method="post" enctype="multipart/form-data" target="myiframe" >
         <input type="file" name='myFile' size="38" class="inpFlie"/>
         <input type="submit" name="submit" value="上传" id="whaha" style="width:100px;height:32px;margin-left: 20px; background: #0072C6;color:#ffffff;-webkit-border-radius: 2px;"/>


        
          <iframe name=myiframe width=0 height=0 scrolling="no"></iframe>
        <img src="images/icon_no.png"></td>
      </tr>

      <tr>
       <td align="right">简单描述</td>
       <td>
        <input type="text" name="description" value="" size="50" class="inpMain" id="description" />
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="token" value="7e4a88fb" />
        <input type="hidden" name="image" value="">
        <input type="hidden" name="id" value="">
        <input name="submit" class="btn" type="button" value="提交" />
       </td>
      </tr>
     </table>
    </form>
       </div>
 </div>
 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   版权所有 © 2013-2015 广州证通有限公司 ，并保留所有权利。
  </ul>
 </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
<script type="text/javascript">
 $.ajax({
  type:"post",
  url:"../dao/selnewclass_info.php",
  dataType:"text",
  success:function(data){
     eval("data = " + data + ";") ;
   //console.log(data.newclass[0].code);
   for(var i=0;i<data.newclass.length;i++){
    $("#selectbtn").append('<option value="'+data.newclass[i].code+'">'+data.newclass[i].class+'</option>')
   }
  }
 });

var time = new Date();
 function timeStamp2String(time){
  var datetime = new Date();
  datetime.setTime(time);
  var year = datetime.getFullYear();
  var month = datetime.getMonth() + 1 < 10 ? "0" + (datetime.getMonth() + 1) : datetime.getMonth() + 1;
  var date = datetime.getDate() < 10 ? "0" + datetime.getDate() : datetime.getDate();
  var hour = datetime.getHours()< 10 ? "0" + datetime.getHours() : datetime.getHours();
  var minute = datetime.getMinutes()< 10 ? "0" + datetime.getMinutes() : datetime.getMinutes();
  var second = datetime.getSeconds()< 10 ? "0" + datetime.getSeconds() : datetime.getSeconds();
  return year + "-" + month + "-" + date
//      +" " +hour+":"+minute+":"+second;
 }
 // alert(timeStamp2String(time))
</script>
<script type="text/javascript">

 //实例化编辑器
 //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
 var ue = UE.getEditor('editor');
 var upimg;
$("#whaha").click(function(){
 $.ajax({
   type:"post",
    url:"../upload/upimg.php",  
   success:function(data){
     upimg=data;
   },
   error:function(xhr){
       console.log(xhr)
   }
  });
})



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
  var newid = Request["id"];
  //alert(newid);

  var title  = $("#title").val();
  var   feilei  = $(".feilei").val();
//
  var description = $("#description").val();
 var   feileis;
 var   ghj;
 $.ajax({
   type:"post",
   url:"../selectapi.php",
   data:{
       id:newid,
      
   },
   dataType:"text",
   success:function(data){
    eval("data = " + data + ";") ;
    console.log(data);
    $("#title").val(data.new[0].title);
    $(".feilei").val(data.new[0].code);
    feileis = data.new[0].code;
    $("#description").val(data.new[0].description);
       ghj = data.new[0].titleimg;
       console.log(data.new[0].titleimg);
    //ue.addListener("ready", function () {
     // editor准备好之后才可以使用
     ue.setContent(data.new[0].content);

   // });
   }

  });

 $(".btn").click(function () {
 //alert(timeStamp2String(time));
  var titles  = $("#title").val();
 var   feileis  = $(".feilei").val(); 

  var descriptions = $("#description").val();

   if(ghj!=null && upimg==null){
     upimg=ghj;
   }


  $.ajax({
   type:"post",
   url:"../updatednew.php",
   data:{
    id:newid,
    title: titles,
    titleimg:upimg,
    content: UE.getEditor('editor').getContent(),
    time:timeStamp2String(time),
    description:descriptions,
    code:feileis,
   },
   success:function(data){

      alert("成功更新");
   },
   error:function(data){

   }
  });

 })

</script>
</body>
</html>