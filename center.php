<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>刮奖</title>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<link rel="Stylesheet" type="text/css" href="./css/center.css?v=1" />
<script type="text/javascript" src="./js/jquery.min.js?v=1"></script>
<script src="//rawgithub.com/aamirafridi/jQuery.Marquee/master/jquery.marquee.min.js?v=1.0" type="text/javascript"></script>
<style type="text/css">
		.marquee-vert {
		  overflow: hidden;
		  height:60px;
		}
	</style>
</head>
<body>
<div id="pagewrap">
	<div id="content">
		<img  name="bg" src="http://mei94.qiniudn.com/center.jpg"  />
		<div class="form_box userinfo">
            <img src="images/form_bj.png" class="form_bj">
            <input type="text" value="" class="name name02 dat-UserName-value">
            <input type="tel" value="" class="tel tel02 dat-Phone-value">
            <input type="text" value="" class="email email02 dat-Email-value">
            <input type="text" value="" class="address address02 dat-Address-value">
        </div>
        <img src="images/tijaio02.png" class="tijaio02">
        <a id="winline" name="winline"> </a>
      <div class="luck_name_box">
        <div class="list01">
                <h3>艾薇儿签名潮T获得者：</h3>
                  <div style="overflow:hidden;min-height:157px;position: relative;   " id="demo">
                    <div style="position: absolute;left:22%;" class="feiji marquee-vert" id="demo1 ">
                            <p class="list_jipiao"><em class="praiseNo01 dat-UserName">徐*</em>
                                <em id="phone1" class="praiseNo02 dat-Phone">138***37676</em>
                               </p>
                                <p class="list_jipiao"><em class="praiseNo01 dat-UserName">张*</em>
                                <em id="phone1" class="praiseNo02 dat-Phone">136***53663</em>
                                  </p>
                                <p class="list_jipiao"><em class="praiseNo01 dat-UserName">王*</em>
                                <em id="phone1" class="praiseNo02 dat-Phone">136***32328</em>
                               </p>
                                                   <p class="list_jipiao"><em class="praiseNo01 dat-UserName">李*</em>
                                <em id="phone1" class="praiseNo02 dat-Phone">136***32328</em>
                               </p>
                    </div>

                </div>
            </div>
       </div>
            
            
            
        
	</div>
</div>

        
<script>

$(".tijaio02").click(function () {
 
   $.post( "data.php", { name: $(".name").val(), phone: $(".tel").val(), email: $(".email").val(), address: $(".address").val() })
     .done(function( data ) {
           alert("提交信息成功！");
   });
 
   


});


$(function(){

	var $mwo = $('.marquee-vert');
	//Direction upward
	$('.marquee-vert').marquee({
		direction: 'up'	
	});

	//toggle
	$('.marquee-vert').hover(function(e){
		$mwo.trigger('pause');
	},function(){
		$mwo.trigger('resume');
	});

});
</script>
</body>
</html>