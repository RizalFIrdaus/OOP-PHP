<?php

require_once "LoginRequest.php";
require_once "Validation.php";
require_once "ValidationExeption.php";



// TRY CATCH = walaupun error tetap dijalankan
try {
    $login = new LoginRequest();
    // $login->username = "admin";
    // $login->password = "123";
    validateLoginRequest($login);
    echo "Valid" . PHP_EOL;
} catch (ValidationExeption | Exception  $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
    // get trace untuk melakukan tracing pada error yang terjadi
    var_dump($exception->getTrace());
} finally {
    echo "Tetap dijalankan walau error" . PHP_EOL;
}
