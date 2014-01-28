<?php
//include_once("validate.php");
$post_data = $GLOBALS["HTTP_RAW_POST_DATA"];
$xml       = simplexml_load_string($post_data);
$developerId  = $xml->ToUserName;
$sendUserId   = $xml->FromUserName;
$msgType      = $xml->MsgType;
$msgId        = $xml->MsgId;
//subscribe event
if ($msgType == 'event') {
	if ($xml->Event == 'subscribe') {
			 $description = "新年到了，小伙伴们是不是按捺不住要给大伙儿发祝福呢？最酷莫过于亲手定制一张贺卡，即刻在对话框中上传一张祝福对象的照片（竖版或正方形），获取你为TA私人定制的新年贺卡。";
	        replyTextAndImg($sendUserId, $developerId, '#心意自造#潮卡送到', $description, 'http://115.29.49.54/activity.jpg?v=123', 'http://tongyi.mei94.com/page?v=1234');
	}
	exit();
}
