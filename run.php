<?php

$shuibei = array(30=>10, 31=>11, 1=>7, 2=>7);
$date = date('d');

echo $shuibei[$date];
for($i=1; $i<=$shuibei[$date]; $i++){
touch('./jiang/'.$i."shui.txt");
}

touch('./jiang/t.txt');