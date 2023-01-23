<?php

require_once "LoginRequest.php";

// TANPA MENGGUNAKAN REFLECTION 
class ValidateUtil
{
    static function validateLogin(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new Exception("Username is null!", 400);
        } else if (!isset($request->password)) {
            throw new Exception("Password is null", 400);
        }
    }
    // Menggunakan Reflection

    static function reflectionValidate($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new Exception("$property->name is not set", 400);
            } else if (is_null($property->getValue($request))) {
                throw new Exception("$property->name is null");
            }
        }
    }
}
