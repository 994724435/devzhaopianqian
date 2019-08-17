<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>提现记录</title>
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
	  <h1 class="mui-title">提现记录</h1>
	</header>
	<div class="mui-content">
	    <table class="my_group_table">
	    	<tr>
	    		<th>金额</th>
	    		<th>时间</th>
	    	</tr>

			<?php if(is_array($res)): foreach($res as $key=>$v): ?><tr>
					<td><?php if($v["state"] == 1): ?>+<?php elseif($v["state"] == 2): ?>-<?php endif; echo ($v["income"]); ?> <?php if($v["state"] == 0): ?>(待审核)<?php endif; ?></td>
					<td><?php echo date("m-d H:i:s",$v['addtime']); ?></td>
				</tr><?php endforeach; endif; ?>

	    </table>
	</div>
	
	
</body>
</html>