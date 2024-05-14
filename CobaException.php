<?php

require_once "exception/ValidationException.php";
require_once "helper/Validation.php";
require_once "data/LoginRequest.php";

use Data\LoginRequest;
use exception\ValidationException;

$loginRequest = new LoginRequest();
//$loginRequest->username = "budhi";
//$loginRequest->password = "12345";

//validateLoginRequest($loginRequest);
//echo "VALID " .PHP_EOL;

try{
    validateLoginRequest($loginRequest);
} catch (ValidationException $exception){
    echo "Validation Error:  {$exception->getMessage()} ";
    var_dump($exception->getTrace()); // debug Error result array[]
    echo $exception->getTraceAsString() . PHP_EOL; // debug Error as string
} catch (Exception $exception){
    echo "Exception Error:  {$exception->getMessage()} ";
    var_dump($exception->getTrace()); // debug Error result array[]
    echo $exception->getTraceAsString() . PHP_EOL; // debug Error as string
} finally {
    echo "Error gak Error Tetap Dipanggil" . PHP_EOL;
}


