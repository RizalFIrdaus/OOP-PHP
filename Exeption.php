<?php

require_once "LoginRequest.php";
require_once "Validation.php";
require_once "ValidationExeption.php";


$login = new LoginRequest();
$login->username = "admin";
$login->password = "secret";

validateLoginRequest($login);
