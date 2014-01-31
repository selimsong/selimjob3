<?php
header("Content-type: text/html; charset=utf-8");
$con = mysql_connect("localhost","root","blabla1234");
mysql_select_db("scra", $con);

$win1_key = base64_encode('wia'.date('l'));
$win2_key = base64_encode('wib'.date('l'));



$result = mysql_query("SELECT * FROM users");

while($row = mysql_fetch_array($result))
  {
   var_dump(base64_decode(row['wintype']));
  echo "<br />";
  }

mysql_close($con);
