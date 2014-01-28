<?php

$con = mysql_connect("localhost","root","blabla1234");
mysql_select_db("scra", $con);

mysql_query("INSERT INTO users (name, phone, email, address, wintype, ipaddress, createdate, createtime) 
VALUES ('".$_POST['name']."', '".$_POST['phone']."', '".$_POST['email']."', '".$_POST['address']."', 1,
2, ".date(d).", ".time().")") or die(mysql_error());

mysql_close($con);
