<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>我的</title>
	<link rel="stylesheet" href="/Public/Home/css/aui.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/fonthead.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css">
	<script type="text/javascript" src="/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/fontSize.js"></script>
	<script type="text/javascript" src="/Public/Home/js/swiper.min.js"></script>

</head>
<body class="paddingBottom bodybg">
	<div class="title">
		<span class="photo"><i class="iconfont icon-yonghu"></i></span>
		<ul class="info">
			<li><?php echo ($username["tel"]); ?></li>
			<li><?php if($username["type"] == 1): ?>普通vip<?php elseif($username["type"] == 2): ?>高级vip<?php elseif($username["type"] == 3): ?>豪华vip<?php elseif($username["type"] == 4): ?>至尊vip<?php elseif($username["type"] == 0): ?>普通用户<?php endif; ?> </li>
		</ul>
	</div>
	<ul class="mui-table-view mui-table-view-chevron">
		<li class="mui-table-view-cell li_icon">
			<a class="mui-navigate-right" href="upgrade.html">
				<i class="iconfont icon-huiyuan1"></i>
				会员升级
			</a>
		</li>
		<li class="mui-table-view-cell li_icon">
			<a class="mui-navigate-right" href="workOrder.html">
				<i class="iconfont icon-order"></i>
				我的工单
			</a>
		</li>
		<li class="mui-table-view-cell li_icon">
			<a class="mui-navigate-right" href="rechargeDetail.html">
				<i class="iconfont icon-chongzhi"></i>
				充值记录
			</a>
		</li>
		<li class="mui-table-view-cell li_icon">
			<a class="mui-navigate-right" href="drawDetail.html">
				<i class="iconfont icon-tixian1"></i>
				提现记录
			</a>
		</li>
		<li class="mui-table-view-cell li_icon">
			<a class="mui-navigate-right" href="loginPwd.html">
				<i class="iconfont icon-mima"></i>
				修改登录密码
			</a>
		</li>
		<li class="mui-table-view-cell li_icon">
			<a class="mui-navigate-right" href="payPwd.html">
				<i class="iconfont icon-mimayaochi"></i>
				修改支付密码
			</a>
		</li>
		<li class="mui-table-view-cell li_icon">
			<a class="mui-navigate-right" href="contact.html">
				<i class="iconfont icon-zaixiankefu1"></i>
				在线客服
			</a>
		</li>
		<li class="mui-table-view-cell li_icon">
			<a class="mui-navigate-right" href="about.html">
				<i class="iconfont icon-guanyuwomen"></i>
				关于我们
			</a>
		</li>

		<li class="mui-table-view-cell li_icon">
			<a class="mui-navigate-right" href="/index.php/Home/Login/login.html">
				<i class="iconfont icon-guanyuwomen"></i>
				退出登录
			</a>
		</li>
	</ul>
	
<nav class="mui-bar mui-bar-tab">
    <a class="mui-tab-item" data-href="/index.php/Home/Index/index.html">
        <span class="mui-icon"><img src="/Public/Home/img/7.png" alt=""></span>
        <span class="mui-tab-label">首页</span>
    </a>
    <a class="mui-tab-item" data-href="/index.php/Home/User/funds.html">
        <span class="mui-icon" style="width: 20px;"><img src="/Public/Home/img/81.png" alt=""></span>
        <span class="mui-tab-label">账单</span>
    </a>
    <a class="mui-tab-item" data-href="/index.php/Home/User/recharge.html">
        <span class="mui-icon"><img src="/Public/Home/img/91.png" alt=""></span>
        <span class="mui-tab-label">充值</span>
    </a>
    <a class="mui-tab-item" data-href="/index.php/Home/User/my.html">
        <span class="mui-icon"><img src="/Public/Home/img/10.png" alt=""></span>
        <span class="mui-tab-label">我的</span>
    </a>
</nav>

	<!--<nav class="mui-bar mui-bar-tab">-->
		<!--<a class="mui-tab-item" data-href="index.html">-->
			<!--<span class="mui-icon"><img src="/Public/Home/img/7.png" alt=""></span>-->
			<!--<span class="mui-tab-label">首页</span>-->
		<!--</a>-->
		<!--<a class="mui-tab-item" data-href="funds.html">-->
			<!--<span class="mui-icon" style="width: 20px;"><img src="/Public/Home/img/81.png" alt=""></span>-->
			<!--<span class="mui-tab-label">账单</span>-->
		<!--</a>-->
		<!--<a class="mui-tab-item" data-href="recharge1.html">-->
			<!--<span class="mui-icon"><img src="/Public/Home/img/91.png" alt=""></span>-->
			<!--<span class="mui-tab-label">充值</span>-->
		<!--</a>-->
		<!--<a class="mui-tab-item  mui-active" data-href="my.html">-->
			<!--<span class="mui-icon"><img src="/Public/Home/img/10.png" alt=""></span>-->
			<!--<span class="mui-tab-label">我的</span>-->
		<!--</a>-->
	<!--</nav>-->
	 
</body>
</html>