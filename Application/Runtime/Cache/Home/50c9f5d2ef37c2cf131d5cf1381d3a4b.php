<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>登录</title>
	<link rel="stylesheet" href="/Public/Home/css/style.css">
	<script type="text/javascript" src="/Public/Home/js/aui.js"></script>
</head>
<body class="login_bg">
<img src="/Public/Home/img/logo.png" alt="" class="logoImg">
<form action="" method="post">
	<input type="text" name="tel" placeholder="用户名" class="userName">
	<input type="password" name="pwd" placeholder="密码" class="pwd">
	<button type="submit" class="login">登录</button>
</form>
<div class="login_tip"><a href="forgetPwd.html" class="fl">忘记密码?</a><a href="reg.html" class="fr">注册</a></div>

</body>
</html>