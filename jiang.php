<?php
$shuibei = array(30=>10, 31=>11, 1=>7, 2=>7);
$shirt   =1;
$tfile = './jiang/t.txt';
$date = date('d');
$randA = rand(1, 100);
$rate = 3;
if($randA> 21 && $randA<30 ){
for($i=1; $i<=$shuibei[$date]; $i++){
	$file = './jiang/'.$i."shui.txt";
	if(file_exists($file)){
	  $rate = 1;
	  unlink($file);
	  break;
	}
}
}
if(51<$randA && $randA<54){
if(file_exists($tfile)){
  $rate = 2;
  unlink($tfile);
}
}

