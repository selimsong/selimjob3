<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>统一冰红茶，刮起红运疯</title>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link rel="Stylesheet" type="text/css" href="./css/center.css?v=2" />
<script type="text/javascript" src="./js/jquery.min.js?v=1"></script>
    <script src="./js/marquee.js" type="text/javascript"></script>

<style type="text/css">
.marquee-vert {overflow: hidden; height:60px; }
.pointer{ float:left;}
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
<p class="list_jipiao"><em class="praiseNo01 dat-UserName">张*</em><em  class="praiseNo02 dat-Phone">188***01582</em></p>
<p class="list_jipiao"><em class="praiseNo01 dat-UserName">宋*</em><em  class="praiseNo02 dat-Phone">159***59466</em></p>
<p class="list_jipiao"><em class="praiseNo01 dat-UserName">黄*</em><em  class="praiseNo02 dat-Phone">187***91066</em></p>
<p class="list_jipiao"><em class="praiseNo01 dat-UserName">肖*</em><em  class="praiseNo02 dat-Phone">153***46560</em></p>
<p class="list_jipiao"><em class="praiseNo01 dat-UserName">洪*</em><em  class="praiseNo02 dat-Phone">156***42130</em></p>
                    </div>
                    
                    <div style="position: absolute;left:40%;height: 160px;" class="feiji">
<p class="list_jipiao"><em class="praiseNo01 dat-UserName">张*</em><em  class="praiseNo02 dat-Phone">158***99010</em></p>
<p class="list_jipiao"><em class="praiseNo01 dat-UserName">陈*</em><em  class="praiseNo02 dat-Phone">132***60938</em></p>
<p class="list_jipiao"><em class="praiseNo01 dat-UserName">钱*</em><em  class="praiseNo02 dat-Phone">130***39518</em></p>
<p class="list_jipiao"><em class="praiseNo01 dat-UserName">俞*</em><em  class="praiseNo02 dat-Phone">138***40619</em></p>
<p class="list_jipiao"><em class="praiseNo01 dat-UserName">赵*</em><em  class="praiseNo02 dat-Phone">150***02691</em></p>
                    </div>

                </div>
            </div>
       </div>
       <div style="clear:both"></div>
      <div class="luck_name_box2">
        <div class="list01">
                <h3>艾薇儿潮酷水杯获得者：</h3>
                  <div style="overflow:hidden;min-height:160px;position: relative; >
                    <div style="position: absolute;left:0%;height: 160px;" class="shuibei demo" >
<marquee behavior="scroll" direction="up" scrollamount="2" height="100" width="150"><?php  include_once('./template/left.htm'); ?></marquee>
<marquee behavior="scroll" direction="up" scrollamount="2" height="100" width="145"><?php  include_once('./template/right.htm'); ?></marquee>
                    </div>    
                </div>
            </div>
       </div>
	</div>
</div>

<script>
var key = '<?php  echo $k; ?>';
var uid = '<?php  echo $_SESSION['uid']; ?>';
var say = 'work';
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
	if('work' != say){
	   alert("您的个人信息已经提交成功了！");
	   return false;
	}else{
	   $.post( "data.php", { name: $(".name").val(), phone: $(".tel").val(), email: $(".email").val(), address: $(".address").val(), wkey: key, uid: uid  })
		 .done(function( data ) {
			say = 'unwork';
			   alert("您的个人信息已经提交成功了");
	   });
	}
});
</script>
    <script type="text/javascript">
    <!--
    $(function () {
        $('div.demo marquee').marquee('pointer').mouseover(function () {
            $(this).trigger('stop');
        }).mouseout(function () {
            $(this).trigger('start');
        }).mousemove(function (event) {
            if ($(this).data('drag') == true) {
                this.scrollLeft = $(this).data('scrollX') + ($(this).data('x') - event.clientX);
            }
        }).mousedown(function (event) {
            $(this).data('drag', true).data('x', event.clientX).data('scrollX', this.scrollLeft);
        }).mouseup(function () {
            $(this).data('drag', false);
        });
    });
    //-->
    </script>
</body>
</html>