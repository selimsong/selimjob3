<?php
$shuibei = array('02'=>7, '03'=>7, '04'=>7, '05'=>7, '06' => 7, '07'=>7, '08'=>7, '09'=>7);
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

