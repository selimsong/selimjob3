<?php

$shuibei = array('30'=>10, '31'=>11, '01'=>7, '02'=>7);
$date = date('d');

echo $shuibei[$date];
for($i=1; $i<=$shuibei[$date]; $i++){
$file = './jiang/'.$i."shui.txt";
touch($file);
chmod($file, 0777);
}

touch('./jiang/t.txt');