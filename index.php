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
<script type="text/javascript">
<?php
include_once('config.php');
$lost = array(1, 2, 3, 4);
$win  = array(1, 2);
shuffle($lost);
$rate = rand(3,4);
switch ($rate) {
    case 1:
        $img_array[] = array('bottomImg' => 'win'.$win[0].'.png', 'key' => $win1_key);
        break;
    case 2:
        $img_array[] = array('bottomImg' => 'win'.$win[1].'.png', 'key' => $win2_key);
        break;
	default:
       $img_array[] = array('bottomImg' => 'lost'.$lost[0].'.png', 'key' => $key);
	   break;
}
$img_array[] = array('bottomImg' => 'lost'.$lost[1].'.png', 'key' => $key);
$img_array[] = array('bottomImg' => 'lost'.$lost[2].'.png', 'key' => $key);
echo 'var imgId  =new Array(3);';
echo 'var imgKey =new Array(3);';
foreach($img_array as $k => $value){
   echo 'imgId['.$k.']="'.$value['bottomImg'].'";';
   echo 'imgKey['.$k.']="'.$value['key'].'";';
}
?>
</script>
<div id="pagewrap">
	<div id="content">
		<img  name="bg" src="./images/bg.jpg"  />
		<div class="gua_area" id="wScratchPad" ></div>
        <a href="javascript:reset_to();"><img id="try_again" class="tip" src="./images/tip01.png" ></a>
        <img id="lost_tip" class="tip" src="./img/t<?php echo $img_array[0]['bottomImg'];  ?>" >
        <img id="bottom" class="tipinfo" src="./img/tlost1.png" >
        <img id="myhand" class="hand" src="./images/hand.png" >
        <a href="#"><img id="update_info"  class="tip" src="./images/tip02.png" ></a>
        <script type="text/javascript" src="./js/jquery.min.js?v=1"></script>
        <script  src="./js/main.js?v=5"></script>
        <script type="text/javascript">
		var vType = 'run';
		var count = 0;
		 //var img=document.getElementById("lost_tip");
		 //img.src = './img/t'+ imgId[count];
        function clear() {
		  //sp.wScratchPad('clear');
		  if('lost' == imgKey[count]){
			//if('run' == vType){
				 var img=document.getElementById("lost_tip");
				 img.src = './img/t'+ imgId[count];
				 var c=document.getElementById("canvas");
				 var ctx=c.getContext("2d");
				 console.log(imgId[count]);
				 ctx.drawImage(img,0, 0);
				  $("#try_again").show();
				   ++count;
				   vType = 'stop';
			 //}
			 
		  }else if('undefined' != typeof imgKey[count]  && 'lost' != imgKey[count]){
			   //console.log(imgKey[count]);
		     $("#update_info").show();
		  }

		}
		function reset_to() {
          vType = 'run';
		  $("#try_again").hide();
		  $("#lost_tip").hide();
		  var img=document.getElementById("lost_tip");
		  img.src = './img/t'+ imgId[count];
		  var c=document.getElementById("canvas");
		  var ctx=c.getContext("2d");
		  console.log(imgId[count]);
		  ctx.drawImage(img,0, 0);
		  sp.wScratchPad('image', './img/'+ imgId[count]);
		  sp.wScratchPad('image2', './images/top.png');
		  sp.wScratchPad('reset');
       
		}
		var sp = $("#wScratchPad").wScratchPad({
			width           : 209,             
			height          : 278, 
			image           : './img/' + imgId[0],
			image2          : './images/top.png',
			scratchUp: function(e, percent) {
				  if(percent > 55)
				   clear();
			}
		});
        </script>
        <div class="detail" ><a href="detail.html"><img  name="detail"  src="./images/detail.png" /></a></div>
        <div class="user" ><a href="center.php"><img  name="user"  src="./images/user.png" /></a></div>
        <div class="win" ><a href="center.php#winline"><img  name="win"  src="./images/win.png" /></a></div>
	</div>
</div>
</body>
</html>