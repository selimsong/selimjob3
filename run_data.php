<?php
header("Content-type: text/html; charset=utf-8");

$con = mysql_connect("localhost","root","blabla1234");
mysql_select_db("scra", $con);

$result = mysql_query("SELECT * FROM users order by createtime desc");
echo "获水杯";
$shuibei = array();
$tshirt = array();
while($row = mysql_fetch_array($result))
  {
    $type = substr(base64_decode($row['wintype']), 0,3);
     if('wia' == $type){
        $shuibei[] = array('name'=>utf8Substr($row['name'],0,1), 'phone' => substr($row['phone'],0,3).'***'.substr($row['phone'],-5));      
       }
      if('wib' == $type){
           $tshirt[] = array('name'=>utf8Substr($row['name'],0,1), 'phone' => substr($row['phone'],0,3).'***'.substr($row['phone'],-5));   
       }
}

foreach($shuibei as $value){
  echo '<p class="list_jipiao"><em class="praiseNo01 dat-UserName">'$value['name'].'*</em><em  class="praiseNo02 dat-Phone">'.$value['phone'].'</em></p>';   
}

echo '获T';
echo "<br />br />br />";

foreach($tshirt as $value){
  echo '<p class="list_jipiao"><em class="praiseNo01 dat-UserName">'$value['name'].'*</em><em  class="praiseNo02 dat-Phone">'.$value['phone'].'</em></p>';   
}



mysql_close($con);

function utf8Substr($str, $from, $len)
{
return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$from.'}'.
'((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len.'}).*#s',
'$1',$str);
}
