<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');


/** PHPExcel_IOFactory */
require_once '../Classes/PHPExcel/IOFactory.php';

$objReader = PHPExcel_IOFactory::createReader('Excel5');
$objPHPExcel = $objReader->load("win.xls");


$con = mysql_connect("localhost","root","blabla1234");
mysql_select_db("scra", $con);
$result = mysql_query("SELECT * FROM users order by createtime desc");

$user = array();
while($row = mysql_fetch_array($result))
{
$user[] = $row;
}
mysql_close($con);


$objPHPExcel->getActiveSheet()->setCellValue('D1', PHPExcel_Shared_Date::PHPToExcel(time()));

$baseRow = 5;
foreach($data as $r => $dataRow) {
	$row = $baseRow + $r;
	$objPHPExcel->getActiveSheet()->insertNewRowBefore($row,1);

	$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)
	                              ->setCellValue('B'.$row, $value['name'])
	                              ->setCellValue('C'.$row, $value['name'])
	                              ->setCellValue('D'.$row, $value['phone'])
	                              ->setCellValue('E'.$row, $value['email']);
}

$objPHPExcel->getActiveSheet()->removeRow($baseRow-1,1);


$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('test.xls');

