<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>刮奖</title>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<link rel="Stylesheet" type="text/css" href="./css/center.css?v=2" />
<script type="text/javascript" src="./js/jquery.min.js?v=1"></script>
<style type="text/css">
		.marquee-vert {
		  overflow: hidden;
		  height:60px;
		}
	</style>
</head>
<?php
session_start();
$k = $_SESSION['win_key'];
if(empty($k)){
$k = 2;
}
?>
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
      <div class="luck_name_box" >
        <div class="list01" >
                <h3>艾薇儿亲笔签名潮T获得者：</h3>
                  <div style="overflow:hidden;min-height:160px;position: relative;   " id="demo">
                    <div style="position: absolute;left:0%;height: 160px;" class="feiji" id="demo1 ">
                            <p class="list_jipiao"><em class="praiseNo01 dat-UserName">徐*</em>
                                <em  class="praiseNo02 dat-Phone">138***37676</em>
                               </p>
                                <p class="list_jipiao"><em class="praiseNo01 dat-UserName">张*</em>
                                <em  class="praiseNo02 dat-Phone">136***53663</em>
                                  </p>
                                <p class="list_jipiao"><em class="praiseNo01 dat-UserName">王*</em>
                                <em  class="praiseNo02 dat-Phone">136***32328</em>
                               </p>
                                                   <p class="list_jipiao"><em class="praiseNo01 dat-UserName">李*</em>
                                <em id="phone1" class="praiseNo02 dat-Phone">136***32328</em>
                               </p>
                    </div>
                    
                    <div style="position: absolute;left:40%;height: 160px;" class="feiji">
                            <p class="list_jipiao"><em class="praiseNo01 dat-UserName">徐*</em>
                                <em id="phone1" class="praiseNo02 dat-Phone">138***37676</em>
                               </p>
                    </div>

                </div>
            </div>
       </div>
       <div style="clear:both"></div>
      <div class="luck_name_box2">
        <div class="list01">
                <h3>艾薇儿潮酷水杯获得者：</h3>
                  <div style="overflow:hidden;min-height:160px;position: relative;   " id="demo">
                    <div style="position: absolute;left:0%;height: 160px;" class="shuibei" id="demo1 ">
                            <p class="list_jipiao"><em class="praiseNo01 dat-UserName">徐*</em>
                                <em  class="praiseNo02 dat-Phone">138***37676</em>
                               </p>
                                <p class="list_jipiao"><em class="praiseNo01 dat-UserName">张*</em>
                                <em  class="praiseNo02 dat-Phone">136***53663</em>
                                  </p>
                                <p class="list_jipiao"><em class="praiseNo01 dat-UserName">王*</em>
                                <em  class="praiseNo02 dat-Phone">136***32328</em>
                               </p>
                               </p>
                    </div>
                    
              

                </div>
            </div>
       </div>
       
       
            
            
        
	</div>
</div>

        
<script>

var key = '<?php  echo $k; ?>';
var uid = '<?php  echo $_SESSION['uid']; ?>';
$(".tijaio02").click(function () {
   if('' == $(".name").val()){
	   alert("请输入您的姓名");
	   return false;
	}
   
    if('' == $(".tel").val()){
	   alert("请输入您的电话号码");
	   return false;
	}
	
	if('' == $(".email").val()){
	   alert("请输入您的Email");
	   return false;
	}
	
		
	if('' == $(".address").val()){
	   alert("请输入您的邮寄地址");
	   return false;
	}
   
   $.post( "data.php", { name: $(".name").val(), phone: $(".tel").val(), email: $(".email").val(), address: $(".address").val(), wkey: key, uid: uid  })
     .done(function( data ) {
           alert("提交信息成功！");
   });
 
   


});
  function goToMarquee(selector) {
            var speed = 50;
            var ele = $(selector);
            var MyMar = "";
           
            
            var h = $(selector).parent().height();
            if (ele.eq(0).height() < h) { return; }
            if (h < ele.eq(0).height()) { h = ele.eq(0).height(); }
            ele.eq(1).css("top", h + "px");
            ele.eq(1).html(ele.eq(0).html());
            
            function Marquee() {
                ele.css({ "top": "-=1px" });  
                var top1 = Math.abs(ele.eq(0).position().top);
                var top2 = Math.abs(ele.eq(1).position().top);
                if (top1 > h) { ele.eq(0).css("top", h + "px");  }
                if (top2 > h) { ele.eq(1).css("top", h + "px"); }
            }
            MyMar = setInterval(function () { Marquee(); }, speed);
            demo.ontouchstart = function () { clearInterval(MyMar) };
            demo.ontouchend = function () { MyMar = setInterval(function () { Marquee(); }, speed); };
        }

	goToMarquee(".shuibei");
</script>


</body>
</html>