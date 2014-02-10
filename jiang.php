<?php
$shuibei = array('10'=>7, '11'=>4, '12'=>4, '13'=>4, '14'=>4, '15'=>4, '16'=>4, '17'=>4);
$shirt   =1;
$tfile = './jiang/t.txt';
$date = date('d');
$randA = rand(1, 400);
$rate = 3;
if($randA> 21 && $randA<30 ){
for($i=1; $i<=$shuibei[$date]; $i++){
	$file = './jiang/'.$i."shui.txt";
	if(file_exists($file)){
	  $rate = 1;
	  //unlink($file);
	  break;
	}
}
}
if(51<$randA && $randA<54){
if(file_exists($tfile)){
  $rate = 2;
  //unlink($tfile);
}
}

