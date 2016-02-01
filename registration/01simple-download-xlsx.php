<?php
ini_set("display_errors","On");
error_reporting(E_ALL & ~E_DEPRECATED);
include 'vendor/autoload.php';

use App\Phonebook;
use App\Requered;

$phonebook = new Phonebook();
$phonebooks = $phonebook->index();

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Include PHPExcel */

require_once $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'Phonebook'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'phpoffice'.DIRECTORY_SEPARATOR.'phpexcel'.DIRECTORY_SEPARATOR.'Classes'.DIRECTORY_SEPARATOR.'PHPExcel.php';



// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("BITM")
							 ->setLastModifiedBy("BITM")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");


$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Full Name')
            // ->setCellValue('B1', 'Nick Name')
            ->setCellValue('C1', 'Mobile Number')
            ->setCellValue('D1', 'Gender')
            ->setCellValue('E1', 'Home Phone')
            ->setCellValue('F1', 'Work Phone');
$counter = 2;


//Requered::debug($phonebooks);
foreach($phonebooks as $phonebook){
    $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$counter, $phonebook->fname." ".$phonebook->lname)
            // ->setCellValue('B'.$counter, $phonebook->nname)
            ->setCellValue('C'.$counter, $phonebook->mobile)
            ->setCellValue('D'.$counter, $phonebook->gender)
           ->setCellValue('E'.$counter, $phonebook->home_phone)
            ->setCellValue('F'.$counter, $phonebook->work_phone);

    $counter++;
}

        
      
         

//// Miscellaneous glyphs, UTF-8
//$objPHPExcel->setActiveSheetIndex(0)
//            ->setCellValue('A4', 'Miscellaneous glyphs')
//            ->setCellValue('A5', 'éàèùâêîôûëïüÿäöüç');

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Phone Book');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="CodeworierPhoneBook.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
