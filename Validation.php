<?php

require_once "LoginRequest.php";
require_once "ValidationExeption.php";

function validateLoginRequest(LoginRequest $loginRequest)
{
    if (!isset($loginRequest->username)) {
        throw new ValidationExeption("Username is null", 403);
    } else if (!isset($loginRequest->password)) {
        throw new ValidationExeption("Password is null", 403);
    } else if (trim($loginRequest->username) == "") {
        throw new Exception("Username is blank", 403);
    } else if (trim($loginRequest->password) == "") {
        throw new Exception("Password is blank", 403);
    }
}
