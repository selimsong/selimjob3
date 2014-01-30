<?php
//include_once("validate.php");
$post_data = $GLOBALS["HTTP_RAW_POST_DATA"];
$xml       = simplexml_load_string($post_data);
$developerId  = $xml->ToUserName;
$sendUserId   = $xml->FromUserName;
$msgType      = $xml->MsgType;
$msgId        = $xml->MsgId;
//subscribe event
//if ($msgType == 'event') {
	//if ($xml->Event == 'subscribe') {
	     //replyDoubleTextAndImg($sendUserId, $developerId);
		 replyText($sendUserId, $developerId);
	//}
	//exit();
//}



function replyText($toUserName, $fromUserName){

      $textTpl = "<xml>
					<ToUserName><![CDATA[%s]]></ToUserName>
					<FromUserName><![CDATA[%s]]></FromUserName>
					<CreateTime>%s</CreateTime>
					<MsgType><![CDATA[text]]></MsgType>
					<Content><![CDATA[%s]]></Content>
					</Articles>
               </xml>";			
	$description = '<a href="http://115.29.49.54/scratch/index.php?uid='.$toUserName.'">点击链接即刻开始!</a>';
	$resultStr = sprintf($textTpl, $toUserName, $fromUserName, time(), $description);
  
	echo $resultStr;
}


function replyDoubleTextAndImg($toUserName, $fromUserName){

      $textTpl = "<xml>
	                <ToUserName><![CDATA[%s]]></ToUserName>
	                <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[news]]></MsgType>
					<ArticleCount>2</ArticleCount>
                    <Articles>
					<item>
					<Title><![CDATA[新年来袭，#刮起红运疯#！输入【刮】即刻获取刮刮卡！]]></Title> 
					<Description><![CDATA[新年来袭，#刮起红运疯#！输入【刮】即刻获取刮刮卡！]]></Description>
					<PicUrl><![CDATA[http://115.29.49.54/eventimg/sc.jpg]]></PicUrl>
					<Url><![CDATA[http://115.29.49.54/scratch/]]></Url>
					</item>
					<item>
					<Title><![CDATA[还有什么比收到【自制祝福贺卡】更让人感动的么？]]></Title> 
					<Description><![CDATA[还有什么比收到【自制祝福贺卡】更让人感动的么？]]></Description>
					<PicUrl><![CDATA[http://115.29.49.54/eventimg/zu.jpg]]></PicUrl>
					<Url><![CDATA[http://115.29.49.54/scratch/]]></Url>
					</item>
					</Articles>
               </xml>";			
	$resultStr = sprintf($textTpl, $toUserName, $fromUserName, time());
  
	echo $resultStr;
}
