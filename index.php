<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>刮奖</title>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link rel="Stylesheet" type="text/css" href="./css/main.css?v=1" />
</head>
<body>
<div id="pagewrap">
	<div id="content">
		<img  name="bg" src="./images/bg.jpg"  />
		<div class="gua_area" id="wScratchPad" ></div>
        <img id="try_again" class="tip" src="./images/tip01.png" >
        <a href="javascript:reset_to();"><img id="bottom" class="tipinfo" src="./images/bottom_b.png" ></a>
        <a href="#"><img id="update_info"  class="tip" src="./images/tip02.png" ></a>
        <script type="text/javascript" src="./js/jquery.min.js"></script>
        <script  src="./js/main.js?v=1"></script>
        <script type="text/javascript">
		var type = 'lost';
        function clear() {
		  //sp.wScratchPad('clear');
		  if('lost' == type){
			 $("#canvas").css({backgroundImage: "url('./images/bottom_bg.png')"});
			 $("#bottom").show();
			  $("#try_again").show();
		  }else{
		     $("#update_info").show();
		  }
		}
		function reset_to() {
		  $.get("imageInfo.php", function( data ) {
		  $("#try_again").hide();
		  $("#bottom").hide();
		  sp.wScratchPad('image', './images/'+ data.bottomImg);
		  sp.wScratchPad('image2', './images/'+ data.topImg);
		  sp.wScratchPad('reset');
		  type = data.key;
			}, "json" );
		}
		var sp = $("#wScratchPad").wScratchPad({
			width           : 209,             
			height          : 316, 
			image           : './images/bottom.png',
			image2           : './images/top.png',
			scratchUp: function(e, percent) {
				  if(percent > 30)
				   clear();
			}
		});
        </script>
        <div class="compain_detail" >
           亲爱的活动，我们要开 
           亲爱的活动，我们要开 
           亲爱的活动，我们要开 
        </div>
        <div class="detail" ><a href="http://www.baidu.com"><img  name="detail"  src="./images/detail.png" /></a></div>
        <div class="user" ><img  name="user"  src="./images/user.png" /></div>
        <div class="win" ><img  name="win"  src="./images/win.png" /></div>
	</div>
</div>
</body>
</html>