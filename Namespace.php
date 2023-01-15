<?php

require_once "Conflict.php";
require_once "FunctionNamespace.php";

use \Data\C1\Conflict as Sum;
use \Data\C2\Conflict as Sub;
use function helper\helper;
use const helper\APPLICATION;

$summary = new Sum(12, 12);
$subtraction = new Sub(12, 12);

echo "Summary : $summary->a + $summary->b = " . $summary->sum() . PHP_EOL;
echo "Subtraction : $subtraction->a - $subtraction->b = " . $subtraction->substraction() . PHP_EOL;
echo APPLICATION . PHP_EOL;
helper();
