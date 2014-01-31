<?php
header("Content-type: text/html; charset=utf-8");
$con = mysql_connect("localhost","root","blabla1234");
mysql_select_db("scra", $con);

$win1_key = base64_encode('wia'.date('l'));
$win2_key = base64_encode('wib'.date('l'));



$result = mysql_query("SELECT * FROM users");

while($row = mysql_fetch_array($result))
 {
  $winType =  $row['wintype'];
  $dtime = $row['createtime'];
  $d_a  = 'wia'.date('l', $dtime);
  $d_b  = 'wib'.date('l', $dtime);
  if(md5($d_a) == $winType){
      var_dump($row);
      var_dump($row['wintype']);
	  echo 'a';
   }
    
   if(md5($d_b) == $winType){
      var_dump($row['id']);
      var_dump($row['wintype']);
	  echo 'b';
   }

    echo "<br /><br /><br />";
  }

mysql_close($con);
