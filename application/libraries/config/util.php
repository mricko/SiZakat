<?php
/**---------------------------------------------------------------------------------
 * Info:    Useful utility functions
 * 
 * Author:  Manoj Selvin <manojselvin@gmail.com>
 * 
 *--------------------------------------------------------------------------------- */

 /**
 * Displays the response in required format
 *
 * @param [type] $status
 * @param [type] $msg
 * @param array $responseData
 * @return void
 */
function displayResponse($status, $msg = null, $responseData = []) {
    //Setting response header
    header('Content-Type: application/json');

    // Building response in required format
    $response = [
        'status' => $status,
        'msg' => $msg,
        'response_data' => $responseData
    ];

    echo json_encode($response);
}

/**
 * Generates array for each rows
 *  using key values format using excel header
 *
 * @param array $keys
 * @param array $rows
 * @return array
 */
function generateKeyValuePairs($keys = [], $rows = []){
    
        $responseData = [];
    
        for($i = 0; $i < count($rows); $i++){
            for($j = 0; $j < count($keys); $j++){
                $responseData[$i][$keys[$j]] = $rows[$i][$j];
            }
        }
    
        return $responseData;
    }


/**
 * Converts string to array based on delimeter passed
 *
 * @param array $string
 * @param array $delimiter
 * @return array/string
 */
function convertStringToArray($string ,$delimiter = ','){

    //Check if the value is string
    if(gettype($string) != 'string' || strpos($string, $delimiter) === false){
        return $string;
    }

    $array = explode($delimiter, $string);

    return $array;
}
    

/**
 * Converts a excel column's multiple values to array
 *
 * @param array $array
 * @return array
 */
function handleColumnMultipleValues($array = []){
    $convertedData = [];

    for($i = 0; $i < count($array); $i++){
        $data = convertStringToArray($array[$i]);
        array_push($convertedData, $data);
    }

    return $convertedData;

}

?>