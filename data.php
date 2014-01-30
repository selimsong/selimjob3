<?php
$con = mysql_connect("localhost","root","blabla1234");
mysql_select_db("scra", $con);
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

mysql_query("INSERT INTO users (name, phone, email, address, uid, wintype, ipaddress, createdate, createtime) 
VALUES ('".$_POST['name']."', '".$_POST['phone']."', '".$_POST['email']."', '".$_POST['address']."', '".$_POST['uid']."', '".$_POST['wkey']."',
'".$ip."', ".date(d).", ".time().")")or die(mysql_error());

mysql_close($con);
