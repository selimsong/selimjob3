<?php

$shuibei = array('30'=>10, '31'=>11, '01'=>7, '02'=>7);
$date = date('d');

echo $shuibei[$date];
for($i=1; $i<=$shuibei[$date]; $i++){
touch('./jiang/'.$i."shui.txt");
}

touch('./jiang/t.txt');