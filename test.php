<?php
$shuibei = array('30'=>10, '31'=>11, '01'=>1, '02'=>7);
$shirt   =1;
$tfile = './jiang/t.txt';
$date = date('d');
$randA = rand(1, 80);
$rate = 3;

for($i=1; $i<=$shuibei[$date]; $i++){
	$file = './jiang/'.$i."shui.txt";
	if(file_exists($file)){
	  $rate = 1;
	  //unlink($file);
	  break;
	}
}

echo $rate;

