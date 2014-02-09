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
$result = mysql_query("SELECT * FROM users where wintype !=1 and wintype !=2");
$user = array();
while($row = mysql_fetch_array($result))
{
$user[] = $row;
}
mysql_close($con);

$objPHPExcel->getActiveSheet()->setCellValue('D1', PHPExcel_Shared_Date::PHPToExcel(time()));
$baseRow = 5;
foreach($user as $r => $dataRow) {
	$winT= null;
	$type = substr(base64_decode($dataRow['wintype']), 0,3);
	if('wia' == $type){
		$winT ="水杯";
	}elseif ('wib' == $type){
		$winT ='T';
	}
	$row = $baseRow + $r;
	$objPHPExcel->getActiveSheet()->insertNewRowBefore($row,1);

	$objPHPExcel->getActiveSheet()->getStyle('A')->getFill()->getStartColor()->setRGB('FFFF00'); 

	
	
	
	/**
	                              ->getStyle('B')->getFont()->getColor()->applyFromArray(array('rgb' => 'red'))
	                              ->getStyle('C')->getFont()->getColor()->applyFromArray(array('rgb' => 'red'))
	                              ->getStyle('D')->getFont()->getColor()->applyFromArray(array('rgb' => 'red'))
	                              ->getStyle('E')->getFont()->getColor()->applyFromArray(array('rgb' => 'red'))
	                              ->getStyle('F')->getFont()->getColor()->applyFromArray(array('rgb' => 'red'))
	                              ->getStyle('G')->getFont()->getColor()->applyFromArray(array('rgb' => 'red'))
	                              ->getStyle('H')->getFont()->getColor()->applyFromArray(array('rgb' => 'red'));
	**/
	$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $r+1)
								  ->setCellValue('B'.$row, $dataRow['name'])
								  ->setCellValue('C'.$row, $winT)
								  ->setCellValue('D'.$row, $dataRow['phone'])
								  ->setCellValue('E'.$row, $dataRow['email'])
								  ->setCellValue('F'.$row, $dataRow['address'])
								  ->setCellValue('G'.$row, date("Y-m-d H:i:s",$dataRow['createtime']))
								  ->setCellValue('H'.$row, $dataRow['ipaddress']);
	


}

$objPHPExcel->getActiveSheet()->removeRow($baseRow-1,1);


$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('test.xls');

