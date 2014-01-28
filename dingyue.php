<?php
include_once("validate.php");
$post_data = $GLOBALS["HTTP_RAW_POST_DATA"];
$xml       = simplexml_load_string($post_data);
$developerId  = $xml->ToUserName;
$sendUserId   = $xml->FromUserName;
$msgType      = $xml->MsgType;
$msgId        = $xml->MsgId;
//subscribe event
if ($msgType == 'event') {
	if ($xml->Event == 'subscribe') {
	     replyDoubleTextAndImg($toUserName, $fromUserName)
	}
	exit();
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
					<Title><![CDATA[大家好]]></Title> 
					<Description><![CDATA[大家好2描述]]></Description>
					<PicUrl><![CDATA[http://115.29.49.54/eventimg/sc.jpg]]></PicUrl>
					<Url><![CDATA[http://115.29.49.54/scratch/]]></Url>
					</item>
					<item>
					<Title><![CDATA[你好]]></Title> 
					<Description><![CDATA[你好2]]></Description>
					<PicUrl><![CDATA[http://115.29.49.54/eventimg/zu.jpg]]></PicUrl>
					</item>
					</Articles>
               </xml>";			
	$resultStr = sprintf($textTpl, $toUserName, $fromUserName, time());
  }
	echo $resultStr;
}
