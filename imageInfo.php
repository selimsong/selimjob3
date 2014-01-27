<?php
include_once('config.php');
$lost = array(1, 2, 3, 4);
$win  = array(1, 2);
shuffle($lost);
$rate = rand(1,4);
switch ($rate) {
    case 1:
        $img_array[] = array('bottomImg' => $win[0], 'key' => $win1_key);
        break;
    case 2:
        $img_array[] = array('bottomImg' => $win[1], 'key' => $win2_key);
        break;
	default:
       $img_array[] = array('bottomImg' => $lost[0], 'key' => $key);
	   break;
}

$img_array[] = array('bottomImg' => $lost[1], 'key' => $key);
$img_array[] = array('bottomImg' => $lost[2], 'key' => $key);

echo json_encode($img_array);