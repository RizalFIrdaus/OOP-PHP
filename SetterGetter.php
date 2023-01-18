<?php

require_once "Bank.php";

$bank = new Bank("Rizal", 54418907, 500000000);
$bank->setNama("Esan");
$bank->GetNama();
$bank->getNorek();
$bank->getSaldo();
