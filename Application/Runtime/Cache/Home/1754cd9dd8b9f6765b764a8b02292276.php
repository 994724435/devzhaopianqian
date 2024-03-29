<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>话费充值</title>
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
	  <h1 class="mui-title">话费充值</h1>
	</header>
	<div class="mui-content">
	    <form class="mui-input-group" action="" method="post">
	    	<div class="myPoint">我的积分：<span><?php echo ($username["dongbag"]); ?>分</span></div>
	    	
		    <div class="mui-input-row">
		        <label>手机号</label>
		        <input type="number" value="<?php echo ($username["tel"]); ?>" class="mui-input-clear" placeholder="请输入手机号" id="tel" name="tel">
		    </div>
		    <div class="mui-input-row">
		        <label>充值金额</label>
		        <!--<input type="number" class="mui-input-clear" placeholder="请输入充值金额" id="num" name="num">-->
				<select name="number" >
				<option value="10">10</option>
				<option value="20">20</option>
				<option value="30">30</option>
				<option value="50">50</option>
				<option value="100">100</option>
				<option value="500">500</option>
				</select>
		    </div>
		    <div class="mui-input-row">
		        <label>支付密码</label>
		        <input type="password"  class="mui-input-password" placeholder="请输入支付密码" id="pwd1" name="pwd2">
		    </div>
		   
			<button class="mui-btn mui-btn-block" id="submit">确认充值</button>
		</form>
	</div>
</body>
</html>