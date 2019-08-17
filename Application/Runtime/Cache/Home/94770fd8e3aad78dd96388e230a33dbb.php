<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="icon" type="image/png" href="/theme/default/images/favicon.png">
		<link href="/Public/Home/css/amazeui.min.css" rel="stylesheet" type="text/css" />
		<link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css" />
<!-- 		<script src="/Public/Home/css/js/jquery-1.10.2.min.js"></script>
		<script src="/Public/Home/css/js/time.js"></script> -->
	</head>
	<style type="text/css">

.con4{
     width: 100%;
     height: auto;
     overflow: hidden;
     margin: 20px auto;
     color: #FFFFFF;
}
.con4 .btn{
     width: 100%;
     height: 40px;
     line-height: 40px;
     text-align: center;
     background: #d8b49c;
     display: block;
     font-size: 16px;
     border-radius: 5px;
}
.upload{
     float: left;
     position: relative;
}
.upload_pic{
     display: block;
     width: 100%;
     height: 40px;
     position: absolute;
     left: 0;
     top: 0;
     opacity: 0;
     border-radius: 5px;
}
#cvs{
	border: 1px solid #000;
	margin:20px 0 20px 10px;
}
</style>
	<body>
		<header data-am-widget="header" class="am-header am-header-default sq-head ">
			<div class="am-header-left am-header-nav">
				<a href="javascript:history.back()" class="">
					<!-- <i class="am-icon-chevron-left"></i> -->
				</a>
			</div>
			<h1 class="am-header-title">
  	            <a href="#" class="">屏幕在线管理</a>
            </h1>
	    </header>
	    <div style="height: 49px;"></div>
	    <div class="login-logo">
	    	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

				<select name="type" style="width: 90%;margin-bottom: 60px;height: 50px;">
					    <option value="one">单张播放屏幕</option>
					    <option value="fang">多张播放</option>
					<!--    <option value="2">type2</option>-->
				</select>

				<input type="submit" class="login-name" id="upload" style="background: #FF5500;color: #fff;padding: 1rem;border-radius: 5px;border-radius: 5px;" value="提 交 ">
			</form>
	    	<!-- <img src="images/logo.png" /> -->
	    </div>

	   

	<!--     <input type="text" name="mobile" id="mobile" placeholder="请输入用户名/手机号" class="login-name">
	    <input type="password" name="password" id="password" placeholder="请输入密码" class="login-password">
 -->
	<!--     <input type="button" class="login-btn" value="我要登录">
	    <input type="button" class="reg-btn" value="我要注册"> -->
	    <div class="agree">
	    	<!-- <a href="#" class="forget">点击上传，提交照片</a> -->
	    </div>
	</body>

	<script>
//获取上传按钮
var input1 = document.getElementById("upload"); 
 
if(typeof FileReader==='undefined'){ 
     //result.innerHTML = "抱歉，你的浏览器不支持 FileReader"; 
     input1.setAttribute('disabled','disabled'); 
}else{ 
     input1.addEventListener('change',readFile,false); 
     /*input1.addEventListener('change',function (e){
     	console.log(this.files);//上传的文件列表
     },false); */
}
function readFile(){ 
	var file = this.files[0];//获取上传文件列表中第一个文件
	if(!/image\/\w+/.test(file.type)){
	//图片文件的type值为image/png或image/jpg
		alert("文件必须为图片！");
		return false; 
	} 
	// console.log(file);
	var reader = new FileReader();//实例一个文件对象
	reader.readAsDataURL(file);//把上传的文件转换成url
	//当文件读取成功便可以调取上传的接口
	reader.onload = function(e){ 
		// console.log(this.result);//文件路径
		// console.log(e.target.result);//文件路径
		/*var data = e.target.result.split(',');
		var tp = (file.type == 'image/png')? 'png': 'jpg';
		var imgUrl = data[1];//图片的url，去掉(data:image/png;base64,)
		//需要上传到服务器的在这里可以进行ajax请求
		// console.log(imgUrl);
		// 创建一个 Image 对象 
		var image = new Image();
		// 创建一个 Image 对象 
		// image.src = imgUrl;
		image.src = e.target.result;
		image.onload = function(){
			document.body.appendChild(image);
		}*/

		var image = new Image();
		// 设置src属性 
		image.src = e.target.result;
		var max=300;
		// 绑定load事件处理器，加载完成后执行，避免同步问题
		image.onload = function(){ 
			// 获取 canvas DOM 对象 
			var canvas = document.getElementById("cvs"); 
			// 如果高度超标 宽度等比例缩放 *= 
			if(image.height > max) {
				image.width *= max / image.height; 
				image.height = max;
			} 
			// 获取 canvas的 2d 环境对象, 
			var ctx = canvas.getContext("2d"); 
			// canvas清屏 
			ctx.clearRect(0, 0, canvas.width, canvas.height); 
			// 重置canvas宽高
			canvas.width = image.width;
			canvas.height = image.height;
			if (canvas.width>max) {canvas.width = max;}
			// 将图像绘制到canvas上
			 ctx.drawImage(image, 0, 0, image.width, image.height);
			//ctx.drawImage(image, 0, 0, 1200, 900);
			// 注意，此时image没有加入到dom之中
		};  
	}
};
</script>
</html>