<?php

$shuibei = array('30'=>10, '31'=>11, '01'=>1, '02'=>7, '03'=>7, '04'=>7);
$date = date('d');

echo $shuibei[$date];
for($i=1; $i<=$shuibei[$date]; $i++){
$file = './jiang/'.$i."shui.txt";
touch($file);
chmod($file, 0777);
}

touch('./jiang/t.txt');
chmod('./jiang/t.txt', 0777);