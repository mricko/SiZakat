<?php

//  Include PHPExcel_IOFactory
include './application/libraries/PHPExcel/IOFactory.php';

/**
 * Opens a excel file for reading and 
 * displays data in json format
 *
 * @param [string] $fileName
 * @return void
 */
function openFile($fileName = null) {
    //$dirLocation = './assets/master/'; 
    $dirLocation ='./assets/master/';

    //check for empty filename
    if(!@$fileName){
        die("Filename is empty or Invalid");
    }

    $inputFileName = $dirLocation . $fileName;
    
    //  Read your Excel workbook
    try {
        $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($inputFileName);
    } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
    }
    
    //  Get worksheet dimensions
    $sheet = $objPHPExcel->getSheet(0); 
    $highestRow = $sheet->getHighestDataRow(); 
    $highestColumn = $sheet->getHighestDataColumn();
    

    //  Generate json key
    $keys = $sheet->rangeToArray('A1' . ':' . $highestColumn . '1', NULL, TRUE, FALSE)[0];

    $rowData = [];

    //  Loop through each row of the worksheet in turn
    for ($row = 2; $row <= $highestRow; $row++){ 
        
        //  Read a row of data into an array
        $singleRow =  $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
        NULL,
        TRUE,
        FALSE)[0];

        // Check for multiple values in a column
        $singleRow = handleColumnMultipleValues($singleRow);

        array_push($rowData, $singleRow);
    }

   $excelData = [
       'keys' => $keys,
       'rows' => $rowData
   ];


   return $excelData;

}

?>