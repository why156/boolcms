<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>BoolCMS 管理中心</title>
<meta name="Copyright" content="Douco Design." />
<link href="/bool_cms/Public/Admin/css/public.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function refreshimage() {
    var cap = document.getElementById('vcode');
    cap.src = cap.src + '?';
}
</script>
</head>
<body>
<div id="login">
  <div class="dologo"></div>
    <form action="/bool_cms/admin.php/Login/login" method="post">
   <ul>  
    <li class="inpLi"><b>用户名：</b><input type="text" name="username" class="inpLogin"></li>
    <li class="inpLi"><b>密码：</b><input type="password" name="password" class="inpLogin"></li>
        <li class="captchaPic">
      <div class="inpLi">
        <b>验证码：</b>
        <input type="text" name="code" class="captcha" ></div>
        <img id="vcode" src="/bool_cms/admin.php/Login/code" alt="启用验证码" border="1" width="70" onClick="refreshimage()" title="看不清？点击更换另一个验证码。">
    </li>
        <li class="sub"><input type="submit" class="btn" value="登录"></li> 
    <li class="action"><a href="">忘记密码？</a> <em class="separator">|</em> <a href="">返回首页</a></li> 
   </ul>
  </form>
    </div>
</body>
</html>
<script type="text/javascript">
//    验证码
    $( function(){
        var checkVerify="/bool_cms/admin.php/Login/code";
        
      //点击图片切换验证码
      $('#vcode').click(function(){
                var verifyurl=$(this).attr('src');
                //alert(verifyurl);
                $(this).attr('src',verifyurl+'/'+Math.random()); 
            });
        } );

</script>