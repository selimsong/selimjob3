<?php
header("Content-type: text/html; charset=utf-8");
$con = mysql_connect("localhost","root","blabla1234");
mysql_select_db("scra", $con);

$result = mysql_query("SELECT * FROM users");

while($row = mysql_fetch_array($result))
  {
   var_dump($row);
  echo "<br />";
  }

mysql_close($con);
