<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

require_once '../Classes/PHPExcel.php';
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

$objPHPExcel->getActiveSheet()->setCellValue('E1', PHPExcel_Shared_Date::PHPToExcel(time()));
$baseRow = 5;
foreach($user as $r => $dataRow) {
	$winT= null;
	$type = substr(base64_decode($dataRow['wintype']), 0,3);
	$row = $baseRow + $r;
	$objPHPExcel->getActiveSheet()->insertNewRowBefore($row,1);
	$yStyle = array('fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'startcolor' => array(
					'rgb' => 'ffffff',
			)));
	if('wia' == $type){
		$winT ="水杯";
		$objPHPExcel->getActiveSheet()->getStyle('A'.$row.':H'.$row)->getFill()->setFillType(PHPExcel_Style_Fill::BORDER_THIN);
	}elseif ('wib' == $type){
		$winT ='T';
		$yStyle = array('fill' => array(
				'type' => PHPExcel_Style_Fill::FILL_SOLID,
				'startcolor' => array(
						'rgb' => 'FFDD00',
				)));
	$objPHPExcel->getActiveSheet()->getStyle('A'.$row.':H'.$row)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$row.':H'.$row)->getFill()->getStartColor()->setRGB('FFDD00');
	}
	
	//$objPHPExcel->getActiveSheet()->getStyle('A'.$row.':H'.$row)->applyFromArray($yStyle);
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
//$objWriter->save('test.xls');

// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="2014-ty.xls"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0
$objWriter->save('php://output');
exit;

