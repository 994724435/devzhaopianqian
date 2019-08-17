<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>

<link rel="stylesheet" type="text/css" href="/Public/Home/css/reset.css" />
<link rel='stylesheet prefetch' href='/Public/Home/css/slick.css'>
<link rel='stylesheet prefetch' href='/Public/Home/css/slick-theme.css'>
<link rel="stylesheet" href="/Public/Home/css/style1.css">

</head>
<body>
<div class="slide-container">
	<?php if(is_array($res)): foreach($res as $key=>$v): ?><div class="wrapper">
		<div class="clash-card barbarian">
		  <div class="clash-card__image clash-card__image--barbarian">
			<img src="<?php echo ($v["url"]); ?>" alt="barbarian" />
		  </div>

		</div> <!-- end clash-card barbarian-->

	  </div> <!-- end wrapper --><?php endforeach; endif; ?>


  <!--<div class="wrapper">-->
	<!--<div class="clash-card archer" id="two">-->
	  <!--<div class="clash-card__image clash-card__image&#45;&#45;archer">-->
		<!--<img src="/Public/Home/img/5d56d1b7d4be0.JPG" alt="archer"  />-->
	  <!--</div>-->
	<!--</div> &lt;!&ndash; end clash-card archer&ndash;&gt;-->
  <!--</div> &lt;!&ndash; end wrapper &ndash;&gt;-->
 
</div> <!-- end container -->

<script src="/Public/Home/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src='/Public/Home/js/slick.min.js'></script>
<script type="text/javascript">
	(function() {

	  var slideContainer = $('.slide-container');
	  
	  slideContainer.slick({autoplay:true,autoplaySpeed:2000});
	  
	  $('.clash-card__image img').hide();
	  $('.slick-active').find('.clash-card img').fadeIn(200);
	  

	  // On before slide change
	  slideContainer.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
		$('.slick-active').find('.clash-card img').fadeOut(1000);
	  });
	  
	  // On after slide change
	  slideContainer.on('afterChange', function(event, slick, currentSlide) {
		$('.slick-active').find('.clash-card img').fadeIn(200);
	  });
	  

	setTimeout(function(){ window.location.href="http://zhaopian.dev.com/index.php/Home/Index/one";}, <?php echo ($count); ?>000);

	})();
</script>

<div style="text-align:center;clear:both;">
<!-- <script src="/gg_bd_ad_720x90.js" type="text/javascript"></script> -->
<!-- <script src="/follow.js" type="text/javascript"></script> -->
</div>

</body>
</html>