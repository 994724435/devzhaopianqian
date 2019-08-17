<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>提现</title>
	<link rel="stylesheet" href="/Public/Home/css/aui.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.min.css">
	<script type="text/javascript" src="/Public/Home/js/aui.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css">
	<script type="text/javascript" src="/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/fontSize.js"></script>
	<script type="text/javascript" src="/Public/Home/js/swiper.min.js"></script>
</head>
<body>
	<header class="mui-bar mui-bar-nav">
	  <a class="mui-icon mui-icon-left-nav mui-pull-left mui-action-back"></a>
	  <h1 class="mui-title">提现</h1>
	</header>
	<div class="mui-content">
	    <form class="mui-input-group" action="" method="post">
		    <div class="mui-input-row">
		        <label>提现金额</label>
		        <input type="number" name="num" class="mui-input-clear" placeholder="请输入提现金额" id="num">
		    </div>
			<div class="mui-input-row">
				<label>支&nbsp;  付  宝</label>
				<input type="number" name="zhifubao"  value="<?php echo ($username["zhifubao"]); ?>" class="mui-input-clear" placeholder="请输入提现账号" id="num">
			</div>
			<div class="mui-input-row">
				<label> 微&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 信 </label>
				<input type="number" name="weixin" value="<?php echo ($username["weixin"]); ?>"  class="mui-input-clear" placeholder="请输入提现账号" id="num">
			</div>

		    <div class="mui-input-row">
		        <label>支付密码</label>
		        <input type="password" name="pwd2" class="mui-input-password" placeholder="请输入支付密码" id="pwd">
		    </div>
			<button class="mui-btn mui-btn-block" id="submit">确认提现</button>
		</form>
	</div>
	
</body>
</html>