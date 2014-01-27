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
        <a href="javascript:reset_to();"><img id="try_again" class="tip" src="./images/tip01.png" ></a>
        <img id="bg" class="tip" src="./images/bottom_b.png" >
        <img id="bottom" class="tipinfo" src="./images/bottom_b.png" >
        <a href="#"><img id="update_info"  class="tip" src="./images/tip02.png" ></a>
        <script type="text/javascript" src="./js/jquery.min.js"></script>
        <script  src="./js/main.js?v=1"></script>
        <script type="text/javascript">
		var type = 'lost';
        function clear() {
		  //sp.wScratchPad('clear');
		  if('lost' == type){
			 var c=document.getElementById("canvas");
			 var ctx=c.getContext("2d");
			 var img=document.getElementById("bg");
			 ctx.drawImage(img,0, 0);
			 //$("#canvas").css({backgroundImage: "url('./images/bottom_b.png')"});
			 //$("#canvas").css({background: "none"});
			// $("#bottom").show();
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
				  if(percent > 47)
				   clear();
			}
		});
        </script>
        <div class="detail" ><a href="http://www.baidu.com"><img  name="detail"  src="./images/detail.png" /></a></div>
        <div class="user" ><img  name="user"  src="./images/user.png" /></div>
        <div class="win" ><img  name="win"  src="./images/win.png" /></div>
	</div>
</div>
</body>
</html>