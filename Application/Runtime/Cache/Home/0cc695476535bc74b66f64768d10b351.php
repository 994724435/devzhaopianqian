<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link href="/Public/Home/css/index1.css" rel="stylesheet" />
    <script src="/Public/Home/js/jquery.min.js"></script>

	<style>
body
{
	background-color:#b0c4de;
}
</style>
</head>
<body>
    <div class="zp">

        <table>
            <?php if(is_array($res)): foreach($res as $key=>$v): ?><tr>
                    <?php if(is_array($v)): foreach($v as $key=>$v1): ?><td>
                        <div class="zppic">
                            <img src="<?php echo ($v1["url"]); ?>" />
                        </div>
                    </td><?php endforeach; endif; ?>
                 </tr><?php endforeach; endif; ?>

            <!--<tr>-->
                <!--<td>-->
                    <!--<div class="zppic">-->
                        <!--<img src="images/5d56d16a0cecd.JPG" />-->
                    <!--</div>-->
                <!--</td>-->
                <!--<td>-->
                    <!--<div class="zppic">-->
                        <!--<img src="images/big-3.jpg" />-->
                    <!--</div>-->
                <!--</td>-->

                <!--<td>-->
                    <!--<div class="zppic">-->
                        <!--<img src="images/big-2.jpg" />-->
                    <!--</div>-->
                <!--</td>-->
              <!--</tr>     -->


          


              
           
        </table>
        

        <div class="bigpic" style="display: none;border: 1px solid #dedede;box-shadow: 0px 0px 5px #dedede;">
            <img class="bigimg" src="" />
        </div>
    </div>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
</div>
</body>


<script>
    // var rom = parseInt(10 * Math.random());
    var rom = -1;
    function Showbigimg() {
//        alert(<?php echo ($total); ?> );
        rom=rom+1;
        if((rom+1) == <?php echo ($total); ?>){
            window.location.href="/index.php/Home/Index/fang";
        }
        console.log(rom);
        var imgurl = $(".zppic:eq(" + rom + ")").find("img").attr("src");
        $(".bigimg").attr({ "src": imgurl });

        var bwidth = $(".bigimg").width();
        var bheight = $(".bigimg").height();
        var o = { left: "50%", width: "450px",top: "10px", "margin-left": "-400px" };

        var pic = $(".zppic:eq(" + rom + ")");
        // $(".bigpic").css({ "left": pic.position().left, "top": pic.position().top });
        $(".bigpic").show();

        $(".bigpic").animate(o, 2000, function () {
            setTimeout(function () {
                $(".bigpic").animate({ width: "100px", left: pic.position().left, top: pic.position().top, "margin-left": "0", "margin-top": "0" }, 1000, function () {
                    $(".bigpic").hide();
                    setTimeout(Showbigimg, 1000);
                });
            }, 1500)
        });


    }

//    window.onload = Showbigimg();
        $(function () {

        Showbigimg();
    })
</script>

</html>