<?php

// Reflection biasanya digunakan untuk membuat framework
require_once "LoginRequest.php";
require_once "ValidationUtil.php";

$login = new LoginRequest();
$login->username = null;
$login->password = "awd";

try {
    $validation = ValidateUtil::reflectionValidate($login);
} catch (Exception $exception) {
    echo "Error : " . $exception->getMessage() . PHP_EOL;
}
