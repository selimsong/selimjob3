<?php
header("Content-type: text/html; charset=utf-8");
$con = mysql_connect("localhost","root","blabla1234");
mysql_select_db("scra", $con);

$result = mysql_query("SELECT * FROM users");

while($row = mysql_fetch_array($result))
  {
   echo '<p class="list_jipiao"><em class="praiseNo01 dat-UserName">'.substr($row['name'],0,2).'*</em><em  class="praiseNo02 dat-Phone">'.substr($row['phone'],0,3).'***'.substr($row['phone'],-1,5).'</em></p>';

   var_dump($row);
   echo "<br />";
  }

mysql_close($con);

