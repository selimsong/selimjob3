<?php
include_once('config.php');

$rate = rand(1,4);
switch ($rate) {
    case 1:
        $img_array = array('topImg' => 'top.png', 'bottomImg' => 'bottom_win01.png', 'key' => $win1_key);
        break;
    case 2:
        $img_array = array('topImg' => 'top.png', 'bottomImg' => 'bottom_win02.png', 'key' => $win2_key);
        break;
	default:
       $img_array = array('topImg' => 'top.png', 'bottomImg' => 'bottom.png', 'key' => $key);
	   break;
}

echo json_encode($img_array);