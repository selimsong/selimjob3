<?php
header("Content-type: text/html; charset=utf-8");

$con = mysql_connect("localhost","root","blabla1234");
mysql_select_db("scra", $con);

$result = mysql_query("SELECT * FROM users");

while($row = mysql_fetch_array($result))
  {
   echo '<p class="list_jipiao"><em class="praiseNo01 dat-UserName">'.mysubstr($row['name'],0,2).'*</em><em  class="praiseNo02 dat-Phone">'.substr($row['phone'],0,3).'***'.substr($row['phone'],-5).'</em></p>';

   var_dump($row);
   echo "<br />";
  }

mysql_close($con);


function mysubstr($str, $start, $len) {
$tmpstr = "";
$strlen = $start + $len;
for($i = 0; $i < $strlen; $i++) {
if(ord(substr($str, $i, 1)) > 0xa0) {
$tmpstr .= substr($str, $i, 2);
$i++;
} else
$tmpstr .= substr($str, $i, 1);
}
return $tmpstr;
}

