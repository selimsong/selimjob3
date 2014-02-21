<?php
$shirt   =1;
//$tfile = './jiang/t.txt';
$randA = rand(1, 400);
$rate = 3;
if($randA> 21 && $randA<40){
for($i=1; $i<=5; $i++){
	$file = './jiang/'.$i."shui.txt";
	if(file_exists($file)){
	  $rate = 1;
	  break;
	}
}
}
//if(51<$randA && $randA<54){
//if(file_exists($tfile)){
//  $rate = 2;
//}
//}

