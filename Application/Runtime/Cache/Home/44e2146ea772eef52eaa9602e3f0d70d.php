<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>会员升级</title>
	<link rel="stylesheet" href="/Public/Home/css/aui.min.css">
	<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_487606_g87cvzc6ue9rizfr.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/swiper.min.css">
	<script type="text/javascript" src="/Public/Home/js/layer/layer.js"></script>
	<script type="text/javascript" src="/Public/Home/js/aui.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css">
	<script type="text/javascript" src="/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/Public/Home/js/fontSize.js"></script>
	<script type="text/javascript" src="/Public/Home/js/swiper.min.js"></script>

</head>
<body>
	<header class="mui-bar mui-bar-nav">
	  <a class="mui-icon mui-icon-left-nav mui-pull-left mui-action-back"></a>
	  <h1 class="mui-title">会员升级</h1>
	</header>
	<div class="mui-content">
	    <ul class="mui-table-view">
			<li class="mui-table-view-cell">
				当前用户：<?php echo ($username["tel"]); ?>
			</li>
			<li class="mui-table-view-cell">
				当前级别：<span id="grade"><?php if($username["type"] == 1): ?>普通vip<?php elseif($username["type"] == 2): ?>高级vip<?php elseif($username["type"] == 3): ?>豪华vip<?php elseif($username["type"] == 4): ?>至尊vip<?php elseif($username["type"] == 0): ?>普通用户<?php endif; ?></span>
			</li>
			<li class="mui-table-view-cell">
				升级级别：
                <!--<?php echo ($typename); ?>vip-->
				<!--<input type="hidden" value="<?php echo ($typemoney); ?>" placeholder="请输入代金券" class="verify_num" id="needmoney">-->
				<select name="" id="rank">
					<!--<option value="<?php echo $username['type']+ 1;?>"><?php echo ($typename); ?>vip</option>-->
					<option value="1">普通vip</option>
					<option value="2">高级vip</option>
					<option value="3">豪华vip</option>
					<option value="4">至尊vip</option>
				</select>
				<i class="iconfont icon-xialaxuanzexiaosanjiao"></i>
			</li>
			<li class="mui-table-view-cell">
				代金券：
				<input type="text" placeholder="请输入代金券" class="verify_num" id="num">
				<span class="verify_btn">验证代金券</span>	
			</li>
			<li class="mui-table-view-cell">
				升级费用：<span class="update_money"><span id="update_money" class="update_money"><?php echo ($typemoney); ?></span>元</span>
			</li>
			<li class="mui-table-view-cell">
				账户余额：<span class="update_money"><?php echo ($username["chargebag"]); ?>元</span>
			</li>
			<li class="mui-table-view-cell">
				支付密码：
				<input type="password" name="pwd2" placeholder="请输入支付密码" class="verify_num" id="pwd">
			</li>
			
		</ul>
		<div class="update_btn" >马上升级</div>
		<div class="update_tip">我已阅读并且同意<span>《易代充会员升级协议》</span></div>

	</div>

	<script type="text/javascript">
        $(document).ready(function(){
            var grade=$("#grade").html();
//            console.log(grade);
            switch(grade) {
                case "":
                    $("#rank option").eq(0).attr('selected',"selected");
                    $("#update_money").html(699);
                    break;
                case "普通会员":
                    $("#rank option").eq(0).attr('selected',"selected");
                    $("#update_money").html(699);
                    break;
                case "普通vip":
                    $("#rank option").eq(0).hide();
                    $("#rank option").eq(1).attr('selected',"selected");
                    $("#update_money").html(700);
                    break;
                case "高级vip":
                    $("#rank option").eq(0).hide();
                    $("#rank option").eq(1).hide();
                    $("#rank option").eq(2).attr('selected',"selected");
                    $("#update_money").html(600);
                    break;
                case "豪华vip":
                    $("#rank option").eq(0).hide();
                    $("#rank option").eq(1).hide();
                    $("#rank option").eq(2).hide();
                    $("#rank option").eq(3).attr('selected',"selected");
                    $("#update_money").html(700);
                    break;
            }
            $("select").change(function() {
                var n=parseInt($(this).val());
                var grade=$("#grade").html();
                console.log(grade);
                console.log(666);
                switch(grade) {
                    case "":
                        switch(n){
                            case 1: $("#update_money").html(699);
                            break;
                            case 2: $("#update_money").html(1399);
                            break;
                            case 3: $("#update_money").html(1999);
                            break;
                            case 4: $("#update_money").html(2699);
                            break;
                         }
                        break;
                       
                    case "普通用户":
                        switch(n){
                            case 1: $("#update_money").html(699);
                                break;
                            case 2: $("#update_money").html(1399);
                            break;
                            case 3: $("#update_money").html(1999);
                            break;
                            case 4: $("#update_money").html(2699);
                            break;
                         }
                        break;
                    case "普通vip":
                        switch(n){
                            case 2: $("#update_money").html(700);
                                break;
                            case 3: $("#update_money").html(1300);
                                break;
                            case 4: $("#update_money").html(2000);
                                break;
                        }
                        break;
                    case "高级vip":
                        switch(n){
                            case 3: $("#update_money").html(600);
                            break;
                            case 4: $("#update_money").html(1300);
                            break;
                         }
                        break;
                    case "豪华vip":
                       switch(n){
                            case 4: $("#update_money").html(700);
                            break;
                         }
                        break;
                }
                
                console.log($("#rank").val())
            });

            $(".update_btn").click(function(){
                var str,pwd,needmoney,rank;
                str = $("#num").val();
                pwd =$("#pwd").val();
                rank = $("#rank option:selected").val();
                needmoney =$("#needmoney").val();
                $.ajax({      // 1 成功 2密码不对 3金额错误 4余额不足
                    url: '/index.php/Home/User/upgradeType',
                    type: 'get',
                    data: {num:str,pwd:pwd,needmoney:needmoney,rank:rank}  ,
                    dataType: 'json',
                    timeout: 1000,
                    success: function (data) {
                        if(data == 1){
                            layer.open({
                                content: '升级成功'
                                ,skin: 'msg'
                                ,time: 2 //2秒后自动关闭
                            });

                            setTimeout(alertV,1000);
                        }else if(data ==2){
                            layer.open({
                                content: '密码错误'
                                ,skin: 'msg'
                                ,time: 3//2秒后自动关闭
                            });
                        }else if(data ==3){
                            layer.open({
                                content: '金额错误'
                                ,skin: 'msg'
                                ,time: 3//2秒后自动关闭
                            });
                        }else if(data ==4){
                            layer.open({
                                content: '余额不足'
                                ,skin: 'msg'
                                ,time: 3//2秒后自动关闭
                            });
                        }else if(data ==5){
                            layer.open({
                                content: '至尊会员不可再升级'
                                ,skin: 'msg'
                                ,time: 3//2秒后自动关闭
                            });
                        }else if(data ==6){
                            layer.open({
                                content: '升级类型应高于当前类型'
                                ,skin: 'msg'
                                ,time: 3//2秒后自动关闭
                            });
                        }
                        console.log(data)
                    },
                    fail: function (err, status) {
                        console.log(err)
                    }
                })
            });

            $(".verify_btn").click(function(){
                var str;
                str = $("#num").val();
                $.ajax({
                    url: '/index.php/Home/User/isquan',
                    type: 'get',
                    data: {num:str} ,
                    dataType: 'json',
                    timeout: 1000,
                    success: function (data) {
                        if(data == 1){
                            layer.open({
                                content: '券可使用'
                                ,skin: 'msg'
                                ,time: 3 //2秒后自动关闭
                            });
                        }else if(data ==2){
                            layer.open({
                                content: '券已经失效'
                                ,skin: 'msg'
                                ,time: 3//2秒后自动关闭
                            });
                        }else if(data ==0){
                            layer.open({
                                content: '券不可使用'
                                ,skin: 'msg'
                                ,time: 3//2秒后自动关闭
                            });
                        }
                        console.log(data)
                    },
                    fail: function (err) {
                        console.log(err)
                    }
                })
            });
        });

        function alertV(){ window.location.reload(); }
	</script>
</body>
</html>