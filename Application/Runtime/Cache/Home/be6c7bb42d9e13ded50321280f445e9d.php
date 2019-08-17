<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>我的资产</title>
	<link rel="stylesheet" href="/Public/Home/css/aui.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css">
	<script type="text/javascript" src="/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/aui.js"></script>
	<script type="text/javascript" src="/Public/Home/js/fontSize.js"></script>
	<script type="text/javascript" src="/Public/Home/js/swiper.min.js"></script>
</head>
<body>
	<header class="mui-bar mui-bar-nav">
	  <a class="mui-icon mui-icon-left-nav mui-pull-left mui-action-back"></a>
	  <h1 class="mui-title">我的资产</h1>
	</header>
	<div class="mui-content">
		<ul class="eable_money">
			<li>当前可用余额</li>
			<li><?php echo ($username["chargebag"]); ?>元</li>
		</ul>
		<ul class="bottom_ul">
			<li class="bottom_li">
				<ul>
					<li>智能充余额(元)</li>
					<li><?php echo ($username["jingbag"]); ?>元</li>
				</ul>
			</li>
			<li class="bottom_li">
				<ul>
					<li>冻结资产(元)</li>
					<li><?php echo ($username["djbag"]); ?></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="grade">
		当前级别：<span><?php if($username["type"] == 1): ?>普通vip<?php elseif($username["type"] == 2): ?>高级vip<?php elseif($username["type"] == 3): ?>豪华vip<?php elseif($username["type"] == 4): ?>至尊vip<?php elseif($username["type"] == 0): ?>普通用户<?php endif; ?> </span>
	</div>
	<ul class="money_ul">
		<li class="money_title">累计收入</li>
		<li class="money"><?php echo ($incomes); ?>元</li>
		<li class="money_tip">智能充收入金额：<?php echo ($incomes2); ?>元</li>
	</ul>
	<ul class="money_ul">
		<li class="money_title">总资产</li>
		<li class="money"><?php echo ($alls); ?>元</li>
		<li class="money_tip">智能充可用金额：<?php echo ($username["jingbag"]); ?>元</li>
		<li class="money_tip">智能充冻结金额：<?php echo ($username["djbag"]); ?>元</li>
	</ul>
    <ul class="revolution">
		<li><a href="/index.php/Home/Index/assetsout">转出</a></li>
    	<li><a href="/index.php/Home/Index/assetsin">转入</a></li>
    </ul>

</body>
</html>