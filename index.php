<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <style>
        html, body { margin:0; padding:0; }
        img { margin:0; }
        #container { position:relative; width:100%; }
        #scratchwrapper { position:absolute; top:0; left:0; width:72%; }
        #scratchpad { position:relative; margin:97.8% 0 0 11%; width:60%; }
        #scratchpad img { position:absolute; width:100%; }
        .btnwrapper { position:absolute; top:0; left:0; }
        #detailwrapper { width:100%; }
        #userwrapper { width:40%; }
        #winwrapper { width:76%; }
        .btnwrapper a { display:block; }
        .btnwrapper a img { width:100%; }
        #detail { margin:131% 0 0 76%; width:22%; }
        #user { margin:468% 0 0 40%; width:70%; }
        #win { margin:246% 0 0 72%; width:40%; }
        
        #handwrapper { position:absolute; top:0; left:0; width:12%; }
        #handwrapper img { margin:520% 0 0 10%; width:120%; }
        #afterscratchwrapper { width:40%; }
        #afterscratch { margin:270% 0 0 35%; width:80%; }
    </style>
</head>
<script type="text/javascript">
<?php
include_once('config.php');
$lost = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
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
for($i=1; $i<-5; $i++){
$img_array[] = array('bottomImg' => 'lost'.$lost[$i].'.png', 'key' => $key);
}
echo 'var imgId  =new Array(3);';
echo 'var imgKey =new Array(3);';
foreach($img_array as $k => $value){
   echo 'imgId['.$k.']="'.$value['bottomImg'].'";';
   echo 'imgKey['.$k.']="'.$value['key'].'";';
}
?>
</script>
<body data-role="page">
    <div id="container">
        <img style="width:100%;" src="./images/bg.jpg" />
        
        <div class="btnwrapper" id="detailwrapper"><a id="detail" class="btn" href="#"><img src="detail.png" alt="更多详情" /></a></div>
        <div class="btnwrapper" id="winwrapper"><a id="win" class="btn" href="#"><img src="win.png" alt="中奖名单" /></a></div>
        <div class="btnwrapper" id="userwrapper"><a id="user" class="btn" href="#"><img src="user.png" alt="个人中心" /></a></div>
        <div id="scratchwrapper">
            <div id="scratchpad">
                <img style="visibility:hidden;" src="./img/<?php echo $img_array[0]['bottomImg'];  ?>" />
            </div>
        </div>
        
        <div class="btnwrapper" id="afterscratchwrapper">
            <!-- 再刮一次或者完善个人资料 -->
            <a id="afterscratch" class="btn" style="display:none;" href="#"><img src="tip01.png" alt="再刮一次" /></a>
        </div>
        <div id="handwrapper"><img src="hand.png" /></div>
    </div>
    
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="jquery.mobile.js"></script>
    <script type="text/javascript" src="wScratchPad.js"></script>
    <script>
    $(function(){
		var vType = 'run';
		var count = 0;
        var scratchOverlay = $('#scratchpad img');
        var sp = $("#scratchpad").wScratchPad({
		    width  : scratchOverlay.width(),
	    	height : scratchOverlay.height(),
	    	image: 'lost1.png',
		    image2 : 'top.png',
		    realtimePercent: true,
            scratchMove: function(e, percent) {
                if (percent > 40) {
			        if('lost' == imgKey[count]){  
                        this.clear();
                        $('#afterscratch').show();
					}else{
					
					}
					
                }
            },
        });
        
        $('#afterscratch').click(function(e){
			++count;	
			$(this).hide();
            sp.wScratchPad('image', './img/'+ imgId[count]);
            sp.wScratchPad('reset');
            return false;
        });
    });
    </script>
</body>
</html>