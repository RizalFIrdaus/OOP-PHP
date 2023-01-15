<?php

require_once "Conflict.php";

$summary = new \Data\C1\Conflict(12, 12);
$subtraction = new \Data\C2\Conflict(12, 12);

echo "Summary : $summary->a + $summary->b = " . $summary->sum() . PHP_EOL;
echo "Subtraction : $subtraction->a - $subtraction->b = " . $subtraction->substraction() . PHP_EOL;
