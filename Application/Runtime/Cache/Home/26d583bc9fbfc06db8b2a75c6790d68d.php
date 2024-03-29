<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>注册</title>
  <meta content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width" name="viewport" />
  <style type="text/css" rc="js/aui.js"></style>
  <script type="text/javascript" src="/Public/Home/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="/Public/Home/js/layer/layer.js"></script>
  <link rel="stylesheet" type="text/css" href="/Public/Home/css/aui.min.css">
  <script type="text/javascript" src="/Public/Home/js/aui.js"></script>
  <link rel="stylesheet" href="/Public/Home/css/style.css">
  <style type="text/css">
    .goLogin{float: right;color: #333;}
  </style>
  <script type="text/javascript">
      $(document).ready(function(){
          $("#getTelCode").click(function(){
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
                          alert('成功');
                      }else{
                          alert('不成功');
                      }
                      console.log(data)
                  },
                  fail: function (err) {
                      console.log(err)
                  }
              })
          });
      });
  </script>
</head>
<body>
<!--header 开始-->
<header class="mui-bar mui-bar-nav">
  <a class="mui-icon mui-icon-left-nav mui-pull-left mui-action-back"></a>
  <h1 class="mui-title">注册</h1>
</header>
<!--header 结束-->
<div class="mui-content">
  <div class="page">
    <div class="main">
      <form id="frm_login" method="post" action="">
        <!--<div class="item item-username">-->
          <!--<input class="txt-input txt-username" name="name" type="text" placeholder="账号" value="">-->
        <!--</div>-->
        <div class="item item-username">
          <input class="txt-input txt-username" name="tel" type="number" placeholder="手机"  id="tel">
        </div>
        <div class="item item-username">
          <input class="txt-input txt-username" name="pwd" type="password" placeholder="密码" value="">
        </div>

        <div class="item item-username">
          <input class="txt-input txt-username"  name="pwd11" type="password" placeholder="确认密码" value="">
        </div>
        <div class="item item-username">
          <input class="txt-input txt-username" name="pwd2" type="password" placeholder="支付密码" value="">
        </div>

        <div class="item item-username">
          <input class="txt-input txt-username" name="pwd22" type="password" placeholder="确认支付密码" value="">
        </div>



        <div class="item item-captcha">
          <div class="input-info">
            <input id="validateCode" name="yzm" class="txt-input txt-captcha" type="text" placeholder="手机验证码">
            <b class="input-close" style="display: block;"></b> <button class="captcha-img" id="getTelCodes" type="button">获取验证码 </button> </div>
        </div>

        <div class="ui-btn-wrap"> <button class="ui-btn-lg ui-btn-primary" type="submit">确认注册</button> </div>
        <span class="goLogin">已有账号?<a href="login.html">立即登录</a></span>
      </form>
    </div>

  </div>
</div>
<script type="text/javascript">
    var sendCode=function(id){
        var time=120;
        $(id).attr('disabled', 'true').addClass('sending disabled');
        setInterval(function(){
            time--;
            $(id).html("重新发送("+time+")");
            if(time==0){
                $(id).removeAttr('disabled').removeClass('sending disabled');
                $(id).html("获取验证码");
                time=120;
                clearInterval(config.timer);
            }

        }, 1000);
        return false;
    };

    // 发送短信
    $("#getTelCodes").click(function() {
        var tel=$.trim($("#tel").val());
        var myreg = /^(1\d{10})$/;
        if(tel==""||!myreg.test(tel)){
            layer.open({
                content: '请输入正确的手机号'
                ,skin: 'msg'
                ,time: 2 //2秒后自动关闭
            });
            return false;
        }
        //  1 正确 2 已发送 3 格式不正确 4,已经注册
        $.ajax({
            type: "POST",
            url: "/index.php/Home/Login/sendTel",
            dataType: "json",
            data: {tel:tel},
            success: function(msg){
                if(msg == 1){
                    layer.open({
                        content: '短信发送成功'
                        ,skin: 'msg'
                        ,time: 2 //2秒后自动关闭
                    });
                }else if(msg == 2){
                    layer.open({
                        content: '短信已发送，请等待'
                        ,skin: 'msg'
                        ,time: 2 //2秒后自动关闭
                    });
                }else if(msg == 3){
                    layer.open({
                        content: '手机格式不正确'
                        ,skin: 'msg'
                        ,time: 2 //2秒后自动关闭
                    });
                }else if(msg == 4){
                    layer.open({
                        content: '手机号码已被注册'
                        ,skin: 'msg'
                        ,time: 2 //2秒后自动关闭
                    });
                }
            //    sendCode(this);
            },
            error: function(msg){

            }
        });
    });
</script>

</body>
</html>